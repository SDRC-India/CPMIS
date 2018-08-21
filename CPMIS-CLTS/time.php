<?php 
$time = microtime(true);

$con = mysql_connect("localhost", "cltstest", "cltstest@123#");
mysql_select_db("clts_test", $con);

$con_time = microtime(true);

$result = mysql_query('select * from staff');

$sel_time = microtime(true);

printf("Connect time: %f\nQuery time: %f\n",
       $con_time-$time,
       $sel_time-$con_time);
?>
