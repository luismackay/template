<!-- app/Views/welcome_simple.php -->
<?= $this->extend('layouts/template') ?>

<?= $this->section('content') ?>
  <div style="background: yellow; color: black; padding: 10px;">
    **PRUEBA**: si ves este bloque amarillo, entonces el espacio de contenido existe y solo el contenido es el que falta.
  </div>

  <h1>Bienvenido al Sistema</h1>
  <p>Hola <?= esc(session('first_name')) ?>, has iniciado sesión correctamente.</p>
<?= $this->endSection() ?>