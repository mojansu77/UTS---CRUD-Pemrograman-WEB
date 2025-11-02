<?php
include "koneksi.php";

$npm = $_GET['npm'];
$q = mysqli_query($mysqli, "SELECT * FROM mahasiswa WHERE npm='$npm'");
$data = mysqli_fetch_assoc($q);

if (isset($_POST['update'])) {
  $nama   = $_POST['nama'];
  $gender = $_POST['gender'];
  $no_hp  = $_POST['no_hp'];
  $nidn   = $_POST['nidn'];

  $sql = "UPDATE mahasiswa SET 
          nama='$nama', gender='$gender', no_hp='$no_hp', nidn='$nidn'
          WHERE npm='$npm'";
  $query = mysqli_query($mysqli, $sql);

  if ($query) {
    echo "<script>alert('Data berhasil diperbarui!');window.location='index.php?page=mahasiswa';</script>";
  } else {
    echo "<script>alert('Gagal memperbarui data!');</script>";
  }
}
?>

<div class="content-wrapper p-4">
  <h3>Edit Data Mahasiswa</h3>
  <div class="card mt-3">
    <div class="card-body">
      <form method="post">
        <div class="form-group mb-3">
          <label>NPM</label>
          <input type="text" name="npm" class="form-control" value="<?= $data['npm'] ?>" readonly>
        </div>
        <div class="form-group mb-3">
          <label>Nama</label>
          <input type="text" name="nama" class="form-control" value="<?= $data['nama'] ?>" required>
        </div>
        <div class="form-group mb-3">
          <label>Gender</label>
          <select name="gender" class="form-control" required>
            <option value="L" <?= ($data['gender'] == 'L') ? 'selected' : '' ?>>Laki-laki</option>
            <option value="P" <?= ($data['gender'] == 'P') ? 'selected' : '' ?>>Perempuan</option>
          </select>
        </div>
        <div class="form-group mb-3">
          <label>No HP</label>
          <input type="text" name="no_hp" class="form-control" value="<?= $data['no_hp'] ?>">
        </div>
        <div class="form-group mb-3">
          <label>Dosen Pembimbing</label>
          <select name="nidn" class="form-control">
            <?php
            $dosen = mysqli_query($mysqli, "SELECT * FROM dosen ORDER BY nama ASC");
            while ($row = mysqli_fetch_assoc($dosen)) {
              $selected = ($row['nidn'] == $data['nidn']) ? 'selected' : '';
              echo "<option value='{$row['nidn']}' $selected>{$row['nama']}</option>";
            }
            ?>
          </select>
        </div>
        <button type="submit" name="update" class="btn btn-success">Update</button>
        <a href="index.php?page=mahasiswa" class="btn btn-secondary">Kembali</a>
      </form>
    </div>
  </div>
</div>