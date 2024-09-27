<?= $this->extend('v3/template') ?>

<?= $this->section('content') ?>

<div class="align-center">
  <h4>Layanan Ekternal</h4>
</div>
<div class="d-flex flex-wrap" id="icons-container">
  <div class="card icon-card cursor-pointer text-center mb-6 mx-3">
    <div class="card-body text-primary">
      <a href="https://myasn.bkn.go.id/" target="_blank">
        <img src="https://myasn.bkn.go.id/assets/images/MyASN-FULL.png" width="100%">
        <p class="icon-name text-capitalize text-truncate mb-0">MyASN</p>
      </a>
    </div>
  </div>
  <div class="card icon-card cursor-pointer text-center mb-6 mx-3">
    <div class="card-body">
      <a href="https://kinerja.bkn.go.id/login" target="_blank">
        <img src="https://kinerja.bkn.go.id/images/kineja_new.png" width="100%">
        <p class="icon-name text-capitalize text-truncate mb-0">E-Kinerja</p>
      </a>
    </div>
  </div>
  <div class="card icon-card cursor-pointer text-center mb-6 mx-3">
    <div class="card-body">
      <a href="https://tos.taspen.co.id/" target="_blank">
        <img src="https://www.taspen.co.id/assets/img/Logo%20Taspen%202.png" width="100%">
        <p class="icon-name text-capitalize text-truncate mb-0">Taspen</p>
      </a>
    </div>
  </div>
  <div class="card icon-card cursor-pointer text-center mb-6 mx-3">
    <div class="card-body">
      <a href="https://sitara.tapera.go.id/peserta/login" target="_blank">
        <img src="https://sitara.tapera.go.id/assets/img/Asset7.svg" width="100%">
        <p class="icon-name text-capitalize text-truncate mb-0">TAPERA</p>
      </a>
    </div>
  </div>

</div>

<?= $this->endSection() ?>
