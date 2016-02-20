<?php
require_once("session.php");
confirm_logged_in();
 ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">

<title>Services</title>
<link rel="stylesheet" href="css/bootstrap.css" />
<link rel="stylesheet" href="css/services.css" />
<script src="js/jquery.js"></script>
<script src="js/services.js"></script>
<script src="js/bootstrap.js"></script>
<link href='https://fonts.googleapis.com/css?family=Ubuntu:400,500,700' rel='stylesheet' type='text/css'>
</head>

<body>
 
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"><span style="color:white;"><span style="color:#FC0">I</span>nfamous <span style="color:#F40A03">C</span>loud</span></a>
    </div>
    <div style="padding-left:900px;">
      <ul class="nav navbar-nav navbar-right">
        <li class="btn-primary" style="color:white; border-radius:6px;"><a href="#" style="color:white;">Home</a></li>
        <li><a href="instance.php">Your Instances</a></li>
        <li><a href="#">Notifications</a></li> 
        
        
        	<?php
			if(logged_in())
			{
			 echo "<li class='dropdown'>
                    
                    <a href='#' class='dropdown-toggle' data-toggle='dropdown'><i class='fa fa-user'></i>"; 
                    ?> 
                    
                    <?php 
                    
                    if(isset($_SESSION['username']))echo ucfirst($_SESSION['username']); 
                    
                    echo "<b class='caret'></b></a>
                    
                    <ul class='dropdown-menu'>
                        <li>
                            <a href='#'><i class='fa fa-fw fa-user'></i> Profile</a>
                        </li>
                        <li>
                            <a href='#'><i class='fa fa-fw fa-envelope'></i> Inbox</a>
                        </li>
                        <li>
                            <a href='#'><i class='fa fa-fw fa-gear'></i> Settings</a>
                        </li>
                        <li class='divider'></li>
                        <li>
                            <a href='logout.php'><i class='fa fa-fw fa-power-off'></i> Log Out</a>
                        </li>
                    </ul>
                </li>";
                }
                ?>
    
        
      </ul>
    </div>
  </div>
</nav>
<!------------------------------------navigation over------------------------------->


					
					<!----- alert msg for user----->

	<?php
	if(isset($_SESSION['not_name']))
	{
	echo "
	<div class='alert alert-danger fade in myclass' id='msg'>
    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
    <strong>Enter Instance Name !</strong>
    </div>";
    unset($_SESSION['not_name']);
	}
	
	
	if(isset($_SESSION['instance_already']))
	{
	echo "
	<div class='alert alert-danger fade in myclass' id='msg'>
    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
    <strong>Instance {$_SESSION['instance_already']} Already Present !</strong>
    </div>";
    unset($_SESSION['instance_already']);
	}
	
	
	
	?>


<!----- alert msg for user----->



<a href="software.php"><button  class="click" id="one">Softwares</button></a>


<a href="storage.php"><button onclick=<?php echo "\"initial_proc('{$_SESSION['username']}')\"";?>  class="click" id="two" >Storage</button></a>


<a href="instance.php"><button class="click" id="three" >Infrastructure</button></a>


<a href="cluster.php"><button class="click" id="four" >Hadoop</button></a>


<!-- Modal --------------------------   staas---------------------------->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Please select the size </h4>
      </div>
      <div class="modal-body">
      	<form >
        	<div class="form-group">
  <label for="sel1">Select One</label>
  <select class="form-control" id="sel1">
    <option>100 GiB </option>
    <option>250 GiB</option>
    <option>400 GiB</option>
    <option>500 GiB</option>
  </select>
</div>
		<input type="submit" name="Submit" class="btn btn-primary btn-block">
		</form>
      </div>
     
    </div>

  </div>
</div>





<!-- Modal --------------------------   Hadoop---------------------------->
<div id="myModal4" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Please select the apropriate Flavour. </h4>
      </div>
      <div class="modal-body">
        	<div class="container-fluid">
  <form >
        	<div class="form-group">
  <label for="sel1">Select One</label>
  <select class="form-control" id="sel1">
    <option value="1">xSmall </option>
    <option value="2">Small</option>
    <option value="3">Medium</option>
    <option value="4">Large</option>
    <option value="5">xLarge</option>
  </select>
</div>
        <h2>Flavours</h2>      
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Flavour</th>
        <th>Nodes</th>
        <th>RAM</th>
        <th>Disk</th>
        <th>CPU</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>xSmall</td>
        <td>3</td>
        <td>6 GB</td>
        <td>600 Gb</td>
        <td>3</td>
      </tr>
     <tr>
        <td>Small</td>
        <td>6</td>
        <td>12 GB</td>
        <td>1200 Gb</td>
        <td>6</td>
      </tr>
      <tr>
        <td>Medium</td>
        <td>15</td>
        <td>30 GB</td>
        <td>1500 Gb</td>
        <td>15</td>
      </tr>
      <tr>
        <td>Large</td>
        <td>30</td>
        <td>60 GB</td>
        <td>6000 Gb</td>
        <td>30</td>
      </tr>
      <tr>
        <td>xLarge</td>
        <td>50</td>
        <td>100 GB</td>
        <td>10000 Gb</td>
        <td>50</td>
      </tr>
    </tbody>
  </table>
</div>
<input type="submit" value="Submit" class="btn btn-primary btn-block">
		</form>
      </div>
     
    </div>

  </div>
</div>
</body>
</html>
