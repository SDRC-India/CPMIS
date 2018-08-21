<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>


<?php
/*
*This class is to add loabour resorce department data of children
*By Godti Satyanarayan
*
*/

class Cm_relief_cl extends MY_Controller
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
              //$this->load->database();
              //loading the data
          }
      public function index()
        {
			
		//echo "test";

            if ($this->session->userdata('staff_login') != 1)
            {
              $this->session->set_userdata('last_page' , current_url());
              redirect(base_url(), 'refresh');
            }
            $ses_ids=$this->session->userdata('login_user_id');
            $this->load->model('cm_relief_cl_model');
            //To get the account_role_id
            $role=$this->cm_relief_cl_model->get_role_id($ses_ids);
            foreach($role as $rolep):
              $roles_id=$rolep['account_role_id'];
              $dist_id=$rolep['district_id'];
              $state_id=$rolep['state_id'];
            endforeach;
            $cm_relief=array();
            $cm_relief["details_url"]=base_url()."index.php?cm_relief_cl/view/";
            $cm_relief["edit_url"]=base_url()."index.php?cm_relief_cl/edit/";
            $cm_relief['counter']=1;
            $cm_relief['role_id']=$roles_id;
            $cm_relief['cm_relief_list']=$this->cm_relief_cl_model->get_cm_relief_cl_list_data($roles_id,$dist_id);
            //print_r($cm_relief['cm_relief_list']);
            $this->data['title']="CM Relief Fund(CL)";

            $this->data['main_content_view'] = $this->load->view('backend/staff/cm_relief_list.php',$cm_relief, TRUE);
            $this->generate_data('backend/index', $this->data );

        }
		
		public function edit($child_id='')
		{
			
			if ($this->session->userdata('staff_login') != 1)
      		{
      			$this->session->set_userdata('last_page' , current_url());
      			redirect(base_url(), 'refresh');
      		}
          $ses_ids=$this->session->userdata('login_user_id');
          $this->load->model('cm_relief_cl_model');
          //To get the account_role_id
          $role=$this->cm_relief_cl_model->get_role_id($ses_ids);
          foreach($role as $rolep):
            $roles_id=$rolep['account_role_id'];
            $dist_id=$rolep['district_id'];
            $state_id=$rolep['state_id'];
          endforeach;
          $cm_relief_cl_edit=array();
          $cm_relief_cl_edit['cm_relief_cl_data']=$this->cm_relief_cl_model->get_cm_relief_cl_data($child_id);
          //print_r($cm_relief_cl_edit['cm_relief_cl_data']) ;
          $cm_relief_cl_edit['bank_details']=$this->cm_relief_cl_model->get_bank_details($child_id);
		     //print_r($cm_relief_cl_edit['bank_details']);
          $cm_relief_cl_edit['bank_details_one']=$this->cm_relief_cl_model->get_bank_detail($cm_relief_cl_edit['cm_relief_cl_data'][0]['bank_details_id']);
		  
          //tab database// data to tabs
          //$cm_relief_cl_edit['ref'] = $param2;
		  $tab_data['cm_relief_tab_name']="CM Relief Fund(CL)";
          $tab_data['cm_relief_tab_link']=base_url()."index.php?cm_relief_cl/edit/".$cm_relief_cl_edit['cm_relief_cl_data'][0]['child_id'];

          $tab_data['cm_relief_tab_active']=true;
		  
          $tab_data['lrd_tab_name']="Labour Resource";
          $tab_data['lrd_tab_link']=base_url()."index.php?labour_resource_department/edit/".$cm_relief_cl_edit['cm_relief_cl_data'][0]['child_id'];

          $tab_data['lrd_tab_active']=false;
          //print_r($roles_id);
          if($roles_id==7 || $roles_id==8)
          {
            //print_r("asdh");
            $tab_data['ed_tab_name']="Educational Department";
            $tab_data['ed_tab_link']=base_url()."index.php?education_department/edit/".$cm_relief_cl_edit['cm_relief_cl_data'][0]['child_id'];
            $tab_data['ed_tab_active']=false;
            $tab_data['rd_tab_name']="Rural Development ";
            $tab_data['rd_tab_link']=base_url()."index.php?rural_development_department/edit/".$cm_relief_cl_edit['cm_relief_cl_data'][0]['child_id'];
            $tab_data['rd_tab_active']=false;
            $tab_data['ud_tab_name']="Urban Development ";
            $tab_data['ud_tab_link']=base_url()."index.php?urban_development_department/edit/".$cm_relief_cl_edit['cm_relief_cl_data'][0]['child_id'];
            $tab_data['ud_tab_active']=false;
            $tab_data['revd_tab_name']="Revenue Department";
            $tab_data['revd_tab_link']=base_url()."index.php?revenue_department/edit/".$cm_relief_cl_edit['cm_relief_cl_data'][0]['child_id'];
            $tab_data['revd_tab_active']=false;
            $tab_data['head_tab_name']="Health Department";
            $tab_data['head_tab_link']=base_url()."index.php?health_department/edit/".$cm_relief_cl_edit['cm_relief_cl_data'][0]['child_id'];
            $tab_data['head_tab_active']=false;
            $tab_data['scstw_tab_name']="SC& ST Welfare";
            $tab_data['scstw_tab_link']=base_url()."index.php?scst_welfare_department/edit/".$cm_relief_cl_edit['cm_relief_cl_data'][0]['child_id'];
            $tab_data['scstw_tab_active']=false;
            $tab_data['fcs_tab_name']="Food & Civil Supplied";
            $tab_data['fcs_tab_link']=base_url()."index.php?foodcivil_supplied_department/edit/".$cm_relief_cl_edit['cm_relief_cl_data'][0]['child_id'];
            $tab_data['fcs_tab_active']=false;
            $tab_data['mw_tab_name']="Minority Welfare";
            $tab_data['mw_tab_link']=base_url()."index.php?minority_welfare_department/edit/".$cm_relief_cl_edit['cm_relief_cl_data'][0]['child_id'];
            $tab_data['mw_tab_active']=false;
            $tab_data['sw_tab_name']="Social Welfare";
            $tab_data['sw_tab_link']=base_url()."index.php?social_welfare_department/edit/".$cm_relief_cl_edit['cm_relief_cl_data'][0]['child_id'];
            $tab_data['sw_tab_active']=false;
            $tab_data['rs_tab_name']="Restoration Status";
            $tab_data['rs_tab_link']=base_url()."index.php?restoration_status/edit/".$cm_relief_cl_edit['cm_relief_cl_data'][0]['child_id'];
            $tab_data['rs_tab_active']=false;

          }else if($roles_id==18){
          	$tab_data['ed_tab_name']="Educational Department";
          	$tab_data['ed_tab_link']=base_url()."index.php?education_department/edit/".$cm_relief_cl_edit['cm_relief_cl_data'][0]['child_id'];
          	$tab_data['ed_tab_active']=false;
          }
          $cm_relief_cl_edit['roles_id']=$roles_id;
          $this->data['main_content_view'] = $this->load->view('backend/staff/rehilibitionTab.php',$tab_data, TRUE);
          //print_r($tab_data);
          $this->data['title']="CM Relief Fund(CL)";
          $this->data['main_content_view'] = $this->load->view('backend/staff/cm_relief_cl_edit.php',$cm_relief_cl_edit, TRUE);
          $this->generate_data('backend/index', $this->data );	
		}
      	//UPDATE FUNCTION
       function cm_relief_cl_update($child_id)
	   {
		   
          if ($this->session->userdata('staff_login') != 1)
          {
            $this->session->set_userdata('last_page' , current_url());
            redirect(base_url(), 'refresh');
          }
           $this->load->model('cm_relief_cl_model');
             
		  if($this->cm_relief_cl_model->update_cm_relief($child_id))
			  
		  {
			  
			  return true;
		  }
				  
					  
				  
				  

		   
		   
	   }	
     //get bank detail 
      function get_bank_detail($bank_id)
	  {
		
		    $this->load->model('cm_relief_cl_model');
            echo json_encode($this->cm_relief_cl_model->get_bank_detail($bank_id));
		// return $this->cm_relief_cl_model->get_bank_detail($bank_id);  
		  
	  }

		 //view details record of child
        public function view($param1="",$param2="")
        {
          if ($this->session->userdata('staff_login') != 1)
          {
            $this->session->set_userdata('last_page' , current_url());
            redirect(base_url(), 'refresh');
          }
          $ses_ids=$this->session->userdata('login_user_id');
          $this->load->model('cm_relief_cl_model');
         
          $this->data['title']="CM Relief Fund";
          $child_data['view_child_data']	=	$this->cm_relief_cl_model->get_child_data($param1);
          $child_data['default']="uploads/user.jpg";
          $child_data['upload_path']="./uploads/child_image/";
          

            //print_r(  $child_data);
          $this->data['main_content_view'] = $this->load->view('backend/staff/cm_relief_child.php', $child_data, TRUE);
          $this->generate_data('backend/index', $this->data );

        }
			
			
}
