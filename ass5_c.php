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

// SQL query to update marks in pca_marks table
$sql = "UPDATE pca_marks SET pca1 = pca1 + 20,pca2 = pca2 + 20,pca3 = pca3 + 20";

if ($conn->query($sql) === TRUE) {
    echo "Marks updated successfully in pca_marks table.";
} else {
    echo "Error updating marks: " . $conn->error;
}

// Close the database connection
$conn->close();
?>
