<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>


<?php
/*
*This class is for the monthly_report
*By Godti Satyanarayan
*Index() loads the monthly report data

*
*LC Dashboard
*/

class Monthly_report extends MY_Controller
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
          $this->load->model('monthly_report_model');
		  //Toget the account_role_id
          $role=$this->monthly_report_model->get_role_id($ses_ids);
          foreach($role as $rolep):
            $roles_id=$rolep['account_role_id'];
            $dist_id=$rolep['district_id'];
            $stat_id=$rolep['state_id'];
          endforeach;
		  
		  //if(isset)
		  $monthly_data_report['first_title']="Child Rescued";
		  $monthly_data_report['second_title']="Entitlement Card Generated";
		  $monthly_data_report['box_one_title']="Children Rescued";
		  $monthly_data_report['box_one_img']="new-clients.png";
		  $monthly_data_report['box_2_title']="Entitlement Card Generated";
		  $monthly_data_report['box_2_img']="card.png";
		  $monthly_data_report['box_3_title']="Percentage Of Cards Generated";
		  $monthly_data_report['box_3_img']="percent.png";
		  $monthly_data_report['box_4_title']="With in 2 weeks";
		  $monthly_data_report['box_4_img']="old-pro.png";
		  $monthly_data_report['box_5_title']="With in 2 to 3 weeks";
		  $monthly_data_report['box_5_img']="old-pro.png";
		  $monthly_data_report['box_6_title']="More than 3 weeks";
		  $monthly_data_report['box_6_img']="old-pro.png";
		   
		  if ($_SERVER['REQUEST_METHOD'] == 'POST'){
			  
				  $from=$_POST['from_date'];
				  $to=$_POST['to_date'];
				  $dist=$_POST['district'];
				  $type=$_POST['type'];
				  if($type=="entitlement_card_getnerated")
				  {
					   if($dist!="")
					   {
						   $monthly_data_report['monthly_report']=$this->monthly_report_model->filter_get_report_data($dist,$from,$to);
				   
					   }
					  else{
						  $monthly_data_report['monthly_report']=$this->monthly_report_model->get_report_data($from,$to);
					  }
					 
					  
				  }
				  else if($type=="investigation")
				  {
					  
					  $monthly_data_report['first_title']="Child Rescued";
					  $monthly_data_report['second_title']="Investigation ";
					  $monthly_data_report['box_one_title']="Children Rescued";
					  $monthly_data_report['box_one_img']="new-clients.png";
					  $monthly_data_report['box_2_title']="Final Order Passed";
					  $monthly_data_report['box_2_img']="card.png";
					  $monthly_data_report['box_3_title']="Percentage Of Investigation";
					  $monthly_data_report['box_3_img']="percent.png";
					  $monthly_data_report['box_4_title']="With in 2 weeks";
					  $monthly_data_report['box_4_img']="old-pro.png";
					  $monthly_data_report['box_5_title']="With in 2 to 3 weeks";
					  $monthly_data_report['box_5_img']="old-pro.png";
					  $monthly_data_report['box_6_title']="More than 3 weeks";
					  $monthly_data_report['box_6_img']="old-pro.png";
					  
					  //print_r($this->investigation($dist,$from,$to));
					$monthly_data_report['monthly_report']=$this->investigation($dist,$from,$to);
					   
					  
				  }
				  else if($type=="inside_state")
				  {
					  $monthly_data_report['first_title']="Child Rescued";
					  $monthly_data_report['box_one_title']="Children Rescued";
					  $monthly_data_report['box_one_img']="new-clients.png";
					  $monthly_data_report['box_2_title']="Children Rescued Inside State";
					  $monthly_data_report['box_2_img']="new-user.png";
					  $monthly_data_report['box_3_title']="Percentage Of Children Rescued Inside";
					  $monthly_data_report['box_3_img']="percent.png";
					  $monthly_data_report['second_title']="";
					 
					  
					  //print_r($this->investigation($dist,$from,$to));
					$monthly_data_report['monthly_report']=$this->inside_state_recued($dist,$from,$to);
					 
					  
				  }
				  else if($type=="outside_state")
				  {
					 $monthly_data_report['first_title']="Child Rescued";
					  $monthly_data_report['box_one_title']="Children Rescued";
					  $monthly_data_report['box_one_img']="new-clients.png";
					  $monthly_data_report['box_2_title']="Children Rescued Inside State";
					  $monthly_data_report['box_2_img']="new-user.png";
					  $monthly_data_report['box_3_title']="Percentage Of Children Rescued Inside";
					  $monthly_data_report['box_3_img']="percent.png";
					  $monthly_data_report['second_title']="";
					$monthly_data_report['monthly_report']=$this->outside_state_recued($dist,$from,$to);
				  }
				  $monthly_data_report['district_list']=$this->monthly_report_model->get_districts_list($stat_id);
				  $monthly_data_report['selected_dist']=$dist;
				  $monthly_data_report['from']=$_POST['from_date'];
				  $monthly_data_report['to']=$_POST['to_date'] ;
				  $monthly_data_report['type']=$type;
				  
			  
		       }
		  else{
			   $todate =date('Y-m-d');//today's date
				$from_date=date('Y-m-d', strtotime(date('Y-m-d')." -1 month"));//one month past date
			    $monthly_data_report['monthly_report']=$this->monthly_report_model->get_report_data($from_date,$todate);
			    $monthly_data_report['district_list']=$this->monthly_report_model->get_districts_list($stat_id);
				//print_r($monthly_data_report['monthly_report']);
				
				$monthly_data_report['from']=$from_date;
				$monthly_data_report['to']=$todate ;
				$monthly_data_report['type']=$type; 
		      }
             $this->data['title']="Monthly Reports";
             $this->data['main_content_view'] = $this->load->view('backend/staff/monthly_report',$monthly_data_report ,TRUE);
             $this->generate_data('backend/index', $this->data );

        }
	  
        public function report_details()
        {
          $this->data['title']="Monthly Report";
		  if ($_SERVER['REQUEST_METHOD'] == 'POST'){
			$from=$_POST['from_date'];
			$to=$_POST['to_date'];
			$dist=$_POST['district'];
			$type=$_POST['type'];
			$ses_ids=$this->session->userdata('login_user_id');
		     $this->load->model('monthly_report_model');
         
		  $role=$this->monthly_report_model->get_role_id($ses_ids);
          foreach($role as $rolep):
            $roles_id=$rolep['account_role_id'];
            $dist_id=$rolep['district_id'];
            $stat_id=$rolep['state_id'];
          endforeach;
          //echo $dist;
		  //echo $type;
		   if($type=="entitlement_card_getnerated")
				  {
					    $monthly_data_report_details['monthly_report_details']=$this->monthly_report_model->report_details($from,$to,$dist);
        
				  }
				  else if($type=="investigation")
				  {
					  $monthly_data_report_details['monthly_report_details']=$this->monthly_report_model->report_details_investigation($from,$to,$dist);
           
					  
				  }
				  else if($type=="inside_state")
				  {
					  $monthly_data_report_details['monthly_report_details']=$this->monthly_report_model->report_details_inside($from,$to,$dist);
         
					  
				  }
				  else if($type=="outside_state")
				  {
					  $monthly_data_report_details['monthly_report_details']=$this->monthly_report_model->report_details_outside($from,$to,$dist);
         
					  
				  }
				  //print_r($monthly_data_report_details['monthly_report_details']);
          $monthly_data_report_details['district_list']=$this->monthly_report_model->get_districts_list($stat_id);
		  
			$monthly_data_report_details['from']=$_POST['from_date'];
            $monthly_data_report_details['to']=$_POST['to_date'] ;
			$monthly_data_report_details['selected_dist']=$dist;
			$monthly_data_report_details['type']=$type;
            $monthly_data_report_details["details_url"]=base_url()."index.php?child_rescued_list/view/";
			
          $this->data['main_content_view'] = $this->load->view('backend/staff/report_details',$monthly_data_report_details, TRUE);
          $this->generate_data('backend/index', $this->data ); 
		  }
		  else{
			  
			  header("location:".base_url()."index.php?monthly_report");
			  
		  }
        }
		
        public function investigation($dist,$from,$to)
		{
			  $this->load->model('monthly_report_model');
		  
			  if($dist!="")
			  {
				  
				return $this->monthly_report_model->get_investigation_report_flter_data($dist,$from,$to);  
				  
			  }
			  else{
				  //print_r($this->monthly_report_model->get_investigation_report_data($from,$to));
				return $this->monthly_report_model->get_investigation_report_data($from,$to);  
				  
			  }
			
		}
		 public function inside_state_recued($dist,$from,$to)
		{
			  $this->load->model('monthly_report_model');
		  
			  if($dist!="")
			  {
				  
				return $this->monthly_report_model->get_inside_report_filter_data($dist,$from,$to);  
				  
			  }
			  else{
				  //print_r($this->monthly_report_model->get_investigation_report_data($from,$to));
				return $this->monthly_report_model->get_inside_report_data($from,$to);  
				  
			  }
			
		}
		 public function outside_state_recued($dist,$from,$to)
		{
			  $this->load->model('monthly_report_model');
		  
			  if($dist!="")
			  {
				  
				return $this->monthly_report_model->get_outside_report_filter_data($dist,$from,$to);  
				  
			  }
			  else{
				  //print_r($this->monthly_report_model->get_investigation_report_data($from,$to));
				return $this->monthly_report_model->get_outside_report_data($from,$to);  
				  
			  }
			
		}

  }
