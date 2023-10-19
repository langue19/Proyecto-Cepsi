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

// Verificar que los campos no estén vacíos
if (empty($fecha) || empty($motivo)) {
?>
    <script>
        function confirmDelete() {
            return confirm("Todos los campos son obligatorios. Por favor, completa todos los campos.");
        }
        if (confirmDelete()) {
            window.location.href = "formularioAlumno.php"; // Cambiar "otra_pagina.php" por la URL de la página a la que deseas redirigir
        }
    </script>
<?php
} else {

    // Preparar la consulta para actualizar los datos
    $stmt = $conn->prepare("UPDATE Datos_domiciliario
                       SET Fecha_alta = :nuevaFecha, Motivo = :nuevoMotivo
                       WHERE Dni = :dni AND Fecha_ingreso = :fechaI");

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
}
?>