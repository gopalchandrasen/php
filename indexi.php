<?php
if(isset($_POST['name']) and empty($_POST['name'])!=1){
$server = "localhost";
$username="root";
$passwaord="";
$con=mysqli_connect($server,$username,$passwaord);
if(!$con){
    die("connection failure due to".mysqli_connect_error());
}
// echo "Success connection";

$name=$_POST['name'];
$gender=$_POST['gender'];
$age=$_POST['age'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$desc=$_POST['desc'];

echo "<br>";
$sql="INSERT INTO `trip`.`trip` (`name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";
// echo $sql;

if($con->query($sql)==true){
    echo "Sucessfully submited";
    // $insert=true;
}
else{
    echo "Error: $sql <br> $con->error";
}

$con->close();
}
else{
    echo "Enter data";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to travel form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h3>Welcome to travel form</h3>
        <p>Enter details</p>
        <?php
        if($insert=true){
            echo "<p class='submitMsg'>Thanks for participation</p>";
        }
        else{

        }
        ?>
        <form action="indexi.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter name"><br>
            <input type="text" name="age" id="age" placeholder="Enter age"><br>
            <input type="text" name="gender" id="gender" placeholder="Enter gender"><br>
            <input type="email" name="email" id="email" placeholder="Enter email"><br>
            <input type="phone" name="phone" id="phone" placeholder="Enter phone"><br>
            <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter another"></textarea><br>
            <button class="btn">Submit</button><br>

            <!-- <button class="btn">Reset</button> -->

            <!--<input type="reset" value="reset">
        </form>
    </div>
    <script src="index.js"></script>
</body>
</html> -->