<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>


<?php
/*
*This class is to add education details of children
*By Godti Satyanarayan
*
*/

class Family_add extends MY_Controller
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
            $this->load->model('family_add_model');
            //To get the account_role_id
            $role=$this->family_add_model->get_role_id($ses_ids);
            foreach($role as $rolep):
              $roles_id=$rolep['account_role_id'];
              $dist_id=$rolep['district_id'];
              $state_id=$rolep['state_id'];
            endforeach;
            $family_add_list=array();
            $family_add_list["details_url"]=base_url()."index.php?child_rescued_list/view/";
            $family_add_list["edit_url"]=base_url()."index.php?family_add/edit/";
            $family_add_list['counter']=1;
            $family_add_list['role_id']=$roles_id;
            $family_add_list['family_add_data']=$this->family_add_model->get_family_list_data($roles_id,$dist_id);
            $this->data['title']="Family Details";

            $this->data['main_content_view'] = $this->load->view('backend/staff/family_list.php',$family_add_list, TRUE);
            $this->generate_data('backend/index', $this->data );

        }
        function edit($param1 = '', $param2 = '') {

      		if ($this->session->userdata('staff_login') != 1)
      		{
      			$this->session->set_userdata('last_page' , current_url());
      			redirect(base_url(), 'refresh');
      		}
          $ses_ids=$this->session->userdata('login_user_id');
          $this->load->model('family_add_model');
          //To get the account_role_id
          $role=$this->family_add_model->get_role_id($ses_ids);
          foreach($role as $rolep):
            $roles_id=$rolep['account_role_id'];
            $dist_id=$rolep['district_id'];
            $state_id=$rolep['state_id'];
          endforeach;
          $family_add=array();
          $family_add['family_add_data']=$this->family_add_model->get_family_data($param1);
          //tab database// data to tabs
             //code by dipti
			 $family_add['bank_account']=$this->family_add_model->bank_account_details($param1);
			 //print_r($tab_data['bank_account_details']);exit;
          $tab_data['edu_tab_name']="Education";
          $tab_data['edu_tab_link']=base_url()."index.php?educational_add/edit/".$family_add['family_add_data'][0]['child_id'];
          $tab_data['edu_tab_active']=false;
          $tab_data['hel_tab_name']="Health";
          $tab_data['hel_tab_link']=base_url()."index.php?health_add/edit/".$family_add['family_add_data'][0]['child_id'];
          $tab_data['hel_tab_active']=false;
          $tab_data['fam_tab_name']="Family";
          $tab_data['fam_tab_link']=base_url()."index.php?family_add/edit/".$family_add['family_add_data'][0]['child_id'];
          $tab_data['fam_tab_active']=true;
          $tab_data['eco_tab_name']="Economy";
          $tab_data['eco_tab_link']=base_url()."index.php?economy_add/edit/".$family_add['family_add_data'][0]['child_id'];
          $tab_data['eco_tab_active']=false;
          $tab_data['rea_tab_name']="Reasons";
          $tab_data['rea_tab_link']=base_url()."index.php?reasons_add/edit/".$family_add['family_add_data'][0]['child_id'];
          $tab_data['rea_tab_active']=false;
          $tab_data['sts_tab_name']="Status";
          $tab_data['sts_tab_link']=base_url()."index.php?status_add/edit/".$family_add['family_add_data'][0]['child_id'];
          $tab_data['sts_tab_active']=false;
          $tab_data['hab_tab_name']="Habit";
          $tab_data['hab_tab_link']=base_url()."index.php?habit_add/edit/".$family_add['family_add_data'][0]['child_id'];
          $tab_data['hab_tab_active']=false;
          $tab_data['soc_tab_name']="Social";
          $tab_data['soc_tab_link']=base_url()."index.php?social_add/edit/".$family_add['family_add_data'][0]['child_id'];
          $tab_data['soc_tab_active']=false;
          $this->data['main_content_view'] = $this->load->view('backend/staff/tabmenu.php',$tab_data, TRUE);

          $this->data['title']="Family Details";
          $this->data['main_content_view'] = $this->load->view('backend/staff/family_edit.php',$family_add, TRUE);
          $this->generate_data('backend/index', $this->data );

        }

        public function family($param1 = '', $param2 = '') {
      		if ($this->session->userdata('staff_login') != 1)
      		{
      			$this->session->set_userdata('last_page' , current_url());
      			redirect(base_url(), 'refresh');
      		}
          $ses_ids=$this->session->userdata('login_user_id');
          $this->load->model('family_add_model');
              if ($param1 == 'create')
                  $this->family_add_model->family_add($param2);

          }
		  
		   //code by dipti
		  public function fetch_bank_account($valueSelected){
			  
			$value = $this->input->post(valueSelected);
			//echo $value;exit;
			  $this->load->model('family_add_model');
			  echo json_encode($this->family_add_model->bank_account($value));
			  
		  } 
		  public function bank_details_update($bank_name,$bank_address,$ifsc_code,$child_update_id){
			  //echo "ffff";exit;
			  
			 $update_bank['bank_name'] = $this->input->post(bank_name);
             $update_bank['bank_address'] = $this->input->post(bank_address);
             $update_bank['bank_ifsc_code'] = $this->input->post(ifsc_code); 			  
			 $child_update_id = $this->input->post(child_update_id);
              $this->load->model('family_add_model');
          echo ($this->family_add_model->bank_update($update_bank,$child_update_id));

			  
		  }
		  
}
