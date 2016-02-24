<?php
require_once("session.php");
confirm_logged_in();
 ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">

<title></title>



<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="css/sb-admin.css" />
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/files.css">
<script src="js/jquery.js"></script>

<script src="js/files.js"></script>

<script src="js/bootstrap.js"></script>




</head>
<body onchange=<?php echo "\"loadthis('{$_SESSION['username']}')\"";?> >



<!-------------------  fileoptions--------------------->

<div class="container-fluid ">
	<div class="row top-option ">
    
    	<h3>My Box</h3>
    
   
    </div>
</div>


<!-------------------  filedetails--------------------->
<div class="container-fluid">

<table class="table table-hover table-responsive" id="file" ></table>
  

</div>




</body>
</html>
