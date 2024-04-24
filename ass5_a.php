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

// Sample data for inserting records
$number_records = array(
    array("09",23,22,24),
    array("08",21,24,22),
    array("07",24,23,21),
    array("31",24,24,25),
    array("4",24,23,24)
);

// SQL query to insert records
foreach ($number_records as $record) {
    $sql = "INSERT INTO ca_marks (roll, ca1, ca2, ca3) VALUES (?, ?, ?, ?)";
    
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("siii", $record[0], $record[1], $record[2], $record[3]);
    
    if ($stmt->execute() === TRUE) {
        echo "Record inserted successfully.<br>";
    } else {
        echo "Error inserting record: " . $stmt->error . "<br>";
    }
    
    $stmt->close();
}

// Close the database connection
$conn->close();
?>
