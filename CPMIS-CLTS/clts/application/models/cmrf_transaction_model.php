
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<?php
//code by satyanarayan
class Cmrf_transaction_model extends CI_Model {
	
	  function __construct()
	  {
	      parent::__construct();
	      $this->load->database();
		  $this->load->library('session');
	
	  }
	  
	  public function get_cmrf_trn_data()
		  {
	  	    
		  	 $query="SELECT *,cmrf_trn_details.id as cmrf_id FROM cmrf_trn_details LEFT JOIN child_area_detail ON child_area_detail.area_id=cmrf_trn_details.district_id COLLATE utf8_general_ci order by cmrf_trn_details.id DESC";
		  	 return $this->db->query($query)->result_array();
		  	
		  }
		  public function get_cmrf_trn_lc($from,$to,$dist_id,$param1)
			 {
				$query="SELECT *,cmrf_trn_details.id as cmrf_id FROM cmrf_trn_details LEFT JOIN child_area_detail ON child_area_detail.area_id=cmrf_trn_details.district_id
						 COLLATE utf8_general_ci where district_id='".$dist_id."' AND cmrf_trn_details.dr_date BETWEEN  '".$from."' AND '".$to."'";
				if($param1=="pdf")
				{
				$query="SELECT *,cmrf_trn_details.id as cmrf_id FROM cmrf_trn_details LEFT JOIN child_area_detail ON child_area_detail.area_id=cmrf_trn_details.district_id
						 COLLATE utf8_general_ci where district_id='".$dist_id."' AND cmrf_trn_details.dr_date BETWEEN  '".$from."' AND '".$to."'";
				}
				
						 return $this->db->query($query)->result_array();
			 }
		  public  function get_count_CMRFtrn($dist_id)
		  {
		  	$query="SELECT count(*) as count_cmrf,id as cmrf_id FROM cmrf_trn_details WHERE status='1' AND district_id='".$dist_id."'";
		  	
		  	return $this->db->query($query)->result_array(); 	
		  }
		  public function get_cmrf_trn_ls($dist_id)
		  {
		  	$query="SELECT * FROM cmrf_trn_details 
               where district_id='".$dist_id."' AND  status='0' order by id DESC";
		  	 return $this->db->query($query)->result_array();
		  }
		  public function get_cmrf_trn_guest()
		  {
		  	$query="SELECT * FROM cmrf_trn_details 
               where  status='1' order by id DESC";
		  	 return $this->db->query($query)->result_array();
		  }
		  
		  public function get_cmrf_trn_data_edit($id)
		  {
		  	
		  	$query="SELECT * FROM cmrf_trn_details WHERE id='".$id."'";
		  	return $this->db->query($query)->result_array();
		  	
		  }
		  public function Cmrf_sts($id)
		  {
		  	$datap['status']=0;
		  	$this->db->where('id',$id);
		  	$this->db->update('cmrf_trn_details', $datap);
		  	return true;
		  }
		  public function addNew()
		     {
		     	$datap['district_id']=$this->input->post('districts');
		     	$datap['dr_date']=date("Y-m-d",strtotime($this->input->post('dr_date')));
		     	$datap['dr_letter_no']=trim($this->input->post('dr_letter_no'));
		     	$datap['dr_cl_no']=$this->input->post('dr_cl_no');
		     	$datap['dr_amount']=$this->input->post('dr_amount');
		     	$datap['drel_date']=date("Y-m-d",strtotime($this->input->post('drel_date')));
		     	$datap['drel_letter_no']=trim($this->input->post('drel_letter_no'));
		     	$datap['drel_cl_no']=$this->input->post('drel_cl_no');
		     	$datap['drel_amount']=$this->input->post('drel_amount');
		     	$datap['date_created']=date('Y-m-d');
		     	$datap['status']=1;
		     	
		     	$this->db->insert('cmrf_trn_details', $datap);
		     }
		     
		    /*public function update($id)
		     {
		     	$datap['district_id']=$this->input->post('districts');
		     	$datap['dr_date']=date("Y-m-d",strtotime($this->input->post('dr_date')));
		     	$datap['dr_letter_no']=trim($this->input->post('dr_letter_no'));
		     	$datap['dr_cl_no']=$this->input->post('dr_cl_no');
		     	$datap['dr_amount']=$this->input->post('dr_amount');
		     	$datap['drel_date']=date("Y-m-d",strtotime($this->input->post('drel_date')));
		     	$datap['drel_letter_no']=trim($this->input->post('drel_letter_no'));
		     	$datap['drel_cl_no']=$this->input->post('drel_cl_no');
		     	$datap['drel_amount']=$this->input->post('drel_amount');
		     	
		     	$this->db->where('id',$id);
		     	$this->db->update('cmrf_trn_details', $datap);
		     }*/

  }
