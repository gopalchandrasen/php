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

// SQL query to delete the 'pca_marks' table
$deleteSql = "DROP TABLE pca_marks";

if ($conn->query($deleteSql) === TRUE) {
    echo "Table 'pca_marks' deleted successfully.<br>";
} else {
    echo "Error deleting table 'pca_marks': " . $conn->error;
}
    
    // SQL query to rename 'temp' table to 'pca_marks'
    $renameSql = "RENAME TABLE temp TO pca_marks";

    if ($conn->query($renameSql) === TRUE) {
        echo "Table 'temp' renamed to 'pca_marks' successfully.";
    } else {
        echo "Error renaming table 'temp': " . $conn->error;
    }


// Close the database connection
$conn->close();
?>
