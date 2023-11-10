<?php



include 'conexion.php';

include 'crearBD.php';

include 'crearTabla.php';



$dni = $_POST['dni'];

$fecha_ing = $_POST['fecha_ingreso'];

$escRef = $_POST['escRef'];

$grado = $_POST['grado'];

$poseEsc = $_POST['posE'];

$escComun = $_POST['escC'];

$LecturaCont = $_POST['lectC'];

$InterpText = $_POST['interpT'];

$lectYesct = $_POST['LectyEsc'];

$resOpBasic = $_POST['resOpBasc'];



// Verificar si la fecha y los campos están llenos

if (empty($fecha_ing) || empty($escRef) || empty($grado) || empty($poseEsc) || empty($escComun) || empty($LecturaCont) || empty($InterpText) || empty($lectYesct) || empty($resOpBasic)) {

    ?>

    <script>

        alert("Por favor, completa todos los campos y la fecha.");

        window.location.href = "formularioAlumno.php";

    </script>

    <?php

} else {

    $conn->exec("USE $dbname");



    $sql = "SELECT * FROM datos_pedagogicos WHERE Dni = :dni AND Fecha_ingreso = :fecha_ing"; // Usar marcadores de posición

    $consulta = $conn->prepare($sql);

    $consulta->bindParam(':dni', $dni); // Vincular el valor a la consulta

    $consulta->bindParam(':fecha_ing', $fecha_ing); // Vincular el valor a la consulta

    $consulta->execute();



    // Verificar si se encontraron filas en el resultado de la consulta

    if ($consulta->rowCount() > 0) {

        ?>

        <script>

            alert("La fecha ingresada ya existe.");

            window.location.href = "formularioAlumno.php";

        </script>

        <?php

    } else {

        $stmt = $conn->prepare("INSERT INTO datos_pedagogicos(Dni, Fecha_ingreso, escRef, Grado, poseeEsc, escComun, lectContinua, interpTextos, lectyescri, resuelvOpBas) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");



        $stmt->execute([$dni, $fecha_ing, $escRef, $grado, $poseEsc, $escComun, $LecturaCont, $InterpText, $lectYesct, $resOpBasic]);



        header("location: formularioAlumno.php");

    }

}

?>

