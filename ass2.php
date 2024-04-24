<?php
$user=$_POST['user'];
$pass=$_POST['pass'];
if($pass=='abcd1234'){
    echo "$user Valid user";
}
else{
    echo "not valid";
}