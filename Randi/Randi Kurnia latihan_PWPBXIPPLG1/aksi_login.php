<?php
include 'koneksi.php';

$username = $_POST['user'];
$password = $_POST['pass'];

$data = mysqli_query($conn,"SELECT * FROM user WHERE username='$username' AND password='$password'");

$cek = mysqli_num_rows($data);

if($cek > 0){
    header("location:admin.php");
}else{
    header("location:index8.php");
}
?>



