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

    <link href="\Proyecto-master\Proyecto-master\bootstrap\css\bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="/Proyecto-master/Proyecto-master/favicon/favicon-32x32.png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Trirong">
    <!-- REQUIRED SCRIPTS -->
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="\Proyecto-master\Proyecto-master\css\font.css">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- IonIcons -->
    <link rel="stylesheet" href="\Proyecto-master\Proyecto-master\css\code.ionic.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">


    <!-- OPTIONAL SCRIPTS -->
    <script src="plugins/chart.js/Chart.min.js"></script>

</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-black navbar-dark">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>

            </ul>
        </nav>
        <!-- /.navbar -->



        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4" style="position:fixed;">
            <!-- Brand Logo -->
            <a href="formularioAlumno.php" class="brand-link" style="text-decoration: none;">
                <img src="\Proyecto-master\Proyecto-master\img\conte1.png" alt="FJV Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">F. JOSÉ VIANO</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <?php
                        session_start();
                        error_reporting(0);

                        $posicion = $_SESSION['Posicion'];
                        if ($posicion == 'Administrador') {
                            echo "<img src='\Proyecto-master\Proyecto-master\img\administrador.png' class='img-circle elevation-2' alt='User Image'>";
                        } elseif ($posicion == 'Usuario') {
                            echo "<img src='\Proyecto-master\Proyecto-master\img\usuario.png' class='img-circle elevation-2' alt='User Image'>";
                        } elseif ($posicion == 'Psicopedagoga') {
                            echo "<img src='\Proyecto-master\Proyecto-master\img\cerebro.png' class='img-circle elevation-2' alt='User Image'>";
                        }
                        ?>
                    </div>
                    <div class="info">
                        <a style="text-decoration: none;" href="#" class="d-block">
                            <?php
                            session_start();

                            if (isset($_SESSION["usuario"])) {

                                $apellido = $_SESSION["Apellido"];
                            }
                            echo "Bienvenido " . $apellido;
                            ?>
                        </a>
                    </div>
                </div>




                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->


                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-edit"></i>
                                <p>
                                    Formulario
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="formularioAlumno.php" class="nav-link active">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>
                                            Alumnos
                                        </p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="formularioUsuario.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>
                                            Usuarios
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="formularioProfesor.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>
                                            Profesor
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </li>


                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-edit"></i>
                                <p>
                                    Gestionar Alumnos
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Agregar datos personales</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Agregar datos pedagogicos</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Agregar datos internacion/domiciliario</p>
                                    </a>
                                </li>
                            </ul>
                        </li>


                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-table"></i>
                            </a>

                        </li>

                        <li class="nav-header">Login</li>
                        <li class="nav-item">
                            <a href="cerrarSesion.php" class="nav-link">
                                <i class="nav-icon fas fa-ellipsis-h"></i>
                                <p>Cerrar Sesion</p>
                            </a>
                        </li>




                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

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

                                        <label for="fechaing">Fecha</label>
                                        <input name="fecha" type="date" class="fieldlabels" id="fecha">
                                        <label for="escr">Nombre del Familiar</label>
                                        <input name="Nombref" type="text" class="form-control" id="Nombref" placeholder="Nombre del Familiar">
                                        <label for="escr">Apellido del Familiar</label>
                                        <input name="apellido" type="text" class="form-control" id="Apellidof" placeholder="Apellido del Familiar">
                                        <label for="escr">Ocupacion</label>
                                        <input name="ocupacion" type="text" class="form-control" id="Ocupacion" placeholder="Ocupacion">
                                        <label for="escr">Escolaridad Alcanzada</label>
                                        <input name="escAlcanzada" type="text" class="form-control" id="escAlcanzada" placeholder="Escolaridad Alcanzada">
                                        <label for="escr">Posee Salario/Asignacion/Pension</label>
                                        <select name="Posee Salario/Asignacion/Pension">
                                            <option value="Sin especificar">Seleccionar</option>
                                            <option value="Salario">Salario</option>
                                            <option value="Asignacion">Asignacion</option>
                                            <option value="Pension">Pension</option>
                                        </select>
                                        <label for="escr">Asistente Sanitario</label>
                                        <input name="Asistsani" type="text" class="form-control" id="Asistsani" placeholder="Asistente Sanitario">
                                        <label for="escr">Observaciones</label>
                                        <input name="Obsrv" type="text" class="form-control" id="Observ" placeholder="Observaciones">
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
                                        <input name="conviviente" type="text" class="form-control" id="conviviente" placeholder="N° de convivientes">
                                        <label for="escr">N° de habitaciones</label>
                                        <input name="numerohab" type="text" class="form-control" id="numerohab" placeholder="N° de habitaciones">
                                        <label for="escr">Construccion</label>
                                        <select name="construccion">
                                            <option value="Sin especificar">Seleccionar</option>
                                            <option value="Materia">Material</option>
                                            <option value="Rancho">Rancho</option>
                                            <option value="Otros">Otros</option>
                                        </select>
                                        <label for="escr">Tenencia</label>
                                        <select name="tenencia">
                                            <option value="Sin especificar">Seleccionar</option>
                                            <option value="Propia">Propia</option>
                                            <option value="Prestada">Prestada</option>
                                            <option value="Alquilada">Alquilada</option>
                                            <option value="Cedida">Cedida</option>
                                        </select>
                                        <label for="escr">¿Posee Servicio de Agua?</label>
                                        <select name="¿Posee Servicio de Agua?">
                                            <option value="Sin especificar">Seleccionar</option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>
                                        </select>
                                        <label for="escr">¿Posee Servicio de Luz?</label>
                                        <select name="¿Posee Servicio de Luz?">
                                            <option value="Sin especificar">Seleccionar</option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>
                                        </select>
                                        <label for="escr">¿Posee Servicio de Gas?</label>
                                        <select name="¿Posee Servicio de Gas?">
                                            <option value="Sin especificar">Seleccionar</option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>
                                        </select>
                                        <label for="escr">¿Posee Servicio de Cloacas?</label>
                                        <select name="¿Posee Servicio de Cloacas?">
                                            <option value="Sin especificar">Seleccionar</option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>
                                        </select>
                                        <label for="escr">¿Posee Servicio de Cable?</label>
                                        <select name="¿Posee Servicio de Cable?">
                                            <option value="Sin especificar">Seleccionar</option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>
                                        </select>
                                        <label for="escr">¿Posee Servicio de Internet?</label>
                                        <select name="¿Posee Servicio de Internet?">
                                            <option value="Sin especificar">Seleccionar</option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>
                                        </select>
                                        <label for="escr">Observaciones Generales</label>
                                        <input name="ObserGen" type="text" class="form-control" id="ObserGen" placeholder="Observaciones Generales">

                                        <label for="escr">Accesibilidad (Medio de Transporte)</label>
                                        <input name="accesibilidad" type="text" class="form-control" id="accesibilidad" placeholder="Accesibilidad">

                                        </select>
                                    </div>
                                </div> <input type="button" name="next" class="next action-button" value="Siguiente" />
                                <input type="button" name="previous" class="previous action-button-previous" value="Anterior" />
                            </fieldset>

                            <fieldset>
                                <div class="form-card">
                                    <div class="row">

                                        <label for="escr">Diagnostico</label>
                                        <input name="diag" type="text" class="form-control" id="diag" placeholder="Diagnostico">
                                        <label for="escr">Medico de Cabecera</label>
                                        <input name="medicor" type="text" class="form-control" id="medicoc" placeholder="Medico">
                                        <label for="escr">Tratamiento</label>
                                        <input name="tratamiento" type="text" class="form-control" id="tratamiento" placeholder="Tratamiento">
                                        <label for="escr">Medicacion Indicada</label>
                                        <input name="medindicada" type="text" class="form-control" id="medindicada" placeholder="Medicacion">

                                        <label for="escr">¿Requirio Internacion?</label>
                                        <select name="Requirio Internacion?">
                                            <option value="Sin especificar">Seleccionar</option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>
                                        </select>

                                        <label for="escr">Tiempo</label>
                                        <input name="tiempo" type="text" class="form-control" id="tiempo" placeholder="Tiempo">
                                        <label for="escr">Pronostico</label>
                                        <input name="pronostico" type="text" class="form-control" id="pronostico" placeholder="Pronostico">
                                        <label for="escr">Otras observaciones (Cuidados)</label>
                                        <input name="Otrasobs" type="text" class="form-control" id="Otrasobs" placeholder=" Otras observaciones">
                                        <label for="escr">Manifestaciones Afectivo-Emocionales Asociadas a la Situacion de Enfermedad</label>
                                        <input name="manisfetacion" type="text" class="form-control" id="manifestacion" placeholder="Manifestaciones">
                                        <label for="escr">Enfermedades Previas Importante o Cronicas/Accidentes</label>
                                        <input name="enfermedadesp" type="text" class="form-control" id="enfermedadesp" placeholder="Enfermedades">
                                        <label for="escr">Medicacion que pudiera inferir en el desempeño escolar</label>
                                        <input name="medicacion" type="text" class="form-control" id="medicacion" placeholder="Medicacion">
                                        <label for="escr">Tratamiento o terapeutica que reciba el niño</label>
                                        <input name="tratamiento" type="text" class="form-control" id="tratamiento" placeholder="Tratamiento">

                                    </div>
                                </div> <input type="button" name="next" class="next action-button" value="Siguiente" />
                                <input type="button" name="previous" class="previous action-button-previous" value="Anterior" />
                            </fieldset>

                            <fieldset>
                                <div class="form-card">
                                    <div class="row">

                                        <label for="internacion">¿En que Nivel se encuentra?</label>
                                        <select name="estado" id="nivel" onchange="showForm(this.value)">
                                            <option value="">Selecciona una opción</option>
                                            <option value="Nivel inicial">Nivel inicial</option>
                                            <option value="Nivel primario">Nivel Primario</option>
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
                                            <label for="escr">¿Asistio?</label>
                                            <select name="¿Asistio?">
                                                <option value="Sin especificar">Seleccionar</option>
                                                <option value="Si">Si</option>
                                                <option value="No">No</option>
                                            </select>

                                            <label for="nombt">Institucion</label>
                                            <input name="institucion" type="text" class="fieldlabels" id="institucion" placeholder="Institucion">
                                            <label for="nombt">Observaciones</label>
                                            <input name="Obs" type="text" class="fieldlabels" id="Obs" placeholder="Observ">

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
                                            <select name="estado" id="cambio" onchange="showForm(this.value)">
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
                                            <select name="estado" id="repitencia" onchange="showForm(this.value)">
                                                <option value="">Selecciona una opción</option>
                                                <option value="Si">Si</option>
                                                <option value="No">No</option>
                                            </select>

                                            <div id="form1" style="display: none;">
                                                <h2 style="text-align: center;">Si</h2>
                                                <label for="nombt">Grado</label>
                                                <input name="grado" type="text" class="fieldlabels" id="grado" placeholder="Grado">
                                                <label for="nombt">¿Cuantas veces?</label>
                                                <input name="cveces" type="text" class="fieldlabels" id="cveces" placeholder="veces">
                                            </div>

                                            <label for="internacion">¿Ausentismo?</label>
                                            <select name="ausentismo" id="ausentismo" onchange="showForm(this.value)">
                                                <option value="">Selecciona una opción</option>
                                                <option value="Si">Si</option>
                                                <option value="No">No</option>
                                            </select>

                                            <div id="form1" style="display: none;">
                                                <h2 style="text-align: center;">Si</h2>
                                                <label for="nombt">Observaciones</label>
                                                <input name="obsv" type="text" class="fieldlabels" id="obsv" placeholder="Obs">
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
                                            <input name="caracter" type="text" class="fieldlabels" id="caracter" placeholder="Caracter">

                                            <label for="obs">Nombre</label>
                                            <input name="nombre" type="text" class="fieldlabels" id="nombre" placeholder="Nombre">
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
                                        <select name="educacion" id="educacion" onchange="showForm(this.value)">
                                            <option value="">Selecciona una opción</option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>
                                        </select>

                                        <div id="form1" style="display: none;">
                                            <h2 style="text-align: center;">Si</h2>
                                            <label for="nombt">Institucion</label>
                                            <input name="instituacion" type="text" class="fieldlabels" id="institucion" placeholder="Institucion">
                                            <label for="nombt">Grado</label>
                                            <input name="grado" type="text" class="fieldlabels" id="grado" placeholder="Grado">
                                            <label for="nombt">Docente a cargo</label>
                                            <input name="docente" type="text" class="fieldlabels" id="docente" placeholder="docente">
                                            <label for="nombt">Tiempo de intervencion de escuela Hosp/Domic</label>
                                            <input name="Tintervencion" type="text" class="fieldlabels" id="Tintervencion" placeholder="tiempo">
                                        </div>

                                    </div>
                                </div> <input type="button" name="next" class="next action-button" value="Siguiente" />
                                <input type="button" name="previous" class="previous action-button-previous" value="Anterior" />
                            </fieldset>


                            <fieldset>
                                <div class="form-card">
                                    <div class="row">

                                        <label for="escr">Observaciones generales (Disponibilidad de tiempo, espacio)</label>
                                        <input name="obsg" type="text" class="form-control" id="obsg" placeholder="Obs">

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