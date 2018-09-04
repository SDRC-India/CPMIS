<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>


<?php
/*
*This class is to add education details of children
*By Godti Satyanarayan
*
*/

class Childcaseprogress extends MY_Controller
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
			 $this->load->model('childcaseprogress_model');
              //loading the data
          }
          public function index()
        {
        	$from ='2017-06-01' ;
        	$to=date("Y-m-d", strtotime(date("d.m.Y"))); //=> "2010-09-27"
        	$getStudentDetails  = $this->childcaseprogress_model->getChildDetails($from,$to);
        	$percent = array();
        	$j = 0;
        	foreach ($getStudentDetails as $data) {
        		$percent[$j]['id'] = $data['child_id'];
        		$percent[$j]['child_name'] = $data['child_name'];
        		$totalField = count($data);
        		$cnt = 0;
        		if(empty($data['produced']) || $data['produced'] ==''){
        			$cnt ++;
        		}
        		if(empty($data['parents_name']) || $data['parents_name'] ==''){
        			$cnt ++;
        		}
        		if(empty($data['order_type']) || $data['order_type'] ==''){
        			$cnt ++;
        		}
        		if(empty($data['type_order']) || $data['type_order'] ==''){
        			$cnt ++;
        		}
        		if(empty($data['interest_of_rehabilitation']) || $data['interest_of_rehabilitation'] ==''){
        			$cnt ++;
        		}
        		if(empty($data['interest_of_rehabilitation_no']) || $data['interest_of_rehabilitation_no'] ==''){
        			$cnt ++;
        		}
        		if(empty($data['details_of_handicap']) || $data['details_of_handicap'] ==''){
        			$cnt ++;
        		}
        		if(empty($data['dental_disease']) || $data['dental_disease'] ==''){
        			$cnt ++;
        		}
        		if(empty($data['eye_diseases']) || $data['eye_diseases'] ==''){
        			$cnt ++;
        		}
        		if(empty($data['health_card_issued']) || $data['health_card_issued'] ==''){
        			$cnt ++;
        		}
        		if(empty($data['reason_leaving_family']) || $data['reason_leaving_family'] ==''){
        			$cnt ++;
        		}
        		if(empty($data['reason_for_leaving']) || $data['reason_for_leaving'] ==''){
        			$cnt ++;
        		}
        		
        		
        		if(empty($data['details_friendship']) || $data['details_friendship'] ==''){
        			$cnt ++;
        		}
        		if(empty($data['details_membership']) || $data['details_membership'] ==''){
        			$cnt ++;
        		}
        		if(empty($data['details_friendship_other']) || $data['details_friendship_other'] ==''){
        			$cnt ++;
        		}
        		if(empty($data['details_membership_other']) || $data['details_membership_other'] ==''){
        			$cnt ++;
        		}
        		
        		if(empty($data['compensation_notice_issued']) || $data['compensation_notice_issued'] ==''){
        			$cnt ++;
        		}
        		if(empty($data['has_prosecution_file']) || $data['has_prosecution_file'] ==''){
        			$cnt ++;
        		}
        		if(empty($data['prosecution_file_orderno']) || $data['prosecution_file_orderno'] ==''){
        			$cnt ++;
        		}
        		if(empty($data['final_ordered']) || $data['final_ordered'] ==''){
        			$cnt ++;
        		}
        		if(empty($data['type_order']) || $data['type_order'] ==''){
        			$cnt ++;
        		}
        		if(empty($data['type_of_family']) || $data['type_of_family'] ==''){
        			$cnt ++;
        		}
        		
        		if(empty($data['type_migration']) || $data['type_migration'] ==''){
        			$cnt ++;
        		}
        		if(empty($data['overal_relationship']) || $data['overal_relationship'] ==''){
        			$cnt ++;
        		}
        		if(empty($data['final_order_date']) || $data['final_order_date'] ==''){
        			$cnt ++;
        		}
        		$cntPerc = ($cnt/$totalField) * 100;
        		$percent[$j]['percentage'] = $cntPerc;
        		$j++;
        	}
        	
        	
        	$ses_ids=$this->session->userdata('login_user_id');
        	$role=$this->childcaseprogress_model->get_role_id($ses_ids);
        	foreach($role as $rolep):
        	//var_dump($role);
        	$roles_id=$rolep['account_role_id'];
        	$dist_id=$rolep['district_id'];
        	$stat_id=$rolep['state_id'];
        	endforeach;
        	$data['percentage'] = $percent;
        	$data['role']=$this->childcaseprogress_model-> get_list($roles_id,$dist_id);
        	$data['list']=$this->childcaseprogress_model-> get_child_list();
        	$this->data['title'] = "Child Case progress";
        	//$this->output->enable_profiler(TRUE);
        	$this->data['main_content_view'] = $this->load->view('backend/staff/childcaseprogress.php',$data, TRUE);
        	$this->generate_data('backend/index', $this->data );
        }
      
		  public function record($from,$to)
        {
			
			
			//$from = $this->input->post('from_date');
			//$to = $this->input->post('to_date');
		  $getStudentDetails  = $this->childcaseprogress_model->getChildDetails($from,$to);
            $percent = array();
            $j = 0;
            foreach ($getStudentDetails as $data) {
              $percent[$j]['id'] = $data['child_id'];
              $percent[$j]['child_name'] = $data['child_name'];
              $totalField = count($data);
              $cnt = 0;
              if(empty($data['produced']) || $data['produced'] ==''){
                  $cnt ++;
              }
              if(empty($data['parents_name']) || $data['parents_name'] ==''){
                  $cnt ++;
              }
              if(empty($data['order_type']) || $data['order_type'] ==''){
                  $cnt ++;
              }
              if(empty($data['type_order']) || $data['type_order'] ==''){
                  $cnt ++;
              }
			   if(empty($data['interest_of_rehabilitation']) || $data['interest_of_rehabilitation'] ==''){
                  $cnt ++;
              }
			   if(empty($data['interest_of_rehabilitation_no']) || $data['interest_of_rehabilitation_no'] ==''){
                  $cnt ++;
              }
			   if(empty($data['details_of_handicap']) || $data['details_of_handicap'] ==''){
                  $cnt ++;
              }
			    if(empty($data['dental_disease']) || $data['dental_disease'] ==''){
                  $cnt ++;
              }
		    if(empty($data['eye_diseases']) || $data['eye_diseases'] ==''){
                  $cnt ++;
              } 
           if(empty($data['health_card_issued']) || $data['health_card_issued'] ==''){
                  $cnt ++;
              }	
            if(empty($data['reason_leaving_family']) || $data['reason_leaving_family'] ==''){
                  $cnt ++;
              }
            if(empty($data['reason_for_leaving']) || $data['reason_for_leaving'] ==''){
                  $cnt ++;
              }

			  
            if(empty($data['details_friendship']) || $data['details_friendship'] ==''){
                  $cnt ++;
              }	
             if(empty($data['details_membership']) || $data['details_membership'] ==''){
                  $cnt ++;
              }
            if(empty($data['details_friendship_other']) || $data['details_friendship_other'] ==''){
                  $cnt ++;
              }	
            if(empty($data['details_membership_other']) || $data['details_membership_other'] ==''){
                  $cnt ++;
              }	

          if(empty($data['compensation_notice_issued']) || $data['compensation_notice_issued'] ==''){
                  $cnt ++;
              }
            if(empty($data['has_prosecution_file']) || $data['has_prosecution_file'] ==''){
                  $cnt ++;
              }	
            if(empty($data['prosecution_file_orderno']) || $data['prosecution_file_orderno'] ==''){
                  $cnt ++;
              }
          if(empty($data['final_ordered']) || $data['final_ordered'] ==''){
                  $cnt ++;
              }
            if(empty($data['type_order']) || $data['type_order'] ==''){
                  $cnt ++;
              }	
			 if(empty($data['type_of_family']) || $data['type_of_family'] ==''){
                 $cnt ++;
              }	
			 	
			   if(empty($data['type_migration']) || $data['type_migration'] ==''){
                 $cnt ++;
              }
			  if(empty($data['overal_relationship']) || $data['overal_relationship'] ==''){
                 $cnt ++;
              }
            if(empty($data['final_order_date']) || $data['final_order_date'] ==''){
                  $cnt ++;
              }				  
              $cntPerc = ($cnt/$totalField) * 100;
              $percent[$j]['percentage'] = $cntPerc;
              $j++;
            }

            
		      $ses_ids=$this->session->userdata('login_user_id');
            $role=$this->childcaseprogress_model->get_role_id($ses_ids);
            foreach($role as $rolep):
			         //var_dump($role);
              $roles_id=$rolep['account_role_id'];
              $dist_id=$rolep['district_id'];
              $stat_id=$rolep['state_id'];
            endforeach;
             $data['percentage'] = $percent;
             $data['role']=$this->childcaseprogress_model-> get_list($roles_id,$dist_id);
			 $data['list']=$this->childcaseprogress_model-> get_child_list();
			  $this->data['title'] = "Child Case progress";
			  //$this->output->enable_profiler(TRUE);
             $this->data['main_content_view'] = $this->load->view('backend/staff/childcaseprogress.php',$data, TRUE);
             $this->generate_data('backend/index', $this->data );
          		 
        }
      
			  
			  
 }
		  

