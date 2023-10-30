<?php
include "connection.php";
$query = mysqli_query($connection, "SELECT * FROM supplier ORDER BY nama ASC");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Data Supplier</title>
	<!-- Tambahkan tautan ke Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
	<center>
        <h1>Memanggil Data Dari Database Ke Dalam Bentuk HTML Bootstrap</h1>
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center mb-5 mt-5">
				<a href="index.php">Pelanggan</a>
				<a href="supplier.php">Supplier</a>
				<a href="produk.php">Produk</a>
			</div>
			<div class="col-md-12">
				<h3> Data Supplier </h3>
				<table class="table table-success table-striped">
					<thead>
						<tr>
							<th width="300px"><b><center>Nama</center></b></th>
							<th width="300px"><b><center>Telpon</center></b></th>
							<th width="300px"><b><center>Alamat</center></b></th>
						</tr>
					</thead>
					<tbody>
						<?php if (mysqli_num_rows($query)) { ?>
							<?php while ($data = mysqli_fetch_array($query)) { ?>
								<tr>
									<td><center><?php echo $data['nama']; ?></center></td>
									<td><center><?php echo $data['telpon']; ?></center></td>
									<td><center><?php echo $data['alamat']; ?></center></td>
								</tr>
							<?php } ?>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<!-- Tambahkan tautan ke Bootstrap JS (opsional) -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
