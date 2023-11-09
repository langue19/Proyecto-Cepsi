<?php

session_start();

?>



<html>



<head>







    <title>Editar Alumno</title>

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

        FROM datos_personales AS dpers

        WHERE dpers.Dni = :id";









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

                        <form action="EditarAlumno.php" method="post" id="regForm">

                            <h2 style="text-align: center;">Editar Alumno</h2>

                            <div class="all-steps" id="all-steps">

                                <span class="step"><i class="fa fa-user"></i></span>

                            </div>



                            <div class="tab">

                                <div class="container">

                                    <div class="row">

                                        <label for="dni">Dni</label>

                                        <input style="background-color:antiquewhite; text-align:center;" name="documento" type="text" class="fieldlabels" id="dni" placeholder="Documento" value="<?php echo isset($registro['Dni']) ? $registro['Dni'] : ''; ?>" readonly>



                                        <label for="ape">Apellido</label>

                                        <input style="color:black; background-color:rgb(241, 241, 241);" name="apellido" type="text" class="fieldlabels" id="ape" placeholder="Apellido" value="<?php echo isset($registro['Apellido']) ? $registro['Apellido'] : ''; ?>">

                                        <label for="nomb">Nombre</label>

                                        <input style="color:black; background-color:rgb(241, 241, 241);" name="nombre" type="text" class="fieldlabels" id="nomb" placeholder="Nombre" value="<?php echo isset($registro['Nombre']) ? $registro['Nombre'] : ''; ?>">

                                        <label for="sexo">Genero:</label>

                                        <select name="genero" id="genero" >

                                            <option value="Sin especificar">Seleccionar</option>

                                            <option value="Femenino">Femenino</option>

                                            <option value="Masculino">Masculino</option>

                                        </select>



                                        <label for="domc">Domicilio</label>

                                        <input name="domicilio" type="text" class="fieldlabels" id="domc" placeholder="Domicilio">

                                        <label for="fechanac">Fecha de nacimiento</label>

                                        <input name="fecha_nacimiento" type="date" class="fieldlabels" id="fechanac">

                                        <label for="nombt">Nombre del Tutor</label>

                                        <input name="nombre_tutor" type="text" class="fieldlabels" id="nombt" placeholder="Nombre tutor">

                                    </div>

                                </div>

                                <div style="overflow:auto;" id="nextprevious">

                                    <div style="float:right;">

                                        <button class="action-button" type="button" id="cancelBtn" onclick="cancelarFormulario()">Cancelar</button>

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