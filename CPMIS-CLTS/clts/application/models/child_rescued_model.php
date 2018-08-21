
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<?php
class Child_rescued_model extends CI_Model {
  function __construct()
  {
      parent::__construct();
      $this->load->database();
	  //$this->load->library('Phpmailer');

  }
    function get_rescued_childs($role_id,$district_id,$state_id)
    {
		
      $query="";
      if ($role_id==7 || $role_id==8) {
          //$query="select * from child_basic_detail where disposed_ls=0 AND (ls_activate='Y' and district_id='" . $district_id ."' and child_id in(select child_id from final_order where dist='' or dist IS NULL)) or child_id in(select child_id from final_order where dist='" .$district_id . "') ORDER BY id DESC  ";
      	$query="select * from child_basic_detail where (district_id='" . $district_id ."' and child_id in(select child_id from final_order where dist='' or dist IS NULL)) or child_id in(select child_id from final_order where dist='" .$district_id . "') ORDER BY id DESC";
      	
      
      }
      else {
          if($role_id==9 || $role_id==10){
            $query="select * from child_basic_detail where state_id='".$state_id."' AND disposed_ls=0 ORDER BY id DESC";
          }
		  //code by godti satyanarayan to view the child records for LS AND LEO 
		  else if($role_id==2 || $role_id==5)
		  {
		  	//echo"select * from child_basic_detail where (district_id='" . $district_id ."' and child_id in(select child_id from final_order where dist='' or dist IS NULL)) or child_id in(select child_id from final_order where dist='" .$district_id . "') ORDER BY id DESC";
			  $query="select * from child_basic_detail where (district_id='" . $district_id ."' and child_id in(select child_id from final_order where dist='' or dist IS NULL)) or child_id in(select child_id from final_order where dist='" .$district_id . "') ORDER BY id DESC";
		  }
		  //satyanarayan 
		  else if($role_id==6)
		  {
			$query="select * from child_basic_detail where disposed_ls=0 AND child_id in(select child_id from order_after_production where cci_dist='" .$district_id . "') ORDER BY id DESC";  
		  }
		  else if($role_id==13)//for DLC
		  {
			$query="select * from child_basic_detail 
			  LEFT JOIN division_details ON division_details.district_id=child_basic_detail.district_id COLLATE utf8_unicode_ci 
			  LEFT JOIN final_order on final_order.child_id = child_basic_detail.child_id
			where disposed_ls=0 AND child_basic_detail.district_id COLLATE utf8_unicode_ci in (select district_id from division_details where division_details.division_id='" . $district_id ."') AND (final_order.dist='' or final_order.dist IS NULL) OR final_order.dist COLLATE utf8_unicode_ci  in(select district_id from division_details where division_details.division_id='" . $district_id ."')  AND division_details.division_id='" . $district_id ."' ORDER BY child_basic_detail.id DESC";
		  }
		  
          else
          {	
            $query="select * from child_basic_detail where disposed_ls=0 AND (district_id='" . $district_id ."' and child_id in(select child_id from final_order where dist='' or dist IS NULL)) or child_id in(select child_id from final_order where dist='" .$district_id . "') ORDER BY id DESC ";
          }
      }
      return $this->db->query($query)->result_array();

    }
      //to get the account_role_id
      function get_role_id($role_id)
      {
        $role = $this->db->get_where('staff',array('staff_id'=>$role_id))->result_array();
        return $role;
      }
      //get socket_create_lists
      public function get_states_list()
      {
      return $this->db->select('*')->where('parent_id','IND')->order_by('area_name', 'asc')->group_by('area_name')->get('child_area_detail')->result_array();

      }
      //inside state
      //added on 04.09.17
      public function get_states_bihar()
      {
      	return $this->db->select('*')->where('area_id','IND010')->order_by('area_name', 'asc')->group_by('area_name')->get('child_area_detail')->result_array();
      	
      }
      //outside state
      //added on 04.09.17
      
      public function get_states_list_outside()
      {
      	$array = array('parent_id' =>'IND', 'area_id !=' => 'IND010');
      	
      	return $this->db->select('*')->where($array)->order_by('area_name', 'asc')->group_by('area_name')->get('child_area_detail')->result_array();
      	
      }
      
      public function get_states_outsidechild($state_id)
      {
      	$array = array('parent_id' =>'IND', 'area_id !=' => 'IND010', 'area_id' =>$state_id);
      	
      	return $this->db->select('*')->where($array)->order_by('area_name', 'asc')->group_by('area_name')->get('child_area_detail')->result_array();
      	
      }
      
      
      ///get districts
      public function get_districts_list($state_id)
      {

      return $this->db->select('*')->where('parent_id',$state_id)->order_by('area_name', 'asc')->group_by('area_name')->get('child_area_detail')->result_array();
      }
      //get blocks
      public function get_block_lists($district_id)
      {
        return $this->db->select('*')->where('parent_id',$district_id)->order_by('area_name', 'asc')->group_by('area_name')->get('child_area_detail')->result_array();

      }
	  public function get_category($child_id)
	  {
		 return $this->db->select('category','cast')->where('child_id',$child_id)->get('child_basic_detail')->result_array(); 
	   
		  
	  }
	 
	  public function  get_child_block($child_id)
	  {
		 return $this->db->select('block')->where('child_id',$child_id)->get('child_basic_detail')->result_array(); 
	   
		  
	  }
	  public function  get_child_dist($child_id)
	  {
		 return $this->db->select('district')->where('child_id',$child_id)->get('child_basic_detail')->result_array(); 
	   
		  
	  }
	  public function  get_panchayat_name_list($block)
	  {
		 return $this->db->select('*')->where('block_id',$block)->get('panchayat_names')->result_array(); 
	   
		  
	  }
	  public function get_castes_list_default($category,$cast)
	  {
		  //if($cast="Other")
			
		  $cast_list=$this->db->select('*')->where('caste_category',$category)->order_by('caste_name', 'asc')->get('caste_list')->result_array();
		  $other=array("id"=>"Other","caste_name"=>"Other","caste_category"=>"Other");
		  
		  array_push($cast_list,$other);
		return $cast_list;
	  }
	  
	  //start by pabitra
	   public function get_workinvoice()
	  {
		  //if($cast="Other")
			
		  $query="select id,sector from wages";
		  
		 return $this->db->query($query)->result_array();

	  }
	  public function get_castes_list($category)
	  {
		  
		 $caste_list= $this->db->select('*')->where('caste_category',$category)->order_by('caste_name', 'asc')->get('caste_list')->result_array(); 
		  
	   $lst="{  'caste': { ";
      $lst.= $category.": {";
	  
	   $lst.= "text: [";
	   if($category!='other')
	  {
		foreach($caste_list as $crow2):
		 $lst.=	"'".$crow2['caste_name']."',";
		 endforeach;
	  }
		 $lst.=	"'Other'";
		 $lst.=	" ],";
	   $lst.= "value: [";
	   if($category!='other')
	  {
		  foreach($caste_list as $crow3):
		 $lst.=	"'".$crow3['id']."',";
		 endforeach;
	  }
		 $lst.=	"'Other'";
	    $lst.=	" ]";
	   $lst.="}";
     $lst.="} }";
	  return  $lst;
		  
	  }
	  public function get_police_station_list($dist_id)
	  {
		  
		 $poloice= $this->db->select('*')->where('district_id',$dist_id)->order_by('police_station_name', 'asc')->get('police_stations')->result_array(); 
		  //print_r($poloice);
		 return $poloice;
		  
		  
	  }
	  public function get_police_station_list_frnt($dist_id)
	  {
		  
		 $police_stations= $this->db->select('*')->where('district_id',$dist_id)->order_by('police_station_name', 'asc')->get('police_stations')->result_array(); 
		  
		    
	   $lst="{  'police_station': { ";
      $lst.= $dist_id.": {";
	   $lst.= "text: [";
		foreach( $police_stations as $crow2):
		 $lst.=	"'".$crow2['police_station_name']."',";
		 endforeach;
		 $lst.=	" ],";
	   $lst.= "value: [";
		  foreach( $police_stations as $crow3):
		 $lst.=	"'".$crow3['id']."',";
		 endforeach;
	    $lst.=	" ]";
	   $lst.="}";
     $lst.="} }";
	  return  $lst;
	  }
	  //pabitra
	   public function get_police_station_inside_frnt($dist_id)
	  {
		  
		 $police_stations= $this->db->select('*')->where('district_id',$dist_id)->order_by('police_station_name', 'asc')->get('police_stations')->result_array(); 
		  
		    
	   $lst="{  'ps_within': { ";
      $lst.= $dist_id.": {";
	   $lst.= "text: [";
		foreach( $police_stations as $crow2):
		 $lst.=	"'".$crow2['police_station_name']."',";
		 endforeach;
		 $lst.=	" ],";
	   $lst.= "value: [";
		  foreach( $police_stations as $crow3):
		 $lst.=	"'".$crow3['id']."',";
		 endforeach;
	    $lst.=	" ]";
	   $lst.="}";
     $lst.="} }";
	  return  $lst;
	  }
	  
	  public function get_pincode_list($dist_id)
	  {
		  
		 return $this->db->select('pincode,post_office_name,id')->where('district_id',$dist_id)->get('pincode_list')->result_array(); 
		  
		  
	  }
	   public function get_pincode_list_frnt($dist_id)
	  {
		  
		 $pincodes= $this->db->select('*')->where('district_id',$dist_id)->get('pincode_list')->result_array(); 
		  
		    
	   $lst="{  'pincode': { ";
      $lst.= $dist_id.": {";
	   $lst.= "text: [";
		foreach( $pincodes as $crow2):
		 $lst.=	"'".$crow2['pincode'].'-'.$crow2['post_office_name']."',";
		 endforeach;
		 $lst.=	" ],";
	   $lst.= "value: [";
		  foreach( $pincodes as $crow3):
		 $lst.=	"'".$crow3['id']."',";
		 endforeach;
	    $lst.=	" ]";
	   $lst.="}";
     $lst.="} }";
	  return  $lst;
	  }
	  
	   public function get_panchayat_names_frnt($block_id)
	  {
		  
		 $panchayat_names= $this->db->select('*')->where('block_id',$block_id)->get('panchayat_names')->result_array(); 
		    
		   $lst="{  'panchayat_names': { ";
		  $lst.= $block_id.": {";
		   $lst.= "text: [";
			foreach( $panchayat_names as $crow2):
			 $lst.=	"'".$crow2['name']."',";
			 endforeach;
			 $lst.=	" ],";
		   $lst.= "value: [";
			  foreach( $panchayat_names as $crow3):
			 $lst.=	"'".$crow3['id']."',";
			 endforeach;
			$lst.=	" ]";
		   $lst.="}";
		 $lst.="} }";
		  return  $lst;
	  }
	  
//add new resourcebundle_get_error_code//New Child Registration//

function create_child_rescued($ses_ids){

      $data['child_id'] = $this->input->post('cname');
      $data['master_lock'] = "No";
      $this->db->insert('child', $data);
	  //send_email();

  $stq=$this->db->insert_id();

  $tstrole = $this->db->get_where('staff',array('staff_id'=>$ses_ids))->result_array();

  foreach($tstrole as $strp):
    $role_id=$strp['account_role_id'];
    $district_id=$strp['district_id'];
    $state_id=$strp['state_id'];
  endforeach;
  //added by poojashree for mail functionality
  $querrole = "Select user_name from staff where account_role_id='" . $role_id ."'";
  $strole = $this->db->query($querrole)->row();
  $role_name = trim(strtoupper(substr($strole->user_name,0,20)));
  //ended by poojashree
  $quer = "Select area_name from child_area_detail where area_id='" . $state_id ."'";
  $st = $this->db->query($quer)->row();
  $state_name = trim(strtoupper(substr($st->area_name,0,3)));
  $quer = "Select area_name from child_area_detail where area_id='" . $district_id ."'";
  $st = $this->db->query($quer)->row();
  $dist_name = trim(strtoupper(substr($st->area_name,0,5)));
   $dt = strtotime($this->input->post('idate_of_rescue'));
  $year = date('Y',$dt);

  $strs=100000+$stq;
  $stp=$state_name.'_'.$dist_name.'_'.$year.'_'.$strs;
  $datas['child_id']=$stp;

  if($dt!=""){
  $this->db->where('id', $stq);
      $this->db->update('child', $datas);
  }

   $datap['child_id']=$stp;
  $datap['child_name']=$this->input->post('cname');
   $datap['sex']=$this->input->post('gender');


  if($this->input->post('education')=='Education till class')
    $datap['education']=$this->input->post('education1');
  else
    $datap['education']=$this->input->post('education');

  $datap['father_name']=$this->input->post('father');
  //added by poojashree
  //to avoid 0 value inserted
  if($this->input->post('contact_no')){
  $datap['contact_no']=$this->input->post('contact_no');
  }
  $datap['postal_address']=$this->input->post('postaladdress');
  $datap['cast']=$this->input->post('cast');
   if($datap['cast']=="Other")
   {
	 $datap['caste_name_other']=$this->input->post('other_cast_name'); 
	   
   }else{
	  $datap['caste_name_other']=""; 
	  
   }
    //important
   //added by poojashree
   //to avoid 0 value inserted
   if($this->input->post('idate_of_rescue')){
  $datap['idate_of_rescue']=$this->input->post('idate_of_rescue');
   }
  $datap['mother_name']=$this->input->post('mother_name');
  if($this->input->post('state')=='IND010'){
  	$datap['pincode']=$this->input->post('pincode');
  }else{
  	$datap['pincode']=$this->input->post('pincode_out');
  	
  }

  if($this->input->post('state')=='IND010'){
  $datap['panchayat_name']=$this->input->post('panchayat_names');
  }else{
  	$datap['panchayat_name']=$this->input->post('panchayat_namesout');
  	
  }
  
  if($this->input->post('state')=='IND010'){
  	$datap['police_station']=$this->input->post('police_station');
  }else{
  	$datap['police_station']=$this->input->post('police_stationout');
  	
  }
  
  $datap['material_status']=$this->input->post('material_status');
  $datap['is_birth_registered']=$this->input->post('is_birth_registered');
  $datap['is_adhar_card']=$this->input->post('is_adhar_card');
   if($datap['is_adhar_card']=="Yes")
  {
  $datap['adhar_card']=$this->input->post('adhar_card');
  //added by poojashree
  //to avoid 0 value inserted
  
  if($this->input->post('adhar_card_enrollment_no')){
  $datap['adhar_apply_no']=$this->input->post('adhar_card_enrollment_no');
  }
   if($this->input->post('adhar_card_enrollment_date'))
	 {
	   $datap['adhar_apply_date']=date('Y-m-d',strtotime($this->input->post('adhar_card_enrollment_date')));
	 }
	 else{
		 
		  $datap['adhar_apply_date']='0000-00-00';
	     }
  }
  else{
  	if($this->input->post('adhar_card_enrollment_no')){
	   $datap['adhar_apply_no']=$this->input->post('adhar_card_enrollment_no');
  	}
	 if($this->input->post('adhar_card_enrollment_date'))
	 {
	   $datap['adhar_apply_date']=date('Y-m-d',strtotime($this->input->post('adhar_card_enrollment_date')));
	 }
	 else{
		 
		  $datap['adhar_apply_date']='0000-00-00';
	 }
 
  }

  //prativa edit
  $datap['other']=$this->input->post('other');
  $datap['state']=$this->input->post('state');
  $datap['district']=$this->input->post('choices');
  $datap['religion']=$this->input->post('religion');
  if($datap['state']=='IND010'){
  $datap['block']=$this->input->post('block');
  }else{
  	$datap['block']=$this->input->post('blockout');  	
  }
  $datap['category']=$this->input->post('category');
  $datap['other_detail']=$this->input->post('other_detail');
  
  if($this->input->post('isdob')){
  $datap['isdob']=$this->input->post('isdob');
  }
 if($datap['isdob'] =='Yes')
  {
    $datap['dob']=$this->input->post('dob');
    $datap['month']="";
    $datap['year']="";
  }
  else{
  	if($this->input->post('month')){
	 $datap['month']=$this->input->post('month');
  	}
  	if($this->input->post('year')){
 	 $datap['year']=$this->input->post('year'); 
  	}
 	 $datap['dob']=NULL;
  }
  $datap['rescue_by']=$this->input->post('rescue_by');
  if($this->input->post('rescue_by')=='Others')
  {
    $datap['rescue_by_other']=$this->input->post('rescue_by_other');
  }
  else{
      $datap['rescue_by_other']="";
  }

  //07 dec prativa
  if($datap['category']=='other')
  {
      $datap['other_cast']=$this->input->post('other_cast');

  }
  else{
  $datap['other_cast']="";
  }
  if($this->input->post('religion')=='other'){
    $datap['other_religion']=$this->input->post('other_religion');
  }
  else{
    $datap['other_religion']="";
  }
  if($this->input->post('basic_place_of_rescue')=='Within')
    $datap['is_withinstate']='Y';
  if($this->input->post('basic_place_of_rescue')=='Outside State')
    $datap['is_withinstate']='N';
  $datap['basic_place_of_rescue']=$this->input->post('basic_place_of_rescue');
  $datap['uid']=$this->session->userdata('login_user_id');
  $datap['state_id']=$state_id;
  $datap['district_id']=$district_id;
  $datap['account_role_id']=$role_id;
  //$datap['date_of_production_cwc']='0000-00-00';

    $datap['date_of_creation']= date("d-m-Y");
  $datap['last_date_update']= date("d-m-Y");
  if( $_FILES["image"]["type"]!='image/pdf'){ 	
  move_uploaded_file($_FILES["image"]["tmp_name"], "uploads/child_image/" . $stp . '.jpg');
  }
  
  if($_FILES['file']['image3']){

  	unlink('uploads/inspection_report/'.$stp. '.jpg');
  
  	unlink('uploads/inspection_report/'. $stp. '.pdf');
 
  	unlink('uploads/inspection_report/'. $stp. '.png');
  
  }
  
  if( $_FILES["image3"]["type"]=='image/jpeg'){
  	move_uploaded_file($_FILES["image3"]["tmp_name"], 'uploads/inspection_report/'. $stp. '.jpg');
  	//unlink('uploads/inspection_report/'. $stp. '.png');
  	//unlink('uploads/inspection_report/'. $stp. '.pdf');
  }
  if($_FILES["image3"]["type"]=='application/pdf'){
  	move_uploaded_file($_FILES["image3"]["tmp_name"], 'uploads/inspection_report/'. $stp. '.pdf');
  	//unlink('uploads/inspection_report/'. $stp. '.jpg');
  //	unlink('uploads/inspection_report/'. $stp. '.png');
  }
  if($_FILES["image3"]["type"]=='image/png'){
  	move_uploaded_file($_FILES["image3"]["tmp_name"], 'uploads/inspection_report/'. $stp. '.png');
  	//unlink('uploads/inspection_report/'. $stp. '.jpg');
  	//unlink('uploads/inspection_report/'. $stp. '.pdf');
  }
 // move_uploaded_file($_FILES["image3"]["tmp_name"], "uploads/inspection_report/" . $stp . '.jpg');
  
		

  //cwc notification
  if($role_id=='7'){
    $datap['ls_notified']='N';
    $datap['cwc_notified']='Y';
    $datap['ls_activate']='Y';
    $datap['cwc_for_notified']='N';

  }
  if($role_id=='2')
  {
    $datap['ls_notified']='Y';
  }
  else{
    $datap['ls_notified']='N';
  }
  // disposed by ls status by default status
	$datap['disposed_ls']=0;//don't change this 
  // disposed by ls status by default status
	if(($datap['idate_of_rescue']!="") && ($datap['child_name']!="") && ($datap['sex']!="") && ($datap['category']!="") && ($datap['cast']!="") && ($datap['is_adhar_card']!="") && ($datap['basic_place_of_rescue']!="")){
		if(($datap['idate_of_rescue']!='0000-00-00') && ($datap['child_name']!='0') && ($datap['sex']!='0') && ($datap['category']!='0') && ($datap['cast']!='0') && ($datap['is_adhar_card']!='0') && ($datap['basic_place_of_rescue']!='0')){
  $this->db->insert('child_basic_detail', $datap);
  
  $edudata['dist']=$this->input->post('choices');

  $edudata['block']=$this->input->post('block');

  $edudata['child_id']=$stp;

  $dataextra['child_id']=$stp;
  
   
  $this->db->insert('child_education_department', $edudata);

  $this->db->insert('child_educational_detail', $dataextra);

  $this->db->insert('child_scst_department', $dataextra);

  $this->db->insert('child_employment_status', $dataextra);

  $this->db->insert('child_family_detail', $dataextra);

  $this->db->insert('child_family_economy', $dataextra);

  $this->db->insert('child_food_department', $dataextra);

  $this->db->insert('child_habit_detail', $dataextra);

  $this->db->insert('child_health_department', $dataextra);
  
  $this->db->insert('child_health_detail', $dataextra);
  $this->db->insert('upload_fir', $dataextra);

  $this->db->insert('child_labour_resource_department', $dataextra);
  
  
  $this->db->insert('cm_fund_eligibility', $dataextra);//added by godti Satyanarayan for cm_scheme_eligibility

  $this->db->insert('child_minority_welfare_department', $dataextra);

  $this->db->insert('child_social_welfare_department', $dataextra);
  //add
  $this->db->insert('child_restoration_status', $dataextra);
  
  $this->db->insert('child_reason_labour', $dataextra);
  
  $this->db->insert('child_revenue_department', $dataextra);

  $this->db->insert('child_rural_development_department', $dataextra);

  $this->db->insert('child_social_history', $dataextra);

  $this->db->insert('child_urban_development_deoartment', $dataextra);

  $this->db->insert('child_wages', $dataextra);

  $this->db->insert('child_after_rescued', $dataextra);

  $this->db->insert('labour_act', $dataextra);

  $this->db->insert('child_ipc_act', $dataextra);
  $this->db->insert('child_otherlaws_act', $dataextra);
  $this->db->insert('order_after_production', $dataextra);
  $this->db->insert('final_order', $dataextra);
  $dataextra['date_of_rescue']=$this->input->post('idate_of_rescue');
  
  $this->db->insert('child_within_state', $dataextra);
  $this->db->insert('child_outside_state', $dataextra);
	}

  if($this->input->post('basic_place_of_rescue')=='Within') {

    $datap2['uid']=$this->session->userdata('login_user_id');
    $datap2['last_date_update']=date("d-m-Y");
    $datap2['employer_name']=$this->input->post('iemployer_name');
    $datap2['place_of_rescue']=$this->input->post('place_of_rescue');
    $datap2['employer_detail_address']=$this->input->post('iemployer_detail_address');
    $datap2['work_involved']=$this->input->post('work_involved');

    $datap2['within_state']=$this->input->post('within_state');
    $datap2['within_district']=$this->input->post('within_district');
    $datap2['within_block']=$this->input->post('within_block');
    $datap2['by_whom_deployed']=$this->input->post('by_whom_deployed');
    //prativa added
    
    //pooja added
    //zero value
    if($this->input->post('wcontact_no')){
    $datap2['wcontact_no']=$this->input->post('wcontact_no');
    }
    $datap2['behaviour_of_employer']=$this->input->post('behaviour_of_employer');
    $datap2['complaint_lodge']=$this->input->post('complaint_lodge');
    
    if($this->input->post('salary')){
    $datap2['salary']=$this->input->post('salary');
    }
    if($this->input->post('working_days')){
    $datap2['working_days']=$this->input->post('working_days');
    }
    
    if($this->input->post('working_hours')){
    $datap2['working_hours']=$this->input->post('working_hours');
    }
    $datap2['environment_in']=$this->input->post('environment_in');
    //Edited by Avinash--Start
    if($this->input->post('wyears')){
    $datap2['wyears']=$this->input->post('wyears');
    }
    if($this->input->post('wmonths')){
    $datap2['wmonths']=$this->input->post('wmonths');
    }
    if($this->input->post('wdays')){
    $datap2['wdays']=$this->input->post('wdays');
    }
    if($datap2['complaint_lodge']=='Yes')
    {
    	if($this->input->post('fir_no')){
      $datap2['fir_no']=$this->input->post('fir_no');
    	}
      $fdate=$this->input->post('fir_date');
      if($fdate != '')
      $datap2['fir_date']=date('Y-m-d',strtotime($fdate));
      $datap2['name_policestation']=$this->input->post('ps_within');
    }
    else{
        $datap2['fir_no']="";
        $datap2['fir_date']=NULL;
        $datap2['name_policestation']="";
    }
    if($datap2['work_involved']=="Other")
    {
        $datap2['period_work']=$this->input->post('iperiod_work');
    }
    else{
      $datap2['period_work']="";
    }

    //Edited by Avinash--End
    if($datap2['by_whom_deployed']=="Other")
    {
        $datap2['by_whom_deployed_other']=$this->input->post('by_whom_deployed_other1');
    }
    else{
      $datap2['by_whom_deployed_other']="";
    }
    if($datap2['behaviour_of_employer']=="Other")
    {
        $datap2['behaviour_of_employer_other']=$this->input->post('behaviour_of_employer_other');

    }
    else{
        $datap2['behaviour_of_employer_other']="";
    }
    if($datap2['environment_in']=="Other")
    {
        $datap2['environment_in_other']=$this->input->post('environment_in_other');
    }
    else{
        $datap2['environment_in_other']="";
    }

    $this->db->where('child_id', $stp);
    $this->db->update('child_within_state', $datap2);
  }
  else {
    $datap3['uid']=$this->session->userdata('login_user_id');
    $datap3['last_date_update']=date("d-m-Y");
    $datap3['employer_name']=$this->input->post('employer_name');
    $datap3['place_of_rescue_out']=$this->input->post('place_of_rescue_out');
    $datap3['employer_address']=$this->input->post('employer_address');
    $datap3['work_involved_outside']=$this->input->post('work_involved_outside');
    $pdate=$this->input->post('date_of_production');
    if($pdate != '')
    $datap3['date_of_production']=date('Y-m-d',strtotime($pdate));
    //$datap3['date_of_production']=$this->input->post('date_of_production');
    //$datap3['details_of_certificate']=$this->input->post('details_of_certificate');
    $datap3['details_of_certificate']=implode(',', $_POST['details_of_certificate']);
    
    //pooja added
    //zero value
    if($this->input->post('ocontact_no')){
    $datap3['ocontact_no']=$this->input->post('ocontact_no');
    }
    $datap3['other_work']=$this->input->post('other_work');
    $datap3['details_of_certificate_other']=$this->input->post('details_of_certificate_other');

    $datap3['oenvironment_in']=$this->input->post('oenvironment_in');

    $datap3['oby_whom_deployed']=$this->input->post('oby_whom_deployed');
    $datap3['ocomplaint_lodge']=$this->input->post('ocomplaint_lodge');
    if($this->input->post('osalary')){
    $datap3['osalary']=$this->input->post('osalary');
    }
    if($this->input->post('oworking_days')){
    $datap3['oworking_days']=$this->input->post('oworking_days');
    }
    if($this->input->post('oworking_hours')){
    $datap3['oworking_hours']=$this->input->post('oworking_hours');
    }
    $datap3['location_concern']=$this->input->post('location_concern');
    $datap3['name_of_cwc']=$this->input->post('name_of_cwc');

    $datap3['outside_state']=$this->input->post('outside_state');
    $datap3['outside_district']=$this->input->post('outside_district');
    $datap3['outside_block']=$this->input->post('outside_block');
    $datap3['obehaviour_of_employer']=$this->input->post('obehaviour_of_employer');
    $datap3['details_of_certificate_other']=$this->input->post('details_of_certificate_other');

    if(  $datap3['ocomplaint_lodge']=="Yes")
    {
    	if($this->input->post('ofir_no')){
      $datap3['ofir_no']=$this->input->post('ofir_no');
    	}
      $fdate=$this->input->post('ofir_date');
      if($fdate != '')
      $datap3['ofir_date']=date('Y-m-d',strtotime($fdate));
      //$datap3['ofir_date']=$this->input->post('ofir_date');
      $datap3['policestation_name']=$this->input->post('policestation_name');
    }
    else{
      $datap3['ofir_no']="";
      $datap3['policestation_name']="";
        $datap3['ofir_date']=NULL;
    }

    if($datap3['work_involved_outside']=="Other")
    {
        $datap3['work_involved_outside_other']=$this->input->post('work_involved_outside_other');
    }
    else{
      $datap3['work_involved_outside_other']="";
    }
    if($datap3['oby_whom_deployed']=="Other")
    {
        $datap3['by_whom_deployed_other']=$this->input->post('by_whom_deployed_other');
    }
    else{
      $datap3['by_whom_deployed_other']="";
    }
    if($datap3['obehaviour_of_employer']=="Other")
    {
      $datap3['obehaviour_of_employer_other']=$this->input->post('obehaviour_of_employer_other');
    }
    else{
    	$datap3['obehaviour_of_employer']=$this->input->post('obehaviour_of_employer');
    }
    if($datap3['oenvironment_in']=="Other")
    {
      $datap3['oenvironment_in_other']=$this->input->post('oenvironment_in_other');
    }
    else{
      $datap3['oenvironment_in_other']="";
    }

    $this->db->where('child_id', $stp);
    $this->db->update('child_outside_state', $datap3);
  }
  $dataq['uid']=$this->session->userdata('login_user_id');
  $dataq['module_id']=$stq;
  $dataq['module_name']='child_basic_detail';
  $dataq['date_time']=date("Y-m-d H:i:s");
  $this->db->insert('history_update', $dataq);
  }else{
	/*********Mailfor zero value entry started**********/
  $mail = new PHPMailer;
//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = '';                 // SMTP username
$mail->Password = '';                           // SMTP password
$mail->Port = ;                                    // TCP port to connect to

$mail->From = '';
$mail->FromName = 'CLTS';
$mail->addAddress('');               // Name is optional

$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Zero value Inserted';
$mail->Body    = "Zero value Inserted For user <b>".$role_name."</b> For District <b>".$dist_name."</b>";
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    //echo 'Message could not be sent.';
    //echo 'Mailer Error: ' . $mail->ErrorInfo;
	redirect(base_url() . 'index.php?child_rescued_list', 'refresh');
} else {
    //echo 'Message has been sent'; 
   redirect(base_url() . 'index.php?child_rescued_list', 'refresh');	
  }
   

/**************Mailfor zero value entry ended******************/
  
  
  }
}
  //get the child data for edit
    public function get_child_data($param1="",$param2="")
    {
    
      return $this->db->get_where('child_basic_detail' , array('child_id' => $param1))->result_array();
    }
//update child_data
    function update_child_rescued($project_id) {
    	    	
    	
      $datap['child_name']=$this->input->post('cname');
      $datap['sex']=$this->input->post('gender');
      if($this->input->post('education')=='Education till class')
        $datap['education']=$this->input->post('education1');
      else
        $datap['education']=$this->input->post('education');
      $datap['father_name']=$this->input->post('father');
      //pooja added
      //zero value
      if($this->input->post('contact_no')){
      $datap['contact_no']=$this->input->post('contact_no');
      }
      $datap['postal_address']=$this->input->post('postaladdress');
      //$datap['cast']=$this->input->post('cast');
      $datap['is_adhar_card']=$this->input->post('is_adhar_card');
      
      $datap['mother_name']=$this->input->post('mother_name');
      $datap['material_status']=$this->input->post('material_status');
      $datap['is_birth_registered']=$this->input->post('is_birth_registered');
      if($this->input->post('state')=='IND010'){
      	$datap['pincode']=$this->input->post('pincode');
      }else{
      	$datap['pincode']=$this->input->post('pincode_out');
      	
      }
      
      if($this->input->post('state')=='IND010'){
      	$datap['panchayat_name']=$this->input->post('panchayat_names');
      }else{
      	$datap['panchayat_name']=$this->input->post('panchayat_namesout');
      	
      }
      
      if($this->input->post('state')=='IND010'){
      	$datap['police_station']=$this->input->post('police_station');
      }else{
      	$datap['police_station']=$this->input->post('police_stationout');
      	
      }
      
		if($datap['is_adhar_card']=="Yes")
		{
			$datap['adhar_card']=$this->input->post('adhar_card');
			$datap['adhar_apply_no']=$this->input->post('adhar_card_enrollment_no');
			if($this->input->post('adhar_card_enrollment_date'))
			{
				$datap['adhar_apply_date']=date('Y-m-d',strtotime($this->input->post('adhar_card_enrollment_date')));
			}
			else{
				
				$datap['adhar_apply_date']='0000-00-00';
			}
		}
		else{
			$datap['adhar_card']='';
			$datap['adhar_apply_no']=$this->input->post('adhar_card_enrollment_no');
			if($this->input->post('adhar_card_enrollment_date'))
			{
				$datap['adhar_apply_date']=date('Y-m-d',strtotime($this->input->post('adhar_card_enrollment_date')));
			}
			else{
				
				$datap['adhar_apply_date']='0000-00-00';
			}
			
		}
		  
		  
      //prativa edit
      $datap['other']=$this->input->post('other');
      //end
      //$datap['idate_of_rescue']=$this->input->post('idate_of_rescue');
      $datap['isdob']=$this->input->post('isdob');
      if($this->input->post('isdob')=='Yes')
      {
      	//pooja added
      	//zero value
      	if($this->input->post('dob')){
        $datap['dob']= $this->input->post('dob');
      	}
        $datap['month']="";
        $datap['year']="";
      }
      else{
      	if($this->input->post('month')){
        $datap['month']=$this->input->post('month');
      	}
      	if($this->input->post('year')){
        $datap['year']=$this->input->post('year');
      	}
        $datap['dob']= "0000-00-00";
      }
      $datap['state']=$this->input->post('state');
      $datap['district']=$this->input->post('choices');
      
      if($datap['state']=='IND010'){
      	$datap['block']=$this->input->post('block');
      }else{
      	$datap['block']=$this->input->post('blockout');
      }
      $datap['category']=$this->input->post('category');
      $datap['religion']=$this->input->post('religion');
      if($datap['religion']=='other')
      {
        $datap['other_religion']=$this->input->post('other_religion');
      }
      else{
            $datap['other_religion']="";
      }

      if($datap['category']=="other")
      {
        $datap['other_cast']=$this->input->post('other_cast');
      }
      else{
        $datap['other_cast']="";
      }
	 $datap['cast']=$this->input->post('cast');
   if($datap['cast']=="Other")
   {
	 $datap['caste_name_other']=$this->input->post('other_cast_name'); 
	   
   }else{
	  $datap['caste_name_other']=""; 
	  
   }
      //end
      $datap['other_detail']=$this->input->post('other_detail');
      $datap['rescue_by']=$this->input->post('rescue_by');
      if($datap['rescue_by']=="Others")
      {
        $datap['rescue_by_other']=$this->input->post('rescue_by_other');

      }
      else{
        $datap['rescue_by_other']="";
      }
      if($this->input->post('basic_place_of_rescue')=='Within') {
        $datap['is_withinstate']='Y';
      }
      if($this->input->post('basic_place_of_rescue')=='Outside State') {
        $datap['is_withinstate']='N';
      }
	   //$datap['date_of_production_cwc']=$this->input->post('production_date');
      $datap['basic_place_of_rescue']=$this->input->post('basic_place_of_rescue');
      $datap['uid']=$this->session->userdata('login_user_id');
      $datap['last_date_update']=date("d-m-Y");
          $this->db->where('child_id', $project_id);
          $this->db->update('child_basic_detail', $datap);
          
          if($_FILES["image"]["type"]){
          	unlink('uploads/child_image/'. $project_id . '.jpg');
          	unlink('uploads/child_image/'. $project_id . '.jpeg');
          	unlink('uploads/child_image/'. $project_id . '.png');
          }
          
          if($_FILES["image"]["type"]=='image/jpeg' || $_FILES["image"]["type"]=='image/png'){
        move_uploaded_file($_FILES["image"]["tmp_name"], "uploads/child_image/" . $project_id . '.jpg');
      }
      
     /* 
      if($_FILES["image"]["type"]=='image/png'){
      	move_uploaded_file($_FILES["image"]["tmp_name"], "uploads/child_image/" . $project_id . '.png');
      } */
      
      if($_FILES["image3"]["type"]){
      	unlink('uploads/inspection_report/'. $project_id . '.jpg');
      	unlink('uploads/inspection_report/'. $project_id . '.jpeg');
      	unlink('uploads/inspection_report/'. $project_id . '.pdf');
      	unlink('uploads/inspection_report/'. $project_id . '.png');
      }
      
      if( $_FILES["image3"]["type"]=='image/jpeg'){
      	move_uploaded_file($_FILES["image3"]["tmp_name"], 'uploads/inspection_report/'. $project_id . '.jpg');
      	//unlink('uploads/inspection_report/'. $project_id . '.png');
      	//unlink('uploads/inspection_report/'. $project_id . '.pdf');
      }
      if($_FILES["image3"]["type"]=='application/pdf'){
      	move_uploaded_file($_FILES["image3"]["tmp_name"], 'uploads/inspection_report/'. $project_id . '.pdf');
      	//unlink('uploads/inspection_report/'. $project_id . '.jpg');
      	//unlink('uploads/inspection_report/'. $project_id . '.png');
      }
      if($_FILES["image3"]["type"]=='image/png'){
      	move_uploaded_file($_FILES["image3"]["tmp_name"], 'uploads/inspection_report/'. $project_id . '.png');
      	//unlink('uploads/inspection_report/'. $project_id . '.jpg');
      	//unlink('uploads/inspection_report/'. $project_id . '.pdf');
      }
      if($_FILES["image3"]["type"]=='image/jpg'){
      	move_uploaded_file($_FILES["image3"]["tmp_name"], 'uploads/inspection_report/'. $project_id . '.jpg');
      	//unlink('uploads/inspection_report/'. $project_id . '.jpg');
      	//unlink('uploads/inspection_report/'. $project_id . '.pdf');
      }
      
      $session_ids=$this->session->userdata('login_user_id');
      $tstrole = $this->db->get_where('staff',array('staff_id'=>$session_ids))->result_array();
      foreach($tstrole as $strp):
        $role_id=$strp['account_role_id'];
        $distr_id=$strp['district_id'];
        $sta_id=$strp['state_id'];
      endforeach;
      if($this->input->post('basic_place_of_rescue')=='Within') {
            $datap2['uid']=$this->session->userdata('login_user_id');
            $datap2['last_date_update']=date("d-m-Y");
            //$datap2['date_of_rescue']=$this->input->post('idate_of_rescue');
            $datap2['employer_name']=$this->input->post('iemployer_name');
            $datap2['place_of_rescue']=$this->input->post('place_of_rescue');
            $datap2['employer_detail_address']=$this->input->post('iemployer_detail_address');

            $datap2['within_state']=$this->input->post('within_state');
            $datap2['within_district']=$this->input->post('within_district');
            $datap2['within_block']=$this->input->post('within_block');

            //prativa added

            $datap2['work_involved']=$this->input->post('work_involved');
            if($datap2['work_involved']=='Other')
            {
              $datap2['period_work']=$this->input->post('iperiod_work');
            }
            else{
            $datap2['period_work']="";
            }
            
            //pooja
            //added for zeo value
            if($this->input->post('wyears')){
            $datap2['wyears']=$this->input->post('wyears');
            }
            if($this->input->post('wmonths')){
            $datap2['wmonths']=$this->input->post('wmonths');
            }
            if($this->input->post('wdays')){
            $datap2['wdays']=$this->input->post('wdays');
            }
            if($this->input->post('wcontact_no')){
            $datap2['wcontact_no']=$this->input->post('wcontact_no');
            }
            $datap2['by_whom_deployed']=$this->input->post('by_whom_deployed');
            $datap2['behaviour_of_employer']=$this->input->post('behaviour_of_employer');
            $datap2['complaint_lodge']=$this->input->post('complaint_lodge');
            if($this->input->post('salary')){
            $datap2['salary']=$this->input->post('salary');
            }
            if($this->input->post('working_days')){
            $datap2['working_days']=$this->input->post('working_days');
            }
            if($this->input->post('working_hours')){
            $datap2['working_hours']=$this->input->post('working_hours');
            }
            $datap2['environment_in']=$this->input->post('environment_in');


            if($datap2['by_whom_deployed']=="Other")
            {
              $datap2['by_whom_deployed_other']=$this->input->post('by_whom_deployed_other1');
            }
            else{
              $datap2['by_whom_deployed_other']="";
            }
            if($datap2['environment_in']=="Other")
            {
              $datap2['environment_in_other']=$this->input->post('environment_in_other');
            }
            else{
              $datap2['environment_in_other']="";
            }
            if(  $datap2['behaviour_of_employer']=="Other")
            {
              $datap2['behaviour_of_employer_other']=$this->input->post('behaviour_of_employer_other');

            }
            else{
              $datap2['behaviour_of_employer_other']="";
            }
            if($datap2['complaint_lodge']=="Yes")
            {
            	if($this->input->post('fir_no')){
              $datap2['fir_no']=$this->input->post('fir_no');
            	}
              $fdate1=$this->input->post('fir_date');
              if($fdate1 !='')
              $datap2['fir_date']=date('Y-m-d',strtotime($fdate1));
              //$datap2['fir_date']=$this->input->post('fir_date');
              $datap2['name_policestation']=$this->input->post('ps_within');
            }
            else{
              $datap2['fir_no']="";
              $datap2['fir_date']=NULL;
              $datap2['name_policestation']="";
            }


            $this->db->where('child_id', $project_id);
            $this->db->update('child_within_state', $datap2);
          ////////////////////////////////////////////////////////
          //outside the state details update
          ///////////////////////////////////////////////////////
          //$datap3['uid']=$this->session->userdata('login_user_id');
          $datap3['last_date_update']=date("d-m-Y");
          //$datap3['date_of_rescue']=$this->input->post('date_of_rescue');
          $datap3['employer_name']="";
          $datap3['place_of_rescue_out']="";
          $datap3['employer_address']="";
          $datap3['work_involved_outside']="";
          //$pdate=$this->input->post('date_of_production');
          ///if($pdate!='')
          $datap3['date_of_production']=NULL;
          //$datap3['date_of_production']=$this->input->post('date_of_production');
          $datap3['state']="";
          //$datap3['details_of_certificate']=$this->input->post('details_of_certificate');
          $datap3['details_of_certificate'] = "";
          $datap3['location_concern']="";
          $datap3['name_of_cwc']="";
          $datap3['outside_state']="";
          $datap3['outside_district']="";
          $datap3['outside_block']="";

          //prativ
          $datap3['ocontact_no']="";
          $datap3['oby_whom_deployed']="";
          $datap3['obehaviour_of_employer']="";

          $datap3['ocomplaint_lodge']="";
          $datap3['osalary']="";
          $datap3['oworking_days']="";
          $datap3['oworking_hours']="";
          $datap3['oenvironment_in']="";
          $datap3['oenvironment_in_other']="";
          $datap3['by_whom_deployed_other']="";
          $datap3['obehaviour_of_employer_other']="";
          $datap3['details_of_certificate_other']="";
          $datap3['work_involved_outside_other']="";

          $datap3['ofir_no']="";
          //$fdate=$this->input->post('ofir_date');
          //if($fdate!='')
          $datap3['ofir_date']=NULL;
          //$datap3['ofir_date']=$this->input->post('ofir_date');
          $datap3['policestation_name']="";
          $this->db->where('child_id', $project_id);
          $this->db->update('child_outside_state', $datap3);

      }
      else {
            $datap3['uid']=$this->session->userdata('login_user_id');
            $datap3['last_date_update']=date("d-m-Y");
            //$datap3['date_of_rescue']=$this->input->post('date_of_rescue');
            $datap3['employer_name']=$this->input->post('employer_name');
            $datap3['place_of_rescue_out']=$this->input->post('place_of_rescue_out');
            $datap3['employer_address']=$this->input->post('employer_address');
            $datap3['work_involved_outside']=$this->input->post('work_involved_outside');
            $pdate=$this->input->post('date_of_production');
            if($pdate!='')
            $datap3['date_of_production']=date('Y-m-d',strtotime($pdate));
            //$datap3['date_of_production']=$this->input->post('date_of_production');
            $datap3['state']=$this->input->post('state');
            //$datap3['details_of_certificate']=$this->input->post('details_of_certificate');
            $datap3['details_of_certificate'] = implode(',', $_POST['details_of_certificate']);
            $datap3['location_concern']=$this->input->post('location_concern');
            $datap3['name_of_cwc']=$this->input->post('name_of_cwc');
            $datap3['outside_state']=$this->input->post('outside_state');
            $datap3['outside_district']=$this->input->post('outside_district');
            $datap3['outside_block']=$this->input->post('outside_block');

            //prativ
            
            if($this->input->post('ocontact_no')){
            $datap3['ocontact_no']=$this->input->post('ocontact_no');
            }
            $datap3['oby_whom_deployed']=$this->input->post('oby_whom_deployed');
            $datap3['obehaviour_of_employer']=$this->input->post('obehaviour_of_employer');

            $datap3['ocomplaint_lodge']=$this->input->post('ocomplaint_lodge');
            if($this->input->post('osalary')){
            $datap3['osalary']=$this->input->post('osalary');
            }
            if($this->input->post('oworking_days')){
            $datap3['oworking_days']=$this->input->post('oworking_days');
            }
            if($this->input->post('oworking_hours')){
            $datap3['oworking_hours']=$this->input->post('oworking_hours');
            }
            $datap3['oenvironment_in']=$this->input->post('oenvironment_in');
            if($datap3['work_involved_outside']=='Other')
            {
                $datap3['work_involved_outside_other']=$this->input->post('work_involved_outside_other');
            }
            else{
              $datap3['work_involved_outside_other']="";
            }
            if($datap3['oby_whom_deployed']=='Other')
            {
                $datap3['by_whom_deployed_other']=$this->input->post('by_whom_deployed_other');
            }
            else{
              $datap3['by_whom_deployed_other']="";
            }
            if($datap3['oenvironment_in']=='Other')
            {
              $datap3['oenvironment_in_other']=$this->input->post('oenvironment_in_other');

            }
            else{
            $datap3['oenvironment_in_other']="";
            }
            if($datap3['obehaviour_of_employer']=='Other')
            {
              $datap3['obehaviour_of_employer_other']=$this->input->post('obehaviour_of_employer_other');
            }
            else{
                $datap3['obehaviour_of_employer_other']="";
            }

            $datap3['details_of_certificate_other']=$this->input->post('details_of_certificate_other');
            if($datap3['ocomplaint_lodge']=='Yes')
            {
            	if($this->input->post('ofir_no')){
              $datap3['ofir_no']=$this->input->post('ofir_no');
            	}
              $fdate=$this->input->post('ofir_date');
              if($fdate!='')
              $datap3['ofir_date']=date('Y-m-d',strtotime($fdate));
              //$datap3['ofir_date']=$this->input->post('ofir_date');
              $datap3['policestation_name']=$this->input->post('policestation_name');
            }
            else{
              $datap3['ofir_no']="";
              $datap3['ofir_date']=NULL;
              $datap3['policestation_name']="";
            }
            $this->db->where('child_id', $project_id);
            $this->db->update('child_outside_state', $datap3);
            ////////////////////////////////////////////
            //with in state data update
            ///////////////////////////////////////////
            $datap2['employer_name']="";
            $datap2['place_of_rescue']="";
            $datap2['employer_detail_address']="";
            $datap2['work_involved']="";
            $datap2['period_work']="";
            $datap2['within_state']="";
            $datap2['within_district']="";
            $datap2['within_block']="";

            //prativa added

            $datap2['wyears']="";
            $datap2['wmonths']="";
            $datap2['wdays']="";

            $datap2['wcontact_no']="";
            $datap2['by_whom_deployed']="";
            $datap2['behaviour_of_employer']="";
            $datap2['complaint_lodge']="";
            $datap2['salary']="";
            $datap2['working_days']="";
            $datap2['working_hours']="";
            $datap2['environment_in']="";
            $datap2['environment_in_other']="";
            $datap2['fir_no']=$this->input->post('fir_no');
            //$fdate1=$this->input->post('fir_date');
            //if($fdate1 !='')
            $datap2['fir_date']=NULL;
            //$datap2['fir_date']=$this->input->post('fir_date');
            $datap2['name_policestation']="";
            $datap2['behaviour_of_employer_other']="";
            $datap2['by_whom_deployed_other']="";
            $this->db->where('child_id', $project_id);
            $this->db->update('child_within_state', $datap2);
      }
      $dataq['uid']=$this->session->userdata('login_user_id');
      $dataq['module_id']=$project_id;
      $dataq['module_name']='child_basic_detail';
      $dataq['date_time']=date("Y-m-d H:i:s");
      $this->db->insert('history_update', $dataq);
      }
      //Dont know why it is required
      function ls_notified($childid){
        //print_r($childid);
    		$data=array('ls_notified'=>'Y');
    		$this->db->where('child_id',$childid)
    				->update('child_basic_detail',$data);
    	}

    	function cwc_notified($id){
    		$data = array('cwc_notified'=>'Y');
    		$this->db->where('child_id',$id)->update('child_basic_detail',$data);
    	}

    	function cwc_for_notified($id1){
    	$data = array('cwc_for_notified'=>'Y');
    		$this->db->where('child_id',$id1)->update('child_basic_detail',$data);
    	}
      //get districts
      public function get_districts($state_id)
      {
        return $this->db->select('*')->where('parent_id',$state_id)->order_by('area_name', 'asc')->group_by('area_name')->get('child_area_detail')->result_array();
      }
      public function get_area($dstate_id)
      {
       return $this->db->get_where('child_area_detail',array('area_id'=>$dstate_id))->result_array();
      }
	  //get fir data
	  public function get_fir_data($child_id)
	  {
                 $this->db->select('child_basic_detail.district_id,police_stations.police_station_name as police_station ,child_area_detail.area_name as district')
                ->join('child_area_detail','child_area_detail.area_id=child_basic_detail.district_id')
				->join('police_stations','police_stations.id=child_basic_detail.police_station','left')
				->where('child_basic_detail.child_id',$child_id);
                $query = $this->db->get('child_basic_detail');
				
      return $query->result_array();
	  }
	  
	  //Add outside rescue child
	  
	  function create_child_outsiderescued($ses_ids){

	  	$tstrole = $this->db->get_where('staff',array('staff_id'=>$ses_ids))->result_array();
	  	
	  	foreach($tstrole as $strp):
	  	$role_id=$strp['account_role_id'];
	  	$district_id=$strp['district_id'];
	  	$state_id=$strp['state_id'];
	  	endforeach;
	  	
	  						$datap3['uid']=$this->session->userdata('login_user_id');
	  						$datap3['child_name']=$this->input->post('cname');
	  						$datap3['gender']=$this->input->post('gender');
	  						$dob=$this->input->post('date_of_birth');
	  						$datap3['dob']=date('Y-m-d',strtotime($dob));			
	  						if($this->input->post('isdob')=="No")
	  						{
	  						//$datap3['age']=$this->input->post('age');
	  						
	  						if($this->input->post('age')){
	  							$datap3['age']=$this->input->post('age');
	  						}
	  						
	  						if($this->input->post('month')){
	  						$datap3['month']=$this->input->post('month'); 
	  						}
	  						$datap3['isdob']="";
	  						
	  						}else{
	  						if($this->input->post('isdob')){
	  						$datap3['isdob']=$this->input->post('isdob');
	  						$datap3['age']="";
	  						$datap3['month']="";
	  						}
	  						}
	  						$datap3['mother_name']=$this->input->post('mothname');
	  						
	  							$datap3['father_name']=$this->input->post('fname');
	  							$datap3['village_name']=$this->input->post('village_name');
	  							$datap3['child_district_name']=$this->input->post('district_child');
	  							
	  							$datap3['child_block_name']=$this->input->post('child_block');
	  							
	  							$datap3['child_state_name']=$this->input->post('state');
	  							
	  							$rescue_date=$this->input->post('rescue_date');
	  							$datap3['rescue_date']=date('Y-m-d',strtotime($rescue_date));		  								  								  							
	  							$datap3['rescue_by']=$this->input->post('rescu_by');
	  							$datap3['nature_work']=$this->input->post('nuture_of_work');
	  							$datap3['rescued_state']=$this->input->post('outside_state');
	  							$datap3['rescued_dist']=$this->input->post('outside_district');	  							
	  							$datap3['rescued_block']=$this->input->post('rblock');
	  							$datap3['employer_name']=$this->input->post('emp_name');	  							
	  							$datap3['address_of_employername']=$this->input->post('eworkplace');
	  							
	  							$type_certificate=$this->input->post('type_certificatee');
	  							$datap3['type_of_certificate']=$type_certificate ;
	  							if($type_certificate=='Yes'){
	  							$datap3['mutipul_choice']=$this->input->post('multi_choice');
	  							$datap3['others_form']=$this->input->post('others_form');
	  							
	  							$datap3['created_date']=date("Y-m-d H:i:s");

	  							$this->db->insert('rescued_outsidestate_child', $datap3);
	  							
	  							$stq=$this->db->insert_id();
	  							
	  							$year = date('Y');	
	  							$strs=100000+$stq;
	  							$stp=$state_id.'_'.$district_id.'_'.$year.'_'.$strs;
	  							
	  							if( $_FILES["image"]["type"]!='image/pdf'){
	  								move_uploaded_file($_FILES["image"]["tmp_name"], "uploads/rescued_child_outside/" . $stq. '.jpg');
	  							}
	  							
	  								move_uploaded_file($_FILES["image1"]["tmp_name"], "uploads/rescued_child_outside/child_bonded_labour/" . $stq. '.jpg');
	  							
	  								move_uploaded_file($_FILES["image2"]["tmp_name"], "uploads/rescued_child_outside/child_labour/" . $stq. '.jpg');
	  						
	  							
	  								move_uploaded_file($_FILES["image3"]["tmp_name"], "uploads/rescued_child_outside/age_lbr/" . $stq. '.jpg');
	  							
	  								move_uploaded_file($_FILES["image4"]["tmp_name"], "uploads/rescued_child_outside/other/" . $stq. '.jpg');
	  							}else{
	  								$datap3['created_date']=date("Y-m-d H:i:s");
	  								
	  								$this->db->insert('rescued_outsidestate_child', $datap3);
	  								
	  								$stq=$this->db->insert_id();
	  								
	  								$year = date('Y');
	  								$strs=100000+$stq;
	  								$stp=$state_id.'_'.$district_id.'_'.$year.'_'.$strs;
	  								
	  								if( $_FILES["image"]["type"]!='image/pdf'){
	  									move_uploaded_file($_FILES["image"]["tmp_name"], "uploads/rescued_child_outside/" . $stq. '.jpg');
	  								}
	  								
	  							}
	  							
	  							
	  					
	  }
	  
	  public  function get_rescued_outsidechilds($role_id,$district_id,$state_id,$staff_id)
	  {	
	 $query="select * from rescued_outsidestate_child where uid='$staff_id' ORDER BY id DESC ";
	  	return $this->db->query($query)->result_array();
	  		
	  	}
	  	
	  	public function get_outsidechild_data($param1="",$param2="")
	  	{
	  		
	  		return $this->db->get_where('rescued_outsidestate_child' , array('id' => $param1))->result_array();
	  	}
  }
