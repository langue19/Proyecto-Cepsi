<!DOCTYPE html>
<head>
    
<meta name="viewport" content="width=device-width, initial-scale=1">


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
<body>
    
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

</body>