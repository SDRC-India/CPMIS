
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
<?php
/*
*This class is for the management_report
*By Godti Satyanarayan
*Index() loads the management report data
*
**LC MIS  reports (Includes management,Pattern analysys,Monthly reports,)
*/

class Mis_reports extends MY_Controller
{
          function __construct()
          {
              //parent::__construct();
              parent:: __construct();
              /*cache control*/
		    $this->output->set_header("Expires: Tue, 01 Jan 2000 00:00:00 GMT"); 
			$this->output->set_header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT"); 
			$this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0"); 
			$this->output->set_header("Cache-Control: post-check=0, pre-check=0", false); 
			$this->output->set_header("Pragma: no-cache");
		    //$this->output->set_header("Expires: 0"); 
              $this->load->library('session');
              $this->load->database();
			  
              //loading the data
          }
          
          public function index($type,$from,$to,$param1="",$param2="",$param3="")
        {
              //@Param1 is pdf export for all reports Either View or Pdf
        	  //@param2 is state ,district or user groups based the type
			  //if type =="outside_state" then @param2="state"
			  //if type =="system_access" ||  type =="last_login" then @param2="user_grps"
			  //if type =="inside_state" then @param2="districts"
			  //@Param3 is block which is for $type="inside_state"
		 
		
        	
          if ($this->session->userdata('staff_login') != 1)
          {
            $this->session->set_userdata('last_page' , current_url());
            redirect(base_url(), 'refresh');
          }
		 
		 $ses_ids=$this->session->userdata('login_user_id');
          $this->load->model('mis_reports_model');
		  //To get the account_role_id
           $role=$this->mis_reports_model->get_role_id($ses_ids);
          foreach($role as $rolep):
            $roles_id=$rolep['account_role_id'];
            $dist_id=$rolep['district_id'];
            $stat_id=$rolep['state_id'];
          endforeach;
		 
          
		    $monthly_data_report_details['district_list']=$this->mis_reports_model->get_districts_list($stat_id);
		    $monthly_data_report_details['states_list']=$this->mis_reports_model->get_states_list();
			
          $this->data['title']="Report Details";
		  
			
		  $dist="";//by default no districts were selected
		    
		    $type_array=array(
			"entitlement_card_getnerated"=>"entitlement_card_getnerated",
			"investigation"=>"investigation",
			"inside_state"=>"inside_state",
			"outside_state"=>"outside_state",
			"system_access"=>"system_access",
			"last_login"=>"last_login",
			"cci"=>"cci",
			"cwc_delay"=>"cwc_delay",
			"cwc_not_filling"=>"cwc_not_filling",
			"middle_men"=>"middle_men",
			"rescued_repeatedly"=>"rescued_repeatedly",
			"emp_amt"=>"emp_amt",
			"lc_action"=>"lc_action",
			"rescued_child"=>"rescued_child",
			"ngo_dubbious"=>"ngo_dubbious",
			"Rehabilitation"=>"Rehabilitation",
			"child_cumulative"=>"child_cumulative",
			"caste"=>"caste",
			"education"=>"education",
			"age"=>"age",
			"cmrf_transaction"=>"cmrf_transaction",
			//code added by poojashree rout on 27-06-2017
		    "order_after_production"=>"order_after_production",
		    "due_for_transfer"=>"due_for_transfer", 
		    "cwc_working_status"=>"cwc_working_status",
		    "trnsfr_status"=>"trnsfr_status"
		    );
		    $dist_show=true;
		    
		  if ($type!=""){
		  	
			if($type!='middle_men')
			{
				
				if(!$this->checkIsAValidDate($from))
			  {
				  
				header('Location: '.base_url().'index.php?mis_reports');  
			  }
			  else if(!$this->checkIsAValidDate($to))
			  {
				 header('Location: '.base_url().'index.php?mis_reports'); 
			  }
			}
				if(array_key_exists($type,$type_array))
				{
					
					
				
		   if($type=="entitlement_card_getnerated")
				  {
 
					    $monthly_data_report_details['monthly_report_details']=$this->mis_reports_model->report_details($from,$to,$dist);
        
				  }
				  else if($type=="investigation")
				  {
				  	//added by poojashree roleid 6,7,8,14,16,18,19 for display of mis report
				  	if(($roles_id==2)||($roles_id==5)||($roles_id==6)||($roles_id==7)||($roles_id==8)||($roles_id==14)||($roles_id==16)||($roles_id==18)||($roles_id==19)){
				  		
				  		$dist=$dist_id ;
				  	}
				  	
				  	
					  $monthly_data_report_details['monthly_report_details']=$this->mis_reports_model->report_details_investigation($from,$to,$dist);
					  
				  }
				  else if($type=="inside_state")
				  {
					  $dist=$param2;
				       $block=$param3;
				       if(($roles_id==2)||($roles_id==5)||($roles_id==6)||($roles_id==7)||($roles_id==8)||($roles_id==14)||($roles_id==16)||($roles_id==18)||($roles_id==19)){
				       	$dist_show=false;
				       	$dist=$dist_id ;
				       }
					  $monthly_data_report_details['blocks_list']=$this->mis_reports_model->get_blocks_list($dist);
					  $monthly_data_report_details['monthly_report_details']=$this->mis_reports_model->report_details_inside($from,$to,$dist,$block);
                      
					  
				  }
				  else if($type=="outside_state")
				  {
				  	if(($roles_id==2)||($roles_id==5)||($roles_id==6)||($roles_id==7)||($roles_id==8)||($roles_id==14)||($roles_id==16)||($roles_id==18)||($roles_id==19)){
				  		$dist=$dist_id ;
				  	}				  	
				  	$state=$param2;
				  	$monthly_data_report_details['monthly_report_details']=$this->mis_reports_model->report_details_outside($from,$to,$state,$dist);                       					  
				  }
				  else if($type=="system_access")
				  {   
					if($param2)
					{
						 $user=urldecode($param2); //%20 remove from url
						 
						 
						 
					}
			       else {
					   
					  // $user=2;//by default LS is selected
			       	if($roles_id==2){
					 $user='LS';//by default LS is selected
					  }
					  if($roles_id==7){
					 	$user='CWC';//by default LS is selected
					  }
					  if($roles_id==8){
					 	$user='DCPU';//by default LS is selected
					  }
					  if($roles_id==14){
					 	$user='DM';//by default LS is selected
					  }
					  if($roles_id==19){
					 	$user='DCS';//by default LS is selected
					  }
					 if($roles_id==5){
					 	$user='LEO';//by default LS is selected
					  }
					 if($roles_id==16){
					  	$user='SP';//by default LS is selected
					  }
				     if($roles_id==6){
					  	$user='CCI';//by default LS is selected
					  }
					   if($roles_id==18){
					 	$user='DEPO';//by default LS is selected
					  }
				   }
				  
				   
					//modified by pooja $user to $dist
				   $monthly_data_report_details['sys_access_report']=$this->mis_reports_model->get_report_sys_access_data($from,$to,$dist,$user);
				   //print_r($monthly_data_report_details['sys_access_report']);
			      }
				  else if($type=="last_login")
				  { 
			  
					if($param2)
					{
						 $user=urldecode($param2); //%20 remove from url
				     }
			       else {
					   
			       	// $user=2;//by default LS is selected
			       	if($roles_id==2){
			       		 $user='LS';//by default LS is selected
			       	}
			       	if($roles_id==7){
			       			$user='CWC';//by default LS is selected
			       	}
			       	if($roles_id==8){
			       			$user='DCPU';//by default LS is selected
			       	}
			       	if($roles_id==14){
			       			$user='DM';//by default LS is selected
			       	}
			       	if($roles_id==19){
			       			$user='DCS';//by default LS is selected
			       	}
			       	if($roles_id==5){
			       		 	$user='LEO';//by default LS is selected
			       	}
			       	if($roles_id==16){
			       			$user='SP';//by default LS is selected
			       	}
			       	if($roles_id==6){
			       		  	$user='CCI';//by default LS is selected
			       	}
			       	if($roles_id==18){
			       			$user='DEPO';//by default LS is selected
			       	}
					  
				   }
				   //modified by pooja $user to $dist
				   $monthly_data_report_details['last_login_report']=$this->mis_reports_model->get_report_last_login_data($from,$to,$dist,$user);
			         //print_r($management_data_report['last_login_report']);
					  
				  }
				  else if($type=="cci")
				  { 
				  	//echo $roles_id ;
				  	$dist=$param2; 
				  	
				  	if(($roles_id==2)||($roles_id==5)||($roles_id==6)||($roles_id==7)||($roles_id==8)||($roles_id==14)||($roles_id==16)||($roles_id==18)||($roles_id==19)){
				  		
				  		$dist=$dist_id ;
				  	}
					
					$monthly_data_report_details['childs_to_cci']=$this->mis_reports_model->get_report_childs_to_cci_data($from,$to,$dist);
					//echo "<pre>";print_r($management_data_report['childs_to_cci']);echo "</pre>";
					  
				  }
				  else if($type=="cwc_delay")
				  {
					  
					$monthly_data_report_details['cwc_delay']=$this->mis_reports_model->get_report_cwc_delay_data($from,$to);  
                      
				  }	
				  else if($type=="cwc_not_filling")
				  {
		              $monthly_data_report_details['additional_details']=$this->mis_reports_model->get_status_additional_details($from,$to);
				  } 
				  else if($type=="middle_men")
				  {
				  	$monthly_data_report_details['middle_men']=$this->mis_reports_model->get_middlemen_data($from,$to);
			         
                      
				  }	
				  else if($type=="rescued_repeatedly")
				  {
					$monthly_data_report_details['rescued_repeatedly']=$this->mis_reports_model->get_child_rescued_repeatedly($from,$to);
			         //print_r($monthly_data_report_details['rescued_repeatedly']);
                      
				  }	
				  //Dipti's Code
            else if($type=="emp_amt")
				  {
					
			    $monthly_data_report_details['amount_calculated']=$this->mis_reports_model->wages_collected($from,$to);
					  
				  }
				  
				 else if($type=="lc_action")
				  {
					
			      $monthly_data_report_details['communication']=$this->mis_reports_model->communication($from,$to);  
				  }
				   else if($type=="ngo_dubbious")
				  { 
					$monthly_data_report_details['dubbious_ngo']=$this->mis_reports_model->get_report_ngo_dubbious($from,$to,$type);
			         //print_r($management_data_report['childs_to_cci']);
					  
				  }
				  
				  //code added by poojashree rout on 28.06.2017
				  else if($type=="order_after_production")
				  {
				  	$dist=$param2;
				  	$block=$param3;
				  	if(($roles_id==2)||($roles_id==5)||($roles_id==6)||($roles_id==7)||($roles_id==8)||($roles_id==14)||($roles_id==16)||($roles_id==18)||($roles_id==19)){
				  		$dist_show=false;
				  		$dist=$dist_id ;
				  	}
				  	//$monthly_data_report_details['blocks_list']=$this->mis_reports_model->get_blocks_list($dist);
				  	$monthly_data_report_details['monthly_report_details_mis']=$this->mis_reports_model->report_details_inside_mis($from,$to,$dist);
				  	//echo "<pre>";print_r($monthly_data_report_details['monthly_report_details_mis']);echo "</pre>";
				  	//$monthly_data_report_details["details_url"]=base_url()."index.php?child_rescued_list/view/";
				  	
				  	
				  }
				  //code ended  by poojashree rout on 28.06.2017
				  
				
				  else if($type=="rescued_child")
				  { 
				    $user=$param1;				  
					$monthly_data_report_details['resue_child']=$this->mis_reports_model->get_report_rescued_child($from,$to,$user);
					//print_r($monthly_data_report_details['resue_child']);
					  
				  }				  
				  else if($type=="Rehabilitation")
				  {
				  	if(($roles_id==2)||($roles_id==5)||($roles_id==6)||($roles_id==7)||($roles_id==8)||($roles_id==14)||($roles_id==16)||($roles_id==18)||($roles_id==19)){
				  		
				  		$dist=$dist_id ;
				  	}
				  	if($param2=="Labour"){
				  	$monthly_data_report_details['Rehabilitation']=$this->mis_reports_model->get_report_rehabilitaion($from,$to,$dist);
				  	}//print_r($monthly_data_report_details['Rehabilitation']) ;
				  	if($param2=="cm_relief"){
				  		$monthly_data_report_details['Rehabilitation']=$this->mis_reports_model->get_RehCm_relief($from,$to,$dist);
				  	}
				  	if($param2=="Educational"){
				  		$monthly_data_report_details['Rehabilitation']=$this->mis_reports_model->get_education_data($from,$to,$dist);
				  	}
				  	if($param2=="Rural"){
				  		$monthly_data_report_details['Rehabilitation']=$this->mis_reports_model->get_rural_data($from,$to,$dist);
				  	}
				  	if($param2=="Urban"){
				  		$monthly_data_report_details['Rehabilitation']=$this->mis_reports_model->get_urban_data($from,$to,$dist);
				  	}
				  	if($param2=="Revenue"){
				  		$monthly_data_report_details['Rehabilitation']=$this->mis_reports_model->get_revenue_data($from,$to,$dist);
				  	}
				  	if($param2=="Health"){
				  		$monthly_data_report_details['Rehabilitation']=$this->mis_reports_model->get_health_data($from,$to,$dist);
				  	}
				  	if($param2=="sc_st"){
				  		$monthly_data_report_details['Rehabilitation']=$this->mis_reports_model->get_sc_st_data($from,$to,$dist);
				  	}
				  	if($param2=="food"){
				  		$monthly_data_report_details['Rehabilitation']=$this->mis_reports_model->get_food_data($from,$to,$dist);
				  	}
				  	if($param2=="Minority"){
				  		$monthly_data_report_details['Rehabilitation']=$this->mis_reports_model->get_minority_data($from,$to,$dist);
				  	}
				  	if($param2=="Social"){
				  		$monthly_data_report_details['Rehabilitation']=$this->mis_reports_model->get_social_data($from,$to,$dist);
				  	}
				  	
				  	$monthly_data_report_details['sub_rehab']=$param2 ;
				  	
				  }
				  else if($type=="child_cumulative")
				  {
				  	if(($roles_id==2)||($roles_id==5)||($roles_id==6)||($roles_id==7)||($roles_id==8)||($roles_id==14)||($roles_id==16)||($roles_id==18)||($roles_id==19)){
				  		
				  		$dist=$dist_id ;
				  	}
				  	$monthly_data_report_details['resistration_details']=$this->mis_reports_model->get_cumulative($from,$to,$dist);
				  	//print_r($monthly_data_report_details['resistration_details']);				  	
				  }
				  else if($type=="caste")
				  {
				  	if(($roles_id==2)||($roles_id==5)||($roles_id==6)||($roles_id==7)||($roles_id==8)||($roles_id==14)||($roles_id==16)||($roles_id==18)||($roles_id==19)){
				  		
				  		$dist=$dist_id ;
				  	}
				  	$monthly_data_report_details['castwiseb_brakeup']=$this->mis_reports_model->get_category($from,$to,$dist);
				  	
				  }
				  
				  else if($type=="education")
				  {
				  	if(($roles_id==2)||($roles_id==5)||($roles_id==6)||($roles_id==7)||($roles_id==8)||($roles_id==14)||($roles_id==16)||($roles_id==18)||($roles_id==19)){
				  		
				  		$dist=$dist_id ;
				  	}
				  	$monthly_data_report_details['educationwise_brakeup']=$this->mis_reports_model->get_education($from,$to,$dist);
				  	//echo "<pre>";print_r($monthly_data_report_details['educationwise_brakeup']);echo "</pre>";
				  }
				  else if($type=="age")
				  {
				  	if(($roles_id==2)||($roles_id==5)||($roles_id==6)||($roles_id==7)||($roles_id==8)||($roles_id==14)||($roles_id==16)||($roles_id==18)||($roles_id==19)){
				  		
				  		$dist=$dist_id ;
				  	}
				  	$monthly_data_report_details['agewise_brakeup']=$this->mis_reports_model->get_age($from,$to,$dist);
				  	//echo "<pre>";print_r($monthly_data_report_details['agewise_brakeup']);echo "</pre>";
				  }
				  else if($type=="cmrf_transaction")
				  {
				  	if(($roles_id==2)||($roles_id==5)||($roles_id==6)||($roles_id==7)||($roles_id==8)||($roles_id==14)||($roles_id==16)||($roles_id==18)||($roles_id==19)){
				  		
				  		$dist=$dist_id ;
				  	}
				  	$monthly_data_report_details['cmrf_transaction']=$this->mis_reports_model->get_cmrf_trn_details($from,$to,$dist);
				  	//echo "<pre>";print_r($monthly_data_report_details['cmrf_transaction']);echo "</pre>";
				  }
				  
				  else if($type=="due_for_transfer")
				  {
				  	
				  	$monthly_data_report_details['due_for_transfer']=$this->mis_reports_model->get_due_for_transfer($from,$to,$dist);
				  	//echo "<pre>";print_r($monthly_data_report_details['due_for_transfer']);echo "</pre>";
				  	//print_r($monthly_data_report_details['due_for_transfer']) ;
				  }
				  
				  else if($type=="cwc_working_status")
				  {
				  	
				  	$monthly_data_report_details['cwc_working_status']=$this->mis_reports_model->get_cwc_work_status($from,$to,$dist);
				  	
				  }
				  
				  else if($type=="trnsfr_status")
				  {
				  	
				  	$monthly_data_report_details['trnsfr_status']=$this->mis_reports_model->state_transfer_status($from,$to,$dist);
				  	
				  }
				  
				  
				  //print_r($monthly_data_report_details['monthly_report_details']);
		     
		  }
		    else{ 
		    	 
		    	
		    	header('Location: '.base_url().'index.php?mis_reports');
			}
		  
		  }
		  else{
			  
		  	if(($roles_id==2)||($roles_id==5)||($roles_id==6)||($roles_id==7)||($roles_id==8)||($roles_id==14)||($roles_id==16)||($roles_id==18)||($roles_id==19)){
		  		
		  		$dist=$dist_id ;
		  	}
		  	
			    $type="age";//by default inside state child rescued will be loaded 
			    $to =date('Y-m-d');//today's date
				$from=date('Y-m-d', strtotime("2014-04-01"));//one month past date
				$dist_show=true;
				$monthly_data_report_details['agewise_brakeup']=$this->mis_reports_model->get_age($from,$to,$dist);
        
		  }
		     
			 $monthly_data_report_details['from']=$from;
             $monthly_data_report_details['to']=$to;
             $monthly_data_report_details['dist_show']= $dist_show;
		  	 $monthly_data_report_details['selected_dist']=$dist;
		 	 $monthly_data_report_details['selected_block']=$block;
		 	 $monthly_data_report_details['selected_state']=$state;
			 $monthly_data_report_details['type']=$type;
			 $monthly_data_report_details['selected_user_grp']=$user;
			 $monthly_data_report_details['role']=$roles_id;
             $monthly_data_report_details["details_url"]=base_url()."index.php?child_rescued_list/view/";
             //added by  pooja
             $monthly_data_report_details["order_url"]=base_url()."index.php?child_rescued_list/vieworder/";
             $monthly_data_report_details["my_url"]=base_url()."index.php?mis_reports/child_order_after_list/";
             //url for transfer child
             //24-08-17
             $monthly_data_report_details["transfer_url"]=base_url()."index.php?mis_reports/child_transfer_due/";
             //01-11-17
             $monthly_data_report_details["transfer_url_state"]=base_url()."index.php?mis_reports/child_transfer_due_state/";
             $monthly_data_report_details["transfer_url_state_sent"]=base_url()."index.php?mis_reports/child_transfer_due_state_sent/";
             
             $monthly_data_report_details["cwc_progress"]=base_url()."index.php?mis_reports/child_cwc_progress/";
             $monthly_data_report_details["transfer_form_url"]=base_url()."index.php?mis_reports/child_transfer_due_form/";
             $monthly_data_report_details["forward_cwc"]=base_url()."index.php?mis_reports/forward_cwc/";
             $monthly_data_report_details["district_url"]=base_url()."index.php?mis_reports/user_details/";
             //29-08-17
             //For district wise details list
             $monthly_data_report_details["user_details_manual"]=base_url()."index.php?mis_reports/user_details_manual/";
             $monthly_data_report_details["childrescue_url"]=base_url()."index.php?child_rescued_list/vieworder_rescuechild/";
             //ended by pooja
			 $monthly_data_report_details['user_grps']=$this->mis_reports_model->get_user_groups_list();
			 $monthly_data_report_details['view_url']=  base_url().'index.php?mis_reports/view_details/';
			 $monthly_data_report_details['view_rescuechld']=  base_url().'index.php?mis_reports/view_rescue/';
			 $monthly_data_report_details['view_districtwise']=  base_url().'index.php?mis_reports/view_accountrol_details/';			 
			 $monthly_data_report_details['view_url_outside']=  base_url().'index.php?mis_reports/view_details_outside/';
			 $monthly_data_report_details['view_url_cci']=  base_url().'index.php?mis_reports/view_details_cci/';
			 if($param1=="view")
			 {
			  $this->data['main_content_view'] = $this->load->view('backend/staff/report_details',$monthly_data_report_details, TRUE);
			  $this->generate_data('backend/index', $this->data ); 
			 }
			 else if($param1=="pdf"){
			 	//echo "AAAAA" ; die();
			 	//$name="MIS_Report_".$type."_".$from."_".$to;
			 	$name="MIS_Report_".$type."_"."$param2"."_".$from."_".$to;
			 	$this->data['main_content_view'] = $this->load->view('backend/staff/pdf_export.php',$monthly_data_report_details, TRUE);
			 	$this-> _gen_pdf($this->data['main_content_view'],$name);

			 }
			 else{
			 	$this->data['main_content_view'] = $this->load->view('backend/staff/report_details',$monthly_data_report_details, TRUE);
			 	$this->generate_data('backend/index', $this->data ); 
			 }
			  //$this->output->enable_profiler(TRUE);
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
		//function to get blocks
		public function get_blocks_list($dist)
		{
			$this->load->model('mis_reports_model');
		     json_encode($this->mis_reports_model->get_blocks_list($dist));
		}
		//view details child rescued inside state
		public function view_details($from,$to,$type="",$area="",$block="")
			{
			$this->load->model('mis_reports_model');
			$data_inside["details_url"]=base_url()."index.php?child_rescued_list/view/";

			$data_inside['inside_state_detils']=$this->mis_reports_model->get_details_inside($from,$to,$type,$area,$block);
			//print_r("<br>".$data_inside['inside_state_detils']); die();
			$data_inside['from']=$from;
			$data_inside['to']=$to;
			$data_inside['type']=$type;
			$data_inside['area']=$area;
			$this->data['title']="Within State Child Details";

			if($block=="view")
			{
			$this->data['main_content_view'] = $this->load->view('backend/staff/inside_details_report',$data_inside, TRUE);
			$this->generate_data('backend/index', $this->data );
			}
			else if($block=="pdf"){
			//echo "AAAAA" ;
			$name="MIS_Report_Within_State_Child_Detail_".$from."_".$to;
			$this->data['main_content_view'] = $this->load->view('backend/staff/pdf_inner_export.php',$data_inside, TRUE);
			$this-> _gen_pdf($this->data['main_content_view'],$name);
			}
			else{
			$this->data['main_content_view'] = $this->load->view('backend/staff/inside_details_report',$data_inside, TRUE);
			$this->generate_data('backend/index', $this->data );
			}


}  
		
	
		
		public function view_details_cci($from,$to,$type="",$area="",$block="")
		{
			$this->load->model('mis_reports_model');
			$data_inside["details_url"]=base_url()."index.php?child_rescued_list/view/";
			$data_inside["order_url"]=base_url()."index.php?child_rescued_list/vieworder/";
			$data_inside['inside_cci_detils']=$this->mis_reports_model->get_details_cci($from,$to,$type,$area,$block);
			//print_r($data_inside['inside_state_detils']);
			$data_inside['from']=$from;
			$data_inside['to']=$to;
			$data_inside['type']=$type;
			$data_inside['type1']="cci-details";
			$data_inside['area']=$area;
			$this->data['title']="Children Sent To CCI Details";
			if($block=="view")
			{
			$this->data['main_content_view'] = $this->load->view('backend/staff/inside_ccidetails',$data_inside, TRUE);
			$this->generate_data('backend/index', $this->data );
			}
			else if($block=="pdf"){
			//echo "AAAAA" ;
			$name="MIS_Report_cci-details_".$from."_".$to;
			$this->data['main_content_view'] = $this->load->view('backend/staff/pdf_inner_export.php',$data_inside, TRUE);
			$this-> _gen_pdf($this->data['main_content_view'],$name);
			}
			else{
			$this->data['main_content_view'] = $this->load->view('backend/staff/inside_ccidetails',$data_inside, TRUE);
			$this->generate_data('backend/index', $this->data );
			}
		}  
		
//view details child rescued inside state
		public function view_rescue($from,$to,$type="",$area="",$block="")
        {  
		    //echo $area_id;
		    $this->load->model('mis_reports_model');
			$data_inside["details_url"]=base_url()."index.php?child_rescued_list/view/";
			$data_inside['inside_state_detils']=$this->mis_reports_model->get_rescue_child($from,$to,$type,$area,$block);
			//print_r($data_inside['inside_state_detils']);
			  $this->data['title']="Report Details";
			 $this->data['main_content_view'] = $this->load->view('backend/staff/inside_details_rescuedchild',$data_inside, TRUE);
          $this->generate_data('backend/index', $this->data ); 
		} 
		//for misreport group wise details
		public function view_accountrol_details($from,$to,$account_role,$type)
		{
			$this->load->model('mis_reports_model');
			$data_inside["details_url"]=base_url()."index.php?child_rescued_list/view/";
			$data_inside["type"]=$type;
			$data_inside['inside_accountroll_detils']=$this->mis_reports_model->get_alldistrict_child($from,$to,$account_role,$type);
			$data_inside['from']=$from;
			$data_inside['to']=$to;
			$data_inside['view_rescuechld']=  base_url().'index.php?mis_reports/view_rescue/';
			
			//print_r($data_inside['inside_state_detils']);
			$this->data['title']="Report Details";
			$this->data['main_content_view'] = $this->load->view('backend/staff/report_alldistrict',$data_inside, TRUE);
			$this->generate_data('backend/index', $this->data );
		} 
		
         //view details child rescued outside state
        public function view_details_outside($from,$to,$type="",$area="",$param1="")
        {     
        	
			$this->load->model('mis_reports_model');
			$data_outside["details_url"]=base_url()."index.php?child_rescued_list/view/";

			$data_outside['outside_state_detils']=$this->mis_reports_model->get_details_outside($from,$to,$type,$area,$dist_id);
			$data_outside['from']=$from;
			$data_outside['to']=$to;
			$data_outside['type']=$type;
			$data_outside['area']=$area;
			$this->data['title']="Outside State Child Details";
			$data_outside['type1']="outside-details";

			if($param1=="view")
			{
			$this->data['main_content_view'] = $this->load->view('backend/staff/outside_details_report',$data_outside, TRUE);
			$this->generate_data('backend/index', $this->data );
			}
			else if($param1=="pdf"){
			//echo "AAAAA" ; 
			$name="MIS_Report_Outside_State_Child_Details_".$from."_".$to;
			$this->data['main_content_view'] = $this->load->view('backend/staff/pdf_inner_export.php',$data_outside, TRUE);
			$this-> _gen_pdf($this->data['main_content_view'],$name);
			}
			else{
			$this->data['main_content_view'] = $this->load->view('backend/staff/outside_details_report',$data_outside, TRUE);
			$this->generate_data('backend/index', $this->data );
			}

			 //$this->generate_data('backend/index', $this->data );  
} 
		 //pooja for list of child after order of production 
		 
public function child_order_after_list($from,$to,$type="",$area="",$param1)
			{
			$this->load->model('mis_reports_model');
			$data_order_after['details_order_after_production']=$this->mis_reports_model->get_details_order($from,$to,$type,$area,$param1);
			$data_order_after["type"]=$type;
			//$data_order_after['cci_names']=$this->mis_reports_model->get_cci_name();
			//print_r($data_order_after['details_order_after_production']);
			$data_order_after["details_url"]=base_url()."index.php?child_rescued_list/view/";
			$data_order_after["order_url"]=base_url()."index.php?child_rescued_list/vieworder/";
			$this->data['title']="Report Details  Of Order After Production";
			$data_order_after['from']=$from;
			$data_order_after['to']=$to;
			$data_order_after['area']=$area;
			$data_order_after['type1']="report_deatails_order_after_production";

			if($param1=="view")
			{
			$this->data['main_content_view'] = $this->load->view('backend/staff/report_details_child',$data_order_after, TRUE);
			$this->generate_data('backend/index', $this->data );
			}
			else if($param1=="pdf"){
			//echo "AAAAA" ;
			$name="MIS_Report_order_after_production_".$from."_".$to;
			$this->data['main_content_view'] = $this->load->view('backend/staff/pdf_inner_export.php',$data_order_after, TRUE);
			$this-> _gen_pdf($this->data['main_content_view'],$name);
			}
			else{
			$this->data['main_content_view'] = $this->load->view('backend/staff/report_details_child',$data_order_after, TRUE);
			$this->generate_data('backend/index', $this->data );
			}

			//$this->data['main_content_view'] = $this->load->view('backend/staff/report_details_child',$data_order_after,TRUE);
			//$this->generate_data('backend/index', $this->data );  
			}
		 
		 // added by pooja for showing details of child according to user
		
		 public function user_details($from,$to,$type="",$area="",$param1)
		 {
		 	$this->load->model('mis_reports_model');
		 	$user_details_district['child_rescued_district']=$this->mis_reports_model->get_details_rescuedchild_district($from,$to,$type,$area);
		 	$user_details_district["type"]=$type;
		 	$user_details_district["district_url"]=base_url()."index.php?mis_reports/user_details/";
		 	$user_details_district["childrescue_url"]=base_url()."index.php?child_rescued_list/vieworder_rescuechild/";
		 	$this->data['title']="Report Details of Rescued child";
		 	
		 	
		 	
		 	$user_details_district['from']=$from;
		 	$user_details_district['to']=$to;
		 	$user_details_district['area']=$area;
		 	$user_details_district['type1']="report_deatails_rescued_child";
		 	
		 	if($param1=="view")
		 	{
		 		$this->data['main_content_view'] = $this->load->view('backend/staff/district_details_resucedchild',$user_details_district, TRUE);
		 		$this->generate_data('backend/index', $this->data );
		 	}
		 	else if($param1=="pdf"){
		 		//echo "AAAAA" ;
		 		$name="MIS_Report_report_deatails_rescued_child_".$from."_".$to;
		 		$this->data['main_content_view'] = $this->load->view('backend/staff/pdf_inner_export.php',$user_details_district, TRUE);
		 		$this-> _gen_pdf($this->data['main_content_view'],$name);
		 	}
		 	else{
		 		$this->data['main_content_view'] = $this->load->view('backend/staff/district_details_resucedchild',$user_details_district,TRUE);
		 		$this->generate_data('backend/index', $this->data ); 
		 	}
		 	
		
		 }
		 
		//child need to send other district and should come from other district
		//24-08-2017
		 //Due for transferring the rescued Child Laborer
		
		 public function child_transfer_due($from,$to,$type,$param1)
		 {
          
		 	$this->load->model('mis_reports_model');
		 	$data_order_after['details_order_after_production']=$this->mis_reports_model->get_details_order_transfer($from,$to,$type,$param1);
		 	//print_r($data_order_after['details_order_after_production']);
		 	//$data_order_after["type"]=$type;
		 	//$data_order_after['cci_names']=$this->mis_reports_model->get_cci_name();
		 	//print_r($data_order_after['details_order_after_production']);
		 	$data_order_after["details_url"]=base_url()."index.php?child_rescued_list/view/";
		 	$data_order_after["order_url"]=base_url()."index.php?child_rescued_list/vieworder/";
		 	$this->data['title']="No Of Children Need To Transfer To Other District";
		 	$data_order_after['from']=$from;
		 	$data_order_after['to']=$to;
		 	$data_order_after["type"]=$type;
		 	$data_order_after['type1']="no_of_children_need_to_transfer";
		 	
		 	if($param1=="view")
		 	{
		 		$this->data['main_content_view'] = $this->load->view('backend/staff/transfer_details_child',$data_order_after, TRUE);
		 		$this->generate_data('backend/index', $this->data );
		 	}
		 	else if($param1=="pdf"){
		 		//echo "AAAAA" ;
		 		$name="MIS_Report_no_of_children_need_to_transfer_to_other_district_".$from."_".$to;
		 		$this->data['main_content_view'] = $this->load->view('backend/staff/pdf_inner_export.php',$data_order_after, TRUE);
		 		$this-> _gen_pdf($this->data['main_content_view'],$name);
		 	}
		 	else{
		 		$this->data['main_content_view'] = $this->load->view('backend/staff/transfer_details_child',$data_order_after, TRUE);
		 		$this->generate_data('backend/index', $this->data );
		 	}
		 	
		 	//$this->data['main_content_view'] = $this->load->view('backend/staff/report_details_child',$data_order_after,TRUE);
		 	//$this->generate_data('backend/index', $this->data );
		 }
		 
		 
		 public function child_transfer_due_form($from,$to,$type,$param1)
		 {
		 	$this->load->model('mis_reports_model');
		 	$data_order_after['details_order_after_production']=$this->mis_reports_model->get_details_order_transfer_form($from,$to,$type,$area,$param1);
		 	//print_r($data_order_after['details_order_after_production']);
		 	
		 	//$data_order_after['cci_names']=$this->mis_reports_model->get_cci_name();
		 	//print_r($data_order_after['details_order_after_production']);
		 	$data_order_after["details_url"]=base_url()."index.php?child_rescued_list/view/";
		 	$data_order_after["order_url"]=base_url()."index.php?child_rescued_list/vieworder/";
		 	$this->data['title']="No Of Children Need To Transfer From Other District";
		 	$data_order_after['from']=$from;
		 	$data_order_after['to']=$to;
		 	$data_order_after["type"]=$type;
		 	$data_order_after['type1']="no_of_children_need_to_transfer_from";
		 	
		 	if($param1=="view")
		 	{
		 		$this->data['main_content_view'] = $this->load->view('backend/staff/transfer_details_form_dist',$data_order_after, TRUE);
		 		$this->generate_data('backend/index', $this->data );
		 	}
		 	else if($param1=="pdf"){
		 		//echo "AAAAA" ;
		 		$name="MIS_Report_no_of_children_need_to_transfer_from_other_district_".$from."_".$to;
		 		$this->data['main_content_view'] = $this->load->view('backend/staff/pdf_inner_export.php',$data_order_after, TRUE);
		 		$this-> _gen_pdf($this->data['main_content_view'],$name);
		 	}
		 	else{
		 		$this->data['main_content_view'] = $this->load->view('backend/staff/transfer_details_form_dist',$data_order_after, TRUE);
		 		$this->generate_data('backend/index', $this->data );
		 	}
		 	
		 	//$this->data['main_content_view'] = $this->load->view('backend/staff/report_details_child',$data_order_after,TRUE);
		 	//$this->generate_data('backend/index', $this->data );
		 }
		 
		 
		 
		 
		 
		 public function forward_cwc($from,$to,$type,$param1)
		 {
		 	$this->load->model('mis_reports_model');
		 	$data_order_after['details_order_after_production']=$this->mis_reports_model->forward_cwc($from,$to,$type,$area,$param1);
		 	//print_r($data_order_after['details_order_after_production']);
		 	
		 	//$data_order_after['cci_names']=$this->mis_reports_model->get_cci_name();
		 	//print_r($data_order_after['details_order_after_production']);
		 	$data_order_after["details_url"]=base_url()."index.php?child_rescued_list/view/";
		 	$data_order_after["order_url"]=base_url()."index.php?child_rescued_list/vieworder/";
		 	$this->data['title']="No Of Children Need To Forward To CWC";
		 	$data_order_after['from']=$from;
		 	$data_order_after['to']=$to;
		 	$data_order_after["type"]=$type;
		 	$data_order_after['type1']="forward_to_cwc";
		 	
		 	if($param1=="view")
		 	{
		 		$this->data['main_content_view'] = $this->load->view('backend/staff/cwc_new_transfer',$data_order_after, TRUE);
		 		$this->generate_data('backend/index', $this->data );
		 	}
		 	else if($param1=="pdf"){
		 		//echo "AAAAA" ;
		 		$name="MIS_Report_no_of_children_need_to_forward_to_cwc_".$from."_".$to;
		 		$this->data['main_content_view'] = $this->load->view('backend/staff/pdf_inner_export.php',$data_order_after, TRUE);
		 		$this-> _gen_pdf($this->data['main_content_view'],$name);
		 	}
		 	else{
		 		$this->data['main_content_view'] = $this->load->view('backend/staff/cwc_new_transfer',$data_order_after, TRUE);
		 		$this->generate_data('backend/index', $this->data );
		 	}
		 	
		 	//$this->data['main_content_view'] = $this->load->view('backend/staff/report_details_child',$data_order_after,TRUE);
		 	//$this->generate_data('backend/index', $this->data );
		 }
		 
		 public function user_details_manual($from,$to,$area,$param1)
		 {
		 	
		    $this->load->model('mis_reports_model');
		 	$user_details_district['child_rescued_district_manual']=$this->mis_reports_model->get_details_rescuedchild_district_details($from,$to,$area);
		 	//print_r($user_details_district['child_rescued_district_manual']);
		 	$user_details_district["type"]=$type;
		 	$user_details_district["user_details_manual"]=base_url()."index.php?mis_reports/user_details_manual/";
		 	$user_details_district["childrescue_url"]=base_url()."index.php?child_rescued_list/vieworder_rescuechild/";
		 	$this->data['title']="List of Children details From ".$from." To ".$to."  ";
		 	
		 	
		 	$user_details_district['from']=$from;
		 	$user_details_district['to']=$to;
		 	$user_details_district["type"]=$type;
		 	$user_details_district["area"]=$area;
		 	$user_details_district['type1']="district_wise_details_list_of_children";
		 	
		 	if($param1=="view")
		 	{
		 		$this->data['main_content_view'] = $this->load->view('backend/staff/district_details_user_manual',$user_details_district, TRUE);
		 		$this->generate_data('backend/index', $this->data );
		 	}
		 	else if($param1=="pdf"){
		 		//echo "AAAAA" ;
		 		$name="MIS_Report_district_wise_details_list_of_children_".$from."_".$to;
		 		$this->data['main_content_view'] = $this->load->view('backend/staff/pdf_inner_export.php',$user_details_district, TRUE);
		 		$this-> _gen_pdf($this->data['main_content_view'],$name);
		 	}
		 	else{
		 		$this->data['main_content_view'] = $this->load->view('backend/staff/district_details_user_manual',$user_details_district,TRUE);
		 		$this->generate_data('backend/index', $this->data );
		 	}
		
		 }
		 
		 /* new CWC progress */
		 
		 public function child_cwc_progress($from,$to,$type,$param1)
		 {
		 	$this->load->model('mis_reports_model');
		 	$getchild_cwcDetails=$this->mis_reports_model->get_details_cwc_pending($from,$to,$type,$param1);
		 //	$getchild_cwcDetails  = $this->mis_reports_model->getChildDetailsforcwc($from,$to,$type);	
		 	$percent = array();
		 	$j = 0;
		 	foreach ($getchild_cwcDetails as $data) {
		 		$percent[$j]['id'] = $data['child_id'];
		 		$percent[$j]['child_name'] = $data['child_name'];
		 		$percent[$j]['father_name'] = $data['father_name'];
		 		$totalField = count($data);
		 		$cnt = 0;
		 		
		 		if(empty($data['produced']) || $data['produced'] ==''){
		 			$cnt ++;
		 		}
		 		if(empty($data['parents_name']) || $data['parents_name'] ==''){
		 			$cnt ++;
		 		}
		 		if(empty($data['parent_dist']) || $data['parent_dist'] ==''){
		 			$cnt ++;
		 		}
		 		if(empty($data['parent_address']) || $data['parent_address'] ==''){
		 			$cnt ++;
		 		}
		 		if(empty($data['parent_date']) || $data['parent_date'] ==''){
		 			$cnt ++;
		 		}
		 		if(empty($data['ccis_name']) || $data['ccis_name'] ==''){
		 			$cnt ++;
		 		}
		 		if(empty($data['cci_dist']) || $data['cci_dist'] ==''){
		 			$cnt ++;
		 		}
		 		if(empty($data['cci_address']) || $data['cci_address'] ==''){
		 			$cnt ++;
		 		}
		 		if(empty($data['cci_date']) || $data['cci_date'] ==''){
		 			$cnt ++;
		 		}
		 		if(empty($data['fitperson_name']) || $data['fitperson_name'] ==''){
		 			$cnt ++;
		 		}
		 		if(empty($data['fitperson_dist']) || $data['fitperson_dist'] ==''){
		 			$cnt ++;
		 		}
		 		if(empty($data['fitperson_address']) || $data['fitperson_address'] ==''){
		 			$cnt ++;
		 		}
		 		
		 		
		 		if(empty($data['fitperson_date']) || $data['fitperson_date'] ==''){
		 			$cnt ++;
		 		}
		 		if(empty($data['fitinstitution_name']) || $data['fitinstitution_name'] ==''){
		 			$cnt ++;
		 		}
		 		if(empty($data['fitinstitution_dist']) || $data['fitinstitution_dist'] ==''){
		 			$cnt ++;
		 		}
		 		if(empty($data['fitinstitution_address']) || $data['fitinstitution_address'] ==''){
		 			$cnt ++;
		 		}
		 		
		 		if(empty($data['fitinstitution_date']) || $data['fitinstitution_date'] ==''){
		 			$cnt ++;
		 		}
		 		if(empty($data['otherplace_name']) || $data['otherplace_name'] ==''){
		 			$cnt ++;
		 		}
		 		if(empty($data['otherplace_dist']) || $data['otherplace_dist'] ==''){
		 			$cnt ++;
		 		}
		 		if(empty($data['otherplace_address']) || $data['otherplace_address'] ==''){
		 			$cnt ++;
		 		}
		 		if(empty($data['otherplace_date']) || $data['otherplace_date'] ==''){
		 			$cnt ++;
		 		}
		 		if(empty($data['other']) || $data['other'] ==''){
		 			$cnt ++;
		 		}
		 		
		 		if(empty($data['cwc_upload']) || $data['cwc_upload'] ==''){
		 			$cnt ++;
		 		}
		 		if(empty($data['height']) || $data['height'] ==''){
		 			$cnt ++;
		 		}
		 		if(empty($data['details_of_handicap']) || $data['details_of_handicap'] ==''){
		 			$cnt ++;
		 		}
		 		
		 		
		 		if(empty($data['details_of_handicap_other']) || $data['details_of_handicap_other'] ==''){
		 			$cnt ++;
		 		}
		 		if(empty($data['respiratory_disorders']) || $data['respiratory_disorders'] ==''){
		 			$cnt ++;
		 		}
		 		if(empty($data['hearing_impairment']) || $data['hearing_impairment'] ==''){
		 			$cnt ++;
		 		}
		 		if(empty($data['eye_diseases']) || $data['eye_diseases'] ==''){
		 			$cnt ++;
		 		}
		 		if(empty($data['dental_disease']) || $data['dental_disease'] ==''){
		 			$cnt ++;
		 		}
		 		if(empty($data['cardiac_diseases']) || $data['cardiac_diseases'] ==''){
		 			$cnt ++;
		 		}
		 		if(empty($data['skin_disease']) || $data['skin_disease'] ==''){
		 			$cnt ++;
		 		}
		 		if(empty($data['sexually_transmitted_diseases']) || $data['sexually_transmitted_diseases'] ==''){
		 			$cnt ++;
		 		}
		 		if(empty($data['neurological_disorders']) || $data['neurological_disorders'] ==''){
		 			$cnt ++;
		 		}
		 		if(empty($data['mental_handicap']) || $data['mental_handicap'] ==''){
		 			$cnt ++;
		 		}
		 		if(empty($data['physical_handicap']) || $data['other_specify'] ==''){
		 			$cnt ++;
		 		}
		 		if(empty($data['weight']) || $data['weight'] ==''){
		 			$cnt ++;
		 		}
		 		if(empty($data['blood_group']) || $data['blood_group'] ==''){
		 			$cnt ++;
		 		}
		 		if(empty($data['health_card_issued']) || $data['health_card_issued'] ==''){
		 			$cnt ++;
		 		}
		 		if(empty($data['health_card_issued_yes']) || $data['health_card_issued_yes'] ==''){
		 			$cnt ++;
		 		}
		 		if(empty($data['reason_leaving_family']) || $data['reason_leaving_family'] ==''){
		 			$cnt ++;
		 		}
		 		if(empty($data['staying_prior_rescue']) || $data['staying_prior_rescue'] ==''){
		 			$cnt ++;
		 		}
		 		if(empty($data['care_before_rescue']) || $data['care_before_rescue'] ==''){
		 			$cnt ++;
		 		}
		 		if(empty($data['parent_prior_institute']) || $data['parent_prior_institute'] ==''){
		 			$cnt ++;
		 		}
		 		if(empty($data['parent_after_institute']) || $data['parent_after_institute'] ==''){
		 			$cnt ++;
		 		}
		 		if(empty($data['reason_for_leaving']) || $data['reason_for_leaving'] ==''){
		 			$cnt ++;
		 		}
		 		if(empty($data['friends_rel']) || $data['friends_rel'] ==''){
		 			$cnt ++;
		 		}
		 		if(empty($data['guardian_rel']) || $data['guardian_rel'] ==''){
		 			$cnt ++;
		 		}
		 		if(empty($data['details_friendship']) || $data['details_friendship'] ==''){
		 			$cnt ++;
		 		}
		 		
		 		if(empty($data['majority_friends']) || $data['majority_friends'] ==''){
		 			$cnt ++;
		 		}
		 		
		 		if(empty($data['details_membership']) || $data['details_membership'] ==''){
		 			$cnt ++;
		 		}
		 		if(empty($data['position_child']) || $data['position_child'] ==''){
		 			$cnt ++;
		 		}
		 		if(empty($data['purpose_membership']) || $data['purpose_membership'] ==''){
		 			$cnt ++;
		 		}
		 		if(empty($data['attitude_group']) || $data['attitude_group'] ==''){
		 			$cnt ++;
		 		}
		 		if(empty($data['location_meeting']) || $data['location_meeting'] ==''){
		 			$cnt ++;
		 		}
		 		if(empty($data['reaction_society']) || $data['reaction_society'] ==''){
		 			$cnt ++;
		 		}
		 		if(empty($data['reaction_police']) || $data['reaction_police'] ==''){
		 			$cnt ++;
		 		}
		 		if(empty($data['details_friendship_other']) || $data['details_friendship_other'] ==''){
		 			$cnt ++;
		 		}
		 		if(empty($data['details_membership_other']) || $data['details_membership_other'] ==''){
		 			$cnt ++;
		 		}
		 		
		 		if(empty($data['social_acceptance']) || $data['social_acceptance'] ==''){
		 			$cnt ++;
		 		}
		 		if(empty($data['purpose_member_other']) || $data['purpose_member_other'] ==''){
		 			$cnt ++;
		 		}
		 		
		 		if(empty($data['purpose_member_other']) || $data['purpose_member_other'] ==''){
		 			$cnt ++;
		 		}
		 		
		 		
		 		if(empty($data['school_attended']) || $data['school_attended'] ==''){
		 			$cnt ++;
		 		}
		 		if(empty($data['education_level']) || $data['education_level'] ==''){
		 			$cnt ++;
		 		}
		 		if(empty($data['details_of_school']) || $data['details_of_school'] ==''){
		 			$cnt ++;
		 		}
		 		if(empty($data['medium_of_study']) || $data['medium_of_study'] ==''){
		 			$cnt ++;
		 		}
		 		if(empty($data['reason_for_leaving']) || $data['reason_for_leaving'] ==''){
		 			$cnt ++;
		 		}
		 		if(empty($data['no_of_years']) || $data['no_of_years'] ==''){
		 			$cnt ++;
		 		}
		 		if(empty($data['vocational_training']) || $data['vocational_training'] ==''){
		 			$cnt ++;
		 		}
		 		if(empty($data['other']) || $data['other'] ==''){
		 			$cnt ++;
		 		}
		 		if(empty($data['medium_other']) || $data['medium_other'] ==''){
		 			$cnt ++;
		 		}
		 		if(empty($data['school_detail_other']) || $data['school_detail_other'] ==''){
		 			$cnt ++;
		 		}
		 		if(empty($data['reason_other']) || $data['reason_other'] ==''){
		 			$cnt ++;
		 		}
		 		if(empty($data['vocational_trade_name']) || $data['vocational_trade_name'] ==''){
		 			$cnt ++;
		 		}
		 		if(empty($data['child_educational_detailcol']) || $data['child_educational_detailcol'] ==''){
		 			$cnt ++;
		 		}
		 		if(empty($data['vocational_type']) || $data['vocational_type'] ==''){
		 			$cnt ++;
		 		}
		 		if(empty($data['structure_type']) || $data['structure_type'] ==''){
		 			$cnt ++;
		 		}
		 		if(empty($data['roofing_quality']) || $data['roofing_quality'] ==''){
		 			$cnt ++;
		 		}
		 		if(empty($data['toilet_facilities']) || $data['toilet_facilities'] ==''){
		 			$cnt ++;
		 		}
		 		if(empty($data['water_facility']) || $data['water_facility'] ==''){
		 			$cnt ++;
		 		}
		 		
		 		if(empty($data['household_articles']) || $data['household_articles'] ==''){
		 			$cnt ++;
		 		}
		 		if(empty($data['vehicles_type']) || $data['vehicles_type'] ==''){
		 			$cnt ++;
		 		}if(empty($data['other_property']) || $data['other_property'] ==''){
		 			$cnt ++;
		 		}
		 		if(empty($data['bpl_card']) || $data['bpl_card'] ==''){
		 			$cnt ++;
		 		}
		 		if(empty($data['ration_card']) || $data['ration_card'] ==''){
		 			$cnt ++;
		 		}
		 		if(empty($data['indira_awas']) || $data['indira_awas'] ==''){
		 			$cnt ++;
		 		}
		 		if(empty($data['job_card']) || $data['job_card'] ==''){
		 			$cnt ++;
		 		}
		 		if(empty($data['rsby_card']) || $data['rsby_card'] ==''){
		 			$cnt ++;
		 		}
		 		if(empty($data['anyscheme_card']) || $data['anyscheme_card'] ==''){
		 			$cnt ++;
		 		}
		 		if(empty($data['causing_injury']) || $data['causing_injury'] ==''){
		 			$cnt ++;
		 		}
		 		if(empty($data['exploitation_faced_by_the_child']) || $data['exploitation_faced_by_the_child'] ==''){
		 			$cnt ++;
		 		}
		 		if(empty($data['structure_type_other']) || $data['structure_type_other'] ==''){
		 			$cnt ++;
		 		}
		 		if(empty($data['roofing_quality_other']) || $data['roofing_quality_other'] ==''){
		 			$cnt ++;
		 		}
		 		if(empty($data['land_available']) || $data['land_available'] ==''){
		 			$cnt ++;
		 		}
		 		if(empty($data['land_area']) || $data['land_area'] ==''){
		 			$cnt ++;
		 		}
		 		if(empty($data['other_vehcle']) || $data['other_vehcle'] ==''){
		 			$cnt ++;
		 		}
		 		if(empty($data['bpl_no']) || $data['bpl_no'] ==''){
		 			$cnt ++;
		 		}
		 		if(empty($data['card_no']) || $data['card_no'] ==''){
		 			$cnt ++;
		 		}
		 		if(empty($data['rsby_no']) || $data['rsby_no'] ==''){
		 			$cnt ++;
		 		}
		 		if(empty($data['indira_awas_other']) || $data['indira_awas_other'] ==''){
		 			$cnt ++;
		 		}
		 		if(empty($data['electricity_facilities']) || $data['electricity_facilities'] ==''){
		 			$cnt ++;
		 		}
		 		if(empty($data['food_security']) || $data['food_security'] ==''){
		 			$cnt ++;
		 		}
		 		if(empty($data['water_facility_other']) || $data['water_facility_other'] ==''){
		 			$cnt ++;
		 		}
		 		if(empty($data['ration_card_no']) || $data['ration_card_no'] ==''){
		 			$cnt ++;
		 		}
		 		
		 		
		 		
		 		if(empty($data['type_of_family']) || $data['type_of_family'] ==''){
		 			$cnt ++;
		 		}
		 		if(empty($data['is_family_migrate']) || $data['is_family_migrate'] ==''){
		 			$cnt ++;
		 		}
		 		if(empty($data['father_mother']) || $data['father_mother'] ==''){
		 			$cnt ++;
		 		}
		 		if(empty($data['father_child']) || $data['father_child'] ==''){
		 			$cnt ++;
		 		}
		 		if(empty($data['mother_child']) || $data['mother_child'] ==''){
		 			$cnt ++;
		 		}
		 		if(empty($data['father_sibling']) || $data['father_sibling'] ==''){
		 			$cnt ++;
		 		}
		 		if(empty($data['mother_sibling']) || $data['mother_sibling'] ==''){
		 			$cnt ++;
		 		}
		 		if(empty($data['rescue_child_siblings']) || $data['rescue_child_siblings'] ==''){
		 			$cnt ++;
		 		}
		 		if(empty($data['type_migration']) || $data['type_migration'] ==''){
		 			$cnt ++;
		 		}
		 		if(empty($data['overal_relationship']) || $data['overal_relationship'] ==''){
		 			$cnt ++;
		 		}
		 		if(empty($data['total_no_family_male']) || $data['total_no_family_male'] ==''){
		 			$cnt ++;
		 		}
		 		if(empty($data['type_of_family_other']) || $data['type_of_family_other'] ==''){
		 			$cnt ++;
		 		}
		 		if(empty($data['bank_name']) || $data['bank_name'] ==''){
		 			$cnt ++;
		 		}
		 		if(empty($data['bank_ifsc_code']) || $data['bank_ifsc_code'] ==''){
		 			$cnt ++;
		 		}
		 		if(empty($data['bank_address']) || $data['bank_address'] ==''){
		 			$cnt ++;
		 		}
		 		if(empty($data['bank_id']) || $data['bank_id'] ==''){
		 			$cnt ++;
		 		}
		 		if(empty($data['working_hours']) || $data['working_hours'] ==''){
		 			$cnt ++;
		 		}
		 		if(empty($data['income_utilization']) || $data['income_utilization'] ==''){
		 			$cnt ++;
		 		}
		 		if(empty($data['savings']) || $data['savings'] ==''){
		 			$cnt ++;
		 		}
		 		if(empty($data['abuse_met']) || $data['abuse_met'] ==''){
		 			$cnt ++;
		 		}
		 		if(empty($data['ill_treatment']) || $data['ill_treatment'] ==''){
		 			$cnt ++;
		 		}
		 		if(empty($data['exploitation_faced']) || $data['exploitation_faced'] ==''){
		 			$cnt ++;
		 		}
		 		if(empty($data['physical_abuse']) || $data['physical_abuse'] ==''){
		 			$cnt ++;
		 		}
		 		if(empty($data['sexual_abuse']) || $data['sexual_abuse'] ==''){
		 			$cnt ++;
		 		}
		 		if(empty($data['denial_food']) || $data['denial_food'] ==''){
		 			$cnt ++;
		 		}
		 		if(empty($data['beaten_mercilessly']) || $data['beaten_mercilessly'] ==''){
		 			$cnt ++;
		 		}
		 		if(empty($data['causing_injury']) || $data['causing_injury'] ==''){
		 			$cnt ++;
		 		}
		 		if(empty($data['savings_other']) || $data['savings_other'] ==''){
		 			$cnt ++;
		 		}
		 		if(empty($data['verbal_abuse_other']) || $data['verbal_abuse_other'] ==''){
		 			$cnt ++;
		 		}
		 		if(empty($data['physical_abuse_other']) || $data['physical_abuse_other'] ==''){
		 			$cnt ++;
		 		}
		 		if(empty($data['sexual_abuse_other']) || $data['sexual_abuse_other'] ==''){
		 			$cnt ++;
		 		}
		 		if(empty($data['other_plz_specify']) || $data['other_plz_specify'] ==''){
		 			$cnt ++;
		 		}
		 		if(empty($data['denial_food_other']) || $data['denial_food_other'] ==''){
		 			$cnt ++;
		 		}
		 		if(empty($data['child_employment_statuscol']) || $data['child_employment_statuscol'] ==''){
		 			$cnt ++;
		 		}
		 		if(empty($data['beaten_mercilessly_other']) || $data['beaten_mercilessly_other'] ==''){
		 			$cnt ++;
		 		}
		 		if(empty($data['causing_injury_other']) || $data['causing_injury_other'] ==''){
		 			$cnt ++;
		 		}
		 		if(empty($data['exploitation_other']) || $data['exploitation_other'] ==''){
		 			$cnt ++;
		 		}
		 		if(empty($data['detail_delinquent']) || $data['detail_delinquent'] ==''){
		 			$cnt ++;
		 		}
		 		if(empty($data['reason_delinquent']) || $data['reason_delinquent'] ==''){
		 			$cnt ++;
		 		}
		 		if(empty($data['nature']) || $data['nature'] ==''){
		 			$cnt ++;
		 		}
		 		if(empty($data['habit']) || $data['habit'] ==''){
		 			$cnt ++;
		 		}
		 		if(empty($data['detail_delinquent_other']) || $data['detail_delinquent_other'] ==''){
		 			$cnt ++;
		 		}
		 		if(empty($data['nature_other']) || $data['nature_other'] ==''){
		 			$cnt ++;
		 		}
		 		if(empty($data['habit_other']) || $data['habit_other'] ==''){
		 			$cnt ++;
		 		}
		 		if(empty($data['hobbies']) || $data['hobbies'] ==''){
		 			$cnt ++;
		 		}
				 				 		
		 		$cntPerc = ($cnt/$totalField) * 100;
		 		$percent[$j]['percentage'] = $cntPerc;
		 		$j++;
		 	}
		 	 		 	 
		 
		 	$data_order_after["details_url"]=base_url()."index.php?child_rescued_list/view/";
		 	$data_order_after["order_url"]=base_url()."index.php?child_rescued_list/vieworder/";
		 	$this->data['title']="No Of Children Need To Progress";
		 	$data_order_after['from']=$from;
		 	$data_order_after['to']=$to;
		 	$data_order_after["type"]=$type;
		 	$data_order_after['percentage'] = $percent;
		 	$data_order_after['type1']="cwc_working_status";
		 	
		 	if($param1=="view")
		 	{
		 		$this->data['main_content_view'] = $this->load->view('backend/staff/cwc_progressed_child',$data_order_after, TRUE);
		 		$this->generate_data('backend/index', $this->data );
		 	}
		 	else if($param1=="pdf"){
		 		//echo "AAAAA" ;
		 		$name="MIS_Report_no_of_children_need_to_progress_ss".$from."_".$to;
		 		$this->data['main_content_view'] = $this->load->view('backend/staff/pdf_inner_export.php',$data_order_after, TRUE);
		 		$this-> _gen_pdf($this->data['main_content_view'],$name);
		 	}
		 	else{
		 		$this->data['main_content_view'] = $this->load->view('backend/staff/cwc_progressed_child',$data_order_after, TRUE);
		 		$this->generate_data('backend/index', $this->data );
		 	}
		 	
		 	//$this->data['main_content_view'] = $this->load->view('backend/staff/report_details_child',$data_order_after,TRUE);
		 	//$this->generate_data('backend/index', $this->data );
		 }
		 public function child_transfer_due_state($from,$to,$type,$param1)
		 {
		 	
		 	$this->load->model('mis_reports_model');
		 	$data_order_after['details_state_transfer_need']=$this->mis_reports_model->get_details_state_transfer($from,$to,$type,$param1);
		 	//print_r($data_order_after['details_order_after_production']);
		 	//$data_order_after["type"]=$type;
		 	//$data_order_after['cci_names']=$this->mis_reports_model->get_cci_name();
		 	//print_r($data_order_after['details_order_after_production']);
		 	$data_order_after["details_url"]=base_url()."index.php?child_rescued_list/view/";
		 	$data_order_after["order_url"]=base_url()."index.php?child_rescued_list/vieworder/";
		 	$this->data['title']="No Of Children Need To Transfer To Other State";
		 	$data_order_after['from']=$from;
		 	$data_order_after['to']=$to;
		 	$data_order_after["type"]=$type;
		 	$data_order_after['type1']="no_of_children_need_to_transfer_state";
		 	
		 	if($param1=="view")
		 	{
		 		$this->data['main_content_view'] = $this->load->view('backend/staff/child_need_to_transfer_state',$data_order_after, TRUE);
		 		$this->generate_data('backend/index', $this->data );
		 	}
		 	else if($param1=="pdf"){
		 		//echo "AAAAA" ;
		 		$name="MIS_Report_no_of_children_need_to_transfer_to_other_state_".$from."_".$to;
		 		$this->data['main_content_view'] = $this->load->view('backend/staff/pdf_inner_export.php',$data_order_after, TRUE);
		 		$this-> _gen_pdf($this->data['main_content_view'],$name);
		 	}
		 	else{
		 		$this->data['main_content_view'] = $this->load->view('backend/staff/child_need_to_transfer_state',$data_order_after, TRUE);
		 		$this->generate_data('backend/index', $this->data );
		 	}
		 	
		 	//$this->data['main_content_view'] = $this->load->view('backend/staff/report_details_child',$data_order_after,TRUE);
		 	//$this->generate_data('backend/index', $this->data );
		 }
		 
		
		
		 public function rescue_outside($param1="",$param2="")
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
		 		
		 		$child_data['view_child_data']	=	$this->mis_reports_model->get_outsideindivisual_detail($param1,$role_staff_id);
		 		
		 		
		 		$this->data['main_content_view'] = $this->load->view('backend/staff/child_outsiderescue.php', $child_data, TRUE);
		 		$this->generate_data('backend/index', $this->data );
		 	}else{
		 		
		 	$this->data['title']="Child Detail";
		 	$child_data["details_url"]=base_url()."index.php?mis_reports/rescue_outside/";
		 	
		 	$child_data['view_child_outside_details']	=	$this->mis_reports_model->get_outsidechild_detail($param1);
		 	$child_data['default']="uploads/user.jpg";
		 	$child_data['upload_path']="./uploads/rescued_child_outside/";
		 	
		 	//print_r(  $child_data);
		 	$this->data['main_content_view'] = $this->load->view('backend/staff/child_outside_noticedetails.php', $child_data, TRUE);
		 	$this->generate_data('backend/index', $this->data );
		 	}
		 	
		 }
		 
		 public function child_transfer_due_state_sent($from,$to,$type,$param1)
		 {
		 	
		 	$this->load->model('mis_reports_model');
		 	$data_order_after['details_state_transfer_sent']=$this->mis_reports_model->get_details_state_transfer_sent($from,$to,$type,$param1);
		 	//print_r($data_order_after['details_order_after_production']);
		 	//$data_order_after["type"]=$type;
		 	//$data_order_after['cci_names']=$this->mis_reports_model->get_cci_name();
		 	//print_r($data_order_after['details_order_after_production']);
		 	$data_order_after["details_url"]=base_url()."index.php?child_rescued_list/view/";
		 	$data_order_after["order_url"]=base_url()."index.php?child_rescued_list/vieworder/";
		 	$this->data['title']="No Of Children Transferred To Other State";
		 	$data_order_after['from']=$from;
		 	$data_order_after['to']=$to;
		 	$data_order_after["type"]=$type;
		 	$data_order_after['type1']="no_of_children_sent_transfer_state";
		 	
		 	if($param1=="view")
		 	{
		 		$this->data['main_content_view'] = $this->load->view('backend/staff/child_sent_to_transfer_state',$data_order_after, TRUE);
		 		$this->generate_data('backend/index', $this->data );
		 	}
		 	else if($param1=="pdf"){
		 		//echo "AAAAA" ;
		 		$name="MIS_Report_no_of_children_need_to_transfer_to_other_state_".$from."_".$to;
		 		$this->data['main_content_view'] = $this->load->view('backend/staff/pdf_inner_export.php',$data_order_after, TRUE);
		 		$this-> _gen_pdf($this->data['main_content_view'],$name);
		 	}
		 	else{
		 		$this->data['main_content_view'] = $this->load->view('backend/staff/child_sent_to_transfer_state',$data_order_after, TRUE);
		 		$this->generate_data('backend/index', $this->data );
		 	}
		 	
		 	//$this->data['main_content_view'] = $this->load->view('backend/staff/report_details_child',$data_order_after,TRUE);
		 	//$this->generate_data('backend/index', $this->data );
		 }
		 
		 public function awards()
		 {
		 	
		 	$this->load->model('mis_reports_model');
		 	//$data_order_after['details_state_transfer_sent']=$this->mis_reports_model->get_details_state_transfer_sent($from,$to,$type,$param1);
		 	
		 	//$data_order_after["details_url"]=base_url()."index.php?child_rescued_list/view/";
		 	//$data_order_after["order_url"]=base_url()."index.php?child_rescued_list/vieworder/";
		 	$this->data['title']="Award Section";
		 	//$data_order_after['from']=$from;
		 	//$data_order_after['to']=$to;
		 	//$data_order_after["type"]=$type;
		 	//$data_order_after['type1']="no_of_children_sent_transfer_state";
		 	
		 	//if($param1=="view")
		 	//{
		 		//$this->data['main_content_view'] = $this->load->view('backend/staff/child_sent_to_transfer_state',$data_order_after, TRUE);
		 		//$this->generate_data('backend/index', $this->data );
		 	//}
		 	//else if($param1=="pdf"){
		 		//echo "AAAAA" ;
		 		//$name="MIS_Report_no_of_children_need_to_transfer_to_other_state_".$from."_".$to;
		 		//$this->data['main_content_view'] = $this->load->view('backend/staff/pdf_inner_export.php',$data_order_after, TRUE);
		 		//$this-> _gen_pdf($this->data['main_content_view'],$name);
		 	//}
		 	//else{
		 	$this->data['main_content_view'] = $this->load->view('backend/staff/award_section',$data_order_after,TRUE);
		 		$this->generate_data('backend/index', $this->data );
		 	//}
		 	
			
		 }
		 
		
		 
		 
		function checkIsAValidDate($myDateString){
		return (bool)strtotime($myDateString);
	}
			
  }
