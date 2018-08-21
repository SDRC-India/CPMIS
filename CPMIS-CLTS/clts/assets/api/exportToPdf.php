<?php
include('db.php'); 
 $_POST['areaId'];
$IUSNId=$_POST['indicatorId'];
$timeperiodId= $_POST['timePeriodId'];
$sourceNid= $_POST['sourceId'];
$childLevel= $_POST['childLevel'];
 $_POST['area'];
 $_POST['indicator'];
 $_POST['timePeriod'];
 $_POST['source'];
 //$_POST['imgMap'];

$head=$_POST['indicator'].$_POST['area'].'<br/>'.$_POST['timePeriod'].$_POST['source'];

$arr=array();

	$sql="SELECT 
	ut_area_en.Area_Name AS areaName,ut_data.Data_Value AS value FROM ut_data 
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
  
  $final_ut_data=[];
  $ut_data=[];
if(sizeof($arr)>1)
{	
   $IspositiveIndicator= get_is_high_good($IUSNId,$con);
   //$pop= populateLegengds($arr,$IspositiveIndicator);
   $set_rank_data=set_rank($arr,$IspositiveIndicator);
   //$ut_data=setCssClass($set_rank_data,$pop,$IspositiveIndicator);
   //$top_bottom_performers=top_bottom_performer($arr,$IspositiveIndicator);	
   //$legends=array("legends"=>$pop);
   $ut_data=$set_rank_data;
   sort($ut_data);
   $final_ut_data=set_sl_no($ut_data,$IspositiveIndicator);
  
}
   
   ///final data represent the map
 // echo json_encode($final_ut_data);
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
				   //$arr[$i]['sl_no']=$i+1;//sl no only
				   
			       $j++;		   
			  } 
		
		 
		}
		else if($IspositiveIndicator==-1 ){
			
			for($i=0;$i<sizeof($arr);$i++)
		  { 
               
			   $arr[$i]['rank']=$i+1;
         	  // $arr[$i]['sl_no']=$i+1;
				
		  }
		}
		return $arr;
	}
	function set_sl_no($arr,$IspositiveIndicator)
	{
		if($IspositiveIndicator==0)
		{
			$j=1;
          for($i=sizeof($arr)-1;$i>=0;$i--)
			  {  
				   //$arr[$i]['rank']=$j;
				   $arr[$i]['sl_no']=$i+1;//sl no only
				   
			       $j++;		   
			  } 
		
		 
		}
		else if($IspositiveIndicator==-1 ){
			
			for($i=0;$i<sizeof($arr);$i++)
		  { 
               
			   //$arr[$i]['rank']=$i+1;
         	   $arr[$i]['sl_no']=$i+1;
				
		  }
		}
		return $arr;
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
//echo 
//echo base64_decode($str);//base 64 encoded string to be passed to decode 
//$data=echo json_encode($final_ut_data);
$html_table = '

<br/><div style="margin-top:200px; margin-bottom:100px;"><table  width="100%" style="margin-top:200px; margin-bottom:100px;" style="vertical-align: bottom; font-family: serif; font-size: 12pt; color: #000000; font-weight: bold;"  border=1>
<thead>
<tr style="background:#ccc; color:#fff;"><th>SL NO</th><th>AREA NAME</th><th>DATA VALUE</th><th>RANK</th></tr>

</thead>
<tbody>';


foreach($final_ut_data as $row){
    $html_table .= "<tr><td>".$row['sl_no']."</td><td>".$row['areaName']."</td>                        
	<td>".$row['value']."</td><td>".$row['rank']."</td></tr>";                          
}
$html_table .='
              
				</tbody></table></div>';
				
				
$html='
'.$head.'
<table width="100%" style="font-family: serif; font-size: 15pt; color: #000000; font-weight: bold; font-style: italic;"><tr>

<td width="20%"><span style="font-weight: bold;float:left;"><img src="'.$_POST['imageTopBottomBase64'].'"/></span></td>

<td width="60%" align="center" style="font-weight: bold; font-style:normal; font-size:24px;"><img src="'.$_POST['imgMap'].'"/></td>

<td width="20%" style="text-align: right; float:right; "><img src="'.$_POST['imageLegendBase64'].'"/></td>

</tr>
</table>'.$html_table .'
';
//


require '../fragments/vendor/autoload.php';

$mpdf = new mPDF('', array(350,278),'','','15','15','0','0');
$mpdf->setAutoTopMargin = 'stretch';
$mpdf->setAutoBottomMargin  = 'stretch';

$mpdf->SetHTMLHeader('<table width="100%" style="vertical-align: bottom; font-family: serif; font-size: 12pt; color: #000000; font-weight: bold; font-style: italic;"><tr>

<td width="33%"><span style="font-weight: bold; font-style: italic;float:left;"><img src="../img/cpmis_logo_sm.png"/></span></td>

<td width="33%" align="center" style="font-weight: bold; font-style:normal; font-size:24px;">CPMISInfo Factsheet</td>

<td width="33%" style="text-align: right; float:right; "><img src="../img/unisef2.png"/></td>

</tr></table>
<p style="border-top:3px solid #41c484;margin-left:-60px;margin-right:-60px"></p>

');

$mpdf->SetHTMLFooter('

<table width="100%" style="margin-left:-55px;margin-right:-55px;vertical-align: bottom; font-family: serif; font-size: 8pt; background:#111; font-weight: bold; font-style: normal;"><tr>

<td width="33%"><span style="font-weight: bold;color:#fff;">Supported by <img src="../img/unisef2.png"  height="40px;"/></span></td>

<td width="33%" align="center" style="font-weight: bold; color:#fff;">Page No-{PAGENO},Printed ON:{DATE d-m-Y h:i:s} from http://www.cpmis.org</td>

<td width="33%" style="text-align: right;color:#fff; ">Powered by <span style="color:#fea32c; font-size:16px;"><strong>SDRC</strong></span></td>

</tr></table>

');

$mpdf->WriteHTML($html);

//$mpdf->Output();
$mpdf->Output('../fragments/download/cpmisinfo.pdf','F');
echo 'localhost/cpmis/fragments/download/test.pdf';

?>