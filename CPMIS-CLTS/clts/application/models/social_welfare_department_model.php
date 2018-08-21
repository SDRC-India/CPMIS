
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<?php
class Social_welfare_department_model extends CI_Model {
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
      public function get_social_welfare_department_list_data($role_id,$district_id)
      {
          //echo "fjsfjk";
        if($role_id==7 || $role_id==8) {
      $quer="select child_basic_detail.child_id,child_name,pstatus,child_social_welfare_department.social_pension_eligible as social_pension_eligible,child_social_welfare_department.parvarish_scheme_eligible as parvarish_scheme_eligible,child_social_welfare_department.family_availed_sponsorship as family_availed_sponsorship,child_social_welfare_department.is_child_sponsorship as is_child_sponsorship from child_basic_detail
      join child_social_welfare_department on child_basic_detail.child_id=child_social_welfare_department.child_id
       where child_basic_detail.disposed_ls=0 AND (ls_activate='Y' and district_id='" . $district_id ."' and child_basic_detail.child_id in(select child_id from final_order where dist='' or dist IS NULL)) or child_basic_detail.child_id in(select child_id from final_order where dist='" .$district_id . "') ";
            }
        else {
        if ($role_id==6) {
      		    $quer="select child_basic_detail.child_id,child_name,pstatus,child_social_welfare_department.social_pension_eligible as social_pension_eligible,child_social_welfare_department.parvarish_scheme_eligible as parvarish_scheme_eligible,child_social_welfare_department.family_availed_sponsorship as family_availed_sponsorship,child_social_welfare_department.is_child_sponsorship as is_child_sponsorship from child_basic_detail
               from child_basic_detail
              join child_social_welfare_department on child_basic_detail.child_id=child_social_welfare_department.child_id where child_basic_detail.disposed_ls=0 AND child_basic_detail.child_id in(Select child_id from order_after_production where order_type='cci' and cci_dist=(Select area_name from child_area_detail where area_id='" .$district_id. "'))";
        }
        else{
        $quer="select child_basic_detail.child_id,child_name,pstatus,child_social_welfare_department.social_pension_eligible as social_pension_eligible,child_social_welfare_department.parvarish_scheme_eligible as parvarish_scheme_eligible,child_social_welfare_department.family_availed_sponsorship as family_availed_sponsorship,child_social_welfare_department.is_child_sponsorship as is_child_sponsorship from child_basic_detail
         from child_basic_detail
        join child_social_welfare_department on child_basic_detail.child_id=child_social_welfare_department.child_id where child_basic_detail.disposed_ls=0 AND (district_id='" . $district_id ."' and child_basic_detail.child_id in(select child_id from final_order where dist='' or dist IS NULL)) or child_id in(select child_id from final_order where dist='" .$district_id . "')";
        }
      }
        return $this->db->query($quer)->result_array();
      }
    function get_social_welfare_department_data($child_id)
    {
      return $this->db->get_where('child_social_welfare_department' , array('child_id' => $child_id))->result_array();

    }
    function create_socialdepartment($project_id) {
  		$datap['child_id']=$project_id;
  		$datap['uid']=$this->session->userdata('login_user_id');
  		$datap['last_date_update']=date("d-m-Y");
  		$datap['social_pension_eligible']=$this->input->post('social_pension_eligible');
  		if($datap['social_pension_eligible']=='Yes'){
  			$datap['social_pension_availed']=$this->input->post('social_pension_availed');
        if($datap['social_pension_availed']!="Yes")
        {
          if(file_exists('uploads/entitlement_proof/social/q1/'. $project_id . '.jpg'))
          {
            unlink('uploads/entitlement_proof/social/q1/'. $project_id . '.jpg');
          }
          if(file_exists('uploads/entitlement_proof/social/q1/'. $project_id . '.pdf'))
          {
              unlink('uploads/entitlement_proof/social/q1/'. $project_id . '.pdf');
          }
          if(file_exists('uploads/entitlement_proof/social/q1/'. $project_id . '.png'))
          {
            unlink('uploads/entitlement_proof/social/q1/'. $project_id . '.png');
          }
        }
  		}else{
  			$datap['social_pension_availed']='';
        if(file_exists('uploads/entitlement_proof/social/q1/'. $project_id . '.jpg'))
        {
          unlink('uploads/entitlement_proof/social/q1/'. $project_id . '.jpg');
        }
        if(file_exists('uploads/entitlement_proof/social/q1/'. $project_id . '.pdf'))
        {
            unlink('uploads/entitlement_proof/social/q1/'. $project_id . '.pdf');
        }
        if(file_exists('uploads/entitlement_proof/social/q1/'. $project_id . '.png'))
        {
          unlink('uploads/entitlement_proof/social/q1/'. $project_id . '.png');
        }
  		}
  		$datap['parvarish_scheme_eligible']=$this->input->post('parvarish_scheme_eligible');
  		if($datap['parvarish_scheme_eligible']=='Yes'){
  			$datap['parvarish_scheme_availed']=$this->input->post('parvarish_scheme_availed');
        if($datap['parvarish_scheme_availed']!="Yes")
        {
          if(file_exists('uploads/entitlement_proof/social/q2/'. $project_id . '.jpg'))
          {
            unlink('uploads/entitlement_proof/social/q2/'. $project_id . '.jpg');
          }
          if(file_exists('uploads/entitlement_proof/social/q2/'. $project_id . '.pdf'))
          {
              unlink('uploads/entitlement_proof/social/q2/'. $project_id . '.pdf');
          }
          if(file_exists('uploads/entitlement_proof/social/q2/'. $project_id . '.png'))
          {
            unlink('uploads/entitlement_proof/social/q2/'. $project_id . '.png');
          }
        }

  		}else{
  			$datap['parvarish_scheme_availed']='';
        if(file_exists('uploads/entitlement_proof/social/q2/'. $project_id . '.jpg'))
        {
          unlink('uploads/entitlement_proof/social/q2/'. $project_id . '.jpg');
        }
        if(file_exists('uploads/entitlement_proof/social/q2/'. $project_id . '.pdf'))
        {
            unlink('uploads/entitlement_proof/social/q2/'. $project_id . '.pdf');
        }
        if(file_exists('uploads/entitlement_proof/social/q2/'. $project_id . '.png'))
        {
          unlink('uploads/entitlement_proof/social/q2/'. $project_id . '.png');
        }
  		}
  		$datap['family_availed_sponsorship']=$this->input->post('family_availed_sponsorship');
      if($datap['family_availed_sponsorship']!="Yes")
      {
        if(file_exists('uploads/entitlement_proof/social/q3/'. $project_id . '.jpg'))
        {
          unlink('uploads/entitlement_proof/social/q3/'. $project_id . '.jpg');
        }
        if(file_exists('uploads/entitlement_proof/social/q3/'. $project_id . '.pdf'))
        {
            unlink('uploads/entitlement_proof/social/q3/'. $project_id . '.pdf');
        }
        if(file_exists('uploads/entitlement_proof/social/q3/'. $project_id . '.png'))
        {
          unlink('uploads/entitlement_proof/social/q3/'. $project_id . '.png');
        }
      }
  		$datap['is_child_sponsorship']=$this->input->post('is_child_sponsorship');
      if($datap['is_child_sponsorship']!="Yes")
      {
        if(file_exists('uploads/entitlement_proof/social/q4/'. $project_id . '.jpg'))
        {
          unlink('uploads/entitlement_proof/social/q4/'. $project_id . '.jpg');
        }
        if(file_exists('uploads/entitlement_proof/social/q4/'. $project_id . '.pdf'))
        {
            unlink('uploads/entitlement_proof/social/q4/'. $project_id . '.pdf');
        }
        if(file_exists('uploads/entitlement_proof/social/q4/'. $project_id . '.png'))
        {
          unlink('uploads/entitlement_proof/social/q4/'. $project_id . '.png');
        }
      }
  		$this->db->where('child_id', $project_id);
  		$this->db->update('child_social_welfare_department', $datap);
  		$dataq['uid']=$this->session->userdata('login_user_id');
  		$dataq['module_id']=$project_id;
  		$dataq['module_name']='child_social_welfare_department';
  		$dataq['date_time']=date("Y-m-d H:i:s");
  		$this->db->insert('history_update', $dataq);
  		if( $_FILES["image1"]["type"]=='image/jpeg'){
  				move_uploaded_file($_FILES["image1"]["tmp_name"], 'uploads/entitlement_proof/social/q1/'. $project_id . '.jpg');
  			}
  			if($_FILES["image1"]["type"]=='application/pdf'){
  			move_uploaded_file($_FILES["image1"]["tmp_name"], 'uploads/entitlement_proof/social/q1/'. $project_id . '.pdf');
  			unlink('uploads/entitlement_proof/social/q1/'. $project_id . '.jpg');
  			}
  			if($_FILES["image1"]["type"]=='image/png'){
  			move_uploaded_file($_FILES["image1"]["tmp_name"], 'uploads/entitlement_proof/social/q1/'. $project_id . '.png');
  			unlink('uploads/entitlement_proof/social/q1/'. $project_id . '.jpg');
  			unlink('uploads/entitlement_proof/social/q1/'. $project_id . '.pdf');
  			}

  			if( $_FILES["image2"]["type"]=='image/jpeg'){
  				move_uploaded_file($_FILES["image2"]["tmp_name"], 'uploads/entitlement_proof/social/q2/'. $project_id . '.jpg');
  			}
  			if($_FILES["image2"]["type"]=='application/pdf'){
  			move_uploaded_file($_FILES["image2"]["tmp_name"], 'uploads/entitlement_proof/social/q2/'. $project_id . '.pdf');
  			unlink('uploads/entitlement_proof/social/q2/'. $project_id . '.jpg');
  			}
  			if($_FILES["image2"]["type"]=='image/png'){
  			move_uploaded_file($_FILES["image2"]["tmp_name"], 'uploads/entitlement_proof/social/q2/'. $project_id . '.png');
  			unlink('uploads/entitlement_proof/social/q2/'. $project_id . '.jpg');
  			unlink('uploads/entitlement_proof/social/q2/'. $project_id . '.pdf');
  			}

  			if( $_FILES["image3"]["type"]=='image/jpeg'){
  				move_uploaded_file($_FILES["image1"]["tmp_name"], 'uploads/entitlement_proof/social/q3/'. $project_id . '.jpg');
  			}
  			if($_FILES["image3"]["type"]=='application/pdf'){
  			move_uploaded_file($_FILES["image"]["tmp_name"], 'uploads/entitlement_proof/social/q3/'. $project_id . '.pdf');
  			unlink('uploads/entitlement_proof/social/q3/'. $project_id . '.jpg');
  			}
  			if($_FILES["image3"]["type"]=='image/png'){
  			move_uploaded_file($_FILES["image"]["tmp_name"], 'uploads/entitlement_proof/social/q3/'. $project_id . '.png');
  			unlink('uploads/entitlement_proof/social/q3/'. $project_id . '.jpg');
  			unlink('uploads/entitlement_proof/social/q3/'. $project_id . '.pdf');
  			}

  			if( $_FILES["image4"]["type"]=='image/jpeg'){
  				move_uploaded_file($_FILES["image4"]["tmp_name"], 'uploads/entitlement_proof/social/q4/'. $project_id . '.jpg');
  			}
  			if($_FILES["image4"]["type"]=='application/pdf'){
  			move_uploaded_file($_FILES["image4"]["tmp_name"], 'uploads/entitlement_proof/social/q4/'. $project_id . '.pdf');
  			unlink('uploads/entitlement_proof/social/q4/'. $project_id . '.jpg');
  			}
  			if($_FILES["image4"]["type"]=='image/png'){
  			move_uploaded_file($_FILES["image4"]["tmp_name"], 'uploads/entitlement_proof/social/q4/'. $project_id . '.png');
  			unlink('uploads/entitlement_proof/social/q4/'. $project_id . '.jpg');
  			unlink('uploads/entitlement_proof/social/q4/'. $project_id . '.pdf');
  			}
  	 }


  }
