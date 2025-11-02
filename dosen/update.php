<?php
include "koneksi.php";

$nidn = $_GET['nidn'];
$query = mysqli_query($mysqli, "SELECT * FROM dosen WHERE nidn='$nidn'");
$data = mysqli_fetch_assoc($query);

if (isset($_POST['update'])) {
  $nama   = $_POST['nama'];
  $gender = $_POST['gender'];
  $no_hp  = $_POST['no_hp'];

  $sql = "UPDATE dosen SET nama='$nama', gender='$gender', no_hp='$no_hp' WHERE nidn='$nidn'";
  $q = mysqli_query($mysqli, $sql);

  if ($q) {
    echo "<script>alert('Data berhasil diupdate!');window.location='index.php?page=dosen';</script>";
  } else {
    echo "<script>alert('Gagal mengupdate data!');</script>";
  }
}
?>

<div class="content-wrapper p-4">
  <h3>Edit Data Dosen</h3>
  <div class="card mt-3">
    <div class="card-body">
      <form method="post">
        <div class="form-group mb-3">
          <label>NIDN</label>
          <input type="text" name="nidn" value="<?= $data['nidn'] ?>" class="form-control" readonly>
        </div>
        <div class="form-group mb-3">
          <label>Nama</label>
          <input type="text" name="nama" value="<?= $data['nama'] ?>" class="form-control" required>
        </div>
        <div class="form-group mb-3">
          <label>Gender</label>
          <select name="gender" class="form-control" required>
            <option value="L" <?= $data['gender'] == 'L' ? 'selected' : '' ?>>Laki-laki</option>
            <option value="P" <?= $data['gender'] == 'P' ? 'selected' : '' ?>>Perempuan</option>
          </select>
        </div>
        <div class="form-group mb-3">
          <label>No HP</label>
          <input type="text" name="no_hp" value="<?= $data['no_hp'] ?>" class="form-control">
        </div>
        <button type="submit" name="update" class="btn btn-primary">Update</button>
        <a href="index.php?page=dosen" class="btn btn-secondary">Kembali</a>
      </form>
    </div>
  </div>
</div>