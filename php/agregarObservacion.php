<?php

include 'conexion.php';
include 'crearBD.php';
include 'crearTabla.php';

$dni = $_POST['dni'];
$fecha = $_POST['fecha'];
$obse = $_POST['Observaciones'];
$contenido = $_POST['Contenido'];
$nombreP = $_POST['Profesor'];

$conn->exec("USE $dbname");

$stmt = $conn->prepare("INSERT INTO datos_academ(Dni, Fecha, Observación, Contenido, Nombre_Profesor) VALUES (?, ?, ?, ?, ?)");

$stmt->execute([$dni, $fecha, $obse, $contenido, $nombreP]);


header("location: formularioAlumno.php");
?>
