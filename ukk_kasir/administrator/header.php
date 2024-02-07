<?php 
session_start();

	// cek apakah yang mengakses halaman ini sudah login
if($_SESSION['level']==""){
	header("location:../index.php?pesan=gagal");
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman Administrator</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<style>
		.container {
			margin: 0 auto;
			width: 80%;
			padding: 20px;
			
		}

		.navbar {
			background-color: darkslateblue;
		}

		.navbar a {
			color: #000000;
			margin: 0 10px;
			width: 10%;
			text-decoration: none;
		}

		.navbar .btn {
			background-color: white; /* Warna hijau */
			border-color:white; /* Warna border hijau */
		}

		.navbar .btn:hover {
			background-color: darkorchid; /* Warna hijau lebih gelap saat hover */
		}

		.content {
			background-color: #000000;
			padding: 20px;
			border-radius: 10px;
			box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
		}
	</style>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark">
		<div class="container-fluid">
	<div class="card-body">
		<a href="index.php" class="btn btn-dark">Beranda</a>
		<a href="data_barang.php" class="btn btn-success">Data Barang</a>
		<a href="pembelian.php" class="btn btn-success">Pembelian</a>
		<!--<a href="stok_barang.php" class="btn btn-success">Stok Barang</a>-->
		<a href="data_pengguna.php" class="btn btn-success">Data Pengguna</a>
		<a href="../logout.php" class="btn btn-danger">Keluar</a>
	</div>
</div>
				</ul>
			</div>
		</div>
	</nav>

	<div class="container">
	</div>
</body>
</html>











