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
        
        <!-- BEGIN theme-switch -->
        <div class="row mt-10px align-items-center">
          <div class="col-8 control-label text-body fw-bold">Header Fixed</div>
          <div class="col-4 d-flex">
            <div class="form-check form-switch ms-auto mb-0">
              <input type="checkbox" class="form-check-input" name="app-header-fixed" id="appHeaderFixed" value="1" checked />
              <label class="form-check-label" for="appHeaderFixed">&nbsp;</label>
            </div>
          </div>
        </div>
        <div class="row mt-10px align-items-center">
          <div class="col-8 control-label text-body fw-bold">Header Inverse</div>
          <div class="col-4 d-flex">
            <div class="form-check form-switch ms-auto mb-0">
              <input type="checkbox" class="form-check-input" name="app-header-inverse" id="appHeaderInverse" value="1" />
              <label class="form-check-label" for="appHeaderInverse">&nbsp;</label>
            </div>
          </div>
        </div>
        <div class="row mt-10px align-items-center">
          <div class="col-8 control-label text-body fw-bold">Sidebar Fixed</div>
          <div class="col-4 d-flex">
            <div class="form-check form-switch ms-auto mb-0">
              <input type="checkbox" class="form-check-input" name="app-sidebar-fixed" id="appSidebarFixed" value="1" checked />
              <label class="form-check-label" for="appSidebarFixed">&nbsp;</label>
            </div>
          </div>
        </div>
        <div class="row mt-10px align-items-center">
          <div class="col-8 control-label text-body fw-bold">Sidebar Grid</div>
          <div class="col-4 d-flex">
            <div class="form-check form-switch ms-auto mb-0">
              <input type="checkbox" class="form-check-input" name="app-sidebar-grid" id="appSidebarGrid" value="1" />
              <label class="form-check-label" for="appSidebarGrid">&nbsp;</label>
            </div>
          </div>
        </div>
        <div class="row mt-10px align-items-center">
          <div class="col-8 control-label text-body fw-bold">Gradient Enabled</div>
          <div class="col-4 d-flex">
            <div class="form-check form-switch ms-auto mb-0">
              <input type="checkbox" class="form-check-input" name="app-gradient-enabled" id="appGradientEnabled" value="1" />
              <label class="form-check-label" for="appGradientEnabled">&nbsp;</label>
            </div>
          </div>
        </div>
        <!-- END theme-switch -->
        
        <div class="theme-panel-divider"></div>
        
        <h5>Admin Design (6)</h5>
        <!-- BEGIN theme-version -->
        <div class="theme-version">
          <div class="theme-version-item">
            <a href="https://seantheme.com/color-admin/admin/html/" class="theme-version-link active">
              <span style="background-image: url(<?= base_url('assets/img/theme/default.jpg') ?>);" class="theme-version-cover"></span>
            </a>
          </div>
          <div class="theme-version-item">
            <a href="https://seantheme.com/color-admin/admin/transparent/" class="theme-version-link">
              <span style="background-image: url(<?= base_url('assets/img/theme/transparent.jpg') ?>);" class="theme-version-cover"></span>
            </a>
          </div>
          <div class="theme-version-item">
            <a href="https://seantheme.com/color-admin/admin/apple/" class="theme-version-link">
              <span style="background-image: url(<?= base_url('assets/img/theme/apple.jpg') ?>);" class="theme-version-cover"></span>
            </a>
          </div>
          <div class="theme-version-item">
            <a href="https://seantheme.com/color-admin/admin/material/" class="theme-version-link">
              <span style="background-image: url(<?= base_url('assets/img/theme/material.jpg') ?>);" class="theme-version-cover"></span>
            </a>
          </div>
          <div class="theme-version-item">
            <a href="https://seantheme.com/color-admin/admin/facebook/" class="theme-version-link">
              <span style="background-image: url(<?= base_url('assets/img/theme/facebook.jpg') ?>);" class="theme-version-cover"></span>
            </a>
          </div>
          <div class="theme-version-item">
            <a href="https://seantheme.com/color-admin/admin/google/" class="theme-version-link">
              <span style="background-image: url(<?= base_url('assets/img/theme/google.jpg') ?>);" class="theme-version-cover"></span>
            </a>
          </div>
        </div>
        <!-- END theme-version -->
        
        <div class="theme-panel-divider"></div>
        
        <h5>Language Version (9)</h5>
        <!-- BEGIN theme-version -->
        <div class="theme-version">
          <div class="theme-version-item">
            <a href="https://seantheme.com/color-admin/admin/html/" class="theme-version-link active">
              <span style="background-image: url(<?= base_url('assets/img/version/html.jpg') ?>);" class="theme-version-cover"></span>
            </a>
          </div>
          <div class="theme-version-item">
            <a href="https://seantheme.com/color-admin/admin/ajax/" class="theme-version-link">
              <span style="background-image: url(<?= base_url('assets/img/version/ajax.jpg') ?>);" class="theme-version-cover"></span>
            </a>
          </div>
          <div class="theme-version-item">
            <a href="https://seantheme.com/color-admin/admin/angularjs/" class="theme-version-link">
              <span style="background-image: url(<?= base_url('assets/img/version/angular1x.jpg') ?>);" class="theme-version-cover"></span>
            </a>
          </div>
          <div class="theme-version-item">
            <a href="https://seantheme.com/color-admin/admin/angularjs19/" class="theme-version-link">
              <span style="background-image: url(<?= base_url('assets/img/version/angular20x.jpg') ?>);" class="theme-version-cover"></span>
            </a>
          </div>
          <div class="theme-version-item">
            <a href="https://seantheme.com/color-admin/admin/svelte/" class="theme-version-link">
              <span style="background-image: url(<?= base_url('assets/img/version/svelte.jpg') ?>);" class="theme-version-cover"></span>
            </a>
          </div>
          <div class="theme-version-item">
            <a href="javascript:alert('Laravel 11 Version only available in downloaded version.');" class="theme-version-link">
              <span style="background-image: url(<?= base_url('assets/img/version/laravel.jpg') ?>);" class="theme-version-cover"></span>
            </a>
          </div>
          <div class="theme-version-item">
            <a href="javascript:alert('Django Version only available in downloaded version.');" class="theme-version-link">
              <span style="background-image: url(<?= base_url('assets/img/version/django.jpg') ?>);" class="theme-version-cover"></span>
            </a>
          </div>
          <div class="theme-version-item">
            <a href="https://seantheme.com/color-admin/admin/vue3/" class="theme-version-link">
              <span style="background-image: url(<?= base_url('assets/img/version/vuejs.jpg') ?>);" class="theme-version-cover"></span>
            </a>
          </div>
          <div class="theme-version-item">
            <a href="https://seantheme.com/color-admin/admin/react/" class="theme-version-link">
              <span style="background-image: url(<?= base_url('assets/img/version/reactjs.jpg') ?>);" class="theme-version-cover"></span>
            </a>
          </div>
          <div class="theme-version-item">
            <a href="javascript:alert('.NET Core MVC Version only available in downloaded version.');" class="theme-version-link">
              <span style="background-image: url(<?= base_url('assets/img/version/dotnet.jpg') ?>);" class="theme-version-cover"></span>
            </a>
          </div>
          <div class="theme-version-item">
            <a href="https://seantheme.com/color-admin/admin/nextjs/" class="theme-version-link">
              <span style="background-image: url(<?= base_url('assets/img/version/nextjs.jpg') ?>);" class="theme-version-cover"></span>
            </a>
          </div>
        </div>
        <!-- END theme-version -->
        
        <div class="theme-panel-divider"></div>
        
        <h5>Frontend Design (5)</h5>
        <!-- BEGIN theme-version -->
        <div class="theme-version">
          <div class="theme-version-item">
            <a href="https://seantheme.com/color-admin/frontend/one-page-parallax/" class="theme-version-link">
              <span style="background-image: url(../assets/img/theme/one-page-parallax.jpg') ?>);" class="theme-version-cover"></span>
            </a>
          </div>
          <div class="theme-version-item">
            <a href="https://seantheme.com/color-admin/frontend/e-commerce/" class="theme-version-link">
              <span style="background-image: url(<?= base_url('assets/img/theme/e-commerce.jpg') ?>);" class="theme-version-cover"></span>
            </a>
          </div>
          <div class="theme-version-item">
            <a href="https://seantheme.com/color-admin/frontend/blog/" class="theme-version-link">
              <span style="background-image: url(<?= base_url('assets/img/theme/blog.jpg') ?>);" class="theme-version-cover"></span>
            </a>
          </div>
          <div class="theme-version-item">
            <a href="https://seantheme.com/color-admin/frontend/forum/" class="theme-version-link">
              <span style="background-image: url(<?= base_url('assets/img/theme/forum.jpg') ?>);" class="theme-version-cover"></span>
            </a>
          </div>
          <div class="theme-version-item">
            <a href="https://seantheme.com/color-admin/frontend/corporate/" class="theme-version-link">
              <span style="background-image: url(<?= base_url('assets/img/theme/corporate.jpg') ?>);" class="theme-version-cover"></span>
            </a>
          </div>
        </div>
        <!-- END theme-version -->
        
        <div class="theme-panel-divider"></div>
        
        <a href="https://seantheme.com/color-admin/documentation/" class="btn btn-dark d-block w-100 rounded-pill mb-10px" target="_blank"><b>Documentation</b></a>
        <a href="javascript:;" class="btn btn-default d-block w-100 rounded-pill" data-toggle="reset-local-storage"><b>Reset Local Storage</b></a>
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
