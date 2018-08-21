
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<?php
class Minority_welfare_department_model extends CI_Model {
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
      public function get_minority_welfare_department_list_data($role_id,$district_id)
      {
          
        if($role_id==7 || $role_id==8) {
      $quer="select child_basic_detail.child_id,child_basic_detail.child_name,child_basic_detail.pstatus,child_minority_welfare_department.is_housing_scheme as is_housing_scheme,child_minority_welfare_department.is_loan as is_loan,child_minority_welfare_department.additional_loan as additional_loan from child_basic_detail
      left join child_minority_welfare_department on child_basic_detail.child_id=child_minority_welfare_department.child_id
       where child_basic_detail.disposed_ls=0 AND (ls_activate='Y' and district_id='" . $district_id ."' and child_basic_detail.child_id in(select child_id from final_order where dist='' or dist IS NULL)) or child_basic_detail.child_id in(select child_id from final_order where dist='" .$district_id . "') ";
            }
        else {
        if ($role_id==6) {
      		    $quer="select child_basic_detail.child_id,child_basic_detail.child_name,child_basic_detail.pstatus,child_minority_welfare_department.is_housing_scheme as is_housing_scheme,child_minority_welfare_department.is_loan as is_loan,child_minority_welfare_department.additional_loan as additional_loan from child_basic_detail
              left join child_minority_welfare_department on child_basic_detail.child_id=child_minority_welfare_department.child_id where child_basic_detail.disposed_ls=0 AND child_basic_detail.child_id in(Select child_id from order_after_production where order_type='cci' and cci_dist=(Select area_name from child_area_detail where area_id='" .$district_id. "'))";
        }
        else{
        $quer="select child_basic_detail.child_id,child_basic_detail.child_name,child_basic_detail.pstatus,child_minority_welfare_department.is_housing_scheme as is_housing_scheme,child_minority_welfare_department.is_loan as is_loan,child_minority_welfare_department.additional_loan as additional_loan from child_basic_detail
        left join child_minority_welfare_department on child_basic_detail.child_id=child_minority_welfare_department.child_id where child_basic_detail.disposed_ls=0 AND (district_id='" . $district_id ."' and child_basic_detail.child_id in(select child_id from final_order where dist='' or dist IS NULL)) or child_id in(select child_id from final_order where dist='" .$district_id . "')";
        }
      }
        return $this->db->query($quer)->result_array();
      }
    function get_minority_welfare_department_data($child_id)
    {
      return $this->db->get_where('child_minority_welfare_department' , array('child_id' => $child_id))->result_array();

    }
    //create minoritydepartment
    function create_minoritydepartment($project_id) {
     $datap['child_id']=$project_id;
     $datap['uid']=$this->session->userdata('login_user_id');
     $datap['last_date_update']=date("d-m-Y");
     $datap['is_housing_scheme']=$this->input->post('is_housing_scheme');
     $datap['is_loan']=$this->input->post('is_loan');
	 $datap['additional_loan']=$this->input->post('additional_loan');

     if($datap['is_housing_scheme']!="Yes")
     {
       if(file_exists('uploads/entitlement_proof/minority/q1/'. $project_id . '.jpg'))
       {
         unlink('uploads/entitlement_proof/minority/q1/'. $project_id . '.jpg');
       }
       if(file_exists('uploads/entitlement_proof/minority/q1/'. $project_id . '.pdf'))
       {
           unlink('uploads/entitlement_proof/minority/q1/'. $project_id . '.pdf');
       }
       if(file_exists('uploads/entitlement_proof/minority/q1/'. $project_id . '.png'))
       {
         unlink('uploads/entitlement_proof/minority/q1/'. $project_id . '.png');
       }
     }
     if($datap['is_loan']!="Yes")
     {
       
         if(file_exists('uploads/entitlement_proof/minority/q2/'. $project_id . '.jpg'))
         {
           unlink('uploads/entitlement_proof/minority/q2/'. $project_id . '.jpg');
         }
         if(file_exists('uploads/entitlement_proof/minority/q2/'. $project_id . '.pdf'))
         {
             unlink('uploads/entitlement_proof/minority/q2/'. $project_id . '.pdf');
         }
         if(file_exists('uploads/entitlement_proof/minority/q2/'. $project_id . '.png'))
         {
           unlink('uploads/entitlement_proof/minority/q2/'. $project_id . '.png');
         }
     }
	 //dipti
	    if($datap['additional_loan']!="Yes")
     {
       
         if(file_exists('uploads/entitlement_proof/minority/q3/'. $project_id . '.jpg'))
         {
           unlink('uploads/entitlement_proof/minority/q3/'. $project_id . '.jpg');
         }
         if(file_exists('uploads/entitlement_proof/minority/q3/'. $project_id . '.pdf'))
         {
             unlink('uploads/entitlement_proof/minority/q3/'. $project_id . '.pdf');
         }
         if(file_exists('uploads/entitlement_proof/minority/q3/'. $project_id . '.png'))
         {
           unlink('uploads/entitlement_proof/minority/q3/'. $project_id . '.png');
         }
     }
     $this->db->where('child_id', $project_id);
     $this->db->update('child_minority_welfare_department', $datap);
     $dataq['uid']=$this->session->userdata('login_user_id');
     $dataq['module_id']=$project_id;
     $dataq['module_name']='child_minority_welfare_department';
     $dataq['date_time']=date("Y-m-d H:i:s");
     $this->db->insert('history_update', $dataq);
     if( $_FILES["image1"]["type"]=='image/jpeg'){
         move_uploaded_file($_FILES["image1"]["tmp_name"], 'uploads/entitlement_proof/minority/q1/'. $project_id . '.jpg');
       }
       if($_FILES["image1"]["type"]=='application/pdf'){
       move_uploaded_file($_FILES["image1"]["tmp_name"], 'uploads/entitlement_proof/minority/q1/'. $project_id . '.pdf');
       unlink('uploads/entitlement_proof/minority/q1/'. $project_id . '.jpg');
       }
       if($_FILES["image1"]["type"]=='image/png'){
       move_uploaded_file($_FILES["image1"]["tmp_name"], 'uploads/entitlement_proof/minority/q1/'. $project_id . '.png');
       unlink('uploads/entitlement_proof/minority/q1/'. $project_id . '.jpg');
       unlink('uploads/entitlement_proof/minority/q1/'. $project_id . '.pdf');
       }

       if( $_FILES["image2"]["type"]=='image/jpeg'){
         move_uploaded_file($_FILES["image2"]["tmp_name"], 'uploads/entitlement_proof/minority/q2/'. $project_id . '.jpg');
       }
       if($_FILES["image2"]["type"]=='application/pdf'){
       move_uploaded_file($_FILES["image2"]["tmp_name"], 'uploads/entitlement_proof/minority/q2/'. $project_id . '.pdf');
       unlink('uploads/entitlement_proof/minority/q2/'. $project_id . '.jpg');
       }
       if($_FILES["image2"]["type"]=='image/png'){
       move_uploaded_file($_FILES["image2"]["tmp_name"], 'uploads/entitlement_proof/minority/q2/'. $project_id . '.png');
       unlink('uploads/entitlement_proof/minority/q2/'. $project_id . '.jpg');
       unlink('uploads/entitlement_proof/minority/q2/'. $project_id . '.pdf');
       }
	   //dipti
	   
       if( $_FILES["image3"]["type"]=='image/jpeg'){
         move_uploaded_file($_FILES["image3"]["tmp_name"], 'uploads/entitlement_proof/minority/q3/'. $project_id . '.jpg');
       }
       if($_FILES["image3"]["type"]=='application/pdf'){
       move_uploaded_file($_FILES["image3"]["tmp_name"], 'uploads/entitlement_proof/minority/q3/'. $project_id . '.pdf');
       unlink('uploads/entitlement_proof/minority/q3/'. $project_id . '.jpg');
       }
       if($_FILES["image3"]["type"]=='image/png'){
       move_uploaded_file($_FILES["image3"]["tmp_name"], 'uploads/entitlement_proof/minority/q3/'. $project_id . '.png');
       unlink('uploads/entitlement_proof/minority/q3/'. $project_id . '.jpg');
       unlink('uploads/entitlement_proof/minority/q3/'. $project_id . '.pdf');
       }
    }



  }
