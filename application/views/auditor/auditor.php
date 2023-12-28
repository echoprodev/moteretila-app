<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <!-- Import -->
                            <div class="dropdown d-inline ">
                                <button class="btn btn-primary btn-rounded float-right dropdown-toggle ml-2" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Import Excel</button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item has-icon" href="" data-toggle="modal" data-target="#modal-import-auditor">
                                        <i class="mdi mdi-file-import"></i>Upload File
                                    </a>
                                </div>
                            </div>
                            <!-- Modal Import Excel -->
                            <div class="modal fade" id="modal-import-auditor" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Import Excel</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <!-- Form Import Excel -->
                                            <?php echo form_open_multipart('Excel_import/import'); ?>
                                            <div class="form-group">
                                                <label for="excel_file"></label>
                                                <input type="file" name="excel_file" accept=".xlsx, .xls" required>
                                            </div>
                                            <div class="card-footer text-right bg-white">
                                                <button type="submit" class="btn btn-primary btn-sm btn-rounded float-right">Import</button>
                                                <?php echo form_close(); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="page-title-left">
                            <h4 class="page-title">Auditor</h4>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <div class="content-header">
                    <div class="container-fluid">
                        <?php
                        if (!empty($this->session->flashdata('pesan'))) {
                            if ($this->session->flashdata('status') == 'Berhasil') { ?>
                                <div class="alert alert-success alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    <h5><i class="icon fas fa-check"></i> Berhasil!</h5>
                                    <?= $this->session->flashdata('pesan'); ?>
                                </div>
                            <?php
                            } else { ?>
                                <div class="alert alert-danger alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    <h5><i class="icon fas fa-ban"></i> Gagal!</h5>
                                    <?= $this->session->flashdata('pesan'); ?>
                                </div>
                        <?php }
                        }
                        ?>
                        <div class="row mb-2">
                        </div><!-- /.row -->
                    </div><!-- /.container-fluid -->
                </div>
                <!-- /.content-header -->

                <!-- Main content -->
                <div class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <!-- /.col-md-6 -->
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <a href="<?= base_url('auditor/tambah'); ?>" class="btn btn-success btn-sm btn-rounded float-right"><i class="fa fa-plus"></i></a>
                                        <table class="table table-hover table-stripped" id="table1">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama Auditor</th>
                                                    <th>No Telp Auditor</th>
                                                    <th>Email Auditor</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $no = 1; //variabel no untuk urutan data
                                                //$auditor diambil dari key array di controller auditor
                                                //$row untuk penampung datanya
                                                foreach ($auditor as $row) :
                                                    echo "<tr><td>" . $no++ . "</td>
                      <td>" . $row->nama_auditor . "</td> <td>" . $row->no_telp_auditor . "</td> <td>" . $row->email_auditor . "</td>
                      <td><a href=" . base_url('auditor/ubah/' . $row->id_auditor) . " class='btn
                      btn-warning btn-sm btn-rounded'><i class='fa fa-edit'></i></a>
                      <a href=" . base_url('auditor/hapus/' . $row->id_auditor) . " class='btn
                      btn-danger btn-sm btn-rounded' onclick='return confirm(\"Apakah anda ingin menghapus data ini?\");'>
                      <i class='fa fa-trash'></i></a></td>
                      </tr>
                    ";

                                                endforeach;
                                                ?>
                                            </tbody>
                                        </table>
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
        </div>
    </div>
</div>