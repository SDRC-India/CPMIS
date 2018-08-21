
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<?php
class Wages_act_model extends CI_Model {
  function __construct()
  {
      parent::__construct();
      $this->load->database();

  }

      //to get the account_role_id
      function get_role_id($role_id)
      {
        $role = $this->db->get_where('staff',array('staff_id'=>$role_id))->result_array();
        return $role;
      }
      //to get the labour act data anf child details
      function get_wages_act_data($role_id,$district_id)
      {
        if($role_id==2 || $role_id==5)
		{
			$quer="select child_basic_detail.id as id,child_basic_detail.child_id,child_basic_detail.child_name,child_basic_detail.father_name,child_basic_detail.pstatus,child_wages.mnimum_wages as mnimum_wages from final_order 
			LEFT JOIN child_basic_detail on child_basic_detail.child_id = final_order.child_id
			LEFT JOIN child_wages on child_wages.child_id = final_order.child_id COLLATE utf8_unicode_ci 
			WHERE child_basic_detail.ls_activate='Y' AND child_basic_detail.district_id='".$district_id."' AND (final_order.dist='' or final_order.dist IS NULL) OR final_order.dist='".$district_id."'  
			";
		}
		else{
        $quer="select child_basic_detail.id as id,child_basic_detail.child_id,child_basic_detail.child_name,child_basic_detail.father_name,child_basic_detail.pstatus,child_wages.mnimum_wages as mnimum_wages from final_order 
			LEFT JOIN child_basic_detail on child_basic_detail.child_id = final_order.child_id
			LEFT JOIN child_wages on child_wages.child_id = final_order.child_id COLLATE utf8_unicode_ci 
			WHERE disposed_ls=0 AND child_basic_detail.ls_activate='Y' AND child_basic_detail.district_id='".$district_id."' AND (final_order.dist='' or final_order.dist IS NULL) OR final_order.dist='".$district_id."'  
			";
			}
       return $this->db->query($quer)->result_array();
      }

      public function get_districts($state_id)
      {
        return $this->db->select('*')->where('parent_id',$state_id)->order_by('area_name', 'asc')->group_by('area_name')->get('child_area_detail')->result_array();
      }
      public function get_wages_act_child($child_id="")
      {
			
            $place=  $this->db->select('basic_place_of_rescue')->get_where('child_basic_detail',array('child_id' =>$child_id))->result_array();
		
            if($place[0]['basic_place_of_rescue']=='Within')
            {
				
              $query="SELECT *,child_basic_detail.idate_of_rescue as date_rescued,child_basic_detail.dob as dob,child_within_state.salary as salary, child_within_state.working_days as working_days,child_within_state.working_hours as working_hours FROM child_wages
              LEFT JOIN child_basic_detail ON child_basic_detail.child_id = child_wages.child_id COLLATE utf8_unicode_ci
			  LEFT JOIN child_within_state ON child_within_state.child_id = child_wages.child_id COLLATE utf8_unicode_ci
              WHERE child_wages.child_id ='" . $child_id ."'";

                    

            }else{
              $query="SELECT *,child_basic_detail.idate_of_rescue as date_rescued,child_basic_detail.dob as dob,child_outside_state.osalary as salary, child_outside_state.oworking_days as working_days,child_outside_state.oworking_hours as working_hours FROM child_wages
              LEFT JOIN child_basic_detail ON child_basic_detail.child_id = child_wages.child_id COLLATE utf8_unicode_ci
			  LEFT JOIN child_outside_state ON child_outside_state.child_id = child_wages.child_id COLLATE utf8_unicode_ci
              WHERE child_wages.child_id ='" . $child_id ."'";

                   
            }
		
       return $this->db->query($query)->result_array();

      }
	  //code By dipti
	   function get_wages_act() {
        $query = "select * from wages";
		 return $this->db->query($query)->result_array();
    }
	  
	 function get_wages_amount($val){
		 
		 $sql = "select wage_amount from wages where id ='$val'";
		  $result = $this->db->query($sql)->first_row();
 
				   if(count($result) == 1)
				   {
					  return $result;
				   }
				   else
				   {
					 return false;
				   }
  // echo $result;
 }
	  
	  
	  
      function create_wagesact($project_id) {
    		$datap['child_id']=$project_id;
    		$datap['uid']=$this->session->userdata('login_user_id');
    		$datap['last_date_update']=date("d-m-Y");
    		$datap['mnimum_wages']=$this->input->post('mnimum_wages');
			//code by dipti
		    
			$datap['wages_type']=$this->input->post('wages');
			if($this->input->post('work_hour'))
			{
				$datap['wages_amount']=$this->input->post('work_hour');
			}
			else{
				$datap['wages_amount']=0.00;
			}
			if($this->input->post('remaning_collected'))
			{
				$datap['remaining_amount']=$this->input->post('remaning_collected');
			}
			else{
				$datap['remaining_amount']=0.00;
			}
			if($this->input->post('total_work_amount'))
			{
			$datap['total_work']=$this->input->post('total_work_amount');	
			}
			else{
				$datap['total_work']=0.00;
			}
			if($this->input->post('bal_amount'))
			{
				$datap['balance_wages_amount']=$this->input->post('bal_amount');
			}
			else{
				$datap['balance_wages_amount']=0.00;
				
			}
			if($this->input->post('amount_collected'))
			{
				$datap['amount_wages_collected']=$this->input->post('amount_collected');
			}
			else{
				$datap['amount_wages_collected']=0.00;
			}
			$datap['no_of_days']=$this->input->post('no_of_days');
			
			
			
        if($datap['mnimum_wages']=='No')
        {
          $datap['has_claim']=$this->input->post('has_claim');
          if($datap['has_claim']=='Yes')
          {
            $datap['date_claim']=$this->input->post('date_claim');
        		$datap['date_disposed']=$this->input->post('date_disposed');
            $datap['has_claim_amount']=$this->input->post('has_claim_amount');
            if($datap['has_claim_amount']=='Yes')
            {
              $datap['claim_amount']=$this->input->post('claim_amount');
			  	  $datap['claim_amout_deposit_status']=1;

            }
        		else{
              $datap['prosecution_field']=$this->input->post('prosecution_field');
              $datap['claim_amount']="";

              if($datap['prosecution_field']=='Yes')
              {
                $datap['place_authority']=$this->input->post('place_authority');
            		$datap['date_prosecution']=$this->input->post('date_prosecution');
            		$datap['date_prosecution_disposed']=$this->input->post('date_prosecution_disposed');
            		$datap['order1']=$this->input->post('order1');
                $datap['order_number']=$this->input->post('order_number');
              }
              else{
                $datap['place_authority']="";
            		$datap['date_prosecution']=NULL;
            		$datap['date_prosecution_disposed']=NULL;
                $datap['order1']="";

                $datap['order_number']="";
              }
            }
          }
          else{
            $datap['date_claim']=NULL;
        		$datap['date_disposed']=NULL;
            $datap['has_claim_amount']="";
            $datap['has_claim_amount']="";


          }


        }
        else{
        	//added by pabitra
        	//for avoiding total work amount to zero in wages amount
        	$datap['amount_wages_collected']=$this->input->post('total_work_amount') ;
          $datap['has_claim']="";
      		$datap['date_claim']=NULL;
      		$datap['date_disposed']=NULL;
      		$datap['claim_amount']="";
      		$datap['prosecution_field']="";
      		$datap['place_authority']="";
      		$datap['date_prosecution']=NULL;
      		$datap['date_prosecution_disposed']=NULL;
      		$datap['has_claim_amount']="";
      		$datap['order1']=NULL;
          $datap['order_number']="";
        }

    		//prativa edit
        $datap['status_of_cases']=$this->input->post('status_of_cases');

        if(	$datap['status_of_cases']=='disposed')
        {

      		$datap['date_of_disposed']=$this->input->post('date_of_disposed');
      		$datap['type_disposed']=$this->input->post('type_disposed');
          if($datap['type_disposed']=="Others")
          {
            	$datap['type_disposed_other']=$this->input->post('type_disposed_other');
          }
          else{
            $datap['type_disposed_other']="";
          }

      		$datap['reason_pendency']="";
        }
        else if($datap['status_of_cases']=='pending')
        {
          $datap['date_of_disposed']=NULL;
          $datap['type_disposed']="";
          $datap['type_disposed_other']="";
          $datap['reason_pendency']=$this->input->post('reason_pendency');
        }
        else{
          $datap['date_of_disposed']=NULL;
          $datap['type_disposed']="";
          $datap['type_disposed_other']="";
          $datap['reason_pendency']="";
          $datap['type_disposed_other']="";
        }



    		$this->db->where('child_id', $project_id);
    		$this->db->update('child_wages', $datap);
    		$dataq['uid']=$this->session->userdata('login_user_id');
    		$dataq['module_id']=$project_id;
    		$dataq['module_name']='child_wages';
    		$dataq['date_time']=date("Y-m-d H:i:s");
    		$this->db->insert('history_update', $dataq);
    	 }


  }
