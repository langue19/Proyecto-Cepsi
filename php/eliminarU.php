<?php

include 'conexion.php';
include 'crearBD.php';
include 'crearTabla.php';

// Verificar si se proporcionó un ID válido en la URL
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];

    // Realizar una consulta para eliminar el registro con el ID proporcionado
    $sql = "DELETE FROM datos_usuarios WHERE ID = ?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$id]);

    // Redireccionar al usuario de vuelta a la página que muestra la tabla
    header("Location: formularioUsuario.php");
    exit;
} else {
    // Si no se proporcionó un ID válido, mostrar un mensaje de error o redireccionar a una página de error
    echo "ID inválido.";
}
?>