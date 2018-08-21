<?php
include('db.php');
$IUSNId=$_GET['IUSNId'];
$areaId=$_GET['areaId'];
$sourceNid=$_GET['sourceNid'];
$timeperiodId=$_GET['timeperiodId'];
$arr=array();
$sql="SELECT ut_data.Data_Value as value,IC_Name as source, ut_timeperiod.TimePeriod_NId as timeperiod,ut_timeperiod.TimePeriod as date FROM ut_data
       LEFT JOIN ut_area_en ON ut_area_en.Area_NId=ut_data.Area_NId
       LEFT JOIN ut_timeperiod ON ut_timeperiod.timeperiod_NId=ut_data.timePeriod_NId
	   LEFT JOIN ut_indicator_classifications_en ON ut_indicator_classifications_en.IC_NId=ut_data.Source_NId
       WHERE ut_area_en.Area_ID='".$areaId."' AND ut_data.IUSNId='".$IUSNId."' AND ut_indicator_classifications_en.IC_NId='".$sourceNid."' ORDER BY ut_timeperiod.timeperiod_NId " ;
	$stmt = $con->prepare($sql);
	$stmt->execute();
	//print_r($stmt);
	while($row = $stmt->fetch(PDO::FETCH_ASSOC))
	{
		//print_r($row);
		array_push($arr,$row);
		
	}
	$ispositive=false;
	$ispositive_value="";
	$sql1="SELECT ut_indicator_en.HighIsGood as HighIsGood FROM ut_indicator_unit_subgroup
       LEFT JOIN ut_indicator_en ON ut_indicator_en.Indicator_NId=ut_indicator_unit_subgroup.Indicator_NId
       WHERE ut_indicator_unit_subgroup.IUSNId='".$IUSNId."' ";
	  $stmt1 = $con->prepare($sql1);
	$stmt1->execute();
	//print_r($stmt);
	
	while($row = $stmt1->fetch(PDO::FETCH_ASSOC))
	{
		//print_r($row);
		$ispositive_value=$row['HighIsGood'];
		
	} 
	if($ispositive_value==0)
	{
	$ispositive=true;
	}
	
	//echo json_encode($arr);
	$arr_final=array();
	///echo $arr[sizeof($arr)-1]['value'];
	//echo $arr[sizeof($arr)-2]['value'];
	//echo ($arr[sizeof($arr)-1]['value']-$arr[sizeof($arr)-2]['value'])/$arr[sizeof($arr)-2]['value'];
	if($arr[sizeof($arr)-1]['value']>1)
	{
	$percentChng=(($arr[sizeof($arr)-1]['value']-$arr[sizeof($arr)-2]['value'])/$arr[sizeof($arr)-1]['value'])*100;
	}
	else{
		$percentChng=0;
	}
    for($i=0; $i<sizeof($arr); $i++)
	{
		/*if($i>0)
		{
		$prev=$arr[$i-1]['value'];
		}
		else{
		$prev=0;	
			
		}
		$curr=$arr[$i]['value'];
		if($curr!=0)
		{
		$percentChng=(($curr-$prev)/$curr)*100;
		}
		else{
			
		$percentChng=-$prev;	
		}
		*/
		
		//print_r($arr[$i]);
		
		//print_r($percentChng);
		$percentChng=round($percentChng, 2);
		
		$arr[$i]["percentageChange"]=$percentChng;
		if($ispositive==true && $percentChng>0)
		{
		 $arr[$i]["isPositive"]=$ispositive;
		}
		else{
			
		$arr[$i]["isPositive"]=false;	
		}
		if($i>0)
		{
		if($arr[$i]['timeperiod']==$timeperiodId)
		  {
			  
			 array_push($arr_final,array($arr[$i-1],$arr[$i]));
		  }
		}
		else{
			if($arr[$i]['timeperiod']==$timeperiodId)
		  {
			
			array_push($arr_final,array($arr[$i]));
		  }
			
		}
			
		
	}
	
	
	$arr_final=array($arr);
	
	echo json_encode($arr_final);

    FLUSH();


?>