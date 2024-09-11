<?php
include('db.php');

// Initialize the Database connection
$db = new Database();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve and sanitize form data
    $user_email = trim($_POST['email']);

    // Fetch user by email
    $sql = "SELECT * FROM users WHERE user_email = ?";
    $user = $db->fetch($sql, 's', [$user_email]);

    // Check if the email exists
    if ($user) {
        echo "<h1>Email found. Verification successful.</h1>";
    } else {
        echo "<h1>Email not found. Verification failed.</h1>";
    }

    // Close the database connection
    $db->close();
}
?>
