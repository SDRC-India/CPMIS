
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<?php
class Final_order_model extends CI_Model {
      function __construct()
      {
          parent::__construct();
          $this->load->database();

      }
      //to get the account_role_id
      function get_role_id($staff_id)
      {
        $role = $this->db->get_where('staff',array('staff_id'=>$staff_id))->result_array();
        return $role;
      }
      public function get_final_order_list_data($role_id,$district_id)
      {
        if ($role_id==7) {
         /* $query="select child_basic_detail.child_id,child_name,pstatus,father_name,order_after_production.produced from child_basic_detail join order_after_production on child_basic_detail.child_id=order_after_production.child_id
           where child_basic_detail.disposed_ls=0 AND (ls_activate='Y' and district_id='" . $district_id ."' and child_basic_detail.child_id in(select child_id from final_order where dist='' or dist IS NULL)) or child_basic_detail.child_id in(select child_id from final_order where dist='" .$district_id . "')  "; */
        	$query="select child_basic_detail.child_id,child_name,father_name,pstatus,order_after_production.produced from final_order
		      LEFT JOIN child_basic_detail on child_basic_detail.child_id = final_order.child_id
			  LEFT JOIN order_after_production on child_basic_detail.child_id=order_after_production.child_id
           where disposed_ls=0 AND child_basic_detail.ls_activate='Y' and child_basic_detail.district_id='".$district_id."' AND (final_order.dist='' or final_order.dist IS NULL OR final_order.dist='".$district_id."')";
        	

         	}

        return $this->db->query($query)->result_array();
      }
    function get_final_order_data($child_id)
    {
    	
    	$query="select *,child_basic_detail.dob as dob, child_basic_detail.idate_of_rescue as date_rescued,final_order.type_order as type_order from child_basic_detail left join final_order on final_order.child_id= child_basic_detail.child_id where final_order.child_id='".$child_id."' " ;
    	return $this->db->query($query)->result_array();
    /*  $this->db->select('*,child_basic_detail.dob as dob, child_basic_detail.idate_of_rescue as date_rescued')
                ->where('final_order.child_id',$child_id)
               // ->where('final_order.transfer_id','')
                ->join('child_basic_detail','final_order.child_id= child_basic_detail.child_id');
                $query = $this->db->get('final_order'); 
                
          // $query="select *,child_basic_detail.dob as dob, child_basic_detail.idate_of_rescue as date_rescued from child_basic_detail left join final_order.child_id= child_basic_detail.child_id where final_order.child_id='".$child_id."'";     
           //echo $query ;
          // return $this->db->query($query)->result_array();
           return $query->result_array(); */
    }
    function get_order_after_production_child($child_id)
    {
    	$this->db->select("order_after_production.*,child_basic_detail.dob as dob,child_basic_detail.idate_of_rescue as date_rescued")
    	->where('order_after_production.child_id' , $child_id)
    	->join("child_basic_detail","child_basic_detail.child_id = order_after_production.child_id");
    	
    	return $this->db->get('order_after_production')->result_array();
    }
    //final order pass
    function create_finalorder($project_id) {
			$datap['child_id']=$project_id;
			$datap['uid']=$this->session->userdata('login_user_id');
			$datap['last_date_update']=date("d-m-Y");
            
    
			$datap['final_ordered']=$this->input->post('final_ordered');
			$datap['final_order_date']=$this->input->post('final_order_date');
			$datap['type_order']=$this->input->post('type_order');
			$datap['type_order_other']=$this->input->post('type_order_other');
			if($datap['type_order'] == 'Cases transferred to other Dist/State/Country'){
				$datap['country']=$this->input->post('country');
				$datap['other_country']=$this->input->post('other_country');
				if($datap['country'] == 'India'){

					$datap['state']=$this->input->post('state');
					$datap['dist']=$this->input->post('dist');
					$datap['transfer_to'] = $datap['dist'];
				}else{
					$datap['state']='';
					$datap['dist']='';
				}
			}else{
				$datap['country']='';
				$datap['other_country']='';
			}
			if($datap['final_ordered']=='Yes' && $datap['final_order_date']!='' && $datap['type_order']!='Cases transferred to other Dist/State/Country'){
				//$datap['is_locked'] = 1;
				$data['master_lock']='Yes';
				$this->db->where('child_id', $project_id);
				$this->db->update('child', $data);
				$data1['pstatus']='Y' ;
			}
			else{
				$data1['pstatus']='N' ;		
			}
			//print_satus true so that print_card true 
			
			$this->db->where('child_id', $project_id);
			$this->db->update('child_basic_detail', $data1);
			
			$this->db->where('child_id', $project_id);
			$this->db->update('final_order', $datap);
			$dataq['uid']=$this->session->userdata('login_user_id');
			$dataq['module_id']=$project_id;
			$dataq['module_name']='final_order';
			$dataq['date_time']=date("Y-m-d H:i:s");
			$this->db->insert('history_update', $dataq);
}

  }
