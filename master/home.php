<?php
include('../koneksi.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>SISM</title>
	<link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-success">
		<div class="container">
			<div class="container-fluid">
			    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			      <span class="navbar-toggler-icon"></span>
			    </button>
			    <div class="collapse navbar-collapse" id="navbarSupportedContent">
			      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
			        <li class="nav-item">
			          <a class="nav-link active text-white" aria-current="page" href="#">Home</a>
			        </li>
			        <li class="nav-item">
			          <a class="nav-link text-white" href="get_surat_masuk.php">Surat Masuk</a>
			        </li>
			        <li class="nav-item">
			          <a class="nav-link text-white" href="get_surat_keluar.php">Surat Keluar</a>
			        </li>
			        <li class="nav-item">
			          <a class="nav-link text-white" href="get_disposisi.php">Disposisi</a>
			        </li>
					<li class="nav-item dropdown">
			          <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Laporan</a>
			          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
			            <li><a class="dropdown-item" href="laporan_surat_masuk.php">Surat Masuk</a></li>
			            <li><a class="dropdown-item" href="laporan_surat_keluar.php">Surat Keluar</a></li>
			          </ul>
			        </li>
			        <li class="nav-item">
			          <a class="nav-link text-white" href="get_pengguna.php">Pengguna</a>
			        </li>
			      </ul>
				  <a class="nav-link text-white" href="../index.php">Logout</a>
			    </div>
			</div>
		</div>
	</nav>
	<div class="container mt-3">
		<div class="row justify-content-center">
		    <div class="col-8">
		      <h1>Sistem Informasi Surat Menyurat(SISM)</h1>
		      <p>Sistem Informasi Surat Menyurat adalah sistem informasi yang menangani kegiatan surat meyurat di dalam sebuah organisasi</p>
		    </div>
		</div>
	</div>
	<div class="container mt-3">
		<div class="row row-cols-1 row-cols-md-2 g-4">
		  <div class="col d-flex justify-content-end">
			<div class="card text-white mb-3" style="height: 10rem; width: 25rem; ; background-color: #80ed99">
			  <div class="card-body">
			    <h5 class="card-title">Jumlah Surat Masuk</h5>
			    <?php
			    $countSuratMasuk = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM surat_masuk"));
			    echo '<h1>'.$countSuratMasuk.'</h1>';
			    ?>
			  </div>
			</div>
		  </div>
		  <div class="col d-flex justify-content-start">
			<div class="card text-white mb-3" style="height: 10rem; width: 25rem; background-color: #38a3a5">
			  <div class="card-body">
			    <h5 class="card-title">Jumlah Surat Keluar</h5>
			    <?php
			    $countSuratKeluar = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM surat_keluar"));
			    echo '<h1>'.$countSuratKeluar.'</h1>';
			    ?>
			  </div>
			</div>
		  </div>
		  <div class="col d-flex justify-content-end">
			<div class="card text-white mb-3" style="height: 10rem; width: 25rem; background-color: #e9c46a">
			  <div class="card-body">
			    <h5 class="card-title">Jumlah Disposisi</h5>
			    <?php
			    $countDisposisi = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM disposisi"));
			    echo '<h1>'.$countDisposisi.'</h1>';
			    ?>
			  </div>
			</div>
		  </div>
		  <div class="col d-flex justify-content-start">
			<div class="card text-white mb-3" style="height: 10rem; width: 25rem; background-color: #e76f51">
			  <div class="card-body">
			    <h5 class="card-title">Jumlah Pengguna</h5>
			    <?php
			    $countPengguna = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM pengguna"));
			    echo '<h1>'.$countPengguna.'</h1>';
			    ?>
			  </div>
			</div>
		  </div>
		</div>
	</div>

	<script src="../js/bootstrap.min.js"></script>
</body>
</html>