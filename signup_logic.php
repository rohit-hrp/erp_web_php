<?php
include('db.php');

$db = new Database();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve and sanitize form data
    $name = trim($_POST['name']);
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

    // Check if the email already exists
    $sql = "SELECT * FROM users WHERE user_email=?";
    $user = $db->fetch($sql, 's', [$email]);

    if ($user) {
        echo "<h1>Email already exists!</h1>";
    } else {
        $sql = "INSERT INTO users (user_name, user_email, user_password) VALUES (?, ?, ?)";
        if ($db->query($sql, 'sss', [$name, $email, $hashedPassword])) {
            echo "<h1>Registration successful!</h1>";
        } else {
            echo "<h1>Registration failed.</h1>";
        }
    }

    $db->close();
}
?>
