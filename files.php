<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="refresh" content="5">
<title></title>

<script src="js/jquery.js"></script>

<script src="js/files.js"></script>
<script src="http://www.w3schools.com/appml/2.0.3/appml.js"></script>

    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="css/sb-admin.css" />
<link rel="stylesheet" href="css/bootstrap.css">
<script src="js/bootstrap.min.js"></script>



</head>
<body >
<h1 style="text-align:center;" >Files</h1>

<!------------------- new file--------------------->

<div class="container-fluid">
<form >
	<label for="upload">Upload File</label>
    <input type="file" class="btn btn-default" value="Upload File"  id="upload" >
    </form>

</div>

<hr/>
<div class="container-fluid" appml-data="nn">
<table class="table table-striped table-bordered table-responsive">
<tr>
  <th>Permissions</th>
  <th>Replication</th>
  <th>UploadedBy</th>
  <th>UserGroup</th>
  <th>Size</th>
  <th>UploadedOn</th>
  <th>FName</th>
  
</tr>
<tr appml-repeat="details" >
  <td>{{Permissions}}</td>
  <td>{{Replication}}</td>
  <td>{{UploadedBy}}</td>
  <td>{{UserGroup}}</td>
  <td>{{Size}}</td>
  <td>{{UploadedOn}}</td>
  <td>{{FName}}</td>
  
</tr>
</table>	
</div>




</body>
</html>
