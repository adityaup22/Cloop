
function loadthis() {
	
  var xhttp = new XMLHttpRequest();
  
  xhttp.onreadystatechange = function() {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
     
      myFunction(xhttp);
    }
  };
	xhttp.open("GET","ajaxfiles/files.xml", true);//file managed by python dev

  xhttp.send();
}




function myFunction(xml) {
  var i;
  var xmlDoc = xml.responseXML;
  var file = xmlDoc.getElementsByTagName("FILE");
  
	  
	 
  
  var table="<tr><th>Name</th><th>Owner</th><th>Last Modified</th><th>Size</th></tr>";
  
  for (i = 0; i <file.length; i++) { 
    table += "<tr><td >" +
    file[i].getElementsByTagName("NAME")[0].childNodes[0].nodeValue +
    "</td><td>" +
    file[i].getElementsByTagName("OWNER")[0].childNodes[0].nodeValue + "</td><td>" +
	file[i].getElementsByTagName("MODIFIED")[0].childNodes[0].nodeValue +"</td><td>" +
	 file[i].getElementsByTagName("SIZE")[0].childNodes[0].nodeValue 
  		}//end of for loop
  document.getElementById("file").innerHTML = table;

  
}//------------------end of myFunction-------------//