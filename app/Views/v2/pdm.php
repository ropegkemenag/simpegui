<?= $this->extend('v2/template') ?>

<?= $this->section('content') ?>
<div class="pc-content">
  <div class="page-header">
    <div class="page-block">
      <div class="row align-items-center">
        <div class="col-md-12">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="../dashboard/index.html">Peremajaan Data</a></li>
            <li class="breadcrumb-item"><a href="javascript: void(0)">Usulan</a></li>
          </ul>
        </div>
        <div class="col-md-12">
          <div class="page-header-title">
            <h2 class="mb-0">Usulan Peremajaan</h2>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-sm-12">
      <div class="card">
        <div class="card-header align-items-center d-flex">
            <h4 class="card-title mb-0 flex-grow-1">Daftar Usulan</h4>
            <div class="flex-shrink-0">
                <!-- <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#addmodal">Buat Usul</button> -->
                <a href="javascript:;" type="button" class="btn btn-primary waves-effect waves-light" onclick="add()">Buat Usul</a>
            </div>
        </div>
        <div class="card-body">
          <table class="datatable table table-bordered dt-responsive w-100">
            <thead>
              <tr>
                <th>Jenis Riwayat</th>
                <th>Tipe Usulan</th>
                <th>Tanggal Usul</th>
                <th>Status</th>
                <th>Opsi</th>
              </tr>
            </thead>
              <tbody>
                <tr>
                  <td>Pendidikan</td>
                  <td><span class="badge text-bg-primary">Tambah</span></td>
                  <td>15/09/2024</td>
                  <td><span class="badge text-bg-primary">Tambah</span></td>
                  <td><i class="material-icons-two-tone">pageview</i> <i class="material-icons-two-tone">edit</i> <i class="material-icons-two-tone">delete</i></td>
                </tr>
              </tbody>
            <tbody>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

<div id="addmodal" class="modal fade" data-bs-backdrop="static" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true" data-bs-scroll="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel">Tambah Usulan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form class="" action="<?= site_url('simpeg/pegawaibaru/addusul') ?>" method="post" id="addform" enctype="multipart/form-data">
                <div class="row mb-4">
                  <label for="unor" class="col-sm-3 col-form-label">NIP</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="nip" value="">
                  </div>
                </div>
                <div class="row mb-4">
                  <label for="unor" class="col-sm-3 col-form-label">Nama</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="nama" value="">
                  </div>
                </div>
                <div class="row mb-4">
                  <label for="unor" class="col-sm-3 col-form-label">Nomor SK</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="nomor_sk" value="">
                  </div>
                </div>
                <div class="row mb-4">
                  <label for="unor" class="col-sm-3 col-form-label">TMT</label>
                  <div class="col-sm-9">
                    <input type="date" class="form-control" name="tmt" value="">
                  </div>
                </div>
                <div class="row mb-4">
                  <label for="unor" class="col-sm-3 col-form-label">Lampiran SK</label>
                  <div class="col-sm-9">
                    <input type="file" class="form-control" name="dokumen" value="">
                  </div>
                </div>
              </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-primary waves-effect waves-light" onclick="$('#addform').submit()">Tambah</button>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>

<?= $this->section('script') ?>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script type="text/javascript">
var siteurl = '<?= site_url()?>';

function add(id) {
  // alert('Memuat...');
  $('#addmodal').modal('show');
}

$(document).ready(function() {
});


</script>
<?= $this->endSection() ?>
