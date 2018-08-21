
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<?php
class Header_model extends CI_Model {
  function __construct()
  {
      parent::__construct();
      $this->load->database();

  }
  public function getHeader($role_id)
  {

    $role = $this->db->get_where('staff',array('staff_id'=>$role_id))->result_array();
    foreach($role as $rolep):
    $roles_id=$rolep['account_role_id'];
    $dist_id=$rolep['district_id'];
    $stat_id=$rolep['state_id'];
  endforeach;
            $query="";
            if($roles_id==2) {
               $this->db->select('child_id');
                $this->db->where('ls_notified' , 'N')
                     ->where('district_id',$dist_id)
                     ->where('account_role_id',5);
                $this->db->order_by('child_id' , 'desc');
          	$query=$this->db->get('child_basic_detail')->result();

             }
             if($roles_id==7) {
                $this->db->select('child_id');
                  $this->db->where('ls_activate','Y')->where('pstatus','N')->where('district_id',$dist_id)->where('cwc_notified','N');
                  $this->db->order_by('child_id' , 'desc');
                	$query	=	$this->db->get('child_basic_detail')->result();
             }

               return   $query;


  }
    public function getCwcHeader($role_id)
    {
            $role = $this->db->get_where('staff',array('staff_id'=>$role_id))->result_array();
            $projectcwc="";
            foreach($role as $rolep):
            $roles_id=$rolep['account_role_id'];
            $dist_id=$rolep['district_id'];
            endforeach;
             $this->db->select('child_id');
            $this->db->where('pstatus','N')
                 ->where('district_id',$dist_id)
                 ->where('ls_notified','N')
                 ->where('account_role_id',7);
            $this->db->order_by('child_id' , 'desc');
            $projectcwc	=	$this->db->get('child_basic_detail')->result();

            return $projectcwc;
    }
      public function get_image_url($type = '', $id = '')
    {
        if($type=='staff'){
          $type='staff_image/';
          }

            if (file_exists('./uploads/' . $type . $id))
                $image_url = base_url() . 'uploads/' . $type . $id .'.jpg ';
            else
                $image_url = "./uploads/user.jpg";

            return $image_url;
    }
    function get_name($type="", $id = '')
    {
      if($type=="admin")
      {
		  $this->db->select('name');
          $this->db->where('admin_id',$id);
		  $this->db->from('admin');
      }
      else{
		  $this->db->select('name,child_area_detail.area_name as location')
	      ->join("child_area_detail",'child_area_detail.area_id = staff.district_id');
          $this->db->where('staff_id',$id);
		  $this->db->from('staff');
      }
    
      $query	=	$this->db->get();
        return $query->result();
    }
	
    function get_role_id($role_id)
    {
      $role = $this->db->get_where('staff',array('staff_id'=>$role_id))->result_array();
      return $role;
    }
}
