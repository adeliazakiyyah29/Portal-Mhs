
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon">
                    <i class="fas fa-university"></i>
                </div>
                <div class="sidebar-brand-text mx-3">SISTEM AKADEMIK</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="<?= base_url('portal/') ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Nav Item - KRS -->
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo base_url('krs/') ?>">
                    <i class="far fa-edit"></i>
                    <span>KRS</span></a>
            </li>

            <!-- Nav Item - KHS -->
            <li class="nav-item active">
                <a class="nav-link" href="<?= base_url('khs/') ?>">
                    <i class="fas fa-fw fa-file-alt"></i>
                    <span>KHS</span></a>
            </li>

            <!-- Nav Item - TRANSKIP -->
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo base_url('transkip/') ?>">
                    <i class="fas fa-print"></i>
                    <span>TRANSKIP</span></a>
            </li>

             <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>
        <!-- End of Sidebar -->