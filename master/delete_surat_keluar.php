<?php
include('../koneksi.php');
$id = $_GET['id'];

$queryShow = "SELECT * FROM surat_keluar WHERE idSuratKeluar='$id'";
$resultShow = mysqli_query($conn, $queryShow);
$data = mysqli_fetch_assoc($resultShow);

unlink("../files/".$data['fileSuratKeluar']);

$query = "DELETE FROM surat_keluar WHERE idSuratKeluar='$id'";
$result = mysqli_query($conn, $query);
header("location:get_surat_keluar.php");
?>