<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="bootstrap-5.3.3-dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <table class="table table-bordered" border="1">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Negara </th>
            <th>Nomor Punggung</th>
            <th>Opsi</th>
        </tr>
        <?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($conn,"SELECT * FROM pemain");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['nama']; ?></td>
				<td><?php echo $d['negara']; ?></td>
				<td><?php echo $d['nomor_punggung']; ?></td>
				<td>
					<a href="update.php?id=<?= $d['id'] ?>" class="btn btn-danger" >Edit </a>
					<a href="hapus.php?id=<?php echo $d['id']; ?>" class="btn btn-primary"> Hapus</a>
				</td>
                
			</tr>
			<?php 
		}
		?>
    </table>
    
</body>
</html>