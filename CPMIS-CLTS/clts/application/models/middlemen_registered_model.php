
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<?php
class middlemen_registered_model extends CI_Model {
  function __construct()
  {
      parent::__construct();
      $this->load->database();

  }
    function get_reg_middlemen()
    {
            $query="select * from middlemen_reg" ;
            return $this->db->query($query)->result_array();
    }
	
	
	  
			
  }
