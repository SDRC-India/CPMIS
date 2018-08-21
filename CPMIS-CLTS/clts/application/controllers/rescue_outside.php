<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>


<?php
/*
*This class is for the new cwc member add upto only 5 members
*By Poojashree Rout

*/

class Rescue_Outside extends MY_Controller
{
          function __construct()
          {
              //parent::__construct();
              parent:: __construct();
              /*cache control*/
              $this->output->set_header('Last-Modified: ' . gmdate("D, d M Y H:i:s") . ' GMT');
              $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
              $this->output->set_header('Pragma: no-cache');
              $this->load->library('session');
              $this->load->database();
              //loading the data
          }
    
          public function index($param1="",$param2="")
          {
          	if ($this->session->userdata('staff_login') != 1)
          	{
          		$this->session->set_userdata('last_page' , current_url());
          		redirect(base_url(), 'refresh');
          	}
          	$ses_ids=$this->session->userdata('login_user_id');
          	$this->load->model('mis_reports_model');
          	$role=$this->mis_reports_model->get_role_id($ses_ids);
          	foreach($role as $rolep):
          	$roles_id=$rolep['account_role_id'];
          	$dist_id=$rolep['district_id'];
          	$state_id=$rolep['state_id'];
          	$role_staff_id= $rolep['staff_id'];
          	
          	endforeach;
          	if($param1!=""){
          		$child_data['default']="uploads/user.jpg";
          		$child_data['upload_path']="./uploads/rescued_child_outside/";
          		$this->data['title']="Child Detail";
          		$child_data['view_child_data']	=	$this->mis_reports_model->get_outsideindivisual_detail($param1);
          		$this->data['main_content_view'] = $this->load->view('backend/staff/child_outsiderescue.php', $child_data, TRUE);
          		$this->generate_data('backend/index', $this->data );
          	}else{
          		
          		$this->data['title']="Child Detail";
          		$child_data["details_url"]=base_url()."index.php?mis_reports/rescue_outside/";
          		$child_data['view_child_outside_details']	=	$this->mis_reports_model->get_outsidechild_detail($param1,$role_staff_id);
          		$child_data['default']="uploads/user.jpg";
          		$child_data['upload_path']="./uploads/rescued_child_outside/";
          		
          		//print_r(  $child_data);
          		$this->data['main_content_view'] = $this->load->view('backend/staff/child_outside_noticedetails.php', $child_data, TRUE);
          		$this->generate_data('backend/index', $this->data );
          	}
          	
          }
	
}
