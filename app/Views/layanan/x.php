<?= $this->extend('template') ?>

<?= $this->section('content') ?>
<div class="page-content">
  <div class="container-fluid">

    <div class="chat-wrapper d-lg-flex gap-1 mx-n4 mt-n4 p-1">
      <div class="file-manager-sidebar">
        <div class="p-4 d-flex flex-column h-100">
          <div class="mt-auto text-center">
              <img src="<?= base_url()?>assets/images/task.png" alt="Task" class="img-fluid">
          </div>
        </div>
      </div>
      <div class="file-manager-content w-100 p-4 pb-0">
        <h6 class="mb-3 fw-semibold text-uppercase">Summary</h6>
                                        <p>It will be as simple as occidental in fact, it will be Occidental. To an English person, it will seem like simplified English, as a skeptical Cambridge friend of mine told me what Occidental is. The European languages are members of the same family. Their separate existence is a myth. For science, music, sport, etc, Europe uses the same vocabulary. The languages only differ in their grammar, their pronunciation and their most common words.</p>

                                        <h6 class="mb-3 fw-semibold text-uppercase">Sub-tasks</h6>
                                        <ul class="ps-3 list-unstyled vstack gap-2">
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="productTask">
                                                    <label class="form-check-label" for="productTask">
                                                        Product Design, Figma (Software), Prototype
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="dashboardTask" checked>
                                                    <label class="form-check-label" for="dashboardTask">
                                                        Dashboards : Ecommerce, Analytics, Project,etc.
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="calenderTask">
                                                    <label class="form-check-label" for="calenderTask">
                                                        Create calendar, chat and email app pages
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="authenticationTask">
                                                    <label class="form-check-label" for="authenticationTask">
                                                        Add authentication pages
                                                    </label>
                                                </div>
                                            </li>
                                        </ul>

                                        <div class="pt-3 border-top border-top-dashed mt-4">
                                            <h6 class="mb-3 fw-semibold text-uppercase">Tasks Tags</h6>
                                            <div class="hstack flex-wrap gap-2 fs-15">
                                                <div class="badge fw-medium bg-info-subtle text-info">UI/UX</div>
                                                <div class="badge fw-medium bg-info-subtle text-info">Dashboard</div>
                                                <div class="badge fw-medium bg-info-subtle text-info">Design</div>
                                            </div>
                                        </div>
      </div>
    </div>


  </div>
</div>
<?= $this->endSection() ?>
