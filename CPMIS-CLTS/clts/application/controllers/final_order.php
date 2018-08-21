<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>


<?php
/*
*This class is to add education details of children
*By Godti Satyanarayan
*
*/

class Final_order extends MY_Controller
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
            $this->load->model('final_order_model');
            //To get the account_role_id
            $role=$this->final_order_model->get_role_id($ses_ids);
            foreach($role as $rolep):
              $roles_id=$rolep['account_role_id'];
              $dist_id=$rolep['district_id'];
              $state_id=$rolep['state_id'];
            endforeach;
            $final_order_list=array();
            $final_order_list["details_url"]=base_url()."index.php?child_rescued_list/view/";
            $final_order_list["edit_url"]=base_url()."index.php?final_order/edit/";
            $final_order_list['counter']=1;
            $final_order_list['role_id']=$roles_id;
            $final_order_list['final_order_data']=$this->final_order_model->get_final_order_list_data($roles_id,$dist_id);

            $this->data['title']="Final Order";
            
            
            $final_order_list["type1"]="Final_Order";
            //code added by pooja for middle man pdf download
            //On 07.08.17
            if($type=="pdf")
            {
            	$name="Final_Order";
            	$this->data['main_content_view'] = $this->load->view('backend/staff/pdf_inner_export.php',$final_order_list, TRUE);
            	$this-> _gen_pdf($this->data['main_content_view'],$name);
            	
            }
          
            $this->data['main_content_view'] = $this->load->view('backend/staff/final_order_list.php',$final_order_list, TRUE);
            $this->generate_data('backend/index', $this->data );

        }
        function edit($param1 = '', $param2 = '') {
            
      		if ($this->session->userdata('staff_login') != 1)
      		{
      			$this->session->set_userdata('last_page' , current_url());
      			redirect(base_url(), 'refresh');
      		}
          $ses_ids=$this->session->userdata('login_user_id');
          $this->load->model('final_order_model');
          //To get the account_role_id
          $role=$this->final_order_model->get_role_id($ses_ids);
          foreach($role as $rolep):
            $roles_id=$rolep['account_role_id'];
            $dist_id=$rolep['district_id'];
            $state_id=$rolep['state_id'];
          endforeach;
          $final_order=array();
          
          $final_order['final_order_data']=$this->final_order_model->get_final_order_data($param1);
          $final_order['order_after_edit_data']=$this->final_order_model->get_order_after_production_child($param1);
          $this->data['title']="Final Order";

          $this->data['main_content_view'] = $this->load->view('backend/staff/final_order_edit.php',$final_order, TRUE);
          $this->generate_data('backend/index', $this->data );

        }

        function final_order_update($param1 = '', $param2 = '') {

      	if ($this->session->userdata('staff_login') != 1)
      		{
      			$this->session->set_userdata('last_page' , current_url());
      			redirect(base_url(), 'refresh');
      		}
          $this->load->model('final_order_model');
              if ($param1 == 'create') {
                  $this->final_order_model->create_finalorder($param2);
      		}


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
