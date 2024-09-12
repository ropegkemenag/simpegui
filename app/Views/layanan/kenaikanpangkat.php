<?= $this->extend('template') ?>

<?= $this->section('content') ?>
<div class="page-content">
    <div class="container-fluid">

      <div class="row">
          <div class="col-12">
              <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                  <h4 class="mb-sm-0">Riwayat Usul Kenaikan Pangkat</h4>

                  <div class="page-title-right">
                      <a href="<?= site_url('layanan')?>" class="btn btn-sm btn-primary">Kembali</a>
                  </div>

              </div>
          </div>
      </div>

      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
              <!-- Striped Rows -->
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Customer</th>
            <th scope="col">Date</th>
            <th scope="col">Invoice</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Bobby Davis</td>
            <td>Nov 14, 2021</td>
            <td>$2,410</td>
            <td><span class="badge bg-success">Confirmed</span></td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>Christopher Neal</td>
            <td>Nov 21, 2021</td>
            <td>$1,450</td>
            <td><span class="badge bg-warning">Waiting</span></td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td>Monkey Karry</td>
            <td>Nov 24, 2021</td>
            <td>$3,500</td>
            <td><span class="badge bg-success">Confirmed</span></td>
        </tr>
        <tr>
            <th scope="row">4</th>
            <td>Aaron James</td>
            <td>Nov 25, 2021</td>
            <td>$6,875</td>
            <td><span class="badge bg-danger">Cancelled</span></td>
        </tr>
    </tbody>
</table>
            </div>
          </div>
        </div>
      </div>


    </div>
</div>
<?= $this->endSection() ?>
