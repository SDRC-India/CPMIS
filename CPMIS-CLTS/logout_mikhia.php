<?php
session_start();
unset($ngo_id);
$_SESSION['user_id']="" ;
session_destroy();

header("Location: log_inmukhia.php");
exit;
?>