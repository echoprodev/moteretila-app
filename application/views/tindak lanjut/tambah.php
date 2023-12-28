<div class="content-page">
	<div class="content">

		<!-- Start Content-->
		<div class="container-fluid">

			<!-- start page title -->
			<div class="row">
				<div class="col-12">
					<div class="page-title-box">
						<div class="page-title-right">
							<a href="<?= base_url('unit'); ?>" class="btn btn-success btn-rounded"><i
									class="fa fa-arrow-left"></i></a>
						</div>
						<h4 class="page-title">Tambah Data Tindak Lanjut</h4>
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
											<input type="text" class="form-control form-control-border border-width-2 "
												name="tindak_lanjut" id="tindak_lanjut" required>
										</div>
										<div class="form-group">
											<label for="unit">Unit</label>
											<select name="id_unit"
												class="form-control form-control-border border-width-2" required>
												<option value="">-- Pilih Nama Unit --</option>
												<?php foreach ($data as $key => $value) { ?>
												<option value="<?= $value->id_unit; ?>"><?= $value->nama_unit; ?>
												</option>
												<?php } ?>
											</select>
										</div>

										<div class="form-group">
											<label for="pic">PIC</label>
											<select name="id_pic"
												class="form-control form-control-border border-width-2" required>
												<option value="">-- Pilih Nama PIC --</option>
												<?php foreach ($pic as $key => $value) { ?>
												<option value="<?= $value->id_pic; ?>"><?= $value->nama_pic; ?></option>
												<?php } ?>
											</select>
										</div>

										<div class="form-group">
											<label for="auditor">Auditor</label>
											<select name="id_auditor"
												class="form-control form-control-border border-width-2" required>
												<option value="">-- Pilih Nama Auditor --</option>
												<?php foreach ($auditor as $key => $value) { ?>
												<option value="<?= $value->id_auditor; ?>"><?= $value->nama_auditor; ?>
												</option>
												<?php } ?>
											</select>
										</div>

										<div class="form-group">
											<label for="ketua_tim">Ketua Tim</label>
											<select name="id_ketua_tim"
												class="form-control form-control-border border-width-2" required>
												<option value="">-- Pilih Nama Ketua Tim --</option>
												<?php foreach ($ketua_tim as $key => $value) { ?>
												<option value="<?= $value->id_ketua_tim; ?>">
													<?= $value->nama_ketua_tim; ?></option>
												<?php } ?>
											</select>
										</div>

										<div class="form-group">
											<label for="due_date">Due Date</label>
											<input type="date" class="form-control form-control-border" id="due_date"
												name="due_date" placeholder="dd-mm-yyyy" data-provide="datepicker"
												required>
										</div>

										<div class="card-footer text-right bg-white">
											<button type="submit" name="simpan"
												class="btn btn-success btn-sm btn-rounded">Simpan</button>
											<button type="reset"
												class="btn btn-danger btn-sm btn-rounded">Batal</button>
										</div>
									</form>
									<script>
										$(document).ready(function () {
											$('#due_date').datepicker({
												format: 'dd-mm-yyyy',
												autoclose: true,
												todayHighlight: true
											});
										});

									</script>
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
