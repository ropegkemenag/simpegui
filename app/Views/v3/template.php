<!DOCTYPE html>
<html lang="en" class="light-style layout-navbar-fixed layout-compact layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="<?= base_url()?>assets3/" data-template="vertical-menu-template" data-style="light">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">

    <title>SIMPEG - Kementerian Agama RI</title>


    <meta name="description" content="Start your development with a Dashboard for Bootstrap 5">
    <meta name="keywords" content="dashboard, bootstrap 5 dashboard, bootstrap 5 design, bootstrap 5">
    <!-- Canonical SEO -->
    <link rel="canonical" href="https://1.envato.market/vuexy_admin">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="<?= base_url()?>assets3/img/favicon/favicon.ico">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <!-- Icons -->
    <link rel="stylesheet" href="<?= base_url()?>assets3/vendor/fonts/fontawesome.css">
    <link rel="stylesheet" href="<?= base_url()?>assets3/vendor/fonts/tabler-icons.css">
    <link rel="stylesheet" href="<?= base_url()?>assets3/vendor/fonts/flag-icons.css">

    <!-- Core CSS -->

    <link rel="stylesheet" href="<?= base_url()?>assets3/vendor/css/rtl/core.css" class="template-customizer-core-css">
    <link rel="stylesheet" href="<?= base_url()?>assets3/vendor/css/rtl/theme-default.css" class="template-customizer-theme-css">
    <link rel="stylesheet" href="<?= base_url()?>assets3/vendor/css/pages/page-icons.css" />
    <link rel="stylesheet" href="<?= base_url()?>assets3/css/demo.css">
    <link rel="stylesheet" href="<?= base_url()?>assets3/css/custom.css">

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="<?= base_url()?>assets3/vendor/libs/node-waves/node-waves.css">

    <link rel="stylesheet" href="<?= base_url()?>assets3/vendor/libs/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="<?= base_url()?>assets3/vendor/libs/typeahead-js/typeahead.css">

    <!-- Helpers -->
    <script src="<?= base_url()?>assets3/vendor/js/helpers.js"></script>
    <script src="<?= base_url()?>assets3/js/config.js"></script>

    <?= $this->renderSection('style') ?>

  </head>

  <body>
<div class="layout-wrapper layout-content-navbar  ">
  <div class="layout-container">

<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">


  <div class="app-brand demo ">
    <a href="index.html" class="app-brand-link">
      <span class="app-brand-logo demo">
        <img src="<?= base_url()?>assets3/img/simpeg.png" alt="">
</span>
      <span class="app-brand-text demo menu-text fw-bold">SIMPEG</span>
    </a>

    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
      <i class="ti menu-toggle-icon d-none d-xl-block align-middle"></i>
      <i class="ti ti-x d-block d-xl-none ti-md align-middle"></i>
    </a>
  </div>

  <div class="menu-inner-shadow"></div>



  <ul class="menu-inner py-1">

    <li class="menu-item active">
      <a href="<?= site_url('v3')?>" class="menu-link">
        <i class="menu-icon tf-icons ti ti-lifebuoy"></i>
        <div data-i18n="Profil">Profil</div>
      </a>
    </li>

    <li class="menu-item">
      <a href="<?= site_url('v3/home/personal')?>" class="menu-link">
        <i class="menu-icon tf-icons ti ti-settings"></i>
        <div data-i18n="Data Personal">Data Personal</div>
      </a>
    </li>

    <li class="menu-item">
      <a href="<?= site_url('v3')?>" class="menu-link">
        <i class="menu-icon tf-icons ti ti-mail"></i>
        <div data-i18n="Email Instansi">Email Instansi</div>
      </a>
    </li>

    <!-- Misc -->
    <li class="menu-header small">
      <span class="menu-header-text" data-i18n="Layanan Kepegawaian">Layanan Kepegawaian</span>
    </li>
    <li class="menu-item">
      <a href="<?= site_url('v3/home/peremajaan')?>" class="menu-link">
        <i class="menu-icon tf-icons ti ti-color-swatch"></i>
        <div data-i18n="Peremajaan Data">Peremajaan Data</div>
      </a>
    </li>
    <li class="menu-item">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons ti ti-id"></i>
        <div data-i18n="Presensi">Presensi</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item">
          <a href="<?= site_url('v3/presensi/kehadiran')?>" class="menu-link">
            <div data-i18n="Kehadiran">Kehadiran</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="<?= site_url('v3/presensi/uangmakan')?>" class="menu-link">
            <div data-i18n="Uang Makan">Uang Makan</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="<?= site_url('v3/presensi/tukin')?>" class="menu-link">
            <div data-i18n="Tunjangan Kinerja">Tunjangan Kinerja</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="<?= site_url('v3/presensi/laporankehadiran')?>" class="menu-link">
            <div data-i18n="Ketidakhadiran">Ketidakhadiran</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="<?= site_url('v3/presensi/laporanpengaduan')?>" class="menu-link">
            <div data-i18n="Pengaduan">Pengaduan</div>
          </a>
        </li>
      </ul>
    </li>
    <li class="menu-item">
      <a href="<?= site_url('v3/home/cuti')?>" class="menu-link">
        <i class="menu-icon tf-icons ti ti-components"></i>
        <div data-i18n="Cuti">Cuti</div>
      </a>
    </li>
    <li class="menu-item">
      <a href="<?= site_url('v3/home/layanan')?>" class="menu-link">
        <i class="menu-icon tf-icons ti ti-components"></i>
        <div data-i18n="Layanan Lainnya">Layanan Lainnya</div>
      </a>
    </li>
    <li class="menu-item">
      <a href="<?= site_url('v3/home/eksternal')?>" class="menu-link">
        <i class="menu-icon tf-icons ti ti-text-wrap-disabled"></i>
        <div data-i18n="Layanan Eksternal">Layanan Eksternal</div>
      </a>
    </li>
  </ul>



</aside>
<!-- / Menu -->



    <!-- Layout container -->
    <div class="layout-page">

<nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
      <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0   d-xl-none ">
        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
          <i class="ti ti-menu-2 ti-md"></i>
        </a>
      </div>


      <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">


        <!-- Search -->
        <div class="navbar-nav align-items-center">
          <strong>Sistem Informasi Kepegawaian</strong>
        </div>
        <!-- /Search -->





        <ul class="navbar-nav flex-row align-items-center ms-auto">
          <li class="nav-item dropdown-style-switcher dropdown">
            <a class="nav-link btn btn-text-secondary btn-icon rounded-pill dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
              <i class='ti ti-md'></i>
            </a>
            <ul class="dropdown-menu dropdown-menu-end dropdown-styles">
              <li>
                <a class="dropdown-item" href="javascript:void(0);" data-theme="light">
                  <span class="align-middle"><i class='ti ti-sun ti-md me-3'></i>Light</span>
                </a>
              </li>
              <li>
                <a class="dropdown-item" href="javascript:void(0);" data-theme="dark">
                  <span class="align-middle"><i class="ti ti-moon-stars ti-md me-3"></i>Dark</span>
                </a>
              </li>
              <li>
                <a class="dropdown-item" href="javascript:void(0);" data-theme="system">
                  <span class="align-middle"><i class="ti ti-device-desktop-analytics ti-md me-3"></i>System</span>
                </a>
              </li>
            </ul>
          </li>
          <!-- / Style Switcher-->

          <!-- Quick links  -->
          <li class="nav-item dropdown-shortcuts navbar-dropdown dropdown">
            <a class="nav-link btn btn-text-secondary btn-icon rounded-pill btn-icon dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
              <i class='ti ti-layout-grid-add ti-md'></i>
            </a>
            <div class="dropdown-menu dropdown-menu-end p-0">
              <div class="dropdown-menu-header border-bottom">
                <div class="dropdown-header d-flex align-items-center py-3">
                  <h6 class="mb-0 me-auto">Shortcuts</h6>
                  <a href="javascript:void(0)" class="btn btn-text-secondary rounded-pill btn-icon dropdown-shortcuts-add" data-bs-toggle="tooltip" data-bs-placement="top" title="Add shortcuts"><i class="ti ti-plus text-heading"></i></a>
                </div>
              </div>
              <div class="dropdown-shortcuts-list scrollable-container">
                <div class="row row-bordered overflow-visible g-0">
                  <div class="dropdown-shortcuts-item col">
                    <span class="dropdown-shortcuts-icon rounded-circle mb-3">
                      <i class="ti ti-calendar ti-26px text-heading"></i>
                    </span>
                    <a href="app-calendar.html" class="stretched-link">Calendar</a>
                    <small>Appointments</small>
                  </div>
                  <div class="dropdown-shortcuts-item col">
                    <span class="dropdown-shortcuts-icon rounded-circle mb-3">
                      <i class="ti ti-file-dollar ti-26px text-heading"></i>
                    </span>
                    <a href="app-invoice-list.html" class="stretched-link">Invoice App</a>
                    <small>Manage Accounts</small>
                  </div>
                </div>
                <div class="row row-bordered overflow-visible g-0">
                  <div class="dropdown-shortcuts-item col">
                    <span class="dropdown-shortcuts-icon rounded-circle mb-3">
                      <i class="ti ti-user ti-26px text-heading"></i>
                    </span>
                    <a href="app-user-list.html" class="stretched-link">User App</a>
                    <small>Manage Users</small>
                  </div>
                  <div class="dropdown-shortcuts-item col">
                    <span class="dropdown-shortcuts-icon rounded-circle mb-3">
                      <i class="ti ti-users ti-26px text-heading"></i>
                    </span>
                    <a href="app-access-roles.html" class="stretched-link">Role Management</a>
                    <small>Permission</small>
                  </div>
                </div>
                <div class="row row-bordered overflow-visible g-0">
                  <div class="dropdown-shortcuts-item col">
                    <span class="dropdown-shortcuts-icon rounded-circle mb-3">
                      <i class="ti ti-device-desktop-analytics ti-26px text-heading"></i>
                    </span>
                    <a href="index.html" class="stretched-link">Dashboard</a>
                    <small>User Dashboard</small>
                  </div>
                  <div class="dropdown-shortcuts-item col">
                    <span class="dropdown-shortcuts-icon rounded-circle mb-3">
                      <i class="ti ti-settings ti-26px text-heading"></i>
                    </span>
                    <a href="pages-account-settings-account.html" class="stretched-link">Setting</a>
                    <small>Account Settings</small>
                  </div>
                </div>
                <div class="row row-bordered overflow-visible g-0">
                  <div class="dropdown-shortcuts-item col">
                    <span class="dropdown-shortcuts-icon rounded-circle mb-3">
                      <i class="ti ti-help ti-26px text-heading"></i>
                    </span>
                    <a href="pages-faq.html" class="stretched-link">FAQs</a>
                    <small>FAQs & Articles</small>
                  </div>
                  <div class="dropdown-shortcuts-item col">
                    <span class="dropdown-shortcuts-icon rounded-circle mb-3">
                      <i class="ti ti-square ti-26px text-heading"></i>
                    </span>
                    <a href="modal-examples.html" class="stretched-link">Modals</a>
                    <small>Useful Popups</small>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <!-- Quick links -->

          <!-- User -->
          <li class="nav-item navbar-dropdown dropdown-user dropdown">
            <a class="nav-link dropdown-toggle hide-arrow p-0" href="javascript:void(0);" data-bs-toggle="dropdown">
              <div class="avatar avatar-online">
                <img src="<?= base_url()?>assets3/img/avatars/1.png" alt="" class="rounded-circle">
              </div>
            </a>
            <ul class="dropdown-menu dropdown-menu-end">
              <li>
                <a class="dropdown-item mt-0" href="pages-account-settings-account.html">
                  <div class="d-flex align-items-center">
                    <div class="flex-shrink-0 me-2">
                      <div class="avatar avatar-online">
                        <img src="<?= base_url()?>assets3/img/avatars/1.png" alt="" class="rounded-circle">
                      </div>
                    </div>
                    <div class="flex-grow-1">
                      <h6 class="mb-0">John Doe</h6>
                      <small class="text-muted">Admin</small>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <div class="dropdown-divider my-1 mx-n2"></div>
              </li>
              <li>
                <a class="dropdown-item" href="pages-profile-user.html">
                  <i class="ti ti-user me-3 ti-md"></i><span class="align-middle">My Profile</span>
                </a>
              </li>
              <li>
                <a class="dropdown-item" href="pages-account-settings-account.html">
                  <i class="ti ti-settings me-3 ti-md"></i><span class="align-middle">Settings</span>
                </a>
              </li>
              <li>
                <a class="dropdown-item" href="pages-account-settings-billing.html">
                  <span class="d-flex align-items-center align-middle">
                    <i class="flex-shrink-0 ti ti-file-dollar me-3 ti-md"></i><span class="flex-grow-1 align-middle">Billing</span>
                    <span class="flex-shrink-0 badge bg-danger d-flex align-items-center justify-content-center">4</span>
                  </span>
                </a>
              </li>
              <li>
                <div class="dropdown-divider my-1 mx-n2"></div>
              </li>
              <li>
                <a class="dropdown-item" href="pages-pricing.html">
                  <i class="ti ti-currency-dollar me-3 ti-md"></i><span class="align-middle">Pricing</span>
                </a>
              </li>
              <li>
                <a class="dropdown-item" href="pages-faq.html">
                  <i class="ti ti-question-mark me-3 ti-md"></i><span class="align-middle">FAQ</span>
                </a>
              </li>
              <li>
                <div class="d-grid px-2 pt-2 pb-1">
                  <a class="btn btn-sm btn-danger d-flex" href="auth-login-cover.html" target="_blank">
                    <small class="align-middle">Logout</small>
                    <i class="ti ti-logout ms-2 ti-14px"></i>
                  </a>
                </div>
              </li>
            </ul>
          </li>
          <!--/ User -->



        </ul>
      </div>


      <!-- Search Small Screens -->
      <div class="navbar-search-wrapper search-input-wrapper  d-none">
        <input type="text" class="form-control search-input container-xxl border-0" placeholder="Search..." aria-label="Search...">
        <i class="ti ti-x search-toggler cursor-pointer"></i>
      </div>



</nav>

<!-- / Navbar -->



      <!-- Content wrapper -->
      <div class="content-wrapper">

        <!-- Content -->

          <div class="container-xxl flex-grow-1 container-p-y">
            <?= $this->renderSection('content') ?>
          </div>
          <!-- / Content -->




<!-- Footer -->
<footer class="content-footer footer bg-footer-theme">
  <div class="container-xxl">
    <div class="footer-container d-flex align-items-center justify-content-between py-4 flex-md-row flex-column">
      <div class="text-body">
        © 2024 <a href="https://ropeg.kemenag.go.id" target="_blank" class="footer-link">Biro Kepegawaian</a>
      </div>
      <div class="d-none d-lg-inline-block">

        <a href="https://themeforest.net/licenses/standard" class="footer-link me-4" target="_blank">License</a>
        <a href="https://1.envato.market/pixinvent_portfolio" target="_blank" class="footer-link me-4">More Themes</a>

        <a href="https://demos.pixinvent.com/vuexy-html-admin-template/documentation/" target="_blank" class="footer-link me-4">Documentation</a>


        <a href="https://pixinvent.ticksy.com/" target="_blank" class="footer-link d-none d-sm-inline-block">Support</a>

      </div>
    </div>
  </div>
</footer>
<!-- / Footer -->


          <div class="content-backdrop fade"></div>
        </div>
        <!-- Content wrapper -->
      </div>
      <!-- / Layout page -->
    </div>

    <div class="layout-overlay layout-menu-toggle"></div>
    <div class="drag-target"></div>

  </div>

    <script src="<?= base_url()?>assets3/vendor/libs/jquery/jquery.js"></script>
    <script src="<?= base_url()?>assets3/vendor/libs/popper/popper.js"></script>
    <script src="<?= base_url()?>assets3/vendor/js/bootstrap.js"></script>
    <script src="<?= base_url()?>assets3/vendor/libs/node-waves/node-waves.js"></script>
    <script src="<?= base_url()?>assets3/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="<?= base_url()?>assets3/vendor/libs/hammer/hammer.js"></script>
    <script src="<?= base_url()?>assets3/vendor/libs/i18n/i18n.js"></script>
    <script src="<?= base_url()?>assets3/vendor/libs/typeahead-js/typeahead.js"></script>
    <script src="<?= base_url()?>assets3/vendor/js/menu.js"></script>

    <script src="<?= base_url()?>assets3/js/main.js"></script>

    <?= $this->renderSection('script') ?>

  </body>

</html>
