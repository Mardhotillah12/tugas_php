<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data Pelanggan</title>
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
				<h3 class="mt-3 page-header">Tambah Data Pelanggan</h3>
				<form action="proses_tambah.php" method="post">
					<div class="form-group">
						<label for="nama">Nama</label>
						<input type="text" name="nama" id="nama" class="form-control">
					</div>
					<div class="form-group">
						<label>Jenis Kelamin</label>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="jenis_kelamin" value="pria" id="pria">
							<label class="form-check-label" for="pria">
								Pria
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="jenis_kelamin" value="wanita" id="wanita">
							<label class="form-check-label" for="wanita">
								Wanita
							</label>
						</div>
					</div>
					<div class="form-group">
						<label for="telpon">Telpon</label>
						<input type="number" name="telpon" id="telpon" class="form-control">
					</div>
					<div class="form-group">
						<label for="alamat">Alamat</label>
						<textarea name="alamat" id="alamat" rows="5" class="form-control" required=""></textarea>
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
