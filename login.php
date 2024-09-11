<?php require_once "layouts/header.php"; ?>

<!-- service section -->
<section class="service_section layout_padding">
    <div class="container">
        <div class="heading_container heading_center">
            <h2>Login</h2>
        </div>
        <div class="row">
            <div class="col-md-6 mx-auto">
                <form id="loginForm" action="login_logic.php" method="POST">
                    <!-- Email input -->
                    <div data-mdb-input-init class="form-outline mb-4">
                        <label class="form-label" for="form2Example1">Email address</label>
                        <input type="email" id="form2Example1" name="email" class="form-control" />
                    </div>

                    <!-- Password input -->
                    <div data-mdb-input-init class="form-outline mb-4">
                        <label class="form-label" for="form2Example2">Password</label>
                        <input type="password" id="form2Example2" name="password" class="form-control" />
                    </div>

                    <!-- 2 column grid layout for inline styling -->
                    <div class="row mb-4">
                        <div class="col d-flex justify-content-center">
                            <!-- Checkbox -->
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
                                <label class="form-check-label" for="form2Example31">Remember me</label>
                            </div>
                        </div>

                        <div class="col">
                            <!-- Simple link -->
                            <a href="Forget.php">Forgot password?</a>
                        </div>
                    </div>

                    <!-- Submit button -->
                    <input type="submit" id="submitBtn" class="btn btn-primary btn-block mb-4">Sign in</input>

                    <!-- Register buttons -->
                </form>
                <div class="text-center">
                    <p>Not a member? <a href="signup.php">Register</a></p>
                    <p>or sign up with:</p>
                    <button type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-link btn-floating mx-1">
                        <i class="fab fa-facebook-f"></i>
                    </button>
                    <button type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-link btn-floating mx-1">
                        <i class="fab fa-google"></i>
                    </button>
                    <button type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-link btn-floating mx-1">
                        <i class="fab fa-twitter"></i>
                    </button>
                    <button type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-link btn-floating mx-1">
                        <i class="fab fa-github"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end service section -->

<?php require_once "layouts/footer.php"; ?>

<!-- jQuery and jQuery Validation Plugin -->

<script>
    $(document).ready(function() {
        $('#loginForm').validate({
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
                    required: "Please enter your password",
                    minlength: "Your password must be at least 6 characters long"
                }
            },
            errorElement: 'span',
            errorClass: 'error',
            highlight: function(element) {
                $(element).addClass('input-error');
            },
            unhighlight: function(element) {
                $(element).removeClass('input-error');
            }
        });
    });
</script>
</body>

</html>