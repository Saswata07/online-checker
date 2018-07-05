<?php

class Admin_m extends CI_model
{
	var $details;

	function validate_admin( $username, $password ) 
	{
    // Build a query to retrieve the Admin's details
    // based on the received username and password
		$this->load->database();
		$this->db->from('admin_accounts');
		$this->db->where('username', $username);
		$login = $this->db->get()->result();
		if ( is_array($login) && count($login) == 1 ) 
		{
        // Set the users details into the $details property of this class
			$this->details = $login[0];
			if(password_verify($password, $this->details->password))
			{
                // Call set_session to set the user's session vars via CodeIgniter
			    $this->set_session();
		    	return true;
	    	}
		}
		return false;
	}

	function set_session() {
    // session->set_userdata is a CodeIgniter function that
    // stores data in a cookie in the user's browser.
		$this->session->set_userdata( array(
			'isLoggedIn'=>true,
			'type' => 'admin',
			'username' => $this->details->username
		    )
	    );
	}
	
	function change_pass($username, $new_password)
	{
	    $this->load->database();
		$this->db->from('user_accounts');
		$this->db->where('username',$username);
		$login = $this->db->get()->result();
		if ( is_array($login) && count($login) == 1 ) {
			if($new_password && $this->db->query("Update user_accounts set password = '{$new_password}' where username = '{$username}';"))
			    return true;
		}

		return false;
	}
	
	function del_user($username)
	{
	    $this->load->database();
	    if($this->db->delete('user_accounts', array('username' => $username)) && $this->db->delete('user_activity', array('username' => $username)))
	        return true;
	    return true;
	}
	
	function new_user($username, $password)
	{
	    $this->load->database();
	    $data1 = array(
	        'username' => $username,
	        'password' => $password,
	        'added_on' => strtotime('now')
	        );
	   $r1 = $this->db->insert('user_accounts', $data1);
	   $data2 = array(
	       'username' => $username
	       );
	   $r2 = $this->db->insert('user_activity', $data2);
	   if($r1 && $r2)
	    return true; //Success
	   else
	    return false; //Failure
	}
	
	function view_details()
	{
	    $this->load->database();
		$query = $this->db->query("Select username, added_on from user_accounts;");
		return $query->result_array();
	}
	function details_activity()
	{
	    $this->load->database();
	    $query = $this->db->query("Select * from user_activity;");
	    return $query->result_array();
	}
}

?>