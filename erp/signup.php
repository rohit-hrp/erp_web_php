<?php require_once "layouts/header.php"; ?>

<!-- service section -->
<section class="service_section layout_padding">
    <div class="container ">
        <div class="heading_container heading_center">
            <h2> Signup </h2>
        </div>
        <div class="row">
            <div class="col-md-6 mx-auto">
                <form>
                    <!-- FirstName input -->
                    <div data-mdb-input-init class="form-outline mb-4">
                        <label class="form-label" for="registerName">FirstName:</label>
                        <input type="text" id="registerFirstName" class="form-control" placeholder="Please enter your firstname" />

                    </div>

                    <!-- Lastname input -->
                    <div data-mdb-input-init class="form-outline mb-4">
                        <label class="form-label" for="registerUsername">LastName:</label>
                        <input type="text" id="registerLastname" class="form-control" placeholder="Please enter your lastname" />

                    </div>

                    <!-- Email input -->
                    <div data-mdb-input-init class="form-outline mb-4">
                        <label class="form-label" for="registerEmail">Email:</label>
                        <input type="email" id="registerEmail" class="form-control" placeholder="Please enter your email" />
                    </div>

                    <!-- Password input -->
                    <div data-mdb-input-init class="form-outline mb-4">
                        <label class="form-label" for="registerPassword">Password:</label>
                        <input type="password" id="registerPassword" class="form-control" placeholder="Please enter your password" />

                    </div>

                    <!-- Repeat Password input -->
                    <div data-mdb-input-init class="form-outline mb-4">
                        <label class="form-label" for="registerRepeatPassword">Repeat Password:</label>
                        <input type="password" id="registerRepeatPassword" class="form-control" placeholder="Please enter your repeat password" />

                    </div>

                    <!-- Checkbox -->
                    <div class="form-check d-flex justify-content-center mb-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
                            <label class="form-check-label" for="form2Example31"> I have read and agree to the terms </label>
                        </div>
                    </div>

                    <!-- Submit button -->
                    <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block mb-3">Signup</button>
                </form>
                <div class="text-center">
                    <p>A member? <a href="login.php">Login</a></p>

                </div>
            </div>
        </div>
    </div>
</section>

<!-- end service section -->

<?php require_once "layouts/footer.php"; ?>