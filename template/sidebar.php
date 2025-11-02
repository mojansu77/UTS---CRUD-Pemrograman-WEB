<?php
$page = isset($_GET['page']) ? $_GET['page'] : '';
?>

<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="light">
    <!--begin::Sidebar Brand-->
    <div class="sidebar-brand">
        <a href="index.php?page=home" class="brand-link">
            <img src="./assets/img/AcademyMJ.jpg" alt="AdminLTE Logo" class="brand-image opacity-75 shadow" />
            <span class="brand-text fw-light">Mojansucademy</span>
        </a>
    </div>
    <!--end::Sidebar Brand-->

    <!--begin::Sidebar Wrapper-->
    <div class="sidebar-wrapper">
        <nav class="mt-2">
            <ul class="nav sidebar-menu flex-column"
                data-lte-toggle="treeview"
                role="navigation"
                aria-label="Main navigation"
                data-accordion="false"
                id="navigation">

                <!-- ====== MENU HOME ====== -->
                <li class="nav-item">
                    <a href="index.php?page=home"
                       class="nav-link <?= ($page == 'home' || $page == '') ? 'active bg-secondary text-white' : '' ?>">
                        <i class="nav-icon bi bi-house-door"></i>
                        <p>Beranda</p>
                    </a>
                </li>

                <!-- ====== MENU DATA MASTER ====== -->
                <li class="nav-item menu-open mt-2">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon bi bi-speedometer"></i>
                        <p>
                            Data Master
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>

                    <ul class="nav nav-treeview">

                        <!-- Data Dosen -->
                        <li class="nav-item">
                            <a href="index.php?page=dosen"
                               class="nav-link <?= (str_contains($page, 'dosen')) ? 'active bg-secondary text-white' : '' ?>">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Data Dosen</p>
                            </a>
                        </li>

                        <!-- Data Mahasiswa -->
                        <li class="nav-item">
                            <a href="index.php?page=mahasiswa"
                               class="nav-link <?= (str_contains($page, 'mahasiswa')) ? 'active bg-secondary text-white' : '' ?>">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Data Mahasiswa</p>
                            </a>
                        </li>

                        <!-- Mata Kuliah -->
                        <li class="nav-item">
                            <a href="index.php?page=matkul"
                               class="nav-link <?= (str_contains($page, 'matkul')) ? 'active bg-secondary text-white' : '' ?>">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Mata Kuliah</p>
                            </a>
                        </li>

                        <!-- KRS -->
                        <li class="nav-item">
                            <a href="index.php?page=krs"
                               class="nav-link <?= (str_contains($page, 'krs')) ? 'active bg-secondary text-white' : '' ?>">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>KRS</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
    <!--end::Sidebar Wrapper-->
</aside>