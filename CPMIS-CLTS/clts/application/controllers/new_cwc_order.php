<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>


<?php
/*
*This class is for the new cwc member add upto only 5 members
*By Poojashree Rout

*/

class New_cwc_order extends MY_Controller
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
    
          public function index($type)
          {
          	
          	if ($this->session->userdata('staff_login') != 1)
          	{
          		$this->session->set_userdata('last_page' , current_url());
          		redirect(base_url(), 'refresh');
          	}
          	$ses_ids=$this->session->userdata('login_user_id');
          	$role=$this->get_role_id($ses_ids);
          	//print_r($role[0]['staff_id']);
          	foreach($role as $rolep):
          	$roles_id=$rolep['account_role_id'];
          	$dist_id=$rolep['district_id'];
          	endforeach;
          	$this->load->model('model_new_cwc');
          	$middle_list['data_list']=$this->model_new_cwc->get_cwc_list_k($ses_ids);
          	$middle_list['editmiddle_url']=$this->model_new_cwc->get_cwc_list_new_k($ses_ids);
          	$middle_list["editmiddle_url"]=base_url()."index.php?new_cwc_order/cwc_member_view/";
          	
          	$this->data['title']="List of Other CWC Member";
          	$this->data['default']="uploads/user.jpg";
          	$middle_list["type1"]="List_of_other_cwc_member";
          	//code added by pooja for middle man pdf download
          	//On 07.08.17
          	if($type=="pdf")
          	{
          		$name="List_of_other_cwc_member";
          		$this->data['main_content_view'] = $this->load->view('backend/staff/pdf_inner_export.php',$middle_list, TRUE);
          		$this-> _gen_pdf($this->data['main_content_view'],$name);
          		
          	}
          	$this->data['main_content_view'] = $this->load->view('backend/staff/new_cwc_other.php',$middle_list, TRUE);
          	$this->generate_data('backend/index', $this->data );
          }
	 public function create()		 
	 {
		if ($this->session->userdata('staff_login') != 1)
      		{
      			$this->session->set_userdata('last_page' , current_url());
      			redirect(base_url(), 'refresh');
      		}
			
					$this->load->model('model_new_cwc');
		           			$url=base_url().'index.php?modal/popup/new_cwc_add/';

					 $middle_list['add_button']='<a href="javascript:;" onclick="showAjaxModal(\''.$url.'\');"
                class="btn btn-primary pull-right">
                    <i class="entypo-user-add"></i>
                  Add New Cwc Member
                </a>';
					 $middle_list['data_list']=$this->model_new_cwc->create_cwcmember(); 
					 $ses_ids=$this->session->userdata('login_user_id');
					 $middle_list['data_list']=$this->model_new_cwc->get_cwc_list($ses_ids);
					 $middle_list["editmiddle_url"]=base_url()."index.php?new_cwc_order/cwc_member_view/";
					 
					 
					 ///$middle_list['data_list']=$this->model_new_cwc->get_cwc_list();  
					 //$this->data['main_content_view'] = $this->load->view('backend/staff/new_cwc.php',$middle_list, TRUE);
					$this->data['title']="List of CWC Member";
					  $this->data['main_content_view'] = $this->load->view('backend/staff/new_cwc_view.php',$middle_list, TRUE);
					  $this->generate_data('backend/index', $this->data );
					  
			  

		 }
		 
		 /* view cwc member */
		 
		 public function cwc_member_view($param1="")
		 {
		 	$this->load->model('model_new_cwc');
		 	$ses_ids=$this->session->userdata('login_user_id');		 	
		 	$this->data['title']="View CWC Member";
		 	$cwc_data['edit_cwc']	=	$this->model_new_cwc->get_cwc_edit_member($param1);
		 	$cwc_data['default']="uploads/user.jpg";
		 	$cwc_data['upload_path']="./uploads/cwc/";	
		 	
		 	$this->data['main_content_view'] = $this->load->view('backend/staff/new_cwc_member_view.php', $cwc_data, TRUE);
		 	$this->generate_data('backend/index', $this->data );
		 } 
		 
		
		 
		 
		 
		 public function new_cwc_add($param1="")
		 {
		 	$this->load->model('model_new_cwc');
		 	$ses_ids=$this->session->userdata('login_user_id');
		 	$this->data['title']="Add CWC Member";
		 	$cwc_data['default']="uploads/user.jpg";
		 	$cwc_data['upload_path']="./uploads/cwc/";
		 	
		 	$this->data['main_content_view'] = $this->load->view('backend/staff/new_cwc_add.php', $cwc_data, TRUE);
		 	$this->generate_data('backend/index', $this->data );
		 }
		 
		 
		 public function edit($param2,$session_id)		 
		 {	
			$this->load->model('model_new_cwc');
			$cwc_data['data_list']=$this->model_new_cwc->update_cwc($param2,$session_id);  
			$cwc_data['data_list']=$this->model_new_cwc->get_cwc_list();
			
			//$this->data['main_content_view'] = $this->load->view('backend/staff/middle_men.php',$middle_list, TRUE);
			$this->data['title']="List of Own CWC";
			$ses_ids=$this->session->userdata('login_user_id');
			$cwc_data["editmiddle_url"]=base_url()."index.php?new_cwc_order/cwc_member_view/";
			$cwc_data['add_button']='<a href="javascript:;" onclick="showAjaxModal(\''.$url.'\');"
                class="btn btn-info pull-right">
                    <i class="entypo-user-add"></i>
                  Add New CWC Member
                </a>';
			$cwc_data['data_list']=$this->model_new_cwc->get_cwc_list($ses_ids);			
			$this->data['main_content_view'] = $this->load->view('backend/staff/new_cwc_view.php',$cwc_data, TRUE);
			$this->generate_data('backend/index', $this->data );
		 }
		 
		 function reload_cwc_list()
		 {
			  $this->load->model("model_new_cwc");    
			  $midle_list['data_list']=$this->model_new_cwc->get_cwc_list();
			  //print_r($staff_list['data_list']);
			  $midle_list['page_name'] = 'staff';
			  $midle_list['page_title'] = get_phrase('manage_staff');
			  $this->data['title']="Manage Staff ";
						  $midle_list["editmiddle_url"]=base_url()."index.php?modal/popup/new_cew_member_edit/";

			$this->load->view('backend/staff/new_cwc.php',$midle_list);
			}
			//code added by pooja for middle man pdf download
			//On 07.08.17
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
			
			function get_role_id($role_id)
			{
				//echo $role_id;
				$role = $this->db->get_where('staff',array('staff_id'=>$role_id))->result_array();
				return $role;
			}
			
	
}
