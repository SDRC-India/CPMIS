
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<?php
class Labour_act_model extends CI_Model {
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
      function get_labour_act_data($role_id,$district_id)
      {
		  
		 if($role_id==2 || $role_id==5)
		 {
			$quer="select child_basic_detail.id as id,child_basic_detail.child_id,child_basic_detail.child_name,child_basic_detail.father_name,child_basic_detail.pstatus,labour_act.compensation_deposited as compensation_deposited,final_order.transfer_to as transfer_to  from final_order 
			LEFT JOIN child_basic_detail on child_basic_detail.child_id = final_order.child_id
			LEFT JOIN labour_act on labour_act.child_id = final_order.child_id

			WHERE child_basic_detail.ls_activate='Y' and child_basic_detail.district_id='".$district_id."' AND (final_order.dist='' or final_order.dist IS NULL) OR final_order.dist='".$district_id."'
			 "; 
			 
		 }
		 //query by godti Sataynarayan to show labour act child records not disposed BY LS
		 else{
			$quer="select child_basic_detail.id as id,child_basic_detail.child_id,child_basic_detail.child_name,child_basic_detail.father_name,child_basic_detail.pstatus,labour_act.compensation_deposited as compensation_deposited,final_order.transfer_to as transfer_to from final_order 
			LEFT JOIN child_basic_detail on child_basic_detail.child_id = final_order.child_id
			LEFT JOIN labour_act on labour_act.child_id = final_order.child_id

			WHERE disposed_ls=0 AND child_basic_detail.ls_activate='Y' AND child_basic_detail.district_id='".$district_id."' AND (final_order.dist='' or final_order.dist IS NULL) OR final_order.dist='".$district_id."'
			 ";
		 }
		
       return $this->db->query($quer)->result_array();
      }
      //function to get the labour act data of the child
      public function get_labour_act_child($child_id="",$staff_id)
      {
      /*  $this->db->select("*,child_basic_detail.dob as dob, child_basic_detail.idate_of_rescue as  idate_of_rescue,child_basic_detail.pstatus as pstatus ");
        $this->db->where('labour_act.child_id',$child_id)
                 ->join("child_basic_detail","child_basic_detail.child_id = labour_act.child_id");
              $query = $this->db->get('labour_act');
              return $query->result_array(); */
        	//return $this->db->get_where('labour_act' , array('child_id' => $child_id))->result_array();
      	$final_childid=mysql_fetch_assoc(mysql_query("select dist, type_order from final_order where child_id='$child_id'"))	;
      	$oder_typeorder=$final_childid['type_order'] ;      	
      	if($oder_typeorder=='Cases transferred to other Dist/State/Country'){
      		$staff_dist=$final_childid['dist'] ;
      		$query_staff=mysql_fetch_assoc(mysql_query("select district_id from staff where staff_id='$staff_id'"))	;
      		$staff_orgdist=$query_staff['district_id'] ;
      		
      		if($staff_orgdist==$staff_dist){
      			$query="select *,child_basic_detail.dob as dob, child_basic_detail.idate_of_rescue as  idate_of_rescue,child_basic_detail.pstatus as pstatus from labour_act left join child_basic_detail on child_basic_detail.child_id=labour_act.child_id where labour_act.child_id='$child_id' "  ;
      			return $this->db->query($query)->result_array();
      		}
      		
      		
      	}else{ 
        $query_staff=mysql_fetch_assoc(mysql_query("select district_id from staff where staff_id='$staff_id'"))	;
        $staff_dist=$query_staff['district_id'] ;
        $query="select *,child_basic_detail.dob as dob, child_basic_detail.idate_of_rescue as  idate_of_rescue,child_basic_detail.pstatus as pstatus from labour_act left join child_basic_detail on child_basic_detail.child_id=labour_act.child_id where labour_act.child_id='$child_id' and child_basic_detail.district_id='$staff_dist'"  ;
        return $this->db->query($query)->result_array();
      	}
      	
      
      }
      public function get_districts($state_id)
      {
        return $this->db->select('*')->where('parent_id',$state_id)->order_by('area_name', 'asc')->group_by('area_name')->get('child_area_detail')->result_array();
      }
      //labout act data update
      
      function create_labouract($child_id) {
  		$datap['child_id']=$child_id;
  		$datap['uid']=$this->session->userdata('login_user_id');
  		$datap['last_date_update']=date("d-m-Y");
  		$datap['compensation_notice_issued']=$this->input->post('compensation_notice_issued');
  		$compensation_certificate_date=$this->input->post('compensation_certificate_date');
  		if($datap['compensation_notice_issued']!="Yes"){
  			
  			
  			
  			if(file_exists('uploads/entitlement_proof/labour/act/'. $child_id. '.jpg')){
  				
  				unlink('uploads/entitlement_proof/labour/act/'. $child_id. '.jpg');
  			}
  			
  			if(file_exists('uploads/entitlement_proof/labour/act/'. $child_id. '.jpg')){
  				
  				unlink('uploads/entitlement_proof/labour/act/'. $child_id. '.pdf');
  			}
  			
  			if(file_exists('uploads/entitlement_proof/labour/act/'. $child_id. '.jpg')){
  				
  				unlink('uploads/entitlement_proof/labour/act/'. $child_id. '.png');
  			}
  			
  		}	
  		
  		if($compensation_certificate_date!=''){
  		$datap['compansation_date']=date('Y-m-d',strtotime($compensation_certificate_date));
  		}
  		if($datap['compensation_notice_issued']=='Yes'){
  			$datap['compensation_letter']=$this->input->post('letterno');
  			$issuedate=$this->input->post('date_of_issue');
  			if($issuedate != ''){
  				$datap['date_of_issue']=date('Y-m-d',strtotime($issuedate));
  			}
  		$datap['compensation_deposited']=$this->input->post('compensation_deposited');
  		if($datap['compensation_deposited']=='Yes'){
  			$comdate=$this->input->post('poceeding_certificate_date');
  			
  			unlink('uploads/entitlement_proof/labour/act/'. $child_id. '.jpg');
  			unlink('uploads/entitlement_proof/labour/act/'. $child_id. '.pdf');
  			unlink('uploads/entitlement_proof/labour/act/'. $child_id. '.png');
  			}
  			else{  
  					$certificatissuedate=$this->input->post('poceeding_certificate_date');
  					if($certificatissuedate!=""){
  					$datap['poceeding_certificate_date']=date('Y-m-d',strtotime($certificatissuedate));
  					}
  					$datap['poceeding_certificate_initiated']=$this->input->post('poceeding_certificate_initiated');
  					if($datap['poceeding_certificate_initiated']=='Yes'){  						
  						$datap['poceeding_certificate_authority']=$this->input->post('poceeding_certificate_authority');
  						$datap['poceeding_certificate_place']=$this->input->post('poceeding_certificate_place');
  						$datap['certificate_issue_caseno']=$this->input->post('certificate_case_no');
  						if( $_FILES["image2"]["type"]=='image/jpeg'){
  							move_uploaded_file($_FILES["image2"]["tmp_name"], 'uploads/entitlement_proof/labour/act/'. $child_id. '.jpg');
  						}
  						if($_FILES["image2"]["type"]=='application/pdf'){
  							move_uploaded_file($_FILES["image2"]["tmp_name"], 'uploads/entitlement_proof/labour/act/'. $child_id. '.pdf');
  							unlink('uploads/entitlement_proof/labour/act/'. $child_id. '.jpg');
  						}
  						if($_FILES["image2"]["type"]=='image/png'){
  							move_uploaded_file($_FILES["image2"]["tmp_name"], 'uploads/entitlement_proof/labour/act/'. $child_id. '.png');
  							unlink('uploads/entitlement_proof/labour/act/'. $child_id. '.jpg');
  							unlink('uploads/entitlement_proof/labour/act/'. $child_id. '.pdf');
  						}
  						$date_iniciated=$this->input->post('date_certificate_case'); 
  						if($date_iniciated!="")
  						$datap['procedding_date_iniciated']=date('Y-m-d',strtotime($date_iniciated));
  						
  						if($datap['poceeding_certificate_authority'] =='Other'){
  							$datap['poceeding_certificate_authority_other']=$this->input->post('poceeding_certificate_authority_other');
  							}else{
  								$datap['poceeding_certificate_authority_other']='';
  								
  							}
  							$datap['certificate_case_dispose']=$this->input->post('poceeding_certificate_case_disposed');
  							if($datap['certificate_case_dispose']=='Yes'){
  								$datap['poceeding_certificate_orderno']=$this->input->post('poceeding_certificate_orderno');
  								$date_certificate_case=$this->input->post('date_certificate_case');
  								$datap['has_prosecution_file']=$this->input->post('has_prosecution_file');
  								if($datap['has_prosecution_file']=="Yes")
  								{
  									$datap['prosecution_file_authority']=$this->input->post('prosecution_file_authority');
  									if($datap['prosecution_file_authority']=='Others'){
  										$datap['prosecution_file_other']=$this->input->post('prosecution_file_other');
  									}else{
  										$datap['prosecution_file_other']='';
  									}
  									$pfiledate=$this->input->post('prosecution_file_date');
  									if($pfiledate != '')
  										$datap['prosecution_file_date']=date('Y-m-d',strtotime($pfiledate));
  										//$datap['prosecution_file_date']=$this->input->post('prosecution_file_date');
  										$datap['prosecution_file_place']=$this->input->post('prosecution_file_place');
  										
  								}
  								$datap['status_of_cases']=$this->input->post('status_of_cases');
  								if($datap['status_of_cases']=="Disposed")
  								{
  									$pdatedis=$this->input->post('prosecution_file_date_disposed');
  									
  									
  									
  									if($pdatedis != '')
  										$datap['prosecution_file_date_disposed']=date('Y-m-d',strtotime($pdatedis));
  										//$datap['prosecution_file_date_disposed']=$this->input->post('prosecution_file_date_disposed');
  										
  										$datap['date_of_disposed']=$this->input->post('date_of_disposed');
  										$datap['type_of_disposed']=$this->input->post('type_of_disposed');
  										if(	$datap['type_of_disposed']=="Others")
  										{
  											$datap['type_of_disposed_other']=$this->input->post('type_of_disposed_other');
  											
  										}
  										else{
  											$datap['prosecution_file_orderno']=$this->input->post('prosecution_file_orderno');
  											//$datap['prosecution_file_amount']="" ;
  											$datap['type_of_disposed_other']="";
  										}
  										
  										$datap['reason_pendency']="";
  										$datap['pendency_date']=NULL ;
  										
  								}
  								else if($datap['status_of_cases']=="Pending"){
  									//$datap['prosecution_file_date_disposed']=NULL;
  									$pendncy_date=$this->input->post('date_of_satus');
  									if($pendncy_date!=""){
  										$datap['pendency_date']=date('Y-m-d',strtotime($pendncy_date));
  											}
  										$datap['prosecution_file_orderno']="";
  										$datap['type_of_disposed']="";
  										$datap['date_of_disposed']=NULL;
  										$datap['type_of_disposed_other']="";
  										$datap['reason_pendency']=$this->input->post('reason_pendency');
  								}else
  								{
  									$datap['date_of_disposed']=NULL;
  									$datap['prosecution_file_orderno']="";
  									$datap['type_of_disposed']="";
  									$datap['type_of_disposed_other']="";
  									$datap['reason_pendency']="";
  								}
  							}
  							else{
  								$datap['has_prosecution_file']="" ;
  								$datap['status_of_cases']="";
  								$datap['prosecution_file_authority']="" ;
  								$datap['prosecution_file_place']="" ;
  								$datap['prosecution_file_date']=NULL;
  								$datap['date_of_disposed']=NULL; 
  								$datap['date_certificate_case']= NULL;
  								$datap['type_of_disposed']="" ;
  								$datap['prosecution_file_orderno']="" ;
  								
  							}
  					}else{
  							$datap['poceeding_certificate_authority']="";
  							$datap['poceeding_certificate_authority_other']="";
  							$datap['poceeding_certificate_place']="";
  							$datap['poceeding_certificate_date']=NULL;
  							$datap['has_prosecution_file']="" ;
  							$datap['status_of_cases']="";
  							$datap['prosecution_file_authority']="" ;
  							$datap['prosecution_file_place']="" ;
  							$datap['date_of_disposed']="" ;  
  							$datap['type_of_disposed']="" ;
  							$datap['prosecution_file_orderno']="" ;
  							$datap['certificate_case_dispose']="" ; 
  							$datap['certificate_issue_caseno']="" ;  
  							$datap['date_certificate_case']= NULL;
  							$datap['poceeding_certificate_orderno']="" ;
  							unlink('uploads/entitlement_proof/labour/act/'. $child_id. '.jpg');
  							unlink('uploads/entitlement_proof/labour/act/'. $child_id. '.pdf');
  							unlink('uploads/entitlement_proof/labour/act/'. $child_id. '.jpg');
  							unlink('uploads/entitlement_proof/labour/act/'. $child_id. '.png');
  						
  					}
  				}
  			
  		}else{
  			$datap['compensation_deposited']="" ;
  			$datap['compensation_letter']="";
  			$datap['date_of_issue']=NULL ;
  			$datap['poceeding_certificate_initiated']="" ; 
  			$datap['poceeding_certificate_authority']="" ; 
  			$datap['poceeding_certificate_authority_other']="" ; 
  			$datap['has_prosecution_file']="" ;
  			$datap['status_of_cases']="";
  			$datap['prosecution_file_authority']="" ;
  			$datap['prosecution_file_place']="" ;
  			$datap['date_of_disposed']="" ;
  			$datap['type_of_disposed']="" ;
  			$datap['prosecution_file_orderno']="" ;
  			$datap['certificate_case_dispose']="" ;
  			$datap['certificate_issue_caseno']="" ;
  			$datap['date_certificate_case']= NULL;
  			$datap['poceeding_certificate_orderno']="" ;
  			$datap['compansation_date']=  NULL;
  		
  		}
  		
  		$this->db->where('child_id', $child_id);
  		$this->db->update('labour_act', $datap);
  		
  		
  		$dataq['uid']=$this->session->userdata('login_user_id');
  		$dataq['module_id']=$child_id;
  		$dataq['module_name']='labour_act';
  		$dataq['date_time']=date("Y-m-d H:i:s");
  		$this->db->insert('history_update', $dataq);
  		
  	 }
  }
