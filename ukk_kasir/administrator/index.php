<?php include "header.php"; ?>

<div class="container mt-1">
   <div class="row">
	
<div class="card mb-4 mt-4">
      <div class="card-body">
        <h2> Selamat datang di Halaman Administrator </h2>
			<p >Silahkan akses beberapa fitur di bawah :</p>
      </div>
   </div>

      <div class="col-md-4">
         <div class="card">
            <div class="card-body text-center">
               <h5 class="card-title">Data Barang</h5>
               <?php
                  include '../koneksi.php';
                  $data_produk = mysqli_query($koneksi, "SELECT * FROM produk");
                  $jumlah_produk = mysqli_num_rows($data_produk);
               ?>
               <h3><?php echo $jumlah_produk; ?></h3>
               <a href="data_barang.php" class="btn btn-dark btn-sm">Detail</a>
            </div>
         </div>
      </div>

      <div class="col-md-4">
         <div class="card">
            <div class="card-body text-center">
               <h5 class="card-title">Data Pembelian</h5>
               <?php
                  include '../koneksi.php';
                  $data_penjualan = mysqli_query($koneksi, "SELECT * FROM penjualan");
                  $jumlah_penjualan = mysqli_num_rows($data_penjualan);
               ?>
               <h3><?php echo $jumlah_penjualan; ?></h3>
               <a href="pembelian.php" class="btn btn-dark btn-sm">Detail</a>
            </div>
         </div>
      </div>

      <div class="col-md-4">
         <div class="card">
            <div class="card-body text-center">
               <h5 class="card-title">Data Pengguna</h5>
               <?php
                  include '../koneksi.php';
                  $data_petugas = mysqli_query($koneksi, "SELECT * FROM petugas");
                  $jumlah_petugas = mysqli_num_rows($data_petugas);
               ?>
               <h3><?php echo $jumlah_petugas; ?></h3>
               <a href="data_pengguna.php" class="btn btn-dark btn-sm">Detail</a>
            </div>
         </div>
      </div>
   </div>

</div>

<?php include "footer.php"; ?>
