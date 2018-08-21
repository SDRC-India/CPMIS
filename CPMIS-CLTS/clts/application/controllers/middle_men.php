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

class Middle_men extends MY_Controller
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
     /* public function index()
        {
          if ($this->session->userdata('staff_login') != 1)
          {
            $this->session->set_userdata('last_page' , current_url());
            redirect(base_url(), 'refresh');
          }
		   $ses_ids=$this->session->userdata('login_user_id');
		  
		  // echo $roles_id."AAAA" ;
          $this->load->model('model_middle_men');
          $middle_list['data_list']=$this->model_middle_men->get_middle_list($ses_ids); 
						$middle_list['editmiddle_url']=$this->model_middle_men->get_middlemen_data();
						$middle_list['default']="uploads/user.jpg";
						
						
		  $middle_list["editmiddle_url"]=base_url()."index.php?modal/popup/middle_men_edit/";

          $middle_list["details_url"]=base_url()."index.php?middle_men/view/";		  
			$url=base_url().'index.php?modal/popup/middle_men_add/';
            $middle_list['add_button']='<a href="javascript:;" onclick="showAjaxModal(\''.$url.'\');"
                class="btn btn-info pull-right">
                    <i class="entypo-user-add"></i>
                  Add Middlemen
                </a>';
           $this->data['title']="List of Middlemen ";
          $this->data['main_content_view'] = $this->load->view('backend/staff/middle_men.php',$middle_list, TRUE);
          $this->generate_data('backend/index', $this->data );
        }*/
          public function index($type)
          {
          	//echo $type;
          	//$from="hhh";
          	//$to="ccc";
          	if ($this->session->userdata('staff_login') != 1)
          	{
          		$this->session->set_userdata('last_page' , current_url());
          		redirect(base_url(), 'refresh');
          	}
          	$ses_ids=$this->session->userdata('login_user_id');
          	//code added by pooja for middle man pdf downlaod
          	$this->load->model('ngo_registered_model');
          	$role=$this->ngo_registered_model->get_role_id($ses_ids);
          	foreach($role as $rolep):
          	$middle_list['roles_id']=$rolep['account_role_id'];
          	$dist_id=$rolep['district_id'];
          	$stat_id=$rolep['state_id'];
          	endforeach;
          	$role_id=$middle_list['roles_id'] ;
          	// echo $roles_id."AAAA" ;
          	$this->load->model('model_middle_men');
          	$middle_list['data_list']=$this->model_middle_men->get_middle_list($ses_ids, $role_id);
          	$middle_list['editmiddle_url']=$this->model_middle_men->get_middlemen_data();
          	$middle_list["editmiddle_url"]=base_url()."index.php?modal/popup/middle_men_edit/";
          	$middle_list["details_url"]=base_url()."index.php?middle_men/view/";
          	$url=base_url().'index.php?modal/popup/middle_men_add/';
          	$middle_list['add_button']='<a href="javascript:;" onclick="showAjaxModal(\''.$url.'\');"
                class="btn btn-info pull-right">
                    <i class="entypo-user-add"></i>
                  Add middle men
                </a>';
          	$this->data['title']="List of Middle men ";
          	$this->data['default']="uploads/user.jpg";
          	
          	
          	$middle_list["type1"]="Middle_Man_List";
          	//code added by pooja for middle man pdf download
          	//On 07.08.17
          	if($type=="pdf")
          	{
          		$name="List_of_Middle_men";
          		$this->data['main_content_view'] = $this->load->view('backend/staff/pdf_inner_export.php',$middle_list, TRUE);
          		$this-> _gen_pdf($this->data['main_content_view'],$name);
          		
          	}
          	$this->data['main_content_view'] = $this->load->view('backend/staff/middle_men.php',$middle_list, TRUE);
          	$this->generate_data('backend/index', $this->data );
          }
	 public function create()		 
	 {
		if ($this->session->userdata('staff_login') != 1)
      		{
      			$this->session->set_userdata('last_page' , current_url());
      			redirect(base_url(), 'refresh');
      		}
			
					$this->load->model('model_middle_men');
		           			$url=base_url().'index.php?modal/popup/middle_men_add/';

					 $middle_list['add_button']='<a href="javascript:;" onclick="showAjaxModal(\''.$url.'\');"
                class="btn btn-primary pull-right">
                    <i class="entypo-user-add"></i>
                  Add middle men
                </a>';
						$middle_list['data_list']=$this->model_middle_men->create_middlemen(); 
				    $middle_list['data_list']=$this->model_middle_men->get_middle_list();  
				    //$this->data['main_content_view'] = $this->load->view('backend/staff/middle_men.php',$middle_list, TRUE);
					$this->data['title']="List of Middlemen";
					  $this->data['main_content_view'] = $this->load->view('backend/staff/middle_men.php',$middle_list, TRUE);
					  $this->generate_data('backend/index', $this->data );

		 }
		 
		 public function edit($param2,$session_id)		 
		 {	
			$this->load->model('model_middle_men');
			$middle_list['data_list']=$this->model_middle_men->update_middlemen($param2,$session_id);  
			$middle_list['data_list']=$this->model_middle_men->get_middle_list();
			
			//$this->data['main_content_view'] = $this->load->view('backend/staff/middle_men.php',$middle_list, TRUE);
			$this->data['title']="List of Middlemen";
			$this->data['main_content_view'] = $this->load->view('backend/staff/middle_men.php',$middle_list, TRUE);
			$this->generate_data('backend/index', $this->data );
		 }
		 
		 function reload_middle_list()
		 {
			  $this->load->model("model_middle_men");    
			  $midle_list['data_list']=$this->model_middle_men->get_middle_list();
			  //print_r($staff_list['data_list']);
			  $midle_list['page_name'] = 'staff';
			  $midle_list['page_title'] = get_phrase('manage_staff');
			  $this->data['title']="Manage Staff ";
					//	  $midle_list["editmiddle_url"]=base_url()."index.php?modal/popup/middle_men_edit/";

			$this->load->view('backend/staff/middle_men.php',$midle_list);
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
			
			
	
}
