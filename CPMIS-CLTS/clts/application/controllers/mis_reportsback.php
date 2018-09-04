
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
			
          $this->data['title']="MIS Reports";
		  
			
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
		    "order_after_production"=>"order_after_production"
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
					  $state=$param2;
				     $monthly_data_report_details['monthly_report_details']=$this->mis_reports_model->report_details_outside($from,$to,$state);
                       
					  
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
				  	$monthly_data_report_details['sub_rehab']=$param2 ;
				  	
				  }
				  else if($type=="child_cumulative")
				  {
				  	if(($roles_id==2)||($roles_id==5)||($roles_id==6)||($roles_id==7)||($roles_id==8)||($roles_id==14)||($roles_id==16)||($roles_id==18)||($roles_id==19)){
				  		
				  		$dist=$dist_id ;
				  	}
				  	$monthly_data_report_details['resistration_details']=$this->mis_reports_model->get_cumulative($from,$to,$dist);
				  					  	
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
				  	//echo "<pre>";print_r($monthly_data_report_details['educationwise_brakeup']);echo "</pre>";
				  }
				  else if($type=="cmrf_transaction")
				  {
				  	if(($roles_id==2)||($roles_id==5)||($roles_id==6)||($roles_id==7)||($roles_id==8)||($roles_id==14)||($roles_id==16)||($roles_id==18)||($roles_id==19)){
				  		
				  		$dist=$dist_id ;
				  	}
				  	$monthly_data_report_details['cmrf_transaction']=$this->mis_reports_model->get_cmrf_trn_details($from,$to,$dist);
				  	//echo "<pre>";print_r($monthly_data_report_details['cmrf_transaction']);echo "</pre>";
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
		  	
			    $type="entitlement_card_getnerated";//by default inside state child rescued will be loaded 
			    $to =date('Y-m-d');//today's date
				$from=date('Y-m-d', strtotime("2014-04-01"));//one month past date
				$dist_show=true;
			     $monthly_data_report_details['monthly_report_details']=$this->mis_reports_model->report_details($from,$to,$dist);
        
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
             $monthly_data_report_details["district_url"]=base_url()."index.php?mis_reports/user_details/";
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
			 	$name="MIS_Report_".$type."_".$from."_".$to;
			 	$this->data['main_content_view'] = $this->load->view('backend/staff/pdf_export.php',$monthly_data_report_details, TRUE);
			 	$this-> _gen_pdf($this->data['main_content_view'],$name);
								echo "BBB" ; die();

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
		    echo json_encode($this->mis_reports_model->get_blocks_list($dist));
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

			$data_outside['outside_state_detils']=$this->mis_reports_model->get_details_outside($from,$to,$type,$area,$param1);
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
		
		 public function user_details($from,$to,$type="",$area="")
		 {
		 	$this->load->model('mis_reports_model');
		 	$user_details_district['child_rescued_district']=$this->mis_reports_model->get_details_rescuedchild_district($from,$to,$type,$area);
		 	$user_details_district["type"]=$type;
		 	$user_details_district["district_url"]=base_url()."index.php?mis_reports/user_details/";
		 	$user_details_district["childrescue_url"]=base_url()."index.php?child_rescued_list/vieworder_rescuechild/";
		 	$this->data['title']="Report Details of Rescued child";
		 	$this->data['main_content_view'] = $this->load->view('backend/staff/district_details_resucedchild',$user_details_district,TRUE);
		 	$this->generate_data('backend/index', $this->data ); 
		 }
		 
		 
		 
		function checkIsAValidDate($myDateString){
		return (bool)strtotime($myDateString);
	}
			
  }
