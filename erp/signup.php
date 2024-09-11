<?php

require_once "layouts/header.php";
require_once "db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = md5($_POST['password']); // Hash password using MD5
    $db = new Database();
    // SQL query to insert the new user
    $sql = "INSERT INTO users (name, email, username, password, created_at, updated_at) 
    VALUES ('$name', '$email', '$username', '$password', NOW(), NOW())";
    // Execute the query using the query method of the Database class
    $exec = $db->query($sql);
    echo "New user added successfully!";
    // Close the connection
    $db->close();
}

?>

<!-- service section -->
<section class="service_section layout_padding">
    <div class="container" style="background-color: #008B8B;">
        <div class="heading_container heading_center">
            <h2> Signup </h2>
        </div>
        <div class="row">
            <div class="col-md-6 mx-auto">
                <form id="SignupForm" method="post" action="">
                    <!-- Name input -->
                    <div data-mdb-input-init class="form-outline mb-4">
                        <label class="form-label" for="registerName">Name<span class="required">*</span></label>
                        <input type="text" name="name" id="registerName" class="form-control" placeholder="Please enter your name" required/>

                    </div>

                    <!-- Username input -->
                    <div data-mdb-input-init class="form-outline mb-4">
                        <label class="form-label" for="registerUsername">Username<span class="required">*</span></label>
                        <input type="text" name="username" id="registerUsername" class="form-control" placeholder="Please enter your username" required/>

                    </div>

                    <!-- Email input -->
                    <div data-mdb-input-init class="form-outline mb-4">
                        <label class="form-label" for="registerEmail">Email<span class="required">*</span></label>
                        <input type="email" name="email" id="registerEmail" class="form-control" placeholder="Please enter your email" required/>
                    </div>

                    <!-- Password input -->
                    <div data-mdb-input-init class="form-outline mb-4">
                        <label class="form-label" for="registerPassword">Password<span class="required">*</span></label>
                        <input type="password" name="password" id="registerPassword" class="form-control" placeholder="Please enter your password" required/>

                    </div>

                    <!-- Repeat Password input -->
                    <div data-mdb-input-init class="form-outline mb-4">
                        <label class="form-label" for="registerRepeatPassword">Repeat Password<span class="required">*</span></label>
                        <input type="password" name="confirm_password" id="registerRepeatPassword" class="form-control" placeholder="Please enter your repeat password" />

                    </div>

                    <!-- 2 column grid layout for inline styling -->
                    <div class="row mb-4">
                        <div class="col d-flex justify-content-center">
                            <!-- Checkbox -->
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
                                <label class="form-check-label" for="form2Example31"> I have read and agree to the terms </label>
                            </div>
                        </div>
                    </div>

                    <!-- Submit button -->
                    <button type="submit" name="signup" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block mb-3" style="background-color: #8B0000;">Signup</button>
                </form>
                <div class="text-center">
                    <p>A member? <a href="login.php" style="color: white;">Login</a></p>

                </div>
            </div>
        </div>
    </div>
</section>

<!-- end service section -->

<?php require_once "layouts/footer.php"; ?>