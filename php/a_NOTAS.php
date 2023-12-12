<?php

include 'conexion.php'; // Asegúrate de que tus archivos de conexión estén incluidos
include 'crearBD.php';
include 'crearTabla.php';



$dni = $_POST['DNI'];
$ano = $_POST['AÑO'];

if (
    isset(
        $_POST['Trimestre'],
        $_POST['Lengua_cal'],
        $_POST['Lengua_observaciones'],
        $_POST['Matematica_cal'],
        $_POST['Matematica_observaciones'],
        $_POST['Sociales_cal'],
        $_POST['Sociales_observaciones'],
        $_POST['Naturales_cal'],
        $_POST['Naturales_observaciones'],
        $_POST['Tecnologia_cal'],
        $_POST['Tecnologia_observaciones'],
        $_POST['Musica_cal'],
        $_POST['Musica_observaciones'],
        $_POST['Plastica_cal'],
        $_POST['Plastica_observaciones'],
        $_POST['EticayCiudadana_cal'],
        $_POST['EticayCiudadana_observaciones'],
        $_POST['Int_pract_destaca'],
        $_POST['Int_pract_trabaja'],
        $_POST['Int_pract_mejorar'],
        $_POST['Personales_soc_motiv'],
        $_POST['Personales_soc_trabajo'],
        $_POST['Personales_soc_respons'],
        $_POST['Personales_soc_acompañ'],
        $_POST['Int_equipo_psicologo'],
        $_POST['Int_equipo_psicopedagogo'],
        $_POST['Observaciones_generales']
    ) &&
    !empty($_POST['Trimestre']) &&
    !empty($_POST['Lengua_cal']) &&
    !empty($_POST['Lengua_observaciones']) &&
    !empty($_POST['Matematica_cal']) &&
    !empty($_POST['Matematica_observaciones']) &&
    !empty($_POST['Sociales_cal']) &&
    !empty($_POST['Sociales_observaciones']) &&
    !empty($_POST['Naturales_cal']) &&
    !empty($_POST['Naturales_observaciones']) &&
    !empty($_POST['Tecnologia_cal']) &&
    !empty($_POST['Tecnologia_observaciones']) &&
    !empty($_POST['Musica_cal']) &&
    !empty($_POST['Musica_observaciones']) &&
    !empty($_POST['Plastica_cal']) &&
    !empty($_POST['Plastica_observaciones']) &&
    !empty($_POST['EticayCiudadana_cal']) &&
    !empty($_POST['EticayCiudadana_observaciones']) &&
    !empty($_POST['Int_pract_destaca']) &&
    !empty($_POST['Int_pract_trabaja']) &&
    !empty($_POST['Int_pract_mejorar']) &&
    !empty($_POST['Personales_soc_motiv']) &&
    !empty($_POST['Personales_soc_trabajo']) &&
    !empty($_POST['Personales_soc_respons']) &&
    !empty($_POST['Personales_soc_acompañ']) &&
    !empty($_POST['Int_equipo_psicologo']) &&
    !empty($_POST['Int_equipo_psicopedagogo']) &&
    !empty($_POST['Observaciones_generales'])
) {
    // Procede con el procesamiento de datos
    $trimestre = $_POST['Trimestre'];
    $lengua_cal = $_POST['Lengua_cal'];
    $lengua_observaciones = $_POST['Lengua_observaciones'];
    $matematica_cal = $_POST['Matematica_cal'];
    $matematica_observaciones = $_POST['Matematica_observaciones'];
    $sociales_cal = $_POST['Sociales_cal'];
    $sociales_observaciones = $_POST['Sociales_observaciones'];
    $naturales_cal = $_POST['Naturales_cal'];
    $naturales_observaciones = $_POST['Naturales_observaciones'];
    $tecnologia_cal = $_POST['Tecnologia_cal'];
    $tecnologia_observaciones = $_POST['Tecnologia_observaciones'];
    $musica_cal = $_POST['Musica_cal'];
    $musica_observaciones = $_POST['Musica_observaciones'];
    $plastica_cal = $_POST['Plastica_cal'];
    $plastica_observaciones = $_POST['Plastica_observaciones'];
    $etica_cal = $_POST['EticayCiudadana_cal'];
    $etica_observaciones = $_POST['EticayCiudadana_observaciones'];
    $int_destaca = $_POST['Int_pract_destaca'];
    $int_trabaja = $_POST['Int_pract_trabaja'];
    $int_mejorar = $_POST['Int_pract_mejorar'];
    $motivacion = $_POST['Personales_soc_motiv'];
    $habitos_trabajo = $_POST['Personales_soc_trabajo'];
    $responsabilidad = $_POST['Personales_soc_respons'];
    $acompanamiento = $_POST['Personales_soc_acompañ'];
    $psicologo = $_POST['Int_equipo_psicologo'];
    $psicopedagogo = $_POST['Int_equipo_psicopedagogo'];
    $observaciones_generales = $_POST['Observaciones_generales'];

    // Aquí puedes realizar las operaciones necesarias con los datos recibidos
} else {
    $mensaje = "Debe completar todos los campos.";

    // Generar código JavaScript para mostrar el mensaje
    echo "<script>alert('$mensaje'); window.history.back();</script>";}

$conn->exec("USE $dbname");

$editar = $_POST['editar'];
if ($editar == "nada") {

    $sql = "SELECT * FROM datos_notas WHERE DNI = :dni AND AÑO = :ano AND Trimestre = :trimestre";
    $consulta = $conn->prepare($sql);
    $consulta->bindParam(':dni', $dni);
    $consulta->bindParam(':ano', $ano);
    $consulta->bindParam(':trimestre', $trimestre);
    $consulta->execute();

    $stmt = $conn->prepare("INSERT INTO datos_notas (DNI, AÑO, Trimestre, Lengua_cal, Lengua_observaciones, Matematica_cal, Matematica_observaciones, Sociales_cal, Sociales_observaciones, Naturales_cal, Naturales_observaciones, Tecnologia_cal, Tecnologia_observaciones, Musica_cal, Musica_observaciones, Plastica_cal, Plastica_observaciones, EticayCiudadana_cal, EticayCiudadana_observaciones, Int_pract_destaca, Int_pract_trabaja, Int_pract_mejorar, Personales_soc_motiv, Personales_soc_trabajo, Personales_soc_respons, Personales_soc_acompañ, Int_equipo_psicologo, Int_equipo_psicopedagogo, Observaciones_generales) VALUES (?,?,?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->execute([$dni, $ano, $trimestre, $lengua_cal, $lengua_observaciones, $matematica_cal, $matematica_observaciones, $sociales_cal, $sociales_observaciones,$naturales_cal, $naturales_observaciones, $tecnologia_cal, $tecnologia_observaciones, $musica_cal, $musica_observaciones, $plastica_cal, $plastica_observaciones, $etica_cal, $etica_observaciones, $int_destaca, $int_trabaja, $int_mejorar, $motivacion, $habitos_trabajo, $responsabilidad, $acompanamiento, $psicologo, $psicopedagogo, $observaciones_generales]);
    header("location: formularioAlumno.php"); // Ajusta la ruta según tu estructura de carpetas

} else {
    $sql_update = "UPDATE datos_notas 
                   SET Lengua_cal = :lengua_cal, Lengua_observaciones = :lengua_observaciones,
                       Matematica_cal = :matematica_cal, Matematica_observaciones = :matematica_observaciones,
                       Sociales_cal = :sociales_cal, Sociales_observaciones = :sociales_observaciones,Naturales_cal = :naturales_cal,Naturales_observaciones = :naturales_observaciones,
                       Tecnologia_cal = :tecnologia_cal, Tecnologia_observaciones = :tecnologia_observaciones,
                       Musica_cal = :musica_cal, Musica_observaciones = :musica_observaciones,
                       Plastica_cal = :plastica_cal, Plastica_observaciones = :plastica_observaciones,
                       EticayCiudadana_cal = :etica_cal, EticayCiudadana_observaciones = :etica_observaciones,
                       Int_pract_destaca = :int_destaca, Int_pract_trabaja = :int_trabaja, Int_pract_mejorar = :int_mejorar,
                       Personales_soc_motiv = :motivacion, Personales_soc_trabajo = :habitos_trabajo,
                       Personales_soc_respons = :responsabilidad, Personales_soc_acompañ = :acompanamiento,
                       Int_equipo_psicologo = :psicologo, Int_equipo_psicopedagogo = :psicopedagogo,
                       Observaciones_generales = :observaciones_generales
                   WHERE DNI = :dni AND AÑO = :ano AND Trimestre = :trimestre";

    $stmt_update = $conn->prepare($sql_update);
    $stmt_update->bindParam(':dni', $dni);
    $stmt_update->bindParam(':ano', $ano);
    $stmt_update->bindParam(':trimestre', $trimestre);
    $stmt_update->bindParam(':lengua_cal', $lengua_cal);
    $stmt_update->bindParam(':lengua_observaciones', $lengua_observaciones);
    $stmt_update->bindParam(':matematica_cal', $matematica_cal);
    $stmt_update->bindParam(':matematica_observaciones', $matematica_observaciones);
    $stmt_update->bindParam(':sociales_cal', $sociales_cal);
    $stmt_update->bindParam(':sociales_observaciones', $sociales_observaciones);
    $stmt_update->bindParam(':naturales_cal', $naturales_cal);
    $stmt_update->bindParam(':naturales_observaciones', $naturales_observaciones);
    $stmt_update->bindParam(':tecnologia_cal', $tecnologia_cal);
    $stmt_update->bindParam(':tecnologia_observaciones', $tecnologia_observaciones);
    $stmt_update->bindParam(':musica_cal', $musica_cal);
    $stmt_update->bindParam(':musica_observaciones', $musica_observaciones);
    $stmt_update->bindParam(':plastica_cal', $plastica_cal);
    $stmt_update->bindParam(':plastica_observaciones', $plastica_observaciones);
    $stmt_update->bindParam(':etica_cal', $etica_cal);
    $stmt_update->bindParam(':etica_observaciones', $etica_observaciones);
    $stmt_update->bindParam(':int_destaca', $int_destaca);
    $stmt_update->bindParam(':int_trabaja', $int_trabaja);
    $stmt_update->bindParam(':int_mejorar', $int_mejorar);
    $stmt_update->bindParam(':motivacion', $motivacion);
    $stmt_update->bindParam(':habitos_trabajo', $habitos_trabajo);
    $stmt_update->bindParam(':responsabilidad', $responsabilidad);
    $stmt_update->bindParam(':acompanamiento', $acompanamiento);
    $stmt_update->bindParam(':psicologo', $psicologo);
    $stmt_update->bindParam(':psicopedagogo', $psicopedagogo);
    $stmt_update->bindParam(':observaciones_generales', $observaciones_generales);

    $stmt_update->execute();

    header("location: formularioAlumno.php"); // Ajusta la ruta según tu estructura de carpetas
}
