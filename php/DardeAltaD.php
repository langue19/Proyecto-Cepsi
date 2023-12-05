<?php

include 'conexion.php';

include 'crearBD.php';

include 'crearTabla.php';

// Recuperar datos del formulario

$dni = $_POST['dni'];

$fechaI = $_POST['fechaI'];

$fecha = $_POST['fecha'];

$motivo = $_POST['motivo'];



// Cambiar a la base de datos adecuada

$conn->exec("USE $dbname");





// Preparar la consulta para actualizar los datos

$stmt = $conn->prepare("UPDATE personales_fechas

                       SET Fecha_alta = :nuevaFecha, Motivo = :nuevoMotivo

                       WHERE Dni = :dni AND Fecha_registro = :fechaI");



// Asignar valores a los parámetros

$stmt->bindParam(':nuevaFecha', $fecha, PDO::PARAM_STR);

$stmt->bindParam(':nuevoMotivo', $motivo, PDO::PARAM_STR);

$stmt->bindParam(':dni', $dni, PDO::PARAM_INT);

$stmt->bindParam(':fechaI', $fechaI, PDO::PARAM_STR);



// Ejecutar la consulta

if ($stmt->execute()) {

    header("Location: formularioAlumno.php");  // Redirigir después de la actualización exitosa

} else {

    echo "Hubo un error al actualizar los datos.";
}

?>