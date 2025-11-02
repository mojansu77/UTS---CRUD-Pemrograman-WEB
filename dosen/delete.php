<?php
include "koneksi.php";

$nidn = $_GET['nidn'];
$q = mysqli_query($mysqli, "DELETE FROM dosen WHERE nidn='$nidn'");

if ($q) {
  echo "<script>alert('Data berhasil dihapus!');window.location='index.php?page=dosen';</script>";
} else {
  echo "<script>alert('Gagal menghapus data!');window.location='index.php?page=dosen';</script>";
}
?>