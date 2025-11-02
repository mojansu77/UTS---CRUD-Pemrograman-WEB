<?php
include "koneksi.php";
$kode = $_GET['kode'];

if (isset($_POST['update'])) {
  $npm = $_POST['npm'];
  $kode_matkul = $_POST['kode_matkul'];

  mysqli_query($mysqli, "UPDATE krs SET npm='$npm', kode_matkul='$kode_matkul' WHERE kode='$kode'");
  echo "<script>alert('Data berhasil diupdate!');window.location='index.php?page=krs';</script>";
}

$query = mysqli_query($mysqli, "
  SELECT * FROM krs WHERE kode='$kode'
");
$data = mysqli_fetch_assoc($query);
?>

<div class="content-wrapper p-4">
  <h3>Edit Data KRS</h3>
  <div class="card mt-3">
    <div class="card-body">
      <form method="post">
        <div class="form-group mb-3">
          <label>Mahasiswa</label>
          <select name="npm" class="form-control" required>
            <option value="">Pilih Mahasiswa</option>
            <?php
            $mhs = mysqli_query($mysqli, "SELECT * FROM mahasiswa ORDER BY nama ASC");
            while ($row = mysqli_fetch_assoc($mhs)) {
              $selected = ($data['npm'] == $row['npm']) ? 'selected' : '';
              echo "<option value='{$row['npm']}' $selected>{$row['nama']} ({$row['npm']})</option>";
            }
            ?>
          </select>
        </div>

        <div class="form-group mb-3">
          <label>Mata Kuliah</label>
          <select name="kode_matkul" class="form-control" required>
            <option value="">Pilih Mata Kuliah</option>
            <?php
            $mk = mysqli_query($mysqli, "SELECT * FROM matkul ORDER BY nama_matkul ASC");
            while ($row = mysqli_fetch_assoc($mk)) {
              $selected = ($data['kode_matkul'] == $row['kode_matkul']) ? 'selected' : '';
              echo "<option value='{$row['kode_matkul']}' $selected>{$row['nama_matkul']} ({$row['kode_matkul']})</option>";
            }
            ?>
          </select>
        </div>

        <button type="submit" name="update" class="btn btn-success">Update</button>
        <a href="index.php?page=krs" class="btn btn-secondary">Kembali</a>
      </form>
    </div>
  </div>
</div>