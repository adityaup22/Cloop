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
	
	})//main funtion
	


