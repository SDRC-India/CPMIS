
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<?php
class Model_scheme_list extends CI_Model {

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
       public function get_scheme_list()
        {
          $this->db->select('*')
                ->order_by('id' , 'desc');
                return $this->db->get('scheme_list')->result_array();
        }
		
		//create scheme
        function create_scheme() {
            $data['dept_name'] = $this->input->post('dpname');
    	    $data['scheme_name'] = $this->input->post('snname');
    	    $data['scheme_benifits'] = $this->input->post('sbname');
    	    $data['tenure_period'] = $this->input->post('tpname');
    	    $data['benefit_period'] = $this->input->post('period');
            $this->db->insert('scheme_list', $data);
            
        }
		
		//update scheme
		 //update police_station
        function update_schemelist($ps_id) {
			$data['dept_name'] = $this->input->post('dpname');
			$data['scheme_name'] = $this->input->post('snname');
			$data['scheme_benifits'] = $this->input->post('sbname');
			$data['tenure_period'] = $this->input->post('tpname');
			$data['benefit_period'] = $this->input->post('period');
            $this->db->where('id', $ps_id);
            $this->db->update('scheme_list', $data);
        }
		 
		 public function get_scheme_data($ps_id)
        {
          return  $this->db->get_where('scheme_list' , array('id' => $ps_id))->result_array();
        }

}
