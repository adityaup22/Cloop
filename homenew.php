<!doctype html>
<html>
<head>
<meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
<title>Infamous Cloud</title>
<link rel="stylesheet" href="css/bootstrap.css" />
<link rel='stylesheet' href='font-awesome/css/font-awesome.css'/>
<link rel='stylesheet' href="css/navigation.css" />
<link rel="stylesheet" href="css/homenew.css"/>
<!--<link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">-->


</head>

<body id='mypage'>

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
        
        <li class="active"><a href="#home">HOME</a></li>
        <li><a href="#">SERVICES</a></li>
        <li><a href="#">ABOUT</a></li>
        
        
        <li><a href="#contact">CONTACT</a></li>
        <li ><a href="signin.php" style="color:#22b8eb !important;">HELLO, SIGN IN</a></li>
      </ul>
    </div>
  </div>
</nav>
<!----------------------------------------------navigation over--------------------->
<div id="home" class="jumbotron text-center">
	
    <div id="intro_name">
	<h1>Infamous Cloud <i class="fa fa-cloud slideanim"></i></h1>
    
    <p>The Cloud for Everyone</p>
    </div>
    
    <div class="intro_service">
    <br/> <br/>
        <div class="row" id="info_heading">
        	<div class="col-lg-12">
            	<div class="text-center">
                <h1>We Provide</h1>
                <p style="font-size:20px; letter-spacing:1px;">Different types of services are provided by us. To use click on services tab</p>
                </div>
             </div>
         </div>
         <br/><br/>
        <div class="row" >
         <div class="col-lg-3" id="intro_service1">
         	<i style="font-size:60px;color:#22b8eb;" class="fa fa-tasks"></i>
            <br/>
            <h2>Storage</h2>
            <p>Store your important files and <br/> access then anytime anywhere.</p>
         </div>
         <div class="col-lg-3" id="intro_service2">
         <img height="60" width="60" src="images/devops_blue_icon.svg">
         <br/>
         <h2>Softwares</h2>
         <p>Access different softwares on pay per use method.</p>
         </div>
         <div class="col-lg-3" id="intro_service3">
         	<img height="60" width="60" src="images/infrastructure_blue_icon.svg">
            <br/>
            <h2>Infrastructure</h2>
            <p>Experience the power of cloud.<br/>Use complete infrastructure from <br/>anywhere.</p>
         </div>
         <div class="col-lg-3" id="intro_service4">
         	<img height="60" width="60" src="images/big_data_blue_icon.svg">
            <br/>
            <h2>Big Data</h2>
            <p>Have distributed computing on your hand with our big data services. <br/>Create, Deploy</p>
         </div>   
        </div>
        <div class="row">
        	<div class="col-lg-12">
            <br/>
            	<button class="btn btn-danger btn-lg" id="xp"  href="services.php">Sign Up for Cloud</button>
            </div>
        </div>
    </div>
    
</div>

<!---------------------------------------------//Jumbotron over---------------------->
<div id="about" class="container-fluid text-center">
	<h1 class="text-center">ALL YOUR SERVICES</h1><hr/>
    <div class="row">
    	<div class="col-lg-4">
        	<i class="fa fa-lock icon"></i>
            <h2> Secure</h2>
            <p>All your data is safe and secure in the cloud.</p>
        </div>
        <div class="col-lg-4"><i class="fa  fa-check-circle-o icon"></i>
        <h2>Updated</h2>
        <p>All the software you use is up to date.</p>
        </div>
        <div class="col-lg-4">
        	<i class="fa fa-clone icon"></i>
            <h2>Isolated</h2>
            <p>Each user gets isolated resourse so the there is no collision of data.</p>
        </div>
    </div>
    
</div>

<!------------------------------------------------------ About section over -------------------------------------->


<div class="container-fluid bg-white " id="who">
<h1>Who Can Use Cloud ?</h1><hr/>
	
    <div class="row text-center">
    	<div class="col-lg-4">
        	<i class="fa  fa-user-secret icon "></i>
        	<h2 style="color:red;">Individuals</h2>
            <p>You can use our cloud for your personal storage or can use resources for infrastructure.</p>
        </div>
        
        <div class="col-lg-4">
        	<i class="fa fa-users icon"></i>
        	<h2 style="color:#22b8eb;">Communities</h2>
            <p>Different communities which work on open source pojects use cloud for centralised storage or source code management.</p>
        </div>
        
        <div class="col-lg-4">
        	<i class="fa fa-sitemap icon"></i>
        	<h2 style="color:green;">Organisations</h2>
            <p>Organisations can also use cloud to increase their capacity of resources. Use hadoop services to work in distributed environment.</p>
        </div>
    
    </div>
    
</div>


<div id="contact" class="container-fluid text-center">
  <h2 class="text-center">CONTACT</h2>
  <div class="row">
    <div class="col-sm-5">
      <p>Contact us and we'll get back to you within 24 hours.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> Jaipur ,India</p>
      <p><span class="glyphicon glyphicon-phone"></span>+91 7597208375</p>
      <p><span class="glyphicon glyphicon-envelope"></span>infamouscloud@gmail.com</p> 
    </div>
    <div class="col-sm-7">
      <div class="row">
        <div class="col-sm-6 form-group slideanim">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group slideanim">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group slideanim">
          <button class="btn btn-primary pull-right" type="submit">Send</button>
        </div>
      </div> 
    </div>
  </div>
  <button class="btn btn-danger btn-lg" data-toggle='modal' data-target='#signUpModal' data-backdrop='true' >Sign up for Cloud</button>
</div>







<!------------------------------------------------ contact over --------------------------------------------->
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
            <input type='submit' name='signup' value="Sign Up" class='btn btn-my btn-block'>
		</form>
      </div>
     
    </div>

  </div>
</div>

<!--------------------------------------      End of modal     ----------------------------->

<footer class="container-fluid text-center">
  <a href="#mypage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
   
</footer>
</body>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>

<!--<script src="http://maps.googleapis.com/maps/api/js"></script> -->

<script src="js/homenew.js"></script>
</html>
