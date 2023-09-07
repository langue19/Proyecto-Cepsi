<?php

include 'conexion.php';
include 'crearBD.php';
include 'crearTabla.php';

$dni = $_POST['dni'];
$fecha_ing = $_POST['fecha_ingreso'];
$escRef = $_POST['escRef'];
$grado = $_POST['grado'];
$poseEsc = $_POST['posE'];
$escComun = $_POST['escC'];
$escEspec = $_POST['escE'];
$LecturaCont = $_POST['lectC'];
$InterpText = $_POST['interpT'];
$ReconoceASV = $_POST['reconcSAV'];
$ElabOrac = $_POST['elabO'];
$lectYesct = $_POST['LectyEsc'];
$resOpBasic = $_POST['resOpBasc'];

// Verificar si la fecha y los campos están llenos
if (empty($fecha_ing) || empty($escRef) || empty($grado) || empty($poseEsc) || empty($escComun) || empty($escEspec) || empty($LecturaCont) || empty($InterpText) || empty($ReconoceASV) || empty($ElabOrac) || empty($lectYesct) || empty($resOpBasic)) {
    ?>
    <script>
        alert("Por favor, completa todos los campos y la fecha.");
        window.location.href = "formularioAlumno.php";
    </script>
    <?php
} else {
    $conn->exec("USE $dbname");

    $sql = "SELECT * FROM Datos_pedagogicos WHERE Dni = :dni AND Fecha_ingreso = :fecha_ing"; // Usar marcadores de posición
    $consulta = $conn->prepare($sql);
    $consulta->bindParam(':dni', $dni); // Vincular el valor a la consulta
    $consulta->bindParam(':fecha_ing', $fecha_ing); // Vincular el valor a la consulta
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
        $stmt = $conn->prepare("INSERT INTO Datos_pedagogicos(Dni, Fecha_ingreso, escRef, Grado, poseeEsc, escComun, escEspecial, lectContinua, interpTextos, reconoceSAV, elabOrac, lectyescri, resuelvOpBas) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

        $stmt->execute([$dni, $fecha_ing, $escRef, $grado, $poseEsc, $escComun, $escEspec, $LecturaCont, $InterpText, $ReconoceASV, $ElabOrac, $lectYesct, $resOpBasic]);

        header("location: formularioAlumno.php");
    }
}
?>
