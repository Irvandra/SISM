<?php
include('../koneksi.php');
$id = $_GET['id'];

$query = "DELETE FROM pengguna WHERE idPengguna='$id'";
$result = mysqli_query($conn, $query);
header("location:get_pengguna.php");
?>