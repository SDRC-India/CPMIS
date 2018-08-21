
<?php
$servername = "172.22.0.33:1433";
$username = "sa";
$password = "sdrc@dev16#";

// Create connection
$conn_info = mSsql_connect($servername, $username, $password);



mysql_select_db('cpmisdb',$conn_info);
//print_r($conn);
?> 

