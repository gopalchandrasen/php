<?php
// Database configuration
$servername = "localhost";
$username = "root";
$password = "";
$database = "kgec";

// Create a database connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to create a duplicate table 'temp' based on 'pca_marks' structure
$sql = "CREATE TABLE temp AS SELECT * FROM pca_marks ";

if ($conn->query($sql) === TRUE) {
    echo "Table 'temp' created successfully based on 'pca_marks' structure.";
} else {
    echo "Error creating table 'temp': " . $conn->error;
}

// Close the database connection
$conn->close();
?>
