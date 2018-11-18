<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

    <title>Autoparts</title>
  
  </head>

  <body>
  <!-- Header -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
    <img src="../images/logoweb.jpg" width="20%" hei>
      <a class="navbar-brand" href="http://localhost/project/">
          <?=APP_NAME?>
      </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <?php if (!isset($_SESSION['userdata']) ): ?>
      <li class="nav-item">
          <a class="nav-link" href="<?=APP_URL?>login">Iniciar Sesión<span class="sr-only"></span></a>
      </li>
        <li class="nav-item">
          <a class="nav-link link-important" href="<?=APP_URL?>register">Crear Cuenta</a>
        </li>
      <?php else:?>
          <li class="nav-item active">
            <a class="nav-link" href="<?=APP_URL?>login"><?=$_SESSION["userdata"]["username"]?><span class="sr-only"></span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link link important" href="<?=APP_URL?>logout">Cerrar Sesión</a>
          </li>
      <?php endif; ?>
      </ul>
    </div>
  </div>
</nav>
<!-- End Header -->
