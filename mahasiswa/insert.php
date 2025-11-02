<?php
include "koneksi.php";

if (isset($_POST['simpan'])) {
  $npm    = $_POST['npm'];
  $nama   = $_POST['nama'];
  $gender = $_POST['gender'];
  $no_hp  = $_POST['no_hp'];
  $nidn   = $_POST['nidn'];

  $sql = "INSERT INTO mahasiswa (npm, nama, gender, no_hp, nidn)
          VALUES ('$npm', '$nama', '$gender', '$no_hp', '$nidn')";
  $query = mysqli_query($mysqli, $sql);

  if ($query) {
    echo "<script>alert('Data berhasil ditambahkan!');window.location='index.php?page=mahasiswa';</script>";
  } else {
    echo "<script>alert('Gagal menambahkan data!');</script>";
  }
}
?>

<div class="content-wrapper p-4">
  <h3>Tambah Data Mahasiswa</h3>
  <div class="card mt-3">
    <div class="card-body">
      <form method="post">
        <div class="form-group mb-3">
          <label>NPM</label>
          <input type="text" name="npm" class="form-control" required>
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
        <div class="form-group mb-3">
          <label>Dosen Pembimbing</label>
          <select name="nidn" class="form-control" required>
            <option value="">-- Pilih Dosen --</option>
            <?php
            $dosen = mysqli_query($mysqli, "SELECT * FROM dosen ORDER BY nama ASC");
            while ($row = mysqli_fetch_assoc($dosen)) {
              echo "<option value='{$row['nidn']}'>{$row['nama']}</option>";
            }
            ?>
          </select>
        </div>
        <button type="submit" name="simpan" class="btn btn-success">Simpan</button>
        <a href="index.php?page=mahasiswa" class="btn btn-secondary">Kembali</a>
      </form>
    </div>
  </div>
</div>