<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Modal extends CI_Controller {


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
		//print_r($page_name);
		$account_type				=	$this->session->userdata('login_type');
		$page_data['param2']		=	$param2;
		$page_data['param3']		=	$param3;
		$page_data['admin_path']="./uploads/admin_image/";
		$page_data['path']="./uploads/staff_image/";
		$page_data['default']="./uploads/user.jpg";
		$this->load->model('staff_model');
		$this->load->model('account_role_model');
		$this->load->model('model_policestation');		
		$this->load->model('model_scheme_list'); 		
		$this->load->model('model_ipc_section');
		$this->load->model('model_wages');
		$this->load->model('model_caste');
		$this->load->model('model_panchayat_name');
		$this->load->model('model_pincode_list');
		$this->load->model('model_middle_men');


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
		else if($page_name=='edit_policestation')
		{

		//$page_data['editps_data']= $this->account_role_model->get_account_role_data($param2);
		$page_data['editps_data']=$this->model_policestation->get_ps_data($param2);
		}
		else if($page_name=='edit_scheme')
		{

		//$page_data['editps_data']= $this->account_role_model->get_account_role_data($param2);
		$page_data['editscmh_data']=$this->model_scheme_list->get_scheme_data($param2);
		}
		else if($page_name=='edit_ipc')
		{

		//$page_data['editps_data']= $this->account_role_model->get_account_role_data($param2);
		$page_data['editipc_data']=$this->model_ipc_section->get_ipc_data($param2);
		}
		else if($page_name=='wages_edit')
		{

		//$page_data['editps_data']= $this->account_role_model->get_account_role_data($param2);
		$page_data['editwages_data']=$this->model_wages->get_wages_data($param2);
		}
		else if($page_name=='caste_edit')
		{

		//$page_data['editps_data']= $this->account_role_model->get_account_role_data($param2);
		$page_data['editcaste_url']=$this->model_caste->get_caste_data($param2);
		}
		else if($page_name=='panchayat_edit')
		{

		//$page_data['editps_data']= $this->account_role_model->get_account_role_data($param2);
		$page_data['editpanchayat_url']=$this->model_panchayat_name->get_panchayat_data($param2);
		}
		else if($page_name=='pincode_edit')
		{

		//$page_data['editps_data']= $this->account_role_model->get_account_role_data($param2);
		$page_data['editpincode_url']=$this->model_pincode_list->get_pincode_data($param2);
		}
		else if($page_name=='middle_men_edit')
		{

		//$page_data['editps_data']= $this->account_role_model->get_account_role_data($param2);
		$page_data['editmiddle_url']=$this->model_middle_men->get_middlemen_data($param2);
		}
		

		$this->load->view('backend/'.$account_type.'/'.$page_name.'.php' ,$page_data);

		echo '<script src="assets/js/neon-custom-ajax.js"></script>';
	}


}
