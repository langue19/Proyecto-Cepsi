<?php

session_start();

?>

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

    <?php include 'aside.php'; ?>

    <div class="wrapper">





        <?php

        if (isset($_GET['id'])) {

            $dni = $_GET['id'];
        }



        include 'crearTabla.php';

        $sql1 = "SELECT *

    FROM datos_personales WHERE Dni = $dni;

    ";



        $consulta = $conn->prepare($sql1);



        if ($consulta->execute()) {
        }

        while ($row = $consulta->fetch()) {
        }

        $sql1 = "SELECT Dni, Nombre, Apellido

                FROM datos_personales WHERE Dni = $dni;

            ";



        $consulta = $conn->prepare($sql1);



        if ($consulta->execute()) {

            // Recupera los datos de la consulta

            $row = $consulta->fetch();



            // Utiliza los datos en tu formulario

            $nombre = $row['Nombre'];

            $apellido = $row['Apellido'];
        }

        ?>



        <div class="content-wrapper" style="height: 400px;">

            <div class="container mt-5">

                <div class="row d-flex justify-content-center align-items-center">

                    <div class="col-md-8">

                        <form action="agregarObservacion.php" method="post" id="regForm">

                            <h2 style="text-align: center;">Agregar Observaciones</h2>

                            <div class="all-steps" id="all-steps">

                                <span class="step"><i class="fa fa-user"></i></span>

                            </div>



                            <div class="tab">

                                <div class="container">

                                    <div class="row">

                                        <label for="dni">DNI</label>

                                        <input style="background-color:antiquewhite; text-align: center;" name="dni" type="text" class="fieldlabels" id="dni" placeholder="DNI" value="<?php echo $dni; ?>" readonly>

                                        <label for="nomb">Apellido y Nombre</label>

                                        <input style="background-color:antiquewhite; text-align: center;" name="nombre" type="text" class="fieldlabels" id="nomb" placeholder="Observaciones" value="<?php echo $row['Apellido'] . " " . $row['Nombre']; ?>" readonly>



                                    </div>

                                    <div class="row">

                                        <label for="fecha">Fecha</label>

                                        <input name="fecha" type="date" class="form-control" id="fecha">



                                        <label for="Observaciones">Observaciones</label>

                                        <input name="Observaciones" type="text" class="fieldlabels" id="Observaciones" placeholder="Observaciones">




                                        <?php

                                        session_start();

                                        $posicion = $_SESSION['Posicion'];

                                        // Verificar si el usuario ha iniciado sesión (esto dependerá de tu sistema de autenticación)

                                        if ($posicion == 'Usuario') {

                                            $ape = $_SESSION["Apellido"];

                                            $nomb = $_SESSION["Nombre"];

                                            echo " <label for='Profesor'>Profesor</label><input style='background-color:antiquewhite; text-align: center;' name='Contenido' type='text' class='fieldlabels' id='Contenido' value='$ape $nomb' readonly>";
                                        } else {

                                            echo "<label for='Profesor'>Psicopedagoga</label>

                            <select name='Profesor' id='Profesor' class='form-control' style='background-color:whitesmoke;color: black;'>";
                                        }

                                        ?>





                                    </div>

                                    <?php

                                    // Conecta a la base de datos y ejecuta una consulta para obtener los profesores

                                    include 'conexion.php';

                                    include 'crearBD.php';

                                    include 'crearTabla.php';

                                    if ($posicion == 'Administrador') {

                                        $conn->exec("USE $dbname");

                                        $stmt = $conn->query("SELECT Nombre, Apellido FROM datos_profesor WHERE Estado = true"); // Ajusta la consulta según tus necesidades

                                        echo "<option value=''>Seleccionar</option>";

                                        // Itera a través de los resultados y crea una opción para cada profesor

                                        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

                                            $nombre = $row['Nombre'];

                                            $apellido = $row['Apellido'];

                                            echo "<option value=\"$nombre $apellido\">$nombre $apellido</option>";
                                        }

                                        echo "</select>";
                                    }

                                    ?>



                                    <div style="overflow:auto;" id="nextprevious">

                                        <div style="float:right;">
                                            <button class="action-button" type="button" id="cancelBtn" onclick="cancelForm()">Cancelar</button>

                                            <button class="action-button" type="button" id="prevBtn" onclick="nextPrev(-1)">Anterior</button>

                                            <button class="action-button" type="button" id="nextBtn" onclick="nextPrev(1)">Siguiente</button>

                                        </div>

                                    </div>

                                </div>

                        </form>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <!-- jQuery -->

    <script src="plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap -->

    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- AdminLTE -->

    <script src="dist/js/adminlte.js"></script>



    <!-- OPTIONAL SCRIPTS -->

    <script src="plugins/chart.js/Chart.min.js"></script>
    <script>

    function cancelForm() {
        // Redirige al usuario a la página deseada
        window.location.href = 'formularioAlumno.php';
    }
</script>

</body>



</html>