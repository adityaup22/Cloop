$(function(){
	
	var file = $(".mycontainer");//new file and new folder division
	file.hide();
	
	$(".btn-create").click(function(){
		file.toggle();
		});
	
		
	var clicked = "box";
	$(".sidemenu").click(function(e){
			var clicks = e.target.id;
			
			if(clicks === clicked){
					return;
				}
			else{
					
					$("#"+clicked).removeClass("active");
					$("#"+clicks).addClass("active");
					clicked = clicks;
				}//end of else
			
		});
		
		
	$("#newfile").change(function(){
			$("#new").submit();
		});
	
	})//main funtion


function refresh_contents(user) {
	
  var xhttp = new XMLHttpRequest();
  
  xhttp.onreadystatechange = function() {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
     
      myFunction(xhttp);
    }
  };
	alert("refresh contents");

	xhttp.open("GET","http://127.0.0.1/cgi-bin/refresh_contents.py?user="+user, true);//file managed by python dev

  xhttp.send();
}


