<!-- BEGIN #header -->
<div id="header" class="app-header navbar navbar-default">
  <div class="navbar-header">
    <a href="<?= site_url() ?>" class="navbar-brand">
      <img src="<?= base_url('assets/img/home3.png') ?>" alt="Inicio" style="width:24px; height:24px; margin-right:10px;">
      <b>CORE</b><span class="text-success"> SUNSCREEN</span>
    </a>
    <button class="navbar-toggler mobile-toggler" type="button" data-click="sidebar-toggled">
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
  </div>

  <!-- Único UL para breadcrumb + perfil, desplazado a la derecha -->
  <ul class="navbar-nav ms-auto align-items-center">

    <!-- Breadcrumb / Menú Principal -->
    <li class="nav-item">
      <span class="nav-link">
        Menú Principal →
        <?php foreach ($menus as $menu): ?>
          <a href="javascript:;" class="text-decoration-none"><?= esc($menu['name']) ?></a> &mdash;
        <?php endforeach ?>
        <a href="javascript:;" class="text-decoration-none"><i class="fa fa-angle-double-left"></i></a>
      </span>
    </li>

    <!-- Separador pequeño -->
    <li class="nav-item mx-2">|</li>

    <!-- Perfil de usuario -->
    <li class="nav-item dropdown navbar-user">
      <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
        <i class="fa fa-user-circle fa-lg me-1"></i>
        <?= esc(session('first_name') . ' ' . session('last_name')) ?>
        <small class="text-muted">(<?= esc(session('level_name')) ?>)</small>
      </a>
      <ul class="dropdown-menu dropdown-menu-end">
        <li><a class="dropdown-item" href="<?= site_url('usuario/cambiar-clave') ?>">Cambiar Contraseña</a></li>
        <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item text-danger" href="<?= site_url('logout') ?>">Cerrar sesión</a></li>
      </ul>
    </li>

  </ul>
</div>
<!-- END #header -->
