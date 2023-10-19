<?php

include 'conexion.php';
include 'crearBD.php';
include 'crearTabla.php';

    $dni = $_POST['dni'];
    $fecha = $_POST['fecha'];
    $nombreFamiliar = $_POST['Nombref'];
    $apellidoFamiliar = $_POST['apellido'];
    $ocupacion = $_POST['ocupacion'];
    $escolaridadAlcanzada = $_POST['escAlcanzada'];
    $poseeSalarioAsignacionPension = $_POST['Posee Salario/Asignacion/Pension'];
    $asistenteSanitario = $_POST['Asistsani'];
    $observaciones = $_POST['Obsrv'];

    $tipo = $_POST['Tipo'];
    $numConvivientes = $_POST['conviviente'];
    $numHabitaciones = $_POST['numerohab'];
    $construccion = $_POST['construccion'];
    $tenencia = $_POST['tenencia'];
    $servicioAgua = $_POST['¿Posee Servicio de Agua?'];
    $servicioLuz = $_POST['¿Posee Servicio de Luz?'];
    $servicioGas = $_POST['¿Posee Servicio de Gas?'];
    $servicioCloacas = $_POST['¿Posee Servicio de Cloacas?'];
    $servicioCable = $_POST['¿Posee Servicio de Cable?'];
    $servicioInternet = $_POST['¿Posee Servicio de Internet?'];
    $observacionesGenerales = $_POST['ObserGen'];
    $accesibilidad = $_POST['accesibilidad'];

    $diagnostico = $_POST['diag'];
    $medicoCabecera = $_POST['medicor'];
    $tratamiento = $_POST['tratamiento'];
    $medicacionIndicada = $_POST['medindicada'];
    $requirioInternacion = $_POST['Requirio Internacion?'];
    $tiempo = $_POST['tiempo'];
    $pronostico = $_POST['pronostico'];
    $otrasObservaciones = $_POST['Otrasobs'];
    $manifestacionesAfectivoEmocionales = $_POST['manifestacion'];
    $enfermedadesPrevias = $_POST['enfermedadesp'];
    $medicacionInferirDesempenoEscolar = $_POST['medicacion'];
    $tratamientoNino = $_POST['tratamiento'];

    $nivel = $_POST['nivel'];
    $sala = $_POST['Sala'];
    $asistio = $_POST['¿Asistio?'];
    $institucion = $_POST['institucion'];
    $observacionesInicial = $_POST['Obs'];

    $grado = $_POST['grado que cursa'];
    $docenteTutor = $_POST['dire'];
    $promocionAutomatica = $_POST['¿Promocion Automatica en el primer ciclo?'];
    $observacionesPrimario = $_POST['obs'];

    $cambioEscuela = $_POST['cambio'];
    $nuevaInstitucion = $_POST['sala'];

    $repitencia = $_POST['repitencia'];
    $gradoRepitencia = $_POST['grado'];
    $vecesRepitencia = $_POST['cveces'];

    $ausentismo = $_POST['ausentismo'];
    $observacionesAusentismo = $_POST['obsv'];

    $derivacion = $_POST['Derivacion'];
    $intervencionEquipoTecnico = $_POST['¿Promocion Automatica en el primer ciclo?'];
    $caracter = $_POST['caracter'];
    $nombre = $_POST['nombre'];
    $ppi = $_POST['ppi'];

    $educacion = $_POST['educacion'];
    $institucion = $_POST['institucion'];
    $grado = $_POST['grado'];
    $docente = $_POST['docente'];
    $tiempoIntervencion = $_POST['Tintervencion'];

    $observacionesGenerales = $_POST['obsg'];

$conn->exec("USE $dbname");

// Verificar que todos los campos estén llenados
if (empty($dni) || empty($nomb) || empty($ape) || empty($estado)) {
?>
    <script>
        alert("Por favor, completa todos los campos.");
        window.location.href = "AgregarAnamnesis.php";
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
            window.location.href = "AgregarAnamnesis.php";
        </script>
    <?php
    } else {
    $stmt = $conn->prepare("INSERT INTO Datos_Profesor(Dni, Nombre, Apellido, Estado) VALUES (?, ?, ?, ?)");
    $stmt->execute([$dni, $nomb, $ape, $estado]);
    header("location: formularioAlumno.php");
}
}
?>
