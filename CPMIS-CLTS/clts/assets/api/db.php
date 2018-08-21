<?php

    try {
    	//$con = new PDO("dblib:host=172.22.0.31:1433;dbname=cpmis_devinfo_r2", "sa", "sdrc@dev20#");
	 $con = new PDO("sqlsrv:Server=192.168.1.5,1433;Database=cpmis_devinfo_r3", "sa", "P@Ss@123");
    	
    }     
catch (PDOException $e) {
    echo "Error: " . $e->getMessage() . "\n";
}// print_r($con);
?>