
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<?php
class Other_laws_model extends CI_Model {
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
      function get_other_laws_data($role_id,$district_id)
      {

        if($role_id==7) {
              $quer="select child_basic_detail.child_id,child_basic_detail.child_name,child_basic_detail.father_name,child_basic_detail.pstatus,child_otherlaws_act.act_name1 as actname1,child_otherlaws_act.section_name1 as section_name1 from final_order 
			LEFT JOIN child_basic_detail on child_basic_detail.child_id = final_order.child_id 
			LEFT JOIN child_otherlaws_act on child_otherlaws_act.child_id = final_order.child_id 
			WHERE disposed_ls=0 AND child_basic_detail.ls_activate='Y' AND child_basic_detail.district_id='".$district_id."' AND (final_order.dist='' or final_order.dist IS NULL) OR final_order.dist='".$district_id."'";
          	 }
			 else if($role_id==5 || $role_id==2)
			 {
				 $quer="select child_basic_detail.child_id,child_basic_detail.child_name,child_basic_detail.father_name,child_basic_detail.pstatus,child_otherlaws_act.act_name1 as actname1,child_otherlaws_act.section_name1 as section_name1 from final_order 
			LEFT JOIN child_basic_detail on child_basic_detail.child_id = final_order.child_id 
			LEFT JOIN child_otherlaws_act on child_otherlaws_act.child_id = final_order.child_id 
			WHERE child_basic_detail.ls_activate='Y' AND child_basic_detail.district_id='".$district_id."' AND (final_order.dist='' or final_order.dist IS NULL) OR final_order.dist='".$district_id."'";
			 }
      else {
					$quer="select child_basic_detail.child_id,child_basic_detail.child_name,child_basic_detail.father_name,child_basic_detail.pstatus,child_otherlaws_act.act_name1 as actname1,child_otherlaws_act.section_name1 as section_name1 from final_order 
			LEFT JOIN child_basic_detail on child_basic_detail.child_id = final_order.child_id 
			LEFT JOIN child_otherlaws_act on child_otherlaws_act.child_id = final_order.child_id 
			WHERE disposed_ls=0 AND child_basic_detail.ls_activate='Y' AND child_basic_detail.district_id='".$district_id."' AND (final_order.dist='' or final_order.dist IS NULL) OR final_order.dist='".$district_id."'";

    		 }
       return $this->db->query($quer)->result_array();
      }

      public function get_otherlaws_psts($child_id="")
      {
        $this->db->select("pstatus");
          $this->db->where('child_id',$child_id);
                  $query = $this->db->get('child_basic_detail');
            return $query->result_array();
      }
      public function get_other_laws_child($child_id="")
      {
            return $this->db->get_where('child_otherlaws_act' , array('child_id' => $child_id))->result_array();

      }

      function create_otherlawsact($project_id) {
           $datap['child_id']=$project_id;
           $datap['uid']=$this->session->userdata('login_user_id');
           $datap['last_date_update']=date("d-m-Y");
           $datap['act_name1']=$this->input->post('act_name1');
           $datap['section_name1']=$this->input->post('section_name1');
           $datap['act_name2']=$this->input->post('act_name2');
           $datap['section_name2']=$this->input->post('section_name2');
           $datap['act_name3']=$this->input->post('act_name3');
           $datap['section_name3']=$this->input->post('section_name3');
           $this->db->where('child_id', $project_id);
           $this->db->update('child_otherlaws_act', $datap);
           $dataq['uid']=$this->session->userdata('login_user_id');
           $dataq['module_id']=$project_id;
           $dataq['module_name']='child_otherlaws_act';
           $dataq['date_time']=date("Y-m-d H:i:s");
           $this->db->insert('history_update', $dataq);
         }

  }
