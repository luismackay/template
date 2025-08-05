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
   /* Asegura que el contenedor no crezca más allá de 360px */
.login-box {
  width: 360px;
  max-width: 90%;     /* para ser responsive en pantallas muy pequeñas */
  margin: 2rem auto;
  padding: 2rem;
  background: #fff;
  border-radius: 8px;
  box-shadow: 0 4px 12px rgba(0,0,0,0.1);
}

/* Centra el header */
.login-header {
  text-align: center;
  margin-bottom: 1.5rem;
}

/* Contenedor con flex para centrar el logo */
.login-logo-container {
  display: flex;
  justify-content: center;
  margin-bottom: 0.75rem;
}

/* El logo nunca ocupará más del 80% del ancho del login-box */
.login-logo {
  background: transparent;  /* por si había algún color */
  max-width: 80%;
  height: auto;
  display: block;
}

/* Título */
.login-title {
  font-size: 1.5rem;
  color: #333;
  margin: 0;
}
  </style>
</head>
<body class="d-flex align-items-center justify-content-center" style="min-height: 100vh;">
  <div class="login-container shadow">
    <?= $this->renderSection('contenido') ?>
  </div>
</body>

</html>