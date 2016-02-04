
		
		$('#signup').validate({
			
			rules:{
				pwd:{
					required:true,
					minlength:8},
					
					cpwd:{
							equalTo:"#pwd",
							minlength:8
						}
				},
				messages:{
					cpwd:{required:"THe pass",
					equalTo:'Passwords do not match'}
					}
			
			});
	
