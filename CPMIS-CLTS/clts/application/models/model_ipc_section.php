
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<?php
class Model_ipc_section extends CI_Model {

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
        public function get_ipc_list()
        {
          $this->db->select('*')
                ->order_by('id' , 'desc');
                return $this->db->get('sections')->result_array();
        }
		//create ipc
        function create_ipc() {
            $data['section_name'] = $this->input->post('name');
    	    $data['descr'] = $this->input->post('ipcdes');
            $this->db->insert('sections', $data);          
        }
		
		function update_ipc($ps_id) {
			$data['section_name'] = $this->input->post('name');
			$data['descr'] = $this->input->post('ipcdes');
            $this->db->where('id', $ps_id);
            $this->db->update('sections', $data);
        }
		
		public function get_ipc_data($ps_id)
        {
          return  $this->db->get_where('sections' , array('id' => $ps_id))->result_array();
        }
		
		

}
