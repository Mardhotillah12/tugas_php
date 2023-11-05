<?php
include "connection.php";
$query = mysqli_query($connection, "SELECT * FROM supplier ORDER BY nama ASC");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Supplier</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .navbar {
            background-color: #FFCCCC;
            color: #fff;
        }
        .navbar a {
            color: #66CCCC;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand p-3 fs-4" href="#">TOKO CERIA</a>
            <div class="collapse navbar-collapse" id="navbar-nav">
                <ul class="navbar-nav ms-auto p-3 me-4">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="http://localhost/tugas_php/sesi29/index.php" style="color: #66CCCC;">
                            <font color="red">PELANGGAN</font>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="http://localhost/tugas_php/sesi29/supplier/supplier.php" style="color: #FFFF33;">
                            SUPPLIER
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="http://localhost/tugas_php/sesi29/produk/produk.php" style="color: #0099FF;">
                            PRODUK
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

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
                    <?php if (mysqli_num_rows($query) > 0) { ?>
                        <?php while ($data = mysqli_fetch_array($query)) { ?>
                            <tr>
                                <td class="text-center align-middle"><?= $data['nama'] ?></td>
                                <td class="text-center align-middle"><?= $data['telpon'] ?></td>
                                <td class="text-center align-middle"><?= $data['alamat'] ?></td>
                                <td width="200px" class="text-center align-middle">
                                    <a href="edit_supplier.php?id=<?= $data['id'] ?>" class="btn btn-warning btn-sm text-white">Edit<i class="bi bi-pencil-square"></i></a>
                                    <a href="delete_supplier.php?id=<?= $data['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this item?');">Hapus<i class="bi bi-trash"></i></a>
                                </td>
                            </tr>
                        <?php } ?>
                    <?php } else { ?>
                        <tr>
                            <td colspan="4" class="text-center">Tidak ada data supplier.</td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
