<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>


<?php
/*
*This class is to add loabour resorce department data of children
*By Godti Satyanarayan
*
*/

class Restoration_status extends MY_Controller
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
            $this->load->model('restoration_status_model');
            //To get the account_role_id
            $role=$this->restoration_status_model->get_role_id($ses_ids);
            foreach($role as $rolep):
              $roles_id=$rolep['account_role_id'];
              $dist_id=$rolep['district_id'];
              $state_id=$rolep['state_id'];
            endforeach;
            $restoration_status_list=array();
            $restoration_status_list["details_url"]=base_url()."index.php?child_rescued_list/view/";
            $restoration_status_list["edit_url"]=base_url()."index.php?restoration_status/edit/";
            $restoration_status_list['counter']=1;
            $restoration_status_list['role_id']=$roles_id;
            $restoration_status_list['restoration_status_data']=$this->restoration_status_model->get_restoration_status_list_data($roles_id,$dist_id);
            $this->data['title']="Restoration Status";

            $this->data['main_content_view'] = $this->load->view('backend/staff/restoration_status_list.php',$restoration_status_list, TRUE);
            $this->generate_data('backend/index', $this->data );

        }
        function edit($param1 = '', $param2 = '') {

      		if ($this->session->userdata('staff_login') != 1)
      		{
      			$this->session->set_userdata('last_page' , current_url());
      			redirect(base_url(), 'refresh');
      		}
          $ses_ids=$this->session->userdata('login_user_id');
          $this->load->model('restoration_status_model');
          //To get the account_role_id
          $role=$this->restoration_status_model->get_role_id($ses_ids);
          foreach($role as $rolep):
            $roles_id=$rolep['account_role_id'];
            $dist_id=$rolep['district_id'];
            $state_id=$rolep['state_id'];
          endforeach;
          $restoration_status_edit=array();
          $restoration_status_edit['restoration_status_data']=$this->restoration_status_model->get_restoration_status_data($param1);
          $restoration_status_list['role_id']=$roles_id;

          //tab database// data to tabs
          $restoration_status_edit['ref'] = $param2;
          $tab_data['lrd_tab_name']="Labour Resource";
          $tab_data['lrd_tab_link']=base_url()."index.php?labour_resource_department/edit/".$restoration_status_edit['restoration_status_data'][0]['child_id'];
          $tab_data['lrd_tab_active']=false;
          $tab_data['ed_tab_name']="Educational Department";
          $tab_data['ed_tab_link']=base_url()."index.php?education_department/edit/".$restoration_status_edit['restoration_status_data'][0]['child_id'];
          $tab_data['ed_tab_active']=false;
          $tab_data['rd_tab_name']="Rural Development ";
          $tab_data['rd_tab_link']=base_url()."index.php?rural_development_department/edit/".$restoration_status_edit['restoration_status_data'][0]['child_id'];
          $tab_data['rd_tab_active']=false;
          $tab_data['ud_tab_name']="Urban Development ";
          $tab_data['ud_tab_link']=base_url()."index.php?urban_development_department/edit/".$restoration_status_edit['restoration_status_data'][0]['child_id'];
          $tab_data['ud_tab_active']=false;
          $tab_data['revd_tab_name']="Revenue Department";
          $tab_data['revd_tab_link']=base_url()."index.php?revenue_department/edit/".$restoration_status_edit['restoration_status_data'][0]['child_id'];
          $tab_data['revd_tab_active']=false;
          $tab_data['head_tab_name']="Health Department";
          $tab_data['head_tab_link']=base_url()."index.php?health_department/edit/".$restoration_status_edit['restoration_status_data'][0]['child_id'];
          $tab_data['head_tab_active']=false;
          $tab_data['scstw_tab_name']="SC& ST Welfare";
          $tab_data['scstw_tab_link']=base_url()."index.php?scst_welfare_department/edit/".$restoration_status_edit['restoration_status_data'][0]['child_id'];
          $tab_data['scstw_tab_active']=false;
          $tab_data['fcs_tab_name']="Food & Civil Supplied";
          $tab_data['fcs_tab_link']=base_url()."index.php?foodcivil_supplied_department/edit/".$restoration_status_edit['restoration_status_data'][0]['child_id'];
          $tab_data['fcs_tab_active']=false;
          $tab_data['mw_tab_name']="Minority Welfare";
          $tab_data['mw_tab_link']=base_url()."index.php?minority_welfare_department/edit/".$restoration_status_edit['restoration_status_data'][0]['child_id'];
          $tab_data['mw_tab_active']=false;
          $tab_data['sw_tab_name']="Social Welfare";
          $tab_data['sw_tab_link']=base_url()."index.php?social_welfare_department/edit/".$restoration_status_edit['restoration_status_data'][0]['child_id'];
          $tab_data['sw_tab_active']=false;
          $tab_data['rs_tab_name']="Restoration Status";
          $tab_data['rs_tab_link']=base_url()."index.php?restoration_status/edit/".$restoration_status_edit['restoration_status_data'][0]['child_id'];
          $tab_data['rs_tab_active']=true;
		   $tab_data['cm_relief_tab_name']="CM Relief Fund(CL)";
          $tab_data['cm_relief_tab_link']=base_url()."index.php?cm_relief_cl/edit/".$restoration_status_edit['restoration_status_data'][0]['child_id'];

          $tab_data['cm_relief_tab_active']=false;
		  
          $this->data['main_content_view'] = $this->load->view('backend/staff/rehilibitionTab.php',$tab_data, TRUE);

          $this->data['title']="Restoration Status";
          $this->data['main_content_view'] = $this->load->view('backend/staff/restoration_status_edit.php',$restoration_status_edit, TRUE);
          $this->generate_data('backend/index', $this->data );

        }
        function restoration_status_update($param1 = '',$param2 = '') {
      	if ($this->session->userdata('staff_login') != 1)
      		{
      			$this->session->set_userdata('last_page' , current_url());
      			redirect(base_url(), 'refresh');
      		}
            $this->load->model('restoration_status_model');

              if ($param1 == 'create')
                  $this->restoration_status_model->create_restorationdepartment($param2);


      		}

    }
