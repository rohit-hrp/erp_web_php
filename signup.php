
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
    <div class="container ">
    <div class="heading_container heading_center">
        <h2> Signup </h2>
    </div>
        <div class="row">
            <div class="col-md-6 mx-auto">
            <form id="SignupForm" method="post" action="">
                    <!-- Name input -->
                    <div data-mdb-input-init class="form-outline mb-4">
                        <label class="form-label" for="registerName">Name</label>
                        <input type="text" name="name" id="registerName" class="form-control" placeholder="Please enter your name"/>
                        
                    </div>

                    <!-- Username input -->
                    <div data-mdb-input-init class="form-outline mb-4">
                        <label class="form-label" for="registerUsername">Username</label>
                        <input type="text" name="username" id="registerUsername" class="form-control" />
            
                    </div>

                    <!-- Email input -->
                    <div data-mdb-input-init class="form-outline mb-4">
                        <label class="form-label" for="registerEmail">Email</label>
                        <input type="email" name="email" id="registerEmail" class="form-control" />
                    </div>

                    <!-- Password input -->
                    <div data-mdb-input-init class="form-outline mb-4">
                        <label class="form-label" for="registerPassword">Password</label>
                        <input type="password" name="password" id="registerPassword" class="form-control" />
        
                    </div>

                    <!-- Repeat Password input -->
                    <div data-mdb-input-init class="form-outline mb-4">
                        <label class="form-label" for="registerRepeatPassword">Repeat password</label>
                        <input type="password" name="confirm_password" id="registerRepeatPassword" class="form-control" />
                        
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
                    <button type="submit" name="signup" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block mb-3">Signup</button>
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