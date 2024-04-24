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

// SQL query to create the 'customers' table
$tableSql = "CREATE TABLE customers (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    age INT,
    city VARCHAR(255),
    salary DECIMAL(10, 2)
)";

if ($conn->query($tableSql) === TRUE) {
    echo "Table 'customers' created successfully.<br>";
} else {
    echo "Error creating table 'customers': " . $conn->error;
}

// Sample data for inserting records
$sample_records = array(
    array('Ramesh', 32, 'Ahmedabad', 2000),
    array('Khilan', 25, 'Delhi', 1500),
    array('Kaushik', 23, 'Kota', 2000),
    array('Chitali', 25, 'Mumbai', 6500),
    array('Hardik', 27, 'Bhopal', 8500),
    array('Komal', 22, 'MP', 4500),
    array('Muffy', 24, 'Indore', 10000)
);

// SQL query to insert records into the 'customers' table
foreach ($sample_records as $record) {
    $name = $record[0];
    $age = $record[1];
    $city = $record[2];
    $salary = $record[3];
    
    $insertSql = "INSERT INTO customers (name, age, city, salary) VALUES ('$name', $age, '$city', $salary)";
    
    if ($conn->query($insertSql) === TRUE) {
        echo "Record inserted successfully.<br>";
    } else {
        echo "Error inserting record: " . $conn->error . "<br>";
    }
}

// Close the database connection
$conn->close();
?>
