
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<?php
class Family_add_model extends CI_Model {
      function __construct()
      {
          parent::__construct();
          $this->load->database();

      }
      //to get the account_role_id
      function get_role_id($staff_id)
      {
        $role = $this->db->get_where('staff',array('staff_id'=>$staff_id))->result_array();
        return $role;
      }
      public function get_family_list_data($role_id,$district_id)
      {

        if ($role_id==6) {
    		      $quer="select child_name,child_basic_detail.child_id as child_id,child_basic_detail.pstatus as pstatus,child_family_detail.is_family_migrate as is_family_migrate,child_family_detail.type_of_family  as type_of_family,child_family_detail.father_mother as father_mother  from order_after_production 
LEFT JOIN  child_basic_detail on child_basic_detail.child_id = order_after_production.child_id
LEFT JOIN  child_family_detail on child_family_detail.child_id = order_after_production.child_id

WHERE child_basic_detail.disposed_ls=0 AND order_type='cci' and cci_dist='" .$district_id. "'";
    		 }
    		 else {
    		 		if($role_id==7 || $role_id==8){
              $quer="select child_name,child_basic_detail.child_id as child_id,child_basic_detail.pstatus as pstatus,child_family_detail.is_family_migrate as is_family_migrate,child_family_detail.type_of_family  as type_of_family,child_family_detail.father_mother as father_mother    from final_order 
LEFT JOIN child_basic_detail on child_basic_detail.child_id = final_order.child_id
LEFT JOIN child_family_detail on child_family_detail.child_id = final_order.child_id

WHERE child_basic_detail.disposed_ls=0 AND child_basic_detail.ls_activate='Y' and child_basic_detail.district_id='".$district_id."' AND (final_order.dist='' or final_order.dist IS NULL) OR final_order.dist='".$district_id."'";
            }
          }

        return $this->db->query($quer)->result_array();
      }
	  
	  //code by dipti
	  	 function bank_account_details($child_id){
		 
		$query = "select * from bank_account_details where child_id='$child_id' ";
		 return $this->db->query($query)->result_array();
 }
	  
	  
	  
    function get_family_data($child_id)
    {
      return $this->db->get_where('child_family_detail' , array('child_id' => $child_id))->result_array();
    }
    //add falimily details
    function family_add($project_id) {
  		$datap['child_id']=$project_id;
  		$datap['uid']=$this->session->userdata('login_user_id');
  		$datap['last_date_update']=date("d-m-Y");
  		$datap['type_of_family']=$this->input->post('type_of_family');
  		if($datap['type_of_family']=='Others'){
  			$datap['type_of_family_other']=$this->input->post('type_of_family_other');
  		}else{
  			$datap['type_of_family_other']='';
  		}
  		$datap['is_family_migrate']=$this->input->post('is_family_migrate');
  		if($datap['is_family_migrate']=='Yes'){
  			$datap['type_migration']=$this->input->post('type_migration');
  		}else{
  			$datap['type_migration']='';
  		}
  		$datap['father_mother']=$this->input->post('father_mother');
  		$datap['father_child']=$this->input->post('father_child');
  		$datap['mother_child']=$this->input->post('mother_child');
  		$datap['father_sibling']=$this->input->post('father_sibling');
  		$datap['mother_sibling']=$this->input->post('mother_sibling');
  		$datap['rescue_child_siblings']=$this->input->post('rescue_child_siblings');
  		$datap['overal_relationship']=$this->input->post('overal_relationship');
  		//prativa
  		$datap['total_no_family_male']=$this->input->post('total_no_family_male');
  		$datap['total_no_family_female']=$this->input->post('total_no_family_female');
  		$datap['not_completed_18yrs_male']=$this->input->post('not_completed_18yrs_male');
  		$datap['not_completed_18yrs_female']=$this->input->post('not_completed_18yrs_female');
		
		//code by dipti
		
		if($this->input->post('bank_account')=='00')
		{
		 $bankdata['child_id'] = $project_id;
		 $bankdata['bank_name']=$this->input->post('bank_name');
		 $bankdata['acc_no']=$this->input->post('accont_no');
	     $bankdata['ifsc_code']=$this->input->post('ifsc_code');
		 $bankdata['bank_address']=$this->input->post('bank_address');
	     $this->db->insert('bank_account_details', $bankdata);
		 $datap['bank_id']= $this->db->insert_id();
		
		}
		else{
			
			 $datap['bank_id']=$this->input->post('bank_account');
		}
		//datap['acc_no']=$this->input->post('bank_account');
		$datap['bank_name']=$this->input->post('bank_name_fetch');
		$datap['bank_ifsc_code']=$this->input->post('ifsc_code_fetch');
		$datap['bank_address']=$this->input->post('bank_address_fetch');
		
		
  		$this->db->where('child_id', $project_id);
		
  		$this->db->update('child_family_detail', $datap);
  		$dataq['uid']=$this->session->userdata('login_user_id');
  		$dataq['module_id']=$project_id;
  		$dataq['module_name']='child_family_detail';
  		$dataq['date_time']=date("Y-m-d H:i:s");
  		$this->db->insert('history_update', $dataq);
      }
	  
	  //code By dipti
  function bank_account($value){
		 
		 $sql = "SELECT * FROM bank_account_details  WHERE id = '$value'";
		  $result = $this->db->query($sql)->first_row();
 
   if($result)
   {
      return $result;
   }
   else
   {
     return false;
   }
  // echo $result;
 }
	 function bank_update($update_bank,$child_update_id){
		 
		 $this->db->where('child_id', $child_update_id);
         $result =  $this->db->update('child_family_detail', $update_bank);
		// print_r($result);exit;
	     echo $this->db->last_query();
   
     return true;
	 } 

	  
  }
