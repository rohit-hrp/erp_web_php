var $j = jQuery.noConflict();
$j(document).ready(function() {
   $j("#loginForm").validate({
      rules: {
         email: {
            required: true,
            email: true,
            minlength: 3
         },
         password: {
            required: true,
            minlength: 6
         }
      }
   });
});
