// Archivo: app/Views/auth/login.php
<?= $this->extend('layouts/auth') ?>

<?= $this->section('contenido') ?>
  <h3 class="text-center">Inicio de Sesión</h3>

  <?php if (session()->getFlashdata('error')): ?>
    <div class="alert alert-danger">
      <?= session('error') ?>
    </div>
  <?php endif; ?>

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
<?= $this->endSection() ?>