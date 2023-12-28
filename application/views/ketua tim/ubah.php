<div class="content-page">
  <div class="content">

    <!-- Start Content-->
    <div class="container-fluid">

      <!-- start page title -->
      <div class="row">
        <div class="col-12">
          <div class="page-title-box">
            <div class="page-title-right">
              <a href="<?= base_url('ketua_tim'); ?>" class="btn btn-success btn-rounded"><i class="fa fa-arrow-left"></i></a>
            </div>
            <h4 class="page-title">Ubah Data Ketua Tim</h4>
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
                      <label for="nama_ketua_tim">Nama Ketua Tim</label>
                      <input type="text" value="<?= $ketua_tim->nama_ketua_tim; ?>" class="form-control form-control-border border-width-2" name="nama_ketua_tim" id="nama_ketua_tim" required>
                    </div>
                    <div class="form-group">
                      <label for="no_telp_ketua_tim">No Telp Ketua Tim</label>
                      <input type="text" value="<?= $ketua_tim->no_telp_ketua_tim; ?>" class="form-control form-control-border border-width-2" name="no_telp_ketua_tim" id="no_telp_ketua_tim" required>
                    </div>
                    <div class="form-group">
                      <label for="email_ketua_tim">Email Ketua Tim</label>
                      <input type="text" value="<?= $ketua_tim->email_ketua_tim; ?>" class="form-control form-control-border border-width-2" name="email_ketua_tim" id="email_ketua_tim" required>
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