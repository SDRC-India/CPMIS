<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class MY_Controller extends CI_Controller{

      public function __construct(){
           parent::__construct();
            $this->load->library('session');


       }
   public function generate_data($view_name, $data)
     {
          $ses_ids=$this->session->userdata('login_user_id');
          $type=$this->session->userdata('login_type');
          $this->load->model("navigation_model");
          $this->load->model("header_model");
          
          $this->load->model('cmrf_transaction_model');
          
          //Toget the account_role_id
          $roles_id="";
          $dist_id="";
          $stat_id="";
          if($this->session->userdata('admin_login') != 1)
          {
            $role=$this->header_model->get_role_id($ses_ids);
            foreach($role as $rolep):
              $roles_id=$rolep['account_role_id'];
              $dist_id=$rolep['district_id'];
              $stat_id=$rolep['state_id'];
			  $role_staff_id= $rolep['staff_id'];
            endforeach;
           // echo $role_staff_id ;
          }

          //header page  texts

          if($roles_id==2)
          {
            $text=array("head_name"=>"LEO","url_name"=>"Pending Child Rescued Registered By LEO","url_link1"=>"/child_rescued_list/view/","url_link2"=>'/1');
            $text2=array("head_name"=>"CWC","url_name"=>"Child Rescued Registered by CWC","url_link1"=>"/child_rescued_list/view/","url_link2"=>'/1');
          }else if($roles_id==10 || $roles_id==11 || $roles_id==9){
          	$text2=array("head_name"=>"LC","url_name"=>"Child Rescued outsidestate","url_link1"=>"/mis_reports/rescue_outside/","url_link2"=>'/1');
          }
          else{
            $text=array("head_name"=>"Forwarded by LS","url_name"=>"Rescued Waiting to Approve for Print Entitlement Card","url_link1"=>"/child_rescued_list/view/","url_link2"=>'/2');
            $text2="";
			$text3="";
          }

          $cwc_header="";
          //loading to view by Godti Satyanarayan
          $this->data['includes_top'] = $this->load->view ('backend/includes_top', TRUE);
         
     
          if($roles_id==2 || $roles_id==5 )
		  {
		   $this->load->model('comuncation_model');
		   $msg_count_com= $this->comuncation_model->calc_noti_msg($role_staff_id);
		   $msg_dlc= $this->comuncation_model->calc_dlc_msg($role_staff_id);
		   $msg_alc= $this->comuncation_model->calc_alc_msg($role_staff_id);
		   $msg_jlc_alc= $this->comuncation_model->calc_jlc_msg($role_staff_id);
		   $msg_cmrf= $this->cmrf_transaction_model->get_count_CMRFtrn($dist_id);
		  }else if($roles_id==10 || $roles_id==11 || $roles_id==9){ 
		  	$this->load->model('comuncation_model');
		  	$msg_no_childoutside= $this->comuncation_model->no_childoutside($role_staff_id); 
		  }
		else{
			
			$msg_count_com="";
			$msg_dlc="";
			$msg_alc="";
			$msg_jlc_alc="";
		   }
			
          //admin  panel navigation
          $arrViewData="";
          if(($this->session->userdata('admin_login') == 1))
          {
          	
            $this->data['navigation'] = $this->load->view('backend/admin/navigation', $arrViewData, TRUE);

          }
          else{
            $arrViewData = array(
                "menu" => $this->navigation_model->getMenuLevel($roles_id),
            		"role_staff_id" => $role_staff_id
            );
           
            $this->data['navigation'] = $this->load->view('backend/navigation', $arrViewData, TRUE);

          }

          if($roles_id==2){$cwc_header=$this->header_model->getCwcHeader($ses_ids);}
          //print_r($cwc_header);
        
          
            
         
            	
            	$headerData = array(
            			"header_data" => $this->header_model->getHeader($ses_ids),"header_cwc"=>$cwc_header ,"header_text"=>$text,"header_text_2"=>$text2,
            			"image_url"=>$this->header_model->get_image_url($type,$ses_ids),
            			"sname"=>$this->header_model->get_name($type,$ses_ids),
            			
            			"count_msg"=>$msg_count_com ,
            			"count_dlc_msg"=>$msg_dlc,
            			"count_alc_msg"=>$msg_alc,
            			"count_jlc_msg"=>$msg_jlc_alc,
            			"count_cmrf"=>$msg_cmrf,
            			"count_no_childoutside"=>$msg_no_childoutside
            	);
            	

          $this->data['header'] = $this->load->view('backend/header', $headerData, TRUE);
          $this->load->view($view_name,$this->data);//loading the required main content to view page
          //$this->data['footer'] = $this->load->view ('backend/footer', TRUE);
          $this->data['includes_bottom'] = $this->load->view ('backend/includes_bottom', TRUE);


     }


}
