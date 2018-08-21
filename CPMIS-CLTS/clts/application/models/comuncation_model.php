<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<?php
class comuncation_model extends CI_Model {
  function __construct()
  {
      parent::__construct();
      

  }
  function getstuidCount($table_name, $id){
    $sql = "SELECT child_id from $table_name where child_id = '{$id}' ";
    $query = $this->db->query($sql);
    return $query->num_rows();
  }

  //to get the account_role_id
  function get_role_id($role_id)
  {
    $role = $this->db->get_where('staff',array('staff_id'=>$role_id))->result_array();
    return $role;
  }
  //Modified code
  function get_login_id($value_com){
    $sql = "select child_area_detail.area_id,child_area_detail.area_name,staff.name,staff.district_id,staff.staff_id
    FROM  child_area_detail 
    LEFT JOIN staff ON child_area_detail.area_id = staff.district_id
    where staff.name = '$value_com' order by child_area_detail.area_name ASC";
     $query = $this->db->query($sql);
  
    return $query->result_array();    
  }
  
  function get_dist_dlc($value_com){
  	$sql = "select child_area_detail.area_id,child_area_detail.area_name
  	FROM  child_area_detail	where child_area_detail.area_id in (select district_id from division_details where division_id='$value_com') order by  child_area_detail.area_name ASC" ; 
  	$query = $this->db->query($sql);
  	
  	return $query->result_array();
  }


 function get_child_id_by($get_id){
	 
	   $sql = "select child_id,child_name
    FROM  child_basic_detail 
   where child_basic_detail.district_id ='$get_id'";
  

     $query = $this->db->query($sql);
  
    return $query->result_array(); 
	 
 }
  function notification($value_id){
	  
	            $ins['user_id'] = $this->input->post('user_id');
				$ins['from_dept'] = $this->input->post('role_name');
                $ins['role_name'] = $this->input->post('role_model');
                $ins['child_id'] = $this->input->post('child_id');
                $ins['to_dept'] = $this->input->post('department');
                $ins['massage'] = $this->input->post('message');
                $ins['child_id'] = $this->input->post('child_id');
                $ins['status'] = 1;
                $ins['staff_id'] = $value_id;
				
                $ins['created'] = date('Y-m-d');
                $ins['modified'] = date('Y-m-d');
	  
   
   $result=$this->db->insert('comunication', $ins);
   if($result)
   {
	   return true;
   }
   
    //return $query->result();
  }
  


function coumication_data_LC($staff_id_com,$type,$type3){
	$sql = "select comunication.role_name,comunication.child_id,comunication.to_dept,comunication.from_dept,
	comunication.massage,comunication.created,comunication.id,
	child_area_detail.area_name as area_name,child_area_detail.area_id as area_id,comunication.reply_message
	FROM  comunication
	LEFT JOIN child_area_detail ON child_area_detail.area_id = comunication.to_dept WHERE comunication.staff_id='$staff_id_com' AND comunication.from_dept='$type' ORDER BY id DESC";
	$result = $this->db->query($sql);
	$result = $result->result_array();
	
	if(isset($result) && is_array($result) && count($result) > 0)
	{
		return $result;
	}
	else
	{
		return false;
	}
	
}

function coumication_data_LC_all($staff_id_com,$type,$type3){
	$sql = "select comunication.role_name,comunication.child_id,comunication.to_dept,comunication.from_dept,
	comunication.massage,comunication.created,comunication.id,
	child_area_detail.area_name as area_name,child_area_detail.area_id as area_id,comunication.reply_message
	FROM  comunication
	LEFT JOIN child_area_detail ON child_area_detail.area_id = comunication.to_dept WHERE  comunication.from_dept='LC' ORDER BY id DESC";
	$result = $this->db->query($sql);
	$result = $result->result_array();
	
	if(isset($result) && is_array($result) && count($result) > 0)
	{
		return $result;
	}
	else
	{
		return false;
	}
	
}

function coumication_data_JLC_all($staff_id_com,$type,$type3){
	$sql = "select comunication.role_name,comunication.child_id,comunication.to_dept,comunication.from_dept,
	comunication.massage,comunication.created,comunication.id,
	child_area_detail.area_name as area_name,child_area_detail.area_id as area_id,comunication.reply_message
	FROM  comunication
	LEFT JOIN child_area_detail ON child_area_detail.area_id = comunication.to_dept WHERE comunication.from_dept='JLC' ORDER BY id DESC";
	$result = $this->db->query($sql);
	$result = $result->result_array();
	
	if(isset($result) && is_array($result) && count($result) > 0)
	{
		return $result;
	}
	else
	{
		return false;
	}
	
}

function coumication_data_default($staff_id_com,$type,$type3){
	$sql = "select comunication.role_name,comunication.child_id,comunication.to_dept,comunication.from_dept,
	comunication.massage,comunication.created,comunication.id,comunication.reply_message,
	child_area_detail.area_name as area_name,child_area_detail.area_id as area_id
	FROM  comunication
	LEFT JOIN child_area_detail ON child_area_detail.area_id = comunication.to_dept WHERE comunication.user_id='$staff_id_com' AND comunication.from_dept='$type' ORDER BY id DESC";
	$result = $this->db->query($sql);
	$result = $result->result_array();
	
	if(isset($result) && is_array($result) && count($result) > 0)
	{
		return $result;
	}
	else
	{
		return false;
	}	
}

function coumication_data_alc_default($staff_id_com,$type,$type3){
	$sql = "select comunication.role_name,comunication.child_id,comunication.to_dept,comunication.from_dept,
	comunication.massage,comunication.created,comunication.id,comunication.reply_message,
	child_area_detail.area_name as area_name,child_area_detail.area_id as area_id
	FROM  comunication
	LEFT JOIN child_area_detail ON child_area_detail.area_id = comunication.to_dept WHERE comunication.staff_id='$staff_id_com' AND comunication.from_dept='$type' ORDER BY id DESC";
	$result = $this->db->query($sql);
	$result = $result->result_array();
	
	if(isset($result) && is_array($result) && count($result) > 0)
	{
		return $result;
	}
	else
	{
		return false;
	}
}


function coumication_data_leo($staff_id_com,$type,$type3){	
	
	$sql = "select comunication.role_name,comunication.child_id,comunication.to_dept,comunication.from_dept,
	 comunication.massage,comunication.created,comunication.id,comunication.reply_message,
	 child_area_detail.area_name as area_name,child_area_detail.area_id as area_id
    FROM  comunication 
    LEFT JOIN child_area_detail ON child_area_detail.area_id = comunication.to_dept WHERE comunication.staff_id='$staff_id_com' AND comunication.from_dept='$type' ORDER BY id DESC";
	
	$result = $this->db->query($sql);
  $result = $result->result_array();

   if(isset($result) && is_array($result) && count($result) > 0)
   {
      return $result;
   }
   else
   {
     return false;
   }	
		
}

function coumication_data_JLC($staff_id_com,$type,$type3){
	$sql = "select comunication.role_name,comunication.child_id,comunication.to_dept,comunication.from_dept,
	comunication.massage,comunication.created,comunication.id,comunication.reply_message,
	child_area_detail.area_name as area_name,child_area_detail.area_id as area_id
	FROM  comunication
	LEFT JOIN child_area_detail ON child_area_detail.area_id = comunication.to_dept WHERE comunication.staff_id='$staff_id_com' AND comunication.from_dept='$type' ORDER BY id DESC";
	$result = $this->db->query($sql);
	$result = $result->result_array();
	
	if(isset($result) && is_array($result) && count($result) > 0)
	{
		return $result;
	}
	else
	{
		return false;
	}
	
}



// for update data
public function LC_status($role_staff_id,$type)
{
	$datap['status']=0;
	$where = array('staff_id ' => $role_staff_id, 'from_dept ' => $type);
	
	$this->db->where($where);
	$this->db->update('comunication', $datap);
	return true;
}

public function DLC_status($role_staff_id,$type,$type3)
{
	$datap['status']=0;
	$where = array('staff_id ' => $role_staff_id, 'from_dept ' => $type);
	$this->db->where($where);
	 $this->db->update('comunication', $datap); 
	
	return true;
}

public function ALC_status($role_staff_id,$type,$type3)
{
	$datap['status']=0;
	$where = array('staff_id ' => $role_staff_id, 'from_dept ' => $type);
	$this->db->where($where);
	$this->db->update('comunication', $datap);
	
	return true;
}
	
	//end//
 
//DIPTI//
    function get_selected($value_com){
    $sql = "select child_area_detail.area_id,child_area_detail.area_name,staff.name,staff.district_id
    FROM  staff 
    LEFT JOIN child_area_detail ON child_area_detail.area_id = staff.district_id
    where staff.name = '$value_com'";

     $query = $this->db->query($sql);
     return $query->result_array();
    
  }
//MODIFIED--DIPTI 27-02-2017
 
 function get_staff($role_staff_name){
	 $sql = "SELECT staff_id FROM comunication WHERE  role_name = '$role_staff_name'";
	 return $this->db->query($sql)->first_row(); 
	 
 }
 
 
 function get_staff_id($value,$id_role){
	 
	 $sql = "SELECT staff_id FROM staff WHERE district_id = '$value' AND name = '$id_role'";
	 return $this->db->query($sql)->first_row(); 
	 
 }
 //end
 
 

function edit_data($id){

 $sql = "select *,comunication.id as com_id,child_area_detail.area_id as area_id,child_area_detail.area_name as area_name
    FROM  comunication 
    LEFT JOIN child_area_detail ON child_area_detail.area_id = comunication.to_dept
    where comunication.id = '$id'";
	
 //$sql = "select * FROM comunication where role_name ='".$role_name."' and id ='".$id."'";
  $result = $this->db->query($sql);
  $result = $result->result_array();

 
   if(isset($result) && is_array($result) && count($result) > 0)
   {
      return $result;
   }
   else
   {
     return false;
   }

}

function calc_noti_msg($staff_id){
 $sql = "select count(*) cnt from comunication WHERE status = '1' AND from_dept='LC' AND staff_id = '$staff_id' ";
  $result = $this->db->query($sql);
  $result = $result->result_array();
  return $result;

}

/* new dlc notification */
function calc_dlc_msg($staff_id){
	$sql = "select count(*) cnt from comunication WHERE status = '1' AND from_dept='DLC' AND staff_id = '$staff_id' ";
	$result = $this->db->query($sql);
	$result = $result->result_array();
	return $result;
	
}
/* new alc notification */
function calc_alc_msg($staff_id){
	$sql = "select count(*) cnt from comunication WHERE status = '1' AND from_dept='ALC' AND staff_id = '$staff_id' ";
	$result = $this->db->query($sql);
	$result = $result->result_array();
	return $result;
	
}
/* new JLC notification */
function calc_jlc_msg($staff_id){
	$sql = "select count(*) cnt from comunication WHERE status = '1' AND from_dept='JLC' AND staff_id = '$staff_id' ";
	$result = $this->db->query($sql);
	$result = $result->result_array();
	return $result;
	
}



function update_tbl($id,$value_id){
	
	$ins['user_id'] = $this->input->post('user_id');
	$ins['from_dept'] = $this->input->post('role_name');
	$ins['role_name'] = $this->input->post('role_model');
    $ins['to_dept'] = $this->input->post('department');
    $ins['child_id'] = $this->input->post('child_id');
	$ins['massage'] = $this->input->post('message');
    $ins['modified'] = date('Y-m-d');
	$ins['staff_id'] = $value_id;
	$ins['status'] = 1;
	
	
                
   $this->db->where('id',$id);
   $result=$this->db->update('comunication', $ins);
    if($result)
   {
	   return false;
   }
}

/* Update reply message */

function update_replymessge($id){	
	$ins['reply_message'] = $this->input->post('remessage');
	$ins['modified'] = date('Y-m-d');
	$this->db->where('id',$id);
	$result=$this->db->update('comunication', $ins);
	if($result)
	{
		return true;
	}
}

function calc_view_notification($role_name){
  //$sql = "select count(*) cnt from comunication where role_name ='".$role_name."' and is_show='1'";
 
  $sql = "UPDATE comunication SET status='0' WHERE from_dept = 'LC'";
  $result = $this->db->query($sql);
  $result = $result->result_array();
 
 
   if(isset($result) && is_array($result) && count($result) > 0)
   {
      return $result[0]['cnt'];
   }
   else
   {
     return false;
   }

}
//selected value_com

function fet_id($id){
	    $sql = "select from_dept,to_dept from comunication 
    where id = '$id'";

     $query = $this->db->query($sql);
     $r = $query->row();
	 //print_r($r);exit;
	return $r;
	
}
function child_name($id){
	    $sql = "select child_id from comunication 
    where id = '$id'";

     $query = $this->db->query($sql);
     $r = $query->row();
	 //print_r($r);exit;
	return $r;
	
}

/* outside notice for lc and scps user 
 * check lc offical, operator,scps user
 * */
function no_childoutside($staff_id){
	if($staff_id==40){
	$sql = "select * from rescued_outsidestate_child WHERE lc_bihar = '0' ";
	$result = $this->db->query($sql);
	$result = $result->result_array();
	return $result;
	}else if($staff_id==426){
		$sql = "select * from rescued_outsidestate_child WHERE lc_operator = '0'";
	$result = $this->db->query($sql);
	$result = $result->result_array();
	return $result;
		
	}else if($staff_id==39 || $staff_id==449){
		$sql = "select * from rescued_outsidestate_child WHERE scps = '0'";
	$result = $this->db->query($sql);
	$result = $result->result_array();
	return $result;
		
	}
	
	
	
}

}   