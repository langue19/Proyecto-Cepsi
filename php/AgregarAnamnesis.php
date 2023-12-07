<?php



session_start();



?>



<html>







<head>



    <title>FJV | Escuela CEPSI</title>



    <meta charset="UTF-8">



    <!-- CSS only -->



    <link href="\Proyecto-master\Proyecto-master\bootstrap\css\bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">



    <link rel="stylesheet" type="text/css" href="/Proyecto-master/Proyecto-master/css/sidebar.css">



    <link rel="shortcut icon" href="/Proyecto-master/Proyecto-master/favicon/favicon-32x32.png">







    <!-- Aquí incluye el enlace a la biblioteca jQuery -->



    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>



    <!-- Aquí incluye el enlace a tu archivo JavaScript -->















    <link rel="stylesheet" href="\Proyecto-master\Proyecto-master\css\w3.css">



    <!-- REQUIRED SCRIPTS -->



    <!-- Google Font: Source Sans Pro -->



    <link rel="stylesheet" href="\Proyecto-master\Proyecto-master\css\font.css">



    <!-- Font Awesome Icons -->



    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">



    <!-- IonIcons -->



    <link rel="stylesheet" href="\Proyecto-master\Proyecto-master\css\code.ionic.css">



    <!-- Theme style -->



    <link rel="stylesheet" href="dist/css/adminlte.min.css">



    <!-- jQuery -->



    <script src="plugins/jquery/jquery.min.js"></script>



    <!-- Bootstrap -->



    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>



    <!-- AdminLTE -->



    <script src="dist/js/adminlte.js"></script>







    <!-- OPTIONAL SCRIPTS -->



    <script src="plugins/chart.js/Chart.min.js"></script>







</head>


<?php







if (isset($_GET['id'])) {
    $id = $_GET['id'];
}
?>





<body class="hold-transition sidebar-mini" style="background-color: #f4f6f9;">



    <?php include 'aside.php'; ?>



    <div class="wrapper">



        <!-- Content Wrapper. Contains page content -->



        <div class="content-wrapper" style="height: 600px;">















            <div class="container">



                <section class="row">



                    <div class="col-md-12">



                        <h1 class="text-center">Consejo General de Educacion.</h1>



                        <h4 class="text-center">ESCUELA HOSPITALARIA – DOMICILIARIA DR. FRANCISCO J. VIANO.</h4>



                        <h4 class="text-center">Anamnesis</h4>



                    </div>



                </section>



                <hr><br />

                <form action="agregarAmne.php" method="POST">

                    <section class="row">
                        <?php
                        date_default_timezone_set('America/Argentina/Buenos_Aires');
                        $fechaActual = date('Y-m-d');
                        ?>
                        <input type="hidden" id="fechaActual" name="fechaActual" value="<?php echo $fechaActual; ?>" readonly>

                        <section class='col-md-12' style='padding: 0px 0px 0px 15px;'>
                            <input type='hidden' id="dni" name="dni" value="<?php echo $id; ?>">
                            <legend>FAMILIAR 1</legend>

                            <div class='fila'>
                                <input type='text' placeholder='Nombre' name='nombre1' id='nombre1'>
                                <input type='text' placeholder='Apellido' name='apellido1' id='apellido1'>
                                <input type='text' placeholder='Edad' name='edad1' id='edad1'>
                                <input type='text' placeholder='Rol familiar' name='rol1' id='rol1'>
                            </div>
                            <div class='fila'>
                                <input type='text' placeholder='Ocupacion' name='ocupacion1' id='ocupacion1'>
                                <input type='text' placeholder='Escolaridad alcanzada' name='escolaridad1' id='escolaridad1'>
                                <input type='text' placeholder='Salario/Asignacion/Pension' name='salario_asignacion_pension1' id='salario_asignacion_pension1'>
                                <input type='text' placeholder='Asist. sanit.' name='asist1' id='asist1'>
                            </div>
                            <div class='fila'>
                                <input type='text' placeholder='Observaciones' name='observaciones1' id='observaciones1'>
                            </div>
                        </section>

                        <section class='col-md-12' style='padding: 0px 0px 0px 15px;'>
                            <input type='hidden'>
                            <legend>FAMILIAR 2</legend>

                            <div class='fila'>
                                <input type='text' placeholder='Nombre' name='nombre2' id='nombre2'>
                                <input type='text' placeholder='Apellido' name='apellido2' id='apellido2'>
                                <input type='text' placeholder='Edad' name='edad2' id='edad2'>
                                <input type='text' placeholder='Rol familiar' name='rol2' id='rol2'>
                            </div>
                            <div class='fila'>
                                <input type='text' placeholder='Ocupacion' name='ocupacion2' id='ocupacion2'>
                                <input type='text' placeholder='Escolaridad alcanzada' name='escolaridad2' id='escolaridad2'>
                                <input type='text' placeholder='Salario/Asignacion/Pension' name='salario_asignacion_pension2' id='salario_asignacion_pension2'>
                                <input type='text' placeholder='Asist. sanit.' name='asist2' id='asist2'>
                            </div>
                            <div class='fila'>
                                <input type='text' placeholder='Observaciones' name='observaciones2' id='observaciones2'>
                            </div>
                        </section>

                        <section class='col-md-12' style='padding: 0px 0px 0px 15px;'>
                            <input type='hidden'>
                            <legend>FAMILIAR 3</legend>

                            <div class='fila'>
                                <input type='text' placeholder='Nombre' name='nombre3' id='nombre3'>
                                <input type='text' placeholder='Apellido' name='apellido3' id='apellido3'>
                                <input type='text' placeholder='Edad' name='edad3' id='edad3'>
                                <input type='text' placeholder='Rol familiar' name='rol3' id='rol3'>
                            </div>
                            <div class='fila'>
                                <input type='text' placeholder='Ocupacion' name='ocupacion3' id='ocupacion3'>
                                <input type='text' placeholder='Escolaridad alcanzada' name='escolaridad3' id='escolaridad3'>
                                <input type='text' placeholder='Salario/Asignacion/Pension' name='salario_asignacion_pension3' id='salario_asignacion_pension3'>
                                <input type='text' placeholder='Asist. sanit.' name='asist3' id='asist3'>
                            </div>
                            <div class='fila'>
                                <input type='text' placeholder='Observaciones' name='observaciones3' id='observaciones3'>
                            </div>
                        </section>

                        <section class='col-md-12' style='padding: 0px 0px 0px 15px;'>
                            <input type='hidden'>
                            <legend>FAMILIAR 4</legend>

                            <div class='fila'>
                                <input type='text' placeholder='Nombre' name='nombre4' id='nombre4'>
                                <input type='text' placeholder='Apellido' name='apellido4' id='apellido4'>
                                <input type='text' placeholder='Edad' name='edad4' id='edad4'>
                                <input type='text' placeholder='Rol familiar' name='rol4' id='rol4'>
                            </div>
                            <div class='fila'>
                                <input type='text' placeholder='Ocupacion' name='ocupacion4' id='ocupacion4'>
                                <input type='text' placeholder='Escolaridad alcanzada' name='escolaridad4' id='escolaridad4'>
                                <input type='text' placeholder='Salario/Asignacion/Pension' name='salario_asignacion_pension4' id='salario_asignacion_pension4'>
                                <input type='text' placeholder='Asist. sanit.' name='asist4' id='asist4'>
                            </div>
                            <div class='fila'>
                                <input type='text' placeholder='Observaciones' name='observaciones4' id='observaciones4'>
                            </div>
                        </section>

                        <section class='col-md-12' style='padding: 0px 0px 0px 15px;'>
                            <input type='hidden'>
                            <legend>FAMILIAR 5</legend>

                            <div class='fila'>
                                <input type='text' placeholder='Nombre' name='nombre5' id='nombre5'>
                                <input type='text' placeholder='Apellido' name='apellido5' id='apellido5'>
                                <input type='text' placeholder='Edad' name='edad5' id='edad5'>
                                <input type='text' placeholder='Rol familiar' name='rol5' id='rol5'>
                            </div>
                            <div class='fila'>
                                <input type='text' placeholder='Ocupacion' name='ocupacion5' id='ocupacion5'>
                                <input type='text' placeholder='Escolaridad alcanzada' name='escolaridad5' id='escolaridad5'>
                                <input type='text' placeholder='Salario/Asignacion/Pension' name='salario_asignacion_pension5' id='salario_asignacion_pension5'>
                                <input type='text' placeholder='Asist. sanit.' name='asist5' id='asist5'>
                            </div>
                            <div class='fila'>
                                <input type='text' placeholder='Observaciones' name='observaciones5' id='observaciones5'>
                            </div>
                        </section>
                        <section class='col-md-12' style='padding: 0px 0px 0px 15px;'>
                            <input type='hidden'>
                            <legend>FAMILIAR 6</legend>

                            <div class='fila'>
                                <input type='text' placeholder='Nombre' name='nombre6' id='nombre6'>
                                <input type='text' placeholder='Apellido' name='apellido6' id='apellido6'>
                                <input type='text' placeholder='Edad' name='edad6' id='edad6'>
                                <input type='text' placeholder='Rol familiar' name='rol6' id='rol6'>
                            </div>
                            <div class='fila'>
                                <input type='text' placeholder='Ocupacion' name='ocupacion6' id='ocupacion6'>
                                <input type='text' placeholder='Escolaridad alcanzada' name='escolaridad6' id='escolaridad6'>
                                <input type='text' placeholder='Salario/Asignacion/Pension' name='salario_asignacion_pension6' id='salario_asignacion_pension6'>
                                <input type='text' placeholder='Asist. sanit.' name='asist6' id='asist6'>
                            </div>
                            <div class='fila'>
                                <input type='text' placeholder='Observaciones' name='observaciones6' id='observaciones6'>
                            </div>
                        </section>
                        <section class='col-md-12' style='padding: 0px 0px 0px 15px;'>
                            <input type='hidden'>
                            <legend>FAMILIAR 7</legend>

                            <div class='fila'>
                                <input type='text' placeholder='Nombre' name='nombre7' id='nombre7'>
                                <input type='text' placeholder='Apellido' name='apellido7' id='apellido7'>
                                <input type='text' placeholder='Edad' name='edad7' id='edad7'>
                                <input type='text' placeholder='Rol familiar' name='rol7' id='rol7'>
                            </div>
                            <div class='fila'>
                                <input type='text' placeholder='Ocupacion' name='ocupacion7' id='ocupacion7'>
                                <input type='text' placeholder='Escolaridad alcanzada' name='escolaridad7' id='escolaridad7'>
                                <input type='text' placeholder='Salario/Asignacion/Pension' name='salario_asignacion_pension7' id='salario_asignacion_pension7'>
                                <input type='text' placeholder='Asist. sanit.' name='asist7' id='asist7'>
                            </div>
                            <div class='fila'>
                                <input type='text' placeholder='Observaciones' name='observaciones7' id='observaciones7'>
                            </div>
                        </section>
                        <section class='col-md-12' style='padding: 0px 0px 0px 15px;'>
                            <legend for='obs'>OBSERVACIONES SOBRE LA HISTORIA Y DINÁMICA FAMILIAR</legend>
                            <div class='fila'>
                                <input type='text' placeholder='Observaciones' name='obs' id='obs'>
                            </div>
                        </section>

                        <section class="col-md-12" style="padding: 0px 0px 0px 15px;">
                            <legend for="vivienda">VIVIENDA</legend>
                            <div class="nuevo" style="display:flex;">
                                <label for="tipo">TIPO</label>
                                <div class="fila1">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="individualCheck" name="tipo[]" value="individual">
                                        <label class="form-check-label" for="individualCheck">INDIVIDUAL</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="compartidaCheck" name="tipo[]" value="compartida">
                                        <label class="form-check-label" for="compartidaCheck">COMPARTIDA</label>
                                    </div>
                                </div>
                                <!-- Construcción -->
                                <label for="construccion">CONSTRUCCION</label>
                                <div class="fila1">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="materialCheck" name="construccion[]" value="material">
                                        <label class="form-check-label" for="materialCheck">MATERIAL</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="ranchoCheck" name="construccion[]" value="rancho">
                                        <label class="form-check-label" for="ranchoCheck">RANCHO</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="otrosCheck" name="construccion[]" value="otros">
                                        <label class="form-check-label" for="otrosCheck">OTROS</label>
                                    </div>
                                </div>
                                <!-- Tenencia -->
                                <label for="tenencia">TENENCIA</label>
                                <hr>
                                <div class="fila1">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="propiaCheck" name="tenencia[]" value="propia">
                                        <label class="form-check-label" for="propiaCheck">PROPIA</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="prestadaCheck" name="tenencia[]" value="prestada">
                                        <label class="form-check-label" for="prestadaCheck">PRESTADA</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="alquiladaCheck" name="tenencia[]" value="alquilada">
                                        <label class="form-check-label" for="alquiladaCheck">ALQUILADA</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="cedidaCheck" name="tenencia[]" value="cedida">
                                        <label class="form-check-label" for="cedidaCheck">CEDIDA</label>
                                    </div>
                                </div>
                                <label for="servicios">SERVICIOS</label>
                                <div class="fila1">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="aguaCheck" name="servicios[]" value="agua">
                                        <label class="form-check-label" for="aguaCheck">AGUA</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="luzCheck" name="servicios[]" value="luz">
                                        <label class="form-check-label" for="luzCheck">LUZ</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="gasCheck" name="servicios[]" value="gas">
                                        <label class="form-check-label" for="gasCheck">GAS</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="cloacasCheck" name="servicios[]" value="cloacas">
                                        <label class="form-check-label" for="cloacasCheck">CLOACAS</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="cableCheck" name="servicios[]" value="cable">
                                        <label class="form-check-label" for="cableCheck">CABLE</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="internetCheck" name="servicios[]" value="internet">
                                        <label class="form-check-label" for="internetCheck">INTERNET</label>
                                    </div>
                                </div>
                        </section>
                        <section class="col-md-12" style="padding: 0px 0px 0px 15px;">
                            <div class="fila">
                                <input type="text" placeholder="Numero de convivientes" name="numconvi">
                                <input type="text" placeholder="Numero de habitaciones" name="numhabit">
                            </div>
                            <!-- Observaciones Generales -->
                            <div class="fila">
                                <input type="text" placeholder="Observaciones generales" name="obsG">
                            </div>
                            <!-- Accesibilidad (Medios de Transporte) -->
                            <div class="fila">
                                <input type="text" placeholder="Medios de transporte" name="mediosT">
                            </div>
                        </section>
                        <section class="col-md-12" style="padding: 0px 0px 0px 15px;">
                            <!-- HISTORIAL EVOLUCIÓN DE ENFERMEDAD -->
                            <legend for="historial">HISTORIAL EVOLUCIÓN DE ENFERMEDAD</legend>
                            <div class="fila">
                                <input type="text" placeholder="DIAGNOSTICO:" name="diagnostico">
                                <input type="text" placeholder="MEDICO DE CABECERA:" name="medico_cabecera">
                                <input type="text" placeholder="TRATAMIENTO:" name="tratamiento">
                            </div>
                            <div class="fila">
                                <input type="text" placeholder="MEDICACIÓN INDICADA:" name="medicacion">
                            </div>
                            <div class="fila">
                                <input type="text" placeholder="REQUIRIO INTERNACIÓN? SI/NO" name="tiempo_internacion">
                                <input type="text" placeholder="TIEMPO:" name="tiempo">
                                <input type="text" placeholder="PRONOSTICO:" name="pronostico">
                            </div>
                            <div class="fila">
                                <input type="text" placeholder="OTRAS OBSERV: (CUIDADOS):" name="observaciones">
                            </div>
                            <div class="fila">
                                <input type="text" placeholder="MANIFESTACIONES AFECTIVO-EMOCIONALES ASOCIADAS A LA SITUACIÓN DE ENFERMEDAD:" name="manifestaciones">
                            </div>
                            <div class="fila">
                                <input type="text" placeholder="ENFERMEDADES PREVIAS IMPORTANTES O CRÓNICAS/ ACCIDENTES:" name="enfermedades_previas">
                            </div>
                            <div class="fila">
                                <input type="text" placeholder="MEDICACIÓN QUE PUDIERA INCIDIR EN EL DESEMPEÑO ESCOLAR:" name="medicacion_incidir">
                            </div>
                            <div class="fila">
                                <input type="text" placeholder="TRATAMIENTOS O TERAPEUTICA QUE RECIBA EL NIÑO:" name="tratamientos_terapeutica">
                            </div>
                        </section>
                        <section class="col-md-12" style="padding: 0px 0px 0px 15px;">
                            <!-- EDUCACIÓN -->
                            <legend style="display: flex; justify-content:center;">NIVEL INICIAL</legend>
                            <div class="fila">
                                <input type="text" placeholder="SALA" name="nivel_inicial_sala">
                                <input type="text" placeholder="ASISTIÓ" name="nivel_inicial_asistio">
                                <input type="text" placeholder="INSTITUCIÓN" name="nivel_inicial_institucion">
                            </div>
                            <div class="fila">
                                <input type="text" placeholder="Observaciones educacion" name="obsE">
                            </div>
                            <legend style="display: flex; justify-content:center;">NIVEL PRIMARIO</legend>
                            <div class="fila">
                                <input type="text" placeholder="GRADO QUE CURSA:" name="nivel_primario_grado">
                                <input type="text" placeholder="DOCENTE TUTOR:" name="nivel_primario_tutor">
                            </div>
                        </section>
                        <section class="col-md-12" style="padding: 0px 0px 0px 15px;">
                            <!-- HISTORIA ESCOLAR -->
                            <legend>HISTORIA ESCOLAR</legend>
                            <div class="fila">
                                <input type="text" placeholder="PROMOCIÓN AUTOMÁTICA EN EL PRIMER CICLO? SI/NO" name="promocion_automatica">
                                <input type="text" placeholder="OBSERVACIONES" name="observaciones_promocion">
                            </div>
                            <div class="fila">
                                <input type="text" placeholder="CAMBIO DE ESCUELA? SI/NO" name="cambios_escuela">
                                <input type="text" placeholder="INSTITUCIÓN" name="institucion_cambios">
                                <input type="text" placeholder="REPITENCIA? SI/NO" name="repitencia">
                                <input type="text" placeholder="GRADO" name="grado_repitencia">
                                <input type="text" placeholder="¿CUÁNTAS VECES?" name="veces_repitencia">
                            </div>

                            <div class="fila">
                                <input type="text" placeholder="AUSENTISMO? SI/NO" name="ausentismo">
                                <input type="text" placeholder="OBSERVACIONES" name="observaciones_ausentismo">
                            </div>
                            <div class="fila">
                                <input type="text" placeholder="DESERCION? SI/NO" name="desercion">
                                <input type="text" placeholder="OBSERVACIONES" name="observaciones_desercion">
                            </div>
                            <div class="fila">
                                <input type="text" placeholder="DERIVACIÓN? SI/NO" name="derivacion">
                                <input type="text" placeholder="INTERVENCIÓN EQUIPO TÉCNICO DE APOYO? SI/NO" name="intervencion_equipo">

                            </div>
                            <div class="fila">
                                <input type="text" placeholder="PPI? SI/NO" name="desercion">
                                <input type="text" placeholder="CARÁCTER ANTERIOR" name="caracter_anterior">
                                <input type="text" placeholder="CARÁCTER ACTUAL" name="caracter_actual">
                                <input type="text" placeholder="NOMBRE" name="nombre_caracter">
                            </div>
                        </section>
                        <section class="col-md-12" style="padding: 0px 0px 0px 15px;">
                            <!-- ESCOLARIDAD HOSPITALARIA-DOMICILIARIA -->
                            <legend>ESCOLARIDAD HOSPITALARIA-DOMICILIARIA</legend>
                            <div class="fila">
                                <input type="text" placeholder="RECIBIÓ CON ANTERIORIDAD EDUCACIÓN HOSPITALARIA/DOMICILIARIA? SI/NO" name="educacion_anterior">
                                <input type="text" name="institucion_educacion" placeholder="INSTITUCIÓN">
                                <input type="text" name="grado_educacion" placeholder="GRADO">
                            </div>
                            <div class="fila">
                                <input type="text" name="docente_educacion" placeholder="DOCENTE A CARGO">
                                <input type="text" name="tiempo_intervencion" placeholder="TIEMPO DE INTERVENCIÓN ESC, HOSP-DOMIC">
                            </div>
                        </section>
                        <section class="col-md-12" style="padding: 0px 0px 0px 15px;">
                            <!-- OBSERVACIONES GENERALES -->
                            <legend>OBSERVACIONES GENERALES</legend>
                            <div class="fila">
                                <input name="observaciones_generales" placeholder="OBSERVACIONES GENERALES (DISPONIBILIDAD DE TIEMPOS, ESPACIOS, ETC)">
                            </div>
                        </section>





                    </section>

                    <div style="overflow:auto; display: flex; justify-content: center; padding: 10px 0; width: 100%;" id="nextprevious">
                        <button class="action-button" type="button" id="cancelBtn" onclick="cancelForm()" style="margin-right: 10px; width: 50%;">Cancelar</button>
                        <button class="action-button" type="submit" style="width: 50%;">Generar</button>
                    </div>


                </form>

            </div>











        </div>



    </div>





</body>







</html>