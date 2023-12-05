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



    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



</head>



<body class="hold-transition sidebar-mini" style="background-color: #f4f6f9;">



    <?php include 'aside.php'; ?>



    <div class="wrapper">

        <div class="content-wrapper" style="height: 400px;">



            <div class="container mt-5">

                <div class="row d-flex justify-content-center align-items-center">

                    <div class="col-md-8">

                        <form action="agregarTodo.php" method="post" id="regForm">

                            <h2 style="text-align: center;">Agregar alumno</h2>

                            <div class="all-steps" id="all-steps">

                                <span class="step"><i class="fa fa-map-marker"></i></span>

                                <span class="step"><i class="fa fa-shopping-bag"></i></span>

                            </div>


                            <div class="tab">

                                <div class="container">

                                    <input type="hidden" id="currentTab" value="1">





                                    <div class="row">
                                        <?php 
                                        if (isset($_GET['dni'])) {
                                            $dni = $_GET['dni'];
                                        } ?>

                                        <input name="documento" type="hidden" value="<?php echo $dni; ?>">
                                        
                                        <input name="pasa" type="hidden" value="reingreso">


                                        <label for="fechaing">Fecha de Registro</label>

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

                                            <option value="Comun">Comun</option>

                                            <option value="Especial">Especial</option>

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

                                        <label for="">Resuelve Operaciones Basicas?</label>

                                        <select name="resuelvOpBas">

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

                                    </div>



                                </div>

                            </div>

                            <div class="tab">

                                <div class="container">

                                    <input type="hidden" id="currentTab" value="2">



                                    <div class="form-card">

                                        <div class="row">

                                            <label for="internacion">En que estado se encuentra?</label>

                                            <select name="estado" id="estado" onchange="showForm(this.value)">

                                                <option value="">Selecciona una opción</option>

                                                <option value="Internacion">Internacion</option>

                                                <option value="Domiciliario">Domiciliario</option>

                                            </select>

                                        </div>



                                        <div id="form1" style="display: none;">

                                            <h2 style="text-align: center;">Internacion</h2>

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



                                        </div>

                                        <div id="form2" style="display: none;">

                                            <h2 style="text-align: center;">Domiciliario</h2>

                                            <label for="dire">Direccion</label>

                                            <input name="dire" type="text" class="fieldlabels" id="dire" placeholder="Direccion">

                                            <label for="disc">Discapacidad</label>

                                            <input name="disc" type="text" class="fieldlabels" id="disc" placeholder="Discapacidad">

                                            <label for="obs">Observacion</label>

                                            <input name="obs" type="text" class="fieldlabels" id="obs" placeholder="Observacion">

                                            <label for="diag">Diagnostico</label>

                                            <input name="diag" type="text" class="fieldlabels" id="diag" placeholder="Diagnostico">



                                        </div>

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