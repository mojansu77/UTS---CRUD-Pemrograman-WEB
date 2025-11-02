<?php
include "koneksi.php";
$kode_matkul = $_GET['kode_matkul'];
$query = mysqli_query($mysqli, "DELETE FROM matkul WHERE kode_matkul='$kode_matkul'");

if ($query) {
  echo "<script>alert('Data berhasil dihapus!');window.location='index.php?page=matkul';</script>";
} else {
  echo "<script>alert('Gagal menghapus data!');</script>";
}
?>