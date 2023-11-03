<?php
include "connection.php";
$query = mysqli_query($connection, "SELECT * FROM supplier ORDER BY nama ASC");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Data Supplier</title>
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
			<div class="container">
				<div class="m-5 shadow-lg p-3 mb-5 bg-body-tertiary rounded">
            		<h1 class="text-center">Data Supplier</h1>
            		<a href="tambah_supplier.php" class="btn btn-primary btn-sm mb-3">+ Tambah Data</a>
            		<table class="table table-hover" id="myTable">
               			<thead>
                    		<tr class="text-center align-middle">
                        		<th class="text-center" scope="col"> Nama </th>
                        		<th class="text-center" scope="col"> Telpon </th>
                        		<th class="text-center" scope="col"> Alamat </th>
                        		<th class="text-center" scope="col"> Aksi </th>
                    		</tr>
                		</thead>
						<tbody>
							<?php if (mysqli_num_rows($query)) { ?>
								<?php include "connection.php"; { ?>
								<?php while ($data = mysqli_fetch_array($query)) { ?>
									<tr>
                                		<td class="text-center align-middle"><?= $data['nama'] ?></td>
                                		<td class="text-center align-middle"><?= $data['telpon'] ?></td>
                                		<td class="text-center align-middle"><?= $data['alamat'] ?></td>
                                		<td width="200px" class="text-center align-middle">
                                    		<a href="edit_supplier.php?id=<?= $data['id'] ?>" class="btn btn-warning btn-sm text-white">Edit<i class="bi bi-pencil-square"></i></a>
                                    		<a href="hapus.php?id=<?= $data['id'] ?>" class="btn btn-danger btn-sm">Hapus<i class="bi bi-trash"></i></a>
                                		</td>
                            		</tr>
								<?php } ?>
								<?php } ?>
							<?php } ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
