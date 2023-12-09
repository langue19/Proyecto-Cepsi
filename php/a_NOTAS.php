<?php

include 'conexion.php'; // Asegúrate de que tus archivos de conexión estén incluidos
include 'crearBD.php';
include 'crearTabla.php';

$dni = $_POST['DNI'];
$ano = $_POST['AÑO'];
$trimestre = $_POST['Trimestre'];
$lengua_cal = $_POST['Lengua_cal'];
$lengua_observaciones = $_POST['Lengua_observaciones'];
$matematica_cal = $_POST['Matematica_cal'];
$matematica_observaciones = $_POST['Matematica_observaciones'];
$sociales_cal = $_POST['Sociales_cal'];
$sociales_observaciones = $_POST['Sociales_observaciones'];
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

$conn->exec("USE $dbname");


$sql = "SELECT * FROM datos_notas WHERE DNI = :dni AND AÑO = :ano AND Trimestre = :trimestre";
$consulta = $conn->prepare($sql);
$consulta->bindParam(':dni', $dni);
$consulta->bindParam(':ano', $ano);
$consulta->bindParam(':trimestre', $trimestre);
$consulta->execute();

if ($consulta->rowCount() > 0) {
?>
    <script>
        alert("Ya existe una entrada con ese DNI, año y trimestre.");
        window.location.href = "formularioAlumno.php"; // Ajusta la ruta según tu estructura de carpetas
    </script>
<?php
} else {
    $stmt = $conn->prepare("INSERT INTO datos_notas (DNI, AÑO, Trimestre, Lengua_cal, Lengua_observaciones, Matematica_cal, Matematica_observaciones, Sociales_cal, Sociales_observaciones, Tecnologia_cal, Tecnologia_observaciones, Musica_cal, Musica_observaciones, Plastica_cal, Plastica_observaciones, EticayCiudadana_cal, EticayCiudadana_observaciones, Int_pract_destaca, Int_pract_trabaja, Int_pract_mejorar, Personales_soc_motiv, Personales_soc_trabajo, Personales_soc_respons, Personales_soc_acompañ, Int_equipo_psicologo, Int_equipo_psicopedagogo, Observaciones_generales) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->execute([$dni, $ano, $trimestre, $lengua_cal, $lengua_observaciones, $matematica_cal, $matematica_observaciones, $sociales_cal, $sociales_observaciones, $tecnologia_cal, $tecnologia_observaciones, $musica_cal, $musica_observaciones, $plastica_cal, $plastica_observaciones, $etica_cal, $etica_observaciones, $int_destaca, $int_trabaja, $int_mejorar, $motivacion, $habitos_trabajo, $responsabilidad, $acompanamiento, $psicologo, $psicopedagogo, $observaciones_generales]);
    header("location: formularioAlumno.php"); // Ajusta la ruta según tu estructura de carpetas
}

?>