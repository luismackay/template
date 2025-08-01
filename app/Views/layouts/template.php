<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title><?= esc($titulo ?? 'Panel') ?></title>


  <link href="<?= base_url('assets/css/vendor.min.css') ?>" rel="stylesheet" />
  <link href="<?= base_url('assets/css/default/app.min.css') ?>" rel="stylesheet" />
    <!-- Opcional: íconos y plugins extra -->
  <link href="<?= base_url('assets/plugins/jstree/dist/themes/default/style.min.css') ?>" rel="stylesheet" />
  

</head>
<body class="pace-top app">
  <div id="page-loader" class="fade show"><span class="spinner"></span></div>

 
  <div id="page-container" class="page-sidebar-fixed page-header-fixed page-with-light-sidebar">

<!--div id="content" class="app-content"-->
    <?= view('partials/topbar') ?>
    <?= view('partials/sidebar') ?>


    <div id="content" class="content">
      <?= $this->renderSection('content') ?>
    </div>

    <a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top " data-click="scroll-top">
      <i class="fa fa-angle-up"></i>
    </a>
  </div>
  <script src="<?= base_url('assets/plugins/jquery/dist/jquery.min.js') ?>"></script>
  <script src="<?= base_url('assets/plugins/bootstrap/dist/js/bootstrap.bundle.min.js') ?>"></script>

  <script src="<?= base_url('assets/plugins/perfect-scrollbar/dist/perfect-scrollbar.min.js') ?>"></script>

  
  <script src="<?= base_url('assets/js/vendor.min.js') ?>"></script>
  <script src="<?= base_url('assets/js/app.min.js') ?>"></script>

  <script>
    document.addEventListener('DOMContentLoaded', function () {
      if (typeof App !== 'undefined' && typeof App.init === 'function') {
        App.init();
      }
    });
  </script>
</body>
</html>
