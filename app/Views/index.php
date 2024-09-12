<?= $this->extend('template') ?>

<?= $this->section('content') ?>
<div class="page-content">
  <div class="container-fluid">
    <div class="profile-foreground position-relative mx-n4 mt-n4">
      <div class="profile-wid-bg">
        <img src="assets/images/profile-bg.jpg" alt="" class="profile-wid-img" />
      </div>
    </div>
    <div class="pt-4 mb-4 mb-lg-3 pb-lg-4 profile-wrapper">
      <div class="row g-4">
        <div class="col-auto">
          <div class="avatar-lg">
            <img src="assets/images/users/avatar-1.jpg" alt="user-img" class="img-thumbnail rounded-circle" />
          </div>
        </div>
        <!--end col-->
        <div class="col">
          <div class="p-2">
            <h3 class="text-white mb-1">Asep Surasep</h3>
            <p class="text-white text-opacity-75">Analis Sumber Daya Manusia</p>
            <div class="text-white-50 gap-1">
              <div class="me-2"><i class="ri-map-pin-user-line me-1 text-white text-opacity-75 fs-16 align-middle"></i>Biro Kepegawaian Sekretariat Jenderal</div>
              <div>
                <i class="ri-building-line me-1 text-white text-opacity-75 fs-16 align-middle"></i>S-1 Teknik Nuklir
              </div>
            </div>
          </div>
        </div>
        <!--end col-->

      </div>
      <!--end row-->
    </div>

    <div class="row">
      <div class="col-lg-12">
        <div class="">
          <div class="d-flex profile-wrapper">
            <!-- Nav tabs -->
            <ul class="nav nav-pills animation-nav profile-nav gap-2 gap-lg-3 flex-grow-1" role="tablist">
              <li class="nav-item">
                <a class="nav-link fs-14 active" data-bs-toggle="tab" href="#overview-tab" role="tab">
                  <i class="ri-airplay-fill d-inline-block d-md-none"></i> <span class="d-md-inline-block">Overview</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-14" data-bs-toggle="tab" href="#jabatan" role="tab">
                  <i class="ri-list-unordered d-inline-block d-md-none"></i> <span class="d-none d-md-inline-block">Jabatan</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-14" data-bs-toggle="tab" href="#pendidikan" role="tab">
                  <i class="ri-price-tag-line d-inline-block d-md-none"></i> <span class="d-none d-md-inline-block">Pendidikan</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-14" data-bs-toggle="tab" href="#keluarga" role="tab">
                  <i class="ri-folder-4-line d-inline-block d-md-none"></i> <span class="d-none d-md-inline-block">Keluarga</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-14" data-bs-toggle="tab" href="#lainnya" role="tab">
                  <i class="ri-folder-4-line d-inline-block d-md-none"></i> <span class="d-none d-md-inline-block">Lainnya</span>
                </a>
              </li>
            </ul>
            <div class="flex-shrink-0 d-none d-sm-block">
              <a href="pages-profile-settings.html" class="btn btn-success"><i class="ri-edit-box-line align-bottom"></i> Cetak DRH</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="tab-content pt-4 text-muted">
      <div class="tab-pane active" id="overview-tab" role="tabpanel">
        <div class="row">
          <div class="col-xxl-3">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title mb-5">Complete Your Profile</h5>
                <div class="progress animated-progress custom-progress progress-label">
                  <div class="progress-bar bg-danger" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">
                    <div class="label">30%</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xxl-9">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title mb-3">About</h5>
                <p>Hi I'm Anna Adame, It will be as simple as Occidental; in fact, it will be Occidental. To an English person, it will seem like simplified English, as a skeptical Cambridge friend of mine told me what Occidental is European languages are members of the same family.</p>
                <p>You always want to make sure that your fonts work well together and try to limit the number of fonts you use to three or less. Experiment and play around with the fonts that you already have in the software you’re working with reputable font websites. This may be the most commonly encountered tip I received from the designers I spoke with. They highly encourage that you use different fonts in one design, but do not over-exaggerate and go overboard.</p>
                <div class="row">
                  <div class="col-6 col-md-4">
                    <div class="d-flex mt-4">
                      <div class="flex-shrink-0 avatar-xs align-self-center me-3">
                        <div class="avatar-title bg-light rounded-circle fs-16 text-primary">
                          <i class="ri-user-2-fill"></i>
                        </div>
                      </div>
                      <div class="flex-grow-1 overflow-hidden">
                        <p class="mb-1">Designation :</p>
                        <h6 class="text-truncate mb-0">Lead Designer / Developer</h6>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
      <div class="tab-pane" id="jabatan" role="tabpanel">
        <div class="row">
          <div class="col-xxl-12">
            <div class="card">
              <div class="card-body">
                <div class="p-3 bg-warning-subtle">
                    <div class="float-end ms-2">
                        <button type="button" name="button" class="btn btn-sm btn-primary">Usul Perubahan</button>
                    </div>
                    <h6 class="text-danger">Jabatan</h6>
                </div>
                <?= $this->include('profil/pekerjaan') ?>
              </div>
            </div>
            <div class="card">
              <div class="card-body">
                <div class="p-3 bg-warning-subtle">
                    <div class="float-end ms-2">
                        <button type="button" name="button" class="btn btn-sm btn-primary">Usul Perubahan</button>
                    </div>
                    <h6 class="text-danger">Pangkat</h6>
                </div>
                <?= $this->include('profil/pekerjaan') ?>
              </div>
            </div>
          </div>
        </div>

      </div>
      <div class="tab-pane" id="pendidikan" role="tabpanel">
        <div class="row">
          <div class="col-xxl-12">
            <div class="card">
              <div class="card-body">
                <div class="p-3 bg-warning-subtle">
                    <div class="float-end ms-2">
                        <h6 class="text-warning mb-0">Usul Perubahan</h6>
                    </div>
                    <h6 class="mb-0 text-danger">Pendidikan Formal</h6>
                </div>
                <?= $this->include('profil/pekerjaan') ?>
              </div>
            </div>
            <div class="card">
              <div class="card-body">
                <div class="p-3 bg-warning-subtle">
                    <div class="float-end ms-2">
                        <h6 class="text-warning mb-0">Usul Perubahan</h6>
                    </div>
                    <h6 class="mb-0 text-danger">Pendidikan Pelatihan</h6>
                </div>
                <?= $this->include('profil/pekerjaan') ?>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>


  </div>
</div>
<?= $this->endSection() ?>
