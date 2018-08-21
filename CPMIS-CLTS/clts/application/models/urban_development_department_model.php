
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<?php
class Urban_development_department_model extends CI_Model {
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
      public function get_urban_development_department_list_data($role_id,$district_id)
      {
          
        if($role_id==7 || $role_id==8) {
      $quer="select child_basic_detail.id as id,child_basic_detail.child_id,child_basic_detail.child_name,
child_basic_detail.father_name,child_basic_detail.pstatus,
	child_urban_development_deoartment.is_sjsry as is_sjsry,child_urban_development_deoartment.is_jnrum
as is_jnrum from final_order 
left join child_basic_detail on child_basic_detail.child_id = final_order.child_id
left join child_urban_development_deoartment on child_urban_development_deoartment.child_id = final_order.child_id
WHERE child_basic_detail.disposed_ls=0 AND child_basic_detail.ls_activate='Y' 
AND child_basic_detail.district_id='$district_id'
AND (final_order.dist='' or final_order.dist IS NULL) 
OR final_order.dist='$district_id'";
	   
	   
            }
        else {
        if ($role_id==6) {
      		    $quer="select child_basic_detail.child_id,child_name,pstatus,
				child_urban_development_deoartment.is_sjsry as is_sjsry,child_urban_development_deoartment.is_jnrum
				as is_jnrum from child_basic_detail
             left  join child_urban_development_deoartment on 
			  child_basic_detail.child_id=child_urban_development_deoartment.child_id
			  where child_basic_detail.disposed_ls=0 AND child_basic_detail.child_id in
			  (Select child_id from order_after_production where order_type='cci'
			  and cci_dist=(Select area_name from child_area_detail where area_id='" .$district_id. "'))";
        }
        else{
        $quer="select child_basic_detail.id as id,child_basic_detail.child_id,child_basic_detail.child_name,
child_basic_detail.father_name,child_basic_detail.pstatus,
	child_urban_development_deoartment.is_sjsry as is_sjsry,child_urban_development_deoartment.is_jnrum
as is_jnrum from final_order 
left join child_basic_detail on child_basic_detail.child_id = final_order.child_id
left join child_urban_development_deoartment on child_urban_development_deoartment.child_id = final_order.child_id
WHERE child_basic_detail.disposed_ls=0 AND child_basic_detail.district_id='$district_id'
AND (final_order.dist='' or final_order.dist IS NULL) 
OR final_order.dist='$district_id'";
        }
      }
        return $this->db->query($quer)->result_array();
      }
    function get_urban_development_department_data($child_id)
    {
      return $this->db->get_where('child_urban_development_deoartment' , array('child_id' => $child_id))->result_array();

    }
    //create urban dept
  	 function create_urbandepartment($project_id) {
  		$datap['child_id']=$project_id;
  		$datap['uid']=$this->session->userdata('login_user_id');
  		$datap['last_date_update']=date("d-m-Y");
  		$datap['is_sjsry']=$this->input->post('is_sjsry');
      if($datap['is_sjsry']!="Yes")
      {
        if(file_exists('uploads/entitlement_proof/urban/q1/'. $project_id . '.jpg'))
        {
          unlink('uploads/entitlement_proof/urban/q1/'. $project_id . '.jpg');
        }
        if(file_exists('uploads/entitlement_proof/urban/q1/'. $project_id . '.pdf'))
        {
            unlink('uploads/entitlement_proof/urban/q1/'. $project_id . '.pdf');
        }
        if(file_exists('uploads/entitlement_proof/urban/q1/'. $project_id . '.png'))
        {
          unlink('uploads/entitlement_proof/urban/q1/'. $project_id . '.png');
        }
      }
  		$datap['is_jnrum']=$this->input->post('is_jnrum');
      if($datap['is_jnrum']!="Yes")
      {
        if(file_exists('uploads/entitlement_proof/urban/q2/'. $project_id . '.jpg'))
        {
          unlink('uploads/entitlement_proof/urban/q2/'. $project_id . '.jpg');
        }
        if(file_exists('uploads/entitlement_proof/urban/q2/'. $project_id . '.pdf'))
        {
            unlink('uploads/entitlement_proof/urban/q2/'. $project_id . '.pdf');
        }
        if(file_exists('uploads/entitlement_proof/urban/q2/'. $project_id . '.png'))
        {
          unlink('uploads/entitlement_proof/urban/q2/'. $project_id . '.png');
        }
      }
      //end

  		$this->db->where('child_id', $project_id);
  		$this->db->update('child_urban_development_deoartment', $datap);
  		$dataq['uid']=$this->session->userdata('login_user_id');
  		$dataq['module_id']=$project_id;
  		$dataq['module_name']='child_urban_development_deoartment';
  		$dataq['date_time']=date("Y-m-d H:i:s");
  		$this->db->insert('history_update', $dataq);
  		if( $_FILES["image1"]["type"]=='image/jpeg'){
  				move_uploaded_file($_FILES["image1"]["tmp_name"], 'uploads/entitlement_proof/urban/q1/'. $project_id . '.jpg');
  			}
  			if($_FILES["image1"]["type"]=='application/pdf'){
  			move_uploaded_file($_FILES["image1"]["tmp_name"], 'uploads/entitlement_proof/urban/q1/'. $project_id . '.pdf');
  			unlink('uploads/entitlement_proof/urban/q1/'. $project_id . '.jpg');
  			}
  			if($_FILES["image1"]["type"]=='image/png'){
  			move_uploaded_file($_FILES["image1"]["tmp_name"], 'uploads/entitlement_proof/urban/q1/'. $project_id . '.png');
  			unlink('uploads/entitlement_proof/urban/q1/'. $project_id . '.jpg');
  			unlink('uploads/entitlement_proof/urban/q1/'. $project_id . '.pdf');
  			}
  			//2nd
  			if( $_FILES["image2"]["type"]=='image/jpeg'){
  				move_uploaded_file($_FILES["image2"]["tmp_name"], 'uploads/entitlement_proof/urban/q2/'. $project_id . '.jpg');
  			}
  			if($_FILES["image2"]["type"]=='application/pdf'){
  			move_uploaded_file($_FILES["image2"]["tmp_name"], 'uploads/entitlement_proof/urban/q2/'. $project_id . '.pdf');
  			unlink('uploads/entitlement_proof/urban/q2/'. $project_id . '.jpg');
  			}
  			if($_FILES["image2"]["type"]=='image/png'){
  			move_uploaded_file($_FILES["image2"]["tmp_name"], 'uploads/entitlement_proof/urban/q2/'. $project_id . '.png');
  			unlink('uploads/entitlement_proof/urban/q2/'. $project_id . '.jpg');
  			unlink('uploads/entitlement_proof/urban/q2/'. $project_id . '.pdf');
  			}
  	 }



  }
