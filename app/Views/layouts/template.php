<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
  <title><?= esc($titulo ?? 'Panel') ?></title>
  <!-- ================== BEGIN core-css ================== -->
  <link href="<?= base_url('assets/css/vendor.min.css') ?>" rel="stylesheet" />
  <link href="<?= base_url('assets/css/default/app.min.css') ?>" rel="stylesheet" />
  <!-- ================== END core-css ================== -->
</head>
<body style="background:#2d445a0d">
  <!-- BEGIN #loader -->
  <div id="loader" class="app-loader">
    <span class="spinner"></span>
  </div>
 <!-- END #loader -->
 <!-- BEGIN #app -->
  <div id="app" class="app app-header-fixed app-sidebar-fixed ">
    <?= view('partials/topbar') ?>
    <?= view('partials/sidebar') ?>
    <!-- BEGIN #content -->
    <div id="content" class="app-content">
      <!-- BEGIN breadcrumb -->
      <ol class="breadcrumb float-xl-end">
        <li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
        <li class="breadcrumb-item active">Dashboard</li>
      </ol>
      <!-- END breadcrumb -->
      <!-- BEGIN page-header -->
      
      <!-- END page-header -->
      <?= $this->renderSection('content') ?>
    </div>
    
    <!-- END #content -->
    <!-- BEGIN theme-panel -->
    <div class="theme-panel">
      <a href="javascript:;" data-toggle="theme-panel-expand" class="theme-collapse-btn"><i class="fa fa-cog"></i></a>
      <div class="theme-panel-content" data-scrollbar="true" data-height="100%">
        <h5>App Settings</h5>
        
        <!-- BEGIN theme-list -->
        <div class="theme-list">
          <div class="theme-list-item"><a href="javascript:;" class="theme-list-link bg-red" data-theme-class="theme-red" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Red">&nbsp;</a></div>
          <div class="theme-list-item"><a href="javascript:;" class="theme-list-link bg-pink" data-theme-class="theme-pink" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Pink">&nbsp;</a></div>
          <div class="theme-list-item"><a href="javascript:;" class="theme-list-link bg-orange" data-theme-class="theme-orange" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Orange">&nbsp;</a></div>
          <div class="theme-list-item"><a href="javascript:;" class="theme-list-link bg-yellow" data-theme-class="theme-yellow" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Yellow">&nbsp;</a></div>
          <div class="theme-list-item"><a href="javascript:;" class="theme-list-link bg-lime" data-theme-class="theme-lime" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Lime">&nbsp;</a></div>
          <div class="theme-list-item"><a href="javascript:;" class="theme-list-link bg-green" data-theme-class="theme-green" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Green">&nbsp;</a></div>
          <div class="theme-list-item active"><a href="javascript:;" class="theme-list-link bg-teal" data-theme-class="" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Default">&nbsp;</a></div>
          <div class="theme-list-item"><a href="javascript:;" class="theme-list-link bg-cyan" data-theme-class="theme-cyan" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Cyan">&nbsp;</a></div>
          <div class="theme-list-item"><a href="javascript:;" class="theme-list-link bg-blue" data-theme-class="theme-blue" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Blue">&nbsp;</a></div>
          <div class="theme-list-item"><a href="javascript:;" class="theme-list-link bg-purple" data-theme-class="theme-purple" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Purple">&nbsp;</a></div>
          <div class="theme-list-item"><a href="javascript:;" class="theme-list-link bg-indigo" data-theme-class="theme-indigo" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Indigo">&nbsp;</a></div>
          <div class="theme-list-item"><a href="javascript:;" class="theme-list-link bg-black" data-theme-class="theme-gray-600" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Black">&nbsp;</a></div>
        </div>
        <!-- END theme-list -->
        
        <div class="theme-panel-divider"></div>
        
        <div class="row mt-10px">
          <div class="col-8 control-label text-body fw-bold">
            <div>Dark Mode <span class="badge bg-primary ms-1 py-2px position-relative" style="top: -1px;">NEW</span></div>
            <div class="lh-14">
              <small class="text-body opacity-50">
                Adjust the appearance to reduce glare and give your eyes a break.
              </small>
            </div>
          </div>
          <div class="col-4 d-flex">
            <div class="form-check form-switch ms-auto mb-0">
              <input type="checkbox" class="form-check-input" name="app-theme-dark-mode" id="appThemeDarkMode" value="1" />
              <label class="form-check-label" for="appThemeDarkMode">&nbsp;</label>
            </div>
          </div>
        </div>
        
        <div class="theme-panel-divider"></div>
        
     
        
     
        
      
        
       
      
      </div>
    </div>
    <!-- END theme-panel -->
    <!-- BEGIN scroll-top-btn -->
    <a href="javascript:;" class="btn btn-icon btn-circle btn-theme btn-scroll-to-top" data-toggle="scroll-to-top"><i class="fa fa-angle-up"></i></a>
    <!-- END scroll-top-btn -->
  </div>
  <!-- END #app -->
  
  <!-- ================== BEGIN core-js ================== -->
  <script src="<?= base_url('assets/js/vendor.min.js') ?>"></script>
  <script src="<?= base_url('assets/js/app.min.js') ?>"></script>
  <!-- ================== END core-js ================== -->
  
  <!-- ================== BEGIN page-js ================== -->
  <script src="<?= base_url('assets/plugins/gritter/js/jquery.gritter.js') ?>"></script>
  <script src="<?= base_url('assets/plugins/flot/source/jquery.canvaswrapper.js') ?>"></script>
  <script src="<?= base_url('assets/plugins/flot/source/jquery.colorhelpers.js') ?>"></script>
  <script src="<?= base_url('assets/plugins/flot/source/jquery.flot.js') ?>"></script>
  <script src="<?= base_url('assets/plugins/flot/source/jquery.flot.saturated.js') ?>"></script>
  <script src="<?= base_url('assets/plugins/flot/source/jquery.flot.browser.js') ?>"></script>
  <script src="<?= base_url('assets/plugins/flot/source/jquery.flot.drawSeries.js') ?>"></script>
  <script src="<?= base_url('assets/plugins/flot/source/jquery.flot.uiConstants.js') ?>"></script>
  <script src="<?= base_url('assets/plugins/flot/source/jquery.flot.time.js') ?>"></script>
  <script src="<?= base_url('assets/plugins/flot/source/jquery.flot.resize.js') ?>"></script>
  <script src="<?= base_url('assets/plugins/flot/source/jquery.flot.pie.js') ?>"></script>
  <script src="<?= base_url('assets/plugins/flot/source/jquery.flot.crosshair.js') ?>"></script>
  <script src="<?= base_url('assets/plugins/flot/source/jquery.flot.categories.js') ?>"></script>
  <script src="<?= base_url('assets/plugins/flot/source/jquery.flot.navigate.js') ?>"></script>
  <script src="<?= base_url('assets/plugins/flot/source/jquery.flot.touchNavigate.js') ?>"></script>
  <script src="<?= base_url('assets/plugins/flot/source/jquery.flot.hover.js') ?>"></script>
  <script src="<?= base_url('assets/plugins/flot/source/jquery.flot.touch.js') ?>"></script>
  <script src="<?= base_url('assets/plugins/flot/source/jquery.flot.selection.js') ?>"></script>
  <script src="<?= base_url('assets/plugins/flot/source/jquery.flot.symbol.js') ?>"></script>
  <script src="<?= base_url('assets/plugins/flot/source/jquery.flot.legend.js') ?>"></script>
  <script src="<?= base_url('assets/plugins/jquery-sparkline/jquery.sparkline.min.js') ?>"></script>
  <script src="<?= base_url('assets/plugins/jvectormap-next/jquery-jvectormap.min.js') ?>"></script>
  <script src="<?= base_url('assets/plugins/jvectormap-content/world-mill.js') ?>"></script>
  <script src="<?= base_url('assets/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.js') ?>"></script>
  
  <!-- ================== END page-js ================== -->
</body>
</html>
