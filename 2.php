<?php

// Database credentials
$servername = "localhost"; // or your server IP
$username = "your_username"; // replace with your MySQL username
$password = "your_password"; // replace with your MySQL password
$database = "your_database"; // replace with your MySQL database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected successfully";
}

// Close connection
$conn->close();

?>
