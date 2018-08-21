<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>


<?php
/*
*This class is for the Child _rescue
*By Godti Satyanarayan
*
*/

class Child_rescued_before extends MY_Controller
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
          $this->load->model('child_rescued_before_model');
          //Toget the account_role_id
          $role=$this->child_rescued_before_model->get_role_id($ses_ids);
          foreach($role as $rolep):
            $roles_id=$rolep['account_role_id'];
            $dist_id=$rolep['district_id'];
            $state_id=$rolep['state_id'];
          endforeach;
            $child_list=array();


            $child_list['path']="./uploads/uploads/child_image/";
            $child_list['default']="uploads/user.jpg";
            $child_list["details_url"]=base_url()."index.php?child_rescued_list/view/";
              $child_list["lcdetails_url"]=base_url()."index.php?child_rescued_before/child_detail_lc_approval/";
            $child_list['counter']=1;
            $child_list['role_id']=$roles_id;
            $child_list['data_list']=$this->child_rescued_before_model->get_rescued_childs($roles_id,$state_id);
            //print_r($child_list['data_list']);
           $this->data['title']="Child Rescued Before 12th June 2016";


          $this->data['main_content_view'] = $this->load->view('backend/staff/child_rescued_Before.php',$child_list, TRUE);
          $this->generate_data('backend/index', $this->data );

        }

        //view details record of child
        public function child_detail_lc_approval($param1="",$param2="")
        {
          if ($this->session->userdata('staff_login') != 1)
          {
            $this->session->set_userdata('last_page' , current_url());
            redirect(base_url(), 'refresh');
          }
          $ses_ids=$this->session->userdata('login_user_id');
          $this->load->model('child_rescued_model');
          $role=$this->child_rescued_model->get_role_id($ses_ids);
          foreach($role as $rolep):
            $roles_id=$rolep['account_role_id'];
            $dist_id=$rolep['district_id'];
            $state_id=$rolep['state_id'];
          endforeach;
          $this->data['title']="Approve for Entitled Card";
          $child_data['view_child_data']	=	$this->child_rescued_model->get_child_data($param1);
          $child_data['default']="uploads/user.jpg";
          $child_data['upload_path']="./uploads/child_image/";
          $this->data['main_content_view'] = $this->load->view('backend/staff/child_detail_lc_approval.php', $child_data, TRUE);
          $this->generate_data('backend/index', $this->data );

        }
        /*function get_child_id()
        {
          $this->db->select('child_id')
                    ->where('id',23);
                    $query = $this->db->get('child_basic_detail');
          //  return $query->result_array();
          $child_id=$query->result_array();
            print_r($child_id[0]['child_id']);
        }*/
        function lc_approve($param1 = '' , $param2 = '')
        	{
            print_r($param1);
        			if ($this->session->userdata('staff_login') != 1)
        		{
        			$this->session->set_userdata('last_page' , current_url());
        			redirect(base_url(), 'refresh');
        		}


        		if ($param1 == 'child_detail_lc_approval') {
                $this->load->model('child_rescued_before_model');
                    $this->child_rescued_before_model->child_detail_lc_approval_active($param2);

                    redirect(base_url() . 'index.php?/child_rescued_before/child_detail_lc_approval/' . $param2, 'refresh');

                }


        	}


}
