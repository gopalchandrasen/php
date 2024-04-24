<?php
// Database configuration
$servername = "localhost";
$username = "root";
$password = "";
$database = "kgec"; // Replace with your actual database name

// Create a database connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to fetch all table names in the database
$sql = "SHOW TABLES";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $tableName = $row['Tables_in_kgec']; // Assuming the database name is 'kgec'
        echo "Table: $tableName<br>";
        
        // SQL query to fetch table structure
        $structureSql = "DESCRIBE $tableName";
        $structureResult = $conn->query($structureSql);
        
        if ($structureResult->num_rows > 0) {
            while ($row = $structureResult->fetch_assoc()) {
                echo "Field: {$row['Field']}, Type: {$row['Type']}<br>";
            }
        }
        echo "<br>";
    }
} else {
    echo "No tables found in the database.";
}

// Close the database connection
$conn->close();
?>
