<?php



session_start();



?>



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
    <link href="\Proyecto-master\Proyecto-master\css\font-awesome.min.css">






</head>











<body class="hold-transition sidebar-mini" style="background-color: #f4f6f9;">







    <?php include 'aside.php'; ?>







    <div class="wrapper">



        <div class="content-wrapper">



            <section>



                <div class="content-header row">


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


                        <h2 style="text-align: center; vertical-align: middle;">Formulario Alumno</h2>


                    </label>







                </div><!-- /.container-fluid -->



            </section>







            <div class="content-header row" style="display: flex; justify-content: center;">
                <div class="col-md-4 col-xl-3" onclick="redirectTo('formularioAlumno.php', 'altas');" style="cursor: pointer;">
                    <div class="card bg-dark order-card">
                        <div class="card-block">
                            <h1 class="m-b-20">Dados de alta</h1>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-xl-3" onclick="redirectTo('formularioAlumno.php', 'internacion');" style="cursor: pointer;">
                    <div class="card bg-dark order-card">
                        <div class="card-block">
                            <h1 class="m-b-20">Internacion</h1>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-xl-3" onclick="redirectTo('formularioAlumno.php', 'domiciliario');" style="cursor: pointer;">
                    <div class="card bg-dark order-card">
                        <div class="card-block">
                            <h1 class="m-b-20">Domiciliario</h1>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-xl-3" onclick="redirectTo('formularioAlumno.php', 'todos');" style="cursor: pointer;">
                    <div class="card bg-dark order-card">
                        <div class="card-block">
                            <h1 class="m-b-20">Todos</h1>
                        </div>
                    </div>
                </div>

                <script>
                    function redirectTo(url, valor) {
                        window.location = url + '?valor=' + encodeURIComponent(valor);
                    }
                </script>

            </div>

            <?php
            // Supongamos que estás en formularioAlumno.php

            if ($_SERVER["REQUEST_METHOD"] == "GET") {
                if (isset($_GET['valor'])) {
                    $valor = $_GET['valor'];
                }
            }
            ?>

            <div class="">
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


                                        <?php if ($mostrarColumnaAccion2) : ?>



                                            <th style="text-align: center; vertical-align: middle;">Datos</th>



                                        <?php endif; ?>


                                        <th style="text-align: center; vertical-align: middle;">Estado</th>
                                        <th style="text-align: center; vertical-align: middle;">DNI</th>



                                        <th style="text-align: center; vertical-align: middle;">Nombre</th>



                                        <th style="text-align: center; vertical-align: middle;">Apellido</th>



                                        <th style="text-align: center; vertical-align: middle;">Edad</th>



                                        <?php if ($mostrarColumnaAccion || $mostrarColumnaAccion1) : ?>



                                            <th style="text-align: center; vertical-align: middle;">Datos</th>



                                            <th style="text-align: center; vertical-align: middle;">PDF</th>



                                            <th style="text-align: center; vertical-align: middle;">Acciones</th>

                                        <?php endif; ?>



                                        <?php if ($mostrarColumnaAccion || $mostrarColumnaAccion2) : ?>



                                            <th style="text-align: center; vertical-align: middle;">Obs</th>



                                            <th style="text-align: center; vertical-align: middle;">Anamnesis</th>



                                            <th style="text-align: center; vertical-align: middle;">PDF</th>



                                        <?php endif;

                                        ?>
                                        <th style="text-align: center; vertical-align: middle;">Acciones</th>
                                        <?php

                                        if (!$mostrarColumnaAccion2) :  ?>



                                            <th style="text-align: center; vertical-align: middle;">



                                                <a href='agregarA.php'>







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






                                    if ($valor == 'internacion') {
                                        $sql1 = "SELECT dp.*, pf.Fecha_registro, pf.Fecha_alta, pf.Motivo, pf.Estado
         FROM datos_personales dp
         JOIN (
            SELECT Dni, Fecha_registro, Fecha_alta, Motivo, Estado,
                   ROW_NUMBER() OVER (PARTITION BY Dni ORDER BY Fecha_registro) as row_num
            FROM personales_fechas
            WHERE Estado = 'Internacion' && Fecha_alta IS NULL
         ) AS pf ON dp.Dni = pf.Dni
         WHERE pf.row_num = 1
         LIMIT $inicio, $itemsPorPagina;";

                                    } elseif ($valor == 'domiciliario') {

                                        $sql1 = "SELECT dp.*, pf.Fecha_registro, pf.Fecha_alta, pf.Motivo, pf.Estado
         FROM datos_personales dp
         JOIN (
            SELECT Dni, Fecha_registro, Fecha_alta, Motivo, Estado,
                   ROW_NUMBER() OVER (PARTITION BY Dni ORDER BY Fecha_registro) as row_num
            FROM personales_fechas
            WHERE Estado = 'Domiciliario' && Fecha_alta IS NULL
         ) AS pf ON dp.Dni = pf.Dni
         WHERE pf.row_num = 1
         LIMIT $inicio, $itemsPorPagina;";
                                    } elseif ($valor == 'altas') {

                                        $sql1 = "SELECT dp.*, pf.Fecha_registro, pf.Fecha_alta, pf.Motivo, pf.Estado
         FROM datos_personales dp
         JOIN (
            SELECT Dni, Fecha_registro, Fecha_alta, Motivo, Estado
            FROM (
                SELECT Dni, Fecha_registro, Fecha_alta, Motivo, Estado,
                       ROW_NUMBER() OVER (PARTITION BY Dni ORDER BY Fecha_registro DESC) as row_num
                FROM personales_fechas
                WHERE Estado = 'Dado de alta'
            ) AS ranked
            WHERE row_num = 1 AND Fecha_alta IS NOT NULL
         ) AS pf ON dp.Dni = pf.Dni
         LEFT JOIN personales_fechas pf2 ON dp.Dni = pf2.Dni AND pf2.Fecha_registro > pf.Fecha_registro
         WHERE pf2.Dni IS NULL
         LIMIT $inicio, $itemsPorPagina;";





                                    } else {
                                        $sql1 = "SELECT * FROM datos_personales ORDER BY fecha_act DESC LIMIT $inicio, $itemsPorPagina;";
                                    }




                                    $consulta = $conn->prepare($sql1);







                                    if ($consulta->execute()) {



                                        while ($row = $consulta->fetch()) {



                                            echo "<tr>";

                                            if ($mostrarColumnaAccion2) :



                                                echo "<td style='text-align: center; vertical-align: middle;'><a href='#' onclick=\"openModal13#('" . $row['Dni'] . "')\">



                                                <img src='/Proyecto-master/Proyecto-master/img/informacion-personal.png'>

            

                                            </a>

            

                                                <div class='w3-container'>

            

                                                    <div id='id-modal13-" . $row['Dni'] . "' class='w3-modal'>

            

                                                        <div class='w3-modal-content w3-card-4 w3-animate-zoom'>

            

                                                            <header class='w3-container w3-white'> 

            

                                                            <span onclick=\"closeModal('id-modal13-" . $row['Dni'] . "')\" class='w3-button w3-white w3-display-topright'>&times;</span>

            

                                                            <h2 style='text-align: center; vertical-align: middle;'>" . $row['Nombre'] . " " . $row['Apellido'] .  "</h2>

            

                                                            </header>

            

                                                            <div id='-" . $row['Dni'] . "' class='w3-container'>

            

                                                            <div class='container'>

            

                                                                <div class='form-control'>

            

                                                                    <label for='search'><i class='icon-search'></i></label>

            

                                                                        <input class='table-filter' type='search' data-table='advanced-web-table' placeholder='Buscar...'>

            

                                                                    </div>

            

                                                                                    <!--  Table  -->

            

                                                                                    <div class='table-responsive'>

            

                                                                                        

            

                                                            </div>

            

                                                        </div>

            

                                                    </div>

            

                                                    </div>

            

                                                    </div>

            

                                                    </td>";



                                            endif;





                                            if ($mostrarColumnaAccion || $mostrarColumnaAccion1) :



                                                echo "<td style='text-align: center; vertical-align: middle;'><a href='#' onclick=\"openModal1('" . $row['Dni'] . "')\">



                                    <img src='/Proyecto-master/Proyecto-master/img/observar.png'>



                                </a>



                                    <div class='w3-container'>



                                        <div id='id-modal1-" . $row['Dni'] . "' class='w3-modal'>



                                            <div class='w3-modal-content w3-card-4 w3-animate-zoom'>



                                                <header class='w3-container w3-white'> 



                                                <span onclick=\"closeModal('id-modal1-" . $row['Dni'] . "')\" class='w3-button w3-white w3-display-topright'>&times;</span>



                                                <h2 style='text-align: center; vertical-align: middle;'>" . $row['Nombre'] . " " . $row['Apellido'] .  "</h2>



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



                                                                                        <th style='text-align: center; vertical-align: middle;'>Fecha</th>



                                                                                        <th style='text-align: center; vertical-align: middle;'>Observaciones</th>



                                                                                        <th style='text-align: center; vertical-align: middle;'>Contenido</th>                                                                                       



                                                                                        <th style='text-align: center; vertical-align: middle;'>Profesor</th>



                                                                                        <th style='text-align: center; vertical-align: middle;'>Acciones</th>



                                                                                        <th style='text-align: center; vertical-align: middle;'><a href='Observaciones.php?id=" . $row['Dni'] . "'>



                                                                                        <img src='/Proyecto-master/Proyecto-master/img/mas.png' class='imagen-espaciada'>



                                                                                    </a>



                                                                                    </th>



                                                                                    </tr>



                                                                                <tbody>";











                                                $idviejo = $row['Dni'];



                                                $sql2 = "SELECT *



                 FROM datos_academ



                 WHERE DNI = :idviejo



                 ORDER BY Fecha DESC;



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







                                                        echo "<td style='text-align: center; vertical-align: middle;' >" . $fechaFormateada . "</td>";



                                                        echo "<td style='text-align: center; vertical-align: middle;'>" . $row2['Observación'] . "</td>";



                                                        echo "<td style='text-align: center; vertical-align: middle;'>" . $row2['Contenido'] . "</td>";



                                                        echo "<td style='text-align: center; vertical-align: middle;'>" . $row2['Nombre_Profesor'] . "</td>";



                                                        echo "<td class='acciones' style='text-align: center; vertical-align: middle;'>



                                                        <a href='txt-Editar-Obs.php?id=" . $row2['ID'] . "&dni=" . $row['Dni'] . "'><img src='/Proyecto-master/Proyecto-master/img/lapiz.png' class='imagen-espaciada'></a>



                                                        </td>";



                                                        echo "<td style='text-align: center; vertical-align: middle;'></td>";



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






                                            echo "<td style='text-align: center; vertical-align: middle;'>";



                                            $sql19 = "SELECT * FROM personales_fechas WHERE Dni = :dni ORDER BY Fecha_registro DESC LIMIT 1";
                                            $consulta2 = $conn->prepare($sql19);
                                            $consulta2->bindParam(':dni', $row['Dni']); // Corregir aquí
                                            if ($consulta2->execute()) {
                                                while ($row2 = $consulta2->fetch()) {
                                                    if ($row2['Fecha_alta'] != null) {
                                                        echo '<span class="badge rounded-pill bg-pink" style="font-size: 14px; width: 120px;">DADO DE ALTA</span>';
                                                    } else if ($row2['Estado'] == 'Internacion') {
                                                        echo '<span class="badge rounded-pill bg-success" style="font-size: 14px; width: 120px;">INTERNADO</span>';
                                                    } elseif ($row2['Estado'] == 'Domiciliario') {
                                                        echo '<span class="badge rounded-pill bg-info" style="font-size: 14px; width: 120px;">DOMICILIARIO</span>';
                                                    }
                                                }
                                            }


                                            echo "</td>";


                                            echo "<td style='text-align: center; vertical-align: middle;'>" . $row['Dni'] . "</td>";



                                            echo "<td style='text-align: center; vertical-align: middle;'>" . $row['Nombre'] . "</td>";



                                            echo "<td style='text-align: center; vertical-align: middle;'>" . $row['Apellido'] . "</td>";



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



                                            echo "<td style='text-align: center; vertical-align: middle;'>" . $resultadoEdad2['edadAnios'] . " años " . $resultadoEdad2['edadMeses'] . " meses</td>";



                                            // CALCULO DE EDAD--------------------------------







                                            if ($mostrarColumnaAccion || $mostrarColumnaAccion1) :



                                                echo "<td style='text-align: center; vertical-align: middle;'>



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



                                                            <th style='text-align: center; vertical-align: middle;'>DNI</th>



                                                            <th style='text-align: center; vertical-align: middle;'>Apellido</th>



                                                            <th style='text-align: center; vertical-align: middle;'>Nombre</th>



                                                            <th style='text-align: center; vertical-align: middle;'>Genero</th>



                                                            <th style='text-align: center; vertical-align: middle;'>Domicilio</th>



                                                            <th style='text-align: center; vertical-align: middle;'>Fecha nacimiento</th>



                                                            <th style='text-align: center; vertical-align: middle;'>Nombre del Tutor</th>



                                                            <th style='text-align: center; vertical-align: middle;'>Edad</th>



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



                                                        echo "<td style='text-align: center; vertical-align: middle;'>" . $row2['Dni'] . "</td>";



                                                        echo "<td style='text-align: center; vertical-align: middle;'>" . $row2['Apellido'] . "</td>";



                                                        echo "<td style='text-align: center; vertical-align: middle;'>" . $row2['Nombre'] . "</td>";



                                                        echo "<td style='text-align: center; vertical-align: middle;'>" . $row2['Sexo'] . "</td>";



                                                        echo "<td style='text-align: center; vertical-align: middle;'>" . $row2['Domicilio'] . "</td>";



                                                        $fechaOriginal1 = $row2['Fecha_nacimiento'];



                                                        $parts = explode('-', $fechaOriginal1);



                                                        if (count($parts) === 3) {



                                                            $dia = intval($parts[2]);



                                                            $mes = intval($parts[1]);



                                                            $anio = intval($parts[0]);







                                                            $fechaOriginal1 = "$dia de " . $mesesEnEspanol[$mes] . " del $anio";
                                                        }



                                                        echo "<td style='text-align: center; vertical-align: middle;'>" . $fechaOriginal1 . "</td>";



                                                        echo "<td style='text-align: center; vertical-align: middle;'>" . $row2['Nombre_del_tutor'] . "</td>";







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



                                                        echo "<td style='text-align: center; vertical-align: middle;'>" . $resultadoEdad2['edadAnios'] . " años " . $resultadoEdad2['edadMeses'] . " meses</td>";



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





                                    <th style='text-align: center; vertical-align: middle;'>Fecha Registro</th>



                                    <th style='text-align: center; vertical-align: middle;'>Escuela</th>



                                    <th style='text-align: center; vertical-align: middle;'>Grado</th>



                                    <th style='text-align: center; vertical-align: middle;'>Escolaridad?</th>



                                    <th style='text-align: center; vertical-align: middle;'>Esc. comun/especial?</th>



                                    <th style='text-align: center; vertical-align: middle;'>Lectura continua?</th>



                                    <th style='text-align: center; vertical-align: middle;'>Interpreta textos?</th>







                                    <th style='text-align: center; vertical-align: middle;'>Lectura y escritura?</th>







                                    <th style='text-align: center; vertical-align: middle;'>Resuelve operaciones basicas?</th>





                                    <th style='text-align: center; vertical-align: middle;'>Acciones</th>



                                </tr>



                            </thead>



                            <tbody>";







                                                $dniviejo = $row['Dni'];







                                                $sql2 = "SELECT *
         FROM datos_pedagogicos
         WHERE $dniviejo = Dni
         ORDER BY fecha_registro DESC;";








                                                $consulta2 = $conn->prepare($sql2);







                                                if ($consulta2->execute()) {



                                                    while ($row2 = $consulta2->fetch()) {



                                                        echo "<tr>";




                                                        $fechaOriginal1 = $row2['Fecha_registro'];



                                                        $parts = explode('-', $fechaOriginal1);



                                                        if (count($parts) === 3 && $parts[0] > 0 && $parts[1] > 0 && $parts[2] > 0) {



                                                            $dia = intval($parts[2]);



                                                            $mes = intval($parts[1]);



                                                            $anio = intval($parts[0]);



                                                            $fechaOriginal1 = "$dia de " . $mesesEnEspanol[$mes] . " del $anio";
                                                        }



                                                        echo "<td style='text-align: center; vertical-align: middle;'>" . $fechaOriginal1 . "</td>";



                                                        echo "<td style='text-align: center; vertical-align: middle;'>" . $row2['escRef'] . "</td>";



                                                        echo "<td style='text-align: center; vertical-align: middle;'>" . $row2['Grado'] . "</td>";



                                                        echo "<td style='text-align: center; vertical-align: middle;'>" . $row2['poseeEsc'] . "</td>";



                                                        if ($row2['escComun'] == "Si") {



                                                            echo "<td style='text-align: center; vertical-align: middle;'> Comun </td>";
                                                        } else {



                                                            echo "<td style='text-align: center; vertical-align: middle;'> Especial </td>";
                                                        }



                                                        echo "<td style='text-align: center; vertical-align: middle;'>" . $row2['lectContinua'] . "</td>";



                                                        echo "<td style='text-align: center; vertical-align: middle;'>" . $row2['interpTextos'] . "</td>";



                                                        echo "<td style='text-align: center; vertical-align: middle;'>" . $row2['lectyescri'] . "</td>";



                                                        echo "<td style='text-align: center; vertical-align: middle;'>" . $row2['resuelvOpBas'] . "</td>";



                                                        echo "<td style='text-align: center; vertical-align: middle;'>";





                                                        echo "<a href='#' onclick=\"openModal10('" . $row2['Fecha_registro'] . "')\">

    <img src='/Proyecto-master/Proyecto-master/img/lapiz.png' alt='Editar'>";

                                                        echo "</a>

    <div class='w3-container'>



        <div id='id-modal10-" . $row2['Fecha_registro'] . "' class='w3-modal'>



            <div class='w3-modal-content w3-card-4 w3-animate-zoom' style='max-width:600px'>



                <header class='w3-container w3-white'> 



                <span onclick=\"closeModal1('id-modal10-" . $row2['Fecha_registro'] .  "')\" class='w3-button w3-white w3-display-topright'>&times;</span>



                <h2>Editar</h2>



                </header>



                <div id='-" . $row2['Fecha_registro'] . "' class='w3-container'>



                <div class='container'>



                <form id='msform' action='EditarDP.php' method='post'>



                <div class='form-card'>



                <div class='row'>

                    <div class='col'>

                        <label for='dni'>DNI</label>

                        <input name='dni' type='text' class='fieldlabels' id='dni' value='" . $row['Dni'] . "' style='text-align:center; background-color:antiquewhite;' readonly>

                    </div>

            

                    <div class='col'>

                        <label for='fechaI'>Fecha Ingreso</label>

                        <input name='fechaI' type='date' class='fieldlabels' id='fechaI' value='" . $row2['Fecha_registro'] . "' style='text-align:center; background-color:antiquewhite;' readonly>

                    </div>

                </div>

            

                <!-- Filas que deseas mantener -->

                <div class='row'>

                    <div class='col'>

                        <label for='escRef'>Escuela de Referencia</label>

                        <input name='escRef' type='text' class='fieldlabels' id='escRef' value='" . $row2['escRef'] . "' style='text-align:center;'>

                    </div>

                </div>

            

                <div class='row'>

                    <div class='col'>

                        <label for='Grado'>Grado</label>

                        <input name='Grado' type='text' class='fieldlabels' id='Grado' value='" . $row2['Grado'] . "'style='text-align:center;'>

                    </div>

                    <div class='col'>

                        <label for='poseeEsc'>Posee Escolaridad</label>

                        <input name='poseeEsc' type='text' class='fieldlabels' id='poseeEsc' value='" . $row2['poseeEsc'] . "'style='text-align:center;'>

                    </div>

                    <div class='col'>

                        <label for='escComun'>Tipo de Escuela</label>

                        <input name='escComun' type='text' class='fieldlabels' id='escComun' value='" . ($row2['escComun'] == 'Si' ? 'Comun' : 'Especial') . "'style='text-align:center;'>

                    </div>

                </div>



            

                <div class='row'>

                    <div class='col'>

                        <label for='lectContinua'>Lectura Continua</label>

                        <input name='lectContinua' type='text' class='fieldlabels' id='lectContinua' value='" . $row2['lectContinua'] . "'style='text-align:center;'>

                    </div>

                    <div class='col'>

                        <label for='interpTextos'>Interpretación de Textos</label>

                        <input name='interpTextos' type='text' class='fieldlabels' id='interpTextos' value='" . $row2['interpTextos'] . "'style='text-align:center;'>

                    </div>

                </div>

            

                <div class'row'>

                    <div class='col'>

                        <label for='lectyescri'>Lectura y Escritura</label>

                        <input name='lectyescri' type='text' class='fieldlabels' id='lectyescri' value='" . $row2['lectyescri'] . "'style='text-align:center;'>

                    </div>

                    <div class='col'>

                        <label for='resuelvOpBas'>Resolución de Problemas Básicos</label>

                        <input name='resuelvOpBas' type='text' class='fieldlabels' id='resuelvOpBas' value='" . $row2['resuelvOpBas'] . "'style='text-align:center;'>

                    </div>

                </div>

                <!-- Fin de filas que se mantienen -->

            

            </div>

            



    <input type='submit' name='next' class='next action-button' style='color:white;width: 100%; background-color:green; margin-top:15px' value='Guardar y salir!' />

</form>



            </div>



        </div>



        </div>



        </div>";

                                                        echo "</td>";



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



                            <tr>";

                                                $est = "Internacion";

                                            ?>



                                                <?php

                                                echo "
                                                <th style='text-align: center; vertical-align: middle;'>Fecha de Registro</th>


                                <th style='text-align: center; vertical-align: middle;'>Sala</th>



                                <th style='text-align: center; vertical-align: middle;'>Habitacion</th>



                                <th style='text-align: center; vertical-align: middle;'>Cama</th>



                                <th style='text-align: center; vertical-align: middle;'>Discapacidad</th>



                                <th style='text-align: center; vertical-align: middle;'>Observacion</th>



                                <th style='text-align: center; vertical-align: middle;'>Diagnostico</th>



                                <th style='text-align: center; vertical-align: middle;'>Acciones</th>



                            </tr>



                        </thead>



                        <tbody>";







                                                $dniviejo = $row['Dni'];



















                                                $sql2 = "SELECT *



                                    FROM datos_internacion



                                    WHERE Dni = $dniviejo



                                    ORDER BY Fecha_registro DESC";







                                                $consulta2 = $conn->prepare($sql2);







                                                if ($consulta2->execute()) {



                                                    while ($row2 = $consulta2->fetch()) {



                                                        echo "<tr>";


                                                        $fechaOriginal = $row2['Fecha_registro'];



                                                        $parts = explode('-', $fechaOriginal);



                                                        $dia = intval($parts[2]);



                                                        $mes = intval($parts[1]);



                                                        $anio = intval($parts[0]);







                                                        $fechaFormateada = "$dia de " . $mesesEnEspanol[$mes] . " del $anio";







                                                        echo "<td style='text-align: center; vertical-align: middle;'>" . $fechaFormateada . "</td>";


                                                        echo "<td style='text-align: center; vertical-align: middle;'>" . $row2['Sala'] . "</td>";



                                                        echo "<td style='text-align: center; vertical-align: middle;'>" . $row2['Habitación'] . "</td>";



                                                        echo "<td style='text-align: center; vertical-align: middle;'>" . $row2['Cama'] . "</td>";



                                                        echo "<td style='text-align: center; vertical-align: middle;'>" . $row2['Discapacidad'] . "</td>";



                                                        echo "<td style='text-align: center; vertical-align: middle;'>" . $row2['Observacion'] . "</td>";



                                                        $fechaIngresoFila = $row2['Fecha_registro']; // Utiliza la fecha de ingreso como identificador único







                                                        echo "<td style='text-align: center; vertical-align: middle;'>



                    <span id='diagnosticoSpan-$fechaIngresoFila' style='display: none;'>" . $row2['Diagnostico'] . "</span>



                    <button style='border: none; background: none;' onclick='toggleDiagnostico1(\"$fechaIngresoFila\")'>



                      <img style='width: 100%;



                      background: none;



                      border: none;



                      outline:none ;



                      ' src='/Proyecto-master/Proyecto-master/img/ver.png' id='img-mostrar-$fechaIngresoFila'>



                    </button>



                  </td>";








                                                        $fechaIngresoFila1 = $row2['Fecha_registro']; // Utiliza la fecha de ingreso como identificador único









                                                        echo "<td style='text-align: center; vertical-align: middle;'>

                                                        ";

                                                        if ($fechaOriginal1 > 0) {



                                                            echo "<a href='#' onclick=\"openModal9('" . $row2['Fecha_registro'] . "')\">

    <img src='/Proyecto-master/Proyecto-master/img/lapiz.png' alt='Editar'>";

                                                            echo "</a>

    <div class='w3-container'>



        <div id='id-modal9-" . $row2['Fecha_registro'] . "' class='w3-modal'>



            <div class='w3-modal-content w3-card-4 w3-animate-zoom' style='max-width:600px'>



                <header class='w3-container w3-white'> 



                <span onclick=\"closeModal1('id-modal9-" . $row2['Fecha_registro'] .  "')\" class='w3-button w3-white w3-display-topright'>&times;</span>



                <h2>Editar</h2>



                </header>



                <div id='-" . $row2['Fecha_registro'] . "' class='w3-container'>



                <div class='container'>



                <form id='msform' action='EditarID.php' method='post'>



                



                



                    <div class='form-card'>



                    <div class='row'>

                    <div class='col'>

                        <label for='dni'>DNI</label>

                        <input name='dni' type='text' class='fieldlabels' id='dni' value='" . $row['Dni'] . "' style='text-align:center; background-color:antiquewhite;' readonly>

                    </div>

                        <input name='fechaI' type='hidden' class='fieldlabels' id='fechaI' value='" . $row2['Fecha_registro'] . "' style='text-align:center; background-color:antiquewhite;' readonly>


                </div>

                

                <div class='row'>

                    <div class='col'>

                        <label for='sala'>Sala</label>

                        <input name='sala' type='text' class='fieldlabels' id='sala' value='" . $row2['Sala'] . "' style='text-align:center;'>

                    </div>

                    <div class='col'>

                        <label for='habitacion'>Habitacion</label>

                        <input name='habitacion' type='text' class='fieldlabels' id='habitacion' value='" . $row2['Habitación'] . "' style='text-align:center;'>

                    </div>

                    <div class='col'>

                        <label for='cama'>Cama</label>

                        <input name='cama' type='text' class='fieldlabels' id='cama' value='" . $row2['Cama'] . "' style='text-align:center;'>

                    </div>

                </div>

                

                <div class='row'>

                    <div class='col'>

                        <label for='disc1'>Discapacidad</label>

                        <input name='disc1' type='text' class='fieldlabels' id='disc1' value='" . $row2['Discapacidad'] . "' style='text-align:center;'>

                    </div>

                    <div class='col'>

                        <label for='obs'>Observacion</label>

                        <input name='obs1' type='text' class='fieldlabels' id='obs1' value='" . $row2['Observacion'] . "' style='text-align:center;'>

                    </div>

                </div>

                

                <div class='row'>

                    <div class='col'>

                        <label for='diag'>Diagnostico</label>

                        <input name='diag1' type='text' class='fieldlabels' id='diag1' value='" . $row2['Diagnostico'] . "' style='text-align:center;'>

                    </div>



                </div>


                
                    </div> 



                    <input type='hidden' name='estado' value='<?php echo $estado; ?>'>



                    <input type='submit' name='next' class='next action-button' style='color:white;width: 100%; background-color:green; margin-top:15px' value='Guardar y salir!' />

                    

                    </form>    



            </div>



        </div>



        </div>



        </div>";
                                                        }



                                                        echo "</td>";











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



                            <tr>";

                                                $est = "Domiciliario";

                                                ?>

                                                <?php

                                                echo "


                                <th style='text-align: center; vertical-align: middle;'>Fecha de Registro</th>



                                <th style='text-align: center; vertical-align: middle;'>Direccion</th>



                                <th style='text-align: center; vertical-align: middle;'>Discapacidad</th>



                                <th style='text-align: center; vertical-align: middle;'>Observacion</th>



                                <th style='text-align: center; vertical-align: middle;'>Diagnostico</th>



                               


                                <th style='text-align: center; vertical-align: middle;'>Acciones</th>



                                



                            </tr>



                        </thead>



                        <tbody>";







                                                $dniviejo = $row['Dni'];















                                                $sql2 = "SELECT *



                                    FROM datos_domiciliario WHERE $dniviejo = Dni 



                                    ORDER BY Fecha_registro DESC";







                                                $consulta2 = $conn->prepare($sql2);







                                                if ($consulta2->execute()) {







                                                    while ($row2 = $consulta2->fetch()) {



                                                        echo "<tr>";

                                                        $fechaOriginal = $row2['Fecha_registro'];



                                                        $parts = explode('-', $fechaOriginal);



                                                        $dia = intval($parts[2]);



                                                        $mes = intval($parts[1]);



                                                        $anio = intval($parts[0]);







                                                        $fechaFormateada = "$dia de " . $mesesEnEspanol[$mes] . " del $anio";







                                                        echo "<td style='text-align: center; vertical-align: middle;'>" . $fechaFormateada . "</td>";



                                                        echo "<td style='text-align: center; vertical-align: middle;'>" . $row2['Direccion'] . "</td>";



                                                        echo "<td style='text-align: center; vertical-align: middle;'>" . $row2['Discapacidad'] . "</td>";



                                                        echo "<td style='text-align: center; vertical-align: middle;'>" . $row2['Observacion'] . "</td>";



                                                        $fechaIngresoFila3 = $row2['Fecha_registro']; // Utiliza la fecha de ingreso como identificador único







                                                        echo "<td style='text-align: center; vertical-align: middle;'>



                    <span id='diagnosticoSpan2-$fechaIngresoFila3' style='display: none;'>" . $row2['Diagnostico'] . "</span>



                    <button style='border: none; background: none;' onclick='toggleDiagnostico2(\"$fechaIngresoFila3\")'>



                      <img style='width: 100%;



                      background: none;



                      border: none;



                      outline:none ;



                      ' src='/Proyecto-master/Proyecto-master/img/ver.png' id='img-mostrar2-$fechaIngresoFila3'>



                    </button>



                  </td>";



                                                        $fechaIngresoFila4 = $row2['Fecha_registro']; // Utiliza la fecha de ingreso como identificador único

                                                        echo "<td style='text-align: center; vertical-align: middle;'>

                                                        

";

                                                        if ($fechaOriginal1 > 0) {



                                                            echo "<a href='#' onclick=\"openModal8('" . $row2['Fecha_registro'] . "')\">

    <img src='/Proyecto-master/Proyecto-master/img/lapiz.png' alt='Dar de Alta'>";

                                                            echo "</a>

    <div class='w3-container'>



        <div id='id-modal8-" . $row2['Fecha_registro'] . "' class='w3-modal'>



            <div class='w3-modal-content w3-card-4 w3-animate-zoom' style='max-width:600px'>



                <header class='w3-container w3-white'> 



                <span onclick=\"closeModal1('id-modal8-" . $row2['Fecha_registro'] .  "')\" class='w3-button w3-white w3-display-topright'>&times;</span>



                <h2>Editar</h2>



                </header>



                <div id='-" . $row2['Fecha_registro'] . "' class='w3-container'>



                <div class='container'>



                <form id='msform' action='EditarID.php' method='post'>



                



                



                    <div class='form-card'>



                    <div class='row'>

                    <div class='col'>

                        <label for='dni'>DNI</label>

                        <input name='dni' type='text' class='fieldlabels' id='dni' value='" . $row['Dni'] . "' style='text-align:center; background-color:antiquewhite;' readonly>

                    </div>

                    

                    <div class='col'>

                        <label for='fechaI'>Fecha Ingreso</label>

                        <input name='fechaI' type='date' class='fieldlabels' id='fechaI' value='" . $row2['Fecha_registro'] . "' style='text-align:center; background-color:antiquewhite;' readonly>

                    </div>

                </div>

                

                <div class='row'>

                    <div class='col'>

                        <label for='dire'>Direccion</label>

                        <input name='dire' type='text' class='fieldlabels' id='dire' value='" . $row2['Direccion'] . "' style='text-align:center;'>

                    </div>

                </div>

                

                <div class='row'>

                    <div class='col'>

                        <label for='disc'>Discapacidad</label>

                        <input name='disc' type='text' class='fieldlabels' id='disc' value='" . $row2['Discapacidad'] . "' style='text-align:center;'>

                    </div>

                    <div class='col'>

                        <label for='obs'>Observacion</label>

                        <input name='obs' type='text' class='fieldlabels' id='obs' value='" . $row2['Observacion'] . "' style='text-align:center;'>

                    </div>

                </div>

                

                <div class='row'>

                    <div class='col'>

                        <label for='diag'>Diagnostico</label>

                        <input name='diag' type='text' class='fieldlabels' id='diag' value='" . $row2['Diagnostico'] . "' style='text-align:center;'>

                    </div>

                    

                    <div class='col'>

                        <label for='fecha'>Fecha Alta</label>

                        <input name='fechaID' type='date' class='fieldlabels' id='fechaID' placeholder='fecha' value='" . $row2['Fecha_alta'] . "' style='text-align:center;'>

                    </div>

                </div>

                

                <div class='row'>

                    <div class='col'>

                        <label for='motivo'>Motivo</label>

                        <input name='motivoID' type='text' class='fieldlabels' id='motivoID' placeholder='motivo' value='" . $row2['Motivo'] . "' style='text-align:center;'>

                    </div>

                </div>

                



                    </div> 



                    <input type='submit' name='next' class='next action-button' style='color:white;width: 100%; background-color:green; margin-top:15px' value='Guardar y salir!' />                                            </form>    



            </div>



        </div>



        </div>



        </div>";
                                                        } else {



                                                            echo "<a href='#' onclick=\"openModal4('" . $row2['Fecha_registro'] . "')\">



    <img src='/Proyecto-master/Proyecto-master/img/alta1.png' alt='Dar de Alta'>";

                                                            echo "</a>

    <div class='w3-container'>



        <div id='id-modal4-" . $row2['Fecha_registro'] . "' class='w3-modal'>



            <div class='w3-modal-content w3-card-4 w3-animate-zoom' style='max-width:600px'>



                <header class='w3-container w3-white'> 



                <span onclick=\"closeModal1('id-modal4-" . $row2['Fecha_registro'] .  "')\" class='w3-button w3-white w3-display-topright'>&times;</span>



                <h2>Dar de alta</h2>



                </header>



                <div id='-" . $row2['Fecha_registro'] . "' class='w3-container'>



                <div class='container'>



                <form id='msform' action='DardeAltaD.php' method='post'>



                



                



                    <div class='form-card'>



                        <div class='row'>



                            <label for='dni'>DNI</label>



                            <input name='dni' type='text' class='fieldlabels' id='dni' value='" . $row['Dni'] . "' style='text-align:center; background-color:antiquewhite;' readonly>



                            <label for='fechaI'>Fecha Ingreso</label>



                            <input name='fechaI' type='date' class='fieldlabels' id='fechaI' value='" . $row2['Fecha_registro'] . "' style='text-align:center; background-color:antiquewhite;' readonly>



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



        </div>";
                                                        }



                                                        echo "</td>";



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



                                                echo "<td style='text-align: center; vertical-align: middle;'>



            <a href='#' onclick=\"openModal5('" . $row['Dni'] . "')\">



                <img src='/Proyecto-master/Proyecto-master/img/pdf.png' alt='Descargar PDF'>



            </a>



            <div class='w3-container'>



                <div id='id-modal5-" . $row['Dni'] . "' class='w3-modal'>



                    <div class='w3-modal-content w3-card-4 w3-animate-zoom' style='max-width:600px'>



                        <header class='w3-container w3-white'> 



                            <span onclick=\"closeModal2('id-modal5-" . $row['Dni'] . "')\" class='w3-button w3-white w3-display-topright'>&times;</span>



                            <h2 style='text-align:center;'>Descargar PDF</h2>



                        </header>



                        <div id='-" . $row['Dni'] . "' class='w3-container'>



                            <div class='container'>



                                <form id='msform' action='generar_pdf.php' method='post'>



                                    <div class='form-card bg-white'>



                                        <div class='row'>



                                            <label for='datosP'>Datos Pedagógicos:</label>



                                            <select name='datosP' id='datosP'>



                                                <option style='text-align:center;' value=''>Selecciona una opción</option>";







                                                $dni_1 = $row['Dni'];



                                                $sql2 = "SELECT Fecha_registro FROM datos_pedagogicos WHERE Dni = '$dni_1' ORDER BY Fecha_registro DESC";



                                                $consulta2 = $conn->prepare($sql2);







                                                if ($consulta2->execute()) {



                                                    while ($row2 = $consulta2->fetch()) {



                                                        $fechaOriginal1 = $row2['Fecha_registro'];



                                                        $parts = explode('-', $fechaOriginal1);



                                                        if (count($parts) === 3) {



                                                            $dia = intval($parts[2]);



                                                            $mes = intval($parts[1]);



                                                            $anio = intval($parts[0]);







                                                            $fechaOriginal1 = "$dia de " . $mesesEnEspanol[$mes] . " del $anio";
                                                        }



                                                        echo "<option style='text-align:center;' value='" . $row2['Fecha_registro'] . "'>" . $fechaOriginal1 . "</option>";
                                                    }
                                                }



                                                echo "</select>";







                                                echo "<label for='datosI'>Datos Internacion:</label>



                                    <select name='datosI' id='datosI'>



                                        <option style='text-align:center;' value=''>Selecciona una opción</option>";







                                                $dni_1 = $row['Dni'];







                                                $sql2 = "SELECT Fecha_registro FROM datos_internacion WHERE Dni = '$dni_1' ORDER BY Fecha_registro DESC";



                                                $consulta2 = $conn->prepare($sql2);



                                                if ($consulta2->execute()) {



                                                    while ($row2 = $consulta2->fetch()) {



                                                        $fechaOriginal1 = $row2['Fecha_registro'];



                                                        $parts = explode('-', $fechaOriginal1);



                                                        if (count($parts) === 3) {



                                                            $dia = intval($parts[2]);



                                                            $mes = intval($parts[1]);



                                                            $anio = intval($parts[0]);







                                                            $fechaOriginal1 = "$dia de " . $mesesEnEspanol[$mes] . " del $anio";
                                                        }



                                                        echo "<option style='text-align:center;' value='" . $row2['Fecha_registro'] . "'>" . $fechaOriginal1 . "</option>";
                                                    }
                                                }



                                                echo "</select>";



                                                ?><label for='datosD'>Datos Domiciliario:</label>



                                                <select name='datosD' id='datosD'>



                                                    <option style='text-align:center;' value=''>Selecciona una opción</option>";



                                                    <?php



                                                    $sql2 = "SELECT Fecha_registro FROM datos_domiciliario WHERE Dni = '$dni_1' ORDER BY Fecha_registro DESC";



                                                    $consulta2 = $conn->prepare($sql2);



                                                    if ($consulta2->execute()) {



                                                        while ($row2 = $consulta2->fetch()) {



                                                            $fechaOriginal1 = $row2['Fecha_registro'];



                                                            $parts = explode('-', $fechaOriginal1);



                                                            if (count($parts) === 3) {



                                                                $dia = intval($parts[2]);



                                                                $mes = intval($parts[1]);



                                                                $anio = intval($parts[0]);







                                                                $fechaOriginal1 = "$dia de " . $mesesEnEspanol[$mes] . " del $anio";
                                                            }



                                                            echo "<option style='text-align:center;' value='" . $row2['Fecha_registro'] . "'>" . $fechaOriginal1 . "</option>";
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

          <input type='button' class='action-button' style='color:white; width: 100%; background-color: red; margin-top: 15px;' value='Cancelar' onclick=closeModal1('id-modal3-" . $row2['Fecha_registro'] .  "') />

          <input type='submit' name='next' class='next action-button' style='color:white;width: 100%; background-color:green; margin-top:15px' value='Generar PDF!' />



        </form>    



                            </div>



                        </div>



                    </div>



                </div>



            </div>



        </td>";







                                                echo "<td class='acciones' style='text-align: center; vertical-align: middle;'>



          <a href='EditarA.php?id=" . $row['Dni'] . "'><img src='/Proyecto-master/Proyecto-master/img/lapiz.png' class='imagen-espaciada'></a>



          </td>";



                                            endif;





                                            if ($mostrarColumnaAccion2 || $mostrarColumnaAccion) :











                                                echo "<td style='text-align: center; vertical-align: middle;'><a href='#' onclick=\"openModal7('" . $row['Dni'] . "')\">



                                    <img src='/Proyecto-master/Proyecto-master/img/observar.png'>



                                </a>



                                    <div class='w3-container'>



                                        <div id='id-modal7-" . $row['Dni'] . "' class='w3-modal'>



                                            <div class='w3-modal-content w3-card-4 w3-animate-zoom'>



                                                <header class='w3-container w3-white'> 



                                                <span onclick=\"closeModal4('id-modal7-" . $row['Dni'] . "')\" class='w3-button w3-white w3-display-topright'>&times;</span>



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



                                                                                        <th style='text-align: center; vertical-align: middle;'>Fecha de registro</th>



                                                                                        <th style='text-align: center; vertical-align: middle;'>Observaciones</th>                                                                                   



                                                                                        <th style='text-align: center; vertical-align: middle;'><a href='ObsAnamnesis.php?id=" . $row['Dni'] . "'>



                                                                                        <img src='/Proyecto-master/Proyecto-master/img/mas.png' class='imagen-espaciada'>



                                                                                    </a>



                                                                                    </th>



                                                                                    </tr>



                                                                                <tbody>";











                                                $idviejo = $row['Dni'];



                                                $sql2 = "SELECT *



                 FROM datos_tabla



                 WHERE dni = :idviejo



                 ORDER BY fecha_r DESC;



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



                                                        $fechaOriginal = $row2['fecha_r'];



                                                        $parts = explode('-', $fechaOriginal);



                                                        $dia = intval($parts[2]);



                                                        $mes = intval($parts[1]);



                                                        $anio = intval($parts[0]);







                                                        $fechaFormateada = "$dia de " . $mesesEnEspanol[$mes] . " del $anio";







                                                        echo "<td style='text-align: center; vertical-align: middle;'>" . $fechaFormateada . "</td>";



                                                        echo "<td style='text-align: center; vertical-align: middle;'>" . $row2['observaciones'] . "</td>";



                                                        echo "<td class='acciones' style='text-align: center; vertical-align: middle;'>



                                                        <a href='#?id=" . $row2['ID'] . "&dni=" . $row2['Dni'] . "'><img src='/Proyecto-master/Proyecto-master/img/lapiz.png' class='imagen-espaciada'></a>



                                                        </td>";





                                                        echo "<td style='text-align: center; vertical-align: middle;'></td>";



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











                                                echo "<td class='acciones' style='text-align: center; vertical-align: middle;'>



          <a href='AgregarAnamnesis.php?id=" . $row['Dni'] . "'><img src='/Proyecto-master/Proyecto-master/img/area.png' class='imagen-espaciada'></a>



          </td>";











                                                echo "<td style='text-align: center; vertical-align: middle;'><a href='generarPDF-amne.php?id=" . $row['Dni'] . "'>



          <img src='/Proyecto-master/Proyecto-master/img/pdf.png'>



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



                                                              <th style='text-align: center; vertical-align: middle;'>Fecha</th>



                                                              <th style='text-align: center; vertical-align: middle;'>Observaciones</th>



                                                              <th style='text-align: center; vertical-align: middle;'>Contenido</th>                                                                                       



                                                              <th style='text-align: center; vertical-align: middle;'>Profesor</th>



                                                              <th style='text-align: center; vertical-align: middle;'><a href='Observaciones.php?id=" . $row['Dni'] . "'>



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







                                                        echo "<td style='text-align: center; vertical-align: middle;'>" . $fechaFormateada . "</td>";



                                                        echo "<td style='text-align: center; vertical-align: middle;'>" . $row2['Observación'] . "</td>";



                                                        echo "<td style='text-align: center; vertical-align: middle;'>" . $row2['Contenido'] . "</td>";



                                                        echo "<td style='text-align: center; vertical-align: middle;'>" . $row2['Nombre_Profesor'] . "</td>";



                                                        echo "<td style='text-align: center; vertical-align: middle;'></td>";



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



                                            echo "<td style='text-align: center; vertical-align: middle;'>
                                            ";

                                            $idviejo3 = $row['Dni'];
                                            $sql3 = "SELECT * FROM personales_fechas WHERE Dni = :idviejo3 ORDER BY Fecha_registro DESC LIMIT 1";

                                            $consulta3 = $conn->prepare($sql3);
                                            $consulta3->bindParam(':idviejo3', $idviejo3, PDO::PARAM_INT);

                                            if ($consulta3->execute()) {
                                                $row2 = $consulta3->fetch();

                                                if ($row2["Fecha_alta"]) {
                                                    echo "<a href='REINGRESO.php?dni=" . $row2['Dni'] . "'>
        <button class='boton reingreso'>REINGRESO</button>
      </a>";
                                                } else {

                                                    echo "<a onclick=\"openModal14('" . $row2['Fecha_registro'] . "')\">
                                                    <button class='boton darDeAlta'>DAR ALTA</button>
                                                  </a>
    <div class='w3-container'>
        <div id='id-modal14-" . $row2['Fecha_registro'] . "' class='w3-modal'>
            <div class='w3-modal-content w3-card-4 w3-animate-zoom' style='max-width:600px'>
                <header class='w3-container w3-white'> 
                    <span onclick=\"closeModal1('id-modal14-" . $row2['Fecha_registro'] .  "')\" class='w3-button w3-white w3-display-topright'>&times;</span>
                    <h2>Dar de alta</h2>
                </header>
                <div id='-" . $row2['Fecha_registro'] . "' class='w3-container'>
                    <div class='container'>
                        <form id='msform' action='DardeAltaD.php' method='post'>
                            <div class='form-card'>
                                <div class='row'>
                                    <input name='dni' type='hidden' class='fieldlabels' id='dni' value='" . $row['Dni'] . "' style='text-align:center; background-color:antiquewhite;' readonly>
                                    <input name='fechaI' type='hidden' class='fieldlabels' id='fechaI' value='" . $row2['Fecha_registro'] . "' style='text-align:center; background-color:antiquewhite;' readonly>
                                    <label for='fecha'>Fecha de alta</label>
                                    <input name='fecha' type='date' class='fieldlabels' id='fecha' placeholder='fecha'>
                                    <label for='motivo'>Motivo</label>
                                    <input name='motivo' type='text' class='fieldlabels' id='motivo' placeholder='motivo'>
                                </div>
                            </div> 
                            <input type='submit' name='next' class='next action-button' style='color:white;width: 100%; background-color:green; margin-top:15px' value='Guardar y salir!' />                                            
                        </form>    
                    </div>
                </div>
            </div>
        </div>
    </div>";
                                                }
                                            } else {
                                                // Manejo de errores en la ejecución de la consulta
                                                echo "Error";
                                            }

                                            "</td>";
                                            if (!$mostrarColumnaAccion2) :



                                                echo "<td style='text-align: center; vertical-align: middle;'></td>";



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



                                    <?php $active1 = ($i == $paginaActual) ? 'active1' : ''; ?>



                                    <a class='<?php echo $active1; ?>' href='formularioAlumno.php?pagina=<?php echo $i; ?>'><?php echo $i; ?></a>



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