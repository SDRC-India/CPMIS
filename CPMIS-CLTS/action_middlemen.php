<?php
include 'db.php';

$posted_data = $_POST['json_data'];
$data = json_decode($posted_data);
$middelmenuser=$data->middelmenuser ;
$middelmen_aliases=$data->middelmen_aliases ;
$middlemen_address=$data->middlemen_address ;
$middlemen_contact=$data->middlemen_contact ;
$other_details=$data->other_details ;
$result=mysql_query("insert into middlemen_reg (name,alias,address,contact,other_details) values('$middelmenuser','$middelmen_aliases','$middlemen_address','$middlemen_contact','$other_details')");
if($result)
{
echo $i=2;
}
else{
echo $i=1;
}
?>