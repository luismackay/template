<?php // app/Views/layouts/template.php ?>
<?php
use App\Models\RoleModel;
use App\Models\AppModel;
use App\Models\MenuModel;

$session   = session();
$idlevel   = $session->get('idlevel');

$roleModel = new RoleModel();
$appModel  = new AppModel();
$menuModel = new MenuModel();

$roleApps = $roleModel->getAllowedAppIds($idlevel);
$appIds   = array_map(fn($r) => (int)$r['idapp'], $roleApps);
$apps     = $appModel->getAppsByIds($appIds);

$menus     = $menuModel->where('valid',1)->orderBy('orden')->findAll();
$appsByMenu = [];
foreach ($apps as $app) {
    $appsByMenu[$app['idmenu']][] = $app;
}
?>


<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <title><?= esc($titulo ?? 'Casino App') ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- CSS de Color Admin -->
  <link href="<?= base_url('assets/css/vendor.min.css') ?>" rel="stylesheet" />
  <link href="<?= base_url('assets/css/default/app.min.css') ?>" rel="stylesheet" />
  <link href="<?= base_url('assets/plugins/jstree/dist/themes/default/style.min.css') ?>" rel="stylesheet" />
</head>
<body class="pace-top app">

  <!-- BEGIN #page-container -->
  <div id="page-container" class="fade page-sidebar-fixed page-header-fixed page-with-light-sidebar">
  
    <!-- BEGIN #header -->
    <div id="header" class="header navbar-default">
      <div class="navbar-header">
        <a href="<?= site_url('/') ?>" class="navbar-brand">
          <img src="<?= base_url('assets/img/home3.png') ?>" alt="Inicio" style="width:24px; height:24px; margin-right:10px;">
          <b style="font-size:120%">CORE</b><span class="semi-bold text-success"> SUNSCREEN</span>
        </a>
        <button type="button" class="navbar-toggle" data-click="sidebar-toggled">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>
      <ul class="navbar-nav navbar-right">
        <li class="dropdown navbar-user">
          <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown">
            <i class="fa fa-user fa-lg"></i>
            <span class="d-none d-md-inline">
              <?= esc(session('first_name') . ' ' . session('last_name')) ?> (<?= esc(session('level_name')) ?>)
            </span>
            <b class="caret"></b>
          </a>
          <div class="dropdown-menu dropdown-menu-end">
            <a href="<?= site_url('usuario/cambiar-clave') ?>" class="dropdown-item">Cambio de Clave</a>
            <div class="dropdown-divider"></div>
            <a href="<?= site_url('logout') ?>" class="dropdown-item text-danger">Salir</a>
          </div>
        </li>
      </ul>
    </div>
    <!-- END #header -->
  
    <!-- BEGIN #sidebar -->
    <div id="sidebar" class="sidebar" data-disable-slide-animation="true">
      <div class="app-sidebar-content" data-scrollbar="true" data-height="100%">
        <div class="menu">
  
          <!-- perfil -->
          <div class="menu-profile">
            <a href="javascript:;" class="menu-profile-link">
              <div class="menu-profile-text">
                <div class="h6 mb-0 text-white">
                  <?= esc(session('first_name') . ' ' . session('last_name')) ?>
                </div>
                <small class="text-muted"><?= esc(session('level_name')) ?></small>
              </div>
            </a>
          </div>
  
          <div class="menu-header">Menú Principal</div>
  
          <!-- dinámico desde modelos -->
          <?php foreach ($menus as $menu): ?>
            <?php if (! empty($appsByMenu[$menu['idmenu']])): ?>
              <div class="menu-item has-sub">
                <a href="javascript:;" class="menu-link">
                  <span class="menu-icon"><i class="fa <?= esc($menu['img']) ?>"></i></span>
                  <span class="menu-text"><?= esc($menu['name']) ?></span>
                  <b class="caret pull-right"></b>
                </a>
                <div class="sub-menu">
                  <?php foreach ($appsByMenu[$menu['idmenu']] as $app): ?>
                    <?php if ($app['visible']): ?>
                      <div class="menu-item">
                        <a href="<?= site_url($app['function']) ?>" class="menu-link">
                          <span class="menu-icon"><i class="fa <?= esc($app['img']) ?>"></i></span>
                          <span class="menu-text"><?= esc($app['name']) ?></span>
                        </a>
                      </div>
                    <?php endif ?>
                  <?php endforeach ?>
                </div>
              </div>
            <?php endif ?>
          <?php endforeach ?>
  
          <!-- minify -->
          <div class="menu-item d-flex">
            <a href="javascript:;" class="app-sidebar-minify-btn ms-auto" data-click="sidebar-minify">
              <i class="fa fa-angle-double-left"></i>
            </a>
          </div>
  
        </div>
      </div>
      <div class="app-sidebar-bg"></div>
    </div>
    <!-- END #sidebar -->
  
    <!-- BEGIN #content -->
    <div id="content" class="content">
  
      <!-- breadcrumb -->
      <ol class="breadcrumb pull-right">
        <li class="active"><?= esc($content_menu['menu'] ?? '') ?></li>
      </ol>
  
      <!-- page-header -->
      <h1 class="page-header">
        <?= esc($content_menu['title'] ?? '') ?>
        <small><?= esc($content_menu['subtitle'] ?? '') ?></small>
      </h1>
  
      <!-- sección principal -->
      <?= $this->renderSection('content') ?>
  
    </div>
    <!-- END #content -->
  
    <!-- BEGIN #footer -->
    <?php if (! isset($footer)): ?>
      <div id="footer" class="footer">
        &copy; <?= date('Y') ?> TOP ROLLERS. - Todos los derechos reservados
      </div>
    <?php endif ?>
    <!-- END #footer -->
  
    <!-- scroll to top btn -->
    <a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top">
      <i class="fa fa-angle-up"></i>
    </a>
  
  </div>
  <!-- END #page-container -->
  
  <!-- JS de Color Admin -->
  <script src="<?= base_url('assets/js/vendor.min.js') ?>"></script>
  <script src="<?= base_url('assets/js/app.min.js') ?>"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      if (typeof App !== 'undefined' && typeof App.init === 'function') {
        App.init();
      }
    });
  </script>
</body>
</html>
