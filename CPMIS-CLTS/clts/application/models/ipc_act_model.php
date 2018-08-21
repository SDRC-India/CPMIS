
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<?php
class Ipc_act_model extends CI_Model {
  function __construct()
  {
      parent::__construct();
      $this->load->database();

  }

      //to get the account_role_id
      function get_role_id($role_id)
      {
        $role = $this->db->get_where('staff',array('staff_id'=>$role_id))->result_array();
        return $role;
      }
      //to get the labour act data anf child details
      function get_ipc_act_data($role_id,$district_id)
      {
        if($role_id==7) {
        $quer="select child_basic_detail.child_id,child_basic_detail.child_name,child_basic_detail.pstatus,sections.section_name as name_section,child_ipc_act.remarks as remarks from final_order 
		LEFT JOIN child_basic_detail on child_basic_detail.child_id = final_order.child_id
		LEFT JOIN child_ipc_act on child_ipc_act.child_id = final_order.child_id COLLATE utf8_unicode_ci
		LEFT JOIN sections on child_ipc_act.name_section=sections.id 
		 WHERE disposed_ls=0 AND child_basic_detail.ls_activate='Y' AND child_basic_detail.district_id='".$district_id."' AND (final_order.dist='' or final_order.dist IS NULL) OR final_order.dist='".$district_id."'
			";
      		 }
			 else if($role_id==2 || $role_id==5)
			 {
				 $quer="select child_basic_detail.child_id,child_basic_detail.child_name,child_basic_detail.pstatus,sections.section_name as name_section,child_ipc_act.remarks as remarks from final_order 
		LEFT JOIN child_basic_detail on child_basic_detail.child_id = final_order.child_id
		LEFT JOIN child_ipc_act on child_ipc_act.child_id = final_order.child_id COLLATE utf8_unicode_ci
		LEFT JOIN sections on child_ipc_act.name_section=sections.id 
		 WHERE child_basic_detail.ls_activate='Y' AND child_basic_detail.district_id='".$district_id."' AND (final_order.dist='' or final_order.dist IS NULL) OR final_order.dist='".$district_id."'
			";
				 
			 }
         else {
            $quer="select child_basic_detail.child_id,child_basic_detail.child_name,child_basic_detail.pstatus,sections.section_name as name_section,child_ipc_act.remarks as remarks from final_order 
LEFT JOIN child_basic_detail on child_basic_detail.child_id = final_order.child_id
LEFT JOIN child_ipc_act on child_ipc_act.child_id = final_order.child_id COLLATE utf8_unicode_ci
LEFT JOIN sections on child_ipc_act.name_section=sections.id 
 WHERE disposed_ls=0 AND child_basic_detail.ls_activate='Y' AND child_basic_detail.district_id='".$district_id."' AND (final_order.dist='' or final_order.dist IS NULL) OR final_order.dist='".$district_id."'
			";
           }
       return $this->db->query($quer)->result_array();
      }

      public function get_ipc_psts($child_id="")
      {
        $this->db->select("pstatus");
          $this->db->where('child_id',$child_id);
                  $query = $this->db->get('child_basic_detail');
            return $query->result_array();
      }
      public function get_ipc_act_child($child_id="")
      {
            return $this->db->get_where('child_ipc_act' , array('child_id' => $child_id))->result_array();

      }
	  public function get_sections_list()
      {
            return $this->db->get('sections')->result_array();

      }
       function create_ipcact($project_id) {
       $datap['child_id']=$project_id;
       $datap['uid']=$this->session->userdata('login_user_id');
       $datap['last_date_update']=date("d-m-Y");
       $datap['name_section']=$this->input->post('name_section');
       $datap['remarks']=$this->input->post('remarks');
       $this->db->where('child_id', $project_id);
       $this->db->update('child_ipc_act', $datap);
       $dataq['uid']=$this->session->userdata('login_user_id');
       $dataq['module_id']=$project_id;
       $dataq['module_name']='child_ipc_act';
       $dataq['date_time']=date("Y-m-d H:i:s");
       $this->db->insert('history_update', $dataq);
      }


  }
