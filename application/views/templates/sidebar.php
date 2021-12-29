<?php  ?>
    <!-- Sidebar style="background-color: #42b549;" -->
    <ul class="navbar-nav sidebar bg-primary sidebar-dark accordion" id="accordionSidebar" >

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
        <div class="sidebar-brand-icon rotate-n-15">
          <!-- <i class="fas fa-store"></i> -->
          <img src="<?= base_url('assets/img/logo.jpeg') ?>" width="50" style="border-radius: 50%;">
        </div>
        <div class="sidebar-brand-text mx-1">Putra Promotion</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <?php if ($this->uri->segment(1) == 'dashboard'): ?>
        <li class="nav-item active">
      <?php else: ?>  
        <li class="nav-item">
      <?php endif ?>
        <a class="nav-link" href="<?= base_url('dashboard') ?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        KATEGORI
      </div>

      <!-- Nav Item - Charts -->
      <?php if ($this->uri->segment(2) == 'makanan'): ?>
        <li class="nav-item active">
      <?php else: ?>  
        <li class="nav-item">
      <?php endif ?>
        <a class="nav-link" href="<?= base_url('kategori/makanan'); ?>">
          <i class="fas fa-drumstick-bite"></i>
          <span>Sepanduk</span></a>
      </li>

      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Utilities Collapse Menu -->
      <!-- <?php if ($this->uri->segment(2) == 'pakaian_pria'): ?>
        <li class="nav-item active">
      <?php else: ?>  
        <li class="nav-item">
      <?php endif ?>
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-tshirt"></i>
          <span>Pakaian</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Pakaian / Baju</h6>
            <a class="collapse-item" href="<?= base_url('kategori/pakaian_pria') ?>">Pakian Pria</a>
            <a class="collapse-item" href="<?= base_url('kategori/pakaian_wanita') ?>">Pakaina Wanita</a>
            <a class="collapse-item" href="<?= base_url('kategori/pakaian_anak_anak') ?>">Pakaian Anak-Anak</a>
            <a class="collapse-item" href="">Celana</a>
          </div>
        </div>
      </li>


      <hr class="sidebar-divider my-0"> -->

      <!-- Nav Item - Tables -->
      <?php if ($this->uri->segment(2) == 'minuman'): ?>
        <li class="nav-item active">
      <?php else: ?>  
        <li class="nav-item">
      <?php endif ?>
        <a class="nav-link" href="<?= base_url('kategori/minuman') ?>">
          <i class="fas fa-coffee" aria-hidden="true"></i>
          <span>Baliho</span></a>
      </li>

       <hr class="sidebar-divider my-0">

       <?php if ($this->uri->segment(2) == 'spesial'): ?>
        <li class="nav-item active">
      <?php else: ?>  
        <li class="nav-item">
      <?php endif ?>
        <a class="nav-link" href="<?= base_url('kategori/spesial') ?>">
          <i class="fa fa-gift" aria-hidden="true"></i>
          <span>Mesh Banner</span></a>
      </li>

       <hr class="sidebar-divider my-0">

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('auth/logout') ?>" onclick="return confirm('Yakin Mau Logout');">
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
