<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FJV | Inicio</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="\Proyecto-master\Proyecto-master\css\font.css">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- IonIcons -->
    <link rel="stylesheet" href="\Proyecto-master\Proyecto-master\css\code.ionic.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">

    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="/Proyecto-master/Proyecto-master/css/AgregarA.css">
    <link rel="stylesheet" href="\Proyecto-master\Proyecto-master\css\w3.css">
    <link href="\Proyecto-master\Proyecto-master\bootstrap\css\bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">

    <script src="/Proyecto-master/Proyecto-master/js/FormAlumno.js"></script>
    <link rel="shortcut icon" href="/Proyecto-master/Proyecto-master/favicon/favicon-32x32.png">


</head>

<body class="hold-transition sidebar-mini" style="background-color: #f4f6f9;">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-black navbar-dark">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>

            </ul>
        </nav>
        <!-- /.navbar -->



        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4" style="position:fixed;">
            <!-- Brand Logo -->
            <a href="formularioAlumno.php" class="brand-link" style="text-decoration: none;">
                <img src="\Proyecto-master\Proyecto-master\img\conte1.png" alt="FJV Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">F. JOSÉ VIANO</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <?php
                        session_start();
                        error_reporting(0);

                        $posicion = $_SESSION['Posicion'];
                        if ($posicion == 'Administrador') {
                            echo "<img src='\Proyecto-master\Proyecto-master\img\administrador.png' class='img-circle elevation-2' alt='User Image'>";
                        } elseif ($posicion == 'Usuario') {
                            echo "<img src='\Proyecto-master\Proyecto-master\img\usuario.png' class='img-circle elevation-2' alt='User Image'>";
                        } elseif ($posicion == 'Psicopedagoga') {
                            echo "<img src='\Proyecto-master\Proyecto-master\img\cerebro.png' class='img-circle elevation-2' alt='User Image'>";
                        }
                        ?>
                    </div>
                    <div class="info">
                        <a style="text-decoration: none;" href="#" class="d-block">
                            <?php
                            if (isset($_SESSION["usuario"])) {

                                $apellido = $_SESSION["Apellido"];
                            }
                            echo "Bienvenido " . $apellido;


                            session_start();
                            $posicion = $_SESSION['Posicion'];
                            // Verificar si el usuario ha iniciado sesión (esto dependerá de tu sistema de autenticación)
                            if ($posicion == 'Administrador') {
                                $mostrarColumnaAccion = true;
                            } else {
                                $mostrarColumnaAccion = false;
                            }
                            if ($posicion == 'Usuario') {
                                $mostrarColumnaAccion1 = true;
                            } else {
                                $mostrarColumnaAccion1 = false;
                            }
                            if ($posicion == 'Psicopedagoga') {
                                $mostrarColumnaAccion2 = true;
                            } else {
                                $mostrarColumnaAccion2 = false;
                            }

                            ?>
                        </a>
                    </div>
                </div>




                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->


                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <img src="/Proyecto-master/Proyecto-master/img/formulario.png" style="max-height:20px;">
                                <p>
                                    Formulario
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="formularioAlumno.php" class="nav-link active1">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>
                                            Alumnos
                                        </p>
                                    </a>
                                </li>
                                <?php if ($mostrarColumnaAccion) : ?>
                                    <li class="nav-item">
                                        <a href="formularioUsuario.php" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>
                                                Usuarios
                                            </p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="formularioProfesor.php" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>
                                                Profesor
                                            </p>
                                        </a>
                                    </li>
                                <?php endif; ?>

                            </ul>
                        </li>


                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <img src="/Proyecto-master/Proyecto-master/img/gestion.png" style="max-height:20px;">
                                <p>
                                    Agregar
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="agregarA.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>
                                            Alumnos
                                        </p>
                                    </a>

                                </li>
                                <?php if ($mostrarColumnaAccion) : ?>
                                    <li class="nav-item">
                                        <a href="agregarU.php" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>
                                                Usuarios
                                            </p>
                                        </a>

                                    </li>
                                    <li class="nav-item">
                                        <a href="AgregarProfesor.php" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>
                                                Profesores
                                            </p>
                                        </a>

                                    </li>
                                <?php endif; ?>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="estadistica.php" class="nav-link">
                                <img src="/Proyecto-master/Proyecto-master/img/grafico.png" style="max-height:20px;">
                                <p>
                                    Estadistica
                                </p>
                            </a>




                        <li class="nav-item">
                            <a href="cerrarSesion.php" class="nav-link">
                                <img src="/Proyecto-master/Proyecto-master/img/cerrar-sesion.png" style="max-height:20px;">
                                <p>
                                    Cerrar Sesión
                                </p>
                            </a>
                        </li>





                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>


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
     
 
    <div class="content-wrapper" style="height: 400px;">
        <div class="container">
            <h2 style="text-align: center;">Agregar Datos Pedagogicos</h2>
            <form id="msform" action="agregarDatosP.php" method="post">
                <div class="form-card">
                    <div class="row">
                        <label for="dni">DNI:</label>
                        <input value="<?php echo isset($registro['Dni']) ? $registro['Dni'] : ''; ?>" name="dni" type="text" class="fieldlabels" id="dni" style="text-align:center;background-color: antiquewhite;" readonly>
                        <label for="fechaing">Fecha de Ingreso:</label>
                        <input name="fecha_ingreso" type="date" class="fieldlabels" id="fechaing" placeholder="Fecha de Ingreso" required>
                    </div>
                    <div class="row">
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
                    </div>
                    <div class="row">
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
                    </div>
                    <div class="row">
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
                    <div class="botones-gs">
                        <input type="submit" name="next" class="action-button green-button" value="Guardar y salir">
                        <a href="formularioAlumno.php" class="action-button red-button">Cancelar</a>
                    </div>
                </div>

            </form>
        </div>

    </div>

    </div>
    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE -->
    <script src="dist/js/adminlte.js"></script>

    <!-- OPTIONAL SCRIPTS -->
    <script src="plugins/chart.js/Chart.min.js"></script>
</body>

</html>