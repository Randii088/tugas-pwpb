<?php
$host = "localhost";
$user = "root";
$pass ="";
$db = "randi";

$conn = mysqli_connect($host,$user,$pass,$db);

if(mysqli_connect_errno()){
    echo "database error".mysqli_connect_error();
}

?>