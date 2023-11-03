<?php
include "connection.php";
$query = mysqli_query($connection, "SELECT * FROM pelanggan ORDER BY alamat ASC");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Data Pelanggan</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center mb-5 mt-5">
				<a href="index.php">Pelanggan</a>
				<a href="supplier.php">Supplier</a>
				<a href="produk.php">Produk</a>
			</div>
			<div class="col-md-12">


				<h3> Data Pelanggan </h3>

				<a href="tambah.php"> Tambah Data </a>
				<table class="table table-success table-striped">
					<thead>
						<tr>
							<th width="300px"><b><center>Nama</center></b></th>
							<th width="100px"><b><center>Jenis Kelamin</center></b></th>
							<th width="300px"><b><center>Telpon</center></b></th>
							<th width="300px"><b><center>Alamat</center></b></th>
						</tr>
					</thead>
					<tbody>
						<?php if (mysqli_num_rows($query)) { ?>
							<?php include "connection.php"; { ?>
							<?php while ($data = mysqli_fetch_array($query)) { ?>
								<tr>
									<td><center><?php echo $data['nama']; ?></center></td>
									<td><center><?php echo $data['jenis_kelamin']; ?></center></td>
									<td><center><?php echo $data['telpon']; ?></center></td>
									<td><center><?php echo $data['alamat']; ?></center></td>
								</tr>
							<?php } ?>
						<?php } ?>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>