<!DOCTYPE html>
<html lang="en">

<head>
  <title>Layanan SIMPEG | Kementerian Agama RI</title>
  <!-- [Meta] -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="description" content="ok."/>
  <meta name="author" content="phoenixcoded" />

  <!-- [Favicon] icon -->
  <link rel="icon" href="<?= base_url()?>assets2/images/favicon.svg" type="image/x-icon" />
 <!-- [Google Font : Public Sans] icon -->
<link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

<link href="<?= base_url()?>assets2/css/plugins/animate.min.css" rel="stylesheet" type="text/css">

<link rel="stylesheet" href="<?= base_url()?>assets2/fonts/tabler-icons.min.css" >
<link rel="stylesheet" href="<?= base_url()?>assets2/fonts/feather.css" >
<link rel="stylesheet" href="<?= base_url()?>assets2/fonts/fontawesome.css" >
<link rel="stylesheet" href="<?= base_url()?>assets2/fonts/material.css" >

<link rel="stylesheet" href="<?= base_url()?>assets2/css/style.css" id="main-style-link" >
<link rel="stylesheet" href="<?= base_url()?>assets2/css/style-preset.css" >
<link rel="stylesheet" href="<?= base_url()?>assets2/css/custom.css" >
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" />

</head>
<!-- [Head] end -->
<!-- [Body] Start -->

<body data-pc-preset="preset-6" data-pc-sidebar-theme="light" data-pc-sidebar-caption="false" data-pc-direction="ltr" data-pc-theme="light" data-pc-direction="ltr">
  <!-- [ Pre-loader ] start -->
<div class="loader-bg">
  <div class="loader-track">
    <div class="loader-fill"></div>
  </div>
</div>
<!-- [ Pre-loader ] End -->
 <!-- [ Sidebar Menu ] start -->
<nav class="pc-sidebar">
  <div class="navbar-wrapper">
    <div class="m-header">
      <a href="<?= site_url()?>" class="b-brand text-primary">
        <img src="<?= base_url()?>assets2/images/simpeg.png" height="30px" alt="logo image" class="logo-lg" />
        <span class="badge bg-brand-color-2 rounded-pill ms-2 theme-version">v2</span>
      </a>
    </div>
    <div class="navbar-content">
      <ul class="pc-navbar">
        <li class="pc-item">
          <a href="<?= site_url('v2')?>" class="pc-link">
            <span class="pc-micon">
              <i class="ph-duotone ph-gauge"></i>
            </span>
            <span class="pc-mtext">Profil</span>
          </a>
        </li>
        <li class="pc-item pc-caption">
          <label>Navigasi</label>
          <i class="ph-duotone ph-chart-pie"></i>
        </li>
        <li class="pc-item">
          <a href="<?= site_url('v2/pdm')?>" class="pc-link">
            <span class="pc-micon">
              <i class="ph-duotone ph-database"></i>
            </span>
            <span class="pc-mtext">Peremajaan Data</span>
          </a>
        </li>
        <li class="pc-item">
          <a href="<?= site_url('v2/siasn')?>" class="pc-link">
            <span class="pc-micon">
              <i class="ph-duotone ph-database"></i>
            </span>
            <span class="pc-mtext">Layanan SIASN</span>
          </a>
        </li>
        <li class="pc-item">
          <a href="<?= site_url('v2/presensi')?>" class="pc-link">
            <span class="pc-micon">
              <i class="ph-duotone ph-database"></i>
            </span>
            <span class="pc-mtext">Presensi</span>
          </a>
        </li>
        <li class="pc-item">
          <a href="<?= site_url('v2/eksternal')?>" class="pc-link">
            <span class="pc-micon">
              <i class="ph-duotone ph-database"></i>
            </span>
            <span class="pc-mtext">Layanan Eksternal</span>
          </a>
        </li>
      </ul>
      <div class="card nav-action-card bg-brand-color-4">
        <div class="card-body" style="background-image: url('<?= base_url()?>assets2/images/layout/nav-card-bg.svg')">
          <h5 class="text-dark">Help Center</h5>
          <a href="https://phoenixcoded.support-hub.io/" class="btn btn-primary" target="_blank">Panduan</a>
        </div>
      </div>
    </div>
    <div class="card pc-user-card">
      <div class="card-body">
        <div class="d-flex align-items-center">
          <div class="flex-shrink-0">
            <img src="<?= base_url()?>assets2/images/user/avatar-1.jpg" alt="user-image" class="user-avtar wid-30 rounded-circle" />
          </div>
          <div class="flex-grow-1 ms-3">
            <div class="dropdown">
              <a href="#" class="arrow-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" data-bs-offset="0,20">
                <div class="d-flex align-items-center">
                  <div class="flex-grow-1 me-2">
                    <h6 class="mb-0">Asep Surasep</h6>
                    <small>ANalis Sumberdaya Manusia</small>
                  </div>
                  <div class="flex-shrink-0">
                    <div class="btn btn-icon btn-link-secondary avtar">
                      <i class="ph-duotone ph-windows-logo"></i>
                    </div>
                  </div>
                </div>
              </a>
              <div class="dropdown-menu">
                <ul>
                  <li>
                    <a class="pc-user-links">
                      <i class="ph-duotone ph-user"></i>
                      <span>My Account</span>
                    </a>
                  </li>
                  <li>
                    <a class="pc-user-links">
                      <i class="ph-duotone ph-gear"></i>
                      <span>Settings</span>
                    </a>
                  </li>
                  <li>
                    <a class="pc-user-links">
                      <i class="ph-duotone ph-lock-key"></i>
                      <span>Lock Screen</span>
                    </a>
                    </li>
                  <li>
                    <a href="<?= site_url('auth/logout')?>" class="pc-user-links">
                      <i class="ph-duotone ph-power"></i>
                      <span>Logout</span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</nav>
<!-- [ Sidebar Menu ] end -->
 <!-- [ Header Topbar ] start -->
<header class="pc-header">
  <div class="header-wrapper"> <!-- [Mobile Media Block] start -->
<div class="me-auto pc-mob-drp">
  <ul class="list-unstyled">
    <!-- ======= Menu collapse Icon ===== -->
    <li class="pc-h-item pc-sidebar-collapse">
      <a href="#" class="pc-head-link ms-0" id="sidebar-hide">
        <i class="ti ti-menu-2"></i>
      </a>
    </li>
    <li class="pc-h-item pc-sidebar-popup">
      <a href="#" class="pc-head-link ms-0" id="mobile-collapse">
        <i class="ti ti-menu-2"></i>
      </a>
    </li>

  </ul>
</div>
<!-- [Mobile Media Block end] -->
<div class="ms-auto">
  <ul class="list-unstyled">
    <li class="dropdown pc-h-item d-none d-md-inline-flex">
      <a class="pc-head-link dropdown-toggle arrow-none me-0" data-bs-toggle="dropdown" href="#" role="button"
        aria-haspopup="false" aria-expanded="false">
        <i class="ph-duotone ph-circles-four"></i>
      </a>
      <div class="dropdown-menu dropdown-qta dropdown-menu-end pc-h-dropdown">
        <div class="overflow-hidden">
          <div class="qta-links m-n1">
            <a href="<?= site_url()?>" class="dropdown-item">
              <i class="ph-duotone ph-books"></i>
              <span>Beranda</span>
            </a>
            <a href="<?= site_url('simpeg')?>" class="dropdown-item">
              <i class="ph-duotone ph-lifebuoy"></i>
              <span>Data Simpeg</span>
            </a>
            <a href="<?= site_url('kgb')?>" class="dropdown-item">
              <i class="ph-duotone ph-scroll"></i>
              <span>KGB</span>
            </a>
            <a href="<?= site_url('tubel')?>" class="dropdown-item">
              <i class="ph-duotone ph-books"></i>
              <span>Tugas Belajar</span>
            </a>
            <a href="#!" class="dropdown-item">
              <i class="ph-duotone ph-envelope-open"></i>
              <span>Mail</span>
            </a>
            <a href="#!" class="dropdown-item">
              <i class="ph-duotone ph-identification-badge"></i>
              <span>Membership</span>
            </a>
            <a href="#!" class="dropdown-item">
              <i class="ph-duotone ph-chats-circle"></i>
              <span>Chat</span>
            </a>
            <a href="#!" class="dropdown-item">
              <i class="ph-duotone ph-currency-circle-dollar"></i>
              <span>Plans</span>
            </a>
            <a href="#!" class="dropdown-item">
              <i class="ph-duotone ph-user-circle"></i>
              <span>Users</span>
            </a>
          </div>
        </div>
      </div>
    </li>
    <li class="dropdown pc-h-item">
      <a class="pc-head-link dropdown-toggle arrow-none me-0" data-bs-toggle="dropdown" href="#" role="button"
        aria-haspopup="false" aria-expanded="false">
        <i class="ph-duotone ph-sun-dim"></i>
      </a>
      <div class="dropdown-menu dropdown-menu-end pc-h-dropdown">
        <a href="#!" class="dropdown-item" onclick="layout_change('dark')">
          <i class="ph-duotone ph-moon"></i>
          <span>Dark</span>
        </a>
        <a href="#!" class="dropdown-item" onclick="layout_change('light')">
          <i class="ph-duotone ph-sun-dim"></i>
          <span>Light</span>
        </a>
        <a href="#!" class="dropdown-item" onclick="layout_change_default()">
          <i class="ph-duotone ph-cpu"></i>
          <span>Default</span>
        </a>
      </div>
    </li>
  </ul>
</div> </div>
</header>
<!-- [ Header ] end -->



  <!-- [ Main Content ] start -->
  <div class="pc-container">
    <?= $this->renderSection('content') ?>
  </div>

  <footer class="pc-footer">
    <div class="footer-wrapper container-fluid">
      <div class="row">
        <div class="col-sm-6 my-1">
          <p class="m-0">by Tim Biro Kepegawaian</p>
        </div>
        <div class="col-sm-6 ms-auto my-1">
          <ul class="list-inline footer-link mb-0 justify-content-sm-end d-flex">
            <li class="list-inline-item"><a href="#">Documentation</a></li>
            <li class="list-inline-item"><a href="#">Support</a></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

 <!-- Required Js -->
<script src="<?= base_url()?>assets2/js/plugins/popper.min.js"></script>
<script src="<?= base_url()?>assets2/js/plugins/simplebar.min.js"></script>
<script src="<?= base_url()?>assets2/js/plugins/bootstrap.min.js"></script>
<script src="<?= base_url()?>assets2/js/fonts/custom-font.js"></script>
<script src="<?= base_url()?>assets2/js/pcoded.js"></script>
<script src="<?= base_url()?>assets2/js/plugins/feather.min.js"></script>
<script src="<?= base_url()?>assets2/js/plugins/wow.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="<?= base_url()?>assets2/js/plugins/dataTables.min.js"></script>
<script src="<?= base_url()?>assets2/js/plugins/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

<script type="text/javascript">
var wow = new WOW({
    animateClass: 'animate__animated'
  });
  wow.init();

  $('.datatable').DataTable();
</script>

<?= $this->renderSection('script') ?>
</body>
</html>
