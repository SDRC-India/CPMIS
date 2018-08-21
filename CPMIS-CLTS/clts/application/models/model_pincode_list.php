
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<?php
class Model_pincode_list extends CI_Model {

  function __construct()
  {
      parent::__construct();
      $this->load->database();

  }

       /* public function get_ps_list()
        {
          $this->db->select('*,dchild_area_detail.area_name as district_name, schild_area_detail.area_name as state_name')
                ->join('child_area_detail as dchild_area_detail','staff.district_id= dchild_area_detail.area_id')
                ->order_by('id' , 'desc');
                return $this->db->get('policestation_dist')->result_array();
        }*/
		 //create staff
        public function get_pincode_list()
        {
          $this->db->select('*')
                ->order_by('id' , 'desc');
                return $this->db->get('pincode_list')->result_array();
        }
		
		 function create_pincode() {
            $data['pincode'] = $this->input->post('name');
    	    $data['district_id'] = $this->input->post('district_id');
            $this->db->insert('pincode_list', $data);          
        }
		
		function update_pincode($ps_id) {
			$data['pincode'] = $this->input->post('name');
			$data['district_id'] = $this->input->post('district_id');
            $this->db->where('id', $ps_id);
            $this->db->update('pincode_list', $data);
        }
		public function get_pincode_data($ps_id)
        {
          return  $this->db->get_where('pincode_list' , array('id' => $ps_id))->result_array();
        }
		public function get_pincodelist_data($ps_id)
        {
          return  $this->db->get_where('pincode_list' , array('district_id' => $ps_id))->result_array();
        }
public function get_pindistricts_list($state_id)
      {
    return $this->db->select('*')->where('parent_id',$state_id)->order_by('area_name', 'asc')->group_by('area_name')->get('child_area_detail')->result_array();
      }
		
		
		

}
