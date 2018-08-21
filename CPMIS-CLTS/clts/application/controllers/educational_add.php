<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>


<?php
/*
*This class is to add education details of children
*By Godti Satyanarayan
*
*/

class Educational_add extends MY_Controller
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
            $this->load->model('education_add_model');
            //To get the account_role_id
            $role=$this->education_add_model->get_role_id($ses_ids);
            foreach($role as $rolep):
              $roles_id=$rolep['account_role_id'];
              $dist_id=$rolep['district_id'];
              $state_id=$rolep['state_id'];
            endforeach;
            $education_add_list=array();
            $education_add_list["details_url"]=base_url()."index.php?child_rescued_list/view/";
            $education_add_list["edit_url"]=base_url()."index.php?educational_add/edit/";
            $education_add_list['counter']=1;
            $education_add_list['role_id']=$roles_id;
            $education_add_list['education_add_data']=$this->education_add_model->get_education_list_data($roles_id,$dist_id);
            $this->data['title']="Educational History";

            $this->data['main_content_view'] = $this->load->view('backend/staff/education_cwc_list.php',$education_add_list, TRUE);
            $this->generate_data('backend/index', $this->data );

        }
        function edit($param1 = '', $param2 = '') {

      		if ($this->session->userdata('staff_login') != 1)
      		{
      			$this->session->set_userdata('last_page' , current_url());
      			redirect(base_url(), 'refresh');
      		}
          $ses_ids=$this->session->userdata('login_user_id');
          $this->load->model('education_add_model');
          //To get the account_role_id
          $role=$this->education_add_model->get_role_id($ses_ids);
          foreach($role as $rolep):
            $roles_id=$rolep['account_role_id'];
            $dist_id=$rolep['district_id'];
            $state_id=$rolep['state_id'];
          endforeach;
          $education_add=array();
          $education_add['education_add_data']=$this->education_add_model->get_education_data($param1);
          //tab database// data to tabs
          $tab_data['edu_tab_name']="Education";
          $tab_data['edu_tab_link']=base_url()."index.php?educational_add/edit/".$education_add['education_add_data'][0]['child_id'];
          $tab_data['edu_tab_active']=true;
          $tab_data['hel_tab_name']="Health";
          $tab_data['hel_tab_link']=base_url()."index.php?health_add/edit/".$education_add['education_add_data'][0]['child_id'];
          $tab_data['hel_tab_active']=false;
          $tab_data['fam_tab_name']="Family";
          $tab_data['fam_tab_link']=base_url()."index.php?family_add/edit/".$education_add['education_add_data'][0]['child_id'];
          $tab_data['fam_tab_active']=false;
          $tab_data['eco_tab_name']="Economy";
          $tab_data['eco_tab_link']=base_url()."index.php?economy_add/edit/".$education_add['education_add_data'][0]['child_id'];
          $tab_data['eco_tab_active']=false;
          $tab_data['rea_tab_name']="Reasons";
          $tab_data['rea_tab_link']=base_url()."index.php?reasons_add/edit/".$education_add['education_add_data'][0]['child_id'];
          $tab_data['rea_tab_active']=false;
          $tab_data['sts_tab_name']="Status";
          $tab_data['sts_tab_link']=base_url()."index.php?status_add/edit/".$education_add['education_add_data'][0]['child_id'];
          $tab_data['sts_tab_active']=false;
          $tab_data['hab_tab_name']="Habit";
          $tab_data['hab_tab_link']=base_url()."index.php?habit_add/edit/".$education_add['education_add_data'][0]['child_id'];
          $tab_data['hab_tab_active']=false;
          $tab_data['soc_tab_name']="Social";
          $tab_data['soc_tab_link']=base_url()."index.php?social_add/edit/".$education_add['education_add_data'][0]['child_id'];
          $tab_data['soc_tab_active']=false;

          $this->data['main_content_view'] = $this->load->view('backend/staff/tabmenu.php',$tab_data, TRUE);

          $this->data['title']="Educational History";
          $this->data['main_content_view'] = $this->load->view('backend/staff/education_add.php',$education_add, TRUE);
          $this->generate_data('backend/index', $this->data );

        }

        public function education($param1 = '', $param2 = '') {

      		if ($this->session->userdata('staff_login') != 1)
      		{
      			$this->session->set_userdata('last_page' , current_url());
      			redirect(base_url(), 'refresh');
      		}
          $ses_ids=$this->session->userdata('login_user_id');
          $this->load->model('education_add_model');
              if ($param1 == 'create')
                  $this->education_add_model->create_education($param2);


              $page_data['page_name'] = 'education_add';
              $page_data['page_title'] = get_phrase('manage_project');
              $this->load->view('backend/index', $page_data);
          }
}
