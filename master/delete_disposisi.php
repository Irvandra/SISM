<?php
include('../koneksi.php');
$id = $_GET['id'];

$query = "DELETE FROM disposisi WHERE idDisposisi='$id'";
$result = mysqli_query($conn, $query);
header("location:get_disposisi.php");
?>