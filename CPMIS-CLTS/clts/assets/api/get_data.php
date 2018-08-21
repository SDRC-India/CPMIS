<?php
include('db.php');
$IUSNId=$_GET['IUSNId'];
$areaId=$_GET['areaId'];
$sourceNid=$_GET['sourceNid'];
$timeperiodId=$_GET['timeperiodId'];
$childLevel=$_GET['childLevel'];


$arr=array();

	$sql="SELECT ut_unit_en.Unit_Name AS unit,
	ut_area_en.Area_ID AS areaCode,ut_area_en.Area_Name AS areaName,ut_data.Data_Value AS value FROM ut_data 
	LEFT JOIN ut_unit_en ON ut_unit_en.Unit_NId=ut_data.Unit_NId
	LEFT JOIN ut_area_en ON ut_area_en.Area_NId=ut_data.Area_NId
	 WHERE ut_data.IUSNId='".$IUSNId."' AND ut_data.source_NId='".$sourceNid."' AND ut_data.TimePeriod_NId='".$timeperiodId."' AND ut_area_en.Area_Parent_NId='".$childLevel."'  ORDER BY ut_area_en.Area_Name";


$stmt = $con->prepare($sql);

$stmt->execute();


while($row = $stmt->fetch(PDO::FETCH_ASSOC)){

   array_push($arr,$row);   
}

  //sorting the array 
	  function cmp($b,$a)
	   {
		return $b['value'] - $a['value'];
	   }
	usort($arr, "cmp");
  //sorting ends
  $top_bottom_performers=[];
  $legends=[];
  $final_ut_data=[];
if(sizeof($arr)>1)
{	
   $IspositiveIndicator= get_is_high_good($IUSNId,$con);
   $pop= populateLegengds($arr,$IspositiveIndicator);
   $set_rank_data=set_rank($arr,$IspositiveIndicator);
   $ut_data=setCssClass($set_rank_data,$pop,$IspositiveIndicator);
   $top_bottom_performers=top_bottom_performer($arr,$IspositiveIndicator);	
   $legends=array("legends"=>$pop);
   $final_ut_data=array("dataCollection"=>$ut_data);
}
   
   ///final data represent the map
  echo json_encode(array($final_ut_data,$legends,$top_bottom_performers));
  ///final data represent the map
  
  
   //functions starts here
	function set_rank($arr,$IspositiveIndicator)
	{
		if($IspositiveIndicator==0)
		{
			$j=1;
          for($i=sizeof($arr)-1;$i>=0;$i--)
			  {  
				   $arr[$i]['rank']=$j;
				   
			       $j++;		   
			  } 
		
		 
		}
		else if($IspositiveIndicator==-1 ){
			
			for($i=0;$i<sizeof($arr);$i++)
		  { 
               
			   $arr[$i]['rank']=$i+1;
         	   
				
		  }
		}
		return $arr;
	}
	
	
     function setCssClass($arr,$pop,$IspositiveIndicator)
	 {
		
		
		for($i=0;$i<sizeof($arr);$i++)
		  { 
			  $arr[$i]['cssClass']=SetcssSlices($IspositiveIndicator,$pop,$arr[$i]['value']);
         	   
				
		  } 
		return $arr; 
		 
	 }
	  function top_bottom_performer($arr,$IspositiveIndicator)
	 {
		 
		
		 $top_perfomer=array();
		 $bottom_perfomer=array();
		 
		
		 
		if(sizeof($arr)>1)
		{
			
			if($IspositiveIndicator==0)
			{
				array_push($bottom_perfomer,$arr[0]['areaName'].' - '.$arr[0]['value'],$arr[1]['areaName'].' - '.$arr[1]['value'],$arr[2]['areaName'].' - '.$arr[2]['value']);
				
				
				array_push($top_perfomer,$arr[sizeof($arr)-1]['areaName'].' - '.$arr[sizeof($arr)-1]['value'],$arr[sizeof($arr)-2]['areaName'].' - '.$arr[sizeof($arr)-2]['value'],$arr[sizeof($arr)-3]['areaName'].' - '.$arr[sizeof($arr)-3]['value']);
				
			}
			else{
				array_push($top_perfomer,$arr[0]['areaName'].' - '.$arr[0]['value'],$arr[1]['areaName'].' - '.$arr[1]['value'],$arr[2]['areaName'].' - '.$arr[2]['value']);
				
				array_push($bottom_perfomer,$arr[sizeof($arr)-1]['areaName'].' - '.$arr[sizeof($arr)-1]['value'],$arr[sizeof($arr)-2]['areaName'].' - '.$arr[sizeof($arr)-2]['value'],$arr[sizeof($arr)-3]['areaName'].' - '.$arr[sizeof($arr)-3]['value']);
				
			}
			
			
			
		}
	    
	
		return array("topPerformers" => $top_perfomer,"bottomPerformers" => $bottom_perfomer);	
		
		 
	 }
	//to get indicator is high good
	function get_is_high_good($IUSNId,$con)
	{
		$sql="SELECT ut_indicator_en.HighIsGood as HighIsGood  FROM ut_indicator_unit_subgroup 
		LEFT JOIN ut_indicator_en ON ut_indicator_en.Indicator_NId=ut_indicator_unit_subgroup.Indicator_NId
		WHERE ut_indicator_unit_subgroup.IUSNId='".$IUSNId."'";
		$stmt = $con->prepare($sql);
		
		$stmt->execute();
		while($row = $stmt->fetch(PDO::FETCH_ASSOC)){

		   $isgoodHigh=$row['HighIsGood'];
			 
		}
		return $isgoodHigh;
		
	}
	function SetcssSlices($IspositiveIndicator,$pop,$value)
	{
		$firstslices='firstslices';
		$secondslices='secondslices';
		$thirdslices='thirdslices';
		$fourthslices='fourthslices';
		$fifthslices='fifthslices';
		$cssClass="";
		//print_r($value);
		//echo sizeof($pop);
		//print_r($pop);
		if(sizeof($pop)==1)
		{
		if($IspositiveIndicator==0)
		{
			$cssClass=$firstslices;
		}
	   else{
		   $cssClass=$fourthslices;
	      }		
			
		}
		else{
		for ($i=0;$i<sizeof($pop)-1;$i++)
		{
			
		  	$vArray=explode('-',$pop[$i]['key_val']);
			//print_r($vArray);
			
			
			if(sizeof($pop) == 1){
							if($IspositiveIndicator==1){
									$cssClass=$firstslices;
								}
							else{
									$cssClass=$fourthslices;
								}
					 }
				
					 else if ($vArray != null
                             && (double)$vArray[0]<= (double)$value
                             && (double)$value <= (double)$vArray[1])
							 {
							    
				if($IspositiveIndicator==0){
					
					switch ($i) {
					case 0:
						$cssClass=$firstslices;
						break;
					case 1:
						$cssClass=$secondslices;
						break;
					case 2:
						$cssClass=$thirdslices;
						break;
					case 3:
						$cssClass=$fourthslices;
						break;
					}
				}else{
					switch ($i) {
					case 0:
						$cssClass=$fourthslices;
						break;
					case 1:
						$cssClass=$thirdslices;
						break;
					case 2:
						$cssClass=$secondslices;
						break;
					case 3:
						$cssClass=$firstslices;
						break;
					}
				}
				
								 
								 
								 
							 }
			
			
		}
		}
		
		return $cssClass;
		
		
	}
	
	
	function populateLegengds($arr,$IspositiveIndicator)
	{
		$range=4;
		if($arr !=null &&  sizeof($arr)!=0)
		$maxData=$arr[sizeof($arr)-1]['value'];
		$minData=$arr[0]['value'];
		//print_r($minData);
		
		$diff=($maxData-$minData)/$range;
		$firstslices='firstslices';
		$secondslices='secondslices';
		$thirdslices='thirdslices';
		$fourthslices='fourthslices';
		$fifthslices='fifthslices';
		$legend_data=array();
		if($diff==0)
		{
      $firstSliceValue = $minData. " - ". ($maxData+ $diff);
				//list.add(isPositveIndicator(indicatorId)?new ValueObject(firstSliceValue, firstslices):new ValueObject(firstSliceValue, fourthslices));
				if($IspositiveIndicator==0)
				{
					$ac_legend_arr=array("key_val"=>$firstSliceValue,"value"=>$firstslices);
				}
				else if($IspositiveIndicator==-1)
				{
					$ac_legend_arr=array("key_val"=>$firstSliceValue,"value"=>$fourthslices);
				}
				
			array_push($legend_data,$ac_legend_arr);
			
		}
		else {
			//echo $maxData;
			if($arr[sizeof($arr)-1]['unit']=='Number')
			{
				$diff=round($diff);
			    $firstSliceValue = $minData. " - ". ($minData+ $diff);
			    $secondSliceValue = ($minData+$diff+1) ." - ". ($minData+ 2* $diff);
			    $thirdSliceValue = ($minData+ 2* $diff +1) ." - ". ($minData+ 3* $diff);
			    $fourthSliceValue = ($minData+ 3* $diff +1) ." - ". ($maxData);
			}
			else{
				
				$firstSliceValue = $minData. " - ". ($minData+ $diff);
			    $secondSliceValue = ($minData+$diff+0.01) ." - ". ($minData+ 2* $diff);
			    $thirdSliceValue = ($minData+ 2* $diff +0.01) ." - ". ($minData+ 3* $diff);
			    $fourthSliceValue = ($minData+ 3* $diff +0.01) ." - ". ($maxData);
			}
				if($IspositiveIndicator==0)
				{
					$ac_legend_arr1=array("key_val"=>$firstSliceValue,"value"=>$firstslices);
					$ac_legend_arr2=array("key_val"=>$secondSliceValue,"value"=>$secondslices);
					$ac_legend_arr3=array("key_val"=>$thirdSliceValue,"value"=>$thirdslices);
					$ac_legend_arr4=array("key_val"=>$fourthSliceValue,"value"=>$fourthslices);
					$ac_legend_arr5=array("key_val"=>'Not Available',"value"=>$fifthslices);
					
					
				}
				else if($IspositiveIndicator==1)
				{
					$ac_legend_arr1=array("key_val"=>$firstSliceValue,"value"=>$fourthslices);
					$ac_legend_arr2=array("key_val"=>$secondSliceValue,"value"=>$thirdslices);
					$ac_legend_arr3=array("key_val"=>$thirdSliceValue,"value"=>$secondslices);
					$ac_legend_arr4=array("key_val"=>$fourthSliceValue,"value"=>$firstslices);
					$ac_legend_arr5=array("key_val"=>'Not Available',"value"=>$fifthslices);
				}
				    array_push($legend_data,$ac_legend_arr1);
					array_push($legend_data,$ac_legend_arr2);
					array_push($legend_data,$ac_legend_arr3);
					array_push($legend_data,$ac_legend_arr4);
					array_push($legend_data,$ac_legend_arr5);
				
	     	}
		return $legend_data;
		
		
		
		
	}
	
    FLUSH();
?>
