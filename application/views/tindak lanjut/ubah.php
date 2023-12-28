<div class="content-page">
  <div class="content">

    <!-- Start Content-->
    <div class="container-fluid">

      <!-- start page title -->
      <div class="row">
        <div class="col-12">
          <div class="page-title-box">
            <div class="page-title-right">
              <a href="<?= base_url('tindak_lanjut'); ?>" class="btn btn-success btn-rounded"><i class="fa fa-arrow-left"></i></a>
            </div>
            <h4 class="page-title">Ubah Data Tindak Lanjut</h4>
          </div>
        </div>
      </div>
      <!-- end page title -->

      <!-- Main content -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <!-- /.col-md-6 -->
            <div class="col-lg-12">
              <div class="card">
                <div class="card-body">
                  <form action="" method="post">
                    <div class="form-group">
                      <label for="tindak_lanjut">Tindak Lanjut</label>
                      <input type="text" value="<?= $tindak_lanjut->tindak_lanjut; ?>" class="form-control" name="tindak_lanjut" id="tindak_lanjut" required>
                    </div>
                    <div class="form-group">
                      <label for="unit">Unit</label>
                      <select name="unit" class="form-control form-control-border border-width-2" required>
                        <?php foreach ($units as $unit) : ?>
                          <option value="<?php echo $unit->id_unit; ?>"><?php echo $unit->nama_unit; ?></option>
                        <?php endforeach; ?>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="pic">PIC</label>
                      <select name="pic" class="form-control form-control-border border-width-2" required>
                        <?php foreach ($pic as $key => $value) : ?>
                          <option value="<?= $value->id_pic ?>"><?= $value->nama_pic ?></option>
                        <?php endforeach; ?>
                      </select>
                    </div>

                    <div class="form-group">
                      <label for="auditor">Auditor</label>
                      <select name="auditor" class="form-control form-control-border border-width-2" required>
                        <?php foreach ($auditor as $key => $value) : ?>
                          <option value="<?= $value->id_auditor ?>" <?= isset($selectedAuditor) && $selectedAuditor == $value->id_auditor ? 'selected' : '' ?>>
                            <?= $value->nama_auditor ?>
                          </option>
                        <?php endforeach; ?>
                      </select>
                    </div>

                    <div class="form-group">
                      <label for="ketua_tim">Ketua Tim</label>
                      <select name="id_ketua_tim" class="form-control <?= isset($errors['id_ketua_tim']) ? 'is-invalid' : '' ?>" required>
                        <option value="" hidden></option>
                        <?php foreach ($ketua_tim as $key => $value) : ?>
                          <option value="<?= $value->id_ketua_tim ?>" <?= isset($selectedKetuaTim) && $selectedKetuaTim == $value->id_ketua_tim ? 'selected' : '' ?>>
                            <?= $value->nama_ketua_tim ?>
                          </option>
                        <?php endforeach; ?>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="due_date">Due Date</label>
                      <input type="daterangepick" class="form-control form-control-border border-width-2" name="due_date" id="due_date" required>
                    </div>
                    <div class="card-footer text-right bg-white">
                      <button type="submit" name="simpan" class="btn btn-success btn-sm btn-rounded">Simpan</i>
                      </button>
                      <button type="reset" class="btn btn-danger btn-sm btn-rounded">Batal</i>
                      </button>
                    </div>
                  </form>
                </div>
              </div>

            </div>
            <!-- /.col-md-6 -->
          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content -->
    </div>