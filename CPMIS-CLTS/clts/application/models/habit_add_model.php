
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<?php
class Habit_add_model extends CI_Model {
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
      public function get_habit_list_data($role_id,$district_id)
      {

        if ($role_id==6) {
    		      $quer="select child_name,child_basic_detail.child_id as child_id,child_basic_detail.pstatus as pstatus,child_habit_detail.detail_delinquent as detail_delinquent,child_habit_detail.reason_delinquent  as reason_delinquent,child_habit_detail.habit as habit,child_habit_detail.nature  as nature  from order_after_production 
LEFT JOIN child_basic_detail on child_basic_detail.child_id = order_after_production.child_id
LEFT JOIN child_habit_detail on child_habit_detail.child_id = order_after_production.child_id

WHERE child_basic_detail.disposed_ls=0 AND order_type='cci' and cci_dist='" .$district_id. "'";
    		 }
    		 else {
    		 		if($role_id==7 || $role_id==8){
              $quer="select child_name,child_basic_detail.child_id as child_id,child_basic_detail.pstatus as pstatus,child_habit_detail.detail_delinquent as detail_delinquent,child_habit_detail.reason_delinquent  as reason_delinquent,child_habit_detail.habit as habit,child_habit_detail.nature  as nature from final_order 
LEFT JOIN child_basic_detail on child_basic_detail.child_id = final_order.child_id
LEFT JOIN child_habit_detail on child_habit_detail.child_id = final_order.child_id
WHERE child_basic_detail.disposed_ls=0 AND child_basic_detail.ls_activate='Y' and child_basic_detail.district_id='".$district_id."' AND (final_order.dist='' or final_order.dist IS NULL) OR final_order.dist='".$district_id."'";
            }
          }

        return $this->db->query($quer)->result_array();
      }
    function get_habit_data($child_id)
    {
      return $this->db->get_where('child_habit_detail' , array('child_id' => $child_id))->result_array();
    }
    //child habit add
    function habit_add($project_id) {
      $datap['child_id']=$project_id;
      $datap['uid']=$this->session->userdata('login_user_id');
      $datap['last_date_update']=date("d-m-Y");
      $datap['detail_delinquent']=$this->input->post('detail_delinquent');
      if($datap['detail_delinquent']=='Others'){
      $datap['detail_delinquent_other']=$this->input->post('detail_delinquent_other');
      }else{
      $datap['detail_delinquent_other']='';
      }
      $datap['reason_delinquent']=$this->input->post('reason_delinquent');
      if($datap['reason_delinquent']=='Other'){
      $datap['reason_delinquent_other']=$this->input->post('reason_delinquent_other');
      }else{
      $datap['reason_delinquent_other']='';
      }
      $datap['nature']=$this->input->post('nature');
      if($datap['nature']=='Other'){
      $datap['nature_other']=$this->input->post('nature_other');
      }else{
      $datap['nature_other']='';
      }
      $datap['habit']=$this->input->post('habit');
      if($datap['habit']=='Other'){
      $datap['habit_other']=$this->input->post('habit_other');
      }else{
      $datap['habit_other']='';
      }
      //for check box value
      $datap['hobbies']=implode(',', $_POST['hobbies']);
      //$my_hobbies= explode(',',$datap['checkBox']);

      $this->db->where('child_id', $project_id);
      $this->db->update('child_habit_detail', $datap);
      $dataq['uid']=$this->session->userdata('login_user_id');
      $dataq['module_id']=$project_id;
      $dataq['module_name']='child_habit_detail';
      $dataq['date_time']=date("Y-m-d H:i:s");
      $this->db->insert('history_update', $dataq);
      }



  }
