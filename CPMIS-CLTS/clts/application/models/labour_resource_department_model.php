
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<?php
class Labour_resource_department_model extends CI_Model {
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
      public function get_labour_resource_department_list_data($role_id,$district_id)
      {

        if($role_id==7 || $role_id==8) {
      $quer="select child_basic_detail.child_id,child_basic_detail.idate_of_rescue,child_basic_detail.child_name,child_basic_detail.pstatus,child_labour_resource_department.package as package,child_labour_resource_department.package_type as package_type,child_labour_resource_department.deposited as deposited,child_labour_resource_department.interest_of_rehabilitation as interest_of_rehabilitation from child_basic_detail
      left join child_labour_resource_department on child_basic_detail.child_id=child_labour_resource_department.child_id
       where child_basic_detail.disposed_ls=0 AND (ls_activate='Y' and district_id='" . $district_id ."' and child_basic_detail.child_id in(select child_id from final_order where dist='' or dist IS NULL)) or child_basic_detail.child_id in(select child_id from final_order where dist='" .$district_id . "') ";
            }
        else {
        if ($role_id==6) {
      		    $quer="select child_basic_detail.child_id,child_basic_detail.child_name,child_basic_detail.pstatus,child_basic_detail.idate_of_rescue,child_labour_resource_department.package as package,child_labour_resource_department.package_type as package_type,child_labour_resource_department.deposited as deposited,child_labour_resource_department.interest_of_rehabilitation as interest_of_rehabilitation from child_basic_detail
              left join child_labour_resource_department on child_basic_detail.child_id=child_labour_resource_department.child_id where child_basic_detail.disposed_ls=0 AND child_basic_detail.child_id in(Select child_id from order_after_production where order_type='cci' and cci_dist=(Select area_name from child_area_detail where area_id='" .$district_id. "'))";
        }
		else if($role_id==2 || $role_id==5)
		{
			$quer="select child_basic_detail.child_id,child_basic_detail.child_name,child_basic_detail.pstatus,child_basic_detail.idate_of_rescue,child_labour_resource_department.package as package,child_labour_resource_department.package_type as package_type,child_labour_resource_department.deposited as deposited,child_labour_resource_department.interest_of_rehabilitation as interest_of_rehabilitation from child_basic_detail
        left join child_labour_resource_department on child_basic_detail.child_id=child_labour_resource_department.child_id where (district_id='" . $district_id ."' and child_basic_detail.child_id in(select child_id from final_order where dist='' or dist IS NULL)) or child_basic_detail.child_id in(select child_id from final_order where dist='" .$district_id . "')";
			
		}
        else{
        $quer="select child_basic_detail.child_id,child_basic_detail.child_name,child_basic_detail.pstatus,child_basic_detail.idate_of_rescue,child_labour_resource_department.package as package,child_labour_resource_department.package_type as package_type,child_labour_resource_department.deposited as deposited,child_labour_resource_department.interest_of_rehabilitation as interest_of_rehabilitation from child_basic_detail
        left join child_labour_resource_department on child_basic_detail.child_id=child_labour_resource_department.child_id where child_basic_detail.disposed_ls=0 AND  (district_id='" . $district_id ."' and child_basic_detail.child_id in(select child_id from final_order where dist='' or dist IS NULL)) or child_basic_detail.child_id in(select child_id from final_order where dist='" .$district_id . "')";
        }
      }
        return $this->db->query($quer)->result_array();
      }
    function get_labour_resource_department_data($child_id,$param2)
    {
      $this->db->select('*,child_basic_detail.dob as dob, child_basic_detail.idate_of_rescue as date_rescued')
                ->where('child_labour_resource_department.child_id',$child_id)
                ->join('child_basic_detail','child_labour_resource_department.child_id= child_basic_detail.child_id');
                $query = $this->db->get('child_labour_resource_department');
      return $query->result_array();
    }
    //create labour dept
    function create_labourdepartment($project_id,$param2) {
    	$datap['child_id']=$project_id;
    	$datap['uid']=$this->session->userdata('login_user_id');
    	$datap['last_date_update']=date("d-m-Y");
    	$datap['package']=$this->input->post('package');
    	$datap['package_type']=$param2;//0 or 1 based on the parameter value from controller
    	
      if($datap['package']=='Yes')
      {
        $datap['package_no']="";
        $datap['package_yes']=$this->input->post('package_yes');
        
        
        $datap['mode_of_payment']=$this->input->post('mode_of_payment');
        if($datap['mode_of_payment']=='cheque')
        {
          $datap['mode_payment_cheque']=$this->input->post('mode_payment_cheque');
        }
      	else
        {
            $datap['mode_payment_cheque']="";
        }
        if($datap['mode_of_payment']=='cash')
        {
          $datap['mode_payment_cash']=$this->input->post('mode_payment_cash');
        }
        else
        {
          $datap['mode_payment_cash']="";
        }
        if($datap['mode_of_payment']=='Account')
        {
          $datap['mode_payment_account']=$this->input->post('mode_payment_account');
        }
      	else
        {
            $datap['mode_payment_account']="";
        }
        if($datap['mode_of_payment']=='Draft'){
          $datap['mode_payment_draft']=$this->input->post('mode_payment_draft');
        }
        else{
          $datap['mode_payment_draft']="";
        }
        if($datap['mode_of_payment']=="Others")
        {
            $datap['mode_payment_other']=$this->input->post('mode_payment_other');
        }
        else{
            $datap['mode_payment_other']="";
        }
        

      }
      


      else if($datap['package']=='No')
      {
        $datap['package_no']=trim($this->input->post('package_no'));
        $datap['package_yes']=NULL;
        $datap['mode_of_payment']="";
        $datap['mode_payment_cheque']="";
        $datap['mode_payment_cash']="";
        $datap['mode_payment_account']="";
        $datap['mode_payment_draft']="";
        $datap['mode_payment_other']="";
        if(file_exists('uploads/entitlement_proof/labour/q1/'. $project_id . '.jpg'))
        {
          unlink('uploads/entitlement_proof/labour/q1/'. $project_id . '.jpg');
        }
        if(file_exists('uploads/entitlement_proof/labour/q1/'. $project_id . '.pdf'))
        {
            unlink('uploads/entitlement_proof/labour/q1/'. $project_id . '.pdf');
        }
        if(file_exists('uploads/entitlement_proof/labour/q1/'. $project_id . '.png'))
        {
          unlink('uploads/entitlement_proof/labour/q1/'. $project_id . '.png');
        }

      }

      else if($datap['package']=="Not Applicable")
      {
        $datap['package_yes']=NULL;
        $datap['mode_of_payment']="";
        $datap['mode_payment_cheque']="";
        $datap['mode_payment_cash']="";
        $datap['mode_payment_account']="";
        $datap['mode_payment_draft']="";
        $datap['mode_payment_other']="";
        $datap['package_no']="";
        if(file_exists('uploads/entitlement_proof/labour/q1/'. $project_id . '.jpg'))
        {
          unlink('uploads/entitlement_proof/labour/q1/'. $project_id . '.jpg');
        }
        if(file_exists('uploads/entitlement_proof/labour/q1/'. $project_id . '.pdf'))
        {
            unlink('uploads/entitlement_proof/labour/q1/'. $project_id . '.pdf');
        }
        if(file_exists('uploads/entitlement_proof/labour/q1/'. $project_id . '.png'))
        {
          unlink('uploads/entitlement_proof/labour/q1/'. $project_id . '.png');
        }

      }
      else{
        $datap['package_yes']=NULL;
        $datap['mode_of_payment']="";
        $datap['mode_payment_cheque']="";
        $datap['mode_payment_cash']="";
        $datap['mode_payment_account']="";
        $datap['mode_payment_draft']="";
        $datap['mode_payment_other']="";
        $datap['package_no']="";
        if(file_exists('uploads/entitlement_proof/labour/q1/'. $project_id . '.jpg'))
        {
          unlink('uploads/entitlement_proof/labour/q1/'. $project_id . '.jpg');
        }
        if(file_exists('uploads/entitlement_proof/labour/q1/'. $project_id . '.pdf'))
        {
            unlink('uploads/entitlement_proof/labour/q1/'. $project_id . '.pdf');
        }
        if(file_exists('uploads/entitlement_proof/labour/q1/'. $project_id . '.png'))
        {
          unlink('uploads/entitlement_proof/labour/q1/'. $project_id . '.png');
        }
      }
      $datap['deposited']=$this->input->post('deposited');
      if($datap['deposited']=='Yes')
      {
          $datap['deposited_no']="";
        $datap['deposited_yes']=$this->input->post('deposited_yes');
        $datap['mode_of_deposit']=$this->input->post('mode_of_deposit');
        if($datap['mode_of_deposit']=="account_no")
        {
          $datap['mode_deposit_account']=$this->input->post('mode_deposit_account');

        }
        else{
            $datap['mode_deposit_account']="";
        }
        if($datap['mode_of_deposit']=="sanction_no")
        {
            $datap['mode_deposit_sanction']=$this->input->post('mode_deposit_sanction');
        }
        else{
          $datap['mode_deposit_sanction']="";
        }
        if($datap['mode_of_deposit']=="other_sanction")
        {
          $datap['mode_deposit_other']=$this->input->post('mode_deposit_other');
        }
        else{
          $datap['mode_deposit_other']="";
        }

      }
      else
      if($datap['deposited']=='No')
      {
      	$datap['deposited_no']=trim($this->input->post('deposited_no'));
        $datap['deposited_yes']=NULL;
        $datap['mode_of_deposit']="";
        $datap['mode_deposit_sanction']="";
        $datap['mode_deposit_account']="";
        $datap['mode_deposit_other']="";
        if(file_exists('uploads/entitlement_proof/labour/q2/'. $project_id . '.jpg'))
        {
          unlink('uploads/entitlement_proof/labour/q2/'. $project_id . '.jpg');
        }
        if(file_exists('uploads/entitlement_proof/labour/q2/'. $project_id . '.pdf'))
        {
            unlink('uploads/entitlement_proof/labour/q2/'. $project_id . '.pdf');
        }
        if(file_exists('uploads/entitlement_proof/labour/q2/'. $project_id . '.png'))
        {
          unlink('uploads/entitlement_proof/labour/q2/'. $project_id . '.png');
        }

      }
      else if($datap['deposited']=='Not Applicable')
      {
        $datap['deposited_no']="";
        $datap['deposited_yes']=NULL;
        $datap['mode_of_deposit']="";
        $datap['mode_deposit_sanction']="";
        $datap['mode_deposit_account']="";
        $datap['mode_deposit_other']="";
        if(file_exists('uploads/entitlement_proof/labour/q2/'. $project_id . '.jpg'))
        {
          unlink('uploads/entitlement_proof/labour/q2/'. $project_id . '.jpg');
        }
        if(file_exists('uploads/entitlement_proof/labour/q2/'. $project_id . '.pdf'))
        {
            unlink('uploads/entitlement_proof/labour/q2/'. $project_id . '.pdf');
        }
        if(file_exists('uploads/entitlement_proof/labour/q2/'. $project_id . '.png'))
        {
          unlink('uploads/entitlement_proof/labour/q2/'. $project_id . '.png');
        }
      }
      else{
        $datap['deposited_no']="";
        $datap['deposited_yes']=NULL;
        $datap['mode_of_deposit']="";
        $datap['mode_deposit_sanction']="";
        $datap['mode_deposit_account']="";
        $datap['mode_deposit_other']="";
        if(file_exists('uploads/entitlement_proof/labour/q2/'. $project_id . '.jpg'))
        {
          unlink('uploads/entitlement_proof/labour/q2/'. $project_id . '.jpg');
        }
        if(file_exists('uploads/entitlement_proof/labour/q2/'. $project_id . '.pdf'))
        {
            unlink('uploads/entitlement_proof/labour/q2/'. $project_id . '.pdf');
        }
        if(file_exists('uploads/entitlement_proof/labour/q2/'. $project_id . '.png'))
        {
          unlink('uploads/entitlement_proof/labour/q2/'. $project_id . '.png');
        }
      }
    	$datap['interest_of_rehabilitation']=$this->input->post('interest_of_rehabilitation');
      if($datap['interest_of_rehabilitation']=="Yes")
      {
        $datap['interest_of_rehabilitation_no']="";
      }
      if($datap['interest_of_rehabilitation']=="No")
      {
        $datap['interest_of_rehabilitation_no']=trim($this->input->post('interest_of_rehabilitation_no'));
        if(file_exists('uploads/entitlement_proof/labour/q3/'. $project_id . '.jpg'))
        {
          unlink('uploads/entitlement_proof/labour/q3/'. $project_id . '.jpg');
        }
        if(file_exists('uploads/entitlement_proof/labour/q3/'. $project_id . '.pdf'))
        {
            unlink('uploads/entitlement_proof/labour/q3/'. $project_id . '.pdf');
        }
        if(file_exists('uploads/entitlement_proof/labour/q3/'. $project_id . '.png'))
        {
          unlink('uploads/entitlement_proof/labour/q3/'. $project_id . '.png');
        }
      }
      if($datap['interest_of_rehabilitation']=="Not Applicable")
      {
        $datap['interest_of_rehabilitation_no']="";
        if(file_exists('uploads/entitlement_proof/labour/q3/'. $project_id . '.jpg'))
        {
          unlink('uploads/entitlement_proof/labour/q3/'. $project_id . '.jpg');
        }
        if(file_exists('uploads/entitlement_proof/labour/q3/'. $project_id . '.pdf'))
        {
            unlink('uploads/entitlement_proof/labour/q3/'. $project_id . '.pdf');
        }
        if(file_exists('uploads/entitlement_proof/labour/q3/'. $project_id . '.png'))
        {
          unlink('uploads/entitlement_proof/labour/q3/'. $project_id . '.png');
        }
      }
    	/*$datap['interest_of_rehabilitation_5k']=$this->input->post('interest_of_rehabilitation_5k');
      if($datap['interest_of_rehabilitation_5k']=="Yes")
      {
          $datap['rehabilitation_5k_no']="";
      }
      if($datap['interest_of_rehabilitation_5k']=="No")
      {
        $datap['rehabilitation_5k_no']=$this->input->post('rehabilitation_5k_no');

        if(file_exists('uploads/entitlement_proof/labour/q3_b/'. $project_id . '.jpg'))
        {
          unlink('uploads/entitlement_proof/labour/q3_b/'. $project_id . '.jpg');
        }
        if(file_exists('uploads/entitlement_proof/labour/q3_b/'. $project_id . '.pdf'))
        {
            unlink('uploads/entitlement_proof/labour/q3_b/'. $project_id . '.pdf');
        }
        if(file_exists('uploads/entitlement_proof/labour/q3_b/'. $project_id . '.png'))
        {
          unlink('uploads/entitlement_proof/labour/q3_b/'. $project_id . '.png');
        }
      }
      if($datap['interest_of_rehabilitation_5k']=="Not Applicable")
      {
        $datap['rehabilitation_5k_no']="";

        if(file_exists('uploads/entitlement_proof/labour/q3_b/'. $project_id . '.jpg'))
        {
          unlink('uploads/entitlement_proof/labour/q3_b/'. $project_id . '.jpg');
        }
        if(file_exists('uploads/entitlement_proof/labour/q3_b/'. $project_id . '.pdf'))
        {
            unlink('uploads/entitlement_proof/labour/q3_b/'. $project_id . '.pdf');
        }
        if(file_exists('uploads/entitlement_proof/labour/q3_b/'. $project_id . '.png'))
        {
          unlink('uploads/entitlement_proof/labour/q3_b/'. $project_id . '.png');
        }
      }*/

    	$this->db->where('child_id', $project_id);
    	$this->db->update('child_labour_resource_department', $datap);
    	$dataq['uid']=$this->session->userdata('login_user_id');
    	$dataq['module_id']=$project_id;
    	$dataq['module_name']='child_labour_resource_department';
    	$dataq['date_time']=date("Y-m-d H:i:s");
    	$this->db->insert('history_update', $dataq);
    			if( $_FILES["image1"]["type"]=='image/jpeg'){
    				move_uploaded_file($_FILES["image1"]["tmp_name"], 'uploads/entitlement_proof/labour/q1/'. $project_id . '.jpg');
    			}
    			if($_FILES["image1"]["type"]=='application/pdf'){
    			move_uploaded_file($_FILES["image1"]["tmp_name"], 'uploads/entitlement_proof/labour/q1/'. $project_id . '.pdf');
    			unlink('uploads/entitlement_proof/labour/q1/'. $project_id . '.jpg');
    			}
    			if($_FILES["image1"]["type"]=='image/png'){
    			move_uploaded_file($_FILES["image1"]["tmp_name"], 'uploads/entitlement_proof/labour/q1/'. $project_id . '.png');
    			unlink('uploads/entitlement_proof/labour/q1/'. $project_id . '.jpg');
    			unlink('uploads/entitlement_proof/labour/q1/'. $project_id . '.pdf');
    			}
    			//2nd img
    			if( $_FILES["image2"]["type"]=='image/jpeg'){
    				move_uploaded_file($_FILES["image2"]["tmp_name"], 'uploads/entitlement_proof/labour/q2/'. $project_id . '.jpg');
    			}
    			if($_FILES["image2"]["type"]=='application/pdf'){
    			move_uploaded_file($_FILES["image2"]["tmp_name"], 'uploads/entitlement_proof/labour/q2/'. $project_id . '.pdf');
    			unlink('uploads/entitlement_proof/labour/q2/'. $project_id . '.jpg');
    			}
    			if($_FILES["image2"]["type"]=='image/png'){
    			move_uploaded_file($_FILES["image2"]["tmp_name"], 'uploads/entitlement_proof/labour/q2/'. $project_id . '.png');
    			unlink('uploads/entitlement_proof/labour/q2/'. $project_id . '.jpg');
    			unlink('uploads/entitlement_proof/labour/q2/'. $project_id . '.pdf');
    			}

    			//3rd img
    			if( $_FILES["image3"]["type"]=='image/jpeg'){
    				move_uploaded_file($_FILES["image3"]["tmp_name"], 'uploads/entitlement_proof/labour/q3/'. $project_id . '.jpg');
    			}
    			if($_FILES["image3"]["type"]=='application/pdf'){
    			move_uploaded_file($_FILES["image3"]["tmp_name"], 'uploads/entitlement_proof/labour/q3/'. $project_id . '.pdf');
    			unlink('uploads/entitlement_proof/labour/q3/'. $project_id . '.jpg');
    			}
    			if($_FILES["image3"]["type"]=='image/png'){
    			move_uploaded_file($_FILES["image3"]["tmp_name"], 'uploads/entitlement_proof/labour/q3/'. $project_id . '.png');
    			unlink('uploads/entitlement_proof/labour/q3/'. $project_id . '.jpg');
    			unlink('uploads/entitlement_proof/labour/q3/'. $project_id . '.pdf');
    			}
    			//3rd b img
    			if( $_FILES["image4"]["type"]=='image/jpeg'){
    				move_uploaded_file($_FILES["image4"]["tmp_name"], 'uploads/entitlement_proof/labour/q3_b/'. $project_id . '.jpg');
    			}
    			if($_FILES["image4"]["type"]=='application/pdf'){
    			move_uploaded_file($_FILES["image4"]["tmp_name"], 'uploads/entitlement_proof/labour/q3_b/'. $project_id . '.pdf');
    			unlink('uploads/entitlement_proof/labour/q3_b/'. $project_id . '.jpg');
    			}
    			if($_FILES["image4"]["type"]=='image/png'){
    			move_uploaded_file($_FILES["image4"]["tmp_name"], 'uploads/entitlement_proof/labour/q3_b/'. $project_id . '.png');
    			unlink('uploads/entitlement_proof/labour/q3_b/'. $project_id . '.jpg');
    			unlink('uploads/entitlement_proof/labour/q3_b/'. $project_id . '.pdf');
    			}
    	//move_uploaded_file($_FILES['image1']['tmp_name'], 'uploads/entitlement_proof/labour/q1' . $project_id . '.jpg');
    	//move_uploaded_file($_FILES['image2']['tmp_name'], 'uploads/entitlement_proof/labour/q2' . $project_id . '.jpg');
    	//move_uploaded_file($_FILES['image3']['tmp_name'], 'uploads/entitlement_proof/labour/q3' . $project_id . '.jpg');
    }


  }
