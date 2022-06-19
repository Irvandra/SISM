<!DOCTYPE html>
<html>
<head>
	<title>SISM</title>
	<link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<body>
	<?php
	include('../koneksi.php');
	$id = $_GET['id'];

	$query = "SELECT * FROM disposisi WHERE idDisposisi='$id'";
	$result = mysqli_query($conn, $query);
	while ($data = mysqli_fetch_array($result)) {
	?>

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
			      <label><h5>Update Disposisi</h5></label>
			    </div>
			</div>
		</div>
		<form action="" method="POST">
			<div class="mb-3">
				<input type="text" class="form-control" name="idDisposisi" id="idDisposisi" value="<?= $data['idDisposisi'] ?>" disabled>
			</div>
			<div class="mb-3">
				<input type="text" class="form-control" name="sifat" id="sifat" value="<?= $data['sifatDisposisi'] ?>">
			</div>
			<div class="mb-3">
				<input type="date" class="form-control" name="tanggal" id="tanggal" value="<?= $data['tanggalDisposisi'] ?>">
			</div>
			<div class="mb-3">
				<input type="text" class="form-control" name="tujuan" id="tujuan" value="<?= $data['tujuanDisposisi'] ?>">
			</div>
			<div class="mb-3">
				<textarea class="form-control" name="keterangan" id="keterangan" rows="3"><?= $data['keteranganDisposisi'] ?></textarea>
			</div>
			<div class="mb-3">
				<input type="text" class="form-control" name="idSuratMasuk" id="idSuratMasuk" value="<?= $data['idSuratMasuk'] ?>" disabled>
			</div>
			<a class="btn btn-success" href="get_disposisi.php" role="button">Kembali</a>
			<input class="btn btn-success" type="submit" name="submit" value="Simpan">
		</form>
	</div>

	<?php }
	if (isset($_POST['submit'])) {
		$sifat = $_POST['sifat'];
		$tanggal = $_POST['tanggal'];
		$tujuan = $_POST['tujuan'];
		$keterangan = $_POST['keterangan'];

		$query = "UPDATE disposisi SET sifatDisposisi = '$sifat', tanggalDisposisi = '$tanggal', tujuanDisposisi = '$tujuan', keteranganDisposisi = '$keterangan' WHERE idDisposisi = '$id'";
		$result = mysqli_query($conn, $query);
		header("location:get_disposisi.php");
	}
	?>

	<script src="../js/bootstrap.min.js"></script>
</body>
</html>