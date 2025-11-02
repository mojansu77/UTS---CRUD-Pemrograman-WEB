<div class="content-wrapper p-4">
 <!-- Header -->
<!-- Header -->
<section class="content-header mb-4 text-center">
  <h3 class="fw-bold mb-2" style="color: #1e293b;">Beranda</h3>
  <p class="fs-5" style="color: #334155;">
    Welcome at <strong style="color: #1e293b;">Sistem Informasi Akademi Mojansu</strong> 👋
  </p>
</section>

<!-- Dashboard Cards -->
<section class="content">
  <style>
    .dashboard-card {
      position: relative;
      overflow: hidden;
      border: none;
      border-radius: 1rem;
      color: white;
      transition: all 0.3s ease;
      box-shadow: 0 8px 16px rgba(0,0,0,0.15);
    }

    /* ICON LATAR */
    .dashboard-card::before {
      content: "";
      position: absolute;
      top: -20%;
      right: -20%;
      width: 120px;
      height: 120px;
      background: rgba(255, 255, 255, 0.1);
      border-radius: 50%;
      transform: scale(0.8);
      transition: all 0.4s ease;
    }

    .dashboard-card:hover::before {
      transform: scale(1.1);
      background: rgba(255, 255, 255, 0.2);
    }

    /* HOVER EFFECT */
    .dashboard-card:hover {
      transform: translateY(-6px) scale(1.02);
      box-shadow: 0 0 25px rgba(255, 255, 255, 0.15);
    }

    /* CARD COLORS */
    .card-dosen {
      background: linear-gradient(160deg, #2563eb, #1e3a8a);
    }

    .card-mahasiswa {
      background: linear-gradient(160deg, #10b981, #065f46);
    }

    .card-matkul {
      background: linear-gradient(160deg, #facc15, #b45309);
    }

    .card-krs {
      background: linear-gradient(160deg, #6366f1, #312e81);
    }

    .dashboard-card i {
      font-size: 2.8rem;
      margin-bottom: 0.8rem;
    }

    .dashboard-card h5 {
      font-weight: 700;
    }

    .dashboard-card p {
      opacity: 0.9;
      font-size: 0.9rem;
    }

    .dashboard-card a.btn {
      font-weight: 600;
      border: none;
      border-radius: 20px;
      transition: all 0.2s ease;
    }

    .dashboard-card a.btn:hover {
      opacity: 0.9;
      transform: scale(1.05);
    }
  </style>

  <div class="row g-4 text-center">
    <!-- Dosen -->
    <div class="col-xl-3 col-md-6 col-sm-12">
      <div class="card dashboard-card card-dosen h-100">
        <div class="card-body d-flex flex-column justify-content-between">
          <div>
            <i class="bi bi-person-badge"></i>
            <h5>Tenaga Pengajar Aktif</h5>
            <p>Menginspirasi generasi setiap hari</p>
          </div>
          <a href="index.php?page=dosen" class="btn btn-light btn-sm mt-3">Kelola Dosen</a>
        </div>
      </div>
    </div>

    <!-- Mahasiswa -->
    <div class="col-xl-3 col-md-6 col-sm-12">
      <div class="card dashboard-card card-mahasiswa h-100">
        <div class="card-body d-flex flex-column justify-content-between">
          <div>
            <i class="bi bi-mortarboard-fill"></i>
            <h5>Mahasiswa Terdaftar</h5>
            <p>Belajar, tumbuh, dan berprestasi</p>
          </div>
          <a href="index.php?page=mahasiswa" class="btn btn-light btn-sm mt-3">Kelola Mahasiswa</a>
        </div>
      </div>
    </div>

    <!-- Mata Kuliah -->
    <div class="col-xl-3 col-md-6 col-sm-12">
      <div class="card dashboard-card card-matkul h-100">
        <div class="card-body d-flex flex-column justify-content-between">
          <div>
            <i class="bi bi-book-half"></i>
            <h5>Mata Kuliah Aktif</h5>
            <p>Wadah ilmu dan eksplorasi</p>
          </div>
          <a href="index.php?page=matkul" class="btn btn-light btn-sm mt-3">Kelola Matkul</a>
        </div>
      </div>
    </div>

    <!-- KRS -->
    <div class="col-xl-3 col-md-6 col-sm-12">
      <div class="card dashboard-card card-krs h-100">
        <div class="card-body d-flex flex-column justify-content-between">
          <div>
            <i class="bi bi-clipboard-check"></i>
            <h5>KRS Semester</h5>
            <p>Atur rencana studi mahasiswa</p>
          </div>
          <a href="index.php?page=krs" class="btn btn-light btn-sm mt-3">Kelola KRS</a>
        </div>
      </div>
    </div>
  </div>
</section>

</section>
