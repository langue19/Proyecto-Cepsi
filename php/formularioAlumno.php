<!DOCTYPE html>
<html lang="en">

<?php

$mesesEnEspanol = array(
    1 => 'enero', 2 => 'febrero', 3 => 'marzo', 4 => 'abril', 5 => 'mayo', 6 => 'junio',
    7 => 'julio', 8 => 'agosto', 9 => 'septiembre', 10 => 'octubre', 11 => 'noviembre', 12 => 'diciembre'
);

?>

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
    <link rel="stylesheet" type="text/css" href="/Proyecto-master/Proyecto-master/css/sidebar.css">
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
                                    <a href="formularioAlumno.php" class="nav-link active">
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






        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <section>
                <div class="row mb-1">
                    <label>
                        <input class="toggle-checkbox" type="checkbox" id="toggle-checkbox">
                        <div class="toggle-slot">
                            <div class="sun-icon-wrapper">
                                <div class="iconify sun-icon" data-icon="feather-sun" data-inline="false"></div>
                            </div>
                            <div class="toggle-button"></div>
                            <div class="moon-icon-wrapper">
                                <div class="iconify moon-icon" data-icon="feather-moon" data-inline="false"></div>
                            </div>
                        </div>
                    </label>

                </div><!-- /.container-fluid -->
            </section>



            <!-- Content Header (Page header) -->
            <div class="content-header">
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">

                    <div class="form-content">
                        <div class="form-contro">
                            <label for="search"><i class="icon-search"></i></label>
                            <input class="table-filter" type="search" data-table="advanced-web-table" placeholder="Buscar..." id="search-input">
                        </div>
                        <!-- Table -->
                        <div class="table-responsive">
                            <table id="table-id" class="table table-striped table-white">
                                <thead>
                                    <tr>
                                        <?php if ($mostrarColumnaAccion || $mostrarColumnaAccion1) : ?>
                                            <th style="text-align: center; vertical-align: middle;">Obs</th>
                                        <?php endif; ?>
                                        <th style="text-align: center; vertical-align: middle;">DNI</th>
                                        <th style="text-align: center; vertical-align: middle;">Nombre</th>
                                        <th style="text-align: center; vertical-align: middle;">Apellido</th>
                                        <th style="text-align: center; vertical-align: middle;">Edad</th>
                                        <?php if ($mostrarColumnaAccion || $mostrarColumnaAccion1) : ?>
                                            <th style="text-align: center; vertical-align: middle;">Datos</th>
                                            <th style="text-align: center; vertical-align: middle;">PDF</th>
                                            <th style="text-align: center; vertical-align: middle;">Acciones</th>
                                        <?php endif; ?>
                                        <?php if ($mostrarColumnaAccion2 || $mostrarColumnaAccion) : ?>
                                            <th style="text-align: center; vertical-align: middle;">Anamnesis</th>
                                            <th style="text-align: center; vertical-align: middle;">Mostrar</th>
                                        <?php endif;
                                        if (!$mostrarColumnaAccion2) :  ?>
                                            <th style="text-align: center; vertical-align: middle;">
                                                <a href='AgregarA.php'>

                                                    <img src="/Proyecto-master/Proyecto-master/img/mas.png" style="max-width: 30px;">
                                                </a>
                                            </th>
                                        <?php endif; ?>

                                    </tr>
                                </thead>

                                <tbody>
                                    <?php
                                    include 'crearTabla.php';

                                    $itemsPorPagina = 10; // Cambiar a la cantidad deseada de ítems por página
                                    $paginaActual = isset($_GET['pagina']) ? $_GET['pagina'] : 1;
                                    $inicio = ($paginaActual - 1) * $itemsPorPagina;

                                    $sql1 = "SELECT *
            FROM Datos_personales
            ORDER BY fecha_act DESC
            LIMIT $inicio, $itemsPorPagina;
        ";
                                    $consulta = $conn->prepare($sql1);

                                    if ($consulta->execute()) {
                                        while ($row = $consulta->fetch()) {
                                            echo "<tr>";
                                            if ($mostrarColumnaAccion || $mostrarColumnaAccion1) :
                                                echo "<td><a href='#' onclick=\"openModal1('" . $row['Dni'] . "')\">
                                    <img src='/Proyecto-master/Proyecto-master/img/observar.png'>
                                </a>
                                    <div class='w3-container'>
                                        <div id='id-modal1-" . $row['Dni'] . "' class='w3-modal'>
                                            <div class='w3-modal-content w3-card-4 w3-animate-zoom'>
                                                <header class='w3-container w3-white'> 
                                                <span onclick=\"closeModal('id-modal1-" . $row['Dni'] . "')\" class='w3-button w3-white w3-display-topright'>&times;</span>
                                                <h2>" . $row['Nombre'] . " " . $row['Apellido'] .  "</h2>
                                                </header>
                                                <div id='-" . $row['Dni'] . "' class='w3-container'>
                                                <div class='container'>
                                                    <div class='form-control'>
                                                        <label for='search'><i class='icon-search'></i></label>
                                                            <input class='table-filter' type='search' data-table='advanced-web-table' placeholder='Buscar...'>
                                                        </div>
                                                                        <!--  Table  -->
                                                                        <div class='table-responsive'>
                                                                            <table id='table-id' class='table table-striped table-class'>
                                                                                <thead>
                                                                                    <tr>
                                                                                        <th>Fecha</th>
                                                                                        <th>Observaciones</th>
                                                                                        <th>Contenido</th>                                                                                       
                                                                                        <th>Profesor</th>
                                                                                        <th><a href='Observaciones.php?id=" . $row['Dni'] . "'>
                                                                                        <img src='/Proyecto-master/Proyecto-master/img/mas.png' class='imagen-espaciada'>
                                                                                    </a>
                                                                                    </th>
                                                                                    </tr>
                                                                                <tbody>";


                                                $idviejo = $row['Dni'];
                                                $sql2 = "SELECT *
                 FROM datos_academ
                 WHERE DNI = :idviejo
                 ORDER BY Fecha ASC;
        ";


                                                // Usamos parámetros con consultas preparadas
                                                $consulta2 = $conn->prepare($sql2);
                                                $consulta2->bindParam(':idviejo', $idviejo, PDO::PARAM_INT); // Asignamos el valor de idviejo como entero
                                                if ($consulta2->execute()) {
                                                    // Obtenemos el primer resultado del SELECT (si es que existe)
                                                    $row2 = $consulta2->fetch();
                                                }



                                                if ($consulta2->execute()) {
                                                    while ($row2 = $consulta2->fetch()) {
                                                        echo "<tr>";
                                                        $fechaOriginal = $row2['Fecha'];
                                                        $parts = explode('-', $fechaOriginal);
                                                        $dia = intval($parts[2]);
                                                        $mes = intval($parts[1]);
                                                        $anio = intval($parts[0]);

                                                        $fechaFormateada = "$dia de " . $mesesEnEspanol[$mes] . " del $anio";

                                                        echo "<td>" . $fechaFormateada . "</td>";
                                                        echo "<td>" . $row2['Observación'] . "</td>";
                                                        echo "<td>" . $row2['Contenido'] . "</td>";
                                                        echo "<td>" . $row2['Nombre_Profesor'] . "</td>";
                                                        echo "<td></td>";
                                                        echo "</tr>";
                                                    }
                                                }
                                                echo "</tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                        </div>
                                        </td>";
                                            endif;


                                    ?>
                                            <?php

                                            echo "<td>" . $row['Dni'] . "</td>";
                                            echo "<td>" . $row['Nombre'] . "</td>";
                                            echo "<td>" . $row['Apellido'] . "</td>";
                                            // CALCULO DE EDAD-----------------------------
                                            $consultaEdad2 = "SELECT TIMESTAMPDIFF(YEAR, Fecha_nacimiento, CURDATE()) AS edadAnios,
        TIMESTAMPDIFF(MONTH, Fecha_nacimiento, CURDATE()) % 12 AS edadMeses
        FROM datos_personales WHERE Dni = :dni";
                                            $stmtEdad2 = $conn->prepare($consultaEdad2);
                                            $stmtEdad2->bindParam(':dni', $row['Dni']);
                                            $stmtEdad2->execute();

                                            // Verificar si se obtuvieron resultados
                                            if ($stmtEdad2) {
                                                // Obtener el resultado de la consulta
                                                $resultadoEdad2 = $stmtEdad2->fetch(PDO::FETCH_ASSOC);
                                            }

                                            // Mostrar la edad en años y meses
                                            echo "<td>" . $resultadoEdad2['edadAnios'] . " años " . $resultadoEdad2['edadMeses'] . " meses</td>";
                                            // CALCULO DE EDAD--------------------------------

                                            if ($mostrarColumnaAccion || $mostrarColumnaAccion1) :
                                                echo "<td>
            <div class='w3-container'>
                <a href='#' onclick=\"openModal2('" . $row['Dni'] . "')\">
                    <img src='/Proyecto-master/Proyecto-master/img/datos.png'>
                </a>
                
                <div id='id-modal2-" . $row['Dni'] . "' class='w3-modal'>
                <div class='w3-modal-content w3-card-4 w3-animate-zoom'>
                <header class='w3-container w3-blue'> 
                                    <span onclick=\"closeModal('id-modal2-" . $row['Dni'] . "')\" class='w3-button w3-blue w3-display-topright'>&times;</span>
        
                                        <h2>" . $row['Nombre'] . " " . $row['Apellido'] .  "</h2>
                                    </header>
                                    <div class='w3-bar w3-border-bottom w3-white'>
                                    
                                        <button class='tablink w3-bar-item w3-button' onclick=\"openCity(event, 'Personal-" . $row['Dni'] . "')\">Datos Personales</button>
                                        <button class='tablink w3-bar-item w3-button' onclick=\"openCity(event, 'Paris-" . $row['Dni'] . "')\">Datos Pedagogicos</button>
                                        <button class='tablink w3-bar-item w3-button' onclick=\"openCity(event, 'Tokyo-" . $row['Dni'] . "')\">Internacion</button>
                                        <button class='tablink w3-bar-item w3-button' onclick=\"openCity(event, 'Toke-" . $row['Dni'] . "')\">Domiciliario</button>
        
                                        </div>
                                    <div id='Personal-" . $row['Dni'] . "' class='w3-container city'>
                                        <div class='container'>
                                            <!--  Table  -->
                                            <div class='table-responsive'>
                                                <table id='table-id' class='table table-striped table-class'>
                                                    <thead>
                                                        <tr>
                                                            <th>DNI</th>
                                                            <th>Apellido</th>
                                                            <th>Nombre</th>
                                                            <th>Genero</th>
                                                            <th>Domicilio</th>
                                                            <th>Fecha nacimiento</th>
                                                            <th>Nombre del Tutor</th>
                                                            <th>Edad</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>";

                                                $dniviejo = $row['Dni'];

                                                $sql2 = "SELECT *
                        FROM datos_personales WHERE $dniviejo = Dni;";

                                                $consulta2 = $conn->prepare($sql2);

                                                if ($consulta2->execute()) {
                                                    while ($row2 = $consulta2->fetch()) {
                                                        echo "<tr>";
                                                        echo "<td>" . $row2['Dni'] . "</td>";
                                                        echo "<td>" . $row2['Apellido'] . "</td>";
                                                        echo "<td>" . $row2['Nombre'] . "</td>";
                                                        echo "<td>" . $row2['Sexo'] . "</td>";
                                                        echo "<td>" . $row2['Domicilio'] . "</td>";
                                                        $fechaOriginal1 = $row2['Fecha_nacimiento'];
                                                        $parts = explode('-', $fechaOriginal1);
                                                        if (count($parts) === 3) {
                                                            $dia = intval($parts[2]);
                                                            $mes = intval($parts[1]);
                                                            $anio = intval($parts[0]);

                                                            $fechaOriginal1 = "$dia de " . $mesesEnEspanol[$mes] . " del $anio";
                                                        }
                                                        echo "<td>" . $fechaOriginal1 . "</td>";
                                                        echo "<td>" . $row2['Nombre_del_tutor'] . "</td>";

                                                        // CALCULO DE EDAD-----------------------------
                                                        $consultaEdad2 = "SELECT TIMESTAMPDIFF(YEAR, Fecha_nacimiento, CURDATE()) AS edadAnios,
        TIMESTAMPDIFF(MONTH, Fecha_nacimiento, CURDATE()) % 12 AS edadMeses
        FROM datos_personales WHERE Dni = :dni";
                                                        $stmtEdad2 = $conn->prepare($consultaEdad2);
                                                        $stmtEdad2->bindParam(':dni', $row['Dni']);
                                                        $stmtEdad2->execute();

                                                        // Verificar si se obtuvieron resultados
                                                        if ($stmtEdad2) {
                                                            // Obtener el resultado de la consulta
                                                            $resultadoEdad2 = $stmtEdad2->fetch(PDO::FETCH_ASSOC);
                                                        }

                                                        // Mostrar la edad en años y meses
                                                        echo "<td>" . $resultadoEdad2['edadAnios'] . " años " . $resultadoEdad2['edadMeses'] . " meses</td>";
                                                        // CALCULO DE EDAD--------------------------------
                                                        echo "</tr>";
                                                    }
                                                }

                                                echo "</tbody>
                        </table>
                    </div>
                </div>
            </div>
        
            <div id='Paris-" . $row['Dni'] . "' class='w3-container city'>
                <div class='container'>
                    <!--  Table  -->
                    <div class='table-responsive'>
                        <table id='table-id' class='table table-striped table-class'>
                            <thead>
                                <tr>
                                <th><a href='AgregarDP.php?id=" . $row['Dni'] . "'>
                                        <img src='/Proyecto-master/Proyecto-master/img/mas.png' style='max-width: 30px;'>
                                    </a>
                                </th>
                                    <th>Fecha ingreso</th>
                                    <th>Escuela</th>
                                    <th>Grado</th>
                                    <th>Escolaridad?</th>
                                    <th>Esc. comun/especial?</th>
                                    <th>Lectura continua?</th>
                                    <th>Interpreta textos?</th>

                                    <th>Lectura y escritura?</th>

                                    <th>Resuelve operaciones basicas?</th>
                                </tr>
                            </thead>
                            <tbody>";

                                                $dniviejo = $row['Dni'];

                                                $sql2 = "SELECT *
                        FROM Datos_pedagogicos WHERE $dniviejo = Dni;";

                                                $consulta2 = $conn->prepare($sql2);

                                                if ($consulta2->execute()) {
                                                    while ($row2 = $consulta2->fetch()) {
                                                        echo "<tr>";
                                                        echo "<td></td>";
                                                        $fechaOriginal1 = $row2['Fecha_ingreso'];
                                                        $parts = explode('-', $fechaOriginal1);
                                                        if (count($parts) === 3 && $parts[0] > 0 && $parts[1] > 0 && $parts[2] > 0) {
                                                            $dia = intval($parts[2]);
                                                            $mes = intval($parts[1]);
                                                            $anio = intval($parts[0]);
                                                            $fechaOriginal1 = "$dia de " . $mesesEnEspanol[$mes] . " del $anio";
                                                        }
                                                        echo "<td>" . $fechaOriginal1 . "</td>";
                                                        echo "<td>" . $row2['escRef'] . "</td>";
                                                        echo "<td>" . $row2['Grado'] . "</td>";
                                                        echo "<td>" . $row2['poseeEsc'] . "</td>";
                                                        if($row2['escComun'] == "Si"){
                                                            echo "<td> Comun </td>";
                                                        }else{
                                                            echo "<td> Especial </td>";
                                                        }
                                                        echo "<td>" . $row2['lectContinua'] . "</td>";
                                                        echo "<td>" . $row2['interpTextos'] . "</td>";
                                                        echo "<td>" . $row2['lectyescri'] . "</td>";
                                                        echo "<td>" . $row2['resuelvOpBas'] . "</td>";
                                                        echo "</tr>";
                                                    }
                                                }

                                                echo "</tbody>
                        </table>
                    </div>
                </div>
            </div>
        
            <div id='Tokyo-" . $row['Dni'] . "' class='w3-container city'>
                <!--  Table  -->
                <div class='table-responsive'>
                    <table id='table-id' class='table table-striped table-class'>
                        <thead>
                            <tr>
                            <th><a href='agregarDI.php?id=" . $row['Dni'] . "'>
                                        <img src='/Proyecto-master/Proyecto-master/img/mas.png' style='max-width: 30px;'>
                                    </a>
                                </th>
                                <th>Fecha de ingreso</th>
                                <th>Sala</th>
                                <th>Habitacion</th>
                                <th>Cama</th>
                                <th>Discapacidad</th>
                                <th>Observacion</th>
                                <th>Diagnostico</th>
                                <th>Fecha ALTA</th>
                                <th>Motivo</th>
                                <th>ALTA</th>
                                <th></th>
                                
                            </tr>
                        </thead>
                        <tbody>";

                                                $dniviejo = $row['Dni'];




                                                $sql2 = "SELECT *
                                    FROM Datos_internacion
                                    WHERE Dni = $dniviejo
                                    ORDER BY Fecha_ingreso DESC";

                                                $consulta2 = $conn->prepare($sql2);

                                                if ($consulta2->execute()) {
                                                    while ($row2 = $consulta2->fetch()) {
                                                        echo "<tr>";
                                                        echo "<td></td>";
                                                        $fechaOriginal = $row2['Fecha_ingreso'];
                                                        $parts = explode('-', $fechaOriginal);
                                                        $dia = intval($parts[2]);
                                                        $mes = intval($parts[1]);
                                                        $anio = intval($parts[0]);

                                                        $fechaFormateada = "$dia de " . $mesesEnEspanol[$mes] . " del $anio";

                                                        echo "<td>" . $fechaFormateada . "</td>";
                                                        echo "<td>" . $row2['Sala'] . "</td>";
                                                        echo "<td>" . $row2['Habitación'] . "</td>";
                                                        echo "<td>" . $row2['Cama'] . "</td>";
                                                        echo "<td>" . $row2['Discapacidad'] . "</td>";
                                                        echo "<td>" . $row2['Observacion'] . "</td>";
                                                        $fechaIngresoFila = $row2['Fecha_ingreso']; // Utiliza la fecha de ingreso como identificador único

                                                        echo "<td>
                    <span id='diagnosticoSpan-$fechaIngresoFila' style='display: none;'>" . $row2['Diagnostico'] . "</span>
                    <button style='border: none; background: none;' onclick='toggleDiagnostico1(\"$fechaIngresoFila\")'>
                      <img style='width: 100%;
                      background: none;
                      border: none;
                      outline:none ;
                      ' src='/Proyecto-master/Proyecto-master/img/ver.png' id='img-mostrar-$fechaIngresoFila'>
                    </button>
                  </td>";
                                                        $fechaOriginal1 = $row2['Fecha_alta'];
                                                        $parts = explode('-', $fechaOriginal1);
                                                        if (count($parts) === 3) {
                                                            $dia = intval($parts[2]);
                                                            $mes = intval($parts[1]);
                                                            $anio = intval($parts[0]);

                                                            $fechaOriginal1 = "$dia de " . $mesesEnEspanol[$mes] . " del $anio";
                                                        }
                                                        echo "<td>" . $fechaOriginal1 . "</td>";

                                                        $fechaIngresoFila1 = $row2['Fecha_ingreso']; // Utiliza la fecha de ingreso como identificador único

                                                        echo "<td>
                    <span id='motivoSpan-$fechaIngresoFila1' style='display: none;'>" . $row2['Motivo'] . "</span>
                    <button style='border: none; background: none;' onclick='toggleMotivo1(\"$fechaIngresoFila1\")'>
                      <img style='width: 100%;
                      background: none;
                      border: none;
                      outline:none ;
                      ' src='/Proyecto-master/Proyecto-master/img/ver.png' id='img-mostrar1-$fechaIngresoFila1'>
                    </button>
                  </td>";
                                                        echo "<td><a href='#' onclick=\"openModal3('" . $row2['Fecha_ingreso'] . "')\">
                    <img src='/Proyecto-master/Proyecto-master/img/alta.png' alt='Dar de Alta'>
                </a>
        
                                            <div class='w3-container'>
                                                <div id='id-modal3-" . $row2['Fecha_ingreso'] . "' class='w3-modal'>
                                                    <div class='w3-modal-content w3-card-4 w3-animate-zoom' style='max-width:600px'>
                                                        <header class='w3-container w3-white'> 
                                                        <span onclick=\"closeModal1('id-modal3-" . $row2['Fecha_ingreso'] .  "')\" class='w3-button w3-white w3-display-topright'>&times;</span>
                                                        <h2>Dar de alta</h2>
                                                        </header>
                                                        <div id='-" . $row2['Fecha_ingreso'] . "' class='w3-container'>
                                                        <div class='container'>
                                                        <form id='msform' action='DardeAlta.php' method='post'>
                                                        
                                                        
                                                            <div class='form-card'>
                                                                <div class='row'>
                                                                    <label for='dni'>DNI</label>
                                                                    <input name='dni' type='text' class='fieldlabels' id='dni' value='" . $row['Dni'] . "' style='text-align:center; background-color:antiquewhite;' readonly>
                                                                    <label for='fechaI'>Fecha Ingreso</label>
                                                                    <input name='fechaI' type='date' class='fieldlabels' id='fechaI' value='" . $row2['Fecha_ingreso'] . "' style='text-align:center; background-color:antiquewhite;' readonly>
                                                                    <label for='fecha'>Fecha</label>
                                                                    <input name='fecha' type='date' class='fieldlabels' id='fecha' placeholder='fecha'>
                                                                    <label for='motivo'>Motivo</label>
                                                                    <input name='motivo' type='text' class='fieldlabels' id='motivo' placeholder='motivo'>
                                                                </div>
                                                            </div> 
                                                            <input type='submit' name='next' class='next action-button' style='color:white;width: 100%; background-color:green; margin-top:15px' value='Guardar y salir!' />                                            </form>    
                                                    </div>
                                                </div>
                                                </div>
                                                </div></td>";


                                                        echo "</tr>";
                                                    }
                                                }

                                                echo "</tbody>
                    </table>
                </div>
            </div>
        
        
            <div id='Toke-" . $row['Dni'] . "' class='w3-container city'>
                <!--  Table  -->
                <div class='table-responsive'>
                    <table id='table-id' class='table table-striped table-class'>
                        <thead>
                            <tr>
                            <th><a href='agregarDI.php?id=" . $row['Dni'] . "'>
                                        <img src='/Proyecto-master/Proyecto-master/img/mas.png' style='max-width: 30px;'>
                                    </a>
                                </th>
                                <th>Fecha de ingreso</th>
                                <th>Direccion</th>
                                <th>Discapacidad</th>
                                <th>Observacion</th>
                                <th>Diagnostico</th>
                                <th>Fecha ALTA</th>
                                <th>Motivo</th>
                                <th>ALTA</th>
                                
                            </tr>
                        </thead>
                        <tbody>";

                                                $dniviejo = $row['Dni'];



                                                $sql2 = "SELECT *
                                    FROM datos_domiciliario WHERE $dniviejo = Dni 
                                    ORDER BY Fecha_ingreso DESC";

                                                $consulta2 = $conn->prepare($sql2);

                                                if ($consulta2->execute()) {

                                                    while ($row2 = $consulta2->fetch()) {
                                                        echo "<tr>";
                                                        echo "<td></td>";
                                                        $fechaOriginal = $row2['Fecha_ingreso'];
                                                        $parts = explode('-', $fechaOriginal);
                                                        $dia = intval($parts[2]);
                                                        $mes = intval($parts[1]);
                                                        $anio = intval($parts[0]);

                                                        $fechaFormateada = "$dia de " . $mesesEnEspanol[$mes] . " del $anio";

                                                        echo "<td>" . $fechaFormateada . "</td>";
                                                        echo "<td>" . $row2['Direccion'] . "</td>";
                                                        echo "<td>" . $row2['Discapacidad'] . "</td>";
                                                        echo "<td>" . $row2['Observacion'] . "</td>";
                                                        $fechaIngresoFila3 = $row2['Fecha_ingreso']; // Utiliza la fecha de ingreso como identificador único

                                                        echo "<td>
                    <span id='diagnosticoSpan2-$fechaIngresoFila3' style='display: none;'>" . $row2['Diagnostico'] . "</span>
                    <button style='border: none; background: none;' onclick='toggleDiagnostico2(\"$fechaIngresoFila3\")'>
                      <img style='width: 100%;
                      background: none;
                      border: none;
                      outline:none ;
                      ' src='/Proyecto-master/Proyecto-master/img/ver.png' id='img-mostrar2-$fechaIngresoFila3'>
                    </button>
                  </td>";
                                                        $fechaOriginal1 = $row2['Fecha_alta'];
                                                        $parts = explode('-', $fechaOriginal1);
                                                        if (count($parts) === 3 && $parts[0] > 0 && $parts[1] > 0 && $parts[2] > 0) {
                                                            $dia = intval($parts[2]);
                                                            $mes = intval($parts[1]);
                                                            $anio = intval($parts[0]);
                                                            $fechaOriginal1 = "$dia de " . $mesesEnEspanol[$mes] . " del $anio";
                                                        }
                                                        echo "<td>" . $fechaOriginal1 . "</td>";

                                                        $fechaIngresoFila4 = $row2['Fecha_ingreso']; // Utiliza la fecha de ingreso como identificador único

                                                        echo "<td>
                    <span id='motivoSpan2-$fechaIngresoFila4' style='display: none;'>" . $row2['Motivo'] . "</span>
                    <button style='border: none; background: none;' onclick='toggleMotivo2(\"$fechaIngresoFila4\")'>
                      <img style='width: 100%;
                      background: none;
                      border: none;
                      outline:none ;
                      ' src='/Proyecto-master/Proyecto-master/img/ver.png' id='img-mostrar3-$fechaIngresoFila4'>
                    </button>
                  </td>";
                                                        echo "<td><a href='#' onclick=\"openModal4('" . $row2['Fecha_ingreso'] . "')\">
                    <img src='/Proyecto-master/Proyecto-master/img/alta.png' alt='Dar de Alta'>
                </a>
        
                                            <div class='w3-container'>
                                                <div id='id-modal4-" . $row2['Fecha_ingreso'] . "' class='w3-modal'>
                                                    <div class='w3-modal-content w3-card-4 w3-animate-zoom' style='max-width:600px'>
                                                        <header class='w3-container w3-white'> 
                                                        <span onclick=\"closeModal1('id-modal4-" . $row2['Fecha_ingreso'] .  "')\" class='w3-button w3-white w3-display-topright'>&times;</span>
                                                        <h2>Dar de alta</h2>
                                                        </header>
                                                        <div id='-" . $row2['Fecha_ingreso'] . "' class='w3-container'>
                                                        <div class='container'>
                                                        <form id='msform' action='DardeAltaD.php' method='post'>
                                                        
                                                        
                                                            <div class='form-card'>
                                                                <div class='row'>
                                                                    <label for='dni'>DNI</label>
                                                                    <input name='dni' type='text' class='fieldlabels' id='dni' value='" . $row['Dni'] . "' style='text-align:center; background-color:antiquewhite;' readonly>
                                                                    <label for='fechaI'>Fecha Ingreso</label>
                                                                    <input name='fechaI' type='date' class='fieldlabels' id='fechaI' value='" . $row2['Fecha_ingreso'] . "' style='text-align:center; background-color:antiquewhite;' readonly>
                                                                    <label for='fecha'>Fecha</label>
                                                                    <input name='fecha' type='date' class='fieldlabels' id='fecha' placeholder='fecha'>
                                                                    <label for='motivo'>Motivo</label>
                                                                    <input name='motivo' type='text' class='fieldlabels' id='motivo' placeholder='motivo'>
                                                                </div>
                                                            </div> 
                                                            <input type='submit' name='next' class='next action-button' style='color:white;width: 100%; background-color:green; margin-top:15px' value='Guardar y salir!' />                                            </form>    
                                                    </div>
                                                </div>
                                                </div>
                                                </div></td>";
                                                        echo "</tr>";
                                                    }
                                                }

                                                echo "</tbody>
                    </table>
                </div>
            </div>
        
        </div>
            </div>
            </td>";
                                                echo "<td>
            <a href='#' onclick=\"openModal5('" . $row['Dni'] . "')\">
                <img src='/Proyecto-master/Proyecto-master/img/pdf.png' alt='Descargar PDF'>
            </a>
            <div class='w3-container'>
                <div id='id-modal5-" . $row['Dni'] . "' class='w3-modal'>
                    <div class='w3-modal-content w3-card-4 w3-animate-zoom' style='max-width:600px'>
                        <header class='w3-container w3-white'> 
                            <span onclick=\"closeModal2('id-modal5-" . $row['Dni'] . "')\" class='w3-button w3-white w3-display-topright'>&times;</span>
                            <h2>Descargar PDF</h2>
                        </header>
                        <div id='-" . $row['Dni'] . "' class='w3-container'>
                            <div class='container'>
                                <form id='msform' action='generar_pdf.php' method='post'>
                                    <div class='form-card bg-white'>
                                        <div class='row'>
                                            
                                            <h1>Datos</h1>
                                            <div class='contiene'>
                                            <label class='container12'>Pedagogicos
                                            <input type='checkbox' checked='checked'>
                                            <span class='checkmark'></span>
                                            </label>
                                            <label class='container12'>Internacion
                                            <input type='checkbox'>
                                            <span class='checkmark'></span>
                                            </label>
                                            <label class='container12'>Domiciliarios
                                            <input type='checkbox'>
                                            <span class='checkmark'></span>
                                            </label>
                                            <label class='container12'>Academicos
                                            <input type='checkbox'>
                                            <span class='checkmark'></span>
                                            </label>
                                            </div>
        
                                            <label for='datosP'>Datos Pedagógicos:</label>
                                            <select name='datosP' id='datosP'>
                                                <option style='text-align:center;' value=''>Selecciona una opción</option>";

                                                $dni_1 = $row['Dni'];
                                                $sql2 = "SELECT Fecha_ingreso FROM datos_pedagogicos WHERE Dni = '$dni_1' ORDER BY Fecha_ingreso DESC";
                                                $consulta2 = $conn->prepare($sql2);

                                                if ($consulta2->execute()) {
                                                    while ($row2 = $consulta2->fetch()) {
                                                        $fechaOriginal1 = $row2['Fecha_ingreso'];
                                                        $parts = explode('-', $fechaOriginal1);
                                                        if (count($parts) === 3) {
                                                            $dia = intval($parts[2]);
                                                            $mes = intval($parts[1]);
                                                            $anio = intval($parts[0]);

                                                            $fechaOriginal1 = "$dia de " . $mesesEnEspanol[$mes] . " del $anio";
                                                        }
                                                        echo "<option style='text-align:center;' value='" . $row2['Fecha_ingreso'] . "'>" . $fechaOriginal1 . "</option>";
                                                    }
                                                }
                                                echo "</select>";

                                                echo "<label for='datosI'>Datos Internacion:</label>
                                    <select name='datosI' id='datosI'>
                                        <option style='text-align:center;' value=''>Selecciona una opción</option>";

                                                $dni_1 = $row['Dni'];

                                                $sql2 = "SELECT Fecha_ingreso FROM datos_internacion WHERE Dni = '$dni_1' ORDER BY Fecha_ingreso DESC";
                                                $consulta2 = $conn->prepare($sql2);
                                                if ($consulta2->execute()) {
                                                    while ($row2 = $consulta2->fetch()) {
                                                        $fechaOriginal1 = $row2['Fecha_ingreso'];
                                                        $parts = explode('-', $fechaOriginal1);
                                                        if (count($parts) === 3) {
                                                            $dia = intval($parts[2]);
                                                            $mes = intval($parts[1]);
                                                            $anio = intval($parts[0]);

                                                            $fechaOriginal1 = "$dia de " . $mesesEnEspanol[$mes] . " del $anio";
                                                        }
                                                        echo "<option style='text-align:center;' value='" . $row2['Fecha_ingreso'] . "'>" . $fechaOriginal1 . "</option>";
                                                    }
                                                }
                                                echo "</select>";
                                            ?><label for='datosD'>Datos Domiciliario:</label>
                                                <select name='datosD' id='datosD'>
                                                    <option style='text-align:center;' value=''>Selecciona una opción</option>";
                                                    <?php
                                                    $sql2 = "SELECT Fecha_ingreso FROM datos_domiciliario WHERE Dni = '$dni_1' ORDER BY Fecha_ingreso DESC";
                                                    $consulta2 = $conn->prepare($sql2);
                                                    if ($consulta2->execute()) {
                                                        while ($row2 = $consulta2->fetch()) {
                                                            $fechaOriginal1 = $row2['Fecha_ingreso'];
                                                            $parts = explode('-', $fechaOriginal1);
                                                            if (count($parts) === 3) {
                                                                $dia = intval($parts[2]);
                                                                $mes = intval($parts[1]);
                                                                $anio = intval($parts[0]);

                                                                $fechaOriginal1 = "$dia de " . $mesesEnEspanol[$mes] . " del $anio";
                                                            }
                                                            echo "<option style='text-align:center;' value='" . $row2['Fecha_ingreso'] . "'>" . $fechaOriginal1 . "</option>";
                                                        }
                                                    }
                                                    echo "</select>";
                                                    echo "</select>";
                                                    ?><label for='datosA'>Datos Academicos:</label>
                                                    <select name='datosA' id='datosA'>
                                                        <option style='text-align:center;' value=''>Selecciona una opción</option>";
                                            <?php
                                                $sql2 = "SELECT Fecha FROM datos_academ WHERE Dni = '$dni_1' ORDER BY Fecha DESC";
                                                $consulta2 = $conn->prepare($sql2);
                                                if ($consulta2->execute()) {
                                                    while ($row2 = $consulta2->fetch()) {
                                                        $fechaOriginal1 = $row2['Fecha'];
                                                        $parts = explode('-', $fechaOriginal1);
                                                        if (count($parts) === 3) {
                                                            $dia = intval($parts[2]);
                                                            $mes = intval($parts[1]);
                                                            $anio = intval($parts[0]);

                                                            $fechaOriginal1 = "$dia de " . $mesesEnEspanol[$mes] . " del $anio";
                                                        }
                                                        echo "<option style='text-align:center;' value='" . $row2['Fecha'] . "'>" . $fechaOriginal1 . "</option>";
                                                    }
                                                }
                                                echo "</select>";

                                                echo "
                                                            
                                    </div>
                                    </div> 
                                    <input type='hidden' name='dni' value='" . $row['Dni'] . "'>
          <input type='submit' name='next' class='next action-button' style='color:white;width: 100%; background-color:green; margin-top:15px' value='Generar PDF!' />
        </form>    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </td>";

                                                echo "<td class='acciones'>
          <a href='EditarA.php?id=" . $row['Dni'] . "'><img src='/Proyecto-master/Proyecto-master/img/lapiz.png' class='imagen-espaciada'></a>
          </td>";
                                            endif;
                                            if ($mostrarColumnaAccion2 || $mostrarColumnaAccion) :
                                                echo "<td class='acciones'>
          <a href='AgregarAnamnesis.php?id=" . $row['Dni'] . "'><img src='/Proyecto-master/Proyecto-master/img/area.png' class='imagen-espaciada'></a>
          </td>";


          echo "<td><a href='#' onclick=\"openModal6('" . $row['Dni'] . "')\">
          <img src='/Proyecto-master/Proyecto-master/img/carpeta.png'>
      </a>
          <div class='w3-container'>
              <div id='id-modal6-" . $row['Dni'] . "' class='w3-modal'>
                  <div class='w3-modal-content w3-card-4 w3-animate-zoom'>
                      <header class='w3-container w3-white'> 
                      <span onclick=\"closeModal3('id-modal6-" . $row['Dni'] . "')\" class='w3-button w3-white w3-display-topright'>&times;</span>
                      <h2>" . $row['Nombre'] . " " . $row['Apellido'] .  "</h2>
                      </header>
                      <div id='-" . $row['Dni'] . "' class='w3-container'>
                      <div class='container'>
                          <div class='form-control'>
                              <label for='search'><i class='icon-search'></i></label>
                                  <input class='table-filter' type='search' data-table='advanced-web-table' placeholder='Buscar...'>
                              </div>
                                              <!--  Table  -->
                                              <div class='table-responsive'>
                                                  <table id='table-id' class='table table-striped table-class'>
                                                      <thead>
                                                          <tr>
                                                              <th>Fecha</th>
                                                              <th>Observaciones</th>
                                                              <th>Contenido</th>                                                                                       
                                                              <th>Profesor</th>
                                                              <th><a href='Observaciones.php?id=" . $row['Dni'] . "'>
                                                              <img src='/Proyecto-master/Proyecto-master/img/mas.png' class='imagen-espaciada'>
                                                          </a>
                                                          </th>
                                                          </tr>
                                                      <tbody>";


                      $idviejo = $row['Dni'];
                      $sql2 = "SELECT *
FROM datos_academ
WHERE DNI = :idviejo
ORDER BY Fecha ASC;
";


                      // Usamos parámetros con consultas preparadas
                      $consulta2 = $conn->prepare($sql2);
                      $consulta2->bindParam(':idviejo', $idviejo, PDO::PARAM_INT); // Asignamos el valor de idviejo como entero
                      if ($consulta2->execute()) {
                          // Obtenemos el primer resultado del SELECT (si es que existe)
                          $row2 = $consulta2->fetch();
                      }



                      if ($consulta2->execute()) {
                          while ($row2 = $consulta2->fetch()) {
                              echo "<tr>";
                              $fechaOriginal = $row2['Fecha'];
                              $parts = explode('-', $fechaOriginal);
                              $dia = intval($parts[2]);
                              $mes = intval($parts[1]);
                              $anio = intval($parts[0]);

                              $fechaFormateada = "$dia de " . $mesesEnEspanol[$mes] . " del $anio";

                              echo "<td>" . $fechaFormateada . "</td>";
                              echo "<td>" . $row2['Observación'] . "</td>";
                              echo "<td>" . $row2['Contenido'] . "</td>";
                              echo "<td>" . $row2['Nombre_Profesor'] . "</td>";
                              echo "<td></td>";
                              echo "</tr>";
                          }
                      }
                      echo "</tbody>
                          </table>
                      </div>
                  </div>
              </div>
              </div>
              </div>
              </td>";



                                            endif;
                                            if (!$mostrarColumnaAccion2) :
                                                echo "<td></td>";
                                            endif;





                                            echo "</tr>";
                                        }
                                    }
                                            ?>

                                </tbody>
                            </table>
                            <?php
                            $totalFilas = 500; // Cambiar al total real de filas en la tabla
                            $itemsPorPagina = 10; // Cambiar a la cantidad deseada de ítems por página
                            $totalPaginas = ceil($totalFilas / $itemsPorPagina);

                            $enlacesMostrados = 5; // Cambiar al número deseado de enlaces mostrados en la paginación

                            $mitadEnlaces = floor($enlacesMostrados / 2);
                            $inicioRango = max(1, $paginaActual - $mitadEnlaces);
                            $finRango = min($totalPaginas, $paginaActual + $mitadEnlaces);
                            ?>

                            <div class="pagination">
                                <?php if ($paginaActual > 1) : ?>
                                    <a href='formularioAlumno.php?pagina=<?php echo $paginaActual - 1; ?>'>&lt; Anterior</a>
                                <?php endif; ?>

                                <?php if ($inicioRango > 1) : ?>
                                    <a href='formularioAlumno.php?pagina=1'>1</a>
                                    <?php if ($inicioRango > 2) : ?>
                                        <a class="pagination-dots">...</a>
                                    <?php endif; ?>
                                <?php endif; ?>

                                <?php for ($i = $inicioRango; $i <= $finRango; $i++) : ?>
                                    <?php $active = ($i == $paginaActual) ? 'active' : ''; ?>
                                    <a class='<?php echo $active; ?>' href='formularioAlumno.php?pagina=<?php echo $i; ?>'><?php echo $i; ?></a>
                                <?php endfor; ?>

                                <?php if ($finRango < $totalPaginas) : ?>
                                    <?php if ($finRango < $totalPaginas - 1) : ?>
                                        <a class="pagination-dots">...</a>
                                    <?php endif; ?>
                                    <a href='formularioAlumno.php?pagina=<?php echo $totalPaginas; ?>'><?php echo $totalPaginas; ?></a>
                                <?php endif; ?>

                                <?php if ($paginaActual < $totalPaginas) : ?>
                                    <a href='formularioAlumno.php?pagina=<?php echo $paginaActual + 1; ?>'>Siguiente
                                        &gt;</a>
                                <?php endif; ?>
                            </div>



                            <?php

                            echo "</div>";
                            ?>

                        </div>
                    </div>
                </div>

            </div>




            <!-- /.d-flex -->
        </div>

        <!-- /.col-md-6 -->
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