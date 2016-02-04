

	//--------------------------Javascript code---------------------

/*this is a ajax code which brings the instances available for user*/
/*
function loadthis() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
      
	// myfunc(xhttp);
		response=xhttp.responseXML;	 
	  var os = response.getElementsByTagName("OS");
	  alert(os[0].getElementsByTagName("TITLE")[0].childNodes[0].nodeValue)
	  
		if(os.length ===0){
			var para =document.createElement("p");
			var data =document.createTextNode("No Instances are available");
			para.appendChild(data);
			var division = document.getElementById("main");
			division.appendChild(para);
			}
	  
	  if(os.length > 0){
		  var table="<tr><th>Instance name</th><th>IP address</th><th>Size</th><th>status</th></tr>";
		  alert("yes")
		  var i;
		  
		  for(i=0;i<=os.length;i++){
			  	elem = os[i]
		  		var title = elem.getElementsByTagName("TITLE")[0].childNodes[0].nodeValue;
		  		var status = elem.getElementsByTagName("STATUS")[0].childNodes[0].nodeValue;
				var ip = elem.getElementsByTagName("IP")[0].childNodes[0].nodeValue;
				var size=elem.getElementsByTagName("SIZE")[0].childNodes[0].nodeValue;
				
				alert(title+size+ip+status)
				 
			/*	//Creating element for title and status//
				var thumb =document.createElement("div");
				//var data = document.createTextNode("" +title+" is "+status)
				//thumb.appendChild(data);
				var division = document.getElementById("main");
				division.appendChild(thumb);
				
				//adding css to the created element//
				var attr1 = document.createAttribute("class");
				attr1.value = "thumbnailnew";
				thumb.setAttributeNode(attr1);
				
				//adding some other attributes//
				var attr2 = document.createAttribute("data-toggle");
				attr2.value="tooltip";
				thumb.setAttributeNode(attr2);
				
				var attr3 = document.createAttribute("data-placement");
				attr3.value="left";
				thumb.setAttributeNode(attr3);
				
				var attr4 = document.createAttribute("title");
				attr4.value=""+title+" is "+status;
				thumb.setAttributeNode(attr4);
				*/
				
	/*			
				table += "<tr><td>"+title+"</td><td>"+ip+"</td><td>"+size+"</td><td>"+status+"</td></tr>" 
			
		  	}//end of for loop
			
			document.getElementById("instancetable").innerHTML = table;
		  }//end of if 
	 
    }
  };
  xhttp.open("GET", "ajaxfiles/instances.xml", true);
  xhttp.send();
}*/

function loadthis(user) {
	var username = user;
  var xhttp = new XMLHttpRequest();
  
  xhttp.onreadystatechange = function() {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
     
      myFunction(xhttp);
    }
  };
	xhttp.open("GET",username+".xml", true);//file managed by python dev

  xhttp.send();
}

//---------------------------- End of ajax function----------------//


//-------------------------function to handle ajax xml response data------------//
function myFunction(xml) {
  var i;
  var xmlDoc = xml.responseXML;
  var os = xmlDoc.getElementsByTagName("OS");
  if(os.length ===0){
			var para =document.createElement("p");
			var data =document.createTextNode("No Instances are available");
			para.appendChild(data);
			var division = document.getElementById("main");
			division.appendChild(para);
			}
	  
	  if(os.length > 0){
  
  var table="<tr><th>Title</th><th>IP Address</th><th>Size</th><th>Status</th><th></th></tr>";
  
  for (i = 0; i <os.length; i++) { 
    table += "<tr><td >" +
    os[i].getElementsByTagName("TITLE")[0].childNodes[0].nodeValue +
    "</td><td>" +
    os[i].getElementsByTagName("IP")[0].childNodes[0].nodeValue + "</td><td>" +
	os[i].getElementsByTagName("SIZE")[0].childNodes[0].nodeValue +"</td><td>" +
	 os[i].getElementsByTagName("STATUS")[0].childNodes[0].nodeValue +
	 "</td><td><a href='"+os[i].getElementsByTagName("SOURCE")[0].childNodes[0].nodeValue +"' target='_blank' class='btn-primary launch'>Launch Instance</a></td></tr>";// source of the instance is set by python script in the file...
	
  		}//end of for loop
  document.getElementById("instancetable").innerHTML = table;
  	}//enf of if loop
  
}//------------------end of myFunction-------------//
 
 
 


