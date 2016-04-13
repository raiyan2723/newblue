// When the browser is ready...
  $(function() {
  
    // Setup form validation on the #register-form element
    $("#register-form").validate({
    
        // Specify the validation rules
        rules: {
            firstname: "required",
            lastname: "required",
			address: "required",
			c_email:"required",
            email: {
						required: true,
						email: true
					},
			emailConfirm: {
            equalTo: "#email"
        },
            phone: {
                required: true,
                minlength: 10
            },
			agree: "required"
        },
		
        
        // Specify the validation error messages
        messages: {
            firstname: "Please enter your first name",
            lastname: "Please enter your last name",
			  c_email: "Please confirm your email",
			address: "Please enter your last name",
            phone: {
                required: "Please provide a Phone No.",
                minlength: "Your Phone No. must be at least 10 characters long"
            },
            email: "Please enter a valid email address",
			emailConfirm:"Email Does Not Match",
            agree: "Please accept our policy"
        },
        
        submitHandler: function(form) {
            form.submit();
        }
    });

  });