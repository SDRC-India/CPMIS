<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>


<?php
/*
*This class is for the other laws
*By Godti Satyanarayan
*
*/

class Order_after_production extends MY_Controller
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
            $this->load->model('order_after_production_model');
            //To get the account_role_id
            $role=$this->order_after_production_model->get_role_id($ses_ids);
            foreach($role as $rolep):
              $roles_id=$rolep['account_role_id'];
              $dist_id=$rolep['district_id'];
              $stat_id=$rolep['state_id'];
            endforeach;
            $order_after_production_list=array();
            $order_after_production_list["details_url"]=base_url()."index.php?child_rescued_list/view/";
            $order_after_production_list["edit_url"]=base_url()."index.php?order_after_production/edit/";
            $order_after_production_list['counter']=1;
            $order_after_production_list['role_id']=$roles_id;
            $order_after_production_list['order_after_production_data']=$this->order_after_production_model-> get_order_after_production_data($roles_id,$dist_id);
            $this->data['title']="Order After Production";

            $this->data['main_content_view'] = $this->load->view('backend/staff/order_after_list.php',$order_after_production_list, TRUE);
            $this->generate_data('backend/index', $this->data );

        }   
        public function edit($param1="",$param2="")
        {

          if ($this->session->userdata('staff_login') != 1)
      		{
      			$this->session->set_userdata('last_page' , current_url());
      			redirect(base_url(), 'refresh');
      		}
          $ses_ids=$this->session->userdata('login_user_id');

          $this->load->model('order_after_production_model');
          //To get the account_role_id
          $role=$this->order_after_production_model->get_role_id($ses_ids);
          foreach($role as $rolep):
            $roles_id=$rolep['account_role_id'];
            $dist_id=$rolep['district_id'];
            $state_id=$rolep['state_id'];
          endforeach;
          $role=$this->order_after_production_model->get_role_id($ses_ids);
          foreach($role as $rolep):
            $roles_id=$rolep['account_role_id'];
            $dist_id=$rolep['district_id'];
            $state_id=$rolep['state_id'];
          endforeach;
          $order_after_production_edit=array();
          $order_after_production_edit['role_id']=$roles_id;
          $order_after_production_edit['district_list']=$this->order_after_production_model->get_districts_list($state_id);

          $order_after_production_edit['order_after_edit_data']=$this->order_after_production_model->get_order_after_production_child($param1);



          $this->data['title']="Order After Production (CWC)";
          $this->data['main_content_view'] = $this->load->view('backend/staff/order_after_edit.php',$order_after_production_edit, TRUE);
            $this->generate_data('backend/index', $this->data );
        }
        
        
        function order_after_update($param1 = '', $param2 = '') {
        	//echo "AAAA" ; die();
          $this->load->model('order_after_production_model');
            if ($this->session->userdata('staff_login') != 1)
              {
                $this->session->set_userdata('last_page' , current_url());
                redirect(base_url(), 'refresh');
              }
              
              if($_FILES['file']['image1']){
             unlink('uploads/entitlement_proof/cwc_order/'. $param2 . '.pdf');
             unlink('uploads/entitlement_proof/cwc_order/'. $param2 . '.png');
              unlink('uploads/entitlement_proof/cwc_order/'. $param2 . '.jpeg');
             unlink('uploads/entitlement_proof/cwc_order/'. $param2 . '.jpg');
              }
                  if ($param1 == 'create') {
					  
                      $this->order_after_production_model->create_orderafter($param2);
                       if( $_FILES["image1"]["type"]=='image/jpeg'){
      				move_uploaded_file($_FILES["image1"]["tmp_name"], 'uploads/entitlement_proof/cwc_order/'. $param2 . '.jpg');
      			}
      			if($_FILES["image1"]["type"]=='application/pdf'){
      			move_uploaded_file($_FILES["image1"]["tmp_name"], 'uploads/entitlement_proof/cwc_order/'. $param2 . '.pdf');
      			
      			}
      			if($_FILES["image1"]["type"]=='image/png'){
      			move_uploaded_file($_FILES["image1"]["tmp_name"], 'uploads/entitlement_proof/cwc_order/'. $param2 . '.png');
      			}

              }

          }
		  //download the cwc order 
		   public function download_cwc_order($child_id,$type)
		   {
			 if(!$child_id || !$type)
			 {  
				 header("location:".base_url()."index.php?order_after_production/");
			 }
			 $this->load->model('order_after_production_model');
			 $data['cwc_data']=$this->order_after_production_model->get_cwc_data($child_id,$type);
               
			   if($type=='cci' ||$type=='fit_institution' || $type=='other_place' )
			   {
				  $this->data['main_content_view'] = $this->load->view('backend/staff/cwc_order_cci.php', $data, TRUE); 
				 //$this->load->view('backend/staff/cwc_order_cci.php',$data);
				 $this-> _gen_pdf($this->data['main_content_view']);
			   }
			   else if($type=='Parents' || $type=='fit_person' ){
				   $this->data['main_content_view'] = $this->load->view('backend/staff/cwc_order_parents.php', $data, TRUE);
				   $this-> _gen_pdf($this->data['main_content_view']);
				    //$this->load->view('backend/staff/cwc_order_parents.php',$data); 
			   }
			
              
		  }
		
			//GENRATE PDF FILE
			public function _gen_pdf($html,$paper='A4')
			{
				//this the the PDF filename that user will get to download
				$pdfFilePath = "output_pdf_name.pdf";
				//load mPDF library
				$this->load->library('mpdf/mpdf');
				$mpdf=new mPDF('utf-8',$paper);

				//generate the PDF from the given html
				$mpdf->WriteHTML($html);
				$mpdf->Output();
			}
		//code by dipti to generate the report of childresn sent to cci
		public function production_report_dispaly(){
			   if ($this->session->userdata('staff_login') != 1)
            {
              $this->session->set_userdata('last_page' , current_url());
              redirect(base_url(), 'refresh');
            }
            $ses_ids=$this->session->userdata('login_user_id');
            $this->load->model('order_after_production_model');
            //To get the account_role_id
            $role=$this->order_after_production_model->get_role_id($ses_ids);
            foreach($role as $rolep):
              $roles_id=$rolep['account_role_id'];
              $dist_id=$rolep['district_id'];
              $stat_id=$rolep['state_id'];
            endforeach;
			 $this->load->model('order_after_production_model');	
			 $report_data['report'] = $this->order_after_production_model->production_allreport_data();	
			 $this->data['title']="Report";
            $this->data['main_content_view'] = $this->load->view('backend/staff/production_report',$report_data, TRUE);
            $this->generate_data('backend/index', $this->data );
			
			
		}

		public function production_report(){
			
			//echo "hh";exit;
			$from_date= $this->input->post('from_date');
			$to_date = $this->input->post('to_date');
		    $this->load->model('order_after_production_model');
		    $report_data['report'] = $this->order_after_production_model->production_allreport($from_date,$to_date);
		
			//print_r( $report_data['report']);exit;
			  $this->data['title']="Report";
            $this->data['main_content_view'] = $this->load->view('backend/staff/production_report',$report_data, TRUE);
            $this->generate_data('backend/index', $this->data );
			
			
		}
			
}
