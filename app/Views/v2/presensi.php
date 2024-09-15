<?= $this->extend('v2/template') ?>

<?= $this->section('content') ?>
<div class="pc-content">
  <div class="page-header">
          <div class="page-block">
            <div class="row align-items-center">
              <div class="col-md-12">
                <ul class="breadcrumb">
                  <li class="breadcrumb-item"><a href="../dashboard/index.html">Presensi</a></li>
                </ul>
              </div>
              <div class="col-md-12">
                <div class="page-header-title">
                  <h2 class="mb-0">Presensi</h2>
                </div>
              </div>
            </div>
          </div>
        </div>
      <div class="row">
        <!-- [ sample-page ] start -->
        <div class="col-sm-12">
          <div class="row">
            <div class="col-lg-5 col-xxl-3">
              <div class="card overflow-hidden">
                <div class="nav flex-column nav-pills list-group list-group-flush account-pills mb-0" id="user-set-tab"
                  role="tablist" aria-orientation="vertical">
                  <a class="nav-link list-group-item list-group-item-action active" id="user-set-profile-tab"
                    data-bs-toggle="pill" href="#user-set-profile" role="tab" aria-controls="user-set-profile"
                    aria-selected="true">
                    <span class="f-w-500"><i class="ph-duotone ph-user-circle m-r-10"></i>Informasi Pegawai</span>
                  </a>
                  <a class="nav-link list-group-item list-group-item-action" id="kehadiran-tab"
                    data-bs-toggle="pill" href="#kehadiran" role="tab" aria-controls="user-set-profile"
                    aria-selected="true">
                    <span class="f-w-500"><i class="ph-duotone ph-user-circle m-r-10"></i>Kehadiran</span>
                  </a>
                  <a class="nav-link list-group-item list-group-item-action" id="user-set-information-tab"
                    data-bs-toggle="pill" href="#user-set-information" role="tab" aria-controls="user-set-information"
                    aria-selected="false">
                    <span class="f-w-500"><i class="ph-duotone ph-clipboard-text m-r-10"></i>Uang Makan</span>
                  </a>
                  <a class="nav-link list-group-item list-group-item-action" id="user-set-information-tab"
                    data-bs-toggle="pill" href="#user-set-information" role="tab" aria-controls="user-set-information"
                    aria-selected="false">
                    <span class="f-w-500"><i class="ph-duotone ph-clipboard-text m-r-10"></i>Tunjangan Kinerja</span>
                  </a>
                  <a class="nav-link list-group-item list-group-item-action" id="user-set-information-tab"
                    data-bs-toggle="pill" href="#user-set-information" role="tab" aria-controls="user-set-information"
                    aria-selected="false">
                    <span class="f-w-500"><i class="ph-duotone ph-clipboard-text m-r-10"></i>Ketidakhadiran</span>
                  </a>
                  <a class="nav-link list-group-item list-group-item-action" id="user-set-information-tab"
                    data-bs-toggle="pill" href="#user-set-information" role="tab" aria-controls="user-set-information"
                    aria-selected="false">
                    <span class="f-w-500"><i class="ph-duotone ph-clipboard-text m-r-10"></i>Pengaduan</span>
                  </a>
                </div>
              </div>
              <div class="card">
                <div class="card-header">
                  <h5>Informasi Pusaka</h5>
                </div>
                <div class="card-body position-relative">
                  <div class="d-inline-flex align-items-center justify-content-between w-100 mb-3">
                    <p class="mb-0 text-muted me-1">Jam Masuk</p>
                    <p class="mb-0">07.30</p>
                  </div>
                  <div class="d-inline-flex align-items-center justify-content-between w-100 mb-3">
                    <p class="mb-0 text-muted me-1">Jam Pulang</p>
                    <p class="mb-0">16.30</p>
                  </div>
                  <div class="d-inline-flex align-items-center justify-content-between w-100">
                    <p class="mb-0 text-muted me-1">Lokasi Kantor</p>
                    <p class="mb-0"><a href="https://maps.google.com" target="_blank">Lihat</a></p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-7 col-xxl-9">
              <div class="tab-content" id="user-set-tabContent">
                <div class="tab-pane fade show active" id="user-set-profile" role="tabpanel"
                  aria-labelledby="user-set-profile-tab">
                  <div class="card">
                    <div class="card-header">
                      <h5>Informasi</h5>
                    </div>
                    <div class="card-body">
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item px-0 pt-0">
                          <div class="row">
                            <div class="col-md-6">
                              <p class="mb-1 text-muted">NIP</p>
                              <p class="mb-0">199000000</p>
                            </div>
                            <div class="col-md-6">
                              <p class="mb-1 text-muted">Nama</p>
                              <p class="mb-0">Asep Surasep</p>
                            </div>
                          </div>
                        </li>
                        <li class="list-group-item px-0">
                          <div class="row">
                            <div class="col-md-6">
                              <p class="mb-1 text-muted">Jabatan</p>
                              <p class="mb-0">Analis Sumber Daya Manusia Ahli Muda</p>
                            </div>
                            <div class="col-md-6">
                              <p class="mb-1 text-muted">Grade</p>
                              <p class="mb-0">10</p>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>

                </div>
                <div class="tab-pane fade" id="kehadiran" role="tabpanel"
                  aria-labelledby="user-set-information-tab">
                  <div class="card">
                    <div class="card-header">
                      <h5>Data Kehadiran</h5>
                    </div>
                    <div class="card-body">
                      <div class="table-responsive table-card">
                        <table class="table table-bordered table-striped">
                          <thead>
                            <th>Bulan</th>
                            <th>Jml Hari Bulan</th>
                            <th>Jml Hari Masuk</th>
                            <th>Telat Masuk</th>
                            <th>Cepat Pulang</th>
                            <th>Sekali Absen</th>
                            <th>Tugas Belajar</th>
                            <th>Cuti</th>
                            <th>Dinas Luar</th>
                            <th>Izin</th>
                            <th>TK</th>
                          </thead>
                          <tbody>
                            <tr>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="user-set-account" role="tabpanel" aria-labelledby="user-set-account-tab">
                  <div class="card">
                    <div class="card-header">
                      <h5>General Settings</h5>
                    </div>
                    <div class="card-body">
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item px-0 pt-0">
                          <div class="row mb-0">
                            <label class="col-form-label col-md-4 col-sm-12 text-md-end">Username <span
                                class="text-danger">*</span></label>
                            <div class="col-md-8 col-sm-12">
                              <input type="text" class="form-control" value="Ashoka_Tano_16">
                              <div class="form-text">
                                Your Profile URL: <a href="#" class="link-primary">https://pc.com/Ashoka_Tano_16</a>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="list-group-item px-0">
                          <div class="row mb-0">
                            <label class="col-form-label col-md-4 col-sm-12 text-md-end">Account Email <span
                                class="text-danger">*</span></label>
                            <div class="col-md-8 col-sm-12">
                              <input type="text" class="form-control" value="demo@sample.com">
                            </div>
                          </div>
                        </li>
                        <li class="list-group-item px-0">
                          <div class="row mb-0">
                            <label class="col-form-label col-md-4 col-sm-12 text-md-end">Language</label>
                            <div class="col-md-8 col-sm-12">
                              <select class="form-control">
                                <option>Washington</option>
                                <option>India</option>
                                <option>Africa</option>
                                <option>New York</option>
                                <option>Malaysia</option>
                              </select>
                            </div>
                          </div>
                        </li>
                        <li class="list-group-item px-0 pb-0">
                          <div class="row mb-0">
                            <label class="col-form-label col-md-4 col-sm-12 text-md-end">Sign in Using <span
                                class="text-danger">*</span></label>
                            <div class="col-md-8 col-sm-12">
                              <select class="form-control">
                                <option>Password</option>
                                <option>Face Recognition</option>
                                <option>Thumb Impression</option>
                                <option>Key</option>
                                <option>Pin</option>
                              </select>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header">
                      <h5>Advance Settings</h5>
                    </div>
                    <div class="card-body">
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item px-0 pt-0">
                          <div class="d-flex align-items-center justify-content-between">
                            <div>
                              <p class="mb-1">Secure Browsing</p>
                              <p class="text-muted text-sm mb-0">Browsing Securely ( https ) when it's necessary</p>
                            </div>
                            <div class="form-check form-switch p-0">
                              <input class="form-check-input h4 position-relative m-0" type="checkbox" role="switch"
                                checked="">
                            </div>
                          </div>
                        </li>
                        <li class="list-group-item px-0">
                          <div class="d-flex align-items-center justify-content-between">
                            <div>
                              <p class="mb-1">Login Notifications</p>
                              <p class="text-muted text-sm mb-0">Notify when login attempted from other place</p>
                            </div>
                            <div class="form-check form-switch p-0">
                              <input class="form-check-input h4 position-relative m-0" type="checkbox" role="switch"
                                checked="">
                            </div>
                          </div>
                        </li>
                        <li class="list-group-item px-0 pb-0">
                          <div class="d-flex align-items-center justify-content-between">
                            <div>
                              <p class="mb-1">Login Approvals</p>
                              <p class="text-muted text-sm mb-0">Approvals is not required when login from unrecognized
                                devices.</p>
                            </div>
                            <div class="form-check form-switch p-0">
                              <input class="form-check-input h4 position-relative m-0" type="checkbox" role="switch"
                                checked="">
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header">
                      <h5>Recognized Devices</h5>
                    </div>
                    <div class="card-body">
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item px-0 pt-0">
                          <div class="d-flex align-items-center justify-content-between">
                            <div class="me-2">
                              <div class="d-flex align-items-center">
                                <div class="avtar bg-light-primary">
                                  <i class="ph-duotone ph-desktop f-24"></i>
                                </div>
                                <div class="ms-2">
                                  <p class="mb-1">Celt Desktop</p>
                                  <p class="mb-0 text-muted">4351 Deans Lane</p>
                                </div>
                              </div>
                            </div>
                            <div class="">
                              <div class="text-success d-inline-block me-2">
                                <i class="fas fa-circle f-10 me-2"></i>
                                Current Active
                              </div>
                              <a href="#!" class="text-danger"><i class="feather icon-x-circle"></i></a>
                            </div>
                          </div>
                        </li>
                        <li class="list-group-item px-0">
                          <div class="d-flex align-items-center justify-content-between">
                            <div class="me-2">
                              <div class="d-flex align-items-center">
                                <div class="avtar bg-light-primary">
                                  <i class="ph-duotone ph-device-tablet-camera f-24"></i>
                                </div>
                                <div class="ms-2">
                                  <p class="mb-1">Imco Tablet</p>
                                  <p class="mb-0 text-muted">4185 Michigan Avenue</p>
                                </div>
                              </div>
                            </div>
                            <div class="">
                              <div class="text-muted d-inline-block me-2">
                                <i class="fas fa-circle f-10 me-2"></i>
                                Active 5 days ago
                              </div>
                              <a href="#!" class="text-danger"><i class="feather icon-x-circle"></i></a>
                            </div>
                          </div>
                        </li>
                        <li class="list-group-item px-0 pb-0">
                          <div class="d-flex align-items-center justify-content-between">
                            <div class="me-2">
                              <div class="d-flex align-items-center">
                                <div class="avtar bg-light-primary">
                                  <i class="ph-duotone ph-device-mobile-camera f-24"></i>
                                </div>
                                <div class="ms-2">
                                  <p class="mb-1">Albs Mobile</p>
                                  <p class="mb-0 text-muted">3462 Fairfax Drive</p>
                                </div>
                              </div>
                            </div>
                            <div class="">
                              <div class="text-muted d-inline-block me-2">
                                <i class="fas fa-circle f-10 me-2"></i>
                                Active 1 month ago
                              </div>
                              <a href="#!" class="text-danger"><i class="feather icon-x-circle"></i></a>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header">
                      <h5>Active Sessions</h5>
                    </div>
                    <div class="card-body">
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item px-0 pt-0">
                          <div class="d-flex align-items-center justify-content-between">
                            <div class="me-2">
                              <div class="d-flex align-items-center">
                                <div class="avtar bg-light-primary">
                                  <i class="ph-duotone ph-desktop f-24"></i>
                                </div>
                                <div class="ms-2">
                                  <p class="mb-1">Celt Desktop</p>
                                  <p class="mb-0 text-muted">4351 Deans Lane</p>
                                </div>
                              </div>
                            </div>
                            <button class="btn btn-link-danger">Logout</button>
                          </div>
                        </li>
                        <li class="list-group-item px-0 pb-0">
                          <div class="d-flex align-items-center justify-content-between">
                            <div class="me-2">
                              <div class="d-flex align-items-center">
                                <div class="avtar bg-light-primary">
                                  <i class="ph-duotone ph-device-tablet-camera f-24"></i>
                                </div>
                                <div class="ms-2">
                                  <p class="mb-1">Moon Tablet</p>
                                  <p class="mb-0 text-muted">4185 Michigan Avenue</p>
                                </div>
                              </div>
                            </div>
                            <button class="btn btn-link-danger">Logout</button>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-body text-end">
                      <button class="btn btn-outline-dark me-2">Clear</button>
                      <button class="btn btn-primary">Update Profile</button>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="user-set-passwort" role="tabpanel"
                  aria-labelledby="user-set-passwort-tab">
                  <div class="card alert alert-warning p-0">
                    <div class="card-body">
                      <div class="d-flex align-items-center">
                        <div class="flex-grow-1 me-3">
                          <h4 class="alert-heading">Alert!</h4>
                          <p class="mb-2">Your Password will expire in every 3 months. So change it periodically.</p>
                          <a href="#" class="alert-link"><u>Do not share your password</u></a>
                        </div>
                        <div class="flex-shrink-0">
                          <img src="<?= base_url()?>assets2/images/application/img-accout-password-alert.png" alt="img"
                            class="img-fluid wid-80">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header">
                      <h5>Change Password</h5>
                    </div>
                    <div class="card-body">
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item pt-0 px-0">
                          <div class="row mb-0">
                            <label class="col-form-label col-md-4 col-sm-12 text-md-end">Current Password <span
                                class="text-danger">*</span>
                            </label>
                            <div class="col-md-8 col-sm-12">
                              <input type="password" class="form-control">
                              <div class="form-text"> Forgot password? <a href="#" class="link-primary">Click here</a>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="list-group-item px-0">
                          <div class="row mb-0">
                            <label class="col-form-label col-md-4 col-sm-12 text-md-end">New Password <span
                                class="text-danger">*</span></label>
                            <div class="col-md-8 col-sm-12">
                              <input type="password" class="form-control">
                            </div>
                          </div>
                        </li>
                        <li class="list-group-item pb-0 px-0">
                          <div class="row mb-0">
                            <label class="col-form-label col-md-4 col-sm-12 text-md-end">Confirm Password <span
                                class="text-danger">*</span></label>
                            <div class="col-md-8 col-sm-12">
                              <input type="password" class="form-control">
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-body text-end">
                      <div class="btn btn-outline-secondary me-2">Cancel</div>
                      <div class="btn btn-primary">Change Password</div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="user-set-email" role="tabpanel" aria-labelledby="user-set-email-tab">
                  <div class="card">
                    <div class="card-header">
                      <h5>Email Settings</h5>
                    </div>
                    <div class="card-body">
                      <h6 class="mb-3">Setup Email Notification</h6>
                      <div class="d-flex align-items-center justify-content-between mb-1">
                        <div>
                          <p class="text-muted mb-0">Email Notification</p>
                        </div>
                        <div class="form-check form-switch p-0">
                          <input class="m-0 form-check-input h5 position-relative" type="checkbox" role="switch"
                            checked="">
                        </div>
                      </div>
                      <div class="d-flex align-items-center justify-content-between mb-0">
                        <div>
                          <p class="text-muted mb-0">Send Copy To Personal Email</p>
                        </div>
                        <div class="form-check form-switch p-0">
                          <input class="m-0 form-check-input h5 position-relative" type="checkbox" role="switch">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header">
                      <h5>Activity Related Emails</h5>
                    </div>
                    <div class="card-body">
                      <h6 class="mb-3">When to email?</h6>
                      <div class="d-flex align-items-center justify-content-between mb-1">
                        <div>
                          <p class="text-muted mb-0">Have new notifications</p>
                        </div>
                        <div class="form-check form-switch p-0">
                          <input class="m-0 form-check-input h5 position-relative" type="checkbox" role="switch"
                            checked="">
                        </div>
                      </div>
                      <div class="d-flex align-items-center justify-content-between mb-1">
                        <div>
                          <p class="text-muted mb-0">You're sent a direct message</p>
                        </div>
                        <div class="form-check form-switch p-0">
                          <input class="m-0 form-check-input h5 position-relative" type="checkbox" role="switch">
                        </div>
                      </div>
                      <div class="d-flex align-items-center justify-content-between mb-1">
                        <div>
                          <p class="text-muted mb-0">Someone adds you as a connection</p>
                        </div>
                        <div class="form-check form-switch p-0">
                          <input class="m-0 form-check-input h5 position-relative" type="checkbox" role="switch"
                            checked="">
                        </div>
                      </div>
                      <hr class="my-2 border border-secondary-subtle">
                      <h6 class="mb-3">When to escalate emails?</h6>
                      <div class="d-flex align-items-center justify-content-between mb-1">
                        <div>
                          <p class="text-muted mb-0">Upon new order</p>
                        </div>
                        <div class="form-check form-switch p-0">
                          <input class="m-0 form-check-input h5 position-relative" type="checkbox" role="switch"
                            checked="">
                        </div>
                      </div>
                      <div class="d-flex align-items-center justify-content-between mb-1">
                        <div>
                          <p class="text-muted mb-0">New membership approval</p>
                        </div>
                        <div class="form-check form-switch p-0">
                          <input class="m-0 form-check-input h5 position-relative" type="checkbox" role="switch">
                        </div>
                      </div>
                      <div class="d-flex align-items-center justify-content-between mb-0">
                        <div>
                          <p class="text-muted mb-0">Member registration</p>
                        </div>
                        <div class="form-check form-switch p-0">
                          <input class="m-0 form-check-input h5 position-relative" type="checkbox" role="switch"
                            checked="">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header">
                      <h5>Updates from System Notification</h5>
                    </div>
                    <div class="card-body">
                      <h6 class="mb-3">Email you with?</h6>
                      <div class="d-flex align-items-center justify-content-between mb-1">
                        <div>
                          <p class="text-muted mb-0">News about PCT-themes products and feature updates</p>
                        </div>
                        <div class="form-check form-switch p-0">
                          <input class="m-0 form-check-input h5 position-relative" type="checkbox" role="switch"
                            checked="">
                        </div>
                      </div>
                      <div class="d-flex align-items-center justify-content-between mb-1">
                        <div>
                          <p class="text-muted mb-0">Tips on getting more out of PCT-themes</p>
                        </div>
                        <div class="form-check form-switch p-0">
                          <input class="m-0 form-check-input h5 position-relative" type="checkbox" role="switch"
                            checked="">
                        </div>
                      </div>
                      <div class="d-flex align-items-center justify-content-between mb-1">
                        <div>
                          <p class="text-muted mb-0">Things you missed since you last logged into PCT-themes</p>
                        </div>
                        <div class="form-check form-switch p-0">
                          <input class="m-0 form-check-input h5 position-relative" type="checkbox" role="switch">
                        </div>
                      </div>
                      <div class="d-flex align-items-center justify-content-between mb-1">
                        <div>
                          <p class="text-muted mb-0">News about products and other services</p>
                        </div>
                        <div class="form-check form-switch p-0">
                          <input class="m-0 form-check-input h5 position-relative" type="checkbox" role="switch">
                        </div>
                      </div>
                      <div class="d-flex align-items-center justify-content-between mb-0">
                        <div>
                          <p class="text-muted mb-0">Tips and Document business products</p>
                        </div>
                        <div class="form-check form-switch p-0">
                          <input class="m-0 form-check-input h5 position-relative" type="checkbox" role="switch">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-body text-end btn-page">
                      <div class="btn btn-outline-secondary">Cancel</div>
                      <div class="btn btn-primary">Update Profile</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- [ sample-page ] end -->
      </div>
      <!-- [ Main Content ] end -->
    </div>
<?= $this->endSection() ?>
