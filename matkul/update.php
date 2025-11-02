<?php
include "koneksi.php";
$kode_matkul = $_GET['kode_matkul'];
$data = mysqli_fetch_assoc(mysqli_query($mysqli, "SELECT * FROM matkul WHERE kode_matkul='$kode_matkul'"));

if (isset($_POST['update'])) {
  $nama = $_POST['nama'];
  $sks = $_POST['sks'];

  $sql = "UPDATE matkul SET nama='$nama', sks='$sks' WHERE kode_matkul='$kode_matkul'";
  $query = mysqli_query($mysqli, $sql);

  if ($query) {
    echo "<script>alert('Data berhasil diperbarui!');window.location='index.php?page=matkul';</script>";
  } else {
    echo "<script>alert('Gagal memperbarui data!');</script>";
  }
}
?>

<div class="content-wrapper p-4">
  <h3>Edit Data Mata Kuliah</h3>
  <div class="card mt-3">
    <div class="card-body">
      <form method="post">
        <div class="form-group mb-3">
          <label>Kode Mata Kuliah</label>
          <input type="text" name="kode_matkul" class="form-control" value="<?= $data['kode_matkul'] ?>" readonly>
        </div>

        <div class="form-group mb-3">
          <label>Nama Mata Kuliah</label>
          <input type="text" name="nama" class="form-control" value="<?= $data['nama'] ?>" required>
        </div>

        <div class="form-group mb-3">
          <label>Jumlah SKS</label>
          <input type="number" name="sks" class="form-control" value="<?= $data['sks'] ?>" required>
        </div>

        <button type="submit" name="update" class="btn btn-success">Perbarui</button>
        <a href="index.php?page=matkul" class="btn btn-secondary">Kembali</a>
      </form>
    </div>
  </div>
</div>