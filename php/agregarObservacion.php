<?php

include 'conexion.php';
include 'crearBD.php';
include 'crearTabla.php';

$dni = $_POST['dni'];
$fecha = $_POST['fecha'];
$obse = $_POST['Observaciones'];
$contenido = $_POST['Contenido'];
$area_g = $_POST['Area_gabinete'];
$nombreP = $_POST['Profesor'];

$conn->exec("USE $dbname");

$stmt = $conn->prepare("INSERT INTO datos_academ(Dni, Fecha, Observación, Contenido, Área_gabinete, Nombre_Profesor) VALUES (?, ?, ?, ?, ?, ?)");
$stmt->execute([$dni, $fecha, $obse, $contenido, $area_g, $nombreP]);

header("location: formularioAlumno.php");
?>
