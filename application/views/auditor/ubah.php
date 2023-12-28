<div class="content-page">
  <div class="content">

    <!-- Start Content-->
    <div class="container-fluid">

      <!-- start page title -->
      <div class="row">
        <div class="col-12">
          <div class="page-title-box">
            <div class="page-title-right">
              <a href="<?= base_url('auditor'); ?>" class="btn btn-success btn-rounded"><i class="fa fa-arrow-left"></i></a>
            </div>
            <h4 class="page-title">Ubah Data Auditor</h4>
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
                      <label for="nama_auditor">Nama Auditor</label>
                      <input type="text" value="<?= $auditor->nama_auditor; ?>" class="form-control" name="nama_auditor" id="nama_auditor" required>
                    </div>
                    <div class="form-group">
                      <label for="no_telp_auditor">No Telp Auditor</label>
                      <input type="text" value="<?= $auditor->no_telp_auditor; ?>" class="form-control" name="no_telp_auditor" id="no_telp_auditor" required>
                    </div>
                    <div class="form-group">
                      <label for="email_auditor">Email Auditor</label>
                      <input type="text" value="<?= $auditor->email_auditor; ?>" class="form-control" name="email_auditor" id="email_auditor" required>
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