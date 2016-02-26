<?php require_once('session.php');
require_once('connection.php');
confirm_logged_in();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>StorageBox</title>
<meta name='viewport'  content='width=device-width,initial-scale=1'>
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/sb-admin.css">
<link rel='stylesheet' href='font-awesome/css/font-awesome.css'/>
<link rel="stylesheet" href="css/storage.css">

<!-- CSS to style the file input field as button and adjust the Bootstrap progress bars -->
<link rel="stylesheet" href="css/jquery.fileupload.css">
<link rel="stylesheet" href="css/jquery.fileupload-ui.css">
<!-- CSS adjustments for browsers with JavaScript disabled -->
<noscript><link rel="stylesheet" href="css/jquery.fileupload-noscript.css"></noscript>
<noscript><link rel="stylesheet" href="css/jquery.fileupload-ui-noscript.css"></noscript>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/storage.js"></script>

</head>

<body onchange=<?php echo "\"refresh_contents('{$_SESSION['username']}')\"";?>>

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
                
             
                <a class='navbar-brand' href='index.html'><span style='color:white; '><span style='color:#FC0'>Ez</span><span style='color:#F40A03'>C</span>loud</span></a>
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
                	 <li  >
                   		<div class="container ">
                        	<button class="btn btn-lg btn-info btn-create " >New <i class="caret"></i></button>
                            
                        </div>
                        
                    </li>
                    <li class="sidemenu active" id="box" >
                        <a href='#'><i class='fa fa-fw  fa-folder-open'></i> My Box</a>
                    </li>
                    <li class="sidemenu" id="shared">
                        <a href='#'><i class='fa fa-fw fa-users'></i> Shared With me</a>
                    </li>
                    <li class="sidemenu" id="recycle">
                        <a href='#'><i class='glyphicon glyphicon-trash'></i> DustBin</a>
                    </li>
                    
                   
                   
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>





<!-----------------------------------------------------Navigation over ----------------------->


<div class="container-fluid">
<iframe class="main" src="files.php"></iframe>
</div>


<!-------------new file , folder division----------------------->
<div class="mycontainer container-fluid text-center " >

      
                      
                     
                      <ul class="nav myul"> 
                      <li><br/></li>
                      <li><button class="btn file-upload" id="new-folder"  data-toggle='modal' data-target="#myModal" data-backdrop="static"><i class='fa fa-fw  fa-folder'></i>Create Folder</button></li>
                      <li><br/></li>
                      <!---------<form id="new" action="fileupload.php" method="post" enctype="multipart/form-data">--->
                     <li><div class="newfile-div"><i class="fa fa-plus"></i> New File</div></li>

                      </ul>
                      <!-----</form>--------->
                      </div>
                           
                
</div>
<!------------------------newfile,folder division end------------>

<!---------modal for new folder--------------------------->

<div id='myModal' class='modal fade' role='dialog'>
  <div class='modal-dialog modal-sm'>

    <!-- Modal content-->
    <div class='modal-content'>
      <div class='modal-header' style='padding:15px 20px;'>
        <button type='button' class='close' data-dismiss='modal'>&times;</button>
        <h4 ><i class="fa fa-plus"></i>New Folder </h4>
      </div>
      <div class='modal-body'>
      	<form action='' id='' method='post'>
        
        	<input type="text" class="form-control" placeholder="Enter Name of folder">
            <br/>
            <button type="submit" class="btn btn-sm btn-primary  " id="mybutton">Create </button>
            <button type='button' class='btn btn-sm btn-default' id="mybutton2" data-dismiss='modal'>Cancel</button>
		</form>
      </div>
     
    </div>

  </div>
</div><!----------------------------------------------- new folder modal end--------------------------------->

<div id='myModal2' class='modal fade' role='dialog'>
  <div class='modal-dialog modal-lg'>

    <!-- Modal content-->
    <div class='modal-content'>
      <div class='modal-header' style='padding:15px 20px;'>
        <button type='button' class='close' data-dismiss='modal'>&times;</button>
        <h4 class="text-center" ><i class="fa fa-check-circle"></i>Selected Files</h4>
      </div>
      <div class='modal-body'>
      	
        <div class="container">
<!-- The file upload form used as target for the file upload widget -->
    <form id="fileupload" action="upload.php" method="POST" enctype="multipart/form-data">
        <!-- Redirect browsers with JavaScript disabled to the origin page -->
        <noscript><input type="hidden" name="redirect" value="https://blueimp.github.io/jQuery-File-Upload/"></noscript>
        <!-- The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload -->
        <div class="row fileupload-buttonbar">
            <div class="col-lg-5">
                <!-- The fileinput-button span is used to style the file input field as button -->
                <span class="btn btn-success fileinput-button">
                    <i class="glyphicon glyphicon-plus"></i>
                    <span>Add files...</span>
                    <input type="file" name="files[]" multiple>
                </span>
                <button type="submit" class="btn btn-primary start">
                    <i class="glyphicon glyphicon-upload"></i>
                    <span>Start upload</span>
               
                <span class="fileupload-process"></span>
            </div>
            
            
            
            <!-- The global progress state -->
            <div class="col-lg-4 fileupload-progress fade">
                <!-- The global progress bar -->
                <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100">
                    <div class="progress-bar progress-bar-info" style="width:0%;"></div>
                </div>
                <!-- The extended global progress state -->
                <div class="progress-extended">&nbsp;</div>
            </div>
        </div>
        <div class="row">
        <!-- The table listing the files available for upload/download -->
        <div class="col-md-9">
        <h2 class="text-center" id="drop-text"><i class="fa fa-arrow-circle-o-down"></i> Drop here....</h2>
        <table role="presentation" class="table table-striped table-responsive mytable"><tbody class="files"></tbody></table>
    </div>
    </div>
    </form>

</div><!----------------------  container end-------------->
        
      </div>
     
    </div>

  </div>
</div><!------------------------------------------- modal selectedfiles end ---------------------->




</div><!--------------------Wrapper end---------->

<div id="initial-loader" class="text-center">
	<br/>
    <br/><br/><br/><br/><br/><br/>
    
    <br/>
	<h3  style="color:#fff;">Loading...</h3><img src="images/gears.gif" />

</div>

<script>

$(function(){
	
	$('#fileupload').bind('fileuploaddragover',function(){
		
		//alert("ddd");
		$("#myModal2").modal('show');
				});
				
	$('#fileupload')
    .bind('fileuploadadd', function (e, data) {
			$("#drop-text").fadeOut(1000);
		})			
	
				
	});


</script>

<script id="template-upload" type="text/x-tmpl">
{% for (var i=0, file; file=o.files[i]; i++) { %}
    <tr class="template-upload fade">
        <td>
            <span class="preview"></span>
        </td>
        <td>
            <p class="name">{%=file.name%}</p>
            <strong class="error text-danger"></strong>
        </td>
        <td>
            <p class="size">Processing...</p>
            <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0"><div class="progress-bar progress-bar-info" style="width:0%;"></div></div>
        </td>
        <td>
            {% if (!i && !o.options.autoUpload) { %}
                <button class="btn btn-primary btn-sm start" disabled>
                    <i class="glyphicon glyphicon-upload"></i>
                    <span>Start</span>
                </button>
            {% } %}
            {% if (!i) { %}
                <button class="btn btn-warning btn-sm cancel">
                    <i class="glyphicon glyphicon-ban-circle"></i>
                    <span>Cancel</span>
                </button>
            {% } %}
        </td>
    </tr>
{% } %}
</script>
<!-- The template to display files available for download -->


<script id="template-download" type="text/x-tmpl">
/*{% for (var i=0, file; file=o.files[i]; i++) { %}
    <tr class="template-download fade">
        <td>
            <span class="preview">
                {% if (file.thumbnailUrl) { %}
                    <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" data-gallery><img src="{%=file.thumbnailUrl%}"></a>
                {% } %}
            </span>
        </td>
        <td>
            <p class="name">
                {% if (file.url) { %}
                    <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" {%=file.thumbnailUrl?'data-gallery':''%}>{%=file.name%}</a>
                {% } else { %}
                    <span>{%=file.name%}</span>
                {% } %}
            </p>
            {% if (file.error) { %}
                <div><span class="label label-danger">Error</span> {%=file.error%}</div>
            {% } %}
        </td>
        <td>
            <span class="size">{%=o.formatFileSize(file.size)%}</span>
        </td>
        <td>
            {% if (file.deleteUrl) { %}
                <button class="btn btn-danger delete" data-type="{%=file.deleteType%}" data-url="{%=file.deleteUrl%}"{% if (file.deleteWithCredentials) { %} data-xhr-fields='{"withCredentials":true}'{% } %}>
                    <i class="glyphicon glyphicon-trash"></i>
                    <span>Delete</span>
                </button>
                <input type="checkbox" name="delete" value="1" class="toggle">
            {% } else { %}
                <button class="btn btn-warning btn-sm cancel">
                    <i class="glyphicon glyphicon-ban-circle"></i>
                    <span>Cancel</span>
                </button>
            {% } %}
        </td>
    </tr>
{% } %}
*/</script>





<!-- The jQuery UI widget factory, can be omitted if jQuery UI is already included -->
<script src="js/vendor/jquery.ui.widget.js"></script>
<script src="//blueimp.github.io/JavaScript-Templates/js/tmpl.min.js"></script>
<!-- The Load Image plugin is included for the preview images and image resizing functionality -->
<script src="//blueimp.github.io/JavaScript-Load-Image/js/load-image.all.min.js"></script>
<!-- The Canvas to Blob plugin is included for image resizing functionality -->
<script src="//blueimp.github.io/JavaScript-Canvas-to-Blob/js/canvas-to-blob.min.js"></script>
<!-- Bootstrap JS is not required, but included for the responsive demo navigation -->


<script src="js/jquery.iframe-transport.js"></script>
<!-- The basic File Upload plugin -->
<script src="js/jquery.fileupload.js"></script>
<!-- The File Upload processing plugin -->
<script src="js/jquery.fileupload-process.js"></script>
<!-- The File Upload image preview & resize plugin -->
<script src="js/jquery.fileupload-image.js"></script>
<!-- The File Upload audio preview plugin -->
<script src="js/jquery.fileupload-audio.js"></script>
<!-- The File Upload video preview plugin -->
<script src="js/jquery.fileupload-video.js"></script>
<!-- The File Upload validation plugin -->
<script src="js/jquery.fileupload-validate.js"></script>
<!-- The File Upload user interface plugin -->
<script src="js/jquery.fileupload-ui.js"></script>
<!-- The main application script -->
<script src="js/main.js"></script>
<!-- The XDomainRequest Transport is included for cross-domain file deletion for IE 8 and IE 9 -->
<!--[if (gte IE 8)&(lt IE 10)]>
<script src="js/cors/jquery.xdr-transport.js"></script>
<![endif]-->


</body>
</html>
