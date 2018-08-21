
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<?php
class Education_add_model extends CI_Model {
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
      public function get_education_list_data($role_id,$district_id)
      {
           
        if ($role_id==6) {
    		      $quer="select child_name,child_basic_detail.child_id as child_id,child_basic_detail.pstatus as pstatus,child_educational_detail.school_attended as school_attended,child_educational_detail.vocational_training as vocational_training,child_educational_detail.other as other from order_after_production 
				LEFT JOIN child_basic_detail on child_basic_detail.child_id = order_after_production.child_id
				LEFT JOIN child_educational_detail on child_educational_detail.child_id = order_after_production.child_id

WHERE child_basic_detail.disposed_ls=0 AND order_type='cci' and cci_dist='" .$district_id. "'";
    		 }
    		 else {
    		 		if($role_id==7 || $role_id==8){
              $quer="select child_name,child_basic_detail.child_id as child_id,child_basic_detail.pstatus as pstatus,child_educational_detail.school_attended as school_attended,child_educational_detail.vocational_training as vocational_training,child_educational_detail.other as other from final_order 
join child_basic_detail on child_basic_detail.child_id = final_order.child_id
join child_educational_detail on child_educational_detail.child_id = final_order.child_id
WHERE child_basic_detail.disposed_ls=0 AND  child_basic_detail.ls_activate='Y' and child_basic_detail.district_id='".$district_id."' AND (final_order.dist='' or final_order.dist IS NULL) OR final_order.dist='".$district_id."'";
            }
          }
        return $this->db->query($quer)->result_array();
      }
    function get_education_data($child_id)
    {
		
      return $this->db->get_where('child_educational_detail' , array('child_id' => $child_id))->result_array();
	  }
    //education add
    function create_education($project_id) {
 		$datap['child_id']=$project_id;
 		$datap['uid']=$this->session->userdata('login_user_id');
 		$datap['last_date_update']=date("d-m-Y");
 		$datap['school_attended']=$this->input->post('school_attended');
    if(	$datap['school_attended']=='Yes')
    {
      	$datap['education_level']=$this->input->post('edu2');
        $datap['details_of_school']=$this->input->post('schooldetail');
        if($datap['details_of_school'] =='Others'){
          $datap['school_detail_other']=$this->input->post('school_detail_other');
        }else{
          $datap['school_detail_other']='';
        }
        $datap['medium_of_study']=$this->input->post('medium_of_study');
        if($datap['medium_of_study']=='Other'){
          $datap['medium_other']=$this->input->post('medium_other');
        }else{
          $datap['medium_other']='';
        }
        $datap['reason_for_leaving']=$this->input->post('edu5');
        if($datap['reason_for_leaving']=='Others'){
          $datap['reason_other']=$this->input->post('reason_other');
        }else{
          $datap['reason_other']='';
        }
    }
    else{
      $datap['education_level']="";
      $datap['details_of_school']="";
      $datap['medium_of_study']="";
      $datap['reason_for_leaving']="";
      $datap['school_detail_other']="";
        $datap['medium_other']='';
        $datap['reason_other']='';

    }


 		$datap['vocational_training']=$this->input->post('vocational_training');
  //dipti
  $datap['vocational_type']=$this->input->post('vocational_type');
 
 		if($datap['vocational_training']=='Yes'){
 			$datap['vocational_trade_name']=$this->input->post('vocational_trade_name');
 			$datap['no_of_years']=$this->input->post('no_of_years');
 		}else{
 			$datap['vocational_trade_name']='';
 			$datap['no_of_years']='';
 		}
 		$datap['other']=$this->input->post('other');

 		$this->db->where('child_id', $project_id);
 		$this->db->update('child_educational_detail', $datap);
 		$dataq['uid']=$this->session->userdata('login_user_id');
 		$dataq['module_id']=$project_id;
 		$dataq['module_name']='child_educational_detail';
 		$dataq['date_time']=date("Y-m-d H:i:s");
 		$this->db->insert('history_update', $dataq);
     }
  }
