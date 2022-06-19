<?php
include('../koneksi.php');

$query = "SELECT * FROM pengguna";
$result = mysqli_query($conn,$query);
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
		<div class="container mb-2">
			<div class="row justify-content-center">
				<div class="col-3">
			      <label><h5>Daftar Pengguna</h5></label>
			    </div>
			</div>
			<div class="row justify-content-end">
			    <div class="col-1">
			      <a class="btn btn-success" href="add_pengguna.php" role="button">Tambah</a>
			    </div>
			</div>
		</div>
		<table class="table">
		  <thead>
		    <tr>
		      <th scope="col">ID Pengguna</th>
		      <th scope="col">Nama Pengguna</th>
		      <th scope="col">Jabatan</th>
		      <th scope="col">Action</th>
		    </tr>
		  </thead>
		  <tbody>
		  	<?php while($data = mysqli_fetch_array($result)) { ?>
			    <tr>
			      <th scope="row"><?= $data['idPengguna'] ?></th>
			      <td><?= $data['namaPengguna'] ?></td>
			      <td><?= $data['jabatan'] ?></td>
			      <td><a href="update_pengguna.php?id=<?= $data['idPengguna']; ?>"><img src="../icon/ic_update.png"></a> <a href="delete_pengguna.php?id=<?= $data['idPengguna']; ?>"><img src="../icon/ic_delete.png"></a></td>
			    </tr>
			<?php } ?>
		  </tbody>
		</table>
	</div>

	<script src="../js/bootstrap.min.js"></script>
</body>
</html>