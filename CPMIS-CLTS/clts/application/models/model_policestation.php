
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<?php
class Model_policestation extends CI_Model {

  function __construct()
  {
      parent::__construct();
      $this->load->database();

  }
		
       public function get_ps_list()
        {
          $this->db->select('*')
                ->order_by('id' , 'desc');
                return $this->db->get('police_stations')->result_array();
        }
		 //create staff
        function create_policestation() {
            $data['police_station_name'] = $this->input->post('name');
			
    		$data['district_id'] = $this->input->post('choices');
            $this->db->insert('police_stations', $data); 
        }
		 //update police_station
        function update_policestation($ps_id) {
            $data['police_station_name'] = $this->input->post('name');
        		$data['district_id'] = $this->input->post('choices');
            $this->db->where('id', $ps_id);
            $this->db->update('police_stations', $data);
        }
	
		/*function get_ps_list()
        {
          //$this->db->select('*,child_area_detail.area_name as dist_name')
		 // echo "select *,dchild_area_detail.area_name as district_name,policestation_dist.id as psid join child_area_detail as dchild_area_detail','policestation_dist.district_id= dchild_area_detail.parent_id policestation_dist.police_station_name " ;
          $this->db->select('*,dchild_area_detail.area_name as district_name,police_stations.id as psid')
                ->join('child_area_detail as dchild_area_detail','police_stations.district_id= dchild_area_detail.area_id')
                ->group_by('police_stations.id' , 'desc');
                return $this->db->get('police_stations')->result_array();
        } */
		
		public function get_ps_data($ps_id)
        {
          return  $this->db->get_where('police_stations' , array('id' => $ps_id))->result_array();
        }
		
	//model police station	
	public function get_psdistricts_list($state_id)
      {
    return $this->db->select('*')->where('parent_id',$state_id)->order_by('area_name', 'asc')->group_by('area_name')->get('child_area_detail')->result_array();
      }
	  
	  public function get_psdetails_blockid($state_id)
      {
    return $this->db->select('*')->where('district_id',$state_id)->order_by('police_station_name', 'asc')->group_by('police_station_name')->get('police_stations')->result_array();
      }
	  
	   public function get_psblock_lists($district_id)
      {
        return $this->db->select('*')->where('parent_id',$district_id)->order_by('area_name', 'asc')->group_by('area_name')->get('child_area_detail')->result_array();

      }
		 

}
