<div class="content-wrapper p-4">
  <section class="content-header mb-3 d-flex justify-content-between align-items-center">
    <h3 class="mb-0">Data Dosen</h3>
    <div>
      <a href="index.php?page=home" class="btn btn-secondary btn-sm me-2">
        <i class="bi bi-house"></i> Kembali ke Beranda
      </a>
      <a href="index.php?page=tambah_dosen" class="btn btn-primary btn-sm">
        <i class="bi bi-plus-circle"></i> Tambah Dosen
      </a>
    </div>
  </section>

  <section class="content">
    <div class="card">
      <div class="card-body">
        <table class="table table-bordered table-striped table-theme table-theme-dosen">

          <thead class="table-light">
            <tr>
              <th>NIDN</th>
              <th>Nama</th>
              <th>Gender</th>
              <th>No HP</th>
              <th width="150px">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php
            include "koneksi.php";
            $query = mysqli_query($mysqli, "SELECT * FROM dosen ORDER BY nama ASC");
            while ($row = mysqli_fetch_assoc($query)) {
            ?>
              <tr>
                <td><?= $row['nidn'] ?></td>
                <td><?= $row['nama'] ?></td>
                <td><?= ($row['gender'] == 'L') ? 'Laki-laki' : 'Perempuan' ?></td>
                <td><?= $row['no_hp'] ?></td>
                <td>
                  <a href="index.php?page=edit_dosen&nidn=<?= $row['nidn'] ?>" class="btn btn-warning btn-sm">
                    <i class="bi bi-pencil-square"></i> Edit
                  </a>
                  <a href="index.php?page=hapus_dosen&nidn=<?= $row['nidn'] ?>"
                     class="btn btn-danger btn-sm"
                     onclick="return confirm('Yakin ingin menghapus data ini?')">
                     <i class="bi bi-trash"></i> Hapus
                  </a>
                </td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
        <style>
  .table {
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 3px 8px rgba(0, 0, 0, 0.1);
  }

  .table thead {
    background: linear-gradient(90deg, #2563eb, #1e3a8a); /* biru elegan */
    color: white;
  }

  .table tbody tr:hover {
    background-color: #e0e7ff;
    transition: background-color 0.2s ease;
  }

  .btn-warning {
    background-color: #f59e0b;
    border: none;
  }
  .btn-warning:hover {
    background-color: #d97706;
  }

  .btn-danger {
    background-color: #dc2626;
    border: none;
  }
  .btn-danger:hover {
    background-color: #b91c1c;
  }

  .btn-primary {
    background-color: #2563eb;
    border: none;
  }
  .btn-primary:hover {
    background-color: #1d4ed8;
  }
</style>

      </div>
    </div>
  </section>
</div>