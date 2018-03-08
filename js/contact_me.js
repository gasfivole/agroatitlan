$(function() {

    $("input,textarea").jqBootstrapValidation({
        preventSubmit: true,
        submitError: function($form, event, errors) {
            // additional error messages or events
        },
        submitSuccess: function($form, event) {
            event.preventDefault(); // prevent default submit behaviour
            // get values from FORM
            var name = $("input#name").val();
            var email = $("input#email").val();
            var phone = $("input#phone").val();
            var message = $("textarea#message").val();
			var captcha = $("[name='g-recaptcha-response']").val();
            var firstName = name; // For Success/Failure Message
            // Check for white space in name for Success/Fail message
            if (firstName.indexOf(' ') >= 0) {
                firstName = name.split(' ').slice(0, -1).join(' ');
            }
			
			if(captcha==""){
				alert('Verificar el formulario');
			}else{
				$.ajax({
					url: "./wp-content/themes/agroatitlan/mail/contact.php",
					type: "POST",
					data: {
						name: name,
						phone: phone,
						email: email,
						message: message,
						captcha: captcha,
					},
					cache: false,
					success: function(data) {
						if (data == 'ok') {
							success();
						} else {
							error();
						}
					},
					error: function() {
						error();
					},
				})
			}
        },
        filter: function() {
            return $(this).is(":visible");
        },
    });

    $("a[data-toggle=\"tab\"]").click(function(e) {
        e.preventDefault();
        $(this).tab("show");
    });

    function success(){
        $('#message-success').show();

        //clear all fields
        $('#contactForm').trigger("reset");
		
		setTimeout(function(){ $('#message-success').hide(); grecaptcha.reset();}, 3000);
    }

    function error() {
        // Fail message
        $('#message-error').show();

        //clear all fields
        $('#contactForm').trigger("reset");
		setTimeout(function(){ $('#message-success').hide(); grecaptcha.reset();}, 3000);
    }
});