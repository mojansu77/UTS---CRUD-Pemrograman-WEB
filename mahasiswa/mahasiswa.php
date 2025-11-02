<div class="content-wrapper p-4">
  <section class="content-header mb-3 d-flex justify-content-between align-items-center">
    <h3 class="mb-0">Data Mahasiswa</h3>
    <div>
      <a href="index.php?page=home" class="btn btn-secondary btn-sm me-2">
        <i class="bi bi-house"></i> Kembali ke Beranda
      </a>
      <a href="index.php?page=tambah_mahasiswa" class="btn btn-primary btn-sm">
        <i class="bi bi-plus-circle"></i> Tambah Mahasiswa
      </a>
    </div>
  </section>

  <section class="content">
    <div class="card">
      <div class="card-body">
        <table class="table table-bordered table-striped">
          <thead class="table-light">
            <tr>
              <th>NPM</th>
              <th>Nama</th>
              <th>Gender</th>
              <th>No HP</th>
              <th>Dosen Pembimbing</th>
              <th width="150px">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php
            include "koneksi.php";
            $query = mysqli_query($mysqli, "SELECT m.*, d.nama AS dosen_nama FROM mahasiswa m 
                                            LEFT JOIN dosen d ON m.nidn = d.nidn
                                            ORDER BY m.nama ASC");
            while ($row = mysqli_fetch_assoc($query)) {
            ?>
              <tr>
                <td><?= $row['npm'] ?></td>
                <td><?= $row['nama'] ?></td>
                <td><?= ($row['gender'] == 'L') ? 'Laki-laki' : 'Perempuan' ?></td>
                <td><?= $row['no_hp'] ?></td>
                <td><?= $row['dosen_nama'] . ' - ' . $row['nidn'] ?></td>
                <td>
                  <a href="index.php?page=edit_mahasiswa&npm=<?= $row['npm'] ?>" class="btn btn-warning btn-sm">
                    <i class="bi bi-pencil-square"></i> Edit
                  </a>
                  <a href="index.php?page=hapus_mahasiswa&npm=<?= $row['npm'] ?>" 
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
  .table-mahasiswa {
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 3px 8px rgba(0, 0, 0, 0.1);
  }

  .table-mahasiswa thead {
    background: linear-gradient(90deg, #16a34a, #065f46);
    color: #ffffff;
  }

  .table-mahasiswa tbody tr:hover {
    background-color: #dcfce7; /* hijau muda */
    transition: 0.2s ease;
  }

  .btn-primary {
    background-color: #16a34a;
    border: none;
  }
  .btn-primary:hover {
    background-color: #15803d;
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
</style>
      </div>
    </div>
  </section>
</div>