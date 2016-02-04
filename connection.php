<?php 
global $connection;
require_once("constant.php");
$connection= mysql_connect(DB_SERVER,DB_USER,DB_PASS);
if(!$connection)
die("CONNECTION FAILED".mysql_error());
$db_select=mysql_select_db(DB_NAME,$connection);
if(!$db_select)
die("SELECTION FAILED".mysql_error());
?>
