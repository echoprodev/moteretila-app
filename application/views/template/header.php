<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Moteretila</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Responsive bootstrap 4 admin template" name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="<?= base_url('shortcut icon" href="assets/images/logo.icon'); ?>">

    <!-- Table datatable css -->
    <link href="<?= base_url('assets/libs/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css'); ?>" />

    <link href="<?= base_url('assets/libs/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css'); ?>" />
    <link href="<?= base_url('assets/libs/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css'); ?>" />
    <link href="<?= base_url('assets/libs/datatables/select.bootstrap4.min.css" rel="stylesheet" type="text/css'); ?>" />

    <link href="<?= base_url('assets/libs/bootstrap-timepicker/bootstrap-timepicker.min.css" rel="stylesheet'); ?>">
    <link href="<?= base_url('assets/libs/bootstrap-colorpicker/bootstrap-colorpicker.min.css" rel="stylesheet" type="text/css'); ?>" />
    <link href="<?= base_url('assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css'); ?>" />
    <link href="<?= base_url('assets/libs/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet'); ?>">
    <link href="<?= base_url('assets/libs/clockpicker/bootstrap-clockpicker.min.css" rel="stylesheet" type="text/css'); ?>" />

    <!-- App css -->
    <link href="<?= base_url('assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" id="bootstrap-stylesheet'); ?>" />
    <link href="<?= base_url('assets/css/icons.min.css" rel="stylesheet" type="text/css'); ?>" />
    <link href="<?= base_url('assets/css/app.min.css" rel="stylesheet" type="text/css"  id="app-stylesheet'); ?>" />

</head>

<body>

    <!-- Begin page -->
    <div id="wrapper">


        <!-- Topbar Start -->
        <div class="navbar-custom">
            <ul class="list-unstyled topnav-menu float-right mb-0">

                <li class="dropdown notification-list">
                    <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        <img src="<?= base_url('assets/images/users/avatar-1.png" alt="user-image" class="rounded-circle'); ?>">
                        <i class="mdi mdi-chevron-down d-none d-sm-inline-block"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                        <!-- item-->
                        <a href="<?= base_url('profile/index'); ?>" class="dropdown-item notify-item">
                            <i class="mdi mdi-account-outline"></i>
                            <span>Profile</span>
                        </a>
                        <!-- item-->
                        <a href="<?= base_url('Login/logout'); ?>" id="logout" class="dropdown-item notify-item" onclick="logout()">
                            <i class="mdi mdi-logout-variant"></i>
                            <span>Logout</span>
                        </a>
                    </div>

                </li>


            </ul>

            <!-- LOGO -->
            <div class="logo-box">
                <a href="#" class="logo text-center logo-dark">
                    <span class="logo-lg">
                        <img src="<?= base_url('assets/images/logo.png" alt="logo" height=90'); ?>">
                        <!-- <span class="logo-lg-text-dark">Moteretila</span> -->
                    </span>
                </a>
            </div>

            <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
                <li>
                    <button class="button-menu-mobile waves-effect waves-light">
                        <i class="mdi mdi-menu"></i>
                    </button>
                </li>
            </ul>
        </div>
        <!-- end Topbar -->
    </div>

    <!-- Tampilkan pesan pop-up -->
    <script>
        alert("<?php echo $logout_message; ?>");
    </script>