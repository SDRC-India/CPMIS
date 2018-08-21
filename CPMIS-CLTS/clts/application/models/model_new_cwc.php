
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<?php
class Model_new_cwc extends CI_Model {

  function __construct()
  {
      parent::__construct();
      $this->load->database();

  }

  public function get_cwc_list($staff_id)
  {
  	
  		$this->db->select('*')
  		->where('staff_id',$staff_id)
  		->order_by('desg_id' , 'asc');
  		return $this->db->get('cwc_new_member')->result_array();
  		
  	
  }
  
  
  public function get_cwc_list_k($staff_id)
  {
  	
  	$this->db->select('*')
  	->where('staff_id !=',$staff_id)
  	->order_by('desg_id' , 'asc');
  	return $this->db->get('cwc_new_member')->result_array();
  	
  	
  }
		 //create staff
        function create_cwcmember() {
        	$ses_ids=$this->session->userdata('login_user_id');
        	
        
        	//echo $dist_id ; die();
        	//if($ses_ids==40){
        		//$data['statusby_lc'] = 1;
        	//}else{
        		//$data['statusby_lc'] = 0;
        	//}
           $data['staff_id'] = $ses_ids ;
           
           
           $data['desg_id'] = $this->input->post('desg');
           $data['name'] = $this->input->post('name');
           $data['age'] = $this->input->post('age');
           $data['professional_qualification'] = $this->input->post('professional_qualification');
           $data['personal_address'] = $this->input->post('address');
			if($this->input->post('contact'))
			{
				$data['contact'] = $this->input->post('contact');
			}
			else{
				$data['contact'] = "";
			}
            
            $data['joining_date'] = $this->input->post('doj');
            $release=$this->input->post('rdj') ;
            if($release!=""){
            $data['release_date'] = $this->input->post('rdj');
            }
            $data['created_date'] = date('Y-m-d');
           
            $this->db->insert('cwc_new_member', $data);
            $cwc_id= mysql_insert_id();
            move_uploaded_file($_FILES['userfile']['tmp_name'], 'uploads/cwc/' . $cwc_id. '.jpg');
	
        }
		
        function update_cwc($ps_id,$session_id) {
			move_uploaded_file($_FILES['userfile']['tmp_name'], 'uploads/cwc/' . $ps_id. '.jpg');
			 
			$data['name'] = $this->input->post('name');
			$data['age'] = $this->input->post('age');
			$data['professional_qualification'] = $this->input->post('professional_qualification');
			$data['personal_address'] = $this->input->post('address');
			
			
			if($this->input->post('contact'))
			{
				$data['contact'] = $this->input->post('contact');
			}
			else{
				$data['contact'] = "";
			}
			
		echo 	$data['joining_date'] = $this->input->post('doj');
			$release_date=$this->input->post('rdj');
			
			if($release_date!="")
			{
				
				$data['release_date'] = $release_date;
				$data['desg_id']=$this->input->post('desg');
				$data['created_date'] = date('Y-m-d');
				$this->db->insert('cwc_prv_member', $data);
				//unlink('uploads/cwc/' . $ps_id. '.jpg');
				$query = mysql_query("update `cwc_new_member` set name='',age='',professional_qualification='',personal_address='',contact='',joining_date=NULL,release_date=NULL WHERE `id_cwc_member` = '$ps_id'");	
			}else{
				
				$data['release_date'] = NULL ;
				
            $this->db->where('id_cwc_member', $ps_id);
            $this->db->update('cwc_new_member', $data);
			}
            
        }
		
        public function get_cwc_list_new($ps_id)
        {  
    	
          return  $this->db->get_where('cwc_new_member' , array('staff_id' => $ps_id))->result_array();
        }
        
        public function get_cwc_list_new_k($ps_id)
        {
        	
        	return  $this->db->get_where('cwc_new_member' , array('staff_id !=' => $ps_id))->result_array();
        	
        }
      
        public function get_cwc_edit_member($cwc_id)
        {
        	
        	return  $this->db->get_where('cwc_new_member' , array('id_cwc_member =' => $cwc_id))->result_array();
        	
        }
        
        public function get_designation_list($staff_id)
        {
        	$result_array = array();
        	
        	$select_desc=mysql_query("select * from cwc_new_member where staff_id='$staff_id'") ;
        	$count=mysql_num_rows($select_desc);
        	if($count>0){
        	while($row = mysql_fetch_assoc($select_desc))
        	{
        		$result_array[] = (int) $row['desg_id'];
        	}
        	
        	$string = join(', ', $result_array);
        	$FileName = str_replace("'", "", $string);
        	
        	$query1="select * from designation_of_cwc where id not in ($FileName) ";
        	}else{
        		
        		$query1="select * from designation_of_cwc ";
        		
        	}
        	 return $this->db->query($query1)->result_array();
       
        }
        

}
