
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<?php
class Health_add_model extends CI_Model {
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
      public function get_health_list_data($role_id,$district_id)
      {

        if ($role_id==6) {
    		      $quer="select child_name,child_basic_detail.child_id as child_id,child_basic_detail.pstatus as pstatus,child_health_detail.height as height,child_health_detail.weight  as weight,child_health_detail.blood_group as blood_group  from order_after_production 
LEFT JOIN child_basic_detail on child_basic_detail.child_id = order_after_production.child_id
LEFT JOIN child_health_detail on child_health_detail.child_id = order_after_production.child_id

WHERE child_basic_detail.disposed_ls=0 AND order_type='cci' and cci_dist='" .$district_id. "'";
    		 }
    		 else {
    		 		if($role_id==7 || $role_id==8){
              $quer="select child_name,child_basic_detail.child_id as child_id,child_basic_detail.pstatus as pstatus,child_health_detail.height as height,child_health_detail.weight  as weight,child_health_detail.blood_group as blood_group from final_order 
LEFT join child_basic_detail on child_basic_detail.child_id = final_order.child_id
LEFT join child_health_detail on child_health_detail.child_id = final_order.child_id
WHERE child_basic_detail.disposed_ls=0 AND child_basic_detail.ls_activate='Y' and child_basic_detail.district_id='".$district_id."' AND (final_order.dist='' or final_order.dist IS NULL) OR final_order.dist='".$district_id."'
			  
			  
			  ";
            }
          }

        return $this->db->query($quer)->result_array();
      }
    function get_health_data($child_id)
    {
      return $this->db->get_where('child_health_detail' , array('child_id' => $child_id))->result_array();
    }
    //Health add
    function create_health($project_id) {
 		$datap['child_id']=$project_id;
 		$datap['uid']=$this->session->userdata('login_user_id');
 		$datap['last_date_update']=date("d-m-Y");
 		$datap['height']=$this->input->post('height');
 		$datap['weight']=$this->input->post('weight');
 		$datap['details_of_handicap']=$this->input->post('details_of_handicap');
 		if($datap['details_of_handicap']=='Others'){
 		$datap['details_of_handicap_other']=$this->input->post('details_of_handicap_other');
 		}else{
 		$datap['details_of_handicap_other']='';
 		}
 		$datap['respiratory_disorders']=$this->input->post('respiratory_disorders');
 		$datap['hearing_impairment']=$this->input->post('hearing_impairment');
 		$datap['eye_diseases']=$this->input->post('eye_diseases');
 		$datap['dental_disease']=$this->input->post('dental_disease');
 		$datap['cardiac_diseases']=$this->input->post('cardiac_diseases');
 		$datap['skin_disease']=$this->input->post('skin_disease');
 		$datap['sexually_transmitted_diseases']=$this->input->post('sexually_transmitted_diseases');
 		$datap['neurological_disorders']=$this->input->post('neurological_disorders');
 		$datap['mental_handicap']=$this->input->post('mental_handicap');
 		$datap['physical_handicap']=$this->input->post('physical_handicap');
 		$datap['other_specify']=$this->input->post('other_specify');
 		//prativa
 		$datap['blood_group']=$this->input->post('blood_group');
 		$datap['health_card_issued']=$this->input->post('health_card_issued');
 		if($datap['health_card_issued']=='Yes'){
 			$datap['health_card_issued_yes']=$this->input->post('health_card_issued_yes');
 		}else{
 			$datap['health_card_issued_yes']='';
 		}

 		$this->db->where('child_id', $project_id);
 		$this->db->update('child_health_detail', $datap);
 		$dataq['uid']=$this->session->userdata('login_user_id');
 		$dataq['module_id']=$project_id;
 		$dataq['module_name']='child_health_detail';
 		$dataq['date_time']=date("Y-m-d H:i:s");
 		$this->db->insert('history_update', $dataq);
     }

  }
