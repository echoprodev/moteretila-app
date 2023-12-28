<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <a href="<?= base_url('users'); ?>" class="btn btn-success btn-rounded"><i class="fa fa-arrow-left"></i></a>
                        </div>
                        <h4 class="page-title">Ubah Data Users</h4>
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
                                            <label for="nama_lengkap">Nama Lengkap</label>
                                            <input type="text" class="form-control form-control-border border-width-2 " name="nama_lengkap" id="nama_lengkap" value="<?= $users->nama_lengkap; ?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="username">Username</label>
                                            <input type="text" class="form-control form-control-border border-width-2 " name="username" id="username" value="<?= $users->username; ?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="password">Password</label>
                                            <input type="text" class="form-control form-control-border border-width-2 " name="password" id="password">
                                            <small class="form-text text-muted text-danger">Kosongkan jika tidak ada perubahan <strong>Password</strong>.</small>
                                        </div>
                                        <div class="form-group">
                                            <label for="level">Users</label>
                                            <select name="level" id="level" class="form-control form-control-border border-width-2 " required>
                                                <option value="">Pilih Level</option>
                                                <option value="admin" <?php if ($users->level == "admin") echo "selected"; ?>>Admin</option>
                                                <option value="user" <?php if ($users->level == "user") echo "selected"; ?>>User</option>
                                            </select>
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