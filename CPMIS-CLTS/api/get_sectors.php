<?php
header('Access-Control-Allow-Origin:*');
include('db.php');
$arr=array();
$sql="SELECT IC_NId as key_val,IC_Name as value FROM ut_indicator_classifications_en WHERE IC_Parent_NId=-1 and IC_Type='SC' ";
$stmt = $con->prepare($sql);
$stmt->execute();
while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
	if($row['key_val']!=30)//this is fro CCI SECTOR as Data is not available as CCI wise Not District wise 
	{
      array_push($arr,$row);
	}   
}

//fetching the data from data base
	/*$result=mysql_query($sql);
	while($result_trust=mysql_fetch_assoc($result)){
		array_push($arr,$result_trust);				
	}*/
	echo json_encode($arr);
$con=null;
    FLUSH();
?>
