<?php
include 'db.php';
$posted_data = $_POST['json_data'];
$data = json_decode($posted_data);
$email=$data->email ;   
$result=mysql_query("select email from ngo_reg where email='$email'");
$count=mysql_num_rows($result) ;
echo $count ;
/*if($result)
{
return true ;
}*/
?>