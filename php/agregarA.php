<html>

<head>



    <title>Agregar Alumno</title>
    <meta charset="UTF-8">
    <!-- CSS only -->
    <link href="\Proyecto-master\Proyecto-master\bootstrap\css\bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/Proyecto-master/Proyecto-master/css/AgregarA.css">
    <link rel="shortcut icon" href="/Proyecto-master/Proyecto-master/favicon/favicon-32x32.png">

    <!-- Aquí incluye el enlace a la biblioteca jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Aquí incluye el enlace a tu archivo JavaScript -->
    <script src="/Proyecto-master/Proyecto-master/js/AgregarA.js"></script>
</head>

<body>

    
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

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-11 col-sm-10 col-md-10 col-lg-6 col-xl-5 text-center p-0 mt-3 mb-2">
                <div class="card  mb-3">

                    <form id="msform" action="agregarAlumno.php" method="post">
                        <!-- progressbar -->
                        <ul id="progressbar" style=" display: flex;
    justify-content: center;
    align-items: center;
    margin-bottom: 20px;
    overflow: hidden;
    color: lightgrey;">
                            <li class="active" id="account"><strong>Datos</strong></li>
                            <li id="confirm"><strong>Finalizar</strong></li>
                        </ul>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div> <br> <!-- fieldsets -->
                        <fieldset>
                            <div class="form-card">
                                <div class="row">
                                    <label for="ape">Apellido</label>
                                    <input name="apellido" type="text" class="fieldlabels" id="ape" placeholder="Apellido" validar()>
                                    <label for="nomb">Nombre</label>
                                    <input name="nombre" type="text" class="fieldlabels" id="nomb" placeholder="Nombre">
                                    <label for="dni">Dni</label>
                                    <input name="documento" type="text" class="fieldlabels" id="dni" placeholder="Documento">
                                    <label for="sexo">Genero:</label>
                                    <select name="genero" id="genero">
                                        <option value="Sin especificar">Seleccionar</option>
                                        <option value="Femenino">Femenino</option>
                                        <option value="Masculino">Masculino</option>
                                    </select>

                                    <label for="domc">Domicilio</label>
                                    <input name="domicilio" type="text" class="fieldlabels" id="domc" placeholder="Domicilio">
                                    <label for="fechanac">Fecha de nacimiento</label>
                                    <input name="fecha_nacimiento" type="date" class="fieldlabels" id="fechanac">
                                    <label for="nombt">Nombre del Tutor</label>
                                    <input name="nombre_tutor" type="text" class="fieldlabels" id="nombt" placeholder="Nombre tutor">
                                </div>
                            </div> <input type="button" name="next" class="next action-button" value="Siguiente" />
                        </fieldset>
                        
                        <fieldset>
                            <div class="form-card">
                                <div class="row">
                                    <h2 class="purple-text text-center"><strong>Finalizado!</strong></h2> <br>
                                    <div class="row justify-content-center">
                                        <div class="col-3"> <img src="\Proyecto-master\Proyecto-master\img\listo.png"
                                                class="fit-image">
                                        </div>
                                    </div> <br><br>
                                </div>
                            </div> <input type="submit" name="next" class="next action-button" style="width: 160px;" value="Guardar y salir!" />
                            <input type="button" name="previous" class="previous action-button-previous"
                                value="Anterior" />

                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>

</html>