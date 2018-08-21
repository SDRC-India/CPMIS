
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<?php
class Cm_relief_cl_model extends CI_Model {
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
      public function get_cm_relief_cl_list_data($role_id,$district_id)
      {

        if($role_id==7 || $role_id==8) {
      $quer="select child_basic_detail.child_id,child_name,pstatus,cm_fund_eligibility.physically_verified as physically_verified,cm_fund_eligibility.eligible_cm_fund as eligible_cm_fund from child_basic_detail
       LEFT JOIN cm_fund_eligibility on child_basic_detail.child_id=cm_fund_eligibility.child_id
       where child_basic_detail.disposed_ls=0 AND  (ls_activate='Y' and district_id='" . $district_id ."' and child_basic_detail.child_id in(select child_id from final_order where dist='' or dist IS NULL)) or child_basic_detail.child_id in(select child_id from final_order where dist='" .$district_id . "') ";
            }
        else {
        if ($role_id==6) {
      		    $quer="select child_basic_detail.child_id,child_name,pstatus,cm_fund_eligibility.physically_verified as physically_verified,cm_fund_eligibility.eligible_cm_fund as eligible_cm_fund from child_basic_detail
       LEFT JOIN cm_fund_eligibility on child_basic_detail.child_id=cm_fund_eligibility.child_id where child_basic_detail.disposed_ls=0 AND child_basic_detail.child_id in(Select child_id from order_after_production where  order_type='cci' and cci_dist=(Select area_name from child_area_detail where area_id='" .$district_id. "'))";
        }
		else if($role_id==2 || $role_id==5)
		{
			$quer="select child_basic_detail.child_id,child_name,pstatus,cm_fund_eligibility.physically_verified as physically_verified,cm_fund_eligibility.eligible_cm_fund as eligible_cm_fund from child_basic_detail
       LEFT JOIN cm_fund_eligibility on child_basic_detail.child_id=cm_fund_eligibility.child_id where (district_id='" . $district_id ."' and child_basic_detail.child_id in(select child_id from final_order where dist='' or dist IS NULL)) or child_basic_detail.child_id in(select child_id from final_order where dist='" .$district_id . "')";
			
		}
        else{
        $quer="select child_basic_detail.child_id,child_name,pstatus,cm_fund_eligibility.physically_verified as physically_verified,cm_fund_eligibility.eligible_cm_fund as eligible_cm_fund from child_basic_detail
      LEFT JOIN cm_fund_eligibility on child_basic_detail.child_id=cm_fund_eligibility.child_id where child_basic_detail.disposed_ls=0 AND   (district_id='" . $district_id ."' and child_basic_detail.child_id in(select child_id from final_order where dist='' or dist IS NULL)) or child_basic_detail.child_id in(select child_id from final_order where dist='" .$district_id . "')";
        }
      }
        return $this->db->query($quer)->result_array();
      }
    function get_cm_relief_cl_data($child_id)
    {
      $this->db->select('physically_verified,verification_date,child_address,eligible_cm_fund,demand_raised,demand_received,lettterno_amount,availabil_bankdetails,reason_no,other_reason,cm_fund_eligibility.child_id as child_id ,bank_details_id,mtransfer_proof,child_basic_detail.idate_of_rescue as rescued_date,child_basic_detail.postal_address as postal_address,panchayat_names.name as panchayat_name,police_stations.police_station_name as police_station_name,state.area_name as state,district.area_name as district,block.area_name as block,pincode_list.pincode as pincode')
                ->join('child_basic_detail','cm_fund_eligibility.child_id = child_basic_detail.child_id',left)
				->join('police_stations','police_stations.id=child_basic_detail.police_station','left',left)
				->join('pincode_list','pincode_list.id=child_basic_detail.pincode','left')
				->join('panchayat_names','panchayat_names.id=child_basic_detail.panchayat_name','left')
				->join('child_area_detail as state','state.area_id =child_basic_detail.state','left')
				->join('child_area_detail as district','district.area_id =child_basic_detail.district_id','left')
				->join('child_area_detail as block','block.area_id =child_basic_detail.block','left')
				->where('cm_fund_eligibility.child_id',$child_id);
                $query = $this->db->get('cm_fund_eligibility');
               // print_r($query->result_array());
      return $query->result_array();
    }
	function get_bank_details($child_id)
	{
		return $this->db->select('*')->where('bank_account_details.child_id',$child_id)->get('bank_account_details')->result_array();
		
	}
	function get_bank_detail($bank_details_id)
	{
		 
		return $this->db->select('*')->where('bank_account_details.id',$bank_details_id)->get('bank_account_details')->result_array();
		
	}
    //create cm relief dept
    function update_cm_relief($child_id) {
    	$datap['uid']=$this->session->userdata('login_user_id');
    	$datap['last_date_update']=date("Y-m-d");
    	$datap['physically_verified']=$this->input->post('physically_verified');
		  if($datap['physically_verified']=='Yes')
		  {
			   $date=$this->input->post('verification_date');
			 $datap['verification_date']=date('Y-m-d',strtotime($date));
		 
			
      $datap['child_address']=$this->input->post('new_postaladdress');
	  $datap['eligible_cm_fund']=$this->input->post('eligible_cm_fund');
		   if($datap['eligible_cm_fund']=='Yes')
			  {
					/* new three question */
					  $datap['demand_raised']=$this->input->post('demand_raised');
				       $datap['demand_received']=$this->input->post('demand_received');
				       $datap['lettterno_amount']=$this->input->post('lettterno_amount');
				       $datap['availabil_bankdetails']=$this->input->post('availabil_bankdetails');
				
				       if( $datap['availabil_bankdetails']=='1'){
					if( $this->input->post('bank_details')=="new")
					{
					  $datab['acc_no']=$this->input->post('acc_no');
					  $datab['ifsc_code']=$this->input->post('ifsc_code');
					  $datab['bank_name']=$this->input->post('bank_name');
					  $datab['bank_address']=$this->input->post('bank_address');
					  $datab['child_id']=$child_id;
					  $this->db->insert('bank_account_details', $datab);
					 
					  $datap['bank_details_id']=$this->db->insert_id();  //currently inserted id 
					}
				else{
					//echo $this->input->post('bank_details');
					$datap['bank_details_id']=$this->input->post('bank_details');
				   }
				       }
				       else{
				       	
				       	$datap['bank_details_id']="0" ;
				       	$datap['mtransfer_proof']="";
				       }
				// $datap['bank_details_id']=$this->input->post('bank_details');
				       $datap['mtransfer_proof']=$this->input->post('mtransfer_proof');
			  }
			  if($datap['eligible_cm_fund']=='No')
			  {
				$datap['reason_no']=$this->input->post('reason');  
				$datap['other_reason']=$this->input->post('reason_other'); 
				
				$datap['bank_details_id']=0; 
				$datap['demand_raised']=NULL ;
				$datap['demand_received']=NULL ;
				$datap['lettterno_amount']=NULL ;
				$datap['availabil_bankdetails']=NULL ;
				$datap['mtransfer_proof']="" ; 
				if(file_exists('uploads/entitlement_proof/cm_relief/'. $child_id . '.jpg'))
				{
					unlink('uploads/entitlement_proof/cm_relief/'. $child_id . '.jpg');
				}
				if(file_exists('uploads/entitlement_proof/cm_relief/'. $child_id . '.pdf'))
				{
					unlink('uploads/entitlement_proof/cm_relief/'. $child_id . '.pdf');
				}
				if(file_exists('uploads/entitlement_proof/cm_relief/'. $child_id . '.png'))
				{
					unlink('uploads/entitlement_proof/cm_relief/'. $child_id . '.png');
				}
			  }
			  else{
			  	$datap['other_reason']="" ;
				  $datap['reason_no']="";  
				  $datap['mtransfer_proof']=$this->input->post('mtransfer_proof');
			  }
	   }
		else{
			if(file_exists('uploads/entitlement_proof/cm_relief/'. $child_id . '.jpg'))
			{
				unlink('uploads/entitlement_proof/cm_relief/'. $child_id . '.jpg');
			}
			if(file_exists('uploads/entitlement_proof/cm_relief/'. $child_id . '.pdf'))
			{
				unlink('uploads/entitlement_proof/cm_relief/'. $child_id . '.pdf');
			}
			if(file_exists('uploads/entitlement_proof/cm_relief/'. $child_id . '.png'))
			{
				unlink('uploads/entitlement_proof/cm_relief/'. $child_id . '.png');
			}
			$datap['reason_no']=NULL;
			$datap['bank_details_id']=0;
			$datap['demand_raised']=NULL ;
			$datap['demand_received']=NULL ;
			$datap['lettterno_amount']=NULL ;
			$datap['availabil_bankdetails']=NULL ;
			$datap['mtransfer_proof']="" ; 
			$datap['verification_date']='0000-00-00';
			$datap['bank_details_id']=0;
			 $datap['eligible_cm_fund']="";
			 $datap['child_address']="";
			 $datab['acc_no']=NULL;
			 $datab['ifsc_code']=NULL;
			 $datab['bank_name']=NULL;
			 $datab['bank_address']=NULL;
			}
		
		if($this->input->post('mtransfer_proof')=='No')
		{
			if(file_exists('uploads/entitlement_proof/cm_relief/'. $child_id . '.jpg'))
			{
			  unlink('uploads/entitlement_proof/cm_relief/'. $child_id . '.jpg');
			}
			if(file_exists('uploads/entitlement_proof/cm_relief/'. $child_id . '.pdf'))
			{
				unlink('uploads/entitlement_proof/cm_relief/'. $child_id . '.pdf');
			}
			if(file_exists('uploads/entitlement_proof/cm_relief/'. $child_id . '.png'))
			{
			  unlink('uploads/entitlement_proof/cm_relief/'. $child_id . '.png');
			}
		}
    	$this->db->where('child_id', $child_id);
    	$this->db->update('cm_fund_eligibility', $datap);
    	$dataq['uid']=$this->session->userdata('login_user_id');
    	$dataq['module_id']=$child_id;
    	$dataq['module_name']='Cm relief fund';
    	$dataq['date_time']=date("Y-m-d H:i:s");
    	$this->db->insert('history_update', $dataq);
    	if( $_FILES["image1"]["type"]=='image/jpeg'){
    				move_uploaded_file($_FILES["image1"]["tmp_name"], 'uploads/entitlement_proof/cm_relief/'. $child_id . '.jpg');
    			}
    			if($_FILES["image1"]["type"]=='application/pdf'){
    			move_uploaded_file($_FILES["image1"]["tmp_name"], 'uploads/entitlement_proof/cm_relief/'. $child_id . '.pdf');
    			unlink('uploads/entitlement_proof/cm_relief/'. $child_id . '.jpg');
    			}
    			if($_FILES["image1"]["type"]=='image/png'){
    			move_uploaded_file($_FILES["image1"]["tmp_name"], 'uploads/entitlement_proof/cm_relief/'. $child_id . '.png');
    			unlink('uploads/entitlement_proof/cm_relief/'. $child_id . '.jpg');
    			unlink('uploads/entitlement_proof/cm_relief/'. $child_id . '.pdf');
    			}
    }
	
	/* for child details*/
	public function get_child_data($param1="",$param2="")
    {
    
      return $this->db->get_where('child_basic_detail' , array('child_id' => $param1))->result_array(); 
    }
	

  }
