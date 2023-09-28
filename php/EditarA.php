<html>

<head>



    <title>Editar Alumno</title>
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
                            <a href="agregarA.php" class="nav-link">
                                <img src="/Proyecto-master/Proyecto-master/img/gestion.png" style="max-height:20px;">
                                <p>
                                    Agregar Alumnos
                                </p>
                            </a>

                        </li>
                        <?php if ($mostrarColumnaAccion) : ?>
                            <li class="nav-item">
                                <a href="agregarU.php" class="nav-link">
                                    <img src="/Proyecto-master/Proyecto-master/img/gestion.png" style="max-height:20px;">
                                    <p>
                                        Agregar Usuarios
                                    </p>
                                </a>

                            </li>
                            <li class="nav-item">
                                <a href="AgregarProfesor.php" class="nav-link">
                                    <img src="/Proyecto-master/Proyecto-master/img/gestion.png" style="max-height:20px;">
                                    <p>
                                        Agregar Profesores
                                    </p>
                                </a>

                            </li>
                        <?php endif; ?>



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

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-11 col-sm-10 col-md-10 col-lg-6 col-xl-5 text-center p-0 mt-3 mb-2">
                <div class="card  mb-3">

                    <form id="msform" action="EditarAlumno.php" method="post">
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
        FROM Datos_personales AS dpers
        WHERE dpers.Dni = :id";




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




                        <fieldset>
                            <div class="form-card">
                                <div class="row">
                                    <label for="dni">Dni</label>
                                    <input style="background-color:antiquewhite; text-align:center;" name="documento" type="text" class="fieldlabels" id="dni" placeholder="Documento" value="<?php echo isset($registro['Dni']) ? $registro['Dni'] : ''; ?>" readonly>

                                    <label for="ape">Apellido</label>
                                    <input name="apellido" type="text" class="fieldlabels" id="ape" placeholder="Apellido" validar()>
                                    <label for="nomb">Nombre</label>
                                    <input name="nombre" type="text" class="fieldlabels" id="nomb" placeholder="Nombre">
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
                            </div> 
                            <input type="button" name="next" class="next action-button" value="Siguiente" />
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