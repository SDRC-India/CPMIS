
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<?php
class Model_caste extends CI_Model {

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
        public function get_caste_list()
        {
          $this->db->select('*')
                ->order_by('id' , 'desc');
                return $this->db->get('caste_list')->result_array();
        }
		
		 function create_caste() {
            $data['caste_category'] = $this->input->post('name');
    	    $data['caste_name'] = $this->input->post('caste');
            $this->db->insert('caste_list', $data);          
        }
		
		function update_caste($ps_id) {
			$data['caste_category'] = $this->input->post('name');
			$data['caste_name'] = $this->input->post('caste');
            $this->db->where('id', $ps_id);
            $this->db->update('caste_list', $data);
        }
		public function get_caste_data($ps_id)
        {
          return  $this->db->get_where('caste_list' , array('id' => $ps_id))->result_array();
        }
		
		

}
