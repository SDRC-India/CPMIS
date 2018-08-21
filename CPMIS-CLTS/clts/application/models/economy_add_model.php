
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<?php
class Economy_add_model extends CI_Model {
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
      public function get_economy_list_data($role_id,$district_id)
      {
        if ($role_id==6) {
    		      $quer="select child_name,child_basic_detail.child_id as child_id,child_basic_detail.pstatus as pstatus,child_family_economy.structure_type as structure_type,child_family_economy.structure_type_other  as structure_type_other,child_family_economy.bpl_card as bpl_card,child_family_economy.indira_awas as indira_awas,child_family_economy.rsby_card as rsby_card from order_after_production 
LEFT join child_basic_detail on child_basic_detail.child_id = order_after_production.child_id
LEFT join child_family_economy on child_family_economy.child_id = order_after_production.child_id

WHERE child_basic_detail.disposed_ls=0 AND order_type='cci' and cci_dist='" .$district_id."' ";
    		 }
    		 else {
    		 		if($role_id==7 || $role_id==8){
              $quer="select child_name,child_basic_detail.child_id as child_id,child_basic_detail.pstatus as pstatus,child_family_economy.structure_type as structure_type,child_family_economy.structure_type_other  as structure_type_other,child_family_economy.bpl_card as bpl_card,child_family_economy.indira_awas as indira_awas,child_family_economy.rsby_card as rsby_card from final_order 
LEFT JOIN  child_basic_detail on child_basic_detail.child_id = final_order.child_id
LEFT JOIN  child_family_economy on child_family_economy.child_id = final_order.child_id  WHERE child_basic_detail.disposed_ls=0 AND  child_basic_detail.ls_activate='Y' and child_basic_detail.district_id='".$district_id."' AND (final_order.dist='' or final_order.dist IS NULL) OR final_order.dist='".$district_id."' ";
    		 		
    		 		}
          }

        return $this->db->query($quer)->result_array();
      }
    function get_economy_data($child_id)
    {
      return $this->db->get_where('child_family_economy' , array('child_id' => $child_id))->result_array();
    }
    //child economy add
    function economy_add($project_id) {
      $datap['child_id']=$project_id;
      $datap['uid']=$this->session->userdata('login_user_id');
      $datap['last_date_update']=date("d-m-Y");
      $datap['structure_type']=$this->input->post('structure_type');
      if($datap['structure_type']=='Others'){
        $datap['structure_type_other']=$this->input->post('structure_type_other');
      }else{
        $datap['structure_type_other']='';
      }
      $datap['roofing_quality']=$this->input->post('roofing_quality');
      if($datap['roofing_quality']=='Others'){
        $datap['roofing_quality_other']=$this->input->post('roofing_quality_other');
      }else{
        $datap['roofing_quality_other']='';
      }
      $datap['toilet_facilities']=$this->input->post('toilet_facilities');
      $datap['water_facility']=$this->input->post('water_facility');
      if($datap['water_facility']=="Others")
      {
        $datap['water_facility_other']=$this->input->post('water_facility_other');
      }
      else{
        $datap['water_facility_other']="";
      }

      $datap['electricity_facilities']=$this->input->post('electricity_facilities');
      //$datap['household_articles']=$this->input->post('household_articles');
      $datap['household_articles']=implode(',', $_POST['household_articles']);

      $datap['land_available']=$this->input->post('land_available');
      if($datap['land_available']=='Yes'){
        $datap['land_area']=$this->input->post('land_area');
      }else{
        $datap['land_area']='';
      }
      $datap['vehicles_type']=$this->input->post('vehicles_type');
      if($datap['vehicles_type']=='Other'){
        $datap['other_vehcle']=$this->input->post('other_vehcle');
      }else{
        $datap['other_vehcle']='';
      }
      $datap['bpl_card']=$this->input->post('bpl_card');
      if($datap['bpl_card']=='Yes'){
      $datap['bpl_no']=$this->input->post('bpl_no');
      }else{
      $datap['bpl_no']='';
      }
      $datap['ration_card']=$this->input->post('ration_card');
      if($datap['ration_card']=='Yes'){
      $datap['ration_card_no']=$this->input->post('ration_card_no');
      }else{
      $datap['ration_card_no']='';
      }
      $datap['indira_awas']=$this->input->post('indira_awas');
    
      if($datap['indira_awas']=='Yes'){
      $datap['indira_awas_other']=$this->input->post('indira_awas_other');
      }else{
      $datap['indira_awas_other']='';
      }
      $datap['job_card']=$this->input->post('job_card');
      if($datap['job_card']=='Yes'){
      $datap['card_no']=$this->input->post('card_no');
      }else{
      $datap['card_no']='';
      }
      $datap['rsby_card']=$this->input->post('rsby_card');
      if($datap['rsby_card']=='Yes'){
      $datap['rsby_no']=$this->input->post('rsby_no');
      }else{
      $datap['rsby_no']='';
      }
      $datap['food_security']=$this->input->post('food_security');


      $this->db->where('child_id', $project_id);
      $this->db->update('child_family_economy', $datap);
      $dataq['uid']=$this->session->userdata('login_user_id');
      $dataq['module_id']=$project_id;
      $dataq['module_name']='child_family_economy';
      $dataq['date_time']=date("Y-m-d H:i:s");
      $this->db->insert('history_update', $dataq);
      }

  }
