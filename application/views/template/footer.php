<!-- Footer Start -->
<footer class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                2023 &copy; Design By <a href="#">Alya Afridha Rahmi</a>
            </div>
        </div>
    </div>
</footer>
<!-- end Footer -->

</div>

<!-- Vendor js -->
<script src="<?= base_url('assets/js/vendor.min.js'); ?>"></script>

<!--Morris Chart-->
<script src="<?= base_url('assets/libs/morris-js/morris.min.js'); ?>"></script>
<script src="<?= base_url('assets/libs/raphael/raphael.min.js'); ?>"></script>

<!-- Dashboard init js-->
<script src="<?= base_url('assets/js/pages/dashboard.init.js'); ?>"></script>

<!-- Datatable plugin js -->
<script src="<?= base_url('assets/libs/datatables/jquery.dataTables.min.js'); ?>"></script>
<script src="<?= base_url('assets/libs/datatables/dataTables.bootstrap4.min.js'); ?>"></script>

<script src="<?= base_url('assets/libs/datatables/dataTables.responsive.min.js'); ?>"></script>
<script src="<?= base_url('assets/libs/datatables/responsive.bootstrap4.min.js'); ?>"></script>

<script src="<?= base_url('assets/libs/datatables/dataTables.buttons.min.js'); ?>"></script>
<script src="<?= base_url('assets/libs/datatables/buttons.bootstrap4.min.js'); ?>"></script>

<script src="<?= base_url('assets/libs/jszip/jszip.min.js'); ?>"></script>
<script src="<?= base_url('assets/libs/pdfmake/pdfmake.min.js'); ?>"></script>
<script src="<?= base_url('assets/libs/pdfmake/vfs_fonts.js'); ?>"></script>

<script src="<?= base_url('assets/libs/datatables/buttons.html5.min.js'); ?>"></script>
<script src="<?= base_url('assets/libs/datatables/buttons.print.min.js'); ?>"></script>

<script src="<?= base_url('assets/libs/datatables/dataTables.keyTable.min.js'); ?>"></script>
<script src="<?= base_url('assets/libs/datatables/dataTables.select.min.js'); ?>"></script>

<!-- plugins -->
<script src="<?= base_url('assets/libs/moment/moment.min.js'); ?>"></script>
<script src="<?= base_url('assets/libs/bootstrap-timepicker/bootstrap-timepicker.min.js'); ?>"></script>
<script src="<?= base_url('assets/libs/bootstrap-colorpicker/bootstrap-colorpicker.min.js'); ?>"></script>
<script src="<?= base_url('assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.js'); ?>"></script>
<script src="<?= base_url('assets/libs/bootstrap-daterangepicker/daterangepicker.js'); ?>"></script>
<script src="<?= base_url('assets/libs/clockpicker/bootstrap-clockpicker.min.js'); ?>"></script>

<!-- Load Bootstrap CSS and JS -->
<link rel="stylesheet" href="<?= base_url('https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'); ?>">
<script src="<?= base_url('https://code.jquery.com/jquery-3.3.1.slim.min.js'); ?>"></script>
<script src="<?= base_url('https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js'); ?>"></script>

<<!-- Tambahkan tag script untuk jQuery dan Bootstrap-datepicker -->
<script src=<?= base_url('"https://code.jquery.com/jquery-3.6.4.min.js'); ?>"></script>
<link rel="stylesheet" href="<?= base_url('https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css'); ?>">
<script src="<?= base_url('https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js'); ?>"></script>



<!-- Datatables init -->
<script src="<?= base_url('assets/js/pages/datatables.init.js'); ?>"></script>

<!-- App js -->
<script src="<?= base_url('assets/js/app.min.js'); ?>"></script>

<script>
    $(document).ready(function() {
        $('#table1').DataTable()
    })
</script>

<script>
    $(document).ready(function(){
        // Inisialisasi datepicker
        $('#due_date').datepicker({
            format: 'dd-mm-yyyy', // Mengatur format tanggal
            autoclose: true
        });
    });
</script>

<script type="text/javascript">
		$(document).ready(function() {
			$("login").submit(function(e) {
				e.preventDefault();
				var data = new FormData(this);
				$.ajax({
					type: "POST",
					url: "login/login.php",
					data: data,
					processData: false,
					contentType: false,
					success: function(result) {
						var response = JSON.parse(result);
						if(response.status == "1") {
							customSweetAlert('Pemberitahuan', response.message, 'success', 'success', 'beranda');
						}else {
							customSweetAlert('Peringatan', response.message, 'error', 'danger', null);
						}
					}
				});
				return false;
			});
		});
	</script>

<script>
    $(document).on('click', '#logout', function(e) {
        e.preventDefault();

        swal({
            title: 'Peringatan',
            text: "Apakah Anda yakin ingin keluar dari aplikasi??",
            type: 'warning',
            icon: 'warning',
            buttons: {
                cancel: {
                    visible: true,
                    text: 'Tidak!',
                    className: 'btn btn-danger btn-sm btn-rounded'
                },
                confirm: {
                    text: 'Ya, Keluar!',
                    className: 'btn btn-success btn-sm btn-rounded'
                }
            }
        }).then((willDelete) => {
            if (willDelete) {
                // Gantilah dengan pemanggilan fungsi logout dari CodeIgniter
                window.location.href = "http://localhost/moteretila-app/Login/logout";
            } else {
                customSweetAlert('Pemberitahuan', 'Tidak jadi keluar', 'success', 'success', null);
            }
        });
    });
</script>




</body>

</html>