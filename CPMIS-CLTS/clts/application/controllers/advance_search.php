<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>


<?php
/*
*
*By Godti Satyanarayan
*
*/

class Advance_search extends MY_Controller
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
          function search($param1='') {
          if ($this->session->userdata('staff_login') != 1)
          {
          $this->session->set_userdata('last_page' , current_url());
          redirect(base_url(), 'refresh');
          }
          $session_ids=$this->session->userdata('login_user_id');
          $tstrole = $this->db->get_where('staff',array('staff_id'=>$session_ids))->result_array();
          foreach($tstrole as $strp):
          	$role_id=$strp['account_role_id'];
          	$district_id=$strp['district_id'];
          	$state_id=$strp['state_id'];
          endforeach;
			
           
          if($param1!='list'){
			
               $child_id = $this->input->post('child_id');
				$child_name = $this->input->post('child_name');
				$child_dist = $this->input->post('dist_name');
					
				$to_dt= mysql_real_escape_string(date('Y-m-d', strtotime($this->input->post('to_dt'))));
				$from_dt= mysql_real_escape_string(date('Y-m-d', strtotime($this->input->post('from_dt'))));
				if(!$this->input->post('to_dt'))
					{
						$to_dt=date('Y-m-d');
					}
					if(!$this->input->post('from_dt'))
					{
						$from_dt='2014-04-01';
					}
				
					if($role_id =='9' || $role_id=='10' || $role_id=='11' || $role_id=='13' || $role_id=='21' || $role_id=='12' || $role_id=='22'){
					$child_dist = $this->input->post('dist_name');
					
				$quer="Select * from child_basic_detail where TRUE "
					.($child_id !=null ? " AND child_id like '%".$child_id."%'" : "" ).
					($child_name!=null ? "AND child_name like '%".$child_name."%'" :"").
					($child_dist!=null ?" AND district_id='".$child_dist."' ":"" )."
					AND STR_TO_DATE(date_of_creation,'%d-%m-%Y') BETWEEN  '".$from_dt."' AND '".$to_dt."' and state_id='".$state_id."' ";
				}else{
					$child_block = $this->input->post('block_name');
					$quer="Select * from child_basic_detail where TRUE "
					.($child_id !=null ? " AND child_id like '%".$child_id."%'" : "" ).
					($child_name!=null ? "AND child_name like '%".$child_name."%'" :"").
					($child_dist!=null ?" AND district_id='".$child_dist."' ":"" ).
					($child_block!=null ?" AND block='".$child_block."' ":"" )."
					AND STR_TO_DATE(date_of_creation,'%d-%m-%Y') BETWEEN  '".$from_dt."' AND '".$to_dt."' ";
				}
          }
          else{          	
			  $to_dt= mysql_real_escape_string(date('Y-m-d', strtotime($this->input->post('to_dt'))));
			  $from_dt= mysql_real_escape_string(date('Y-m-d', strtotime($this->input->post('from_dt'))));
			  if(!$this->input->post('to_dt'))
					{
						$to_dt=date('Y-m-d');
					}
					if(!$this->input->post('from_dt'))
					{
						$from_dt='2014-04-01';
					}
					
					if($role_id =='9' || $role_id=='10' || $role_id=='21' || $role_id=='12' || $role_id=='22'){
          		$quer="Select * from child_basic_detail where state_id='".$state_id."' and STR_TO_DATE(date_of_creation,'%d-%m-%Y') BETWEEN  '".$from_dt."' AND '".$to_dt."'  ";
          	}
          	else if($role_id=='13' || $role_id=='20'){
          		$quer="Select * from child_basic_detail where district in(select district_id from division_details where division_id='".$district_id."') and STR_TO_DATE(date_of_creation,'%d-%m-%Y') BETWEEN  '".$from_dt."' AND '".$to_dt."'  ";
         		
          	}
          	else{
          		$quer="Select * from child_basic_detail where district_id='".$district_id."' or child_id in(select child_id from final_order where dist='" .$district_id . "' and STR_TO_DATE(date_of_creation,'%d-%m-%Y') BETWEEN  '".$from_dt."' AND '".$to_dt."  ' ) ";
          	}
          }

          $page_data['search_data'] = $this->db->query($quer)->result_array();
          
          $page_data['roles_id']=$role_id;
          $page_data['district_id']=$district_id;
          $page_data['state_id']=$state_id;
		    $page_data['from_dt']=$from_dt;
		  $page_data['to_dt']=$to_dt;
          $this->data['title']="Track the Child";
		 
          $this->data['main_content_view'] = $this->load->view('backend/staff/advance_search.php',$page_data, TRUE);
          $this->generate_data('backend/index', $this->data );
		   
          }


}
