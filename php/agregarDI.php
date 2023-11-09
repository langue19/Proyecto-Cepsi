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

            // Obtener el ID del registro desde la URL

            $id = $_GET['id'];



            // Realizar una consulta a la base de datos para obtener los datos del registro

            // Asegúrate de reemplazar los valores en 'nombre_usuario', 'contraseña_usuario', 'estado_usuario', 'posicion_usuario'

            // con los nombres de las columnas en tu tabla de datos_usuarios

            // y 'nombre_tabla' con el nombre real de la tabla.

            // Además, ajusta la conexión a tu base de datos.

            include 'crearTabla.php';

            $id = $_GET['id'];

            $estado = $_GET['estado'];

            $sql = "SELECT *

FROM datos_personales 

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

            <div class="container mt-5">

                <div class="row d-flex justify-content-center align-items-center">

                    <div class="col-md-8">

                        <form action="agregarDatosI.php" method="post" id="regForm">

                            <h2 style="text-align: center;">Datos de <?php echo $estado; ?></h2>
                            <div class="all-steps" id="all-steps">

                                <span class="step"><i class="fa fa-user"></i></span>

                            </div>

                            <div class="tab">

                                <div class="container">

                                    <input type="hidden" id="currentTab" value="0">

                                    <div class="row">

                                        <label for="dni">DNI:</label>

                                        <input value="<?php echo isset($registro['Dni']) ? $registro['Dni'] : ''; ?>" name="dni" type="text" class="fieldlabels" id="dni" style="text-align:center;background-color: antiquewhite;" readonly>

                                        <label for="fecha">Fecha</label>

                                        <input name="fecha" type="date" class="fieldlabels" id="fecha">
                                        <?php

                                        if ($estado === "Internacion") { ?>
                                            <label for="nombt">Sala</label>

                                            <input name="sala" type="text" class="fieldlabels" id="nombt" placeholder="Sala">

                                            <label for="nombt">Habitacion</label>

                                            <input name="habitacion" type="text" class="fieldlabels" id="nombt" placeholder="Habitacion">

                                            <label for="nombt">Cama</label>

                                            <input name="cama" type="text" class="fieldlabels" id="nombt" placeholder="Cama">

                                            <label for="disc1">Discapacidad</label>

                                            <input name="disc1" type="text" class="fieldlabels" id="disc1" placeholder="Discapacidad">

                                            <label for="obs1">Observacion</label>

                                            <input name="obs1" type="text" class="fieldlabels" id="obs1" placeholder="Observacion">

                                            <label for="diag1">Diagnostico</label>

                                            <input name="diag1" type="text" class="fieldlabels" id="diag1" placeholder="Diagnostico">
                                        <?php
                                        } elseif ($estado === "Domiciliario") {
                                        ?>

                                            <label for="dire">Direccion</label>

                                            <input name="dire" type="text" class="fieldlabels" id="dire" placeholder="Direccion">

                                            <label for="disc">Discapacidad</label>

                                            <input name="disc" type="text" class="fieldlabels" id="disc" placeholder="Discapacidad">

                                            <label for="obs">Observacion</label>

                                            <input name="obs" type="text" class="fieldlabels" id="obs" placeholder="Observacion">

                                            <label for="diag">Diagnostico</label>

                                            <input name="diag" type="text" class="fieldlabels" id="diag" placeholder="Diagnostico">



                                        <?php
                                        }

                                        ?>
                                    </div>




                                </div>

                            </div>



                            <div style="overflow:auto;" id="nextprevious">

                                <div style="float:right;">

                                    <button class="action-button" type="button" id="cancelBtn" onclick="cancelForm()">Cancelar</button>

                                    <button class="action-button" type="button" id="prevBtn" onclick="nextPrev(-1)">Anterior</button>

                                    <button class="action-button" type="button" id="nextBtn" onclick="nextPrev(1)">Siguiente</button>

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