<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<?php
class Login_model extends CI_Model {
  function __construct()
  {
      parent::__construct();
      $this->load->database();

  }
function update_login_history($u_id,$type)
      {
		    $dataqs['u_id']=$u_id;
			$dataqs['type']=$type;
			$dataqs['login_date']=date("Y-m-d H:i:s");
			$dataqs['ip_address']=$this->input->ip_address();
			$this->db->insert('login_history', $dataqs);
		  
      }
	 
}
   