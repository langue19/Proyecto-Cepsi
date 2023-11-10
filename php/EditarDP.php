<?php



include 'conexion.php';

include 'crearBD.php';

include 'crearTabla.php';



$dni = $_POST['dni'];

$fecha_ing = $_POST['fechaI'];

$escRef = $_POST['escRef'];

$grado = $_POST['Grado'];

$poseEsc = $_POST['poseeEsc'];

$escComun = $_POST['escComun'];

$LecturaCont = $_POST['lectContinua'];

$InterpText = $_POST['interpTextos'];

$lectYesct = $_POST['lectyescri'];

$resOpBasic = $_POST['resuelvOpBas'];




$conn->exec("USE $dbname");

$sql = "UPDATE datos_pedagogicos SET escRef = :escRef, Grado = :grado, poseeEsc = :poseEsc, escComun = :escComun, lectContinua = :lectContinua, interpTextos = :interpTextos, lectyescri = :lectyescri, resuelvOpBas = :resuelvOpBas WHERE Dni = :dni AND Fecha_ingreso = :fecha_ing";

$consulta = $conn->prepare($sql);

$consulta->bindParam(':dni', $dni);
$consulta->bindParam(':fecha_ing', $fecha_ing);
$consulta->bindParam(':escRef', $escRef);
$consulta->bindParam(':grado', $grado);
$consulta->bindParam(':poseEsc', $poseEsc);
$consulta->bindParam(':escComun', $escComun);
$consulta->bindParam(':lectContinua', $LecturaCont);
$consulta->bindParam(':interpTextos', $InterpText);
$consulta->bindParam(':lectyescri', $lectYesct);
$consulta->bindParam(':resuelvOpBas', $resOpBasic);

$consulta->execute();

header("location: formularioAlumno.php");


?>