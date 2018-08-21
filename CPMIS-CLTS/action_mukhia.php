<?php
include 'db.php';

$posted_data = $_POST['json_data'];
$data = json_decode($posted_data);
$mukhianame=$data->mukhianame ;
$mukhiacontact=$data->mukhiacontact ;
$addressmukhia=$data->addressmukhia ;
$nameofdist=$data->NameOfdist ;
$panchayatid=$data->panchayatid ;
//echo "insert into mukhia_reg (name,contact,address,dist_areaid) values('$mukhianame','$mukhiacontact','$addressmukhia','')" ;
$result=mysql_query("insert into mukhia_reg (name,contact,address,dist_areaid, panchayat_id) values('$mukhianame','$mukhiacontact','$addressmukhia','$nameofdist','$panchayatid')");
//echo "insert into mukhia_reg (name,contact,address,dist_areaid) values('$mukhianame','$mukhiacontact','$addressmukhia','123')"
//echo "insert into mukhia_reg (name,contact,address,dist_areaid) values('$mukhianame','$mukhiacontact','$addressmukhia','$nameofdist')" ;
if($result)
{
echo $i=2;
}
else{
echo $i=1;

}
?>