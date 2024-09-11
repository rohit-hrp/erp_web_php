<?php

class Database {
    private $host = "localhost";
    private $user = "root";
    private $password = "";
    private $dbname = "erp";
    public $conn;

    public function __construct() {
        // Create a new MySQLi connection
        $this->conn = new mysqli($this->host, $this->user, $this->password, $this->dbname);
        // Check connection
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    // Method to execute a query and return the statement object
    public function query($sql, $types = "", $params = []) {
        $stmt = $this->conn->prepare($sql);
        if (!$stmt) {
            die("Prepare failed: " . $this->conn->error);
        }
        if ($types && $params) {
            $stmt->bind_param($types, ...$params);
        }
        if (!$stmt->execute()) {
            die("Execute failed: " . $stmt->error);
        }
        return $stmt;
    }

    // Method to fetch a single row
    public function fetch($sql, $types = "", $params = []) {
        $stmt = $this->query($sql, $types, $params);
        $result = $stmt->get_result();
        if ($result) {
            return $result->fetch_assoc();
        } else {
            return null;
        }
    }

    // Method to fetch all rows
    public function fetchAll($sql, $types = "", $params = []) {
        $stmt = $this->query($sql, $types, $params);
        $result = $stmt->get_result();
        if ($result) {
            return $result->fetch_all(MYSQLI_ASSOC);
        } else {
            return [];
        }
    }

    // Close the connection
    public function close() {
        $this->conn->close();
    }
}
?>
