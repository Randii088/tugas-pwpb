<?php 
include 'koneksi.php';
$id = $_POST ['id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$pekerjaan = $_POST['pekerjaan'];
 
mysqli_query($conn, "INSERT INTO pemain VALUES('$id','$nama','$alamat','$pekerjaan')");
 
header("location:pemain.php?pesan=input");
?>