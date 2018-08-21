<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<?php
class Ls_activation_model extends CI_Model {
      function __construct()
      {
          parent::__construct();
          $this->load->database();

      }

  public function get_cwc_forwarded_data($role_id,$district)
  {
    if ($role_id==7) {
            $this->db->select("child_id,child_name,postal_address,district,ls_activate,child_area_detail.area_name");
				    $this->db->where('account_role_id','7')
					           ->or_where('ls_activate','Y')
                     ->where('district_id',$district)
                     ->join("child_area_detail","child_area_detail.area_id = child_basic_detail.district")
				               ->order_by('id' , 'desc');
			            $query = $this->db->get('child_basic_detail');
						      return $query->result_array();

		 }
		 else {
       $this->db->select("child_id,child_name,postal_address,district,ls_activate,child_area_detail.area_name");
			    $this->db->where('account_role_id !=','7')
			             ->where('pstatus','N')
                    ->where('district_id',$district)
                   ->join("child_area_detail","child_area_detail.area_id = child_basic_detail.district")
				           ->order_by('ls_activate' , 'asc');
			            $query = $this->db->get_where('child_basic_detail');
					  return $query->result_array();

		 }
   }
   //to foward to cwc
   public function forward_to_cwc($id) {
         $datap['ls_activate']='Y';
 		 $datap['last_date_update']=date("d-m-Y");
         $this->db->where('id', $id);
         $this->db->update('child_basic_detail', $datap);
     		$dataq['uid']=$this->session->userdata('login_user_id');
     		$dataq['module_id']=$id;
     		$dataq['module_name']='child_basic_detail';
     		$dataq['date_time']=date("Y-m-d H:i:s");
     		$this->db->insert('history_update', $dataq);


     }
   //to get the account_role_id
   function get_role_id($role_id)
   {
           return $this->db->get_where('staff',array('staff_id'=>$role_id))->result_array();

   }
   //to get the in formation of the rescued child of forward to cwc
    public function get_child_data($child_id)
    {
      //print_r($child_id);
      $count =mysql_num_rows(mysql_query("select cbd.child_id from child_basic_detail cbd left join child_area_detail cad on cbd.block=cad.area_id where cbd.child_id='$child_id' and cbd.block=cad.area_id")) ;
      //echo $count;
      if($count>0){
      $this->db->select('*,child_basic_detail.id as id, csdetails.area_name as state_name,cddetails.area_name as district_name,cbdetails.area_name as block_name');
      $this->db->where('child_id',$child_id)
               ->join("child_area_detail as csdetails","csdetails.area_id = child_basic_detail.state_id")//to get state
               ->join("child_area_detail as cddetails","cddetails.area_id = child_basic_detail.district_id")//to get district
               ->join("child_area_detail as cbdetails","cbdetails.area_id = child_basic_detail.block");//to get block*/
            $query = $this->db->get('child_basic_detail');
            return $query->result_array();  }else{
            	$this->db->select('*,child_basic_detail.id as id, csdetails.area_name as state_name,cddetails.area_name as district_name');
            	$this->db->where('child_id',$child_id)
            	->join("child_area_detail as csdetails","csdetails.area_id = child_basic_detail.state_id")//to get state
            	->join("child_area_detail as cddetails","cddetails.area_id = child_basic_detail.district_id"); //to get district
            	$query = $this->db->get('child_basic_detail');
            	return $query->result_array(); 
            }

    }
	public function final_order_passed_by_ls($child_id)
	{
		    $datap['child_id']=$child_id;
			$datap['uid']=$this->session->userdata('login_user_id');
			$datap['last_date_update']=date("d-m-Y");
            $datap['final_ordered']="Yes";
			$datap['final_order_date']=date('Y-m-d');
			$datap['type_order']="Final order passed by LS";
			$this->db->where('child_id', $child_id);
			$this->db->update('final_order', $datap);
			//pstatus="y" ,ls_activate="Y"
			 $dataps['pstatus']='Y';
			 $dataps['ls_activate']='Y';
			 //disposed by LS Status
			 $dataps['disposed_ls']=1;//don't change this
			 //diposed by ls status
			 $dataps['last_date_update']=date("d-m-Y");
			 $this->db->where('child_id', $child_id);
			 $this->db->update('child_basic_detail', $dataps);
			$dataq['uid']=$this->session->userdata('login_user_id');
			$dataq['module_id']=$child_id;
			$dataq['module_name']='final_order';
			$dataq['date_time']=date("Y-m-d H:i:s");
			$dataqs['uid']=$this->session->userdata('login_user_id');
			$dataqs['module_id']=$child_id;
			$dataqs['module_name']='child_basic_detail';
			$dataqs['date_time']=date("Y-m-d H:i:s");
			$this->db->insert('history_update', $dataq);
			$this->db->insert('history_update', $dataqs);
		
	}


 }
