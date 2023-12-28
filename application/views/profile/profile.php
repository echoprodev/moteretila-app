<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <!-- Start Page Title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                        </div>
                        <h4 class="page-title">Profile</h4>
                    </div>
                </div>
            </div>
            <!-- End Page Title -->

            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <div class="content-header">
                    <div class="container-fluid">
                        <?php if (!empty($this->session->flashdata('pesan'))) : ?>
                            <div class="alert alert-<?= $this->session->flashdata('status') == 'Berhasil' ? 'success' : 'danger'; ?> alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <h5><i class="icon fas <?= $this->session->flashdata('status') == 'Berhasil' ? 'fa-check' : 'fa-ban'; ?>"></i> <?= ucfirst($this->session->flashdata('status')); ?>!</h5>
                                <?= $this->session->flashdata('pesan'); ?>
                            </div>
                        <?php endif; ?>
                        <div class="row mb-2">
                        </div><!-- /.row -->
                    </div><!-- /.container-fluid -->
                </div>
                <!-- /.content-header -->

                <!-- Main content -->
                <div class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <form action="<?= site_url('profile/ubah') ?>" method="post">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-12">
                                                    <div class="form-group">
                                                        <label for="nama_lengkap" class="required-form"><b>Nama Lengkap</b></label>
                                                        <input type="text" id="nama_lengkap" name="nama_lengkap" class="form-control" required autocomplete="off" minlength="1" maxlength="100" value="<?= isset($online['nama_lengkap']) ? $online['nama_lengkap'] : ''; ?>">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-12">
                                                    <div class="form-group">
                                                        <label for="username" class="required-form"><b>Username</b></label>
                                                        <input type="text" id="username" name="username" class="form-control" required autocomplete="off" minlength="1" maxlength="20" value="<?= isset($online['username']) ? $online['username'] : ''; ?>">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-12">
                                                    <div class="form-group">
                                                        <label for="password"><b>Password</b></label>
                                                        <input type="password" id="password" name="password" class="form-control" autocomplete="off" minlength="1">
                                                        <small class="form-text text-muted text-danger">Kosongkan jika tidak ada perubahan <strong>Password</strong>.</small>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer text-right bg-white">
                                                <button type="submit" name="simpan" class="btn btn-success btn-sm btn-rounded">Simpan</button>
                                                <button type="reset" class="btn btn-danger btn-sm btn-rounded">Batal</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.container-fluid -->
                </div>
                <!-- /.content -->
            </div>
        </div>
    </div>
</div>
