var $j = jQuery.noConflict();
$j(document).ready(function() {
   $j("#loginForm").validate({
      rules: {
         email: {
            required: true,
            email: true
         },
         password: {
            required: true,
            minlength: 6
         }
      },
      messages: {
         email: {
           required: "Please enter your email",
           email: "Please enter a valid email address"
         },
         password: {
           required: "Please enter your correct password",
           minlength: "Your password must be at least 6 characters long"
         }
      }
   });
});
