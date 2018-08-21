<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>


<?php
/*
*This class is to add loabour resorce department data of children
*By Godti Satyanarayan
*
*/

class Foodcivil_supplied_department extends MY_Controller
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
            $this->load->model('foodcivil_supplied_department_model');
            //To get the account_role_id
            $role=$this->foodcivil_supplied_department_model->get_role_id($ses_ids);
            foreach($role as $rolep):
              $roles_id=$rolep['account_role_id'];
              $dist_id=$rolep['district_id'];
              $state_id=$rolep['state_id'];
            endforeach;
            $foodcivil_supplied_department_list=array();
            $foodcivil_supplied_department_list["details_url"]=base_url()."index.php?child_rescued_list/view/";
            $foodcivil_supplied_department_list["edit_url"]=base_url()."index.php?foodcivil_supplied_department/edit/";
            $foodcivil_supplied_department_list['counter']=1;
            $foodcivil_supplied_department_list['role_id']=$roles_id;
            $foodcivil_supplied_department_list['foodcivil_supplied_department_data']=$this->foodcivil_supplied_department_model->get_foodcivil_supplied_department_list_data($roles_id,$dist_id);
            $this->data['title']="Food & Civil Supplied Department";

            $this->data['main_content_view'] = $this->load->view('backend/staff/foodcivil_supplied_department_list.php',$foodcivil_supplied_department_list, TRUE);
            $this->generate_data('backend/index', $this->data );

        }
        function edit($param1 = '', $param2 = '') {

      		if ($this->session->userdata('staff_login') != 1)
      		{
      			$this->session->set_userdata('last_page' , current_url());
      			redirect(base_url(), 'refresh');
      		}
          $ses_ids=$this->session->userdata('login_user_id');
          $this->load->model('foodcivil_supplied_department_model');
          //To get the account_role_id
          $role=$this->foodcivil_supplied_department_model->get_role_id($ses_ids);
          foreach($role as $rolep):
            $roles_id=$rolep['account_role_id'];
            $dist_id=$rolep['district_id'];
            $state_id=$rolep['state_id'];
          endforeach;
          $foodcivil_supplied_department_edit=array();
          $foodcivil_supplied_department_edit['foodcivil_supplied_department_data']=$this->foodcivil_supplied_department_model->get_foodcivil_supplied_department_data($param1);
          $foodcivil_supplied_department_list['role_id']=$roles_id;
          //tab database// data to tabs
          $foodcivil_supplied_department_edit['ref'] = $param2;
          $tab_data['lrd_tab_name']="Labour Resource";
          $tab_data['lrd_tab_link']=base_url()."index.php?labour_resource_department/edit/".$foodcivil_supplied_department_edit['foodcivil_supplied_department_data'][0]['child_id'];
          $tab_data['lrd_tab_active']=false;
          $tab_data['ed_tab_name']="Educational Department";
          $tab_data['ed_tab_link']=base_url()."index.php?education_department/edit/".$foodcivil_supplied_department_edit['foodcivil_supplied_department_data'][0]['child_id'];
          $tab_data['ed_tab_active']=false;
          $tab_data['rd_tab_name']="Rural Development ";
          $tab_data['rd_tab_link']=base_url()."index.php?rural_development_department/edit/".$foodcivil_supplied_department_edit['foodcivil_supplied_department_data'][0]['child_id'];
          $tab_data['rd_tab_active']=false;
          $tab_data['ud_tab_name']="Urban Development ";
          $tab_data['ud_tab_link']=base_url()."index.php?urban_development_department/edit/".$foodcivil_supplied_department_edit['foodcivil_supplied_department_data'][0]['child_id'];
          $tab_data['ud_tab_active']=false;
          $tab_data['revd_tab_name']="Revenue Department";
          $tab_data['revd_tab_link']=base_url()."index.php?revenue_department/edit/".$foodcivil_supplied_department_edit['foodcivil_supplied_department_data'][0]['child_id'];
          $tab_data['revd_tab_active']=false;
          $tab_data['head_tab_name']="Health Department";
          $tab_data['head_tab_link']=base_url()."index.php?health_department/edit/".$foodcivil_supplied_department_edit['foodcivil_supplied_department_data'][0]['child_id'];
          $tab_data['head_tab_active']=false;
          $tab_data['scstw_tab_name']="SC& ST Welfare";
          $tab_data['scstw_tab_link']=base_url()."index.php?scst_welfare_department/edit/".$foodcivil_supplied_department_edit['foodcivil_supplied_department_data'][0]['child_id'];
          $tab_data['scstw_tab_active']=false;
          $tab_data['fcs_tab_name']="Food & Civil Supplied";
          $tab_data['fcs_tab_link']=base_url()."index.php?foodcivil_supplied_department/edit/".$foodcivil_supplied_department_edit['foodcivil_supplied_department_data'][0]['child_id'];
          $tab_data['fcs_tab_active']=true;
          $tab_data['mw_tab_name']="Minority Welfare";
          $tab_data['mw_tab_link']=base_url()."index.php?minority_welfare_department/edit/".$foodcivil_supplied_department_edit['foodcivil_supplied_department_data'][0]['child_id'];
          $tab_data['mw_tab_active']=false;
          $tab_data['sw_tab_name']="Social Welfare";
          $tab_data['sw_tab_link']=base_url()."index.php?social_welfare_department/edit/".$foodcivil_supplied_department_edit['foodcivil_supplied_department_data'][0]['child_id'];
          $tab_data['sw_tab_active']=false;
          $tab_data['rs_tab_name']="Restoration Status";
          $tab_data['rs_tab_link']=base_url()."index.php?restoration_status/edit/".$foodcivil_supplied_department_edit['foodcivil_supplied_department_data'][0]['child_id'];
          $tab_data['rs_tab_active']=false;
		  //cm reflief Tab
		  $tab_data['cm_relief_tab_name']="CM Relief Fund(CL)";
          $tab_data['cm_relief_tab_link']=base_url()."index.php?cm_relief_cl/edit/".$foodcivil_supplied_department_edit['foodcivil_supplied_department_data'][0]['child_id'];

          $tab_data['cm_relief_tab_active']=false;
		  
          $this->data['main_content_view'] = $this->load->view('backend/staff/rehilibitionTab.php',$tab_data, TRUE);

          $this->data['title']="Food & Civil Supplied Department";
          $this->data['main_content_view'] = $this->load->view('backend/staff/food_department_edit.php',$foodcivil_supplied_department_edit, TRUE);
          $this->generate_data('backend/index', $this->data );

        }
        //food dept update
      	function fooddepartment_update($param1 = '', $param2 = '') {
            $this->load->model('foodcivil_supplied_department_model');
      	if ($this->session->userdata('staff_login') != 1)
      		{
      			$this->session->set_userdata('last_page' , current_url());
      			redirect(base_url(), 'refresh');
      		}
              if ($param1 == 'create')
                  $this->foodcivil_supplied_department_model->create_fooddepartment($param2);

      		if( $_FILES["image1"]["type"]=='image/jpeg'){
      				move_uploaded_file($_FILES["image1"]["tmp_name"], 'uploads/entitlement_proof/food/q1/'. $param2 . '.jpg');
      			}
      			if($_FILES["image1"]["type"]=='application/pdf'){
      			move_uploaded_file($_FILES["image1"]["tmp_name"], 'uploads/entitlement_proof/food/q1/'. $param2 . '.pdf');
      			unlink('uploads/entitlement_proof/food/q1/'. $param2 . '.jpg');
      			}
      			if($_FILES["image1"]["type"]=='image/png'){
      			move_uploaded_file($_FILES["image1"]["tmp_name"], 'uploads/entitlement_proof/food/q1/'. $param2 . '.png');
      			unlink('uploads/entitlement_proof/food/q1/'. $param2 . '.jpg');
      			unlink('uploads/entitlement_proof/food/q1/'. $param2 . '.pdf');
      			}
      			//2nd
      			if( $_FILES["image2"]["type"]=='image/jpeg'){
      				move_uploaded_file($_FILES["image2"]["tmp_name"], 'uploads/entitlement_proof/food/q2/'. $param2 . '.jpg');
      			}
      			if($_FILES["image2"]["type"]=='application/pdf'){
      			move_uploaded_file($_FILES["image2"]["tmp_name"], 'uploads/entitlement_proof/food/q2/'. $param2 . '.pdf');
      			unlink('uploads/entitlement_proof/food/q2/'. $param2 . '.jpg');
      			}
      			if($_FILES["image2"]["type"]=='image/png'){
      			move_uploaded_file($_FILES["image2"]["tmp_name"], 'uploads/entitlement_proof/food/q2/'. $param2 . '.png');
      			unlink('uploads/entitlement_proof/food/q2/'. $param2 . '.jpg');
      			unlink('uploads/entitlement_proof/food/q2/'. $param2 . '.pdf');
      			}


          }
}
