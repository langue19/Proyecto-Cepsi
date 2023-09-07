<?php

include 'conexion.php';
include 'crearBD.php';
include 'crearTabla.php';

$dni = $_POST['documento'];
$nomb = $_POST['nombre'];
$ape = $_POST['apellido'];
$genero = $_POST['genero'];
$dom = $_POST['domicilio'];
$fecha_nac = $_POST['fecha_nacimiento'];
$nombTutor = $_POST['nombre_tutor'];

$conn->exec("USE $dbname");

// Verificar que todos los campos estén llenados
if (empty($dni) || empty($nomb) || empty($ape) || empty($genero) || empty($dom) || empty($fecha_nac) || empty($nombTutor)) {
    ?>
    <script>
        alert("Por favor, completa todos los campos.");
        window.location.href = "formularioAlumno.php";
    </script>
    <?php
} else {
    // Verificar si el registro con el DNI ya existe en la base de datos
    $sqlExist = "SELECT * FROM Datos_personales WHERE Dni = :dni";
    $consultaExist = $conn->prepare($sqlExist);
    $consultaExist->bindParam(':dni', $dni);
    $consultaExist->execute();

    // Si existe, realizar la actualización
    if ($consultaExist->rowCount() > 0) {
        $sqlUpdate = "UPDATE Datos_personales SET Nombre = :nombre, Apellido = :apellido, Sexo = :sexo, Domicilio = :domicilio, Fecha_nacimiento = :fecha_nacimiento, Nombre_del_tutor = :nombre_tutor WHERE Dni = :dni";
        $stmt = $conn->prepare($sqlUpdate);
        $stmt->bindParam(':dni', $dni);
        $stmt->bindParam(':nombre', $nomb);
        $stmt->bindParam(':apellido', $ape);
        $stmt->bindParam(':sexo', $genero);
        $stmt->bindParam(':domicilio', $dom);
        $stmt->bindParam(':fecha_nacimiento', $fecha_nac);
        $stmt->bindParam(':nombre_tutor', $nombTutor);
        $stmt->execute();

        header("location: cards.php"); // Redirigir a la página deseada después de la actualización
    } else {
        ?>
        <script>
            alert("El DNI ingresado no existe en la base de datos.");
            window.location.href = "formularioAlumno.php";
        </script>
        <?php
    }
}
?>

