<?php

session_start();

?>

<html lang="en">



<?php



$mesesEnEspanol = array(

    1 => 'enero', 2 => 'febrero', 3 => 'marzo', 4 => 'abril', 5 => 'mayo', 6 => 'junio',

    7 => 'julio', 8 => 'agosto', 9 => 'septiembre', 10 => 'octubre', 11 => 'noviembre', 12 => 'diciembre'

);



?>



<head>

    <!-- Google Font: Source Sans Pro -->

    <link rel="stylesheet" href="\Proyecto-master\Proyecto-master\css\font.css">

    <!-- Font Awesome Icons -->

    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">

    <!-- IonIcons -->

    <link rel="stylesheet" href="\Proyecto-master\Proyecto-master\css\code.ionic.css">

    <!-- Theme style -->

    <link rel="stylesheet" href="dist/css/adminlte.min.css">



    <meta charset="utf-8">

    <link rel="stylesheet" type="text/css" href="/Proyecto-master/Proyecto-master/css/sidebar.css">

    <link rel="stylesheet" href="\Proyecto-master\Proyecto-master\css\w3.css">

    <link href="\Proyecto-master\Proyecto-master\bootstrap\css\bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">



    <script src="/Proyecto-master/Proyecto-master/js/FormAlumno.js"></script>

    <link rel="shortcut icon" href="/Proyecto-master/Proyecto-master/favicon/favicon-32x32.png">



</head>

<?php
include 'conexion.php';
include 'crearBD.php';
include 'crearTabla.php';

if (isset($_GET['dni'])) {
    $dni = $_GET['dni'];

    // Escapar caracteres especiales para evitar inyecciones de SQL
    $dni = '%' . $dni . '%';

    // Cambia la consulta SQL para buscar DNI que contengan los mismos números
    $stmt = $conn->prepare("SELECT * FROM datos_personales WHERE Dni LIKE :dni");
    $stmt->bindParam(':dni', $dni, PDO::PARAM_STR);
    
    if ($stmt->execute()) {
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        if (!empty($result)) {
            echo "<table>";
            foreach ($result as $row) {
                echo "<tr>";
                echo "<td>" . $row['Nombre'] . "</td>";
                echo "<td>" . $row['Apellido'] . "</td>";
                // Agrega más columnas según sea necesario
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "No se encontraron resultados.";
        }
    } else {
        echo "Hubo un error al realizar la búsqueda.";
    }
} else {
    // Cuando no se proporciona ningún parámetro de búsqueda, restaura la tabla a su estado original
    $stmt = $conn->query("SELECT * FROM datos_personales");
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if (!empty($result)) {
        echo "<table>";
        foreach ($result as $row) {
            echo "<tr>";
            echo "<td>" . $row['Nombre'] . "</td>";
            echo "<td>" . $row['Apellido'] . "</td>";
            // Agrega más columnas según sea necesario
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "No se encontraron resultados.";
    }
}
?>
