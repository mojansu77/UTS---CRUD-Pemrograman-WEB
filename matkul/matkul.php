<div class="content-wrapper p-4">
  <section class="content-header mb-3 d-flex justify-content-between align-items-center">
    <h3>Data Mata Kuliah</h3>
    <div>
      <a href="index.php?page=tambah_matkul" class="btn btn-primary btn-sm">+ Tambah Mata Kuliah</a>
      <a href="index.php?page=home" class="btn btn-secondary btn-sm">Kembali ke Beranda</a>
    </div>
  </section>

  <section class="content">
    <div class="card">
      <div class="card-body">
        <table class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>Kode Mata Kuliah</th>
              <th>Nama</th>
              <th>SKS</th>
              <th width="150px">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php
            include "koneksi.php";
            $query = mysqli_query($mysqli, "SELECT * FROM matkul ORDER BY nama ASC");
            while ($row = mysqli_fetch_assoc($query)) {
            ?>
              <tr>
                <td><?= $row['kode_matkul'] ?></td>
                <td><?= $row['nama'] ?></td>
                <td><?= $row['sks'] ?></td>
                <td>
                  <a href="index.php?page=edit_matkul&kode_matkul=<?= $row['kode_matkul'] ?>" class="btn btn-warning btn-sm">Edit</a>
                  <a href="index.php?page=hapus_matkul&kode_matkul=<?= $row['kode_matkul'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
                </td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
        <style>
  .table-matkul {
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 3px 8px rgba(0, 0, 0, 0.1);
  }

  .table-matkul thead {
    background: linear-gradient(90deg, #facc15, #b45309); /* gradasi emas */
    color: #ffffff;
  }

  .table-matkul tbody tr:hover {
    background-color: #fef3c7; /* kuning muda lembut */
    transition: 0.2s ease;
  }

  .btn-primary {
    background-color: #b45309;
    border: none;
  }
  .btn-primary:hover {
    background-color: #92400e;
  }

  .btn-warning {
    background-color: #facc15;
    border: none;
    color: #000;
  }
  .btn-warning:hover {
    background-color: #eab308;
  }

  .btn-danger {
    background-color: #dc2626;
    border: none;
  }
  .btn-danger:hover {
    background-color: #b91c1c;
  }

  .content-header h3 {
    color: #b45309;
    font-weight: 600;
  }
</style>
      </div>
    </div>
  </section>
</div>