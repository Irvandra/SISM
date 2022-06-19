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

	$query = "SELECT * FROM surat_masuk WHERE idSuratMasuk='$id'";
	$result = mysqli_query($conn, $query);
	$data = mysqli_fetch_array($result);
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
			          <a class="nav-link active text-white" aria-current="page" href="#">Surat Masuk</a>
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
		<div class="container mb-3">
			<div class="row justify-content-center">
				<div class="col-3">
			      <label><h5>Update Surat Masuk</h5></label>
			    </div>
			</div>
		</div>
		<form action="" method="POST" enctype="multipart/form-data">
			<div class="mb-3">
				<input type="text" class="form-control" name="idSuratMasuk" id="idSuratMasuk" value="<?= $data['idSuratMasuk'] ?>" disabled>
			</div>
			<div class="mb-3">
				<input type="text" class="form-control" name="perihal" id="perihal" value="<?= $data['perihalSuratMasuk'] ?>">
			</div>
			<div class="mb-3">
				<input type="text" class="form-control" name="asal" id="asal" value="<?= $data['asalSuratMasuk'] ?>">
			</div>
			<div class="mb-3">
				<input type="date" class="form-control" name="tanggal" id="tanggal" value="<?= $data['tanggalSuratMasuk'] ?>">
			</div>
			<div class="mb-3">
				<input type="File" class="form-control" name="file" id="file">
			</div>
			<a class="btn btn-success" href="get_surat_masuk.php" role="button">Kembali</a>
			<input class="btn btn-success" type="submit" name="submit" value="Simpan">
		</form>
	</div>

	<?php
	if (isset($_POST['submit'])) {
		$perihal = $_POST['perihal'];
		$asal = $_POST['asal'];
		$tanggal = $_POST['tanggal'];

		if ($_FILES["file"]["name"] == "") {
			$filename = $data['fileSuratMasuk'];
		} else {
			unlink("../files/".$data['fileSuratMasuk']);
			$filename = $_FILES["file"]["name"];
			$tempname = $_FILES["file"]["tmp_name"];
			$uploads_dir = '../files';
			move_uploaded_file($tempname, $uploads_dir.'/'.$filename);
		}

		$query = "UPDATE surat_masuk SET asalSuratMasuk = '$asal', tanggalSuratMasuk = '$tanggal', perihalSuratMasuk = '$perihal', fileSuratMasuk = '$filename' WHERE idSuratMasuk = '$id'";
		$result = mysqli_query($conn, $query);
		header("location:get_surat_masuk.php");
	}
	?>

	<script src="../js/bootstrap.min.js"></script>
</body>
</html>