



function loadthis() {
	
  var xhttp = new XMLHttpRequest();
  
  xhttp.onreadystatechange = function() {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
     
      myFunction(xhttp);
    }
  };
	xhttp.open("GET","ajaxfiles/test_files.xml", true);//file managed by python dev

  xhttp.send();
}




function myFunction(xml) {
  var i;
  var xmlDoc = xml.responseXML;
  var file = xmlDoc.getElementsByTagName("FILE");
  
	  
	 
  
  var table="<tr><th>Name</th><th>Owner</th><th>Last Modified</th><th>Size</th><th></th><th></th></tr>";
  
  for (i = 0; i <file.length; i++) { 
  	
  	if(file[i].getElementsByTagName('TYPE')[0].childNodes[0].nodeValue ==="File"){
<<<<<<< HEAD
<<<<<<< HEAD
    table += "<tr><td ><a href='"+ file[i].getElementsByTagName("NAME")[0].childNodes[0].nodeValue+"'><i class='fa fa-file'></i> " +
=======
<<<<<<< HEAD
    table += "<a><tr><td ><i class='fa fa-file fa-fw fa-lg'></i><a class='filelist' id="+file[i].getElementsByTagName("NAME")[0].childNodes[0].nodeValue+"> " +
=======
    table += "<tr><td ><a href='#'><i class='fa fa-file'></i> " +
>>>>>>> origin/master
>>>>>>> 109052557d479ecd0b3fe6e0d775c7a8907672ec
=======

    table += "<tr><td ><a href='#'><i class='fa fa-file fa-fw fa-lg'></i> " +

>>>>>>> 75c903bc744d8e89499a7847c2ad5b994814bcc0
    file[i].getElementsByTagName("NAME")[0].childNodes[0].nodeValue +
    "</a></td><td>" +
    file[i].getElementsByTagName("OWNER")[0].childNodes[0].nodeValue + "</td><td>" +
	file[i].getElementsByTagName("MODIFIED")[0].childNodes[0].nodeValue +"</td><td>" +
	 file[i].getElementsByTagName("SIZE")[0].childNodes[0].nodeValue +"</td><td> <i class='fa fa-download fa-lg file-option' data-toggle='tooltip' data-placement='top' title='Download'></i></td><td><i class='fa fa-trash fa-lg file-option' data-toggle='tooltip' data-placement='top' title='Delete'></i></td></tr>"
	 
	 }//end of if
	
	
	 else if(file[i].getElementsByTagName('TYPE')[0].childNodes[0].nodeValue ==="Folder"){

		 table += "<tr><td ><i class='fa fa-folder fa-fw fa-lg'></i><a> " +

    file[i].getElementsByTagName("NAME")[0].childNodes[0].nodeValue +
    "</a></td><td>" +
    file[i].getElementsByTagName("OWNER")[0].childNodes[0].nodeValue + "</td><td>" +
	file[i].getElementsByTagName("MODIFIED")[0].childNodes[0].nodeValue +"</td><td>" +
	 file[i].getElementsByTagName("SIZE")[0].childNodes[0].nodeValue+"</td><td>   <i class='fa fa-download fa-lg file-option' data-toggle='tooltip' data-placement='top' title='Download'></i></td><td><i class='fa fa-trash fa-lg file-option' data-toggle='tooltip' data-placement='top' title='Delete'></i> </td></tr>"
		 }//end of elseif
  		}//end of for loop
  document.getElementById("file").innerHTML = table;

  
}//------------------end of myFunction-------------//



$(function(){
	 $('[data-toggle="tooltip"]').tooltip();
	
	/*$('tr').click(function(e){
			alert('b')
			$("#"+e.target.id).css("background-color","#B4B4B4");
		});*/
	
    
	$(".filelist").click(function(e){
		alert('asdasads')
		})
    
	})
