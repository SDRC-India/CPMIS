<?php
header('Access-Control-Allow-Origin:*');
include('db.php');
//$ic_nid=$_GET['ic_nid'];
//$sector_id=19;


$sql="SELECT TimePeriod_NId AS key_val,TimePeriod AS value FROM ut_timeperiod ";

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
