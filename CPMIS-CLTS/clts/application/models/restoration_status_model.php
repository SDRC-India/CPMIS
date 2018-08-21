
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<?php
class Restoration_status_model extends CI_Model {
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
      public function get_restoration_status_list_data($role_id,$district_id)
      {
          //echo "fjsfjk";
        if($role_id==7 || $role_id==8) {
      $quer="select child_basic_detail.child_id,child_name,pstatus,child_restoration_status.place_restored as place_restored from child_basic_detail
      join child_restoration_status on child_basic_detail.child_id=child_restoration_status.child_id COLLATE utf8_unicode_ci
       where child_basic_detail.disposed_ls=0 AND (ls_activate='Y' and district_id='" . $district_id ."' and child_basic_detail.child_id in(select child_id from final_order where dist='' or dist IS NULL)) or child_basic_detail.child_id in(select child_id from final_order where dist='" .$district_id . "') ";
            }
        else {
        if ($role_id==6) {
      		    $quer="select child_basic_detail.child_id,child_name,pstatus,child_restoration_status.place_restored as place_restored from child_basic_detail from child_basic_detail
              join child_restoration_status on child_basic_detail.child_id=child_restoration_status.child_id COLLATE utf8_unicode_ci  where child_basic_detail.disposed_ls=0 AND child_basic_detail.child_id in(Select child_id from order_after_production where order_type='cci' and cci_dist=(Select area_name from child_area_detail where area_id='" .$district_id. "'))";
        }
        else{
        $quer="select child_basic_detail.child_id,child_name,pstatus,child_restoration_status.place_restored as place_restored from child_basic_detail from child_basic_detail
        join child_restoration_status on child_basic_detail.child_id=child_restoration_status.child_id COLLATE utf8_unicode_ci  where child_basic_detail.disposed_ls=0 AND (district_id='" . $district_id ."' and child_basic_detail.child_id in(select child_id from final_order where dist='' or dist IS NULL)) or child_id in(select child_id from final_order where dist='" .$district_id . "')";
        }
      }
        return $this->db->query($quer)->result_array();
      }
    function get_restoration_status_data($child_id)
    {
      $query="select *,child_basic_detail.dob as dob, child_basic_detail.idate_of_rescue as date_rescued from child_restoration_status
      join child_basic_detail on child_restoration_status.child_id=child_basic_detail.child_id COLLATE utf8_unicode_ci where child_restoration_status.child_id='" . $child_id ."' ";

    return $this->db->query($query)->result_array();
    }
    //create restoration dept
 	 function create_restorationdepartment($project_id) {
 		$datap['child_id']=$project_id;
 		$datap['uid']=$this->session->userdata('login_user_id');
 		$datap['last_date_update']=date("d-m-Y");
 		$datap['place_restored']=$this->input->post('place_restored');
 		$datap['date_of_varifiaction']=$this->input->post('date_of_varifiaction');
 		if($datap['place_restored'] == 'No'){
 		$datap['reason_for_missing']=$this->input->post('reason_for_missing');
 		$datap['date_of_missing']=$this->input->post('date_of_missing');
 		}else{
 			$datap['reason_for_missing']='';
 			$datap['date_of_missing']='';
 		}

 		$this->db->where('child_id', $project_id);
 		$this->db->update('child_restoration_status', $datap);
 		$dataq['uid']=$this->session->userdata('login_user_id');
 		$dataq['module_id']=$project_id;
 		$dataq['module_name']='child_restoration_status';
 		$dataq['date_time']=date("Y-m-d H:i:s");
 		$this->db->insert('history_update', $dataq);
 	 }

  }
