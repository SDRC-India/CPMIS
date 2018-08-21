
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<?php
class Card_list_model extends CI_Model {
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
      public function get_card_list_data($role_id,$district_id,$state_id)
      {

        if ($role_id==7 || $role_id==8) {

              $quer="select child_basic_detail.child_id as child_id ,child_basic_detail.pstatus as pstatus,child_basic_detail.child_name as child_name,child_basic_detail.postal_address as postal_address,child_basic_detail.district as district,child_area_detail.area_name as area_name  from final_order 
join child_basic_detail on child_basic_detail.child_id = final_order.child_id
LEFT JOIN child_area_detail on child_basic_detail.district=child_area_detail.area_id
WHERE child_basic_detail.disposed_ls=0 AND  child_basic_detail.ls_activate='Y' and child_basic_detail.district_id='".$district_id."' AND (final_order.dist='' or final_order.dist IS NULL) AND child_basic_detail.pstatus='Y'
 OR (child_basic_detail.disposed_ls=0 AND final_order.dist='".$district_id."' AND child_basic_detail.pstatus='Y')
 OR (child_basic_detail.disposed_ls=0 AND child_basic_detail.pstatus='Y' AND  child_basic_detail.district_id='" . $district_id ."')";
      		 }


            else{
            if ($role_id==6) {
             $quer="select child_basic_detail.child_id as child_id ,child_basic_detail.pstatus as pstatus,child_basic_detail.child_name as child_name,child_basic_detail.postal_address as postal_address,child_basic_detail.district as district,child_area_detail.area_name as area_name  from final_order 
join child_basic_detail on child_basic_detail.child_id = final_order.child_id
LEFT JOIN child_area_detail on child_basic_detail.district=child_area_detail.area_id
WHERE child_basic_detail.disposed_ls=0 AND  child_basic_detail.ls_activate='Y' and child_basic_detail.district_id='".$district_id."' AND (final_order.dist='' or final_order.dist IS NULL) AND child_basic_detail.pstatus='Y'
 OR (child_basic_detail.disposed_ls=0 AND final_order.dist='".$district_id."' AND child_basic_detail.pstatus='Y')
 OR (child_basic_detail.disposed_ls=0 AND child_basic_detail.pstatus='Y' AND  child_basic_detail.district_id='" . $district_id ."')";
            }
			else if($role_id==2 || $role_id==5)
			{
				
				$quer="select child_basic_detail.child_id as child_id ,child_basic_detail.pstatus as pstatus,child_basic_detail.child_name as child_name,child_basic_detail.postal_address as postal_address,child_basic_detail.district as district,child_area_detail.area_name as area_name  from final_order 
join child_basic_detail on child_basic_detail.child_id = final_order.child_id
LEFT JOIN child_area_detail on child_basic_detail.district=child_area_detail.area_id
WHERE child_basic_detail.ls_activate='Y' and child_basic_detail.district_id='".$district_id."' AND (final_order.dist='' or final_order.dist IS NULL) AND child_basic_detail.pstatus='Y'
 OR (final_order.dist='".$district_id."' AND child_basic_detail.pstatus='Y')
 OR (child_basic_detail.pstatus='Y' AND  child_basic_detail.district_id='" . $district_id ."')";
			}
            else
            {
             $quer="select child_basic_detail.child_id as child_id ,child_basic_detail.pstatus as pstatus,child_basic_detail.child_name as child_name,child_basic_detail.postal_address as postal_address,child_basic_detail.district as district,child_area_detail.area_name as area_name  from final_order 
join child_basic_detail on child_basic_detail.child_id = final_order.child_id
LEFT JOIN child_area_detail on child_basic_detail.district=child_area_detail.area_id
WHERE child_basic_detail.disposed_ls=0 AND  child_basic_detail.ls_activate='Y' and child_basic_detail.district_id='".$district_id."' AND (final_order.dist='' or final_order.dist IS NULL) AND child_basic_detail.pstatus='Y'
 OR (child_basic_detail.disposed_ls=0 AND final_order.dist='".$district_id."' AND child_basic_detail.pstatus='Y')
 OR (child_basic_detail.disposed_ls=0 AND child_basic_detail.pstatus='Y' AND  child_basic_detail.district_id='" . $district_id ."')";

            }
          }
        

        return $this->db->query($quer)->result_array();
      }
      function get_card_print_data($child_id)
      {
        $this->db->select('*,child_rural_development_department.is_mgnrega as is_mgnrega,child_urban_development_deoartment.is_sjsry as is_sjsry,child_urban_development_deoartment.is_jnrum as is_jnrum,child_rural_development_department.is_sgsy as is_sgsy,child_rural_development_department.is_iay as is_iay,child_basic_detail.idate_of_rescue as rescued_date,
          child_basic_detail.postal_address as postal_address,panchayat_names.name as panchayat_name,police_stations.police_station_name as police_station_name,state.area_name as state,district.area_name as district,block.area_name as block,child_outside_state.place_of_rescue_out as place_of_rescue_out,child_within_state.place_of_rescue as place_of_rescue')
                ->join('police_stations','police_stations.id=child_basic_detail.police_station','left')
				->join('pincode_list','pincode_list.id=child_basic_detail.pincode','left')
				->join('panchayat_names','panchayat_names.id=child_basic_detail.panchayat_name','left')
				->join('child_area_detail as state','state.area_id =child_basic_detail.state','left')
				->join('child_area_detail as district','district.area_id =child_basic_detail.district_id','left')
				->join('child_outside_state','child_outside_state.child_id =child_basic_detail.child_id','left')
				->join('child_within_state ','child_within_state.child_id =child_basic_detail.child_id','left')
				->join('child_area_detail as block','block.area_id =child_basic_detail.block','left')
                ->join('child_rural_development_department','child_basic_detail.child_id= child_rural_development_department.child_id')
                ->join('child_urban_development_deoartment','child_basic_detail.child_id= child_urban_development_deoartment.child_id')
                ->where('child_basic_detail.child_id',$child_id);
                  $query = $this->db->get('child_basic_detail');
          return $query->result_array();
      }





  }
