
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<?php
class Uploadfir_model extends CI_Model {
  function __construct()
  {
      parent::__construct();
     // $this->load->database();

  }

  //to get the account_role_id
  function get_role_id($role_id)
  {
	$role = $this->db->get_where('staff',array('staff_id'=>$role_id))->result_array();
	return $role;
  }
      
     function uploadfir_list_data($role_id,$district_id){
		
		    if($role_id==7) {
              $quer="select child_basic_detail.child_id,child_basic_detail.child_name,father_name,pstatus,upload_fir.upload_fir_status as upload_fir_status1 from final_order 
			  LEFT JOIN child_basic_detail on child_basic_detail.child_id = final_order.child_id 
			  LEFT JOIN upload_fir on upload_fir.child_id = final_order.child_id 
			  WHERE disposed_ls=0 AND child_basic_detail.ls_activate='Y' AND child_basic_detail.district_id='".$district_id."' AND (final_order.dist='' or final_order.dist IS NULL) OR final_order.dist='".$district_id."'";
          	  }
		else if($role_id==5 || $role_id==2)
		{
			$quer="select child_basic_detail.child_id,child_basic_detail.child_name,father_name,pstatus,upload_fir.upload_fir_status as upload_fir_status1 from final_order 
			LEFT JOIN child_basic_detail on child_basic_detail.child_id = final_order.child_id 
			LEFT JOIN upload_fir on upload_fir.child_id = final_order.child_id 
			WHERE child_basic_detail.ls_activate='Y' AND child_basic_detail.district_id='".$district_id."' AND (final_order.dist='' or final_order.dist IS NULL) OR final_order.dist='".$district_id."'";
    
    		}
			else {
					$quer="select child_basic_detail.child_id,child_basic_detail.child_name,father_name,pstatus,upload_fir.upload_fir_status as upload_fir_status1 from final_order 
			LEFT JOIN child_basic_detail on child_basic_detail.child_id = final_order.child_id 
			LEFT JOIN upload_fir on upload_fir.child_id = final_order.child_id 
			WHERE disposed_ls=0 AND child_basic_detail.ls_activate='Y' AND child_basic_detail.district_id='".$district_id."' AND (final_order.dist='' or final_order.dist IS NULL) OR final_order.dist='".$district_id."'";

    		 }
			
			

		
       return $this->db->query($quer)->result_array();
		
	 }
	
	 public function get_other_laws_child($child_id="")
      {
     

        $query = "select * from upload_fir where child_id ='$child_id'"; 
		 return $this->db->query($query)->result_array();
		  
		   
      }
	    public function get_otherlaws_psts($child_id="")
      {
        $this->db->select("pstatus");
          $this->db->where('child_id',$child_id);
                  $query = $this->db->get('child_basic_detail');
            return $query->result_array();
      }
	  
	   function create_minoritydepartment($project_id) {
      //$datap['child_id']=$project_id;
      $datap['upload_fir_status']=$this->input->post('is_housing_scheme');
         
     if($datap['upload_fir_status']!="Yes")
     {
       if(file_exists('uploads/entitlement_proof/Uploadfir/q1/'.$project_id.'.jpg'))
       {
         unlink('uploads/entitlement_proof/Uploadfir/q1/'.$project_id.'.jpg');
       }
       if(file_exists('uploads/entitlement_proof/Uploadfir/q1/'.$project_id.'.pdf'))
       {
           unlink('uploads/entitlement_proof/Uploadfir/q1/'.$project_id.'.pdf');
       }
       if(file_exists('uploads/entitlement_proof/Uploadfir/q1/'.$project_id.'.png'))
       {
         unlink('uploads/entitlement_proof/Uploadfir/q1/'.$project_id.'.png');
       }
     }
 
	 //dipti
	
     $this->db->where('child_id', $project_id);
     $this->db->update('upload_fir ', $datap);
     $dataq['uid']=$this->session->userdata('login_user_id');
     $dataq['module_id']=$project_id;
     $dataq['module_name']='Upload Fir';
     $dataq['date_time']=date("Y-m-d H:i:s");
     $this->db->insert('history_update', $dataq);
     if( $_FILES["image1"]["type"]=='image/jpeg'){
         move_uploaded_file($_FILES["image1"]["tmp_name"], 'uploads/entitlement_proof/Uploadfir/q1/'.$project_id.'.jpg');
		  unlink('uploads/entitlement_proof/Uploadfir/q1/'.$project_id.'.png');
		  unlink('uploads/entitlement_proof/Uploadfir/q1/'.$project_id.'.pdf');
       }
	   
       if($_FILES["image1"]["type"]=='application/pdf'){
       move_uploaded_file($_FILES["image1"]["tmp_name"], 'uploads/entitlement_proof/Uploadfir/q1/'.$project_id.'.pdf');
       unlink('uploads/entitlement_proof/Uploadfir/q1/'.$project_id.'.jpg');
       unlink('uploads/entitlement_proof/Uploadfir/q1/'.$project_id.'.png');
       }
       if($_FILES["image1"]["type"]=='image/png'){
       move_uploaded_file($_FILES["image1"]["tmp_name"], 'uploads/entitlement_proof/Uploadfir/q1/'.$project_id.'.png');
       unlink('uploads/entitlement_proof/Uploadfir/q1/'.$project_id.'.jpg');
       unlink('uploads/entitlement_proof/Uploadfir/q1/'.$project_id.'.pdf');
       }

      
	   //dipti
	   
     
    }
    
    function ps_information($child_id){
    	
    	$select_ps_info="select *,child_area_detail.area_name from child_basic_detail left join child_area_detail on child_basic_detail.district=child_area_detail.area_id where child_id='$child_id'" ;
    	return $this->db->query($select_ps_info)->result_array();
    }
	
	
  }
