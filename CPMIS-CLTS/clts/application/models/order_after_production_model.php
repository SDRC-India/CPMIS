
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<?php
class Order_after_production_model extends CI_Model {
  function __construct()
  {
      parent::__construct();
      $this->load->database();

  }

      //to get the account_role_id
      function get_role_id($role_id)
      {
        $role = $this->db->get_where('staff',array('staff_id'=>$role_id))->result_array();
        return $role;
      }
      //to get the labour act data anf child details
      function get_order_after_production_data($role_id,$district_id)
      {

        if ($role_id==7) {
        	
		  $quer="select child_basic_detail.child_id,child_name,father_name,pstatus,order_after_production.produced from final_order
		      LEFT JOIN child_basic_detail on child_basic_detail.child_id = final_order.child_id
			  LEFT JOIN order_after_production on child_basic_detail.child_id=order_after_production.child_id
           where disposed_ls=0 AND child_basic_detail.ls_activate='Y' and child_basic_detail.district_id='".$district_id."' AND (final_order.dist='' or final_order.dist IS NULL OR final_order.dist='".$district_id."')";
		 /*  $quer="select child_basic_detail.child_id,child_name,father_name,pstatus,final_order.dist from child_basic_detail LEFT JOIN order_after_production on order_after_production.child_id = child_basic_detail.child_id   LEFT JOIN final_order on final_order.child_id=child_basic_detail.child_id where child_basic_detail.ls_activate='Y' and child_basic_detail.district_id='".$district_id."'"; */
         	
        
        }

       return $this->db->query($quer)->result_array();
      }
      function get_order_after_production_child($child_id="")
      {
        $this->db->select("order_after_production.*,child_basic_detail.dob as dob,child_basic_detail.idate_of_rescue as date_rescued")
                  ->where('order_after_production.child_id' , $child_id)
                  ->join("child_basic_detail","child_basic_detail.child_id = order_after_production.child_id");
                
        return $this->db->get('order_after_production')->result_array();
      }
      public function get_districts_list($state_id)
      {
        return $this->db->select('*')->where('parent_id',$state_id)->order_by('area_name', 'asc')->group_by('area_name')->get('child_area_detail')->result_array();
      }

      //order after edit
        function create_orderafter($project_id) {
          //default values
          $datap['parents_name']="";
          $datap['parent_dist']="";
          $datap['parent_address']="";
          $datap['parent_date']=NULL;
          $datap['ccis_name']="";
          $datap['cci_dist']="";
          $datap['cci_address']="";
          $datap['cci_date']=NULL;
          $datap['fitperson_name']="";
          $datap['fitperson_dist']="";
          $datap['fitperson_address']="";
          $datap['fitperson_date']=NULL;
          $datap['fitinstitution_name']="";
          $datap['fitinstitution_dist']="";
          $datap['fitinstitution_address']="";
          $datap['fitinstitution_date']=NULL;
          $datap['otherplace_name']="";
          $datap['otherplace_dist']="";
          $datap['otherplace_address']="";
          $datap['otherplace_date']=NULL;
          $datap['other']="";
          ////////////////////////////////////////////
          $datap['child_id']=$project_id;
          $datap['uid']=$this->session->userdata('login_user_id');
          $datap['last_date_update']=date("d-m-Y");
          $datap['produced']=$this->input->post('produced');
          if($datap['produced']=="Others")
          {
            $datap['produced_other']=$this->input->post('produced_other');
          }
          else{
            $datap['produced_other']="";
          }

          $datap['order_type']=$this->input->post('order_type');
          $datap['wheather_linked']=$this->input->post('wheather_linked');
          if($datap['wheather_linked']=='Yes'){
          $datap['profile_id']=$this->input->post('profile_id');
          }else{
          $datap['profile_id']='';
          }
          if($datap['order_type'] == 'Parents'){
          $datap['parents_name']=$this->input->post('parents_name');
          $datap['parent_dist']=$this->input->post('parent_dist');
          $datap['parent_address']=$this->input->post('parent_address');
          $datap['parent_date']=$this->input->post('parent_date');
          }
          if($datap['order_type'] == 'cci'){
          $datap['ccis_name']=$this->input->post('ccis_name');
          $datap['cci_dist']=$this->input->post('cci_dist');
          $datap['cci_address']=$this->input->post('cci_address');
          $datap['cci_date']=$this->input->post('cci_date');
          }
          if($datap['order_type'] == 'fit_person'){
          $datap['fitperson_name']=$this->input->post('fitperson_name');
          $datap['fitperson_dist']=$this->input->post('fitperson_dist');
          $datap['fitperson_address']=$this->input->post('fitperson_address');
          $datap['fitperson_date']=$this->input->post('fitperson_date');
          }
          if($datap['order_type'] == 'fit_institution'){
          $datap['fitinstitution_name']=$this->input->post('fitinstitution_name');
          $datap['fitinstitution_dist']=$this->input->post('fitinstitution_dist');
          $datap['fitinstitution_address']=$this->input->post('fitinstitution_address');
          $datap['fitinstitution_date']=$this->input->post('fitinstitution_date');
          }
          if($datap['order_type'] == 'other_place'){
          $datap['otherplace_name']=$this->input->post('otherplace_name');
          $datap['otherplace_dist']=$this->input->post('otherplace_dist');
          $datap['otherplace_address']=$this->input->post('otherplace_address');
          $datap['otherplace_date']=$this->input->post('otherplace_date');
          }
          if($datap['order_type'] == 'Others')
          {
            $datap['other']=$this->input->post('other');
          }
           //date of production before cwc
		   if($this->input->post('date_of_production'))
		   {
			   $datap['date_of_production']=$this->input->post('date_of_production');
		   }
		   else{
			   $datap['date_of_production']="0000-00-00";
		   }
		   
		   $datap['cwc_upload']=$this->input->post('is_housing_scheme');
		     if( $datap['cwc_upload']=='No')
			 {
				 if(file_exists('uploads/entitlement_proof/cwc_order/'. $project_id . '.jpg'))
					{
					  unlink('uploads/entitlement_proof/cwc_order/'. $project_id . '.jpg');
					}
					if(file_exists('uploads/entitlement_proof/cwc_order/'. $project_id . '.pdf'))
					{
						unlink('uploads/entitlement_proof/cwc_order/'. $project_id . '.pdf');
					}
					if(file_exists('uploads/entitlement_proof/cwc_order/'. $project_id . '.png'))
					{
					  unlink('uploads/entitlement_proof/cwc_order/'. $project_id . '.png');
					}
				 
			 }
		   
          $this->db->where('child_id', $project_id);
          $this->db->update('order_after_production', $datap);
          $dataq['uid']=$this->session->userdata('login_user_id');
          $dataq['module_id']=$project_id;
          $dataq['module_name']='child_after_rescued';
          $dataq['date_time']=date("Y-m-d H:i:s");
          $this->db->insert('history_update', $dataq);
		  
		  if( $_FILES["image1"]["type"]=='image/jpeg'){
    				move_uploaded_file($_FILES["image1"]["tmp_name"], 'uploads/entitlement_proof/cwc_order/'. $project_id . '.jpg');
    			}
    			if($_FILES["image1"]["type"]=='application/pdf'){
    			move_uploaded_file($_FILES["image1"]["tmp_name"], 'uploads/entitlement_proof/cwc_order/'. $project_id . '.pdf');
    			unlink('uploads/entitlement_proof/labour/q1/'. $project_id . '.jpg');
    			}
    			if($_FILES["image1"]["type"]=='image/png'){
    			move_uploaded_file($_FILES["image1"]["tmp_name"], 'uploads/entitlement_proof/cwc_order/'. $project_id . '.png');
    			unlink('uploads/entitlement_proof/labour/q1/'. $project_id . '.jpg');
    			unlink('uploads/entitlement_proof/labour/q1/'. $project_id . '.pdf');
    			}
    }
    ///get cwc data
	   public function get_cwc_data($child_id,$type)
	   {
		   //print_r($child_id);
		   if($type=='cci')
		   {
			   $this->db->select("order_after_production.ccis_name as cci_id, order_after_production.cci_date as order_date,child_basic_detail.dob as dob,child_basic_detail.idate_of_rescue as date_rescued,child_basic_detail.district_id as district_id ,child_area_detail.area_name as cwc_name,child_basic_detail.child_name as child_name ,child_basic_detail.father_name as father_name,child_basic_detail.year as age,child_basic_detail.postal_address as postal_address,panchayat_names.name as panchayat_name,police_stations.police_station_name as police_station_name,state.area_name as state,district.area_name as district,block.area_name as block,cci_area.area_name as cci_name")
				  ->where('order_after_production.child_id' , $child_id)
				  ->join("child_basic_detail","child_basic_detail.child_id = order_after_production.child_id")
				  ->join("child_area_detail","child_area_detail.area_id = child_basic_detail.district_id")
				  ->join('police_stations','police_stations.id=child_basic_detail.police_station','left')
				->join('pincode_list','pincode_list.id=child_basic_detail.pincode','left')
				->join('panchayat_names','panchayat_names.id=child_basic_detail.panchayat_name','left')
				->join('child_area_detail as state','state.area_id =child_basic_detail.state','left')
				->join('child_area_detail as district','district.area_id =child_basic_detail.district','left')
				->join('child_area_detail as block','block.area_id =child_basic_detail.block','left')
				->join('cci_area','cci_area.id=order_after_production.ccis_name ','left');
		          return $this->db->get('order_after_production')->result_array();
		   }
		   if($type=='fit_institution')
		   {
			   $this->db->select("order_after_production.fitinstitution_name as cci_name,order_after_production.fitinstitution_date as order_date, child_basic_detail.dob as dob,child_basic_detail.idate_of_rescue as date_rescued,child_basic_detail.district_id as district_id ,child_area_detail.area_name as cwc_name,child_basic_detail.child_name as child_name ,child_basic_detail.father_name as father_name,child_basic_detail.year as age,child_basic_detail.postal_address as postal_address,panchayat_names.name as panchayat_name,police_stations.police_station_name as police_station_name,state.area_name as state,district.area_name as district,block.area_name as block")
				  ->where('order_after_production.child_id' , $child_id)
				  ->join("child_basic_detail","child_basic_detail.child_id = order_after_production.child_id")
				  ->join("child_area_detail","child_area_detail.area_id = child_basic_detail.district_id")
				  ->join('police_stations','police_stations.id=child_basic_detail.police_station','left')
				->join('pincode_list','pincode_list.id=child_basic_detail.pincode','left')
				->join('panchayat_names','panchayat_names.id=child_basic_detail.panchayat_name','left')
				->join('child_area_detail as state','state.area_id =child_basic_detail.state','left')
				->join('child_area_detail as district','district.area_id =child_basic_detail.district','left')
				->join('child_area_detail as block','block.area_id =child_basic_detail.block','left');
				         return $this->db->get('order_after_production')->result_array();
		   }
		   if($type=='other_place')
		   {
			   $this->db->select("order_after_production.otherplace_name as cci_name,order_after_production.otherplace_date as order_date, child_basic_detail.dob as dob,child_basic_detail.idate_of_rescue as date_rescued,child_basic_detail.district_id as district_id ,child_area_detail.area_name as cwc_name,child_basic_detail.child_name as child_name ,child_basic_detail.father_name as father_name,child_basic_detail.year as age,child_basic_detail.postal_address as postal_address,panchayat_names.name as panchayat_name,police_stations.police_station_name as police_station_name,state.area_name as state,district.area_name as district,block.area_name as block")
				  ->where('order_after_production.child_id' , $child_id)
				  ->join("child_basic_detail","child_basic_detail.child_id = order_after_production.child_id")
				  ->join("child_area_detail","child_area_detail.area_id = child_basic_detail.district_id")
				  ->join('police_stations','police_stations.id=child_basic_detail.police_station','left')
				->join('pincode_list','pincode_list.id=child_basic_detail.pincode','left')
				->join('panchayat_names','panchayat_names.id=child_basic_detail.panchayat_name','left')
				->join('child_area_detail as state','state.area_id =child_basic_detail.state','left')
				->join('child_area_detail as district','district.area_id =child_basic_detail.district','left')
				->join('child_area_detail as block','block.area_id =child_basic_detail.block','left');
				         return $this->db->get('order_after_production')->result_array();
		   }
		   //to get the 
		   if($type=='Parents')
		   {
			   $this->db->select("order_after_production.parents_name as person_name,order_after_production.parent_date as order_date,order_after_production.parent_address as person_address,child_basic_detail.dob as dob,child_basic_detail.idate_of_rescue as date_rescued,child_basic_detail.district_id as district_id ,child_area_detail.area_name as cwc_name,child_basic_detail.child_name as child_name ,child_basic_detail.father_name as father_name,child_basic_detail.year as age,parent_district.area_name as person_district")
				  ->where('order_after_production.child_id' , $child_id)
				  ->join("child_basic_detail","child_basic_detail.child_id = order_after_production.child_id")
				  ->join("child_area_detail","child_area_detail.area_id = child_basic_detail.district_id")
				  ->join("child_area_detail as parent_district","parent_district.area_id = order_after_production.parent_dist");
				  
				         return $this->db->get('order_after_production')->result_array();
		   }
		   if($type=='fit_person')
		   {
			   $this->db->select("order_after_production.fitperson_name as person_name,order_after_production.fitperson_date as order_date,order_after_production.fitperson_address as person_address,child_basic_detail.dob as dob,child_basic_detail.idate_of_rescue as date_rescued,child_basic_detail.district_id as district_id ,child_area_detail.area_name as cwc_name,child_basic_detail.child_name as child_name ,child_basic_detail.father_name as father_name,child_basic_detail.year as age,parent_district.area_name as person_district")
				  ->where('order_after_production.child_id' , $child_id)
				  ->join("child_basic_detail","child_basic_detail.child_id = order_after_production.child_id")
				  ->join("child_area_detail","child_area_detail.area_id = child_basic_detail.district_id")
				  ->join("child_area_detail as parent_district","parent_district.area_id = order_after_production.fitperson_dist");
				  
				         return $this->db->get('order_after_production')->result_array();
		   }
	   }
  }
  
  
  
