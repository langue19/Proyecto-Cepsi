<?php
// Incluye los archivos de conexión y otros necesarios aquí (crearTabla.php, etc.)

// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'conexion.php';
    include 'crearBD.php';
    include 'crearTabla.php';

    // Obtener los datos enviados desde el formulario
    $id = $_POST['Dni'];
    $nombre = $_POST['Nombre'];
    $apellido = $_POST['Apellido'];
    $estado = $_POST['Estado'];

    $conn->exec("USE $dbname");

    // Preparar la sentencia de actualización
    $stmt = $conn->prepare("UPDATE datos_profesor SET Nombre = ?, Apellido = ?, Estado = ? WHERE Dni = ?");
    $stmt->execute([$nombre, $apellido, $estado, $id]);

    // Redireccionar a la página de formularioProfesor.php después de la actualización
    header("location: formularioProfesor.php");
    exit;
}
?>
