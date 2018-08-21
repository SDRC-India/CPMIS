<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>


<?php
/*
*This class is for the Child _rescue
*By Godti Satyanarayan
*
*/

class Ipc_act extends MY_Controller
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
            $this->load->model('ipc_act_model');
            //To get the account_role_id
            $role=$this->ipc_act_model->get_role_id($ses_ids);
            foreach($role as $rolep):
              $roles_id=$rolep['account_role_id'];
              $dist_id=$rolep['district_id'];
              $stat_id=$rolep['state_id'];
            endforeach;
            $ipc_act_list=array();
            $ipc_act_list["details_url"]=base_url()."index.php?child_rescued_list/view/";
            $ipc_act_list["edit_url"]=base_url()."index.php?ipc_act/edit/";
            $ipc_act_list["child_search_view_url"]=base_url()."index.php?labour_act/child_search_view/";
            $ipc_act_list['counter']=1;
            $ipc_act_list['role_id']=$roles_id;
            $ipc_act_list['ipc_act_data']=$this->ipc_act_model-> get_ipc_act_data($roles_id,$dist_id);

            $this->data['title']="IPC";
            $this->data['main_content_view'] = $this->load->view('backend/staff/ipc_list.php',$ipc_act_list, TRUE);
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
          $this->load->model('ipc_act_model');
          //To get the account_role_id
          $role=$this->ipc_act_model->get_role_id($ses_ids);
          foreach($role as $rolep):
            $roles_id=$rolep['account_role_id'];
            $dist_id=$rolep['district_id'];
            $stat_id=$rolep['state_id'];
          endforeach;
          $ipc_act_list_edit=array();
          $ipc_act_list_edit['role_id']=$roles_id;
          $ipc_act_list_edit['ipc_act_data']=$this->ipc_act_model->get_ipc_act_child($param1);
          $ipc_act_list_edit['sections']=$this->ipc_act_model->get_sections_list($param1);

          // data to tabs
            //print_r($wages_act_list_edit['wages_act_data']);
          $ipc_act_list_tab=array();
          $ipc_act_list_tab['lab_tab_name']="Compliance by LRD";
          $ipc_act_list_tab['lab_tab_link']=base_url()."index.php?labour_act/edit/". $ipc_act_list_edit['ipc_act_data'][0]['child_id'];
          $ipc_act_list_tab['lab_tab_active']=false;
          $ipc_act_list_tab['wag_tab_name']="Compliance by LRD on Minimum Wages Act";
          $ipc_act_list_tab['wag_tab_link']=base_url()."index.php?wages_act/edit/".$ipc_act_list_edit['ipc_act_data'][0]['child_id'];
          $ipc_act_list_tab['wag_tab_active']=false;
          $ipc_act_list_tab['ipc_tab_name']="IPC Act Detail";
          $ipc_act_list_tab['ipc_tab_link']=base_url()."index.php?ipc_act/edit/". $ipc_act_list_edit['ipc_act_data'][0]['child_id'];
          $ipc_act_list_tab['ipc_tab_active']=true;
          $ipc_act_list_tab['other_tab_name']="Other Laws";
          $ipc_act_list_tab['other_tab_link']=base_url()."index.php?other_laws/edit/". $ipc_act_list_edit['ipc_act_data'][0]['child_id'];
          $ipc_act_list_tab['other_tab_active']=false;
		   $ipc_act_list_tab['FIR_tab_name']="Upload FIR";
          $ipc_act_list_tab['uplodfir_tab_link']=base_url()."index.php?uploadFIR/edit/". $ipc_act_list_edit['ipc_act_data'][0]['child_id'];
          $ipc_act_list_tab['uplodfir_tab_active']=false;
          foreach ($this->ipc_act_model->get_ipc_psts($param1) as $psts) {
              $ipc_act_list_tab['pstatus']=$psts['pstatus'];
          }
          $this->data['main_content_view']=$this->load->view('backend/staff/acttab.php',$ipc_act_list_tab, TRUE);

          $this->data['title']="IPC Act Detail";
          $this->data['main_content_view'] = $this->load->view('backend/staff/ipc_act_edit.php',$ipc_act_list_edit, TRUE);
            $this->generate_data('backend/index', $this->data );
        }


        function ipcact_update($param1 = '', $param2 = '') {

        if ($this->session->userdata('staff_login') != 1)
          {
            $this->session->set_userdata('last_page' , current_url());
            redirect(base_url(), 'refresh');
          }

          $this->load->model('ipc_act_model');
              if ($param1 == 'create')
                  $this->ipc_act_model->create_ipcact($param2);
          }

}
