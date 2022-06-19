<?php
include('../koneksi.php');
$id = $_GET['id'];

$queryShow = "SELECT * FROM surat_masuk WHERE idSuratMasuk='$id'";
$resultShow = mysqli_query($conn, $queryShow);
$data = mysqli_fetch_assoc($resultShow);

unlink("../files/".$data['fileSuratMasuk']);

$queryDisposisi = "DELETE FROM disposisi WHERE disposisi.idSuratMasuk='$id'";
$resultDisposisi = mysqli_query($conn, $queryDisposisi);
$querySuratMasuk = "DELETE FROM surat_masuk WHERE idSuratMasuk='$id'";
$resultSuratMasuk = mysqli_query($conn, $querySuratMasuk);
header("location:get_surat_masuk.php");
?>