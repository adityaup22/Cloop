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
<body onLoad="loadthis()" >



<!-------------------  fileoptions--------------------->

<div class="container-fluid ">
	<div class="row top-option ">
    <div class="col-md-4 col-md-offset-2 ">
    	<h3>My Box</h3>
    </div>
    <div class="col-md-4  ">
	<button type="submit" class="btn btn-danger disabled file-option " data-toggle="tooltip" data-placement="bottom" title="Delete the selected file"><i class="fa fa-trash-o fa-lg " ></i>&nbsp;Delete</button>
    <button class="btn btn-primary disabled file-option" data-toggle="tooltip" data-placement="bottom" title="Download the selected file"><i class="fa fa-download fa-lg  " ></i>&nbsp;Download</button>
    </div>
    </div>
</div>


<!-------------------  filedetails--------------------->
<div class="container-fluid">

<table class="table  table-responsive" id="file" ></table>
  

</div>




</body>
</html>
