<?php
// app/Views/partials/topbar.php
?>
<div id="header" class="app-header">
  <div class="navbar-header">
    <a href="<?= base_url('/') ?>" class="navbar-brand">CORE <b>SUNSCREEN</b></a>
    <button type="button" class="navbar-toggler mobile-toggler" data-click="sidebar-toggled">
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
  </div>
  <ul class="navbar-nav ms-auto">
    <li class="nav-item dropdown navbar-user">
      <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
        <?= session('first_name') . ' ' . session('last_name') ?> (<?= session('level_name') ?>)
      </a>
      <ul class="dropdown-menu dropdown-menu-end me-1>
        <li><a class="dropdown-item" href="<?= base_url('usuario/cambiar-clave') ?>">Cambiar Contraseña</a></li>
        <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item" href="<?= base_url('logout') ?>">Cerrar sesión</a></li>
      </ul>
    </li>
  </ul>
</div>
