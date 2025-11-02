<?php
include "koneksi.php";
$nim = $_GET['npm'];
$query = mysqli_query($mysqli, "DELETE FROM mahasiswa WHERE npm='$npm'");

if ($query) {
  echo "<script>alert('Data berhasil dihapus!');window.location='index.php?page=mahasiswa';</script>";
} else {
  echo "<script>alert('Gagal menghapus data!');window.location='index.php?page=mahasiswa';</script>";
}
?>