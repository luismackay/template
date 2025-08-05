<?php
// app/Views/partials/topbar.php
?>
<!-- BEGIN #header -->
<div id="header" class="app-header">
  <!-- BEGIN navbar-header -->
  <div class="navbar-header">
     <a href="<?= site_url('home') ?>" class="navbar-brand">
            <img src="<?= base_url('assets/img/logo20.png') ?>" alt="Inicio" style="width: 24px; height: 24px; margin-right: 10px;">
            <b style="font-size:120%"><?= SYSTEM_NAME ?> </b><span class="semi-bold text-success"> <?= SYSTEM_NAME2 ?></span></span></a>
                        <span class="hidden-xs"><?php //echo $this->session->userdata('nombre_empresa'); ?></span>
    <button type="button" class="navbar-mobile-toggler" data-toggle="app-sidebar-mobile">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
    </button>
  </div>
  <!-- END navbar-header -->
  <!-- BEGIN header-nav -->
      <div class="navbar-nav">
        
        <div class="navbar-item navbar-user dropdown">
          <a href="#" class="navbar-link dropdown-toggle d-flex align-items-center" data-bs-toggle="dropdown">
            <img src="<?= base_url('assets/img/user/user-13.jpg') ?>" alt="" /> 
            <span>
              <span class="d-none d-md-inline fw-bold"><?= esc(session('name')) ?></span>
              <b class="caret"></b>
            </span>
          </a>
          <div class="dropdown-menu dropdown-menu-end me-1">
             <!-- <a href="extra_profile.html" class="dropdown-item">Edit Profile</a> -->
            <!-- <a href="email_inbox.html" class="dropdown-item d-flex align-items-center"> Inbox -->
              <!-- <span class="badge bg-danger rounded-pill ms-auto pb-4px">2</span>  -->
            <!-- </a> -->
            <!-- <a href="calendar.html" class="dropdown-item">Calendar</a> -->
            <!-- <a href="extra_settings_page.html" class="dropdown-item">Settings</a> -->

            <div class="dropdown-divider"></div>
            <a href="<?=base_url('auth/logout') ?>" class="dropdown-item">Log Out</a>
          </div>
        </div>
      </div>
      <!-- END header-nav -->
    </div>
    <!-- END #header -->