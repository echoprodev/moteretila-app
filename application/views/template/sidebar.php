    <!-- ========== Left Sidebar Start ========== -->
    <div class="left-side-menu">
        <div class="slimscroll-menu">
            <!--- Sidemenu -->
            <div id="sidebar-menu">
                <ul class="metismenu" id="side-menu">
                    <li>
                        <a href="<?= base_url('dashboard'); ?>">
                            <i class="mdi mdi-view-dashboard"></i>
                            <span> Dashboard </span>
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('tindak_lanjut'); ?>">
                            <i class="mdi mdi-clipboard-outline"></i>
                            <span> Tindak Lanjut </span>
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('laporan_tindak_lanjut'); ?>">
                            <i class="mdi mdi-file-outline"></i>
                            <span> Laporan Tindak Lanjut </span>
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('users'); ?>">
                            <i class="icon-people"></i>
                            <span> Users </span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript: void(0);">
                            <i class="mdi mdi-layers-outline"></i>
                            <span> Data Master </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="<?= base_url('unit'); ?>">Unit</a></li>
                            <li><a href="<?= base_url('pic'); ?>">PIC</a></li>
                            <li><a href="<?= base_url('auditor'); ?>">Auditor</a></li>
                            <li><a href="<?= base_url('ketua_tim'); ?>">Ketua Tim</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- End Sidebar -->
            <div class="clearfix"></div>
        </div>
        <!-- Sidebar -left -->
    </div>
    <!-- Left Sidebar End -->
