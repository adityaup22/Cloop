

<?php 
session_start();

//No INstacne Selected

if(isset($_GET['not_selected']))
{
	$_SESSION['not_selected']=1;
	
	
	header("Location:instance.php");


	
}

//Not Logged In

if(isset($_GET['not']))
{
	$_SESSION['not']=1;
	header("Location:home.php");
}

//Logged out Successfully
if(isset($_GET['logout']))
{
	$_SESSION['logout']=1;
	header("Location:home.php");
}

//Wrong Credentials Provided
if(isset($_GET['failure_login']))
{
	$_SESSION['failure_login']=1;
	header("Location:home.php");
}

//If Name In Infra Not mentioned..
if(isset($_GET['not_name']))
{
	$_SESSION['not_name']=1;
	header("Location:services.php");
}


if(isset($_GET['instance_deleted']))
{
	$_SESSION['instance_deleted']=$_GET['instance_deleted'];
	header("Location:instance.php");
}

if(isset($_GET['terminate']))
{
	$_SESSION['terminate']=$_GET['terminate'];
	header("Location:instance.php");
}




exit;


/*
 *          instance.php
 *          ------------
 * 
 *       <?php 
		if(isset($_SESSION['not_selected']))
		 {
		echo "<div class='alert alert-success fade in' id='msg'>
			  <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>" ;
		
		echo "<strong>Please Select Any Instance PAL ..!!</strong>";
		echo "</div>";
		unset($_SESSION['not_selected']);
		 }
       ?>

 * ***************************************************************
 * 
 *           home.php 
 *           --------
 * 
 * <?php
	
	if(isset($_SESSION['not']))
			{
			echo"<div class='alert alert-success fade in' id='msg'>
    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
    <strong>Not Logged In.!!</strong></div>";
    unset($_SESSION['not']);
			}
  
    
    if(isset($_SESSION['logout']))
			{
			echo"<div class='alert alert-success fade in' id='msg'>
    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
    <strong>Succesfully Logged Out..!!</strong></div>";
    unset($_SESSION['logout']);
    
    
    }
   
   
   if(isset($_SESSION['failure_login']))
 			{
			echo"<div class='alert alert-success fade in' id='msg'>
    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
    <strong>Wrong credentials..!!</strong></div>";
    unset($_SESSION['failure_login']);
    
    
    }
  
 * 
 * 
 * 
 * 
 * 
 * ********************************************************
 * 
 * 			services.php
 * 			------------
 * 
 * 
 * 
 * <?php
	if(isset($_SESSION['required']))
	{
	echo "
	<div class='alert alert-success fade in' id='msg'>
    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
    <strong>Welcome! </strong>
    </div>";
	}
	?>

 * 
 * 
 * 
 * 
 * 
 * */

?>

