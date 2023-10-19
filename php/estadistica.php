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
        <div class="content-wrapper" style="height: 600px;">

            <div style="display: flex; justify-content: space-between;">
                <h2 class="mb-2 mt-4">Total de alumnos</h2>
                <h2 class="mb-2 mt-4">Total de alumnos - Con escolaridad</h2>
                <h2 class="mb-2 mt-4">Sin escolaridad</h2>
            </div>

            <div class="">

                <div class="row" style="display: flex; justify-content:space-between;">
                    <div class="col-lg-3 col-6">
                        <div class="small-box bg-">
                            <div class="inner">
                                <?php
                                $sql = "SELECT COUNT(*) AS Grado FROM datos_pedagogicos;";
                                $consulta = $conn->prepare($sql);
                                $consulta->execute();
                                $resultado = $consulta->fetchColumn(); // Obtenemos el resultado
                                echo "<h3>" . $resultado . "</h3>";
                                ?>
                                <p>Total de alumnos</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-user-plus"></i>
                            </div>
                            <a href="#" class="small-box-footer">
                                Más informacíon <i class="fas fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <div class="small-box bg-">
                            <div class="inner">
                                <?php
                                $sql = "SELECT COUNT(*) FROM datos_pedagogicos WHERE Grado <> 'Sin escolaridad'";
                                $consulta = $conn->prepare($sql);
                                $consulta->execute();
                                $resultado = $consulta->fetchColumn(); // Obtenemos el resultado
                                echo "<h3>" . $resultado . "</h3>";
                                ?>
                                <p>Total de alumnos - Con Escolaridad</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-user-plus"></i>
                            </div>
                            <a href="#" class="small-box-footer">
                                Más informacíon <i class="fas fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <div class="small-box bg-">
                            <div class="inner">
                                <?php
                                $sql = "SELECT COUNT(*) FROM datos_pedagogicos WHERE Grado = 'Sin escolaridad'";
                                $consulta = $conn->prepare($sql);
                                $consulta->execute();
                                $resultado = $consulta->fetchColumn(); // Obtenemos el resultado
                                echo "<h3>" . $resultado . "</h3>";
                                ?>
                                <p>Sin escolaridad</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-user-plus"></i>
                            </div>
                            <a href="#" class="small-box-footer">
                                Más informacíon <i class="fas fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>

                </div>
            </div>

            <h2 class="mb-2 mt-4" style="display: flex; justify-content:center;">Salas</h2>
            <div class="">

                <div class="row" style="display: flex; justify-content:center;">
                    <div class="col-lg-3 col-6">
                        <!-- small card -->
                        <div class="small-box bg-yellow">
                            <div class="inner">
                                <?php
                                $sql = "SELECT COUNT(*) FROM datos_pedagogicos WHERE Grado = 'Sala 3'";
                                $consulta = $conn->prepare($sql);
                                $consulta->execute();
                                $resultado = $consulta->fetchColumn(); // Obtenemos el resultado
                                echo "<h3>" . $resultado . "</h3>";
                                ?>
                                <p>Sala de 3</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-user-plus"></i>
                            </div>
                            <a href="#" class="small-box-footer">
                                Más informacíon <i class="fas fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <!-- small card -->
                        <div class="small-box bg-yellow">
                            <div class="inner">
                                <?php
                                $sql = "SELECT COUNT(*) FROM datos_pedagogicos WHERE Grado = 'Sala 4'";
                                $consulta = $conn->prepare($sql);
                                $consulta->execute();
                                $resultado = $consulta->fetchColumn(); // Obtenemos el resultado
                                echo "<h3>" . $resultado . "</h3>";
                                ?>
                                <p>Sala de 4</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-user-plus"></i>
                            </div>
                            <a href="#" class="small-box-footer">
                                Más informacíon <i class="fas fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <!-- small card -->
                        <div class="small-box bg-yellow">
                            <div class="inner">
                                <?php
                                $sql = "SELECT COUNT(*) FROM datos_pedagogicos WHERE Grado = 'Sala 5'";
                                $consulta = $conn->prepare($sql);
                                $consulta->execute();
                                $resultado = $consulta->fetchColumn(); // Obtenemos el resultado
                                echo "<h3>" . $resultado . "</h3>";
                                ?>
                                <p>Sala de 5</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-user-plus"></i>
                            </div>
                            <a href="#" class="small-box-footer">
                                Más informacíon <i class="fas fa-arrow-circle-right"></i>
                            </a>
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
                                $sql = "SELECT COUNT(*) FROM datos_pedagogicos WHERE Grado = '1º grado'";
                                $consulta = $conn->prepare($sql);
                                $consulta->execute();
                                $resultado = $consulta->fetchColumn(); // Obtenemos el resultado
                                echo "<h3>" . $resultado . "</h3>";
                                ?>
                                <p>1º grado</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-user-plus"></i>
                            </div>
                            <a href="#" class="small-box-footer">
                                Más informacíon <i class="fas fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <!-- small card -->
                        <div class="small-box bg-green">
                            <div class="inner">
                                <?php
                                $sql = "SELECT COUNT(*) FROM datos_pedagogicos WHERE Grado = '2º grado'";
                                $consulta = $conn->prepare($sql);
                                $consulta->execute();
                                $resultado = $consulta->fetchColumn(); // Obtenemos el resultado
                                echo "<h3>" . $resultado . "</h3>";
                                ?>
                                <p>2º grado</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-user-plus"></i>
                            </div>
                            <a href="#" class="small-box-footer">
                                Más informacíon <i class="fas fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <!-- small card -->
                        <div class="small-box bg-green">
                            <div class="inner">
                                <?php
                                $sql = "SELECT COUNT(*) FROM datos_pedagogicos WHERE Grado = '3º grado'";
                                $consulta = $conn->prepare($sql);
                                $consulta->execute();
                                $resultado = $consulta->fetchColumn(); // Obtenemos el resultado
                                echo "<h3>" . $resultado . "</h3>";
                                ?>
                                <p>3º grado</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-user-plus"></i>
                            </div>
                            <a href="#" class="small-box-footer">
                                Más informacíon <i class="fas fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <!-- small card -->
                        <div class="small-box bg-green">
                            <div class="inner">
                                <?php
                                $sql = "SELECT COUNT(*) FROM datos_pedagogicos WHERE Grado = '4º grado'";
                                $consulta = $conn->prepare($sql);
                                $consulta->execute();
                                $resultado = $consulta->fetchColumn(); // Obtenemos el resultado
                                echo "<h3>" . $resultado . "</h3>";
                                ?>
                                <p>4º grado</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-user-plus"></i>
                            </div>
                            <a href="#" class="small-box-footer">
                                Más informacíon <i class="fas fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <!-- small card -->
                        <div class="small-box bg-green">
                            <div class="inner">
                                <?php
                                $sql = "SELECT COUNT(*) FROM datos_pedagogicos WHERE Grado = '5º grado'";
                                $consulta = $conn->prepare($sql);
                                $consulta->execute();
                                $resultado = $consulta->fetchColumn(); // Obtenemos el resultado
                                echo "<h3>" . $resultado . "</h3>";
                                ?>
                                <p>5º grado</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-user-plus"></i>
                            </div>
                            <a href="#" class="small-box-footer">
                                Más informacíon <i class="fas fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <!-- small card -->
                        <div class="small-box bg-green">
                            <div class="inner">
                                <?php
                                $sql = "SELECT COUNT(*) FROM datos_pedagogicos WHERE Grado = '6º grado'";
                                $consulta = $conn->prepare($sql);
                                $consulta->execute();
                                $resultado = $consulta->fetchColumn(); // Obtenemos el resultado
                                echo "<h3>" . $resultado . "</h3>";
                                ?>
                                <p>6º grado</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-user-plus"></i>
                            </div>
                            <a href="#" class="small-box-footer">
                                Más informacíon <i class="fas fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <!-- small card -->
                        <div class="small-box bg-green">
                            <div class="inner">
                                <?php
                                $sql = "SELECT COUNT(*) FROM datos_pedagogicos WHERE Grado = '7º grado'";
                                $consulta = $conn->prepare($sql);
                                $consulta->execute();
                                $resultado = $consulta->fetchColumn(); // Obtenemos el resultado
                                echo "<h3>" . $resultado . "</h3>";
                                ?>
                                <p>7º grado</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-user-plus"></i>
                            </div>
                            <a href="#" class="small-box-footer">
                                Más informacíon <i class="fas fa-arrow-circle-right"></i>
                            </a>
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