$ (function(){
	var x = $("#msg");
	x.hide();
	
	x.fadeIn("slow","swing");
	//x.animate({top:'9%'},"slow");
	
	x.fadeOut(6000,"swing");
	//x.animate({top:'0%'},"slow");	
})

function initial_proc(user) {
	
  var xhttp = new XMLHttpRequest();
  alert("Please Wait While we create your storage for user="+user);
  xhttp.onreadystatechange = function() {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
     
      myFunction(xhttp);
    }
  };
	xhttp.open("GET","http://127.0.0.1/cgi-bin/initial_proc.py?user="+user, true);

  xhttp.send();
  
}
