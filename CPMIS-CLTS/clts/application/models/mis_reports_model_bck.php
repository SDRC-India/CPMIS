
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<?php
//code by satyanarayan
class Mis_reports_model extends CI_Model {
  function __construct()
  {
      parent::__construct();
      $this->load->database();
	   $this->load->library('session');

  }
  //*==============================monthly reports=======================*/
  //time period of entitlement card generated data
public function report_details($from,$to,$dist="")
	  {
		    //echo $dist;
			$ses_ids=$this->session->userdata('login_user_id');
			$role=$this->get_role_id($ses_ids);
			  foreach($role as $rolep):
				$roles_id=$rolep['account_role_id'];
				$dist_id=$rolep['district_id'];
			  endforeach;
			  $newdistrict= $this->db->query("select  division_id from division_details  where division_details.district_id='" . $dist_id ."' ")->result_array();
			  foreach($newdistrict as $newdistricts):
			  $division_id=$newdistricts['division_id'];
			  endforeach;
			  
			  if($dist)
			  {
				  $quer1="select child_basic_detail.child_id,child_name,idate_of_rescue,(select child_area_detail.area_name from child_area_detail where child_basic_detail.district=child_area_detail.area_id ) as child_dist,final_order.final_order_date as final_order_date from child_basic_detail
				  join final_order on child_basic_detail.child_id=final_order.child_id
				   where child_basic_detail.district_id='".$dist."' AND STR_TO_DATE(final_order.final_order_date,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' ";

			  }
			  else{
			  	if($roles_id==10 || $roles_id==11 || $roles_id==21 || $roles_id==12 || $roles_id==22)//for lC and Lc operator
				{
			 $quer1="select child_basic_detail.child_id,child_name,idate_of_rescue,(select child_area_detail.area_name from child_area_detail where child_basic_detail.district=child_area_detail.area_id ) as child_dist,final_order.final_order_date as final_order_date from child_basic_detail
				  join final_order on child_basic_detail.child_id=final_order.child_id
				   where STR_TO_DATE(final_order.final_order_date,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' ";
				}
				
				else if($roles_id==13 || $roles_id==20 )//FOR DLC
			    {
					$quer1="select child_basic_detail.child_id,child_name,idate_of_rescue,(select child_area_detail.area_name from child_area_detail where child_basic_detail.district=child_area_detail.area_id ) as child_dist,final_order.final_order_date as final_order_date from child_basic_detail
				  join final_order on child_basic_detail.child_id=final_order.child_id
				   where child_basic_detail.district_id COLLATE utf8_unicode_ci in (select district_id from division_details  where division_details.division_id='" .$division_id."') AND STR_TO_DATE(final_order.final_order_date,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' ";
					
				}
				else if($roles_id==2 || $roles_id==5 || $roles_id==7 || $roles_id==6 || $roles_id==8 || $roles_id==14 || $roles_id==16 || $roles_id==18 || $roles_id==19)//FOR DLC
				{
					$quer1="select child_basic_detail.child_id,child_name,idate_of_rescue,(select child_area_detail.area_name from child_area_detail where child_basic_detail.district=child_area_detail.area_id ) as child_dist,final_order.final_order_date as final_order_date from child_basic_detail
				  join final_order on child_basic_detail.child_id=final_order.child_id
				   where child_basic_detail.district_id='".$dist_id."' AND STR_TO_DATE(final_order.final_order_date,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' ";
					
				}
				
			
			}

		 return $this->db->query($quer1)->result_array();


	  }
	  //Child rescued investigation data
	  public function report_details_investigation($from,$to,$dist="")
	  {
		    $ses_ids=$this->session->userdata('login_user_id');
			$role=$this->get_role_id($ses_ids);
			  foreach($role as $rolep):
				$roles_id=$rolep['account_role_id'];
				$dist_id=$rolep['district_id'];
			  endforeach;
			  $newdistrict= $this->db->query("select  division_id from division_details  where division_details.district_id='" . $dist_id ."' ")->result_array();
			  foreach($newdistrict as $newdistricts):
			  $division_id=$newdistricts['division_id'];
			  endforeach;
			  if($dist)
			  {
				  $quer1="select child_basic_detail.child_id,child_name,date_of_production,final_order.final_order_date as final_order_date from child_basic_detail
				  join order_after_production on child_basic_detail.child_id=order_after_production.child_id
				  join final_order on child_basic_detail.child_id=final_order.child_id
				   where child_basic_detail.district_id='".$dist."' AND STR_TO_DATE(final_order.final_order_date,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' ";

			  }
		  else{
		  	if($roles_id==10 || $roles_id==11 || $roles_id==21 || $roles_id==12 || $roles_id==22)//for lC and Lc operator
				{
			$quer1="select child_basic_detail.child_id,child_name,date_of_production,final_order.final_order_date as final_order_date from child_basic_detail
			join order_after_production on child_basic_detail.child_id=order_after_production.child_id
		      join final_order on child_basic_detail.child_id=final_order.child_id
		       where STR_TO_DATE(final_order.final_order_date,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' ";
			   
				}
				
				else if($roles_id==13 || $roles_id==20 )//FOR DLC
				{
					$quer1="select child_basic_detail.child_id,child_name,date_of_production,final_order.final_order_date as final_order_date from child_basic_detail
			join order_after_production on child_basic_detail.child_id=order_after_production.child_id
		      join final_order on child_basic_detail.child_id=final_order.child_id
		       where child_basic_detail.district_id COLLATE utf8_unicode_ci in (select district_id from division_details  where division_details.division_id='" .$division_id."') AND STR_TO_DATE(final_order.final_order_date,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' ";
					
				}
		  }

		 return $this->db->query($quer1)->result_array();
	  }
	  //child rescued inside bihar data
	   public function report_details_inside($from,$to,$dist="",$block="")
	   {
	   	$ses_ids=$this->session->userdata('login_user_id');
	   	$role=$this->get_role_id($ses_ids);
	   	foreach($role as $rolep):
	   	$roles_id=$rolep['account_role_id'];
	   	$dist_id=$rolep['district_id'];
	   	endforeach;
	   	$newdistrict= $this->db->query("select  division_id from division_details  where division_details.district_id='" . $dist_id ."' ")->result_array();
	   	
	   	foreach($newdistrict as $newdistricts):
	   	$division_id=$newdistricts['division_id'];
	   	endforeach;
	   	if($dist)
	   	{
	   		
	   		
	   		$child_dist =$this->db->query("select child_area_detail.area_name as area_name,child_area_detail.area_id as area_id from child_area_detail
		        left join child_basic_detail ON child_area_detail.area_id=child_basic_detail.district_id WHERE area_id='".$dist_id."'
		       GROUP BY child_area_detail.area_name ")->result_array();
	   		$child_inside_state=$this->db->query("select count(child_basic_detail.child_id) as counts,child_area_detail.area_id as area_id from child_area_detail
		        left join child_basic_detail ON child_area_detail.area_id=child_basic_detail.district_id
		       WHERE basic_place_of_rescue='Within' AND area_id='".$dist_id."' AND STR_TO_DATE(idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' GROUP BY child_area_detail.area_name ")->result_array();
	   		$child_dist_id =$this->db->query("select child_area_detail.area_id as area_id from child_area_detail
		        left join child_basic_detail ON child_area_detail.area_id=child_basic_detail.district_id
		       GROUP BY child_area_detail.area_id ")->result_array();
	   		
	   		
	   	}
	   	else
	   		if($roles_id==10 || $roles_id==11 || $roles_id==21 || $roles_id==12 || $roles_id==22)//for lC and Lc operator
	   		{
	   			
	   			
	   			
	   			$child_dist =$this->db->query("select child_area_detail.area_name as area_name,child_area_detail.area_id as area_id from child_area_detail
		        left join child_basic_detail ON child_area_detail.area_id=child_basic_detail.district_id WHERE parent_id='IND010'
		       GROUP BY child_area_detail.area_name ")->result_array();
	   			$child_inside_state=$this->db->query("select count(child_basic_detail.child_id) as counts,child_area_detail.area_id as area_id from child_area_detail
		        left join child_basic_detail ON child_area_detail.area_id=child_basic_detail.district_id
		       WHERE basic_place_of_rescue='Within'  AND STR_TO_DATE(idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' GROUP BY child_area_detail.area_name ")->result_array();
	   			$child_dist_id =$this->db->query("select child_area_detail.area_id as area_id from child_area_detail
		        left join child_basic_detail ON child_area_detail.area_id=child_basic_detail.district_id
		       GROUP BY child_area_detail.area_id ")->result_array();
	   			
	   			
	   			
	   		}
	   	
	   	else  if($roles_id==13 || $roles_id==20 )//for DLC
	   	{
	   		
	   		$child_dist =$this->db->query("select child_area_detail.area_name as area_name,child_area_detail.area_id as area_id from child_area_detail
		        left join child_basic_detail ON child_area_detail.area_id=child_basic_detail.district_id where child_area_detail.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $division_id."') group by child_area_detail.area_name order by child_area_detail.area_name")->result_array();
	   		$child_inside_state=$this->db->query("select count(child_basic_detail.child_id) as counts,child_area_detail.area_id as area_id from child_area_detail
		        left join child_basic_detail ON child_area_detail.area_id=child_basic_detail.district_id
		       WHERE child_basic_detail.district_id COLLATE utf8_unicode_ci in (select district_id from division_details  where division_details.division_id='" .$division_id."') AND  basic_place_of_rescue='Within' AND STR_TO_DATE(idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' GROUP BY child_area_detail.area_name")->result_array();
	   		$child_dist_id =$this->db->query("select child_area_detail.area_id as area_id from child_area_detail
		        left join child_basic_detail ON child_area_detail.area_id=child_basic_detail.district_id
		       GROUP BY child_area_detail.area_id ")->result_array();
	   		
	   		
	   		
	   	}
	   	
	   	$cumulative = array();
	   	for($i=0; $i<sizeof($child_dist); $i++){
	   		$cumulative[$i][0]=$child_dist[$i]['area_name'];
	   		$cumulative[$i][1]=0;
	   		$cumulative[$i][2]=0;
	   		
	   		
	   		
	   		
	   		
	   		if(sizeof($child_inside_state)>0)
	   		{
	   			foreach($child_inside_state as $row)
	   			{
	   				
	   				if($child_dist[$i]['area_id']==$row['area_id'])
	   				{
	   					
	   					$cumulative[$i][1]=$row['counts'];
	   					break;
	   				}
	   				else{
	   					$cumulative[$i][1]=0;
	   				}
	   			}
	   			
	   		}
	   		
	   		if(sizeof($child_dist_id)>0)
	   		{
	   			foreach($child_dist_id as $row)
	   			{
	   				
	   				if($child_dist[$i]['area_id']==$row['area_id'])
	   				{
	   					$cumulative[$i][2]=$row['area_id'];
	   					break;
	   				}
	   				else{
	   					$cumulative[$i][2]=0;
	   				}
	   			}
	   			
	   		}
	   		
	   		
	   		
	   		
	   		
	   		$cumulative[$i][5]=$cumulative[$i][1]+$cumulative[$i][2]+$cumulative[$i][3]+$cumulative[$i][4];
	   		$tot1+=$cumulative[$i][1];
	   		$tot2+=$cumulative[$i][2];
	   		
	   		
	   		
	   	}
	   	
	   	if($roles_id==10 || $roles_id==11 || $roles_id==21 || $roles_id==12 || $roles_id==22 || $roles_id==13 || $roles_id==20 ){
	   		$cumulative[sizeof($child_dist)][0]="<strong>Total</strong>";
	   		$cumulative[sizeof($child_dist)][1]="<strong>".$tot1."<strong>";
	   		$cumulative[sizeof($child_dist)][2]="<strong>".$tot2."<strong>";
	   	}
	   	
	   	
	   	return($cumulative);
	  }
	  //code added by poojashree Rout on 28/06/2017
	  
	  //child rescued in both inside and outside state along with order type
	  //modified for total on 15-09-17
	  public function report_details_inside_mis($from,$to,$dist="")
	  {
	  	
	  	 
	  	$ses_ids=$this->session->userdata('login_user_id');
	  	$role=$this->get_role_id($ses_ids);
	  	foreach($role as $rolep):
	  	$roles_id=$rolep['account_role_id'];
	  	$dist_id=$rolep['district_id'];
	  	endforeach;
	  	$newdistrict= $this->db->query("select  division_id from division_details  where division_details.district_id='" . $dist_id ."' ")->result_array();
	  	foreach($newdistrict as $newdistricts):
	  	$division_id=$newdistricts['division_id'];
	  	endforeach;
	  	
	  	if($roles_id==2 || $roles_id==5|| $roles_id==7|| $roles_id==6 || $roles_id==8 || $roles_id==14 || $roles_id==16 || $roles_id==18 || $roles_id==19)
	  	{
	  		
	  		$child_dist =$this->db->query("select child_area_detail.area_name as area_name,child_area_detail.area_id as area_id from child_area_detail
		        left join child_basic_detail ON child_area_detail.area_id=child_basic_detail.district_id WHERE parent_id='IND010' and child_area_detail.area_id='".$dist_id."'
		       GROUP BY child_area_detail.area_name ")->result_array();
	  		$ccii=$this->db->query("select child_area_detail.area_id as area_id, SUM(CASE WHEN order_type = 'cci' THEN 1 ELSE 0 END) cci
		                from order_after_production left join child_basic_detail ON
                        order_after_production.child_id=child_basic_detail.child_id
                        left join child_area_detail
                        ON child_basic_detail.district_id =child_area_detail.area_id
		                WHERE
		                STR_TO_DATE(idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' GROUP BY child_area_detail.area_name")->result_array();
	  		
	  		$parents=$this->db->query("select child_area_detail.area_id as area_id, SUM(CASE WHEN order_type = 'Parents' THEN 1 ELSE 0 END) Parents
		                from order_after_production left join child_basic_detail ON
                        order_after_production.child_id=child_basic_detail.child_id
                        left join child_area_detail
                        ON child_basic_detail.district_id =child_area_detail.area_id
		                WHERE
		                STR_TO_DATE(idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' GROUP BY child_area_detail.area_name")->result_array();
	  		
	  		
	  		$fitperson=$this->db->query("select child_area_detail.area_id as area_id, SUM(CASE WHEN order_type = 'fit_person' THEN 1 ELSE 0 END) fitperson
		                from order_after_production left join child_basic_detail ON
                        order_after_production.child_id=child_basic_detail.child_id
                        left join child_area_detail
                        ON child_basic_detail.district_id =child_area_detail.area_id
		                WHERE
		                STR_TO_DATE(idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' GROUP BY child_area_detail.area_name")->result_array();
	  		
	  		$fitinstitution=$this->db->query("select child_area_detail.area_id as area_id, SUM(CASE WHEN order_type = 'fit_institution' THEN 1 ELSE 0 END) fitfacility
		                from order_after_production left join child_basic_detail ON
                        order_after_production.child_id=child_basic_detail.child_id
                        left join child_area_detail
                        ON child_basic_detail.district_id =child_area_detail.area_id
		                WHERE
		                STR_TO_DATE(idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' GROUP BY child_area_detail.area_name")->result_array();
	  		
	  		$otherplace=$this->db->query("select child_area_detail.area_id as area_id, SUM(CASE WHEN order_type = 'other_place' THEN 1 ELSE 0 END) otherplace
		                from order_after_production left join child_basic_detail ON
                        order_after_production.child_id=child_basic_detail.child_id
                        left join child_area_detail
                        ON child_basic_detail.district_id =child_area_detail.area_id
		                WHERE
		                STR_TO_DATE(idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' GROUP BY child_area_detail.area_name")->result_array();
	  		
	  		$others=$this->db->query("select child_area_detail.area_id as area_id, SUM(CASE WHEN order_type = 'Others' THEN 1 ELSE 0 END) Others
		                from order_after_production left join child_basic_detail ON
                        order_after_production.child_id=child_basic_detail.child_id
                        left join child_area_detail
                        ON child_basic_detail.district_id =child_area_detail.area_id
		                WHERE
		                STR_TO_DATE(idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' GROUP BY child_area_detail.area_name")->result_array();
	  		
	  		
	  		$child_dist_id =$this->db->query("select child_area_detail.area_id as area_id from child_area_detail
		        left join child_basic_detail ON child_area_detail.area_id=child_basic_detail.district_id
		       GROUP BY child_area_detail.area_id ")->result_array();
	  		
	  		
	  		
	  		
	  	}
	  	
	  	
	  	if($roles_id==10 || $roles_id==11 || $roles_id==12 || $roles_id==22)//for lC and Lc operator
	  	{
	  		
	  		
	  		
	  		$child_dist =$this->db->query("select child_area_detail.area_name as area_name,child_area_detail.area_id as area_id from child_area_detail
		        left join child_basic_detail ON child_area_detail.area_id=child_basic_detail.district_id WHERE parent_id='IND010'
		       GROUP BY child_area_detail.area_name ")->result_array();
	  		$ccii=$this->db->query("select child_area_detail.area_id as area_id, SUM(CASE WHEN order_type = 'cci' THEN 1 ELSE 0 END) cci
		                from order_after_production left join child_basic_detail ON
                        order_after_production.child_id=child_basic_detail.child_id
                        left join child_area_detail
                        ON child_basic_detail.district_id =child_area_detail.area_id
		                WHERE
		                STR_TO_DATE(idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' GROUP BY child_area_detail.area_name")->result_array();
	  		
	  		$parents=$this->db->query("select child_area_detail.area_id as area_id, SUM(CASE WHEN order_type = 'Parents' THEN 1 ELSE 0 END) Parents
		                from order_after_production left join child_basic_detail ON
                        order_after_production.child_id=child_basic_detail.child_id
                        left join child_area_detail
                        ON child_basic_detail.district_id =child_area_detail.area_id
		                WHERE
		                STR_TO_DATE(idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' GROUP BY child_area_detail.area_name")->result_array();
	  		
	  		
	  		$fitperson=$this->db->query("select child_area_detail.area_id as area_id, SUM(CASE WHEN order_type = 'fit_person' THEN 1 ELSE 0 END) fitperson
		                from order_after_production left join child_basic_detail ON
                        order_after_production.child_id=child_basic_detail.child_id
                        left join child_area_detail
                        ON child_basic_detail.district_id =child_area_detail.area_id
		                WHERE
		                STR_TO_DATE(idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' GROUP BY child_area_detail.area_name")->result_array();
	  		
	  		$fitinstitution=$this->db->query("select child_area_detail.area_id as area_id, SUM(CASE WHEN order_type = 'fit_institution' THEN 1 ELSE 0 END) fitfacility
		                from order_after_production left join child_basic_detail ON
                        order_after_production.child_id=child_basic_detail.child_id
                        left join child_area_detail
                        ON child_basic_detail.district_id =child_area_detail.area_id
		                WHERE
		                STR_TO_DATE(idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' GROUP BY child_area_detail.area_name")->result_array();
	  		
	  		$otherplace=$this->db->query("select child_area_detail.area_id as area_id, SUM(CASE WHEN order_type = 'other_place' THEN 1 ELSE 0 END) otherplace
		                from order_after_production left join child_basic_detail ON
                        order_after_production.child_id=child_basic_detail.child_id
                        left join child_area_detail
                        ON child_basic_detail.district_id =child_area_detail.area_id
		                WHERE
		                STR_TO_DATE(idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' GROUP BY child_area_detail.area_name")->result_array();
	  		
	  		$others=$this->db->query("select child_area_detail.area_id as area_id, SUM(CASE WHEN order_type = 'Others' THEN 1 ELSE 0 END) Others
		                from order_after_production left join child_basic_detail ON
                        order_after_production.child_id=child_basic_detail.child_id
                        left join child_area_detail
                        ON child_basic_detail.district_id =child_area_detail.area_id
		                WHERE
		                STR_TO_DATE(idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' GROUP BY child_area_detail.area_name")->result_array();
	
	  		
	  		$child_dist_id =$this->db->query("select child_area_detail.area_id as area_id from child_area_detail
		        left join child_basic_detail ON child_area_detail.area_id=child_basic_detail.district_id
		       GROUP BY child_area_detail.area_id ")->result_array();
	  		
	 	
	  	}
	  	
	  	else  if($roles_id==13 || $roles_id==20 )//for DLC
	  	{
	  		
	  		$child_dist =$this->db->query("select child_area_detail.area_name as area_name,child_area_detail.area_id as area_id from child_area_detail
		        left join child_basic_detail ON child_area_detail.area_id=child_basic_detail.district_id WHERE
		 child_basic_detail.district_id COLLATE utf8_unicode_ci in (select district_id from division_details  where division_details.division_id='" .$division_id."') GROUP BY child_area_detail.area_name")->result_array();
	  		$ccii=$this->db->query("select child_area_detail.area_id as area_id, SUM(CASE WHEN order_type = 'cci' THEN 1 ELSE 0 END) cci
		                from order_after_production left join child_basic_detail ON
                        order_after_production.child_id=child_basic_detail.child_id
                        left join child_area_detail
                        ON child_basic_detail.district_id =child_area_detail.area_id
		                WHERE
		                STR_TO_DATE(idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' GROUP BY child_area_detail.area_name")->result_array();
	  		
	  		$parents=$this->db->query("select child_area_detail.area_id as area_id, SUM(CASE WHEN order_type = 'Parents' THEN 1 ELSE 0 END) Parents
		                from order_after_production left join child_basic_detail ON
                        order_after_production.child_id=child_basic_detail.child_id
                        left join child_area_detail
                        ON child_basic_detail.district_id =child_area_detail.area_id
		                WHERE
		                STR_TO_DATE(idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' GROUP BY child_area_detail.area_name")->result_array();
	  		
	  		
	  		$fitperson=$this->db->query("select child_area_detail.area_id as area_id, SUM(CASE WHEN order_type = 'fit_person' THEN 1 ELSE 0 END) fitperson
		                from order_after_production left join child_basic_detail ON
                        order_after_production.child_id=child_basic_detail.child_id
                        left join child_area_detail
                        ON child_basic_detail.district_id =child_area_detail.area_id
		                WHERE
		                STR_TO_DATE(idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' GROUP BY child_area_detail.area_name")->result_array();
	  		
	  		$fitinstitution=$this->db->query("select child_area_detail.area_id as area_id, SUM(CASE WHEN order_type = 'fit_institution' THEN 1 ELSE 0 END) fitfacility
		                from order_after_production left join child_basic_detail ON
                        order_after_production.child_id=child_basic_detail.child_id
                        left join child_area_detail
                        ON child_basic_detail.district_id =child_area_detail.area_id
		                WHERE
		                STR_TO_DATE(idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' GROUP BY child_area_detail.area_name")->result_array();
	  		
	  		$otherplace=$this->db->query("select child_area_detail.area_id as area_id, SUM(CASE WHEN order_type = 'other_place' THEN 1 ELSE 0 END) otherplace
		                from order_after_production left join child_basic_detail ON
                        order_after_production.child_id=child_basic_detail.child_id
                        left join child_area_detail
                        ON child_basic_detail.district_id =child_area_detail.area_id
		                WHERE
		                STR_TO_DATE(idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' GROUP BY child_area_detail.area_name")->result_array();
	  		
	  		$others=$this->db->query("select child_area_detail.area_id as area_id, SUM(CASE WHEN order_type = 'Others' THEN 1 ELSE 0 END) Others
		                from order_after_production left join child_basic_detail ON
                        order_after_production.child_id=child_basic_detail.child_id
                        left join child_area_detail
                        ON child_basic_detail.district_id =child_area_detail.area_id
		                WHERE
		                STR_TO_DATE(idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' GROUP BY child_area_detail.area_name")->result_array();
	  		
	  		
	  		$child_dist_id =$this->db->query("select child_area_detail.area_id as area_id from child_area_detail
		        left join child_basic_detail ON child_area_detail.area_id=child_basic_detail.district_id
		       GROUP BY child_area_detail.area_id ")->result_array();
	  		
	  	
	  	}
	  	
	  	//added by pooja ends
	  	//district wise resuced child ends
	  	$cumulative = array();
	  	for($i=0; $i<sizeof($child_dist); $i++){
	  		$cumulative[$i][0]=$child_dist[$i]['area_name'];
	  		$cumulative[$i][1]=0;
	  		$cumulative[$i][2]=0;
	  		$cumulative[$i][3]=0;
	  		$cumulative[$i][4]=0;
	  		$cumulative[$i][5]=0;
	  		$cumulative[$i][6]=0;
	  		$cumulative[$i][7]=0;
	  		
	  		
	  		
	  		if(sizeof($ccii)>0)
	  		{
	  			foreach($ccii as $row)
	  			{
	  				
	  				if($child_dist[$i]['area_id']==$row['area_id'])
	  				{
	  					
	  					$cumulative[$i][1]=$row['cci'];
	  					break;
	  				}
	  				else{
	  					$cumulative[$i][1]=0;
	  				}
	  			}
	  			
	  		}
	  		
	  		
	  		
	  		if(sizeof($parents)>0)
	  		{
	  			foreach($parents as $row)
	  			{
	  				
	  				if($child_dist[$i]['area_id']==$row['area_id'])
	  				{
	  					
	  					$cumulative[$i][2]=$row['Parents'];
	  					break;
	  				}
	  				else{
	  					$cumulative[$i][2]=0;
	  				}
	  			}
	  			
	  		}
	  		
	  		
	  		
	  		if(sizeof($fitperson)>0)
	  		{
	  			foreach($fitperson as $row)
	  			{
	  				
	  				if($child_dist[$i]['area_id']==$row['area_id'])
	  				{
	  					
	  					$cumulative[$i][3]=$row['fitperson'];
	  					break;
	  				}
	  				else{
	  					$cumulative[$i][3]=0;
	  				}
	  			}
	  			
	  		}
	  		
	  		
	  		if(sizeof($fitinstitution)>0)
	  		{
	  			foreach($fitinstitution as $row)
	  			{
	  				
	  				if($child_dist[$i]['area_id']==$row['area_id'])
	  				{
	  					
	  					$cumulative[$i][4]=$row['fitfacility'];
	  					break;
	  				}
	  				else{
	  					$cumulative[$i][4]=0;
	  				}
	  			}
	  			
	  		}
	  		
	  		if(sizeof($otherplace)>0)
	  		{
	  			foreach($otherplace as $row)
	  			{
	  				
	  				if($child_dist[$i]['area_id']==$row['area_id'])
	  				{
	  					
	  					$cumulative[$i][5]=$row['otherplace'];
	  					break;
	  				}
	  				else{
	  					$cumulative[$i][5]=0;
	  				}
	  			}
	  			
	  		}
	  		
	  		if(sizeof($others)>0)
	  		{
	  			foreach($others as $row)
	  			{
	  				
	  				if($child_dist[$i]['area_id']==$row['area_id'])
	  				{
	  					
	  					$cumulative[$i][6]=$row['Others'];
	  					break;
	  				}
	  				else{
	  					$cumulative[$i][6]=0;
	  				}
	  			}
	  			
	  		}
	  		
	  		if(sizeof($child_dist_id)>0)
	  		{
	  			foreach($child_dist_id as $row)
	  			{
	  				
	  				if($child_dist[$i]['area_id']==$row['area_id'])
	  				{
	  					$cumulative[$i][7]=$row['area_id'];
	  					break;
	  				}
	  				else{
	  					$cumulative[$i][7]=0;
	  				}
	  			}
	  			
	  		}
	  		
	  		
	  		
	  		
	  		
	  		//$cumulative[$i][7]=$cumulative[$i][1]+$cumulative[$i][2]+$cumulative[$i][3]+$cumulative[$i][4]+$cumulative[$i][5]+$cumulative[$i][6]+$cumulative[$i][7];
	  		$tot1+=$cumulative[$i][1];
	  		$tot2+=$cumulative[$i][2];
	  		$tot3+=$cumulative[$i][3];
	  		$tot4+=$cumulative[$i][4];
	  		$tot5+=$cumulative[$i][5];
	  		$tot6+=$cumulative[$i][6];
	  		$tot7+=$cumulative[$i][7];
	  		
	  		
	  		
	  		
	  	}
	  	
	  	if($roles_id==10 || $roles_id==11 || $roles_id==21 || $roles_id==12 || $roles_id==22 || $roles_id==13 || $roles_id==20 ){
	  		$cumulative[sizeof($child_dist)][0]="<strong>Total</strong>";
	  		$cumulative[sizeof($child_dist)][1]="<strong>".$tot1."<strong>";
	  		$cumulative[sizeof($child_dist)][2]="<strong>".$tot2."<strong>";
	  		$cumulative[sizeof($child_dist)][3]="<strong>".$tot3."<strong>";
	  		$cumulative[sizeof($child_dist)][4]="<strong>".$tot4."<strong>";
	  		$cumulative[sizeof($child_dist)][5]="<strong>".$tot5."<strong>";
	  		$cumulative[sizeof($child_dist)][6]="<strong>".$tot6."<strong>";
	  		$cumulative[sizeof($child_dist)][7]="<strong>".$tot7."<strong>";
	  		
	  	}
	  	
	  	
	  	return($cumulative);
	  }
	  //code ended by poojashree rout 28/06/2017 
	  
	  
	 //code added by poojashree
	  public function	get_details_order($from,$to,$type,$area,$param1="")
       {
       	$ses_ids=$this->session->userdata('login_user_id');
       	$role=$this->get_role_id($ses_ids);
       	foreach($role as $rolep):
        $roles_id=$rolep['account_role_id'];
       	$dist_id=$rolep['district_id'];
       	endforeach;
       	
       	if($roles_id==2 || $roles_id==7 || $roles_id==5 || $roles_id==6 || $roles_id==8 || $roles_id==14 || $roles_id==16 || $roles_id==18 || $roles_id==19)
       	{
       		
       		$query1="SELECT * from child_area_detail
            join  child_basic_detail ON
            child_area_detail.area_id=child_basic_detail.district_id
            join order_after_production ON
            child_basic_detail.child_id=order_after_production.child_id
            where order_type='".$type."' AND area_id='".$area."' AND
            STR_TO_DATE(idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."'AND child_area_detail.area_id='".$dist_id."'";
       		
       	}
       	
       	
       
       	if($roles_id==10 || $roles_id==11  || $roles_id==12 || $roles_id==22)//for lC and Lc operator
       	{
       		
	    	$query1="SELECT * from child_area_detail
            join  child_basic_detail ON
            child_area_detail.area_id=child_basic_detail.district_id
            join order_after_production ON
            child_basic_detail.child_id=order_after_production.child_id
            where order_type='".$type."' AND area_id='".$area."' AND
            STR_TO_DATE(idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."'";
	    	//echo $query1;
	    	
       	}	
       	
       	
        if($roles_id==13 || $roles_id==20 )//for DLC
       	{
       		$query1="SELECT * from child_area_detail
            join  child_basic_detail ON
            child_area_detail.area_id=child_basic_detail.district_id
            join order_after_production ON
            child_basic_detail.child_id=order_after_production.child_id
            where order_type='".$type."' AND area_id='".$area."' AND
            STR_TO_DATE(idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."'";
       	}
	if($param1=="pdf")
      {
      $query1="SELECT * from child_area_detail
           join  child_basic_detail ON
           child_area_detail.area_id=child_basic_detail.district_id
           join order_after_production ON
           child_basic_detail.child_id=order_after_production.child_id
           where order_type='".$type."' AND area_id='".$area."' AND
           STR_TO_DATE(idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."'";
      
      }
       	
       	
		return $this->db->query($query1)->result_array();
	
		
       }
	  
	  //code added by pooja
	  //district wise rescued child list
	  
       public function	get_details_rescuedchild_district($from,$to,$type,$area)
       {
       	$ses_ids=$this->session->userdata('login_user_id');
       	$role=$this->get_role_id($ses_ids);
       	foreach($role as $rolep):
       	$roles_id=$rolep['account_role_id'];
       	$dist_id=$rolep['district_id'];
       	endforeach;
       	$newdistrict= $this->db->query("select  division_id from division_details  where division_details.district_id='" . $dist_id ."' ")->result_array();
       	foreach($newdistrict as $newdistricts):
       	$division_id=$newdistricts['division_id'];
       	endforeach;
       	
       	
       	if($roles_id==7||$roles_id==5||$roles_id==2|| $roles_id==6 || $roles_id==8 || $roles_id==14 || $roles_id==16 || $roles_id==18 || $roles_id==19)
       	{
       		
       		$query1="SELECT * from child_area_detail
            join  child_basic_detail ON
            child_area_detail.area_id=child_basic_detail.district_id
			join staff ON
			child_basic_detail.uid=staff.staff_id
			join account_role ON
			staff.account_role_id=account_role.account_role_id
			WHERE
		 STR_TO_DATE(idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."'
         AND child_area_detail.area_id='".$area."' AND
         staff.name='".$type."'";
       		
       		
       		
       	}
       	
       	
       	
       	if($roles_id==10 || $roles_id==11  || $roles_id==12 || $roles_id==22)//for lC and Lc operator
       	{
       		
       		$query1="SELECT * from child_area_detail
            join  child_basic_detail ON
            child_area_detail.area_id=child_basic_detail.district_id
			join staff ON
			child_basic_detail.uid=staff.staff_id
			join account_role ON
			staff.account_role_id=account_role.account_role_id
			WHERE
		 STR_TO_DATE(idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."'
         AND child_area_detail.area_id='".$area."' AND
         staff.name='".$type."'";
       		
       	}
       	
       	
       	if($roles_id==13 || $roles_id==20 )//for DLC
       	{
       		$query1="SELECT * from child_area_detail
            join  child_basic_detail ON
            child_area_detail.area_id=child_basic_detail.district_id
			join staff ON
			child_basic_detail.uid=staff.staff_id
			join account_role ON
			staff.account_role_id=account_role.account_role_id
			WHERE
		 STR_TO_DATE(idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."'
         AND child_area_detail.area_id='".$area."' AND
         staff.name='".$type."' AND child_basic_detail.district_id COLLATE utf8_unicode_ci in (select district_id from division_details  where division_details.division_id='" .$division_id."') GROUP BY child_area_detail.area_name";
       		
       		
       		
       	}
       	
       	
       	return $this->db->query($query1)->result_array();
       	
       	
       }
       
   
	  
	  //code ended by poojashree
	
	  //child rescued outside bihar data
	  public function report_details_outside($from,$to,$state="")
	  {
	  	
	  	
	  	if($state){
	  		$child_dist =$this->db->query("select child_area_detail.area_name as area_name,child_area_detail.area_id as area_id from child_basic_detail
		        left join child_outside_state ON child_basic_detail.child_id=child_outside_state.child_id
		        left join child_area_detail ON child_outside_state.outside_state=child_area_detail.area_id where child_outside_state.outside_state!='IND010' and child_area_detail.area_id='".$state."'
		       GROUP BY child_area_detail.area_name  ")->result_array();
	  		$child_outside_state=$this->db->query("select count(child_basic_detail.child_id) as count,child_area_detail.area_id as area_id from child_basic_detail
		        left join child_outside_state ON child_basic_detail.child_id=child_outside_state.child_id
		        left join child_area_detail ON child_outside_state.outside_state=child_area_detail.area_id
		       WHERE basic_place_of_rescue='Outside State' AND child_outside_state.outside_state='".$state."'  AND STR_TO_DATE(idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' GROUP BY child_area_detail.area_name ")->result_array();
	  		$child_dist_id =$this->db->query("select child_area_detail.area_id as area_id from child_basic_detail
		        left join child_outside_state ON child_basic_detail.child_id=child_outside_state.child_id
		        left join child_area_detail ON child_outside_state.outside_state=child_area_detail.area_id where child_outside_state.outside_state!='IND010'order by area_id")->result_array();
	  		
	  	}
	  	
	  	
	  	else{
	  		
	  		$child_dist =$this->db->query("select child_area_detail.area_name as area_name,child_area_detail.area_id as area_id from child_basic_detail
		        left join child_outside_state ON child_basic_detail.child_id=child_outside_state.child_id
		        left join child_area_detail ON child_outside_state.outside_state=child_area_detail.area_id where child_outside_state.outside_state!='IND010'
		        GROUP BY child_area_detail.area_name LIMIT 1, 9999999  ")->result_array();
	  		$child_outside_state=$this->db->query("select count(child_basic_detail.child_id) as count,child_area_detail.area_id as area_id from child_basic_detail
		        left join child_outside_state ON child_basic_detail.child_id=child_outside_state.child_id
		        left join child_area_detail ON child_outside_state.outside_state=child_area_detail.area_id
		       WHERE basic_place_of_rescue='Outside State' AND child_outside_state.outside_state!='IND010'  AND STR_TO_DATE(idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' GROUP BY child_area_detail.area_name LIMIT 1, 9999999 ")->result_array();
	  		$child_dist_id =$this->db->query("select child_area_detail.area_id as area_id from child_basic_detail
		        left join child_outside_state ON child_basic_detail.child_id=child_outside_state.child_id
		        left join child_area_detail ON child_outside_state.outside_state=child_area_detail.area_id where child_outside_state.outside_state!='IND010'order by area_id")->result_array();
	  		
	  	}
	  	
	  	$cumulative = array();
	  	for($i=0; $i<sizeof($child_dist); $i++){
	  		$cumulative[$i][0]=$child_dist[$i]['area_name'];
	  		$cumulative[$i][1]=0;
	  		$cumulative[$i][2]=0;
	  		
	  		
	  		
	  		
	  		
	  		if(sizeof($child_outside_state)>0)
	  		{
	  			foreach($child_outside_state as $row)
	  			{
	  				
	  				if($child_dist[$i]['area_id']==$row['area_id'])
	  				{
	  					
	  					$cumulative[$i][1]=$row['count'];
	  					break;
	  				}
	  				else{
	  					$cumulative[$i][1]=0;
	  				}
	  			}
	  			
	  		}
	  		
	  		if(sizeof($child_dist_id)>0)
	  		{
	  			foreach($child_dist_id as $row)
	  			{
	  				
	  				if($child_dist[$i]['area_id']==$row['area_id'])
	  				{
	  					$cumulative[$i][2]=$row['area_id'];
	  					break;
	  				}
	  				else{
	  					$cumulative[$i][2]=0;
	  				}
	  			}
	  			
	  		}
	  		
	  		
	  		
	  		
	  		
	  		$cumulative[$i][5]=$cumulative[$i][1]+$cumulative[$i][2]+$cumulative[$i][3]+$cumulative[$i][4];
	  		$tot1+=$cumulative[$i][1];
	  		$tot2+=$cumulative[$i][2];
	  		
	  		
	  		
	  	}
	  	
	  	if(!$state){
	  	$cumulative[sizeof($child_dist)][0]="<strong>Total</strong>";
	  	$cumulative[sizeof($child_dist)][1]="<strong>".$tot1."<strong>";
	  	$cumulative[sizeof($child_dist)][2]="<strong>".$tot2."<strong>";
	  	}
	  	
	  	
	  	return($cumulative);
	  }

  /*=======================Management report==========================*/
	  public function get_report_sys_access_data($from,$to,$dist,$user)
	{
		$ses_ids=$this->session->userdata('login_user_id');
		$role=$this->get_role_id($ses_ids);
		foreach($role as $rolep):
		$roles_id=$rolep['account_role_id'];
		$dist_id=$rolep['district_id'];
		endforeach;
		$newdistrict= $this->db->query("select  division_id from division_details  where division_details.district_id='" . $dist_id ."' ")->result_array();
		foreach($newdistrict as $newdistricts):
	     $division_id=$newdistricts['division_id'];
		endforeach;
		
		//code add by poojashree
		//for showing lc and ls system access 
		$dist=$dist_id;
		
		if($roles_id==10 || $roles_id==11 || $roles_id==21 || $roles_id==12 || $roles_id==22)
		{
		
		
		$quer="select count(history_update.id) as count,staff.user_name as name,child_area_detail.area_name as district,MAX(history_update.date_time) as last_access  from staff
		      left join history_update on history_update.uid=staff.staff_id AND
			  STR_TO_DATE(history_update.date_time,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."'
			  join child_area_detail on  child_area_detail.area_id=staff.district_id
		       where  staff.name='".$user."' group by staff.user_name order by staff.user_name";
		}      
		   
		if($roles_id==13 || $roles_id==20)
		{
			
			
			$quer="select count(history_update.id) as count,staff.user_name as name,child_area_detail.area_name as district,MAX(history_update.date_time) as last_access  from staff
		      left join history_update on history_update.uid=staff.staff_id AND
			  STR_TO_DATE(history_update.date_time,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."'
			  join child_area_detail on  child_area_detail.area_id=staff.district_id
		       where  staff.name='".$user."' group by staff.user_name order by staff.user_name";
		}
		
		
		
		
		if($roles_id==7||$roles_id==5||$roles_id==2|| $roles_id==6 || $roles_id==8 || $roles_id==14 || $roles_id==16 || $roles_id==18 || $roles_id==19)
		{
		$quer="select count(history_update.id) as count,staff.user_name as name,child_area_detail.area_name as district,MAX(history_update.date_time) as last_access  from staff
		      left join history_update on history_update.uid=staff.staff_id AND
			  STR_TO_DATE(history_update.date_time,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."'
			  join child_area_detail on  child_area_detail.area_id=staff.district_id
		      where  staff.name='".$user."' and child_area_detail.area_id= '".$dist."' ";
		}
		return $this->db->query($quer)->result_array();

	}

	public function get_report_last_login_data($from,$to,$dist,$user)
	{
		//echo $user;
		$ses_ids=$this->session->userdata('login_user_id');
		 $role=$this->get_role_id($ses_ids);
		foreach($role as $rolep):
		$roles_id=$rolep['account_role_id'];
	    $dist_id=$rolep['district_id'];
		endforeach;
		
		//code add by poojashree
		//for showing lc and ls last login
		$dist=$dist_id;
		if($roles_id==10 || $roles_id==11 || $roles_id==22){		
  			$quer="select count(login_history.id) as count,MAX(login_history.id) as id,staff.user_name as name,child_area_detail.area_name as district,MAX(login_history.login_date) as login_date,MAX(login_history.ip_address )as ip  from staff
		      left join login_history on login_history.u_id=staff.staff_id AND
			  STR_TO_DATE(login_history.login_date,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."'
			  join child_area_detail on  child_area_detail.area_id=staff.district_id
		       where  staff.name='".$user."' group by staff.user_name order by staff.staff_id DESC";
        } else{      
		      //modified by poojashree
		      //For showing result only to district to login user Ls
        $quer="select count(login_history.id) as count,MAX(login_history.id) as id,staff.user_name as name,child_area_detail.area_name as district,MAX(login_history.login_date) as login_date,MAX(login_history.ip_address )as ip  from staff
		      left join login_history on login_history.u_id=staff.staff_id AND
			  STR_TO_DATE(login_history.login_date,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."'
			  join child_area_detail on  child_area_detail.area_id=staff.district_id
		where  staff.account_role_id='".$roles_id."' and child_area_detail.area_id= '".$dist."' ";
        }
        //echo $quer;
    
		
		return $this->db->query($quer)->result_array();

	}
  //get  of cwc delay in order passing
  public function get_report_cwc_delay_data($from,$to)
  {
	  $ses_ids=$this->session->userdata('login_user_id');
			$role=$this->get_role_id($ses_ids);
			  foreach($role as $rolep):
				$roles_id=$rolep['account_role_id'];
				$dist_id=$rolep['district_id'];
			  endforeach;
			  $newdistrict= $this->db->query("select  division_id from division_details  where division_details.district_id='" . $dist_id ."' ")->result_array();
			  foreach($newdistrict as $newdistricts):
			  $division_id=$newdistricts['division_id'];
			  endforeach;
			  
			  
			  
			  if($roles_id==10 || $roles_id==11 || $roles_id==21  || $roles_id==12 || $roles_id==22)//for lC and Lc operator
			  {
   $quer="select child_basic_detail.child_id as child_id,(select child_area_detail.area_name from child_area_detail where child_basic_detail.district=child_area_detail.area_id ) as child_dist,order_after_production.date_of_production as date_of_production, order_after_production.parent_date as parent_date,order_after_production.cci_date as cci_date,order_after_production.fitperson_date as fitperson_date,order_after_production.otherplace_date as otherplace_date,order_after_production.fitinstitution_date fitinstitution_date,final_order.final_order_date as final_order_date from final_order
		  left join child_basic_detail on final_order.child_id=child_basic_detail.child_id
          left join order_after_production on final_order.child_id=order_after_production.child_id
			     where  STR_TO_DATE(final_order.final_order_date,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' ";
				 
				// echo  $quer ;
				 
			  }
			  else if($roles_id==2 || $roles_id==5 || $roles_id==7)//for lC and Lc operator
			  {
			  	$quer="select child_basic_detail.child_id as child_id,(select child_area_detail.area_name from child_area_detail where child_basic_detail.district=child_area_detail.area_id ) as child_dist,order_after_production.date_of_production as date_of_production, order_after_production.parent_date as parent_date,order_after_production.cci_date as cci_date,order_after_production.fitperson_date as fitperson_date,order_after_production.otherplace_date as otherplace_date,order_after_production.fitinstitution_date fitinstitution_date,final_order.final_order_date as final_order_date from final_order
		  left join child_basic_detail on final_order.child_id=child_basic_detail.child_id
          left join order_after_production on final_order.child_id=order_after_production.child_id
			     where  child_basic_detail.district_id ='" .$dist_id ."' AND  STR_TO_DATE(final_order.final_order_date,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' ";
			  	
			  }
			  else{
				  
				  $quer="select child_basic_detail.child_id as child_id,(select child_area_detail.area_name from child_area_detail where child_basic_detail.district=child_area_detail.area_id ) as child_dist,order_after_production.date_of_production as date_of_production, order_after_production.parent_date as parent_date,order_after_production.cci_date as cci_date,order_after_production.fitperson_date as fitperson_date,order_after_production.otherplace_date as otherplace_date,order_after_production.fitinstitution_date fitinstitution_date,final_order.final_order_date as final_order_date from final_order
		  left join child_basic_detail on final_order.child_id=child_basic_detail.child_id
          left join order_after_production on final_order.child_id=order_after_production.child_id
			     where  child_basic_detail.district_id COLLATE utf8_unicode_ci in (select district_id from division_details  where division_details.division_id='" .$division_id."') AND  STR_TO_DATE(final_order.final_order_date,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' ";
				  
			  }

  //print_r($this->db->query($quer)->result_array());
		return $this->db->query($quer)->result_array();


  }
      //get middlemen/Agents 
     public function get_middlemen_data($from,$to)
  {
    $quer="SELECT name,alias,contact,address,other_details from middlemen_reg where created_date BETWEEN '".$from."' AND '".$to."'";

 
		return $this->db->query($quer)->result_array();


  }	  
   public function get_child_rescued_repeatedly($from,$to)//code by dipti
	 {
		  $ses_ids=$this->session->userdata('login_user_id');
			$role=$this->get_role_id($ses_ids);
			  foreach($role as $rolep):
				$roles_id=$rolep['account_role_id'];
				$dist_id=$rolep['district_id'];
			  endforeach;
			  
			  $newdistrict= $this->db->query("select  division_id from division_details  where division_details.district_id='" . $dist_id ."' ")->result_array();
			  foreach($newdistrict as $newdistricts):
			  $division_id=$newdistricts['division_id'];
			  endforeach;
			  
			  
			  if($roles_id==10 || $roles_id==11 || $roles_id==21  || $roles_id==12 || $roles_id==22)//for lC and Lc operator
			  {
				   $quer="SELECT
				  DISTINCT(adhar_apply_no),child_id,child_name,(select child_area_detail.area_name from child_area_detail where child_basic_detail.district=child_area_detail.area_id ) as child_dist, father_name,postal_address,COUNT(*)
				FROM
				child_basic_detail where  idate_of_rescue BETWEEN  '".$from."' AND '".$to."'  GROUP BY adhar_apply_no  HAVING	COUNT(*) > 1";
			  }
			  else if($roles_id==13 || $roles_id==20 )//FOR DLC
			  {
				 $quer="SELECT
				  DISTINCT(adhar_apply_no),child_id,child_name,(select child_area_detail.area_name from child_area_detail where child_basic_detail.district=child_area_detail.area_id ) as child_dist, father_name,postal_address,COUNT(*)
				FROM
				child_basic_detail where child_basic_detail.district_id COLLATE utf8_unicode_ci in (select district_id from division_details  where division_details.division_id='" .$division_id."') AND  idate_of_rescue BETWEEN  '".$from."' AND '".$to."'  GROUP BY adhar_apply_no  HAVING	COUNT(*) > 1"; 
			  }
			  else if($roles_id==2 || $roles_id==5 || $roles_id==7 || $roles_id==6 || $roles_id==8 || $roles_id==14 || $roles_id==16 || $roles_id==18 || $roles_id==19)//FOR DLC
			  {
			  	$quer="SELECT
				  DISTINCT(adhar_apply_no),child_id,child_name,(select child_area_detail.area_name from child_area_detail where child_basic_detail.district=child_area_detail.area_id ) as child_dist, father_name,postal_address,COUNT(*)
				FROM
				child_basic_detail where child_basic_detail.district_id='" .$dist_id ."' AND  idate_of_rescue BETWEEN  '".$from."' AND '".$to."'  GROUP BY adhar_apply_no  HAVING	COUNT(*) > 1";
			  }
	return $this->db->query($quer)->result_array();


	 }     
	  //Dipti's code 
	  public function wages_collected($from,$to)
		  {
			  
			  $ses_ids=$this->session->userdata('login_user_id');
			  $role=$this->get_role_id($ses_ids);
			  foreach($role as $rolep):
				$roles_id=$rolep['account_role_id'];
				$dist_id=$rolep['district_id'];
			  endforeach;
			  $newdistrict= $this->db->query("select  division_id from division_details  where division_details.district_id='" . $dist_id ."' ")->result_array();
			  foreach($newdistrict as $newdistricts):
			  $division_id=$newdistricts['division_id'];
			  endforeach;
			  
			  if($roles_id==10 || $roles_id==11 || $roles_id==21  || $roles_id==12 || $roles_id==22)//for lC and Lc operator
			{
			$sql = "SELECT date_claim,amount_wages_collected,total_work,balance_wages_amount,child_wages.child_id as child_id,remaining_amount,claim_amout_deposit_status FROM child_wages 
				LEFT JOIN child_basic_detail ON child_basic_detail.child_id=child_wages.child_id COLLATE utf8_unicode_ci
						WHERE child_basic_detail.idate_of_rescue BETWEEN  '".$from."' AND '".$to."'  " ;
						
						
			}
			else if($roles_id==13 || $roles_id==20)
			{	
					$sql = "SELECT date_claim,amount_wages_collected,total_work,balance_wages_amount,child_wages.child_id as child_id,remaining_amount,claim_amout_deposit_status FROM child_wages 
				LEFT JOIN child_basic_detail ON child_basic_detail.child_id=child_wages.child_id COLLATE utf8_unicode_ci
						WHERE child_basic_detail.district_id COLLATE utf8_unicode_ci in (select district_id from division_details  where division_details.division_id='" .$division_id."') AND child_basic_detail.idate_of_rescue BETWEEN  '".$from."' AND '".$to."'  " ;
			}
			else if($roles_id==2 || $roles_id==5 || $roles_id==7 || $roles_id==6 || $roles_id==8 || $roles_id==14 || $roles_id==16 || $roles_id==18 || $roles_id==19)
			{
				$sql = "SELECT date_claim,amount_wages_collected,total_work,balance_wages_amount,child_wages.child_id as child_id,remaining_amount,claim_amout_deposit_status FROM child_wages
				LEFT JOIN child_basic_detail ON child_basic_detail.child_id=child_wages.child_id COLLATE utf8_unicode_ci
						WHERE child_basic_detail.district_id='" .$dist_id ."' AND child_basic_detail.idate_of_rescue BETWEEN  '".$from."' AND '".$to."'  " ;
			}
				
						$query = $this->db->query($sql);
						return $query->result_array();
		
		  }
	  
		   public function communication($from,$to)
		  {
			 $sql = "select comunication.role_name,comunication.created,comunication.child_id,comunication.from_dept,comunication.to_dept,
			 comunication.massage, child_area_detail.area_id,child_area_detail.area_name,staff.name,staff.district_id
		FROM  child_area_detail 
		LEFT JOIN staff ON child_area_detail.area_id = staff.district_id
		 LEFT JOIN comunication ON child_area_detail.area_id = comunication.to_dept
		 WHERE created  BETWEEN (SELECT case when '$from' = '' then created else '$from' end)
						AND (SELECT case when '$to' = '' then created else '$to' end) AND  (from_dept = 'LC' OR from_dept='JLC') group by comunication.id" ;
			 $query = $this->db->query($sql);
						return $query->result_array();
						
		
		  }
		  //code by Dipti
		  function getAllChildID($from,$to){
			  $ses_ids=$this->session->userdata('login_user_id');
			  $role=$this->get_role_id($ses_ids);
			  foreach($role as $rolep):
				$roles_id=$rolep['account_role_id'];
				$dist_id=$rolep['district_id'];
			  endforeach;
			
			  if($roles_id==10 || $roles_id==11 || $roles_id==21  || $roles_id==12 || $roles_id==22)//for lC and Lc operator
			  {
	$sql = "select child_basic_detail.child_id,final_order.final_order_date FROM  final_order 
		LEFT JOIN child_basic_detail ON child_basic_detail.child_id = final_order.child_id WHERE final_order_date  BETWEEN (SELECT case when '$from' = '' then final_order_date else '$from' end)
		AND (SELECT case when '$to' = '' then final_order_date else '$to' end)";
		   }
			  else if($roles_id==13)
			  {
				  
				  $sql = "select child_basic_detail.child_id,final_order.final_order_date FROM  final_order 
		LEFT JOIN child_basic_detail ON child_basic_detail.child_id = final_order.child_id WHERE  child_basic_detail.district_id COLLATE utf8_unicode_ci in (select district_id from division_details  where division_details.division_id='" .$dist_id ."') AND final_order_date  BETWEEN (SELECT case when '$from' = '' then final_order_date else '$from' end)
		AND (SELECT case when '$to' = '' then final_order_date else '$to' end)";
				 
			}
			
			else if($roles_id==2 || $roles_id==5 || $roles_id==7)
			{
				
				$sql = "select child_basic_detail.child_id,final_order.final_order_date FROM  final_order
		LEFT JOIN child_basic_detail ON child_basic_detail.child_id = final_order.child_id WHERE  child_basic_detail.district_id='" .$dist_id ."' AND final_order_date  BETWEEN (SELECT case when '$from' = '' then final_order_date else '$from' end)
		AND (SELECT case when '$to' = '' then final_order_date else '$to' end)";
				
			}
	
   // $sql = "SELECT child_id from child_basic_detail LIMIT 50" ;//LIMIT 50
    $result = $this->db->query($sql);
    $result = $result->result_array();
    return $result;
  }
  //get the additional details by Dipti
  function get_status_additional_details($from,$to)
  {  	   
			$tables = array(
			  'child_educational_detail' => array(
				 'school_attended',
				 'education_level',
				 'details_of_school'
			   ),
			 'child_family_economy' => array(
				 'roofing_quality',
				 'bpl_no',
				 'card_no',
				 'electricity_facilities'
			   ), 
			'child_habit_detail' => array(
				 'habit',
				 'habit_other',
               'hobbies'
			   ),
			   'child_employment_status' => array(
				 'working_hours',
				 'abuse_met',
               'causing_injury'
			   ),
			 'child_reason_labour' => array(
				 'reason_leaving_family',
				 'parent_prior_institute',
                 'reason_for_leaving',
			     'guardian_rel'
			   ),
			   'child_health_detail' => array(
				 'details_of_handicap',
				 'mental_handicap',
				 'health_card_issued',
                  'blood_group'
			   ),
			   'child_social_history' => array(
				 'details_friendship',
				 'purpose_membership',
				 'details_friendship_other',
                  'social_acceptance'
			   ),
			'child_family_detail' => array(
				 'father_sibling',
				 'mother_sibling',
				 'total_no_family_male'
				 )
			  );
			
			$childIDList = $this->getAllChildID($from,$to);
			
			//print_r($childIDList);exit;
			$finalArr = array();
			$cnt = 0;
			$data=array();
			foreach ($childIDList as $child) {
		     $id=$child['child_id'];
			 
			 $table=$this->getstuidCount($tables,$id);
			 $arr=array('child_id'=>$id,'tables'=>$table,'final_order_date'=>$child['final_order_date']);
			 array_push($data,$arr);
			}
			
			return $data;
  }
  //get the counts of data exists or not in the tables passed as argumnet against the CHILD_ID
  function getstuidCount($table_name, $id){
  	
	  //additional details 
	   $additional_details=array(
		"child_educational_detail"=>"Education",
		"child_family_detail"=>"Family",
		"child_family_economy"=>"Economy",
		"child_habit_detail"=>"Habit",
		"child_employment_status"=>"Status",
		"child_reason_labour"=>"Reasons",
		"child_health_detail"=>"Health",
		"child_social_history"=>"Social",
		);
		$ses_ids=$this->session->userdata('login_user_id');
			$role=$this->get_role_id($ses_ids);
			  foreach($role as $rolep):
				$roles_id=$rolep['account_role_id'];
				$dist_id=$rolep['district_id'];
			  endforeach;
			  
		$data = array();
		$count=0;
		foreach ($table_name as $key => $value) {
		 
		  $columns = '';
		  
		  foreach ($value as $cols) {
		  	if($roles_id==10 || $roles_id==11 || $roles_id==21 || $roles_id==12 || $roles_id==22)//for lC and Lc operator
			   {
			  $sql = "SELECT $cols from $key where child_id = '{$id}'";
			   }
			   else if($roles_id==13)
			   {
				   $sql = "SELECT $cols from $key JOIN child_basic_detail ON child_basic_detail.child_id= $key. child_id where  child_basic_detail.district_id COLLATE utf8_unicode_ci in (select district_id from division_details  where division_details.division_id='" .$dist_id ."') AND   $key.child_id = '{$id}' "; 
			   }
			   else if($roles_id==2 || $roles_id==5 || $roles_id==7)
			   {
			   //	echo "SELECT $cols from $key JOIN child_basic_detail ON child_basic_detail.child_id= $key. child_id where  child_basic_detail.district_id='" .$dist_id ."' AND   $key.child_id = '{$id}' " ;
			   	$sql = "SELECT $cols from $key JOIN child_basic_detail ON child_basic_detail.child_id= $key. child_id where  child_basic_detail.district_id='" .$dist_id ."' AND   $key.child_id = '{$id}' ";
			   }
		  
			  $query = $this->db->query($sql);
			  $numRows = $query->result_array();
			  			  
			  $is_exist = (isset($numRows[0][$cols]) && $numRows[0][$cols] !='' ? '1' : '0'); 
			 
			  $count+=$is_exist;
				 if($count>0)
				 {
					if(array_key_exists($key,$additional_details))
					{ 						
				      $data[$key]=$additional_details[$key];
				      //print_r($data[$key]) ;
				  
					}
				  
				 }
				  
		  }
		  
		}
		$da=join("<br/>",$data);
		return  $da;
  }
	  //code by pabitra 
	  //duplicate ngo
	  public function get_report_ngo_dubbious($from,$to,$dist="")
		{
			$quer="select * from ngo_reg where duplicate_ngo='Yes' and created_date BETWEEN '$from' AND '$to'  ";
			
			return $this->db->query($quer)->result_array();
			
			
		}
	  //code by satyanarayan
	//get details inside state rescued childs
	public function get_details_inside($from,$to,$type,$area="",$block="")
	{

		  //echo $area_id;
		  if($type=="dist")
		  {
			$quer1="select child_basic_detail.child_id,child_name,father_name,postal_address as postal_address,idate_of_rescue,panchayat_names.name as panchayat_name,pincode_list.pincode as pincode,police_stations.police_station_name as police_station_name,state.area_name as state,district.area_name as district,block.area_name as block from child_basic_detail
			    left join police_stations on police_stations.id=child_basic_detail.police_station
				left join pincode_list on pincode_list.id=child_basic_detail.pincode
				left join panchayat_names on panchayat_names.id=child_basic_detail.panchayat_name
				left join child_area_detail as state on state.area_id =child_basic_detail.state
				left join child_area_detail as district  on district.area_id =child_basic_detail.district_id
				left join child_area_detail as block on block.area_id =child_basic_detail.block
		           WHERE basic_place_of_rescue='Within' AND child_basic_detail.district_id='".$area."' AND STR_TO_DATE(idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."'  ";
		  }
		  if($type=="block")
		  {
		  	//$parent_id="select parent_id from child_area_detail where area_id= "
		/*	   $quer1="select child_basic_detail.child_id,child_name,father_name,postal_address as postal_address,idate_of_rescue,panchayat_names.name as panchayat_name,pincode_list.pincode as pincode,police_stations.police_station_name as police_station_name,state.area_name as state,district.area_name as district,block.area_name as block from child_basic_detail
			    left join police_stations on police_stations.id=child_basic_detail.police_station
				left join pincode_list on pincode_list.id=child_basic_detail.pincode
				left join panchayat_names on panchayat_names.id=child_basic_detail.panchayat_name
				left join child_area_detail as state on state.area_id =child_basic_detail.state
				left join child_area_detail as district  on district.area_id =child_basic_detail.district_id
				left join child_area_detail as block on block.area_id =child_basic_detail.block
		           WHERE basic_place_of_rescue='Within' AND block='".$area."' AND STR_TO_DATE(idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' ";
		 */
		  	$quer1="select child_basic_detail.child_id,child_name,father_name,postal_address as postal_address,idate_of_rescue,panchayat_names.name as panchayat_name,pincode_list.pincode as pincode,police_stations.police_station_name as police_station_name,state.area_name as state,district.area_name as district,block.area_name as block from child_basic_detail
			    left join police_stations on police_stations.id=child_basic_detail.police_station
				left join pincode_list on pincode_list.id=child_basic_detail.pincode
				left join panchayat_names on panchayat_names.id=child_basic_detail.panchayat_name
				left join child_area_detail as state on state.area_id =child_basic_detail.state
				left join child_area_detail as district  on district.area_id =child_basic_detail.district_id
				left join child_area_detail as block on block.area_id =child_basic_detail.block
		           WHERE basic_place_of_rescue='Within' AND child_basic_detail.district_id='".$area."' AND STR_TO_DATE(idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."'  ";
		  	
		  }
		if($type=="panchayat")
			  {
				     //echo "asd";

				   $quer1="select child_basic_detail.child_id,child_name,father_name,postal_address as postal_address,idate_of_rescue,panchayat_names.name as panchayat_name,pincode_list.pincode as pincode,police_stations.police_station_name as police_station_name,state.area_name as state,district.area_name as district,block.area_name as block from child_basic_detail
			        left join police_stations on police_stations.id=child_basic_detail.police_station
					left join pincode_list on pincode_list.id=child_basic_detail.pincode
					left join panchayat_names on panchayat_names.id=child_basic_detail.panchayat_name
					left join child_area_detail as state on state.area_id =child_basic_detail.state
					left join child_area_detail as district  on district.area_id =child_basic_detail.district_id
					left join child_area_detail as block on block.area_id =child_basic_detail.block
		           WHERE basic_place_of_rescue='Within' AND block='".$block."' AND child_basic_detail.panchayat_name='".$area."'  AND STR_TO_DATE(idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' ";
			  }
			  //code added by pooja
 //view details within child
 if($type=="inside-details"){
 	 
 	$quer1="select child_basic_detail.child_id,child_name,father_name,postal_address as postal_address,idate_of_rescue,panchayat_names.name as panchayat_name,pincode_list.pincode as pincode,police_stations.police_station_name as police_station_name,state.area_name as state,district.area_name as district,block.area_name as block from child_basic_detail
   left join police_stations on police_stations.id=child_basic_detail.police_station
left join pincode_list on pincode_list.id=child_basic_detail.pincode
left join panchayat_names on panchayat_names.id=child_basic_detail.panchayat_name
left join child_area_detail as state on state.area_id =child_basic_detail.state
left join child_area_detail as district  on district.area_id =child_basic_detail.district_id
left join child_area_detail as block on block.area_id =child_basic_detail.block
          WHERE basic_place_of_rescue='Within' AND child_basic_detail.district_id='".$area."' AND STR_TO_DATE(idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."'  ";
 	
 	
 }

		  return $this->db->query($quer1)->result_array();

	}
	//Get details of CCi
	public function get_details_cci($from,$to,$type,$area="",$block="")
	{
	/*	$quer="select count(child_basic_detail.child_id) as count,cci_area.area_name as cci_name,child_area_detail.area_name as cci_dist,order_after_production.cci_address,order_after_production.cci_dist as order_cci_dist FROM child_basic_detail
		      left join order_after_production on order_after_production.child_id=child_basic_detail.child_id
			  left join child_area_detail on  child_area_detail.area_id=order_after_production.cci_dist
			  left join cci_area on cci_area.id=order_after_production.ccis_name  COLLATE utf8_unicode_ci
		       where  STR_TO_DATE(order_after_production.cci_date,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' group by order_after_production.ccis_name order by order_after_production.ccis_name";
		*/
		if($block=="pdf")
			{

			$quer1="select child_basic_detail.child_id,child_name,father_name,postal_address as postal_address,idate_of_rescue,panchayat_names.name as panchayat_name,pincode_list.pincode as pincode,police_stations.police_station_name as police_station_name,state.area_name as state,district.area_name as district,block.area_name as block from child_basic_detail
			   left join police_stations on police_stations.id=child_basic_detail.police_station
			left join pincode_list on pincode_list.id=child_basic_detail.pincode
			left join panchayat_names on panchayat_names.id=child_basic_detail.panchayat_name
			left join child_area_detail as state on state.area_id =child_basic_detail.state
			left join child_area_detail as district  on district.area_id =child_basic_detail.district_id
			left join child_area_detail as block on block.area_id =child_basic_detail.block
			left join order_after_production on order_after_production.child_id =child_basic_detail.child_id
			left join child_area_detail on child_area_detail.area_id=order_after_production.cci_dist
					  WHERE ccis_name='".$area."' AND order_after_production.order_type='cci'  AND STR_TO_DATE(order_after_production.cci_date,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."'  ";
			//echo $quer1 ;

			}else{
		$quer1="select child_basic_detail.child_id,child_name,father_name,postal_address as postal_address,idate_of_rescue,panchayat_names.name as panchayat_name,pincode_list.pincode as pincode,police_stations.police_station_name as police_station_name,state.area_name as state,district.area_name as district,block.area_name as block from child_basic_detail
			    left join police_stations on police_stations.id=child_basic_detail.police_station
				left join pincode_list on pincode_list.id=child_basic_detail.pincode
				left join panchayat_names on panchayat_names.id=child_basic_detail.panchayat_name
				left join child_area_detail as state on state.area_id =child_basic_detail.state
				left join child_area_detail as district  on district.area_id =child_basic_detail.district_id
				left join child_area_detail as block on block.area_id =child_basic_detail.block
				left join order_after_production on order_after_production.child_id =child_basic_detail.child_id
				left join child_area_detail on child_area_detail.area_id=order_after_production.cci_dist
		           WHERE ccis_name='".$area."' AND order_after_production.order_type='cci'  AND STR_TO_DATE(order_after_production.cci_date,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."'  ";
				   }
		//echo $quer1 ;
		return $this->db->query($quer1)->result_array();
		
	}
	
	//get details of the child rescued outside state
	public function get_details_outside($from,$to,$type,$area="",$param1="")
	{

		  //echo $area_id;
		  if($type=="state")
		  {
			$quer1="select child_basic_detail.child_id,child_name,(select child_area_detail.area_name from child_area_detail where child_basic_detail.district=child_area_detail.area_id ) as child_dist,father_name,postal_address as postal_address,idate_of_rescue,panchayat_names.name as panchayat_name,pincode_list.pincode as pincode,police_stations.police_station_name as police_station_name,state.area_name as state,district.area_name as district,block.area_name as block from child_basic_detail
			    left join police_stations on police_stations.id=child_basic_detail.police_station
				left join pincode_list on pincode_list.id=child_basic_detail.pincode
				left join panchayat_names on panchayat_names.id=child_basic_detail.panchayat_name
				left join child_area_detail as state on state.area_id =child_basic_detail.state
				left join child_area_detail as district  on district.area_id =child_basic_detail.district_id
				left join child_area_detail as block on block.area_id =child_basic_detail.block
				left join child_outside_state  on child_outside_state.child_id =child_basic_detail.child_id
				  WHERE  basic_place_of_rescue='Outside State' AND child_outside_state.outside_state='".$area."' AND STR_TO_DATE(idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' ";
		  }
		  if($type=="dist")
		  {
			   $quer1="select child_basic_detail.child_id,child_name,(select child_area_detail.area_name from child_area_detail where child_basic_detail.district=child_area_detail.area_id ) as child_dist,father_name,postal_address as postal_address,idate_of_rescue,panchayat_names.name as panchayat_name,pincode_list.pincode as pincode,police_stations.police_station_name as police_station_name,state.area_name as state,district.area_name as district,block.area_name as block from child_basic_detail
			    left join police_stations on police_stations.id=child_basic_detail.police_station
				left join pincode_list on pincode_list.id=child_basic_detail.pincode
				left join panchayat_names on panchayat_names.id=child_basic_detail.panchayat_name
				left join child_area_detail as state on state.area_id =child_basic_detail.state
				left join child_area_detail as district  on district.area_id =child_basic_detail.district_id
				left join child_area_detail as block on block.area_id =child_basic_detail.block
				left join child_outside_state  on child_outside_state.child_id =child_basic_detail.child_id
		           WHERE  basic_place_of_rescue='Outside State' AND child_outside_state.outside_district='".$area."' AND STR_TO_DATE(idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' ";
		  }

 if($param1=="pdf" && $type=="state")
 {
 	$quer1="select child_basic_detail.child_id,child_name,(select child_area_detail.area_name from child_area_detail where child_basic_detail.district=child_area_detail.area_id ) as child_dist,father_name,postal_address as postal_address,idate_of_rescue,panchayat_names.name as panchayat_name,pincode_list.pincode as pincode,police_stations.police_station_name as police_station_name,state.area_name as state,district.area_name as district,block.area_name as block from child_basic_detail
   left join police_stations on police_stations.id=child_basic_detail.police_station
left join pincode_list on pincode_list.id=child_basic_detail.pincode
left join panchayat_names on panchayat_names.id=child_basic_detail.panchayat_name
left join child_area_detail as state on state.area_id =child_basic_detail.state
left join child_area_detail as district  on district.area_id =child_basic_detail.district_id
left join child_area_detail as block on block.area_id =child_basic_detail.block
left join child_outside_state  on child_outside_state.child_id =child_basic_detail.child_id
 WHERE  basic_place_of_rescue='Outside State' AND child_outside_state.outside_state='".$area."' AND STR_TO_DATE(idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' ";

 	//echo $quer1;
 
 }
 if($param1=="pdf" )
 {
 	$quer1="select child_basic_detail.child_id,child_name,(select child_area_detail.area_name from child_area_detail where child_basic_detail.district=child_area_detail.area_id ) as child_dist,father_name,postal_address as postal_address,idate_of_rescue,panchayat_names.name as panchayat_name,pincode_list.pincode as pincode,police_stations.police_station_name as police_station_name,state.area_name as state,district.area_name as district,block.area_name as block from child_basic_detail
			    left join police_stations on police_stations.id=child_basic_detail.police_station
				left join pincode_list on pincode_list.id=child_basic_detail.pincode
				left join panchayat_names on panchayat_names.id=child_basic_detail.panchayat_name
				left join child_area_detail as state on state.area_id =child_basic_detail.state
				left join child_area_detail as district  on district.area_id =child_basic_detail.district_id
				left join child_area_detail as block on block.area_id =child_basic_detail.block
				left join child_outside_state  on child_outside_state.child_id =child_basic_detail.child_id
				  WHERE  basic_place_of_rescue='Outside State' AND child_outside_state.outside_state='".$area."' AND STR_TO_DATE(idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' ";
 	
 }


		  return $this->db->query($quer1)->result_array();

	}
	//get childs sent cci's
	public function get_report_childs_to_cci_data($from,$to,$dist="")
	{
		$ses_ids=$this->session->userdata('login_user_id');
		$role=$this->get_role_id($ses_ids);
		foreach($role as $rolep):
		$roles_id=$rolep['account_role_id'];
		$dist_id=$rolep['district_id'];
		endforeach;
		$newdistrict= $this->db->query("select  division_id from division_details  where division_details.district_id='" . $dist_id ."' ")->result_array();
		foreach($newdistrict as $newdistricts):
		$division_id=$newdistricts['division_id'];
		endforeach;
		
		if($dist)
		{
			
			$cci_name=$this->db->query("select cci_area.area_name as cci_name,cci_area.id as cci_id FROM child_basic_detail left join order_after_production on order_after_production.child_id=child_basic_detail.child_id left join child_area_detail on child_area_detail.area_id=order_after_production.cci_dist left join cci_area on cci_area.id=order_after_production.ccis_name and cci_area.area_id=order_after_production.cci_dist COLLATE utf8_unicode_ci where order_after_production.order_type='cci' AND   cci_area.area_id='".$dist."' group by order_after_production.ccis_name ")->result_array();
			$cci_dist=$this->db->query("select child_area_detail.area_name as cci_dist,cci_area.id as cci_id FROM child_basic_detail left join order_after_production on order_after_production.child_id=child_basic_detail.child_id left join child_area_detail on child_area_detail.area_id=order_after_production.cci_dist left join cci_area on cci_area.id=order_after_production.ccis_name and cci_area.area_id=order_after_production.cci_dist COLLATE utf8_unicode_ci where order_after_production.order_type='cci' AND cci_area.area_id='".$dist."'  AND STR_TO_DATE(order_after_production.cci_date,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' group by order_after_production.ccis_name")->result_array();
			$child_num=$this->db->query("select count(child_basic_detail.child_id) as count,cci_area.id as cci_id FROM child_basic_detail left join order_after_production on order_after_production.child_id=child_basic_detail.child_id left join child_area_detail on  child_area_detail.area_id=order_after_production.cci_dist left join cci_area on cci_area.id=order_after_production.ccis_name and cci_area.area_id=order_after_production.cci_dist   COLLATE utf8_unicode_ci  where  STR_TO_DATE(order_after_production.cci_date,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' AND order_after_production.order_type='cci' AND cci_area.area_id='".$dist."'  group by order_after_production.ccis_name ")->result_array();
			$child_dist_order=$this->db->query("select order_after_production.cci_dist as order_cci_dist ,cci_area.id as cci_id FROM child_basic_detail left join order_after_production on order_after_production.child_id=child_basic_detail.child_id left join child_area_detail on  child_area_detail.area_id=order_after_production.cci_dist left join cci_area on cci_area.id=order_after_production.ccis_name and cci_area.area_id=order_after_production.cci_dist   COLLATE utf8_unicode_ci where  STR_TO_DATE(order_after_production.cci_date,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' AND order_after_production.order_type='cci' AND cci_area.area_id='".$dist."'  group by order_after_production.ccis_name ")->result_array();
			$dist=$this->db->query("select cci_area.id as cci_id FROM child_basic_detail left join order_after_production on order_after_production.child_id=child_basic_detail.child_id left join child_area_detail on child_area_detail.area_id=order_after_production.cci_dist left join cci_area on cci_area.id=order_after_production.ccis_name and cci_area.area_id=order_after_production.cci_dist COLLATE utf8_unicode_ci where order_after_production.order_type='cci' AND cci_area.area_id='".$dist."'  group by order_after_production.ccis_name ")->result_array();
			
			
		}
		else
			if($roles_id==10 || $roles_id==11 || $roles_id==21 || $roles_id==12 || $roles_id==22)//for lC and Lc operator
			{
				//echo "select cci_area.area_name as cci_name,cci_area.id as cci_id FROM child_basic_detail left join order_after_production on order_after_production.child_id=child_basic_detail.child_id left join child_area_detail on child_area_detail.area_id=order_after_production.cci_dist left join cci_area on cci_area.id=order_after_production.ccis_name and cci_area.area_id=order_after_production.cci_dist COLLATE utf8_unicode_ci where order_after_production.order_type='cci' and cci_area.area_name!='' group by order_after_production.ccis_name " ;
				$cci_name=$this->db->query("select cci_area.area_name as cci_name,cci_area.id as cci_id FROM child_basic_detail left join order_after_production on order_after_production.child_id=child_basic_detail.child_id  left join child_area_detail on  child_area_detail.area_id=order_after_production.cci_dist left join cci_area on cci_area.id=order_after_production.ccis_name and cci_area.area_id=order_after_production.cci_dist   COLLATE utf8_unicode_ci where  STR_TO_DATE(order_after_production.cci_date,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' AND order_after_production.order_type='cci' group by order_after_production.ccis_name ")->result_array();
				$cci_dist=$this->db->query("select child_area_detail.area_name as cci_dist,cci_area.id as cci_id FROM child_basic_detail left join order_after_production on order_after_production.child_id=child_basic_detail.child_id left join child_area_detail  on child_area_detail.area_id=order_after_production.cci_dist left join cci_area on cci_area.id=order_after_production.ccis_name and cci_area.area_id=order_after_production.cci_dist COLLATE utf8_unicode_ci where order_after_production.order_type='cci' AND STR_TO_DATE(order_after_production.cci_date,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' group by order_after_production.ccis_name")->result_array();
				$child_num=$this->db->query("select count(child_basic_detail.child_id) as count,cci_area.id as cci_id FROM child_basic_detail left join order_after_production on order_after_production.child_id=child_basic_detail.child_id  left join child_area_detail on  child_area_detail.area_id=order_after_production.cci_dist left join cci_area on cci_area.id=order_after_production.ccis_name and cci_area.area_id=order_after_production.cci_dist   COLLATE utf8_unicode_ci where  STR_TO_DATE(order_after_production.cci_date,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' AND order_after_production.order_type='cci' group by order_after_production.ccis_name ")->result_array();
				$child_dist_order=$this->db->query("select order_after_production.cci_dist as order_cci_dist ,cci_area.id as cci_id FROM child_basic_detail left join order_after_production on order_after_production.child_id=child_basic_detail.child_id  left join child_area_detail on  child_area_detail.area_id=order_after_production.cci_dist left join cci_area on cci_area.id=order_after_production.ccis_name and cci_area.area_id=order_after_production.cci_dist   COLLATE utf8_unicode_ci where  STR_TO_DATE(order_after_production.cci_date,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' AND order_after_production.order_type='cci' group by order_after_production.ccis_name ")->result_array();
				$dist=$this->db->query("select cci_area.id as cci_id FROM child_basic_detail left join order_after_production on order_after_production.child_id=child_basic_detail.child_id left join child_area_detail on child_area_detail.area_id=order_after_production.cci_dist left join cci_area on cci_area.id=order_after_production.ccis_name and cci_area.area_id=order_after_production.cci_dist COLLATE utf8_unicode_ci where order_after_production.order_type='cci' group by order_after_production.ccis_name ")->result_array();
				
			}
		else if($roles_id==13 || $roles_id==20)
		{
			
			$cci_name=$this->db->query("select cci_area.area_name as cci_name,cci_area.id as cci_id FROM child_basic_detail left join order_after_production on order_after_production.child_id=child_basic_detail.child_id left join child_area_detail on child_area_detail.area_id=order_after_production.cci_dist left join cci_area on cci_area.id=order_after_production.ccis_name and cci_area.area_id=order_after_production.cci_dist COLLATE utf8_unicode_ci where cci_area.area_id COLLATE utf8_unicode_ci in (select district_id from division_details where division_details.division_id='IND010009') group by order_after_production.ccis_name ")->result_array();
			$cci_dist=$this->db->query("select child_area_detail.area_name as cci_dist,cci_area.id as cci_id FROM child_basic_detail left join order_after_production on order_after_production.child_id=child_basic_detail.child_id left join child_area_detail on child_area_detail.area_id=order_after_production.cci_dist left join cci_area on cci_area.id=order_after_production.ccis_name and cci_area.area_id=order_after_production.cci_dist COLLATE utf8_unicode_ci where order_after_production.order_type='cci' AND STR_TO_DATE(order_after_production.cci_date,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' group by order_after_production.ccis_name")->result_array();
			$child_num=$this->db->query("select count(child_basic_detail.child_id) as count,cci_area.id as cci_id FROM child_basic_detail left join order_after_production on order_after_production.child_id=child_basic_detail.child_id left join child_area_detail on  child_area_detail.area_id=order_after_production.cci_dist left join cci_area on cci_area.id=order_after_production.ccis_name and cci_area.area_id=order_after_production.cci_dist COLLATE utf8_unicode_ci where  STR_TO_DATE(order_after_production.cci_date,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' AND order_after_production.order_type='cci' group by order_after_production.ccis_name ")->result_array();
			$child_dist_order=$this->db->query("select order_after_production.cci_dist as order_cci_dist ,cci_area.id as cci_id FROM child_basic_detail left join order_after_production on order_after_production.child_id=child_basic_detail.child_id left join child_area_detail on  child_area_detail.area_id=order_after_production.cci_dist left join cci_area on cci_area.id=order_after_production.ccis_name and cci_area.area_id=order_after_production.cci_dist   COLLATE utf8_unicode_ci where  STR_TO_DATE(order_after_production.cci_date,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' AND order_after_production.order_type='cci' group by order_after_production.ccis_name ")->result_array();
			$dist=$this->db->query("select cci_area.id as cci_id FROM child_basic_detail left join order_after_production on order_after_production.child_id=child_basic_detail.child_id left join child_area_detail on child_area_detail.area_id=order_after_production.cci_dist left join cci_area on cci_area.id=order_after_production.ccis_name and cci_area.area_id=order_after_production.cci_dist COLLATE utf8_unicode_ci where order_after_production.order_type='cci' group by order_after_production.ccis_name ")->result_array();
		}
		
		$cumulative = array();
		for($i=0; $i<sizeof($cci_name); $i++){
			$cumulative[$i][0]=$cci_name[$i]['cci_name'];
			$cumulative[$i][1]=0;
			$cumulative[$i][2]=0;
			$cumulative[$i][3]=0;
			
			
			
			
			
			if(sizeof($cci_dist)>0)
			{
				foreach($cci_dist as $row)
				{
					
					if($cci_name[$i]['cci_id']==$row['cci_id'])
					{
						
						$cumulative[$i][1]=$row['cci_dist'];
						break;
					}
					else{
						$cumulative[$i][1]=0;
					}
				}
				
			}
			
			if(sizeof($child_num)>0)
			{
				foreach($child_num as $row)
				{
					
					if($cci_name[$i]['cci_id']==$row['cci_id'])
					{
						$cumulative[$i][2]=$row['count'];
						break;
					}
					else{
						$cumulative[$i][2]=0;
					}
				}
				
			}
			
			
			if(sizeof($child_dist_order)>0)
			{
				foreach( $child_dist_order as $row)
				{
					
					if($cci_name[$i]['cci_id']==$row['cci_id'])
					{
						$cumulative[$i][3]=$row['order_cci_dist'];
						break;
					}
					else{
						$cumulative[$i][3]=0;
					}
				}
				
			}
			
			if(sizeof($dist)>0)
			{
				foreach($dist as $row)
				{
					
					if($cci_name[$i]['cci_id']==$row['cci_id'])
					{
						$cumulative[$i][4]=$row['cci_id'];
						break;
					}
					else{
						$cumulative[$i][4]=0;
					}
				}
				
			}
			
			$cumulative[$i][5]=$cumulative[$i][1]+$cumulative[$i][2]+$cumulative[$i][3]+$cumulative[$i][4];
			$tot1+=$cumulative[$i][1];
			$tot2+=$cumulative[$i][2];
			$tot3+=$cumulative[$i][3];
			$tot4+=$cumulative[$i][4];
			
		}
		
		if($roles_id==10 || $roles_id==11 || $roles_id==21 || $roles_id==12 || $roles_id==22 || $roles_id==13 || $roles_id==20 ){
			if(sizeof($cci_dist)>0)
			{
			$cumulative[sizeof($cci_name)][0]="<strong>Total</strong>";
			$cumulative[sizeof($cci_name)][1]="<strong>".$tot1."<strong>";
			$cumulative[sizeof($cci_name)][2]="<strong>".$tot2."<strong>";
			}
			
		}
		
		
		return($cumulative);
		

	}
	public function get_districts_list($state_id)
      {
		  $ses_ids=$this->session->userdata('login_user_id');
			$role=$this->get_role_id($ses_ids);
			  foreach($role as $rolep):
				$roles_id=$rolep['account_role_id'];
				$dist_id=$rolep['district_id'];
			  endforeach;
			  if($roles_id==10 || $roles_id==11 || $roles_id==21 || $roles_id==12 || $roles_id==22)//for lC and Lc operator
		  {
			return $this->db->select('*')->where('parent_id',$state_id)->order_by('area_name', 'asc')->group_by('area_name')->get('child_area_detail')->result_array();  
		  }
		  else if($roles_id==13)
		  {
			   $sql="SELECT * FROM child_area_detail
			  LEFT JOIN division_details  ON division_details.district_id=child_area_detail.area_id  COLLATE utf8_unicode_ci	
			  WHERE division_details.division_id='".$dist_id."';
			";
			return $this->db->query($sql)->result_array();
		  }
    
      }
	  public function get_blocks_list($distict_id)
      {

    return $this->db->select('*')->where('parent_id',$distict_id)->order_by('area_name', 'asc')->group_by('area_name')->get('child_area_detail')->result_array();
      }
	  public function get_states_list()
	  {
		   return $this->db->select('*')->where('parent_id','IND')->order_by('area_name', 'asc')->group_by('area_name')->get('child_area_detail')->result_array();

	  }
      function get_role_id($role_id)
      {
		   //echo $role_id;
        $role = $this->db->get_where('staff',array('staff_id'=>$role_id))->result_array();
        return $role;
      }
	///cosider it later
 public function get_user_groups_list()
      {
    return $this->db->select('*')->order_by('name', 'asc')->get('account_role')->result_array();
      }
//modified on 15-09-17
//For totaling value of rescued child
	  public function get_report_rescued_child($from,$to,$user)
			{
	
			$ses_ids=$this->session->userdata('login_user_id');
			$role=$this->get_role_id($ses_ids);
			  foreach($role as $rolep):
				$roles_id=$rolep['account_role_id'];
				$dist_id=$rolep['district_id'];
			  endforeach;
			  $newdistrict= $this->db->query("select  division_id from division_details  where division_details.district_id='" . $dist_id ."' ")->result_array();
			  foreach($newdistrict as $newdistricts):
			  $division_id=$newdistricts['division_id'];
			  endforeach;
			  
			  
			  if($roles_id==10 || $roles_id==11 || $roles_id==21  || $roles_id==12 || $roles_id==22)//for lC and Lc operator
			  {
			  	$child_dist =$this->db->query("SELECT child_area_detail.area_name as district,child_area_detail.area_id as area_id
                      
                      from child_area_detail
                      join  child_basic_detail ON
                      child_area_detail.area_id=child_basic_detail.district_id
			          join staff ON
			          child_basic_detail.uid=staff.staff_id
			          join account_role ON
			          staff.account_role_id=account_role.account_role_id
		              GROUP BY child_area_detail.area_name")->result_array();
			  	$leo_list=$this->db->query("select child_area_detail.area_id as area_id, SUM(CASE WHEN account_role.name = 'LEO' THEN 1 ELSE 0 END) LEO
                      from child_area_detail
                      join  child_basic_detail ON
                      child_area_detail.area_id=child_basic_detail.district_id
			          join staff ON
			          child_basic_detail.uid=staff.staff_id
			          join account_role ON
			          staff.account_role_id=account_role.account_role_id
			          WHERE
		              STR_TO_DATE(idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' GROUP BY child_area_detail.area_name ")->result_array();
			  	$ls_list=$this->db->query("select child_area_detail.area_id as area_id, SUM(CASE WHEN account_role.name = 'LS' THEN 1 ELSE 0 END) LS
                      from child_area_detail
                      join  child_basic_detail ON
                      child_area_detail.area_id=child_basic_detail.district_id
			          join staff ON
			          child_basic_detail.uid=staff.staff_id
			          join account_role ON
			          staff.account_role_id=account_role.account_role_id
			          WHERE
		              STR_TO_DATE(idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' GROUP BY child_area_detail.area_name ")->result_array();
			  	$cwc_list=$this->db->query("select child_area_detail.area_id as area_id, SUM(CASE WHEN  account_role.name = 'CWC' THEN 1 ELSE 0 END) CWC
                      from child_area_detail
                      join  child_basic_detail ON
                      child_area_detail.area_id=child_basic_detail.district_id
			          join staff ON
			          child_basic_detail.uid=staff.staff_id
			          join account_role ON
			          staff.account_role_id=account_role.account_role_id
			          WHERE
		              STR_TO_DATE(idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' GROUP BY child_area_detail.area_name ")->result_array();
			  	$child_dist_id =$this->db->query("select child_area_detail.area_id as area_id from child_area_detail
		        left join child_basic_detail ON child_area_detail.area_id=child_basic_detail.district_id
		       GROUP BY child_area_detail.area_id ")->result_array();
				
			  }
			  else if($roles_id==13 || $roles_id==20)
			  {
				
			  	
			  	$child_dist =$this->db->query("SELECT child_area_detail.area_name as district,child_area_detail.area_id as area_id
		              		
                      from child_area_detail
                      join  child_basic_detail ON
                      child_area_detail.area_id=child_basic_detail.district_id
			          join staff ON
			          child_basic_detail.uid=staff.staff_id
			          join account_role ON
			          staff.account_role_id=account_role.account_role_id
                      WHERE
                      child_basic_detail.district_id COLLATE utf8_unicode_ci in (select district_id from division_details  where division_details.division_id='" .$division_id."')
		              GROUP BY child_area_detail.area_name")->result_array();
			  	$leo_list=$this->db->query("select child_area_detail.area_id as area_id, SUM(CASE WHEN account_role.name = 'LEO' THEN 1 ELSE 0 END) LEO
                      from child_area_detail
                      join  child_basic_detail ON
                      child_area_detail.area_id=child_basic_detail.district_id
			          join staff ON
			          child_basic_detail.uid=staff.staff_id
			          join account_role ON
			          staff.account_role_id=account_role.account_role_id
			          WHERE
		              STR_TO_DATE(idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' GROUP BY child_area_detail.area_name ")->result_array();
			  	$ls_list=$this->db->query("select child_area_detail.area_id as area_id, SUM(CASE WHEN account_role.name = 'LS' THEN 1 ELSE 0 END) LS
                      from child_area_detail
                      join  child_basic_detail ON
                      child_area_detail.area_id=child_basic_detail.district_id
			          join staff ON
			          child_basic_detail.uid=staff.staff_id
			          join account_role ON
			          staff.account_role_id=account_role.account_role_id
			          WHERE
		              STR_TO_DATE(idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' GROUP BY child_area_detail.area_name ")->result_array();
			  	$cwc_list=$this->db->query("select child_area_detail.area_id as area_id, SUM(CASE WHEN  account_role.name = 'CWC' THEN 1 ELSE 0 END) CWC
                      from child_area_detail
                      join  child_basic_detail ON
                      child_area_detail.area_id=child_basic_detail.district_id
			          join staff ON
			          child_basic_detail.uid=staff.staff_id
			          join account_role ON
			          staff.account_role_id=account_role.account_role_id
			          WHERE
		              STR_TO_DATE(idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' GROUP BY child_area_detail.area_name ")->result_array();
			  	$child_dist_id =$this->db->query("select child_area_detail.area_id as area_id from child_area_detail
		        left join child_basic_detail ON child_area_detail.area_id=child_basic_detail.district_id
		       GROUP BY child_area_detail.area_id ")->result_array();
			  	
			
			  	
			  }
			  else if($roles_id==2 || $roles_id==5 || $roles_id==7 || $roles_id==6 || $roles_id==8 || $roles_id==14 || $roles_id==16 || $roles_id==18 || $roles_id==19)
			  {
			  	
			  	$child_dist =$this->db->query("SELECT child_area_detail.area_name as district,child_area_detail.area_id as area_id
		              		
                      from child_area_detail
                      join  child_basic_detail ON
                      child_area_detail.area_id=child_basic_detail.district_id
			          join staff ON
			          child_basic_detail.uid=staff.staff_id
			          join account_role ON
			          staff.account_role_id=account_role.account_role_id
                      WHERE child_area_detail.area_id='".$dist_id."'
		              GROUP BY child_area_detail.area_name")->result_array();
			  	$leo_list=$this->db->query("select child_area_detail.area_id as area_id, SUM(CASE WHEN account_role.name = 'LEO' THEN 1 ELSE 0 END) LEO
                      from child_area_detail
                      join  child_basic_detail ON
                      child_area_detail.area_id=child_basic_detail.district_id
			          join staff ON
			          child_basic_detail.uid=staff.staff_id
			          join account_role ON
			          staff.account_role_id=account_role.account_role_id
			          WHERE
		              STR_TO_DATE(idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' GROUP BY child_area_detail.area_name ")->result_array();
			  	$ls_list=$this->db->query("select child_area_detail.area_id as area_id, SUM(CASE WHEN account_role.name = 'LS' THEN 1 ELSE 0 END) LS
                      from child_area_detail
                      join  child_basic_detail ON
                      child_area_detail.area_id=child_basic_detail.district_id
			          join staff ON
			          child_basic_detail.uid=staff.staff_id
			          join account_role ON
			          staff.account_role_id=account_role.account_role_id
			          WHERE
		              STR_TO_DATE(idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' GROUP BY child_area_detail.area_name ")->result_array();
			  	$cwc_list=$this->db->query("select child_area_detail.area_id as area_id, SUM(CASE WHEN  account_role.name = 'CWC' THEN 1 ELSE 0 END) CWC
                      from child_area_detail
                      join  child_basic_detail ON
                      child_area_detail.area_id=child_basic_detail.district_id
			          join staff ON
			          child_basic_detail.uid=staff.staff_id
			          join account_role ON
			          staff.account_role_id=account_role.account_role_id
			          WHERE
		              STR_TO_DATE(idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' GROUP BY child_area_detail.area_name ")->result_array();
			  	$child_dist_id =$this->db->query("select child_area_detail.area_id as area_id from child_area_detail
		        left join child_basic_detail ON child_area_detail.area_id=child_basic_detail.district_id
		       GROUP BY child_area_detail.area_id ")->result_array();
		 	
			  }
			  //added by pooja ends
			  //district wise resuced child ends
			  $cumulative = array();
			  for($i=0; $i<sizeof($child_dist); $i++){
			  	$cumulative[$i][0]=$child_dist[$i]['district'];
			  	$cumulative[$i][1]=0;
			  	$cumulative[$i][2]=0;
			  	$cumulative[$i][3]=0;
			  	$cumulative[$i][4]=0;
			  	
			  	
			  	if(sizeof($ls_list)>0)
			  	{
			  		foreach($ls_list as $row)
			  		{
			  			
			  			if($child_dist[$i]['area_id']==$row['area_id'])
			  			{
			  				
			  				$cumulative[$i][1]=$row['LS'];
			  				break;
			  			}
			  			else{
			  				$cumulative[$i][1]=0;
			  			}
			  		}
			  		
			  	}
			  	
			  	
			  	
			  	if(sizeof($leo_list)>0)
			  	{
			  		foreach($leo_list as $row)
			  		{
			  			
			  			if($child_dist[$i]['area_id']==$row['area_id'])
			  			{
			  				
			  				$cumulative[$i][2]=$row['LEO'];
			  				break;
			  			}
			  			else{
			  				$cumulative[$i][2]=0;
			  			}
			  		}
			  		
			  	}
			  	
			  	
			  	
			  	if(sizeof($cwc_list)>0)
			  	{
			  	foreach($cwc_list as $row)
			  	{
			  		
			  		if($child_dist[$i]['area_id']==$row['area_id'])
			  		{
			  			
			  			$cumulative[$i][3]=$row['CWC'];
			  			break;
			  		}
			  		else{
			  			$cumulative[$i][3]=0;
			  		}
			  	}
			  	
			  }
			  	
			  	if(sizeof($child_dist_id)>0)
			  	{
			  		foreach($child_dist_id as $row)
			  		{
			  			
			  			if($child_dist[$i]['area_id']==$row['area_id'])
			  			{
			  				$cumulative[$i][4]=$row['area_id'];
			  				break;
			  			}
			  			else{
			  				$cumulative[$i][4]=0;
			  			}
			  		}
			  		
			  	}
			  	
			  	
			  	
			  	
			  	
			  	$cumulative[$i][5]=$cumulative[$i][1]+$cumulative[$i][2]+$cumulative[$i][3]+$cumulative[$i][4];
			  	$tot1+=$cumulative[$i][1];
			  	$tot2+=$cumulative[$i][2];
			  	$tot3+=$cumulative[$i][3];
			  	$tot4+=$cumulative[$i][4];
			  	$tot5+=$cumulative[$i][5];
			  	
			  	
			  	
			  }
			  
			  if($roles_id==10 || $roles_id==11 || $roles_id==21 || $roles_id==12 || $roles_id==22 || $roles_id==13 || $roles_id==20 ){
			  	$cumulative[sizeof($child_dist)][0]="<strong>Total</strong>";
			  	$cumulative[sizeof($child_dist)][1]="<strong>".$tot1."<strong>";
			  	$cumulative[sizeof($child_dist)][2]="<strong>".$tot2."<strong>";
			  	$cumulative[sizeof($child_dist)][3]="<strong>".$tot3."<strong>";
			  	$cumulative[sizeof($child_dist)][4]="<strong>".$tot4."<strong>";
			  	$cumulative[sizeof($child_dist)][5]="<strong>".($tot1+$tot2+$tot3)."<strong>";
			 }
			  
			  
			  return($cumulative);
	  }
	  

	  
	 /*mis report for rehabilitaion */
	  
	  public function get_report_rehabilitaion($from,$to,$dist_id)
	  {
	  	$ses_ids=$this->session->userdata('login_user_id');
	  	$role=$this->get_role_id($ses_ids);
	  	foreach($role as $rolep):
	  	$roles_id=$rolep['account_role_id'];
	  	$dist_id=$rolep['district_id'];
	  	endforeach;
	  	$newdistrict= $this->db->query("select  division_id from division_details  where division_details.district_id='" . $dist_id ."' ")->result_array();
	  	foreach($newdistrict as $newdistricts):
	  	$division_id=$newdistricts['division_id'];
	  	endforeach;
	  	
	  	if( $roles_id==10 || $roles_id==11 || $roles_id==21  || $roles_id==12 || $roles_id==22)//For LC and LC Operator
	 	 {
	  	$child_dist =$this->db->query("select area_name,area_id from child_area_detail where parent_id='IND010' group by area_name order by area_name")->result_array();
	  	//echo "select sum(interest_of_rehabilitation='Yes') as num_child,area_id from (select y.area_id, y.area_name, w.interest_of_rehabilitation from child_area_detail as y left join (child_basic_detail as x left join child_labour_resource_department as w on x.child_id=w.child_id) on x.district_id =y.area_id where y.parent_id ='IND010' AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name order by area_name";
	  	
	  	$child_1800 = $this->db->query("select sum(package='Yes') as num_child,area_id from (select y.area_id, y.area_name, w.package from child_area_detail as y left join (child_basic_detail as x left join child_labour_resource_department as w on x.child_id=w.child_id) on x.district_id =y.area_id where y.parent_id ='IND010' AND w.package_type='0' AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name having num_child > 0 order by area_name")->result_array();
	  	$child_3000 = $this->db->query("select sum(package='Yes') as num_child,area_id from (select y.area_id, y.area_name, w.package from child_area_detail as y left join (child_basic_detail as x left join child_labour_resource_department as w on x.child_id=w.child_id) on x.district_id =y.area_id where y.parent_id ='IND010' AND w.package_type='1' AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name having num_child > 0 order by area_name")->result_array();
	  	
	  	$child_5000 = $this->db->query("select sum(deposited='Yes') as num_child,area_id from (select y.area_id, y.area_name, w.deposited from child_area_detail as y left join (child_labour_resource_department as w left join child_basic_detail as x on w.child_id=x.child_id) on x.district_id =y.area_id where y.parent_id ='IND010' AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name having num_child > 0 order by area_name")->result_array();
	  	
	  	$child_F20 = $this->db->query("select sum(interest_of_rehabilitation='Yes') as num_child,area_id from (select y.area_id, y.area_name, w.interest_of_rehabilitation from child_area_detail as y left join (child_labour_resource_department as w left join child_basic_detail as x on w.child_id=x.child_id) on x.district_id =y.area_id where y.parent_id ='IND010' AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name order by area_name")->result_array();
	  	
	  	$child_F50 = $this->db->query("select sum(mtransfer_proof='Yes') as num_child,area_id from (select y.area_id, y.area_name, w.mtransfer_proof from child_area_detail as y left join (cm_fund_eligibility as w left join child_basic_detail as x on w.child_id=x.child_id) on x.district_id =y.area_id where y.parent_id ='IND010' AND eligible_cm_fund='Yes' AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name order by area_name")->result_array();
	  	
	  }
	  else if($roles_id==13 || $roles_id==20)
	  {
	  	$child_dist =$this->db->query("select child_area_detail.area_name as area_name,child_area_detail.area_id as area_id from child_area_detail
			   where child_area_detail.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $division_id."') group by child_area_detail.area_name order by child_area_detail.area_name")->result_array();
	  	$child_1800 = $this->db->query("select sum(package='Yes') as num_child,area_id from (select y.area_id, y.area_name, w.package from child_area_detail as y left join (child_labour_resource_department as w left join child_basic_detail as x on w.child_id=x.child_id) on x.district_id =y.area_id where y.parent_id ='IND010' AND w.package_type='0' AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name having num_child > 0 order by area_name")->result_array();
	  	$child_3000 = $this->db->query("select sum(package='Yes') as num_child,area_id from (select y.area_id, y.area_name, w.package from child_area_detail as y left join (child_labour_resource_department as w left join child_basic_detail as x on w.child_id=x.child_id) on x.district_id =y.area_id where y.parent_id ='IND010' AND w.package_type='1' AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name having num_child > 0 order by area_name")->result_array();
	  	
	  	$child_5000 = $this->db->query("select sum(deposited='Yes') as num_child,area_id from (select y.area_id, y.area_name, w.deposited from child_area_detail as y left join (child_labour_resource_department as w left join child_basic_detail as x on w.child_id=x.child_id) on x.district_id =y.area_id where y.parent_id ='IND010' AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name having num_child > 0 order by area_name")->result_array();
	  	
	  	$child_F20 = $this->db->query("select sum(interest_of_rehabilitation='Yes') as num_child,area_id from (select y.area_id, y.area_name, w.interest_of_rehabilitation from child_area_detail as y left join (child_labour_resource_department as w left join child_basic_detail as x on w.child_id=x.child_id) on x.district_id =y.area_id where y.parent_id ='IND010' AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name having num_child > 0 order by area_name")->result_array();
	  	
	  	$child_F50 = $this->db->query("select sum(mtransfer_proof='Yes') as num_child,area_id from (select y.area_id, y.area_name, w.mtransfer_proof from child_area_detail as y left join (cm_fund_eligibility as w left join child_basic_detail as x on w.child_id=x.child_id) on x.district_id =y.area_id where y.parent_id ='IND010' AND eligible_cm_fund='Yes' AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name having num_child > 0 order by area_name")->result_array();
	  	
	  }
	  else if($roles_id==2 || $roles_id==5 || $roles_id==7|| $roles_id==6 || $roles_id==8 || $roles_id==14 || $roles_id==16 || $roles_id==18 || $roles_id==19)
	  {
	  	
	  	
	  	$child_dist =$this->db->query("select child_area_detail.area_name as area_name,child_area_detail.area_id as area_id from child_area_detail
			   where child_area_detail.area_id='" . $dist_id ."' group by child_area_detail.area_name order by child_area_detail.area_name")->result_array();
	  	//echo "select sum(package='Yes') as num_child,area_id from (select y.area_id, y.area_name, w.package from child_area_detail as y left join (child_basic_detail as x left join child_labour_resource_department as w on x.child_id=w.child_id) on x.district_id =y.area_id where y.parent_id ='IND010' AND w.package_type='0' AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name order by area_name" ;
	  	//$child_1800 = $this->db->query("select sum(package='Yes') as num_child,area_id from (select y.area_id, y.area_name, w.package from child_area_detail as y left join (child_basic_detail as x left join child_labour_resource_department as w on x.child_id=w.child_id) on x.district_id =y.area_id where y.parent_id ='IND010' AND w.package_type='0' AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name order by area_name")->result_array();
	  	//echo "SELECT sum(w.package='Yes') as num_child, x.area_id FROM child_labour_resource_department as w INNER JOIN child_basic_detail hp INNER JOIN child_area_detail x on w.child_id = hp.child_id where hp.district_id='" . $dist_id ."' AND x.area_id='" . $dist_id ."' AND w.package_type='0' AND STR_TO_DATE(hp.idate_of_rescue,'%Y-%m-%d') BETWEEN '".$from."' AND '".$to."'" ;
	  	$child_1800 = $this->db->query("SELECT sum(w.package='Yes') as num_child, x.area_id FROM child_labour_resource_department as w INNER JOIN child_basic_detail hp INNER JOIN child_area_detail x on w.child_id = hp.child_id where hp.district_id='" . $dist_id ."' AND x.area_id='" . $dist_id ."' AND w.package_type='0' AND STR_TO_DATE(hp.idate_of_rescue,'%Y-%m-%d') BETWEEN '".$from."' AND '".$to."'")->result_array();
	  	$child_3000 = $this->db->query("SELECT sum(w.package='Yes') as num_child, x.area_id FROM child_labour_resource_department as w INNER JOIN child_basic_detail hp INNER JOIN child_area_detail x on w.child_id = hp.child_id where hp.district_id='" . $dist_id ."' AND x.area_id='" . $dist_id ."' AND w.package_type='1' AND STR_TO_DATE(hp.idate_of_rescue,'%Y-%m-%d') BETWEEN '".$from."' AND '".$to."'")->result_array();
	  	//echo "SELECT sum(w.deposited='Yes') as num_child, x.area_id FROM child_labour_resource_department as w INNER JOIN child_basic_detail hp INNER JOIN child_area_detail x on w.child_id = hp.child_id where hp.district_id='" . $dist_id ."' AND x.area_id='" . $dist_id ."' AND STR_TO_DATE(hp.idate_of_rescue,'%Y-%m-%d') BETWEEN '".$from."' AND '".$to."'" ;
	  	$child_5000 = $this->db->query("SELECT sum(w.deposited='Yes') as num_child, x.area_id FROM child_labour_resource_department as w INNER JOIN child_basic_detail hp INNER JOIN child_area_detail x on w.child_id = hp.child_id where hp.district_id='" . $dist_id ."' AND x.area_id='" . $dist_id ."' AND STR_TO_DATE(hp.idate_of_rescue,'%Y-%m-%d') BETWEEN '".$from."' AND '".$to."'")->result_array();
	  	
	  	$child_F20 = $this->db->query("SELECT sum(w.interest_of_rehabilitation='Yes') as num_child, x.area_id FROM child_labour_resource_department as w INNER JOIN child_basic_detail hp INNER JOIN child_area_detail x on w.child_id = hp.child_id where hp.district_id='" . $dist_id ."' AND x.area_id='" . $dist_id ."' AND STR_TO_DATE(hp.idate_of_rescue,'%Y-%m-%d') BETWEEN '".$from."' AND '".$to."'")->result_array();
	  	//echo "SELECT sum(w.mtransfer_proof='Yes') as num_child, x.area_id FROM cm_fund_eligibility as w INNER JOIN child_basic_detail hp INNER JOIN child_area_detail x on w.child_id = hp.child_id where hp.district_id='" . $dist_id ."' AND x.area_id='" . $dist_id ."' AND STR_TO_DATE(hp.idate_of_rescue,'%Y-%m-%d') BETWEEN '".$from."' AND '".$to."'" ;
	  	$child_F50 = $this->db->query("select sum(mtransfer_proof='Yes') as num_child,x.area_id from cm_fund_eligibility as w INNER JOIN child_basic_detail hp INNER JOIN child_area_detail x on w.child_id = hp.child_id where hp.district_id='" . $dist_id ."' AND x.area_id='" . $dist_id ."' AND w.physically_verified='Yes' AND eligible_cm_fund='Yes' AND STR_TO_DATE(hp.idate_of_rescue,'%Y-%m-%d') BETWEEN '".$from."' AND '".$to."'")->result_array();	  	
	  	
	   }
	  //print_r($child_1800);
	 // print_r($child_3000);
	  
	  $cumulative = array();
	  $reh_tot=array();
	  for($i=0; $i<sizeof($child_dist); $i++){
	  	$cumulative[$i][0]=$child_dist[$i]['area_name'];
	  	$cumulative[$i][1]=0;
	  	$cumulative[$i][2]=0;
	  	$cumulative[$i][3]=0;
	  	$cumulative[$i][4]=0;
	  	if(sizeof($child_1800)>0)
	  	{
	  		$cond="package";
	  		$cond_val="Yes";
	  		$type=0;
	  		foreach($child_1800 as $row)
	  		{	
	  			if($child_dist[$i]['area_id']==$row['area_id'])
	  			{
	  				if($row['num_child']==NULL || $row['num_child']==0){
	  					$cumulative[$i][1]=0 ;
	  				}
	  				else{
	  					$cumulative[$i][1]=$row['num_child'];
	  					$cumulative[$i][1]='<a href="'.base_url().'index.php?dashboard/get_lrd_18k/'.$from.'/'.$to.'/'.$row['area_id'].'/'.$cond.'/'.$cond_val.'/'.$type.'">'.$row['num_child'].'</a>';
	  					$reh_tot[$i][1]=$row['num_child'];
	  				}
	  				break;
	  			}
	  			else{
	  				$cumulative[$i][1]=0;
	  				$reh_tot[$i][1]=0;
	  			}
	  		}
	  		
	  	}
	  	if(sizeof($child_3000)>0)
	  	{
	  		$cond="package";
	  		$cond_val="Yes";
	  		$type=1;
	  		foreach($child_3000 as $row)
	  		{
	  			if($child_dist[$i]['area_id']==$row['area_id'])
	  			{
	  				if($row['num_child']==NULL || $row['num_child']==0){
	  					$cumulative[$i][2]=0 ;
	  					$reh_tot[$i][2]=0;
	  				}
	  				else{
	  					$cumulative[$i][2]=$row['num_child'];
	  					$cumulative[$i][2]='<a href="'.base_url().'index.php?dashboard/get_lrd_18k/'.$from.'/'.$to.'/'.$row['area_id'].'/'.$cond.'/'.$cond_val.'/'.$type.'">'.$row['num_child'].'</a>';
	  					$reh_tot[$i][2]=$row['num_child'];
	  				}
	  				break;
	  			}
	  			else{
	  				$cumulative[$i][2]=0;
	  				$reh_tot[$i][2]=0;
	  			}
	  		}
	  		
	  	}
	  	
	  	if(sizeof($child_5000)>0)
	  	{
	  		$cond="deposited";
	  		$cond_val="Yes";
	  		foreach($child_5000 as $row)
	  		{
	  			if($child_dist[$i]['area_id']==$row['area_id'])
	  			{
	  				if($row['num_child']==NULL || $row['num_child']==0){
	  					$cumulative[$i][3]=0 ;
	  					$reh_tot[$i][3]=0;
	  				}
	  				else{
	  					$cumulative[$i][3]=$row['num_child'];
	  					$cumulative[$i][3]='<a href="'.base_url().'index.php?dashboard/get_lrd_50k/'.$from.'/'.$to.'/'.$row['area_id'].'/'.$cond.'/'.$cond_val.'">'.$row['num_child'].'</a>';
	  					$reh_tot[$i][3]=$row['num_child'];
	  				}
	  				break;
	  			}
	  			else{
	  				$cumulative[$i][3]=0;
	  				$reh_tot[$i][3]=0;
	  			}
	  		}
	  		
	  	}
	  	
	  	if(sizeof($child_F20)>0)
	  	{
	  		
	  		$cond="interest_of_rehabilitation";
	  		$cond_val="Yes";
	  		
	  		foreach($child_F20 as $row)
	  		{
	  			if($child_dist[$i]['area_id']==$row['area_id'])
	  			{
	  				if($row['num_child']==NULL || $row['num_child']==0){
	  					$cumulative[$i][4]=0 ;
	  					$reh_tot[$i][4]=0;
	  				}
	  				else{
	  					$cumulative[$i][4]=$row['num_child'];
	  					$cumulative[$i][4]='<a href="'.base_url().'index.php?dashboard/get_lrd_20k/'.$from.'/'.$to.'/'.$row['area_id'].'/'.$cond.'/'.$cond_val.'">'.$row['num_child'].'</a>';
	  					$reh_tot[$i][4]=$row['num_child'];
	  				}
	  				break;
	  			}
	  			else{
	  				$cumulative[$i][4]=0;
	  				$reh_tot[$i][4]=0;
	  			}
	  		}
	  		
	  	}
	  	
	  	if(sizeof($child_F50)>0)
	  	{
	  		
	  		$cond="mtransfer_proof";
	  		$cond_val="Yes";
	  		foreach($child_F50 as $row)
	  		{
	  			if($child_dist[$i]['area_id']==$row['area_id'])
	  			{
	  				if($row['num_child']==NULL || $row['num_child']==0){
	  					$cumulative[$i][5]=0 ;
	  					$reh_tot[$i][5]=0;
	  				}
	  				else{
	  					$cumulative[$i][5]=$row['num_child'];
	  					$cumulative[$i][5]='<a href="'.base_url().'index.php?dashboard/get_cm_relief_data/'.$from.'/'.$to.'/'.$row['area_id'].'/'.$cond.'/'.$cond_val.'">'.$row['num_child'].'</a>';
	  					$reh_tot[$i][5]=$row['num_child'];
	  				}
	  				break;
	  			}
	  			else{
	  				$cumulative[$i][5]=0;
	  				$reh_tot[$i][5]=0;
	  			}
	  		}
	  		
	  	}
	  	
	  	
	  	$tot1+=$reh_tot[$i][1];
	  	$tot2+=$reh_tot[$i][2];
	  	$tot3+=$reh_tot[$i][3];
	  	$tot4+=$reh_tot[$i][4];
	  	$tot5+=$reh_tot[$i][5];
	  	
	  	
	  }
	  if( $roles_id==10 || $roles_id==11 || $roles_id==21 || $roles_id==12 || $roles_id==13 || $roles_id==20 || $roles_id==22){
	  	$cumulative[sizeof($child_dist)][0]="<strong>Total</strong>";
	  	$cumulative[sizeof($child_dist)][1]="<strong>".$tot1."<strong>";
	  	$cumulative[sizeof($child_dist)][2]="<strong>".$tot2."<strong>";
	  	$cumulative[sizeof($child_dist)][3]="<strong>".$tot3."<strong>";
	  	$cumulative[sizeof($child_dist)][4]="<strong>".$tot4."<strong>";
	  	$cumulative[sizeof($child_dist)][5]="<strong>".$tot5."<strong>";
	  }
	 // print_r($cumulative)."<br>" ;
	  return $cumulative ;
	  }
	  
	  /*cumulative statistics*/
	  
	  public function get_cumulative($from,$to,$type="") {
	  	$this->load->model('dashboard_model');
	  	$ses_ids=$this->session->userdata('login_user_id');
	  	$role=$this->dashboard_model->get_role_id($ses_ids);
	  	foreach($role as $rolep):
	  	$roles_id=$rolep['account_role_id'];
	  	$dist_id=$rolep['district_id'];
	    $stat_id=$rolep['state_id'];
	  	endforeach;
	  	$newdistrict= $this->db->query("select  division_id from division_details  where division_details.district_id='" . $dist_id ."' ")->result_array();
	  	foreach($newdistrict as $newdistricts):
	  	$division_id=$newdistricts['division_id'];
	  	endforeach;
	  	
	  	$newdistrict= $this->db->query("select  division_id from division_details  where division_details.district_id='" . $dist_id ."' ")->result_array();
	  	//$from='2014-04-01';
	  	//$to='2017-05-26';
	  	//echo $roles_id;
	  	foreach($newdistrict as $newdistricts):
	  	$division_id=$newdistricts['division_id'];
	  	endforeach;
	  	//$distrct=$newdistrict[0] ;
	  	
	  	if( $roles_id==10 || $roles_id==11 || $roles_id==21 || $roles_id==12 || $roles_id==22)//For LC and LC Operator
	  	{
	  		//echo "select area_name,area_id from child_area_detail where parent_id='IND010' group by area_name order by area_name" ;
	  		$child_dist =$this->db->query("select area_name,area_id from child_area_detail where parent_id='IND010' group by area_name order by area_name")->result_array();
	  		
	  		$child_resc = $this->db->query("select  count(x.child_id) as num_child,y.area_id, y.area_name from child_area_detail as y left join child_basic_detail as x on x.district_id =y.area_id where y.parent_id ='IND010' AND  STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."'  group by area_name order by y.area_name")->result_array();
	  		//echo "select  count(x.child_id) as num_child, y.area_id, y.area_name, x.pstatus, x.is_card_print from child_area_detail as y left join child_basic_detail as x on x.district_id =y.area_id and x.pstatus='N'   where STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' AND  y.parent_id ='IND010' group by area_name order by area_name" ;
	  		$child_inv = $this->db->query("select  count(x.child_id) as num_child, y.area_id, y.area_name, x.pstatus, x.is_card_print from child_area_detail as y left join child_basic_detail as x on x.district_id =y.area_id and x.pstatus='N'   where STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' AND  y.parent_id ='IND010' group by area_name order by area_name")->result_array();
	  		$child_fin = $this->db->query("select sum(pstatus='Y') as num_child,area_name,area_id from (select y.area_id, y.area_name, x.pstatus from child_area_detail as y left join child_basic_detail as x on x.district_id = y.area_id and x.pstatus='Y' where STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' AND y.parent_id ='IND010') Z group by area_name order by area_name")->result_array();	  		
	  		$child_ent = $this->db->query("select sum(is_card_print=1) as num_child,area_name,area_id from (select y.area_id, y.area_name, x.pstatus, x.is_card_print from child_area_detail as y left join child_basic_detail as x on x.district_id =y.area_id and x.pstatus='Y' and x.is_card_print=1 where STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' AND y.parent_id ='IND010') Z group by area_name order by area_name")->result_array();
	  		
	  		$child_transform_to = $this->db->query("select child_area_detail.area_id as area_id,child_area_detail.area_name as area_name,count(child_basic_detail.child_id) as transfer_to from child_area_detail left join child_basic_detail ON child_area_detail.area_id=child_basic_detail.district_id   WHERE STR_TO_DATE(idate_of_rescue,'%Y-%m-%d') BETWEEN '".$from."' AND '".$to."'  AND child_basic_detail.child_id in(select child_id from final_order where type_order = 'Cases transferred to other Dist/State/Country' )  GROUP BY child_area_detail.area_name")->result_array();
	  		//OLD QUERY $child_transform_from = $this->db->query("select child_area_detail.area_id as area_id,child_area_detail.area_name as area_name, count(transfer_to) as transfer_from from child_area_detail left join child_basic_detail ON child_area_detail.area_id=child_basic_detail.district_id left join final_order ON child_basic_detail.child_id=final_order.child_id WHERE STR_TO_DATE(idate_of_rescue,'%Y-%m-%d') BETWEEN '".$from."' AND '".$to."' and type_order='Cases transferred to other Dist/State/Country' GROUP BY child_area_detail.area_name")->result_array();
	  		//NEW QUERY $child_transform_from = $this->db->query("select child_basic_detail.child_id,child_area_detail.area_id as area_id,child_area_detail.area_name as area_name,(select count(child_basic_detail.child_id) as transfer_from from final_order left join child_basic_detail ON final_order.child_id=child_basic_detail.child_id AND STR_TO_DATE(idate_of_rescue,'%Y-%m-%d') BETWEEN '".$from."' AND '".$to."' where final_order.transfer_to=child_area_detail.area_id and type_order='Cases transferred to other Dist/State/Country') as transfer_from from child_area_detail left join child_basic_detail ON child_area_detail.area_id=child_basic_detail.district_id left join final_order ON child_basic_detail.child_id=final_order.child_id where child_area_detail.parent_id='IND010' GROUP BY child_area_detail.area_name ")->result_array();
	  		
	  		$child_transform_from = $this->db->query("select child_area_detail.area_id as area_id,child_area_detail.area_name as area_name,(select count(child_basic_detail.child_id) as transfer_from from final_order left join child_basic_detail ON final_order.child_id=child_basic_detail.child_id AND STR_TO_DATE(idate_of_rescue,'%Y-%m-%d') BETWEEN '".$from."' AND '".$to."' where final_order.transfer_to=child_area_detail.area_id and type_order='Cases transferred to other Dist/State/Country') as transfer_from from child_area_detail  where child_area_detail.parent_id='IND010' GROUP BY child_area_detail.area_name")->result_array();
	  		
	  	}
	  	else if( $roles_id==13 || $roles_id==20 )//DLC
	  	{
	  		$child_dist =$this->db->query("select child_area_detail.area_name as area_name,child_area_detail.area_id from child_area_detail where child_area_detail.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $division_id."') group by child_area_detail.area_name order by child_area_detail.area_name")->result_array();
	  		
	  		$child_resc = $this->db->query("select  count(x.child_id) as num_child,y.area_id, y.area_name from child_area_detail as y left join child_basic_detail as x on x.district_id =y.area_id where y.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $division_id."') AND  STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."'  group by area_name order by y.area_name")->result_array();
	  		
	  		$child_inv = $this->db->query("select  count(x.child_id) as num_child, y.area_id, y.area_name, x.pstatus, x.is_card_print from child_area_detail as y left join child_basic_detail as x on x.district_id =y.area_id and x.pstatus='N'   where STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' AND  y.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $division_id."') group by area_name order by area_name")->result_array();
	  		
	  		$child_fin = $this->db->query("select sum(pstatus='Y') as num_child,area_name,area_id from (select y.area_id, y.area_name, x.pstatus from child_area_detail as y left join child_basic_detail as x on x.district_id = y.area_id and x.pstatus='Y' where STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' AND y.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $division_id."')) Z group by area_name order by area_name")->result_array();
	  		
	  		$child_ent = $this->db->query("select sum(is_card_print=1) as num_child,area_name,area_id from (select y.area_id, y.area_name, x.pstatus, x.is_card_print from child_area_detail as y left join child_basic_detail as x on x.district_id =y.area_id and x.pstatus='Y' and x.is_card_print=1 where STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' AND y.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $division_id."')) Z group by area_name order by area_name")->result_array();
	  		
	  		$child_transform_to = $this->db->query("select child_area_detail.area_id as area_id,child_area_detail.area_name as area_name, SUM(CASE WHEN type_order = 'Cases transferred to other Dist/State/Country' THEN 1 ELSE 0 END) transfer_to from child_area_detail left join child_basic_detail ON child_area_detail.area_id=child_basic_detail.district_id left join final_order ON child_basic_detail.child_id=final_order.child_id WHERE  STR_TO_DATE(idate_of_rescue,'%Y-%m-%d') BETWEEN '".$from."' AND '".$to."' AND final_ordered='Yes'  GROUP BY child_area_detail.area_name")->result_array();
	  		//echo "select child_area_detail.area_id as area_id,child_area_detail.area_name as area_name,(select count(transfer_to) as transfer_from from final_order  where final_order.transfer_to=child_area_detail.area_id and type_order='Cases transferred to other Dist/State/Country' ) as transfer_from from child_area_detail left join child_basic_detail ON child_area_detail.area_id=child_basic_detail.district_id left join final_order ON child_basic_detail.child_id=final_order.child_id WHERE STR_TO_DATE(idate_of_rescue,'%Y-%m-%d') BETWEEN '".$from."' AND '".$to."' AND final_ordered='Yes' GROUP BY child_area_detail.area_name" ;
	  		
	  		$child_transform_from = $this->db->query("select child_area_detail.area_id as area_id,child_area_detail.area_name as area_name,(select count(child_basic_detail.child_id) as transfer_from from final_order left join child_basic_detail ON final_order.child_id=child_basic_detail.child_id AND STR_TO_DATE(idate_of_rescue,'%Y-%m-%d') BETWEEN '".$from."' AND '".$to."' where final_order.transfer_to=child_area_detail.area_id and type_order='Cases transferred to other Dist/State/Country') as transfer_from from child_area_detail  where child_area_detail.parent_id='IND010' GROUP BY child_area_detail.area_name")->result_array();
	  	}
	  	
	  	else if(($roles_id==2)||($roles_id==5)||($roles_id==6)||($roles_id==7)||($roles_id==8)||($roles_id==14)||($roles_id==16)||($roles_id==18)||($roles_id==19))//for ls ,leo and all district level
	  	{
	  		$child_dist =$this->db->query("select child_area_detail.area_name as area_name,child_area_detail.area_id from child_area_detail
			   where child_area_detail.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where child_area_detail.area_id='" . $dist_id."') group by child_area_detail.area_name order by child_area_detail.area_name")->result_array();
	  		
	  		$child_resc = $this->db->query("select  count(x.child_id) as num_child,y.area_id, y.area_name from child_area_detail as y left join child_basic_detail as x on x.district_id =y.area_id where y.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" .$division_id."') AND  STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."'  group by area_name order by y.area_name")->result_array();
	  		//echo "select  count(x.child_id) as num_child, y.area_id, y.area_name, x.pstatus, x.is_card_print from child_area_detail as y left join child_basic_detail as x on x.district_id =y.area_id and x.pstatus='N'   where STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' AND  y.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $division_id."') group by area_name order by area_name" ;
	  		$child_inv = $this->db->query("select  count(x.child_id) as num_child, y.area_id, y.area_name, x.pstatus, x.is_card_print from child_area_detail as y left join child_basic_detail as x on x.district_id =y.area_id and x.pstatus='N'   where STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' AND  y.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $division_id."') group by area_name order by area_name")->result_array();
	  		
	  		$child_fin = $this->db->query("select sum(pstatus='Y') as num_child,area_name,area_id from (select y.area_id, y.area_name, x.pstatus from child_area_detail as y left join child_basic_detail as x on x.district_id = y.area_id and x.pstatus='Y' where STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' AND y.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $division_id."')) Z group by area_name order by area_name")->result_array();
	  		
	  		$child_ent = $this->db->query("select sum(is_card_print=1) as num_child,area_name,area_id from (select y.area_id, y.area_name, x.pstatus, x.is_card_print from child_area_detail as y left join child_basic_detail as x on x.district_id =y.area_id and x.pstatus='Y' and x.is_card_print=1 where STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' AND y.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $division_id."')) Z group by area_name order by area_name")->result_array();
	  		
	  	   $child_transform_to = $this->db->query("select child_area_detail.area_id as area_id,child_area_detail.area_name as area_name, SUM(CASE WHEN type_order = 'Cases transferred to other Dist/State/Country' THEN 1 ELSE 0 END) transfer_to from child_area_detail left join child_basic_detail ON child_area_detail.area_id=child_basic_detail.district_id left join final_order ON child_basic_detail.child_id=final_order.child_id  WHERE child_area_detail.area_id='".$dist_id."' AND STR_TO_DATE(idate_of_rescue,'%Y-%m-%d') BETWEEN '".$from."' AND '".$to."' AND final_ordered='Yes' GROUP BY child_area_detail.area_name")->result_array();
	  		
	  	   $child_transform_from = $this->db->query("select child_area_detail.area_id as area_id,child_area_detail.area_name as area_name,(select count(child_basic_detail.child_id) as transfer_from from final_order left join child_basic_detail ON final_order.child_id=child_basic_detail.child_id AND STR_TO_DATE(idate_of_rescue,'%Y-%m-%d') BETWEEN '".$from."' AND '".$to."' where final_order.transfer_to=child_area_detail.area_id and type_order='Cases transferred to other Dist/State/Country') as transfer_from from child_area_detail  where child_area_detail.parent_id='IND010' GROUP BY child_area_detail.area_name")->result_array();
	  	}
	  	
	  	$cumulative = array();
	  	for($i=0; $i<sizeof($child_dist); $i++){
	  		$cumulative[$i][0]=$child_dist[$i]['area_name'];
	  		$cumulative[$i][1]=0;
	  		$cumulative[$i][2]=0;
	  		$cumulative[$i][3]=0;
	  		$cumulative[$i][4]=0;
	  		$cumulative[$i][5]=0;
	  		
	  		
	  		
	  		if(sizeof($child_resc)>0)
	  		{
	  			foreach($child_resc as $row)
	  			{
	  				if($child_dist[$i]['area_id']==$row['area_id'])
	  				{
	  					
	  					$cumulative[$i][1]=$row['num_child'];
	  					break;
	  				}
	  				else{
	  					$cumulative[$i][1]=0;
	  				}
	  			}
	  			
	  		}
	  		
	  		if(sizeof($child_inv)>0)
	  		{
	  			foreach($child_inv as $row)
	  			{
	  				if($child_dist[$i]['area_id']==$row['area_id'])
	  				{
	  					$cumulative[$i][2]=$row['num_child'];
	  					break;
	  				}
	  				else{
	  					$cumulative[$i][2]=0;
	  				}
	  			}
	  			
	  		}
	  		
	  		if(sizeof($child_fin)>0)
	  		{
	  			foreach($child_fin as $row)
	  			{
	  				
	  				if($child_dist[$i]['area_id']==$row['area_id'])
	  				{
	  					$cumulative[$i][3]=$row['num_child'];
	  					break;
	  				}
	  				else{
	  					$cumulative[$i][3]=0;
	  				}
	  			}
	  			
	  		}
	  		
	  		if(sizeof($child_ent)>0)
	  		{
	  			
	  			foreach($child_ent as $row)
	  			{
	  				//print_r($child_ent);
	  				if($child_dist[$i]['area_id']==$row['area_id'])
	  				{
	  					$cumulative[$i][4]=$row['num_child'];
	  					break;
	  				}
	  				else{
	  					$cumulative[$i][4]=0;
	  				}
	  			}
	  			
	  		}
	  		
	  		
	  			//print_r($child_transform_to);
	  			foreach($child_transform_to as $row)
	  			{
	  				//print_r($child_transform_to);
	  				if($child_dist[$i]['area_id']==$row['area_id'])
	  				{
	  					$cumulative[$i][5]=$row['transfer_to'];
	  					break;
	  				}
	  				else{
	  					$cumulative[$i][5]=0;
	  				}
	  			}
	  			
	  			foreach($child_transform_from as $row)
	  			{
	  				//print_r($child_transform_to);
	  				if($child_dist[$i]['area_id']==$row['area_id'])
	  				{
	  					$cumulative[$i][6]=$row['transfer_from'];
	  					break;
	  				}
	  				else{
	  					$cumulative[$i][6]=0;
	  				}
	  			}
	  			
	  			
	  		
	  		
	  		//$cumulative[$i][5]=$cumulative[$i][1]+$cumulative[$i][2]+$cumulative[$i][3]+$cumulative[$i][4];
	  		$tot1+=$cumulative[$i][1];
	  		$tot2+=$cumulative[$i][2];
	  		$tot3+=$cumulative[$i][3];
	  		$tot4+=$cumulative[$i][4];
	  		$tot5+=$cumulative[$i][5];
	  		$tot6+=$cumulative[$i][6];
	  		$tot7+=$cumulative[$i][7];
	  		$tot8+=$cumulative[$i][8];
	  		
	  		
	  		
	  		
	  		
	  	}
	  	
	  	if( $roles_id==10 || $roles_id==11 || $roles_id==21 || $roles_id==12 || $roles_id==13 || $roles_id==20 || $roles_id==22){
	  		
	  		$cumulative[sizeof($child_dist)][0]=Total;
	  		$cumulative[sizeof($child_dist)][1]=$tot1;
	  		$cumulative[sizeof($child_dist)][2]=$tot2;
	  		$cumulative[sizeof($child_dist)][3]=$tot3;
	  		$cumulative[sizeof($child_dist)][4]=$tot4;
	  		$cumulative[sizeof($child_dist)][5]=$tot5;
	  		$cumulative[sizeof($child_dist)][6]=$tot6;
	  		$cumulative[sizeof($child_dist)][7]=$tot7;
	  		$cumulative[sizeof($child_dist)][8]=(($tot1-$tot5)+$tot6);
	  		
	  		
	  		
	  	}
	  	
	  	return $cumulative ;
	  		  	
	  }
	  
	  public  function get_category($from,$to,$dist) {
	  	
	  	$this->load->model('dashboard_model');
	  	$ses_ids=$this->session->userdata('login_user_id');
	  	$role=$this->dashboard_model->get_role_id($ses_ids);
	  	foreach($role as $rolep):
	  	$roles_id=$rolep['account_role_id'];
	  	$dist_id=$rolep['district_id'];
	  	$stat_id=$rolep['state_id'];
	  	endforeach;
	  	$newdistrict= $this->db->query("select  division_id from division_details  where division_details.district_id='" . $dist_id ."' ")->result_array();
	  	//$from='2014-04-01';
	  	//$to='2017-05-26';
	  	//echo $roles_id;
	  	foreach($newdistrict as $newdistricts):
	  	$division_id=$newdistricts['division_id'];
	  	endforeach;
	  	
	  	
	  	
	  	//$from=$_POST['from'];
	  	//$to=$_POST['to'];
	  	//echo $roles_id;
	  	if( $roles_id==10 || $roles_id==11 || $roles_id==21 || $roles_id==12 || $roles_id==22)//For LC and LC Operator
	  	{
	  		$child_dist =$this->db->query("select area_name,area_id from child_area_detail where parent_id='IND010'  order by area_name")->result_array();
	  		
	  		$child_sc = $this->db->query("select sum(x.category='SC') as num_child,y.area_name as area_name,y.area_id as area_id  FROM child_area_detail as y
		 left join child_basic_detail as x on x.district_id =y.area_id
		 where  x.category='SC' and y.parent_id ='IND010' AND  STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."'
		 group by y.area_name order by y.area_name")->result_array();
	  		
	  		$child_st = $this->db->query("select sum(category='ST') as num_child,y.area_name as area_name,y.area_id as area_id FROM child_area_detail as y  left join child_basic_detail as x on x.district_id =y.area_id
		 where  x.category='ST' and y.parent_id ='IND010' AND  STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."'
		 group by y.area_name order by y.area_name")->result_array();
	  		
	  		$child_obc = $this->db->query("
		 select sum(x.category='OBC') as num_child,y.area_name as area_name,y.area_id as area_id  FROM child_area_detail as y
		 left join child_basic_detail as x on x.district_id =y.area_id
		 where  x.category='OBC' and y.parent_id ='IND010' AND  STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."'
		 group by y.area_name order by y.area_name")->result_array();
	  		
	  		$child_gen = $this->db->query("select sum(x.category='General') as num_child,y.area_name as area_name,y.area_id as area_id  FROM child_area_detail as y
		 left join child_basic_detail as x on x.district_id =y.area_id
		 where  x.category='General' and y.parent_id ='IND010' AND  STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."'
		 group by y.area_name order by y.area_name")->result_array();
	  		
	  		$child_ebc = $this->db->query("select sum(x.category='EBC') as num_child,y.area_name as area_name,y.area_id as area_id  FROM child_area_detail as y
		 left join child_basic_detail as x on x.district_id =y.area_id
		 where  x.category='EBC' and y.parent_id ='IND010' AND  STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."'
		 group by y.area_name order by y.area_name")->result_array();
	  		
	  		$child_other = $this->db->query("select sum(x.category='Other') as num_child,y.area_name as area_name,y.area_id as area_id  FROM child_area_detail as y
		 left join child_basic_detail as x on x.district_id =y.area_id
		 where  x.category='Other' and y.parent_id ='IND010' AND  STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."'
		 group by y.area_name order by y.area_name")->result_array();
	  	}
	  	else if($roles_id==13 || $roles_id==20 )//DLC
	  	{
	  		$child_dist =$this->db->query("select child_area_detail.area_name as area_name,child_area_detail.area_id as area_id from child_area_detail
			   where child_area_detail.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $division_id."') group by child_area_detail.area_name order by child_area_detail.area_name")->result_array();
	  		
	  		$child_sc = $this->db->query("select sum(x.category='SC') as num_child,y.area_name as area_name,y.area_id as area_id  FROM child_area_detail as y
			 left join child_basic_detail as x on x.district_id =y.area_id
			 where  x.category='SC' and y.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $division_id."') AND  STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."'
			group by y.area_name order by y.area_name")->result_array();
	  		
	  		$child_st = $this->db->query("select sum(category='ST') as num_child,y.area_name as area_name,y.area_id as area_id FROM child_area_detail as y  left join child_basic_detail as x on x.district_id =y.area_id
			 where  x.category='ST' and y.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $division_id."') AND  STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."'
			 group by y.area_name order by y.area_name")->result_array();
	  		
	  		$child_obc = $this->db->query("
			 select sum(x.category='OBC') as num_child,y.area_name as area_name,y.area_id as area_id  FROM child_area_detail as y
			 left join child_basic_detail as x on x.district_id =y.area_id
			 where  x.category='OBC' and y.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $division_id."') AND  STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."'
			 group by y.area_name order by y.area_name")->result_array();
	  		
	  		$child_gen = $this->db->query("select sum(x.category='General') as num_child,y.area_name as area_name,y.area_id as area_id  FROM child_area_detail as y
		 left join child_basic_detail as x on x.district_id =y.area_id
		 where  x.category='General' and y.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $division_id."') AND  STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."'
		 group by y.area_name order by y.area_name")->result_array();
	  		$child_ebc = $this->db->query("select sum(x.category='EBC') as num_child,y.area_name as area_name,y.area_id as area_id  FROM child_area_detail as y
			 left join child_basic_detail as x on x.district_id =y.area_id
			 where  x.category='EBC' and y.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $division_id."') AND  STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."'
			 group by y.area_name order by y.area_name")->result_array();
	  		$child_other = $this->db->query("select sum(x.category='Other') as num_child,y.area_name as area_name,y.area_id as area_id  FROM child_area_detail as y
		 left join child_basic_detail as x on x.district_id =y.area_id
		 where  x.category='Other' and y.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $division_id."') AND  STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."'
		 group by y.area_name order by y.area_name")->result_array();
	  	}
	  	
	  	else if(($roles_id==2)||($roles_id==5)||($roles_id==6)||($roles_id==7)||($roles_id==8)||($roles_id==14)||($roles_id==16)||($roles_id==18)||($roles_id==19))//for ls ,leo and all district level
	  	{
	  		$child_dist =$this->db->query("select child_area_detail.area_name as area_name,child_area_detail.area_id as area_id from child_area_detail
			   where child_area_detail.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where child_area_detail.area_id='" . $dist_id ."') group by child_area_detail.area_name order by child_area_detail.area_name")->result_array();
	  		
	  		$child_sc = $this->db->query("select sum(x.category='SC') as num_child,y.area_name as area_name,y.area_id as area_id  FROM child_area_detail as y
			 left join child_basic_detail as x on x.district_id =y.area_id
			 where  x.category='SC' and y.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $division_id."') AND  STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."'
			group by y.area_name order by y.area_name")->result_array();
	  		
	  		$child_st = $this->db->query("select sum(category='ST') as num_child,y.area_name as area_name,y.area_id as area_id FROM child_area_detail as y  left join child_basic_detail as x on x.district_id =y.area_id
			 where  x.category='ST' and y.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $division_id."') AND  STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."'
			 group by y.area_name order by y.area_name")->result_array();
	  		
	  		$child_obc = $this->db->query("
			 select sum(x.category='OBC') as num_child,y.area_name as area_name,y.area_id as area_id  FROM child_area_detail as y
			 left join child_basic_detail as x on x.district_id =y.area_id
			 where  x.category='OBC' and y.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $division_id."') AND  STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."'
			 group by y.area_name order by y.area_name")->result_array();
	  		
	  		$child_gen = $this->db->query("select sum(x.category='General') as num_child,y.area_name as area_name,y.area_id as area_id  FROM child_area_detail as y
		 left join child_basic_detail as x on x.district_id =y.area_id
		 where  x.category='General' and y.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $division_id."') AND  STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."'
		 group by y.area_name order by y.area_name")->result_array();
	  		$child_ebc = $this->db->query("select sum(x.category='EBC') as num_child,y.area_name as area_name,y.area_id as area_id  FROM child_area_detail as y
			 left join child_basic_detail as x on x.district_id =y.area_id
			 where  x.category='EBC' and y.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $division_id."') AND  STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."'
			 group by y.area_name order by y.area_name")->result_array();
	  		$child_other = $this->db->query("select sum(x.category='Other') as num_child,y.area_name as area_name,y.area_id as area_id  FROM child_area_detail as y
		 left join child_basic_detail as x on x.district_id =y.area_id
		 where  x.category='Other' and y.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $division_id."') AND  STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."'
		 group by y.area_name order by y.area_name")->result_array();
	  	}
	  	
	  	$cumulative = array();
	  	
	  	for($i=0; $i<sizeof($child_dist); $i++){
	  		$cumulative[$i][0]=$child_dist[$i]['area_name'];
	  		$cumulative[$i][1]=0;
	  		$cumulative[$i][2]=0;
	  		$cumulative[$i][3]=0;
	  		$cumulative[$i][4]=0;
	  		$cumulative[$i][5]=0;
	  		$cumulative[$i][6]=0;
	  		if(sizeof($child_sc)>0)
	  		{
	  			
	  			foreach($child_sc as $row)
	  			{
	  				if($child_dist[$i]['area_id']==$row['area_id'])
	  				{
	  					$cumulative[$i][1]=$row['num_child'];
	  					
	  					break;
	  				}
	  				else{
	  					$cumulative[$i][1]=0;
	  				}
	  			}
	  			
	  		}
	  		
	  		if(sizeof($child_st)>0)
	  		{
	  			foreach($child_st as $row)
	  			{
	  				if($child_dist[$i]['area_id']==$row['area_id'])
	  				{
	  					$cumulative[$i][2]=$row['num_child'];
	  					break;
	  				}
	  				else{
	  					$cumulative[$i][2]=0;
	  				}
	  			}
	  			
	  		}
	  		
	  		if(sizeof($child_obc)>0)
	  		{
	  			foreach($child_obc as $row)
	  			{
	  				if($child_dist[$i]['area_id']==$row['area_id'])
	  				{
	  					$cumulative[$i][3]=$row['num_child'];
	  					break;
	  				}
	  				else{
	  					$cumulative[$i][3]=0;
	  				}
	  			}
	  			
	  		}
	  		
	  		if(sizeof($child_gen)>0)
	  		{
	  			foreach($child_gen as $row)
	  			{
	  				if($child_dist[$i]['area_id']==$row['area_id'])
	  				{
	  					$cumulative[$i][4]=$row['num_child'];
	  					break;
	  				}
	  				else{
	  					$cumulative[$i][4]=0;
	  				}
	  			}
	  			
	  		}
	  		
	  		if(sizeof($child_ebc)>0)
	  		{
	  			foreach($child_ebc as $row)
	  			{
	  				if($child_dist[$i]['area_id']==$row['area_id'])
	  				{
	  					$cumulative[$i][5]=$row['num_child'];
	  					break;
	  				}
	  				else{
	  					$cumulative[$i][5]=0;
	  				}
	  			}
	  			
	  		}
	  		
	  		if(sizeof($child_other)>0)
	  		{
	  			foreach($child_other as $row)
	  			{
	  				if($child_dist[$i]['area_id']==$row['area_id'])
	  				{
	  					$cumulative[$i][6]=$row['num_child'];
	  					break;
	  				}
	  				else{
	  					$cumulative[$i][6]=0;
	  				}
	  			}
	  			
	  		}
	  		
	  		$cumulative[$i][7]=$cumulative[$i][1]+$cumulative[$i][2]+$cumulative[$i][3]+$cumulative[$i][4]+$cumulative[$i][5]+$cumulative[$i][6];
	  		$tot1+=$cumulative[$i][1];
	  		$tot2+=$cumulative[$i][2];
	  		$tot3+=$cumulative[$i][3];
	  		$tot4+=$cumulative[$i][4];
	  		$tot5+=$cumulative[$i][5];
	  		$tot6+=$cumulative[$i][6];
	  	}
	  	
	  	if( $roles_id==10 || $roles_id==11 || $roles_id==21 || $roles_id==12 || $roles_id==13 || $roles_id==20 || $roles_id==22){
	  		
	  		$cumulative[sizeof($child_dist)][0]="<strong>Total</strong>";
	  		$cumulative[sizeof($child_dist)][1]="<strong>".$tot1."<strong>";
	  		$cumulative[sizeof($child_dist)][2]="<strong>".$tot2."<strong>";
	  		$cumulative[sizeof($child_dist)][3]="<strong>".$tot3."<strong>";
	  		$cumulative[sizeof($child_dist)][4]="<strong>".$tot4."<strong>";
	  		$cumulative[sizeof($child_dist)][5]="<strong>".$tot5."<strong>";
	  		$cumulative[sizeof($child_dist)][6]="<strong>".$tot6."<strong>";
	  		
	  		
	  	}
	  	
	  	
	  	return $cumulative ;
	  }
	  //for education
	  
	  //education
	  
	  public function get_education($from,$to,$dist) {
	  	$this->load->model('dashboard_model');
	  	$ses_ids=$this->session->userdata('login_user_id');
	  	$role=$this->dashboard_model->get_role_id($ses_ids);
	  	foreach($role as $rolep):
	  	$roles_id=$rolep['account_role_id'];
	  	$dist_id=$rolep['district_id'];
	  	$stat_id=$rolep['state_id'];
	  	endforeach;
	  	
	  	$newdistrict= $this->db->query("select  division_id from division_details  where division_details.district_id='" . $dist_id ."' ")->result_array();
	  	
	  	foreach($newdistrict as $newdistricts):
	  	$division_id=$newdistricts['division_id'];
	  	endforeach;
	  	
	  		
	  	if( $roles_id==10 || $roles_id==11 || $roles_id==21 || $roles_id==12 || $roles_id==22)//For LC and LC Operator
	  	{
	  		$child_dist =$this->db->query("select area_name,area_id from child_area_detail where parent_id='IND010' group by area_name order by area_name")->result_array();
	  		
	  		
	  		$child_Illiterate = $this->db->query("select sum(education='Illiterate') as num_child,area_id  from (select y.area_id, y.area_name,x.education from child_area_detail as y left join child_basic_detail as x on x.district_id =y.area_id and x.education='Illiterate'  where y.parent_id ='IND010' AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name order by area_name")->result_array();
	  		
	  		$child_UP = $this->db->query("select sum(education in('1st','2nd','3rd','4th','5th')) as num_child,area_id  from (select y.area_id, y.area_name,x.education from child_area_detail as y left join child_basic_detail as x on x.district_id =y.area_id and x.education in('1st','2nd','3rd','4th','5th')  where y.parent_id ='IND010' AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name order by area_name")->result_array();
	  
	  		$child_ML = $this->db->query("select sum(education in('6th','7th')) as num_child,area_id  from (select y.area_id, y.area_name,x.education from child_area_detail as y left join child_basic_detail as x on x.district_id =y.area_id and x.education in('6th','7th') where y.parent_id ='IND010' AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name order by area_name")->result_array();
	  		
	  		$child_UperP = $this->db->query("select sum(education in('8th','9th','10th')) as num_child,area_id  from (select y.area_id, y.area_name,x.education from child_area_detail as y left join child_basic_detail as x on x.district_id =y.area_id and x.education in('8th','9th','10th') where y.parent_id ='IND010' AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name order by area_name")->result_array();
	  		
	  		$child_HS = $this->db->query("select sum(education in('11th','12th')) as num_child,area_id  from (select y.area_id, y.area_name,x.education from child_area_detail as y left join child_basic_detail as x on x.district_id =y.area_id and x.education in('11th','12th')  where y.parent_id ='IND010' AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name order by area_name")->result_array();
	  		
	  		$child_NS = $this->db->query("select sum(education='' or education='0') as num_child,area_id  from (select y.area_id, y.area_name,x.education from child_area_detail as y left join child_basic_detail as x on x.district_id =y.area_id and x.education='' or x.education='0' where y.parent_id ='IND010' AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name order by area_name")->result_array();
	  		
	  	}
	  	else if($roles_id==13 || $roles_id==20 )
	  	{
	  		$child_dist =$this->db->query("select child_area_detail.area_name as area_name,child_area_detail.area_id as area_id from child_area_detail
			   where child_area_detail.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $division_id."') group by child_area_detail.area_name order by child_area_detail.area_name")->result_array();
	  		$child_Illiterate = $this->db->query("select sum(education='Illiterate') as num_child,area_id  from (select y.area_id, y.area_name,x.education from child_area_detail as y left join child_basic_detail as x on x.district_id =y.area_id and x.education='Illiterate'  where y.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $division_id."') AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name order by area_name")->result_array();
	  		$child_UP = $this->db->query("select sum(education in('1st','2nd','3rd','4th','5th')) as num_child,area_id  from (select y.area_id, y.area_name,x.education from child_area_detail as y left join child_basic_detail as x on x.district_id =y.area_id and x.education in('1st','2nd','3rd','4th','5th')  where y.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $division_id."') AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name order by area_name")->result_array();
	  		
	  		$child_ML = $this->db->query("select sum(education in('6th','7th')) as num_child,area_id  from (select y.area_id, y.area_name,x.education from child_area_detail as y left join child_basic_detail as x on x.district_id =y.area_id and x.education in('6th','7th') where y.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $division_id."')  AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name order by area_name")->result_array();
	  		
	  		$child_UperP = $this->db->query("select sum(education in('8th','9th','10th')) as num_child,area_id  from (select y.area_id, y.area_name,x.education from child_area_detail as y left join child_basic_detail as x on x.district_id =y.area_id and x.education in('8th','9th','10th') where y.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $division_id."') AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name order by area_name")->result_array();
	  		
	  		$child_HS = $this->db->query("select sum(education in('11th','12th')) as num_child,area_id  from (select y.area_id, y.area_name,x.education from child_area_detail as y left join child_basic_detail as x on x.district_id =y.area_id and x.education in('11th','12th')  where y.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $division_id."') AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name order by area_name")->result_array();
	  		
	  		$child_NS = $this->db->query("select sum(education='' or education='0') as num_child,area_id  from (select y.area_id, y.area_name,x.education from child_area_detail as y left join child_basic_detail as x on x.district_id =y.area_id and x.education='' or x.education='0' where y.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $division_id."') AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name order by area_name")->result_array();
	  	}
	  	else if(($roles_id==2)||($roles_id==5)||($roles_id==6)||($roles_id==7)||($roles_id==8)||($roles_id==14)||($roles_id==16)||($roles_id==18)||($roles_id==19))//for ls ,leo and all district level
	  	{
	  		$child_dist =$this->db->query("select child_area_detail.area_name as area_name,child_area_detail.area_id as area_id from child_area_detail
			   where child_area_detail.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where child_area_detail.area_id='" . $dist_id ."') group by child_area_detail.area_name order by child_area_detail.area_name")->result_array();
	  		$child_Illiterate = $this->db->query("select sum(education='Illiterate') as num_child,area_id  from (select y.area_id, y.area_name,x.education from child_area_detail as y left join child_basic_detail as x on x.district_id =y.area_id and x.education='Illiterate'  where y.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $division_id."') AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name order by area_name")->result_array();
	  		$child_UP = $this->db->query("select sum(education in('1st','2nd','3rd','4th','5th')) as num_child,area_id  from (select y.area_id, y.area_name,x.education from child_area_detail as y left join child_basic_detail as x on x.district_id =y.area_id and x.education in('1st','2nd','3rd','4th','5th')  where y.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $division_id."') AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name order by area_name")->result_array();
	  		
	  		$child_ML = $this->db->query("select sum(education in('6th','7th')) as num_child,area_id  from (select y.area_id, y.area_name,x.education from child_area_detail as y left join child_basic_detail as x on x.district_id =y.area_id and x.education in('6th','7th') where y.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $division_id."')  AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name order by area_name")->result_array();
	  		
	  		$child_UperP = $this->db->query("select sum(education in('8th','9th','10th')) as num_child,area_id  from (select y.area_id, y.area_name,x.education from child_area_detail as y left join child_basic_detail as x on x.district_id =y.area_id and x.education in('8th','9th','10th') where y.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $division_id."') AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name order by area_name")->result_array();
	  		
	  		$child_HS = $this->db->query("select sum(education in('11th','12th')) as num_child,area_id  from (select y.area_id, y.area_name,x.education from child_area_detail as y left join child_basic_detail as x on x.district_id =y.area_id and x.education in('11th','12th')  where y.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $division_id."') AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name order by area_name")->result_array();
	  		
	  		$child_NS = $this->db->query("select sum(education='' or education='0') as num_child,area_id  from (select y.area_id, y.area_name,x.education from child_area_detail as y left join child_basic_detail as x on x.district_id =y.area_id and x.education='' or x.education='0' where y.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $division_id."') AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name order by area_name")->result_array();
	  	}
	  	
	  	$cumulative = array();
	  	for($i=0; $i<sizeof($child_dist); $i++){
	  		$cumulative[$i][0]=$child_dist[$i]['area_name'];
	  		$cumulative[$i][1]=0;
	  		$cumulative[$i][2]=0;
	  		$cumulative[$i][3]=0;
	  		$cumulative[$i][4]=0;
	  		$cumulative[$i][5]=0;
	  		$cumulative[$i][6]=0;
	  		$cumulative[$i][7]=0;
	  		
	  		if(sizeof($child_Illiterate)>0)
	  		{
	  			foreach($child_Illiterate as $row)
	  			{
	  				if($child_dist[$i]['area_id']==$row['area_id'])
	  				{
	  					
	  					$cumulative[$i][1]=$row['num_child'];
	  					break;
	  				}
	  				else{
	  					$cumulative[$i][1]=0;
	  				}
	  			}
	  			
	  		}
	  		
	  		if(sizeof($child_UP)>0)
	  		{
	  			foreach($child_UP as $row)
	  			{
	  				
	  				if($child_dist[$i]['area_id']==$row['area_id'])
	  				{
	  					$cumulative[$i][2]=$row['num_child'];
	  					break;
	  				}
	  				else{
	  					$cumulative[$i][2]=0;
	  				}
	  			}
	  			
	  		}
	  		
	  		if(sizeof($child_ML)>0)
	  		{
	  			foreach($child_ML as $row)
	  			{
	  				
	  				if($child_dist[$i]['area_id']==$row['area_id'])
	  				{
	  					$cumulative[$i][3]=$row['num_child'];
	  					break;
	  				}
	  				else{
	  					$cumulative[$i][3]=0;
	  				}
	  			}
	  			
	  		}
	  		
	  		if(sizeof($child_UperP)>0)
	  		{
	  			foreach($child_UperP as $row)
	  			{
	  				
	  				if($child_dist[$i]['area_id']==$row['area_id'])
	  				{
	  					$cumulative[$i][4]=$row['num_child'];
	  					break;
	  				}
	  				else{
	  					$cumulative[$i][4]=0;
	  				}
	  			}
	  			
	  		}
	  		
	  		if(sizeof($child_HS)>0)
	  		{
	  			foreach($child_HS as $row)
	  			{
	  				
	  				if($child_dist[$i]['area_id']==$row['area_id'])
	  				{
	  					$cumulative[$i][5]=$row['num_child'];
	  					break;
	  				}
	  				else{
	  					$cumulative[$i][5]=0;
	  				}
	  			}
	  			
	  		}
	  		
	  		if(sizeof($child_NS)>0)
	  		{
	  			foreach($child_NS as $row)
	  			{
	  				
	  				if($child_dist[$i]['area_id']==$row['area_id'])
	  				{
	  					$cumulative[$i][6]=$row['num_child'];
	  					break;
	  				}
	  				else{
	  					$cumulative[$i][6]=0;
	  				}
	  			}
	  			
	  		}
	  		
	  		
	  		$cumulative[$i][7]=$cumulative[$i][1]+$cumulative[$i][2]+$cumulative[$i][3]+$cumulative[$i][4]+$cumulative[$i][5]+$cumulative[$i][6];
	  		$tot1+=$cumulative[$i][1];
	  		$tot2+=$cumulative[$i][2];
	  		$tot3+=$cumulative[$i][3];
	  		$tot4+=$cumulative[$i][4];
	  		$tot5+=$cumulative[$i][5];
	  		$tot6+=$cumulative[$i][6];
	  	}
	  	if( $roles_id==10 || $roles_id==11 || $roles_id==21 || $roles_id==12 || $roles_id==13 || $roles_id==20 || $roles_id==22){
	  		$cumulative[sizeof($child_dist)][0]="<strong>Total</strong>";
	  		$cumulative[sizeof($child_dist)][1]="<strong>".$tot1."<strong>";
	  		$cumulative[sizeof($child_dist)][2]="<strong>".$tot2."<strong>";
	  		$cumulative[sizeof($child_dist)][3]="<strong>".$tot3."<strong>";
	  		$cumulative[sizeof($child_dist)][4]="<strong>".$tot4."<strong>";
	  		$cumulative[sizeof($child_dist)][5]="<strong>".$tot5."<strong>";
	  		$cumulative[sizeof($child_dist)][6]="<strong>".$tot6."<strong>";
	  		$cumulative[sizeof($child_dist)][7]="<strong>".$tot1+$tot2+$tot3+$tot4+$tot5+$tot6."<strong>";
	  	}
	  	return($cumulative);
	  	
	  	//echo json_encode($cumulative);
	  		
	  }
	  
	  //age wise break up
	  
	  public function get_age($from,$to,$dist) {
	  	$this->load->model('dashboard_model');
	  	$ses_ids=$this->session->userdata('login_user_id');
	  	$role=$this->dashboard_model->get_role_id($ses_ids);
	  	foreach($role as $rolep):
	  	$roles_id=$rolep['account_role_id'];
	  	$dist_id=$rolep['district_id'];
	  	$stat_id=$rolep['state_id'];
	  	endforeach;
	  	$newdistrict= $this->db->query("select  division_id from division_details  where division_details.district_id='" . $dist_id ."' ")->result_array();
	  	//$from='2014-04-01';
	  	//$to='2017-05-26';
	  	//echo $roles_id;
	  	foreach($newdistrict as $newdistricts):
	  	$division_id=$newdistricts['division_id'];
	  	endforeach;
	  	if( $roles_id==10 || $roles_id==11 || $roles_id==21 || $roles_id==12 || $roles_id==22)//For LC and LC Operator
	  	{
	  		$child_dist =$this->db->query("select area_name,area_id from child_area_detail where parent_id='IND010' group by area_name order by area_name")->result_array();
	  		
	  		$child_b10 = $this->db->query("select sum(d1<10 or year<10) as num_child,area_id from (select y.area_id,floor(DATEDIFF(DATE(idate_of_rescue) , DATE(dob)))/365 as d1,x.year, y.area_name from child_area_detail as y left join child_basic_detail as x on x.district_id =y.area_id and (isdob='Yes' and (floor(DATEDIFF(DATE(idate_of_rescue) , DATE(dob))/365) <10) or (isdob='No' and year <10)) where y.parent_id ='IND010' AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' )Z group by area_name order by area_name")->result_array();
	  		
	  		$child_b14 = $this->db->query("select sum((d1>=10 and d1<=14)or(year>=10 and year<=14)) as num_child,area_id from (select y.area_id,floor(DATEDIFF(DATE(idate_of_rescue) , DATE(dob))/365) as d1,x.year, y.area_name from child_area_detail as y left join child_basic_detail as x on x.district_id =y.area_id and ((isdob='Yes' and (floor(DATEDIFF(DATE(idate_of_rescue) , DATE(dob))/365) in(10,11,12,13,14))) or (isdob='No'and year in(10,11,12,13,14))) where y.parent_id ='IND010' AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."')Z group by area_name order by area_name")->result_array();
	  		
	  		$child_b15 = $this->db->query("select sum((d1>=15) or (year<>''and year is not null and year>=15)) as num_child,area_id from (select y.area_id,(floor(DATEDIFF(DATE(idate_of_rescue) , DATE(dob)))/365) as d1,x.year, y.area_name from child_area_detail as y left join child_basic_detail as x on x.district_id =y.area_id and ((floor(DATEDIFF(DATE(idate_of_rescue) , DATE(dob))/365) >=15 and isdob='Yes') or (year<>''and year is not null and year >=15 and isdob='No')) where y.parent_id ='IND010' AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."')Z group by area_name order by area_name")->result_array();
	  	}
	  	else if($roles_id==13 || $roles_id==20 )//DLC
	  	{
	  		$child_dist =$this->db->query("select child_area_detail.area_name as area_name,child_area_detail.area_id as area_id from child_area_detail
			   where child_area_detail.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $division_id."') group by child_area_detail.area_name order by child_area_detail.area_name")->result_array();
	  		
	  		$child_b10 = $this->db->query("select sum(d1<10 or year<10) as num_child,area_id from (select y.area_id,floor(DATEDIFF(DATE(idate_of_rescue) , DATE(dob)))/365 as d1,x.year, y.area_name from child_area_detail as y left join child_basic_detail as x on x.district_id =y.area_id and (isdob='Yes' and (floor(DATEDIFF(DATE(idate_of_rescue) , DATE(dob))/365) <10) or (isdob='No' and year <10)) where y.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $division_id."')  AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' )Z group by area_name order by area_name")->result_array();
	  		
	  		$child_b14 = $this->db->query("select sum((d1>=10 and d1<=14)or(year>=10 and year<=14)) as num_child,area_id from (select y.area_id,floor(DATEDIFF(DATE(idate_of_rescue) , DATE(dob))/365) as d1,x.year, y.area_name from child_area_detail as y left join child_basic_detail as x on x.district_id =y.area_id and ((isdob='Yes' and (floor(DATEDIFF(DATE(idate_of_rescue) , DATE(dob))/365) in(10,11,12,13,14))) or (isdob='No'and year in(10,11,12,13,14))) where y.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $division_id."') AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."')Z group by area_name order by area_name")->result_array();
	  		$child_b15 = $this->db->query("select sum((d1>=15) or (year<>''and year is not null and year>=15)) as num_child,area_id from (select y.area_id,(floor(DATEDIFF(DATE(idate_of_rescue) , DATE(dob)))/365) as d1,x.year, y.area_name from child_area_detail as y left join child_basic_detail as x on x.district_id =y.area_id and ((floor(DATEDIFF(DATE(idate_of_rescue) , DATE(dob))/365) >=15 and isdob='Yes') or (year<>''and year is not null and year >=15 and isdob='No')) where y.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $division_id."') AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."')Z group by area_name order by area_name")->result_array();
	  	}
	  	else if(($roles_id==2)||($roles_id==5)||($roles_id==6)||($roles_id==7)||($roles_id==8)||($roles_id==14)||($roles_id==16)||($roles_id==18)||($roles_id==19))//for ls ,leo and all district level
	  	{
	  		$child_dist =$this->db->query("select child_area_detail.area_name as area_name,child_area_detail.area_id as area_id from child_area_detail
			   where child_area_detail.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where child_area_detail.area_id='" . $dist_id ."') group by child_area_detail.area_name order by child_area_detail.area_name")->result_array();
	  		
	  		$child_b10 = $this->db->query("select sum(d1<10 or year<10) as num_child,area_id from (select y.area_id,floor(DATEDIFF(DATE(idate_of_rescue) , DATE(dob)))/365 as d1,x.year, y.area_name from child_area_detail as y left join child_basic_detail as x on x.district_id =y.area_id and (isdob='Yes' and (floor(DATEDIFF(DATE(idate_of_rescue) , DATE(dob))/365) <10) or (isdob='No' and year <10)) where y.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $division_id."')  AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' )Z group by area_name order by area_name")->result_array();
	  		
	  		$child_b14 = $this->db->query("select sum((d1>=10 and d1<=14)or(year>=10 and year<=14)) as num_child,area_id from (select y.area_id,floor(DATEDIFF(DATE(idate_of_rescue) , DATE(dob))/365) as d1,x.year, y.area_name from child_area_detail as y left join child_basic_detail as x on x.district_id =y.area_id and ((isdob='Yes' and (floor(DATEDIFF(DATE(idate_of_rescue) , DATE(dob))/365) in(10,11,12,13,14))) or (isdob='No'and year in(10,11,12,13,14))) where y.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $division_id."') AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."')Z group by area_name order by area_name")->result_array();
	  		$child_b15 = $this->db->query("select sum((d1>=15) or (year<>''and year is not null and year>=15)) as num_child,area_id from (select y.area_id,(floor(DATEDIFF(DATE(idate_of_rescue) , DATE(dob)))/365) as d1,x.year, y.area_name from child_area_detail as y left join child_basic_detail as x on x.district_id =y.area_id and ((floor(DATEDIFF(DATE(idate_of_rescue) , DATE(dob))/365) >=15 and isdob='Yes') or (year<>''and year is not null and year >=15 and isdob='No')) where y.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $division_id."') AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."')Z group by area_name order by area_name")->result_array();
	  	}
	  	
	  	$cumulative = array();
	  	for($i=0; $i<sizeof($child_dist); $i++){
	  		$cumulative[$i][0]=$child_dist[$i]['area_name'];
	  		$cumulative[$i][1]=0;
	  		$cumulative[$i][2]=0;
	  		$cumulative[$i][3]=0;
	  		$cumulative[$i][4]=0;
	  		
	  		
	  		if(sizeof($child_b10)>0)
	  		{
	  			
	  			foreach($child_b10 as $row)
	  			{
	  				
	  				if($child_dist[$i]['area_id']==$row['area_id'])
	  				{
	  					
	  					
	  					$cumulative[$i][1]=$row['num_child'];
	  					
	  					break;
	  				}
	  				else{
	  					$cumulative[$i][1]=0;
	  				}
	  			}
	  			
	  		}
	  		
	  		if(sizeof($child_b14)>0)
	  		{
	  			foreach($child_b14 as $row)
	  			{
	  				if($child_dist[$i]['area_id']==$row['area_id'])
	  				{
	  					$cumulative[$i][2]=$row['num_child'];
	  					break;
	  				}
	  				else{
	  					$cumulative[$i][2]=0;
	  				}
	  			}
	  			
	  		}
	  		
	  		if(sizeof($child_b15)>0)
	  		{
	  			foreach($child_b15 as $row)
	  			{
	  				if($child_dist[$i]['area_id']==$row['area_id'])
	  				{
	  					$cumulative[$i][3]=$row['num_child'];
	  					break;
	  				}
	  				else{
	  					$cumulative[$i][3]=0;
	  				}
	  			}
	  			
	  		}
	  		//$cumulative[$i][4]=$child_bnot[$i]['num_child']<>NULL ? $child_bnot[$i]['num_child'] : 0;
	  		$cumulative[$i][4]=$cumulative[$i][1]+$cumulative[$i][2]+$cumulative[$i][3];
	  		$tot1+=$cumulative[$i][1];
	  		$tot2+=$cumulative[$i][2];
	  		$tot3+=$cumulative[$i][3];
	  		$tot4+=$cumulative[$i][4];
	  	}
	  	
	  	if( $roles_id==10 || $roles_id==11 || $roles_id==21 || $roles_id==12 || $roles_id==13 || $roles_id==20 || $roles_id==22){
	  	
	  		$cumulative[sizeof($child_dist)][0]="<strong>Total</strong>";
	  		$cumulative[sizeof($child_dist)][1]="<strong>".$tot1."<strong>";
	  		$cumulative[sizeof($child_dist)][2]="<strong>".$tot2."<strong>";
	  		$cumulative[sizeof($child_dist)][3]="<strong>".$tot3."<strong>";
	  		$cumulative[sizeof($child_dist)][4]="<strong>".$tot4."<strong>";
	  		
	  		
	  		
	  	}
	  	
	  	
	  	return ($cumulative);
	  	//echo json_encode($cumulative);
	  }
	  
	  //get the CMRF transaction details Entered by Lc_operator
	  public function get_cmrf_trn_details($from,$to,$dist) {
	  	
	  	
	  	$this->load->model('dashboard_model');
	  	$ses_ids=$this->session->userdata('login_user_id');
	  	$role=$this->dashboard_model->get_role_id($ses_ids);
	  	foreach($role as $rolep):
	  	$roles_id=$rolep['account_role_id'];
	  	$dist_id=$rolep['district_id'];
	  	$stat_id=$rolep['state_id'];
	  	endforeach;
	  	
	  	$newdistrict= $this->db->query("select  division_id from division_details  where division_details.district_id='" . $dist_id ."' ")->result_array();
	  	//$from='2014-04-01';
	  	//$to='2017-05-26';
	  	//echo $roles_id;
	  	foreach($newdistrict as $newdistricts):
	  	$division_id=$newdistricts['division_id'];
	  	endforeach;
	  	
	  	
	  	
	  	//$from=$_POST['from'];
	  	//$to=$_POST['to'];
	  	
	  	//echo $roles_id;
	  	if( $roles_id==10 || $roles_id==11 || $roles_id==21 || $roles_id==12 || $roles_id==22)//For LC and LC Operator
	  	{
	  		$child_dist =$this->db->query("select area_name,area_id from child_area_detail where parent_id='IND010' group by area_name order by area_name")->result_array();
	  		
	  		
	  		$no_of_times_demands = $this->db->query("SELECT count(cmrf_trn_details.dr_date) as num_count,child_area_detail.area_id as area_id FROM cmrf_trn_details left join child_area_detail on cmrf_trn_details.district_id=child_area_detail.area_id COLLATE utf8_general_ci where  cmrf_trn_details.dr_date BETWEEN  '".$from."' AND '".$to."'  group by child_area_detail.area_id")->result_array();
	  		$no_of_cl_raised = $this->db->query("SELECT sum(cmrf_trn_details.dr_cl_no) as num_count,child_area_detail.area_id as area_id  FROM cmrf_trn_details left join child_area_detail on cmrf_trn_details.district_id=child_area_detail.area_id COLLATE utf8_general_ci where cmrf_trn_details.dr_date BETWEEN  '".$from."' AND '".$to."'  group by child_area_detail.area_id")->result_array();
	  		$no_of_times_released= $this->db->query("SELECT count(cmrf_trn_details.drel_date) as num_count,child_area_detail.area_id as area_id  FROM cmrf_trn_details left join child_area_detail on cmrf_trn_details.district_id=child_area_detail.area_id COLLATE utf8_general_ci where cmrf_trn_details.drel_date BETWEEN  '".$from."' AND '".$to."'  group by child_area_detail.area_id")->result_array();
	  		$no_of_cl_released= $this->db->query("SELECT sum(cmrf_trn_details.drel_cl_no) as num_count,child_area_detail.area_id as area_id  FROM cmrf_trn_details left join child_area_detail on cmrf_trn_details.district_id=child_area_detail.area_id COLLATE utf8_general_ci where cmrf_trn_details.drel_date BETWEEN  '".$from."' AND '".$to."'  group by child_area_detail.area_id")->result_array();
	  		$child_fund_paid = $this->db->query("select sum(mtransfer_proof='Yes') as num_child,area_id from (select y.area_id, y.area_name,w.mtransfer_proof from child_area_detail as y left join (child_basic_detail as x left join cm_fund_eligibility as w on x.child_id=w.child_id) on x.district_id =y.area_id where y.parent_id ='IND010' AND w.mtransfer_proof='Yes' AND w.physically_verified='Yes' AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name order by area_name")->result_array();
	  		
	  		
	  	}
	  	if( $roles_id==13 || $roles_id==20)//For LC and LC Operator
	  	{
	  		$child_dist =$this->db->query("select child_area_detail.area_name as area_name,child_area_detail.area_id as area_id from child_area_detail
			   where child_area_detail.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $division_id."') group by child_area_detail.area_name order by child_area_detail.area_name")->result_array();
	  		
	  		$no_of_times_demands = $this->db->query("SELECT count(cmrf_trn_details.dr_date) as num_count,child_area_detail.area_id as area_id FROM cmrf_trn_details left join division_details on cmrf_trn_details.district_id=division_details.district_id left join child_area_detail on cmrf_trn_details.district_id=child_area_detail.area_id COLLATE utf8_general_ci where  cmrf_trn_details.dr_date BETWEEN  '".$from."' AND '".$to."' AND division_details.division_id='".$division_id."'  group by child_area_detail.area_id")->result_array();
	  		$no_of_cl_raised = $this->db->query("SELECT sum(cmrf_trn_details.dr_cl_no) as num_count,child_area_detail.area_id as area_id  FROM cmrf_trn_details left join division_details on cmrf_trn_details.district_id=division_details.district_id left join child_area_detail on cmrf_trn_details.district_id=child_area_detail.area_id COLLATE utf8_general_ci where cmrf_trn_details.dr_date BETWEEN  '".$from."' AND '".$to."' AND division_details.division_id='".$division_id."'  group by child_area_detail.area_id")->result_array();
	  		$no_of_times_released= $this->db->query("SELECT count(cmrf_trn_details.drel_date) as num_count,child_area_detail.area_id as area_id  FROM cmrf_trn_details left join division_details on cmrf_trn_details.district_id=division_details.district_id left join child_area_detail on cmrf_trn_details.district_id=child_area_detail.area_id COLLATE utf8_general_ci where cmrf_trn_details.drel_date BETWEEN  '".$from."' AND '".$to."' AND division_details.division_id='".$division_id."'  group by child_area_detail.area_id")->result_array();
	  		$no_of_cl_released= $this->db->query("SELECT sum(cmrf_trn_details.drel_cl_no) as num_count,child_area_detail.area_id as area_id  FROM cmrf_trn_details left join division_details on cmrf_trn_details.district_id=division_details.district_id left join child_area_detail on cmrf_trn_details.district_id=child_area_detail.area_id COLLATE utf8_general_ci where cmrf_trn_details.drel_date BETWEEN  '".$from."' AND '".$to."' AND division_details.division_id='".$division_id."'  group by child_area_detail.area_id")->result_array();
	  		$child_fund_paid = $this->db->query("select sum(mtransfer_proof='Yes') as num_child,area_id from (select y.area_id, y.area_name,w.mtransfer_proof from child_area_detail as y left join (child_basic_detail as x left join cm_fund_eligibility as w on x.child_id=w.child_id) on x.district_id =y.area_id where y.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $division_id."') AND w.mtransfer_proof='Yes' AND w.physically_verified='Yes' AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name order by area_name")->result_array();
	  		
	  		
	  	}
	  	if(($roles_id==2)||($roles_id==5)||($roles_id==6)||($roles_id==7)||($roles_id==8)||($roles_id==14)||($roles_id==16)||($roles_id==18)||($roles_id==19))//for ls ,leo and all district level
	  	{
	  		$child_dist =$this->db->query("select child_area_detail.area_name as area_name,child_area_detail.area_id as area_id from child_area_detail
			   where child_area_detail.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where child_area_detail.area_id='" . $dist_id ."') group by child_area_detail.area_name order by child_area_detail.area_name")->result_array();
	  		
	  		$no_of_times_demands = $this->db->query("SELECT count(cmrf_trn_details.dr_date) as num_count,child_area_detail.area_id as area_id FROM cmrf_trn_details left join division_details on cmrf_trn_details.district_id=division_details.district_id left join child_area_detail on cmrf_trn_details.district_id=child_area_detail.area_id COLLATE utf8_general_ci where  cmrf_trn_details.dr_date BETWEEN  '".$from."' AND '".$to."' AND division_details.division_id='".$division_id."'  group by child_area_detail.area_id")->result_array();
	  		$no_of_cl_raised = $this->db->query("SELECT sum(cmrf_trn_details.dr_cl_no) as num_count,child_area_detail.area_id as area_id  FROM cmrf_trn_details left join division_details on cmrf_trn_details.district_id=division_details.district_id left join child_area_detail on cmrf_trn_details.district_id=child_area_detail.area_id COLLATE utf8_general_ci where cmrf_trn_details.dr_date BETWEEN  '".$from."' AND '".$to."' AND division_details.division_id='".$division_id."'  group by child_area_detail.area_id")->result_array();
	  		$no_of_times_released= $this->db->query("SELECT count(cmrf_trn_details.drel_date) as num_count,child_area_detail.area_id as area_id  FROM cmrf_trn_details left join division_details on cmrf_trn_details.district_id=division_details.district_id left join child_area_detail on cmrf_trn_details.district_id=child_area_detail.area_id COLLATE utf8_general_ci where cmrf_trn_details.drel_date BETWEEN  '".$from."' AND '".$to."' AND division_details.division_id='".$division_id."'  group by child_area_detail.area_id")->result_array();
	  		$no_of_cl_released= $this->db->query("SELECT sum(cmrf_trn_details.drel_cl_no) as num_count,child_area_detail.area_id as area_id  FROM cmrf_trn_details left join division_details on cmrf_trn_details.district_id=division_details.district_id left join child_area_detail on cmrf_trn_details.district_id=child_area_detail.area_id COLLATE utf8_general_ci where cmrf_trn_details.drel_date BETWEEN  '".$from."' AND '".$to."' AND division_details.division_id='".$division_id."'  group by child_area_detail.area_id")->result_array();
	  		$child_fund_paid = $this->db->query("select sum(mtransfer_proof='Yes') as num_child,area_id from (select y.area_id, y.area_name,w.mtransfer_proof from child_area_detail as y left join (child_basic_detail as x left join cm_fund_eligibility as w on x.child_id=w.child_id) on x.district_id =y.area_id where y.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $division_id."') AND w.mtransfer_proof='Yes' AND w.physically_verified='Yes' AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name order by area_name")->result_array();
	  		//echo "select sum(mtransfer_proof='Yes') as num_child,area_id from (select y.area_id, y.area_name,w.mtransfer_proof from child_area_detail as y left join (child_basic_detail as x left join cm_fund_eligibility as w on x.child_id=w.child_id) on x.district_id =y.area_id where y.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $dist_id ."') AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name order by area_name" ;
	  		
	  	}
	  	
	  	$cumulative = array();
	  	for($i=0; $i<sizeof($child_dist); $i++){
	  		$cumulative[$i][0]=$child_dist[$i]['area_name'];
	  		$cumulative[$i][1]=0;
	  		$cumulative[$i][2]=0;
	  		$cumulative[$i][3]=0;
	  		$cumulative[$i][4]=0;
	  		$cumulative[$i][5]=0;
	  		$cumulative[$i][6]=0;
	  		$cmrf_tot=array();
	  		if(sizeof($no_of_times_demands)>0)
	  		{
	  			
	  			foreach($no_of_times_demands as $row)
	  			{
	  				if($child_dist[$i]['area_id']==$row['area_id'])
	  				{
	  					if($row['num_count']==NULL || $row['num_count']==0){
	  						$cumulative[$i][1]=0 ;
	  						$cmrf_tot[$i][1]=0 ;
	  					}
	  					else{
	  						$cumulative[$i][1]='<a href="'.base_url().'index.php?dashboard/get_cmrf_trn_data/'.$from.'/'.$to.'/'.$row['area_id'].'">'.$row['num_count'].'</a>';
	  						$cmrf_tot[$i][1]=$row['num_count'];
	  					}
	  					break;
	  				}
	  				else{
	  					$cumulative[$i][1]=0;
	  					$cmrf_tot[$i][1]=0 ;
	  				}
	  			}
	  			
	  		}
	  		if(sizeof($no_of_cl_raised)>0)
	  		{
	  			
	  			foreach($no_of_cl_raised as $row)
	  			{
	  				if($child_dist[$i]['area_id']==$row['area_id'])
	  				{
	  					if($row['num_count']==NULL || $row['num_count']==0){
	  						$cumulative[$i][2]=0 ;
	  						$cmrf_tot[$i][2]=0 ;
	  					}
	  					else{
	  						$cumulative[$i][2]='<a href="'.base_url().'index.php?dashboard/get_cmrf_trn_data/'.$from.'/'.$to.'/'.$row['area_id'].'">'.$row['num_count'].'</a>';
	  						$cmrf_tot[$i][2]=$row['num_count'];
	  					}
	  					break;
	  				}
	  				else{
	  					$cumulative[$i][2]=0;
	  					$cmrf_tot[$i][2]=0 ;
	  				}
	  			}
	  			
	  		}
	  		if(sizeof($no_of_times_released)>0)
	  		{
	  			
	  			foreach($no_of_times_released as $row)
	  			{
	  				if($child_dist[$i]['area_id']==$row['area_id'])
	  				{
	  					if($row['num_count']==NULL || $row['num_count']==0){
	  						$cumulative[$i][3]=0 ;
	  						$cmrf_tot[$i][3]=0 ;
	  					}
	  					else{
	  						$cumulative[$i][3]='<a href="'.base_url().'index.php?dashboard/get_cmrf_trn_data/'.$from.'/'.$to.'/'.$row['area_id'].'">'.$row['num_count'].'</a>';
	  						$cmrf_tot[$i][3]=$row['num_count'];
	  					}
	  					break;
	  				}
	  				else{
	  					$cumulative[$i][31]=0;
	  					$cmrf_tot[$i][3]=0 ;
	  				}
	  			}
	  			
	  		}
	  		if(sizeof($no_of_cl_released)>0)
	  		{
	  			
	  			foreach($no_of_cl_released as $row)
	  			{
	  				if($child_dist[$i]['area_id']==$row['area_id'])
	  				{
	  					if($row['num_count']==NULL || $row['num_count']==0){
	  						$cumulative[$i][4]=0 ;
	  						$cmrf_tot[$i][4]=0 ;
	  					}
	  					else{
	  						$cumulative[$i][4]='<a href="'.base_url().'index.php?dashboard/get_cmrf_trn_data/'.$from.'/'.$to.'/'.$row['area_id'].'">'.$row['num_count'].'</a>';
	  						$cmrf_tot[$i][4]=$row['num_count'];
	  					}
	  					break;
	  				}
	  				else{
	  					$cumulative[$i][4]=0;
	  					$cmrf_tot[$i][4]=0 ;
	  				}
	  			}
	  			
	  		}
	  		if(sizeof($child_fund_paid)>0)
	  		{
	  			$cond="mtransfer_proof";
	  			$cond_val="Yes";
	  			foreach($child_fund_paid as $row)
	  			{
	  				if($child_dist[$i]['area_id']==$row['area_id'])
	  				{
	  					if($row['num_child']==NULL || $row['num_child']==0){
	  						$cumulative[$i][6]=0 ;
	  						$cmrf_tot[$i][6]=0 ;
	  					}
	  					else{
	  						
	  						$cumulative[$i][6]='<a href="'.base_url().'index.php?dashboard/get_cm_relief_data/'.$from.'/'.$to.'/'.$row['area_id'].'/'.$cond.'/'.$cond_val.'">'.$row['num_child'].'</a>';
	  						$cmrf_tot[$i][6]=$row['num_child'] ;
	  					}
	  					break;
	  				}
	  				else{
	  					$cumulative[$i][6]=0;
	  					$cmrf_tot[$i][6]=0 ;
	  				}
	  			}
	  			
	  		}
	  		
	  		$tot1+=$cmrf_tot[$i][1];
	  		$tot2+=$cmrf_tot[$i][2];
	  		$tot3+=$cmrf_tot[$i][3];
	  		$tot4+=$cmrf_tot[$i][4];
	  		
	  		$cumulative[$i][5]=($cmrf_tot[$i][2]-$cmrf_tot[$i][4]);
	  		$tot5+=($cmrf_tot[$i][2]-$cmrf_tot[$i][4]);
	  		
	  		$tot6+=$cmrf_tot[$i][6];
	  		$cumulative[$i][7]=($cmrf_tot[$i][4]-$cmrf_tot[$i][6]);
	  		$tot7+=($cmrf_tot[$i][4]-$cmrf_tot[$i][6]);
	  	}
	  	if( $roles_id==10 || $roles_id==11 || $roles_id==21 || $roles_id==12 || $roles_id==13 || $roles_id==20 || $roles_id==22){
	  		$res1=$tot2-$tot4;
	  		$res2=$tot4-$tot6 ;
	  		
	  		$cumulative[sizeof($child_dist)][0]="<strong>Total</strong>";
	  		$cumulative[sizeof($child_dist)][1]="<strong>".$tot1."<strong>";
	  		$cumulative[sizeof($child_dist)][2]="<strong>".$tot2."<strong>";
	  		$cumulative[sizeof($child_dist)][3]="<strong>".$tot3."<strong>";
	  		$cumulative[sizeof($child_dist)][4]="<strong>".$tot4."<strong>";
	  		$cumulative[sizeof($child_dist)][5]="<strong>".$res1."<strong>";
	  		$cumulative[sizeof($child_dist)][6]="<strong>".$tot6."<strong>";
	  		$cumulative[sizeof($child_dist)][7]="<strong>".$res2."<strong>";
	  		
	  	}
	  	return($cumulative);
	  	
	  	//echo json_encode($cumulative);
	  }
	
	  public function get_RehCm_relief($from,$to,$dist_id){
	  	
	  	
	  	$this->load->model('dashboard_model');
	  	$ses_ids=$this->session->userdata('login_user_id');
	  	$role=$this->dashboard_model->get_role_id($ses_ids);
	  	foreach($role as $rolep):
	  	$roles_id=$rolep['account_role_id'];
	  	$dist_id=$rolep['district_id'];
	  	$stat_id=$rolep['state_id'];
	  	endforeach;
	  	$newdistrict= $this->db->query("select  division_id from division_details  where division_details.district_id='" . $dist_id ."' ")->result_array();
	  	foreach($newdistrict as $newdistricts):
	  	$division_id=$newdistricts['division_id'];
	  	endforeach;
	  	
	  	
	  	//echo $roles_id;
	  	if( $roles_id==10 || $roles_id==11 || $roles_id==21  || $roles_id==12 || $roles_id==22)//For LC and LC Operator
	  	{
	  		$child_dist =$this->db->query("select area_name,area_id from child_area_detail where parent_id='IND010' group by area_name order by area_name")->result_array();
	  		
	  		// echo "select sum(physically_verified='Yes') as num_child,area_id from (select y.area_id, y.area_name,w.physically_verified from child_area_detail as y left join (child_basic_detail as x left join cm_fund_eligibility as w on x.child_id=w.child_id AND w.physically_verified='Yes' ) on x.district_id =y.area_id where y.parent_id ='IND010' AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name order by area_name" ;
	  		
	  		$child_physically_verified_yes = $this->db->query("select sum(physically_verified='Yes') as num_child,area_id from (select y.area_id, y.area_name,w.physically_verified from child_area_detail as y left join (cm_fund_eligibility as w left join child_basic_detail as x on w.child_id=x.child_id AND w.physically_verified='Yes' ) on x.district_id =y.area_id where y.parent_id ='IND010' AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name order by area_name")->result_array();
	  		
	  		$child_physically_verified_no = $this->db->query("select sum(physically_verified='No') as num_child,area_id from (select y.area_id, y.area_name,w.physically_verified from child_area_detail as y left join (cm_fund_eligibility as w left join child_basic_detail as x on w.child_id=x.child_id) on x.district_id =y.area_id where y.parent_id ='IND010' AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name order by area_name")->result_array();
	  		$child_eligible_cm_yes = $this->db->query("select sum(eligible_cm_fund='Yes') as num_child,area_id from (select y.area_id, y.area_name,w.eligible_cm_fund from child_area_detail as y left join (cm_fund_eligibility as w left join child_basic_detail as x on w.child_id=x.child_id) on x.district_id =y.area_id where y.parent_id ='IND010' AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name order by area_name")->result_array();
	  		$child_eligible_cm_no = $this->db->query("select sum(eligible_cm_fund='No') as num_child,area_id from (select y.area_id, y.area_name,w.eligible_cm_fund from child_area_detail as y left join (cm_fund_eligibility as w left join child_basic_detail as x on w.child_id=x.child_id) on x.district_id =y.area_id where y.parent_id ='IND010' AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name order by area_name")->result_array();
	  		$child_fund_paid = $this->db->query("select sum(mtransfer_proof='Yes') as num_child,area_id from (select y.area_id, y.area_name,w.mtransfer_proof from child_area_detail as y left join (cm_fund_eligibility as w left join child_basic_detail as x on w.child_id=x.child_id) on x.district_id =y.area_id where y.parent_id ='IND010' AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name order by area_name")->result_array();
	  		$child_demand_raised_no = $this->db->query("select sum(demand_raised='1') as num_child,area_id from (select y.area_id, y.area_name,w.demand_raised from child_area_detail as y left join (cm_fund_eligibility as w left join child_basic_detail as x on w.child_id=x.child_id) on x.district_id =y.area_id where y.parent_id ='IND010' AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name order by area_name")->result_array();
	  		$child_demand_received= $this->db->query("select sum(demand_received='1') as num_child,area_id from (select y.area_id, y.area_name,w.demand_received from child_area_detail as y left join (cm_fund_eligibility as w left join child_basic_detail as x on w.child_id=x.child_id) on x.district_id =y.area_id where y.parent_id ='IND010' AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name order by area_name")->result_array();
	  		$child_bankdetails= $this->db->query("select count(*) as num_child,area_id from (select y.area_id, y.area_name,w.availabil_bankdetails from child_area_detail as y left join (cm_fund_eligibility as w left join child_basic_detail as x on w.child_id=x.child_id) on x.district_id =y.area_id where y.parent_id ='IND010' AND w.physically_verified =  'Yes' AND bank_details_id=0 AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name order by area_name")->result_array();
	  		
	  		
	  	}
	  	else if($roles_id==13 || $roles_id==20 ){
	  		$child_dist =$this->db->query("select child_area_detail.area_name as area_name,child_area_detail.area_id as area_id from child_area_detail
			   where child_area_detail.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $division_id."') group by child_area_detail.area_name order by child_area_detail.area_name")->result_array();
	  		
	  		$child_physically_verified_yes = $this->db->query("select sum(physically_verified='Yes') as num_child,area_id from (select y.area_id, y.area_name,w.physically_verified from child_area_detail as y left join (cm_fund_eligibility as w left join child_basic_detail as x on w.child_id=x.child_id AND w.physically_verified='Yes' ) on x.district_id =y.area_id where y.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $dist_id ."') AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name order by area_name")->result_array();
	  		
	  		$child_physically_verified_no = $this->db->query("select sum(physically_verified='No') as num_child,area_id from (select y.area_id, y.area_name,w.physically_verified from child_area_detail as y left join (cm_fund_eligibility as w left join child_basic_detail as x on w.child_id=x.child_id) on x.district_id =y.area_id where y.parent_id ='IND010' AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name order by area_name")->result_array();
	  		$child_eligible_cm_yes = $this->db->query("select sum(eligible_cm_fund='Yes') as num_child,area_id from (select y.area_id, y.area_name,w.eligible_cm_fund from child_area_detail as y left join (cm_fund_eligibility as w left join child_basic_detail as x on w.child_id=x.child_id) on x.district_id =y.area_id where y.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $dist_id ."') AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name order by area_name")->result_array();
	  		$child_eligible_cm_no = $this->db->query("select sum(eligible_cm_fund='No') as num_child,area_id from (select y.area_id, y.area_name,w.eligible_cm_fund from child_area_detail as y left join (cm_fund_eligibility as w left join child_basic_detail as x on w.child_id=x.child_id) on x.district_id =y.area_id where y.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $dist_id ."') AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name order by area_name")->result_array();
	  		$child_fund_paid = $this->db->query("select sum(mtransfer_proof='Yes') as num_child,area_id from (select y.area_id, y.area_name,w.mtransfer_proof from child_area_detail as y left join (cm_fund_eligibility as w left join child_basic_detail as x on w.child_id=x.child_id) on x.district_id =y.area_id where y.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $dist_id ."') AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name order by area_name")->result_array();
	  		$child_demand_raised_no = $this->db->query("select sum(demand_raised='1') as num_child,area_id from (select y.area_id, y.area_name,w.demand_raised from child_area_detail as y left join (cm_fund_eligibility as w left join child_basic_detail as x on w.child_id=x.child_id) on x.district_id =y.area_id where y.parent_id ='IND010' AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name order by area_name")->result_array();
	  		$child_demand_received= $this->db->query("select sum(demand_received='1') as num_child,area_id from (select y.area_id, y.area_name,w.demand_received from child_area_detail as y left join (cm_fund_eligibility as w left join child_basic_detail as x on w.child_id=x.child_id) on x.district_id =y.area_id where y.parent_id ='IND010' AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name order by area_name")->result_array();
	  		$child_bankdetails= $this->db->query("select count(*) as num_child, area_id from (select y.area_id, y.area_name,w.availabil_bankdetails from child_area_detail as y left join (cm_fund_eligibility as w left join child_basic_detail as x on w.child_id=x.child_id) on x.district_id =y.area_id where y.parent_id ='IND010' AND w.physically_verified =  'Yes' AND bank_details_id=0 AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name order by area_name")->result_array();	
	  	}
	  	else if($roles_id==2 || $roles_id==5 || $roles_id==7|| $roles_id==6 || $roles_id==8 || $roles_id==14 || $roles_id==16 || $roles_id==18 || $roles_id==19){
	  		$child_dist =$this->db->query("select child_area_detail.area_name as area_name,child_area_detail.area_id as area_id from child_area_detail
			   where child_area_detail.area_id='" . $dist_id ."' group by child_area_detail.area_name order by child_area_detail.area_name")->result_array();

	  		
	  		//echo "select sum(w.physically_verified='Yes') as num_child,x.area_id from cm_fund_eligibility as w INNER JOIN child_basic_detail hp INNER JOIN child_area_detail x on w.child_id = hp.child_id where hp.district_id='" . $dist_id ."' AND x.area_id='" . $dist_id ."' AND w.physically_verified='Yes' AND STR_TO_DATE(hp.idate_of_rescue,'%Y-%m-%d') BETWEEN '".$from."' AND '".$to."'" ;
	  		$child_physically_verified_yes = $this->db->query("select sum(w.physically_verified='Yes') as num_child,x.area_id from cm_fund_eligibility as w INNER JOIN child_basic_detail hp INNER JOIN child_area_detail x on w.child_id = hp.child_id where hp.district_id='" . $dist_id ."' AND x.area_id='" . $dist_id ."' AND w.physically_verified='Yes' AND STR_TO_DATE(hp.idate_of_rescue,'%Y-%m-%d') BETWEEN '".$from."' AND '".$to."'")->result_array();
	  		$child_physically_verified_no = $this->db->query("select sum(w.physically_verified='No') as num_child,x.area_id from cm_fund_eligibility as w INNER JOIN child_basic_detail hp INNER JOIN child_area_detail x on w.child_id = hp.child_id where hp.district_id='" . $dist_id ."' AND x.area_id='" . $dist_id ."' AND w.physically_verified='Yes' AND STR_TO_DATE(hp.idate_of_rescue,'%Y-%m-%d') BETWEEN '".$from."' AND '".$to."'")->result_array();
	  		$child_eligible_cm_yes = $this->db->query("select sum(eligible_cm_fund='Yes') as num_child,x.area_id from cm_fund_eligibility as w INNER JOIN child_basic_detail hp INNER JOIN child_area_detail x on w.child_id = hp.child_id where hp.district_id='" . $dist_id ."' AND x.area_id='" . $dist_id ."' AND w.physically_verified='Yes' AND STR_TO_DATE(hp.idate_of_rescue,'%Y-%m-%d') BETWEEN '".$from."' AND '".$to."'")->result_array();
	  		$child_eligible_cm_no = $this->db->query("select sum(eligible_cm_fund='No') as num_child,x.area_id from cm_fund_eligibility as w INNER JOIN child_basic_detail hp INNER JOIN child_area_detail x on w.child_id = hp.child_id where hp.district_id='" . $dist_id ."' AND x.area_id='" . $dist_id ."' AND w.physically_verified='Yes' AND STR_TO_DATE(hp.idate_of_rescue,'%Y-%m-%d') BETWEEN '".$from."' AND '".$to."'")->result_array();
	  		$child_fund_paid = $this->db->query("select sum(mtransfer_proof='Yes') as num_child,x.area_id from cm_fund_eligibility as w INNER JOIN child_basic_detail hp INNER JOIN child_area_detail x on w.child_id = hp.child_id where hp.district_id='" . $dist_id ."' AND x.area_id='" . $dist_id ."' AND w.physically_verified='Yes' AND STR_TO_DATE(hp.idate_of_rescue,'%Y-%m-%d') BETWEEN '".$from."' AND '".$to."'")->result_array();
	  		$child_demand_raised_no = $this->db->query("select sum(demand_raised='1') as num_child,x.area_id from cm_fund_eligibility as w INNER JOIN child_basic_detail hp INNER JOIN child_area_detail x on w.child_id = hp.child_id where hp.district_id='" . $dist_id ."' AND x.area_id='" . $dist_id ."' AND w.physically_verified='Yes' AND STR_TO_DATE(hp.idate_of_rescue,'%Y-%m-%d') BETWEEN '".$from."' AND '".$to."'")->result_array();
	  		$child_demand_received= $this->db->query("select sum(demand_received='1') as num_child,x.area_id from cm_fund_eligibility as w INNER JOIN child_basic_detail hp INNER JOIN child_area_detail x on w.child_id = hp.child_id where hp.district_id='" . $dist_id ."' AND x.area_id='" . $dist_id ."' AND w.physically_verified='Yes' AND STR_TO_DATE(hp.idate_of_rescue,'%Y-%m-%d') BETWEEN '".$from."' AND '".$to."'")->result_array();
	  		//echo "select count(availabil_bankdetails='' ) as num_child,x.area_id from cm_fund_eligibility as w INNER JOIN child_basic_detail hp INNER JOIN child_area_detail x on w.child_id = hp.child_id where hp.district_id='" . $dist_id ."' AND x.area_id='" . $dist_id ."' AND w.physically_verified='Yes' AND STR_TO_DATE(hp.idate_of_rescue,'%Y-%m-%d') BETWEEN '".$from."' AND '".$to."'" ;
	  		//echo "select count(availabil_bankdetails='' ) as num_child,x.area_id from cm_fund_eligibility as w INNER JOIN child_basic_detail hp INNER JOIN child_area_detail x on w.child_id = hp.child_id where hp.district_id='" . $dist_id ."' AND x.area_id='" . $dist_id ."' AND w.physically_verified='Yes' AND STR_TO_DATE(hp.idate_of_rescue,'%Y-%m-%d') BETWEEN '".$from."' AND '".$to."'" ;
	  		//echo "SELECT count(* ) as num_child,cad.area_id as area_id FROM cm_fund_eligibility AS w INNER JOIN child_basic_detail hp ON w.child_id = hp.child_id left join child_area_detail as cad on hp.district_id=cad.area_id WHERE hp.district_id =  '" . $dist_id ."' AND w.physically_verified =  'Yes' AND bank_details_id=0 AND STR_TO_DATE( hp.idate_of_rescue,  '%Y-%m-%d' ) BETWEEN '".$from."' AND '".$to."' " ;
	  		$child_bankdetails= $this->db->query("SELECT count(* ) as num_child,cad.area_id as area_id FROM cm_fund_eligibility AS w INNER JOIN child_basic_detail hp ON w.child_id = hp.child_id left join child_area_detail as cad on hp.district_id=cad.area_id WHERE hp.district_id =  '" . $dist_id ."' AND w.physically_verified =  'Yes' AND bank_details_id=0 AND STR_TO_DATE( hp.idate_of_rescue,  '%Y-%m-%d' ) BETWEEN '".$from."' AND '".$to."' ")->result_array();
	  		
	  		//$child_bankdetails= $this->db->query("select count(availabil_bankdetails='' ) as num_child,x.area_id from cm_fund_eligibility as w INNER JOIN child_basic_detail hp INNER JOIN child_area_detail x on w.child_id = hp.child_id where hp.district_id='" . $dist_id ."' AND x.area_id='" . $dist_id ."' AND w.physically_verified='Yes' AND STR_TO_DATE(hp.idate_of_rescue,'%Y-%m-%d') BETWEEN '".$from."' AND '".$to."'")->result_array();
	  	}
	  	
	  	$cumulative = array();
	  	for($i=0; $i<sizeof($child_dist); $i++){
	  		$cumulative[$i][0]=$child_dist[$i]['area_name'];
	  		$cumulative[$i][1]=0;
	  		$cumulative[$i][2]=0;
	  		$cumulative[$i][3]=0;
	  		$cumulative[$i][4]=0;
	  		$cumulative[$i][5]=0;
	  		$cumulative[$i][6]=0;
	  		$cm_tot=array();
	  		if(sizeof($child_physically_verified_yes)>0)
	  		{
	  			$cond="physically_verified";
	  			$cond_val="Yes";
	  			foreach($child_physically_verified_yes as $row)
	  			{
	  				if($child_dist[$i]['area_id']==$row['area_id'])
	  				{
	  					if($row['num_child']==NULL || $row['num_child']==0){
	  						$cumulative[$i][1]=0 ;
	  						$cm_tot[$i][1]=0 ;
	  					}
	  					else{
	  						$cumulative[$i][1]='<a href="'.base_url().'index.php?dashboard/get_cm_relief_data/'.$from.'/'.$to.'/'.$row['area_id'].'/'.$cond.'/'.$cond_val.'">'.$row['num_child'].'</a>';
	  						$cm_tot[$i][1]=$row['num_child'];
	  					}
	  					break;
	  				}
	  				else{
	  					$cumulative[$i][1]=0;
	  					$cm_tot[$i][1]=0 ;
	  				}
	  			}
	  			
	  		}
	  		
	  		/*if(sizeof($child_physically_verified_no)>0)
	  		 {
	  		 $cond="physically_verified";
	  		 $cond_val="No";
	  		 foreach($child_physically_verified_no as $row)
	  		 {
	  		 if($child_dist[$i]['area_id']==$row['area_id'])
	  		 {
	  		 if($row['num_child']==NULL){
	  		 $cumulative[$i][2]=0 ;
	  		 $cm_tot[$i][2]=0 ;
	  		 }
	  		 else{
	  		 $cumulative[$i][2]='<a href="'.base_url().'index.php?dashboard/get_cm_relief_data/'.$from.'/'.$to.'/'.$row['area_id'].'/'.$cond.'/'.$cond_val.'">'.$row['num_child'].'</a>';
	  		 $cm_tot[$i][2]=$row['num_child'];
	  		 }
	  		 break;
	  		 }
	  		 else{
	  		 $cumulative[$i][2]=0;
	  		 $cm_tot[$i][2]=0 ;
	  		 }
	  		 }
	  		 
	  		 } */
	  		
	  		if(sizeof($child_eligible_cm_yes)>0)
	  		{
	  			$cond="eligible_cm_fund";
	  			$cond_val="Yes";
	  			foreach($child_eligible_cm_yes as $row)
	  			{
	  				if($child_dist[$i]['area_id']==$row['area_id'])
	  				{
	  					if($row['num_child']==NULL || $row['num_child']==0){
	  						$cumulative[$i][2]=0 ;
	  						$cm_tot[$i][2]=0 ;
	  					}
	  					else{
	  						$cumulative[$i][2]='<a href="'.base_url().'index.php?dashboard/get_cm_relief_data/'.$from.'/'.$to.'/'.$row['area_id'].'/'.$cond.'/'.$cond_val.'">'.$row['num_child'].'</a>';
	  						$cm_tot[$i][2]=$row['num_child'];
	  					}
	  					break;
	  				}
	  				else{
	  					$cumulative[$i][2]=0;
	  					$cm_tot[$i][2]=0 ;
	  				}
	  			}
	  			
	  		}
	  		
	  		if(sizeof($child_eligible_cm_no)>0)
	  		{
	  			$cond="eligible_cm_fund";
	  			$cond_val="No";
	  			foreach($child_eligible_cm_no as $row)
	  			{
	  				if($child_dist[$i]['area_id']==$row['area_id'])
	  				{
	  					if($row['num_child']==NULL || $row['num_child']==0){
	  						$cumulative[$i][3]=0 ;
	  						$cm_tot[$i][3]=0 ;
	  					}
	  					else{
	  						$cumulative[$i][3]='<a href="'.base_url().'index.php?dashboard/get_cm_relief_data/'.$from.'/'.$to.'/'.$row['area_id'].'/'.$cond.'/'.$cond_val.'">'.$row['num_child'].'</a>';
	  						$cm_tot[$i][3]=$row['num_child'];
	  					}
	  					break;
	  				}
	  				else{
	  					$cumulative[$i][3]=0;
	  					$cm_tot[$i][3]=0 ;
	  				}
	  			}
	  			
	  		}
	  		
	  		
	  		
	  		if(sizeof($child_demand_raised_no)>0)
	  		{
	  			$cond="demand_raised";
	  			$cond_val="1";
	  			foreach($child_demand_raised_no as $row)
	  			{
	  				if($child_dist[$i]['area_id']==$row['area_id'])
	  				{
	  					if($row['num_child']==NULL || $row['num_child']==0){
	  						$cumulative[$i][4]=0 ;
	  						$cm_tot[$i][4]=0 ;
	  					}
	  					else{
	  						$cumulative[$i][4]='<a href="'.base_url().'index.php?dashboard/get_cm_relief_data/'.$from.'/'.$to.'/'.$row['area_id'].'/'.$cond.'/'.$cond_val.'">'.$row['num_child'].'</a>';
	  						$cm_tot[$i][4]=$row['num_child'];
	  					}
	  					break;
	  				}
	  				else{
	  					$cumulative[$i][4]=0;
	  					$cm_tot[$i][4]=0 ;
	  				}
	  			}
	  			
	  		}
	  		
	  		if(sizeof($child_demand_received)>0)
	  		{
	  			$cond="demand_received";
	  			$cond_val="1";
	  			foreach($child_demand_received as $row)
	  			{
	  				if($child_dist[$i]['area_id']==$row['area_id'])
	  				{
	  					if($row['num_child']==NULL || $row['num_child']==0){
	  						$cumulative[$i][5]=0 ;
	  						$cm_tot[$i][5]=0 ;
	  					}
	  					else{
	  						$cumulative[$i][5]='<a href="'.base_url().'index.php?dashboard/get_cm_relief_data/'.$from.'/'.$to.'/'.$row['area_id'].'/'.$cond.'/'.$cond_val.'">'.$row['num_child'].'</a>';
	  						$cm_tot[$i][5]=$row['num_child'];
	  					}
	  					break;
	  				}
	  				else{
	  					$cumulative[$i][5]=0;
	  					$cm_tot[$i][5]=0 ;
	  				}
	  			}
	  			
	  		}
	  		
	  		if(sizeof($child_bankdetails)>0)
	  		{
	  			$cond="availabil_bankdetails";
	  			$cond_val="";
	  			foreach($child_bankdetails as $row)
	  			{
	  				if($child_dist[$i]['area_id']==$row['area_id'])
	  				{
	  					if($row['num_child']==NULL || $row['num_child']==0){
	  						$cumulative[$i][6]=0 ;
	  						$cm_tot[$i][6]=0 ;
	  					}
	  					else{
	  						
	  						$cumulative[$i][6]='<a href="'.base_url().'index.php?dashboard/get_cm_relief_data/'.$from.'/'.$to.'/'.$row['area_id'].'/'.$cond.'/'.$cond_val.'">'.$row['num_child'].'</a>';
	  						$cm_tot[$i][6]=$row['num_child'] ;
	  					}
	  					break;
	  				}
	  				else{
	  					$cumulative[$i][6]=0;
	  					$cm_tot[$i][6]=0 ;
	  				}
	  			}
	  			
	  		}
	  		
	  		if(sizeof($child_fund_paid)>0)
	  		{
	  			$cond="mtransfer_proof";
	  			$cond_val="Yes";
	  			foreach($child_fund_paid as $row)
	  			{
	  				if($child_dist[$i]['area_id']==$row['area_id'])
	  				{
	  					if($row['num_child']==NULL || $row['num_child']==0){
	  						$cumulative[$i][7]=0 ;
	  						$cm_tot[$i][7]=0 ;
	  					}
	  					else{
	  						
	  						$cumulative[$i][7]='<a href="'.base_url().'index.php?dashboard/get_cm_relief_data/'.$from.'/'.$to.'/'.$row['area_id'].'/'.$cond.'/'.$cond_val.'">'.$row['num_child'].'</a>';
	  						$cm_tot[$i][7]=$row['num_child'] ;
	  					}
	  					break;
	  				}
	  				else{
	  					$cumulative[$i][7]=0;
	  					$cm_tot[$i][7]=0 ;
	  				}
	  			}
	  			
	  		}
	  		
	  		$tot1+=$cm_tot[$i][1];
	  		$tot2+=$cm_tot[$i][2];
	  		$tot3+=$cm_tot[$i][3];
	  		$tot4+=$cm_tot[$i][4];
	  		$tot5+=$cm_tot[$i][5];
	  		$tot6+=$cm_tot[$i][6];
	  		$tot7+=$cm_tot[$i][7];
	  	}
	  	if( $roles_id==10 || $roles_id==11 || $roles_id==21 || $roles_id==12 || $roles_id==13 || $roles_id==20 || $roles_id==22){
	  		$cumulative[sizeof($child_dist)][0]="<strong>Total</strong>";
	  		$cumulative[sizeof($child_dist)][1]="<strong>".$tot1."<strong>";
	  		$cumulative[sizeof($child_dist)][2]="<strong>".$tot2."<strong>";
	  		$cumulative[sizeof($child_dist)][3]="<strong>".$tot3."<strong>";
	  		$cumulative[sizeof($child_dist)][4]="<strong>".$tot4."<strong>";
	  		$cumulative[sizeof($child_dist)][5]="<strong>".$tot5."<strong>";
	  		$cumulative[sizeof($child_dist)][6]="<strong>".$tot6."<strong>";
	  		$cumulative[sizeof($child_dist)][7]="<strong>".$tot7."<strong>";
	  	}
	  	return $cumulative ;
	  }
	
	// group wise details
	public function get_alldistrict_child($from,$to,$rollID,$type)
		{
			
			$quer="select count(child_basic_detail.uid) as count,child_basic_detail.uid as userid, staff.user_name as name,child_area_detail.area_name as district  from child_basic_detail
			      left join staff on staff.staff_id=child_basic_detail.uid AND
				  STR_TO_DATE(child_basic_detail.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."'
				  join child_area_detail on  child_area_detail.area_id=staff.district_id
			       where  staff.account_role_id='".$rollID."' group by staff.user_name" ;	
			
			return $this->db->query($quer)->result_array();
			
		}

public function get_rescue_child($from,$to,$type,$area="",$block="")
	{

		  //echo $area_id;
		  if($type=="dist")
		  {
			$quer1="select child_basic_detail.child_id,child_name,father_name,postal_address as postal_address,idate_of_rescue,panchayat_names.name as panchayat_name,pincode_list.pincode as pincode,police_stations.police_station_name as police_station_name,state.area_name as state,district.area_name as district,block.area_name as block from child_basic_detail
			    left join police_stations on police_stations.id=child_basic_detail.police_station
				left join pincode_list on pincode_list.id=child_basic_detail.pincode
				left join panchayat_names on panchayat_names.id=child_basic_detail.panchayat_name
				left join child_area_detail as state on state.area_id =child_basic_detail.state
				left join child_area_detail as district  on district.area_id =child_basic_detail.district_id
				left join child_area_detail as block on block.area_id =child_basic_detail.block
		           WHERE child_basic_detail.uid='".$area."' AND STR_TO_DATE(idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' group by child_basic_detail.child_id ";
		  }
		  
		  
		  

		  return $this->db->query($quer1)->result_array();

	}	
	
	//model mis reports for CM relief data in LC Dashboard
   
	  public function get_cm_relief_data($from,$to,$district_id,$cond, $cond_val,$param1)
	  {
	  	
	  	if($cond=="mtransfer_proof")
	  	{
	  		
	  		$sql="SELECT child_basic_detail.child_id,child_basic_detail.child_name,physically_verified,
			eligible_cm_fund,mtransfer_proof,reason_no FROM cm_fund_eligibility
			 LEFT JOIN child_basic_detail ON child_basic_detail.child_id=cm_fund_eligibility.child_id
			 WHERE physically_verified='Yes' AND eligible_cm_fund='Yes' AND child_basic_detail.district_id='".$district_id."' AND ".$cond."='".$cond_val."' AND STR_TO_DATE(child_basic_detail.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."'
			";
	  		
	  		if($param1=="pdf")
	  		{
	  			$sql="SELECT child_basic_detail.child_id,child_basic_detail.child_name,physically_verified,
			eligible_cm_fund,mtransfer_proof,reason_no FROM cm_fund_eligibility
			 LEFT JOIN child_basic_detail ON child_basic_detail.child_id=cm_fund_eligibility.child_id
			 WHERE physically_verified='Yes' AND eligible_cm_fund='Yes' AND child_basic_detail.district_id='".$district_id."' AND ".$cond."='".$cond_val."' AND STR_TO_DATE(child_basic_detail.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."'
			";
	  			
	  		}
	  		
	  	}else if($cond_val==""){ 
	  		$sql="SELECT child_basic_detail.child_id,child_basic_detail.child_name,physically_verified,
			eligible_cm_fund,mtransfer_proof,reason_no FROM cm_fund_eligibility
			 LEFT JOIN child_basic_detail ON child_basic_detail.child_id=cm_fund_eligibility.child_id
			 WHERE physically_verified='Yes'  AND child_basic_detail.district_id='".$district_id."' AND bank_details_id=0 AND STR_TO_DATE(child_basic_detail.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."'
			";
	  		
	  		
	  	}else{
	  		  		
	  		$sql="SELECT child_basic_detail.child_id,child_basic_detail.child_name,physically_verified,
			eligible_cm_fund,mtransfer_proof,reason_no FROM cm_fund_eligibility
			 LEFT JOIN child_basic_detail ON child_basic_detail.child_id=cm_fund_eligibility.child_id
			 WHERE physically_verified='Yes'  AND child_basic_detail.district_id='".$district_id."' AND ".$cond."='".$cond_val."' AND STR_TO_DATE(child_basic_detail.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."'
			";
	  		
	  		if($param1=="pdf")
	  		{
	  			$sql="SELECT child_basic_detail.child_id,child_basic_detail.child_name,physically_verified,
			eligible_cm_fund,mtransfer_proof,reason_no FROM cm_fund_eligibility
			 LEFT JOIN child_basic_detail ON child_basic_detail.child_id=cm_fund_eligibility.child_id
			 WHERE physically_verified='Yes'  AND child_basic_detail.district_id='".$district_id."' AND ".$cond."='".$cond_val."' AND STR_TO_DATE(child_basic_detail.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."'
			";
	  			
	  			
	  		}
	  		
	  		
	  	}
	  	return $this->db->query($sql)->result_array();
	  }
	   
   //model mis reports for lrd data in LC Dashboard
   
	   public function get_lrd($from,$to,$district_id,$cond, $cond_val)
	   {
			$sql="SELECT child_basic_detail.child_id,child_basic_detail.child_name,physically_verified,
					eligible_cm_fund,mtransfer_proof FROM cm_fund_eligibility 
			  LEFT JOIN child_basic_detail ON child_basic_detail.child_id=cm_fund_eligibility.child_id
			  WHERE child_basic_detail.district_id='".$district_id."' AND ".$cond."='".$cond_val."' AND STR_TO_DATE(child_basic_detail.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."'
			";
			 
			 return $this->db->query($sql)->result_array();
			
	   
	   
	   }
	     public function get_lrd_18k($from,$to,$district_id,$cond, $cond_val,$type,$param1)
			  {
			$sql="SELECT child_basic_detail.child_id,child_basic_detail.child_name,
			package FROM child_labour_resource_department 
			 LEFT JOIN child_basic_detail ON child_basic_detail.child_id=child_labour_resource_department.child_id
			 WHERE package_type='".$type."' AND child_basic_detail.district_id='".$district_id."' AND ".$cond."='".$cond_val."' AND STR_TO_DATE(child_basic_detail.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."'
			";


			if($param1=="pdf")
			{
			$sql="SELECT child_basic_detail.child_id,child_basic_detail.child_name,
			package FROM child_labour_resource_department
			 LEFT JOIN child_basic_detail ON child_basic_detail.child_id=child_labour_resource_department.child_id
			 WHERE package_type='".$type."' AND child_basic_detail.district_id='".$district_id."' AND ".$cond."='".$cond_val."' AND STR_TO_DATE(child_basic_detail.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."'
			";
			}

			return $this->db->query($sql)->result_array();
			  }
	   
	   public function get_lrd_50k($from,$to,$district_id,$cond, $cond_val,$param1)
				  {
				$sql="SELECT child_basic_detail.child_id,child_basic_detail.child_name,
				deposited FROM child_labour_resource_department 
				 LEFT JOIN child_basic_detail ON child_basic_detail.child_id=child_labour_resource_department.child_id
				 WHERE child_basic_detail.district_id='".$district_id."' AND ".$cond."='".$cond_val."' AND STR_TO_DATE(child_basic_detail.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."'
				";
				if($param1=="pdf")
				{
				$sql="SELECT child_basic_detail.child_id,child_basic_detail.child_name,
				deposited FROM child_labour_resource_department
				 LEFT JOIN child_basic_detail ON child_basic_detail.child_id=child_labour_resource_department.child_id
				 WHERE child_basic_detail.district_id='".$district_id."' AND ".$cond."='".$cond_val."' AND STR_TO_DATE(child_basic_detail.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."'
				";
				}
				return $this->db->query($sql)->result_array();
				  }
	   
	   public function get_lrd_20k($from,$to,$district_id,$cond, $cond_val,$param1)
				  {
				$sql="SELECT child_basic_detail.child_id,child_basic_detail.child_name,
				interest_of_rehabilitation FROM child_labour_resource_department 
				 LEFT JOIN child_basic_detail ON child_basic_detail.child_id=child_labour_resource_department.child_id
				 WHERE child_basic_detail.district_id='".$district_id."' AND ".$cond."='".$cond_val."' AND STR_TO_DATE(child_basic_detail.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."'
				";
				if($param1=="pdf")
				{
				$sql="SELECT child_basic_detail.child_id,child_basic_detail.child_name,
				interest_of_rehabilitation FROM child_labour_resource_department
				 LEFT JOIN child_basic_detail ON child_basic_detail.child_id=child_labour_resource_department.child_id
				 WHERE child_basic_detail.district_id='".$district_id."' AND ".$cond."='".$cond_val."' AND STR_TO_DATE(child_basic_detail.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."'
				";
				}
				return $this->db->query($sql)->result_array();
				  }
	   
	   
	   //get LRD details 
	   public function get_lrd_data($child_id){
	   	$sql="SELECT * FROM child_labour_resource_department
	   	LEFT JOIN child_basic_detail ON child_basic_detail.child_id=child_labour_resource_department.child_id
	   	WHERE child_basic_detail.child_id='".$child_id."'";
	   	return $this->db->query($sql)->result_array();
	   
	   	
	   }
	   
	   /*new sub catadd*/
	   
	   function get_education_data($from,$to,$dist)
	   {
	   	
	   	$this->load->model('dashboard_model');
	   	$ses_ids=$this->session->userdata('login_user_id');
	   	$role=$this->dashboard_model->get_role_id($ses_ids);
	   	foreach($role as $rolep):
	   	$roles_id=$rolep['account_role_id'];
	   	$dist_id=$rolep['district_id'];
	   	$stat_id=$rolep['state_id'];
	   	endforeach;
	   	
	   	$newdistrict= $this->db->query("select  division_id from division_details  where division_details.district_id='" . $dist_id ."' ")->result_array();
	   	//$from='2014-04-01';
	   	//$to='2017-05-26';
	   	//echo $roles_id;
	   	foreach($newdistrict as $newdistricts):
	   	$division_id=$newdistricts['division_id'];
	   	endforeach;
	   	
	   	
	   	
	   	
	   	
	   	//$from=$_POST['from'];
	   	//	$to=$_POST['to'];
	   	//echo $roles_id;
	   	if( $roles_id==10 || $roles_id==11 || $roles_id==21 || $roles_id==12 || $roles_id==22)//For LC and LC Operator
	   	{
	   		$child_dist =$this->db->query("select area_name,area_id from child_area_detail where parent_id='IND010' group by area_name order by area_name")->result_array();
	   		
	   		$child_Enrolled = $this->db->query("select sum(enrolled_school='Yes') as num_child,area_id from (select y.area_id, y.area_name, w.enrolled_school from child_area_detail as y left join (child_basic_detail as x left join child_education_department  as w on x.child_id=w.child_id) on x.district_id =y.area_id where y.parent_id ='IND010' AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name order by area_name")->result_array();
	   	}
	   	else if($roles_id==13 || $roles_id==20 )
	   	{
	   		$child_dist =$this->db->query("select child_area_detail.area_name as area_name,child_area_detail.area_id as area_id from child_area_detail
			   where child_area_detail.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $division_id."') group by child_area_detail.area_name order by child_area_detail.area_name")->result_array();
	   		$child_Enrolled = $this->db->query("select sum(enrolled_school='Yes') as num_child,area_id from (select y.area_id, y.area_name, w.enrolled_school from child_area_detail as y left join (child_basic_detail as x left join child_education_department  as w on x.child_id=w.child_id) on x.district_id =y.area_id where y.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $division_id."') AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name order by area_name")->result_array();
	   		
	   	}
	   	else if(($roles_id==2)||($roles_id==5)||($roles_id==6)||($roles_id==7)||($roles_id==8)||($roles_id==14)||($roles_id==16)||($roles_id==18)||($roles_id==19))//for ls ,leo and all district level
	   	{
	   		$child_dist=$this->db->query("select sum(enrolled_school='Yes') as num_child,area_name,area_id from child_education_department left join child_basic_detail  ON child_basic_detail.child_id=child_education_department.child_id left join child_area_detail ON child_area_detail.area_id=child_education_department.dist  where child_education_department.dist='". $dist_id."' AND STR_TO_DATE(child_basic_detail.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' group by area_name order by area_name")->result_array();
	   		$child_Enrolled = $this->db->query("select sum(enrolled_school='Yes') as num_child,area_id from (select y.area_id, y.area_name, w.enrolled_school from child_area_detail as y left join (child_basic_detail as x left join child_education_department  as w on x.child_id=w.child_id) on x.district_id =y.area_id where w.dist COLLATE utf8_unicode_ci ='". $dist_id."' AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name order by area_name")->result_array();
	   	}
	   	
	   	$cumulative = array();
	   	for($i=0; $i<sizeof($child_dist); $i++){
	   		$cumulative[$i][0]=$child_dist[$i]['area_name'];
	   		$cumulative[$i][1]=0;
	   		
	   		if(sizeof($child_Enrolled)>0)
	   		{
	   			foreach($child_Enrolled as $row)
	   			{
	   				if($child_dist[$i]['area_id']==$row['area_id'])
	   				{
	   					if($row['num_child']==NULL){
	   						$cumulative[$i][1]=0 ;
	   					}
	   					else{
	   						$cumulative[$i][1]=$row['num_child'];
	   						
	   					}
	   					break;
	   				}
	   				else{
	   					$cumulative[$i][1]=0;
	   				}
	   			}
	   			
	   		}
	   		$cumulative[$i][2]=$cumulative[$i][1];
	   		$tot1+=$cumulative[$i][1];
	   		$tot2+=$cumulative[$i][2];
	   		
	   	}
	   	if( $roles_id==10 || $roles_id==11 || $roles_id==21 || $roles_id==12 || $roles_id==13 || $roles_id==20 || $roles_id==22){
	   	$cumulative[sizeof($child_dist)][0]="Total";
	   	$cumulative[sizeof($child_dist)][1]=$tot1;
	   	$cumulative[sizeof($child_dist)][2]=$tot2;
	   	}
	   	
	   	return ($cumulative);
	 
	   	
	   	
	   }
	   function get_rural_data($from,$to,$dist)
	   {
	   	$this->load->model('dashboard_model');
	   	$ses_ids=$this->session->userdata('login_user_id');
	   	$role=$this->dashboard_model->get_role_id($ses_ids);
	   	foreach($role as $rolep):
	   	$roles_id=$rolep['account_role_id'];
	   	$dist_id=$rolep['district_id'];
	   	$stat_id=$rolep['state_id'];
	   	endforeach;
	   	
	   	$newdistrict= $this->db->query("select  division_id from division_details  where division_details.district_id='" . $dist_id ."' ")->result_array();
	   	foreach($newdistrict as $newdistricts):
	   	$division_id=$newdistricts['division_id'];
	   	endforeach;
	   	
	   	
	   	
	   	//	$from=$_POST['from'];
	   	//$to=$_POST['to'];
	   	//echo $roles_id;
	   	if( $roles_id==10 || $roles_id==11 || $roles_id==21 || $roles_id==12 || $roles_id==22)//For LC and LC Operator
	   	{
	   		
	   		$child_dist =$this->db->query("select area_name,area_id from child_area_detail where parent_id='IND010' group by area_name order by area_name")->result_array();
	   		
	   		$child_mgnrega = $this->db->query("select sum(is_mgnrega='No') as num_child,area_id from (select y.area_id, y.area_name, w.is_mgnrega from child_area_detail as y left join (child_basic_detail as x left join child_rural_development_department as w on x.child_id=w.child_id) on x.district_id =y.area_id where y.parent_id ='IND010' AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name order by area_name")->result_array();
	   		
	   		$child_SGSY = $this->db->query("select sum(is_sgsy='No') as num_child,area_id from (select y.area_id, y.area_name, w.is_sgsy from child_area_detail as y left join (child_basic_detail as x left join child_rural_development_department as w on x.child_id=w.child_id) on x.district_id =y.area_id where y.parent_id ='IND010' AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name order by area_name")->result_array();
	   		
	   		$child_iay = $this->db->query("select sum(is_iay='No') as num_child,area_id from (select y.area_id, y.area_name, w.is_iay from child_area_detail as y left join (child_basic_detail as x left join child_rural_development_department as w on x.child_id=w.child_id) on x.district_id =y.area_id where y.parent_id ='IND010' AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name order by area_name")->result_array();
	   	}
	   	else if($roles_id==13 || $roles_id==20 )//for DLC
	   	{
	   		$child_dist =$this->db->query("select child_area_detail.area_name as area_name,child_area_detail.area_id as area_id from child_area_detail
			   where child_area_detail.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $division_id."') group by child_area_detail.area_name order by child_area_detail.area_name")->result_array();
	   		
	   		$child_mgnrega = $this->db->query("select sum(is_mgnrega='No') as num_child,area_id from (select y.area_id, y.area_name, w.is_mgnrega from child_area_detail as y left join (child_basic_detail as x left join child_rural_development_department as w on x.child_id=w.child_id) on x.district_id =y.area_id where y.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $division_id."') AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name order by area_name")->result_array();
	   		
	   		$child_SGSY = $this->db->query("select sum(is_sgsy='No') as num_child,area_id from (select y.area_id, y.area_name, w.is_sgsy from child_area_detail as y left join (child_basic_detail as x left join child_rural_development_department as w on x.child_id=w.child_id) on x.district_id =y.area_id where y.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $division_id."') AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name order by area_name")->result_array();
	   		
	   		$child_iay = $this->db->query("select sum(is_iay='No') as num_child,area_id from (select y.area_id, y.area_name, w.is_iay from child_area_detail as y left join (child_basic_detail as x left join child_rural_development_department as w on x.child_id=w.child_id) on x.district_id =y.area_id where y.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $division_id."') AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name order by area_name")->result_array();
	   	}
	   	else if(($roles_id==2)||($roles_id==5)||($roles_id==6)||($roles_id==7)||($roles_id==8)||($roles_id==14)||($roles_id==16)||($roles_id==18)||($roles_id==19))//for ls ,leo and all district level)//for DLC
	   	{
	   		$child_dist =$this->db->query("select child_area_detail.area_name as area_name,child_area_detail.area_id as area_id from child_area_detail
			   where child_area_detail.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where  child_area_detail.area_id='". $dist ."' and  division_details.division_id='" . $division_id."') group by child_area_detail.area_name order by child_area_detail.area_name")->result_array();
	   		
	   		$child_mgnrega = $this->db->query("select sum(is_mgnrega='No') as num_child,area_id from (select y.area_id, y.area_name, w.is_mgnrega from child_area_detail as y left join (child_basic_detail as x left join child_rural_development_department as w on x.child_id=w.child_id) on x.district_id =y.area_id where y.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where  division_details.division_id='" . $division_id."') AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name order by area_name")->result_array();
	   		
	   		$child_SGSY = $this->db->query("select sum(is_sgsy='No') as num_child,area_id from (select y.area_id, y.area_name, w.is_sgsy from child_area_detail as y left join (child_basic_detail as x left join child_rural_development_department as w on x.child_id=w.child_id) on x.district_id =y.area_id where y.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where   division_details.division_id='" . $division_id."') AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name order by area_name")->result_array();
	   		
	   		$child_iay = $this->db->query("select sum(is_iay='No') as num_child,area_id from (select y.area_id, y.area_name, w.is_iay from child_area_detail as y left join (child_basic_detail as x left join child_rural_development_department as w on x.child_id=w.child_id) on x.district_id =y.area_id where y.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where   division_details.division_id='" . $division_id."') AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name order by area_name")->result_array();
	   	}
	   	
	   	$cumulative = array();
	   	for($i=0; $i<sizeof($child_dist); $i++){
	   		$cumulative[$i][0]=$child_dist[$i]['area_name'];
	   		$cumulative[$i][1]=0;
	   		$cumulative[$i][2]=0;
	   		$cumulative[$i][3]=0;
	   		if(sizeof($child_mgnrega)>0)
	   		{
	   			foreach($child_mgnrega as $row)
	   			{
	   				if($child_dist[$i]['area_id']==$row['area_id'])
	   				{
	   					if($row['num_child']==NULL){
	   						$cumulative[$i][1]=0 ;
	   					}
	   					else{
	   						$cumulative[$i][1]=$row['num_child'];
	   					}
	   					break;
	   				}
	   				else{
	   					$cumulative[$i][1]=0;
	   				}
	   			}
	   			
	   		}
	   		if(sizeof($child_SGSY)>0)
	   		{
	   			foreach($child_SGSY as $row)
	   			{
	   				if($child_dist[$i]['area_id']==$row['area_id'])
	   				{
	   					if($row['num_child']==NULL){
	   						$cumulative[$i][2]=0 ;
	   					}
	   					else{
	   						$cumulative[$i][2]=$row['num_child'];
	   					}
	   					break;
	   				}
	   				else{
	   					$cumulative[$i][2]=0;
	   				}
	   			}
	   			
	   		}
	   		if(sizeof($child_iay)>0)
	   		{
	   			foreach($child_iay as $row)
	   			{
	   				if($child_dist[$i]['area_id']==$row['area_id'])
	   				{
	   					if($row['num_child']==NULL){
	   						$cumulative[$i][3]=0 ;
	   					}
	   					else{
	   						$cumulative[$i][3]=$row['num_child'];
	   					}
	   					break;
	   				}
	   				else{
	   					$cumulative[$i][3]=0;
	   				}
	   			}
	   			
	   		}
	   		
	   		$cumulative[$i][4]=$cumulative[$i][1]+$cumulative[$i][2]+$cumulative[$i][3];
	   		$tot1+=$cumulative[$i][1];
	   		$tot2+=$cumulative[$i][2];
	   		$tot3+=$cumulative[$i][3];
	   		$tot4+=$cumulative[$i][4];
	   		
	   	}
	   	if( $roles_id==10 || $roles_id==11 || $roles_id==21 || $roles_id==12 || $roles_id==13 || $roles_id==20 || $roles_id==22){
	   		$cumulative[sizeof($child_dist)][0]="<strong>Total</strong>";
	   		$cumulative[sizeof($child_dist)][1]="<strong>".$tot1."<strong>";
	   		$cumulative[sizeof($child_dist)][2]="<strong>".$tot2."<strong>";
	   		$cumulative[sizeof($child_dist)][3]="<strong>".$tot3."<strong>";
	   		$cumulative[sizeof($child_dist)][4]="<strong>".$tot4."<strong>";
	   	}
	   	return($cumulative);
	   	
	   }
	   
	   function get_urban_data($from,$to,$dist)
	   {
	   	$this->load->model('dashboard_model');
	   	$ses_ids=$this->session->userdata('login_user_id');
	   	$role=$this->dashboard_model->get_role_id($ses_ids);
	   	foreach($role as $rolep):
	   	$roles_id=$rolep['account_role_id'];
	   	$dist_id=$rolep['district_id'];
	   	$stat_id=$rolep['state_id'];
	   	endforeach;
	   	
	   	$newdistrict= $this->db->query("select  division_id from division_details  where division_details.district_id='" . $dist_id ."' ")->result_array();
	   	foreach($newdistrict as $newdistricts):
	   	$division_id=$newdistricts['division_id'];
	   	endforeach;
	   	
	   	//$from=$_POST['from'];
	   	//$to=$_POST['to'];
	   	//echo $roles_id;
	   	if( $roles_id==10 || $roles_id==11 || $roles_id==21 || $roles_id==12 || $roles_id==22)//For LC and LC Operator
	   	{
	   		$child_dist =$this->db->query("select area_name,area_id from child_area_detail where parent_id='IND010' group by area_name order by area_name")->result_array();
	   		//$from=$_POST['from'];
	   		//$to=$_POST['to'];
	   		$child_SJSRY = $this->db->query("select sum(is_sjsry='No') as num_child,area_id from (select y.area_id, y.area_name, w.is_sjsry from child_area_detail as y left join (child_basic_detail as x left join child_urban_development_deoartment  as w on x.child_id=w.child_id) on x.district_id =y.area_id where y.parent_id ='IND010' AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name order by area_name")->result_array();
	   		
	   		$child_jrum = $this->db->query("select sum(is_sjsry='No') as num_child,area_id from (select y.area_id, y.area_name, w.is_sjsry from child_area_detail as y left join (child_basic_detail as x left join child_urban_development_deoartment  as w on x.child_id=w.child_id) on x.district_id =y.area_id where y.parent_id ='IND010' AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name order by area_name")->result_array();
	   		
	   	}
	   	else if($roles_id==13 || $roles_id==20 )//For DLC
	   	{
	   		$child_dist =$this->db->query("select child_area_detail.area_name as area_name,child_area_detail.area_id as area_id from child_area_detail
			   where child_area_detail.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $division_id."') group by child_area_detail.area_name order by child_area_detail.area_name")->result_array();
	   		$child_SJSRY = $this->db->query("select sum(is_sjsry='No') as num_child,area_id from (select y.area_id, y.area_name, w.is_sjsry from child_area_detail as y left join (child_basic_detail as x left join child_urban_development_deoartment  as w on x.child_id=w.child_id) on x.district_id =y.area_id where y.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $division_id."') AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name order by area_name")->result_array();
	   		
	   		$child_jrum = $this->db->query("select sum(is_sjsry='No') as num_child,area_id from (select y.area_id, y.area_name, w.is_sjsry from child_area_detail as y left join (child_basic_detail as x left join child_urban_development_deoartment  as w on x.child_id=w.child_id) on x.district_id =y.area_id where y.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $division_id."') AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name order by area_name")->result_array();
	   		
	   		
	   	}
	   	else if($dist)//For ls
	   	{
	   		$child_dist =$this->db->query("select child_area_detail.area_name as area_name,child_area_detail.area_id as area_id from child_area_detail
			   where child_area_detail.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details   where  child_area_detail.area_id='". $dist ."' and division_details.division_id='" . $division_id."') group by child_area_detail.area_name order by child_area_detail.area_name")->result_array();
	   		$child_SJSRY = $this->db->query("select sum(is_sjsry='No') as num_child,area_id from (select y.area_id, y.area_name, w.is_sjsry from child_area_detail as y left join (child_basic_detail as x left join child_urban_development_deoartment  as w on x.child_id=w.child_id) on x.district_id =y.area_id where y.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $division_id."') AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name order by area_name")->result_array();
	   		
	   		$child_jrum = $this->db->query("select sum(is_sjsry='No') as num_child,area_id from (select y.area_id, y.area_name, w.is_sjsry from child_area_detail as y left join (child_basic_detail as x left join child_urban_development_deoartment  as w on x.child_id=w.child_id) on x.district_id =y.area_id where y.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $division_id."') AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name order by area_name")->result_array();
	   		
	   		
	   	}
	   	
	   	$cumulative = array();
	   	for($i=0; $i<sizeof($child_dist); $i++){
	   		$cumulative[$i][0]=$child_dist[$i]['area_name'];
	   		$cumulative[$i][1]=0;
	   		$cumulative[$i][2]=0;
	   		if(sizeof($child_SJSRY)>0)
	   		{
	   			foreach($child_SJSRY as $row)
	   			{
	   				if($child_dist[$i]['area_id']==$row['area_id'])
	   				{
	   					if($row['num_child']==NULL){
	   						$cumulative[$i][1]=0 ;
	   					}
	   					else{
	   						$cumulative[$i][1]=$row['num_child'];
	   					}
	   					break;
	   				}
	   				else{
	   					$cumulative[$i][1]=0;
	   				}
	   			}
	   			
	   		}
	   		
	   		if(sizeof($child_jrum)>0)
	   		{
	   			foreach($child_jrum as $row)
	   			{
	   				if($child_dist[$i]['area_id']==$row['area_id'])
	   				{
	   					if($row['num_child']==NULL){
	   						$cumulative[$i][2]=0 ;
	   					}
	   					else{
	   						$cumulative[$i][2]=$row['num_child'];
	   					}
	   					break;
	   				}
	   				else{
	   					$cumulative[$i][2]=0;
	   				}
	   			}
	   			
	   		}
	   		
	   		$cumulative[$i][3]=$cumulative[$i][1]+$cumulative[$i][2];
	   		$tot1+=$cumulative[$i][1];
	   		$tot2+=$cumulative[$i][2];
	   		$tot3+=$cumulative[$i][3];
	   		
	   	}
	   	if( $roles_id==10 || $roles_id==11 || $roles_id==21 || $roles_id==12 || $roles_id==13 || $roles_id==20 || $roles_id==22){
	   		$cumulative[sizeof($child_dist)][0]="<strong>Total</strong>";
	   		$cumulative[sizeof($child_dist)][1]="<strong>".$tot1."<strong>";
	   		$cumulative[sizeof($child_dist)][2]="<strong>".$tot2."<strong>";
	   		$cumulative[sizeof($child_dist)][3]="<strong>".$tot3."<strong>";
	   	}
	   	return($cumulative);
	   }
	   
	   function get_revenue_data($from,$to,$dist)
	   {
	   	
	   	$this->load->model('dashboard_model');
	   	$ses_ids=$this->session->userdata('login_user_id');
	   	$role=$this->dashboard_model->get_role_id($ses_ids);
	   	foreach($role as $rolep):
	   	$roles_id=$rolep['account_role_id'];
	   	$dist_id=$rolep['district_id'];
	   	$stat_id=$rolep['state_id'];
	   	endforeach;
	   	$newdistrict= $this->db->query("select  division_id from division_details  where division_details.district_id='" . $dist_id ."' ")->result_array();
	   	//$from='2014-04-01';
	   	//$to='2017-05-26';
	   	//echo $roles_id;
	   	foreach($newdistrict as $newdistricts):
	   	$division_id=$newdistricts['division_id'];
	   	endforeach;
	   	//$from=$_POST['from'];
	   	//	$to=$_POST['to'];
	   	//echo $roles_id;
	   	if( $roles_id==10 || $roles_id==11 || $roles_id==21 || $roles_id==12 || $roles_id==22)//For LC and LC Operator
	   	{
	   		$child_dist =$this->db->query("select area_name,area_id from child_area_detail where parent_id='IND010' group by area_name order by area_name")->result_array();
	   		
	   		$child_Land = $this->db->query("select sum(is_benefited_landsettlement='No') as num_child,area_id from (select y.area_id, y.area_name, w.is_benefited_landsettlement from child_area_detail as y left join (child_basic_detail as x left join child_revenue_department as w on x.child_id=w.child_id) on x.district_id =y.area_id where y.parent_id ='IND010' AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name order by area_name")->result_array();
	   	}
	   	else if($roles_id==13 || $roles_id==20)//for DLC
	   	{
	   		$child_dist =$this->db->query("select child_area_detail.area_name as area_name,child_area_detail.area_id as area_id from child_area_detail
				   where child_area_detail.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $division_id."') group by child_area_detail.area_name order by child_area_detail.area_name")->result_array();
	   		
	   		$child_Land = $this->db->query("select sum(is_benefited_landsettlement='No') as num_child,area_id from (select y.area_id, y.area_name, w.is_benefited_landsettlement from child_area_detail as y left join (child_basic_detail as x left join child_revenue_department as w on x.child_id=w.child_id) on x.district_id =y.area_id where y.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $division_id."') AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name order by area_name")->result_array();
	   	}
	   	else if($dist)//for DLC
	   	{
	   		$child_dist =$this->db->query("select child_area_detail.area_name as area_name,child_area_detail.area_id as area_id from child_area_detail
				   where child_area_detail.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where child_area_detail.area_id='".$dist."' and division_details.division_id='" . $division_id."') group by child_area_detail.area_name order by child_area_detail.area_name")->result_array();
	   		
	   		$child_Land = $this->db->query("select sum(is_benefited_landsettlement='No') as num_child,area_id from (select y.area_id, y.area_name, w.is_benefited_landsettlement from child_area_detail as y left join (child_basic_detail as x left join child_revenue_department as w on x.child_id=w.child_id) on x.district_id =y.area_id where y.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $division_id."') AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name order by area_name")->result_array();
	   	}
	   	$cumulative = array();
	   	for($i=0; $i<sizeof($child_dist); $i++){
	   		$cumulative[$i][0]=$child_dist[$i]['area_name'];
	   		$cumulative[$i][1]=0;
	   		if(sizeof($child_Land)>0)
	   		{
	   			foreach($child_Land as $row)
	   			{
	   				if($child_dist[$i]['area_id']==$row['area_id'])
	   				{
	   					if($row['num_child']==NULL){
	   						$cumulative[$i][1]=0 ;
	   					}
	   					else{
	   						$cumulative[$i][1]=$row['num_child'];
	   					}
	   					break;
	   				}
	   				else{
	   					$cumulative[$i][1]=0;
	   				}
	   			}
	   			
	   		}
	   		$cumulative[$i][2]=$cumulative[$i][1];
	   		$tot1+=$cumulative[$i][1];
	   		$tot2+=$cumulative[$i][2];
	   		
	   	}
	   	if( $roles_id==10 || $roles_id==11 || $roles_id==21 || $roles_id==12 || $roles_id==13 || $roles_id==20 || $roles_id==22){
	   		$cumulative[sizeof($child_dist)][0]="<strong>Total</strong>";
	   		$cumulative[sizeof($child_dist)][1]="<strong>".$tot1."<strong>";
	   		$cumulative[sizeof($child_dist)][2]="<strong>".$tot2."<strong>";
	   	}
	   	
	   	return($cumulative);
	   	
	   }
	   function get_health_data($from,$to,$dist)
	   {
	   	$this->load->model('dashboard_model');
	   	$ses_ids=$this->session->userdata('login_user_id');
	   	$role=$this->dashboard_model->get_role_id($ses_ids);
	   	foreach($role as $rolep):
	   	$roles_id=$rolep['account_role_id'];
	   	$dist_id=$rolep['district_id'];
	   	$stat_id=$rolep['state_id'];
	   	endforeach;
	   	$newdistrict= $this->db->query("select  division_id from division_details  where division_details.district_id='" . $dist_id ."' ")->result_array();
	   	foreach($newdistrict as $newdistricts):
	   	$division_id=$newdistricts['division_id'];
	   	endforeach;
	   	//$from=$_POST['from'];
	   	//$to=$_POST['to'];
	   	//echo $roles_id;
	   	if( $roles_id==10 || $roles_id==11 || $roles_id==21 || $roles_id==12 || $roles_id==22)//For LC and LC Operator
	   	{
	   		$child_dist =$this->db->query("select area_name,area_id from child_area_detail where parent_id='IND010' group by area_name order by area_name")->result_array();
	   		
	   		$child_Hcard = $this->db->query("select sum(is_health_cards='No') as num_child,area_id from (select y.area_id, y.area_name, w.is_health_cards from child_area_detail as y left join (child_basic_detail as x left join child_health_department as w on x.child_id=w.child_id) on x.district_id =y.area_id where y.parent_id ='IND010' AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name order by area_name")->result_array();
	   	}
	   	else if($roles_id==13 || $roles_id==20 )
	   	{
	   		$child_dist =$this->db->query("select child_area_detail.area_name as area_name,child_area_detail.area_id as area_id from child_area_detail
				   where child_area_detail.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $division_id."') group by child_area_detail.area_name order by child_area_detail.area_name")->result_array();
	   		$child_Hcard = $this->db->query("select sum(is_health_cards='No') as num_child,area_id from (select y.area_id, y.area_name, w.is_health_cards from child_area_detail as y left join (child_basic_detail as x left join child_health_department as w on x.child_id=w.child_id) on x.district_id =y.area_id where y.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $division_id."') AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name order by area_name")->result_array();
	   		
	   		
	   	}
	   	else if($dist)
	   	{
	   		$child_dist =$this->db->query("select child_area_detail.area_name as area_name,child_area_detail.area_id as area_id from child_area_detail
				   where child_area_detail.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where child_area_detail.area_id='".$dist."' and  division_details.division_id='" . $division_id."') group by child_area_detail.area_name order by child_area_detail.area_name")->result_array();
	   		$child_Hcard = $this->db->query("select sum(is_health_cards='No') as num_child,area_id from (select y.area_id, y.area_name, w.is_health_cards from child_area_detail as y left join (child_basic_detail as x left join child_health_department as w on x.child_id=w.child_id) on x.district_id =y.area_id where y.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $division_id."') AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name order by area_name")->result_array();
	   		
	   		
	   	}
	   	$cumulative = array();
	   	for($i=0; $i<sizeof($child_dist); $i++){
	   		$cumulative[$i][0]=$child_dist[$i]['area_name'];
	   		$cumulative[$i][1]=0;
	   		if(sizeof($child_Hcard)>0)
	   		{
	   			foreach($child_Hcard as $row)
	   			{
	   				if($child_dist[$i]['area_id']==$row['area_id'])
	   				{
	   					if($row['num_child']==NULL){
	   						$cumulative[$i][1]=0 ;
	   					}
	   					else{
	   						$cumulative[$i][1]=$row['num_child'];
	   					}
	   					break;
	   				}
	   				else{
	   					$cumulative[$i][1]=0;
	   				}
	   			}
	   			
	   		}
	   		$cumulative[$i][2]=$cumulative[$i][1];
	   		$tot1+=$cumulative[$i][1];
	   		$tot2+=$cumulative[$i][2];
	   		
	   	}
	   	if( $roles_id==10 || $roles_id==11 || $roles_id==21 || $roles_id==12 || $roles_id==13 || $roles_id==20 || $roles_id==22){
	   		$cumulative[sizeof($child_dist)][0]="<strong>Total</strong>";
	   		$cumulative[sizeof($child_dist)][1]="<strong>".$tot1."<strong>";
	   		$cumulative[sizeof($child_dist)][2]="<strong>".$tot2."<strong>";
	   	}
	   	
	   	
	   	return($cumulative);
	   	
	   	
	   }
	   function get_sc_st_data($from,$to,$dist)
	   {
	   	$this->load->model('dashboard_model');
	   	$ses_ids=$this->session->userdata('login_user_id');
	   	$role=$this->dashboard_model->get_role_id($ses_ids);
	   	foreach($role as $rolep):
	   	$roles_id=$rolep['account_role_id'];
	   	$dist_id=$rolep['district_id'];
	   	$stat_id=$rolep['state_id'];
	   	endforeach;
	   	$newdistrict= $this->db->query("select  division_id from division_details  where division_details.district_id='" . $dist_id ."' ")->result_array();
	   	foreach($newdistrict as $newdistricts):
	   	$division_id=$newdistricts['division_id'];
	   	endforeach;
	   	//$from=$_POST['from'];
	   	//$to=$_POST['to'];
	   	//echo $roles_id;
	   	if( $roles_id==10 || $roles_id==11 || $roles_id==21 || $roles_id==12 || $roles_id==22)//For LC and LC Operator
	   	{
	   		$child_dist =$this->db->query("select area_name,area_id from child_area_detail where parent_id='IND010' group by area_name order by area_name")->result_array();
	   		
	   		$child_Scholarships = $this->db->query("select sum(benefited_scholarships='No') as num_child,area_id from (select y.area_id, y.area_name, w.benefited_scholarships from child_area_detail as y left join (child_basic_detail as x left join child_scst_department as w on x.child_id=w.child_id) on x.district_id =y.area_id where y.parent_id ='IND010' AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name order by area_name")->result_array();
	   	}
	   	else if($roles_id==13 || $roles_id==20 )
	   	{
	   		$child_dist =$this->db->query("select child_area_detail.area_name as area_name,child_area_detail.area_id as area_id from child_area_detail
				   where child_area_detail.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $division_id."') group by child_area_detail.area_name order by child_area_detail.area_name")->result_array();
	   		
	   		$child_Scholarships = $this->db->query("select sum(benefited_scholarships='No') as num_child,area_id from (select y.area_id, y.area_name, w.benefited_scholarships from child_area_detail as y left join (child_basic_detail as x left join child_scst_department as w on x.child_id=w.child_id) on x.district_id =y.area_id where y.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $division_id."') AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name order by area_name")->result_array();
	   		
	   	}
	   	else if($dist)
	   	{
	   		$child_dist =$this->db->query("select child_area_detail.area_name as area_name,child_area_detail.area_id as area_id from child_area_detail
				   where child_area_detail.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where  child_area_detail.area_id='".$dist."' and division_details.division_id='" . $division_id."') group by child_area_detail.area_name order by child_area_detail.area_name")->result_array();
	   		
	   		$child_Scholarships = $this->db->query("select sum(benefited_scholarships='No') as num_child,area_id from (select y.area_id, y.area_name, w.benefited_scholarships from child_area_detail as y left join (child_basic_detail as x left join child_scst_department as w on x.child_id=w.child_id) on x.district_id =y.area_id where y.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $division_id."') AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name order by area_name")->result_array();
	   		
	   	}
	   	$cumulative = array();
	   	for($i=0; $i<sizeof($child_dist); $i++){
	   		$cumulative[$i][0]=$child_dist[$i]['area_name'];
	   		$cumulative[$i][1]=0;
	   		if(sizeof($child_Scholarships)>0)
	   		{
	   			foreach($child_Scholarships as $row)
	   			{
	   				if($child_dist[$i]['area_id']==$row['area_id'])
	   				{
	   					if($row['num_child']==NULL){
	   						$cumulative[$i][1]=0 ;
	   					}
	   					else{
	   						$cumulative[$i][1]=$row['num_child'];
	   					}
	   					break;
	   				}
	   				else{
	   					$cumulative[$i][1]=0;
	   				}
	   			}
	   			
	   		}
	   		
	   		$cumulative[$i][2]=$cumulative[$i][1];
	   		$tot1+=$cumulative[$i][1];
	   		$tot2+=$cumulative[$i][2];
	   		
	   	}
	   	if( $roles_id==10 || $roles_id==11 || $roles_id==21 || $roles_id==12 || $roles_id==13 || $roles_id==20 || $roles_id==22){
	   		$cumulative[sizeof($child_dist)][0]="<strong>Total</strong>";
	   		$cumulative[sizeof($child_dist)][1]="<strong>".$tot1."<strong>";
	   		$cumulative[sizeof($child_dist)][2]="<strong>".$tot2."<strong>";
	   	}
	   	
	   	return($cumulative);
	   	
	   }
	   function get_food_data($from,$to,$dist)
	   {
	   	$this->load->model('dashboard_model');
	   	$ses_ids=$this->session->userdata('login_user_id');
	   	$role=$this->dashboard_model->get_role_id($ses_ids);
	   	foreach($role as $rolep):
	   	$roles_id=$rolep['account_role_id'];
	   	$dist_id=$rolep['district_id'];
	   	$stat_id=$rolep['state_id'];
	   	endforeach;
	   	$newdistrict= $this->db->query("select  division_id from division_details  where division_details.district_id='" . $dist_id ."' ")->result_array();
	   	//$from='2014-04-01';
	   	//$to='2017-05-26';
	   	//echo $roles_id;
	   	foreach($newdistrict as $newdistricts):
	   	$division_id=$newdistricts['division_id'];
	   	endforeach;
	   	//$from=$_POST['from'];
	   	//$to=$_POST['to'];
	   	//echo $roles_id;
	   	if( $roles_id==10 || $roles_id==11 || $roles_id==21 || $roles_id==12 || $roles_id==22)//For LC and LC Operator
	   	{
	   		$child_dist =$this->db->query("select area_name,area_id from child_area_detail where parent_id='IND010' group by area_name order by area_name")->result_array();
	   		
	   		$child_Rcard = $this->db->query("select sum(benefited_scholarships='No') as num_child,area_id from (select y.area_id, y.area_name, w.benefited_scholarships from child_area_detail as y left join (child_basic_detail as x left join child_scst_department as w on x.child_id=w.child_id) on x.district_id =y.area_id where y.parent_id ='IND010' AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name order by area_name")->result_array();
	   		
	   		$child_Pds = $this->db->query("select sum(benefited_scholarships='No') as num_child,area_id from (select y.area_id, y.area_name, w.benefited_scholarships from child_area_detail as y left join (child_basic_detail as x left join child_scst_department as w on x.child_id=w.child_id) on x.district_id =y.area_id where y.parent_id ='IND010' AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name order by area_name")->result_array();
	   		
	   		
	   	}
	   	else if($roles_id==13 || $roles_id==20 )
	   	{
	   		$child_dist =$this->db->query("select child_area_detail.area_name as area_name,child_area_detail.area_id as area_id from child_area_detail
				   where child_area_detail.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $division_id."') group by child_area_detail.area_name order by child_area_detail.area_name")->result_array();
	   		$child_Rcard = $this->db->query("select sum(benefited_scholarships='No') as num_child,area_id from (select y.area_id, y.area_name, w.benefited_scholarships from child_area_detail as y left join (child_basic_detail as x left join child_scst_department as w on x.child_id=w.child_id) on x.district_id =y.area_id where y.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $division_id."') AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name order by area_name")->result_array();
	   		
	   		$child_Pds = $this->db->query("select sum(benefited_scholarships='No') as num_child,area_id from (select y.area_id, y.area_name, w.benefited_scholarships from child_area_detail as y left join (child_basic_detail as x left join child_scst_department as w on x.child_id=w.child_id) on x.district_id =y.area_id where y.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $division_id."') AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name order by area_name")->result_array();
	   		
	   	}
	   	
	   	else if($dist)
	   	{
	   		$child_dist =$this->db->query("select child_area_detail.area_name as area_name,child_area_detail.area_id as area_id from child_area_detail
				   where child_area_detail.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where child_area_detail.area_id='".$dist."' and  division_details.division_id='" . $division_id."') group by child_area_detail.area_name order by child_area_detail.area_name")->result_array();
	   		$child_Rcard = $this->db->query("select sum(benefited_scholarships='No') as num_child,area_id from (select y.area_id, y.area_name, w.benefited_scholarships from child_area_detail as y left join (child_basic_detail as x left join child_scst_department as w on x.child_id=w.child_id) on x.district_id =y.area_id where y.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $division_id."') AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name order by area_name")->result_array();
	   		
	   		$child_Pds = $this->db->query("select sum(benefited_scholarships='No') as num_child,area_id from (select y.area_id, y.area_name, w.benefited_scholarships from child_area_detail as y left join (child_basic_detail as x left join child_scst_department as w on x.child_id=w.child_id) on x.district_id =y.area_id where y.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $division_id."') AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name order by area_name")->result_array();
	   		
	   	}
	   	
	   	$cumulative = array();
	   	for($i=0; $i<sizeof($child_dist); $i++){
	   		$cumulative[$i][0]=$child_dist[$i]['area_name'];
	   		$cumulative[$i][1]=0;
	   		$cumulative[$i][2]=0;
	   		$cumulative[$i][3]=0;
	   		
	   		if(sizeof($child_Rcard)>0)
	   		{
	   			foreach($child_Rcard as $row)
	   			{
	   				if($child_dist[$i]['area_id']==$row['area_id'])
	   				{
	   					if($row['num_child']==NULL){
	   						$cumulative[$i][1]=0 ;
	   					}
	   					else{
	   						$cumulative[$i][1]=$row['num_child'];
	   					}
	   					break;
	   				}
	   				else{
	   					$cumulative[$i][1]=0;
	   				}
	   			}
	   			
	   		}
	   		
	   		if(sizeof($child_Pds)>0)
	   		{
	   			foreach($child_Pds as $row)
	   			{
	   				if($child_dist[$i]['area_id']==$row['area_id'])
	   				{
	   					if($row['num_child']==NULL){
	   						$cumulative[$i][2]=0 ;
	   					}
	   					else{
	   						$cumulative[$i][2]=$row['num_child'];
	   					}
	   					break;
	   				}
	   				else{
	   					$cumulative[$i][2]=0;
	   				}
	   			}
	   			
	   		}
	   		
	   		$cumulative[$i][3]=$cumulative[$i][1]+$cumulative[$i][2];
	   		$tot1+=$cumulative[$i][1];
	   		$tot2+=$cumulative[$i][2];
	   		$tot3+=$cumulative[$i][3];
	   		
	   	}
	   	if( $roles_id==10 || $roles_id==11 || $roles_id==21 || $roles_id==12 || $roles_id==13 || $roles_id==20 || $roles_id==22){
	   		$cumulative[sizeof($child_dist)][0]="<strong>Total</strong>";
	   		$cumulative[sizeof($child_dist)][1]="<strong>".$tot1."<strong>";
	   		$cumulative[sizeof($child_dist)][2]="<strong>".$tot2."<strong>";
	   		$cumulative[sizeof($child_dist)][3]="<strong>".$tot3."<strong>";
	   	}
	   	
	   	return($cumulative);
	   	
	   }
	   
	   function get_minority_data($from,$to,$dist)
	   {
	   	$this->load->model('dashboard_model');
	   	$ses_ids=$this->session->userdata('login_user_id');
	   	$role=$this->dashboard_model->get_role_id($ses_ids);
	   	foreach($role as $rolep):
	   	$roles_id=$rolep['account_role_id'];
	   	$dist_id=$rolep['district_id'];
	   	$stat_id=$rolep['state_id'];
	   	endforeach;
	   	$newdistrict= $this->db->query("select  division_id from division_details  where division_details.district_id='" . $dist_id ."' ")->result_array();
	   	//$from='2014-04-01';
	   	//$to='2017-05-26';
	   	//echo $roles_id;
	   	foreach($newdistrict as $newdistricts):
	   	$division_id=$newdistricts['division_id'];
	   	endforeach;
	   	
	   	
	   	//$from=$_POST['from'];
	   	//$to=$_POST['to'];
	   	//echo $roles_id;
	   	if( $roles_id==10 || $roles_id==11 || $roles_id==21 || $roles_id==12 || $roles_id==22)//For LC and LC Operator
	   	{
	   		$child_dist =$this->db->query("select area_name,area_id from child_area_detail where parent_id='IND010' group by area_name order by area_name")->result_array();
	   		
	   		$child_SH = $this->db->query("select sum(is_housing_scheme='No') as num_child,area_id from (select y.area_id, y.area_name, w.is_housing_scheme from child_area_detail as y left join (child_basic_detail as x left join child_minority_welfare_department as w on x.child_id=w.child_id) on x.district_id =y.area_id where y.parent_id ='IND010' AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name order by area_name")->result_array();
	   		
	   		$child_LB = $this->db->query("select sum(is_loan='No') as num_child,area_id from (select y.area_id, y.area_name, w.is_loan from child_area_detail as y left join (child_basic_detail as x left join child_minority_welfare_department as w on x.child_id=w.child_id) on x.district_id =y.area_id where y.parent_id ='IND010' AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name order by area_name")->result_array();
	   		
	   	}
	   	else if($roles_id==13 || $roles_id==20 )//For DLC
	   	{
	   		$child_dist =$this->db->query("select child_area_detail.area_name as area_name,child_area_detail.area_id as area_id from child_area_detail
				   where child_area_detail.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $division_id."') group by child_area_detail.area_name order by child_area_detail.area_name")->result_array();
	   		$child_SH = $this->db->query("select sum(is_housing_scheme='No') as num_child,area_id from (select y.area_id, y.area_name, w.is_housing_scheme from child_area_detail as y left join (child_basic_detail as x left join child_minority_welfare_department as w on x.child_id=w.child_id) on x.district_id =y.area_id where y.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $division_id."') AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name order by area_name")->result_array();
	   		
	   		$child_LB = $this->db->query("select sum(is_loan='No') as num_child,area_id from (select y.area_id, y.area_name, w.is_loan from child_area_detail as y left join (child_basic_detail as x left join child_minority_welfare_department as w on x.child_id=w.child_id) on x.district_id =y.area_id where y.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $division_id."') AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name order by area_name")->result_array();
	   	}
	   	else if($dist)//For DLC
	   	{
	   		$child_dist =$this->db->query("select child_area_detail.area_name as area_name,child_area_detail.area_id as area_id from child_area_detail
				   where child_area_detail.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where  child_area_detail.area_id='".$dist."' and division_details.division_id='" . $division_id."') group by child_area_detail.area_name order by child_area_detail.area_name")->result_array();
	   		$child_SH = $this->db->query("select sum(is_housing_scheme='No') as num_child,area_id from (select y.area_id, y.area_name, w.is_housing_scheme from child_area_detail as y left join (child_basic_detail as x left join child_minority_welfare_department as w on x.child_id=w.child_id) on x.district_id =y.area_id where y.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $division_id."') AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name order by area_name")->result_array();
	   		
	   		$child_LB = $this->db->query("select sum(is_loan='No') as num_child,area_id from (select y.area_id, y.area_name, w.is_loan from child_area_detail as y left join (child_basic_detail as x left join child_minority_welfare_department as w on x.child_id=w.child_id) on x.district_id =y.area_id where y.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $division_id."') AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name order by area_name")->result_array();
	   	}
	   	
	   	$cumulative = array();
	   	for($i=0; $i<sizeof($child_dist); $i++){
	   		$cumulative[$i][0]=$child_dist[$i]['area_name'];
	   		$cumulative[$i][1]=0;
	   		$cumulative[$i][2]=0;
	   		
	   		if(sizeof($child_SH)>0)
	   		{
	   			foreach($child_SH as $row)
	   			{
	   				if($child_dist[$i]['area_id']==$row['area_id'])
	   				{
	   					if($row['num_child']==NULL){
	   						$cumulative[$i][1]=0 ;
	   					}
	   					else{
	   						$cumulative[$i][1]=$row['num_child'];
	   					}
	   					break;
	   				}
	   				else{
	   					$cumulative[$i][1]=0;
	   				}
	   			}
	   			
	   		}
	   		
	   		if(sizeof($child_LB)>0)
	   		{
	   			foreach($child_LB as $row)
	   			{
	   				if($child_dist[$i]['area_id']==$row['area_id'])
	   				{
	   					if($row['num_child']==NULL){
	   						$cumulative[$i][2]=0 ;
	   					}
	   					else{
	   						$cumulative[$i][2]=$row['num_child'];
	   					}
	   					break;
	   				}
	   				else{
	   					$cumulative[$i][2]=0;
	   				}
	   			}
	   			
	   		}
	   		$cumulative[$i][3]=$cumulative[$i][1]+$cumulative[$i][2];
	   		$tot1+=$cumulative[$i][1];
	   		$tot2+=$cumulative[$i][2];
	   		$tot3+=$cumulative[$i][3];
	   		
	   	}
	   	if( $roles_id==10 || $roles_id==11 || $roles_id==21 || $roles_id==12 || $roles_id==13 || $roles_id==20 || $roles_id==22){
	   		$cumulative[sizeof($child_dist)][0]="<strong>Total</strong>";
	   		$cumulative[sizeof($child_dist)][1]="<strong>".$tot1."<strong>";
	   		$cumulative[sizeof($child_dist)][2]="<strong>".$tot2."<strong>";
	   		$cumulative[sizeof($child_dist)][3]="<strong>".$tot3."<strong>";
	   	}
	   	return($cumulative);
	   	
	   }
	   function get_social_data($from,$to,$dist)
	   {
	   	$this->load->model('dashboard_model');
	   	$ses_ids=$this->session->userdata('login_user_id');
	   	$role=$this->dashboard_model->get_role_id($ses_ids);
	   	foreach($role as $rolep):
	   	$roles_id=$rolep['account_role_id'];
	   	$dist_id=$rolep['district_id'];
	   	$stat_id=$rolep['state_id'];
	   	endforeach;
	   	
	   	$newdistrict= $this->db->query("select  division_id from division_details  where division_details.district_id='" . $dist_id ."' ")->result_array();
	   	//$from='2014-04-01';
	   	//$to='2017-05-26';
	   	//echo $roles_id;
	   	foreach($newdistrict as $newdistricts):
	   	$division_id=$newdistricts['division_id'];
	   	endforeach;
	   	//$from=$_POST['from'];
	   	//$to=$_POST['to'];
	   	//echo $roles_id;
	   	if( $roles_id==10 || $roles_id==11 || $roles_id==21 || $roles_id==12 || $roles_id==22)//For LC and LC Operator
	   	{
	   		$child_dist =$this->db->query("select area_name,area_id from child_area_detail where parent_id='IND010' group by area_name order by area_name")->result_array();
	   		
	   		$child_SP = $this->db->query("select sum(social_pension_eligible='Yes'  and social_pension_availed='No') as num_child,area_id from (select y.area_id, y.area_name, w.social_pension_eligible,w.social_pension_availed from child_area_detail as y left join (child_basic_detail as x left join child_social_welfare_department as w on x.child_id=w.child_id) on x.district_id =y.area_id where y.parent_id ='IND010' AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name order by area_name")->result_array();
	   		
	   		$child_PS = $this->db->query("select sum(parvarish_scheme_eligible='Yes' and parvarish_scheme_availed='No') as num_child,area_id from (select y.area_id, y.area_name, w.parvarish_scheme_eligible,w.parvarish_scheme_availed from child_area_detail as y left join (child_basic_detail as x left join child_social_welfare_department as w on x.child_id=w.child_id) on x.district_id =y.area_id where y.parent_id ='IND010' AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name order by area_name")->result_array();
	   		
	   		$child_SBF = $this->db->query("select sum(family_availed_sponsorship='No') as num_child,area_id from (select y.area_id, y.area_name, w.family_availed_sponsorship from child_area_detail as y left join (child_basic_detail as x left join child_social_welfare_department as w on x.child_id=w.child_id) on x.district_id =y.area_id where y.parent_id ='IND010' AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name order by area_name")->result_array();
	   		
	   		$child_SBC = $this->db->query("select sum(is_child_sponsorship='No') as num_child,area_id from (select y.area_id, y.area_name, w.is_child_sponsorship from child_area_detail as y left join (child_basic_detail as x left join child_social_welfare_department as w on x.child_id=w.child_id) on x.district_id =y.area_id where y.parent_id ='IND010' AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name order by area_name")->result_array();
	   		
	   	}
	   	else if($roles_id==13 || $roles_id==20 )//for DLC
	   	{
	   		$child_dist =$this->db->query("select child_area_detail.area_name as area_name,child_area_detail.area_id as area_id from child_area_detail
				   where child_area_detail.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $division_id."') group by child_area_detail.area_name order by child_area_detail.area_name")->result_array();
	   		$child_SP = $this->db->query("select sum(social_pension_eligible='Yes'  and social_pension_availed='No') as num_child,area_id from (select y.area_id, y.area_name, w.social_pension_eligible,w.social_pension_availed from child_area_detail as y left join (child_basic_detail as x left join child_social_welfare_department as w on x.child_id=w.child_id) on x.district_id =y.area_id where y.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $division_id."')  AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name order by area_name")->result_array();
	   		
	   		$child_PS = $this->db->query("select sum(parvarish_scheme_eligible='Yes' and parvarish_scheme_availed='No') as num_child,area_id from (select y.area_id, y.area_name, w.parvarish_scheme_eligible,w.parvarish_scheme_availed from child_area_detail as y left join (child_basic_detail as x left join child_social_welfare_department as w on x.child_id=w.child_id) on x.district_id =y.area_id where y.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $division_id."') AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name order by area_name")->result_array();
	   		
	   		$child_SBF = $this->db->query("select sum(family_availed_sponsorship='No') as num_child,area_id from (select y.area_id, y.area_name, w.family_availed_sponsorship from child_area_detail as y left join (child_basic_detail as x left join child_social_welfare_department as w on x.child_id=w.child_id) on x.district_id =y.area_id where y.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $division_id."') AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name order by area_name")->result_array();
	   		
	   		$child_SBC = $this->db->query("select sum(is_child_sponsorship='No') as num_child,area_id from (select y.area_id, y.area_name, w.is_child_sponsorship from child_area_detail as y left join (child_basic_detail as x left join child_social_welfare_department as w on x.child_id=w.child_id) on x.district_id =y.area_id where y.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $division_id."') AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name order by area_name")->result_array();
	   		
	   	}
	   	
	   	else if($dist)//for ls ,leo and all district level
	   	
	   	{
	   		
	   		$child_dist =$this->db->query("select child_area_detail.area_name as area_name,child_area_detail.area_id as area_id from child_area_detail
				   where child_area_detail.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where child_area_detail.area_id='".$dist."' and division_details.division_id='" . $division_id."') group by child_area_detail.area_name order by child_area_detail.area_name")->result_array();
	   		$child_SP = $this->db->query("select sum(social_pension_eligible='Yes'  and social_pension_availed='No') as num_child,area_id from (select y.area_id, y.area_name, w.social_pension_eligible,w.social_pension_availed from child_area_detail as y left join (child_basic_detail as x left join child_social_welfare_department as w on x.child_id=w.child_id) on x.district_id =y.area_id where y.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $division_id."')  AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name order by area_name")->result_array();
	   		
	   		$child_PS = $this->db->query("select sum(parvarish_scheme_eligible='Yes' and parvarish_scheme_availed='No') as num_child,area_id from (select y.area_id, y.area_name, w.parvarish_scheme_eligible,w.parvarish_scheme_availed from child_area_detail as y left join (child_basic_detail as x left join child_social_welfare_department as w on x.child_id=w.child_id) on x.district_id =y.area_id where y.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $division_id."') AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name order by area_name")->result_array();
	   		
	   		$child_SBF = $this->db->query("select sum(family_availed_sponsorship='No') as num_child,area_id from (select y.area_id, y.area_name, w.family_availed_sponsorship from child_area_detail as y left join (child_basic_detail as x left join child_social_welfare_department as w on x.child_id=w.child_id) on x.district_id =y.area_id where y.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $division_id."') AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name order by area_name")->result_array();
	   		
	   		$child_SBC = $this->db->query("select sum(is_child_sponsorship='No') as num_child,area_id from (select y.area_id, y.area_name, w.is_child_sponsorship from child_area_detail as y left join (child_basic_detail as x left join child_social_welfare_department as w on x.child_id=w.child_id) on x.district_id =y.area_id where y.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" .$division_id."') AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name order by area_name")->result_array();
	   		
	   		
	   		
	   	}
	   	
	   	$cumulative = array();
	   	for($i=0; $i<sizeof($child_dist); $i++){
	   		$cumulative[$i][0]=$child_dist[$i]['area_name'];
	   		$cumulative[$i][1]=0;
	   		$cumulative[$i][2]=0;
	   		$cumulative[$i][3]=0;
	   		$cumulative[$i][4]=0;
	   		
	   		if(sizeof($child_SP)>0)
	   		{
	   			foreach($child_SP as $row)
	   			{
	   				if($child_dist[$i]['area_id']==$row['area_id'])
	   				{
	   					if($row['num_child']==NULL){
	   						$cumulative[$i][1]=0 ;
	   					}
	   					else{
	   						$cumulative[$i][1]=$row['num_child'];
	   					}
	   					break;
	   				}
	   				else{
	   					$cumulative[$i][1]=0;
	   				}
	   			}
	   			
	   		}
	   		
	   		if(sizeof($child_PS)>0)
	   		{
	   			foreach($child_PS as $row)
	   			{
	   				if($child_dist[$i]['area_id']==$row['area_id'])
	   				{
	   					if($row['num_child']==NULL){
	   						$cumulative[$i][2]=0 ;
	   					}
	   					else{
	   						$cumulative[$i][2]=$row['num_child'];
	   					}
	   					break;
	   				}
	   				else{
	   					$cumulative[$i][2]=0;
	   				}
	   			}
	   			
	   		}
	   		
	   		
	   		
	   		if(sizeof($child_SBF)>0)
	   		{
	   			foreach($child_SBF as $row)
	   			{
	   				if($child_dist[$i]['area_id']==$row['area_id'])
	   				{
	   					if($row['num_child']==NULL){
	   						$cumulative[$i][3]=0 ;
	   					}
	   					else{
	   						$cumulative[$i][3]=$row['num_child'];
	   					}
	   					break;
	   				}
	   				else{
	   					$cumulative[$i][3]=0;
	   				}
	   			}
	   			
	   		}
	   		
	   		if(sizeof($child_SBC)>0)
	   		{
	   			foreach($child_SBC as $row)
	   			{
	   				if($child_dist[$i]['area_id']==$row['area_id'])
	   				{
	   					if($row['num_child']==NULL){
	   						$cumulative[$i][4]=0 ;
	   					}
	   					else{
	   						$cumulative[$i][4]=$row['num_child'];
	   					}
	   					break;
	   				}
	   				else{
	   					$cumulative[$i][4]=0;
	   				}
	   			}
	   			
	   		}
	   		
	   		$cumulative[$i][5]=$cumulative[$i][1]+$cumulative[$i][2]+$cumulative[$i][3]+$cumulative[$i][4];
	   		$tot1+=$cumulative[$i][1];
	   		$tot2+=$cumulative[$i][2];
	   		$tot3+=$cumulative[$i][3];
	   		$tot4+=$cumulative[$i][4];
	   		$tot5+=$cumulative[$i][5];
	   		
	   	}
	   	
	   	if( $roles_id==10 || $roles_id==11 || $roles_id==21 || $roles_id==12 || $roles_id==13 || $roles_id==20 || $roles_id==22){
	   		$cumulative[sizeof($child_dist)][0]="<strong>Total</strong>";
	   		$cumulative[sizeof($child_dist)][1]="<strong>".$tot1."<strong>";
	   		$cumulative[sizeof($child_dist)][2]="<strong>".$tot2."<strong>";
	   		$cumulative[sizeof($child_dist)][3]="<strong>".$tot3."<strong>";
	   		$cumulative[sizeof($child_dist)][4]="<strong>".$tot4."<strong>";
	   		$cumulative[sizeof($child_dist)][5]="<strong>".$tot5."<strong>";
	   		
	   		
	   	}
	   	return($cumulative);
	   	
	   }
	   
	   function get_due_for_transfer($from,$to,$dist)
	   {
	   	
	   	$this->load->model('dashboard_model');
	   	$ses_ids=$this->session->userdata('login_user_id');
	   	$role=$this->dashboard_model->get_role_id($ses_ids);
	   	foreach($role as $rolep):
	   	$roles_id=$rolep['account_role_id'];
	   	$dist_id=$rolep['district_id'];
	   	$stat_id=$rolep['state_id'];
	   	endforeach;
	   	
	   	$newdistrict= $this->db->query("select  division_id from division_details  where division_details.district_id='" . $dist_id ."' ")->result_array();
	   	//$from='2014-04-01';
	   	//$to='2017-05-26';
	   	//echo $roles_id;
	   	foreach($newdistrict as $newdistricts):
	   	$division_id=$newdistricts['division_id'];
	   	endforeach;
	 
	   	if($roles_id==10 || $roles_id==11 || $roles_id==21 || $roles_id==12 || $roles_id==22) 	
	   	
	   	{
	   		
	   		$child_dist =$this->db->query("select area_name,area_id from child_area_detail where parent_id='IND010' group by area_name order by area_name")->result_array();
	   		//print_r($child_dist);
	   		//echo "select area_id,SUM(CASE WHEN district != district_id THEN 1 ELSE 0 END) count_id from child_area_detail left join child_basic_detail ON child_area_detail.area_id=child_basic_detail.district_id left join final_order ON child_basic_detail.child_id=final_order.child_id where final_ordered !='YES' AND child_area_detail.parent_id='IND010' and STR_TO_DATE(idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' GROUP BY child_area_detail.area_name" ;
	   		
	   		$child_transfer_to =$this->db->query("select area_id,SUM(CASE WHEN district != district_id THEN 1 ELSE 0 END) count_id from child_area_detail left join child_basic_detail ON child_area_detail.area_id=child_basic_detail.district_id left join final_order ON child_basic_detail.child_id=final_order.child_id where final_ordered !='YES' AND child_area_detail.parent_id='IND010' and STR_TO_DATE(idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' GROUP BY child_area_detail.area_name")->result_array();
	   		//print_r($child_transfer_to);
	   		$child_transfer_from = $this->db->query("select area_id, SUM(CASE WHEN district != district_id THEN 1 ELSE 0 END) count_id1 from child_area_detail left join child_basic_detail ON child_area_detail.area_id=child_basic_detail.district left join final_order ON child_basic_detail.child_id=final_order.child_id where final_ordered !='YES' AND child_area_detail.parent_id='IND010' and STR_TO_DATE(idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' GROUP BY child_area_detail.area_name")->result_array();
	   		//print_r($child_transfer_from);
	   		$child_forwaded_cwc=$this->db->query("select area_id, SUM(CASE WHEN district != district_id THEN 1 ELSE 0 END) count_id2 from child_area_detail left join child_basic_detail ON child_area_detail.area_id=child_basic_detail.district_id left join  final_order ON child_basic_detail.child_id=final_order.child_id where final_ordered !='YES' AND child_area_detail.parent_id='IND010'  and child_basic_detail.ls_activate='N'  AND STR_TO_DATE(idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' GROUP BY child_area_detail.area_name")->result_array();
	   		$child_dist_id =$this->db->query("select area_id from child_area_detail where parent_id='IND010' group by area_name order by area_id")->result_array();
	   		//print_r($child_forwaded_cwc);
	   }
	   
	   
	   
	   if($roles_id==13 || $roles_id==20)
	   
	   {
	   
	   	$child_dist =$this->db->query("select child_area_detail.area_name as area_name,child_area_detail.area_id as area_id from child_area_detail
			   where child_area_detail.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $division_id."') group by child_area_detail.area_name order by child_area_detail.area_name")->result_array();
	   	//print_r($child_dist);
	   	
	   	$child_transfer_to =$this->db->query("select area_id, SUM(CASE WHEN district != district_id THEN 1 ELSE 0 END) count_id from child_area_detail left join child_basic_detail ON child_area_detail.area_id=child_basic_detail.district_id left join final_order ON child_basic_detail.child_id=final_order.child_id where final_ordered !='YES' AND child_area_detail.parent_id='IND010' and STR_TO_DATE(idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."'  GROUP BY child_area_detail.area_name")->result_array();
	   	//print_r($child_transfer_to);
	   	$child_transfer_from = $this->db->query("select area_id, SUM(CASE WHEN district != district_id THEN 1 ELSE 0 END) count_id1 from child_area_detail left join child_basic_detail ON child_area_detail.area_id=child_basic_detail.district left join final_order ON child_basic_detail.child_id=final_order.child_id where final_ordered !='YES' AND child_area_detail.parent_id='IND010' and STR_TO_DATE(idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' GROUP BY child_area_detail.area_name")->result_array();
	   	
	   	$child_forwaded_cwc=$this->db->query("select area_id, SUM(CASE WHEN district != district_id THEN 1 ELSE 0 END) count_id2 from child_area_detail left join child_basic_detail ON child_area_detail.area_id=child_basic_detail.district_id left join  final_order ON child_basic_detail.child_id=final_order.child_id where final_ordered !='YES' AND child_area_detail.parent_id='IND010'  and child_basic_detail.ls_activate='N'  AND STR_TO_DATE(idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' GROUP BY child_area_detail.area_name")->result_array();
	   	$child_dist_id =$this->db->query("select child_area_detail.area_name as area_name,child_area_detail.area_id as area_id from child_area_detail
			   where child_area_detail.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $division_id."') group by child_area_detail.area_name order by child_area_detail.area_name")->result_array();
	   }
	   
	   if(($roles_id==2)||($roles_id==5)||($roles_id==6)||($roles_id==7)||($roles_id==8)||($roles_id==14)||($roles_id==16)||($roles_id==18)||($roles_id==19))
	   
	   {
	   	
	   	$child_dist =$this->db->query("select area_name,area_id from child_area_detail where parent_id='IND010'  and area_id='".$dist_id."' group by area_name order by area_name")->result_array();
	   	//print_r($child_dist);
	   	$child_transfer_to =$this->db->query("select area_id, SUM(CASE WHEN district != district_id THEN 1 ELSE 0 END) count_id from child_area_detail left join child_basic_detail ON child_area_detail.area_id=child_basic_detail.district_id left join final_order ON child_basic_detail.child_id=final_order.child_id where final_ordered !='YES' AND child_area_detail.area_id='".$dist_id."' and STR_TO_DATE(idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' GROUP BY child_area_detail.area_name")->result_array();
	   	//print_r($child_transfer_to);
	   //	echo "select area_id, SUM(CASE WHEN district != district_id THEN 1 ELSE 0 END) count_id1 from child_area_detail left join child_basic_detail ON child_area_detail.area_id=child_basic_detail.district left join final_order ON child_basic_detail.child_id=final_order.child_id where final_ordered !='YES' AND child_area_detail.area_id='".$dist_id."' and STR_TO_DATE(idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' GROUP BY child_area_detail.area_name" ;
	   	$child_transfer_from = $this->db->query("select area_id, SUM(CASE WHEN district != district_id THEN 1 ELSE 0 END) count_id1 from child_area_detail left join child_basic_detail ON child_area_detail.area_id=child_basic_detail.district left join final_order ON child_basic_detail.child_id=final_order.child_id where final_ordered !='YES' AND child_area_detail.parent_id='IND010' and STR_TO_DATE(idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' GROUP BY child_area_detail.area_name")->result_array();
	   	
	   	$child_forwaded_cwc=$this->db->query("select area_id, SUM(CASE WHEN district != district_id THEN 1 ELSE 0 END) count_id2 from child_area_detail left join child_basic_detail ON child_area_detail.area_id=child_basic_detail.district_id left join  final_order ON child_basic_detail.child_id=final_order.child_id where final_ordered !='YES' AND child_area_detail.parent_id='IND010'  and child_basic_detail.ls_activate='N'  AND STR_TO_DATE(idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' GROUP BY child_area_detail.area_name")->result_array();
	   }
	   
	   $cumulative = array();
	   for($i=0; $i<sizeof($child_dist); $i++){
	   	$cumulative[$i][0]=$child_dist[$i]['area_name'];
	   	$cumulative[$i][1]=0;
	   	$cumulative[$i][2]=0;
	   	$cumulative[$i][3]=0;
	   	$cumulative[$i][4]=0;
	   	
	   	
	   	
	   	
	   	if(sizeof($child_transfer_to)>0)
	   	{
	   		foreach($child_transfer_to as $row)
	   		{
	   			
	   			if($child_dist[$i]['area_id']==$row['area_id'])
	   			{
	   				
	   				$cumulative[$i][1]=$row['count_id'];
	   				break;
	   			}
	   			else{
	   				$cumulative[$i][1]=0;
	   			}
	   		}
	   		
	   	}
	   	
	   	if(sizeof($child_transfer_from)>0)
	   	{
	   		foreach($child_transfer_from as $row)
	   		{
	   			if($child_dist[$i]['area_id']==$row['area_id'])
	   			{
	   				$cumulative[$i][2]=$row['count_id1'];
	   				break;
	   			}
	   			else{
	   				$cumulative[$i][2]=0;
	   			}
	   		}
	   		
	   	}
	   	if(sizeof($child_forwaded_cwc)>0)
	   	{
	   		foreach($child_forwaded_cwc as $row)
	   		{
	   			
	   			if($child_dist[$i]['area_id']==$row['area_id'])
	   			{
	   				$cumulative[$i][3]=$row['count_id2'];
	   				break;
	   			}
	   			else{
	   				$cumulative[$i][3]=0;
	   			}
	   		}
	   		
	   	}
	   	
	   	if(sizeof($child_dist_id)>0)
	   	{
	   		foreach($child_dist_id as $row)
	   		{
	   			
	   			if($child_dist[$i]['area_id']==$row['area_id'])
	   			{
	   				$cumulative[$i][4]=$row['area_id'];
	   				break;
	   			}
	   			else{
	   				$cumulative[$i][4]=0;
	   			}
	   		}
	   		
	   	}
	   	
	   	
	   	
	
	 
	   	//$cumulative[$i][5]=$cumulative[$i][1]+$cumulative[$i][2]+$cumulative[$i][3]+$cumulative[$i][4];
	   	$tot1+=$cumulative[$i][1];
	   	$tot2+=$cumulative[$i][2];
	   	$tot3+=$cumulative[$i][3];
	   	$tot4+=$cumulative[$i][4];
	   	$tot5+=$cumulative[$i][5];
	   	
	   
	   }
	   
	   if( $roles_id==10 || $roles_id==11 || $roles_id==21 || $roles_id==12 || $roles_id==13 || $roles_id==20 || $roles_id==22){
	   	$cumulative[sizeof($child_dist)][0]="<strong>Total</strong>";
	   	$cumulative[sizeof($child_dist)][1]="<strong>".$tot1."<strong>";
	   	$cumulative[sizeof($child_dist)][2]="<strong>".$tot2."<strong>";
	   	$cumulative[sizeof($child_dist)][3]="<strong>".$tot3."<strong>";
	   	$cumulative[sizeof($child_dist)][4]="<strong>".$tot4."<strong>";
	   	$cumulative[sizeof($child_dist)][5]="<strong>".$tot5."<strong>";
	   	
	   }
	   
	   
	   //echo $cumulative;
	   return $cumulative ;
	
	   }   
	   
	   function get_details_order_transfer($from,$to,$type,$param1)
	   {
	   	$ses_ids=$this->session->userdata('login_user_id');
	   	$role=$this->get_role_id($ses_ids);
	   	foreach($role as $rolep):
	   	$roles_id=$rolep['account_role_id'];
	   	$dist_id=$rolep['district_id'];
	   	endforeach;
	   	$newdistrict= $this->db->query("select  division_id from division_details  where division_details.district_id='" . $dist_id ."' ")->result_array();
	   	foreach($newdistrict as $newdistricts):
	    $division_id=$newdistricts['division_id'];
	   	endforeach;
	   	
	   	
	   	if($roles_id==10 || $roles_id==11  || $roles_id==12 || $roles_id==22)//for lC and Lc operator
	   	{
	     $query="  select child_basic_detail.child_id, 
	   child_basic_detail.child_name,child_basic_detail.father_name,
	   child_basic_detail.postal_address,(select child_area_detail.area_name from child_area_detail where child_basic_detail.district=child_area_detail.area_id ) as dist
	   from child_area_detail left join child_basic_detail 
	   ON child_area_detail.area_id=child_basic_detail.district_id 
	   left join final_order ON child_basic_detail.child_id=final_order.child_id
	   where district != district_id AND final_ordered !='YES' 
	   AND child_area_detail.parent_id='IND010' and
	   STR_TO_DATE(idate_of_rescue,'%Y-%m-%d') 
	   BETWEEN  '".$from."' AND '".$to."' and child_area_detail.area_id='".$type."'";
	   	}
	   
	   	if($roles_id==2 || $roles_id==7 || $roles_id==5 || $roles_id==6 || $roles_id==8 || $roles_id==14 || $roles_id==16 || $roles_id==18 || $roles_id==19)
	   	{
	   	
	   		$query="  select child_basic_detail.child_id,
	   child_basic_detail.child_name,child_basic_detail.father_name,
	   child_basic_detail.postal_address,(select child_area_detail.area_name from child_area_detail where child_basic_detail.district=child_area_detail.area_id ) as dist
	   from child_area_detail left join child_basic_detail
	   ON child_area_detail.area_id=child_basic_detail.district_id
	   left join final_order ON child_basic_detail.child_id=final_order.child_id
	   where district != district_id AND final_ordered !='YES'
	   AND child_area_detail.parent_id='IND010' and
	   STR_TO_DATE(idate_of_rescue,'%Y-%m-%d')
	   BETWEEN  '".$from."' AND '".$to."' and child_area_detail.area_id='".$dist_id."'";
	   	}
	   	
	   	if($roles_id==13 || $roles_id==20 )//for DLC
	   	{
	   		
	   	$query="  select child_basic_detail.child_id, 
	   child_basic_detail.child_name,child_basic_detail.father_name,
	   child_basic_detail.postal_address,(select child_area_detail.area_name from child_area_detail where child_basic_detail.district=child_area_detail.area_id ) as dist
	   from child_area_detail left join child_basic_detail 
	   ON child_area_detail.area_id=child_basic_detail.district_id 
	   left join final_order ON child_basic_detail.child_id=final_order.child_id
	   where district != district_id AND final_ordered !='YES' 
	   AND child_area_detail.parent_id='IND010' and
	   STR_TO_DATE(idate_of_rescue,'%Y-%m-%d') 
	    BETWEEN  '".$from."' AND '".$to."' and child_area_detail.area_id='".$type."'";
	   		
	   		
	   		
	   	}
	   	
	   	
	   	 return $this->db->query($query)->result_array();
	   }
	   
	   /* child deatils */
	   function get_details_cwc_pending($from,$to,$type,$param1)
	   {
	   	$ses_ids=$this->session->userdata('login_user_id');
	   	$role=$this->get_role_id($ses_ids);
	   	foreach($role as $rolep):
	   	$roles_id=$rolep['account_role_id'];
	   	$dist_id=$rolep['district_id'];
	   	endforeach;
	   	$newdistrict= $this->db->query("select  division_id from division_details  where division_details.district_id='" . $dist_id ."' ")->result_array();
	   	foreach($newdistrict as $newdistricts):
	   	$division_id=$newdistricts['division_id'];
	   	endforeach;
	   	
	   	
	   	if($roles_id==10 || $roles_id==11  || $roles_id==12 || $roles_id==22)//for lC and Lc operator
	   	{
	   		//echo "select count(newchild) as count_child_id,area_id from (select y.area_id, y.area_name,x.child_id as newchild from child_area_detail as y left join (child_basic_detail as x left join final_order fo on x.child_id=fo.child_id and fo.final_ordered!='Yes') on x.district_id =y.area_id where y.parent_id ='IND010' and x.ls_activate='N' AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN '2014-04-01' AND '2017-10-18') Z group by area_name order by area_name" ;
	   		//echo "select count(newchild) as count_child_id,area_id from (select y.area_id, y.area_name,x.child_id as newchild from child_area_detail as y left join (child_basic_detail as x left join final_order fo on x.child_id=fo.child_id and fo.final_ordered!='Yes') on x.district_id =y.area_id where y.parent_id ='IND010' and x.ls_activate='N' AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN '2014-04-01' AND '2017-10-18') Z group by area_name order by area_name" ;	   		
	   		//$query="select count(newchild) as count_child_id,area_id from (select y.area_id, y.area_name,x.child_id as newchild from child_area_detail as y left join (child_basic_detail as x left join final_order fo on x.child_id=fo.child_id and fo.final_ordered!='Yes') on x.district_id =y.area_id where y.parent_id ='IND010' and x.ls_activate='N' AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name order by area_name";
	  
	   		$query="select * from child_basic_detail cbd left join final_order fo on cbd.child_id=fo.child_id and fo.final_ordered!='Yes' LEFT JOIN child_health_detail chd ON cbd.child_id = chd.child_id
LEFT JOIN child_reason_labour crl ON cbd.child_id = crl.child_id
LEFT JOIN child_social_history csh ON cbd.child_id = csh.child_id
LEFT JOIN child_educational_detail child_edu ON cbd.child_id = child_edu.child_id
LEFT JOIN child_family_economy child_economy ON cbd.child_id = child_economy.child_id
LEFT JOIN child_family_detail child_familydetails ON cbd.child_id = child_familydetails.child_id
LEFT JOIN child_employment_status child_emstatus ON cbd.child_id = child_emstatus.child_id
LEFT JOIN child_habit_detail child_habitdetails ON cbd.child_id = child_habitdetails.child_id
LEFT JOIN order_after_production oap ON cbd.child_id = oap.child_id
where cbd.ls_activate='Y' AND fo.final_ordered!='Yes' AND STR_TO_DATE(cbd.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' and cbd.district_id='" . $type."' " ;
	  
	   	}
	   	
	   	if($roles_id==2 || $roles_id==7 || $roles_id==5 || $roles_id==6 || $roles_id==8 || $roles_id==14 || $roles_id==16 || $roles_id==18 || $roles_id==19)
	   	{
	   		
	   		$query="select * from child_basic_detail cbd left join final_order fo on cbd.child_id=fo.child_id and fo.final_ordered!='Yes' LEFT JOIN child_health_detail chd ON cbd.child_id = chd.child_id
LEFT JOIN child_reason_labour crl ON cbd.child_id = crl.child_id
LEFT JOIN child_social_history csh ON cbd.child_id = csh.child_id
LEFT JOIN child_educational_detail child_edu ON cbd.child_id = child_edu.child_id
LEFT JOIN child_family_economy child_economy ON cbd.child_id = child_economy.child_id
LEFT JOIN child_family_detail child_familydetails ON cbd.child_id = child_familydetails.child_id
LEFT JOIN child_employment_status child_emstatus ON cbd.child_id = child_emstatus.child_id
LEFT JOIN child_habit_detail child_habitdetails ON cbd.child_id = child_habitdetails.child_id
LEFT JOIN order_after_production oap ON cbd.child_id = oap.child_id
where cbd.ls_activate='Y' AND fo.final_ordered!='Yes' AND STR_TO_DATE(cbd.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' and cbd.district_id='" . $type."'";
	   	}
	   	
	   	if($roles_id==13 || $roles_id==20 )//for DLC
	   	{
	   		$query="select * from child_basic_detail cbd left join final_order fo on cbd.child_id=fo.child_id and fo.final_ordered!='Yes' LEFT JOIN child_health_detail chd ON cbd.child_id = chd.child_id
LEFT JOIN child_reason_labour crl ON cbd.child_id = crl.child_id
LEFT JOIN child_social_history csh ON cbd.child_id = csh.child_id
LEFT JOIN child_educational_detail child_edu ON cbd.child_id = child_edu.child_id
LEFT JOIN child_family_economy child_economy ON cbd.child_id = child_economy.child_id
LEFT JOIN child_family_detail child_familydetails ON cbd.child_id = child_familydetails.child_id
LEFT JOIN child_employment_status child_emstatus ON cbd.child_id = child_emstatus.child_id
LEFT JOIN child_habit_detail child_habitdetails ON cbd.child_id = child_habitdetails.child_id
LEFT JOIN order_after_production oap ON cbd.child_id = oap.child_id
where cbd.ls_activate='Y' AND fo.final_ordered!='Yes' AND STR_TO_DATE(cbd.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' and cbd.district_id='" . $type."'";
	   		
	   		
	   		
	   	}
	   	
	   	
	   	return $this->db->query($query)->result_array();
	   }
	   
	   
   public function getChildDetailsforcwc($from,$to,$district_id)
   {   	
	   	$SQL = "select cbd.child_id,cbd.child_name,cbd.father_name from child_basic_detail cbd left join final_order fo on cbd.child_id=fo.child_id and fo.final_ordered!='Yes' LEFT JOIN child_health_detail chd ON cbd.child_id = chd.child_id
LEFT JOIN child_reason_labour crl ON cbd.child_id = crl.child_id
LEFT JOIN child_social_history csh ON cbd.child_id = csh.child_id
LEFT JOIN child_educational_detail child_edu ON cbd.child_id = child_edu.child_id
LEFT JOIN child_family_economy child_economy ON cbd.child_id = child_economy.child_id
LEFT JOIN child_family_detail child_familydetails ON cbd.child_id = child_familydetails.child_id
LEFT JOIN child_employment_status child_emstatus ON cbd.child_id = child_emstatus.child_id
LEFT JOIN child_habit_detail child_habitdetails ON cbd.child_id = child_habitdetails.child_id
where cbd.ls_activate='N' AND STR_TO_DATE(cbd.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' and cbd.district_id='" . $district_id."'  ";

	 	$query = $this->db->query($SQL);
	  	return $query->result_array();
	   	
	   }
	   
	   
	   function get_details_order_transfer_form($from,$to,$type,$area,$param1)
	   {
	   	$ses_ids=$this->session->userdata('login_user_id');
	   	$role=$this->get_role_id($ses_ids);
	   	foreach($role as $rolep):
	   	$roles_id=$rolep['account_role_id'];
	   	$dist_id=$rolep['district_id'];
	   	endforeach;
	   	$newdistrict= $this->db->query("select  division_id from division_details  where division_details.district_id='" . $dist_id ."' ")->result_array();
	   	foreach($newdistrict as $newdistricts):
	   	$division_id=$newdistricts['division_id'];
	   	endforeach;
	   	
	   	if($roles_id==10 || $roles_id==11  || $roles_id==12 || $roles_id==22)//for lC and Lc operator
	   	{
	   	$query="  select child_basic_detail.child_id,
	   child_basic_detail.child_name,child_basic_detail.father_name,
	   child_basic_detail.postal_address,(select child_area_detail.area_name from child_area_detail where child_basic_detail.district_id=child_area_detail.area_id ) as dist
	   from child_area_detail left join child_basic_detail
	   ON child_area_detail.area_id=child_basic_detail.district
	   left join final_order ON child_basic_detail.child_id=final_order.child_id
	   where district != district_id AND final_ordered !='YES'
	   AND child_area_detail.parent_id='IND010' and
	   STR_TO_DATE(idate_of_rescue,'%Y-%m-%d')
	   BETWEEN  '".$from."' AND '".$to."' and child_area_detail.area_id='".$type."'";
	  	}
	  	if($roles_id==2 || $roles_id==7 || $roles_id==5 || $roles_id==6 || $roles_id==8 || $roles_id==14 || $roles_id==16 || $roles_id==18 || $roles_id==19)
	  	{
	  		
	  		$query="  select child_basic_detail.child_id,
	   child_basic_detail.child_name,child_basic_detail.father_name,
	   child_basic_detail.postal_address,(select child_area_detail.area_name from child_area_detail where child_basic_detail.district_id=child_area_detail.area_id ) as dist
	   from child_area_detail left join child_basic_detail
	   ON child_area_detail.area_id=child_basic_detail.district
	   left join final_order ON child_basic_detail.child_id=final_order.child_id
	   where district != district_id AND final_ordered !='YES'
	   AND child_area_detail.parent_id='IND010' and
	   STR_TO_DATE(idate_of_rescue,'%Y-%m-%d')
	   BETWEEN  '".$from."' AND '".$to."' and child_area_detail.area_id='".$dist_id."'";	
	  	}
	  	if($roles_id==13 || $roles_id==20 )//for lC and Lc operator
	  	{
	  		$query="  select child_basic_detail.child_id,
	   child_basic_detail.child_name,child_basic_detail.father_name,
	   child_basic_detail.postal_address,(select child_area_detail.area_name from child_area_detail where child_basic_detail.district_id=child_area_detail.area_id ) as dist
	   from child_area_detail left join child_basic_detail
	   ON child_area_detail.area_id=child_basic_detail.district
	   left join final_order ON child_basic_detail.child_id=final_order.child_id
	   where district != district_id AND final_ordered !='YES'
	   AND child_area_detail.parent_id='IND010' and
	   STR_TO_DATE(idate_of_rescue,'%Y-%m-%d')
	   BETWEEN  '".$from."' AND '".$to."' and child_area_detail.area_id='".$type."'";
	  	}
	
	   	return $this->db->query($query)->result_array();
	   }
	   
	   function forward_cwc($from,$to,$type,$area,$param1)
	   {
	   	$ses_ids=$this->session->userdata('login_user_id');
	   	$role=$this->get_role_id($ses_ids);
	   	foreach($role as $rolep):
	   	$roles_id=$rolep['account_role_id'];
	   	$dist_id=$rolep['district_id'];
	   	endforeach;
	   	$newdistrict= $this->db->query("select  division_id from division_details  where division_details.district_id='" . $dist_id ."' ")->result_array();
	   	foreach($newdistrict as $newdistricts):
	   	$division_id=$newdistricts['division_id'];
	   	endforeach;
	   	if($roles_id==10 || $roles_id==11  || $roles_id==12 || $roles_id==22)//for lC and Lc operator
	   	{
	  $query="select child_basic_detail.child_id, child_basic_detail.child_name,child_basic_detail.father_name, 
	   child_basic_detail.postal_address,(select child_area_detail.area_name from child_area_detail where child_basic_detail.district=child_area_detail.area_id ) as dist from child_area_detail left join child_basic_detail ON 
	   child_area_detail.area_id=child_basic_detail.district_id left join final_order ON 
	   child_basic_detail.child_id=final_order.child_id where district != district_id AND
	   final_ordered !='YES' AND child_area_detail.parent_id='IND010' and  child_basic_detail.ls_activate='N' 
	   and STR_TO_DATE(idate_of_rescue,'%Y-%m-%d') 
	   BETWEEN  '".$from."' AND '".$to."' and child_area_detail.area_id='".$type."'";
	   	}
	   	if($roles_id==13 || $roles_id==20 )//for lC and Lc operator
	   	{
	   		$query="select child_basic_detail.child_id, child_basic_detail.child_name,child_basic_detail.father_name,
	   child_basic_detail.postal_address,(select child_area_detail.area_name from child_area_detail where child_basic_detail.district=child_area_detail.area_id ) as dist from child_area_detail left join child_basic_detail ON
	   child_area_detail.area_id=child_basic_detail.district_id left join final_order ON
	   child_basic_detail.child_id=final_order.child_id where district != district_id AND
	   final_ordered !='YES' AND child_area_detail.parent_id='IND010' and  child_basic_detail.ls_activate='N'
	   and STR_TO_DATE(idate_of_rescue,'%Y-%m-%d')
	   BETWEEN  '".$from."' AND '".$to."' and child_area_detail.area_id='".$type."'";
	   	}
	   	if($roles_id==2 || $roles_id==7 || $roles_id==5 || $roles_id==6 || $roles_id==8 || $roles_id==14 || $roles_id==16 || $roles_id==18 || $roles_id==19)
	   	{
	   		
	   		$query="select child_basic_detail.child_id, child_basic_detail.child_name,child_basic_detail.father_name,
	   child_basic_detail.postal_address,(select child_area_detail.area_name from child_area_detail where child_basic_detail.district=child_area_detail.area_id ) as dist from child_area_detail left join child_basic_detail ON
	   child_area_detail.area_id=child_basic_detail.district_id left join final_order ON
	   child_basic_detail.child_id=final_order.child_id where district != district_id AND
	   final_ordered !='YES' AND child_area_detail.parent_id='IND010' and  child_basic_detail.ls_activate='N'
	   and STR_TO_DATE(idate_of_rescue,'%Y-%m-%d')
	   BETWEEN  '".$from."' AND '".$to."' and child_area_detail.area_id='".$dist_id."'";
	   		
	   		
	   		
	   		
	   	}
	   	
	
	   	return $this->db->query($query)->result_array();
	   }
	   
	   
	   
	////////////////////////////////////////////////////////////////////////
	   public function	get_details_rescuedchild_district_details($from,$to,$area)
	   {
	   	$ses_ids=$this->session->userdata('login_user_id');
	   	$role=$this->get_role_id($ses_ids);
	   	foreach($role as $rolep):
	   	$roles_id=$rolep['account_role_id'];
	   	$dist_id=$rolep['district_id'];
	   	endforeach;
	   	
	   	if($roles_id==7||$roles_id==5||$roles_id==2|| $roles_id==6 || $roles_id==8 || $roles_id==14 || $roles_id==16 || $roles_id==18 || $roles_id==19)
	   	{
	   		
	   		$query1="SELECT staff.name as entered_by,child_basic_detail.child_name as child_name,child_basic_detail.child_id as child_id,child_basic_detail.father_name as father_name,child_basic_detail.sex as sex,
       child_basic_detail.postal_address as postal_address,child_basic_detail.year as year,child_basic_detail.dob as dob,
       (select child_area_detail.area_name from child_area_detail where child_basic_detail.block=child_area_detail.area_id ) as child_block,child_basic_detail.idate_of_rescue as date_of_rescue,
       (select child_area_detail.area_name from child_area_detail where child_basic_detail.district=child_area_detail.area_id ) as child_dist,
       (select child_area_detail.area_name from child_area_detail where child_basic_detail.district_id=child_area_detail.area_id ) as login_dist
       from child_area_detail
       join child_basic_detail ON child_area_detail.area_id=child_basic_detail.district_id
       join staff ON child_basic_detail.uid=staff.staff_id join account_role
       ON staff.account_role_id=account_role.account_role_id WHERE
	   STR_TO_DATE(idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."'
       AND child_area_detail.area_id='".$area."' and child_area_detail.area_id='".$dist_id."' ";
	   		
	   		
	   	}
	   	
	   	
	   	
	   	if($roles_id==10 || $roles_id==11  || $roles_id==12 || $roles_id==22)//for lC and Lc operator
	   	{
	   		
	  	$query1="SELECT staff.name as entered_by,child_basic_detail.child_name as child_name,child_basic_detail.child_id as child_id,child_basic_detail.father_name as father_name,child_basic_detail.sex as sex,
       child_basic_detail.postal_address as postal_address,child_basic_detail.year as year,child_basic_detail.dob as dob,
       (select child_area_detail.area_name from child_area_detail where child_basic_detail.block=child_area_detail.area_id ) as child_block,child_basic_detail.idate_of_rescue as date_of_rescue,
       (select child_area_detail.area_name from child_area_detail where child_basic_detail.district=child_area_detail.area_id ) as child_dist,
       (select child_area_detail.area_name from child_area_detail where child_basic_detail.district_id=child_area_detail.area_id ) as login_dist
       from child_area_detail 
       join child_basic_detail ON child_area_detail.area_id=child_basic_detail.district_id 
       join staff ON child_basic_detail.uid=staff.staff_id join account_role
       ON staff.account_role_id=account_role.account_role_id WHERE
	   STR_TO_DATE(idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."'
       AND child_area_detail.area_id='".$area."' ";
	  	
	   	}
	   	
	   	
	   	if($roles_id==13 || $roles_id==20 )//for DLC
	   	{
	   		$query1="SELECT staff.name as entered_by,child_basic_detail.child_name as child_name,child_basic_detail.child_id as child_id,child_basic_detail.father_name as father_name,child_basic_detail.sex as sex,
       child_basic_detail.postal_address as postal_address,child_basic_detail.year as year,child_basic_detail.dob as dob,
       (select child_area_detail.area_name from child_area_detail where child_basic_detail.block=child_area_detail.area_id ) as child_block,child_basic_detail.idate_of_rescue as date_of_rescue,
       (select child_area_detail.area_name from child_area_detail where child_basic_detail.district=child_area_detail.area_id ) as child_dist,
       (select child_area_detail.area_name from child_area_detail where child_basic_detail.district_id=child_area_detail.area_id ) as login_dist
       from child_area_detail
       join child_basic_detail ON child_area_detail.area_id=child_basic_detail.district_id
       join staff ON child_basic_detail.uid=staff.staff_id join account_role
       ON staff.account_role_id=account_role.account_role_id WHERE
	   STR_TO_DATE(idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."'
       AND child_area_detail.area_id='".$area."' ";
	   		
	   		
	   		
	   	}
	   	
	   	
	   	return $this->db->query($query1)->result_array();
	   	
	   	
	   }
	   
	   /* CWC working status */
	   
	   function get_cwc_work_status($from,$to,$dist)
	   {
	   	
	   	$this->load->model('dashboard_model');
	   	$ses_ids=$this->session->userdata('login_user_id');
	   	$role=$this->dashboard_model->get_role_id($ses_ids);
	   	foreach($role as $rolep):
	   	$roles_id=$rolep['account_role_id'];
	   	$dist_id=$rolep['district_id'];
	   	$stat_id=$rolep['state_id'];
	   	endforeach;
	   	 		   	
	   	$newdistrict= $this->db->query("select  division_id from division_details  where division_details.district_id='" . $dist_id ."' ")->result_array();

	   	foreach($newdistrict as $newdistricts):
	   	$division_id=$newdistricts['division_id'];
	   	endforeach;
	   	if($roles_id==10 || $roles_id==11 || $roles_id==21 || $roles_id==12 || $roles_id==22)
	   	
	   	{
	   		//echo "select area_name,area_id from child_area_detail where parent_id='IND010' group by area_name order by area_name" ; 
	   		$child_dist =$this->db->query("select area_name,area_id from child_area_detail where parent_id='IND010' group by area_name order by area_name")->result_array();			
	   		$cwc_name= $this->db->query("select staff.user_name as user_name,staff.district_id as district_id from staff left join child_area_detail ON child_area_detail.area_id=staff.district_id where name='CWC' GROUP BY child_area_detail.area_name")->result_array();
	   		$cwc_status_work = $this->db->query("select count(newchild) as count_child_id,area_id from (select y.area_id, y.area_name,x.child_id as newchild from child_area_detail as y left join (child_basic_detail as x left join final_order fo on x.child_id=fo.child_id and fo.final_ordered!='Yes') on x.district_id =y.area_id where y.parent_id ='IND010' and x.ls_activate='Y' AND fo.final_ordered!='Yes' AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name order by area_name")->result_array(); 
	   		
	  
	   	}
	   	
	   	
	   	
	   	if($roles_id==13 || $roles_id==20)
	   	
	   	{
	   		
	   		$child_dist =$this->db->query("select child_area_detail.area_name as area_name,child_area_detail.area_id as area_id from child_area_detail
			   where child_area_detail.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $division_id."') group by child_area_detail.area_name order by child_area_detail.area_name")->result_array();
	   		//print_r($child_dist);
	   		
	   		$cwc_name= $this->db->query("select staff.user_name as user_name,staff.district_id as district_id from staff left join child_area_detail ON child_area_detail.area_id=staff.district_id where name='CWC' GROUP BY child_area_detail.area_name")->result_array();
	   		
	   		$cwc_status_work = $this->db->query("select count(newchild) as count_child_id,area_id from (select y.area_id, y.area_name,x.child_id as newchild from child_area_detail as y left join (child_basic_detail as x left join final_order fo on x.child_id=fo.child_id and fo.final_ordered!='Yes') on x.district_id =y.area_id where y.parent_id ='IND010' and area_id='".$dist_id."' and x.ls_activate='Y' AND fo.final_ordered!='Yes' AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name order by area_name")->result_array();
	   	}
	   	
	   	if(($roles_id==2)||($roles_id==5)||($roles_id==6)||($roles_id==7)||($roles_id==8)||($roles_id==14)||($roles_id==16)||($roles_id==18)||($roles_id==19))	   	
	   	{	   		
	   		$child_dist =$this->db->query("select area_name,area_id from child_area_detail where parent_id='IND010'  and area_id='".$dist_id."' group by area_name order by area_name")->result_array();
	   		//print_r($child_dist);
	   		
	   		$cwc_name= $this->db->query("select staff.user_name as user_name,staff.district_id as district_id from staff left join child_area_detail ON child_area_detail.area_id=staff.district_id where name='CWC' GROUP BY child_area_detail.area_name")->result_array();
	   		
	   		$cwc_status_work = $this->db->query("select count(newchild) as count_child_id,area_id from (select y.area_id, y.area_name,x.child_id as newchild from child_area_detail as y left join (child_basic_detail as x left join final_order fo on x.child_id=fo.child_id and fo.final_ordered!='Yes') on x.district_id =y.area_id where y.parent_id ='IND010' and area_id='".$dist_id."' and x.ls_activate='Y' AND fo.final_ordered!='Yes' AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name order by area_name")->result_array();
	   		
	 	  	}
	   	
	   	$cumulative = array();
	   	for($i=0; $i<sizeof($child_dist); $i++){
	   		$cumulative[$i][0]=$child_dist[$i]['area_name'];
	   		$cumulative[$i][1]=0;
	   		$cumulative[$i][2]=0;
	   		$cumulative[$i][3]=0;
	   		$cumulative[$i][4]=0;
	   		
	   		
	   		
	   		
	   		if(sizeof($cwc_name)>0)
	   		{
	   			foreach($cwc_name as $row)
	   			{
	   				
	   				if($child_dist[$i]['area_id']==$row['district_id'])
	   				{
	   					
	   					$cumulative[$i][1]=$row['user_name'];
	   					break;
	   				}
	   				else{
	   					$cumulative[$i][1]=0;
	   				}
	   			}
	   			
	   		}
	   		
	   		if(sizeof($cwc_status_work)>0)
	   		{
	   			foreach($cwc_status_work as $row)
	   			{
	   				if($child_dist[$i]['area_id']==$row['area_id'])
	   				{
	   					$cumulative[$i][2]=$row['count_child_id'];
	   					$cumulative[$i][3]=$row['area_id'];
	   					
	   					break;
	   				}
	   				else{
	   					$cumulative[$i][2]=0;
	   				}
	   			}
	   			
	   		}
	   		
	   		
	   		//$cumulative[$i][5]=$cumulative[$i][1]+$cumulative[$i][2]+$cumulative[$i][3]+$cumulative[$i][4];
	   		$tot1+=$cumulative[$i][1];
	   		$tot2+=$cumulative[$i][2];
	   		$tot3+=$cumulative[$i][3];
	   		$tot4+=$cumulative[$i][4];
	   		$tot5+=$cumulative[$i][5];
	   		
	   		
	   	}
	   	
	   	if( $roles_id==10 || $roles_id==11 || $roles_id==21 || $roles_id==12 || $roles_id==13 || $roles_id==20 || $roles_id==22){
	   		$cumulative[sizeof($child_dist)][0]="<strong>Total</strong>";
	   		$cumulative[sizeof($child_dist)][1]="<strong><strong>";
	   		$cumulative[sizeof($child_dist)][2]="<strong>".$tot2."<strong>";
	   		$cumulative[sizeof($child_dist)][3]="<strong>".$tot3."<strong>";
	   		$cumulative[sizeof($child_dist)][4]="<strong>".$tot4."<strong>";
	   		$cumulative[sizeof($child_dist)][5]="<strong>".$tot5."<strong>";
	   		
	   	}
	   	
	   	
	   	//echo $cumulative;
	   	return $cumulative ;
	   	
	   } 
	   function state_transfer_status($from,$to,$dist)
	   {
	   	
	   	$this->load->model('dashboard_model');
	   	$ses_ids=$this->session->userdata('login_user_id');
	   	$role=$this->dashboard_model->get_role_id($ses_ids);
	   	foreach($role as $rolep):
	   	$roles_id=$rolep['account_role_id'];
	   	$dist_id=$rolep['district_id'];
	   	$stat_id=$rolep['state_id'];
	   	endforeach;
	   	
	   	$newdistrict= $this->db->query("select  division_id from division_details  where division_details.district_id='" . $dist_id ."' ")->result_array();
	   	//$from='2014-04-01';
	   	//$to='2017-05-26';
	   	//echo $roles_id;
	   	foreach($newdistrict as $newdistricts):
	   	$division_id=$newdistricts['division_id'];
	   	endforeach;
	   	
	  
	   		
	   		$child_dist =$this->db->query("select area_name,area_id from child_area_detail where area_id ='IND010' group by area_name order by area_name")->result_array();
	   		$child_need_transfer_to =$this->db->query(" select area_id,SUM(CASE WHEN child_basic_detail.state!='IND010' THEN 1 ELSE 0 END) count_id 
from child_area_detail left join
child_basic_detail ON child_area_detail.area_id=child_basic_detail.state_id
 left join final_order ON child_basic_detail.child_id=final_order.child_id
 where final_ordered !='YES' and
 STR_TO_DATE(idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."'
 GROUP BY child_area_detail.area_name")->result_array();
	   		$child_transfer_to= $this->db->query(" select area_id,SUM(CASE WHEN child_basic_detail.state!='IND010' THEN 1 ELSE 0 END) count_id 
from child_area_detail left join
child_basic_detail ON child_area_detail.area_id=child_basic_detail.state_id
 left join final_order ON child_basic_detail.child_id=final_order.child_id
 where final_ordered ='YES' and
 STR_TO_DATE(idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."'
 GROUP BY child_area_detail.area_name")->result_array();
	   		
	   		
	   		$child_dist_id =$this->db->query("select area_id from child_area_detail where area_id='IND010' group by area_name order by area_id")->result_array();
	   		//print_r($child_forwaded_cwc);
	   
	   
	   	$cumulative = array();
	   	for($i=0; $i<sizeof($child_dist); $i++){
	   		$cumulative[$i][0]=$child_dist[$i]['area_name'];
	   		$cumulative[$i][1]=0;
	   		$cumulative[$i][2]=0;
	   		$cumulative[$i][3]=0;
	   		$cumulative[$i][4]=0;
	   		
	   		
	   		
	   		
	   		if(sizeof($child_need_transfer_to)>0)
	   		{
	   			foreach($child_need_transfer_to as $row)
	   			{
	   				
	   				if($child_dist[$i]['area_id']==$row['area_id'])
	   				{
	   					
	   					$cumulative[$i][1]=$row['count_id'];
	   					break;
	   				}
	   				else{
	   					$cumulative[$i][1]=0;
	   				}
	   			}
	   			
	   		}
	   		
	   		if(sizeof($child_transfer_to)>0)
	   		{
	   			foreach($child_transfer_to as $row)
	   			{
	   				if($child_dist[$i]['area_id']==$row['area_id'])
	   				{
	   					$cumulative[$i][2]=$row['count_id'];
	   					break;
	   				}
	   				else{
	   					$cumulative[$i][2]=0;
	   				}
	   			}
	   			
	   		}
	   		
	   		if(sizeof($child_dist_id)>0)
	   		{
	   			foreach($child_dist_id as $row)
	   			{
	   				
	   				if($child_dist[$i]['area_id']==$row['area_id'])
	   				{
	   					$cumulative[$i][4]=$row['area_id'];
	   					break;
	   				}
	   				else{
	   					$cumulative[$i][4]=0;
	   				}
	   			}
	   			
	   		}
	   		
	   		
	   		
	   		
	   		
	   		//$cumulative[$i][5]=$cumulative[$i][1]+$cumulative[$i][2]+$cumulative[$i][3]+$cumulative[$i][4];
	   		$tot1+=$cumulative[$i][1];
	   		$tot2+=$cumulative[$i][2];
	   		$tot3+=$cumulative[$i][3];
	   		$tot4+=$cumulative[$i][4];
	   		$tot5+=$cumulative[$i][5];
	   		
	   		
	   	}
	   	
	 
	   	//echo $cumulative;
	   	return $cumulative ;
	   	
	   }   
	   
	
//deatils of inside state need to
	   function get_details_state_transfer($from,$to,$type,$param1)
	   {
	   	$ses_ids=$this->session->userdata('login_user_id');
	   	$role=$this->get_role_id($ses_ids);
	   	foreach($role as $rolep):
	   	$roles_id=$rolep['account_role_id'];
	   	$dist_id=$rolep['district_id'];
	   	endforeach;
	   	$newdistrict= $this->db->query("select  division_id from division_details  where division_details.district_id='" . $dist_id ."' ")->result_array();
	   	foreach($newdistrict as $newdistricts):
	   	$division_id=$newdistricts['division_id'];
	   	endforeach;
	   	
	   	
	   	if($roles_id==10 || $roles_id==11  || $roles_id==12 || $roles_id==22)//for lC and Lc operator
	   	{
	   		$query="  SELECT * FROM child_basic_detail
           left join final_order ON child_basic_detail.child_id=final_order.child_id
          where  child_basic_detail.state!='IND010' and final_ordered !='YES'  and
	       STR_TO_DATE(idate_of_rescue,'%Y-%m-%d')
	       BETWEEN  '".$from."' AND '".$to."'";
	   	}
	
	   	return $this->db->query($query)->result_array();
	   }
	   
	   //deatils of inside state sent
	   function get_details_state_transfer_sent($from,$to,$type,$param1)
	   {
	   	$ses_ids=$this->session->userdata('login_user_id');
	   	$role=$this->get_role_id($ses_ids);
	   	foreach($role as $rolep):
	   	$roles_id=$rolep['account_role_id'];
	   	$dist_id=$rolep['district_id'];
	   	endforeach;
	   	$newdistrict= $this->db->query("select  division_id from division_details  where division_details.district_id='" . $dist_id ."' ")->result_array();
	   	foreach($newdistrict as $newdistricts):
	   	$division_id=$newdistricts['division_id'];
	   	endforeach;
	   	
	   	
	   	if($roles_id==10 || $roles_id==11  || $roles_id==12 || $roles_id==22)//for lC and Lc operator
	   	{
	   		$query="  SELECT * FROM child_basic_detail
           left join final_order ON child_basic_detail.child_id=final_order.child_id
          where  child_basic_detail.state!='IND010' and final_ordered ='YES'  and
	       STR_TO_DATE(idate_of_rescue,'%Y-%m-%d')
	       BETWEEN  '".$from."' AND '".$to."'";
	   	}
	   	
	   	return $this->db->query($query)->result_array();
	   }
	   
	   
	   public function get_outsidechild_detail($param1="",$staff_id="")
	   {	   	
	   	
	  	if($staff_id==40){
	   		$query="select * from rescued_outsidestate_child where notice_msg='1' and lc_bihar='1' " ;
	   	}else if($staff_id==426){
	   		$query="select * from rescued_outsidestate_child where notice_msg='1' and lc_operator='1' " ;	   		
	   	}else if($staff_id==39){
	   		$query="select * from rescued_outsidestate_child where notice_msg='1' and scps='1' " ;
	   		
	   	}
	   	return $this->db->query($query)->result_array();
	   	
	   /*	
	   	$query="select * from rescued_outsidestate_child where notice_msg='1'" ;
	   	return $this->db->query($query)->result_array(); */
	   	
	   }
	   
	   public function get_outsideindivisual_detail($param1="",$role_staff_id="")
	   {
	   	$to =date('Y-m-d');
	   	
	   
	  	
	  	if($role_staff_id==40){
	   	$res=mysql_query("update  rescued_outsidestate_child set notice_msg='1',lc_bihar = '1',popup_view_date='$to' where id='$param1'") ;
	   	}else if($role_staff_id==426){
	   		$res=mysql_query("update  rescued_outsidestate_child set notice_msg='1',lc_operator = '1',popup_view_date='$to' where id='$param1'") ;
	   	}else if($role_staff_id==39){
	   		$res=mysql_query("update  rescued_outsidestate_child set notice_msg='1',scps = '1',popup_view_date='$to' where id='$param1'") ;	
	   	}else{
	   		$res=mysql_query("update  rescued_outsidestate_child set notice_msg='1',lc_bihar = '1',popup_view_date='$to' where id='$param1'") ;
	   		
	   	} 
	   	
	   	$query="select * from rescued_outsidestate_child where id='$param1'" ;
	   	
	   	
	   	/*
	   	$to =date('Y-m-d');
	   	$res=mysql_query("update  rescued_outsidestate_child set notice_msg='1',popup_view_date='$to' where id='$param1'") ;
	   	$query="select * from rescued_outsidestate_child where id='$param1'" ;*/
	   	return $this->db->query($query)->result_array(); 
	   	
	   }
	   

        }
