<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>


<?php
/*
*This class is to add loabour resorce department data of children
*By Godti Satyanarayan
*
*/

class Social_welfare_department extends MY_Controller
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
            $this->load->model('social_welfare_department_model');
            //To get the account_role_id
            $role=$this->social_welfare_department_model->get_role_id($ses_ids);
            foreach($role as $rolep):
              $roles_id=$rolep['account_role_id'];
              $dist_id=$rolep['district_id'];
              $state_id=$rolep['state_id'];
            endforeach;
            $social_welfare_department_list=array();
            $social_welfare_department_list["details_url"]=base_url()."index.php?child_rescued_list/view/";
            $social_welfare_department_list["edit_url"]=base_url()."index.php?social_welfare_department/edit/";
            $social_welfare_department_list['counter']=1;
            $social_welfare_department_list['role_id']=$roles_id;
            $social_welfare_department_list['social_welfare_department_data']=$this->social_welfare_department_model->get_social_welfare_department_list_data($roles_id,$dist_id);
            $this->data['title']="Social Welfare Department";

            $this->data['main_content_view'] = $this->load->view('backend/staff/social_welfare_department_list.php',$social_welfare_department_list, TRUE);
            $this->generate_data('backend/index', $this->data );

        }
        function edit($param1 = '', $param2 = '') {

      		if ($this->session->userdata('staff_login') != 1)
      		{
      			$this->session->set_userdata('last_page' , current_url());
      			redirect(base_url(), 'refresh');
      		}
          $ses_ids=$this->session->userdata('login_user_id');
          $this->load->model('social_welfare_department_model');
          //To get the account_role_id
          $role=$this->social_welfare_department_model->get_role_id($ses_ids);
          foreach($role as $rolep):
            $roles_id=$rolep['account_role_id'];
            $dist_id=$rolep['district_id'];
            $state_id=$rolep['state_id'];
          endforeach;
          $social_welfare_department_edit=array();
          $social_welfare_department_edit['social_welfare_department_data']=$this->social_welfare_department_model->get_social_welfare_department_data($param1);
          $social_welfare_department_list['role_id']=$roles_id;
          //tab database// data to tabs
          $social_welfare_department_edit['ref'] = $param2;
          $tab_data['lrd_tab_name']="Labour Resource";
          $tab_data['lrd_tab_link']=base_url()."index.php?labour_resource_department/edit/".$social_welfare_department_edit['social_welfare_department_data'][0]['child_id'];
          $tab_data['lrd_tab_active']=false;
          $tab_data['ed_tab_name']="Educational Department";
          $tab_data['ed_tab_link']=base_url()."index.php?education_department/edit/".$social_welfare_department_edit['social_welfare_department_data'][0]['child_id'];
          $tab_data['ed_tab_active']=false;
          $tab_data['rd_tab_name']="Rural Development ";
          $tab_data['rd_tab_link']=base_url()."index.php?rural_development_department/edit/".$social_welfare_department_edit['social_welfare_department_data'][0]['child_id'];
          $tab_data['rd_tab_active']=false;
          $tab_data['ud_tab_name']="Urban Development ";
          $tab_data['ud_tab_link']=base_url()."index.php?urban_development_department/edit/".$social_welfare_department_edit['social_welfare_department_data'][0]['child_id'];
          $tab_data['ud_tab_active']=false;
          $tab_data['revd_tab_name']="Revenue Department";
          $tab_data['revd_tab_link']=base_url()."index.php?revenue_department/edit/".$social_welfare_department_edit['social_welfare_department_data'][0]['child_id'];
          $tab_data['revd_tab_active']=false;
          $tab_data['head_tab_name']="Health Department";
          $tab_data['head_tab_link']=base_url()."index.php?health_department/edit/".$social_welfare_department_edit['social_welfare_department_data'][0]['child_id'];
          $tab_data['head_tab_active']=false;
          $tab_data['scstw_tab_name']="SC& ST Welfare";
          $tab_data['scstw_tab_link']=base_url()."index.php?scst_welfare_department/edit/".$social_welfare_department_edit['social_welfare_department_data'][0]['child_id'];
          $tab_data['scstw_tab_active']=false;
          $tab_data['fcs_tab_name']="Food & Civil Supplied";
          $tab_data['fcs_tab_link']=base_url()."index.php?foodcivil_supplied_department/edit/".$social_welfare_department_edit['social_welfare_department_data'][0]['child_id'];
          $tab_data['fcs_tab_active']=false;
          $tab_data['mw_tab_name']="Minority Welfare";
          $tab_data['mw_tab_link']=base_url()."index.php?minority_welfare_department/edit/".$social_welfare_department_edit['social_welfare_department_data'][0]['child_id'];
          $tab_data['mw_tab_active']=false;
          $tab_data['sw_tab_name']="Social Welfare";
          $tab_data['sw_tab_link']=base_url()."index.php?social_welfare_department/edit/".$social_welfare_department_edit['social_welfare_department_data'][0]['child_id'];
          $tab_data['sw_tab_active']=true;
          $tab_data['rs_tab_name']="Restoration Status";
          $tab_data['rs_tab_link']=base_url()."index.php?restoration_status/edit/".$social_welfare_department_edit['social_welfare_department_data'][0]['child_id'];
          $tab_data['rs_tab_active']=false;
		  $tab_data['cm_relief_tab_name']="CM Relief Fund(CL)";
          $tab_data['cm_relief_tab_link']=base_url()."index.php?cm_relief_cl/edit/".$social_welfare_department_edit['social_welfare_department_data'][0]['child_id'];

          $tab_data['cm_relief_tab_active']=false;
          $this->data['main_content_view'] = $this->load->view('backend/staff/rehilibitionTab.php',$tab_data, TRUE);

          $this->data['title']="Social Welfare Department";
          $this->data['main_content_view'] = $this->load->view('backend/staff/social_welfare_department_edit.php',$social_welfare_department_edit, TRUE);
          $this->generate_data('backend/index', $this->data );

        }
        //social dept update

      	function socialdepartment_update($param1 = '', $param2 = '') {
      	if ($this->session->userdata('staff_login') != 1)
      		{
      			$this->session->set_userdata('last_page' , current_url());
      			redirect(base_url(), 'refresh');
      		}
            $this->load->model('social_welfare_department_model');
              if ($param1 == 'create')
                  $this->social_welfare_department_model->create_socialdepartment($param2);
              $page_data['page_name'] = 'social_welfare_department_edit';
              $page_data['page_title'] = get_phrase('manage_project');
      		if( $_FILES["image1"]["type"]=='image/jpeg'){
      				move_uploaded_file($_FILES["image1"]["tmp_name"], 'uploads/entitlement_proof/social/q1/'. $param2 . '.jpg');
      			}
      			if($_FILES["image1"]["type"]=='application/pdf'){
      			move_uploaded_file($_FILES["image1"]["tmp_name"], 'uploads/entitlement_proof/social/q1/'. $param2 . '.pdf');
      			unlink('uploads/entitlement_proof/social/q1/'. $param2 . '.jpg');
      			}
      			if($_FILES["image1"]["type"]=='image/png'){
      			move_uploaded_file($_FILES["image1"]["tmp_name"], 'uploads/entitlement_proof/social/q1/'. $project_id . '.png');
      			unlink('uploads/entitlement_proof/social/q1/'. $project_id . '.jpg');
      			unlink('uploads/entitlement_proof/social/q1/'. $project_id . '.pdf');
      			}
      			//2nd
      			if( $_FILES["image2"]["type"]=='image/jpeg'){
      				move_uploaded_file($_FILES["image2"]["tmp_name"], 'uploads/entitlement_proof/social/q2/'. $param2 . '.jpg');
      			}
      			if($_FILES["image2"]["type"]=='application/pdf'){
      			move_uploaded_file($_FILES["image2"]["tmp_name"], 'uploads/entitlement_proof/social/q2/'. $param2 . '.pdf');
      			unlink('uploads/entitlement_proof/social/q2/'. $param2 . '.jpg');
      			}
      			if($_FILES["image2"]["type"]=='image/png'){
      			move_uploaded_file($_FILES["image2"]["tmp_name"], 'uploads/entitlement_proof/social/q2/'. $param2 . '.png');
      			unlink('uploads/entitlement_proof/social/q2/'. $param2 . '.jpg');
      			unlink('uploads/entitlement_proof/social/q2/'. $param2 . '.pdf');
      			}
      			//3rd
      			if( $_FILES["image3"]["type"]=='image/jpeg'){
      				move_uploaded_file($_FILES["image3"]["tmp_name"], 'uploads/entitlement_proof/social/q3/'. $param2 . '.jpg');
      			}
      			if($_FILES["image3"]["type"]=='application/pdf'){
      			move_uploaded_file($_FILES["image3"]["tmp_name"], 'uploads/entitlement_proof/social/q3/'. $param2 . '.pdf');
      			unlink('uploads/entitlement_proof/social/q3/'. $param2 . '.jpg');
      			}
      			if($_FILES["image3"]["type"]=='image/png'){
      			move_uploaded_file($_FILES["image3"]["tmp_name"], 'uploads/entitlement_proof/social/q3/'. $param2 . '.png');
      			unlink('uploads/entitlement_proof/social/q3/'. $param2 . '.jpg');
      			unlink('uploads/entitlement_proof/social/q3/'. $param2 . '.pdf');
      			}

      			if( $_FILES["image4"]["type"]=='image/jpeg'){
      				move_uploaded_file($_FILES["image4"]["tmp_name"], 'uploads/entitlement_proof/social/q4/'. $param2 . '.jpg');
      			}
      			if($_FILES["image4"]["type"]=='application/pdf'){
      			move_uploaded_file($_FILES["image4"]["tmp_name"], 'uploads/entitlement_proof/social/q4/'. $param2 . '.pdf');
      			unlink('uploads/entitlement_proof/social/q4/'. $param2 . '.jpg');
      			}
      			if($_FILES["image4"]["type"]=='image/png'){
      			move_uploaded_file($_FILES["image4"]["tmp_name"], 'uploads/entitlement_proof/social/q4/'. $param2 . '.png');
      			unlink('uploads/entitlement_proof/social/q4/'. $param2 . '.jpg');
      			unlink('uploads/entitlement_proof/social/q4/'. $param2 . '.pdf');
      			}
              $this->load->view('backend/index', $page_data);
          }
      	//end
      	//social dept update
}
