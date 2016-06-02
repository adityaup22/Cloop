<!doctype html>
<html>
<head>
<meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
<title>INfamous Cloud - Login</title>
<link rel="stylesheet" href="css/bootstrap.css" />
<link rel='stylesheet' href='font-awesome/css/font-awesome.css'/>
<link rel='stylesheet' href="css/navigation.css" />
<link rel="stylesheet" href="css/signin.css" />
</head>

<body>

<nav class="navbar navbar-default navbar-fixed-top ">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" href="homenew.php">Infamous Cloud<i class="fa fa-cloud"></i></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        
        <li><a href="homenew.php">HOME</a></li>
      </ul>
    </div>
  </div>
</nav>
<!----------------------------------------------navigation over--------------------->
<div class="container-fluid my-container-fluid">
		<div class="container">
        	<form action="login.php" method="POST"  role="form" >
            	<div class="form-group-lg">
                	<label for="id">Username</label>
                    <input name="username" type="text" id="id" class="form-control">
                </div>
                <div class="form-group-lg">
                	<label for="pwd">Password</label>
                    <input name="password" type="password" id="pwd" class="form-control">
                </div>
                <br/>
                <div class="form-group-lg text-center">
                	<input type="submit" name="submit" value="Sign In" class="btn btn-lg btn-warning form-control">
               		<button type="button" class="btn btn-link" data-toggle='modal' data-target='#signUpModal' data-backdrop='true'>Not a member yet</button>
                    <button type="button" class="btn btn-link disabled">Forgot Password</button>
            	</div>
            </form>
        </div>

</div>

<!---------------------------------------    modal for sign up     -------------------------------->


<div id='signUpModal' class='modal fade' role='dialog'>
  <div class='modal-dialog'>

    <!-- Modal content-->
    <div class='modal-content'>
      <div class='modal-header' style='padding:35px 50px; background-color:#22b8eb;'>
        <button type='button' class='close' data-dismiss='modal'>&times;</button>
        <h2 class="text-center"><span class='fa fa-user-plus'></span> SIGN UP </h2>
      </div>
      <div class='modal-body'>
      	<form action='new_user.php' id='signup' method='post'>
        
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
            
            <input type='submit' name='signup' value="Sign Up" class='btn btn-my btn-block'>
		</form>
      </div>
     
    </div>

  </div>
</div>

<!--------------------------------------      End of modal     ----------------------------->

<div class="container-fluid footer text-center">Copyright &copy; Infamous.com</div>

<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>

</body>
</html>
