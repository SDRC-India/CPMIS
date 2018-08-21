<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>


<?php
/*
*This class is for the Child _rescue
*By Godti Satyanarayan
*addnew() to add register mew rescued child  information(only view )
*edit() to update the information of rescued child(only view )
*view() to view the details record of crescued child(only view )
*ChilldRescuedRecord() actuial database operations for child rescued (new record ,update)
*/

class Mukhia_registered_list extends MY_Controller
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
          $this->load->model('mukhia_registered_model');
          $ngo_list['data_list']=$this->mukhia_registered_model->get_reg_mukhia();  
          $ngo_list["details_url"]=base_url()."index.php?mukhia_registered_list/view/";
		  
           $this->data['title']="List of Registered Mukhia ";
          $this->data['main_content_view'] = $this->load->view('backend/staff/mukhia_registered_list.php',$ngo_list, TRUE);
          $this->generate_data('backend/index', $this->data );

        }
		

}
