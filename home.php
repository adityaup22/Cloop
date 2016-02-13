<?php require_once('session.php'); ?>
<!doctype html>
<html>
<head>
<meta charset='utf-8'>
<meta name='viewport'  content='width=device-width,initial-scale=1'>
<title>Home</title>
<link rel='stylesheet' href='css/bootstrap.css'/>

<link rel='stylesheet' href='font-awesome/css/font-awesome.css' />
<link rel='stylesheet' href='css/home.css' />
<script src="js/jquery.js" ></script>
<script src="js/home.js"></script>
<script src="js/bootstrap.js"></script>
</head>

<body>
	
<!------ alert msgs------------->
   

 
 <?php
	if(isset($_SESSION['not']))
			{
			echo "
			<div class='alert alert-success fade in myclass' id='msg'>
			<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
			<strong>Not Logged In!</strong>
			</div>";
			unset($_SESSION['not']);
			}
  
  //---------------------------logout msg-----------------------
    if(isset($_SESSION['logout']))
			{
			echo "
			<div class='alert alert-success fade in myclass' id='msg'>
			<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
			<strong>Successfully Logged Out!</strong>
			</div>";
			unset($_SESSION['logout']);
    
			}
//---------------------------login failure------------------
	if(isset($_SESSION['failure_login']))
			{
			echo "
			<div class='alert alert-success fade in myclass' id='msg'>
			<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
			<strong>Wrong Credentials!</strong>
			</div>";
			unset($_SESSION['failure_login']);
    
			}
	
	if(isset($_SESSION['user_present']))
			{
			echo "
			<div class='alert alert-success fade in myclass' id='msg'>
			<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
			<strong>User already present, try another !!</strong>
			</div>";
			unset($_SESSION['user_present']);
    
			}
	
	if(isset($_SESSION['error']))
			{
			echo "
			<div class='alert alert-success fade in myclass' id='msg'>
			<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
			<strong>Something is not right,try later !!</strong>
			</div>";
			unset($_SESSION['error']);
    
			}
			
	
			
			
  ?>
  


<!--------------------->         

 <nav class='navbar navbar-inverse navbar-fixed-top' role='navigation'>
            <!--          Brand and toggle get grouped for better mobile display          -->
            <div class='navbar-header'>
                <button type='button' class='navbar-toggle' data-toggle='collapse' data-target='.collapse'>
                    <span class='sr-only'>Expand</span>
                    <span class='icon-bar'></span>
                    <span class='icon-bar'></span>
                    <span class='icon-bar'></span>
                </button>
                <a class='navbar-brand' href='home.html'><span style='color:white; '><span style='color:#FC0'>I</span>nfamous <span style='color:#F40A03'>C</span>loud</span></a>
               </div>
               <div class='navbar-collapse collapse' >
               
      <ul class='nav navbar-nav navbar-right'>
        <li class='btn-primary' style='color:white; border-radius:6px;'><a href='#' style='color:white;'>Home</a></li>
        <li><a href='services.php'>Services</a></li>
       
       
       <!--Changed -->
       <?php
       if(!logged_in())
       {
        echo "<li class='dropdown'>
                    <a href='#' class='dropdown-toggle' data-toggle='dropdown'><i class='fa fa-user'></i> Login <b class='caret'></b></a>
                    
                    <ul class='dropdown-menu  message-dropdown'>
                      <li class='message-preview'> 
                      
                      <!---------------  Container,row,col ---------------------------->
                      <div class='container-fluid gd-container'>
                      <div class='row'>
                      <div class='col-lg-12'>
                      <div class='header' style='padding:10px 20px;'>
                      <h4><span class='glyphicon glyphicon-lock'></span>Login</h4>
                      </div>
                  
                      
                      <!-----------------    Login body    ----------------->
                      <div class='login-body'>
                      <form action='login.php' role='form' method='post'>
                       <div class='form-group'>
                       <label for='uname' ><span class='glyphicon glyphicon-user'></span>Username</label>
                       	<input type='text' class='form-control' placeholder='Enter email' name='username' required id='uname'>
                        </div>
                        
                        <div class='form-group'>
                        <label for='pwd' ><span class='glyphicon glyphicon-eye-open'></span>Password</label>
                       	<input type='password' class='form-control' placeholder='Password' name='password' required id='pwd'>
                        </div>
                        <div class='divider'></div>
                        <div class='form-group'>
                        <button type='submit' class='btn btn-success btn-block' value='submit' name='submit'><span class='glyphicon glyphicon-off'></span>Login</button>
                        </div>
                        </form>
                        
                        </div>
                        <!--------------- end of login body  ----------->
                        </div>
                        </div>
                        </div>
                        <!--------------- end of col,row, container  ----------->
                        </li>
                    </ul>
                </li> "; 
       }
       ?>
       <!-- Newly  Added-->
       
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
       
       
       
       
       <!--Till Here -->
       
       
       
       
       
       <!--Changed -->
       
       
        <li><a href='#myModal' data-toggle='modal' data-backdrop='true'   style='padding-right:50px;'>Signup</a></li> 
      </ul>
    </div>
      <!---------------------------------      end of navbar collapse ------------------------>        
                </nav>



<!---------------------------------------    modal for sign up     -------------------------------->


<div id='myModal' class='modal fade' role='dialog'>
  <div class='modal-dialog'>

    <!-- Modal content-->
    <div class='modal-content'>
      <div class='modal-header' style='padding:35px 50px;'>
        <button type='button' class='close' data-dismiss='modal'>&times;</button>
        <h2 ><span class='glyphicon glyphicon-lock'></span>Sign Up </h2>
      </div>
      <div class='modal-body'>
      	<form action='new_user.php' id='signup' method='post'>
        <div class='container-fluid'>
        	<div class='form-group'>
 				<label for='uname'>Full name:</label>
                <input type='text' class='form-control' required name='username' id='uname'>
			</div>
            
            <div class='form-group'>
           		<label for='email' >Email:</label>
                <input type='email' class='form-control'  required name='email' id='email'> 
            </div>
            
            <div class='form-group'>
            	<label for='pwd'>Enter a password:</label>
                <input type='password' class='form-control' required name='pwd' id='pwd'>
            </div>
            
            <div class='form-group'>
            	<label for='cpwd' >Confirm password:</label>
                <input type='password' class='form-control' required name='cpwd' id='cpwd'>
            </div>
            </div>
            <input type='submit' name='signup' class='btn btn-success btn-block'>
		</form>
      </div>
     
    </div>

  </div>
</div>

<!--------------------------------------      End of modal     ----------------------------->
    

   
  


			
              
</body>
</html>
