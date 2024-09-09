<?php require_once "layouts/header.php"; ?>

<!-- service section -->
<section class="service_section layout_padding">
    <div class="container" style="background-color: #008B8B;">
        <div class="heading_container heading_center">
            <h2> Login </h2>
        </div>
        <div class="row">
            <div class="col-md-6 mx-auto">
                <form id="loginForm" method="post" action="/login.php">
                    <!-- Email input -->
                    <div data-mdb-input-init class="form-outline mb-4">
                        <label class="form-label" for="form2Example1">Email address<span class="required">*</span></label>
                        <input type="email" id="form2Example1" class="form-control" name="emil" placeholder="Please enter your email" />

                    </div>

                    <!-- Password input -->
                    <div data-mdb-input-init class="form-outline mb-4">
                        <label class="form-label" for="form2Example2">Password<span class="required">*</span></label>
                        <input type="password" id="form2Example2" class="form-control" name="password" placeholder="Please enter your password" />

                    </div>

                    <!-- 2 column grid layout for inline styling -->
                    <div class="row mb-4">
                        <div class="col d-flex justify-content-center">
                            <!-- Checkbox -->
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
                                <label class="form-check-label" for="form2Example31"> Remember me </label>
                            </div>
                        </div>

                        <div class="col">
                            <!-- Simple link -->
                            <a href="#!" style="color: white;">Forgot password?</a>
                        </div>
                    </div>

                    <!-- Submit button -->
                    <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block mb-4" style="background-color: #8B0000;">Sign in</button>

                    <!-- Register buttons -->
                    <div class="text-center">
                        <p>Not a member? <a href="signup.php" style="color: white;">Signup</a></p>

                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- end service section -->

<?php require_once "layouts/footer.php"; ?>