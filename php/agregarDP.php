<html>
<head>
    <title>Alumno</title>
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

                    <form id="msform" action="agregarDatosP.php" method="post">
                        <!-- progressbar -->
                        <ul id="progressbar" style=" display: flex;
    justify-content: center;
    align-items: center;
    margin-bottom: 20px;
    overflow: hidden;
    color: lightgrey;">
                            <li class="active" id="account"><strong>Pedagogicos</strong></li>
                            <li id="confirm"><strong>Finalizar</strong></li>
                        </ul>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div> <br> <!-- fieldsets -->
                        <fieldset>
                        <div class="form-card">
                                <div class="row">
                                <?php

                        if (isset($_GET['id'])) {
                            // Obtener el ID del registro desde la URL
                            $id = $_GET['id'];

                            // Realizar una consulta a la base de datos para obtener los datos del registro
                            // Asegúrate de reemplazar los valores en 'nombre_usuario', 'contraseña_usuario', 'estado_usuario', 'posicion_usuario'
                            // con los nombres de las columnas en tu tabla de datos_usuarios
                            // y 'nombre_tabla' con el nombre real de la tabla.
                            // Además, ajusta la conexión a tu base de datos.
                            include 'crearTabla.php';
                            $id = $_GET['id'];

                            $sql = "SELECT *
        FROM Datos_personales 
        WHERE Dni = :id";

                            $consulta = $conn->prepare($sql);
                            $consulta->bindParam(':id', $id, PDO::PARAM_INT);

                            if ($consulta->execute()) {
                                $registro = $consulta->fetch(PDO::FETCH_ASSOC);
                            } else {
                                // Manejo de error si la consulta falla
                                echo "Error al obtener los datos del registro.";
                                exit;
                            }
                        }
                        ?>
                                    <label for="dni">DNI</label>
                                    <input value="<?php echo isset($registro['Dni']) ? $registro['Dni'] : ''; ?>"  name="dni" type="text" class="fieldlabels" id="dni" style="text-align:center;background-color: antiquewhite;" readonly>
                                    
                                    <label for="fechaing">Fecha ingreso</label>
                                    <input name="fecha_ingreso" type="date" class="fieldlabels" id="fechaing">
                                    <label for="escr">Escuela de referencia</label>
                                    <input name="escRef" type="text" class="form-control" id="escr" placeholder="Escuela referencia">
                                    <label for="">Grado</label>
                                    <select name="grado">
                                        <option value="Sin especificar">Seleccionar</option>
                                        <option value="Sala 3">Sala 3</option>
                                        <option value="Sala 4">Sala 4</option>
                                        <option value="Sala 5">Sala 5</option>
                                        <option value="1° grado">1° grado</option>
                                        <option value="2° grado">2° grado</option>
                                        <option value="3° grado">3° grado</option>
                                        <option value="4° grado">4° grado</option>
                                        <option value="5° grado">5° grado</option>
                                        <option value="6° grado">6° grado</option>
                                        <option value="7° grado">7° grado</option>
                                        <option value="Sin escolaridad">Sin escolaridad</option>
                                    </select>
                                    <label for="">Posee Escolaridad?</label>
                                    <select name="posE">
                                        <option value="Sin especificar">Seleccionar</option>
                                        <option value="Si">Si</option>
                                        <option value="No">No</option>
                                        <option value="N/S">N/S</option>
                                    </select>
                                    <label for="">Escuela comun?</label>
                                    <select name="escC">
                                        <option value="Sin especificar">Seleccionar</option>
                                        <option value="Si">Si</option>
                                        <option value="No">No</option>
                                        <option value="N/S">N/S</option>
                                    </select>
                                    <label for="">Escuelas especiales?</label>
                                    <select name="escE">
                                        <option value="Sin especificar">Seleccionar</option>
                                        <option value="Si">Si</option>
                                        <option value="No">No</option>
                                        <option value="N/S">N/S</option>
                                    </select>
                                    <label for="">Lectura continua?</label>
                                    <select name="lectC">
                                        <option value="Sin especificar">Seleccionar</option>
                                        <option value="Si">Si</option>
                                        <option value="No">No</option>
                                        <option value="N/S">N/S</option>
                                    </select>
                                    <label for="">Interpreta textos?</label>
                                    <select name="interpT">
                                        <option value="Sin especificar">Seleccionar</option>
                                        <option value="Si">Si</option>
                                        <option value="No">No</option>
                                        <option value="N/S">N/S</option>
                                    </select>
                                    <label for="">Reconoce sustantivos/adjetivos/verbos?</label><br>
                                    <select name="reconcSAV">
                                        <option value="Sin especificar">Seleccionar</option>
                                        <option value="Si">Si</option>
                                        <option value="No">No</option>
                                        <option value="N/S">N/S</option>
                                    </select>
                                    <label for="">Elabora oraciones?</label>
                                    <select name="elabO">
                                        <option value="Sin especificar">Seleccionar</option>
                                        <option value="Si">Si</option>
                                        <option value="No">No</option>
                                        <option value="N/S">N/S</option>
                                    </select>
                                    <label for="">Lectura y escritura?</label>
                                    <select name="LectyEsc">
                                        <option value="Sin especificar">Seleccionar</option>
                                        <option value="Si">Si</option>
                                        <option value="No">No</option>
                                        <option value="N/S">N/S</option>
                                    </select>
                                    <label for="">Resuelve operaciones basicas?</label>
                                    <select name="resOpBasc">
                                        <option value="Sin especificar">Seleccionar</option>
                                        <option value="Si">Si</option>
                                        <option value="No">No</option>
                                        <option value="N/S">N/S</option>
                                    </select>
                                </div>
                            </div> <input type="button" name="next" class="next action-button" value="Siguiente" />
                            <a href="formularioAlumno.php" class="previous action-button-previous" style="text-decoration: none;">Cancelar</a>
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

                            
                  