
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<?php
class Child_rescued_before_model extends CI_Model {
  function __construct()
  {
      parent::__construct();
      $this->load->database();

  }
    function get_rescued_childs($role_id,$state_id)
    {

					$query="select * from child_basic_detail where state_id='".$state_id."' and idate_of_rescue <'2016-06-12 00:00:00'";

         return $this->db->query($query)->result_array();

    }
      //to get the account_role_id
      function get_role_id($role_id)
      {
        $role = $this->db->get_where('staff',array('staff_id'=>$role_id))->result_array();
        return $role;
      }
      function get_child_id($id)
      {
        $this->db->select('child_id')
                  ->where('id',$id);
                  $query = $this->db->get('child_basic_detail');
          return $query->result_array();
      }
      public function child_detail_lc_approval_active($project_id) {
        //print_r($project_id);
        $datap['pstatus']='Y';

		    $datap['last_date_update']=date("d-m-Y");
        $this->db->where('id', $project_id);
        $this->db->update('child_basic_detail', $datap);
        $this->db->select('*')
                  ->where('id',$project_id);
            $query = $this->db->get('child_basic_detail');
          $child_id=$query->result_array();
          $ch_id= $child_id[0]['child_id'];
          $dataf['final_ordered']='Yes';
          $dataf['dist']=$child_id[0]['district_id'];
          $this->db->where('child_id',$ch_id);
          $this->db->update('final_order',$dataf);


    		$dataq['uid']=$this->session->userdata('login_user_id');
    		$dataq['module_id']=$project_id;
    		$dataq['module_name']='child_basic_detail';
    		$dataq['date_time']=date("Y-m-d H:i:s");
    		$this->db->insert('history_update', $dataq);
        //return 1;
        }

  }
