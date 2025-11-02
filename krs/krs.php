<?php
include "koneksi.php";
?>

<div class="content-wrapper p-4">
  <section class="content-header mb-3">
    <h3>Data KRS</h3>
    <a href="index.php?page=tambah_krs" class="btn btn-primary btn-sm">+ Tambah KRS</a>
  </section>

  <section class="content">
    <div class="card">
      <div class="card-body">
        <table class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>Kode</th>
              <th>Nama Mahasiswa</th>
              <th>Mata Kuliah</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $query = mysqli_query($mysqli, "
              SELECT krs.kode, mhs.npm, mhs.nama AS nama_mhs, mk.nama AS nama_matkul
              FROM krs
              JOIN mahasiswa mhs ON krs.npm = mhs.npm
              JOIN matkul mk ON krs.kode_matkul = mk.kode_matkul
              ORDER BY krs.kode ASC
            ");

            while ($row = mysqli_fetch_assoc($query)) {
            ?>
              <tr>
                <td><?= $row['kode'] ?></td>
                <td><?= $row['nama_mhs'] ?> (<?= $row['npm'] ?>)</td>
                <td><?= $row['nama_matkul'] ?></td>
                <td>
                  <a href="index.php?page=edit_krs&kode=<?= $row['kode'] ?>" class="btn btn-warning btn-sm">Edit</a>
                  <a href="index.php?page=hapus_krs&kode=<?= $row['kode'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
                </td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
        <style>
/* ==== STYLE TABEL DASHBOARD ==== */
.card {
  border: none;
  border-radius: 12px;
  box-shadow: 0 2px 6px rgba(0,0,0,0.08);
  background: #fff;
}

.table {
  width: 100%;
  border-collapse: separate;
  border-spacing: 0;
  font-size: 14px;
  color: #333;
}

.table thead {
  background-color: #f6f8fa;
}

.table thead th {
  font-weight: 600;
  padding: 12px;
  border-bottom: 2px solid #e5e9ec;
}

.table tbody tr {
  transition: background-color 0.2s ease, transform 0.1s ease;
}

.table tbody tr:hover {
  background-color: #f1f5f9;
  transform: scale(1.005);
}

.table td {
  padding: 10px 12px;
  border-bottom: 1px solid #e9ecef;
}

/* Tombol aksi */
.btn {
  border-radius: 6px;
  transition: all 0.2s ease;
}

.btn:hover {
  transform: translateY(-2px);
}

.btn-primary {
  background-color: #6c09c9ff;
  border: none;
}

.btn-warning {
  background-color: #ffc107;
  border: none;
  color: #000;
}

.btn-danger {
  background-color: #dc3545;
  border: none;
}

.btn-secondary {
  background-color: #6c757d;
  border: none;
}

.content-header h3 {
  font-weight: 600;
  color: #222;
}

.content-wrapper {
  background-color: #f8fafc;
  min-height: 100vh;
}
</style>

      </div>
    </div>
  </section>
</div>