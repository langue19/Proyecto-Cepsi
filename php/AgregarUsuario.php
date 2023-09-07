<?php

include 'conexion.php';
include 'crearBD.php';
include 'crearTabla.php';

// Verificar si se envió el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nomb = $_POST['Nombre'];
    $ape = $_POST['Apellido'];
    $user = $_POST['Usuario'];
    $contra = $_POST['Contraseña'];
    $estado = $_POST['Estado'];
    $posicion = $_POST['Posicion'];

    $conn->exec("USE $dbname");

    // Verificar que los campos no estén vacíos
    if (empty($nomb) || empty($ape) || empty($user) || empty($contra) || empty($estado) || empty($posicion)) {
        ?>
            <script>
                function confirmDelete() {
                    return confirm("Todos los campos son obligatorios. Por favor, completa todos los campos.");
                }
                if (confirmDelete()) {
                    window.location.href = "AgregarU.php"; // Cambiar "otra_pagina.php" por la URL de la página a la que deseas redirigir
                }
            </script>
            <?php
    } else {
        $sql = "SELECT * FROM Datos_usuarios WHERE Usuario = :user"; // Usar marcador de posición
        $consulta = $conn->prepare($sql);
        $consulta->bindParam(':user', $user); // Vincular el valor a la consulta
        $consulta->execute();

        // Verificar si se encontraron filas en el resultado de la consulta
        if ($consulta->rowCount() > 0) {
            ?>
            <script>
                function confirmDelete() {
                    return confirm("El Usuario ingresado ya existe.");
                }
                if (confirmDelete()) {
                    window.location.href = "AgregarU.php"; // Cambiar "otra_pagina.php" por la URL de la página a la que deseas redirigir
                }
            </script>
            <?php
        } else {
            $stmt = $conn->prepare("INSERT INTO Datos_usuarios(Nombre, Apellido, Usuario, Contraseña, Estado, Posicion) VALUES (?, ?, ?, ?, ?, ?)");
            $stmt->execute([$nomb, $ape, $user, $contra, $estado, $posicion]);
            header("location: formularioUsuario.php");
        }
    }
}

?>
