<?php

// Get the document root
$documentRoot = $_SERVER['DOCUMENT_ROOT'];

// Define the base URL
define('BASE_URL', 'http://'.$_SERVER['HTTP_HOST'].'/cac_integrador_23586/');

?>


<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Conf Bs As</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
  <script src="https://kit.fontawesome.com/cbbd236219.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="./css/styles.css" />
</head>

<body>
  <header>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark" style="background-color: #454647">
      <div class="container">
        <a class="navbar-brand" href="<?php echo BASE_URL.'index.php'; ?> ">
          <img src="<?php echo BASE_URL.'/img/codoacodo.png'; ?>" alt="Logo Codo a Codo 4.0" width="100" height style="vertical-align: middle" />
          Conf Bs As
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse flex-row-reverse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="#">La Conferencia</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#oradores">Los Oradores</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#lugarFecha">El Lugar y La Fecha</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#formulario">Conviértete en Orador</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo BASE_URL.'pages/comprar-tickets.html'; ?>">Comprar Tickets</a>
            </li>


<?php
session_start();

// Verificar si el usuario ha iniciado sesión
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    // Si el usuario ha iniciado sesión, mostrar el enlace de "Salir"
    echo '<li class="nav-item"><a class="nav-link" href="'.BASE_URL.'includes/login/logout.php">Salir</a></li>';
} else {
    // Si el usuario no ha iniciado sesión, mostrar el enlace de "Ingresar"
    echo '<li class="nav-item"><a class="nav-link" href="'.BASE_URL.'includes/login/login.php">Ingresar</a></li>';
}
?>


          </ul>
        </div>
      </div>
    </nav>
  </header>