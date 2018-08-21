
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<?php
class Health_department_model extends CI_Model {
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
      public function get_health_department_list_data($role_id,$district_id)
      {
          //echo "fjsfjk";
        if($role_id==7 || $role_id==8) {
      $quer="select child_basic_detail.id as id,child_basic_detail.child_id,child_basic_detail.child_name,
child_basic_detail.father_name,child_basic_detail.pstatus,
	child_health_department.is_health_cards as is_health_cards from final_order 
join child_basic_detail on child_basic_detail.child_id = final_order.child_id
join child_health_department on child_health_department.child_id = final_order.child_id
WHERE child_basic_detail.disposed_ls=0 AND child_basic_detail.ls_activate='Y' 
AND child_basic_detail.district_id='$district_id'
AND (final_order.dist='' or final_order.dist IS NULL) 
OR final_order.dist='$district_id' ";
            }
        else {
        if ($role_id==6) {
      		    $quer="select child_basic_detail.child_id,child_name,pstatus,
				child_health_department.is_health_cards as is_health_cards
            from child_basic_detail  join child_health_department on
			child_basic_detail.child_id=child_health_department.child_id
			where child_basic_detail.disposed_ls=0 AND child_basic_detail.child_id in(Select child_id from order_after_production
			where order_type='cci' and cci_dist=(Select area_name from child_area_detail 
			where area_id='" .$district_id. "'))";
        }
        else{
        $quer="select child_basic_detail.id as id,child_basic_detail.child_id,child_basic_detail.child_name,
child_basic_detail.father_name,child_basic_detail.pstatus,
	child_health_department.is_health_cards as is_health_cards from final_order 
join child_basic_detail on child_basic_detail.child_id = final_order.child_id
join child_health_department on child_health_department.child_id = final_order.child_id
WHERE  child_basic_detail.disposed_ls=0 AND child_basic_detail.district_id='$district_id'
AND (final_order.dist='' or final_order.dist IS NULL) 
OR final_order.dist='$district_id'')";
        }
      }
        return $this->db->query($quer)->result_array();
      }
    function get_health_department_data($child_id)
    {
      return $this->db->get_where('child_health_department' , array('child_id' => $child_id))->result_array();

    }
    //create health dept
  	 function create_healthdepartment($project_id) {
  		            $datap['child_id']=$project_id;
  					$datap['uid']=$this->session->userdata('login_user_id');
  					$datap['last_date_update']=date("d-m-Y");
  					$datap['is_health_cards']=$this->input->post('is_health_cards');
            if($datap['is_health_cards']!="Yes")
            {
              if(file_exists('uploads/entitlement_proof/health/'. $project_id . '.jpg'))
              {
                unlink('uploads/entitlement_proof/health/'. $project_id . '.jpg');
              }
              if(file_exists('uploads/entitlement_proof/health/'. $project_id . '.pdf'))
              {
                  unlink('uploads/entitlement_proof/health/'. $project_id . '.pdf');
              }
              if(file_exists('uploads/entitlement_proof/health/'. $project_id . '.png'))
              {
                unlink('uploads/entitlement_proof/health/'. $project_id . '.png');
              }
            }
  					$this->db->where('child_id', $project_id);
  					$this->db->update('child_health_department', $datap);
  					$dataq['uid']=$this->session->userdata('login_user_id');
  					$dataq['module_id']=$project_id;
  					$dataq['module_name']='child_health_department';
  					$dataq['date_time']=date("Y-m-d H:i:s");
  					$this->db->insert('history_update', $dataq);
  					//move_uploaded_file($_FILES['image']['tmp_name'], 'uploads/entitlement_proof/health/' . $project_id . '.jpg');
  			if( $_FILES["image"]["type"]=='image/jpeg'){
  			move_uploaded_file($_FILES["image"]["tmp_name"], 'uploads/entitlement_proof/health/'. $project_id . '.jpg');
  			}
  			if($_FILES["image"]["type"]=='application/pdf'){
  			move_uploaded_file($_FILES["image"]["tmp_name"], 'uploads/entitlement_proof/health/'. $project_id . '.pdf');
  			unlink('uploads/entitlement_proof/health/'. $project_id . '.jpg');
  			}
  			if($_FILES["image"]["type"]=='image/png'){
  			move_uploaded_file($_FILES["image"]["tmp_name"], 'uploads/entitlement_proof/health/'. $project_id . '.png');
  			unlink('uploads/entitlement_proof/health/'. $project_id . '.jpg');
  			unlink('uploads/entitlement_proof/health/'. $project_id . '.pdf');
  			}
  	 }



  }
