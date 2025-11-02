<?php
include "koneksi.php";

if (isset($_POST['simpan'])) {
  $npm = $_POST['npm'];
  $kode_matkul_list = $_POST['kode_matkul']; // array dari checkbox

  // Ambil kode terakhir dari tabel KRS
  $result = mysqli_query($mysqli, "SELECT kode FROM krs ORDER BY kode DESC LIMIT 1");
  $row = mysqli_fetch_assoc($result);

  // Tentukan nomor baru (jika belum ada data, mulai dari 1)
  if ($row) {
    $last_kode = intval($row['kode']);
    $new_kode = $last_kode + 1;
  } else {
    $new_kode = 1;
  }

  // Simpan data KRS untuk setiap mata kuliah yang dipilih
  foreach ($kode_matkul_list as $kode_matkul) {
    // Format kode menjadi 4 digit (0001, 0002, ...)
    $kode_format = str_pad($new_kode, 4, "0", STR_PAD_LEFT);

    mysqli_query($mysqli, "INSERT INTO krs (kode, npm, kode_matkul) VALUES ('$kode_format', '$npm', '$kode_matkul')");

    // Tambahkan kode untuk baris berikutnya
    $new_kode++;
  }

  echo "<script>alert('KRS berhasil disimpan!');window.location='index.php?page=krs';</script>";
}
?>

<div class="content-wrapper p-4">
  <h3>Tambah Data KRS</h3>
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
              echo "<option value='{$row['npm']}'>{$row['nama']} ({$row['npm']})</option>";
            }
            ?>
          </select>
        </div>

        <div class="form-group mb-3">
          <label>Mata Kuliah</label><br>
          <?php
          $mk = mysqli_query($mysqli, "SELECT * FROM matkul ORDER BY nama ASC");
          while ($row = mysqli_fetch_assoc($mk)) {
            echo "<div><input type='checkbox' name='kode_matkul[]' value='{$row['kode_matkul']}'> {$row['nama']} ({$row['kode_matkul']})</div>";
          }
          ?>
        </div>

        <button type="submit" name="simpan" class="btn btn-success">Simpan</button>
        <a href="index.php?page=krs" class="btn btn-secondary">Kembali</a>
      </form>
    </div>
  </div>
</div>