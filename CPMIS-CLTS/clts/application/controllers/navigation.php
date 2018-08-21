<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>


<?php
class Navigation extends CI_Controller
{
          function __construct()
          {
              parent::__construct();
              /*cache control*/
              $this->output->set_header('Last-Modified: ' . gmdate("D, d M Y H:i:s") . ' GMT');
              $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
              $this->output->set_header('Pragma: no-cache');
              ///$this->output->set_header("Expires: Mon, 26 Jul 2015 05:00:00 GMT");
              $this->load->library('session');


              //loading the data
          }
          //Not required this code
          public function index()
            {
                $this->load->model("navigation_model");
                $ses_ids=$this->session->userdata('login_user_id');

                $arrViewData = array(
                    "menu" => $this->navigation_model->getMenuLevel($ses_ids)
                );

                $this->load->view("backend/navigation",$arrViewData,$object);

            }



  }
