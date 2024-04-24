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

// SQL query to join 'customers' and 'orders' tables based on 'customer_id'
$sql = "SELECT id, name, age, amount 
FROM customers  
JOIN orders ON customers.id = orders.customer_id";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1'>
    <tr>
        <th>Customer ID</th>
        <th>Name</th>
        <th>Age</th>
        <th>Amount</th>
    </tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
            <td>{$row['id']}</td>
            <td>{$row['name']}</td>
            <td>{$row['age']}</td>
            <td>{$row['amount']}</td>
        </tr>";
    }
    echo "</table>";
} else {
    echo "No matching records found.";
}

// Close the database connection
$conn->close();
?>
