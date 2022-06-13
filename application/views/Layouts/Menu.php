<body class="sb-nav-fixed">
        <!-- Navbar footer-->
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="http://127.0.0.1:8000/Dashboard">PERPUSTAKAAN</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Settings</a></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="#!">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- End Navbar Footer-->
        
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                    <!--Start Navbar -->
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <a class="nav-link" href="<?= base_url('admin') ?>">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <a class="nav-link" href="<?= base_url('dataBuku') ?>">
                                <div class="sb-nav-link-icon"><i class="bi bi-boxes"></i></div>
                                Data Buku
                            </a>
                            <a class="nav-link" href="http://127.0.0.1:8000/DataPeminjam">
                                <div class="sb-nav-link-icon"><i class="bi bi-inboxes-fill"></i></div>
                                Data Peminjam
                            </a>
                            <a class="nav-link" href="http://127.0.0.1:8000/PengajuanPeminjam">
                                <div class="sb-nav-link-icon"><i class="bi bi-clipboard-check"></i></div>
                                Pengajuan Peminjam
                            </a>
                            <a class="nav-link" href="http://127.0.0.1:8000/Laporan">
                                <div class="sb-nav-link-icon"><i class="bi bi-clipboard-data"></i></div>
                                Laporan
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Start Bootstrap
                    </div>
                </nav>
                 <!--End Navbar -->
            </div>
            <div id="layoutSidenav_content">