<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');


class Login extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('crud_model');
        $this->load->database();
        /*cache control*/
        $this->output->set_header('Last-Modified: ' . gmdate("D, d M Y H:i:s") . ' GMT');
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');
        ///$this->output->set_header("Expires: Mon, 26 Jul 2015 05:00:00 GMT");
		$this->load->library('session');
    }
   
    //Default function, redirects to logged in user area
    public function index()
    {
        if ($this->session->userdata('admin_login') == 1)
            redirect(base_url() . 'index.php?admin/staff', 'refresh');

        else if ($this->session->userdata('staff_login') == 1){
				$ses_ids=$this->session->userdata('login_user_id');

				$role = $this->db->get_where('staff',array('staff_id'=>$ses_ids))->result_array();
				foreach($role as $rolep):

				$roles_id=$rolep['account_role_id'];
				endforeach;
				/* check Out side state login */								
				if($roles_id==30){
				 redirect(base_url() . 'index.php?outside_childdetail', 'refresh'); 
				}else{
					redirect(base_url() . 'index.php?dashboard', 'refresh');
				}

			}

		 $this->load->view('backend/login');
    }
//check not log user before two months
	function checknot_loguser()
	{
		$this->load->library('email');
		$current = date('Y-m-d');
		$notlogdate = date('Y-m-d', strtotime('-2 months'));
		$check_notlogin = $this->crud_model->check_user($current,$notlogdate);
	   foreach($check_notlogin as $row ){
	      	//print_r($row);
			if($row['email']){
            $this->email->set_newline("\r\n");
            $this->email->from('', '');
            $this->email->to($row['email']);
            $this->email->subject('Test');
            $this->email->message('Test');
            $this->email->send();
            echo $this->email->print_debugger();
	        $this->email->clear();
            $path = $this->config->item('server_root');
			
        }
		
		 /*if($this->email->send())
        {       
            echo 'Your email was sent.';
        }*/

        else
        {
            show_error($this->email->print_debugger());
        }
		
		  
		
      }
		
		
	}
	//Ajax login function
	function ajax_login()
	{
		$response = array();
		//loading the login model
         $this->load->model('login_model');
          
		//Recieving post input of email, password from ajax request
		$user_name		= $_POST["user_name"];
		$password 	= $_POST["password"];
		$response['submitted_data'] = $_POST;

		//Validating login
		$login_status = $this->validate_login( $user_name ,  $password );
		$response['login_status'] = $login_status;
		//updating the login history 
		if($login_status=="success")
		{
		$uid=$this->session->userdata('login_user_id');
		$type=$this->session->userdata('login_type');
		$this->login_model->update_login_history($uid,$type);
		}
		 //end of login history update 
		if ($login_status == 'success') {
			$response['redirect_url'] = $this->session->userdata('last_page');
		}
        
		//Replying ajax request with validation response
		echo json_encode($response);
	}

    //Validating login from ajax request
    function validate_login($user_name	=	'' , $password	 =  '')
    {
		$credential	=	array(	'user_name' => $user_name , 'password' => sha1($password) );
		 // Checking login credential for admin
        $query = $this->db->get_where('admin' , $credential);
		$x=1;
        if ($query->num_rows() > 0) {
              $row = $query->row();
			  $this->session->set_userdata('admin_login', '1');
			  $this->session->set_userdata('login_user_id', $row->admin_id);
			  $this->session->set_userdata('name', $row->name);
			  $this->session->set_userdata('login_type', 'admin');
			  return 'success';
		}
		 // Checking login credential for staff
        $query = $this->db->get_where('staff' , $credential);
        if ($query->num_rows() > 0) {
            $row = $query->row();
			  $this->session->set_userdata('staff_login', '1');
			  $this->session->set_userdata('login_user_id', $row->staff_id);
			  $this->session->set_userdata('name', $row->name);
			  $this->session->set_userdata('login_type', 'staff');
			  return 'success';
		}

		return 'invalid';
    }

    function forgot_password()
    {
    	$this->load->view('backend/forgot_password');
    }

    function ajax_forgot_password()
    {
    	$resp 					= array();
		$email 					= $_POST["email"];
		$reset_account_type		= '';
		//resetting user password here
		$new_password			=	substr( md5( rand(100000000,20000000000) ) , 0,7);
		$new_hashed_password	=	sha1($new_password);

		// Checking credential for admin
        $query = $this->db->get_where('admin' , array('email' => $email));
        if ($query->num_rows() > 0)
        {
        	$reset_account_type		=	'admin';
        	$this->db->where('email' , $email);
        	$this->db->update('admin' , array('password' => $new_hashed_password));
        }
		// Checking credential for staff
        $query = $this->db->get_where('staff' , array('email' => $email));
        if ($query->num_rows() > 0)
        {
        	$reset_account_type		=	'staff';
        	$this->db->where('email' , $email);
        	$this->db->update('staff' , array('password' => $new_hashed_password));
        }
		// send new password to	user email
		$this->email_model->notify_email('password_reset_confirmation' , $reset_account_type , $email , $new_password);

		$resp['submitted_data'] = $_POST;
    }

    function create_new_account()
    {
    	$this->load->view('backend/create_new_account');
    }
    //********+++++ admin panel code  ++++++++++*************
    function ajax_create_new_account()
    {
        $resp = array();

        $data['name']       = $_POST["name"];
        $data['email']      = $_POST["email"];
        $data['password']   = sha1($_POST["password"]);

        $this->db->insert('client_pending', $data);
        $resp['submitted_data'] = $_POST;

        echo json_encode($resp);
    }

    /*******LOGOUT FUNCTION *******/
    function logout()
    {
        $this->session->unset_userdata();
        $this->session->sess_destroy();
        $this->session->set_flashdata('logout_notification', 'logged_out');
        redirect(base_url() , 'refresh');
    }

}
