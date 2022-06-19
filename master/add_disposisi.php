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
			          <a class="nav-link text-white" href="home.php">Home</a>
			        </li>
			        <li class="nav-item">
			          <a class="nav-link text-white" href="get_surat_masuk.php">Surat Masuk</a>
			        </li>
			        <li class="nav-item">
			          <a class="nav-link text-white" href="get_surat_keluar.php">Surat Keluar</a>
			        </li>
			        <li class="nav-item">
			          <a class="nav-link active text-white" aria-current="page" href="#">Disposisi</a>
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
		<div class="container mb-3">
			<div class="row justify-content-center">
				<div class="col-3">
			      <label><h5>Tambah Disposisi</h5></label>
			    </div>
			</div>
		</div>
		<form action="" method="POST" enctype="multipart/form-data">
			<div class="mb-3">
				<input required type="text" class="form-control" name="id" id="id" placeholder="ID Disposisi">
			</div>
			<div class="mb-3">
				<input required type="text" class="form-control" name="sifat" id="perihal" placeholder="Sifat">
			</div>
			<div class="mb-3">
				<input required type="date" class="form-control" name="tanggal" id="tanggal">
			</div>
			<div class="mb-3">
				<input required type="text" class="form-control" name="tujuan" id="tujuan" placeholder="Tujuan">
			</div>
			<div class="mb-3">
				<textarea class="form-control" name="keterangan" id="keterangan" placeholder="Keterangan" rows="3"></textarea>
			</div>
			<div class="mb-3">
				<input required type="text" class="form-control" name="idSuratMasuk" id="idSuratMasuk" placeholder="ID Surat Masuk">
			</div>
			<a class="btn btn-success" href="get_disposisi.php" role="button">Kembali</a>
			<input class="btn btn-success" type="submit" name="submit" value="Simpan">
		</form>
	</div>

	<?php
	include('../koneksi.php');
	
	if (isset($_POST['submit'])) {
		$id = $_POST['id'];
		$sifat = $_POST['sifat'];
		$tanggal = $_POST['tanggal'];
		$tujuan = $_POST['tujuan'];
		$keterangan = $_POST['keterangan'];
		$idSuratMasuk = $_POST['idSuratMasuk'];

		$queryUpdate = "INSERT INTO disposisi (idDisposisi, sifatDisposisi, tanggalDisposisi, tujuanDisposisi, keteranganDisposisi, idSuratMasuk) VALUES ('$id', '$sifat','$tanggal', '$tujuan', '$keterangan', '$idSuratMasuk')";
		$resultUpdate = mysqli_query($conn, $queryUpdate);
		header("location:get_disposisi.php");
	}
	?>

	<script src="../js/bootstrap.min.js"></script>
</body>
</html>