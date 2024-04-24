<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $conn = new mysqli($servername, $username, $password);
    if($conn->connect_error){
        die("connection failed:" . $conn->connect_error);
    }
    $conn->select_db("kgec");
    
    $sql="Insert INTO pca_marks select * from ca_marks";
    if($conn->query($sql)==TRUE){
        echo "Table data inserted";
    }
    else{
        echo "Table data not inserted".$conn->error;
    }
?>