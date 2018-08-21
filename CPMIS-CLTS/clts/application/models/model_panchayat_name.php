
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<?php
class Model_panchayat_name extends CI_Model {

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
        public function get_panchayat_list($block_id)
        {
		//echo $block_id ;
		   return  $this->db->get_where('panchayat_names' , array('block_id' => $block_id))->result_array();

        }
		
		 function create_panchayat() {
            $data['name'] = $this->input->post('name');
    	    $data['block_id'] = $this->input->post('block');
            $this->db->insert('panchayat_names', $data);          
        }
		
		function update_panchayat($ps_id) {
			$data['name'] = $this->input->post('name');
			$data['block_id'] = $this->input->post('block');
            $this->db->where('id', $ps_id);
            $this->db->update('panchayat_names', $data);
        }
		public function get_panchayat_data($ps_id)
        {
          return  $this->db->get_where('panchayat_names' , array('id' => $ps_id))->result_array();
        }
		
	public function get_psdistricts_list($state_id)
      {
		return $this->db->select('*')->where('parent_id',$state_id)->order_by('area_name', 'asc')->group_by('area_name')->get('child_area_detail')->result_array();
      }
		
	public function get_psdetails_blockid($district,$block)
      {
	  //echo $district."-----".$block ;
	  
		if(($district!="") && ($block!="")){
		return $this->db->select('*')->where('block_id',$block)->order_by('name', 'asc')->group_by('name')->get('panchayat_names')->result_array();
		}
		else if($district!=""){
				 
				/*$this->db->select('panchayat_names.name as pname,child_area_detail.area_name as block_name')
                ->join("child_area_detail","child_area_detail.parent_id=$district");
                print_r($this->db->get('panchayat_names')->result_array());*/
			/*	$sql="SELECT *,panchayat_names.name as pname,child_area_detail.area_name as block_name,child_area_detail.parent_id as pid FROM child_area_detail
				  left join panchayat_names ON child_area_detail.area_id=panchayat_names.block_id
				  WHERE pid=$district
				";
				
				*/
				
				
				
				//print_r($this->db->query($sql)->result_array());
                //return $this->db->query($sql)->result_array();
				
		}
	 }
	  
	  public function get_psblocks_list($state_id)
      {
		return $this->db->select('*')->where('parent_id',$state_id)->order_by('area_name', 'asc')->group_by('area_name')->get('child_area_detail')->result_array();
      }
		
		

}
