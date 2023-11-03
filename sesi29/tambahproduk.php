<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data Produk</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<style>
		.container {
			margin-top: 20px;
		}

		.form-check-label {
			margin-left: 10px;
		}

		/* Gaya tambahan */
		.form-group {
			margin-bottom: 20px;
		}

		/* Warna latar belakang dan teks untuk header dan tombol */
		.page-header {
			background-color: #007BFF;
			color: #fff;
			padding: 10px;
			margin-bottom: 20px;
		}

		.btn-primary {
			background-color: #007BFF;
			border: none;
		}

		.btn-primary:hover {
			background-color: #0056b3;
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h3 class="mt-3 page-header">Tambah Data Produk</h3>
				<form action="proses_tambah_produk.php" method="post">
					<div class="form-group">
						<label for="kode_produk">Kode Produk</label>
						<input type="text" name="kode_produk" id="kode produk" class="form-control">
					</div>
					<div class="form-group">
						<label for="nama_produk">Nama Produk</label>
						<input type="text" name="nama_produk" id="nama produk" class="form-control">
					</div>
					<div class="form-group">
						<label for="harga">Harga</label>
						<input type="number" name="harga" id="harga" class="form-control">
					</div>
					<div class="form-group">
						<label for="stok">Stok</label>
						<input type="number" name="stok" id="stok" class="form-control">
					</div>
					<div class="form-group">
						<input type="submit" name="Submit" value="Submit" class="btn btn-primary">
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>
