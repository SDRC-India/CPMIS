
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<?php
class Model_wages extends CI_Model {

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
        public function get_wages_list()
        {
          $this->db->select('*')
                ->order_by('id' , 'desc');
                return $this->db->get('wages')->result_array();
        }
		
		 function create_wages() {
            $data['sector'] = $this->input->post('name');
    	    $data['type'] = $this->input->post('category');
    	    $data['wage_amount'] = $this->input->post('amount');
            $this->db->insert('wages', $data);          
        }
		
		function update_wages($ps_id) {
			$data['sector'] = $this->input->post('name');
			$data['type'] = $this->input->post('category');
			 $data['wage_amount'] = $this->input->post('amount');
            $this->db->where('id', $ps_id);
            $this->db->update('wages', $data);
        }
		
		public function get_wages_data($ps_id)
        {
          return  $this->db->get_where('wages' , array('id' => $ps_id))->result_array();
        }
		

}
