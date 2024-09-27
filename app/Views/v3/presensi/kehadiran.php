<?= $this->extend('v3/template') ?>

<?= $this->section('content') ?>

<div class="row g-6">
  <!-- Card Border Shadow -->
  <div class="col-lg-3 col-sm-6">
    <div class="card card-border-shadow-primary h-100">
      <div class="card-body">
        <div class="d-flex align-items-center mb-2">
          <div class="avatar me-4">
            <span class="avatar-initial rounded bg-label-primary"><i class='ti ti-truck ti-28px'></i></span>
          </div>
          <h4 class="mb-0">42</h4>
        </div>
        <p class="mb-1">On route vehicles</p>
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-sm-6">
    <div class="card card-border-shadow-warning h-100">
      <div class="card-body">
        <div class="d-flex align-items-center mb-2">
          <div class="avatar me-4">
            <span class="avatar-initial rounded bg-label-warning"><i class='ti ti-alert-triangle ti-28px'></i></span>
          </div>
          <h4 class="mb-0">8</h4>
        </div>
        <p class="mb-1">Vehicles with errors</p>
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-sm-6">
    <div class="card card-border-shadow-danger h-100">
      <div class="card-body">
        <div class="d-flex align-items-center mb-2">
          <div class="avatar me-4">
            <span class="avatar-initial rounded bg-label-danger"><i class='ti ti-git-fork ti-28px'></i></span>
          </div>
          <h4 class="mb-0">27</h4>
        </div>
        <p class="mb-1">Deviated from route</p>
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-sm-6">
    <div class="card card-border-shadow-info h-100">
      <div class="card-body">
        <div class="d-flex align-items-center mb-2">
          <div class="avatar me-4">
            <span class="avatar-initial rounded bg-label-info"><i class='ti ti-clock ti-28px'></i></span>
          </div>
          <h4 class="mb-0">13</h4>
        </div>
        <p class="mb-1">Late vehicles</p>
      </div>
    </div>
  </div>

  <div class="col-12 order-5">
    <div class="card">
        <div class="card-header d-flex align-items-center">
            <h6 class="mb-0">Reapitulasi Kehadiran</h6>
            <div class="ms-auto">
              <div class="input-group">
                  <span class="input-group-text" id="basic-addon1">Tahun</span>
                  <select class="form-select" id="tahun">
                    <option value="2022" >2022</option><option value="2023" >2023</option><option value="2024" selected>2024</option>                  </select>
              </div>
            </div>
          </div>
          <div class="card-body">
            <div class="table-responsive table-card">
              <table class="table table-striped">
								<thead>
									<tr>
										<th>BULAN</th>
										<th>JML HARI BULAN</th>
										<th>JML HARI MASUK</th>
										<th>TELAT MASUK</th>
										<th>PULANG CEPAT</th>
										<th>SEKALI ABSEN</th>
										<th>TUGAS BELAJAR</th>
										<th>CUTI</th>
										<th>DINAS LUAR</th>
										<th>IZIN</th>
										<th>TANPA KET.</th>
									</tr>
								</thead>
                <tbody>
                                  <tr>
                    <td><a href="<?= site_url('v3/presensi/rekapitulasi')?>/1">Januari</a></td>
                    <td>22</td>
                    <td>14</td>
                    <td>0</td>
                    <td>1865</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>8</td>
                    <td>0</td>
                    <td>0</td>
                  </tr>
                                  <tr>
                    <td><a href="<?= site_url('v3/presensi/rekapitulasi')?>/2">Februari</a></td>
                    <td>18</td>
                    <td>10</td>
                    <td>0</td>
                    <td>1088</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>8</td>
                    <td>0</td>
                    <td>0</td>
                  </tr>
                                  <tr>
                    <td><a href="<?= site_url('v3/presensi/rekapitulasi')?>/3">Maret</a></td>
                    <td>18</td>
                    <td>8</td>
                    <td>0</td>
                    <td>666</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>11</td>
                    <td>0</td>
                    <td>0</td>
                  </tr>
                                  <tr>
                    <td><a href="<?= site_url('v3/presensi/rekapitulasi')?>/4">April</a></td>
                    <td>16</td>
                    <td>9</td>
                    <td>0</td>
                    <td>805</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>7</td>
                    <td>0</td>
                    <td>0</td>
                  </tr>
                                  <tr>
                    <td><a href="<?= site_url('v3/presensi/rekapitulasi')?>/5">Mei</a></td>
                    <td>18</td>
                    <td>9</td>
                    <td>-21</td>
                    <td>593</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>9</td>
                    <td>0</td>
                    <td>0</td>
                  </tr>
                                  <tr>
                    <td><a href="<?= site_url('v3/presensi/rekapitulasi')?>/6">Juni</a></td>
                    <td>0</td>
                    <td></td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>23</td>
                    <td>0</td>
                    <td></td>
                  </tr>
                                  <tr>
                    <td><a href="<?= site_url('v3/presensi/rekapitulasi')?>/7">Juli</a></td>
                    <td>23</td>
                    <td>6</td>
                    <td>0</td>
                    <td>686</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>17</td>
                    <td>0</td>
                    <td>0</td>
                  </tr>
                                  <tr>
                    <td><a href="<?= site_url('v3/presensi/rekapitulasi')?>/8">Agustus</a></td>
                    <td>22</td>
                    <td>18</td>
                    <td>0</td>
                    <td>3339</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>4</td>
                    <td>0</td>
                    <td>0</td>
                  </tr>
                                  <tr>
                    <td><a href="<?= site_url('v3/presensi/rekapitulasi')?>/9">September</a></td>
                    <td>20</td>
                    <td>6</td>
                    <td>-700</td>
                    <td>-739</td>
                    <td>6</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>14</td>
                  </tr>
                								</tbody>
							</table>
            </div>
          </div>
        </div>
  </div>
</div>

<?= $this->endSection() ?>
