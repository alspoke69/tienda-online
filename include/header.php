<?php include("db/localhost.php");

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda tenis</title>
    <link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap-theme.css">
    <link rel="stylesheet" href="bootstrap-4.3.1-dist/css/propio.css">
</head>
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Tienda Zapatos</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Inicio <span class="sr-only">(current)</span></a>
            </li>
            <?php if(isset($_SESSION['login'])) { ?>
              <li class="nav-item">
              <a class="nav-link" href="productos.php">Agregar producto</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="productos.php">Carrito</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="cerrar_sesion.php">Cerrar sesión</a>
            </li>
              <?php  } else { ?>
            <li class="nav-item">
              <a class="nav-link" href="registro.php">Registro</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.php">Iniciar sesión</a>
            </li>
            <?php } ?>
          </ul>
        </div>
      </nav>
</header>