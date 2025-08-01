<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= esc($titulo ?? 'Login') ?></title>
  <link href="<?= base_url('assets/plugins/bootstrap/dist/css/bootstrap.min.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/plugins/jstree/dist/themes/default/style.min.css') ?>" rel="stylesheet">
  <style>
    body {
      background: url('<?= base_url('assets/img/login-bg/fondo11.png') ?>') no-repeat center center fixed;
      background-size: cover;
    }
    .login-container {
  width: 100%;
  max-width: 400px;
  padding: 30px;
  background: rgba(255, 255, 255, 0.95);
  border-radius: 12px;
}

  </style>
</head>
<body class="d-flex align-items-center justify-content-center" style="min-height: 100vh;">
  <div class="login-container shadow">
    <?= $this->renderSection('contenido') ?>
  </div>
</body>

</html>