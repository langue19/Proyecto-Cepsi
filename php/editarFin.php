<?php
// Incluye los archivos de conexión y otros necesarios aquí (crearTabla.php, etc.)

// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'conexion.php';
    include 'crearBD.php';
    include 'crearTabla.php';

    // Obtener los datos enviados desde el formulario
    $id = $_POST['id'];
    $user = $_POST['Usuario'];
    $contra = $_POST['Contraseña'];
    $estado = $_POST['Estado'];
    $posicion = $_POST['Posicion'];

    $conn->exec("USE $dbname");

    // Preparar la sentencia de actualización
    $stmt = $conn->prepare("UPDATE Datos_usuarios SET Usuario = ?, Contraseña = ?, Estado = ?, Posicion = ? WHERE ID = ?");
    $stmt->execute([$user, $contra, $estado, $posicion, $id]);

    // Redireccionar a la página de formularioUsuario.php después de la actualización
    header("location: formularioUsuario.php");
    exit;
}
?>