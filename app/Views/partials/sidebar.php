<?php
    $uri        = service('uri')->getPath();       // p.ej. "users/edit"
    $firstShown = false;
?>

<!-- BEGIN #sidebar -->
    <div id="sidebar" class="app-sidebar" data-bs-theme="dark">
      <!-- BEGIN scrollbar -->
      <div class="app-sidebar-content" data-scrollbar="true" data-height="100%">
        <!-- BEGIN menu -->
        <div class="menu">
          <div class="menu-profile">
              <div class="menu-profile-image">
                <img src="<?= base_url('assets/img/user/user-13.jpg') ?>" alt="" />
              </div>
              <div class="menu-profile-info">
                <div class="d-flex align-items-center">
                  <div class="flex-grow-1">
                   <?= esc(session('first_name').' '.session('last_name')) ?>
                  </div>
               
                </div>
                <small><?= esc(session('level_name')) ?>r</small>
              </div>
            
          </div>
        
          <div class="menu-header">Menú Principal</div>
         <?php foreach ($menus as $entry):
              $menu = $entry['menu'];   // array con campos de menú
              $apps = $entry['apps'];   // array con apps

              // ¿Alguna app coincide con la URI actual?
              $hasActive = false;
              foreach ($apps as $a) {
                  if (trim($uri, '/') === trim($a['function'], '/')) {
                      $hasActive = true;
                      break;
                  }
              }

              // Determino si este grupo va “activo”
              $isActiveGroup = $hasActive || (!$firstShown && !$hasActive);
              if (!$firstShown && !$hasActive) {
                  $firstShown = true;
              }
          ?>
            <div class="menu-item has-sub <?= $isActiveGroup ? 'active' : '' ?>">
              <a href="javascript:;" class="menu-link">
                <div class="menu-icon">
                  <i class="fa <?= esc($menu['img']) ?>"></i>
                </div>
                <div class="menu-text"><?= esc($menu['name']) ?></div>
                <div class="menu-caret"></div>
              </a>
              <div class="menu-submenu" style="<?= $isActiveGroup ? 'display:block;' : '' ?>">
                <?php foreach ($apps as $a): ?>
                  <div class="menu-item <?= trim($uri, '/') === trim($a['function'], '/') ? 'active' : '' ?>">
                    <a href="<?= base_url($a['function']) ?>" class="menu-link">
                      <div class="menu-text"><?= esc($a['name']) ?></div>
                    </a>
                  </div>
                <?php endforeach; ?>
              </div>
            </div>
          <?php endforeach; ?>
         
        
          
          <!-- BEGIN minify-button -->
          <div class="menu-item d-flex">
            <a href="javascript:;" class="app-sidebar-minify-btn ms-auto d-flex align-items-center text-decoration-none" data-toggle="app-sidebar-minify"><i class="fa fa-angle-double-left"></i></a>
          </div>
          <!-- END minify-button -->
        </div>
        <!-- END menu -->
      </div>
      <!-- END scrollbar -->
    </div>
    <div class="app-sidebar-bg" data-bs-theme="dark"></div>
    <div class="app-sidebar-mobile-backdrop"><a href="#" data-dismiss="app-sidebar-mobile" class="stretched-link"></a></div>
    <!-- END #sidebar -->