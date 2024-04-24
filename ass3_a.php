<!-- Write a PHP script to perform following tasks:
(a) Create a Database named  kgec.
(b) Create a table named students under kgec database with following fields:
Name(varchar 30), roll (tinyint 2), phone (int 10) and city (varchar 30), make the roll field as primary key and not null.
(c) Create another table named ca_marks under kgec database with following fields:
roll (tinyint 2), ca1 (tinyint  2), ca2 (tinyint  2) and ca4 (tinyint  2), make the roll field as primary key and not null.
(d) Create a table named pca_marks copying the structure of ca_marks table.
(e) change the name of the columns of pca_marks table as follows: ca1 column to pca1, ca2 column to pca2 and ca4 column to pca4. -->
<?php
$servername = "localhost"; // Replace with your MySQL server name
$username = "root";    // Replace with your MySQL username
$password = "";    // Replace with your MySQL password

// Create a connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "CREATE DATABASE kgec";

if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}
?>
