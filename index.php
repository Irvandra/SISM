<!DOCTYPE html>
<html>
<head>
	<title>SISM</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
	<div class="container bg-light" style="margin: 150px 100px 150px 100px">
		<div class="d-flex justify-content-center">
			<label><h1>SISM</h1></label>
		</div>
		<div class="d-flex justify-content-center">
			<form action="#" method="POST">
			  <div class="mb-3">
			    <label for="username" class="form-label">Username</label>
			    <input required type="text" class="form-control" name="username" id="username">
			  </div>
			  <div class="mb-3">
			    <label for="password" class="form-label">Password</label>
			    <input required type="password" class="form-control" name="password" id="password">
			  </div>
			  <div class="d-flex justify-content-end mb-3">
				<button type="submit" name="submit" class="btn btn-success">Login</button>
			  </div>
			</form>
		</div>
	</div>

	<?php
	include('koneksi.php');

	if (isset($_POST['submit'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];

		$query = "SELECT * FROM pengguna WHERE username='$username' AND password='$password' LIMIT 1";
		$result = mysqli_query($conn, $query);

		if (mysqli_num_rows($result) == 1) {
			header("location:master/home.php");
		} else {
			echo '<script>alert("username dan password tidak ditemukan")</script>';
		}
	}
	?>

	<script src="js/bootstrap.min.js"></script>
</body>
</html>