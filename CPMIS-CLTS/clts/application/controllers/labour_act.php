<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>


<?php
/*
*This class is for the labour act
*By Godti Satyanarayan
*
*/
class Labour_act extends MY_Controller
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
            $this->load->model('labour_act_model');
            //To get the account_role_id
            $role=$this->labour_act_model->get_role_id($ses_ids);
            foreach($role as $rolep):
              $roles_id=$rolep['account_role_id'];
              $dist_id=$rolep['district_id'];
              $stat_id=$rolep['state_id'];
            endforeach;
            
            $labour_act_list=array();
            $labour_act_list["details_url"]=base_url()."index.php?child_rescued_list/view/";
            //added on 11-10-17 for labour act
            $labour_act_list["details_labour_url"]=base_url()."index.php?child_rescued_list/viewlabour/";
            //ended on 11-10-17 for labour act
            $labour_act_list["edit_url"]=base_url()."index.php?labour_act/edit/";
            $labour_act_list["child_search_view_url"]=base_url()."index.php?labour_act/child_search_view/";
            $labour_act_list['counter']=1;
            $labour_act_list['role_id']=$roles_id;
            $labour_act_list['labour_act_data']=$this->labour_act_model->get_labour_act_data($roles_id,$dist_id);

            $this->data['title']="Compliance by LRD under CLPRA/Apex Court";
            $this->data['main_content_view'] = $this->load->view('backend/staff/labour_act_list.php',$labour_act_list, TRUE);
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
          $this->load->model('labour_act_model');
          
          //To get the account_role_id
          $role=$this->labour_act_model->get_role_id($ses_ids);
          foreach($role as $rolep):
            $roles_id=$rolep['account_role_id'];
            $dist_id=$rolep['district_id'];
            $stat_id=$rolep['state_id'];
          endforeach;
          $labour_act_list_edit=array();
          $labour_act_list_edit["details_url"]=base_url()."index.php?child_rescued_list/view/";
          $labour_act_list_edit["edit_url"]=base_url()."index.php?labour_act/edit/";
          $labour_act_list_edit["child_search_view_url"]=base_url()."index.php?labour_act/child_search_view/";
          $labour_act_list['counter']=1;
          $labour_act_list_edit['role_id']=$roles_id;
          $labour_act_list_edit['labour_act_data']=$this->labour_act_model->get_labour_act_child($param1, $ses_ids);
          $labour_act_list_edit['districts']=$this->labour_act_model->get_districts($stat_id);
          $labour_act_list_edit['dob']=  $labour_act_list_edit['labour_act_data'][0]['dob'];
          $labour_act_list_edit['date_rescued']=  $labour_act_list_edit['labour_act_data'][0]['idate_of_rescue'];
          // data to tabs
          $labour_act_list_tab['lab_tab_name']="Compliance by LRD";
          $labour_act_list_tab['lab_tab_link']=base_url()."index.php?labour_act/edit/".$labour_act_list_edit['labour_act_data'][0]['child_id'];
          $labour_act_list_tab['lab_tab_active']=true;
          $labour_act_list_tab['wag_tab_name']="Compliance by LRD on Minimum Wages Act";
          $labour_act_list_tab['wag_tab_link']=base_url()."index.php?wages_act/edit/".$labour_act_list_edit['labour_act_data'][0]['child_id'];
          $labour_act_list_tab['wag_tab_active']=false;
          $labour_act_list_tab['ipc_tab_name']="IPC Act Detail";
          $labour_act_list_tab['ipc_tab_link']=base_url()."index.php?ipc_act/edit/".$labour_act_list_edit['labour_act_data'][0]['child_id'];
          $labour_act_list_tab['ipc_tab_active']=false;
          $labour_act_list_tab['other_tab_name']="Other Laws";
          $labour_act_list_tab['other_tab_link']=base_url()."index.php?other_laws/edit/".$labour_act_list_edit['labour_act_data'][0]['child_id'];
          $labour_act_list_tab['other_tab_active']=false;
		  $labour_act_list_tab['FIR_tab_name']="Upload FIR";
          $labour_act_list_tab['uplodfir_tab_link']=base_url()."index.php?uploadFIR/edit/".$labour_act_list_edit['labour_act_data'][0]['child_id'];
          $labour_act_list_tab['uplodfir_tab_active']=false;
		  
		  
          $labour_act_list_tab['pstatus']=  $labour_act_list_edit['labour_act_data'][0]['pstatus'];

          $this->data['main_content_view'] = $this->load->view('backend/staff/acttab.php',$labour_act_list_tab, TRUE);

          //print_r( );
          $this->data['title']="Compliance by LRD under CLPRA/Apex Court";
          $this->data['main_content_view'] = $this->load->view('backend/staff/labour_act_edit.php',$labour_act_list_edit, TRUE);
            $this->generate_data('backend/index', $this->data );
        }
        function labouract_update($param1 = '', $param2 = '') {

        	if ($this->session->userdata('staff_login') != 1)
        		{
        			$this->session->set_userdata('last_page' , current_url());
        			redirect(base_url(), 'refresh');
        		}
            $ses_ids=$this->session->userdata('login_user_id');
            $this->load->model('labour_act_model');
                if ($param1 == 'create') {
                    $this->labour_act_model->create_labouract($param2);
        		  }

          }
          function child_search_view($param1 = '', $param2 = '') {

        		if ($this->session->userdata('staff_login') != 1)
        		{
        			$this->session->set_userdata('last_page' , current_url());
        			redirect(base_url(), 'refresh');
        		}
                $this->data['title']="Child's Detail Information";
        		    $page_data['child_data']	=	$this->db->get_where('child_basic_detail' , array('child_id' => $param1))->result_array();
                $this->data['main_content_view'] = $this->load->view('backend/staff/child_search_view.php',$page_data, TRUE);

                  $this->generate_data('backend/index', $this->data );
            }
}
