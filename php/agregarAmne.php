<?php



include 'conexion.php';

include 'crearBD.php';

include 'crearTabla.php';


// Procesar y guardar los datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoger los datos del formulario
    $nombre1 = $_POST["nombre1"];
    $apellido1 = $_POST["apellido1"];
    $edad1 = $_POST["edad1"];
    $rol1 = $_POST["rol1"];
    $ocupacion1 = $_POST["ocupacion1"];
    $escolaridad1 = $_POST["escolaridad1"];
    $salario_asignacion_pension1 = $_POST["salario_asignacion_pension1"];
    $asist1 = $_POST["asist1"];
    $observaciones1 = $_POST["observaciones1"];

    $nombre2 = $_POST["nombre2"];
    $apellido2 = $_POST["apellido2"];
    $edad2 = $_POST["edad2"];
    $rol2 = $_POST["rol2"];
    $ocupacion2 = $_POST["ocupacion2"];
    $escolaridad2 = $_POST["escolaridad2"];
    $salario_asignacion_pension2 = $_POST["salario_asignacion_pension2"];
    $asist2 = $_POST["asist2"];
    $observaciones2 = $_POST["observaciones2"];

    $obs = $_POST["obs"];

    $numconvi = $_POST["numconvi"];
    $numhabit = $_POST["numhabit"];
    $obsG = $_POST["obsG"];
    $mediosT = $_POST["mediosT"];

    $diagnostico = $_POST["diagnostico"];
    $medico_cabecera = $_POST["medico_cabecera"];
    $tratamiento = $_POST["tratamiento"];
    $medicacion = $_POST["medicacion"];
    $tiempo_internacion = $_POST["tiempo_internacion"];
    $tiempo = $_POST["tiempo"];
    $pronostico = $_POST["pronostico"];
    $observaciones = $_POST["observaciones"];
    $manifestaciones = $_POST["manifestaciones"];
    $enfermedades_previas = $_POST["enfermedades_previas"];
    $medicacion_incidir = $_POST["medicacion_incidir"];
    $tratamientos_terapeutica = $_POST["tratamientos_terapeutica"];

    $nivel_inicial_sala = $_POST["nivel_inicial_sala"];
    $nivel_inicial_asistio = $_POST["nivel_inicial_asistio"];
    $nivel_inicial_institucion = $_POST["nivel_inicial_institucion"];
    $obsE = $_POST["obsE"];

    $nivel_primario_grado = $_POST["nivel_primario_grado"];
    $nivel_primario_tutor = $_POST["nivel_primario_tutor"];

    $promocion_automatica = $_POST["promocion_automatica"];
    $observaciones_promocion = $_POST["observaciones_promocion"];
    $cambios_escuela = $_POST["cambios_escuela"];
    $institucion_cambios = $_POST["institucion_cambios"];
    $repitencia = $_POST["repitencia"];
    $grado_repitencia = $_POST["grado_repitencia"];
    $veces_repitencia = $_POST["veces_repitencia"];
    $ausentismo = $_POST["ausentismo"];
    $observaciones_ausentismo = $_POST["observaciones_ausentismo"];
    $desercion = $_POST["desercion"];
    $observaciones_desercion = $_POST["observaciones_desercion"];
    $derivacion = $_POST["derivacion"];
    $intervencion_equipo = $_POST["intervencion_equipo"];
    $ppi = $_POST["desercion"];
    $caracter_anterior = $_POST["caracter_anterior"];
    $caracter_actual = $_POST["caracter_actual"];
    $nombre_caracter = $_POST["nombre_caracter"];

    $educacion_anterior = $_POST["educacion_anterior"];
    $institucion_educacion = $_POST["institucion_educacion"];
    $grado_educacion = $_POST["grado_educacion"];
    $docente_educacion = $_POST["docente_educacion"];
    $tiempo_intervencion = $_POST["tiempo_intervencion"];

    $observaciones_generales = $_POST["observaciones_generales"];

    // Preparar la consulta SQL
    $sql = "INSERT INTO datos_estudiante (nombre1, apellido1, edad1, rol1, ocupacion1, escolaridad1, salario_asignacion_pension1, asist1, observaciones1, nombre2, apellido2, edad2, rol2, ocupacion2, escolaridad2, salario_asignacion_pension2, asist2, observaciones2, obs, numconvi, numhabit, obsG, mediosT, diagnostico, medico_cabecera, tratamiento, medicacion, tiempo_internacion, tiempo, pronostico, observaciones, manifestaciones, enfermedades_previas, medicacion_incidir, tratamientos_terapeutica, nivel_inicial_sala, nivel_inicial_asistio, nivel_inicial_institucion, obsE, nivel_primario_grado, nivel_primario_tutor, promocion_automatica, observaciones_promocion, cambios_escuela, institucion_cambios, repitencia, grado_repitencia, veces_repitencia, ausentismo, observaciones_ausentismo, desercion, observaciones_desercion, derivacion, intervencion_equipo, ppi, caracter_anterior, caracter_actual, nombre_caracter, educacion_anterior, institucion_educacion, grado_educacion, docente_educacion, tiempo_intervencion, observaciones_generales) 
        VALUES (:nombre1, :apellido1, :edad1, :rol1, :ocupacion1, :escolaridad1, :salario_asignacion_pension1, :asist1, :observaciones1, :nombre2, :apellido2, :edad2, :rol2, :ocupacion2, :escolaridad2, :salario_asignacion_pension2, :asist2, :observaciones2, :obs, :numconvi, :numhabit, :obsG, :mediosT, :diagnostico, :medico_cabecera, :tratamiento, :medicacion, :tiempo_internacion, :tiempo, :pronostico, :observaciones, :manifestaciones, :enfermedades_previas, :medicacion_incidir, :tratamientos_terapeutica, :nivel_inicial_sala, :nivel_inicial_asistio, :nivel_inicial_institucion, :obsE, :nivel_primario_grado, :nivel_primario_tutor, :promocion_automatica, :observaciones_promocion, :cambios_escuela, :institucion_cambios, :repitencia, :grado_repitencia, :veces_repitencia, :ausentismo, :observaciones_ausentismo, :desercion, :observaciones_desercion, :derivacion, :intervencion_equipo, :ppi, :caracter_anterior, :caracter_actual, :nombre_caracter, :educacion_anterior, :institucion_educacion, :grado_educacion, :docente_educacion, :tiempo_intervencion, :observaciones_generales)";

$consulta = $conn->prepare($sql);

$consulta->bindParam(':nombre1', $nombre1);
$consulta->bindParam(':apellido1', $apellido1);
$consulta->bindParam(':edad1', $edad1);
$consulta->bindParam(':rol1', $rol1);
$consulta->bindParam(':ocupacion1', $ocupacion1);
$consulta->bindParam(':escolaridad1', $escolaridad1);
$consulta->bindParam(':salario_asignacion_pension1', $salario_asignacion_pension1);
$consulta->bindParam(':asist1', $asist1);
$consulta->bindParam(':observaciones1', $observaciones1);

$consulta->bindParam(':nombre2', $nombre2);
$consulta->bindParam(':apellido2', $apellido2);
$consulta->bindParam(':edad2', $edad2);
$consulta->bindParam(':rol2', $rol2);
$consulta->bindParam(':ocupacion2', $ocupacion2);
$consulta->bindParam(':escolaridad2', $escolaridad2);
$consulta->bindParam(':salario_asignacion_pension2', $salario_asignacion_pension2);
$consulta->bindParam(':asist2', $asist2);
$consulta->bindParam(':observaciones2', $observaciones2);
$consulta->bindParam(':obs', $obs);
$consulta->bindParam(':numconvi', $numconvi);
$consulta->bindParam(':numhabit', $numhabit);
$consulta->bindParam(':obsG', $obsG);
$consulta->bindParam(':mediosT', $mediosT);

$consulta->bindParam(':diagnostico', $diagnostico);
$consulta->bindParam(':medico_cabecera', $medico_cabecera);
$consulta->bindParam(':tratamiento', $tratamiento);
$consulta->bindParam(':medicacion', $medicacion);
$consulta->bindParam(':tiempo_internacion', $tiempo_internacion);
$consulta->bindParam(':tiempo', $tiempo);
$consulta->bindParam(':pronostico', $pronostico);
$consulta->bindParam(':observaciones', $observaciones);
$consulta->bindParam(':manifestaciones', $manifestaciones);
$consulta->bindParam(':enfermedades_previas', $enfermedades_previas);
$consulta->bindParam(':medicacion_incidir', $medicacion_incidir);
$consulta->bindParam(':tratamientos_terapeutica', $tratamientos_terapeutica);

$consulta->bindParam(':nivel_inicial_sala', $nivel_inicial_sala);
$consulta->bindParam(':nivel_inicial_asistio', $nivel_inicial_asistio);
$consulta->bindParam(':nivel_inicial_institucion', $nivel_inicial_institucion);
$consulta->bindParam(':obsE', $obsE);

$consulta->bindParam(':nivel_primario_grado', $nivel_primario_grado);
$consulta->bindParam(':nivel_primario_tutor', $nivel_primario_tutor);

$consulta->bindParam(':promocion_automatica', $promocion_automatica);
$consulta->bindParam(':observaciones_promocion', $observaciones_promocion);
$consulta->bindParam(':cambios_escuela', $cambios_escuela);
$consulta->bindParam(':institucion_cambios', $institucion_cambios);
$consulta->bindParam(':repitencia', $repitencia);
$consulta->bindParam(':grado_repitencia', $grado_repitencia);
$consulta->bindParam(':veces_repitencia', $veces_repitencia);
$consulta->bindParam(':ausentismo', $ausentismo);
$consulta->bindParam(':observaciones_ausentismo', $observaciones_ausentismo);
$consulta->bindParam(':desercion', $desercion);
$consulta->bindParam(':observaciones_desercion', $observaciones_desercion);
$consulta->bindParam(':derivacion', $derivacion);
$consulta->bindParam(':intervencion_equipo', $intervencion_equipo);
$consulta->bindParam(':ppi', $ppi);
$consulta->bindParam(':caracter_anterior', $caracter_anterior);
$consulta->bindParam(':caracter_actual', $caracter_actual);
$consulta->bindParam(':nombre_caracter', $nombre_caracter);

$consulta->bindParam(':educacion_anterior', $educacion_anterior);
$consulta->bindParam(':institucion_educacion', $institucion_educacion);
$consulta->bindParam(':grado_educacion', $grado_educacion);
$consulta->bindParam(':docente_educacion', $docente_educacion);
$consulta->bindParam(':tiempo_intervencion', $tiempo_intervencion);

$consulta->bindParam(':observaciones_generales', $observaciones_generales);


$consulta->execute();
}


    header("location: formularioAlumno.php");



?>