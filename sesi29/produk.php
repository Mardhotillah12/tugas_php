<?php
include "connection.php";
$query = mysqli_query($connection, "SELECT * FROM produk ORDER BY nama_produk DESC");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Data Produk</title>
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
				<h3> Data Produk </h3>

				<a href="tambahproduk.php"> Tambah Data </a>
				<table class="table table-success table-striped">
					<thead>
						<tr>
							<th width="300px"><b><center>Kode Produk</center></b></th>
							<th width="300px"><b><center>Nama Produk</center></b></th>
							<th width="300px"><b><center>Harga</center></b></th>
							<th width="300px"><b><center>Stok</center></b></th>
						</tr>
					</thead>
					<tbody>
						<?php if (mysqli_num_rows($query)) { ?>
							<?php include "connection.php"; { ?>
							<?php while ($data = mysqli_fetch_array($query)) { ?>
								<tr>
									<td><center><?php echo $data['kode_produk']; ?></center></td>
									<td><center><?php echo $data['nama_produk']; ?></center></td>
									<td><center><?php echo $data['harga']; ?></center></td>
									<td><center><?php echo $data['stok']; ?></center></td>
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