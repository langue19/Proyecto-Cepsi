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
        window.location.href = "agregarA.php";
    </script>
<?php
} else {
    $sql = "SELECT * FROM Datos_personales WHERE Dni = :dni"; // Usar marcador de posición
    $consulta = $conn->prepare($sql);
    $consulta->bindParam(':dni', $dni); // Vincular el valor a la consulta
    $consulta->execute();

    // Verificar si se encontraron filas en el resultado de la consulta
    if ($consulta->rowCount() > 0) {
    ?>
        <script>
            alert("El DNI ingresado ya existe.");
            window.location.href = "agregarA.php";
        </script>
    <?php
    } else {
    $stmt = $conn->prepare("INSERT INTO Datos_personales(Dni, Nombre, Apellido, Sexo, Domicilio, Fecha_nacimiento, Nombre_del_tutor) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->execute([$dni, $nomb, $ape, $genero, $dom, $fecha_nac, $nombTutor]);
    header("location: formularioAlumno.php");
}
}
?>
