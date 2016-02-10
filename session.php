<?php 
session_start();
$_SESSION['timestamp']=time();
function logged_in(){
	return isset($_SESSION['user_id']);
	}
function confirm_logged_in(){
	if(!logged_in())
	{
		header("Location:handler.php?not=1");
		exit;
		}
	}
?> 
