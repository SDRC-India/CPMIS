<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>


<?php
/*
*
*By Godti Satyanarayan
*
*/

class Card_list extends MY_Controller
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
            $this->load->model('card_list_model');
            //To get the account_role_id
            $role=$this->card_list_model->get_role_id($ses_ids);
            foreach($role as $rolep):
              $roles_id=$rolep['account_role_id'];
              $dist_id=$rolep['district_id'];
              $state_id=$rolep['state_id'];
            endforeach;
              $card_list=array();
              $card_list["details_url"]=base_url()."index.php?child_rescued_list/view/";
              $card_list["print_url"]=base_url()."index.php?card_list/cardprint/";
              $card_list['counter']=1;
              $card_list['role_id']=$roles_id;
              $card_list['card_list_data']=$this->card_list_model->get_card_list_data($roles_id,$dist_id,$state_id);
              //print_r($card_list['card_list_data']);
            $this->data['title']="Print Entitlement Card";
            $this->data['main_content_view'] = $this->load->view('backend/staff/cards.php',$card_list, TRUE);
            $this->generate_data('backend/index', $this->data );

        }
        function cardprint($param1 = '', $param2 = '') {

      		if ($this->session->userdata('staff_login') != 1)
      		{
      			$this->session->set_userdata('last_page' , current_url());
      			redirect(base_url(), 'refresh');
      		}

          $this->load->model('card_list_model');
      		$datas['is_card_print']=1;
      		$this->db->where('child_id', $param1);
          $this->db->update('child_basic_detail', $datas);
          $this->data['title']="Card Print";
          $card_list['card_print_data']=$this->card_list_model->get_card_print_data($param1);
          $card_list['default']="uploads/user.jpg";
          $card_list['upload_path']="./uploads/child_image/";

          $this->data['main_content_view'] = $this->load->view('backend/staff/card_print.php',$card_list, TRUE);
          $this->generate_data('backend/index', $this->data );


          }


}
