<?php

class User_m extends CI_model
{
	var $details;
	
	//Validates user login
	function validate_user( $username, $password ) 
	{
    // Build a query to retrieve the Admin's details
    // based on the received username and password
		$this->load->database();
		$this->db->from('user_accounts');
		$this->db->where('username', $username);
		$login = $this->db->get()->result();
		if ( is_array($login) && count($login) == 1 ) 
		{
        // Set the users details into the $details property of this class
			$this->details = $login[0];
			if(password_verify($password, $this->details->password))
			{
                // Call set_session to set the user's session vars via CodeIgniter
			    $this->details->active_from = strtotime('now');
			    $this->db->query("Update user_activity set active_from = {$this->details->active_from}, last_activity = {$this->details->active_from} where username = '{$username}';");
			    $this->set_session();
		    	return true;
	    	}
		}
		return false;
	}

//Sets session data of users during login
	function set_session() 
	{
    // session->set_userdata is a CodeIgniter function that
    // stores data in a cookie in the user's browser.
		$this->session->set_userdata( array(
			'isLoggedIn'=>true,
			'type' => 'user',
			'username' => $this->details->username,
			'active_from' => $this->details->active_from
		    )
	    );
	}
	
	//Updates activity details of users in database
	function active($data)
	{
	    $this->load->database();
	    if($this->db->query("Update user_activity set last_activity = {$data['time']}, ip = '{$data['ip']}' where username = '{$this->session->userdata('username')}';"))
	        return true;
	    else
	        return false;
	}
	
	//Checks and returns time difference of user's latest activity from last activity
	function check_diff()
	{
	    $this->load->database();
	    $query = $this->db->query("Select last_activity from user_activity where username = '{$this->session->userdata('username')}';");
	    return $query->result_array()[0];
	}
}
?>