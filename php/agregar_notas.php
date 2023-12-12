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



    <?php include 'aside.php';

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
    } ?>



    <div class="wrapper">

        <div class="content-wrapper" style="height: 400px;">



            <div class="container mt-5">

                <div class="row d-flex justify-content-center align-items-center">

                    <div class="col-md-8">

                        <form action="a_NOTAS.php" method="post" id="regForm">

                            <h2 style="text-align: center;">Agregar Notas</h2>

                            <div class="all-steps" id="all-steps">
                                <span class="step"><i class="fa fa-user"></i></span>
                                <span class="step"><i class="fa fa-map-marker"></i></span>
                            </div>
                            <div class="tab">
                                <div class="container">
                                    <input type="hidden" id="currentTab" value="0">
                                    <div class='container'>
                                        <div class='row'>
                                        <input type='hidden' id="DNI" name="DNI" value="<?php echo $id; ?>">
                                        <input type='hidden' id="editar" name="editar" value="nada">

                                        <label for='Año'>Año</label>

                                            <select name="AÑO">
                                                <option value="">Seleccionar un año</option>
                                                <?php
                                                $currentYear = date("Y");
                                                for ($year = 2019; $year <= 2030; $year++) {
                                                    echo "<option value=\"$year\" " . (($row2['AÑO'] == $year) ? 'selected' : '') . ">$year</option>";
                                                }
                                                ?>
                                            </select>

                                            <label for='Trimestre'>Trimestre</label>
                                            <select name="Trimestre">
                                                <option value="">Seleccionar una opción</option>
                                                <option value="Primer trimestre">Primer trimestre</option>
                                                <option value="Segundo trimestre">Segundo trimestre</option>
                                                <option value="Tercer trimestre">Tercer trimestre</option>
                                            </select>

                                            <label for='Lengua_cal'>Lengua Calificación</label>
                                            <input type='text' name='Lengua_cal'>
                                            <label for='Lengua_observaciones'>Observaciones</label>
                                            <input type='text' name='Lengua_observaciones'>
                                        </div>
                                        <div class='row'>

                                            <label for='Matematica_cal'>Matemática Calificación</label>
                                            <input type='text' name='Matematica_cal'>

                                            <label for='Matematica_observaciones'>Observaciones</label>
                                            <input type='text' name='Matematica_observaciones'></input>

                                        </div>
                                        <div class='row'>
                                            <label for='Sociales_cal'>Sociales Calificación</label>
                                            <input type='text' name='Sociales_cal'>
                                            <label for='Sociales_observaciones'>Observaciones</label>
                                            <input type='text' name='Sociales_observaciones'></input>

                                        </div>
                                        <div class='row'>
                                            <label for='Naturales_cal'>Naturales Calificación</label>
                                            <input type='text' name='Naturales_cal'>
                                            <label for='Naturales_observaciones'>Observaciones</label>
                                            <input type='text' name='Naturales_observaciones'></input>

                                        </div>
                                        <div class='row'>
                                            <label for='Tecnologia_cal'>Tecnología Calificación</label>
                                            <input type='text' name='Tecnologia_cal'>
                                            <label for='Tecnologia_observaciones'>Observaciones</label>
                                            <input type='text' name='Tecnologia_observaciones'></input>
                                        </div>
                                        <div class='row'>
                                            <label for='Musica_cal'>Música Calificación</label>
                                            <input type='text' name='Musica_cal'>

                                            <label for='Musica_observaciones'>Observaciones</label>
                                            <input type='text' name='Musica_observaciones'></input>
                                        </div>
                                        <div class='row'>
                                            <label for='Plastica_cal'>Plástica Calificación</label>
                                            <input type='text' name='Plastica_cal'>

                                            <label for='Plastica_observaciones'>Observaciones</label>
                                            <input type='text' name='Plastica_observaciones'></input>
                                        </div>
                                        <div class='row'>
                                            <label for='EticayCiudadana_cal'>Ética y Ciud. Calificación</label>
                                            <input type='text' name='EticayCiudadana_cal'>
                                            <label for='EticayCiudadana_observaciones'>Observaciones</label>
                                            <input type='text' name='EticayCiudadana_observaciones'></input>
                                        </div>


                                    </div>
                                </div>
                            </div>
                            <div class="tab">
                                <div class="container">
                                    <input type="hidden" id="currentTab" value="1">
                                    <div class='row'>
                                        <label for='Int_pract_destaca'>Se destacada en</label>
                                        <input type='text' name='Int_pract_destaca'></input>
                                        <label for='Int_pract_trabaja'>Trabaja bien en</label>
                                        <input type='text' name='Int_pract_trabaja'></input>
                                        <label for='Int_pract_mejorar'>Debe Mejorar en</label>
                                        <input type='text' name='Int_pract_mejorar'></input>
                                        <label for='Personales_soc_motiv'>Motivacion para la actividad escolar</label>
                                        <input type='text' name='Personales_soc_motiv'></input>
                                        <label for='Personales_soc_trabajo'>Habitos de trabajo</label>
                                        <input type='text' name='Personales_soc_trabajo'></input>
                                        <label for='Personales_soc_respons'>Responsabilidad en las tareas</label>
                                        <input type='text' name='Personales_soc_respons'></input>
                                        <label for='Personales_soc_acompañ'>Acompañamiento familiar</label>
                                        <input type='text' name='Personales_soc_acompañ'></input>
                                        <label for='Int_equipo_psicologo'>Psicólogo</label>
                                        <input type='text' name='Int_equipo_psicologo'></input>
                                        <label for='Int_equipo_psicopedagogo'>Psicopedagogo</label>
                                        <input type='text' name='Int_equipo_psicopedagogo'></input>
                                        <label for='Observaciones_generales'>Observaciones Generales</label>
                                        <input type='text' name='Observaciones_generales'></input>
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