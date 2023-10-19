<?php
session_start();
?>
<!DOCTYPE html>
<html>
<?php
error_reporting(0);

// Verificar si el usuario ha iniciado sesión
if (!isset($_SESSION['usuario'])) {
    // Si no ha iniciado sesión, redirigirlo a la página de inicio de sesión
    header("Location: /Proyecto-master/Proyecto-master/login.html");
    exit;
}

// Obtener la posición del usuario desde la sesión
$posicion = $_SESSION['Posicion'];

// Verificar si el usuario tiene la posición de "Usuario"
// Si es así, redirigirlo a la página "formularioAlumno.php"
if ($posicion == 'Usuario') {
    header("Location: /Proyecto-master/Proyecto-master/php/formularioAlumno.php");
    exit;
}
?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="\Proyecto-master\Proyecto-master\css\font.css">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- IonIcons -->
    <link rel="stylesheet" href="\Proyecto-master\Proyecto-master\css\code.ionic.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <title>FJV | Escuela CEPSI</title>
    <meta charset="UTF-8">
    <!-- CSS only -->
    <link rel="stylesheet" type="text/css" href="/Proyecto-master/Proyecto-master/css/FormCSS.css">
    <link rel="stylesheet" href="\Proyecto-master\Proyecto-master\css\w3.css">
    <link href="\Proyecto-master\Proyecto-master\bootstrap\css\bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">

    <link rel="shortcut icon" href="/Proyecto-master/Proyecto-master/favicon/favicon-32x32.png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Trirong">
    <script src="/Proyecto-master/Proyecto-master/js/FormUsuario.js"></script>

</head>

<body class="hold-transition sidebar-mini" style="background-color: #f4f6f9;">
    <?php include 'aside.php'; ?>

    <div class="wrapper">
        <div class="content-wrapper">
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
            
            <div class="content-header" style="text-align: center; vertical-align: middle;">
                <h2>Formulario Profesor</h2>
            </div>
            
            <div class="content">
                <div class="container-fluid">
                    <div class="form-conten">
                        <!-- Search Bar -->
                        <div class="form-contro">
                            <label for="search"><i class="icon-search"></i></label>
                            <input class="table-filter" type="search" data-table="advanced-web-table" placeholder="Buscar...">
                        </div>

                        <div class="table-responsive">
                            <table id="table-id" class="table table-striped table-white">
                                <thead class="bg-light">
                                    <tr>
                                        <th>Dni</th>
                                        <th>Apellido</th>
                                        <th>Nombre</th>
                                        <th>Estado</th>
                                        <th>Editar</th>
                                        <th><a href='AgregarProfesor.php'><img src='/Proyecto-master/Proyecto-master/img/mas.png' style="max-width: 30px;"></a></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    include 'crearTabla.php';

                                    $itemsPorPagina = 10; // Cambiar a la cantidad deseada de ítems por página
                                    $paginaActual = isset($_GET['pagina']) ? $_GET['pagina'] : 1;
                                    $inicio = ($paginaActual - 1) * $itemsPorPagina;

                                    $sql = "SELECT * FROM datos_profesor AS dpers LIMIT $inicio, $itemsPorPagina";
                                    $consulta = $conn->prepare($sql);
                                    if ($consulta->execute()) {
                                        while ($row = $consulta->fetch()) {
                                            echo "<tr>";
                                            echo "<td>" . $row['Dni'] . "</td>";
                                            echo "<td>" . $row['Apellido'] . "</td>";
                                            echo "<td>" . $row['Nombre'] . "</td>";
                                            if ($row['Estado'] == 1) {
                                                echo "<td class='estadoA' style='color:white;'><a>Activo</a></td>";
                                            } else {
                                                echo "<td class='estadoI' style='color:white;'><a>Inactivo</a></td>";
                                            }
                                            echo "<td>
    <a data-toggle='modal' data-target='#loginModal-" . $row['Dni'] . "' onclick='abrirModal(" . $row['Dni'] . ")'>
        <img src='/Proyecto-master/Proyecto-master/img/lapiz.png' class='imagen-espaciada'>
    </a>
</td>";
                                            // Consulta para obtener los datos del profesor con el DNI correspondiente
                                            $idviejo = $row['Dni'];
                                            $sql2 = "SELECT * FROM datos_profesor WHERE Dni = :idviejo";
                                            $consulta2 = $conn->prepare($sql2);
                                            $consulta2->bindParam(':idviejo', $idviejo, PDO::PARAM_INT);
                                            if ($consulta2->execute()) {
                                                $row2 = $consulta2->fetch();

                                                echo '<td>
    <div class="modal fade" id="loginModal-' . $row['Dni'] . '" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header border-bottom-0">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="d-flex flex-column text-center">
        <form id="msform" action="editarProf.php" method="post">

            <div class="form-card">
                <div class="formulario" style="color:black;">
                    <label for="Dni">DNI</label>
                    <input name="Dni" type="text" style="background-color: antiquewhite; color:black;" id="Dni" placeholder="DNI" value="' . $row2["Dni"] . '" readonly>
                    <label for="Nombre">Nombre</label>
                    <input style="color:black; background-color:rgb(241, 241, 241);" name="Nombre" type="text" id="Nombre" placeholder="Nombre" value="' . $row2["Nombre"] . '">
                    <label for="Apellido">Apellido</label>
                    <input style="color:black; background-color:rgb(241, 241, 241);" name="Apellido" type="text" id="Apellido" placeholder="Apellido" value="' . $row2["Apellido"] . '">
                    <label for="Estado">Estado</label>
                    <select style="color:black; background-color:rgb(241, 241, 241);" name="Estado" id="Estado">
                        <option style="color:black;" value="1" ' . ($row2["Estado"] == 1 ? "selected" : "") . '>Activo</option>
                        <option style="color:black;" value="0" ' . ($row2["Estado"] == 0 ? "selected" : "") . '>Inactivo</option>
                    </select>
                </div>
                <div style="overflow:auto;" id="nextprevious">
                    <div style="padding-top:20px;float:right;">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        <button type="submit" name="guardarCambios" class="btn btn-primary">Guardar Cambios</button>
                    </div>
                </div>
            </div>
        </form>
            
        </div>
      </div>
  </div>
</div>


</td>';


                                                echo "</tr>";
                                            }
                                        }
                                    }
                                    ?>
                                </tbody>
                            </table>

                            <?php
                            $totalFilas = 500; // Cambiar al total real de filas en la tabla
                            $itemsPorPagina = 10; // Cambiar a la cantidad deseada de ítems por página
                            $totalPaginas = ceil($totalFilas / $itemsPorPagina);

                            $enlacesMostrados = 5; // Cambiar al número deseado de enlaces mostrados en la paginación

                            $mitadEnlaces = floor($enlacesMostrados / 2);
                            $inicioRango = max(1, $paginaActual - $mitadEnlaces);
                            $finRango = min($totalPaginas, $paginaActual + $mitadEnlaces);
                            ?>

                            <div class="pagination">
                                <?php if ($paginaActual > 1) : ?>
                                    <a href='formularioProfesor.php?pagina=<?php echo $paginaActual - 1; ?>'>&lt; Anterior</a>
                                <?php endif; ?>

                                <?php if ($inicioRango > 1) : ?>
                                    <a href='formularioProfesor.php?pagina=1'>1</a>
                                    <?php if ($inicioRango > 2) : ?>
                                        <a class="pagination-dots">...</a>
                                    <?php endif; ?>
                                <?php endif; ?>

                                <?php for ($i = $inicioRango; $i <= $finRango; $i++) : ?>
                                    <?php $active = ($i == $paginaActual) ? 'active' : ''; ?>
                                    <a class='<?php echo $active; ?>' href='formularioProfesor.php?pagina=<?php echo $i; ?>'><?php echo $i; ?></a>
                                <?php endfor; ?>

                                <?php if ($finRango < $totalPaginas) : ?>
                                    <?php if ($finRango < $totalPaginas - 1) : ?>
                                        <a class="pagination-dots">...</a>
                                    <?php endif; ?>
                                    <a href='formularioProfesor.php?pagina=<?php echo $totalPaginas; ?>'><?php echo $totalPaginas; ?></a>
                                <?php endif; ?>

                                <?php if ($paginaActual < $totalPaginas) : ?>
                                    <a href='formularioProfesor.php?pagina=<?php echo $paginaActual + 1; ?>'>Siguiente &gt;</a>
                                <?php endif; ?>
                            </div>
                            <?php echo "</div"; ?>
                        </div>
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