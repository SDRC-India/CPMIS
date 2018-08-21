
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<?php
class Ngo_registered_model extends CI_Model {
  function __construct()
  {
      parent::__construct();
      $this->load->database();

  }
    function get_reg_ngo()
    {
            $query="select * from ngo_reg " ;
            return $this->db->query($query)->result_array();
    }
	
    function get_role_id($role_id)
    {
    	$role = $this->db->get_where('staff',array('staff_id'=>$role_id))->result_array();
    	return $role;
    }
    
	function get_userid($role_id)
      {
        $role = $this->db->get_where('ngo_reg',array('id'=>$role_id))->result_array();
        return $role;
      }
	  function update_ngo($ngo_id)
      {
	    $ngo_details = $this->db->get_where('ngo_reg',array('id'=>$ngo_id))->result_array();
		//$namerole=$ngo_details['name'] ;
		
		$data['unicef_field'] = $this->input->post('unicef_name');
		$data['local_labour'] = $this->input->post('local_labour');
		$data['local_panchayat'] = $this->input->post('local_panchyat');
		$data['duplicate_ngo'] = $this->input->post('duplicat_ngo');
		$data['duplicate_desc'] = $this->input->post('descreg');
		$data['updated_date'] = date("Y-m-d");
		//print_r( $role) ;
		//mail("someone@example.com","My subject",$msg);

		$this->db->where('id', $ngo_id);
		$this->db->update('ngo_reg', $data);
      }
	  function update_lc_ngo($ngo_id)
      {
	    $ngo_lc_details = $this->db->get_where('ngo_reg',array('id'=>$ngo_id))->result_array();
		foreach($ngo_lc_details as $strp):
		$role_email=$strp['email'];
		endforeach;
		function randomPassword()
		  {
			$alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
			$pass = array(); //remember to declare $pass as an array
			$alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
			for ($i = 0; $i < 8; $i++) {
				$n = rand(0, $alphaLength);
				$pass[] = $alphabet[$n];
			}
			return implode($pass); //turn the array into a string
		}
		$passnrRand = randomPassword() ;
		$data['password'] = $passnrRand ;
		$data['approve_status'] = 1;
		$to = $role_email ;
		//$to = "pabitra.p.com@gmail.com" ;
		$subject = "Your Login Password is:";
		$txt = $passnrRand ;
	 	$reset_account_type		=	'admin';
		$this->db->where('id', $ngo_id);
		$this->db->update('ngo_reg', $data);
		$this->email_model->notify_email('password_create_ngo' , $reset_account_type , $to , $txt);

      }
	  
			
  }
