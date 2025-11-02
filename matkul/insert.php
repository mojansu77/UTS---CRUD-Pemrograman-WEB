<?php
include "koneksi.php";

if (isset($_POST['simpan'])) {
  $kode_matkul = $_POST['kode_matkul'];
  $nama = $_POST['nama'];
  $sks = $_POST['sks'];

  $sql = "INSERT INTO matkul (kode_matkul, nama, sks) VALUES ('$kode_matkul', '$nama', '$sks')";
  $query = mysqli_query($mysqli, $sql);

  if ($query) {
    echo "<script>alert('Data mata kuliah berhasil ditambahkan!');window.location='index.php?page=matkul';</script>";
  } else {
    echo "<script>alert('Gagal menambahkan data!');</script>";
  }
}
?>

<div class="content-wrapper p-4">
  <h3>Tambah Data Mata Kuliah</h3>
  <div class="card mt-3">
    <div class="card-body">
      <form method="post">
        <div class="form-group mb-3">
          <label>Kode Mata Kuliah</label>
          <input type="text" name="kode_matkul" class="form-control" placeholder="Masukkan kode mata kuliah" required>
        </div>

        <div class="form-group mb-3">
          <label>Nama Mata Kuliah</label>
          <input type="text" name="nama" class="form-control" placeholder="Masukkan nama mata kuliah" required>
        </div>

        <div class="form-group mb-3">
          <label>Jumlah SKS</label>
          <input type="number" name="sks" class="form-control" placeholder="Masukkan jumlah SKS" required>
        </div>

        <button type="submit" name="simpan" class="btn btn-success">Simpan</button>
        <a href="index.php?page=matkul" class="btn btn-secondary">Kembali</a>
      </form>
    </div>
  </div>
</div>