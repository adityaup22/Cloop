<?php 

if(isset($_GET["confirm"]))
{
	echo "Password Doesnt Match";
}

if(isset($_GET["success"]))
{
	echo "Succesfull signed up";
}


if(isset($_GET["user"]))
{
	echo "User Already there";
}

if(isset($_GET["success_login"]))
{
	echo "Login successfull";
}

if(isset($_GET["failure_login"]))
{
	echo "Login failure";
}

if(isset($_GET["logout"]))
{
	echo "Logged Out";
}

if(isset($_GET["not"]))
{
	echo "Not logged in .. rediretced";
}






?>
