$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $("footer a[href='#mypage']").on('click', function(event) {

  // Prevent default anchor click behavior
  event.preventDefault();

  // Store hash
  var hash = this.hash;

  // Using jQuery's animate() method to add smooth page scroll
  // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
  $('html, body').animate({
    scrollTop: $(hash).offset().top
  }, 900, function(){

    // Add hash (#) to URL when done scrolling (default click behavior)
    window.location.hash = hash;
    });
  });
  
  
  //intro animation
  var brand =$('.navbar-brand')
  var name = $("#intro_name");
  var heading =$('#info_heading');
  var one = $("#intro_service1");
  var two =$("#intro_service2");
  var three =$("#intro_service3");
  var four =$("#intro_service4");
  var xp = $("#xp");
 
  brand.hide();
  name.hide();
 heading.hide();
 one.hide();
 two.hide();
 three.hide();
 four.hide();
 xp.hide();
  
  name.fadeIn('slow')

 
	if (window.matchMedia('(min-width: 767px)').matches) {
  name.queue(function(){
	  
	  name.css('transition','transform .5s');
	  name.css('transform','scale(1.2,1.2)')
	  
	  name.dequeue();
	  });}
	name.animate({top:'20%'},500).delay(500).slideUp(1000,function(){
															brand.slideDown(500,function(){
																				introloop();
																			});
																});
	 function introloop(){
		 heading.fadeIn(1000,function(){
			 					one.show('fast');
								if (window.matchMedia('(min-width: 767px)').matches) {
								one.queue(function(){
									 one.css('transition','transform .5s');
								  	 one.css('transform','scale(1.2,1.2)');
									 one.dequeue();
									 });}
								two.delay(700).show('fast');
								if (window.matchMedia('(min-width: 767px)').matches) {
								two.queue(function(){
									 two.css('transition','transform .5s');
								  	 two.css('transform','scale(1.2,1.2)');
									 two.dequeue();
									 });}
									 
								three.delay(1400).show('fast');
								
								if (window.matchMedia('(min-width: 767px)').matches) {
								three.queue(function(){
									 three.css('transition','transform .5s');
								  	 three.css('transform','scale(1.2,1.2)');
									 three.dequeue();
									 });}
									 
								four.delay(2100).show('fast');
								if (window.matchMedia('(min-width: 767px)').matches) {
								four.queue(function(){
									 four.css('transition','transform .5s');
								  	 four.css('transform','scale(1.2,1.2)');
									 four.dequeue();
									 });}
								xp.delay(2800).fadeIn(2000);
								});
		 
		 }
	/*one.show(1000);
	one.queue(function(){
		 one.css('transition','transform .5s');
	  one.css('transform','scale(1.2,1.2)')
		})*/
	if (window.matchMedia('(max-width: 767px)').matches) {	
		$('#send').removeClass('.pull-right');
	}	
		
})

//------------------------------------------------------------------------ jquery ends---------------------------------
