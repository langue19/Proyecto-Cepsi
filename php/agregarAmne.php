<?php

include 'conexion.php';
include 'crearBD.php';
include 'crearTabla.php';

$dni = $_POST['documento'];
$nomb = $_POST['nombre'];
$ape = $_POST['apellido'];
$estado = $_POST['estado'];

$conn->exec("USE $dbname");

// Verificar que todos los campos estén llenados
if (empty($dni) || empty($nomb) || empty($ape) || empty($estado)) {
?>
    <script>
        alert("Por favor, completa todos los campos.");
        window.location.href = "AgregarProf.php";
    </script>
<?php
} else {
    $sql = "SELECT * FROM Datos_Profesor WHERE Dni = :dni"; // Usar marcador de posición
    $consulta = $conn->prepare($sql);
    $consulta->bindParam(':dni', $dni); // Vincular el valor a la consulta
    $consulta->execute();

    // Verificar si se encontraron filas en el resultado de la consulta
    if ($consulta->rowCount() > 0) {
    ?>
        <script>
            alert("El DNI ingresado ya existe.");
            window.location.href = "AgregarProf.php";
        </script>
    <?php
    } else {
    $stmt = $conn->prepare("INSERT INTO Datos_Profesor(Dni, Nombre, Apellido, Estado) VALUES (?, ?, ?, ?)");
    $stmt->execute([$dni, $nomb, $ape, $estado]);
    header("location: formularioAlumno.php");
}
}
?>
