<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Status extends CI_Controller {
    //Login page for users 
	public function index()
	{
	    if ($this->session->userdata('isLoggedIn') && $this->session->userdata('type') == 'user')
	        redirect("/status/user_home");
	    else if ($this->session->userdata('isLoggedIn') && $this->session->userdata('type') == 'admin')
	        redirect("/status/dashboard");
	    else
	    {
	        $this->load->library('form_validation');
	        $this->load->view('header_online');
	        $this->load->view('nav_online');
		    $this->load->view('login');
	    }
	}
	
	//User's home page
	public function user_home()
	{
	    if ($this->session->userdata('isLoggedIn') && $this->session->userdata('type') == 'admin') //If already logged in as admin, redirects to admin homepage
	        redirect("/status/dashboard");
	    else if ($this->session->userdata('isLoggedIn') && $this->session->userdata('type') == 'user') //If logged in as user, displays the content of user_home page
	    {
	        $this->load->view('header_online');
	        $this->load->view('nav_online_user');
		    $this->load->view('user_home');
	    }
	    else
	        redirect("/status/index"); //If not logged in, redirects to user login page
	 }
    
    //Admin login page
    public function admin_login()
    {
        $this->load->library('form_validation');
        $this->load->view('header_online');
	    $this->load->view('nav_online');
		$this->load->view('admin_login');
    }
    
    //Admin dashboard page
    public function dashboard()
    {
        if ($this->session->userdata('isLoggedIn') && $this->session->userdata('type') == 'admin') //If logged in admin, displays content of Dashboard 
        {
            $this->load->view('header_online');
    	    $this->load->view('nav_online_admin');
    		$this->load->view('dashboard');
        }
        else
            redirect("/status/admin_login"); //If not logged in as admin, redirects to admin login page
    }
    
    //Admin Edit_user page
    public function edit_user()
    {
        if ($this->session->userdata('isLoggedIn') && $this->session->userdata('type') == 'admin')//If logged in admin, displays content of edit_user page
        {
            $this->load->view('header_online');
    	    $this->load->view('nav_online_admin');
    		$this->load->view('edit_user');
        }
        else
            redirect("/status/admin_login"); //If not logged in as admin, redirects to admin login page
    }
    
    //A function for displaying error message
    public function error_msg()
    {
	    $this->load->view('error_msg');
    }
    
    //Admin login validation and redirection
    public function login_admin() 
	{
    	$this->load->library('form_validation');
	    $this->load->model('admin_m');
         // Grab the username and password from the form POST
    	$id = $this->input->post('username');
    	$pass  = $this->input->post('password');

    //Ensure values exist for email and pass, and validate the user's credentials
    	if( $id && $pass && $this->admin_m->validate_admin($id,$pass)) {
        // If the user is valid, redirect to the main view
    		redirect('/status/dashboard');
	    } else {
         // Otherwise show the login screen with an error message.
	    	redirect('/status/admin_login');
	    }   
    }

    //User login validation and redirection
    public function login_user() 
	{
    	$this->load->library('form_validation');
	    $this->load->model('user_m');
         // Grab the username and password from the form POST
    	$id = $this->input->post('username');
    	$pass  = $this->input->post('password');

    //Ensure values exist for email and pass, and validate the user's credentials
    	if( $id && $pass && $this->user_m->validate_user($id,$pass)) {
        // If the user is valid, redirect to the main view
    		redirect('/status/user_home');
	    } else {
         // Otherwise show the login screen with an error message.
	    	redirect('/status/index');
	    }   
    }
    
    //User & admin logout function
    public function logout() 
    {
		if($this->session->userdata('type') == 'admin')
		{
			$this->session->sess_destroy();
			redirect('/status/admin_login');
		}
		else 
		{
			$this->session->sess_destroy();
			redirect('/status/index');
		}
	}
	
	//Admin's adding new user function
	public function add_user()
	{
	    if ($this->session->userdata('isLoggedIn') && $this->session->userdata('type') == 'admin')
	    {
    	    $this->load->model('admin_m');
            $id = $this->input->post('username');
        	$pass  = $this->input->post('password');
        	$pass = password_hash ($pass, PASSWORD_DEFAULT);
        	if($id && $pass && $this->admin_m->new_user($id,$pass)) 
        	{
        	    $msg['result'] = "New user is successfully created";
        	}
        	else 
        	    $msg['result'] = "Duplicate User ID!";
        	echo json_encode($msg);
	    }
	    else
	        redirect('/status/admin_login');
	}
	
	//Used in edit_user for viewing details of users
	public function user_details()
	{
	    if ($this->session->userdata('isLoggedIn') && $this->session->userdata('type') == 'admin')
	    {
    	    $this->load->model('admin_m');
    	    $data = $this->admin_m->view_details();
    	    echo json_encode($data);
	    }
	    else
	        redirect('/status/admin_login');
	}
	
	//Admin's function for editing users password
	public function update_user()
	{
	    if ($this->session->userdata('isLoggedIn') && $this->session->userdata('type') == 'admin')
	    {
    	    $this->load->model('admin_m');
            $id = $this->input->post('username');
            $new_pass  = $this->input->post('password');
            $new_pass = password_hash ($new_pass, PASSWORD_DEFAULT);
            if($this->admin_m->change_pass($id, $new_pass))
                 $msg['result'] = "User's password is changed.";
        	else 
        	    $msg['result'] = "Please try again.";
        	echo json_encode($msg);
	    }
	    else
	        redirect('/status/admin_login');
	}
	
	//Admin's function for deleting users
	public function delete_user()
	{
	    if ($this->session->userdata('isLoggedIn') && $this->session->userdata('type') == 'admin')
	    {
    	    $this->load->model('admin_m');
            $id = $this->input->post('username');
            if($this->admin_m->del_user($id))
                 $msg['result'] = "User is Removed.";
        	else 
        	    $msg['result'] = "Please try again.";
        	echo json_encode($msg);
	    }
	    else
	        redirect('/status/admin_login');
	}
	
	//Updating activity of user and updates database
    public function active()
    {
        if ($this->session->userdata('isLoggedIn') && $this->session->userdata('type') == 'user')
        {
            $time= strtotime('now');
            $ip = $this->input->ip_address();
            $this->load->model('user_m');
            $data=array('time'=>$time, 'ip'=>$ip);
            $result = $this->user_m->check_diff();
            $time_diff = $time - $result['last_activity'];
            //echo json_encode($result);
            if($time_diff < 15)
                $this->user_m->active($data);
             $data['time_diff'] = $time_diff;
             //echo json_encode($time);
             echo json_encode($data);
        }
        else
            redirect('/status/index');
    }
    
    //Used in Admin dashboard for full details of all user's activity
    public function full_user_activity()
    {
        if ($this->session->userdata('isLoggedIn') && $this->session->userdata('type') == 'admin')
        {
            $this->load->model('admin_m');
            $result["all"] = $this->admin_m->details_activity();
            $result['time_now'] = strtotime('now');
            echo json_encode($result);
        }
	    else
	        redirect('/status/admin_login');
    }
}
?>