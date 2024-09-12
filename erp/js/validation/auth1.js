var $j = jQuery.noConflict();
$j(document).ready(function () {
    $j("#SignupForm").validate({
        rules: {
            name: {
                required: true,
                minlength: 2
            },

            username: {
                required: true,
                minlength: 2
            },

            email: {
                required: true,
            },

            password: {
                required: true,
                minlength: 6
            },

            confirm_password: {
                required: true,
                minlength: 6
            }
        },
        messages: {
            name: {
                required: "Please enter your name",
                minlength: "Your firstname must consist of at least 2 characters"
            },

            username: {
                required: "Please enter your username",
                minlength: "Your firstname must consist of at least 2 characters"
            },

            email: {
                required: "Please enter your email",
                email: "Please enter a valid email address"
            },

            password: {
                required: "Please enter your password",
                minlength: "Your password must be at least 6 characters long"
            },

            confirm_password: {
                required: "Please enter  your repeat password",
                minlength: "Please enter the same password as above"
            },
        }

    });
});