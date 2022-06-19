<?php
include('../koneksi.php');

$query = "SELECT * FROM surat_keluar";
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
			          <a class="nav-link text-white" href="get_pengguna.php">Pengguna</a>
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
			      <label><h5>Laporan Surat Keluar</h5></label>
			    </div>
			</div>
		</div>
		<table class="table table-bordered">
		  <thead>
		    <tr>
		      <th scope="col">ID Surat</th>
		      <th scope="col">Perihal</th>
		      <th scope="col">Penerima</th>
		      <th scope="col">Tanggal</th>
		      <th scope="col">File</th>
		    </tr>
		  </thead>
		  <tbody>
		  	<?php while($data = mysqli_fetch_array($result)) { ?>
			    <tr>
			      <th scope="row"><?= $data['idSuratKeluar'] ?></th>
			      <td><?= $data['perihalSuratKeluar'] ?></td>
			      <td><?= $data['tujuanSuratKeluar'] ?></td>
			      <td><?= $data['tanggalSuratKeluar'] ?></td>
			      <td><?= $data['fileSuratKeluar'] ?></td>
			    </tr>
			<?php } ?>
		  </tbody>
		</table>
	</div>
	<div class="container d-flex justify-content-end">
		<button type="button" onclick="window.print()" class="btn btn-success">Cetak</button>
	</div>

	<script src="../js/bootstrap.min.js"></script>
</body>
</html>