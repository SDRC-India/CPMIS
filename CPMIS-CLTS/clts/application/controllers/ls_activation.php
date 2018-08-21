<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>


<?php
/*
*This class is for the Child _rescue
*By Godti Satyanarayan
*
*/

class Ls_activation extends MY_Controller
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
          $this->load->model('ls_activation_model');
          //Toget the account_role_id
          $role=$this->ls_activation_model->get_role_id($ses_ids);
          foreach($role as $rolep):
            $roles_id=$rolep['account_role_id'];
            $dist_id=$rolep['district_id'];
            $stat_id=$rolep['state_id'];
          endforeach;
            $child_list_forwarded['role_id']=$roles_id;
            $child_list_forwarded['state_id']=$state_id;
            $child_list_forwarded['district_id']=$dist_id;
            $child_list_forwarded["forward_url"]=base_url()."index.php?ls_activation/lsactivate/";
            $child_list_forwarded["details_url"]=base_url()."index.php?child_rescued_list/view/";
            $child_list_forwarded['cwc_forwarded_data']=$this->ls_activation_model-> get_cwc_forwarded_data($roles_id,$dist_id );

            $this->data['title']="LS Forwarded List";


          $this->data['main_content_view'] = $this->load->view('backend/staff/ls_activation.php',$child_list_forwarded, TRUE);
          $this->generate_data('backend/index', $this->data );

        }
      function lsactivate($param1 = '', $param2 = '') {

            if ($this->session->userdata('staff_login') != 1)
            {
              $this->session->set_userdata('last_page' , current_url());
              redirect(base_url(), 'refresh');
            }
			$date = strtotime('2016-06-12');//Don't Change this date as it required for LS Bypassing Module

            
            $ses_ids=$this->session->userdata('login_user_id');
            $this->load->model('ls_activation_model');
            $this->data['title']="Forward to CWC Form";
            $child_forwarded_data['child_forwarded_data']	=$this->ls_activation_model->get_child_data($param1);
            $child_forwarded_data['rescued_before_june_2016']	=date('Y-m-d',$date);
               //print_r($child_forwarded_data['child_forwarded_data']);
            $this->data['main_content_view'] = $this->load->view('backend/staff/lsactivate.php',$child_forwarded_data, TRUE);
            $this->generate_data('backend/index', $this->data );
        }
        public function forward_to_cwc($param1 = '', $param2 = '') {

          $this->load->model('ls_activation_model');
                if ($param1 == 'lsactivate') {

                       $this->ls_activation_model->forward_to_cwc($param2);
                        return $param1.$param2 ;

                  }
				  
				  
          }
		  public function final_order_passed_by_ls($param="")
		  {
			  $this->load->model('ls_activation_model');
                
			   $this->ls_activation_model->final_order_passed_by_ls($param);
				return $param ;

                  
			  
		  }
		  
}
