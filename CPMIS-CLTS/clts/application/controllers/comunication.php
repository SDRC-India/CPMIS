<?php
if (!defined('BASEPATH')) exit('No direct script access allowed'); 
class comunication extends MY_Controller
{
  function __construct()
  {

    // parent::__construct();

    parent::__construct();
    /*cache control*/
    $this->output->set_header('Last-Modified: ' . gmdate("D, d M Y H:i:s") . ' GMT');
    $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
    $this->output->set_header('Pragma: no-cache');
    $this->load->library('session');
    $this->load->database();
    $this->load->model('comuncation_model');

    // loading the data

  }

  public function index($type)
  {  
    if ($this->session->userdata('staff_login') != 1) {
      $this->session->set_userdata('last_page', current_url());
      redirect(base_url() , 'refresh');
    }

    $ses_ids = $this->session->userdata('login_user_id');
    $this->load->model('comuncation_model');

    // To get the account_role_id

    $role = $this->comuncation_model->get_role_id($ses_ids);
    
    foreach($role as $rolep):
      $roles_id = $rolep['account_role_id'];
      $dist_id = $rolep['district_id'];
      $stat_id = $rolep['state_id'];
      $role_staff_name = $rolep['name'];
      $role_staff_id= $rolep['staff_id'];
     endforeach;
   //MODIFIED 27-02-2017
   $report_data['roles']  = $roles_id;
   /*$staff_com = $this->comuncation_model->get_staff($role_staff_name);
   $staff_id_com = $staff_com->staff_id;*/
    //print_r($role_staff_name);  
   if($roles_id == 10 || $roles_id==21){
   	$this->data['title'] = "LC Communication";
   	$report_data['communication'] = $this->comuncation_model->coumication_data_LC_all();   
   } 
   else if($roles_id==12){
   	$this->data['title'] = "JLC Communication";
   	$report_data['communication'] = $this->comuncation_model->coumication_data_JLC_all();
   } 
   else if($roles_id==13){
   	$this->data['title'] = "DLC Notification";
   	$report_data['communication'] = $this->comuncation_model->coumication_data_default($role_staff_id,"DLC");   	
   }else if($roles_id==20){
   	$this->data['title'] = "ALC Notification";
   	$report_data['communication'] = $this->comuncation_model->coumication_data_default($role_staff_id,"ALC");
   	
   }
   else if($roles_id==2){  	
   	$this->data['title'] = "ALC Notification";
   	$report_data['communication'] = $this->comuncation_model->coumication_data_alc_default($role_staff_id,"ALC");
   }else{
   	
   	$this->data['title'] = "ALC Notification";
   	$report_data['communication'] = $this->comuncation_model->coumication_data_default($role_staff_id,"ALC");
   }
   
   $report_data['type1']="Communication";
   if($type=="pdf")
   {
   	$name="Communication";
   	$this->data['main_content_view'] = $this->load->view('backend/staff/pdf_inner_export.php',$report_data, TRUE);
   	$this-> _gen_pdf($this->data['main_content_view'],$name);
   	
   }
  
    $this->data['main_content_view'] = $this->load->view('backend/staff/comunication_list', $report_data, TRUE);
    $this->generate_data('backend/index', $this->data);
  }
  
  public function LC($type1){
  	
  	if ($this->session->userdata('staff_login') != 1) {
  		$this->session->set_userdata('last_page', current_url());
  		redirect(base_url() , 'refresh');
  	}
  	
  	$ses_ids = $this->session->userdata('login_user_id');
  	$this->load->model('comuncation_model');
  	
  	// To get the account_role_id
  	
  	$role = $this->comuncation_model->get_role_id($ses_ids);
  	
  	foreach($role as $rolep):
  	$roles_id = $rolep['account_role_id'];
  	$dist_id = $rolep['district_id'];
  	$stat_id = $rolep['state_id'];
  	$role_staff_name = $rolep['name'];
  	$role_staff_id= $rolep['staff_id'];
  	endforeach;
  	
  	
  	//MODIFIED 27-02-2017
  	$report_data['roles']  = $roles_id;
  	/*$staff_com = $this->comuncation_model->get_staff($role_staff_name);
  	 $staff_id_com = $staff_com->staff_id;*/
  	//print_r($role_staff_name);
  	//MODIFIED by poojashre for showing leo communication
  	if($roles_id == 2 || $roles_id == 5){
  		$type="LC" ;
  		$report_data['communication'] = $this->comuncation_model->coumication_data_LC($role_staff_id,$type);
  		$this->comuncation_model->LC_status($role_staff_id,$type) ;
  	}
  	
  	//DIPTI//
  	$report_data['typee']=$type;
  	$report_data['type1']="Communication";
  	if($type1=="pdf")
  	{
  		$name="Communication";
  		$this->data['main_content_view'] = $this->load->view('backend/staff/pdf_inner_export.php',$report_data, TRUE);
  		$this-> _gen_pdf($this->data['main_content_view'],$name);
  		
  	}
  	
  	$this->data['title'] = "LC Notification";
  	$this->data['main_content_view'] = $this->load->view('backend/staff/comunication_list', $report_data, TRUE);
  	$this->generate_data('backend/index', $this->data);
  	
  }
  
  public function JLCmesg($type1){
  	
  	if ($this->session->userdata('staff_login') != 1) {
  		$this->session->set_userdata('last_page', current_url());
  		redirect(base_url() , 'refresh');
  	}
  	
  	$ses_ids = $this->session->userdata('login_user_id');
  	$this->load->model('comuncation_model');
  	
  	// To get the account_role_id
  	
  	$role = $this->comuncation_model->get_role_id($ses_ids);
  	
  	foreach($role as $rolep):
  	$roles_id = $rolep['account_role_id'];
  	$dist_id = $rolep['district_id'];
  	$stat_id = $rolep['state_id'];
  	$role_staff_name = $rolep['name'];
  	$role_staff_id= $rolep['staff_id'];
  	endforeach;
  	
  	
  	//MODIFIED 27-02-2017
  	$report_data['roles']  = $roles_id;
  	/*$staff_com = $this->comuncation_model->get_staff($role_staff_name);
  	 $staff_id_com = $staff_com->staff_id;*/
  	//print_r($role_staff_name);
  	//MODIFIED by poojashre for showing leo communication
  	if($roles_id == 2 || $roles_id == 5){
  		$type="JLC" ;
  		$report_data['communication'] = $this->comuncation_model->coumication_data_JLC($role_staff_id,$type);
  		$this->comuncation_model->LC_status($role_staff_id,$type) ;
  		
  	}
  	
  	//DIPTI//
  	$report_data['typee']=$type;
  	$report_data['type1']="Communication";
  	if($type1=="pdf")
  	{
  		$name="Communication";
  		$this->data['main_content_view'] = $this->load->view('backend/staff/pdf_inner_export.php',$report_data, TRUE);
  		$this-> _gen_pdf($this->data['main_content_view'],$name);
  		
  	}
  	
  	$this->data['title'] = "JLC Notification";
  	$this->data['main_content_view'] = $this->load->view('backend/staff/comunication_list', $report_data, TRUE);
  	$this->generate_data('backend/index', $this->data);
  	
  }
  
  public function DLCmesg($type1){
  	if ($this->session->userdata('staff_login') != 1) {
  		$this->session->set_userdata('last_page', current_url());
  		redirect(base_url() , 'refresh');
  	}
  	
  	$ses_ids = $this->session->userdata('login_user_id');
  	$this->load->model('comuncation_model');
  	
  	// To get the account_role_id
  	
  	$role = $this->comuncation_model->get_role_id($ses_ids);
  	
  	foreach($role as $rolep):
  	$roles_id = $rolep['account_role_id'];
  	$dist_id = $rolep['district_id'];
  	$stat_id = $rolep['state_id'];
  	$role_staff_name = $rolep['name'];
  	$role_staff_id= $rolep['staff_id'];
  	endforeach;
  	
  	
  	//MODIFIED 27-02-2017
  	$report_data['roles']  = $roles_id;
  	/*$staff_com = $this->comuncation_model->get_staff($role_staff_name);
  	 $staff_id_com = $staff_com->staff_id;*/
  	//print_r($role_staff_name);
  	//MODIFIED by poojashre for showing leo communication
  	if($roles_id == 2 || $roles_id == 5){
  		$type="DLC" ;
  		$report_data['communication'] = $this->comuncation_model->coumication_data_leo($role_staff_id,$type,$type3);
  		$this->comuncation_model->DLC_status($role_staff_id,$type,$type3) ;
  		
  		
  	}
  	
  	//DIPTI//
  	$report_data['typee']=$type;
  	$report_data['type1']="Communication";
  	if($type1=="pdf")
  	{
  		$name="Communication";
  		$this->data['main_content_view'] = $this->load->view('backend/staff/pdf_inner_export.php',$report_data, TRUE);
  		$this-> _gen_pdf($this->data['main_content_view'],$name);
  		
  	}
  	
  	
  	
  	
  	
  	$this->data['title'] = "DLC Notification";
  	$this->data['main_content_view'] = $this->load->view('backend/staff/comunication_list', $report_data, TRUE);
  	$this->generate_data('backend/index', $this->data);
  	
  }
 
  public function ALCmesg($type1){
  	if ($this->session->userdata('staff_login') != 1) {
  		$this->session->set_userdata('last_page', current_url());
  		redirect(base_url() , 'refresh');
  	}
  	
  	$ses_ids = $this->session->userdata('login_user_id');
  	$this->load->model('comuncation_model');
  	
  	// To get the account_role_id
  	
  	$role = $this->comuncation_model->get_role_id($ses_ids);
  	
  	foreach($role as $rolep):
  	$roles_id = $rolep['account_role_id'];
  	$dist_id = $rolep['district_id'];
  	$stat_id = $rolep['state_id'];
  	$role_staff_name = $rolep['name'];
  	$role_staff_id= $rolep['staff_id'];
  	endforeach;
  	
  	
  	//MODIFIED 27-02-2017
  	$report_data['roles']  = $roles_id;
  	/*$staff_com = $this->comuncation_model->get_staff($role_staff_name);
  	 $staff_id_com = $staff_com->staff_id;*/
  	//print_r($role_staff_name);
  	//MODIFIED by poojashre for showing leo communication
  	if($roles_id == 2 || $roles_id == 5){
  		$type="ALC" ;
  		$report_data['communication'] = $this->comuncation_model->coumication_data_leo($role_staff_id,$type,$type3);
  		$this->comuncation_model->ALC_status($role_staff_id,$type,$type3) ;
  		
  		
  	}
  	
  	//DIPTI//
  	$report_data['typee']=$type;
  	$report_data['type1']="Communication";
  	if($type1=="pdf")
  	{
  		$name="Communication";
  		$this->data['main_content_view'] = $this->load->view('backend/staff/pdf_inner_export.php',$report_data, TRUE);
  		$this-> _gen_pdf($this->data['main_content_view'],$name);
  		
  	}
  	
  	
  	
  	
  	$this->data['title'] = "ALC Notification";
  	$this->data['main_content_view'] = $this->load->view('backend/staff/comunication_list', $report_data, TRUE);
  	$this->generate_data('backend/index', $this->data);
  	
  }
  
  
 public function save($id = ""){
	 
    $value  = $this->input->post('department');
    $id_role  = $this->input->post('role_model');
    $get_id_staff = $this->comuncation_model->get_staff_id($value,$id_role);
    $value_id = $get_id_staff->staff_id;    
	 if($id){
		 
		 $result=$this->comuncation_model->update_tbl($id,$value_id);
			if($result)
		{
		 return true;  
		}
        	
		 
	 }
    else{
		$result=$this->comuncation_model->notification($value_id);
		if($result)
		{
			
			return true;
		}
	
	}
        
  }
  
 
  //UPDATE
  
  /*
   public function getCountMsgdd()
    {
		//echo "hhh";
       $data = $this->comuncation_model->calc_view_notification($report_data['role_name']);
	   echo $data;
    }
  */

  
 public function comm_view($id = ""){
 //$id = $this->uri->segment('3');
 	$ses_ids = $this->session->userdata('login_user_id');
 	$this->load->model('comuncation_model');
 	$role = $this->comuncation_model->get_role_id($ses_ids);
 	
 	foreach($role as $rolep):
 	$roles_id = $rolep['account_role_id'];
 	$dist_id = $rolep['district_id'];
 	$stat_id = $rolep['state_id'];
 	endforeach;
    $sess = $this->session->userdata;
    $report_data['user_id'] = $sess['login_user_id'];
    $report_data['role_name'] = $sess['name'];
    $report_data['role_id'] = $roles_id ;
    $report_data['communicationrr'] = $this->comuncation_model->edit_data($id);
	//$report_data['countData'] = $this->comuncation_model->calc_noti_msg($report_data['role_name']);
	
   $report_data['to_dept_def']  = $this->comuncation_model->fet_id($id);
   $report_data['to_dept_list'] = $this->comuncation_model->get_selected($report_data['communicationrr'][0]['role_name']);
   $report_data['child']  = $this->comuncation_model->get_child_id_by($report_data['communicationrr'][0]['to_dept']);
   if($roles_id==20){
   	$this->data['title'] = "ALC Actions";   	
   }
   else if($roles_id==13){
   	$this->data['title'] = "DLC Actions";
   }
   else if($roles_id==10){
   $this->data['title'] = "LC Actions";
   }
   else if($roles_id==12){
   	$this->data['title'] = "JLC Actions";
   }
   $this->data['main_content_view'] = $this->load->view('backend/staff/comuncation_view', $report_data, TRUE);
   $this->generate_data('backend/index', $this->data);
    }
  
   /* For view details only */
    public function comm_viewdetails($id = ""){
    	//$id = $this->uri->segment('3');
    	$ses_ids = $this->session->userdata('login_user_id');
    	$this->load->model('comuncation_model');
    	$role = $this->comuncation_model->get_role_id($ses_ids);
    	
    	foreach($role as $rolep):
    	$roles_id = $rolep['account_role_id'];
    	$dist_id = $rolep['district_id'];
    	$stat_id = $rolep['state_id'];
    	endforeach;
    	$sess = $this->session->userdata;
    	$report_data['user_id'] = $sess['login_user_id'];
    	$report_data['role_name'] = $sess['name'];
    	$report_data['role_id'] = $roles_id ;
    	$report_data['communicationrr'] = $this->comuncation_model->edit_data($id);
    	//$report_data['countData'] = $this->comuncation_model->calc_noti_msg($report_data['role_name']);
    	
    	$report_data['to_dept_def']  = $this->comuncation_model->fet_id($id);
    	$report_data['to_dept_list'] = $this->comuncation_model->get_selected($report_data['communicationrr'][0]['role_name']);
    	$report_data['child']  = $this->comuncation_model->get_child_id_by($report_data['communicationrr'][0]['to_dept']);
    	
    	if($roles_id==20){
    		$this->data['title'] = "ALC Actions";
    	}
    	else if($roles_id==13){
    		$this->data['title'] = "DLC Actions";
    	}
    	else if($roles_id==10){
    		$this->data['title'] = "LC Message Details";
    	}
    	else if($roles_id==12){
    		$this->data['title'] = "JLC Actions";
    	}
    	
    	
    	$this->data['main_content_view'] = $this->load->view('backend/staff/communication_viewdetails', $report_data, TRUE);
    	$this->generate_data('backend/index', $this->data);
    }
    
    /*Reply by LS */
    public function comm_reply($id = "",$update){
    	//$id = $this->uri->segment('3');
    	$ses_ids = $this->session->userdata('login_user_id');
    	$this->load->model('comuncation_model');
    	$role = $this->comuncation_model->get_role_id($ses_ids);
    	
    	foreach($role as $rolep):
    	$roles_id = $rolep['account_role_id'];
    	$dist_id = $rolep['district_id'];
    	$stat_id = $rolep['state_id'];
    	endforeach;
    	$sess = $this->session->userdata;
    	$report_data['user_id'] = $sess['login_user_id'];
    	$report_data['role_name'] = $sess['name'];
    	$report_data['role_id'] = $roles_id ;
    	$this->data['title'] = "Communication Details";
    	$report_data['communicationrr'] = $this->comuncation_model->edit_data($id);
    	//$report_data['countData'] = $this->comuncation_model->calc_noti_msg($report_data['role_name']);
    	
    	$report_data['to_dept_def']  = $this->comuncation_model->fet_id($id);
    	$report_data['to_dept_list'] = $this->comuncation_model->get_selected($report_data['communicationrr'][0]['role_name']);
    	$report_data['child']  = $this->comuncation_model->get_child_id_by($report_data['communicationrr'][0]['to_dept']);
    	
     if($roles_id==2){
    		$this->data['title'] = "Reply";
    	}
    	    	
    	if($update){
    		
    		$result=$this->comuncation_model->update_replymessge($id);
    		$report_data['communicationrr'] = $this->comuncation_model->edit_data($id);
    		
    	}
    	 	
    	$this->data['main_content_view'] = $this->load->view('backend/staff/communication_reply', $report_data, TRUE);
    	$this->generate_data('backend/index', $this->data);
    }
    
    
  public function view($id){
    $ses_ids = $this->session->userdata('login_user_id');
    $this->load->model('comuncation_model');
   $role = $this->comuncation_model->get_role_id($ses_ids);
	
    foreach($role as $rolep):
      $roles_id = $rolep['account_role_id'];
      $dist_id = $rolep['district_id'];
      $stat_id = $rolep['state_id'];
    endforeach;
	$report_details = $this->comuncation_model->get_list_id($id);
	$report_data['role_name'] = $this->session->userdata['name'];
	$roleMessageCount = $this->comuncation_model->getmssagecount($report_data['role_name']);
	$report_data['role_count'] = $roleMessageCount->cnt;
	$report_data['area_id'] =  $report_details->area_id;
	    $this->data['title'] = "LC Actions";
        $this->data['main_content_view'] = $this->load->view('backend/staff/comuncation_view', $report_data, TRUE);
        $this->generate_data('backend/index', $this->data);
	  
  }
  
  public function order_ls($roll_id)
    {
    	$ses_ids = $this->session->userdata('login_user_id');
      $value_com = $this->input->post('valueSelected');
      $role=$this->comuncation_model->get_role_id($ses_ids);
	  
            foreach($role as $rolep):
              $roles_id=$rolep['account_role_id'];
              $dist_id=$rolep['district_id'];
              $stat_id=$rolep['state_id'];
            endforeach;
            if($roll_id==13 || $roll_id==20){
            	$data = $this->comuncation_model->get_dist_dlc($dist_id);            	          	
            }else{
      $data = $this->comuncation_model->get_login_id($value_com);
            }
      $json_data = '<select class="form-control" name="department">';//area_id
      $json_data .= '<option value="">-- Select --</option>';
      $cnt = 0;
      foreach ($data as $value) {
        $json_data .= '<option value="'.$value['area_id'].'">'.$value['area_name'].'</option>';
		
        $cnt ++;
      }
      $json_data .= '</select>';
      echo $json_data;
   
    }
	
	public function get_child_id(){
		
		$get_id = $this->input->post('department');
		 $data = $this->comuncation_model->get_child_id_by($get_id);
		 //print_r($data);exit;
      $json_data = '<select class="form-control" name="child_name">';//area_id
      $json_data .= '<option value="">-- Select --</option>';
      $cnt = 0;
      foreach ($data as $value) {
        $json_data .= '<option value="'.$value['child_id'].'">'.$value['child_id'].'-'.$value['child_name'].'</option>';
		
        $cnt ++;
      }
      $json_data .= '</select>';
      echo $json_data;
   
		
	}
	
	//pdf function added on 17-08-17
	
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