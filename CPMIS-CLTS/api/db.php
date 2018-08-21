<?php
try {
    $con = new PDO("dblib:host=172.22.0.36:1433;dbname=Bihar_CPMIS_041217_2106_v7", "sa", "sdrc@dev20#");
    
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage() . "\n";
} //print_r($con);
?>