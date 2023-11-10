<?php

include 'conexion.php';

include 'crearBD.php';

include 'crearTabla.php';


// Recibir datos del formulario
$dni = $_POST['dni'];
$fecha_r = $_POST['fechaI'];
$observaciones = $_POST['obs'];

// Insertar datos en la tabla
$sql = "INSERT INTO datos_tabla (dni, fecha_r, observaciones) VALUES (:dni, :fecha_r, :observaciones)";
$consulta = $conn->prepare($sql);
$consulta->bindParam(':dni', $dni);
$consulta->bindParam(':fecha_r', $fecha_r);
$consulta->bindParam(':observaciones', $observaciones);

if ($consulta->execute()) {
    header("location: formularioAlumno.php");
} else {
    header("location: formularioAlumno.php?error=1");
}

// Cerrar la conexión
$conn = null;
?>
