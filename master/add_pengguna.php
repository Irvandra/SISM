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
			          <a class="nav-link active text-white" aria-current="page" href="#">Pengguna</a>
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
			      <label><h5>Tambah Pengguna</h5></label>
			    </div>
			</div>
		</div>
		<form action="" method="POST" enctype="multipart/form-data">
			<div class="mb-3">
				<input required type="text" class="form-control" name="id" id="id" placeholder="ID Pengguna">
			</div>
			<div class="mb-3">
				<input required type="text" class="form-control" name="nama" id="nama" placeholder="Nama">
			</div>
			<div class="mb-3">
				<select required class="form-select" name="jabatan" id="jabatan" aria-label="Default select example">
				  <option value="Admin Web">Admin Web</option>
				  <option value="Manager">Manager</option>
				  <option value="Staf Administrasi">Staf Administrasi</option>
				  <option value="Karyawan">Karyawan</option>
				</select>
			</div>
			<div class="mb-3">
				<input required type="text" class="form-control" name="username" id="username" placeholder="Username">
			</div>
			<div class="mb-3">
				<input required type="password" class="form-control" name="password" id="password" placeholder="Password">
			</div>
			<div class="mb-3">
				<input required type="password" class="form-control" name="confirmPassword" id="confirmPassword" placeholder="Confirm Password">
			</div>
			<a class="btn btn-success" href="get_Pengguna.php" role="button">Kembali</a>
			<input class="btn btn-success" type="submit" name="submit" value="Simpan">
		</form>
	</div>

	<?php
	include('../koneksi.php');
	
	if (isset($_POST['submit'])) {
		$id = $_POST['id'];
		$nama = $_POST['nama'];
		$jabatan = $_POST['jabatan'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$confirmPassword = $_POST['confirmPassword'];

		if ($password == $confirmPassword) {
			$query = "INSERT INTO pengguna (idPengguna, namaPengguna, jabatan, username, password) VALUES ('$id', '$nama', '$jabatan', '$username', '$password')";
			$result = mysqli_query($conn, $query);
			header("location:get_Pengguna.php");
		} else {
			echo '<script>alert("konfirmasi password tidak sesuai")</script>';
		}
	}
	?>

	<script src="../js/bootstrap.min.js"></script>
</body>
</html>