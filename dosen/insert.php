<?php
include "koneksi.php";

if (isset($_POST['simpan'])) {
  $nidn   = $_POST['nidn'];
  $nama   = $_POST['nama'];
  $gender = $_POST['gender'];
  $no_hp  = $_POST['no_hp'];

  $sql = "INSERT INTO dosen (nidn, nama, gender, no_hp)
          VALUES ('$nidn', '$nama', '$gender', '$no_hp')";
  $query = mysqli_query($mysqli, $sql);

  if ($query) {
    echo "<script>alert('Data berhasil ditambahkan!');window.location='index.php?page=dosen';</script>";
  } else {
    echo "<script>alert('Gagal menambahkan data!');</script>";
  }
}
?>

<div class="content-wrapper p-4">
  <h3>Tambah Data Dosen</h3>
  <div class="card mt-3">
    <div class="card-body">
      <form method="post">
        <div class="form-group mb-3">
          <label>NIDN</label>
          <input type="text" name="nidn" class="form-control" required>
        </div>
        <div class="form-group mb-3">
          <label>Nama</label>
          <input type="text" name="nama" class="form-control" required>
        </div>
        <div class="form-group mb-3">
          <label>Gender</label>
          <select name="gender" class="form-control" required>
            <option value="">Pilih...</option>
            <option value="L">Laki-laki</option>
            <option value="P">Perempuan</option>
          </select>
        </div>
        <div class="form-group mb-3">
          <label>No HP</label>
          <input type="text" name="no_hp" class="form-control">
        </div>
        <button type="submit" name="simpan" class="btn btn-success">Simpan</button>
        <a href="index.php?page=dosen" class="btn btn-secondary">Kembali</a>
      </form>
    </div>
  </div>
</div>