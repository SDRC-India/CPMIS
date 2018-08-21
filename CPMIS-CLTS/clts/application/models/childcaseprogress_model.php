
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<?php
class Childcaseprogress_model extends CI_Model {
  function __construct()
  {
      parent::__construct();
    }

     
//to get the account_role_id
      function get_role_id($role_id)
      {
        $role = $this->db->get_where('staff',array('staff_id'=>$role_id))->result_array();
		//print_r($role);
        return $role;
      }
    
       function get_list($role_id,$dist_id)
      {
        $role = $this->db->get_where('staff',array('staff_id'=>$role_id))->result_array();
		//print_r($role);
        return $role;
      }    

	   function get_child_list()
      {
       $query = "select * from child_basic_detail";
		 return $this->db->query($query)->result_array();
      }
   
   public function getChildDetails($from,$to)
   {
	
  /*$SQL = "SELECT a.child_id, cbd.child_name,cbd.idate_of_rescue, oap.produced, oap.parents_name, oap.order_type, fo.type_order,lrd.interest_of_rehabilitation,lrd.interest_of_rehabilitation_no,chd.details_of_handicap,chd.dental_disease,chd.eye_diseases,chd.health_card_issued,crl.reason_leaving_family,crl.reason_for_leaving,csh.details_friendship,csh.details_membership,csh.details_friendship_other,csh.details_membership_other,la.compensation_notice_issued,la.has_prosecution_file,
	 la.prosecution_file_orderno,fa.final_ordered,fa.type_order,fa.final_order_date,fd.type_of_family,fd.type_migration,
      fd.overal_relationship	 
	          FROM child a
              LEFT JOIN child_basic_detail cbd ON a.child_id = cbd.child_id
              LEFT JOIN order_after_production oap ON a.child_id = oap.child_id
              LEFT JOIN final_order fo ON a.child_id = fo.child_id
			  LEFT JOIN  child_health_detail chd ON a.child_id = chd.child_id
			  LEFT JOIN  child_reason_labour crl ON a.child_id = crl.child_id
			  LEFT JOIN  child_social_history csh ON a.child_id = csh.child_id
			  LEFT JOIN child_labour_resource_department lrd ON a.child_id = lrd.child_id
			  LEFT JOIN labour_act la ON a.child_id = la.child_id
			  LEFT JOIN final_order fa ON a.child_id = fa.child_id
			  LEFT JOIN child_family_detail fd ON a.child_id = fd.child_id
              LEFT JOIN child_minority_welfare_department cmwd ON a.child_id = cmwd.child_id 
			  WHERE 
			  STR_TO_DATE(cbd.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' ";*/
   	
 	$SQL = "SELECT cbd.child_id,
cbd.child_name,
cbd.idate_of_rescue, 
oap.produced,
oap.parents_name, 
oap.order_type, fo.type_order,
lrd.interest_of_rehabilitation,
lrd.interest_of_rehabilitation_no,
chd.details_of_handicap,
chd.dental_disease,
chd.eye_diseases,
chd.health_card_issued,
crl.reason_leaving_family,
crl.reason_for_leaving,
csh.details_friendship,
csh.details_membership,
csh.details_friendship_other,
csh.details_membership_other,
la.compensation_notice_issued,
la.has_prosecution_file, 
la.prosecution_file_orderno,
fa.final_ordered,
fa.type_order,
fa.final_order_date,
fd.type_of_family,
fd.type_migration,
fd.overal_relationship


 FROM child a LEFT JOIN child_basic_detail cbd ON a.child_id = cbd.child_id
 




LEFT JOIN order_after_production oap ON cbd.child_id = oap.child_id 
LEFT JOIN final_order fo ON cbd.child_id = fo.child_id
LEFT JOIN child_health_detail chd ON cbd.child_id = chd.child_id 
LEFT JOIN child_reason_labour crl ON cbd.child_id = crl.child_id
LEFT JOIN child_social_history csh ON cbd.child_id = csh.child_id 
LEFT JOIN child_labour_resource_department lrd ON cbd.child_id = lrd.child_id 
LEFT JOIN labour_act la ON cbd.child_id = la.child_id 
LEFT JOIN final_order fa ON cbd.child_id = fa.child_id 
LEFT JOIN child_family_detail fd ON cbd.child_id = fd.child_id
LEFT JOIN child_minority_welfare_department cmwd ON cbd.child_id = cmwd.child_id 
 WHERE 
STR_TO_DATE(cbd.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' ";
   	
   	
   	
   	
   	
   	
   	
   	
   	
			 
        $query = $this->db->query($SQL);
        return $query->result_array();
	  
   }
     
 }
	  
	  
	  
      


 
