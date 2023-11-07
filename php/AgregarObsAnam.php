<?php



include 'conexion.php';

include 'crearBD.php';

include 'crearTabla.php';



$dni = $_POST['dni'];

$fecha = $_POST['fecha'];

$obse = $_POST['Observaciones'];

$nombreP = $_POST['Profesor'];



$conn->exec("USE $dbname");



$stmt = $conn->prepare("INSERT INTO Datos_ObsAnamn(Dni, Fecha, Observación,Nombre_Profesor) VALUES (?, ?, ?, ?)");



$stmt->execute([$dni, $fecha, $obse, $contenido, $nombreP]);





header("location: formularioAlumno.php");

?>

