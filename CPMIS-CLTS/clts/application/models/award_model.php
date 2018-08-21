
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<?php
class Award_model extends CI_Model {

  function __construct()
  {
      parent::__construct();
      $this->load->database();

  }

  public function get_all_pics()
  {
  	
  		//$this->db->select('*')
  		//->where('staff_id',$staff_id)
  		//->order_by('id_cwc_member' , 'desc');
  		//return $this->db->get('cwc_new_member')->result_array();
  	$all_pics = $this->db->order_by('pic_id' , 'desc')->get('pictures');
  		return $all_pics->result();
  		
  	
  }
  
  public function store_pic_data($data){
  	
  	
  	 $insert_data['pic_title'] = $data['pic_title'];
  	$insert_data['pic_desc'] = $data['pic_desc'];
  	$insert_data['pic_file'] = $data['pic_file'];
  	
  	$query = $this->db->insert('pictures', $insert_data);
  
  	
  }
 

}
