
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<?php
class Management_report_model extends CI_Model {
  function __construct()
  {
      parent::__construct();
      $this->load->database();

  }
	public function get_report_sys_access_data($from,$to,$user)
	{
		
		$quer="select count(history_update.id) as count,staff.user_name as name,child_area_detail.area_name as district,history_update.date_time as last_access  from staff
		      left join history_update on history_update.uid=staff.staff_id AND 
			  STR_TO_DATE(history_update.date_time,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."'
			  join child_area_detail on  child_area_detail.area_id=staff.district_id 	
		       where  staff.account_role_id='".$user."' group by staff.user_name order by staff.user_name";

		
		return $this->db->query($quer)->result_array();
		
	}
	
	public function get_report_last_login_data($from,$to,$user)
	{
		
		$quer="select count(login_history.id) as count,staff.user_name as name,child_area_detail.area_name as district,login_history.login_date as login_date  from staff
		      left join login_history on login_history.u_id=staff.staff_id AND 
			  STR_TO_DATE(login_history.login_date,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."'
			  join child_area_detail on  child_area_detail.area_id=staff.district_id 	
		       where  staff.account_role_id='".$user."' group by staff.user_name order by staff.user_name";

		
		return $this->db->query($quer)->result_array();
		
	}
 public function get_user_groups_list()
      {
    return $this->db->select('*')->order_by('name', 'asc')->get('account_role')->result_array();
      }
      function get_role_id($role_id)
      {
        $role = $this->db->get_where('staff',array('staff_id'=>$role_id))->result_array();
        return $role;
      }
  }