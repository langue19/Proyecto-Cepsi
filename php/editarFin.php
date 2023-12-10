<?php

// Incluye los archivos de conexión y otros necesarios aquí (crearTabla.php, etc.)



// Verificar si se ha enviado el formulario

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    include 'conexion.php';

    include 'crearBD.php';

    include 'crearTabla.php';



    // Obtener los datos enviados desde el formulario

    $id = $_POST['id'];

    $nombre = $_POST['Nombre'];

    $apellido = $_POST['Apellido'];

    $user = $_POST['Usuario'];


    $estado = $_POST['Estado'];

    $posicion = $_POST['Posicion'];



    $conn->exec("USE $dbname");



    // Preparar la sentencia de actualización

    $stmt = $conn->prepare("UPDATE datos_usuarios SET Nombre = ?, Apellido = ?, Usuario = ?, Estado = ?, Posicion = ? WHERE ID = ?");

    $stmt->execute([$nombre,$apellido,$user, $estado, $posicion, $id]);



    // Redireccionar a la página de formularioUsuario.php después de la actualización

    header("location: formularioUsuario.php");

    exit;

}

?>