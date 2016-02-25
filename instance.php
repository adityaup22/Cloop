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
<link rel='stylesheet' href='css/instance.css' />
<script src='js/jquery.js'></script>
<script src='js/instance.js'></script>
<script src='js/bootstrap.js'></script>

</head>


<body onload=<?php echo "\"test('{$_SESSION['username']}')\"";?> >
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
                        <a href='#' data-toggle="modal" data-target="#myModal3"><i class='fa fa-fw fa-bar-chart-o'></i> New Instance</a>
                    </li>
                    
                   
                   
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>





<!-----------------------------------------------------Navigation over ----------------------->





<div id='page-wrapper'>

            <div class='container-fluid'>
           
           <!----- alert msg for user-----> 
      
      <?php
	if(isset($_SESSION['not_selected']))
	{
	echo "
	<div class='alert alert-danger fade in myclass' id='msg'>
    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
    <strong>Select Any Instance Pal !!</strong>
    </div>";
    unset($_SESSION['not_selected']);
	}
	
	if(isset($_SESSION['instance_deleted']))
	{
	echo "
	<div class='alert alert-danger fade in myclass' id='msg'>
    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
    <strong>Instance {$_SESSION['instance_deleted']} Deleted !</strong>
    </div>";
    unset($_SESSION['instance_deleted']);
	}
	
	if(isset($_SESSION['terminate']))
	{
	echo "
	<div class='alert alert-danger fade in myclass' id='msg'>
    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
    <strong>Instance {$_SESSION['terminate']} terminated !</strong>
    </div>";
    unset($_SESSION['terminate']);
	}
	
	if(isset($_SESSION['terminate_first']))
	{
	echo "
	<div class='alert alert-danger fade in myclass' id='msg'>
    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
    <strong>Terminate {$_SESSION['terminate']} first !</strong>
    </div>";
    unset($_SESSION['terminate_first']);
	}
	
	?>

      
      
                <!-- Page Heading -->
                <div class='row'>
                    <div class='col-lg-12'>
                       <h2 class="page-header" id="head">
                           Your Instances
                       </h1>
                    </div>
                </div>
                <!-- /.row -->
                
               
                
                <!--------------------------------------------- table for instance---------------------------> 
                <div class="container-fluid " id="main">
                
                <form id="iform"  role="form" method="post" action="/cgi-bin/proxy.py?user=<?php echo "{$_SESSION['username']}"; ?>"></form>
                
                <button type="submit" class="btn-primary btn " form="iform">Launch Instance</button>
				
				
                
               <button type="submit" name="terminate" value="terminate" class="btn-warning btn" form="iform" >Terminate Instance</button>
               <button type="submit" name="delete" value="delete" class="btn-danger btn" form="iform" >Delete Instance</button><br/>
               
               
               <table class="table table-bordered   table-hover table-responsive mytable" id="instancetable">
               
               
              
          <!--      <td><div class="progress">
  <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar"
  aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:80%">
    80% Building
  </div></td>   -->
      <!--this progress bar can be displayed when instance is building and its progress can be varied by changing its "width" so it must be managed by the script and continuously script must be triggred to check the progress and width must be adjusted... --->
              
               
               
               
               
               
                </table>
                </div> 
                <!----------------------------------- /.table---------------------> 

            </div>
            <!-- /.container-fluid -->

        </div>
<!--end of page wrappper-->



</div>
<!--end of wrapper-->

<!-- Modal -------------------------  for iaas---------------------->
<div id="myModal3" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Please select the apropriate Flavour. </h4>
      </div>
      <div class="modal-body">
        	<div class="container-fluid">
  
  <form action="/cgi-bin/installing_instance.py?user=<?php echo $_SESSION['username'] ?>" method="post">
        	<div class="form-group">
 
  <label  for="sel2">Select OS</label>
  <select name="os" class="form-control" id="sel2">
    <option value="Centos">CentOS </option>
    <option value="Mint">Mint</option>
    <option value="Ubuntu">Ubuntu</option>
    <option value="Fedora">Fedora</option>
    
  </select>
  <br/>
  
  <label for="os_name">Name</label>

  <input type="text" placeholder="Enter the name for the OS" class="form-control" name="name" />
  
</div>


  
  
        <h2>Flavours</h2>      
  <table class="table table-hover table-condensed table-responsive">
    <thead>
      <tr>
      	<th>Select</th>
        <th>Flavour</th>
        <th>RAM</th>
        <th>Disk</th>
        <th>CPU</th>
      </tr>
    </thead>
    <tbody>
      <tr>
      	<td><input type="radio" name="option" value="xsmall" checked /></td>
        <td>xSmall</td>
        <td>1 GB</td>
        <td>100 Gb</td>
        <td>1</td>
      </tr>
     <tr>
     	<td><input type="radio" name="option" value="small" /></td>
        <td>Small</td>
        <td>2.5 GB</td>
        <td>250 Gb</td>
        <td>2</td>
      </tr>
      <tr>
      	<td><input type="radio" name="option"  value="medium" /></td>
        <td>Medium</td>
        <td>4 GB</td>
        <td>500 Gb</td>
        <td>4</td>
      </tr>
      <tr>
      	<td><input type="radio" name="option"  value="large" /></td>
        <td>Large</td>
        <td>8 GB</td>
        <td>750 Gb</td>
        <td>4</td>
      </tr>
      <tr>
      	<td><input type="radio"  name="option" value="xlarge" /></td>
        <td>xLarge</td>
        <td>16 GB</td>
        <td>1000 Gb</td>
        <td>8</td>
      </tr>
    </tbody>
  </table>
</div>

<input type="submit" name="submit" value="Submit" class="btn btn-primary btn-block">
		
		</form>
      </div>
     
    </div>

  </div>
</div>



</body>
</html>
