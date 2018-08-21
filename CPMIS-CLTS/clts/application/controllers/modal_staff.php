<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Modal_staff extends CI_Controller {


	function __construct()
    {
        parent::__construct();
		$this->load->database();
		/*cache control*/
		$this->output->set_header('Last-Modified: ' . gmdate("D, d M Y H:i:s") . ' GMT');
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');
        $this->output->set_header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
    }

	/***default functin, redirects to login page if no admin logged in yet***/
	public function index()
	{

	}


	/*
	*	$page_name		=	The name of page
	*/
	function popup($page_name = '' , $param2 = '' , $param3 = '')
	{
		
		
		$account_type				=	$this->session->userdata('login_type');
		
		$page_data['param2']		=	$param2;
		$page_data['param3']		=	$param3;
		$page_data['admin_path']="./uploads/admin_image/";
		$page_data['path']="./uploads/staff_image/";
		$page_data['default']="./uploads/user.jpg";
		$this->load->model('staff_model');
		

		if($page_name=='staff_profile')
		{

		$page_data['profile_info']= $this->staff_model->get_staff_data($param2);

		}
		else if($page_name=='staff_edit')
		{

		$page_data['staff_edit_data']= $this->staff_model->get_staff_data($param2);

		}
		else if($page_name=='account_role_edit')
		{

		$page_data['edit_data']= $this->account_role_model->get_account_role_data($param2);

		}
		
		
			
		$this->load->view('backend/'.$account_type.'/'.$page_name.'.php' ,$page_data);

		echo '<script src="assets/js/neon-custom-ajax.js"></script>';
	}


}