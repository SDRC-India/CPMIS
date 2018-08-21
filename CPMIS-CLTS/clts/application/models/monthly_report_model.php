
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<?php
class Monthly_report_model extends CI_Model {
  function __construct()
  {
      parent::__construct();
      $this->load->database();

  }
//get report data aggregated format
  public function get_report_data($from_date, $todate)
      {
        
        ////$todate =date('Y-m-d');//today's date
        //$from_date=date('Y-m-d', strtotime(date('Y-m-d')." -1 month"));//one month past date
        //don't touch the code below
		      /*$quer="select child_id,child_name,idate_of_rescue from child_basic_detail where 
		          STR_TO_DATE(idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from_date."' AND '".$todate."' ";*/

		     /* $quer1="select child_basic_detail.child_id,child_name,idate_of_rescue,final_order.final_order_date as final_order_date from child_basic_detail
		      join final_order on child_basic_detail.child_id=final_order.child_id
		       where STR_TO_DATE(final_order.final_order_date,'%Y-%m-%d') BETWEEN  '".$from_date."' AND '".$todate."' ";*/
       //don't touch the code above
		$quer1="select count(child_id) as count from child_basic_detail where 
          	STR_TO_DATE(idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from_date."' AND '".$todate."' "; 

   		$quer2="select count(child_basic_detail.child_id) as count from child_basic_detail
		      join final_order on child_basic_detail.child_id=final_order.child_id
		       where STR_TO_DATE(final_order.final_order_date,'%Y-%m-%d') BETWEEN  '".$from_date."' AND '".$todate."' ";

          
        $quer3="select count(child_basic_detail.child_id) as count from child_basic_detail
		      join final_order on child_basic_detail.child_id=final_order.child_id
		       where DATEDIFF(STR_TO_DATE( final_order.final_order_date,'%Y-%m-%d'),STR_TO_DATE( child_basic_detail.idate_of_rescue,'%Y-%m-%d')) > 21 AND STR_TO_DATE(final_order.final_order_date,'%Y-%m-%d') BETWEEN  '".$from_date."' AND '".$todate."' ";

		$quer4="select count(child_basic_detail.child_id) as count from child_basic_detail
		      join final_order on child_basic_detail.child_id=final_order.child_id
		       where DATEDIFF(STR_TO_DATE( final_order.final_order_date,'%Y-%m-%d'),STR_TO_DATE( child_basic_detail.idate_of_rescue,'%Y-%m-%d')) < 14 AND STR_TO_DATE(final_order.final_order_date,'%Y-%m-%d') BETWEEN  '".$from_date."' AND '".$todate."' ";

        $quer5="select count(child_basic_detail.child_id) as count from child_basic_detail
			      join final_order on child_basic_detail.child_id=final_order.child_id
			       where  DATEDIFF(STR_TO_DATE( final_order.final_order_date,'%Y-%m-%d'),STR_TO_DATE( child_basic_detail.idate_of_rescue,'%Y-%m-%d'))>14 AND DATEDIFF(STR_TO_DATE( final_order.final_order_date,'%Y-%m-%d'),STR_TO_DATE( child_basic_detail.idate_of_rescue,'%Y-%m-%d')) < 21 AND STR_TO_DATE(final_order.final_order_date,'%Y-%m-%d') BETWEEN  '".$from_date."' AND '".$todate."' ";
			      
		$rescued=$this->db->query($quer1)->result_array();
		
		$card=$this->db->query($quer2)->result_array();	
		

		//$percent=($rescued-$card/$rescued) * 100;
		//print_r($percent);
		$ldata21=$this->db->query($quer3)->result_array();
		
		$data14=$this->db->query($quer4)->result_array();
		$data21=$this->db->query($quer5)->result_array();	
		//print_r()
	  $report_data["rescued"]=$rescued[0]['count'];
	  $report_data["card"]=$card[0]['count'];
      $report_data["data14"]=$data14[0]['count'];
	  $report_data["ldata21"]=$ldata21[0]['count'];
	  $report_data["data21"]=$data21[0]['count'];
      $retVal= $report_data;     
       
        return $retVal;
      }
	  public function filter_get_report_data($dist,$from,$to)
	  {
		  
		  $todate =$to;
         $from_date=$from;
		
        //don't touch the code below
		      /*$quer_test="select child_id,child_name,idate_of_rescue from child_basic_detail where 
		          AND STR_TO_DATE(idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from_date."' AND '".$todate."' ";
				//print_r($this->db->query($quer_test)->result_array());
		
		     /* $quer1="select child_basic_detail.child_id,child_name,idate_of_rescue,final_order.final_order_date as final_order_date from child_basic_detail
		      join final_order on child_basic_detail.child_id=final_order.child_id
		       where STR_TO_DATE(final_order.final_order_date,'%Y-%m-%d') BETWEEN  '".$from_date."' AND '".$todate."' ";*/
			   
       //don't touch the code above
		$quer1="select count(child_id) as count from child_basic_detail where  child_basic_detail.district_id='".$dist."' AND 
          	STR_TO_DATE(idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from_date."' AND '".$todate."' "; 

   		$quer2="select count(child_basic_detail.child_id) as count from child_basic_detail
		      join final_order on child_basic_detail.child_id=final_order.child_id
		       where child_basic_detail.district_id='".$dist."' AND STR_TO_DATE(final_order.final_order_date,'%Y-%m-%d') BETWEEN  '".$from_date."' AND '".$todate."' ";

          
        $quer3="select count(child_basic_detail.child_id) as count from child_basic_detail
		      join final_order on child_basic_detail.child_id=final_order.child_id
		       where child_basic_detail.district_id='".$dist."'  AND DATEDIFF(STR_TO_DATE( final_order.final_order_date,'%Y-%m-%d'),STR_TO_DATE( child_basic_detail.idate_of_rescue,'%Y-%m-%d')) > 21 AND STR_TO_DATE(final_order.final_order_date,'%Y-%m-%d') BETWEEN  '".$from_date."' AND '".$todate."' ";

		$quer4="select count(child_basic_detail.child_id) as count from child_basic_detail
		      join final_order on child_basic_detail.child_id=final_order.child_id
		       where child_basic_detail.district_id='".$dist."' AND  DATEDIFF(STR_TO_DATE( final_order.final_order_date,'%Y-%m-%d'),STR_TO_DATE( child_basic_detail.idate_of_rescue,'%Y-%m-%d')) < 14 AND STR_TO_DATE(final_order.final_order_date,'%Y-%m-%d') BETWEEN  '".$from_date."' AND '".$todate."' ";

        $quer5="select count(child_basic_detail.child_id) as count from child_basic_detail
			      join final_order on child_basic_detail.child_id=final_order.child_id
			       where child_basic_detail.district_id='".$dist."' AND  DATEDIFF(STR_TO_DATE( final_order.final_order_date,'%Y-%m-%d'),STR_TO_DATE( child_basic_detail.idate_of_rescue,'%Y-%m-%d'))>14 AND DATEDIFF(STR_TO_DATE( final_order.final_order_date,'%Y-%m-%d'),STR_TO_DATE( child_basic_detail.idate_of_rescue,'%Y-%m-%d')) < 21 AND STR_TO_DATE(final_order.final_order_date,'%Y-%m-%d') BETWEEN  '".$from_date."' AND '".$todate."' ";
			      
		$rescued=$this->db->query($quer1)->result_array();
		
		$card=$this->db->query($quer2)->result_array();	
		

		//$percent=($rescued-$card/$rescued) * 100;
		//print_r($percent);
		$ldata21=$this->db->query($quer3)->result_array();
		
		$data14=$this->db->query($quer4)->result_array();
		$data21=$this->db->query($quer5)->result_array();	
		//print_r()
	  $report_data["rescued"]=$rescued[0]['count'];
	  $report_data["card"]=$card[0]['count'];
      $report_data["data14"]=$data14[0]['count'];
	  $report_data["ldata21"]=$ldata21[0]['count'];
	  $report_data["data21"]=$data21[0]['count'];
      $retVal= $report_data;     
       
       
        return $retVal; 
		  
	  }
	  // children investigation report data
		public function get_investigation_report_data($from,$to)
		{
			 
		
		$quer1="select count(child_id) as count from child_basic_detail where 
          	STR_TO_DATE(idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' "; 

   		$quer2="select count(child_basic_detail.child_id) as count from child_basic_detail
		      join final_order on child_basic_detail.child_id=final_order.child_id
		       where  STR_TO_DATE(final_order.final_order_date,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' ";

          
        $quer3="select count(child_basic_detail.child_id) as count from child_basic_detail
		      join final_order on child_basic_detail.child_id=final_order.child_id
		       where   DATEDIFF(STR_TO_DATE( final_order.final_order_date,'%Y-%m-%d'),child_basic_detail.date_of_production_cwc) > 21 AND STR_TO_DATE(final_order.final_order_date,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' ";

		$quer4="select count(child_basic_detail.child_id) as count from child_basic_detail
		      join final_order on child_basic_detail.child_id=final_order.child_id
		       where  DATEDIFF(STR_TO_DATE( final_order.final_order_date,'%Y-%m-%d'),child_basic_detail.date_of_production_cwc) <= 14 AND STR_TO_DATE(final_order.final_order_date,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' ";

        $quer5="select count(child_basic_detail.child_id) as count from child_basic_detail
			      join final_order on child_basic_detail.child_id=final_order.child_id
			       where   DATEDIFF(STR_TO_DATE( final_order.final_order_date,'%Y-%m-%d'),child_basic_detail.date_of_production_cwc)>14 AND DATEDIFF(STR_TO_DATE( final_order.final_order_date,'%Y-%m-%d'),child_basic_detail.date_of_production_cwc) <=21 AND STR_TO_DATE(final_order.final_order_date,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' ";
			      
		 $rescued=$this->db->query($quer1)->result_array();
		
		$card=$this->db->query($quer2)->result_array();	
		
		$ldata21=$this->db->query($quer3)->result_array();
		
		$data14=$this->db->query($quer4)->result_array();
		$data21=$this->db->query($quer5)->result_array();	
		//print_r()
	  $report_data["rescued"]=$rescued[0]['count'];
	  $report_data["card"]=$card[0]['count'];
      $report_data["data14"]=$data14[0]['count'];
	  $report_data["ldata21"]=$ldata21[0]['count'];
	  $report_data["data21"]=$data21[0]['count'];
	  
      $retVal= $report_data;     
			return $retVal;
			
		}
		public function get_investigation_report_flter_data($dist,$from,$to)
		{
			 //echo $dist;
		
		$quer1="select count(child_id) as count from child_basic_detail where  child_basic_detail.district_id='".$dist."' AND 
          	STR_TO_DATE(idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' "; 

   		$quer2="select count(child_basic_detail.child_id) as count from child_basic_detail
		      join final_order on child_basic_detail.child_id=final_order.child_id
		       where child_basic_detail.district_id='".$dist."' AND STR_TO_DATE(final_order.final_order_date,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' ";

          
        $quer3="select count(child_basic_detail.child_id) as count from child_basic_detail
		      join final_order on child_basic_detail.child_id=final_order.child_id
		       where child_basic_detail.district_id='".$dist."'  AND DATEDIFF(STR_TO_DATE( final_order.final_order_date,'%Y-%m-%d'),child_basic_detail.date_of_production_cwc) > 21 AND STR_TO_DATE(final_order.final_order_date,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' ";

		$quer4="select count(child_basic_detail.child_id) as count from child_basic_detail
		      join final_order on child_basic_detail.child_id=final_order.child_id
		       where child_basic_detail.district_id='".$dist."' AND  DATEDIFF(STR_TO_DATE( final_order.final_order_date,'%Y-%m-%d'),child_basic_detail.date_of_production_cwc) < 14 AND STR_TO_DATE(final_order.final_order_date,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' ";

        $quer5="select count(child_basic_detail.child_id) as count from child_basic_detail
			      join final_order on child_basic_detail.child_id=final_order.child_id
			       where child_basic_detail.district_id='".$dist."' AND  DATEDIFF(STR_TO_DATE( final_order.final_order_date,'%Y-%m-%d'),child_basic_detail.date_of_production_cwc)>14 AND DATEDIFF(STR_TO_DATE( final_order.final_order_date,'%Y-%m-%d'),child_basic_detail.date_of_production_cwc) < 21 AND STR_TO_DATE(final_order.final_order_date,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' ";
			      
		 $rescued=$this->db->query($quer1)->result_array();
		
		$card=$this->db->query($quer2)->result_array();	
		
		$ldata21=$this->db->query($quer3)->result_array();
		
		$data14=$this->db->query($quer4)->result_array();
		$data21=$this->db->query($quer5)->result_array();	
		//print_r()
	  $report_data["rescued"]=$rescued[0]['count'];
	  $report_data["card"]=$card[0]['count'];
      $report_data["data14"]=$data14[0]['count'];
	  $report_data["ldata21"]=$ldata21[0]['count'];
	  $report_data["data21"]=$data21[0]['count'];
	  
      $retVal= $report_data;     
			return $retVal;
			
		}
		public function get_inside_report_data($from,$to)
		{
			
			$quer1="select count(child_id) as count from child_basic_detail where 
          	STR_TO_DATE(idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' "; 

   		$quer2="select count(child_id) as count from child_basic_detail where basic_place_of_rescue='Within'
          	AND STR_TO_DATE(idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' "; 
			$rescued=$this->db->query($quer1)->result_array();
		
		$card=$this->db->query($quer2)->result_array();	
	$report_data["rescued"]=$rescued[0]['count'];
	  $report_data["card"]=$card[0]['count'];
   		$retVal= $report_data;     
			return $retVal;
		}
		public function get_inside_report_filter_data($dist,$from,$to)
		{
			
			$quer1="select count(child_id) as count from child_basic_detail where  district_id='".$dist."' AND
          	STR_TO_DATE(idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' "; 

   		$quer2="select count(child_id) as count from child_basic_detail where basic_place_of_rescue='Within' AND
          	district_id='".$dist."' AND STR_TO_DATE(idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' "; 
			$rescued=$this->db->query($quer1)->result_array();
		
		$card=$this->db->query($quer2)->result_array();	
	$report_data["rescued"]=$rescued[0]['count'];
	  $report_data["card"]=$card[0]['count'];
   		$retVal= $report_data;     
			return $retVal;
		}
		public function get_outside_report_data($from,$to)
		{
			
			$quer1="select count(child_id) as count from child_basic_detail where 
          	STR_TO_DATE(idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' "; 

   		$quer2="select count(child_id) as count from child_basic_detail where basic_place_of_rescue='Outside State'
          	AND STR_TO_DATE(idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' "; 
			$rescued=$this->db->query($quer1)->result_array();
		
		$card=$this->db->query($quer2)->result_array();	
	$report_data["rescued"]=$rescued[0]['count'];
	  $report_data["card"]=$card[0]['count'];
   		$retVal= $report_data;     
			return $retVal;
		}
		public function get_outside_report_filter_data($dist,$from,$to)
		{
			
			$quer1="select count(child_id) as count from child_basic_detail where  district_id='".$dist."' AND
          	STR_TO_DATE(idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' "; 

   		$quer2="select count(child_id) as count from child_basic_detail where basic_place_of_rescue='Outside State' AND
          	district_id='".$dist."' AND STR_TO_DATE(idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' "; 
			$rescued=$this->db->query($quer1)->result_array();
		
		$card=$this->db->query($quer2)->result_array();	
	$report_data["rescued"]=$rescued[0]['count'];
	  $report_data["card"]=$card[0]['count'];
   		$retVal= $report_data;     
			return $retVal;
		}
	  public function report_details($from,$to,$dist="")
	  {
		    //echo $dist;
		  if($dist)
		  {
			  $quer1="select child_basic_detail.child_id,child_name,idate_of_rescue,final_order.final_order_date as final_order_date from child_basic_detail
		      join final_order on child_basic_detail.child_id=final_order.child_id
		       where child_basic_detail.district_id='".$dist."' AND STR_TO_DATE(final_order.final_order_date,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' "; 
		
		  }
		  else{
		 $quer1="select child_basic_detail.child_id,child_name,idate_of_rescue,final_order.final_order_date as final_order_date from child_basic_detail
		      join final_order on child_basic_detail.child_id=final_order.child_id
		       where STR_TO_DATE(final_order.final_order_date,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' "; 
		  }
			   
		 return $this->db->query($quer1)->result_array();
		 
		  
	  }
	  
	  public function report_details_investigation($from,$to,$dist="")
	  {
		    //echo $dist;
		  if($dist)
		  {
			  $quer1="select child_basic_detail.child_id,child_name,date_of_production_cwc,final_order.final_order_date as final_order_date from child_basic_detail
		      join final_order on child_basic_detail.child_id=final_order.child_id
		       where child_basic_detail.district_id='".$dist."' AND STR_TO_DATE(final_order.final_order_date,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' "; 
		
		  }
		  else{
		 $quer1="select child_basic_detail.child_id,child_name,date_of_production_cwc,final_order.final_order_date as final_order_date from child_basic_detail
		      join final_order on child_basic_detail.child_id=final_order.child_id
		       where STR_TO_DATE(final_order.final_order_date,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' "; 
		  }
			   
		 return $this->db->query($quer1)->result_array();
		 
		  
	  }
	  //report_details_inside
	   public function report_details_inside($from,$to,$dist="")
	  {
		    //echo $dist;
		  if($dist)
		  {
			  $quer1="select child_basic_detail.child_id,child_name,idate_of_rescue,father_name,postal_address from child_basic_detail
		          WHERE   basic_place_of_rescue='Within' AND district_id='".$dist."' AND
		      STR_TO_DATE(idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' "; 
		  }
		  else{
		 $quer1="select child_basic_detail.child_id,child_name,idate_of_rescue,father_name,postal_address from child_basic_detail
		       WHERE basic_place_of_rescue='Within' AND STR_TO_DATE(idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' "; 
			   
		 return $this->db->query($quer1)->result_array();
		 
		  
	  }
	  }
	  public function report_details_outside($from,$to,$dist="")
	  {
		    //echo $dist;
		  if($dist)
		  {
			  $quer1="select child_basic_detail.child_id,child_name,idate_of_rescue,father_name,postal_address from child_basic_detail
		           WHERE basic_place_of_rescue='Outside State' AND district_id='".$dist."' AND
		       STR_TO_DATE(idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' "; 
		  }
		  else{
		 $quer1="select child_basic_detail.child_id,child_name,idate_of_rescue,father_name,postal_address from child_basic_detail
		       WHERE basic_place_of_rescue='Outside State' AND  STR_TO_DATE(idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' "; 
			   
		 return $this->db->query($quer1)->result_array();
		 
		  
	  }
	  }
 public function get_districts_list($state_id)
      {
    return $this->db->select('*')->where('parent_id',$state_id)->order_by('area_name', 'asc')->group_by('area_name')->get('child_area_detail')->result_array();
      }
      function get_role_id($role_id)
      {
        $role = $this->db->get_where('staff',array('staff_id'=>$role_id))->result_array();
        return $role;
      }
  }