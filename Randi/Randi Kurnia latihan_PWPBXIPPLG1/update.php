<!DOCTYPE html>
<html>
<head>
	<title>CRUD PHP dan MySQLi - WWW.MALASNGODING.COM</title>
</head>
<body>
 
	<h2>DATA PEMAIN MANCHESTER UNITED</h2>
	<br/>
	<a href="pemain.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>EDIT DATA PEMAIN</h3>
 
	<?php
	include 'koneksi.php';
	$no = 1;
	$id = $_GET['id'];
	$data = mysqli_query($conn,"SELECT * FROM pemain WHERE id = $id");
	$d = mysqli_fetch_array($data)
		?>
		<form method="POST" action="update_aksi.php">
			<table>
				<tr>			
					<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
					<td>Nama</td>
					<td>
						<input type="text" name="nama" value="<?php echo $d['nama']; ?>">
					</td>
				</tr>
				<tr>
					<td>Negara</td>
					<td><input type="text" name="alamat" value="<?php echo $d['negara']; ?>"></td>
				</tr>
				<tr>
					<td>Nomor Punggung</td>
					<td><input type="text" name="pekerjaan" value="<?php echo $d['nomor_punggung']; ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN"></td>
				</tr>		
			</table>
		</form>
		<?php 
	
	?>
 
</body>
</html>