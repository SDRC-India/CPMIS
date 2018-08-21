<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Crud_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function clear_cache() {
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');
    }
//check not loguser last two months
 function check_user($current,$notlogdate) {
	
 $quer = "select login_history.login_date,staff.email as email,MAX(login_history.ip_address )as ip  from staff
		      left join login_history on login_history.u_id=staff.staff_id 
			WHERE (DATE(login_history.login_date)  NOT BETWEEN '".$notlogdate."' AND '".$current."' AND staff.email IS NOT NULL AND
           staff.email != '') GROUP by staff.staff_id ORDER by staff.staff_id desc";

		return $this->db->query($quer)->result_array();
      
    }
  
} //end of class
