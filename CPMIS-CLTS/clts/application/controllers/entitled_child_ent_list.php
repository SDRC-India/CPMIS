<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>


<?php
/*
*
*By Godti Satyanarayan
*
*/

class Entitled_child_ent_list extends MY_Controller
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

          public function ent_list($param1='', $param2='', $param3='')
           {
             //print_r("sadfgsa");
                   if ($this->session->userdata('staff_login') != 1)
           		{
           			$this->session->set_userdata('last_page' , current_url());
           			redirect(base_url(), 'refresh');
           		}

              $this->data['title'] = 'Entitled child list';
           		$page_data['ent_data']	=	array('dept'=>$param1,'block'=>$param2,'qno'=>$param3);
              
              $this->data['main_content_view'] = $this->load->view('backend/staff/entitled_child_list.php',$page_data, TRUE);
              $this->generate_data('backend/index', $this->data );
           }


}
