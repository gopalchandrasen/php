<!-- Write a PHP script to perform following tasks:
(a) Create a Database named  kgec.
(b) Create a table named students under kgec database with following fields:
Name(varchar 30), roll (tinyint 2), phone (int 10) and city (varchar 30), make the roll field as primary key and not null.
(c) Create another table named ca_marks under kgec database with following fields:
roll (tinyint 2), ca1 (tinyint  2), ca2 (tinyint  2) and ca4 (tinyint  2), make the roll field as primary key and not null.
(d) Create a table named pca_marks copying the structure of ca_marks table.
(e) change the name of the columns of pca_marks table as follows: ca1 column to pca1, ca2 column to pca2 and ca4 column to pca4. -->
<?php
$servername = "localhost";
$username = "root";
$password = "";
$conn = new mysqli($servername, $username, $password);
if($conn->connect_error){
    die("connection failed:" . $conn->connect_error);
}
$conn->select_db("kgec");
$sql="ALTER table pca_marks change ca1 pca1 tinyint(2), change ca2 pca2 tinyint(2), change ca4 pca4 tinyint(2)";
if($conn->query($sql)==TRUE){
    echo "Table is altered";
}
else{
    echo "Table not altered".$conn->error;
}
?>