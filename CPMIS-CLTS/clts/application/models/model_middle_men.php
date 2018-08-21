
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<?php
class Model_middle_men extends CI_Model {

  function __construct()
  {
      parent::__construct();
      $this->load->database();

  }

  public function get_middle_list($staff_id,$role_id)
        {
        	if($staff_id==40){
        	$this->db->select('*')
                ->order_by('middlemen_id' , 'desc');
                return $this->db->get('middlemen_reg')->result_array();
        	}
        	else if($role_id==21){
        		$this->db->select('*')
        		->order_by('middlemen_id' , 'desc');
        		return $this->db->get('middlemen_reg')->result_array();
        	}else{
        		$this->db->select('*')
        		->where('staff_id',$staff_id)
        		->order_by('middlemen_id' , 'desc');
        		return $this->db->get('middlemen_reg')->result_array();
        		
        	}
        }
		 //create staff
        function create_middlemen() {
        	$ses_ids=$this->session->userdata('login_user_id');
        	
        
        	//echo $dist_id ; die();
        	if($ses_ids==40){
        		$data['statusby_lc'] = 1;
        	}else{
        		$data['statusby_lc'] = 0;
        	}
        	$data['staff_id'] = $ses_ids ;
            $data['name'] = $this->input->post('name');
            $data['alias'] = $this->input->post('alias');
            $data['address'] = $this->input->post('addressmiddle');
			if($this->input->post('contact'))
			{
				$data['contact'] = $this->input->post('contact');
			}
			else{
				$data['contact'] = "";
			}
            
            $data['other_details'] = $this->input->post('otherdetails');
            $data['created_date'] = date('Y-m-d');
            $this->db->insert('middlemen_reg', $data);
            $middlemen_id= mysql_insert_id();
            move_uploaded_file($_FILES['userfile']['tmp_name'], 'uploads/middle_men/' . $middlemen_id. '.jpg');
	
        }
		
		function update_middlemen($ps_id,$session_id) {
			move_uploaded_file($_FILES['userfile']['tmp_name'], 'uploads/middle_men/' . $ps_id. '.jpg');
			
			if($session_id==40){
				$data['statusby_lc'] = 1;				
			}else{
				
				$data['statusby_lc'] = 0;
				
			}
			$data['name'] = $this->input->post('name');
            $data['alias'] = $this->input->post('alias');
            $data['address'] = $this->input->post('addressmiddle');
            if($this->input->post('contact'))
			{
				$data['contact'] = $this->input->post('contact');
			}
			else{
				$data['contact'] = "";
			}
            $data['other_details'] = $this->input->post('otherdetails');
            $this->db->where('middlemen_id', $ps_id);
            $this->db->update('middlemen_reg', $data);
            
        }
		
		 public function get_middlemen_data($ps_id)
        {
          return  $this->db->get_where('middlemen_reg' , array('middlemen_id' => $ps_id))->result_array();
        }
		 //update police_station
       /* function update_policestation($ps_id) {
            $data['police_station_name'] = $this->input->post('name');
        		$data['district_id'] = $this->input->post('choices');
            $this->db->where('id', $ps_id);
            $this->db->update('policestation_dist', $data);
        }
		
		function get_ps_list()
        {
          //$this->db->select('*,child_area_detail.area_name as dist_name')
		 // echo "select *,dchild_area_detail.area_name as district_name,policestation_dist.id as psid join child_area_detail as dchild_area_detail','policestation_dist.district_id= dchild_area_detail.parent_id policestation_dist.police_station_name " ;
          $this->db->select('*,dchild_area_detail.area_name as district_name,policestation_dist.id as psid')
                ->join('child_area_detail as dchild_area_detail','policestation_dist.district_id= dchild_area_detail.area_id')
                ->group_by('policestation_dist.id' , 'desc');
                return $this->db->get('policestation_dist')->result_array();
        }
		
		public function get_ps_data($ps_id)
        {
          return  $this->db->get_where('policestation_dist' , array('id' => $ps_id))->result_array();
        }
		 */

}
