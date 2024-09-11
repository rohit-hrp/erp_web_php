var $j = jQuery.noConflict();
$j(document).ready(function () {
  $j("#SignupForm").validate({
    rules: {
      registerName: {
        required: true,
        minlength: 2
      },

      registerUsername: {
        required: true,
        minlength: 2
      },

      registerEmail: {
        required: true,
      },

      registerPassword: {
        required: true,
        minlength: 6
      },

      registerRepeatPassword: {
        required: true,
        equalTo: "#password"
      },

      messages: {
        registerName: {
          required: "Please enter your name",
          minlength: "Your firstname must consist of at least 2 characters"
        },

        registerUsername: {
          required: "Please enter your username",
          minlength: "Your firstname must consist of at least 2 characters"
        },

        registerEmail: {
          required: "Please enter your email",
          email: "Please enter a valid email address"
        },

        registerPassword: {
          required: "Please enter your password",
          minlength: "Your password must be at least 6 characters long"
        },

        registerRepeatPassword: {
          required: "Please enter  your repeat password",
          equalTo: "Please enter the same password as above"
        },
      }
    }
  });
});