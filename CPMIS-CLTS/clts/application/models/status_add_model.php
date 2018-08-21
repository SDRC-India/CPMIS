
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<?php
class Status_add_model extends CI_Model {
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
      public function get_status_list_data($role_id,$district_id)
      {

        if ($role_id==6) {
    		      $quer="select child_name,child_basic_detail.child_id as child_id,child_basic_detail.pstatus as pstatus,child_employment_status.working_hours as working_hours,child_employment_status.income_utilization  as income_utilization,child_employment_status.savings as savings,child_employment_status.savings_other  as savings_other  from order_after_production 
LEFT JOIN child_basic_detail on child_basic_detail.child_id = order_after_production.child_id
LEFT JOIN child_employment_status on child_employment_status.child_id = order_after_production.child_id

WHERE child_basic_detail.disposed_ls=0 AND order_type='cci' and cci_dist='" .$district_id. "' ";
    		 }
    		 else {
    		 		if($role_id==7 || $role_id==8){
              $quer="select child_name,child_basic_detail.child_id as child_id,child_basic_detail.pstatus as pstatus,child_employment_status.working_hours as working_hours,child_employment_status.income_utilization  as income_utilization,child_employment_status.savings as savings,child_employment_status.savings_other  as savings_other  from final_order 
LEFT JOIN child_basic_detail on child_basic_detail.child_id = final_order.child_id
LEFT JOIN child_employment_status on child_employment_status.child_id = final_order.child_id

WHERE child_basic_detail.disposed_ls=0 AND child_basic_detail.ls_activate='Y' and child_basic_detail.district_id='".$district_id."' AND (final_order.dist='' or final_order.dist IS NULL) OR final_order.dist='".$district_id."'";
            }
          }

        return $this->db->query($quer)->result_array();
      }
    function get_status_data($child_id)
    {
      return $this->db->get_where('child_employment_status' , array('child_id' => $child_id))->result_array();
    }
    //child status add
    function status_add($project_id) {
  		$datap['child_id']=$project_id;
  		$datap['uid']=$this->session->userdata('login_user_id');
  		$datap['last_date_update']=date("d-m-Y");
  		$datap['working_hours']=$this->input->post('working_hours');
  		$datap['income_utilization']=$this->input->post('income_utilization');
  		$datap['savings']=$this->input->post('savings');
  		if($datap['savings']=='Others'){
  		$datap['savings_other']=$this->input->post('savings_other');
  		}else{
  		$datap['savings_other']='';
  		}
  		$datap['abuse_met']=$this->input->post('abuse_met');
  		if($datap['abuse_met']=='Others'){
  			$datap['verbal_abuse_other']=$this->input->post('verbal_abuse_other');
  		}else{
  			$datap['verbal_abuse_other']='';
  		}
  		$datap['exploitation_faced']=$this->input->post('exploitation_faced');
  		if($datap['exploitation_faced']=='Others'){
  		$datap['exploitation_other']=$this->input->post('exploitation_other');
  		}else{
  		$datap['exploitation_other']='';
  		}
  		$datap['physical_abuse']=$this->input->post('physical_abuse');
  		if($datap['physical_abuse']=='Others'){
  		$datap['physical_abuse_other']=$this->input->post('physical_abuse_other');
  		}else{
  		$datap['physical_abuse_other']='';
  		}
  		$datap['sexual_abuse']=$this->input->post('sexual_abuse');
  		if($datap['sexual_abuse']=='Others'){
  		$datap['sexual_abuse_other']=$this->input->post('sexual_abuse_other');
  		}else{
  		$datap['sexual_abuse_other']='';
  		}
  		$datap['denial_food']=$this->input->post('denial_food');
  		if($datap['denial_food']=='Others'){
  		$datap['denial_food_other']=$this->input->post('denial_food_other');
  		}else{
  		$datap['denial_food_other']='';
  		}
  		$datap['beaten_mercilessly']=$this->input->post('beaten_mercilessly');
  		if($datap['beaten_mercilessly']=='Others'){
  		$datap['beaten_mercilessly_other']=$this->input->post('beaten_mercilessly_other');
  		}else{
  		$datap['beaten_mercilessly_other']='';
  		}
  		$datap['causing_injury']=$this->input->post('causing_injury');
  		if($datap['causing_injury'] == 'Others'){
  		$datap['causing_injury_other']=$this->input->post('causing_injury_other');
  		}else{
  		$datap['causing_injury_other']='';
  		}
  		$datap['other_plz_specify']=$this->input->post('other_plz_specify');




  		$this->db->where('child_id', $project_id);
  		$this->db->update('child_employment_status', $datap);
  		$dataq['uid']=$this->session->userdata('login_user_id');
  		$dataq['module_id']=$project_id;
  		$dataq['module_name']='child_habit_detail';
  		$dataq['date_time']=date("Y-m-d H:i:s");
  		$this->db->insert('history_update', $dataq);
      }


  }
