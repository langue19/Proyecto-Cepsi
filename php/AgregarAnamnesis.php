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

<body class="hold-transition sidebar-mini" style="background-color: #f4f6f9;">
    <?php include 'aside.php'; ?>

    <div class="wrapper">
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper" style="height: 600px;">
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


            <div class="container">
                <section class="row">
                    <div class="col-md-12">
                        <h1 class="text-center">Consejo general de educacion.</h1>
                        <h4 class="text-center">ESCUELA HOSPITALARIA – DOMICILIARIA DR. FRANCISCO J. VIANO.</h4>
                        <h4 class="text-center">Anamnesis</h4>
                    </div>
                </section>
                <hr><br />
                <section class="row">
                    <section class="col-md-12" style="padding: 0px 0px 0px 15px;">
                        <button class="collapsible">FAMILIAR 1</button>
                        <div class="content">
                            <div class="fila">
                                <input type="text" placeholder="Nombre" name="nombre1">
                                <input type="text" placeholder="Apellido" name="apellido1">
                            </div>
                            <div class="fila">
                                <input type="text" placeholder="Edad" name="edad1">
                            </div>
                            <div class="fila">
                                <input type="text" placeholder="Rol familiar" name="rol1">
                                <input type="text" placeholder="Ocupacion" name="ocupacion1">
                                <input type="text" placeholder="Escolaridad alcanzada" name="escolaridad1">
                            </div>
                            <div class="fila">
                                <input type="text" placeholder="Salario/Asignacion/Pension" name="salario/asignacion/pension1">
                                <input type="text" placeholder="Asist. sanit." name="asist1">
                            </div>
                            <div class="fila">
                                <input type="text" placeholder="Observaciones" name="observaciones1">
                            </div>
                        </div>
                    </section>
                    <section class="col-md-12" style="padding: 0px 0px 0px 15px;">
                        <button class="collapsible">FAMILIAR 2</button>
                        <div class="content">
                            <div class="fila">
                                <input type="text" placeholder="Nombre" name="nombre2">
                                <input type="text" placeholder="Apellido" name="apellido2">
                            </div>
                            <div class="fila">
                                <input type="text" placeholder="Edad" name="edad2">
                            </div>
                            <div class="fila">
                                <input type="text" placeholder="Rol familiar" name="rol2">
                                <input type="text" placeholder="Ocupacion" name="ocupacion2">
                                <input type="text" placeholder="Escolaridad alcanzada" name="escolaridad2">
                            </div>
                            <div class="fila">
                                <input type="text" placeholder="Salario/Asignacion/Pension" name="salario/asignacion/pension2">
                                <input type="text" placeholder="Asist. sanit." name="asist2">
                            </div>
                            <div class="fila">
                                <input type="text" placeholder="Observaciones" name="observaciones2">
                            </div>
                        </div>
                    </section>

                    <section class="col-md-12" style="padding: 0px 0px 0px 15px;">
                        <button class="collapsible">OBSERVACIONES SOBRE LA HISTORIA Y DINÁMICA FAMILIAR</button>
                        <div class="content">
                            <div class="fila">
                                <input type="text" placeholder="Observaciones" name="obs">
                            </div>
                        </div>
                    </section>


                    <section class="col-md-12" style="padding: 0px 0px 0px 15px;">
                        <button class="collapsible">VIVIENDA</button>
                        <div class="content">
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

                                <!-- Servicios -->
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



                            </div>
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
                        </div>
                    </section>

                    <section class="col-md-12" style="padding: 0px 0px 0px 15px;">
                        <button class="collapsible">HISTORIAL EVOLUCIÓN DE ENFERMEDAD</button>
                        <div class="content">
                            <div class="fila">
                                <input type="text" placeholder="DIAGNOSTICO:" name="diagnostico">
                            </div>
                            <div class="fila">
                                <input type="text" placeholder="MEDICO DE CABECERA:" name="medico_cabecera">
                            </div>
                            <div class="fila">
                                <input type="text" placeholder="TRATAMIENTO:" name="tratamiento">
                            </div>
                            <div class="fila">
                                <input type="text" placeholder="MEDICACIÓN INDICADA:" name="medicacion">
                            </div>
                            <div class="fila">
                                <input type="text" placeholder="REQUIRIO INTERNACIÓN? SI _____ NO ________" name="tiempo_internacion">
                                <input type="text" placeholder="TIEMPO:" name="tiempo">
                            </div>
                            <div class="fila">
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
                        </div>
                    </section>


                    <section class="col-md-12" style="padding: 0px 0px 0px 15px;">
                        <button class="collapsible">EDUCACIÓN</button>
                        <div class="content">
                            <label style="display: flex; justify-content:center;">NIVEL INICIAL</label>
                            <div class="fila">

                                <input type="text" placeholder="SALA" name="nivel_inicial_sala">
                                <input type="text" placeholder="ASISTIÓ" name="nivel_inicial_asistio">
                                <input type="text" placeholder="INSTITUCIÓN" name="nivel_inicial_institucion">
                            </div>
                            <div class="fila">
                                <input type="text" placeholder="Observaciones educacion" name="obsE">
                            </div>
                            <label style="display: flex; justify-content:center;">NIVEL PRIMARIO</label>
                            <div class="fila">
                                <input type="text" placeholder="GRADO QUE CURSA:" name="nivel_primario_grado">
                                <input type="text" placeholder="DOCENTE TUTOR:" name="nivel_primario_tutor">
                            </div>
                        </div>
                    </section>


                    <section class="col-md-12" style="padding: 0px 0px 0px 15px;">
                        <button class="collapsible">HISTORIA ESCOLAR</button>
                        <div class="content">
                            <div class="fila">
                                <input type="text" placeholder="PROMOCIÓN AUTOMÁTICA EN EL PRIMER CICLO? SI _____ NO ________" name="promocion_automatica">
                                <input type="text" placeholder="OBSERVACIONES" name="observaciones_promocion">
                            </div>
                            <div class="fila">
                                <input type="text" placeholder="CAMBIOS DE ESCUELA? SI _____ NO ________" name="cambios_escuela">
                                <input type="text" placeholder="INSTITUCIÓN" name="institucion_cambios">
                            </div>
                            <div class="fila">
                                <input type="text" placeholder="REPITENCIA? SI _____ NO ________" name="repitencia">
                                <input type="text" placeholder="GRADO" name="grado_repitencia">
                                <input type="text" placeholder="¿CUÁNTAS VECES?" name="veces_repitencia">
                            </div>
                            <div class="fila">
                                <input type="text" placeholder="AUSENTISMO? SI _____ NO ________" name="ausentismo">
                                <input type="text" placeholder="OBSERVACIONES" name="observaciones_ausentismo">
                            </div>
                            <div class="fila">
                                <input type="text" placeholder="DESERCION? SI _____ NO ________" name="desercion">
                                <input type="text" placeholder="OBSERVACIONES" name="observaciones_desercion">
                            </div>
                            <div class="fila">
                                <input type="text" placeholder="DERIVACIÓN? SI _____ NO ________" name="derivacion">
                            </div>
                            <div class="fila">
                                <input type="text" placeholder="INTERVENCIÓN EQUIPO TÉCNICO DE APOYO? SI _____ NO ________" name="intervencion_equipo">
                            </div>
                            <div class="fila">
                                <input type="text" placeholder="PPI? SI _____ NO ________" name="desercion">
                                <input type="text" placeholder="CARÁCTER ANTERIOR" name="caracter_anterior">
                                <input type="text" placeholder="CARÁCTER ACTUAL" name="caracter_actual">
                                <input type="text" placeholder="NOMBRE" name="nombre_caracter">
                            </div>
                        </div>
                    </section>

                    <section class="col-md-12" style="padding: 0px 0px 0px 15px;">
                        <button class="collapsible">ESCOLARIDAD HOSPITALARIA-DOMICILIARIA</button>
                        <div class="content">
                            <div class="fila">
                                <input type="text" placeholder="RECIBIÓ CON ANTERIORIDAD EDUCACIÓN HOSPITALARIA/DOMICILIARIA? SI _____ NO ________" name="educacion_anterior">
                                <input type="text" name="institucion_educacion" placeholder="INSTITUCIÓN">
                                <input type="text" name="grado_educacion" placeholder="GRADO">
                            </div>
                            <div class="fila">
                                <input type="text" name="docente_educacion" placeholder="DOCENTE A CARGO">
                                <input type="text" name="tiempo_intervencion" placeholder="TIEMPO DE INTERVENCIÓN ESC, HOSP-DOMIC">
                            </div>

                        </div>
                    </section>

                    <section class="col-md-12" style="padding: 0px 0px 0px 15px;">
                        <button class="collapsible">OBSERVACIONES GENERALES</button>
                        <div class="content">
                            <div class="fila">
                                <input name="observaciones_generales" placeholder="OBSERVACIONES GENERALES (DISPONIBILIDAD DE TIEMPOS, ESPACIOS, ETC)">
                            </div>
                        </div>
                    </section>
                </section>

            </div>


        </div>
    </div>
    <script src="/Proyecto-master/Proyecto-master/js/AgregarA.js"></script>
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