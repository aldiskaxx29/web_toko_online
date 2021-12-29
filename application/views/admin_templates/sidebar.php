<?php  ?>
    <!-- Sidebar -->
    <ul class="navbar-nav bg-primary  sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color:#42b549 ;">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-store"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SNACKHAI</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <?php if ($this->uri->segment(2) == 'dashboard_admin'): ?>
      <li class="nav-item active">
        <?php else: ?>
      <li class="nav-item">
      <?php endif ?>
        <a class="nav-link" href="<?= base_url('admin/dashboard_admin'); ?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Charts -->
      <?php if ($this->uri->segment(2) == 'data_barang'): ?>
      <li class="nav-item active">
        <?php else: ?>
      <li class="nav-item">
      <?php endif ?>
        <a class="nav-link" href="<?= base_url('admin/data_barang'); ?>">
          <i class="fas fa-fw fa-database"></i>
          <span>Data Barang</span></a>
      </li>


      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Tables -->
      <li class="nav-item" onclick="return confirm('Yakin Ingin Keluar');">
        <a class="nav-link" href="<?= base_url('auth/logout'); ?>">
          <i class="fas fa-fw fa-sign-out-alt"></i>
          <span>Logout</span></a>
      </li>


      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->
