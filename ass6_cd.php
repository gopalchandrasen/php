<?php
// Database configuration
$servername = "localhost";
$username = "root";
$password = "";
$database = "Kgec";

// Create a database connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to create the 'orders' table
$tableSql = "CREATE TABLE orders (
    oid INT AUTO_INCREMENT PRIMARY KEY,
    date DATE,
    customer_id INT,
    amount DECIMAL(10, 2)
)";

if ($conn->query($tableSql) === TRUE) {
    echo "Table 'orders' created successfully.<br>";
} else {
    echo "Error creating table 'orders': " . $conn->error;
}

// Sample data for inserting records into the 'orders' table
$sample_records = array(
    array('2023-09-01', 1, 100.00),
    array('2023-09-02', 2, 150.50),
    array('2023-09-03', 3, 200.75),
    array('2023-09-04', 4, 125.25)
);

// SQL query to insert records into the 'orders' table
foreach ($sample_records as $record) {
    $date = $record[0];
    $customer_id = $record[1];
    $amount = $record[2];
    
    $insertSql = "INSERT INTO orders (date, customer_id, amount) VALUES ('$date', $customer_id, $amount)";
    
    if ($conn->query($insertSql) === TRUE) {
        echo "Record inserted successfully into 'orders' table.<br>";
    } else {
        echo "Error inserting record into 'orders' table: " . $conn->error . "<br>";
    }
}

// Close the database connection
$conn->close();
?>
