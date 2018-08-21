
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<?php
class Social_add_model extends CI_Model {
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
      public function get_social_list_data($role_id,$district_id)
      {

        if ($role_id==6) {
    		      $quer="Select child_name,child_basic_detail.child_id as child_id,child_basic_detail.pstatus as pstatus,child_social_history.details_friendship as details_friendship,child_social_history.majority_friends  as majority_friends,child_social_history.details_membership as details_membership from child_basic_detail join child_social_history on child_basic_detail.child_id=child_social_history.child_id   where child_basic_detail.child_id in(Select child_id from order_after_production where order_type='cci' and cci_dist=(Select area_id from child_area_detail where area_id='" .$district_id. "'))";
    		 }
    		 else {
    		 		if($role_id==7 || $role_id==8){
              $quer="Select child_name,child_basic_detail.child_id as child_id,child_basic_detail.pstatus as pstatus,child_social_history.details_friendship as details_friendship,child_social_history.majority_friends  as majority_friends,child_social_history.details_membership as details_membership from child_basic_detail join child_social_history on child_basic_detail.child_id=child_social_history.child_id    where (ls_activate='Y' and district_id='" . $district_id ."' and child_basic_detail.child_id in(select child_id from final_order where dist='' or dist IS NULL)) or child_basic_detail.child_id in(select child_id from final_order where dist='" .$district_id . "') ";
            }
          }

        return $this->db->query($quer)->result_array();
      }
    function get_social_data($child_id)
    {
      return $this->db->get_where('child_social_history' , array('child_id' => $child_id))->result_array();
    }


    //child social update
    function social_add($project_id) {
      $datap['child_id']=$project_id;
      $datap['uid']=$this->session->userdata('login_user_id');
      $datap['last_date_update']=date("d-m-Y");
      $datap['details_friendship']=$this->input->post('details_friendship');
      if($datap['details_friendship']=='Others'){
      $datap['details_friendship_other']=$this->input->post('details_friendship_other');
      }else{
      $datap['details_friendship_other']='';
      }
      //$datap['majority_friends']=$this->input->post('majority_friends');
      $datap['details_membership']=$this->input->post('details_membership');
      if($datap['details_membership']=='Others'){
      $datap['details_membership_other']=$this->input->post('details_membership_other');
      }else{
      $datap['details_membership_other']='';
      }
      $datap['position_child']=$this->input->post('position_child');
      $datap['purpose_membership']=$this->input->post('purpose_membership');
      if($datap['purpose_membership']=='Others'){
      $datap['purpose_member_other']=$this->input->post('purpose_member_other');
      }else{
      $datap['purpose_member_other']='';
      }
      $datap['attitude_group']=$this->input->post('attitude_group');
      $datap['location_meeting']=$this->input->post('location_meeting');
      $datap['reaction_society']=$this->input->post('reaction_society');

      $datap['majority_friends']=implode(',', $_POST['majority_friends']);
      $datap['social_acceptance']=$this->input->post('social_acceptance');

      $datap['reaction_police']=$this->input->post('reaction_police');
      $this->db->where('child_id', $project_id);
      $this->db->update('child_social_history', $datap);
      $dataq['uid']=$this->session->userdata('login_user_id');
      $dataq['module_id']=$project_id;
      $dataq['module_name']='child_social_history';
      $dataq['date_time']=date("Y-m-d H:i:s");
      $this->db->insert('history_update', $dataq);
      }


  }
