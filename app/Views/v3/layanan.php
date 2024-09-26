<?= $this->extend('v3/template') ?>

<?= $this->section('content') ?>


<div class="row">
  <div class="col-12">
    <div class="card card-body mb-6">
    <h4 class="text-center mb-2"> Hello, how can we help? </h4>
    <p class="text-center mb-0 px-4">or choose a category to quickly find the help you need</p>
      <div class="d-flex flex-column flex-sm-row justify-content-between text-center gap-6 mt-10">
            <div class="d-flex flex-column align-items-center">
              <span class="p-4 border-1 border-primary rounded-circle border-dashed mb-0 w-px-75 h-px-75"><img src="<?= site_url()?>assets3/svg/icons/rocket.svg" alt="Rocket"></span>
              <p class="my-2">Tugas Belajar</p>
            </div>
            <div class="d-flex flex-column align-items-center">
              <span class="p-4 border-1 border-primary rounded-circle border-dashed mb-0 w-px-75 h-px-75"><img src="<?= site_url()?>assets3/svg/icons/user-info.svg" alt="user-info"></span>
              <p class="my-2">KGB</p>
            </div>
            <div class="d-flex flex-column align-items-center">
              <span class="p-4 border-1 border-primary rounded-circle border-dashed mb-0 w-px-75 h-px-75"><img src="<?= site_url()?>assets3/svg/icons/paper.svg" alt="paper"></span>
              <p class="my-2">Satyalancana</p>
            </div>
            <div class="d-flex flex-column align-items-center">
              <span class="p-4 border-1 border-primary rounded-circle border-dashed mb-0 w-px-75 h-px-75"><img src="<?= site_url()?>assets3/svg/icons/paper.svg" alt="paper"></span>
              <p class="my-2">Kenaikan Pangkat</p>
            </div>
            <div class="d-flex flex-column align-items-center">
              <span class="p-4 border-1 border-primary rounded-circle border-dashed mb-0 w-px-75 h-px-75"><img src="<?= site_url()?>assets3/svg/icons/paper.svg" alt="paper"></span>
              <p class="my-2">Kenaikan Jafung</p>
            </div>
          </div>
    </div>
  </div>
</div>

<?= $this->endSection() ?>
