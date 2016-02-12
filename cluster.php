<?php require_once('session.php');
require_once('connection.php');
confirm_logged_in();
?>

<!doctype html>
<html>
<head  >
<meta charset='utf-8'>
<meta name='viewport'  content='width=device-width,initial-scale=1'>
<title>Instance</title>
<link rel='stylesheet' href='css/bootstrap.css' />
<link rel='stylesheet' href='css/sb-admin.css' />
<link rel='stylesheet' href='font-awesome/css/font-awesome.css'/>
<link rel='stylesheet' href='css/cluster.css' />
<script src='js/jquery.js'></script>
<script src='js/cluster.js'></script>
<script src='js/bootstrap.js'></script>

</head>


<body >
<div id='wrapper'>
<!--------------------              Top Navigation           ---------------------->
	
    
   <nav class='navbar navbar-inverse navbar-fixed-top' role='navigation'>
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class='navbar-header'>
                <button type='button' class='navbar-toggle' data-toggle='collapse' data-target='.navbar-ex1-collapse'>
                    <span class='sr-only'>Expand</span>
                    <span class='icon-bar'></span>
                    <span class='icon-bar'></span>
                    <span class='icon-bar'></span>
                </button>
                <button type='button' class='navbar-toggle my-toggle' data-toggle='collapse' data-target='.navbar-ex1-collapse2'>
                    <span class='glyphicon glyphicon-option-vertical' style='color:white' aria-hidden='true'></span>
                </button>
                
             
                <a class='navbar-brand' href='index.html'><span style='color:white; '><span style='color:#FC0'>I</span>nfamous <span style='color:#F40A03'>C</span>loud</span></a>
            </div>
            <!-- Top Menu Items -->
            <div class='collapse navbar-collapse navbar-ex1-collapse2'>
            <ul class='nav navbar-right top-nav'>
                <li class='dropdown'>
                    <a href='#' class='dropdown-toggle' data-toggle='dropdown'><i class='fa fa-envelope'></i> <b class='caret'></b></a>
                    <ul class='dropdown-menu message-dropdown'>
                        <li class='message-preview'>
                            <a href='#'>
                                <div class='media'>
                                    <span class='pull-left'>
                                        <img class='media-object' src='images/IMG_20150430_133441.jpg' alt=''><!-- a 50x50 image-->
                                    </span>
                                    <div class='media-body'>
                                        <h5 class='media-heading'>
                                            <strong>Gaurav Dhenwal</strong>
                                        </h5>
                                        <p class='small text-muted'><i class='fa fa-clock-o'></i>hiiiiii</p>
                                        <p>byee</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class='message-preview'>
                            <a href='#'>
                                <div class='media'>
                                    <span class='pull-left'>
                                        <img class='media-object' src='images/IMG_20150430_133441.jpg' alt=''>
                                    </span>
                                    <div class='media-body'>
                                        <h5 class='media-heading'>
                                            <strong>Gaurav Dhenwal</strong>
                                        </h5>
                                        <p class='small text-muted'><i class='fa fa-clock-o'></i> hii</p>
                                        <p>byeee</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class='message-preview'>
                            <a href='#'>
                                <div class='media'>
                                    <span class='pull-left'>
                                        <img class='media-object' src='images/IMG_20150430_133441.jpg' alt=''>
                                    </span>
                                    <div class='media-body'>
                                        <h5 class='media-heading'>
                                            <strong>Gaurav Dhenwal</strong>
                                        </h5>
                                        <p class='small text-muted'><i class='fa fa-clock-o'></i> Yesterday at 4:32 PM</p>
                                        <p>bjhasbdjkbasdkjasbiluasb</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class='message-footer'>
                            <a href='#'>Read All New Messages</a>
                        </li>
                    </ul>
                </li>
                <li class='dropdown'>
                    <a href='#' class='dropdown-toggle' data-toggle='dropdown'><i class='fa fa-bell'></i> <b class='caret'></b></a>
                    <ul class='dropdown-menu alert-dropdown'>
                        <li>
                            <a href='#'>gand fat gai <span class='label label-default'>Alert Badge</span></a>
                        </li>
                        <li>
                            <a href='#'>phon order <span class='label label-primary'>Alert Badge</span></a>
                        </li>
                        <li>
                            <a href='#'>Alert Name <span class='label label-success'>Alert Badge</span></a>
                        </li>
                        <li>
                            <a href='#'>Alert Name <span class='label label-info'>Alert Badge</span></a>
                        </li>
                        <li>
                            <a href='#'>Alert Name <span class='label label-warning'>Alert Badge</span></a>
                        </li>
                        <li>
                            <a href='#'>Alert Name <span class='label label-danger'>Alert Badge</span></a>
                        </li>
                        <li class='divider'></li>
                        <li>
                            <a href='#'>View All</a>
                        </li>
                    </ul>
                </li>
                <li class='dropdown'>
                    <a href='#' class='dropdown-toggle' data-toggle='dropdown'><i class='fa fa-user'></i> <?php if(isset($_SESSION['username']))echo ucfirst($_SESSION['username']); ?> <b class='caret'></b></a>
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
                </li>
            </ul>
            </div>
            
            
            
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens ----------------->
            <div class='collapse navbar-collapse navbar-ex1-collapse'>
                <ul class='nav navbar-nav side-nav'>
                    <li >
                        <a href='#'><i class='fa fa-fw fa-dashboard'></i> Dashboard</a>
                    </li>
                    <li>
                        <a href='services.php'><i class='fa fa-fw fa-desktop'></i> Services</a>
                    </li>
                    <li>
                        <a href='#'><i class='fa fa-fw fa-bar-chart-o'></i> Stats</a>
                    </li>
                     <li>
                        <a href='#' data-toggle="modal" data-target="#myModal4"><i class='fa fa-fw  fa-plus-square-o'></i> Increase Capacity</a>
                    </li>
                    
                   
                   
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>





<!-----------------------------------------------------Navigation over ----------------------->

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
     

</body>
</html>