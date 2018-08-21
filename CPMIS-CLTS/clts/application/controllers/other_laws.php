<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>


<?php
/*
*This class is for the other laws
*By Godti Satyanarayan
*
*/

class Other_laws extends MY_Controller
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
            $this->load->model('other_laws_model');
            //To get the account_role_id
            $role=$this->other_laws_model->get_role_id($ses_ids);
            foreach($role as $rolep):
              $roles_id=$rolep['account_role_id'];
              $dist_id=$rolep['district_id'];
              $stat_id=$rolep['state_id'];
            endforeach;
            $ipc_act_list=array();
            $other_laws_list["details_url"]=base_url()."index.php?child_rescued_list/view/";
            $other_laws_list["edit_url"]=base_url()."index.php?other_laws/edit/";
            $other_laws_list["child_search_view_url"]=base_url()."index.php?labour_act/child_search_view/";
            $other_laws_list['counter']=1;
            $other_laws_list['role_id']=$roles_id;
            $other_laws_list['other_laws_data']=$this->other_laws_model-> get_other_laws_data($roles_id,$dist_id);
            $this->data['title']="Other Laws";
            $this->data['main_content_view'] = $this->load->view('backend/staff/otherlaws_list.php',$other_laws_list, TRUE);
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
          $this->load->model('other_laws_model');
          //To get the account_role_id
          $role=$this->other_laws_model->get_role_id($ses_ids);
          foreach($role as $rolep):
            $roles_id=$rolep['account_role_id'];
            $dist_id=$rolep['district_id'];
            $stat_id=$rolep['state_id'];
          endforeach;
          $other_laws_list_edit=array();
          $other_laws_list_edit['role_id']=$roles_id;
          $other_laws_list_edit['other_laws_data']=$this->other_laws_model->get_other_laws_child($param1);
          // data to tabs
          $other_laws_list_tab=array();
          $other_laws_list_tab['lab_tab_name']="Compliance by LRD";
          $other_laws_list_tab['lab_tab_link']=base_url()."index.php?labour_act/edit/".$other_laws_list_edit['other_laws_data'][0]['child_id'];
          $other_laws_list_tab['lab_tab_active']=false;
          $other_laws_list_tab['wag_tab_name']="Compliance by LRD on Minimum Wages Act";
          $other_laws_list_tab['wag_tab_link']=base_url()."index.php?wages_act/edit/".$other_laws_list_edit['other_laws_data'][0]['child_id'];
          $other_laws_list_tab['wag_tab_active']=false;
          $other_laws_list_tab['ipc_tab_name']="IPC Act Detail";
          $other_laws_list_tab['ipc_tab_link']=base_url()."index.php?ipc_act/edit/".$other_laws_list_edit['other_laws_data'][0]['child_id'];
          $other_laws_list_tab['ipc_tab_active']=false;
          $other_laws_list_tab['other_tab_name']="Other Laws";
          $other_laws_list_tab['other_tab_link']=base_url()."index.php?other_laws/edit/".$other_laws_list_edit['other_laws_data'][0]['child_id'];
          $other_laws_list_tab['other_tab_active']=true;
		  $other_laws_list_tab['FIR_tab_name']="Upload FIR";
          $other_laws_list_tab['uplodfir_tab_link']=base_url()."index.php?uploadFIR/edit/".$other_laws_list_edit['other_laws_data'][0]['child_id'];
          $other_laws_list_tab['uplodfir_tab_active']=false;
          foreach ($this->other_laws_model->get_otherlaws_psts($param1) as $psts) {
              $other_laws_list_tab['pstatus']=$psts['pstatus'];
          }

          $this->data['main_content_view']=$this->load->view('backend/staff/acttab.php',$other_laws_list_tab, TRUE);

          $this->data['title']="Other Laws";
          $this->data['main_content_view'] = $this->load->view('backend/staff/otherlaws_edit.php',$other_laws_list_edit, TRUE);
            $this->generate_data('backend/index', $this->data );
        }
        function otherlawsact_update($param1 = '', $param2 = '') {

        if ($this->session->userdata('staff_login') != 1)
          {
            $this->session->set_userdata('last_page' , current_url());
            redirect(base_url(), 'refresh');
          }

          $this->load->model('other_laws_model');
              if ($param1 == 'create')
                  $this->other_laws_model->create_otherlawsact($param2);
          }

}
