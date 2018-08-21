<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>


<?php
/*
*
*By Godti Satyanarayan
*
*/

class Manage_profile extends MY_Controller
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
          
          public function index($param1="",$param2="")
          {
          	
          	if ($this->session->userdata('staff_login') != 1)
          		redirect(base_url() . 'index.php?login', 'refresh');
          		
          		if ($param1 == 'update_profile_info') {
          			$data['email']                = trim($this->input->post('email'));
          			$data['phone']                  = trim($this->input->post('phone'));
          			$data['skype_id']               = trim($this->input->post('skype_id'));
          			$data['facebook_profile_link']  = trim($this->input->post('facebook_profile_link'));
          			$data['linkedin_profile_link']  = trim($this->input->post('linkedin_profile_link'));
          			$data['twitter_profile_link']   = trim($this->input->post('twitter_profile_link'));
          			$data['address']   = trim($this->input->post('address'));
          			$data['education_prfs_qualification']   = trim($this->input->post('qualification'));
          			$data['other_details']   = trim($this->input->post('otherdetails'));
          			$staff_id = $this->session->userdata('login_user_id');
          			$this->db->where('staff_id', $staff_id);
          			$this->db->update('staff', $data);
          			move_uploaded_file($_FILES["image"]["tmp_name"], "uploads/staff_image/" . $staff_id . '.jpg');
          			//$this->session->set_flashdata('flash_message_update', get_phrase('account_updated_successfully!'));
          			//redirect(base_url() . 'index.php?manage_profile/profile', 'refresh');
          			echo "1";
          		}
          		if ($param1 == 'change_password') {
          			$current_password_input			= sha1($this->input->post('password'));
          			$new_password						= sha1($this->input->post('new_password'));
          			$confirm_new_password			= sha1($this->input->post('confirm_new_password'));
          			
          			$current_password_db = $this->db->get_where('staff', array( 'staff_id' =>$this->session->userdata('login_user_id')))->row()->password;
          			if ($current_password_db == $current_password_input && $new_password == $confirm_new_password) {
          				$this->db->where('staff_id', $this->session->userdata('login_user_id'));
          				$this->db->update('staff', array('password' => $new_password));
          				echo 1;
          			}
          			else
          				echo 0;
          		}
          		else if($param1 == ''){
          			$profile_page_data['default']="uploads/user.jpg";
          			$profile_page_data['upload_path']="./uploads/staff_image/";
          			$profile_page_data['prof_data']  = $this->db->get_where('staff', array('staff_id' => $this->session->userdata('login_user_id')))->result_array();
          			$this->load->model('child_rescued_model');
          			//Toget the account_role_id
          			$staff_id=$this->session->userdata('login_user_id');
          			
          			$role=$this->child_rescued_model->get_role_id($staff_id);
          			foreach($role as $rolep):
          			$roles_id=$rolep['account_role_id'];
          			$profile_page_data['roles_id']= $roles_id ;
          			endforeach;
          			
          			$this->data['title']="Manage Profile";
          			
          			$this->data['main_content_view'] = $this->load->view('backend/staff/manage_profile.php',$profile_page_data, TRUE);
          			$this->generate_data('backend/index', $this->data );
          		}
          		
          		
          }
          
          
          
          
          
          
          
          
          
      public function profile($param1="",$param2="")
        {

          if ($this->session->userdata('staff_login') != 1)
              redirect(base_url() . 'index.php?login', 'refresh');

          if ($param1 == 'update_profile_info') {
              $data['email']                = trim($this->input->post('email'));
              $data['phone']                  = trim($this->input->post('phone'));
              $data['skype_id']               = trim($this->input->post('skype_id'));
              $data['facebook_profile_link']  = trim($this->input->post('facebook_profile_link'));
              $data['linkedin_profile_link']  = trim($this->input->post('linkedin_profile_link'));
			  $data['twitter_profile_link']   = trim($this->input->post('twitter_profile_link'));
              $data['address']   = trim($this->input->post('address'));
              $data['education_prfs_qualification']   = trim($this->input->post('qualification'));
              $data['other_details']   = trim($this->input->post('otherdetails'));
              $staff_id = $this->session->userdata('login_user_id');
              $this->db->where('staff_id', $staff_id);
              $this->db->update('staff', $data);
              move_uploaded_file($_FILES["image"]["tmp_name"], "uploads/staff_image/" . $staff_id . '.jpg');
              //$this->session->set_flashdata('flash_message_update', get_phrase('account_updated_successfully!'));
              //redirect(base_url() . 'index.php?manage_profile/profile', 'refresh');
              echo "1";
          }
          if ($param1 == 'change_password') {
              $current_password_input			= sha1($this->input->post('password'));
              $new_password						= sha1($this->input->post('new_password'));
              $confirm_new_password			= sha1($this->input->post('confirm_new_password'));

              $current_password_db = $this->db->get_where('staff', array( 'staff_id' =>$this->session->userdata('login_user_id')))->row()->password;
              if ($current_password_db == $current_password_input && $new_password == $confirm_new_password) {
                  $this->db->where('staff_id', $this->session->userdata('login_user_id'));
                  $this->db->update('staff', array('password' => $new_password));
                    echo 1;
              }
        else
        echo 0;
          }
      else if($param1 == ''){
          $profile_page_data['default']="uploads/user.jpg";
          $profile_page_data['upload_path']="./uploads/staff_image/";
          $profile_page_data['prof_data']  = $this->db->get_where('staff', array('staff_id' => $this->session->userdata('login_user_id')))->result_array();
           $this->load->model('child_rescued_model');
          //Toget the account_role_id
		    $staff_id=$this->session->userdata('login_user_id');

          $role=$this->child_rescued_model->get_role_id($staff_id);
          foreach($role as $rolep):
            $roles_id=$rolep['account_role_id'];
			$profile_page_data['roles_id']= $roles_id ;
          endforeach;
		  
		  $this->data['title']="Manage Profile";

          $this->data['main_content_view'] = $this->load->view('backend/staff/manage_profile.php',$profile_page_data, TRUE);
          $this->generate_data('backend/index', $this->data );
              }


        }



}
