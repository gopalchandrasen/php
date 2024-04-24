<!-- Perform inner join on the customer_id field of the above two tables.
SELECT ID, NAME, AMOUNT, DATE FROM CUSTOMERS INNER JOIN ORDERS ON CUSTOMERS.ID = ORDERS.CUSTOMER_ID;

The output will be as follows:
 ID 	 NAME     	AMOUNT	DATE
  3 	 Kaushik  	3000	 2009-10-08
  3 	 Kaushik  	1500	 2009-10-08 
  2 	 Khilan   	1560	 2009-11-20 
  4 	 Chaitali 	2060	 2008-05-20  -->

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
$sql = "SELECT id, name, amount, date 
FROM CUSTOMERS 
INNER JOIN ORDERS ON CUSTOMERS.ID = ORDERS.CUSTOMER_ID;";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1'>
    <tr>
        <th>Customer ID</th>
        <th>Name</th>
        <th>Amount</th>
        <th>Date</th>
    </tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
            <td>{$row['id']}</td>
            <td>{$row['name']}</td>
            <td>{$row['amount']}</td>
            <td>{$row['date']}</td>
        </tr>";
    }
    echo "</table>";
} else {
    echo "No matching records found.";
}

// Close the database connection
$conn->close();
?>
