<?php 
global $connection;
require_once("constant.php");
$connection= mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
if(!$connection)
die("CONNECTION FAILED".mysql_error());
?>
