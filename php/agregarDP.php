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
        <div class="content-wrapper" style="height: 400px;">
            <div class="container mt-5">
                <div class="row d-flex justify-content-center align-items-center">
                    <div class="col-md-8">
                        <form action="agregarDatosP.php" method="post" id="regForm">
                            <h2 style="text-align: center;">Datos Pedagogicos</h2>
                            <div class="all-steps" id="all-steps">
                                <span class="step"><i class="fa fa-user"></i></span>
                            </div>
                            <div class="tab">
                                <div class="container">
                                    <input type="hidden" id="currentTab" value="0">
                                    <div class="row">
                                        <label for="dni">DNI:</label>
                                        <input value="<?php echo isset($registro['Dni']) ? $registro['Dni'] : ''; ?>" name="dni" type="text" class="fieldlabels" id="dni" style="text-align:center;background-color: antiquewhite;" readonly>
                                        <label for="fechaing">Fecha de Ingreso:</label>
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
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>
                                            <option value="N/S">N/S</option>
                                        </select>
                                        <label for="">Escuelas especiales?</label>
                                        <select name="escE">
                                            <option value="Sin especificar">Seleccionar</option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>
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
                                        <label for="">Reconoce sustantivos/adjetivos/verbos?</label><br>
                                        <select name="reconcSAV">
                                            <option value="Sin especificar">Seleccionar</option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>
                                            <option value="N/S">N/S</option>
                                        </select>
                                        <label for="">Elabora oraciones?</label>
                                        <select name="elabO">
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
                                        <label for="">Resuelve operaciones basicas?</label>
                                        <select name="resOpBasc">
                                            <option value="Sin especificar">Seleccionar</option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>
                                            <option value="N/S">N/S</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div style="overflow:auto;" id="nextprevious">
                                    <div style="float:right;">
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

</body>

</html>