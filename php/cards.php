<!DOCTYPE html>
<html>

<?php
session_start();
error_reporting(0);

// Verificar si el usuario ha iniciado sesión
if (!isset($_SESSION['usuario'])) {
    // Si no ha iniciado sesión, redirigirlo a la página de inicio de sesión
    header("Location: /Proyecto-master/Proyecto-master/login.html");
    exit;
}

// Obtener la posición del usuario desde la sesión
$posicion = $_SESSION['Posicion'];

// Verificar si el usuario tiene la posición de "Usuario"
// Si es así, redirigirlo a la página "formularioAlumno.php"
if ($posicion == 'Usuario') {
    header("Location: /Proyecto-master/Proyecto-master/php/formularioAlumno.php");
    exit;
}
?>

<head>
  <title>Inicio</title>
  <meta charset="UTF-8">
  <!-- CSS only -->
  <link rel="stylesheet" type="text/css" href="/Proyecto-master/Proyecto-master/css/cards.css">
  <link rel="shortcut icon" href="/Proyecto-master/Proyecto-master/favicon/favicon-32x32.png">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Trirong">
  <script src="/Proyecto-master/Proyecto-master/js/script.js"></script>
  <link rel="stylesheet" href="\Proyecto-master\Proyecto-master\css\w3.css">
    <link href="\Proyecto-master\Proyecto-master\bootstrap\css\bootstrap.min.css" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-SBCGez7U4Mk9UTKQmb0WmMzqcnXfEj9TNe1Uro+W1/3hw9LHwjZI4cqqDQ89Lzil0bm1wHpdIsG/3/fd0DOCA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body style="background-image: url('/Proyecto-master/Proyecto-master/img/fondo3.jpg');">


  <nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container-fluid">
      <!-- Logo a la izquierda -->
      <a class="navbar-brand" href="#">
        <img src="\Proyecto-master\Proyecto-master\img\conte1.png" style="width: 40px;" class="rounded-pill" alt="Logo" height="40">
      </a>
      <!-- Título en el centro -->
      <h1 class="navbar-title">FRANCISCO JOSÉ VIANO</h1>

      <!-- Avatar desplegable a la derecha -->
      <div class="avatar-dropdown">
        <div style="display: flex; align-items:center;" class="navbar-toggle" onclick="toggleMenu()">
        <img src="\Proyecto-master\Proyecto-master\img\director.png" alt="☰" height="40"  id="avatarImg">
        <a>☰</a></div>
        <ul class="navbar-menu" id="navbarMenu">
          <li><a href="cards.php">Inicio</a></li>
          <li><a href="formularioAlumno.php">Gestion Alumnos</a></li>
          <li><a href="formularioUsuario.php">Gestion Usuarios</a></li>
          <li><a href="cerrarSesion.php">Cerrar sesion</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="form-content">
    <section class="profile">
      <div class="profile-image">
        <img src="/Proyecto-master/Proyecto-master/img/listar_usuario.png" />
      </div>
      <h2 class="profile-username">Gestionar alumno</h2>
      <div class="profile-actions">
        <a href="formularioAlumno.php" class="btn btn--primary">Ingresar!</a>
      </div>
    </section>
    <section class="profile">
      <div class="profile-image">
        <img src="/Proyecto-master/Proyecto-master/img/editar.png" />
      </div>
      <h2 class="profile-username">Gestionar usuario</h2>
      <div class="profile-actions">
        <a href="formularioUsuario.php" class="btn btn--primary">Ingresar!</a>
      </div>
    </section>
  </div>



</body>

</html>