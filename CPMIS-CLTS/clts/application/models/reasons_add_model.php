
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<?php
class Reasons_add_model extends CI_Model {
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
      public function get_reasons_list_data($role_id,$district_id)
      {

        if ($role_id==6) {
    		      $quer=" select child_name,child_basic_detail.child_id as child_id,child_basic_detail.pstatus as pstatus,child_reason_labour.reason_for_leaving as reason_for_leaving,child_reason_labour.staying_prior_rescue  as staying_prior_rescue,child_reason_labour.care_before_rescue as care_before_rescue from order_after_production 
LEFT JOIN child_basic_detail on child_basic_detail.child_id = order_after_production.child_id
LEFT JOIN child_reason_labour on child_reason_labour.child_id = order_after_production.child_id

WHERE child_basic_detail.disposed_ls=0 AND order_type='cci' and cci_dist='" .$district_id. "' ";
    		 }
    		 else {
    		 		if($role_id==7 || $role_id==8){
              $quer="select child_name,child_basic_detail.child_id as child_id,child_basic_detail.pstatus as pstatus,child_reason_labour.reason_for_leaving as reason_for_leaving,child_reason_labour.staying_prior_rescue  as staying_prior_rescue,child_reason_labour.care_before_rescue as care_before_rescue from final_order 
				LEFT JOIN child_basic_detail on child_basic_detail.child_id = final_order.child_id
				LEFT JOIN child_reason_labour on child_reason_labour.child_id = final_order.child_id
				WHERE child_basic_detail.disposed_ls=0 AND child_basic_detail.ls_activate='Y' and child_basic_detail.district_id='".$district_id."' AND (final_order.dist='' or final_order.dist IS NULL) OR final_order.dist='".$district_id."'";
			}
          }

        return $this->db->query($quer)->result_array();
      }
    function get_reasons_data($child_id)
    {
      return $this->db->get_where('child_reason_labour' , array('child_id' => $child_id))->result_array();
    }
    //child reason add

    function reason_add($project_id) {
      $datap['child_id']=$project_id;
      $datap['uid']=$this->session->userdata('login_user_id');
      $datap['last_date_update']=date("d-m-Y");
      $datap['staying_prior_rescue']=$this->input->post('staying_prior_rescue');
      $datap['care_before_rescue']=$this->input->post('care_before_rescue');
      $datap['parent_prior_institute']=$this->input->post('parent_prior_institute');
      $datap['parent_after_institute']=$this->input->post('parent_after_institute');
      if($datap['staying_prior_rescue']=='Guardian')
      {
        $datap['guardian_rel']=$this->input->post('guardian_rel');
      }
      else{
        $datap['guardian_rel']="";
      }
      if($datap['staying_prior_rescue']=='Friends')
      {
          $datap['friends_rel']=$this->input->post('friends_rel');
      }
      else{
          $datap['friends_rel']="";
      }

      $datap['reason_for_leaving']=implode(',', $_POST['reason_for_leaving']);
      $this->db->where('child_id', $project_id);
      $this->db->update('child_reason_labour', $datap);
      $dataq['uid']=$this->session->userdata('login_user_id');
      $dataq['module_id']=$project_id;
      $dataq['module_name']='child_reason_labour';
      $dataq['date_time']=date("Y-m-d H:i:s");
      $this->db->insert('history_update', $dataq);
      }

  }
