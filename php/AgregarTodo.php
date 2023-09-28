<?php

include 'conexion.php';
include 'crearBD.php';
include 'crearTabla.php';

$dni = $_POST['documento'];
$nomb = $_POST['nombre'];
$ape = $_POST['apellido'];
$genero = $_POST['genero'];
$dom = $_POST['domicilio'];
$fecha_nac = $_POST['fecha_nacimiento'];
$nombTutor = $_POST['nombre_tutor'];

$conn->exec("USE $dbname");


$sql = "SELECT * FROM Datos_personales WHERE Dni = :dni"; // Usar marcador de posición
$consulta = $conn->prepare($sql);
$consulta->bindParam(':dni', $dni); // Vincular el valor a la consulta
$consulta->execute();

// Verificar si se encontraron filas en el resultado de la consulta
if ($consulta->rowCount() > 0) {
?>
    <script>
        alert("El DNI ingresado ya existe.");
        window.location.href = "agregarA.php";
    </script>
<?php
} else {
    $stmt = $conn->prepare("INSERT INTO Datos_personales(Dni, Nombre, Apellido, Sexo, Domicilio, Fecha_nacimiento, Nombre_del_tutor) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->execute([$dni, $nomb, $ape, $genero, $dom, $fecha_nac, $nombTutor]);

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

    $conn->exec("USE $dbname");

    $stmt = $conn->prepare("INSERT INTO Datos_pedagogicos(Dni, Fecha_ingreso, escRef, Grado, poseeEsc, escComun, escEspecial, lectContinua, interpTextos, reconoceSAV, elabOrac, lectyescri, resuelvOpBas) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->execute([$dni, $fecha_ing, $escRef, $grado, $poseEsc, $escComun, $escEspec, $LecturaCont, $InterpText, $ReconoceASV, $ElabOrac, $lectYesct, $resOpBasic]);


    $estado = $_POST['estado'];
    $fecha = $_POST['fecha'];

    $conn->exec("USE $dbname");



    if ($estado == "Internado") {
        $sala = $_POST['sala'];
        $habitacion = $_POST['habitacion'];
        $cama = $_POST['cama'];
        $disc1 = $_POST['disc1'];
        $obs1 = $_POST['obs1'];
        $diag1 = $_POST['diag1'];
        $stmt = $conn->prepare("INSERT INTO Datos_internacion(Dni, Fecha_ingreso, Sala, Habitación, Cama, Discapacidad, Observacion, Diagnostico, Estado) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");

        $stmt->execute([$dni, $fecha, $sala, $habitacion, $cama, $disc1, $obs1, $diag1, $estado]);
    } else {
        $direccion = $_POST['dire'];
        $disc = $_POST['disc'];
        $obs = $_POST['obs'];
        $diag = $_POST['diag'];

        $stmt = $conn->prepare("INSERT INTO Datos_domiciliario(Dni, Fecha_ingreso, Direccion, Discapacidad, Observacion, Diagnostico, Estado) VALUES (?,?,?,?,?,?,?)");

        $stmt->execute([$dni, $fecha, $direccion, $disc, $obs, $diag, $estado]);
    }
}

header("location: formularioAlumno.php");

?>