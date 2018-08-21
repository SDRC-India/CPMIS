<?php
header('Access-Control-Allow-Origin:*');
include('db.php');
$iusnid=$_GET['iusnid'];
//$sector_id=19;
//$iusnid=1;

/*$sql="SELECT IC_NId as key_val,IC_Name as value FROM ut_indicator_classifications_en WHERE ut_indicator_classifications_en.IC_Parent_NId !=-1 AND ut_indicator_classifications_en.IC_Type='SR' ";*/



$sql="SELECT DISTINCT ut_data.source_NId,IC_NId as key_val,IC_Name as value FROM ut_data 
LEFT JOIN ut_indicator_classifications_en ON ut_indicator_classifications_en.IC_NId=ut_data.source_NId
WHERE ut_data.IUSNId = '".$iusnid."' ";



$arr=array();
$stmt = $con->prepare($sql);

$stmt->execute();
//print_r($stmt->execute());
while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
   array_push($arr,$row);	
}
 // print_r($arr);
	echo json_encode($arr);

    FLUSH();
?>
