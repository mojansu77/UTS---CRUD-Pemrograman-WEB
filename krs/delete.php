<?php
include "koneksi.php";
$kode = $_GET['kode'];

mysqli_query($mysqli, "DELETE FROM krs WHERE kode='$kode'");
echo "<script>alert('Data berhasil dihapus!');window.location='index.php?page=krs';</script>";
?>