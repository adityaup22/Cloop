
<?php 
//find sessions
session_start();
require_once("connection.php");

$idletime=10;//after 60 seconds the user gets logged out

if (time()-$_SESSION['timestamp']>$idletime){
    session_destroy();
    session_unset();
}else{
    $_SESSION['timestamp']=time();
}

//unset session variables
$_SESSION=array();
//destroy session cookie
if(isset($_COOKIE[session_name()])){
	setcookie(session_name(),'',time()-42000,'/');
	}
	//destroy session
	session_destroy();
	
	header("Location:handler.php?logout=1");
	exit;


?> 
