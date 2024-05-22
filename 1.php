<?php

// Database credentials
$servername = "localhost"; // Change this to your MySQL server name
$username = "your_username"; // Change this to your MySQL username
$password = "your_password"; // Change this to your MySQL password
$database = "your_database"; // Change this to your MySQL database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to retrieve data
$sql = "SELECT * FROM your_table"; // Change this to your table name

// Execute query
$result = $conn->query($sql);

// Check if there are any rows returned
if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        // Print data
        echo "ID: " . $row["id"]. " - Name: " . $row["name"]. " - Email: " . $row["email"]. "<br>";
    }
} else {
    echo "0 results";
}

// Close connection
$conn->close();

?>
