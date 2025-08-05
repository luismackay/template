// Archivo: app/Views/auth/login.php
<?= $this->extend('layouts/auth') ?>


<?= $this->section('contenido') ?>
<div class="login-box">
  <!-- aquí va el logo -->
  <div class="login-header" style="text-align: center; margin-bottom: 1rem;">
     <div class="login-logo-container">
      <img 
        src="<?= base_url('assets/img/logo11.png') ?>" 
        alt="Logo" 
        class="login-logo"
      >
    </div>
   
    <h2>Inicio de Sesión</h2>
    <?php if (session()->getFlashdata('error')): ?>
    <div class="alert alert-danger">
      <?= session('error') ?>
    </div>
  <?php endif; ?>
    </div>

  <form action="<?= site_url('login') ?>" method="post">
    <?= csrf_field() ?>
    <div class="mb-3">
      <label for="identity" class="form-label">Usuario</label>
      <input type="text" name="identity" class="form-control" required>
    </div>
    <div class="mb-3">
      <label for="password" class="form-label">Contraseña</label>
      <input type="password" name="password" class="form-control" required>
    </div>
    <div class="mb-3 form-check">
      <input type="checkbox" name="remember" class="form-check-input">
      <label class="form-check-label">Recordarme</label>
    </div>
    <button type="submit" class="btn btn-primary w-100">Ingresar</button>
  </form>
  </div>
  <!-- formulario -->
</div>

  

  
<?= $this->endSection() ?>