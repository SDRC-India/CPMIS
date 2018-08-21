
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<?php
class mukhia_registered_model extends CI_Model {
  function __construct()
  {
      parent::__construct();
      $this->load->database();

  }
    function get_reg_mukhia()
    {
            $query="select * from mukhia_reg" ;
            return $this->db->query($query)->result_array();
    }
	
	
	  
			
  }
