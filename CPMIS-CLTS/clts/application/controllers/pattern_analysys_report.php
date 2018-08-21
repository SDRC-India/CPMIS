<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
<?php
/*
*This class is for the management_report
*By Godti Satyanarayan
*Index() loads the Pattern report data
*
*
*LC Pattern Analysys report
*/

class Pattern_analysys_report extends MY_Controller
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
           echo "ajhad";
          if ($this->session->userdata('staff_login') != 1)
          {
            $this->session->set_userdata('last_page' , current_url());
            redirect(base_url(), 'refresh');
          }
         
		 $ses_ids=$this->session->userdata('login_user_id');
          $this->load->model('pattren_analysys_report_model');
		  //To get the account_role_id
          /*$role=$this->pattren_analysys_report_model->get_role_id($ses_ids);
          foreach($role as $rolep):
            $roles_id=$rolep['account_role_id'];
            $dist_id=$rolep['district_id'];
            $stat_id=$rolep['state_id'];
          endforeach;*/
			 
		  if ($_SERVER['REQUEST_METHOD'] == 'POST'){
			  
				  $from=$_POST['from_date'];
				  $to=$_POST['to_date'];
				  $user=$_POST['user_grp'];
				  $type=$_POST['type'];
				  if($type=="system_access")
				  {   
				   ///$management_data_report['sys_access_report']=$this->management_report_model->get_report_sys_access_data($from,$to,$user);
			      }
				  else if($type=="last_login")
				  {
					 
					  
					//$management_data_report['last_login_report']=$this->management_report_model->get_report_last_login_data($from,$to,$user);
			         //print_r($management_data_report['last_login_report']);
					  
				  }
				  else if($type=="inside_state")
				  {
					  
					  
					  
				  }
				  else if($type=="outside_state")
				  {
					  
					  
				  }
		          } 
		         else{
		  
		        echo $type="pattren_outside";
			    $to =date('Y-m-d');//today's date
				$from=date('Y-m-d', strtotime(date('Y-m-d')." -1 month"));//one month past date
			    $pattern_data_report['outside_pattern_report']="";///$this->pattren_analysys_report_model->get_report_pattern_inside_data($from,$to,$user);
			    //print_r($management_data_report['sys_access_report']);
				
				 }
			    $pattern_data_report['type']=$type;
				//$management_data_report['selected_user_grp']=$user;
				$pattern_data_report['from']=$from;
                 echo $pattern_data_report['to']=$to ;
			 //$management_data_report['user_grps']=$this->pattren_analysys_report_model->get_user_groups_list();
             $this->data['title']="Pattren Analysys Reports";
             $this->data['main_content_view'] = $this->load->view('backend/staff/pattren_analysys_report',$pattern_data_report ,TRUE);
             $this->generate_data('backend/index', $this->data );
			}
  }
