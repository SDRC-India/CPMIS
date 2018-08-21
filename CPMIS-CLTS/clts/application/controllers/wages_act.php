<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>


<?php
/*
*This class is for the Child _rescue
*By Godti Satyanarayan
*
*/

class Wages_act extends MY_Controller
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
            $this->load->model('wages_act_model');
            //To get the account_role_id
            $role=$this->wages_act_model->get_role_id($ses_ids);
            foreach($role as $rolep):
              $roles_id=$rolep['account_role_id'];
              $dist_id=$rolep['district_id'];
              $stat_id=$rolep['state_id'];
            endforeach;
            $wages_act_list=array();
            $wages_act_list["details_url"]=base_url()."index.php?child_rescued_list/view/";
            $wages_act_list["edit_url"]=base_url()."index.php?wages_act/edit/";
            $wages_act_list["child_search_view_url"]=base_url()."index.php?labour_act/child_search_view/";
            $wages_act_list['counter']=1;
            $wages_act_list['role_id']=$roles_id;
            $wages_act_list['wages_act_data']=$this->wages_act_model-> get_wages_act_data($roles_id,$dist_id);

            $this->data['title']="Compliance by LRD on Minimum Wages Act ";
            $this->data['main_content_view'] = $this->load->view('backend/staff/wages_act_list.php',$wages_act_list, TRUE);
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
          $this->load->model('wages_act_model');
          //To get the account_role_id
          $role=$this->wages_act_model->get_role_id($ses_ids);
          foreach($role as $rolep):
            $roles_id=$rolep['account_role_id'];
            $dist_id=$rolep['district_id'];
            $stat_id=$rolep['state_id'];
          endforeach;
          $wages_act_list_edit=array();

          $wages_act_list['counter']=1;
          $wages_act_list_edit['role_id']=$roles_id;
          $wages_act_list_edit['wages_act_data']=$this->wages_act_model->get_wages_act_child($param1);
          
          
		  //code by dipti
		 $wages_act_list_edit['wages']=$this->wages_act_model->get_wages_act();
		  
          $wages_act_list_tab['lab_tab_name']="Compliance by LRD";
          $wages_act_list_tab['lab_tab_link']=base_url()."index.php?labour_act/edit/". $wages_act_list_edit['wages_act_data'][0]['child_id'];
          $wages_act_list_tab['lab_tab_active']=false;
          $wages_act_list_tab['wag_tab_name']="Compliance by LRD on Minimum Wages Act";
          $wages_act_list_tab['wag_tab_link']=base_url()."index.php?wages_act/edit/".$wages_act_list_edit['wages_act_data'][0]['child_id'];
          $wages_act_list_tab['wag_tab_active']=true;
          $wages_act_list_tab['ipc_tab_name']="IPC Act Detail";
          $wages_act_list_tab['ipc_tab_link']=base_url()."index.php?ipc_act/edit/". $wages_act_list_edit['wages_act_data'][0]['child_id'];
          $wages_act_list_tab['ipc_tab_active']=false;
          $wages_act_list_tab['other_tab_name']="Other Laws";
          $wages_act_list_tab['other_tab_link']=base_url()."index.php?other_laws/edit/". $wages_act_list_edit['wages_act_data'][0]['child_id'];
          $wages_act_list_tab['other_tab_active']=false;
		  
		  $wages_act_list_tab['FIR_tab_name']="Upload FIR";
          $wages_act_list_tab['uplodfir_tab_link']=base_url()."index.php?uploadFIR/edit/". $wages_act_list_edit['wages_act_data'][0]['child_id'];
          $wages_act_list_tab['uplodfir_tab_active']=false;
          $wages_act_list_tab['pstatus']=  $wages_act_list_edit['wages_act_data'][0]['pstatus'];

          $this->data['main_content_view']=$this->load->view('backend/staff/acttab.php',$wages_act_list_tab, TRUE);
          //print_r($wages_act_list_edit['wages_act_data'][0]['dob']);
          $this->data['title']="Compliance by LRD on Minimum Wages Act";
          $this->data['main_content_view'] = $this->load->view('backend/staff/wages_edit.php',$wages_act_list_edit,TRUE);
            $this->generate_data('backend/index', $this->data );
        }
        function wages_act_update($param1 = '', $param2 = '') {

        	if ($this->session->userdata('staff_login') != 1)
        		{
        			$this->session->set_userdata('last_page' , current_url());
        			redirect(base_url(), 'refresh');
        		}
            $ses_ids=$this->session->userdata('login_user_id');
            $this->load->model('wages_act_model');
                if ($param1 == 'create') {
                    $this->wages_act_model->create_wagesact($param2);

        		  }

          }
		  //code by dipti
		  public function wages_amount($val){
			  
			$val = $this->input->post(values);
			 //echo $val;exit;
			  $this->load->model('wages_act_model');
			  //$wages_amount['wages_amount']=$this->wages_act_model->get_wages_amount($val);
			  //print_r($wages_amount['wages_amount']);
			  echo json_encode($this->wages_act_model->get_wages_amount($val));
			  
		  }
		  

}
