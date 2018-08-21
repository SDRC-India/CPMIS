<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>


<?php
/*
*This class is for the dashbord
*By Godti Satyanarayan
*Index() loads the dashboard data
* get_notification() loads the notification model
*Dcpu() Loads the Dcpu Dashboard
*
*LC Dashboard
*/

class Dashboard extends MY_Controller
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
          $this->load->model('dashboard_model');
          //Toget the account_role_id
          $role=$this->dashboard_model->get_role_id($ses_ids);
          foreach($role as $rolep):
           $roles_id=$rolep['account_role_id'];
            $dist_id=$rolep['district_id'];
            $stat_id=$rolep['state_id'];
          endforeach;
          if( $roles_id==10 || $roles_id==11 || $roles_id==21 || $roles_id==12)//For LC and LC Operator
          {
          	$to=date('Y-m-d');
          	$from=date('Y-m-d', strtotime("2014-04-01"));
          	$get_cumulative['cumlative_list']=$this->dashboard_model->cumulative_chart($from,$to,$dist);
          	$get_cumulative["to"]=$to;
          	$get_cumulative["from"]=$from;
          	$get_cumulative["roles_id"]=$roles_id;
          	$this->data['title']="Cumulative Statistics";
          	$this->data['main_content_view'] = $this->load->view('backend/staff/cumulative_chart',$get_cumulative, TRUE);
          	$this->generate_data('backend/index', $this->data );

          }
          if( ($roles_id==2)||($roles_id==5)||($roles_id==6)||($roles_id==7)||($roles_id==8)||($roles_id==14)||($roles_id==16)||($roles_id==18)||($roles_id==19))
          {
          	//echo $roles_id;
          	$to=date('Y-m-d');
          	$from=date('Y-m-d', strtotime("2014-04-01"));
          	$get_cumulative['cumlative_list']=$this->dashboard_model->cumulative_chart($from,$to,$dist);
          	//print_r($monthly_data_report_details['cumlative_list']) ;
          	$get_cumulative["to"]=$to;
          	$get_cumulative["from"]=$from;
          	$get_cumulative["roles_id"]=$roles_id;
          	$this->data['title']="Cumulative Statistics";
          	$this->data['main_content_view'] = $this->load->view('backend/staff/cumulative_chart',$get_cumulative, TRUE);
          	$this->generate_data('backend/index', $this->data );
          }
          if( $roles_id==13 || $roles_id==20 )//For LC and LC Operator
          {
          	//echo $roles_id;
          	$to=date('Y-m-d');
          	$from=date('Y-m-d', strtotime("2014-04-01"));
          	$get_cumulative['cumlative_list']=$this->dashboard_model->cumulative_chart($from,$to,$dist);
          	//print_r($monthly_data_report_details['cumlative_list']) ;
          	$get_cumulative["to"]=$to;
          	$get_cumulative["from"]=$from;
          	$get_cumulative["roles_id"]=$roles_id;
          	$this->data['title']="Cumulative Statistics";
          	$this->data['main_content_view'] = $this->load->view('backend/staff/cumulative_chart',$get_cumulative, TRUE);
          	$this->generate_data('backend/index', $this->data );
          }
          
        }
      
        // Cumulative Dashboard
        
        public function cumulative($from,$to)
        {
        	if ($this->session->userdata('staff_login') != 1)
        	{
        		$this->session->set_userdata('last_page' , current_url());
        		redirect(base_url(), 'refresh');
        	}
        	$ses_ids=$this->session->userdata('login_user_id');
        	$this->load->model('dashboard_model');
        	//Toget the account_role_id
        	$role=$this->dashboard_model->get_role_id($ses_ids);
        	foreach($role as $rolep):
        	$roles_id=$rolep['account_role_id'];
        	$dist_id=$rolep['district_id'];
        	$stat_id=$rolep['state_id'];
        	endforeach;
        	$trend_names=array('Number of children rescued ', 'Transfered to others','Transfered from others','Child Investigation (Ongoing)','Entitlement Card Generated');
        	$this->data['title']="Dashboard";
        	
        	
        	if($roles_id==9){
        		///for the dash board SCPS
        		if(isset($_POST['district'])) {
        			if($_POST['district']!="") {
        				
        				$dstate_id=$_POST['district'];
        				$nmid='district_id';
        				$isState=true;
        				
        			}
        			else {
        				$dstate_id=$stat_id;
        				$nmid='state_id';
        				$isState=false;
        			}
        			
        		}
        		else {
        			$dstate_id=$stat_id;
        			$nmid='state_id';
        			$isState=false;
        		}
        		$dashboard = array(
        				"dashboard" => $this->dashboard_model->get_scps_Dashboard($nmid,$dstate_id,$isState),'districts'=> $this->dashboard_model->get_districts($stat_id),"area"=>$this->dashboard_model->get_area($dstate_id),
        				'trend_names'=>  $trend_names
        		);
        		//print_r($dashboard);
        		$this->data['main_content_view'] = $this->load->view('backend/staff/scps_dashboard',$dashboard, TRUE);
        	}
        	else if($roles_id==10 || $roles_id==11 ||$roles_id==13 || $roles_id==20 || $roles_id==21 || $roles_id==12 || $roles_id==22){
        		/*	$cont["to"]=date('Y-m-d');
        		 $cont["from"]=date('Y-m-d', strtotime("2014-04-01"));
        		 
        		 $this->data['main_content_view'] = $this->load->view('backend/staff/LC_dashboard',$cont, TRUE);
        		 
        		 */
        		$dashboard = array(
        				"dashboard" => $this->dashboard_model->get_dashboardData_LC($ses_ids),"notification"=>$this->get_notification($roles_id,$ses_ids),
        				'trend_names'=>  $trend_names,
        				//added on 12-10-17
        				//by pooja
        				'to'=>$to,
        				'from'=>$from
        		);
        		
        		$this->data['main_content_view'] = $this->load->view('backend/staff/LC_dashboard',$dashboard, TRUE);
        	}
        	else{
        		
        		//all dashboard for role_id 2 || 5 || 6 || 7 || 8
        		
        		$dashboard = array(
        		"dashboard" => $this->dashboard_model->get_dashboardData($ses_ids),"notification"=>$this->get_notification($roles_id,$ses_ids),
        		'trend_names'=>  $trend_names
        		);
        		
        		$this->data['main_content_view'] = $this->load->view('backend/staff/dashboard',$dashboard, TRUE);
        	}
        	
        	
        	$this->generate_data('backend/index', $this->data );
        	
        }
        
    // Age wise brackup    
        
        public function get_age($from,$to) {
        	$this->load->model('dashboard_model');
        	$ses_ids=$this->session->userdata('login_user_id');
        	$role=$this->dashboard_model->get_role_id($ses_ids);
        	foreach($role as $rolep):
        	$roles_id=$rolep['account_role_id'];
        	$dist_id=$rolep['district_id'];
        	$stat_id=$rolep['state_id'];
        	endforeach;
        	//$from=$_POST['from'];
        	//$to=$_POST['to'];
        	
        	//echo $roles_id;
        	if( $roles_id==10 || $roles_id==11 || $roles_id==21 || $roles_id==12)//For LC and LC Operator
        	{
        		$get_age['agewise_brakeup']=$this->dashboard_model->get_agewise($from,$to,$dist);
        		//print_r($monthly_data_report_details['agewise_brakeup']) ;
        		$get_age["to"]=$to;
        		$get_age["from"]=$from;
        		
        		$get_age["roles_id"]=$roles_id;
        		$this->data['title']="Age-Wise Break-Up";        		
        		$this->data['main_content_view'] = $this->load->view('backend/staff/age_wise_chart',$get_age, TRUE);
        		$this->generate_data('backend/index', $this->data );       		
        	}
        	if(($roles_id==2)||($roles_id==5)||($roles_id==6)||($roles_id==7)||($roles_id==8)||($roles_id==14)||($roles_id==16)||($roles_id==18)||($roles_id==19))//For LC and LC Operator
        	{
        		$get_age['agewise_brakeup']=$this->dashboard_model->get_agewise($from,$to,$dist);
        		//print_r($monthly_data_report_details['agewise_brakeup']) ;
        		$get_age["to"]=$to;
        		$get_age["from"]=$from;
        		$get_age["roles_id"]=$roles_id;
        		
        		$this->data['title']="Age-Wise Break-Up";
        		$this->data['main_content_view'] = $this->load->view('backend/staff/age_wise_chart',$get_age, TRUE);
        		$this->generate_data('backend/index', $this->data );
        	}
        	if($roles_id==13 || $roles_id==20)//For LC and LC Operator
        	{
        		$get_age['agewise_brakeup']=$this->dashboard_model->get_agewise($from,$to,$dist);
        		//print_r($monthly_data_report_details['agewise_brakeup']) ;
        		$get_age["to"]=$to;
        		$get_age["from"]=$from;
        		$get_age["roles_id"]=$roles_id;
        		
        		$this->data['title']="Age-Wise Break-Up";
        		$this->data['main_content_view'] = $this->load->view('backend/staff/age_wise_chart',$get_age, TRUE);
        		$this->generate_data('backend/index', $this->data );
        	}
        }
        
     //education started 
     //added on 17-10-17
     //dashboard part for education 
        
        public function get_education($from,$to) {
        	$this->load->model('dashboard_model');
        	$ses_ids=$this->session->userdata('login_user_id');
        	$role=$this->dashboard_model->get_role_id($ses_ids);
        	foreach($role as $rolep):
        	$roles_id=$rolep['account_role_id'];
        	$dist_id=$rolep['district_id'];
        	$stat_id=$rolep['state_id'];
        	endforeach;
        	//$from=$_POST['from'];
        	//$to=$_POST['to'];
        	
        	//echo $roles_id;
        	if( $roles_id==10 || $roles_id==11 || $roles_id==21 || $roles_id==12)//For LC and LC Operator
        	{
        		$monthly_data_report_details['education_breakup']=$this->dashboard_model->get_education($from,$to,$dist);
        		//print_r($monthly_data_report_details['agewise_brakeup']) ;
        		$monthly_data_report_details["to"]=$to;
        		$monthly_data_report_details["from"]=$from;
        		$monthly_data_report_details["roles_id"]=$roles_id;
        		$this->data['title']="Education-Wise Break-Up";
        		$this->data['main_content_view'] = $this->load->view('backend/staff/education_wise_chart',$monthly_data_report_details, TRUE);
        		$this->generate_data('backend/index', $this->data );
        	}
        	if( ($roles_id==2)||($roles_id==5)||($roles_id==6)||($roles_id==7)||($roles_id==8)||($roles_id==14)||($roles_id==16)||($roles_id==18)||($roles_id==19))//For LC and LC Operator
        	{
        		$monthly_data_report_details['education_breakup']=$this->dashboard_model->get_education($from,$to,$dist);
        		//print_r($monthly_data_report_details['agewise_brakeup']) ;
        		$monthly_data_report_details["to"]=$to;
        		$monthly_data_report_details["from"]=$from;
        		$monthly_data_report_details["roles_id"]=$roles_id;
        		$this->data['title']="Education-Wise Break-Up";
        		$this->data['main_content_view'] = $this->load->view('backend/staff/education_wise_chart',$monthly_data_report_details, TRUE);
        		$this->generate_data('backend/index', $this->data );
        	}
        	if( $roles_id==13 || $roles_id==20)//For LC and LC Operator
        	{
        		$monthly_data_report_details['education_breakup']=$this->dashboard_model->get_education($from,$to,$dist);
        		//print_r($monthly_data_report_details['agewise_brakeup']) ;
        		$monthly_data_report_details["to"]=$to;
        		$monthly_data_report_details["from"]=$from;
        		$monthly_data_report_details["roles_id"]=$roles_id;
        		$this->data['title']="Education-Wise Break-Up";
        		$this->data['main_content_view'] = $this->load->view('backend/staff/education_wise_chart',$monthly_data_report_details, TRUE);
        		$this->generate_data('backend/index', $this->data );
        	}
        }
        
     
       //education ended 
        //dashboard part for caste wise break up start
       //18-10-17
        
        public function get_categorye($from,$to) {
        	$this->load->model('dashboard_model');
        	$ses_ids=$this->session->userdata('login_user_id');
        	$role=$this->dashboard_model->get_role_id($ses_ids);
        	foreach($role as $rolep):
        	$roles_id=$rolep['account_role_id'];
        	$dist_id=$rolep['district_id'];
        	$stat_id=$rolep['state_id'];
        	endforeach;
        	//$from=$_POST['from'];
        	//$to=$_POST['to'];
        	
        	//echo $roles_id;
        	if( $roles_id==10 || $roles_id==11 || $roles_id==21 || $roles_id==12)//For LC and LC Operator
        	{
        		$get_category['category_breakup']=$this->dashboard_model->get_category($from,$to,$dist);
        		//print_r($monthly_data_report_details['agewise_brakeup']) ;
        		$get_category["to"]=$to;
        		$get_category["from"]=$from;
        		$get_category["roles_id"]=$roles_id;
        		$this->data['title']="Category-Wise Break-Up";
        		$this->data['main_content_view'] = $this->load->view('backend/staff/caste_wise_chart',$get_category, TRUE);
        		$this->generate_data('backend/index', $this->data );
        	}
        	
        	if( ($roles_id==2)||($roles_id==5)||($roles_id==6)||($roles_id==7)||($roles_id==8)||($roles_id==14)||($roles_id==16)||($roles_id==18)||($roles_id==19))//For LC and LC Operator
        	{
        		$get_category['category_breakup']=$this->dashboard_model->get_category($from,$to,$dist);
        		//print_r($monthly_data_report_details['agewise_brakeup']) ;
        		$get_category["to"]=$to;
        		$get_category["from"]=$from;
        		$get_category["roles_id"]=$roles_id;
        		$this->data['title']="Category-Wise Break-Up";
        		$this->data['main_content_view'] = $this->load->view('backend/staff/caste_wise_chart',$get_category, TRUE);
        		$this->generate_data('backend/index', $this->data );
        	}
        	
        	if($roles_id==13 || $roles_id==20)//For LC and LC Operator
        	{
        		$get_category['category_breakup']=$this->dashboard_model->get_category($from,$to,$dist);
        		//print_r($monthly_data_report_details['agewise_brakeup']) ;
        		$get_category["to"]=$to;
        		$get_category["from"]=$from;
        		$get_category["roles_id"]=$roles_id;
        		$this->data['title']="Category-Wise Break-Up";
        		$this->data['main_content_view'] = $this->load->view('backend/staff/caste_wise_chart',$get_category, TRUE);
        		$this->generate_data('backend/index', $this->data );
        	}
        }
     
        //caste wise end
        
        //order after production
        //dashboard
        //18-10-17
        
        public function get_orderafter_production($from,$to) {
        	$this->load->model('dashboard_model');
        	$ses_ids=$this->session->userdata('login_user_id');
        	$role=$this->dashboard_model->get_role_id($ses_ids);
        	foreach($role as $rolep):
        	$roles_id=$rolep['account_role_id'];
        	$dist_id=$rolep['district_id'];
        	$stat_id=$rolep['state_id'];
        	endforeach;
        	//$from=$_POST['from'];
        	//$to=$_POST['to'];
        	
        	//echo $roles_id;
        	if( $roles_id==10 || $roles_id==11 || $roles_id==21 || $roles_id==12)//For LC and LC Operator
        	{
        		$monthly_data_report_details['orderafter_breakup']=$this->dashboard_model->get_orderafter_production($from,$to,$dist);
        		//print_r($monthly_data_report_details['agewise_brakeup']) ;
        		$monthly_data_report_details["to"]=$to;
        		$monthly_data_report_details["from"]=$from;
        		$monthly_data_report_details["roles_id"]=$roles_id;
        		
        		$this->data['title']="Order After Production";
        		$this->data['main_content_view'] = $this->load->view('backend/staff/order_wise_chart',$monthly_data_report_details, TRUE);
        		$this->generate_data('backend/index', $this->data );
        	}
        	
        	if(($roles_id==2)||($roles_id==5)||($roles_id==6)||($roles_id==7)||($roles_id==8)||($roles_id==14)||($roles_id==16)||($roles_id==18)||($roles_id==19))//For LC and LC Operator
        	{
        		$monthly_data_report_details['orderafter_breakup']=$this->dashboard_model->get_orderafter_production($from,$to,$dist);
        		//print_r($monthly_data_report_details['agewise_brakeup']) ;
        		$monthly_data_report_details["to"]=$to;
        		$monthly_data_report_details["from"]=$from;
        		$monthly_data_report_details["roles_id"]=$roles_id;
        		
        		$this->data['title']="Order After Production";
        		$this->data['main_content_view'] = $this->load->view('backend/staff/order_wise_chart',$monthly_data_report_details, TRUE);
        		$this->generate_data('backend/index', $this->data );
        	}
        	
        	if($roles_id==13 || $roles_id==20)//For LC and LC Operator
        	{
        		$monthly_data_report_details['orderafter_breakup']=$this->dashboard_model->get_orderafter_production($from,$to,$dist);
        		//print_r($monthly_data_report_details['agewise_brakeup']) ;
        		$monthly_data_report_details["to"]=$to;
        		$monthly_data_report_details["from"]=$from;
        		$monthly_data_report_details["roles_id"]=$roles_id;
        		
        		$this->data['title']="Order After Production";
        		$this->data['main_content_view'] = $this->load->view('backend/staff/order_wise_chart',$monthly_data_report_details, TRUE);
        		$this->generate_data('backend/index', $this->data );
        	}
        }
        

        //order after production end
        
        
        
        //transfer status for for dashboard
        //20-10-17
        
        public function get_transfer_status($from,$to) {
        	$this->load->model('dashboard_model');
        	$ses_ids=$this->session->userdata('login_user_id');
        	$role=$this->dashboard_model->get_role_id($ses_ids);
        	foreach($role as $rolep):
        	$roles_id=$rolep['account_role_id'];
        	$dist_id=$rolep['district_id'];
        	$stat_id=$rolep['state_id'];
        	endforeach;
        	//$from=$_POST['from'];
        	//$to=$_POST['to'];
        	
        	//echo $roles_id;
        	if( $roles_id==10 || $roles_id==11 || $roles_id==21 || $roles_id==12)//For LC and LC Operator
        	{
        		$monthly_data_report_details['transfer_breakup']=$this->dashboard_model->get_transfer_status($from,$to,$dist);
        		//print_r($monthly_data_report_details['agewise_brakeup']) ;
        		$monthly_data_report_details["to"]=$to;
        		$monthly_data_report_details["from"]=$from;
        		$monthly_data_report_details["roles_id"]=$roles_id;
        		$this->data['title']="Transfer Status";
        		$this->data['main_content_view'] = $this->load->view('backend/staff/transfer_wise_chart',$monthly_data_report_details, TRUE);
        		$this->generate_data('backend/index', $this->data );
        	}
        	
        	if( ($roles_id==2)||($roles_id==5)||($roles_id==6)||($roles_id==7)||($roles_id==8)||($roles_id==14)||($roles_id==16)||($roles_id==18)||($roles_id==19))//For LC and LC Operator
        	{
        		$monthly_data_report_details['transfer_breakup']=$this->dashboard_model->get_transfer_status($from,$to,$dist);
        		//print_r($monthly_data_report_details['agewise_brakeup']) ;
        		$monthly_data_report_details["to"]=$to;
        		$monthly_data_report_details["from"]=$from;
        		$monthly_data_report_details["roles_id"]=$roles_id;
        		$this->data['title']="Transfer Status";
        		$this->data['main_content_view'] = $this->load->view('backend/staff/transfer_wise_chart',$monthly_data_report_details, TRUE);
        		$this->generate_data('backend/index', $this->data );
        	}
        	if( $roles_id==13 || $roles_id==20)//For LC and LC Operator
        	{
        		$monthly_data_report_details['transfer_breakup']=$this->dashboard_model->get_transfer_status($from,$to,$dist);
        		//print_r($monthly_data_report_details['agewise_brakeup']) ;
        		$monthly_data_report_details["to"]=$to;
        		$monthly_data_report_details["from"]=$from;
        		$monthly_data_report_details["roles_id"]=$roles_id;
        		$this->data['title']="Transfer Status";
        		$this->data['main_content_view'] = $this->load->view('backend/staff/transfer_wise_chart',$monthly_data_report_details, TRUE);
        		$this->generate_data('backend/index', $this->data );
        	}
        }
        
        //end of transfer status
        
        //rescued child starts
        public function rescued_child_labourer_registered($from,$to) {
        	$this->load->model('dashboard_model');
        	$ses_ids=$this->session->userdata('login_user_id');
        	$role=$this->dashboard_model->get_role_id($ses_ids);
        	foreach($role as $rolep):
        	$roles_id=$rolep['account_role_id'];
        	$dist_id=$rolep['district_id'];
        	$stat_id=$rolep['state_id'];
        	endforeach;
        	//$from=$_POST['from'];
        	//$to=$_POST['to'];
        	
        	//echo $roles_id;
        	if( $roles_id==10 || $roles_id==11 || $roles_id==21 || $roles_id==12)//For LC and LC Operator
        	{
        		$monthly_data_report_details['rescued_child']=$this->dashboard_model->rescued_child_labourer_registered($from,$to,$dist);
        		//print_r($monthly_data_report_details['agewise_brakeup']) ;
        		$monthly_data_report_details["to"]=$to;
        		$monthly_data_report_details["from"]=$from;
        		$this->data['title']="Rescued Child ";
        		$this->data['main_content_view'] = $this->load->view('backend/staff/rescued_child_labour_chart',$monthly_data_report_details, TRUE);
        		$this->generate_data('backend/index', $this->data );
        	}
        }
        
     
        //rescued child ends
        
        //Rehabilation of LRD
        
        public function lrd_chart_details($from,$to) {
        	$this->load->model('dashboard_model');
        	$ses_ids=$this->session->userdata('login_user_id');
        	$role=$this->dashboard_model->get_role_id($ses_ids);
        	foreach($role as $rolep):
        	$roles_id=$rolep['account_role_id'];
        	$dist_id=$rolep['district_id'];
        	$stat_id=$rolep['state_id'];
        	endforeach;
        	//$from=$_POST['from'];
        	//$to=$_POST['to'];
        	
        	//echo $roles_id;
        	if( $roles_id==10 || $roles_id==11 || $roles_id==21 || $roles_id==12)//For LC and LC Operator
        	{
        		$monthly_data_report_details['labour_resource_department']=$this->dashboard_model->lrd_chart_details($from,$to,$dist);
        		//print_r($monthly_data_report_details['agewise_brakeup']) ;
        		$monthly_data_report_details["to"]=$to;
        		$monthly_data_report_details["from"]=$from;
        		$monthly_data_report_details["roles_id"]=$roles_id;
        		$this->data['title']="Rehabilitation Of Labour Resource Department ";
        		$this->data['main_content_view'] = $this->load->view('backend/staff/lrd_chart',$monthly_data_report_details, TRUE);
        		$this->generate_data('backend/index', $this->data );
        	}
        	if( ($roles_id==2)||($roles_id==5)||($roles_id==6)||($roles_id==7)||($roles_id==8)||($roles_id==14)||($roles_id==16)||($roles_id==18)||($roles_id==19))//For LC and LC Operator
        	{
        		$monthly_data_report_details['labour_resource_department']=$this->dashboard_model->lrd_chart_details($from,$to,$dist);
        		//print_r($monthly_data_report_details['labour_resource_department']) ;
        		$monthly_data_report_details["to"]=$to;
        		$monthly_data_report_details["from"]=$from;
        		$monthly_data_report_details["roles_id"]=$roles_id;
        		$this->data['title']="Rehabilitation Of Labour Resource Department ";
        		$this->data['main_content_view'] = $this->load->view('backend/staff/lrd_chart',$monthly_data_report_details, TRUE);
        		$this->generate_data('backend/index', $this->data );
        	}
        	if( $roles_id==13 || $roles_id==20)//For LC and LC Operator
        	{
        		$monthly_data_report_details['labour_resource_department']=$this->dashboard_model->lrd_chart_details($from,$to,$dist);
        		//print_r($monthly_data_report_details['agewise_brakeup']) ;
        		$monthly_data_report_details["to"]=$to;
        		$monthly_data_report_details["from"]=$from;
        		$monthly_data_report_details["roles_id"]=$roles_id;
        		$this->data['title']="Rehabilitation Of Labour Resource Department ";
        		$this->data['main_content_view'] = $this->load->view('backend/staff/lrd_chart',$monthly_data_report_details, TRUE);
        		$this->generate_data('backend/index', $this->data );
        	}
        }
        
     
        //End of Rehabilation
        
        
       //Rehabilation of cm relief fund 
        
        //Rehabilation of LRD
        
        public function cmrelief_chart_details($from,$to) {
        	$this->load->model('dashboard_model');
        	$ses_ids=$this->session->userdata('login_user_id');
        	$role=$this->dashboard_model->get_role_id($ses_ids);
        	foreach($role as $rolep):
        	$roles_id=$rolep['account_role_id'];
        	$dist_id=$rolep['district_id'];
        	$stat_id=$rolep['state_id'];
        	endforeach;
        	//$from=$_POST['from'];
        	//$to=$_POST['to'];
        	
        	//echo $roles_id;
        	if( $roles_id==10 || $roles_id==11 || $roles_id==21 || $roles_id==12)//For LC and LC Operator
        	{
        		$monthly_data_report_details['cmrelief']=$this->dashboard_model->cmrelief_chart_details($from,$to,$dist);
        		//print_r($monthly_data_report_details['agewise_brakeup']) ;
        		$monthly_data_report_details["to"]=$to;
        		$monthly_data_report_details["from"]=$from;
        		$monthly_data_report_details["roles_id"]=$roles_id;
        		$this->data['title']="Rehabilitation Of CM Relief Fund ";
        		$this->data['main_content_view'] = $this->load->view('backend/staff/cm_relief_chart',$monthly_data_report_details, TRUE);
        		$this->generate_data('backend/index', $this->data );
        	}
        	if( ($roles_id==2)||($roles_id==5)||($roles_id==6)||($roles_id==7)||($roles_id==8)||($roles_id==14)||($roles_id==16)||($roles_id==18)||($roles_id==19))//For LC and LC Operator
        	{
        		$monthly_data_report_details['cmrelief']=$this->dashboard_model->cmrelief_chart_details($from,$to,$dist);
        		//print_r($monthly_data_report_details['agewise_brakeup']) ;
        		$monthly_data_report_details["to"]=$to;
        		$monthly_data_report_details["from"]=$from;
        		$monthly_data_report_details["roles_id"]=$roles_id;
        		$this->data['title']="Rehabilitation Of CM Relief Fund ";
        		$this->data['main_content_view'] = $this->load->view('backend/staff/cm_relief_chart',$monthly_data_report_details, TRUE);
        		$this->generate_data('backend/index', $this->data );
        	}
        	if( $roles_id==13 || $roles_id==20)//For LC and LC Operator
        	{
        		$monthly_data_report_details['cmrelief']=$this->dashboard_model->cmrelief_chart_details($from,$to,$dist);
        		//print_r($monthly_data_report_details['agewise_brakeup']) ;
        		$monthly_data_report_details["to"]=$to;
        		$monthly_data_report_details["from"]=$from;
        		$monthly_data_report_details["roles_id"]=$roles_id;
        		$this->data['title']="Rehabilitation Of CM Relief Fund ";
        		$this->data['main_content_view'] = $this->load->view('backend/staff/cm_relief_chart',$monthly_data_report_details, TRUE);
        		$this->generate_data('backend/index', $this->data );
        	}
        }
        
        
        
        //end of cm relief fund
        
        
        //education rehabilation part starts
        
        
        public function edu_rehabilation_part($from,$to) {
        	$this->load->model('dashboard_model');
        	$ses_ids=$this->session->userdata('login_user_id');
        	$role=$this->dashboard_model->get_role_id($ses_ids);
        	foreach($role as $rolep):
        	$roles_id=$rolep['account_role_id'];
        	$dist_id=$rolep['district_id'];
        	$stat_id=$rolep['state_id'];
        	endforeach;
        	//$from=$_POST['from'];
        	//$to=$_POST['to'];
        	
        	//echo $roles_id;
        	if( $roles_id==10 || $roles_id==11 || $roles_id==21 || $roles_id==12)//For LC and LC Operator
        	{
        		$monthly_data_report_details['education_rehab']=$this->dashboard_model->edu_rehabilation_part($from,$to,$dist);
        		//print_r($monthly_data_report_details['agewise_brakeup']) ;
        		$monthly_data_report_details["to"]=$to;
        		$monthly_data_report_details["from"]=$from;
        		$monthly_data_report_details["roles_id"]=$roles_id;
        		$this->data['title']="Rehabilitation Of Education Part ";
        		$this->data['main_content_view'] = $this->load->view('backend/staff/education_rehab_chart',$monthly_data_report_details, TRUE);
        		$this->generate_data('backend/index', $this->data );
        	}
        	if( ($roles_id==2)||($roles_id==5)||($roles_id==6)||($roles_id==7)||($roles_id==8)||($roles_id==14)||($roles_id==16)||($roles_id==18)||($roles_id==19))//For LC and LC Operator
        	{
        		$monthly_data_report_details['education_rehab']=$this->dashboard_model->edu_rehabilation_part($from,$to,$dist);
        		//print_r($monthly_data_report_details['agewise_brakeup']) ;
        		$monthly_data_report_details["to"]=$to;
        		$monthly_data_report_details["from"]=$from;
        		$monthly_data_report_details["roles_id"]=$roles_id;
        		$this->data['title']="Rehabilitation Of Education Part ";
        		$this->data['main_content_view'] = $this->load->view('backend/staff/education_rehab_chart',$monthly_data_report_details, TRUE);
        		$this->generate_data('backend/index', $this->data );
        	}
        	if( $roles_id==13 || $roles_id==20)//For LC and LC Operator
        	{
        		$monthly_data_report_details['education_rehab']=$this->dashboard_model->edu_rehabilation_part($from,$to,$dist);
        		//print_r($monthly_data_report_details['agewise_brakeup']) ;
        		$monthly_data_report_details["to"]=$to;
        		$monthly_data_report_details["from"]=$from;
        		$monthly_data_report_details["roles_id"]=$roles_id;
        		$this->data['title']="Rehabilitation Of Education Part ";
        		$this->data['main_content_view'] = $this->load->view('backend/staff/education_rehab_chart',$monthly_data_report_details, TRUE);
        		$this->generate_data('backend/index', $this->data );
        	}
        }
        
     
        //eduction rehabilation part ends
        
        
        //cci part starts
        
        
        public function children_cci_chart($from,$to) {
        	$this->load->model('dashboard_model');
        	$this->load->model('mis_reports_model');
        	$ses_ids=$this->session->userdata('login_user_id');
        	$role=$this->dashboard_model->get_role_id($ses_ids);
        	foreach($role as $rolep):
        	$roles_id=$rolep['account_role_id'];
        	$dist_id=$rolep['district_id'];
        	$stat_id=$rolep['state_id'];
        	endforeach;
        	//$from=$_POST['from'];
        	//$to=$_POST['to'];
        	
        	//echo $roles_id;
        	if( $roles_id==10 || $roles_id==11 || $roles_id==21 || $roles_id==12)//For LC and LC Operator
        	{
        		$monthly_data_report_details['cci_chart_list']=$this->dashboard_model->children_cci_chart($from,$to,$dist);
        		$monthly_data_report_details['cci_chart_list_tabular']=$this->mis_reports_model->get_report_childs_to_cci_data($from,$to,$dist);
        		//print_r($monthly_data_report_details['cci_chart_list']) ;
        		$monthly_data_report_details["to"]=$to;
        		$monthly_data_report_details["from"]=$from;
        		$monthly_data_report_details["roles_id"]=$roles_id;
        		$this->data['title']="Children Sent to CCI ";
        		$this->data['main_content_view'] = $this->load->view('backend/staff/cci_list_chart',$monthly_data_report_details, TRUE);
        		$this->generate_data('backend/index', $this->data );
        	}
        	
        	if( ($roles_id==2)||($roles_id==5)||($roles_id==6)||($roles_id==7)||($roles_id==8)||($roles_id==14)||($roles_id==16)||($roles_id==18)||($roles_id==19))//For LC and LC Operator
        	{
        		$monthly_data_report_details['cci_chart_list']=$this->dashboard_model->children_cci_chart($from,$to,$dist);
        		$monthly_data_report_details['cci_chart_list_tabular']=$this->dashboard_model->get_report_childs_to_cci_data($from,$to,$dist);
        		//print_r($monthly_data_report_details['cci_chart_list']) ;
        		$monthly_data_report_details["to"]=$to;
        		$monthly_data_report_details["from"]=$from;
        		$monthly_data_report_details["roles_id"]=$roles_id;
        		$this->data['title']="Children Sent to CCI ";
        		$this->data['main_content_view'] = $this->load->view('backend/staff/cci_list_chart',$monthly_data_report_details, TRUE);
        		$this->generate_data('backend/index', $this->data );
        	}
        	
        	if( $roles_id==13 || $roles_id==20)//For LC and LC Operator
        	{
        		$monthly_data_report_details['cci_chart_list']=$this->dashboard_model->children_cci_chart($from,$to,$dist);
        		$monthly_data_report_details['cci_chart_list_tabular']=$this->mis_reports_model->get_report_childs_to_cci_data($from,$to,$dist);
        		//print_r($monthly_data_report_details['cci_chart_list']) ;
        		$monthly_data_report_details["to"]=$to;
        		$monthly_data_report_details["from"]=$from;
        		$monthly_data_report_details["roles_id"]=$roles_id;
        		$this->data['title']="Children Sent to CCI ";
        		$this->data['main_content_view'] = $this->load->view('backend/staff/cci_list_chart',$monthly_data_report_details, TRUE);
        		$this->generate_data('backend/index', $this->data );
        	}
        }
        
        
        //cci part part ends
        
      
        
        //notification model in dash board
        public function get_notification($roles_id,$ses_ids)
        {
          $ses_ids=$this->session->userdata('login_user_id');
          $this->load->model('notification_model');
          $text4=array("url_name"=>"New Child Transfered from Other District","url_link1"=>"child_rescued_list/view/","url_link2"=>"/3");

          if($roles_id==2)
          {
            $text1="numbers of pending cases,to be forwarded to CWC";

          }
          else{
            $text1="numbers of pending cases";

          }
          if($roles_id==2)
          {

            $text2=array("url_name"=>"Pending Child Rescued Registered by LEO","url_link1"=>"child_rescued_list/view/","url_link2"=>"/1");
            $text3=array("url_name"=>"Child Rescued Registered by CWC","url_link1"=>"child_rescued_list/view/","url_link2"=>"/1");
            $notification = array(
                "notification1" => $this->notification_model->getProjects($ses_ids), "notification2" => $this->notification_model->getPorjectsCwc($ses_ids),"notification3" => $this->notification_model->getFrwrdCwc($ses_ids),
                "text1"=>$text1,"text2"=>$text2,"text3"=>$text3,"text4"=>$text4,"mtitle"=>"Welcome".$this->session->userdata('name', $row->name)
            );
          }
          if($roles_id==7 )
          {

            $text2=array("url_name"=>"New Child forwarded by LS","url_link1"=>"child_rescued_list/view/","url_link2"=>"/2");
            $text3="";
            $notification = array(
                "notification1" => $this->notification_model->getProjects($ses_ids),"notification2"=>"","notification3" => $this->notification_model->getFrwrdCwc($ses_ids),
                  "text1"=>$text1,"text2"=>$text2,"text3"=>$text3,"text4"=>$text4,"mtitle"=>"Welcome".$this->session->userdata('name', $row->name)
            );
          }

          return $notification;
        }
        ///for Dcpu DAshboard (2 ND Menu)
        public function dcpu()
        {
          if ($this->session->userdata('staff_login') != 1)
          {
            $this->session->set_userdata('last_page' , current_url());
            redirect(base_url(), 'refresh');
          }
          $ses_ids=$this->session->userdata('login_user_id');
          $this->load->model('dashboard_model');
          //Toget the account_role_id
          $role=$this->dashboard_model->get_role_id($ses_ids);
          foreach($role as $rolep):
            $roles_id=$rolep['account_role_id'];
            $dist_id=$rolep['district_id'];
            $stat_id=$rolep['state_id'];
          endforeach;
          if($roles_id==8)
          {
            $dashboard="";
            $this->data['main_content_view'] = $this->load->view('backend/staff/dcpu_dashboard',$dashboard, TRUE);

          }

        $this->data['title']="Dashboard";
        $this->generate_data('backend/index', $this->data );

        }
        //LC Dashboard
        // LC dashboard cumulative
        public function get_cumulative($from,$to,$type="") {
        	$this->load->model('dashboard_model');
        	$ses_ids=$this->session->userdata('login_user_id');
        	$role=$this->dashboard_model->get_role_id($ses_ids);
        	foreach($role as $rolep):
        	$roles_id=$rolep['account_role_id'];
        	$dist_id=$rolep['district_id'];
        	$stat_id=$rolep['state_id'];
        	endforeach;
        	//$from=$_POST['from'];
        	//$to=$_POST['to'];
        	
        	//echo $roles_id;
        	if( $roles_id==10 || $roles_id==11 || $roles_id==21 || $roles_id==12)//For LC and LC Operator
        	{
        		$get_cumulative['cumlative_list']=$this->dashboard_model->cumulative_chart($from,$to,$dist);
        		//print_r($monthly_data_report_details['agewise_brakeup']) ;
        		$get_cumulative["to"]=$to;
        		$get_cumulative["from"]=$from;
        		$get_cumulative["roles_id"]=$roles_id;
        		$this->data['title']="Cumulative Statistics";
        		$this->data['main_content_view'] = $this->load->view('backend/staff/cumulative_chart',$get_cumulative, TRUE);
        		$this->generate_data('backend/index', $this->data );
        	}
        	if( ($roles_id==2)||($roles_id==5)||($roles_id==6)||($roles_id==7)||($roles_id==8)||($roles_id==14)||($roles_id==16)||($roles_id==18)||($roles_id==19))//For LC and LC Operator
        	{
        		//echo $roles_id;
        		
        		$get_cumulative['cumlative_list']=$this->dashboard_model->cumulative_chart($from,$to,$dist);
        		//print_r($monthly_data_report_details['cumlative_list']) ;
        		$get_cumulative["to"]=$to;
        		$get_cumulative["from"]=$from;
        		$get_cumulative["roles_id"]=$roles_id;
        		$this->data['title']="Cumulative Statistics";
        		$this->data['main_content_view'] = $this->load->view('backend/staff/cumulative_chart',$get_cumulative, TRUE);
        		$this->generate_data('backend/index', $this->data );
        	}
        	if( $roles_id==13 || $roles_id==20 )//For LC and LC Operator
        	{
        		//echo $roles_id;
        		
        		$get_cumulative['cumlative_list']=$this->dashboard_model->cumulative_chart($from,$to,$dist);
        		//print_r($monthly_data_report_details['cumlative_list']) ;
        		$get_cumulative["to"]=$to;
        		$get_cumulative["from"]=$from;
        		$get_cumulative["roles_id"]=$roles_id;
        		$this->data['title']="Cumulative Statistics";
        		$this->data['main_content_view'] = $this->load->view('backend/staff/cumulative_chart',$get_cumulative, TRUE);
        		$this->generate_data('backend/index', $this->data );
        	}
        
		  
        }
        //lc dashboard category

      public  function get_category() {
			
		$this->load->model('dashboard_model');
		   $ses_ids=$this->session->userdata('login_user_id');
		    $role=$this->dashboard_model->get_role_id($ses_ids);
			  foreach($role as $rolep):
				$roles_id=$rolep['account_role_id'];
				$dist_id=$rolep['district_id'];
				$stat_id=$rolep['state_id'];
			  endforeach;		  
			 $from=$_POST['from'];
			 $to=$_POST['to'];	
			 //echo $roles_id;
	 if( $roles_id==10 || $roles_id==11 || $roles_id==21 || $roles_id==12)//For LC and LC Operator		
		{
      	 $child_dist =$this->db->query("select area_name,area_id from child_area_detail where parent_id='IND010'  order by area_name")->result_array();

      	 $child_sc = $this->db->query("select sum(x.category='SC') as num_child,y.area_name as area_name,y.area_id as area_id  FROM child_area_detail as y 
		 left join child_basic_detail as x on x.district_id =y.area_id 
		 where  x.category='SC' and y.parent_id ='IND010' AND  STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."'
		 group by y.area_name order by y.area_name")->result_array();

         $child_st = $this->db->query("select sum(category='ST') as num_child,y.area_name as area_name,y.area_id as area_id FROM child_area_detail as y  left join child_basic_detail as x on x.district_id =y.area_id 
		 where  x.category='ST' and y.parent_id ='IND010' AND  STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."'
		 group by y.area_name order by y.area_name")->result_array();

         $child_obc = $this->db->query("
		 select sum(x.category='OBC') as num_child,y.area_name as area_name,y.area_id as area_id  FROM child_area_detail as y 
		 left join child_basic_detail as x on x.district_id =y.area_id 
		 where  x.category='OBC' and y.parent_id ='IND010' AND  STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."'
		 group by y.area_name order by y.area_name")->result_array();

         $child_gen = $this->db->query("select sum(x.category='General') as num_child,y.area_name as area_name,y.area_id as area_id  FROM child_area_detail as y 
		 left join child_basic_detail as x on x.district_id =y.area_id 
		 where  x.category='General' and y.parent_id ='IND010' AND  STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."'
		 group by y.area_name order by y.area_name")->result_array();

         $child_ebc = $this->db->query("select sum(x.category='EBC') as num_child,y.area_name as area_name,y.area_id as area_id  FROM child_area_detail as y 
		 left join child_basic_detail as x on x.district_id =y.area_id 
		 where  x.category='EBC' and y.parent_id ='IND010' AND  STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."'
		 group by y.area_name order by y.area_name")->result_array();

         $child_other = $this->db->query("select sum(x.category='Other') as num_child,y.area_name as area_name,y.area_id as area_id  FROM child_area_detail as y 
		 left join child_basic_detail as x on x.district_id =y.area_id 
		 where  x.category='Other' and y.parent_id ='IND010' AND  STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."'
		 group by y.area_name order by y.area_name")->result_array();
		}
		else if($roles_id==13 || $roles_id==20 )//DLC
		{
			$child_dist =$this->db->query("select child_area_detail.area_name as area_name,child_area_detail.area_id as area_id from child_area_detail
			   where child_area_detail.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $dist_id ."') group by child_area_detail.area_name order by child_area_detail.area_name")->result_array();
			   
		   $child_sc = $this->db->query("select sum(x.category='SC') as num_child,y.area_name as area_name,y.area_id as area_id  FROM child_area_detail as y 
			 left join child_basic_detail as x on x.district_id =y.area_id 
			 where  x.category='SC' and y.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $dist_id ."') AND  STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."'
			group by y.area_name order by y.area_name")->result_array();
			
			 $child_st = $this->db->query("select sum(category='ST') as num_child,y.area_name as area_name,y.area_id as area_id FROM child_area_detail as y  left join child_basic_detail as x on x.district_id =y.area_id 
			 where  x.category='ST' and y.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $dist_id ."') AND  STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."'
			 group by y.area_name order by y.area_name")->result_array();
			 
			 $child_obc = $this->db->query("
			 select sum(x.category='OBC') as num_child,y.area_name as area_name,y.area_id as area_id  FROM child_area_detail as y 
			 left join child_basic_detail as x on x.district_id =y.area_id 
			 where  x.category='OBC' and y.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $dist_id ."') AND  STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."'
			 group by y.area_name order by y.area_name")->result_array();
			 
			 $child_gen = $this->db->query("select sum(x.category='General') as num_child,y.area_name as area_name,y.area_id as area_id  FROM child_area_detail as y 
		 left join child_basic_detail as x on x.district_id =y.area_id 
		 where  x.category='General' and y.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $dist_id ."') AND  STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."'
		 group by y.area_name order by y.area_name")->result_array();
			 $child_ebc = $this->db->query("select sum(x.category='EBC') as num_child,y.area_name as area_name,y.area_id as area_id  FROM child_area_detail as y 
			 left join child_basic_detail as x on x.district_id =y.area_id 
			 where  x.category='EBC' and y.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $dist_id ."') AND  STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."'
			 group by y.area_name order by y.area_name")->result_array();
			 $child_other = $this->db->query("select sum(x.category='Other') as num_child,y.area_name as area_name,y.area_id as area_id  FROM child_area_detail as y 
		 left join child_basic_detail as x on x.district_id =y.area_id 
		 where  x.category='Other' and y.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $dist_id ."') AND  STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."'
		 group by y.area_name order by y.area_name")->result_array();
		}
		
        	$cumulative = array();
		   
        	for($i=0; $i<sizeof($child_dist); $i++){
        		$cumulative[$i][0]=$child_dist[$i]['area_name'];
				$cumulative[$i][1]=0;
				$cumulative[$i][2]=0;
				$cumulative[$i][3]=0;
				$cumulative[$i][4]=0;
				$cumulative[$i][5]=0;
				$cumulative[$i][6]=0;
				if(sizeof($child_sc)>0)
				{
					
				    foreach($child_sc as $row)
					{
						if($child_dist[$i]['area_id']==$row['area_id'])
						{
						$cumulative[$i][1]=$row['num_child'];
					
						break;
						}
						else{
						  $cumulative[$i][1]=0;
						}
					}
					
				}
				
				if(sizeof($child_st)>0)
				{
				    foreach($child_st as $row)
					{
					if($child_dist[$i]['area_id']==$row['area_id'])
					{
					$cumulative[$i][2]=$row['num_child'];
					break;
					}
					else{
					  $cumulative[$i][2]=0;
					}
					}
					
				}
				
				if(sizeof($child_obc)>0)
				{
				    foreach($child_obc as $row)
					{
						if($child_dist[$i]['area_id']==$row['area_id'])
						{
						$cumulative[$i][3]=$row['num_child'];
						break;
						}
						else{
						  $cumulative[$i][3]=0;
						}
					}
					
				}
				
				if(sizeof($child_gen)>0)
				{
				    foreach($child_gen as $row)
					{
						if($child_dist[$i]['area_id']==$row['area_id'])
						{
						$cumulative[$i][4]=$row['num_child'];
						break;
						}
						else{
						  $cumulative[$i][4]=0;
						}
					}
					
				}
				
				if(sizeof($child_ebc)>0)
				{
				    foreach($child_ebc as $row)
					{
						if($child_dist[$i]['area_id']==$row['area_id'])
						{
						$cumulative[$i][5]=$row['num_child'];
						break;
						}
						else{
						  $cumulative[$i][5]=0;
						}
					}
					
				}
				
				if(sizeof($child_other)>0)
				{
				    foreach($child_other as $row)
					{
						if($child_dist[$i]['area_id']==$row['area_id'])
						{
						$cumulative[$i][6]=$row['num_child'];
						break;
						}
						else{
						  $cumulative[$i][6]=0;
						}
					}
					
				}
				
				$cumulative[$i][7]=$cumulative[$i][1]+$cumulative[$i][2]+$cumulative[$i][3]+$cumulative[$i][4]+$cumulative[$i][5]+$cumulative[$i][6];
				$tot1+=$cumulative[$i][1];
				$tot2+=$cumulative[$i][2];
				$tot3+=$cumulative[$i][3];
				$tot4+=$cumulative[$i][4];
				$tot5+=$cumulative[$i][5];
				$tot6+=$cumulative[$i][6];
        	}
			$cumulative[sizeof($child_dist)][0]="Total";
			 $cumulative[sizeof($child_dist)][1]=$tot1;
			 $cumulative[sizeof($child_dist)][2]=$tot2;
			 $cumulative[sizeof($child_dist)][3]=$tot3;
			 $cumulative[sizeof($child_dist)][4]=$tot4;
			 $cumulative[sizeof($child_dist)][5]=$tot5;
			 $cumulative[sizeof($child_dist)][6]=$tot6;
			 $cumulative[sizeof($child_dist)][7]=$tot1+$tot2+$tot3+$tot4+$tot5+$tot6;
        	
        	echo json_encode($cumulative);
        }

     
		
        //Labour valye edu
        public function get_RehEdu() {
				$this->load->model('dashboard_model');
		   $ses_ids=$this->session->userdata('login_user_id');
		    $role=$this->dashboard_model->get_role_id($ses_ids);
			  foreach($role as $rolep):
				$roles_id=$rolep['account_role_id'];
				$dist_id=$rolep['district_id'];
				$stat_id=$rolep['state_id'];
			  endforeach;		  
			 $from=$_POST['from'];
			 $to=$_POST['to'];	
			 //echo $roles_id;
			 if( $roles_id==10 || $roles_id==11 || $roles_id==21 || $roles_id==12)//For LC and LC Operator
		{
        	$child_dist =$this->db->query("select area_name,area_id from child_area_detail where parent_id='IND010' group by area_name order by area_name")->result_array();
			
        	 $child_Enrolled = $this->db->query("select sum(enrolled_school='No') as num_child,area_id from (select y.area_id, y.area_name, w.enrolled_school from child_area_detail as y left join (child_basic_detail as x left join child_education_department  as w on x.child_id=w.child_id) on x.district_id =y.area_id where y.parent_id ='IND010' AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name order by area_name")->result_array();
		}
		else if($roles_id==13 || $roles_id==20 )
		{
			$child_dist =$this->db->query("select child_area_detail.area_name as area_name,child_area_detail.area_id as area_id from child_area_detail
			   where child_area_detail.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $dist_id ."') group by child_area_detail.area_name order by child_area_detail.area_name")->result_array();
			    $child_Enrolled = $this->db->query("select sum(enrolled_school='No') as num_child,area_id from (select y.area_id, y.area_name, w.enrolled_school from child_area_detail as y left join (child_basic_detail as x left join child_education_department  as w on x.child_id=w.child_id) on x.district_id =y.area_id where y.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $dist_id ."') AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name order by area_name")->result_array();
			
		}
        	$cumulative = array();
        	for($i=0; $i<sizeof($child_dist); $i++){
        		$cumulative[$i][0]=$child_dist[$i]['area_name'];
				  $cumulative[$i][1]=0;

				if(sizeof($child_Enrolled)>0)
				{					
				    foreach($child_Enrolled as $row)
					{				
						if($child_dist[$i]['area_id']==$row['area_id'])
						{
						if($row['num_child']==NULL){
								$cumulative[$i][1]=0 ;
								}
								else{
								$cumulative[$i][1]=$row['num_child'];

								}
						break;
						}
						else{
						  $cumulative[$i][1]=0;
						}
					}
					
				} 								
        		$cumulative[$i][2]=$cumulative[$i][1];
				$tot1+=$cumulative[$i][1];
				$tot2+=$cumulative[$i][2];
				
        	}
			 $cumulative[sizeof($child_dist)][0]="Total";
			 $cumulative[sizeof($child_dist)][1]=$tot1;
			 $cumulative[sizeof($child_dist)][2]=$tot2;
			 
        	echo json_encode($cumulative);
        }
        //Labour Rural
      public  function get_RehRural() {
		  $this->load->model('dashboard_model');
		   $ses_ids=$this->session->userdata('login_user_id');
		    $role=$this->dashboard_model->get_role_id($ses_ids);
			  foreach($role as $rolep):
				$roles_id=$rolep['account_role_id'];
				$dist_id=$rolep['district_id'];
				$stat_id=$rolep['state_id'];
			  endforeach;		  
			 $from=$_POST['from'];
			 $to=$_POST['to'];	
			 //echo $roles_id;
			 if( $roles_id==10 || $roles_id==11 || $roles_id==21 || $roles_id==12)//For LC and LC Operator
		{
        
        	$child_dist =$this->db->query("select area_name,area_id from child_area_detail where parent_id='IND010' group by area_name order by area_name")->result_array();
			
        	$child_mgnrega = $this->db->query("select sum(is_mgnrega='No') as num_child,area_id from (select y.area_id, y.area_name, w.is_mgnrega from child_area_detail as y left join (child_basic_detail as x left join child_rural_development_department as w on x.child_id=w.child_id) on x.district_id =y.area_id where y.parent_id ='IND010' AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name order by area_name")->result_array();

        		 $child_SGSY = $this->db->query("select sum(is_sgsy='No') as num_child,area_id from (select y.area_id, y.area_name, w.is_sgsy from child_area_detail as y left join (child_basic_detail as x left join child_rural_development_department as w on x.child_id=w.child_id) on x.district_id =y.area_id where y.parent_id ='IND010' AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name order by area_name")->result_array();

        		  $child_iay = $this->db->query("select sum(is_iay='No') as num_child,area_id from (select y.area_id, y.area_name, w.is_iay from child_area_detail as y left join (child_basic_detail as x left join child_rural_development_department as w on x.child_id=w.child_id) on x.district_id =y.area_id where y.parent_id ='IND010' AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name order by area_name")->result_array();
		}
		else if($roles_id==13 || $roles_id==20 )//for DLC
		{
			$child_dist =$this->db->query("select child_area_detail.area_name as area_name,child_area_detail.area_id as area_id from child_area_detail
			   where child_area_detail.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $dist_id ."') group by child_area_detail.area_name order by child_area_detail.area_name")->result_array();
			   
			   $child_mgnrega = $this->db->query("select sum(is_mgnrega='No') as num_child,area_id from (select y.area_id, y.area_name, w.is_mgnrega from child_area_detail as y left join (child_basic_detail as x left join child_rural_development_department as w on x.child_id=w.child_id) on x.district_id =y.area_id where y.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $dist_id ."') AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name order by area_name")->result_array();

        		 $child_SGSY = $this->db->query("select sum(is_sgsy='No') as num_child,area_id from (select y.area_id, y.area_name, w.is_sgsy from child_area_detail as y left join (child_basic_detail as x left join child_rural_development_department as w on x.child_id=w.child_id) on x.district_id =y.area_id where y.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $dist_id ."') AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name order by area_name")->result_array();

        		  $child_iay = $this->db->query("select sum(is_iay='No') as num_child,area_id from (select y.area_id, y.area_name, w.is_iay from child_area_detail as y left join (child_basic_detail as x left join child_rural_development_department as w on x.child_id=w.child_id) on x.district_id =y.area_id where y.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $dist_id ."') AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name order by area_name")->result_array();
		}
        	$cumulative = array();
        	for($i=0; $i<sizeof($child_dist); $i++){
        		$cumulative[$i][0]=$child_dist[$i]['area_name'];
				$cumulative[$i][1]=0;
				$cumulative[$i][2]=0;
				$cumulative[$i][3]=0;
				if(sizeof($child_mgnrega)>0)
				{					
				    foreach($child_mgnrega as $row)
					{				
						if($child_dist[$i]['area_id']==$row['area_id'])
						{
							if($row['num_child']==NULL){
							$cumulative[$i][1]=0 ;
							}
							else{
							$cumulative[$i][1]=$row['num_child'];
							}
						break;
						}
						else{
						  $cumulative[$i][1]=0;
						}
					}
					
				}
				if(sizeof($child_SGSY)>0)
				{					
				    foreach($child_SGSY as $row)
					{				
						if($child_dist[$i]['area_id']==$row['area_id'])
						{
						if($row['num_child']==NULL){
							$cumulative[$i][2]=0 ;
							}
							else{
							$cumulative[$i][2]=$row['num_child'];
							}
						break;
						}
						else{
						  $cumulative[$i][2]=0;
						}
					}
					
				} 
				if(sizeof($child_iay)>0)
				{					
				    foreach($child_iay as $row)
					{				
						if($child_dist[$i]['area_id']==$row['area_id'])
						{
							if($row['num_child']==NULL){
							$cumulative[$i][3]=0 ;
							}
							else{
							$cumulative[$i][3]=$row['num_child'];
							}
						break;
						}
						else{
						  $cumulative[$i][3]=0;
						}
					}
					
				} 					
				
        	    $cumulative[$i][4]=$cumulative[$i][1]+$cumulative[$i][2]+$cumulative[$i][3];
				$tot1+=$cumulative[$i][1];
				$tot2+=$cumulative[$i][2];
				$tot3+=$cumulative[$i][3];
				$tot4+=$cumulative[$i][4];
				
        	}
			 $cumulative[sizeof($child_dist)][0]="Total";
			 $cumulative[sizeof($child_dist)][1]=$tot1;
			 $cumulative[sizeof($child_dist)][2]=$tot2;
			 $cumulative[sizeof($child_dist)][3]=$tot3;
			 $cumulative[sizeof($child_dist)][4]=$tot4;
			 
        	echo json_encode($cumulative);
        }

        public function get_RehUrb() {
			$this->load->model('dashboard_model');
		   $ses_ids=$this->session->userdata('login_user_id');
		    $role=$this->dashboard_model->get_role_id($ses_ids);
			  foreach($role as $rolep):
				$roles_id=$rolep['account_role_id'];
				$dist_id=$rolep['district_id'];
				$stat_id=$rolep['state_id'];
			  endforeach;		  
			 $from=$_POST['from'];
			 $to=$_POST['to'];	
			 //echo $roles_id;
			 if( $roles_id==10 || $roles_id==11 || $roles_id==21 || $roles_id==12)//For LC and LC Operator
		{
        	$child_dist =$this->db->query("select area_name,area_id from child_area_detail where parent_id='IND010' group by area_name order by area_name")->result_array();
			 $from=$_POST['from'];
		     $to=$_POST['to'];
        	  $child_SJSRY = $this->db->query("select sum(is_sjsry='No') as num_child,area_id from (select y.area_id, y.area_name, w.is_sjsry from child_area_detail as y left join (child_basic_detail as x left join child_urban_development_deoartment  as w on x.child_id=w.child_id) on x.district_id =y.area_id where y.parent_id ='IND010' AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name order by area_name")->result_array();

        		$child_jrum = $this->db->query("select sum(is_sjsry='No') as num_child,area_id from (select y.area_id, y.area_name, w.is_sjsry from child_area_detail as y left join (child_basic_detail as x left join child_urban_development_deoartment  as w on x.child_id=w.child_id) on x.district_id =y.area_id where y.parent_id ='IND010' AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name order by area_name")->result_array();
				
		}
		else if($roles_id==13 || $roles_id==20 )//For DLC
		{
			$child_dist =$this->db->query("select child_area_detail.area_name as area_name,child_area_detail.area_id as area_id from child_area_detail
			   where child_area_detail.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $dist_id ."') group by child_area_detail.area_name order by child_area_detail.area_name")->result_array();
			$child_SJSRY = $this->db->query("select sum(is_sjsry='No') as num_child,area_id from (select y.area_id, y.area_name, w.is_sjsry from child_area_detail as y left join (child_basic_detail as x left join child_urban_development_deoartment  as w on x.child_id=w.child_id) on x.district_id =y.area_id where y.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $dist_id ."') AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name order by area_name")->result_array();

        		$child_jrum = $this->db->query("select sum(is_sjsry='No') as num_child,area_id from (select y.area_id, y.area_name, w.is_sjsry from child_area_detail as y left join (child_basic_detail as x left join child_urban_development_deoartment  as w on x.child_id=w.child_id) on x.district_id =y.area_id where y.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $dist_id ."') AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name order by area_name")->result_array();
				
			
		}
		
        	$cumulative = array();
        	for($i=0; $i<sizeof($child_dist); $i++){
        		$cumulative[$i][0]=$child_dist[$i]['area_name'];
				$cumulative[$i][1]=0;
				$cumulative[$i][2]=0;
				if(sizeof($child_SJSRY)>0)
				{					
				    foreach($child_SJSRY as $row)
					{				
						if($child_dist[$i]['area_id']==$row['area_id'])
						{
							if($row['num_child']==NULL){
							$cumulative[$i][1]=0 ;
							}
							else{
							$cumulative[$i][1]=$row['num_child'];
							}
						break;
						}
						else{
						  $cumulative[$i][1]=0;
						}
					}
					
				}
				
				if(sizeof($child_jrum)>0)
				{					
				    foreach($child_jrum as $row)
					{				
						if($child_dist[$i]['area_id']==$row['area_id'])
						{
						if($row['num_child']==NULL){
							$cumulative[$i][2]=0 ;
							}
							else{
							$cumulative[$i][2]=$row['num_child'];
							}
						break;
						}
						else{
						  $cumulative[$i][2]=0;
						}
					}
					
				}
				
        		$cumulative[$i][3]=$cumulative[$i][1]+$cumulative[$i][2];
				$tot1+=$cumulative[$i][1];
				$tot2+=$cumulative[$i][2];
				$tot3+=$cumulative[$i][3];
				
        	}
			 $cumulative[sizeof($child_dist)][0]="Total";
			 $cumulative[sizeof($child_dist)][1]=$tot1;
			 $cumulative[sizeof($child_dist)][2]=$tot2;
			 $cumulative[sizeof($child_dist)][3]=$tot3;
			 
        	echo json_encode($cumulative);
        }
        //revenue
        public function get_RehRev() {
			$this->load->model('dashboard_model');
		   $ses_ids=$this->session->userdata('login_user_id');
		    $role=$this->dashboard_model->get_role_id($ses_ids);
			  foreach($role as $rolep):
				$roles_id=$rolep['account_role_id'];
				$dist_id=$rolep['district_id'];
				$stat_id=$rolep['state_id'];
			  endforeach;		  
			 $from=$_POST['from'];
			 $to=$_POST['to'];	
			 //echo $roles_id;
			 if( $roles_id==10 || $roles_id==11 || $roles_id==21 || $roles_id==12)//For LC and LC Operator
		{
        	$child_dist =$this->db->query("select area_name,area_id from child_area_detail where parent_id='IND010' group by area_name order by area_name")->result_array();
			
        	  $child_Land = $this->db->query("select sum(is_benefited_landsettlement='No') as num_child,area_id from (select y.area_id, y.area_name, w.is_benefited_landsettlement from child_area_detail as y left join (child_basic_detail as x left join child_revenue_department as w on x.child_id=w.child_id) on x.district_id =y.area_id where y.parent_id ='IND010' AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name order by area_name")->result_array();
		}
			else if($roles_id==13)//for DLC
			{
				$child_dist =$this->db->query("select child_area_detail.area_name as area_name,child_area_detail.area_id as area_id from child_area_detail
				   where child_area_detail.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $dist_id ."') group by child_area_detail.area_name order by child_area_detail.area_name")->result_array();
				   
				   $child_Land = $this->db->query("select sum(is_benefited_landsettlement='No') as num_child,area_id from (select y.area_id, y.area_name, w.is_benefited_landsettlement from child_area_detail as y left join (child_basic_detail as x left join child_revenue_department as w on x.child_id=w.child_id) on x.district_id =y.area_id where y.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $dist_id ."') AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name order by area_name")->result_array();
			}
        	$cumulative = array();
        	for($i=0; $i<sizeof($child_dist); $i++){
        		$cumulative[$i][0]=$child_dist[$i]['area_name'];
				$cumulative[$i][1]=0;
				if(sizeof($child_Land)>0)
				{					
				    foreach($child_Land as $row)
					{				
						if($child_dist[$i]['area_id']==$row['area_id'])
						{
							if($row['num_child']==NULL){
							$cumulative[$i][1]=0 ;
							}
							else{
							$cumulative[$i][1]=$row['num_child'];
							}
						break;
						}
						else{
						  $cumulative[$i][1]=0;
						}
					}
					
				}
        		$cumulative[$i][2]=$cumulative[$i][1];
                $tot1+=$cumulative[$i][1];
				$tot2+=$cumulative[$i][2];
				
        	}
			 $cumulative[sizeof($child_dist)][0]="Total";
			 $cumulative[sizeof($child_dist)][1]=$tot1;
			 $cumulative[sizeof($child_dist)][2]=$tot2;
			 
        	echo json_encode($cumulative);
        }

        //revenue
        public function get_RehHealth() {
			$this->load->model('dashboard_model');
		   $ses_ids=$this->session->userdata('login_user_id');
		    $role=$this->dashboard_model->get_role_id($ses_ids);
			  foreach($role as $rolep):
				$roles_id=$rolep['account_role_id'];
				$dist_id=$rolep['district_id'];
				$stat_id=$rolep['state_id'];
			  endforeach;		  
			 $from=$_POST['from'];
			 $to=$_POST['to'];	
			 //echo $roles_id;
			 if( $roles_id==10 || $roles_id==11 || $roles_id==21 || $roles_id==12)//For LC and LC Operator
		{
        	$child_dist =$this->db->query("select area_name,area_id from child_area_detail where parent_id='IND010' group by area_name order by area_name")->result_array();
			 
        	  $child_Hcard = $this->db->query("select sum(is_health_cards='No') as num_child,area_id from (select y.area_id, y.area_name, w.is_health_cards from child_area_detail as y left join (child_basic_detail as x left join child_health_department as w on x.child_id=w.child_id) on x.district_id =y.area_id where y.parent_id ='IND010' AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name order by area_name")->result_array();
        }
        else if($roles_id==13 || $roles_id==20 )
		{
			$child_dist =$this->db->query("select child_area_detail.area_name as area_name,child_area_detail.area_id as area_id from child_area_detail
				   where child_area_detail.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $dist_id ."') group by child_area_detail.area_name order by child_area_detail.area_name")->result_array();
			  $child_Hcard = $this->db->query("select sum(is_health_cards='No') as num_child,area_id from (select y.area_id, y.area_name, w.is_health_cards from child_area_detail as y left join (child_basic_detail as x left join child_health_department as w on x.child_id=w.child_id) on x.district_id =y.area_id where y.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $dist_id ."') AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name order by area_name")->result_array();
		
			
		}
        	$cumulative = array();
        	for($i=0; $i<sizeof($child_dist); $i++){
        		$cumulative[$i][0]=$child_dist[$i]['area_name'];
				$cumulative[$i][1]=0;
				if(sizeof($child_Hcard)>0)
				{					
				    foreach($child_Hcard as $row)
					{				
						if($child_dist[$i]['area_id']==$row['area_id'])
						{
						if($row['num_child']==NULL){
							$cumulative[$i][1]=0 ;
							}
							else{
							$cumulative[$i][1]=$row['num_child'];
							}
						break;
						}
						else{
						  $cumulative[$i][1]=0;
						}
					}
					
				}
        		$cumulative[$i][2]=$cumulative[$i][1];
        	    $tot1+=$cumulative[$i][1];
				$tot2+=$cumulative[$i][2];
				
        	}
			 $cumulative[sizeof($child_dist)][0]="Total";
			 $cumulative[sizeof($child_dist)][1]=$tot1;
			 $cumulative[sizeof($child_dist)][2]=$tot2;
			 
        	echo json_encode($cumulative);
        }

        //revenue
        public function get_RehScSt() {
			$this->load->model('dashboard_model');
		   $ses_ids=$this->session->userdata('login_user_id');
		    $role=$this->dashboard_model->get_role_id($ses_ids);
			  foreach($role as $rolep):
				$roles_id=$rolep['account_role_id'];
				$dist_id=$rolep['district_id'];
				$stat_id=$rolep['state_id'];
			  endforeach;		  
			 $from=$_POST['from'];
			 $to=$_POST['to'];	
			 //echo $roles_id;
			 if( $roles_id==10 || $roles_id==11 || $roles_id==21 || $roles_id==12)//For LC and LC Operator
		{
        	$child_dist =$this->db->query("select area_name,area_id from child_area_detail where parent_id='IND010' group by area_name order by area_name")->result_array();
			
        	 $child_Scholarships = $this->db->query("select sum(benefited_scholarships='No') as num_child,area_id from (select y.area_id, y.area_name, w.benefited_scholarships from child_area_detail as y left join (child_basic_detail as x left join child_scst_department as w on x.child_id=w.child_id) on x.district_id =y.area_id where y.parent_id ='IND010' AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name order by area_name")->result_array();
		}
		else if($roles_id==13 || $roles_id==20 )
		{
			$child_dist =$this->db->query("select child_area_detail.area_name as area_name,child_area_detail.area_id as area_id from child_area_detail
				   where child_area_detail.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $dist_id ."') group by child_area_detail.area_name order by child_area_detail.area_name")->result_array();
				   
				   $child_Scholarships = $this->db->query("select sum(benefited_scholarships='No') as num_child,area_id from (select y.area_id, y.area_name, w.benefited_scholarships from child_area_detail as y left join (child_basic_detail as x left join child_scst_department as w on x.child_id=w.child_id) on x.district_id =y.area_id where y.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $dist_id ."') AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name order by area_name")->result_array();
			
		}
        	$cumulative = array();
        	for($i=0; $i<sizeof($child_dist); $i++){
        		$cumulative[$i][0]=$child_dist[$i]['area_name'];
				$cumulative[$i][1]=0;
				if(sizeof($child_Scholarships)>0)
				{					
				    foreach($child_Scholarships as $row)
					{				
						if($child_dist[$i]['area_id']==$row['area_id'])
						{
							if($row['num_child']==NULL){
							$cumulative[$i][1]=0 ;
							}
							else{
							$cumulative[$i][1]=$row['num_child'];
							}
								break;
						}
						else{
						  $cumulative[$i][1]=0;
						}
					}
					
				}
				
        	    $cumulative[$i][2]=$cumulative[$i][1];
        	    $tot1+=$cumulative[$i][1];
				$tot2+=$cumulative[$i][2];
				
        	}
			 $cumulative[sizeof($child_dist)][0]="Total";
			 $cumulative[sizeof($child_dist)][1]=$tot1;
			 $cumulative[sizeof($child_dist)][2]=$tot2;
			 
        	echo json_encode($cumulative);
        }

        //revenue food
      public   function get_RehFood() {
		  $this->load->model('dashboard_model');
		   $ses_ids=$this->session->userdata('login_user_id');
		    $role=$this->dashboard_model->get_role_id($ses_ids);
			  foreach($role as $rolep):
				$roles_id=$rolep['account_role_id'];
				$dist_id=$rolep['district_id'];
				$stat_id=$rolep['state_id'];
			  endforeach;		  
			 $from=$_POST['from'];
			 $to=$_POST['to'];	
			 //echo $roles_id;
			 if( $roles_id==10 || $roles_id==11 || $roles_id==21 || $roles_id==12)//For LC and LC Operator
		{
        	$child_dist =$this->db->query("select area_name,area_id from child_area_detail where parent_id='IND010' group by area_name order by area_name")->result_array();
			
        	$child_Rcard = $this->db->query("select sum(benefited_scholarships='No') as num_child,area_id from (select y.area_id, y.area_name, w.benefited_scholarships from child_area_detail as y left join (child_basic_detail as x left join child_scst_department as w on x.child_id=w.child_id) on x.district_id =y.area_id where y.parent_id ='IND010' AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name order by area_name")->result_array();

        		 $child_Pds = $this->db->query("select sum(benefited_scholarships='No') as num_child,area_id from (select y.area_id, y.area_name, w.benefited_scholarships from child_area_detail as y left join (child_basic_detail as x left join child_scst_department as w on x.child_id=w.child_id) on x.district_id =y.area_id where y.parent_id ='IND010' AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name order by area_name")->result_array();
				 
				 
		}
		else if($roles_id==13 || $roles_id==20 )
		{
			 $child_dist =$this->db->query("select child_area_detail.area_name as area_name,child_area_detail.area_id as area_id from child_area_detail
				   where child_area_detail.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $dist_id ."') group by child_area_detail.area_name order by child_area_detail.area_name")->result_array();
			$child_Rcard = $this->db->query("select sum(benefited_scholarships='No') as num_child,area_id from (select y.area_id, y.area_name, w.benefited_scholarships from child_area_detail as y left join (child_basic_detail as x left join child_scst_department as w on x.child_id=w.child_id) on x.district_id =y.area_id where y.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $dist_id ."') AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name order by area_name")->result_array();

        		 $child_Pds = $this->db->query("select sum(benefited_scholarships='No') as num_child,area_id from (select y.area_id, y.area_name, w.benefited_scholarships from child_area_detail as y left join (child_basic_detail as x left join child_scst_department as w on x.child_id=w.child_id) on x.district_id =y.area_id where y.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $dist_id ."') AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name order by area_name")->result_array();
			
		}

        	$cumulative = array();
        	for($i=0; $i<sizeof($child_dist); $i++){
        		$cumulative[$i][0]=$child_dist[$i]['area_name'];
				$cumulative[$i][1]=0;
				$cumulative[$i][2]=0;
				$cumulative[$i][3]=0;
				
				if(sizeof($child_Rcard)>0)
				{					
				    foreach($child_Rcard as $row)
					{				
						if($child_dist[$i]['area_id']==$row['area_id'])
						{
						if($row['num_child']==NULL){
							$cumulative[$i][1]=0 ;
							}
							else{
							$cumulative[$i][1]=$row['num_child'];
							}
						break;
						}
						else{
						  $cumulative[$i][1]=0;
						}
					}
					
				}
				
				if(sizeof($child_Pds)>0)
				{					
				    foreach($child_Pds as $row)
					{				
						if($child_dist[$i]['area_id']==$row['area_id'])
						{
						if($row['num_child']==NULL){
							$cumulative[$i][2]=0 ;
							}
							else{
							$cumulative[$i][2]=$row['num_child'];
							}
						break;
						}
						else{
						  $cumulative[$i][2]=0;
						}
					}
					
				}
				
        		$cumulative[$i][3]=$cumulative[$i][1]+$cumulative[$i][2];
        	    $tot1+=$cumulative[$i][1];
				$tot2+=$cumulative[$i][2];
				$tot3+=$cumulative[$i][3];
				
        	}
			 $cumulative[sizeof($child_dist)][0]="Total";
			 $cumulative[sizeof($child_dist)][1]=$tot1;
			 $cumulative[sizeof($child_dist)][2]=$tot2;
			 $cumulative[sizeof($child_dist)][3]=$tot3;
			
        	echo json_encode($cumulative);
        }

        //revenue minority
      public  function get_RehMin() {
		    $this->load->model('dashboard_model');
		   $ses_ids=$this->session->userdata('login_user_id');
		    $role=$this->dashboard_model->get_role_id($ses_ids);
			  foreach($role as $rolep):
				$roles_id=$rolep['account_role_id'];
				$dist_id=$rolep['district_id'];
				$stat_id=$rolep['state_id'];
			  endforeach;		  
			 $from=$_POST['from'];
			 $to=$_POST['to'];	
			 //echo $roles_id;
			 if( $roles_id==10 || $roles_id==11 || $roles_id==21 || $roles_id==12)//For LC and LC Operator
		{
        	$child_dist =$this->db->query("select area_name,area_id from child_area_detail where parent_id='IND010' group by area_name order by area_name")->result_array();

        	 $child_SH = $this->db->query("select sum(is_housing_scheme='No') as num_child,area_id from (select y.area_id, y.area_name, w.is_housing_scheme from child_area_detail as y left join (child_basic_detail as x left join child_minority_welfare_department as w on x.child_id=w.child_id) on x.district_id =y.area_id where y.parent_id ='IND010' AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name order by area_name")->result_array();

        		 $child_LB = $this->db->query("select sum(is_loan='No') as num_child,area_id from (select y.area_id, y.area_name, w.is_loan from child_area_detail as y left join (child_basic_detail as x left join child_minority_welfare_department as w on x.child_id=w.child_id) on x.district_id =y.area_id where y.parent_id ='IND010' AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name order by area_name")->result_array();
				 
		}
		else if($roles_id==13 || $roles_id==20 )//For DLC
		{
			$child_dist =$this->db->query("select child_area_detail.area_name as area_name,child_area_detail.area_id as area_id from child_area_detail
				   where child_area_detail.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $dist_id ."') group by child_area_detail.area_name order by child_area_detail.area_name")->result_array();
			 $child_SH = $this->db->query("select sum(is_housing_scheme='No') as num_child,area_id from (select y.area_id, y.area_name, w.is_housing_scheme from child_area_detail as y left join (child_basic_detail as x left join child_minority_welfare_department as w on x.child_id=w.child_id) on x.district_id =y.area_id where y.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $dist_id ."') AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name order by area_name")->result_array();

        		 $child_LB = $this->db->query("select sum(is_loan='No') as num_child,area_id from (select y.area_id, y.area_name, w.is_loan from child_area_detail as y left join (child_basic_detail as x left join child_minority_welfare_department as w on x.child_id=w.child_id) on x.district_id =y.area_id where y.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $dist_id ."') AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name order by area_name")->result_array();
		}

        	$cumulative = array();
        	for($i=0; $i<sizeof($child_dist); $i++){
        		$cumulative[$i][0]=$child_dist[$i]['area_name'];
				$cumulative[$i][1]=0;
				$cumulative[$i][2]=0;
				
				if(sizeof($child_SH)>0)
				{					
				    foreach($child_SH as $row)
					{				
						if($child_dist[$i]['area_id']==$row['area_id'])
						{
						if($row['num_child']==NULL){
							$cumulative[$i][1]=0 ;
							}
							else{
							$cumulative[$i][1]=$row['num_child'];
							}
						break;
						}
						else{
						  $cumulative[$i][1]=0;
						}
					}
					
				}
				
				if(sizeof($child_LB)>0)
				{					
				    foreach($child_LB as $row)
					{				
						if($child_dist[$i]['area_id']==$row['area_id'])
						{
						if($row['num_child']==NULL){
							$cumulative[$i][2]=0 ;
							}
							else{
							$cumulative[$i][2]=$row['num_child'];
							}
						break;
						}
						else{
						  $cumulative[$i][2]=0;
						}
					}
					
				}	
        		$cumulative[$i][3]=$cumulative[$i][1]+$cumulative[$i][2];
        	    $tot1+=$cumulative[$i][1];
				$tot2+=$cumulative[$i][2];
				$tot3+=$cumulative[$i][3];
				
        	}
			 $cumulative[sizeof($child_dist)][0]="Total";
			 $cumulative[sizeof($child_dist)][1]=$tot1;
			 $cumulative[sizeof($child_dist)][2]=$tot2;
			 $cumulative[sizeof($child_dist)][3]=$tot3;
        	echo json_encode($cumulative);
        }

        //evenue social
      public   function get_RehSoc() {
		   $this->load->model('dashboard_model');
		   $ses_ids=$this->session->userdata('login_user_id');
		    $role=$this->dashboard_model->get_role_id($ses_ids);
			  foreach($role as $rolep):
				$roles_id=$rolep['account_role_id'];
				$dist_id=$rolep['district_id'];
				$stat_id=$rolep['state_id'];
			  endforeach;		  
			 $from=$_POST['from'];
			 $to=$_POST['to'];	
			 //echo $roles_id;
			 if( $roles_id==10 || $roles_id==11 || $roles_id==21 || $roles_id==12)//For LC and LC Operator
		{
        	    $child_dist =$this->db->query("select area_name,area_id from child_area_detail where parent_id='IND010' group by area_name order by area_name")->result_array();
					
        	    $child_SP = $this->db->query("select sum(social_pension_eligible='Yes'  and social_pension_availed='No') as num_child,area_id from (select y.area_id, y.area_name, w.social_pension_eligible,w.social_pension_availed from child_area_detail as y left join (child_basic_detail as x left join child_social_welfare_department as w on x.child_id=w.child_id) on x.district_id =y.area_id where y.parent_id ='IND010' AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name order by area_name")->result_array();

        		 $child_PS = $this->db->query("select sum(parvarish_scheme_eligible='Yes' and parvarish_scheme_availed='No') as num_child,area_id from (select y.area_id, y.area_name, w.parvarish_scheme_eligible,w.parvarish_scheme_availed from child_area_detail as y left join (child_basic_detail as x left join child_social_welfare_department as w on x.child_id=w.child_id) on x.district_id =y.area_id where y.parent_id ='IND010' AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name order by area_name")->result_array();

        		 $child_SBF = $this->db->query("select sum(family_availed_sponsorship='No') as num_child,area_id from (select y.area_id, y.area_name, w.family_availed_sponsorship from child_area_detail as y left join (child_basic_detail as x left join child_social_welfare_department as w on x.child_id=w.child_id) on x.district_id =y.area_id where y.parent_id ='IND010' AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name order by area_name")->result_array();

        		 $child_SBC = $this->db->query("select sum(is_child_sponsorship='No') as num_child,area_id from (select y.area_id, y.area_name, w.is_child_sponsorship from child_area_detail as y left join (child_basic_detail as x left join child_social_welfare_department as w on x.child_id=w.child_id) on x.district_id =y.area_id where y.parent_id ='IND010' AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name order by area_name")->result_array();
				 
		}
		else if($roles_id==13 || $roles_id==20 )//for DLC
		{
			$child_dist =$this->db->query("select child_area_detail.area_name as area_name,child_area_detail.area_id as area_id from child_area_detail
				   where child_area_detail.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $dist_id ."') group by child_area_detail.area_name order by child_area_detail.area_name")->result_array();
				   $child_SP = $this->db->query("select sum(social_pension_eligible='Yes'  and social_pension_availed='No') as num_child,area_id from (select y.area_id, y.area_name, w.social_pension_eligible,w.social_pension_availed from child_area_detail as y left join (child_basic_detail as x left join child_social_welfare_department as w on x.child_id=w.child_id) on x.district_id =y.area_id where y.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $dist_id ."')  AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name order by area_name")->result_array();

        		 $child_PS = $this->db->query("select sum(parvarish_scheme_eligible='Yes' and parvarish_scheme_availed='No') as num_child,area_id from (select y.area_id, y.area_name, w.parvarish_scheme_eligible,w.parvarish_scheme_availed from child_area_detail as y left join (child_basic_detail as x left join child_social_welfare_department as w on x.child_id=w.child_id) on x.district_id =y.area_id where y.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $dist_id ."') AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name order by area_name")->result_array();

        		 $child_SBF = $this->db->query("select sum(family_availed_sponsorship='No') as num_child,area_id from (select y.area_id, y.area_name, w.family_availed_sponsorship from child_area_detail as y left join (child_basic_detail as x left join child_social_welfare_department as w on x.child_id=w.child_id) on x.district_id =y.area_id where y.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $dist_id ."') AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name order by area_name")->result_array();

        		 $child_SBC = $this->db->query("select sum(is_child_sponsorship='No') as num_child,area_id from (select y.area_id, y.area_name, w.is_child_sponsorship from child_area_detail as y left join (child_basic_detail as x left join child_social_welfare_department as w on x.child_id=w.child_id) on x.district_id =y.area_id where y.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $dist_id ."') AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name order by area_name")->result_array();
			
		}		

        	$cumulative = array();
        	for($i=0; $i<sizeof($child_dist); $i++){
        		$cumulative[$i][0]=$child_dist[$i]['area_name'];
				$cumulative[$i][1]=0;
				$cumulative[$i][2]=0;
				$cumulative[$i][3]=0;
				$cumulative[$i][4]=0;
				
				if(sizeof($child_SP)>0)
				{					
				    foreach($child_SP as $row)
					{				
						if($child_dist[$i]['area_id']==$row['area_id'])
						{
						if($row['num_child']==NULL){
							$cumulative[$i][1]=0 ;
							}
							else{
							$cumulative[$i][1]=$row['num_child'];
							}
						break;
						}
						else{
						  $cumulative[$i][1]=0;
						}
					}
					
				}
				
				if(sizeof($child_PS)>0)
				{					
				    foreach($child_PS as $row)
					{				
						if($child_dist[$i]['area_id']==$row['area_id'])
						{
							if($row['num_child']==NULL){
							$cumulative[$i][2]=0 ;
							}
							else{
							$cumulative[$i][2]=$row['num_child'];
							}
						break;
						}
						else{
						  $cumulative[$i][2]=0;
						}
					}
					
				}
				
				
				
				if(sizeof($child_SBF)>0)
				{					
				    foreach($child_SBF as $row)
					{				
						if($child_dist[$i]['area_id']==$row['area_id'])
						{
						if($row['num_child']==NULL){
							$cumulative[$i][3]=0 ;
							}
							else{
							$cumulative[$i][3]=$row['num_child'];
							}
						break;
						}
						else{
						  $cumulative[$i][3]=0;
						}
					}
					
				}
				
				if(sizeof($child_SBC)>0)
				{					
				    foreach($child_SBC as $row)
					{				
						if($child_dist[$i]['area_id']==$row['area_id'])
						{
						if($row['num_child']==NULL){
							$cumulative[$i][4]=0 ;
							}
							else{
							$cumulative[$i][4]=$row['num_child'];
							}
						break;
						}
						else{
						  $cumulative[$i][4]=0;
						}
					}
					
				}
				
        		$cumulative[$i][5]=$cumulative[$i][1]+$cumulative[$i][2]+$cumulative[$i][3]+$cumulative[$i][4];
                $tot1+=$cumulative[$i][1];
				$tot2+=$cumulative[$i][2];
				$tot3+=$cumulative[$i][3];
				$tot4+=$cumulative[$i][4];
				$tot5+=$cumulative[$i][5];
				
        	}
			 $cumulative[sizeof($child_dist)][0]="Total";
			 $cumulative[sizeof($child_dist)][1]=$tot1;
			 $cumulative[sizeof($child_dist)][2]=$tot2;
			 $cumulative[sizeof($child_dist)][3]=$tot3;
			 $cumulative[sizeof($child_dist)][4]=$tot4;
			 $cumulative[sizeof($child_dist)][5]=$tot5;
			 
        	echo json_encode($cumulative);
        }
        //dcpu dashboard data
        function get_lrd_data()
        {
          $session_ids=$this->session->userdata('login_user_id');
          $tstrole = $this->db->get_where('staff',array('staff_id'=>$session_ids))->result_array();

        	foreach($tstrole as $strp):
        	$role_id=$strp['account_role_id'];
        	$district_id=$strp['district_id'];
        	$state_id=$strp['state_id'];
        	endforeach;
          $child_block = $this->db->select('*')->where('parent_id',$district_id)->order_by('area_name', 'asc')->group_by('area_name')->get('child_area_detail')->result_array();
          $lrd_data = array();
          $i=0;
          $rs_1800=$this->db->query("select count(package='No') as num_child,area_name from (select x.child_id,y.area_id, y.area_name,w.package from child_area_detail as y left join (child_basic_detail as x left join child_labour_resource_department as w on x.child_id=w.child_id and w.package='No'  ) on x.block =y.area_id where y.parent_id ='$district_id'  ) as Z group by area_name order by area_name " )->result_array();

          $rs_5000=$this->db->query("select count(deposited='No') as num_child,area_name from (select x.child_id,y.area_id, y.area_name,w.deposited from child_area_detail as y left join (child_basic_detail as x left join child_labour_resource_department as w on x.child_id=w.child_id and w.deposited='No') on x.block =y.area_id where y.parent_id ='$district_id'  ) as Z group by area_name order by area_name ")->result_array();
          $rs_20000=$this->db->query("select count(interest_of_rehabilitation='No') as num_child,area_name from (select x.child_id,y.area_id, y.area_name,w.interest_of_rehabilitation from child_area_detail as y left join (child_basic_detail as x left join child_labour_resource_department as w on x.child_id=w.child_id and w.interest_of_rehabilitation='No' ) on x.block =y.area_id where y.parent_id ='$district_id'  ) as Z group by area_name order by area_name ")->result_array();

          $rs_500_rehb=$this->db->query("select count(interest_of_rehabilitation_5k='No') as num_child,area_name from (select x.child_id,y.area_id, y.area_name,w.interest_of_rehabilitation_5k from child_area_detail as y left join (child_basic_detail as x left join child_labour_resource_department as w on x.child_id=w.child_id and w.interest_of_rehabilitation_5k='No') on x.block =y.area_id where y.parent_id ='$district_id'  ) as Z group by area_name order by area_name ")->result_array();

          $rs_1800_tot=0;
          $rs_5000_tot=0;
          $rs_20000_tot=0;
          $rs_500_rehb_tot=0;
          foreach($child_block as $crow3){
            $url='index.php?entitled_child_ent_list/ent_list/labour/';
            $url1='/1';
            $url2='/2';
            $url3='/3';
            $url4='/4';
          	$lrd_data[$i][0]=$crow3['area_name'];
            $lrd_data[$i][1]=$rs_1800[$i]['num_child']<>0 ? '<a href='.base_url().$url.$crow3['area_id'].$url1 .'>'.$rs_1800[$i]['num_child'].'<a>'  : 0;
            $lrd_data[$i][2]=$rs_5000[$i]['num_child']<>0 ? '<a href='.base_url().$url.$crow3['area_id'].$url2 .'>'.$rs_5000[$i]['num_child'].'<a>'  : 0;
            $lrd_data[$i][3]=$rs_20000[$i]['num_child']<>0 ? '<a href='.base_url().$url.$crow3['area_id'].$url3 .'>'.$rs_20000[$i]['num_child'].'<a>'  : 0;
            $lrd_data[$i][4]=$rs_500_rehb[$i]['num_child']<>0 ? '<a href='.base_url().$url.$crow3['area_id'].$url4 .'>'.$rs_500_rehb[$i]['num_child'].'<a>'  : 0;
            $rs_1800_tot+=$rs_1800[$i]['num_child'];
            $rs_5000_tot+=$rs_5000[$i]['num_child'];
            $rs_20000_tot+=$rs_20000[$i]['num_child'];
            $rs_500_rehb_tot+=$rs_500_rehb[$i]['num_child'];
            $i++;
            }
            $lrd_data[sizeof($child_block)][0]="Total";
            $lrd_data[sizeof($child_block)][1]=$rs_1800_tot;
            $lrd_data[sizeof($child_block)][2]=$rs_5000_tot;
            $lrd_data[sizeof($child_block)][3]=$rs_20000_tot;
            $lrd_data[sizeof($child_block)][4]=$rs_500_rehb_tot;

            echo json_encode($lrd_data);


        }
        
        function get_education_data()
        {
          $session_ids=$this->session->userdata('login_user_id');
          $tstrole = $this->db->get_where('staff',array('staff_id'=>$session_ids))->result_array();

        	foreach($tstrole as $strp):
        	$role_id=$strp['account_role_id'];
        	$district_id=$strp['district_id'];
        	$state_id=$strp['state_id'];
        	endforeach;
          $edu_data = array();

          $education=$this->db->query("select count(enrolled_school='No') as num_child,area_name from (select x.child_id,y.area_id, y.area_name,w.enrolled_school from child_area_detail as y left join (child_basic_detail as x left join child_education_department as w on x.child_id=w.child_id and w.enrolled_school='No' ) on x.block =y.area_id where y.parent_id ='$district_id'  ) as Z group by area_name order by area_name " )->result_array();
          $child_block = $this->db->select('*')->where('parent_id',$district_id)->order_by('area_name', 'asc')->group_by('area_name')->get('child_area_detail')->result_array();

          //print_r($education);
          $education_tot=0;
          $i=0;
          foreach($child_block as $crow3){
            $url='index.php?entitled_child_ent_list/ent_list/education/';
            $url1='/1';

          	$edu_data[$i][0]=$crow3['area_name'];
            $edu_data[$i][1]=$education[$i]['num_child']<>0 ? '<a href='.base_url().$url.$crow3['area_id'].$url1 .'>'.$education[$i]['num_child'].'<a>'  : 0;
            $education_tot+=$education[$i]['num_child'];
            $i++;
            }
            $edu_data[sizeof($child_block)][0]="Total";
            $edu_data[sizeof($child_block)][1]=$education_tot;

            echo json_encode($edu_data);



        }
        function get_rural_data()
        {
          $session_ids=$this->session->userdata('login_user_id');
          $tstrole = $this->db->get_where('staff',array('staff_id'=>$session_ids))->result_array();

        	foreach($tstrole as $strp):
        	$role_id=$strp['account_role_id'];
        	$district_id=$strp['district_id'];
        	$state_id=$strp['state_id'];
        	endforeach;
            $rural_data = array();
          $i=0;
          $child_block = $this->db->select('*')->where('parent_id',$district_id)->order_by('area_name', 'asc')->group_by('area_name')->get('child_area_detail')->result_array();

          $MGNREGA=$this->db->query("select count(is_mgnrega='No') as num_child,area_name from (select x.child_id,y.area_id, y.area_name,w.is_mgnrega from child_area_detail as y left join (child_basic_detail as x left join child_rural_development_department as w on x.child_id=w.child_id and w.is_mgnrega='No' ) on x.block =y.area_id where y.parent_id ='$district_id'  ) as Z group by area_name order by area_name " )->result_array();

          $SGSY=$this->db->query("select count(is_sgsy='No') as num_child,area_name from (select x.child_id,y.area_id, y.area_name,w.is_sgsy from child_area_detail as y left join (child_basic_detail as x left join child_rural_development_department as w on x.child_id=w.child_id and w.is_sgsy='No' ) on x.block =y.area_id where y.parent_id ='$district_id'  ) as Z group by area_name order by area_name ")->result_array();
          $IAY=$this->db->query("select count(is_iay='No') as num_child,area_name from (select x.child_id,y.area_id, y.area_name,w.is_iay from child_area_detail as y left join (child_basic_detail as x left join child_rural_development_department as w on x.child_id=w.child_id and w.is_iay='No') on x.block =y.area_id where y.parent_id ='$district_id'  ) as Z group by area_name order by area_name ")->result_array();
          $MGNREGA_tot=0;
          $SGSY_tot=0;
          $IAY_tot=0;

          foreach($child_block as $crow3){
            $url='index.php?entitled_child_ent_list/ent_list/rural/';
            $url1='/1';
            $url2='/2';
            $url3='/3';

          	$rural_data[$i][0]=$crow3['area_name'];
            $rural_data[$i][1]=$MGNREGA[$i]['num_child']<>0 ? '<a href='.base_url().$url.$crow3['area_id'].$url1 .'>'.  $MGNREGA[$i]['num_child'].'<a>'  : 0;
            $rural_data[$i][2]=$SGSY[$i]['num_child']<>0 ? '<a href='.base_url().$url.$crow3['area_id'].$url2 .'>'.$SGSY[$i]['num_child'].'<a>'  : 0;
            $rural_data[$i][3]=$IAY[$i]['num_child']<>0 ? '<a href='.base_url().$url.$crow3['area_id'].$url3 .'>'.$IAY[$i]['num_child'].'<a>'  : 0;
            $MGNREGA_tot+=$MGNREGA[$i]['num_child'];
            $SGSY_tot+=$SGSY[$i]['num_child'];
            $IAY_tot+=$IAY[$i]['num_child'];
            $i++;
            }
            $rural_data[sizeof($child_block)][0]="Total";
            $rural_data[sizeof($child_block)][1]=$MGNREGA_tot;
            $rural_data[sizeof($child_block)][2]=$SGSY_tot;
            $rural_data[sizeof($child_block)][3]=$IAY_tot;


            echo json_encode($rural_data);

        }
        function get_urban_data()
        {
          $session_ids=$this->session->userdata('login_user_id');
          $tstrole = $this->db->get_where('staff',array('staff_id'=>$session_ids))->result_array();

        	foreach($tstrole as $strp):
        	$role_id=$strp['account_role_id'];
        	$district_id=$strp['district_id'];
        	$state_id=$strp['state_id'];
        	endforeach;
          $urban_data = array();
        $i=0;
        $child_block = $this->db->select('*')->where('parent_id',$district_id)->order_by('area_name', 'asc')->group_by('area_name')->get('child_area_detail')->result_array();

        $SJSRY=$this->db->query("select count(is_sjsry='No') as num_child,area_name from (select x.child_id,y.area_id, y.area_name,w.is_sjsry from child_area_detail as y left join (child_basic_detail as x left join child_urban_development_deoartment as w on x.child_id=w.child_id  and w.is_sjsry='No') on x.block =y.area_id where y.parent_id ='$district_id'  ) as Z group by area_name order by area_name " )->result_array();

        $JNURM=$this->db->query("select count(is_jnrum='No') as num_child,area_name from (select x.child_id,y.area_id, y.area_name,w.is_jnrum from child_area_detail as y left join (child_basic_detail as x left join child_urban_development_deoartment as w on x.child_id=w.child_id and w.is_jnrum='No') on x.block =y.area_id where y.parent_id ='$district_id'  ) as Z group by area_name order by area_name ")->result_array();
          $SJSRY_tot=0;
        $JNURM_tot=0;


        foreach($child_block as $crow3){
          $url='index.php?entitled_child_ent_list/ent_list/urban/';
          $url1='/1';
          $url2='/2';


          $urban_data[$i][0]=$crow3['area_name'];
          $urban_data[$i][1]=$SJSRY[$i]['num_child']<>0 ? '<a href='.base_url().$url.$crow3['area_id'].$url1 .'>'.  $SJSRY[$i]['num_child'].'<a>'  : 0;
          $urban_data[$i][2]=$JNURM[$i]['num_child']<>0 ? '<a href='.base_url().$url.$crow3['area_id'].$url2 .'>'.$JNURM[$i]['num_child'].'<a>'  : 0;
          $SJSRY_tot+=$SJSRY[$i]['num_child'];
          $JNURM_tot+=$JNURM[$i]['num_child'];

          $i++;
          }
          $urban_data[sizeof($child_block)][0]="Total";
          $urban_data[sizeof($child_block)][1]=$SJSRY_tot;
          $urban_data[sizeof($child_block)][2]=$JNURM_tot;

            echo json_encode($urban_data);

        }
        function get_revenue_data()
        {

            $session_ids=$this->session->userdata('login_user_id');
            $tstrole = $this->db->get_where('staff',array('staff_id'=>$session_ids))->result_array();

          	foreach($tstrole as $strp):
          	$role_id=$strp['account_role_id'];
          	$district_id=$strp['district_id'];
          	$state_id=$strp['state_id'];
          	endforeach;
          $rev_data = array();

            $rev=$this->db->query("select count(is_benefited_landsettlement='No') as num_child,area_name from (select x.child_id,y.area_id, y.area_name,w.is_benefited_landsettlement from child_area_detail as y left join (child_basic_detail as x left join child_revenue_department as w on x.child_id=w.child_id  and w.is_benefited_landsettlement='No') on x.block =y.area_id where y.parent_id ='$district_id'  ) as Z group by area_name order by area_name " )->result_array();
            $child_block = $this->db->select('*')->where('parent_id',$district_id)->order_by('area_name', 'asc')->group_by('area_name')->get('child_area_detail')->result_array();

            //print_r($education);
            $rev_tot=0;
            $i=0;
            foreach($child_block as $crow3){
              $url='index.php?entitled_child_ent_list/ent_list/revenue/';
              $url1='/1';

            	$rev_data[$i][0]=$crow3['area_name'];
              $rev_data[$i][1]=$rev[$i]['num_child']<>0 ? '<a href='.base_url().$url.$crow3['area_id'].$url1 .'>'.$rev[$i]['num_child'].'<a>'  : 0;
              $rev_tot+=$rev[$i]['num_child'];
              $i++;
              }
              $rev_data[sizeof($child_block)][0]="Total";
              $rev_data[sizeof($child_block)][1]=$rev_tot;

              echo json_encode($rev_data);

        }
        function get_health_data()
        {
          $session_ids=$this->session->userdata('login_user_id');
          $tstrole = $this->db->get_where('staff',array('staff_id'=>$session_ids))->result_array();

        	foreach($tstrole as $strp):
        	$role_id=$strp['account_role_id'];
        	$district_id=$strp['district_id'];
        	$state_id=$strp['state_id'];
        	endforeach;

            $hel_data= array();

              $hel=$this->db->query("select count(is_health_cards='No') as num_child,area_name from (select x.child_id,y.area_id, y.area_name,w.is_health_cards from child_area_detail as y left join (child_basic_detail as x left join child_health_department as w on x.child_id=w.child_id and w.is_health_cards='No'  ) on x.block =y.area_id where y.parent_id ='$district_id'  ) as Z group by area_name order by area_name " )->result_array();
              $child_block = $this->db->select('*')->where('parent_id',$district_id)->order_by('area_name', 'asc')->group_by('area_name')->get('child_area_detail')->result_array();

              //print_r($education);
              $hel_tot=0;
              $i=0;
              foreach($child_block as $crow3){
                $url='index.php?entitled_child_ent_list/ent_list/health/';
                $url1='/1';

                $hel_data[$i][0]=$crow3['area_name'];
                $hel_data[$i][1]=$hel[$i]['num_child']<>0 ? '<a href='.base_url().$url.$crow3['area_id'].$url1 .'>'.$hel[$i]['num_child'].'<a>'  : 0;
                $hel_tot+=$hel[$i]['num_child'];
                $i++;
                }
                $hel_data[sizeof($child_block)][0]="Total";
                $hel_data[sizeof($child_block)][1]=$hel_tot;

                echo json_encode($hel_data);


        }
        function get_sc_st_data()
        {
          $session_ids=$this->session->userdata('login_user_id');
          $tstrole = $this->db->get_where('staff',array('staff_id'=>$session_ids))->result_array();

        	foreach($tstrole as $strp):
        	$role_id=$strp['account_role_id'];
        	$district_id=$strp['district_id'];
        	$state_id=$strp['state_id'];
        	endforeach;

              $sc_st_data= array();
              $sc_st=$this->db->query("select count(benefited_scholarships='No') as num_child,area_name from (select x.child_id,y.area_id, y.area_name,w.benefited_scholarships from child_area_detail as y left join (child_basic_detail as x left join child_scst_department as w on x.child_id=w.child_id and w.benefited_scholarships='No' ) on x.block =y.area_id where y.parent_id ='$district_id'  ) as Z group by area_name order by area_name " )->result_array();
              $child_block = $this->db->select('*')->where('parent_id',$district_id)->order_by('area_name', 'asc')->group_by('area_name')->get('child_area_detail')->result_array();
              $sc_st_tot=0;
              $i=0;
              foreach($child_block as $crow3){
                $url='index.php?entitled_child_ent_list/ent_list/scst/';
                $url1='/1';

                $sc_st_data[$i][0]=$crow3['area_name'];
                $sc_st_data[$i][1]= $sc_st[$i]['num_child']<>0 ? '<a href='.base_url().$url.$crow3['area_id'].$url1 .'>'.$sc_st[$i]['num_child'].'<a>'  : 0;
                $sc_st_tot+= $sc_st[$i]['num_child'];
                $i++;
                }
                $sc_st_data[sizeof($child_block)][0]="Total";
                $sc_st_data[sizeof($child_block)][1]=$sc_st_tot;

                echo json_encode($sc_st_data);

        }
        function get_food_data()
        {
          $session_ids=$this->session->userdata('login_user_id');
          $tstrole = $this->db->get_where('staff',array('staff_id'=>$session_ids))->result_array();

        	foreach($tstrole as $strp):
        	$role_id=$strp['account_role_id'];
        	$district_id=$strp['district_id'];
        	$state_id=$strp['state_id'];
        	endforeach;
          $food_data=array();
            $i=0;
            $child_block = $this->db->select('*')->where('parent_id',$district_id)->order_by('area_name', 'asc')->group_by('area_name')->get('child_area_detail')->result_array();

            $ration_card=$this->db->query("select count(is_ration_card='No') as num_child,area_name from (select x.child_id,y.area_id, y.area_name,w.is_ration_card from child_area_detail as y left join (child_basic_detail as x left join child_food_department as w on x.child_id=w.child_id  and w.is_ration_card='No') on x.block =y.area_id where y.parent_id ='$district_id'  ) as Z group by area_name order by area_name " )->result_array();

            $pds=$this->db->query("select count(id_pds='No') as num_child,area_name from (select x.child_id,y.area_id, y.area_name,w.id_pds from child_area_detail as y left join (child_basic_detail as x left join child_food_department as w on x.child_id=w.child_id  and w.id_pds='No') on x.block =y.area_id where y.parent_id ='$district_id'  ) as Z group by area_name order by area_name ")->result_array();
            $ration_card_tot=0;
            $pds_tot=0;
          foreach($child_block as $crow3){
            $url='index.php?entitled_child_ent_list/ent_list/food/';
            $url1='/1';
            $url2='/2';
            $food_data[$i][0]=$crow3['area_name'];
            $food_data[$i][1]=$ration_card[$i]['num_child']<>0 ? '<a href='.base_url().$url.$crow3['area_id'].$url1 .'>'.  $ration_card[$i]['num_child'].'<a>'  : 0;
            $food_data[$i][2]=$pds[$i]['num_child']<>0 ? '<a href='.base_url().$url.$crow3['area_id'].$url2 .'>'.$pds[$i]['num_child'].'<a>'  : 0;
            $ration_card_tot+=$ration_card[$i]['num_child'];
            $pds_tot+=$pds[$i]['num_child'];

            $i++;
            }
            $food_data[sizeof($child_block)][0]="Total";
            $food_data[sizeof($child_block)][1]=$ration_card_tot;
            $food_data[sizeof($child_block)][2]=$pds_tot;

              echo json_encode($food_data);

        }
        function get_minority_data()
        {
          $session_ids=$this->session->userdata('login_user_id');
          $tstrole = $this->db->get_where('staff',array('staff_id'=>$session_ids))->result_array();

        	foreach($tstrole as $strp):
        	$role_id=$strp['account_role_id'];
        	$district_id=$strp['district_id'];
        	$state_id=$strp['state_id'];
        	endforeach;

            $minority_data = array();
            $i=0;
            $child_block = $this->db->select('*')->where('parent_id',$district_id)->order_by('area_name', 'asc')->group_by('area_name')->get('child_area_detail')->result_array();

            $special =$this->db->query("select count(is_housing_scheme='No') as num_child,area_name from (select x.child_id,y.area_id, y.area_name,w.is_housing_scheme from child_area_detail as y left join (child_basic_detail as x left join child_minority_welfare_department as w on x.child_id=w.child_id and w.is_housing_scheme='No'  ) on x.block =y.area_id where y.parent_id ='$district_id'  ) as Z group by area_name order by area_name " )->result_array();

            $loan=$this->db->query("select count(is_loan='No') as num_child,area_name from (select x.child_id,y.area_id, y.area_name,w.is_loan from child_area_detail as y left join (child_basic_detail as x left join child_minority_welfare_department as w on x.child_id=w.child_id and w.is_loan='No' ) on x.block =y.area_id where y.parent_id ='$district_id'  ) as Z group by area_name order by area_name ")->result_array();
            $special_tot=0;
            $loan_tot=0;
          foreach($child_block as $crow3){
            $url='index.php?entitled_child_ent_list/ent_list/minority/';
            $url1='/1';
            $url2='/2';
            $minority_data[$i][0]=$crow3['area_name'];
            $minority_data[$i][1]=$special[$i]['num_child']<>0 ? '<a href='.base_url().$url.$crow3['area_id'].$url1 .'>'.  $special[$i]['num_child'].'<a>'  : 0;
            $minority_data[$i][2]=$loan[$i]['num_child']<>0 ? '<a href='.base_url().$url.$crow3['area_id'].$url2 .'>'.$loan[$i]['num_child'].'<a>'  : 0;
            $special_tot+=$special[$i]['num_child'];
            $loan_tot+=$loan[$i]['num_child'];

            $i++;
            }
            $minority_data[sizeof($child_block)][0]="Total";
            $minority_data[sizeof($child_block)][1]=$special_tot;
            $minority_data[sizeof($child_block)][2]=$loan_tot;

              echo json_encode($minority_data);

        }
        function get_social_data()
        {
          $session_ids=$this->session->userdata('login_user_id');
          $tstrole = $this->db->get_where('staff',array('staff_id'=>$session_ids))->result_array();

        	foreach($tstrole as $strp):
        	$role_id=$strp['account_role_id'];
        	$district_id=$strp['district_id'];
        	$state_id=$strp['state_id'];
        	endforeach;

            $child_block = $this->db->select('*')->where('parent_id',$district_id)->order_by('area_name', 'asc')->group_by('area_name')->get('child_area_detail')->result_array();
            $social_data = array();
            $i=0;
            $sps=$this->db->query("select sum(social_pension_eligible='Yes'  and social_pension_availed='No') as num_child,area_name from (select x.child_id,y.area_id, y.area_name,w.social_pension_eligible , w.social_pension_availed from child_area_detail as y left join (child_basic_detail as x left join child_social_welfare_department as w on x.child_id=w.child_id and w.social_pension_eligible='Yes'  and w.social_pension_availed='No' ) on x.block =y.area_id where y.parent_id ='$district_id'  ) as Z group by area_name order by area_name " )->result_array();

            $ps=$this->db->query("select sum(parvarish_scheme_eligible='Yes'  and parvarish_scheme_availed='No') as num_child,area_name from (select x.child_id,y.area_id, y.area_name,w.parvarish_scheme_eligible,w.parvarish_scheme_availed from child_area_detail as y left join (child_basic_detail as x left join child_social_welfare_department as w on x.child_id=w.child_id and w.parvarish_scheme_eligible='Yes'  and w.parvarish_scheme_availed='No' ) on x.block =y.area_id where y.parent_id ='$district_id'  ) as Z group by area_name order by area_name ")->result_array();
            $sbf=$this->db->query("select count(family_availed_sponsorship='No') as num_child,area_name from (select x.child_id,y.area_id, y.area_name,w.family_availed_sponsorship from child_area_detail as y left join (child_basic_detail as x left join child_social_welfare_department as w on x.child_id=w.child_id and w.family_availed_sponsorship='No') on x.block =y.area_id where y.parent_id ='$district_id'  ) as Z group by area_name order by area_name ")->result_array();

            $sbc=$this->db->query("select count(is_child_sponsorship='No') as num_child,area_name from (select x.child_id,y.area_id, y.area_name,w.is_child_sponsorship from child_area_detail as y left join (child_basic_detail as x left join child_social_welfare_department as w on x.child_id=w.child_id and w.is_child_sponsorship='No') on x.block =y.area_id where y.parent_id ='$district_id'  ) as Z group by area_name order by area_name ")->result_array();

            $sps_tot=0;
            $ps_tot=0;
            $sbf_tot=0;
            $sbc_tot=0;
            foreach($child_block as $crow3){
              $url='index.php?entitled_child_ent_list/ent_list/social/';
              $url1='/1';
              $url2='/2';
              $url3='/3';
              $url4='/4';
            	$social_data[$i][0]=$crow3['area_name'];
              $social_data[$i][1]=$sps[$i]['num_child']<>0 ? '<a href='.base_url().$url.$crow3['area_id'].$url1 .'>'.$sps[$i]['num_child'].'<a>'  : 0;
              $social_data[$i][2]=$ps[$i]['num_child']<>0 ? '<a href='.base_url().$url.$crow3['area_id'].$url2 .'>'.$ps[$i]['num_child'].'<a>'  : 0;
              $social_data[$i][3]=$sbf[$i]['num_child']<>0 ? '<a href='.base_url().$url.$crow3['area_id'].$url3 .'>'.$sbf[$i]['num_child'].'<a>'  : 0;
              $social_data[$i][4]=$sbc[$i]['num_child']<>0 ? '<a href='.base_url().$url.$crow3['area_id'].$url4 .'>'.$sbc[$i]['num_child'].'<a>'  : 0;
              $sps_tot+=$sps[$i]['num_child'];
              $ps_tot+=$ps[$i]['num_child'];
              $sbf_tot+=$sbf[$i]['num_child'];
              $sbc_tot+=$sbc[$i]['num_child'];
              $i++;
              }
              $social_data[sizeof($child_block)][0]="Total";
              $social_data[sizeof($child_block)][1]=$sps_tot;
              $social_data[sizeof($child_block)][2]=$ps_tot;
              $social_data[sizeof($child_block)][3]=$sbf_tot;
              $social_data[sizeof($child_block)][4]=$sbc_tot;

              echo json_encode($social_data);

        }

     ///cm relief data
        public function get_cm_relief_data($from,$to,$district_id,$cond, $cond_val,$param1)
	   {
		   $this->load->model('mis_reports_model');
		  
		 
		   $data_cm_relief["details_url"]=base_url()."index.php?cm_relief_cl/view/";
			//print_r($data_inside['inside_state_detils']);
			  $this->data['title']="CM Relief Fund ";
			  $data_cm_relief['cm_relief_data'] =$this->mis_reports_model->get_cm_relief_data($from,$to,$district_id,$cond, $cond_val,$param1);
			
			$data_cm_relief['from']=$from;
			$data_cm_relief['to']=$to;
			$data_cm_relief['district_id']=$district_id;
			$data_cm_relief['cond']=$cond;
			$data_cm_relief['cond_val']=$cond_val;
			$data_cm_relief['type']="rehibilation_cmrf_relief";
		
			if($param1=="view")
			{
				$this->data['main_content_view'] = $this->load->view('backend/staff/cm_relief_details',$data_cm_relief, TRUE);
				$this->generate_data('backend/index', $this->data );
			}
			else if($param1=="pdf"){
				//echo "AAAAA" ;
				$name="MIS_Report_Rehibilation_cmrf_relief_".$from."_".$to;
				$this->data['main_content_view'] = $this->load->view('backend/staff/pdf_inner_export.php',$data_cm_relief, TRUE);
				$this-> _gen_pdf($this->data['main_content_view'],$name);
			}
			else{ 
				$this->data['main_content_view'] = $this->load->view('backend/staff/cm_relief_details',$data_cm_relief, TRUE);
				$this->generate_data('backend/index', $this->data );
			}
			
			//$this->data['main_content_view'] = $this->load->view('backend/staff/report_details_child',$data_order_after,TRUE);
			//$this->generate_data('backend/index', $this->data );
	   }
			
			//$this->data['main_content_view'] = $this->load->view('backend/staff/cm_relief_details',$data_cm_relief, TRUE);
		  // $this->generate_data('backend/index',$this->data);
	   
	  
	   
	   
	   //lrd----data public function get_cm_relief_data($from,$to,$district_id,$cond, $cond_val)
	  function get_lrd($from,$to,$district_id,$cond, $cond_val)
	   {
		   $this->load->model('mis_reports_model');
		  
		 
		   $data_lr["details_url"]=base_url()."index.php?cm_relief_cl/view/";
			//print_r($data_inside['inside_state_detils']);
			  $this->data['title']="Labour Resource Department";
			$data_lr['lrd_val'] =$this->mis_reports_model->get_lrd($from,$to,$district_id,$cond, $cond_val);
			
			$this->data['main_content_view'] = $this->load->view('backend/staff/dashboard_lc_lrd',$data_lr, TRUE);
		   $this->generate_data('backend/index',$this->data);
	   
	   }
	   
	   function get_lrd_18k($from,$to,$district_id,$cond, $cond_val,$type,$param1)
	   {
		   $this->load->model('mis_reports_model');
		  
		 
		   $data_lr["details_url"]=base_url()."index.php?dashboard/lrd_data/";
			//print_r($data_inside['inside_state_detils']);
			  $this->data['title']="Labour Resource Department";
			  $data_lr['lrd_val'] =$this->mis_reports_model->get_lrd_18k($from,$to,$district_id,$cond, $cond_val,$type,$param1);
			$data_lr['type']=$type;
			$data_lr['from']=$from;
			$data_lr['to']=$to;
			$data_lr['district_id']=$district_id;
			$data_lr['cond']=$cond;
			$data_lr['cond_val']=$cond_val;
			$data_lr['type1']="rehabilation_lrd";
			
			if($param1=="view")
			{
				$this->data['main_content_view'] = $this->load->view('backend/staff/dashboard_lc_lrd_18k',$data_lr, TRUE);
				$this->generate_data('backend/index', $this->data );
			}
			else if($param1=="pdf"){
				//echo "AAAAA" ;
				$name="MIS_Report_rehabilation_lrd_".$from."_".$to;
				$this->data['main_content_view'] = $this->load->view('backend/staff/pdf_inner_export.php',$data_lr, TRUE);
				$this-> _gen_pdf($this->data['main_content_view'],$name);
			}
			else{
				$this->data['main_content_view'] = $this->load->view('backend/staff/dashboard_lc_lrd_18k',$data_lr, TRUE);
				$this->generate_data('backend/index', $this->data );
			}
		
			//$this->data['main_content_view'] = $this->load->view('backend/staff/dashboard_lc_lrd_18k',$data_lr, TRUE);
		   //$this->generate_data('backend/index',$this->data);
	   
	   }
	   
	  function get_lrd_50k($from,$to,$district_id,$cond, $cond_val,$param1)
			  {
			  $this->load->model('mis_reports_model');
			  $data_lr["details_url"]=base_url()."index.php?dashboard/lrd_data/";
			//print_r($data_inside['inside_state_detils']);
			 $this->data['title']="Labour Resource Department";
			 $data_lr['lrd_val'] =$this->mis_reports_model->get_lrd_50k($from,$to,$district_id,$cond, $cond_val,$param1);
			 $data_lr['type']="rehabilation_of_lrd1";
			 $data_lr['from']=$from;
			 $data_lr['to']=$to;
			 $data_lr['district_id']=$district_id;
			 $data_lr['cond']=$cond;
			 $data_lr['cond_val']=$cond_val;
			 //$data_lr['type']=$type;

			 if($param1=="view")
			 {
				$this->data['main_content_view'] = $this->load->view('backend/staff/dashboard_lc_lrd_50k',$data_lr, TRUE);
				$this->generate_data('backend/index', $this->data );
			 }
			 else if($param1=="pdf"){
				//echo "AAAAA" ;
				$name="MIS_Report_rehabilitation_".$from."_".$to;
				$this->data['main_content_view'] = $this->load->view('backend/staff/pdf_inner_export.php',$data_lr, TRUE);
				$this-> _gen_pdf($this->data['main_content_view'],$name);
			 }
			 else{
				$this->data['main_content_view'] = $this->load->view('backend/staff/dashboard_lc_lrd_50k',$data_lr, TRUE);
				$this->generate_data('backend/index', $this->data );
			 }
			  
  }
  
	   function get_lrd_20k($from,$to,$district_id,$cond, $cond_val,$param1)
		  {
		  $this->load->model('mis_reports_model');
		 

		  $data_lr["details_url"]=base_url()."index.php?dashboard/lrd_data/";
		//print_r($data_inside['inside_state_detils']);
		 $this->data['title']="Labour Resource Department";
		 $data_lr['lrd_val'] =$this->mis_reports_model->get_lrd_20k($from,$to,$district_id,$cond, $cond_val,$param1);

		$data_lr['from']=$from;
		$data_lr['to']=$to;
		$data_lr['district_id']=$district_id;
		$data_lr['cond']=$cond;
		$data_lr['cond_val']=$cond_val;
		$data_lr['type']="rehabilation_of_lrd2";

		if($param1=="view")
		{
		$this->data['main_content_view'] = $this->load->view('backend/staff/dashboard_lc_lrd_20k',$data_lr, TRUE);
		$this->generate_data('backend/index', $this->data );
		}
		else if($param1=="pdf"){
		//echo "AAAAA" ;
		$name="MIS_Report_rehabilitation_".$from."_".$to;
		$this->data['main_content_view'] = $this->load->view('backend/staff/pdf_inner_export.php',$data_lr, TRUE);
		$this-> _gen_pdf($this->data['main_content_view'],$name);
		}
		else{
		$this->data['main_content_view'] = $this->load->view('backend/staff/dashboard_lc_lrd_20k',$data_lr, TRUE);
		$this->generate_data('backend/index', $this->data );
		}

  
  }
  
	   function lrd_data($child_id)
	   {
	   
	   	$this->load->model('mis_reports_model');
	   	$this->data['title']="Labour Resource Department";
	   	$child_data['lrd_data'] =$this->mis_reports_model->get_lrd_data($child_id);
	   	
	   	$child_data['default']="uploads/user.jpg";
	   	$child_data['upload_path']="./uploads/child_image/";
	   	print_r($data_lr['lrd_data']);
	   	$this->data['main_content_view'] = $this->load->view('backend/staff/view_lrd_data',$child_data, TRUE);
	   	$this->generate_data('backend/index',$this->data);
	   	
	   }
	   function get_cmrf_trn_data($from,$to,$dist_id,$param1)
	   {
	   
	   	$this->load->model('Cmrf_transaction_model');
	   	$this->data['title']="CMRF Transaction Details";
	   	$data_cmrf['cmrf_transaction_data'] =$this->Cmrf_transaction_model->get_cmrf_trn_lc($from,$to,$dist_id,$param1);
	  	//$this->data['main_content_view'] = $this->load->view('backend/staff/cmrf_trn_detail_data_list',$data_cmrf, TRUE);
	   	//$this->generate_data('backend/index',$this->data);
	   	
	   	
	   	$data_cmrf['from']=$from;
	   	$data_cmrf['to']=$to;
	   	$data_cmrf['dist_id']=$dist_id;
	   	$data_cmrf['type']="CMRF_transaction_details";
	   	
	   	
	   	if($param1=="view")
	   	{
	   		$this->data['main_content_view'] = $this->load->view('backend/staff/cmrf_trn_detail_data_list',$data_cmrf, TRUE);
	   		$this->generate_data('backend/index', $this->data );
	   	}
	   	else if($param1=="pdf"){
	   		//echo "AAAAA" ;
	   		$name="MIS_Report_CMRF_transaction_details_".$from."_".$to;
	   		$this->data['main_content_view'] = $this->load->view('backend/staff/pdf_inner_export.php',$data_cmrf, TRUE);
	   		$this-> _gen_pdf($this->data['main_content_view'],$name);
	   	}
	   	else{
	   		$this->data['main_content_view'] = $this->load->view('backend/staff/cmrf_trn_detail_data_list',$data_cmrf, TRUE);
	   		$this->generate_data('backend/index', $this->data );
	   	}
	   	
	   	
	   }
	   //GENRATE PDF FILE
	   public function _gen_pdf($html,$name,$paper='A4')
	   {
	   	//this the the PDF filename that user will get to download
	   	$pdfFilePath = "output_pdf_name.pdf";
	   	//load mPDF library
	   	$this->load->library('mpdf/mpdf');
	   	$mpdf=new mPDF('utf-8',$paper);
	   	$mpdf->SetHTMLHeader('<img src="'.base_url().'/assets/images/header1.png" />');
	   	
	   	$mpdf->SetHTMLFooter('<div><img src="'.base_url().'/assets/images/footer1.jpg" /><div style="font-size:10px;text-align:center;margin-top:-20px;color:#fff;">
   Page-{PAGENO},on'.date('d-m-Y').',Printed from '.base_url().'
	   			
</div></div>');
	   	
	   	$mpdf->AddPage('', // L - landscape, P - portrait
	   			'', '', '', '',
	   			0, // margin_left
	   			0, // margin right
	   			15, // margin top
	   			15, // margin bottom
	   			0, // margin header
	   			0); // margin footer
	   			//generate the PDF from the given html
	   			$mpdf->WriteHTML($html);
	   			$mpdf->Output($name.".pdf",'D');
	   }
  }
