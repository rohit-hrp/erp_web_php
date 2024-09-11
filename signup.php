<?php require_once "layouts/header.php"; ?>
<?php include('db.php'); ?>

<!-- service section -->
<section class="service_section layout_padding">
    <div class="container ">
        <div class="heading_container heading_center">
            <h2>Signup</h2>
        </div>
        <div class="row">
            <div class="col-md-6 mx-auto">
                <form method="POST" action="signup_logic.php">
                    <!-- Name input -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="registerName">Name</label>
                        <input type="text" id="registerName" name="name" class="form-control" placeholder="Please enter your name" required />
                    </div>

                    <!-- Username input -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="registerUsername">Username</label>
                        <input type="text" id="registerUsername" name="username" class="form-control" required />
                    </div>

                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="registerEmail">Email</label>
                        <input type="email" id="registerEmail" name="email" class="form-control" required />
                    </div>

                    <!-- Password input -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="registerPassword">Password</label>
                        <input type="password" id="registerPassword" name="password" class="form-control" required />
                    </div>

                    <!-- Repeat Password input -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="registerRepeatPassword">Repeat password</label>
                        <input type="password" id="registerRepeatPassword" name="repeat_password" class="form-control" required />
                    </div>

                    <!-- Checkbox -->
                    <div class="form-check d-flex justify-content-center mb-4">
                        <input class="form-check-input me-2" type="checkbox" id="registerCheck" required />
                        <label class="form-check-label" for="registerCheck">
                            I have read and agree to the terms
                        </label>
                    </div>

                    <!-- Submit button -->
                    <button type="submit" class="btn btn-primary btn-block mb-3">Signup</button>
                </form>
                <div class="text-center">
                    <p>A member? <a href="login.php">Login</a></p>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
$(document).ready(function () {
    $("form").validate({
        rules: {
            name: {
                required: true,
                minlength: 2
            },
            username: {
                required: true,
                minlength: 4
            },
            email: {
                required: true,
                email: true
            },
            password: {
                required: true,
                minlength: 6
            },
            repeat_password: {
                required: true,
                equalTo: "#registerPassword"
            },
            registerCheck: {
                required: true
            }
        },
        messages: {
            name: {
                required: "Please enter your name",
                minlength: "Your name must be at least 2 characters long"
            },
            username: {
                required: "Please enter your username",
                minlength: "Your username must be at least 4 characters long"
            },
            email: {
                required: "Please enter your email address",
                email: "Please enter a valid email address"
            },
            password: {
                required: "Please provide a password",
                minlength: "Your password must be at least 6 characters long"
            },
            repeat_password: {
                required: "Please confirm your password",
                equalTo: "Passwords do not match"
            },
            registerCheck: {
                required: "You must agree to the terms"
            }
        },
        errorElement: 'span',
        errorPlacement: function (error, element) {
            error.addClass('invalid-feedback');
            element.closest('.form-outline').append(error);
        },
        highlight: function (element, errorClass, validClass) {
            $(element).addClass('is-invalid').removeClass('is-valid');
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element).removeClass('is-invalid').addClass('is-valid');
        }
    });
});
</script>

<?php require_once "layouts/footer.php"; ?>
