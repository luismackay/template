
<?php
// app/Views/welcome/index.php
?>
 <?= $this->extend('layouts/template') ?>

<?= $this->section('content') ?>
<h2 class="mt-4">Bienvenido al Sistema</h2>
<p class="lead">Hola <?= session('first_name') ?>, has iniciado sesión correctamente.</p>
<?= $this->endSection() ?>
