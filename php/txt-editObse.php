<?php
// Verificar si se han enviado los datos del formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Incluir archivos de configuración de la base de datos
    include 'conexion.php';
    include 'crearBD.php';
    include 'crearTabla.php';

    // Recopilar los datos del formulario
    $dni = $_POST['dni'];
    $id = $_POST['id'];

    $fecha = $_POST['fecha'];
    $observaciones = $_POST['Observaciones'];
    $contenido = $_POST['Contenido'];
    $profesor = $_POST['Profesor'];

    // Preparar la consulta de actualización
    $sqlUpdate = "UPDATE datos_academ SET Fecha = :fecha, Observación = :observaciones, Contenido = :contenido, Nombre_Profesor = :profesor WHERE Dni = :dni AND ID = :id";
    $stmt = $conn->prepare($sqlUpdate);

    // Asignar valores a los parámetros
    $stmt->bindParam(':dni', $dni, PDO::PARAM_INT);
    $stmt->bindParam(':fecha', $fecha, PDO::PARAM_STR);
    $stmt->bindParam(':id', $id, PDO::PARAM_STR);
    $stmt->bindParam(':observaciones', $observaciones, PDO::PARAM_STR);
    $stmt->bindParam(':contenido', $contenido, PDO::PARAM_STR);
    $stmt->bindParam(':profesor', $profesor, PDO::PARAM_STR);

    // Ejecutar la consulta de actualización
    if ($stmt->execute()) {
        // Redirigir a la página deseada después de la actualización exitosa
        
        header("Location: formularioAlumno.php");
        exit; // Terminar el script para evitar procesamiento adicional
    } else {
        // Manejar el caso en el que la actualización falla
        echo "Hubo un error al actualizar los datos.";
    }
} else {
    // Manejar el caso en el que no se enviaron datos mediante POST
    echo "No se han enviado datos del formulario.";
}
