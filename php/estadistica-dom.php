<?php

session_start();

?>

<!DOCTYPE html>

<html lang="en">



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

    <link rel="stylesheet" type="text/css" href="/Proyecto-master/Proyecto-master/css/sidebar.css">

    <link rel="stylesheet" href="\Proyecto-master\Proyecto-master\css\w3.css">

    <link href="\Proyecto-master\Proyecto-master\bootstrap\css\bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">



    <script src="/Proyecto-master/Proyecto-master/js/FormAlumno.js"></script>

    <link rel="shortcut icon" href="/Proyecto-master/Proyecto-master/favicon/favicon-32x32.png">



</head>





<body class="hold-transition sidebar-mini" style="background-color: #f4f6f9;">

    <?php include 'aside.php'; ?>

    <div class="wrapper">





        <?php

        include 'conexion.php';

        include 'crearBD.php';

        include 'crearTabla.php';

        ?>







        <!-- Content Wrapper. Contains page content -->

        <div class="content-wrapper" style="height: 600px; padding: 10px 20px 10px 20px;">



            <div style="display: flex; justify-content: space-between;">







            </div>



            <div class="">



                <div class="row" style="display: flex; justify-content: space-between;">
                    <div class="col-lg-3 col-6">
                        <div class="box-container">
                            <h2 class="mb-5 mt-4">Total de alumnos</h2>
                            <div class="small-box bg-red">
                                <div class="inner">
                                    <?php
                                    $sql = "SELECT COUNT(*) AS Cantidad
                                    FROM (
                                        SELECT dp.Dni, MAX(dp.Fecha_registro) AS Fecha_registro
                                        FROM datos_pedagogicos dp
                                        INNER JOIN personales_fechas pf ON dp.Dni = pf.Dni AND dp.Fecha_registro = pf.Fecha_registro
                                        WHERE pf.Estado = 'Domiciliario'
                                        GROUP BY dp.Dni
                                    ) AS UltimaFecha;
                                    ";
                                    $consulta = $conn->prepare($sql);
                                    $consulta->execute();
                                    $resultado = $consulta->fetchColumn();
                                    echo "<h3>" . $resultado . "</h3>";
                                    ?><br> <br>

                                </div>
                                <div class="icon">
                                    <i class="fas fa-user"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-6">
                        <div class="box-container">
                            <h2 class="mb-5 mt-4">Con escolaridad</h2>
                            <div class="small-box bg-red">
                                <div class="inner">
                                    <?php
                                    $sql = "SELECT COUNT(*)
                                    FROM (
                                        SELECT dp.Dni, MAX(dp.Fecha_registro) AS Fecha_registro
                                        FROM datos_pedagogicos dp
                                        INNER JOIN personales_fechas pf ON dp.Dni = pf.Dni AND dp.Fecha_registro = pf.Fecha_registro
                                        WHERE dp.Grado <> 'Sin escolaridad' AND dp.Grado <> 'Sin especificar' AND pf.Estado = 'Domiciliario'
                                        GROUP BY dp.Dni
                                    ) AS UltimaFecha;
                                    ";


                                    $consulta = $conn->prepare($sql);
                                    $consulta = $conn->prepare($sql);
                                    $consulta->execute();
                                    $resultado = $consulta->fetchColumn();
                                    echo "<h3>" . $resultado . "</h3>";
                                    ?><br> <br>

                                </div>
                                <div class="icon">
                                    <i class="fas fa-user"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-6">
                        <div class="box-container">
                            <h2 class="mb-5 mt-4">Sin escolaridad</h2>
                            <div class="small-box bg-red">
                                <div class="inner">
                                    <?php
                                    $sql = "SELECT COUNT(*) 
FROM (SELECT dp.Dni, MAX(dp.Fecha_registro) AS Fecha_registro
      FROM datos_pedagogicos dp
      JOIN personales_fechas pf ON dp.Dni = pf.Dni AND dp.Fecha_registro = pf.Fecha_registro
      WHERE dp.Grado = 'Sin escolaridad' AND pf.Estado = 'Domiciliario'
      GROUP BY dp.Dni) AS SinEscolaridad;";
                                    $consulta = $conn->prepare($sql);
                                    $consulta->execute();
                                    $resultado = $consulta->fetchColumn();
                                    echo "<h3>" . $resultado . "</h3>";
                                    ?><br> <br>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-user"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>



            <h2 class="mb-2 mt-4" style="display: flex; justify-content:center;">Salas</h2>

            <div class="">



                <div class="row" style="display: flex; justify-content:center;">

                    <div class="col-lg-3 col-6">

                        <!-- small card -->

                        <div class="small-box bg-blue">

                            <div class="inner">

                                <?php

                                $sql = "SELECT COUNT(*) 
FROM (SELECT dp.Dni, MAX(dp.Fecha_registro) AS Fecha_registro
      FROM datos_pedagogicos dp
      JOIN personales_fechas pf ON dp.Dni = pf.Dni AND dp.Fecha_registro = pf.Fecha_registro
      WHERE dp.Grado = 'Sala 3' AND pf.Estado = 'Domiciliario'
      GROUP BY dp.Dni) AS Sala3;";

                                $consulta = $conn->prepare($sql);

                                $consulta->execute();

                                $resultado = $consulta->fetchColumn(); // Obtenemos el resultado

                                echo "<h3>" . $resultado . "</h3>";

                                ?>

                                <p>Sala de 3</p>

                            </div>

                            <div class="icon">

                                <i class="fas fa-user"></i>

                            </div>



                        </div>

                    </div>

                    <div class="col-lg-3 col-6">

                        <!-- small card -->

                        <div class="small-box bg-blue">

                            <div class="inner">

                                <?php

                                $sql = "SELECT COUNT(*) 
FROM (SELECT dp.Dni, MAX(dp.Fecha_registro) AS Fecha_registro
      FROM datos_pedagogicos dp
      JOIN personales_fechas pf ON dp.Dni = pf.Dni AND dp.Fecha_registro = pf.Fecha_registro
      WHERE dp.Grado = 'Sala 4' AND pf.Estado = 'Domiciliario'
      GROUP BY dp.Dni) AS Sala4;";

                                $consulta = $conn->prepare($sql);

                                $consulta->execute();

                                $resultado = $consulta->fetchColumn(); // Obtenemos el resultado

                                echo "<h3>" . $resultado . "</h3>";

                                ?>

                                <p>Sala de 4</p>

                            </div>

                            <div class="icon">

                                <i class="fas fa-user"></i>

                            </div>



                        </div>

                    </div>

                    <div class="col-lg-3 col-6">

                        <!-- small card -->

                        <div class="small-box bg-blue">

                            <div class="inner">

                                <?php

                                $sql = "SELECT COUNT(*) 
FROM (SELECT dp.Dni, MAX(dp.Fecha_registro) AS Fecha_registro
      FROM datos_pedagogicos dp
      JOIN personales_fechas pf ON dp.Dni = pf.Dni AND dp.Fecha_registro = pf.Fecha_registro
      WHERE dp.Grado = 'Sala 5' AND pf.Estado = 'Domiciliario'
      GROUP BY dp.Dni) AS Sala5;";

                                $consulta = $conn->prepare($sql);

                                $consulta->execute();

                                $resultado = $consulta->fetchColumn(); // Obtenemos el resultado

                                echo "<h3>" . $resultado . "</h3>";

                                ?>

                                <p>Sala de 5</p>

                            </div>

                            <div class="icon">

                                <i class="fas fa-user"></i>

                            </div>



                        </div>

                    </div>

                </div>

            </div>



            <h2 class="mb-2 mt-4" style="display: flex; justify-content:center;">Primaria</h2>

            <!-- /.content-header -->



            <!-- Main content -->

            <div class="">



                <div class="row" style="display: flex; justify-content:center;">

                    <div class="col-lg-3 col-6">

                        <!-- small card -->

                        <div class="small-box bg-green">

                            <div class="inner">

                                <?php

                                $sql = "SELECT COUNT(*) 
                                FROM (SELECT dp.Dni, MAX(dp.Fecha_registro) AS Fecha_registro
                                      FROM datos_pedagogicos dp
                                      JOIN personales_fechas pf ON dp.Dni = pf.Dni AND dp.Fecha_registro = pf.Fecha_registro
                                      WHERE dp.Grado = '1° grado' AND pf.Estado = 'Domiciliario'
                                      GROUP BY dp.Dni) AS PrimerGrado;";

                                $consulta = $conn->prepare($sql);

                                $consulta->execute();

                                $resultado = $consulta->fetchColumn(); // Obtenemos el resultado

                                echo "<h3>" . $resultado . "</h3>";

                                ?>

                                <p>1° grado</p>

                            </div>

                            <div class="icon">

                                <i class="fas fa-user"></i>

                            </div>



                        </div>

                    </div>

                    <div class="col-lg-3 col-6">

                        <!-- small card -->

                        <div class="small-box bg-green">

                            <div class="inner">

                                <?php

                                $sql = "SELECT COUNT(*) 
FROM (SELECT dp.Dni, MAX(dp.Fecha_registro) AS Fecha_registro
      FROM datos_pedagogicos dp
      JOIN personales_fechas pf ON dp.Dni = pf.Dni AND dp.Fecha_registro = pf.Fecha_registro
      WHERE dp.Grado = '2° grado' AND pf.Estado = 'Domiciliario'
      GROUP BY dp.Dni) AS SegundoGrado;";

                                $consulta = $conn->prepare($sql);

                                $consulta->execute();

                                $resultado = $consulta->fetchColumn(); // Obtenemos el resultado

                                echo "<h3>" . $resultado . "</h3>";

                                ?>

                                <p>2° grado</p>

                            </div>

                            <div class="icon">

                                <i class="fas fa-user"></i>

                            </div>



                        </div>

                    </div>

                    <div class="col-lg-3 col-6">

                        <!-- small card -->

                        <div class="small-box bg-green">

                            <div class="inner">

                                <?php

                                $sql = "SELECT COUNT(*) 
                                FROM (SELECT dp.Dni, MAX(dp.Fecha_registro) AS Fecha_registro
                                      FROM datos_pedagogicos dp
                                      JOIN personales_fechas pf ON dp.Dni = pf.Dni AND dp.Fecha_registro = pf.Fecha_registro
                                      WHERE dp.Grado = '3° grado' AND pf.Estado = 'Domiciliario'
                                      GROUP BY dp.Dni) AS TercerGrado;";

                                $consulta = $conn->prepare($sql);

                                $consulta->execute();

                                $resultado = $consulta->fetchColumn(); // Obtenemos el resultado

                                echo "<h3>" . $resultado . "</h3>";

                                ?>

                                <p>3° grado</p>

                            </div>

                            <div class="icon">

                                <i class="fas fa-user"></i>

                            </div>



                        </div>

                    </div>

                    <div class="col-lg-3 col-6">

                        <!-- small card -->

                        <div class="small-box bg-green">

                            <div class="inner">

                                <?php

                                $sql = "SELECT COUNT(*) 
                                FROM (SELECT dp.Dni, MAX(dp.Fecha_registro) AS Fecha_registro
                                      FROM datos_pedagogicos dp
                                      JOIN personales_fechas pf ON dp.Dni = pf.Dni AND dp.Fecha_registro = pf.Fecha_registro
                                      WHERE dp.Grado = '4° grado' AND pf.Estado = 'Domiciliario'
                                      GROUP BY dp.Dni) AS CuartoGrado;";

                                $consulta = $conn->prepare($sql);

                                $consulta->execute();

                                $resultado = $consulta->fetchColumn(); // Obtenemos el resultado

                                echo "<h3>" . $resultado . "</h3>";

                                ?>

                                <p>4° grado</p>

                            </div>

                            <div class="icon">

                                <i class="fas fa-user"></i>

                            </div>



                        </div>

                    </div>

                    <div class="col-lg-3 col-6">

                        <!-- small card -->

                        <div class="small-box bg-green">

                            <div class="inner">

                                <?php

                                $sql = "SELECT COUNT(*) 
                                FROM (SELECT dp.Dni, MAX(dp.Fecha_registro) AS Fecha_registro
                                      FROM datos_pedagogicos dp
                                      JOIN personales_fechas pf ON dp.Dni = pf.Dni AND dp.Fecha_registro = pf.Fecha_registro
                                      WHERE dp.Grado = '5° grado' AND pf.Estado = 'Domiciliario'
                                      GROUP BY dp.Dni) AS QuintoGrado;";

                                $consulta = $conn->prepare($sql);

                                $consulta->execute();

                                $resultado = $consulta->fetchColumn(); // Obtenemos el resultado

                                echo "<h3>" . $resultado . "</h3>";

                                ?>

                                <p>5° grado</p>

                            </div>

                            <div class="icon">

                                <i class="fas fa-user"></i>

                            </div>



                        </div>

                    </div>

                    <div class="col-lg-3 col-6">

                        <!-- small card -->

                        <div class="small-box bg-green">

                            <div class="inner">

                                <?php

                                $sql = "SELECT COUNT(*) 
                                FROM (SELECT dp.Dni, MAX(dp.Fecha_registro) AS Fecha_registro
                                      FROM datos_pedagogicos dp
                                      JOIN personales_fechas pf ON dp.Dni = pf.Dni AND dp.Fecha_registro = pf.Fecha_registro
                                      WHERE dp.Grado = '6° grado' AND pf.Estado = 'Domiciliario'
                                      GROUP BY dp.Dni) AS SextoGrado;";

                                $consulta = $conn->prepare($sql);

                                $consulta->execute();

                                $resultado = $consulta->fetchColumn(); // Obtenemos el resultado

                                echo "<h3>" . $resultado . "</h3>";

                                ?>

                                <p>6° grado</p>

                            </div>

                            <div class="icon">

                                <i class="fas fa-user"></i>

                            </div>



                        </div>

                    </div>

                    <div class="col-lg-3 col-6">

                        <!-- small card -->

                        <div class="small-box bg-green">

                            <div class="inner">

                                <?php

                                $sql = "SELECT COUNT(*) 
                                FROM (SELECT dp.Dni, MAX(dp.Fecha_registro) AS Fecha_registro
                                      FROM datos_pedagogicos dp
                                      JOIN personales_fechas pf ON dp.Dni = pf.Dni AND dp.Fecha_registro = pf.Fecha_registro
                                      WHERE dp.Grado = '7° grado' AND pf.Estado = 'Domiciliario'
                                      GROUP BY dp.Dni) AS SeptimoGrado;";

                                $consulta = $conn->prepare($sql);

                                $consulta->execute();

                                $resultado = $consulta->fetchColumn(); // Obtenemos el resultado

                                echo "<h3>" . $resultado . "</h3>";

                                ?>

                                <p>7° grado</p>

                            </div>

                            <div class="icon">

                                <i class="fas fa-user"></i>

                            </div>



                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>



    <!-- REQUIRED SCRIPTS -->



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