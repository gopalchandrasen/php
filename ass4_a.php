<!-- Write a PHP script to perform following tasks:
(a) Add a new column named ca5 in ca_marks table.
(b) Add a new column named pca5 in pca_marks table.
(c) Delete the column ca4 in ca_marks table.
(d) Delete the column pca4 in pca_marks table.
(e) Rename the column ca5 to ca3 in ca_marks table.
(f) Rename the column pca5 to pca3 in pca_marks table. -->
<?php
$servername = "localhost";
$username = "root";
$password = "";
$conn = new mysqli($servername, $username, $password);
if($conn->connect_error){
    die("connection failed:" . $conn->connect_error);
}
$conn->select_db("kgec");
$sql="ALTER table ca_marks ADD COLUMN ca5 tinyint(2) ";
if($conn->query($sql)==TRUE){
    echo "Table altered";
}
else{
    echo "Table not altered".$conn->error;
}

$sql="ALTER table pca_marks ADD COLUMN pca5 tinyint(2) ";
if($conn->query($sql)==TRUE){
    echo "Table altered";
}
else{
    echo "Table not altered".$conn->error;
}
?>