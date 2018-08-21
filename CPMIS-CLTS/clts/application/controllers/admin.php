<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');



class Admin extends MY_Controller {

    function __construct() {
      //parent::__construct();
      parent:: __construct();
      /*cache control*/
      $this->output->set_header('Last-Modified: ' . gmdate("D, d M Y H:i:s") . ' GMT');
      $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
      $this->output->set_header('Pragma: no-cache');
      $this->load->library('session');
      $this->load->database();

    }

    /***default function, redirects to login page if no admin logged in yet** */

    public function index() {

        if ($this->session->userdata('admin_login') != 1)
            redirect(base_url() . 'index.php?login', 'refresh');
        if ($this->session->userdata('admin_login') == 1)
            redirect(base_url() . 'index.php?admin/staff', 'refresh');


    }




	 function getdist($state_id) {
		 $child_dist		= $this->db->select('*')->where('parent_id',$state_id)->order_by('area_name', 'asc')->group_by('area_name')->get('child_area_detail')->result_array();
        $lst="{  'choices': { ";
      $lst.= $state_id.": {";

	   $lst.= "	  text: [";
		foreach($child_dist as $crow2):
		 $lst.=	"'".$crow2['area_name']."',";
		 endforeach;
		 $lst.=	" ],";
	   $lst.= "	 value: [";
		  foreach($child_dist as $crow3):
		 $lst.=	"'".$crow3['area_id']."',";
		 endforeach;
	    $lst.=	" ]";
	   $lst.="}";
     $lst.="} }";
	  echo $lst;
    }

	 function getdist_within($state_id) {
		 $child_dist		= $this->db->select('*')->where('parent_id',$state_id)->order_by('area_name', 'asc')->group_by('area_name')->get('child_area_detail')->result_array();
        $lst="{  'within_district': { ";
      $lst.= $state_id.": {";
	   $lst.= "	  text: [";
		foreach($child_dist as $crow2):
		 $lst.=	"'".$crow2['area_name']."',";
		 endforeach;
		 $lst.=	" ],";
	   $lst.= "	 value: [";
		  foreach($child_dist as $crow3):
		 $lst.=	"'".$crow3['area_id']."',";
		 endforeach;
	    $lst.=	" ]";
	   $lst.="}";
     $lst.="} }";
	  echo $lst;
    }
	function getdist_outside($state_id) {
		 $child_dist		= $this->db->select('*')->where('parent_id',$state_id)->order_by('area_name', 'asc')->group_by('area_name')->get('child_area_detail')->result_array();
        $lst="{  'outside_district': { ";
      $lst.= $state_id.": {";
	   $lst.= "	  text: [";
		foreach($child_dist as $crow2):
		 $lst.=	"'".$crow2['area_name']."',";
		 endforeach;
		 $lst.=	" ],";
	   $lst.= "	 value: [";
		  foreach($child_dist as $crow3):
		 $lst.=	"'".$crow3['area_id']."',";
		 endforeach;
	    $lst.=	" ]";
	   $lst.="}";
     $lst.="} }";
	  echo $lst;
    }

	 function getblock($dist_id) {
		 $child_block		= $this->db->select('*')->where('parent_id',$dist_id)->order_by('area_name', 'asc')->group_by('area_name')->get('child_area_detail')->result_array();
        $lst="{  'block': { ";
      $lst.= $dist_id.": {";
	   $lst.= "	  text: [";
		foreach($child_block as $crow2):
		 $lst.=	"'".$crow2['area_name']."',";
		 endforeach;
		 $lst.=	" ],";
	   $lst.= "	 value: [";
		  foreach($child_block as $crow3):
		 $lst.=	"'".$crow3['area_id']."',";
		 endforeach;
	    $lst.=	" ]";
	   $lst.="}";
     $lst.="} }";
	  echo $lst;
    }
	//ccci name

	function getcci($dist_id) {
		 $cci_name= $this->db->select('*')->where('area_id',$dist_id)->get('cci_area')->result_array();
        $lst="{  'ccis_name': { ";
      $lst.= $dist_id.": {";
	   $lst.= "	  text: [";
		foreach($cci_name as $crow2):
		 $lst.=	"'".$crow2['area_name']."',";
		 endforeach;
		 $lst.=	" ],";
	   $lst.= "	 value: [";
		  foreach($cci_name as $crow3):
		 $lst.=	"'".$crow3['id']."',";
		 endforeach;
	    $lst.=	" ]";
	   $lst.="}";
     $lst.="} }";
	  echo $lst;
    }
	//end
	function getblock_outside($dist_id) {
		 $child_block		= $this->db->select('*')->where('parent_id',$dist_id)->order_by('area_name', 'asc')->group_by('area_name')->get('child_area_detail')->result_array();
        $lst="{  'outside_block': { ";
      $lst.= $dist_id.": {";
	   $lst.= "	  text: [";
		foreach($child_block as $crow2):
		 $lst.=	"'".$crow2['area_name']."',";
		 endforeach;
		 $lst.=	" ],";
	   $lst.= "	 value: [";
		  foreach($child_block as $crow3):
		 $lst.=	"'".$crow3['area_id']."',";
		 endforeach;
	    $lst.=	" ]";
	   $lst.="}";
     $lst.="} }";
	  echo $lst;
    }

	function getblock_within($dist_id) {
		 $child_block		= $this->db->select('*')->where('parent_id',$dist_id)->order_by('area_name', 'asc')->group_by('area_name')->get('child_area_detail')->result_array();
        $lst="{  'within_block': { ";
      $lst.= $dist_id.": {";
	   $lst.= "	  text: [";
		foreach($child_block as $crow2):
		 $lst.=	"'".$crow2['area_name']."',";
		 endforeach;
		 $lst.=	" ],";
	   $lst.= "	 value: [";
		  foreach($child_block as $crow3):
		 $lst.=	"'".$crow3['area_id']."',";
		 endforeach;
	    $lst.=	" ]";
	   $lst.="}";
     $lst.="} }";
	  echo $lst;
    }
 function getdist_finalorder($state_id) {
		 $child_dist= $this->db->select('*')->where('parent_id',$state_id)->order_by('area_name', 'asc')->group_by('area_name')->get('child_area_detail')->result_array();
        $lst="{  'dist': { ";
      $lst.= $state_id.": {";
	   $lst.= "	  text: [";
		foreach($child_dist as $crow2):
		 $lst.=	"'".$crow2['area_name']."',";
		 endforeach;
		 $lst.=	" ],";
	   $lst.= "	 value: [";
		  foreach($child_dist as $crow3):
		 $lst.=	"'".$crow3['area_id']."',";
		 endforeach;
	    $lst.=	" ]";
	   $lst.="}";
     $lst.="} }";
	  echo $lst;
    }

    /* Project category */

    function project_category($param1 = '', $param2 = '') {
        if ($this->session->userdata('admin_login') != 1) {
            $this->session->set_userdata('last_page', current_url());
            redirect(base_url(), 'refresh');
        }

        if ($param1 == 'create')
            $this->crud_model->create_project_category();

        if ($param1 == 'edit')
            $this->crud_model->update_project_category($param2);

        if ($param1 == 'delete')
            $this->crud_model->delete_project_category($param2);

        $page_data['page_name'] = 'project_category';
        $page_data['page_title'] = get_phrase('manage_project_category');
        $this->load->view('backend/index', $page_data);
    }

    function reload_project_category_list() {
        $this->load->view('backend/admin/project_category_list');
    }

    /* 	staff management */
    function staff($param1 = '', $param2 = '') {

      if ($this->session->userdata('admin_login') != 1) {
          /// $this->session->set_userdata('last_page', current_url());
          redirect(base_url(), 'refresh');
      }

          $this->load->model("staff_model");
        if ($param1 == 'create')
        {
            $this->staff_model->create_staff();
        }
        else if ($param1 == 'edit') 
        {
            $this->staff_model->update_staff($param2);

        }
        else if ($param1 == 'delete')
        {
            $this->staff_model->delete_staff($param2);

        }
        else{
          //new code by godti satyanarayan
           $ses_ids=$this->session->userdata('login_user_id');
            $staff_list["profile_url"]=base_url()."index.php?modal/popup/staff_profile/";
            $staff_list["edit_url"]=base_url()."index.php?modal_staff/popup/staff_edit/";
            $staff_list["delete_url"]=base_url()."index.php?admin/staff/delete/";
            $staff_list['default']="uploads/user.jpg";
            $staff_list['path']="./uploads/staff_image/";
            $staff_list['counter']=1;
            $staff_list['data_list']=$this->staff_model->get_staff_list();
            $url=base_url().'index.php?modal_staff/popup/staff_add/';
            $staff_list['add_button']='<a href="javascript:;" onclick="showAjaxModal1(\''.$url.'\');"
                class="btn btn-primary pull-right">
                  Add New Staff
                </a>';
            $staff_list['page_name'] = 'staff';
            $staff_list['page_title'] = get_phrase('manage_staff');
            $this->data['title']="Manage Staff ";

          $this->data['main_content_view'] = $this->load->view('backend/admin/staff_list.php',$staff_list, TRUE);
          header_remove('Set-Cookie');//to remove the cookie for loading big data
        $this->generate_data('backend/index', $this->data );
        } 
		/*
		 $ses_ids=$this->session->userdata('login_user_id');

            $staff_list["profile_url"]=base_url()."index.php?modal/popup/staff_profile/";
            $staff_list["edit_url"]=base_url()."index.php?modal_staff/popup/staff_edit/";
            $staff_list["delete_url"]=base_url()."index.php?admin/staff/delete/";
            $staff_list['default']="uploads/user.jpg";
            $staff_list['path']="./uploads/staff_image/";
            $staff_list['counter']=1;
            $staff_list['data_list']=$this->staff_model->get_staff_list();
            $url=base_url().'index.php?modal_staff/popup/staff_add/';
            $staff_list['add_button']='<a href="javascript:;" onclick="showAjaxModal(\''.$url.'\');"
                class="btn btn-primary pull-right">
                    <i class="entypo-user-add"></i>
                  Add New Staff
                </a>';
            $staff_list['page_name'] = 'staff';
            $staff_list['page_title'] = get_phrase('manage_staff');
            $this->data['title']="Manage Staff ";

          $this->data['main_content_view'] = $this->load->view('backend/admin/staff_list.php',$staff_list, TRUE);
          header_remove('Set-Cookie');//to remove the cookie for loading big data
        $this->generate_data('backend/index', $this->data ); } */


      }

    function reload_staff_list() {
      $this->load->model("staff_model");
      $staff_list["profile_url"]=base_url()."index.php?modal/popup/staff_profile/";
      $staff_list["edit_url"]=base_url()."index.php?modal_staff/popup/staff_edit/";
      $staff_list["delete_url"]=base_url()."index.php?admin/staff/delete/";
      $staff_list['counter']=1;

      $staff_list['data_list']=$this->staff_model->get_staff_list();
      //print_r($staff_list['data_list']);
      $staff_list['page_name'] = 'staff';
      $staff_list['page_title'] = get_phrase('manage_staff');
      $this->data['title']="Manage Staff ";

	  $this->load->view('backend/admin/staff_list.php',$staff_list);
	  header_remove('Set-Cookie');//to remove the cookie for loading big data
    }

    /* 	account_role management */

   
    function account_role($param1 = '', $param2 = '') {
        if ($this->session->userdata('admin_login') != 1) {
            $this->session->set_userdata('last_page', current_url());
            redirect(base_url(), 'refresh');
        }
        $this->load->model('account_role_model');
        if ($param1 == 'create')
            $this->account_role_model->create_account_role();

        if ($param1 == 'edit')
            $this->account_role_model->update_account_role($param2);

        if ($param1 == 'delete')
            $this->account_role_model->delete_account_role($param2);

            $url=base_url().'index.php?modal/popup/account_role_add/';
            $account_role['add_role_button']='<a href="javascript:;" onclick="showAjaxModal2(\''.$url.'\');"
                class="btn btn-primary pull-right">
                  Add New Account Role
                </a>';

        $account_role["edit_url"]=base_url()."index.php?modal/popup/account_role_edit//";
        $account_role["delete_url"]=base_url()."index.php?admin/account_role/delete/";
        $account_role['page_name'] = 'account_role';
        $account_role['page_title'] = get_phrase('manage_account_role');
        $account_role['count'] = 1;
        $account_role['account_roles']	=	$this->account_role_model->get_account_role();

        $this->data['title']="Manage Account Role ";
      $this->data['main_content_view'] = $this->load->view('backend/admin/account_role_list.php',$account_role,TRUE);
          header_remove('Set-Cookie');
      $this->generate_data('backend/index', $this->data );

    }

    function reload_account_role_list() {

        $this->load->model("account_role_model");
        $account_role["edit_url"]=base_url()."index.php?modal/popup/account_role_edit//";
        $account_role["delete_url"]=base_url()."index.php?admin/account_role/delete/";
        $account_role['page_name'] = 'account_role';
        $account_role['page_title'] = get_phrase('manage_account_role');
        $account_role['count'] = 1;
        $account_role['account_roles']	=	$this->account_role_model->get_account_role();

        $this->data['title']="Manage Account Role ";

       $this->load->view('backend/admin/account_role_list.php',$account_role);
       header_remove('Set-Cookie');

    }
    function system_settings($param1 = '', $param2 = '', $param3 = '') {
        if ($this->session->userdata('admin_login') != 1)
            redirect(base_url() . 'index.php?login', 'refresh');

        if ($param1 == 'do_update') {
            $this->crud_model->update_system_settings();
            $this->session->set_flashdata('flash_message', get_phrase('settings_updated'));
            redirect(base_url() . 'index.php?admin/system_settings/', 'refresh');
        }
        if ($param1 == 'upload_logo') {
            move_uploaded_file($_FILES['userfile']['tmp_name'], 'uploads/logo.png');
            $this->session->set_flashdata('flash_message', get_phrase('settings_updated'));
            redirect(base_url() . 'index.php?admin/system_settings/', 'refresh');
        }
        $page_data['page_name'] = 'system_settings';
        $page_data['page_title'] = get_phrase('system_settings');
        $page_data['settings'] = $this->db->get('settings')->result_array();
        $this->load->view('backend/index', $page_data);
    }

    /*     * ****MANAGE OWN PROFILE AND CHANGE PASSWORD** */

    function manage_profile($param1 = '', $param2 = '', $param3 = '') {
        if ($this->session->userdata('admin_login') != 1)
            redirect(base_url() . 'index.php?login', 'refresh');

        if ($param1 == 'update_profile_info') {
            $data['name'] = $this->input->post('name');
            $data['email'] = $this->input->post('email');
            $admin_id = $this->session->userdata('login_user_id');

            $this->db->where('admin_id', $admin_id);
            $this->db->update('admin', $data);
            move_uploaded_file($_FILES["image"]["tmp_name"], "uploads/admin_image/" . $admin_id . '.jpg');

            //$this->session->set_flashdata('flash_message_updated', get_phrase('account_updated'));
            //redirect(base_url() . 'index.php?admin/manage_profile/', 'refresh');
            echo 1;

        }
        if ($param1 == 'change_password') {
            $current_password_input = sha1($this->input->post('password'));
            $new_password = sha1($this->input->post('new_password'));
            $confirm_new_password = sha1($this->input->post('confirm_new_password'));

            $current_password_db = $this->db->get_where('admin', array('admin_id' =>
                        $this->session->userdata('login_user_id')))->row()->password;

            if ($current_password_db == $current_password_input && $new_password == $confirm_new_password) {
                $this->db->where('admin_id', $this->session->userdata('login_user_id'));
                $this->db->update('admin', array('password' => $new_password));
				echo 1;
            }
			else
				echo 0;
        }
		else if($param1 == ''){
          $page_data['admin_path']="./uploads/admin_image/";

          $page_data['default']="./uploads/user.jpg";
        $page_data['page_name'] = 'manage_profile';
        $page_data['page_title'] = get_phrase('manage_profile');
        $page_data['edit_data'] = $this->db->get_where('admin', array('admin_id' => $this->session->userdata('login_user_id')))->result_array();
      $this->data['title']="Manage Profile";
    $this->data['main_content_view'] = $this->load->view('backend/admin/manage_profile.php',$page_data,TRUE);
    $this->generate_data('backend/index', $this->data );
    }}
	
	// add police station
	    function add_policestation() {
				$page_data['page_name'] = 'add_policestation';
				$page_data['page_title'] = get_phrase('add_policestation');
								 $this->data['title']="Add police station ";

				//$page_data['settings'] = $this->db->get('settings')->result_array();
				$this->data['main_content_view'] = $this->load->view('backend/admin/add_policestation.php',$page_data,TRUE);
				$this->generate_data('backend/index', $this->data );
		}
		
	//insert data from database
	function policestation_list($param1 = '',$param2 = ''){	
	
			$this->load->model('model_policestation');		
			if ($param1 == 'create')
			{
				$this->model_policestation->create_policestation();
			}
			if ($param1 == 'edit')
			{	
			 $this->model_policestation->update_policestation($param2);
			}
					
		
				if ($this->session->userdata('admin_login') != 1) {
				/// $this->session->set_userdata('last_page', current_url());
				redirect(base_url(), 'refresh');
					}
				///$ps_list['dataps_list']=$this->model_policestation->get_ps_list();
			
				$ps_list["edit_url"]=base_url()."index.php?modal/popup/edit_policestation/";
				
				$url=base_url().'index.php?modal/popup/add_policestation/';
				$ps_list['add_button']='<a href="javascript:;" onclick="showAjaxModal(\''.$url.'\');"
                class="btn btn-primary pull-right">
                    <i></i>
                  Add New Police station
                </a>';
				$ps_list['page_name'] = 'manage_police_station';
				$ps_list['page_title'] = get_phrase('manage_police_station');
			    $this->data['title']="Manage Police Station ";
				
					 if ($_SERVER['REQUEST_METHOD'] == 'POST'){
						$dist=$_POST['district'];
						$ps_list['data_list']=$this->model_policestation->get_psdetails_blockid($dist);
						$ps_list['selected_dist']=$dist;
						
					}
					else{
						$dist="IND010007";
						$ps_list['data_list']=$this->model_policestation->get_psdetails_blockid($dist);
						$ps_list['selected_dist']=$dist;
					}
				$ps_list['district_list']=$this->model_policestation->get_psdistricts_list("IND010");
				 //load data to form filter
			     $ps_list['form_filter'] = $this->load->view('backend/admin/form_filter.php',$ps_list,TRUE);
				 //load data to police station list page
				
				$this->data['main_content_view'] = $this->load->view('backend/admin/policestation_list.php',$ps_list,TRUE);
				$this->generate_data('backend/index', $this->data );


			}
			
			  function reload_policestation_list() {
				
					$this->load->model("model_policestation");
					$policestation_list["profile_url"]=base_url()."index.php?modal/popup/policestation_list/";
					$policestation_list["edit_url"]=base_url()."index.php?modal/popup/edit_policestation/";
					$policestation_list['counter']=1;
					//$policestation_list['data_list']=$this->model_policestation->get_ps_list();
					//print_r($policestation_list['data_list']);
					$policestation_list['page_name'] = 'Police_station';
					$policestation_list['page_title'] = get_phrase('manage_Police_station');
					$this->data['title']="Manage Police_station ";
					
					
					if ($_SERVER['REQUEST_METHOD'] == 'POST'){
						$dist=$_POST['district'];
						$policestation_list['data_list']=$this->model_policestation->get_psdetails_blockid($dist);
						$policestation_list['selected_dist']=$dist;
					}
					else{
						$dist="IND010007";
						$policestation_list['data_list']=$this->model_policestation->get_psdetails_blockid($dist);
						//$policestation_list['selected_dist']=$dist;
					   //$policestation_list['district_list']=$this->model_policestation->get_psdistricts_list("IND010");

						}
 					//print_r($policestation_list['data_list']) ;			
				   $this->load->view('backend/admin/policestation_list.php',$policestation_list);
					header_remove('Set-Cookie');//to remove the cookie for loading big data
				}
		
		//scheme list
		 function scheme_list($param1 = '', $param2 = '') 
			{
				 if ($this->session->userdata('admin_login') != 1) {
					  /// $this->session->set_userdata('last_page', current_url());
					  redirect(base_url(), 'refresh');
				  }
					else{
					$this->load->model('model_scheme_list');
					 if ($param1 == 'create')
					{
						$this->model_scheme_list->create_scheme();
						
					}
					   if ($param1 == 'edit') 
						{
							$this->model_scheme_list->update_schemelist($param2);
						}
					
					$sh_list['data_list']=$this->model_scheme_list->get_scheme_list();
					
					$sh_list["edit_url"]=base_url()."index.php?modal/popup/edit_scheme/";

					$url=base_url().'index.php?modal/popup/add_scheme/';
					$sh_list['add_button']='<a href="javascript:;" onclick="showAjaxModal(\''.$url.'\');"
					class="btn btn-primary pull-right">
						<i></i>
					  Add New Scheme
					</a>';
					$sh_list['page_name'] = 'manage_scheme';
					$sh_list['page_title'] = get_phrase('manage_scheme');
					//$page_data['settings'] = $this->db->get('settings')->result_array();
					 $this->data['title']="Manage scheme ";

					$this->data['main_content_view'] = $this->load->view('backend/admin/scheme_list.php',$sh_list,TRUE);
					$this->generate_data('backend/index', $this->data );
					
				}
			}
			 function reload_scheme_list() {
					  $this->load->model("model_scheme_list");
					  //$scm_list["edit_url"]=base_url()."index.php?modal/popup/staff_edit/";
					  $scm_list["edit_url"]=base_url()."index.php?modal/popup/edit_scheme/";
					  $scm_list['counter']=1;
					  $scm_list['data_list']=$this->model_scheme_list->get_scheme_list();
					  //print_r($staff_list['data_list']);
					  $scm_list['page_name'] = 'scheme';
					  $scm_list['page_title'] = get_phrase('manage_scheme');
					  $this->data['title']="Manage Scheme ";
					$this->load->view('backend/admin/scheme_list.php',$scm_list);
				  header_remove('Set-Cookie');//to remove the cookie for loading big data
    }
	
	
	//ipc section list
		 function ipc_section($param1 = '', $param2 = '', $param3 = '') 
			{
				 if ($this->session->userdata('admin_login') != 1) {
					  /// $this->session->set_userdata('last_page', current_url());
					  redirect(base_url(), 'refresh');
				  }
				
					$this->load->model('model_ipc_section');
					if ($param1 == 'create')
					{
						$this->model_ipc_section->create_ipc();
					}
					if ($param1 == 'edit') 
					{
						$this->model_ipc_section->update_ipc($param2);
					}
					if($this->input->post('rng'))
					{
					   
					   $ipc_list['rngname'] = $this->input->post('rng');

					}
					else{
					$ipc_list['rngname']="";
					}
					$ipc_list['data_list']=$this->model_ipc_section->get_ipc_list();					
										
					$ipc_list["editipc_url"]=base_url()."index.php?modal/popup/edit_ipc/";
					$url=base_url().'index.php?modal/popup/add_ipc/';
					$ipc_list['add_button']='<a href="javascript:;" onclick="showAjaxModal(\''.$url.'\');"
					class="btn btn-primary pull-right">
						<i></i>
					  Add IPC Section
					</a>';
					$ipc_list['page_name'] = 'ipc_sections';
					$ipc_list['page_title'] = get_phrase('ipc_sections');
					//$page_data['settings'] = $this->db->get('settings')->result_array();
					 $this->data['title']="Manage IPC ";
					 $ipc_list['form_filteripc'] = $this->load->view('backend/admin/form_filteripc.php',$ipc_list,TRUE);

					$this->data['main_content_view'] = $this->load->view('backend/admin/ipc_section.php',$ipc_list,TRUE);
					$this->generate_data('backend/index', $this->data );
					
					
					
				
			}
			
			 function reload_ipc_section() {
				  
				  $this->load->model("model_ipc_section");
					$ipc_list["editipc_url"]=base_url()."index.php?modal/popup/edit_ipc/";
					$ipc_list['counter']=1;

					$ipc_list['data_list']=$this->model_ipc_section->get_ipc_list();
					//print_r($policestation_list['data_list']);
					$ipc_list['page_name'] = 'ipc_section';
					$ipc_list['page_title'] = get_phrase('manage_ipc_section');
					$this->data['title']="Manage Ipc section ";

					$this->load->view('backend/admin/ipc_section.php',$ipc_list);
					header_remove('Set-Cookie');//to remove the cookie for loading big data

				  }
	//wages list
	//ipc section list
		 function wages($param1 = '', $param2 = '') 
			{
					if ($this->session->userdata('admin_login') != 1) {
				/// $this->session->set_userdata('last_page', current_url());
				redirect(base_url(), 'refresh');
					}
					$this->load->model('model_wages');
					 if ($param1 == 'create')
					{
						$this->model_wages->create_wages();
					}
					 if ($param1 == 'edit') 
						{
							$this->model_wages->update_wages($param2);
						}
						
					$wag_list['data_list']=$this->model_wages->get_wages_list();					
					$wag_list["editwages_url"]=base_url()."index.php?modal/popup/wages_edit/";
					$url=base_url().'index.php?modal/popup/wages_add/';
					$wag_list['add_button']='<a href="javascript:;" onclick="showAjaxModal(\''.$url.'\');"
					class="btn btn-primary pull-right">
						<i></i>
					  Add Wages
					</a>';
					$wag_list['page_name'] = 'wages';
					$wag_list['page_title'] = get_phrase('wages');
					//$page_data['settings'] = $this->db->get('settings')->result_array();
					 $this->data['title']="Manage Wages ";
					$this->data['main_content_view'] = $this->load->view('backend/admin/wages.php',$wag_list,TRUE);
					$this->generate_data('backend/index', $this->data );	
			}
			
			 function reload_wages() {
				  
				  $this->load->model("model_wages");
					$ipc_list["editwages_url"]=base_url()."index.php?modal/popup/wages_edit/";
					$ipc_list['counter']=1;

					$ipc_list['data_list']=$this->model_wages->get_wages_list();
					//print_r($policestation_list['data_list']);
					$ipc_list['page_name'] = 'wages';
					$ipc_list['page_title'] = get_phrase('manage_wages');
					$this->data['title']="Manage wages ";

					$this->load->view('backend/admin/wages.php',$ipc_list);
					header_remove('Set-Cookie');//to remove the cookie for loading big data

				  }
				  
	//add caste
		 function caste($param1 = '', $param2 = '') 
			{
					if ($this->session->userdata('admin_login') != 1) {
				/// $this->session->set_userdata('last_page', current_url());
				redirect(base_url(), 'refresh');
					}
					
					$this->load->model('model_caste');
					 if ($param1 == 'create')
					{
						$this->model_caste->create_caste();
					}
					 if ($param1 == 'edit') 
						{
							$this->model_caste->update_caste($param2);
						}
						
					$caste_list['data_list']=$this->model_caste->get_caste_list();					
					$caste_list["editcaste_url"]=base_url()."index.php?modal/popup/caste_edit/";
					$url=base_url().'index.php?modal/popup/caste_add/';
					$caste_list['add_button']='<a href="javascript:;" onclick="showAjaxModal(\''.$url.'\');"
					class="btn btn-primary pull-right">
						<i></i>
					  Add Caste
					</a>';
					$caste_list['page_name'] = 'caste';
					$caste_list['page_title'] = get_phrase('caste');
					//$page_data['settings'] = $this->db->get('settings')->result_array();
					 $this->data['title']="Manage caste ";
					$this->data['main_content_view'] = $this->load->view('backend/admin/caste.php',$caste_list,TRUE);
					$this->generate_data('backend/index', $this->data );	
			}
			
			function reload_caste() {
				  
				  $this->load->model("model_caste");
					$caste_list["editcaste_url"]=base_url()."index.php?modal/popup/caste_edit/";
					$caste_list['counter']=1;

					$caste_list['data_list']=$this->model_caste->get_caste_list();
					//print_r($policestation_list['data_list']);
					$caste_list['page_name'] = 'caste';
					$caste_list['page_title'] = get_phrase('manage_caste');
					$this->data['title']="Manage caste ";

					$this->load->view('backend/admin/caste.php',$caste_list);
					header_remove('Set-Cookie');//to remove the cookie for loading big data

				  }
	
	
				//add panchayat
		 function panchayat_name($param1 = '', $param2 = '') 
			{
					if ($this->session->userdata('admin_login') != 1) {
				/// $this->session->set_userdata('last_page', current_url());
				redirect(base_url(), 'refresh');
					}
					
					$this->load->model('model_panchayat_name');
					 if ($param1 == 'create')
					{
						$this->model_panchayat_name->create_panchayat();
					}
					 if ($param1 == 'edit') 
						{
							$this->model_panchayat_name->update_panchayat($param2);
						}
						
					$panchayat_list['data_list']=$this->model_panchayat_name->get_panchayat_list();					
					$panchayat_list["editpanchayat_url"]=base_url()."index.php?modal/popup/panchayat_edit/";
					$url=base_url().'index.php?modal/popup/panchayat_add/';
					$panchayat_list['add_button']='<a href="javascript:;" onclick="showAjaxModal(\''.$url.'\');"
					class="btn btn-primary pull-right">
						<i></i>
					  Add panchayat
					</a>';
					$panchayat_list['page_name'] = 'panchayat_name';
					$panchayat_list['page_title'] = get_phrase('panchayat_name');
					 $this->data['title']="Manage Panchayat ";
					  if ($_SERVER['REQUEST_METHOD'] == 'POST'){
						$district=$_POST['district'];
						$block=$_POST['block'];
						$panchayat_list['data_list']=$this->model_panchayat_name->get_psdetails_blockid($district,$block);
						$panchayat_list['selected_dist']=$district;
						$panchayat_list['blocknew_id']=$block;
						$panchayat_list['block_id']=$this->model_panchayat_name->get_psblocks_list($district);//get blocks

					}
					else{
						$district="IND010007";
						$block="IND010007005";
						$panchayat_list['data_list']=$this->model_panchayat_name->get_psdetails_blockid($district,$block);
						$panchayat_list['selected_dist']=$district;
						$panchayat_list['blocknew_id']=$block;
						$panchayat_list['block_id']=$this->model_panchayat_name->get_psblocks_list($district);//get blocks

					}
					 
					$panchayat_list['districtpn_list']=$this->model_panchayat_name->get_psdistricts_list("IND010");//get districts

					 $panchayat_list['filter_panchayat'] = $this->load->view('backend/admin/form_filterpanchayat.php',$panchayat_list,TRUE);

					$this->data['main_content_view'] = $this->load->view('backend/admin/panchayat_name.php',$panchayat_list,TRUE);
					$this->generate_data('backend/index', $this->data );	
			}
			
			function reload_panchayat() {
				  
				  $this->load->model("model_panchayat_name");
					$panchayat_list["editpanchayat_url"]=base_url()."index.php?modal/popup/panchayat_edit/";
					$panchayat_list['counter']=1;
					//$panchayat_list['data_list']=$this->model_panchayat_name->get_psdistricts_list("IND010");
					$panchayat_list['data_list']=$this->model_panchayat_name->get_panchayat_list("IND010007005");
					//print_r($policestation_list['data_list']);
					$panchayat_list['page_name'] = 'panchayat_name';
					$panchayat_list['page_title'] = get_phrase('panchayat_name');
					$this->data['title']="Panchayat Name";

					$this->load->view('backend/admin/panchayat_name.php',$panchayat_list);
					header_remove('Set-Cookie');//to remove the cookie for loading big data

				  }
				  
				  //pincode list 
				  function pincode_list($param1 = '', $param2 = '') 
					{
					if ($this->session->userdata('admin_login') != 1) {
						/// $this->session->set_userdata('last_page', current_url());
						redirect(base_url(), 'refresh');
							}
					
					$this->load->model('model_pincode_list');
					 if ($param1 == 'create')
					{
						$this->model_pincode_list->create_pincode();
					}
					 if ($param1 == 'edit') 
						{
							$this->model_pincode_list->update_pincode($param2);
						}
						
					$pincode_list['data_list']=$this->model_pincode_list->get_pincode_list();					
					$pincode_list["editpincode_url"]=base_url()."index.php?modal/popup/pincode_edit/";
					$url=base_url().'index.php?modal/popup/pincode_add/';
					$pincode_list['add_button']='<a href="javascript:;" onclick="showAjaxModal(\''.$url.'\');"
					class="btn btn-primary pull-right">
						<i></i>
					  Add pincode
					</a>';
					$pincode_list['page_name'] = 'pincode_list';
					$pincode_list['page_title'] = get_phrase('pincode');
					//$page_data['settings'] = $this->db->get('settings')->result_array();
					 $this->data['title']="Manage Pincode ";
					 if($_SERVER['REQUEST_METHOD'] == 'POST'){
					$dist=$_POST['district'];
					$pincode_list['datapn_list']=$this->model_pincode_list->get_pincodelist_data($dist);
					$pincode_list['selected_dist']=$dist;
					}
					else{
						$dist="IND010007";
						$pincode_list['datapn_list']=$this->model_pincode_list->get_pincodelist_data($dist);
						$pincode_list['selected_dist']=$dist;
					}
					$pincode_list['districtpin_list']=$this->model_pincode_list->get_pindistricts_list("IND010");

					//load data to form filter
					$pincode_list['form_filter'] = $this->load->view('backend/admin/form_pin_filter.php',$pincode_list,TRUE);
					$this->data['main_content_view'] = $this->load->view('backend/admin/pincode_list.php',$pincode_list,TRUE);
					header_remove('Set-Cookie');
					$this->generate_data('backend/index', $this->data );
					
			}
			
			function reload_pincode() {
				  
				  $this->load->model("model_pincode_list");
					$pincode_list["editpincode_url"]=base_url()."index.php?modal/popup/pincode_edit/";
					$pincode_list['counter']=1;
						$dist="IND010007";
						$pincode_list['datapn_list']=$this->model_pincode_list->get_pincodelist_data($dist);
					$pincode_list['districtpin_list']=$this->model_pincode_list->get_pindistricts_list("IND010");
					//print_r($policestation_list['data_list']);
					$pincode_list['page_name'] = 'pincode_list';
					$pincode_list['page_title'] = get_phrase('pincode');
					$this->data['title']="Manage pincode";

					$this->load->view('backend/admin/pincode_list.php',$pincode_list);
					header_remove('Set-Cookie');//to remove the cookie for loading big data

				  }
				  
	/*public function get_block_lists($district_id)
      {
        $block_id= $this->db->select('*')->where('parent_id',$district_id)->order_by('area_name', 'asc')->group_by('area_name')->get('child_area_detail')->result_array();

      }*/
		function getduplicat($name,$dist) {
				$dname=urldecode($name);
					$ngo_query=mysql_query("select * from police_stations where police_station_name='$dname' and district_id='$dist' ");
					  $count=mysql_num_rows($ngo_query) ; 
				echo  $count ;
					}
					}
