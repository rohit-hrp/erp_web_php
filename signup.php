
<?php require_once "layouts/header.php";?>

<!-- service section -->
<section class="service_section layout_padding">
    <div class="container ">
    <div class="heading_container heading_center">
        <h2> Signup </h2>
    </div>
        <div class="row">
            <div class="col-md-6 mx-auto">
                <form>
                    <!-- Name input -->
                    <div data-mdb-input-init class="form-outline mb-4">
                        <label class="form-label" for="registerName">Name</label>
                        <input type="text" id="registerName" class="form-control" placeholder="Please enter your name"/>
                        
                    </div>

                    <!-- Username input -->
                    <div data-mdb-input-init class="form-outline mb-4">
                        <label class="form-label" for="registerUsername">Username</label>
                        <input type="text" id="registerUsername" class="form-control" />
            
                    </div>

                    <!-- Email input -->
                    <div data-mdb-input-init class="form-outline mb-4">
                        <label class="form-label" for="registerEmail">Email</label>
                        <input type="email" id="registerEmail" class="form-control" />
                    </div>

                    <!-- Password input -->
                    <div data-mdb-input-init class="form-outline mb-4">
                        <label class="form-label" for="registerPassword">Password</label>
                        <input type="password" id="registerPassword" class="form-control" />
        
                    </div>

                    <!-- Repeat Password input -->
                    <div data-mdb-input-init class="form-outline mb-4">
                        <label class="form-label" for="registerRepeatPassword">Repeat password</label>
                        <input type="password" id="registerRepeatPassword" class="form-control" />
                        
                    </div>

                    <!-- Checkbox -->
                    <div class="form-check d-flex justify-content-center mb-4">
                        <input class="form-check-input me-2" type="checkbox" value="" id="registerCheck" checked
                        aria-describedby="registerCheckHelpText" />
                        <label class="form-check-label" for="registerCheck">
                        I have read and agree to the terms
                        </label>
                    </div>

                    <!-- Submit button -->
                    <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block mb-3">Signup</button>
                    </form>
                    <div class="text-center">
                        <p>A member? <a href="#!">Login</a></p>
                        
                    </div>     
            </div>
        </div>
    </div>
  </section>

  <!-- end service section -->

<?php require_once "layouts/footer.php";?>