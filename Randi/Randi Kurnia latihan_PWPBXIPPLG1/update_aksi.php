
<?php 
// koneksi database
include 'koneksi.php';
$id = $_POST['id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$pekerjaan = $_POST['pekerjaan'];
 
// update data ke database
mysqli_query($conn,"UPDATE pemain set nama='$nama',negara='$alamat', nomor_punggung='$pekerjaan' WHERE
 id=$id");
 
// mengalihkan halaman kembali ke index.php
header("location:pemain.php");
 
?>