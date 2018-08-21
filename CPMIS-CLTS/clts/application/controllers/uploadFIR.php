<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>


<?php
/*
*This class is to add loabour resorce department data of children
*By Godti Satyanarayan
*
*/

class UploadFIR extends MY_Controller
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
            $this->load->model('uploadfir_model');
            //To get the account_role_id
            $role=$this->uploadfir_model->get_role_id($ses_ids);
            foreach($role as $rolep):
              $roles_id=$rolep['account_role_id'];
              $dist_id=$rolep['district_id'];
              $state_id=$rolep['state_id'];
            endforeach;
             $uploadfir=array();
            $uploadfir["details_url"]=base_url()."index.php?child_rescued_list/view/";
            $uploadfir["edit_url"]=base_url()."index.php?uploadFIR/edit/";
            $uploadfir['counter']=1;
            $uploadfir['role_id']=$roles_id;
            $uploadfir['uploaddata']=$this->uploadfir_model->uploadfir_list_data($roles_id,$dist_id);
			//print_r($uploadfir['uploaddata'])exit;
           $this->data['title']="Upload FIR";

            $this->data['main_content_view'] = $this->load->view('backend/staff/uploadFIRlist.php',$uploadfir, TRUE);
            $this->generate_data('backend/index', $this->data );

        }
		
	 public function edit($param1="",$param2="")
        {
        //echo $param1;exit;
          if ($this->session->userdata('staff_login') != 1)
      		{
      			$this->session->set_userdata('last_page' , current_url());
      			redirect(base_url(), 'refresh');
      		}
          $ses_ids=$this->session->userdata('login_user_id');
          $this->load->model('Uploadfir_model');
          //To get the account_role_id
          $role=$this->Uploadfir_model->get_role_id($ses_ids);
          foreach($role as $rolep):
            $roles_id=$rolep['account_role_id'];
            $dist_id=$rolep['district_id'];
            $stat_id=$rolep['state_id'];
          endforeach;
          $other_laws_list_edit=array();
          $other_laws_list_edit['role_id']=$roles_id;
          $other_laws_list_edit['uploadFir_data']=$this->Uploadfir_model->get_other_laws_child($param1);
          // data to tabs
          $other_laws_list_tab=array();
          $other_laws_list_tab['lab_tab_name']="Compliance by LRD";
          $other_laws_list_tab['lab_tab_link']=base_url()."index.php?labour_act/edit/".$other_laws_list_edit['uploadFir_data'][0]['child_id'];
          $other_laws_list_tab['lab_tab_active']=false;
          $other_laws_list_tab['wag_tab_name']="Compliance by LRD on Minimum Wages Act";
          $other_laws_list_tab['wag_tab_link']=base_url()."index.php?wages_act/edit/".$other_laws_list_edit['uploadFir_data'][0]['child_id'];
          $other_laws_list_tab['wag_tab_active']=false;
          $other_laws_list_tab['ipc_tab_name']="IPC Act Detail";
          $other_laws_list_tab['ipc_tab_link']=base_url()."index.php?ipc_act/edit/".$other_laws_list_edit['uploadFir_data'][0]['child_id'];
          $other_laws_list_tab['ipc_tab_active']=false;
          $other_laws_list_tab['other_tab_name']="Other Laws";
          $other_laws_list_tab['other_tab_link']=base_url()."index.php?other_laws/edit/".$other_laws_list_edit['uploadFir_data'][0]['child_id'];
          $other_laws_list_tab['other_tab_active']=false;
		  $other_laws_list_tab['FIR_tab_name']="Upload FIR";
          $other_laws_list_tab['uplodfir_tab_link']=base_url()."index.php?uploadFIR/edit/".$other_laws_list_edit['uploadFir_data'][0]['child_id'];
          $other_laws_list_tab['uplodfir_tab_active']=true;
          foreach ($this->Uploadfir_model->get_otherlaws_psts($param1) as $psts) {
            $other_laws_list_tab['pstatus']=$psts['pstatus'];
          }

            $this->data['main_content_view']=$this->load->view('backend/staff/acttab.php',$other_laws_list_tab, TRUE);
			//print_r($other_laws_list_edit);exit;

          $this->data['title']="Upload FIR";
          $this->data['main_content_view'] = $this->load->view('backend/staff/uploadFIR_edit.php',$other_laws_list_edit, TRUE);
            $this->generate_data('backend/index', $this->data );
        }
		//UploadFIR dept update
      	function uploadfir_update($param1 = '', $param2 = '') {
              $this->load->model('Uploadfir_model');
			  $page_data['page_name'] = 'UploadFIR_edit';
            
			 
      	if ($this->session->userdata('staff_login') != 1)
      		{
      			$this->session->set_userdata('last_page' , current_url());
      			redirect(base_url(), 'refresh');
      		}
              if ($param1 == 'create')
			  {
                  $this->Uploadfir_model->create_minoritydepartment($param2);
			  }
              
      		if( $_FILES["image1"]["type"]=='image/jpeg'){
      				move_uploaded_file($_FILES["image1"]["tmp_name"], 'uploads/entitlement_proof/Uploadfir/q1/'. $param2 . '.jpg');
      			}
      			if($_FILES["image1"]["type"]=='application/pdf'){
      			move_uploaded_file($_FILES["image1"]["tmp_name"], 'uploads/entitlement_proof/Uploadfir/q1/'. $param2 . '.pdf');
      			unlink('uploads/entitlement_proof/Uploadfir/q1/'. $param2 . '.jpg');
      			}
      			if($_FILES["image1"]["type"]=='image/png'){
      			move_uploaded_file($_FILES["image1"]["tmp_name"], 'uploads/entitlement_proof/Uploadfir/q1/'. $param2 . '.png');
      			unlink('uploads/entitlement_proof/Uploadfir/q1/'. $param2 . '.jpg');
      			unlink('uploads/entitlement_proof/Uploadfir/q1/'. $param2 . '.pdf');
      			}

      		
				//dipti
				 
				   //$this->load->view('backend/index', $page_data);
      			}
      			
      			
      			///down load the fir copy
      			public function download_fir($child_id)
      			{
      				
      				$this->load->model('uploadfir_model');
      				$data['fir_data']="";
      				$data['uploadFir_data']=$this->uploadfir_model->ps_information($child_id);     				
      				$this->data['main_content_view'] = $this->load->view('backend/staff/downloadfir.php', $data, TRUE);
      				$this->_gen_pdf($this->data['main_content_view'] );
      				
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
      				$mpdf->Output("FirCopy.pdf",'D');
      			}
              
          
   
}
