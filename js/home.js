$ (function(){
	var x = $("#msg");
	x.hide();
	
	x.fadeIn("fast","swing");
	x.animate({top:'9%'},"slow");
	
	x.fadeOut(2000,"swing");
	x.animate({top:'0%'},"slow");	
})

