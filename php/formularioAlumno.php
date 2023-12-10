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
                    <div class="card order-card alta-card">
                        <div class="card-block">
                            <h1 class="m-b-20">Dados de alta</h1>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-xl-3" onclick="redirectTo('formularioAlumno.php', 'internacion');" style="cursor: pointer;">
                    <div class="card order-card internacion-card">
                        <div class="card-block">
                            <h1 class="m-b-20">Internacion</h1>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-xl-3" onclick="redirectTo('formularioAlumno.php', 'domiciliario');" style="cursor: pointer;">
                    <div class="card order-card domiciliario-card">
                        <div class="card-block">
                            <h1 class="m-b-20">Domiciliario</h1>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-xl-3" onclick="redirectTo('formularioAlumno.php', 'todos');" style="cursor: pointer;">
                    <div class="card order-card todos-card">
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
                            <input class="table-filter" type="search" data-table="advanced-web-table" placeholder="Buscar..." id="search-input">
                            <button onclick="searchByDNI()">Buscar</button>
                        </div>
                        <script>
// Función para realizar la búsqueda por DNI
function searchByDNI() {
    // Obtener el valor del campo de búsqueda
    var dni = document.getElementById('search-input').value;

    // Puedes hacer algo con el valor del DNI, como redirigir a otra página
    if (dni) {
        window.location.href = 'formularioAlumno.php?dni=' + dni;
    }
}
</script>


                        <!-- Table -->



                        <div class="table-responsive">



                            <table id="table-id" class="table table-striped table-white">



                                <thead>



                                    <tr>


                                        <?php if ($mostrarColumnaAccion || $mostrarColumnaAccion1) : ?>



                                            <th style="text-align: center; vertical-align: middle;">Obs</th>

                                            <th style="text-align: center; vertical-align: middle;">Notas</th>


                                        <?php endif; ?>


                                        <?php if ($mostrarColumnaAccion || $mostrarColumnaAccion2) : ?>



                                            <th style="text-align: center; vertical-align: middle;">Obs</th>




                                        <?php endif; ?>


                                        <th style="text-align: center; vertical-align: middle;">Estado</th>
                                        <th style="text-align: center; vertical-align: middle;">DNI</th>



                                        <th style="text-align: center; vertical-align: middle;">Nombre</th>



                                        <th style="text-align: center; vertical-align: middle;">Apellido</th>



                                        <th style="text-align: center; vertical-align: middle;">Edad</th>



                                        <?php if ($mostrarColumnaAccion || $mostrarColumnaAccion1) : ?>



                                            <th style="text-align: center; vertical-align: middle;">Datos</th>



                                            <th style="text-align: center; vertical-align: middle;">PDF</th>

                                        <?php endif; ?>



                                        <?php if ($mostrarColumnaAccion || $mostrarColumnaAccion2) : ?>



                                            <th style="text-align: center; vertical-align: middle;">Anamnesis</th>




                                        <?php endif;

                                        ?>
                                        <th style="text-align: center; vertical-align: middle;">Acciones</th>

                                        <th style="text-align: center; vertical-align: middle;">



                                            <a href='agregarA.php'>







                                                <img src="/Proyecto-master/Proyecto-master/img/mas.png" style="max-width: 30px;">



                                            </a>



                                        </th>








                                    </tr>



                                </thead>







                                <tbody>



                                    <?php



                                    include 'crearTabla.php';







                                    $itemsPorPagina = 10; // Cambiar a la cantidad deseada de ítems por página



                                    $paginaActual = isset($_GET['pagina']) ? $_GET['pagina'] : 1;



                                    $inicio = ($paginaActual - 1) * $itemsPorPagina;


                                    if(isset($_GET['dni'])) {
                                        $dni = $_GET['dni'];
                                       }



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
                                    } elseif($dni != NULL) {
                                        $sql1 = "SELECT * FROM datos_personales WHERE DNI = $dni;";
                                    }else{
                                        $sql1 = "SELECT * FROM datos_personales ORDER BY fecha_act DESC LIMIT $inicio, $itemsPorPagina;";
                                    }




                                    $consulta = $conn->prepare($sql1);







                                    if ($consulta->execute()) {



                                        while ($row = $consulta->fetch()) {



                                            echo "<tr>";

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
                                                $idviejo = $row['Dni'];
                                                $sql2 = "SELECT *
             FROM datos_notas
             WHERE DNI = :idviejo
             ORDER BY AÑO DESC;
    ";
                                                $consulta2 = $conn->prepare($sql2);
                                                $consulta2->bindParam(':idviejo', $idviejo, PDO::PARAM_INT); // Asignamos el valor de idviejo como entero
                                                if ($consulta2->execute()) {

                                                    $row2 = $consulta2->fetch();
                                                    echo "<td style='text-align: center; vertical-align: middle;'>";
                                                    if ($row2['AÑO'] != NULL) {
                                                        echo "<a href='#' onclick=\"openModal21('" . $row2['DNI'] . $row2['AÑO'] . "')\">
                                        <img src='/Proyecto-master/Proyecto-master/img/cuaderno.png'>";
                                                    } else {
                                                        echo "<a href='agregar_notas.php?id=" . $row['Dni'] . "'>
                                        <img src='/Proyecto-master/Proyecto-master/img/cuaderno.png' class='imagen-espaciada'>
                                        ";
                                                    }
                                                }
                                                echo "</a><div class='w3-container'>

                                            <div id='id-modal21-" . $row2['DNI'] . $row2['AÑO'] . "' class='w3-modal'>
    
    
    
                                                <div class='w3-modal-content w3-card-4 w3-animate-zoom'>
    
    
    
                                                    <header class='w3-container w3-white'> 
    
    
                                                    <span onclick=\"closeModal('id-modal21-" . $row2['DNI'] . $row2['AÑO'] . "')\" class='w3-button w3-white w3-display-topright'>&times;</span>
    

                                                    <h2 style='text-align: center; vertical-align: middle;'>" . $row['Nombre'] . " " . $row['Apellido'] .  "</h2>

                                                    </header>
                                                    <div id='-" . $row2['DNI'] . $row2['AÑO'] . "' class='w3-container'>
                                                    <div class='container'>
                                                                            <div class='table-responsive'>
                                                                                <table id='table-id' class='table table-striped table-class'>
                                                                                    <thead>
                                                                                        <tr>
                                                                                            <th style='text-align: center; vertical-align: middle;'>Año</th>
                                                                                            <th style='text-align: center; vertical-align: middle;'>1er trimestre</th>
                                                                                            <th style='text-align: center; vertical-align: middle;'>2do trimestre</th>                                                                                       
                                                                                            <th style='text-align: center; vertical-align: middle;'>3er trimestre</th>
                                                                                            <th style='text-align: center; vertical-align: middle;'>Acciones</th>

                                                                                            <th style='text-align: center; vertical-align: middle;'><a href='agregar_notas.php?id=" . $row2['DNI'] . "'>
                                                                                            <img src='/Proyecto-master/Proyecto-master/img/mas.png' class='imagen-espaciada'>
                                                                                        </a>
                                                                                        </th>
                                                                                        </tr>
                                                                                    <tbody>";
                                                $idviejo = $row2['DNI'];
                                                $sql2 = "SELECT *
                     FROM datos_notas
                     WHERE DNI = :idviejo
                     ORDER BY AÑO DESC;
            ";
                                                $consulta2 = $conn->prepare($sql2);
                                                $consulta2->bindParam(':idviejo', $idviejo, PDO::PARAM_INT); // Asignamos el valor de idviejo como entero

                                                if ($consulta2->execute()) {
                                                    while ($row2 = $consulta2->fetch()) {

                                                        echo "<tr>";
                                                        echo "<td style='text-align: center; vertical-align: middle;' >" . $row2['AÑO'] . "</td>";
                                                        echo "<td style='text-align: center; vertical-align: middle;'>
                                                        <a href='#' onclick=\"openModal22('" . $row2['DNI'] . $row2['AÑO'] . "')\">";
                                                        if ($row2['Trimestre'] == 'Primer trimestre') {
                                                            echo "<img src='/Proyecto-master/Proyecto-master/img/listo.png'>";
                                                            echo "</a>";
                                                            echo "</td>";
                                                            echo "<div class='w3-container'>
                                                        <div id='id-modal22-" . $row2['DNI'] . $row2['AÑO'] . "' class='w3-modal'>
                                                            <div class='w3-modal-content w3-card-4 w3-animate-zoom' style='max-width:800px'>
                                                                <header class='w3-container w3-white'> 
                                                                    <span onclick=\"closeModal6('id-modal22-" . $row2['DNI'] . $row2['AÑO'] . "')\" class='w3-button w3-white w3-display-topright'>&times;</span>
                                                                    <h2 style='text-align:center;'>INFORME PEDAGOGICO TRIMESTRAL</h2>
                                                                </header>
                                                                <div id='-" . $row2['DNI'] . $row2['AÑO'] . "' class='w3-container'>
                                                                    <div class='container'>

                                                                        <form id='msform' action='agregar_notas.php' method='post'>";



                                                            echo "<div class='campo'>";
                                                            if ($row2['AÑO']) {
                                    ?><input type='text' name='AÑO' value='<?php echo $row2['AÑO']; ?>' style='background-color: #6c757d; color: white;' readonly>
                                                            <?php
                                                            } else {
                                                            ?>
                                                                <label for='AÑO'>AÑO</label>
                                                                <input type='text' name='AÑO'>

                                                            <?php }
                                                            if ($row2['Trimestre']) {
                                                            ?><input type='text' name='Trimestre' value='<?php echo $row2['Trimestre']; ?>' style='background-color: #6c757d; color: white;' readonly>

                                                            <?php
                                                            } else {
                                                            ?>
                                                                <label for='Trimestre'>Trimestre</label>
                                                                <input type='text' name='Trimestre'>

                                                            <?php }
                                                            echo "<input type='text' name='DNI' value= '" . $row2['DNI'] . "' style='background-color: #6c757d; color: white;' readonly>
                                                                        </div><br>
                                                                    
                                                                        <div class='campo'>
                                                                        <div class='fila'>
                                                                            <label for='Lengua_cal'>Lengua Calificación</label>
                                                                            <input type='text' name='Lengua_cal'  value= '" . $row2['Lengua_cal'] . "' required>
                                                                            <label for='Lengua_observaciones'>Observaciones</label>
                                                                            <input type='text' name='Lengua_observaciones' value= '" . $row2['Lengua_observaciones'] . "' required>
                                                                        </div><div class='fila'>                                   
                                                                        
                                                                            <label for='Matematica_cal'>Matemática Calificación</label>
                                                                            <input type='text' name='Matematica_cal' value= '" . $row2['Matematica_cal'] . "' required>
                                                                        
                                                                            <label for='Matematica_observaciones'>Observaciones</label>
                                                                            <input type='text' name='Matematica_observaciones' value= '" . $row2['Matematica_observaciones'] . "'></input>

                                                                            </div><div class='fila'>   
                                                                            <label for='Sociales_cal'>Sociales Calificación</label>
                                                                            <input type='text' name='Sociales_cal' value= '" . $row2['Sociales_cal'] . "' required>
                                                                            <label for='Sociales_observaciones'>Observaciones</label>
                                                                            <input type='text' name='Sociales_observaciones' value= '" . $row2['Sociales_observaciones'] . "'></input>

                                                                            </div><div class='fila'>   
                                                                            <label for='Tecnologia_cal'>Tecnología Calificación</label>
                                                                            <input type='text' name='Tecnologia_cal' value= '" . $row2['Tecnologia_cal'] . "' required>
                                                                            <label for='Tecnologia_observaciones'>Observaciones</label>
                                                                            <input type='text' name='Tecnologia_observaciones' value= '" . $row2['Tecnologia_observaciones'] . "'></input>
                                                                            </div><div class='fila'>   
                                                                            <label for='Musica_cal'>Música Calificación</label>
                                                                            <input type='text' name='Musica_cal' value= '" . $row2['Musica_cal'] . "' required>
                                                                        
                                                                            <label for='Musica_observaciones'>Observaciones</label>
                                                                            <input type='text' name='Musica_observaciones' value= '" . $row2['Musica_observaciones'] . "'></input>
                                                                            </div><div class='fila'>   
                                                                            <label for='Plastica_cal'>Plástica Calificación</label>
                                                                            <input type='text' name='Plastica_cal' value= '" . $row2['Plastica_cal'] . "' required>
                                                                        
                                                                            <label for='Plastica_observaciones'>Observaciones</label>
                                                                            <input type='text' name='Plastica_observaciones' value= '" . $row2['Plastica_observaciones'] . "'></input>
                                                                            </div><div class='fila'>   
                                                                            <label for='EticayCiudadana_cal'>Ética y Ciud. Calificación</label>
                                                                            <input type='text' name='EticayCiudadana_cal' value= '" . $row2['EticayCiudadana_cal'] . "' required>
                                                                        
                                                                            <label for='EticayCiudadana_observaciones'>Observaciones</label>
                                                                            <input type='text' name='EticayCiudadana_observaciones' value= '" . $row2['EticayCiudadana_observaciones'] . "'></input>
                                                                            </div></div>
                                                                            <h2>Intelectuales y Practicas</h2>
                                                                            
                                                                            <div>
                                                                            <label for='Int_pract_destaca'>Se destacada en</label>
                                                                            <input type='text' name='Int_pract_destaca' value= '" . $row2['Int_pract_destaca'] . "'></input>
                                                                            <label for='Int_pract_trabaja'>Trabaja bien en</label>
                                                                            <input type='text' name='Int_pract_trabaja' value= '" . $row2['Int_pract_trabaja'] . "'></input>
                                                                            <label for='Int_pract_mejorar'>Debe Mejorar en</label>
                                                                            <input type='text' name='Int_pract_mejorar' value= '" . $row2['Int_pract_mejorar'] . "'></input>
                                                                            </div>
                                                                            <h2>Personales y Sociales</h2>
                                                                            <div> 

                                                                            <label for='Personales_soc_motiv'>Motivacion para la actividad escolar</label>
                                                                            <input type='text' name='Personales_soc_motiv' value= '" . $row2['Personales_soc_motiv'] . "'></input>
                                                                        
                                                                            <label for='Personales_soc_trabajo'>Habitos de trabajo</label>
                                                                            <input type='text' name='Personales_soc_trabajo' value= '" . $row2['Personales_soc_trabajo'] . "'></input>
                                                                        
                                                                            <label for='Personales_soc_respons'>Responsabilidad en las tareas</label>
                                                                            <input type='text' name='Personales_soc_respons' value= '" . $row2['Personales_soc_respons'] . "'></input>
                                                                        
                                                                            <label for='Personales_soc_acompañ'>Acompañamiento familiar</label>
                                                                            <input type='text' name='Personales_soc_acompañ' value= '" . $row2['Personales_soc_acompañ'] . "'></input>
                                                                            </div>
                                                                            <h2>Interversion del equipo</h2>
                                                                            </div><div> 
                                                                            <label for='Int_equipo_psicologo'>Psicólogo</label>
                                                                            <input type='text' name='Int_equipo_psicologo' value= '" . $row2['Int_equipo_psicologo'] . "'></input>
                                                                        
                                                                            <label for='Int_equipo_psicopedagogo'>Psicopedagogo</label>
                                                                            <input type='text' name='Int_equipo_psicopedagogo' value= '" . $row2['Int_equipo_psicopedagogo'] . "'></input>

                                                                            </div><div > 
                                                                            <label for='Observaciones_generales'>Observaciones Generales</label>
                                                                            <input type='text' name='Observaciones_generales' value= '" . $row2['Observaciones_generales'] . "'></input>
                                                                            </div>
                                                                        </div> 
                                                                                <input type='button' class='action-button' style='color:white; width: 100%; background-color: red; margin-top: 15px;' value='Cancelar' onclick=\"closeModal6('id-modal22-" . $row2['DNI'] . $row2['AÑO'] . "')\">
                                                                                <input type='submit' name='next' class='next action-button' style='color:white;width: 100%; background-color:green; margin-top:15px' value='Generar PDF!' />
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>";
                                                        }



                                                        echo "<td style='text-align: center; vertical-align: middle;'>
                                                <a href='#' onclick=\"openModal23('" . $row2['DNI'] . $row2['AÑO'] . "')\">";
                                                        if ($row2['Trimestre'] == 'Segundo trimestre') {
                                                            echo "<img src='/Proyecto-master/Proyecto-master/img/listo.png'>";
                                                            echo "</a>";
                                                            echo "</td>";
                                                            echo "<div class='w3-container'>
                                                            <div id='id-modal23-" . $row2['DNI'] . $row2['AÑO'] . "' class='w3-modal'>
                                                                <div class='w3-modal-content w3-card-4 w3-animate-zoom' style='max-width:800px'>
                                                                    <header class='w3-container w3-white'> 
                                                                        <span onclick=\"closeModal2('id-modal23-" . $row2['DNI'] . $row2['AÑO'] . "')\" class='w3-button w3-white w3-display-topright'>&times;</span>
                                                                        <h2 style='text-align:center;'>INFORME PEDAGOGICO TRIMESTRAL</h2>
                                                                    </header>
                                                                    <div id='-" . $row2['DNI'] . $row2['AÑO'] . "' class='w3-container'>
                                                                        <div class='container'>
            
                                                                            <form id='msform' action='agregar_notas.php' method='post'>";



                                                            echo "<div class='campo'>";
                                                            if ($row2['AÑO']) {
                                                            ?><input type='text' name='AÑO' value='<?php echo $row2['AÑO']; ?>' style='background-color: #6c757d; color: white;' readonly>
                                                            <?php
                                                            } else {
                                                            ?>
                                                                <label for='AÑO'>AÑO</label>
                                                                <input type='text' name='AÑO'>

                                                            <?php }
                                                            if ($row2['Trimestre']) {
                                                            ?><input type='text' name='Trimestre' value='<?php echo $row2['Trimestre']; ?>' style='background-color: #6c757d; color: white;' readonly>

                                                            <?php
                                                            } else {
                                                            ?>
                                                                <label for='Trimestre'>Trimestre</label>
                                                                <input type='text' name='Trimestre'>

                                                            <?php }
                                                            echo "<input type='text' name='DNI' value= '" . $row2['DNI'] . "' style='background-color: #6c757d; color: white;' readonly>
                                                                            </div><br>
                                                                        
                                                                            <div class='campo'>
                                                                            <div class='fila'>
                                                                                <label for='Lengua_cal'>Lengua Calificación</label>
                                                                                <input type='text' name='Lengua_cal'  value= '" . $row2['Lengua_cal'] . "' required>
            
            
                                                                                <label for='Lengua_observaciones'>Observaciones</label>
                                                                                <input type='text' name='Lengua_observaciones' value= '" . $row2['Lengua_observaciones'] . "' required>
                                                                            </div><div class='fila'>                                   
                                                                            
                                                                                <label for='Matematica_cal'>Matemática Calificación</label>
                                                                                <input type='text' name='Matematica_cal' value= '" . $row2['Matematica_cal'] . "' required>
                                                                            
                                                                                <label for='Matematica_observaciones'>Observaciones</label>
                                                                                <input type='text' name='Matematica_observaciones' value= '" . $row2['Matematica_observaciones'] . "'></input>
            
                                                                                </div><div class='fila'>   
                                                                                <label for='Sociales_cal'>Sociales Calificación</label>
                                                                                <input type='text' name='Sociales_cal' value= '" . $row2['Sociales_cal'] . "' required>
                                                                                <label for='Sociales_observaciones'>Observaciones</label>
                                                                                <input type='text' name='Sociales_observaciones' value= '" . $row2['Sociales_observaciones'] . "'></input>
            
                                                                                </div><div class='fila'>   
                                                                                <label for='Tecnologia_cal'>Tecnología Calificación</label>
                                                                                <input type='text' name='Tecnologia_cal' value= '" . $row2['Tecnologia_cal'] . "' required>
                                                                                <label for='Tecnologia_observaciones'>Observaciones</label>
                                                                                <input type='text' name='Tecnologia_observaciones' value= '" . $row2['Tecnologia_observaciones'] . "'></input>
                                                                                </div><div class='fila'>   
                                                                                <label for='Musica_cal'>Música Calificación</label>
                                                                                <input type='text' name='Musica_cal' value= '" . $row2['Musica_cal'] . "' required>
                                                                            
                                                                                <label for='Musica_observaciones'>Observaciones</label>
                                                                                <input type='text' name='Musica_observaciones' value= '" . $row2['Musica_observaciones'] . "'></input>
                                                                                </div><div class='fila'>   
                                                                                <label for='Plastica_cal'>Plástica Calificación</label>
                                                                                <input type='text' name='Plastica_cal' value= '" . $row2['Plastica_cal'] . "' required>
                                                                            
                                                                                <label for='Plastica_observaciones'>Observaciones</label>
                                                                                <input type='text' name='Plastica_observaciones' value= '" . $row2['Plastica_observaciones'] . "'></input>
                                                                                </div><div class='fila'>   
                                                                                <label for='EticayCiudadana_cal'>Ética y Ciud. Calificación</label>
                                                                                <input type='text' name='EticayCiudadana_cal' value= '" . $row2['EticayCiudadana_cal'] . "' required>
                                                                            
                                                                                <label for='EticayCiudadana_observaciones'>Observaciones</label>
                                                                                <input type='text' name='EticayCiudadana_observaciones' value= '" . $row2['EticayCiudadana_observaciones'] . "'></input>
                                                                                </div></div>
                                                                                <h2>Intelectuales y Practicas</h2>
                                                                                
                                                                                <div>
                                                                                <label for='Int_pract_destaca'>Se destacada en</label>
                                                                                <input type='text' name='Int_pract_destaca' value= '" . $row2['Int_pract_destaca'] . "'></input>
                                                                                <label for='Int_pract_trabaja'>Trabaja bien en</label>
                                                                                <input type='text' name='Int_pract_trabaja' value= '" . $row2['Int_pract_trabaja'] . "'></input>
                                                                                <label for='Int_pract_mejorar'>Debe Mejorar en</label>
                                                                                <input type='text' name='Int_pract_mejorar' value= '" . $row2['Int_pract_mejorar'] . "'></input>
                                                                                </div>
                                                                                <h2>Personales y Sociales</h2>
                                                                                <div> 
            
                                                                                <label for='Personales_soc_motiv'>Motivacion para la actividad escolar</label>
                                                                                <input type='text' name='Personales_soc_motiv' value= '" . $row2['Personales_soc_motiv'] . "'></input>
                                                                            
                                                                                <label for='Personales_soc_trabajo'>Habitos de trabajo</label>
                                                                                <input type='text' name='Personales_soc_trabajo' value= '" . $row2['Personales_soc_trabajo'] . "'></input>
                                                                            
                                                                                <label for='Personales_soc_respons'>Responsabilidad en las tareas</label>
                                                                                <input type='text' name='Personales_soc_respons' value= '" . $row2['Personales_soc_respons'] . "'></input>
                                                                            
                                                                                <label for='Personales_soc_acompañ'>Acompañamiento familiar</label>
                                                                                <input type='text' name='Personales_soc_acompañ' value= '" . $row2['Personales_soc_acompañ'] . "'></input>
                                                                                </div>
                                                                                <h2>Interversion del equipo</h2>
                                                                                </div><div> 
                                                                                <label for='Int_equipo_psicologo'>Psicólogo</label>
                                                                                <input type='text' name='Int_equipo_psicologo' value= '" . $row2['Int_equipo_psicologo'] . "'></input>
                                                                            
                                                                                <label for='Int_equipo_psicopedagogo'>Psicopedagogo</label>
                                                                                <input type='text' name='Int_equipo_psicopedagogo' value= '" . $row2['Int_equipo_psicopedagogo'] . "'></input>
            
                                                                                </div><div > 
                                                                                <label for='Observaciones_generales'>Observaciones Generales</label>
                                                                                <input type='text' name='Observaciones_generales' value= '" . $row2['Observaciones_generales'] . "'></input>
                                                                                </div>
                                                                            </div> 
                                                                                    <input type='button' class='action-button' style='color:white; width: 100%; background-color: red; margin-top: 15px;' value='Cancelar' onclick=\"closeModal6('id-modal23-" . $row2['DNI'] . $row2['AÑO'] . "')\">
                                                                                    <input type='submit' name='next' class='next action-button' style='color:white;width: 100%; background-color:green; margin-top:15px' value='Generar PDF!' />
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>";
                                                        }




                                                        echo "<td style='text-align: center; vertical-align: middle;'>
                                        <a href='#' onclick=\"openModal24('" . $row2['DNI'] . $row2['AÑO'] . "')\">";
                                                        if ($row2['Trimestre'] == 'Tercer trimestre') {

                                                            echo "<img src='/Proyecto-master/Proyecto-master/img/listo.png'>";
                                                            echo "</a>";
                                                            echo "</td>";

                                                            echo "<div class='w3-container'>
                                                        <div id='id-modal24-" . $row2['DNI'] . $row2['AÑO'] . "' class='w3-modal'>
                                                            <div class='w3-modal-content w3-card-4 w3-animate-zoom' style='max-width:800px'>
                                                                <header class='w3-container w3-white'> 
                                                                    <span onclick=\"closeModal2('id-modal24-" . $row2['DNI'] . $row2['AÑO'] . "')\" class='w3-button w3-white w3-display-topright'>&times;</span>
                                                                    <h2 style='text-align:center;'>INFORME PEDAGOGICO TRIMESTRAL</h2>
                                                                </header>
                                                                <div id='-" . $row2['DNI'] . $row2['AÑO'] . "' class='w3-container'>
                                                                    <div class='container'>
                
                                                                        <form id='msform' action='agregar_notas.php' method='post'>";



                                                            echo "<div class='campo'>";
                                                            if ($row2['AÑO']) {
                                                            ?><input type='text' name='AÑO' value='<?php echo $row2['AÑO']; ?>' style='background-color: #6c757d; color: white;' readonly>
                                                            <?php
                                                            } else {
                                                            ?>
                                                                <label for='AÑO'>AÑO</label>
                                                                <input type='text' name='AÑO'>

                                                            <?php }
                                                            if ($row2['Trimestre']) {
                                                            ?><input type='text' name='Trimestre' value='<?php echo $row2['Trimestre']; ?>' style='background-color: #6c757d; color: white;' readonly>

                                                            <?php
                                                            } else {
                                                            ?>
                                                                <label for='Trimestre'>Trimestre</label>
                                                                <input type='text' name='Trimestre'>

                                            <?php }
                                                            echo "<input type='text' name='DNI' value= '" . $row2['DNI'] . "' style='background-color: #6c757d; color: white;' readonly>
                                                                        </div><br>
                                                                    
                                                                        <div class='campo'>
                                                                        <div class='fila'>
                                                                            <label for='Lengua_cal'>Lengua Calificación</label>
                                                                            <input type='text' name='Lengua_cal'  value= '" . $row2['Lengua_cal'] . "' required>
                
                
                                                                            <label for='Lengua_observaciones'>Observaciones</label>
                                                                            <input type='text' name='Lengua_observaciones' value= '" . $row2['Lengua_observaciones'] . "' required>
                                                                        </div><div class='fila'>                                   
                                                                        
                                                                            <label for='Matematica_cal'>Matemática Calificación</label>
                                                                            <input type='text' name='Matematica_cal' value= '" . $row2['Matematica_cal'] . "' required>
                                                                        
                                                                            <label for='Matematica_observaciones'>Observaciones</label>
                                                                            <input type='text' name='Matematica_observaciones' value= '" . $row2['Matematica_observaciones'] . "'></input>
                
                                                                            </div><div class='fila'>   
                                                                            <label for='Sociales_cal'>Sociales Calificación</label>
                                                                            <input type='text' name='Sociales_cal' value= '" . $row2['Sociales_cal'] . "' required>
                                                                            <label for='Sociales_observaciones'>Observaciones</label>
                                                                            <input type='text' name='Sociales_observaciones' value= '" . $row2['Sociales_observaciones'] . "'></input>
                
                                                                            </div><div class='fila'>   
                                                                            <label for='Tecnologia_cal'>Tecnología Calificación</label>
                                                                            <input type='text' name='Tecnologia_cal' value= '" . $row2['Tecnologia_cal'] . "' required>
                                                                            <label for='Tecnologia_observaciones'>Observaciones</label>
                                                                            <input type='text' name='Tecnologia_observaciones' value= '" . $row2['Tecnologia_observaciones'] . "'></input>
                                                                            </div><div class='fila'>   
                                                                            <label for='Musica_cal'>Música Calificación</label>
                                                                            <input type='text' name='Musica_cal' value= '" . $row2['Musica_cal'] . "' required>
                                                                        
                                                                            <label for='Musica_observaciones'>Observaciones</label>
                                                                            <input type='text' name='Musica_observaciones' value= '" . $row2['Musica_observaciones'] . "'></input>
                                                                            </div><div class='fila'>   
                                                                            <label for='Plastica_cal'>Plástica Calificación</label>
                                                                            <input type='text' name='Plastica_cal' value= '" . $row2['Plastica_cal'] . "' required>
                                                                        
                                                                            <label for='Plastica_observaciones'>Observaciones</label>
                                                                            <input type='text' name='Plastica_observaciones' value= '" . $row2['Plastica_observaciones'] . "'></input>
                                                                            </div><div class='fila'>   
                                                                            <label for='EticayCiudadana_cal'>Ética y Ciud. Calificación</label>
                                                                            <input type='text' name='EticayCiudadana_cal' value= '" . $row2['EticayCiudadana_cal'] . "' required>
                                                                        
                                                                            <label for='EticayCiudadana_observaciones'>Observaciones</label>
                                                                            <input type='text' name='EticayCiudadana_observaciones' value= '" . $row2['EticayCiudadana_observaciones'] . "'></input>
                                                                            </div></div>
                                                                            <h2>Intelectuales y Practicas</h2>
                                                                            
                                                                            <div>
                                                                            <label for='Int_pract_destaca'>Se destacada en</label>
                                                                            <input type='text' name='Int_pract_destaca' value= '" . $row2['Int_pract_destaca'] . "'></input>
                                                                            <label for='Int_pract_trabaja'>Trabaja bien en</label>
                                                                            <input type='text' name='Int_pract_trabaja' value= '" . $row2['Int_pract_trabaja'] . "'></input>
                                                                            <label for='Int_pract_mejorar'>Debe Mejorar en</label>
                                                                            <input type='text' name='Int_pract_mejorar' value= '" . $row2['Int_pract_mejorar'] . "'></input>
                                                                            </div>
                                                                            <h2>Personales y Sociales</h2>
                                                                            <div> 
                
                                                                            <label for='Personales_soc_motiv'>Motivacion para la actividad escolar</label>
                                                                            <input type='text' name='Personales_soc_motiv' value= '" . $row2['Personales_soc_motiv'] . "'></input>
                                                                        
                                                                            <label for='Personales_soc_trabajo'>Habitos de trabajo</label>
                                                                            <input type='text' name='Personales_soc_trabajo' value= '" . $row2['Personales_soc_trabajo'] . "'></input>
                                                                        
                                                                            <label for='Personales_soc_respons'>Responsabilidad en las tareas</label>
                                                                            <input type='text' name='Personales_soc_respons' value= '" . $row2['Personales_soc_respons'] . "'></input>
                                                                        
                                                                            <label for='Personales_soc_acompañ'>Acompañamiento familiar</label>
                                                                            <input type='text' name='Personales_soc_acompañ' value= '" . $row2['Personales_soc_acompañ'] . "'></input>
                                                                            </div>
                                                                            <h2>Interversion del equipo</h2>
                                                                            </div><div> 
                                                                            <label for='Int_equipo_psicologo'>Psicólogo</label>
                                                                            <input type='text' name='Int_equipo_psicologo' value= '" . $row2['Int_equipo_psicologo'] . "'></input>
                                                                        
                                                                            <label for='Int_equipo_psicopedagogo'>Psicopedagogo</label>
                                                                            <input type='text' name='Int_equipo_psicopedagogo' value= '" . $row2['Int_equipo_psicopedagogo'] . "'></input>
                
                                                                            </div><div > 
                                                                            <label for='Observaciones_generales'>Observaciones Generales</label>
                                                                            <input type='text' name='Observaciones_generales' value= '" . $row2['Observaciones_generales'] . "'></input>
                                                                            </div>
                                                                        </div> 
                                                                                <input type='button' class='action-button' style='color:white; width: 100%; background-color: red; margin-top: 15px;' value='Cancelar' onclick=\"closeModal6('id-modal24-" . $row2['DNI'] . $row2['AÑO'] . "')\">
                                                                                <input type='submit' name='next' class='next action-button' style='color:white;width: 100%; background-color:green; margin-top:15px' value='Generar PDF!' />
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>";
                                                        }

                                                        echo "<td style='text-align: center; vertical-align: middle;'>
            <a href='#' onclick=\"openModal25('" . $row['Dni'] . "')\">
                <img src='/Proyecto-master/Proyecto-master/img/pdf.png' alt='Descargar PDF'>
            </a>
            <div class='w3-container'>
                <div id='id-modal25-" . $row['Dni'] . "' class='w3-modal'>
                    <div class='w3-modal-content w3-card-4 w3-animate-zoom' style='max-width:600px'>
                        <header class='w3-container w3-white'> 
                            <span onclick=\"closeModal2('id-modal25-" . $row['Dni'] . "')\" class='w3-button w3-white w3-display-topright'>&times;</span>
                            <h2 style='text-align:center;'>Descargar PDF</h2>
                        </header>
                        <div id='-" . $row['Dni'] . "' class='w3-container'>
                            <div class='container'>
                                <form id='msform' action='generar_pdf.php' method='post'>
                                    <div class='form-card bg-white'>
                                        <div class='row'>


                                                    
                                        </div>
                                    </div> 
                                    <input type='hidden' name='Dni' value='" . $row['Dni'] . "'>
                                    <input type='button' class='action-button' style='color:white; width: 100%; background-color: red; margin-top: 15px;' value='Cancelar' onclick=closeModal1('id-modal3-" . $row2['Fecha_registro'] .  "') />
                                    <input type='submit' name='next' class='next action-button' style='color:white;width: 100%; background-color:green; margin-top:15px' value='Generar PDF!' />  
                                </form>    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </td>";



                                                        echo "<td style='text-align: center; vertical-align: middle;'></td>";
                                                    }
                                                }
                                                echo "</tr>";

                                                echo "</tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            </div>
                                            </div>
                                            </td>";



                                            endif;

                                            if ($mostrarColumnaAccion || $mostrarColumnaAccion2) :
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



                <div class='w3-modal-content w3-card-4 w3-animate-zoom' style='width:1300px;'>



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
                                    <th style='text-align: center; vertical-align: middle;'>Obs</th>



                                    <th style='text-align: center; vertical-align: middle;'>Interpreta textos?</th>
                                    <th style='text-align: center; vertical-align: middle;'>Obs</th>







                                    <th style='text-align: center; vertical-align: middle;'>Lectura y escritura?</th>
                                    <th style='text-align: center; vertical-align: middle;'>Obs</th>







                                    <th style='text-align: center; vertical-align: middle;'>Resuelve operaciones basicas?</th>
                                    <th style='text-align: center; vertical-align: middle;'>Obs</th>





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
                                                        echo "<td style='text-align: center; vertical-align: middle;'>" . $row2['obs_lectC'] . "</td>";



                                                        echo "<td style='text-align: center; vertical-align: middle;'>" . $row2['interpTextos'] . "</td>";
                                                        echo "<td style='text-align: center; vertical-align: middle;'>" . $row2['obs_interpT'] . "</td>";



                                                        echo "<td style='text-align: center; vertical-align: middle;'>" . $row2['lectyescri'] . "</td>";
                                                        echo "<td style='text-align: center; vertical-align: middle;'>" . $row2['obs_LectyEsc'] . "</td>";



                                                        echo "<td style='text-align: center; vertical-align: middle;'>" . $row2['resuelvOpBas'] . "</td>";
                                                        echo "<td style='text-align: center; vertical-align: middle;'>" . $row2['obs_resuelvOpBas'] . "</td>";



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
        <input name='lectContinua' type='text' class='fieldlabels' id='lectContinua' value='" . $row2['lectContinua'] . "' style='text-align:center;'>
    </div>
    <div class='col'>
        <label for='obsLectContinua'>OBS</label>
        <input name='obsLectContinua' type='text' class='fieldlabels' id='obsLectContinua' value='" . $row2['obs_lectC'] . "' style='text-align:center;'>
    </div>
</div>

<div class='row'>
    <div class='col'>
        <label for='interpTextos'>Interpretación de Textos</label>
        <input name='interpTextos' type='text' class='fieldlabels' id='interpTextos' value='" . $row2['interpTextos'] . "' style='text-align:center;'>
    </div>
    <div class='col'>
        <label for='obsInterpTextos'>OBS</label>
        <input name='obsInterpTextos' type='text' class='fieldlabels' id='obsInterpTextos' value='" . $row2['obs_interpT'] . "' style='text-align:center;'>
    </div>
</div>

<div class='row'>
    <div class='col'>
        <label for='lectyescri'>Lectura y Escritura</label>
        <input name='lectyescri' type='text' class='fieldlabels' id='lectyescri' value='" . $row2['lectyescri'] . "' style='text-align:center;'>
    </div>
    <div class='col'>
        <label for='obsLectyescri'>OBS</label>
        <input name='obsLectyescri' type='text' class='fieldlabels' id='obsLectyescri' value='" . $row2['obs_LectyEsc'] . "' style='text-align:center;'>
    </div>
</div>

<div class='row'>
    <div class='col'>
        <label for='resuelvOpBas'>Resolución de Problemas Básicos</label>
        <input name='resuelvOpBas' type='text' class='fieldlabels' id='resuelvOpBas' value='" . $row2['resuelvOpBas'] . "' style='text-align:center;'>
    </div>
    <div class='col'>
        <label for='obsResuelvOpBas'>OBS</label>
        <input name='obsResuelvOpBas' type='text' class='fieldlabels' id='obsResuelvOpBas' value='" . $row2['obs_resuelvOpBas'] . "' style='text-align:center;'>
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



                                                        echo "<td style='text-align: center; vertical-align: middle;'>" . $row2['Habitacion'] . "</td>";



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

                        <input name='habitacion' type='text' class='fieldlabels' id='habitacion' value='" . $row2['Habitacion'] . "' style='text-align:center;'>

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



                    <input type='hidden' name='estado' value='Internacion'>



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

                    


                </div>



                



                    </div> 

                    <input type='hidden' name='estado' value='Domiciliario'>



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











                                                    endif;

                                                    if ($mostrarColumnaAccion2 || $mostrarColumnaAccion) :




                                                        echo "<td class='acciones' style='text-align: center; vertical-align: middle;'>
                                                        <a href='AgregarAnamnesis.php?id=" . $row['Dni'] . "'><button class='boton agregar'>AGREGAR</button></a>

        <a href='#' onclick=\"openModal20('" . $row['Dni'] . "')\">
        <button class='boton ver'>MOSTRAR</button>
    </a>
    </td>
    <div class='w3-container' >
        <div id='id-modal20-" . $row['Dni'] . "' class='w3-modal' >
            <div class='w3-modal-content w3-card-4 w3-animate-zoom' style='width:1000px;' >
                <header class='w3-container w3-white'> 
                    <span onclick=\"closeModal('id-modal20-" . $row['Dni'] . "')\" class='w3-button w3-white w3-display-topright'>&times;</span>
                    <h2 style='text-align: center; vertical-align: middle;'>" . $row['Nombre'] . " " . $row['Apellido'] .  "</h2>
                </header>
                <div id='-" . $row['Dni'] . "' class='w3-container'>
                
          ";
                                                        $dni_1 = $row['Dni'];
                                                        $sql2 = "SELECT datos_persona.*, datos_estudiante.*
         FROM datos_persona
         INNER JOIN datos_estudiante ON datos_persona.DNI = datos_estudiante.DNI
                                    AND datos_persona.Fecha_registro = datos_estudiante.Fecha_registro
         WHERE datos_persona.DNI = $dni_1";
                                                        $consulta2 = $conn->prepare($sql2);
                                                        if ($consulta2->execute()) {
                                                            $contador = 0;
                                                            while ($row2 = $consulta2->fetch()) {
                                                                $contador = $contador + 1;
                                                        ?>


                                                                <div class="campo">
                                                                    <section class='col-md-12' style='padding: 0px 0px 0px 15px;'>
                                                                        <input type='hidden'>
                                                                        <legend>FAMILIAR <?php echo $contador; ?></legend>

                                                                        <div class='fila'>
                                                                            <input type='text' placeholder='Nombre' name='nombre1' id='nombre1' value="<?php echo $row2['nombre'] ?>">
                                                                            <input type='text' placeholder='Apellido' name='apellido1' id='apellido1' value="<?php echo $row2['apellido'] ?>">
                                                                            <input type='text' placeholder='Edad' name='edad1' id='edad1' value="<?php echo $row2['edad'] ?>">
                                                                            <input type='text' placeholder='Rol familiar' name='rol1' id='rol1' value="<?php echo $row2['rol'] ?>">
                                                                        </div>
                                                                        <div class='fila'>
                                                                            <input type='text' placeholder='Ocupacion' name='ocupacion1' id='ocupacion1' value="<?php echo $row2['ocupacion'] ?>">
                                                                            <input type='text' placeholder='Escolaridad alcanzada' name='escolaridad1' id='escolaridad1' value="<?php echo $row2['escolaridad'] ?>">
                                                                            <input type='text' placeholder='Salario/Asignacion/Pension' name='salario_asignacion_pension1' id='salario_asignacion_pension1' value="<?php echo $row2['salario_asignacion_pension'] ?>">
                                                                            <input type='text' placeholder='Asist. sanit.' name='asist1' id='asist1' value="<?php echo $row2['asist'] ?>">
                                                                        </div>
                                                                        <div class='fila'>
                                                                            <input type='text' placeholder='Observaciones' name='observaciones1' id='observaciones1' value="<?php echo $row2['observaciones'] ?>">
                                                                        </div>
                                                                    </section>
                                                                <?php }
                                                        }
                                                        $dni_1 = $row['Dni'];
                                                        $sql3 = "SELECT datos_persona.*, datos_estudiante.*
         FROM datos_persona
         INNER JOIN datos_estudiante ON datos_persona.DNI = datos_estudiante.DNI
                                    AND datos_persona.Fecha_registro = datos_estudiante.Fecha_registro
         WHERE datos_persona.DNI = $dni_1";
                                                        $consulta3 = $conn->prepare($sql3);
                                                        if ($consulta3->execute()) {
                                                            $contador = 0;
                                                            if ($row3 = $consulta3->fetch()) { ?>
                                                                    <section class='col-md-12' style='padding: 0px 0px 0px 15px;'>
                                                                        <legend for='obs'>OBSERVACIONES SOBRE LA HISTORIA Y DINÁMICA FAMILIAR</legend>
                                                                        <div class='fila'>
                                                                            <input type='text' placeholder='Observaciones' name='obs' id='obs' value="<?php echo $row3['obs'] ?>">
                                                                        </div>
                                                                    </section>

                                                                    <section class="col-md-12" style="padding: 0px 0px 0px 15px;">
                                                                        <legend for="vivienda">VIVIENDA</legend>
                                                                        <div class="nuevo" style="display:flex;">
                                                                            <label for="tipo">TIPO</label>
                                                                            <div class="fila1">
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input" type="checkbox" id="individualCheck" name="construccion" value="individual">
                                                                                    <label class="form-check-label" for="individualCheck">INDIVIDUAL</label>
                                                                                </div>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input" type="checkbox" id="compartidaCheck" name="construccion" value="compartida">
                                                                                    <label class="form-check-label" for="compartidaCheck">COMPARTIDA</label>
                                                                                </div>
                                                                            </div>
                                                                            <!-- Construcción -->
                                                                            <label for="construccion">CONSTRUCCION</label>
                                                                            <div class="fila1">
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input" type="checkbox" id="materialCheck" name="construccion" value="material">
                                                                                    <label class="form-check-label" for="materialCheck">MATERIAL</label>
                                                                                </div>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input" type="checkbox" id="ranchoCheck" name="construccion" value="rancho">
                                                                                    <label class="form-check-label" for="ranchoCheck">RANCHO</label>
                                                                                </div>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input" type="checkbox" id="otrosCheck" name="construccion" value="otros">
                                                                                    <label class="form-check-label" for="otrosCheck">OTROS</label>
                                                                                </div>
                                                                            </div>
                                                                            <!-- Tenencia -->
                                                                            <label for="tenencia">TENENCIA</label>
                                                                            <hr>
                                                                            <div class="fila1">
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input" type="checkbox" id="propiaCheck" name="tenencia" value="propia">
                                                                                    <label class="form-check-label" for="propiaCheck">PROPIA</label>
                                                                                </div>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input" type="checkbox" id="prestadaCheck" name="tenencia" value="prestada">
                                                                                    <label class="form-check-label" for="prestadaCheck">PRESTADA</label>
                                                                                </div>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input" type="checkbox" id="alquiladaCheck" name="tenencia" value="alquilada">
                                                                                    <label class="form-check-label" for="alquiladaCheck">ALQUILADA</label>
                                                                                </div>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input" type="checkbox" id="cedidaCheck" name="tenencia" value="cedida">
                                                                                    <label class="form-check-label" for="cedidaCheck">CEDIDA</label>
                                                                                </div>
                                                                            </div>
                                                                            <label for="servicios">SERVICIOS</label>
                                                                            <div class="fila1">
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input" type="checkbox" id="aguaCheck" name="servicios" value="agua">
                                                                                    <label class="form-check-label" for="aguaCheck">AGUA</label>
                                                                                </div>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input" type="checkbox" id="luzCheck" name="servicios" value="luz">
                                                                                    <label class="form-check-label" for="luzCheck">LUZ</label>
                                                                                </div>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input" type="checkbox" id="gasCheck" name="servicios" value="gas">
                                                                                    <label class="form-check-label" for="gasCheck">GAS</label>
                                                                                </div>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input" type="checkbox" id="cloacasCheck" name="servicios" value="cloacas">
                                                                                    <label class="form-check-label" for="cloacasCheck">CLOACAS</label>
                                                                                </div>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input" type="checkbox" id="cableCheck" name="servicios" value="cable">
                                                                                    <label class="form-check-label" for="cableCheck">CABLE</label>
                                                                                </div>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input" type="checkbox" id="internetCheck" name="servicios" value="internet">
                                                                                    <label class="form-check-label" for="internetCheck">INTERNET</label>
                                                                                </div>
                                                                            </div>
                                                                    </section>
                                                                    <section class='col-md-12' style='padding: 0px 0px 0px 15px;'>
                                                                        <div class='fila'>
                                                                            <input type='text' placeholder='Numero de convivientes' name='numconvi' value="<?php echo $row3['numconvi'] ?>">
                                                                            <input type='text' placeholder='Numero de habitaciones' name='numhabit' value="<?php echo $row3['numhabit'] ?>">
                                                                        </div>
                                                                        <!-- Observaciones Generales -->
                                                                        <div class='fila'>
                                                                            <input type='text' placeholder='Observaciones generales' name='obsG' value="<?php echo $row3['obsG'] ?>">
                                                                        </div>
                                                                        <!-- Accesibilidad (Medios de Transporte) -->
                                                                        <div class='fila'>
                                                                            <input type='text' placeholder='Medios de transporte' name='mediosT' value="<?php echo $row3['mediosT'] ?>">
                                                                        </div>
                                                                    </section>
                                                                    <section class='col-md-12' style='padding: 0px 0px 0px 15px;'>
                                                                        <!-- HISTORIAL EVOLUCIÓN DE ENFERMEDAD -->
                                                                        <legend for='historial'>HISTORIAL EVOLUCIÓN DE ENFERMEDAD</legend>
                                                                        <div class='fila'>
                                                                            <input type='text' placeholder='DIAGNOSTICO:' name='diagnostico' value="<?php echo $row3['diagnostico'] ?>">
                                                                            <input type='text' placeholder='MEDICO DE CABECERA:' name='medico_cabecera' value="<?php echo $row3['medico_cabecera'] ?>">
                                                                            <input type='text' placeholder='TRATAMIENTO:' name='tratamiento' value="<?php echo $row3['tratamiento'] ?>">
                                                                        </div>
                                                                        <div class='fila'>
                                                                            <input type='text' placeholder='MEDICACIÓN INDICADA:' name='medicacion' value="<?php echo $row3['medicacion'] ?>">
                                                                        </div>
                                                                        <div class='fila'>
                                                                            <input type='text' placeholder='REQUIRIO INTERNACIÓN? SI/NO' name='tiempo_internacion' value="<?php echo $row3['tiempo_internacion'] ?>">
                                                                            <input type='text' placeholder='TIEMPO:' name='tiempo' value="<?php echo $row3['tiempo'] ?>">
                                                                            <input type='text' placeholder='PRONOSTICO:' name='pronostico' value="<?php echo $row3['pronostico'] ?>">
                                                                        </div>
                                                                        <div class='fila'>
                                                                            <input type='text' placeholder='OTRAS OBSERV: (CUIDADOS):' name='observaciones' value="<?php echo $row3['observaciones'] ?>">
                                                                        </div>
                                                                        <div class='fila'>
                                                                            <input type='text' placeholder='MANIFESTACIONES AFECTIVO-EMOCIONALES ASOCIADAS A LA SITUACIÓN DE ENFERMEDAD:' name='manifestaciones' value="<?php echo $row3['manifestaciones'] ?>">
                                                                        </div>
                                                                        <div class='fila'>
                                                                            <input type='text' placeholder='ENFERMEDADES PREVIAS IMPORTANTES O CRÓNICAS/ ACCIDENTES:' name='enfermedades_previas' value="<?php echo $row3['enfermedades_previas'] ?>">
                                                                        </div>
                                                                        <div class='fila'>
                                                                            <input type='text' placeholder='MEDICACIÓN QUE PUDIERA INCIDIR EN EL DESEMPEÑO ESCOLAR:' name='medicacion_incidir' value="<?php echo $row3['medicacion_incidir'] ?>">
                                                                        </div>
                                                                        <div class='fila'>
                                                                            <input type='text' placeholder='TRATAMIENTOS O TERAPEUTICA QUE RECIBA EL NIÑO:' name='tratamientos_terapeutica' value="<?php echo $row3['tratamientos_terapeutica'] ?>">
                                                                        </div>
                                                                    </section>
                                                                    <section class="col-md-12" style="padding: 0px 0px 0px 15px;">
                                                                        <!-- EDUCACIÓN -->
                                                                        <legend style="display: flex; justify-content:center;">NIVEL INICIAL</legend>
                                                                        <div class="fila">
                                                                            <input type="text" placeholder="SALA" name="nivel_inicial_sala" value="<?php echo $row3['nivel_inicial_sala']; ?>">
                                                                            <input type="text" placeholder="ASISTIÓ" name="nivel_inicial_asistio" value="<?php echo $row3['nivel_inicial_asistio']; ?>">
                                                                            <input type="text" placeholder="INSTITUCIÓN" name="nivel_inicial_institucion" value="<?php echo $row3['nivel_inicial_institucion']; ?>">
                                                                        </div>
                                                                        <div class="fila">
                                                                            <input type="text" placeholder="Observaciones educacion" name="obsE" value="<?php echo $row3['obsE']; ?>">
                                                                        </div>
                                                                        <legend style="display: flex; justify-content:center;">NIVEL PRIMARIO</legend>
                                                                        <div class="fila">
                                                                            <input type="text" placeholder="GRADO QUE CURSA:" name="nivel_primario_grado" value="<?php echo $row3['nivel_primario_grado']; ?>">
                                                                            <input type="text" placeholder="DOCENTE TUTOR:" name="nivel_primario_tutor" value="<?php echo $row3['nivel_primario_tutor']; ?>">
                                                                        </div>
                                                                    </section>

                                                                    <section class="col-md-12" style="padding: 0px 0px 0px 15px;">
                                                                        <!-- HISTORIA ESCOLAR -->
                                                                        <legend>HISTORIA ESCOLAR</legend>
                                                                        <div class="fila">
                                                                            <input type="text" placeholder="PROMOCIÓN AUTOMÁTICA EN EL PRIMER CICLO? SI/NO" name="promocion_automatica" value="<?php echo $row3['promocion_automatica']; ?>">
                                                                            <input type="text" placeholder="OBSERVACIONES" name="observaciones_promocion" value="<?php echo $row3['observaciones_promocion']; ?>">
                                                                        </div>
                                                                        <div class="fila">
                                                                            <input type="text" placeholder="CAMBIO DE ESCUELA? SI/NO" name="cambios_escuela" value="<?php echo $row3['cambios_escuela']; ?>">
                                                                            <input type="text" placeholder="INSTITUCIÓN" name="institucion_cambios" value="<?php echo $row3['institucion_cambios']; ?>">
                                                                            <input type="text" placeholder="REPITENCIA? SI/NO" name="repitencia" value="<?php echo $row3['repitencia']; ?>">
                                                                            <input type="text" placeholder="GRADO" name="grado_repitencia" value="<?php echo $row3['grado_repitencia']; ?>">
                                                                            <input type="text" placeholder="¿CUÁNTAS VECES?" name="veces_repitencia" value="<?php echo $row3['veces_repitencia']; ?>">
                                                                        </div>
                                                                        <div class="fila">
                                                                            <input type="text" placeholder="AUSENTISMO? SI/NO" name="ausentismo" value="<?php echo $row3['ausentismo']; ?>">
                                                                            <input type="text" placeholder="OBSERVACIONES" name="observaciones_ausentismo" value="<?php echo $row3['observaciones_ausentismo']; ?>">
                                                                        </div>
                                                                        <div class="fila">
                                                                            <input type="text" placeholder="DESERCION? SI/NO" name="desercion" value="<?php echo $row3['desercion']; ?>">
                                                                            <input type="text" placeholder="OBSERVACIONES" name="observaciones_desercion" value="<?php echo $row3['observaciones_desercion']; ?>">
                                                                        </div>
                                                                        <div class="fila">
                                                                            <input type="text" placeholder="DERIVACIÓN? SI/NO" name="derivacion" value="<?php echo $row3['derivacion']; ?>">
                                                                            <input type="text" placeholder="INTERVENCIÓN EQUIPO TÉCNICO DE APOYO? SI/NO" name="intervencion_equipo" value="<?php echo $row3['intervencion_equipo']; ?>">
                                                                        </div>
                                                                        <div class="fila">
                                                                            <input type="text" placeholder="PPI? SI/NO" name="ppi" value="<?php echo $row3['ppi']; ?>">
                                                                            <input type="text" placeholder="CARÁCTER ANTERIOR" name="caracter_anterior" value="<?php echo $row3['caracter_anterior']; ?>">
                                                                            <input type="text" placeholder="CARÁCTER ACTUAL" name="caracter_actual" value="<?php echo $row3['caracter_actual']; ?>">
                                                                            <input type="text" placeholder="NOMBRE" name="nombre_caracter" value="<?php echo $row3['nombre_caracter']; ?>">
                                                                        </div>
                                                                    </section>

                                                                    <section class="col-md-12" style="padding: 0px 0px 0px 15px;">
                                                                        <!-- ESCOLARIDAD HOSPITALARIA-DOMICILIARIA -->
                                                                        <legend>ESCOLARIDAD HOSPITALARIA-DOMICILIARIA</legend>
                                                                        <div class="fila">
                                                                            <input type="text" placeholder="RECIBIÓ CON ANTERIORIDAD EDUCACIÓN HOSPITALARIA/DOMICILIARIA? SI/NO" name="educacion_anterior" value="<?php echo $row3['educacion_anterior']; ?>">
                                                                            <input type="text" name="institucion_educacion" placeholder="INSTITUCIÓN" value="<?php echo $row3['institucion_educacion']; ?>">
                                                                            <input type="text" name="grado_educacion" placeholder="GRADO" value="<?php echo $row3['grado_educacion']; ?>">
                                                                        </div>
                                                                        <div class="fila">
                                                                            <input type="text" name="docente_educacion" placeholder="DOCENTE A CARGO" value="<?php echo $row3['docente_educacion']; ?>">
                                                                            <input type="text" name="tiempo_intervencion" placeholder="TIEMPO DE INTERVENCIÓN ESC, HOSP-DOMIC" value="<?php echo $row3['tiempo_intervencion']; ?>">
                                                                        </div>
                                                                    </section>
                                                                    <section class="col-md-12" style="padding: 0px 0px 0px 15px;">
                                                                        <!-- OBSERVACIONES GENERALES -->
                                                                        <legend>OBSERVACIONES GENERALES</legend>
                                                                        <div class="fila">
                                                                            <input name="observaciones_generales" placeholder="OBSERVACIONES GENERALES (DISPONIBILIDAD DE TIEMPOS, ESPACIOS, ETC)" value="<?php echo $row3['observaciones_generales']; ?>">
                                                                        </div>
                                                                    </section>
                                                                </div>
                                                        <?php }
                                                        } ?>
                        </div>
                        <div class='modal-footer justify-content-between'>
                            <button type='button' class='boton-anam rojo' data-dismiss='modal'>Cerrar</button>
                            <a href='generarPDF-amne.php?id=<?php echo $row['Dni']; ?>'>
                                <button type='submit' class='boton-anam celeste'>Imprimir PDF</button></a>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div><?php

                                                    endif;



                                                    echo "<td style='text-align: center; vertical-align: middle;'>
                                            ";

                                                    $idviejo3 = $row['Dni'];
                                                    $sql3 = "SELECT * FROM personales_fechas WHERE Dni = :idviejo3 ORDER BY Fecha_registro DESC LIMIT 1";

                                                    $consulta3 = $conn->prepare($sql3);
                                                    $consulta3->bindParam(':idviejo3', $idviejo3, PDO::PARAM_INT);

                                                    if ($consulta3->execute()) {
                                                        $row2 = $consulta3->fetch();
                                                        echo "<a href='EditarA.php?id=" . $row['Dni'] . "'><button class='boton editar'>EDITAR</button></a>
";

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

                                                    echo "<td style='text-align: center; vertical-align: middle;'></td>";
























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