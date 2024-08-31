<?php

class Database {
    private $host = "localhost";
    private $user = "root";
    private $password = "root";
    private $dbname = "erp";
    private $conn;

    public function __construct() {
        // Create a new MySQLi connection
        $this->conn = new mysqli($this->host, $this->user, $this->password, $this->dbname);
        // Check connection
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    // Method to execute a query
    public function query($sql) {
        $result = $this->conn->query($sql);

        if ($result === FALSE) {
            echo "Error: " . $this->conn->error;
        } else {
            return $result;
        }
    }

    // Method to fetch data
    public function fetch($sql) {
        $result = $this->query($sql);
        return $result->fetch_assoc();
    }

    // Method to fetch all data
    public function fetchAll($sql) {
        $result = $this->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    // Close the connection
    public function close() {
        $this->conn->close();
    }
}

// Usage example
$db = new Database();
// Example query
$sql = "SELECT * FROM users";
$users = $db->fetchAll($sql);

// Display the users
// foreach ($users as $user) {
//     echo $user['name'] . " | ".$user['email']." | ".$user['phone'];
//     echo "</br>";
// }
// Close the connection
$db->close();

?>
