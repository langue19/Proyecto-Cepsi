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

                        <form action="AgregarUsuario.php" method="post" id="regForm">

                            <h2 style="text-align: center;">Agregar Usuario</h2>

                            <div class="all-steps" id="all-steps">

                                <span class="step"><i class="fa fa-user"></i></span>

                            </div>



                            <div class="tab">

                                <div class="container">

                                    <div class="row">

                                        <label for="Nombre">Nombre</label>

                                        <input name="Nombre" type="text" class="fieldlabels" id="nomb" placeholder="Nombre">

                                        <label for="Apellido">Apellido</label>

                                        <input name="Apellido" type="text" class="fieldlabels" id="ape" placeholder="Apellido">

                                        <label for="Usuario">Usuario</label>

                                        <input name="Usuario" type="text" class="fieldlabels" id="user" placeholder="Usuario">

                                        <label for="nomb">Contraseña</label>

                                        <input name="Contraseña" type="password" class="fieldlabels" id="contra" placeholder="Contraseña">

                                        <label for="Contraseña">Estado:</label>

                                        <select name="Estado" id="Estado">

                                            <option value="Sin especificar">Seleccionar</option>

                                            <option value="1">Activo</option>

                                            <option value="0">Inactivo</option>

                                        </select>

                                        <label for="Posicion">Rol:</label>

                                        <select name="Posicion" id="Posicion">

                                            <option value="Sin especificar">Seleccionar</option>

                                            <option value="Administrador">Administrador</option>

                                            <option value="Usuario">Usuario</option>

                                            <option value="Psicopedagoga">Psicopedagoga</option>

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

</body>



</html>