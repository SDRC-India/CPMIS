
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<?php
class Education_department_model extends CI_Model {
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
      public function get_education_department_list_data($role_id,$district_id)
      {

      	if($role_id==7 || $role_id==8 || $role_id==18) {
      $quer="select child_basic_detail.child_id,child_name,pstatus,child_education_department.enrolled_school as enrolled_school,child_education_department.school_type as school_type,child_education_department.school_name as school_name from child_basic_detail
      join child_education_department on child_basic_detail.child_id=child_education_department.child_id
       where child_basic_detail.disposed_ls=0 AND (ls_activate='Y' and district_id='" . $district_id ."' and child_basic_detail.child_id in(select child_id from final_order where dist='' or dist IS NULL)) or child_basic_detail.child_id in(select child_id from final_order where dist='" .$district_id . "') ";
      //echo  $quer ;
      	}
        else {
        if ($role_id==6) {
      		    $quer="select child_basic_detail.child_id,child_name,pstatus,child_education_department.enrolled_school as enrolled_school,child_education_department.school_type as school_type,child_education_department.school_name as school_name from child_basic_detail
              join child_education_department on child_basic_detail.child_id=child_education_department.child_id where child_basic_detail.disposed_ls=0 AND child_basic_detail.child_id in(Select child_id from order_after_production where order_type='cci' and cci_dist=(Select area_name from child_area_detail where area_id='" .$district_id. "'))";
        }
        else{
        $quer="select child_basic_detail.child_id,child_name,pstatus,child_education_department.enrolled_school as enrolled_school,child_education_department.school_type as school_type,child_education_department.school_name as school_name from child_basic_detail
        join child_education_department on child_basic_detail.child_id=child_education_department.child_id where child_basic_detail.disposed_ls=0 AND (district_id='" . $district_id ."' and child_basic_detail.child_id in(select child_id from final_order where dist='' or dist IS NULL)) or child_id in(select child_id from final_order where dist='" .$district_id . "')";
        }
      }
        return $this->db->query($quer)->result_array();
      }
    function get_education_department_data($child_id)
    {
      return $this->db->get_where('child_education_department' , array('child_id' => $child_id))->result_array();

    }
    //create edu dept
    	 function  create_edudepartment($project_id) {
    		$datap['child_id']=$project_id;
    		$datap['uid']=$this->session->userdata('login_user_id');
    		$datap['last_date_update']=date("d-m-Y");
    		$datap['enrolled_school']=$this->input->post('enrolled_school');
        if($datap['enrolled_school']=='Yes')
        {
          $datap['school_type']=$this->input->post('school_type');
      		$datap['class_enrolled']=$this->input->post('class_enrolled');
      		$datap['school_name']=$this->input->post('school_name');
      		$datap['free_cloths']=$this->input->post('free_cloths');
      		$datap['free_bag_books']=$this->input->post('free_bag_books');
      		$datap['dist']=$this->input->post('dist');
      		$datap['block']=$this->input->post('block');
      		$datap['contact_no']=$this->input->post('contact_no');
        }
        else{
          $datap['school_type']="";
          $datap['class_enrolled']="";
          $datap['school_name']="";
          $datap['free_cloths']="";
          $datap['free_bag_books']="";
          $datap['dist']="";
          $datap['block']="";
          $datap['contact_no']="";
          if(file_exists('uploads/entitlement_proof/edu_image/'. $project_id . '.jpg'))
          {
            unlink('uploads/entitlement_proof/edu_image/'. $project_id . '.jpg');
          }
          if(file_exists('uploads/entitlement_proof/edu_image/'. $project_id . '.pdf'))
          {
              unlink('uploads/entitlement_proof/edu_image/'. $project_id . '.pdf');
          }
          if(file_exists('uploads/entitlement_proof/edu_image/'. $project_id . '.png'))
          {
            unlink('uploads/entitlement_proof/edu_image/'. $project_id . '.png');
          }
        }

    		$this->db->where('child_id', $project_id);
    		$this->db->update('child_education_department', $datap);
    		$dataq['uid']=$this->session->userdata('login_user_id');
    		$dataq['module_id']=$project_id;
    		$dataq['module_name']='child_education_department';
    		$dataq['date_time']=date("Y-m-d H:i:s");
    		$this->db->insert('history_update', $dataq);
    		//move_uploaded_file($_FILES['image']['tmp_name'], 'uploads/entitlement_proof/edu_image/' . $project_id );
    		//move_uploaded_file($_FILES['image2']['tmp_name'], 'uploads/entitlement_proof/labour/' . $project_id . '.jpg');
    		//move_uploaded_file($_FILES['image3']['tmp_name'], 'uploads/entitlement_proof/labour/' . $project_id . '.jpg');
    		if( $_FILES["image"]["type"]=='image/jpeg'){
    			move_uploaded_file($_FILES["image"]["tmp_name"], 'uploads/entitlement_proof/edu_image/' . $project_id .'.jpg');
    			}
    			if($_FILES["image"]["type"]=='application/pdf'){
    			move_uploaded_file($_FILES["image"]["tmp_name"], 'uploads/entitlement_proof/edu_image/' . $project_id .'.pdf');
    			}
    			if($_FILES["image"]["type"]=='image/png'){
    			move_uploaded_file($_FILES["image"]["tmp_name"], 'uploads/entitlement_proof/edu_image/' . $project_id .'.png');
    			unlink('uploads/entitlement_proof/edu_image/' . $project_id .'.jpg');
    			unlink('uploads/entitlement_proof/edu_image/' . $project_id .'.pdf');
    			}

    	 }



  }
