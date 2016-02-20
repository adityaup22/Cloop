



function loadthis() {
	
  var xhttp = new XMLHttpRequest();
  
  xhttp.onreadystatechange = function() {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
     
      myFunction(xhttp);
    }
  };
	xhttp.open("GET","http://127.0.0.1/cgi-bin/test_files.py", true);//file managed by python dev

  xhttp.send();
}




function myFunction(xml) {
  var i;
  var xmlDoc = xml.responseXML;
  var file = xmlDoc.getElementsByTagName("FILE");
  
	  
	 
  
  var table="<tr><th>Name</th><th>Owner</th><th>Last Modified</th><th>Size</th><th></th><th></th></tr>";
  
  for (i = 0; i <file.length; i++) { 
  	
  	if(file[i].getElementsByTagName('TYPE')[0].childNodes[0].nodeValue ==="File"){
    table += "<tr><td ><a href='"+ file[i].getElementsByTagName("NAME")[0].childNodes[0].nodeValue+"'><i class='fa fa-file'></i> " +
    file[i].getElementsByTagName("NAME")[0].childNodes[0].nodeValue +
    "</a></td><td>" +
    file[i].getElementsByTagName("OWNER")[0].childNodes[0].nodeValue + "</td><td>" +
	file[i].getElementsByTagName("MODIFIED")[0].childNodes[0].nodeValue +"</td><td>" +
	 file[i].getElementsByTagName("SIZE")[0].childNodes[0].nodeValue +"</td><td><a href='handel.php?"+file[i].getElementsByTagName("NAME")[0].childNodes[0].nodeValue+"'><i class='fa fa-download fa-lg file-option' data-toggle='tooltip' data-placement='top' title='Download'></i></a></td><td><a href='handle.php?'"+file[i].getElementsByTagName("NAME")[0].childNodes[0].nodeValue+"><i class='fa fa-trash fa-lg file-option' data-toggle='tooltip' data-placement='top' title='Delete'></i></td></tr>"
	 
	 }//end of if
	
	
	 else if(file[i].getElementsByTagName('TYPE')[0].childNodes[0].nodeValue ==="Folder"){

		 table += "<tr><td ><i class='fa fa-folder fa-fw fa-lg'></i><a> " +

    file[i].getElementsByTagName("NAME")[0].childNodes[0].nodeValue +
    "</a></td><td>" +
    file[i].getElementsByTagName("OWNER")[0].childNodes[0].nodeValue + "</td><td>" +
	file[i].getElementsByTagName("MODIFIED")[0].childNodes[0].nodeValue +"</td><td>" +
	 file[i].getElementsByTagName("SIZE")[0].childNodes[0].nodeValue+"</td><td> <a href='handle.php?user="+file[i].getElementsByTagName("NAME")[0].childNodes[0].nodeValue+"'>  <i class='fa fa-download fa-lg file-option' data-toggle='tooltip' data-placement='top' title='Download'></i></a></td><td><a href='handel.php?"+file[i].getElementsByTagName("NAME")[0].childNodes[0].nodeValue+"'><i class='fa fa-trash fa-lg file-option' data-toggle='tooltip' data-placement='top' title='Delete'></i></a> </td></tr>"
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
