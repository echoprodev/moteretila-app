<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Include necessary meta tags, stylesheets, and scripts here -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moteretila</title>
</head>

<body>
    <!-- Main Content Container -->
    <div class="content-page">
        <div class="content">
            <!-- Start Content -->
            <div class="container-fluid">
                <!-- Start Page Title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box">
                            <h4 class="page-title">Laporan Tindak Lanjut</h4>
                        </div>
                    </div>
                </div>
                <!-- End Page Title -->

                <!-- Content Section -->
                <div class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <!-- Tab Navigation -->
                                    <ul class="nav nav-tabs" id="laporanTabs" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="pertanggal-tab" data-toggle="pill" href="#pertanggal" role="tab" aria-controls="pertanggal" aria-selected="true">Pertanggal</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="perbulan-tab" data-toggle="pill" href="#perbulan" role="tab" aria-controls="perbulan" aria-selected="false">Perbulan</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="pertahun-tab" data-toggle="pill" href="#pertahun" role="tab" aria-controls="pertahun" aria-selected="false">Pertahun</a>
                                        </li>
                                    </ul>

                                    <!-- Tab Content -->
                                    <div class="tab-content" id="laporanTabsContent">
                                        <!-- Pertanggal Tab -->
                                        <div class="tab-pane fade show active" id="pertanggal" role="tabpanel" aria-labelledby="pertanggal-tab">
                                            <form method="post">
                                                <!-- Form content for pertanggal tab goes here -->
                                                <div class="card-body">
                                                    <div class="row">
                                                        <?php echo form_open('laporan/laporan_pertanggal') ?>
                                                        <div class="col-lg-6 col-md-12">
                                                            <div class="form-group">
                                                                <label for="dari" class="required-form">Dari Tanggal</label>
                                                                <input type="date" name="dari" class="form-control form-control-border border-width-2" required="" autocomplete="off" placeholder="Dari" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-12">
                                                            <div class="form-group">
                                                                <label for="sampai" class="required-form">Sampai Tanggal</label>
                                                                <input type="date" name="sampai" class="form-control form-control-border border-width-2" required="" autocomplete="off" placeholder="Sampai" required>
                                                            </div>
                                                        </div>
                                                        <?php echo form_close() ?>
                                                    </div>
                                                    <!-- Card Footer (Cetak Laporan) -->
                                                    <div class="card-footer text-right bg-white" style="color: white;">
                                                        <a href="<?= base_url('Laporan_tindak_lanjut/laporan_pertanggal'); ?>" id="btnCetakLaporan" type="submit" class="btn btn-primary btn-sm btn-rounded">Cetak Laporan</a>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>

                                        <!-- Perbulan Tab -->
                                        <div class="tab-pane fade" id="perbulan" role="tabpanel" aria-labelledby="perbulan-tab">
                                            <form method="post">
                                                <!-- Form content for perbulan tab goes here -->
                                                <div class="card-body">
                                                    <div class="row">
                                                        <?php echo form_open('laporan/laporan_perbulan') ?>

                                                        <div class="col-lg-6 col-md-12">
                                                            <div class="form-group">
                                                                <label for="bulan" class="required-form"><b>Bulan</b></label>
                                                                <select class="form-control selectric" name="bulan" required="required" style="width: 100%;">
                                                                    <option value="">-- Pilih Bulan --</option>
                                                                    <option value="01">Januari</option>
                                                                    <option value="02">Febuari</option>
                                                                    <option value="03">Maret</option>
                                                                    <option value="04">April</option>
                                                                    <option value="05">Mei</option>
                                                                    <option value="06">Juni</option>
                                                                    <option value="07">Juli</option>
                                                                    <option value="08">Agustus</option>
                                                                    <option value="09">September</option>
                                                                    <option value="10">Oktober</option>
                                                                    <option value="11">November</option>
                                                                    <option value="12">Desember</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-12">
                                                            <div class="form-group">
                                                                <label for="tahun" class="required-form">Tahun</label>
                                                                <div class="select2-input">
                                                                    <select class="form-control select2" name="tahun" required="required" style="width: 100%;">
                                                                        <option value="">Pilih Tahun</option>
                                                                        <?php
                                                                        $mulai = date('Y') - 50;
                                                                        for ($i = $mulai; $i < $mulai + 100; $i++) {
                                                                            $sel = $i == date('Y') ? ' selected="selected"' : '';
                                                                        ?>
                                                                            <option value="<?= $i; ?>" <?= $sel; ?>><?= $i; ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <?php echo form_close() ?>
                                                    <!-- Card Footer (Cetak Laporan) -->
                                                    <div class="card-footer text-right bg-white" style="color: white;">
                                                        <a href="<?= base_url('Laporan_tindak_lanjut/laporan_perbulan'); ?>" id="btnCetakLaporan" type="submit" class="btn btn-primary btn-sm btn-rounded">Cetak Laporan</a>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>

                                        <!-- Pertahun Tab -->
                                        <div class="tab-pane fade" id="pertahun" role="tabpanel" aria-labelledby="pertahun-tab">
                                            <form method="post">
                                                <!-- Form content for pertahun tab goes here -->
                                                <div class="card-body">
                                                    <div class="row">
                                                        <?php echo form_open('laporan/laporan_pertahun') ?>
                                                        <div class="col-lg-6 col-md-12">
                                                            <div class="form-group">
                                                                <label for="tahun" class="required-form">Tahun</label>
                                                                <div class="select2-input">
                                                                    <select class="form-control select2" name="tahun" required="required" style="width: 100%;">
                                                                        <option value="">Pilih Tahun</option>
                                                                        <?php
                                                                        $mulai = date('Y') - 50;
                                                                        for ($i = $mulai; $i < $mulai + 100; $i++) {
                                                                            $sel = $i == date('Y') ? ' selected="selected"' : '';
                                                                        ?>
                                                                            <option value="<?= $i; ?>" <?= $sel; ?>><?= $i; ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <?php echo form_close() ?>
                                                    </div>
                                                    <!-- Card Footer (Cetak Laporan) -->
                                                    <div class="card-footer text-right bg-white" style="color: white;">
                                                        <a href="<?= base_url('Laporan_tindak_lanjut/laporan_pertahun'); ?>" id="btnCetakLaporan" type="submit" class="btn btn-primary btn-sm btn-rounded">Cetak Laporan</a>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Content Section -->
            </div>
        </div>
    </div>
</body>

</html>