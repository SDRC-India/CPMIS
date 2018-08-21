<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>


<?php
/*
*This class is to add CMRF Transaction details By LC Operator 
*By Godti Satyanarayan
*
*/

class Cmrf_trn_details_ls extends MY_Controller
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
              
          }
	      public function index($param1="")
	        {
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
	            $dist_id=$rolep['district_id'];
	            $stat_id=$rolep['state_id'];
	            endforeach;
	            $this->load->model('cmrf_transaction_model');
				if($roles_id==21){
				$cmrf_data['cmrf_transaction']=$this->cmrf_transaction_model->get_cmrf_trn_guest();
				}else{
	            $cmrf_data['cmrf_transaction']=$this->cmrf_transaction_model->get_cmrf_trn_ls($dist_id);
				}
	            $this->data['title']="CMRF Transaction Details";
	           if($param1=="pdf"){
	            	$name="CMRF_Transaction_Details";
	            	$this->data['main_content_view'] = $this->load->view('backend/staff/pdf_export_cmrf.php', $cmrf_data, TRUE);
	            	$this-> _gen_pdf($this->data['main_content_view'],$name);
	            }
	            else{
	            $this->data['main_content_view'] = $this->load->view('backend/staff/cmrf_transaction_list_ls',$cmrf_data, TRUE);
	            
	            $this->generate_data('backend/index', $this->data );
	            }
	
	        }
	        public function Cmrf_sts($param1="")
	        {
	        	if ($this->session->userdata('staff_login') != 1)
	        	{
	        		$this->session->set_userdata('last_page' , current_url());
	        		redirect(base_url(), 'refresh');
	        	}
	        	
	        	$this->load->model('cmrf_transaction_model');
	        	
	        	if($this->cmrf_transaction_model->Cmrf_sts($param1)){
	        		
	        		redirect('/cmrf_trn_details_ls', 'refresh');
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
