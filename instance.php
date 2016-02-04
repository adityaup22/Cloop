<?php require_once('session.php');
require_once('connection.php');
confirm_logged_in();
?>

<!doctype html>
<html>
<head>
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

<body>
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
                        <a href='#'><i class='fa fa-fw fa-desktop'></i> Instance</a>
                    </li>
                    <li>
                        <a href='#'><i class='fa fa-fw fa-bar-chart-o'></i> Stats</a>
                    </li>
                    
                   
                   
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>





<!-----------------------------------------------------Navigation over ----------------------->





<div id='page-wrapper'>

            <div class='container-fluid'>

                <!-- Page Heading -->
                <div class='row'>
                    <div class='col-lg-12'>
                       
                       
                    </div>
                </div>
                <!-- /.row -->
                <div class="container-fluid " id="main">
               <table class="table table-bordered   table-hover table-responsive mytable" id="instancetable">
               
               
               </table>
                </div>

            </div>
            <!-- /.container-fluid -->

        </div>
<!--end of page wrappper-->



</div>
<!--end of wrapper-->



</body>
</html>
