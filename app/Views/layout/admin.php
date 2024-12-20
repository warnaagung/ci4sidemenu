<?= $this->extend('layout/base') ?>

<?= $this->section('bodi') ?>
    <div class="wrapper">
        <!-- Sidebar -->
        <!-- @include('layout.admin.sideadminhumas') -->
        <?php 
        // $this->view('layout/sideadminhumas'); 
        // $this->load->view('sidebar', 'layout/sideadminhumas');
        require_once('sideadminhumas.php');
        ?>
        <!-- Main Component -->
        <div class="main">
            <nav class="navbar navbar-expand px-3 border-bottom">
                <!-- Button for sidebar toggle -->
                <button class="btn" type="button" data-bs-theme="dark">
                    <span class="navbar-toggler-icon"><i class="bi bi-list bi-lg py-2 p-1"></i></span>
                </button>
                <ul class="navbar-nav ms-auto">
                    <div class="topbar-divider d-none d-sm-block"></div>
                    <li class="nav-item dropdown no-arrow">
                        <button class="btn link-success dropdown-toggle" type="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <span
                                class="mr-2 d-none d-lg-inline text-gray-600 small">Warna Agung</span>
                            <img class="img-profile rounded-circle"
                                src="<?= base_url('/assets/img/d01.png') ?>">

                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="/admin/logoutadmin">Logout</a></li>
                            {{-- <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li> --}}
                        </ul>
                    </li>
                </ul>
            </nav>
            <main class="content px-3 py-2">
                <?= $this->renderSection('content') ?>
            </main>
        </div>
    </div>
<?= $this->endSection() ?>

<?= $this->section('jsbawahs') ?>

<?= $this->endSection() ?>