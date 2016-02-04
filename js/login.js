$(function(){
	
		var x = $("#main");
		var y = $("#one");
		var z = $("#two");
		var t = $("#new");
		var s = $('#signup');
		var ts = $("#toggle-signup");
		
		y.hide();
		z.hide();
		x.hide();
		x.show("slow");
		x.animate({top: '30%'},800);
		x.queue(function(){
				t.animate({left:"35%"},1000);
				y.show(2000);
			z.show(2000);
			x.dequeue();
			
			});
		
		s.hide();
		ts.click(function() {
			s.show("slow");
			
			});
});