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
          <div class="menu-item has-sub active">
            <a href="javascript:;" class="menu-link">
              <div class="menu-icon">
                <i class="fa fa-sitemap"></i>             </div>
              <div class="menu-text">Dashboard</div>
              <div class="menu-caret"></div>
            </a>
            <div class="menu-submenu">
              <div class="menu-item active">
                <a href="index.html" class="menu-link"><div class="menu-text">Dashboard v1</div></a>
              </div>
              <div class="menu-item">
                <a href="index_v2.html" class="menu-link"><div class="menu-text">Dashboard v2</div></a>
              </div>
              <div class="menu-item">
                <a href="index_v3.html" class="menu-link"><div class="menu-text">Dashboard v3</div></a>
              </div>
            </div>
          </div>
         
        
       
       
      
          <div class="menu-item has-sub">
            <a href="javascript:;" class="menu-link">
              <div class="menu-icon">
                <i class="fa fa-cubes"></i>
              </div>
              <div class="menu-text">Version <span class="menu-label">NEW</span></div>
              <div class="menu-caret"></div>
            </a>
            <div class="menu-submenu">
              <div class="menu-item">
                <a href="https://seantheme.com/color-admin/admin/html/" class="menu-link">
                  <div class="menu-text">HTML</div>
                </a>
              </div>
              <div class="menu-item">
                <a href="https://seantheme.com/color-admin/admin/ajax/" class="menu-link">
                  <div class="menu-text">AJAX</div>
                </a>
              </div>
              <div class="menu-item">
                <a href="https://seantheme.com/color-admin/admin/angularjs/" class="menu-link">
                  <div class="menu-text">ANGULAR JS</div>
                </a>
              </div>
              <div class="menu-item">
                <a href="https://seantheme.com/color-admin/admin/angularjs19/" class="menu-link">
                  <div class="menu-text">ANGULAR JS 19</div>
                </a>
              </div>
              <div class="menu-item">
                <a href="javascript:alert('Laravel 11 Version only available in downloaded version.');" class="menu-link">
                  <div class="menu-text">LARAVEL 11</div>
                </a>
              </div>
              <div class="menu-item">
                <a href="https://seantheme.com/color-admin/admin/vue3/" class="menu-link">
                  <div class="menu-text">VUE 3 + Vite JS</div>
                </a>
              </div>
              <div class="menu-item">
                <a href="https://seantheme.com/color-admin/admin/react/" class="menu-link">
                  <div class="menu-text">REACT 19</div>
                </a>
              </div>
              <div class="menu-item">
                <a href="javascript:alert('.NET Core MVC Version only available in downloaded version.');" class="menu-link">
                  <div class="menu-text">ASP.NET <i class="fa fa-paper-plane text-theme"></i></div>
                </a>
              </div>
              <div class="menu-item">
                <a href="javascript:alert('Django Version only available in downloaded version.');" class="menu-link">
                  <div class="menu-text">DJANGO <i class="fa fa-paper-plane text-theme"></i></div>
                </a>
              </div>
              <div class="menu-item">
                <a href="https://seantheme.com/color-admin/admin/svelte/" class="menu-link">
                  <div class="menu-text">SVELTE <i class="fa fa-paper-plane text-theme"></i></div>
                </a>
              </div>
              <div class="menu-item">
                <a href="https://seantheme.com/color-admin/admin/material/" class="menu-link">
                  <div class="menu-text">MATERIAL DESIGN</div>
                </a>
              </div>
              <div class="menu-item">
                <a href="https://seantheme.com/color-admin/admin/apple/" class="menu-link">
                  <div class="menu-text">APPLE DESIGN</div>
                </a>
              </div>
              <div class="menu-item">
                <a href="https://seantheme.com/color-admin/admin/transparent/" class="menu-link">
                  <div class="menu-text">TRANSPARENT DESIGN <i class="fa fa-paper-plane text-theme"></i></div>
                </a>
              </div>
              <div class="menu-item">
                <a href="https://seantheme.com/color-admin/admin/facebook/" class="menu-link">
                  <div class="menu-text">FACEBOOK DESIGN <i class="fa fa-paper-plane text-theme"></i></div>
                </a>
              </div>
              <div class="menu-item">
                <a href="https://seantheme.com/color-admin/admin/google/" class="menu-link">
                  <div class="menu-text">GOOGLE DESIGN <i class="fa fa-paper-plane text-theme"></i></div>
                </a>
              </div>
            </div>
          </div>
          <div class="menu-item has-sub">
            <a href="javascript:;" class="menu-link">
              <div class="menu-icon">
                <i class="fa fa-medkit"></i>
              </div>
              <div class="menu-text">Helper</div>
              <div class="menu-caret"></div>
            </a>
            <div class="menu-submenu">
              <div class="menu-item">
                <a href="helper_css.html" class="menu-link">
                  <div class="menu-text">Predefined CSS Classes</div>
                </a>
              </div>
            </div>
          </div>
        
          
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