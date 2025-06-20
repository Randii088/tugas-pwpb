<!DOCTYPE html>
<html>
<head>
	<title>Isi data</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="bootstrap-5.3.3-dist/css/bootstrap.min.css">
</head>
<body>
	<div class="judul">		
		<h1>Data pemain</h1>
		<h2>Menampilkan data dari database</h2>
		
	</div>
	
	<br/>
 
	<a href="pemain.php" class="btn btn-success">Lihat Semua Data</a>
 
	<br/>
	<h3>Input data baru</h3>
	<form action="tambah_aksi.php" method="POST">
		 <table  border="1">
			<tr>
				<td>Nama</td>
                <td>:</td>
				<td><input type="text" name="nama"></td>
			</tr>	
			<tr>
				<td>Negara</td>
                <td>:</td>
				<td><input type="text" name="alamat"></td>
			</tr>	
			<tr>
				<td>Nomor Punggung</td>
                <td>:</td>
				<td><input type="text" name="pekerjaan"></td>
			</tr>	
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan" class="btn btn-primary"></td>					
			</tr>				
		</table>
	</form>
</body>
</html>