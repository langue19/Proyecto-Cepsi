<html>

<head>
    <title>Alumno</title>
    <meta charset="UTF-8">
    <!-- CSS only -->
    <link href="\Proyecto-master\Proyecto-master\bootstrap\css\bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/Proyecto-master/Proyecto-master/css/AgregarA.css">
    <link rel="shortcut icon" href="/Proyecto-master/Proyecto-master/favicon/favicon-32x32.png">

    <!-- Aquí incluye el enlace a la biblioteca jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Aquí incluye el enlace a tu archivo JavaScript -->
    <script src="/Proyecto-master/Proyecto-master/js/AgregarA.js"></script>
</head>

<body>


    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <!-- Logo a la izquierda -->
            <a class="navbar-brand" href="#">
                <img src="\Proyecto-master\Proyecto-master\img\conte1.png" style="width: 40px;" class="rounded-pill" alt="Logo" height="40">
            </a>
            <!-- Título en el centro -->
            <h1 class="navbar-title">FRANCISCO JOSÉ VIANO</h1>

            <!-- Avatar desplegable a la derecha -->
            <div class="avatar-dropdown">
                <div style="display: flex; align-items:center;" class="navbar-toggle" onclick="toggleMenu()">
                    <img src="\Proyecto-master\Proyecto-master\img\director.png" alt="☰" height="40" id="avatarImg">
                    <a>☰</a>
                </div>
                <ul class="navbar-menu" id="navbarMenu">
                    <li><a href="cards.php">Inicio</a></li>
                    <li><a href="formularioAlumno.php">Gestion Alumnos</a></li>
                    <li><a href="formularioUsuario.php">Gestion Usuarios</a></li>
                    <li><a href="cerrarSesion.php">Cerrar sesion</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-11 col-sm-10 col-md-10 col-lg-6 col-xl-5 text-center p-0 mt-3 mb-2">
                <div class="card  mb-3">

                    <form id="msform" action="agregarDatosP.php" method="post">
                        <!-- progressbar -->
                        <ul id="progressbar" style=" display: flex;
    justify-content: center;
    align-items: center;
    margin-bottom: 20px;
    overflow: hidden;
    color: lightgrey;">
                            <li class="active" id="account"><strong>Familia</strong></li>
                            <li class="active" id="account"><strong>Vivienda</strong></li>
                            <li class="active" id="account"><strong>Historial</strong></li>
                            <li class="active" id="account"><strong>Eduaccion</strong></li>
                            <li class="active" id="account"><strong>Escolaridad</strong></li>
                            <li class="active" id="account"><strong>Observaciones</strong></li>
                            <li id="confirm"><strong>Finalizar</strong></li>
                        </ul>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                        </div> <br> <!-- fieldsets -->
                        <fieldset>
                            <div class="form-card">
                                <div class="row">
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

                                        $sql = "SELECT *
        FROM Datos_personales 
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
                                    <label for="dni">DNI</label>
                                    <input value="<?php echo isset($registro['Dni']) ? $registro['Dni'] : ''; ?>" name="dni" type="text" class="fieldlabels" id="dni" style="text-align:center;background-color: antiquewhite;" readonly>

                                    <label for="fechaing">Fecha ingreso</label>
                                    <input name="fecha_ingreso" type="date" class="fieldlabels" id="fechaing">
                                    <label for="escr">Nombre del Familiar</label>
                                    <input name="escRef" type="text" class="form-control" id="escr" placeholder="Nombre del Familiar">
                                    <label for="escr">Apelido del Familiar</label>
                                    <input name="escRef" type="text" class="form-control" id="escr" placeholder="Apellido del Familiar">
                                    <label for="escr">Ocupacion</label>
                                    <input name="escRef" type="text" class="form-control" id="escr" placeholder="Ocupacion">
                                    <label for="escr">Escolaridad Alcanzada</label>
                                    <input name="escRef" type="text" class="form-control" id="escr" placeholder="Escolaridad Alcanzada">
                                    <label for="escr">Posee Salario/Asignacion/Pension</label>
                                    <select name="Posee Salario/Asignacion/Pension">
                                        <option value="Sin especificar">Seleccionar</option>
                                        <option value="Salario">Salario</option>
                                        <option value="Asignacion">Asignacion</option>
                                        <option value="Pension">Pension</option>
                                    </select>
                                    <label for="escr">Asistente Sanitario</label>
                                    <input name="escRef" type="text" class="form-control" id="escr" placeholder="Asistente Sanitario">
                                    <label for="escr">Observaciones</label>
                                    <input name="escRef" type="text" class="form-control" id="escr" placeholder="Observaciones">
                                </div>
                            </div> <input type="button" name="next" class="next action-button" value="Siguiente" />
                            <a href="formularioAlumno.php" class="previous action-button-previous" style="text-decoration: none;">Cancelar</a>
                        </fieldset>

                        <fieldset>
                            <div class="form-card">
                                <div class="row">
                                    
                                    <label for="escr">Tipo</label>
                                    <select name="Tipo">
                                        <option value="Sin especificar">Seleccionar</option>
                                        <option value="Individual">Individual</option>
                                        <option value="Compartida">Compartida</option>
                                    </select>
                                    <label for="escr">N° de convivientes</label>
                                    <input name="escRef" type="text" class="form-control" id="escr" placeholder="N° de convivientes">
                                    <label for="escr">N° de habitacioens</label>
                                    <input name="escRef" type="text" class="form-control" id="escr" placeholder="N° de habitacioens">
                                    <label for="escr">Construccion</label>
                                    <select name="Tipo">
                                        <option value="Sin especificar">Seleccionar</option>
                                        <option value="Materia">Materia</option>
                                        <option value="Rancho">Rancho</option>
                                        <option value="Otros">Otros</option>

                                        <label for="escr">Tenencia</label>
                                        <select name="Tenencia">
                                            <option value="Sin especificar">Seleccionar</option>
                                            <option value="Propia">Propia</option>
                                            <option value="Prestada">Prestada</option>
                                            <option value="Alquilada">Alquilada</option>
                                            <option value="Cedida">Cedida</option>

                                            <label for="escr">¿Posee Servicio de Agua?</label>
                                            <select name="¿Posee Servicio de Agua?">
                                                <option value="Sin especificar">Seleccionar</option>
                                                <option value="Si">Si</option>
                                                <option value="No">No</option>

                                                <label for="escr">¿Posee Servicio de Luz?</label>
                                                <select name="¿Posee Servicio de Luz?">
                                                    <option value="Sin especificar">Seleccionar</option>
                                                    <option value="Si">Si</option>
                                                    <option value="No">No</option>

                                                    <label for="escr">¿Posee Servicio de Gas?</label>
                                                    <select name="¿Posee Servicio de Gas?">
                                                        <option value="Sin especificar">Seleccionar</option>
                                                        <option value="Si">Si</option>
                                                        <option value="No">No</option>

                                                        <label for="escr">¿Posee Servicio de Cloacas?</label>
                                                        <select name="¿Posee Servicio de Cloacas?">
                                                            <option value="Sin especificar">Seleccionar</option>
                                                            <option value="Si">Si</option>
                                                            <option value="No">No</option>

                                                            <label for="escr">¿Posee Servicio de Cable?</label>
                                                            <select name="¿Posee Servicio de Cable?">
                                                                <option value="Sin especificar">Seleccionar</option>
                                                                <option value="Si">Si</option>
                                                                <option value="No">No</option>

                                                                <label for="escr">¿Posee Servicio de Internet?</label>
                                                                <select name="¿Posee Servicio de Internet?">
                                                                    <option value="Sin especificar">Seleccionar</option>
                                                                    <option value="Si">Si</option>
                                                                    <option value="No">No</option>

                                                                    <label for="escr">Observaciones Generales</label>
                                                                    <input name="escRef" type="text" class="form-control" id="escr" placeholder="Obs Generales">

                                                                    <label for="escr">Accesibilidad (Medio de Transporte)</label>
                                                                    <input name="escRef" type="text" class="form-control" id="escr" placeholder="Accesibilidad">

                                                                </select>
                                </div>
                            </div> <input type="button" name="next" class="next action-button" value="Siguiente" />
                            <a href="formularioAlumno.php" class="previous action-button-previous" style="text-decoration: none;">Cancelar</a>
                        </fieldset>

                        <fieldset>
                            <div class="form-card">
                                <div class="row">
                                    
                                    <label for="escr">Diagnostico</label>
                                    <input name="escRef" type="text" class="form-control" id="escr" placeholder="Diagnostico">
                                    <label for="escr">Medico de Cabecera</label>
                                    <input name="escRef" type="text" class="form-control" id="escr" placeholder="Medico">
                                    <label for="escr">Tratamiento</label>
                                    <input name="escRef" type="text" class="form-control" id="escr" placeholder="Tratamiento">
                                    <label for="escr">Medicacion Indicada</label>
                                    <input name="escRef" type="text" class="form-control" id="escr" placeholder="Medicacion">

                                    <label for="escr">Requirio Internacion?</label>
                                    <select name="Requirio Internacion?">
                                        <option value="Sin especificar">Seleccionar</option>
                                        <option value="Si">Si</option>
                                        <option value="No">No</option>
                                    </select>

                                    <label for="escr">Tiempo</label>
                                    <input name="escRef" type="text" class="form-control" id="escr" placeholder="Tiempo">
                                    <label for="escr">Pronostico</label>
                                    <input name="escRef" type="text" class="form-control" id="escr" placeholder="Pronostico">
                                    <label for="escr">Otras observaciones (Cuidados)</label>
                                    <input name="escRef" type="text" class="form-control" id="escr" placeholder="obs">
                                    <label for="escr">Manifestaciones Afectivo-Emocionales Asociadas a la Situacion de Enfermedad</label>
                                    <input name="escRef" type="text" class="form-control" id="escr" placeholder="Manifestaciones">
                                    <label for="escr">Enfermedades Previas Importante o Cronicas/Accidentes</label>
                                    <input name="escRef" type="text" class="form-control" id="escr" placeholder="Enfermedads">
                                    <label for="escr">Medicacion que pudiera inferir en el desempeño escolar</label>
                                    <input name="escRef" type="text" class="form-control" id="escr" placeholder="medicacion">
                                    <label for="escr">Tratamiento o terapeutica que reciba el niño</label>
                                    <input name="escRef" type="text" class="form-control" id="escr" placeholder="Pronostico">

                                </div>
                            </div> <input type="button" name="next" class="next action-button" value="Siguiente" />
                            <input type="button" name="previous" class="previous action-button-previous" value="Anterior" />
                        </fieldset>

                        <fieldset>
                            <div class="form-card">
                                <div class="row">

                                    <label for="internacion">En que Nivel se encuentra?</label>
                                    <select name="estado" id="estado" onchange="showForm(this.value)">
                                        <option value="">Selecciona una opción</option>
                                        <option value="Internado">Nivel inicial</option>
                                        <option value="Domiciliario">Nivel Primario</option>
                                    </select>

                                    <div id="form1" style="display: none;">
                                        <h2 style="text-align: center;">Nivel Inicial</h2>
                                        <label for="escr">Sala</label>
                                        <select name="Sala">
                                            <option value="Sin especificar">Seleccionar</option>
                                            <option value="Sala de 3"> Sala de 3</option>
                                            <option value="Sala de 4"> Sala de 4</option>
                                            <option value="Sala de 5"> Sala de 5</option>
                                        </select>
                                        <label for="escr">Asistio?</label>
                                        <select name="Asistio?">
                                            <option value="Sin especificar">Seleccionar</option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>
                                        </select>

                                        <label for="nombt">Institucion</label>
                                        <input name="habitacion" type="text" class="fieldlabels" id="nombt" placeholder="Institucion">
                                        <label for="nombt">Observaciones</label>
                                        <input name="habitacion" type="text" class="fieldlabels" id="nombt" placeholder="Observ">

                                    </div>

                                    <div id="form2" style="display: none;">
                                        <h2 style="text-align: center;">Nivel Primario</h2>

                                        <label for="">Grado que Cursa</label>
                                        <select name="grado que cursa">
                                            <option value="Sin especificar">Seleccionar</option>
                                            <option value="1° grado">1° grado</option>
                                            <option value="2° grado">2° grado</option>
                                            <option value="3° grado">3° grado</option>
                                            <option value="4° grado">4° grado</option>
                                            <option value="5° grado">5° grado</option>
                                            <option value="6° grado">6° grado</option>
                                            <option value="7° grado">7° grado</option>
                                        </select>
                                        <label for="dire">Docente Tutor</label>
                                        <input name="dire" type="text" class="fieldlabels" id="dire" placeholder="Docente">

                                        <label for="disc">¿Promocion Automatica en el primer ciclo?</label>
                                        <select name="¿Promocion Automatica en el primer ciclo?">
                                            <option value="Sin especificar">Seleccionar</option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>
                                        </select>
                                        <label for="obs">Observaciones</label>
                                        <input name="obs" type="text" class="fieldlabels" id="obs" placeholder="Observacion">

                                        <label for="internacion">¿Cambio de Escela?</label>
                                        <select name="estado" id="estado" onchange="showForm(this.value)">
                                            <option value="">Selecciona una opción</option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>
                                        </select>

                                        <div id="form1" style="display: none;">
                                            <h2 style="text-align: center;">Si</h2>
                                            <label for="nombt">Institucion</label>
                                            <input name="sala" type="text" class="fieldlabels" id="nombt" placeholder="Sala">
                                        </div>

                                        <label for="internacion">¿Repitencia?</label>
                                        <select name="estado" id="estado" onchange="showForm(this.value)">
                                            <option value="">Selecciona una opción</option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>
                                        </select>

                                        <div id="form1" style="display: none;">
                                            <h2 style="text-align: center;">Si</h2>
                                            <label for="nombt">Grado</label>
                                            <input name="sala" type="text" class="fieldlabels" id="nombt" placeholder="Grado">
                                            <label for="nombt">¿Cuantas veces?</label>
                                            <input name="sala" type="text" class="fieldlabels" id="nombt" placeholder="veces">
                                        </div>

                                        <label for="internacion">¿Ausentismo?</label>
                                        <select name="estado" id="estado" onchange="showForm(this.value)">
                                            <option value="">Selecciona una opción</option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>
                                        </select>

                                        <div id="form1" style="display: none;">
                                            <h2 style="text-align: center;">Si</h2>
                                            <label for="nombt">Observaciones</label>
                                            <input name="sala" type="text" class="fieldlabels" id="nombt" placeholder="Obs">
                                        </div>

                                        <label for="disc">Derivacion</label>
                                        <select name="Derivacion">
                                            <option value="Sin especificar">Seleccionar</option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>
                                        </select>
                                        <label for="disc">Intervencion equipo tecnico de apoyo</label>
                                        <select name="¿Promocion Automatica en el primer ciclo?">
                                            <option value="Sin especificar">Seleccionar</option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>
                                        </select>



                                        <label for="obs">Caracter</label>
                                        <input name="obs" type="text" class="fieldlabels" id="obs" placeholder="Caracter">

                                        <label for="disc">Cracter</label>
                                        <select name="caracter">
                                            <option value="Sin especificar">Seleccionar</option>
                                            <option value="Anterior">Anterior</option>
                                            <option value="Actual">Actual</option>
                                        </select>

                                        <label for="obs">Nombre</label>
                                        <input name="obs" type="text" class="fieldlabels" id="obs" placeholder="Nombre">
                                        <label for="disc">PPI</label>
                                        <select name="ppi">
                                            <option value="Sin especificar">Seleccionar</option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>
                                        </select>




                                    </div>
                                </div> <input type="button" name="next" class="next action-button" value="Siguiente" />
                                <input type="button" name="previous" class="previous action-button-previous" value="Anterior" />
                        </fieldset>

                        <fieldset>
                            <div class="form-card">
                                <div class="row">
                                    
                                    <label for="internacion">¿Recibio con Anterioridad Educacion Hospitalaria/Domiciliaria?</label>
                                    <select name="estado" id="estado" onchange="showForm(this.value)">
                                        <option value="">Selecciona una opción</option>
                                        <option value="Si">Si</option>
                                        <option value="No">No</option>
                                    </select>

                                    <div id="form1" style="display: none;">
                                        <h2 style="text-align: center;">Si</h2>
                                        <label for="nombt">Institucion</label>
                                        <input name="sala" type="text" class="fieldlabels" id="nombt" placeholder="Institucion">
                                        <label for="nombt">Grado</label>
                                        <input name="sala" type="text" class="fieldlabels" id="nombt" placeholder="Grado">
                                        <label for="nombt">Docente a cargo</label>
                                        <input name="sala" type="text" class="fieldlabels" id="nombt" placeholder="docente">
                                        <label for="nombt">Tiempo de intervencion de escuela Hosp/Domic</label>
                                        <input name="sala" type="text" class="fieldlabels" id="nombt" placeholder="tiempo">
                                    </div>

                                </div>
                            </div> <input type="button" name="next" class="next action-button" value="Siguiente" />
                            <input type="button" name="previous" class="previous action-button-previous" value="Anterior" />
                        </fieldset>


                        <fieldset>
                            <div class="form-card">
                                <div class="row">
                                    
                                    <label for="escr">Observaciones generales (Disponibilidad de tiempo, espacio)</label>
                                    <input name="escRef" type="text" class="form-control" id="escr" placeholder="Obs">

                                </div>
                            </div> <input type="button" name="next" class="next action-button" value="Siguiente" />
                            <input type="button" name="previous" class="previous action-button-previous" value="Anterior" />
                        </fieldset>




                        <fieldset>
                            <div class="form-card">
                                <div class="row">
                                    <h2 class="purple-text text-center"><strong>Finalizado!</strong></h2> <br>
                                    <div class="row justify-content-center">
                                        <div class="col-3"> <img src="\Proyecto-master\Proyecto-master\img\listo.png" class="fit-image">
                                        </div>
                                    </div> <br><br>
                                </div>
                            </div> <input type="submit" name="next" class="next action-button" style="width: 160px;" value="Guardar y salir!" />
                            <input type="button" name="previous" class="previous action-button-previous" value="Anterior" />

                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>

</html>