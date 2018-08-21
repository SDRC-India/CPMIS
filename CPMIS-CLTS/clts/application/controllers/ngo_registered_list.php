<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>


<?php
/*
*This class is for the Child _rescue
*By Godti Satyanarayan
*addnew() to add register mew rescued child  information(only view )
*edit() to update the information of rescued child(only view )
*view() to view the details record of crescued child(only view )
*ChilldRescuedRecord() actuial database operations for child rescued (new record ,update)
*/

class Ngo_registered_list extends MY_Controller
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
      public function index()
        {
          if ($this->session->userdata('staff_login') != 1)
          {
            $this->session->set_userdata('last_page' , current_url());
            redirect(base_url(), 'refresh');
          }
		   $ses_ids=$this->session->userdata('login_user_id');
          $this->load->model('ngo_registered_model');
          $role=$this->ngo_registered_model->get_role_id($ses_ids);
          foreach($role as $rolep):
          $roles_id=$rolep['account_role_id'];
          $dist_id=$rolep['district_id'];
          $stat_id=$rolep['state_id'];
          endforeach;
          $ngo_list['roles_id']= $roles_id ;
          $ngo_list['data_list']=$this->ngo_registered_model->get_reg_ngo();  
          $ngo_list["details_url"]=base_url()."index.php?ngo_registered_list/view/";
		  
           $this->data['title']="List of Registered NGO ";
          $this->data['main_content_view'] = $this->load->view('backend/staff/ngo_registered_list.php',$ngo_list, TRUE);
          $this->generate_data('backend/index', $this->data );

        }
		
		 //view details record of child
        public function view($param1="")
        {
          if ($this->session->userdata('staff_login') != 1)
          {
            $this->session->set_userdata('last_page' , current_url());
            redirect(base_url(), 'refresh');
          }
          $ses_ids=$this->session->userdata('login_user_id');
          $this->load->model('ngo_registered_model');
          $ngo_data['view_ngo_data']=$this->ngo_registered_model->get_userid($param1);
		  
		   $this->load->model('child_rescued_model');
          //Toget the account_role_id
          $role=$this->child_rescued_model->get_role_id($ses_ids);
          foreach($role as $rolep):
            $roles_id=$rolep['account_role_id'];
			$ngo_data['roles_id']= $roles_id ;
          endforeach;
         /* foreach($role as $rolep):
            $roles_id=$rolep['account_role_id'];
            $dist_id=$rolep['district_id'];
            $state_id=$rolep['state_id'];
          endforeach; */
          //dont know why it is required
          ///
          $this->data['title']="View NGO Detail";
          /*$child_data['view_child_data']	=	$this->child_rescued_model->get_child_data($param1);
          $child_data['default']="uploads/user.jpg";
          $child_data['upload_path']="./uploads/child_image/";
		  */
            //print_r(  $child_data);
          $this->data['main_content_view'] = $this->load->view('backend/staff/ngo_registered_details.php', $ngo_data, TRUE);
          $this->generate_data('backend/index', $this->data );

        }
		
		public function approve($param1="",$param2="")
        {   //echo "AAAAAAAA" ; die() ;
		
          if ($this->session->userdata('staff_login') != 1)
          {
            $this->session->set_userdata('last_page' , current_url());
            redirect(base_url(), 'refresh');
          }
          $ses_ids=$this->session->userdata('login_user_id');
		  $this->load->model('child_rescued_model');
          //Toget the account_role_id
          $role=$this->child_rescued_model->get_role_id($ses_ids);
          foreach($role as $rolep):
            $roles_id=$rolep['account_role_id'];
			$ngo_data1['roles_id']= $roles_id ;
          endforeach;
		  
          $this->load->model('ngo_registered_model');
		  if($param2==2){
          $ngo_data1['view_ngo_data']=$this->ngo_registered_model->update_ngo($param1);
		  }
		  if($param2==10){
          $ngo_data1['view_ngo_data']=$this->ngo_registered_model->update_lc_ngo($param1);
		  }
		 

         $ngo_data1['view_ngo_data']=$this->ngo_registered_model->get_userid($param1);
         /* foreach($role as $rolep):
            $roles_id=$rolep['account_role_id'];
            $dist_id=$rolep['district_id'];
            $state_id=$rolep['state_id'];
          endforeach; */
          //dont know why it is required

          ///
          $this->data['title']="View NGO Detail";
          /*$child_data['view_child_data']	=	$this->child_rescued_model->get_child_data($param1);
          $child_data['default']="uploads/user.jpg";
          $child_data['upload_path']="./uploads/child_image/";
		  */
            //print_r(  $child_data);
          $this->data['main_content_view'] = $this->load->view('backend/staff/ngo_registered_details.php', $ngo_data1, TRUE);
          $this->generate_data('backend/index', $this->data );

        }
}
