<?php
include 'conexion.php';
include 'crearBD.php';
include 'crearTabla.php';

$dni = intval($_POST['dni']);
$estado = $_POST['estado'];
$fecha = $_POST['fecha'];

// Verificar si la fecha y el estado están llenados
if (empty($fecha) || empty($estado)) {
?>
    <script>
        alert("Por favor, completa la fecha y selecciona un estado.");
        window.location.href = "formularioAlumno.php";
    </script>
<?php
} else {
    $conn->exec("USE $dbname");

    $sql = "SELECT * FROM datos_internacion WHERE Dni = :dni AND Fecha_ingreso = :fecha"; // Usar marcadores de posición
    $consulta = $conn->prepare($sql);
    $consulta->bindParam(':dni', $dni); // Vincular el valor a la consulta
    $consulta->bindParam(':fecha', $fecha); // Vincular el valor a la consulta
    $consulta->execute();

    // Verificar si se encontraron filas en el resultado de la consulta
    if ($consulta->rowCount() > 0) {
    ?>
        <script>
            alert("La fecha ingresada ya existe.");
            window.location.href = "formularioAlumno.php";
        </script>
    <?php
    } else {
        if ($estado == "Internado") {
            $sala = $_POST['sala'];
            $habitacion = $_POST['habitacion'];
            $cama = $_POST['cama'];
            $disc1 = $_POST['disc1'];
            $obs1 = $_POST['obs1'];
            $diag1 = $_POST['diag1'];
            $stmt = $conn->prepare("INSERT INTO datos_internacion(Dni, Fecha_ingreso, Sala, Habitación, Cama, Discapacidad, Observacion, Diagnostico, Estado) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");

            $stmt->execute([$dni, $fecha, $sala, $habitacion, $cama, $disc1, $obs1, $diag1, $estado]);
        } else {
            $direccion = $_POST['dire'];
            $disc = $_POST['disc'];
            $obs = $_POST['obs'];
            $diag = $_POST['diag'];

            $stmt = $conn->prepare("INSERT INTO datos_domiciliario(Dni, Fecha_ingreso, Direccion, Discapacidad, Observacion, Diagnostico, Estado) VALUES (?,?,?,?,?,?,?)");

            $stmt->execute([$dni, $fecha, $direccion, $disc, $obs, $diag, $estado]);
        }

        header("location: formularioAlumno.php");
    }
}
?>
