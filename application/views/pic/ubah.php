<div class="content-page">
  <div class="content">

    <!-- Start Content-->
    <div class="container-fluid">

      <!-- start page title -->
      <div class="row">
        <div class="col-12">
          <div class="page-title-box">
            <div class="page-title-right">
              <a href="<?= base_url('pic'); ?>" class="btn btn-success btn-rounded"><i class="fa fa-arrow-left"></i></a>
            </div>
            <h4 class="page-title">Ubah Data PIC</h4>
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
                      <label for="nama_pic">Nama PIC</label>
                      <input type="text" value="<?= $pic->nama_pic; ?>" class="form-control form-control-border border-width-2" name="nama_pic" id="nama_pic" required>
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