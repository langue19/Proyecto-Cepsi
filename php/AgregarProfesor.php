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

        <div class="content-wrapper" style="height: 400px;">





            <div class="container mt-5">

                <div class="row d-flex justify-content-center align-items-center">

                    <div class="col-md-8">

                        <form action="AgregarProf.php" method="post" id="regForm">

                            <h2 style="text-align: center;">Agregar Profesor</h2>

                            <div class="all-steps" id="all-steps">

                                <span class="step"><i class="fa fa-user"></i></span>

                            </div>



                            <div class="tab">

                                <div class="container">

                                    <div class="row">

                                        <label for="ape">Apellido:</label>

                                        <input name="apellido" type="text" class="fieldlabels" id="ape" placeholder="Apellido" required>

                                        <label for="nomb">Nombre:</label>

                                        <input name="nombre" type="text" class="fieldlabels" id="nomb" placeholder="Nombre" required>

                                    </div>

                                    <div class="row">

                                        <label for="dni">Dni:</label>

                                        <input name="documento" type="text" class="fieldlabels" id="dni" placeholder="Documento" required>

                                        <label for="estado">Estado:</label>

                                        <select name="estado" id="estado" class="form-control" style="background-color:whitesmoke;

                                        

                                        color: black;" required>

                                            <option value="Sin especificar">Seleccionar</option>

                                            <option value="Activo">Activo</option>

                                            <option value="Inactivo">Inactivo</option>

                                        </select>

                                    </div>

                                </div>

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
            window.location.href = 'formularioProfesor.php';
        }
    </script>

</body>



</html>