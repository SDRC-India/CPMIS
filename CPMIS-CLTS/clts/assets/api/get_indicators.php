<?php
include('db.php');
$sector_id=$_GET['sector'];
//$sector_id=1;
 //$sector_id;
$arr=array();
$sql="SELECT 
ut_ic_ius.IUSNId AS IUSNId,
ut_ic_ius.IC_IUSNId AS IC_IUSNId ,
ut_indicator_en.Indicator_Name+' '+ut_subgroup_vals_en.Subgroup_Val+' ('+ut_unit_en.Unit_Name+')'
 AS value, 
ut_indicator_en.Indicator_NId AS key_val 
        FROM ut_ic_ius
   JOIN ut_indicator_unit_subgroup ON ut_indicator_unit_subgroup.IUSNId=ut_ic_ius.IUSNId
   JOIN ut_unit_en ON ut_unit_en.Unit_NId=ut_indicator_unit_subgroup.Unit_NId
   JOIN ut_subgroup_vals_en ON ut_subgroup_vals_en.Subgroup_Val_NId=ut_indicator_unit_subgroup.Subgroup_Val_NId
   JOIN ut_indicator_en ON ut_indicator_en.Indicator_NId=ut_indicator_unit_subgroup.Indicator_NId

 WHERE ut_ic_ius.IC_NId=".$sector_id." ";
//STRING_AGG(CONCAT(FirstName, ' ', LastName, ' (', ModifiedDate, ')'), CHAR(13))
$stmt = $con->prepare($sql);

$stmt->execute();
while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
   array_push($arr,$row);	
}
 // print_r($arr);
	echo json_encode($arr);

  
  FLUSH();


  ?>
