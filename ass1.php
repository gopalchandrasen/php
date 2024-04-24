<?php
$name=$_POST['name'];
$roll=$_POST['roll'];
$gender=$_POST['gender'];
$dob=$_POST['dob'];
$preferredEvents = $_POST["event"];

echo "<p><strong>Roll:</strong> $roll</p>";
        echo "<p><strong>Name:</strong> $name</p>";
        echo "<p><strong>Date of Birth:</strong> $dob</p>";
        echo "<p><strong>Gender:</strong> $gender</p>";
        echo "Your selected events are: <br>";
        foreach($preferredEvents as $events){
            echo $events.", ";
        }
        

?>