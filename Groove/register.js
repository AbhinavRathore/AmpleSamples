$().ready(function() {
    
	$("#signupform").validate({
		
	rules:{
		name:
		{
			required:true,
			minlength:2	
		},
		password:{
			required: true,
			minlength: 8
		},
		cpassword:{
			required: true,
			minlength: 8,
			equalTo: "#password"
		},
		email:{
			required: true,
			email: true

	},
	messages:{
		name: {
			required:"Please enter your name",
			minlength: "Your name must contain atleast 2 characters"},
			password:
			{
				required:"Please provide a password",
				minlength:"Password must be atleast 5 characters long"},
				cpassword:
				{required:"Please provide a password",
				minlength:"Password must be atleast 5 characters long",
				equalTo:"Password dont match"},
	            
	}
							
		
	
	}
	
	
	});
});