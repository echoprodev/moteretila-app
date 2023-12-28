<!-- application/views/excel_import_form.php -->

<h2>Form Import Excel</h2>
<?php echo form_open_multipart('excelimport/import'); ?>
<input type="file" name="excel_file" />
<input type="submit" value="Import" />
<?php echo form_close(); ?>
