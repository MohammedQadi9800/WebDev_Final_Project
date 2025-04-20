<?php
// Database connection file for CPCS403 Final Project

// Database connection parameters
$host = "localhost";
$username = "your_db_username";
$password = "your_db_password";
$database = "cpcs403_project";

// Create connection
function connectDB() {
    global $host, $username, $password, $database;
    
    $conn = new mysqli($host, $username, $password, $database);
    
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    return $conn;
}

// Close connection
function closeDB($conn) {
    $conn->close();
}
?>
