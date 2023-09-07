<?php
require_once 'dompdf/autoload.inc.php';

use Dompdf\Dompdf;
use Dompdf\Options;

// Crear una nueva instancia de Dompdf
$options = new Options();
$options->set('isHtml5ParserEnabled', true);
$options->set('isPhpEnabled', true);
$pdf = new Dompdf($options);

if (isset($_POST['dni']) && is_numeric($_POST['dni'])) {
  $Dni = $_POST['dni'];
} else {
  // Manejo de error si el DNI no se proporciona correctamente
  exit("Error: DNI inválido o no proporcionado.");
}

$fechaP=$_POST['datosP'];
$fechaI=$_POST['datosI'];
$fechaD=$_POST['datosD'];
$fechaA=$_POST['datosA'];

include 'conexion.php';
include 'crearBD.php';
include 'crearTabla.php';

$conn->exec("USE $dbname");

// Preparar y ejecutar la consulta
$stmt = $conn->prepare("SELECT * FROM datos_personales WHERE DNI = ?");
$stmt->execute([$Dni]);

// Obtener los resultados de la consulta
$result = $stmt->fetch(PDO::FETCH_ASSOC);

// Preparar y ejecutar la consulta para datos pedagógicos
$stmt1 = $conn->prepare("SELECT * FROM datos_pedagogicos WHERE DNI = ? AND Fecha_ingreso = ?");
$stmt1->execute([$Dni,$fechaP]);
$result1 = $stmt1->fetch(PDO::FETCH_ASSOC);

// Preparar y ejecutar la consulta para datos internacion
$stmt2 = $conn->prepare("SELECT * FROM datos_internacion WHERE DNI = ? AND Fecha_ingreso = ?");
$stmt2->execute([$Dni,$fechaI]);
$result2 = $stmt2->fetch(PDO::FETCH_ASSOC);

// Preparar y ejecutar la consulta para datos domiciliario
$stmt3 = $conn->prepare("SELECT * FROM datos_domiciliario WHERE DNI = ? AND Fecha_ingreso = ?");
$stmt3->execute([$Dni,$fechaD]);
$result3 = $stmt3->fetch(PDO::FETCH_ASSOC);

// Preparar y ejecutar la consulta para datos académicos
$stmt4 = $conn->prepare("SELECT * FROM datos_academ WHERE DNI = ? AND Fecha = ?");
$stmt4->execute([$Dni,$fechaA]);
$result4 = $stmt4->fetch(PDO::FETCH_ASSOC);


// Cargar contenido HTML en el PDF
$html = '
<!DOCTYPE html>
<html>
<style>
  .full-width-table {
    width: 100%;
  }
  .table-header {
    background-color: #b3e0ff; /* Color de fondo del encabezado */
  }
  .centered-text {
    text-align: center;
  }
  .top-corner {
    position: absolute;
    top: 5px;
    right: 20px;
    font-size: 12px;
  }
  
  .top-corner p {
    font-size: 12px;
    margin: 0;
  }

  .top-corner p:first-child {
    font-weight: bold;
  }
  .centered-p {
    font-size: 12px;
    text-align: center;
    margin-top: 4px;
    margin-bottom: 4px;
  }
  .line-above-h2 {
    text-align: center;
    padding-top: 10px; 
  }

  .line-above-h2 hr {
    border: none;
    border-top: 1px solid #00aaff;
    margin-top: 10px; 
  }
  .datos-academicos-section {
    page-break-before: always;
}
</style>
<body>

<img src="./Proyecto-master/Proyecto-master/img/conte1.png" style="max-width: 40px;">

<div class="top-corner">
<p style="font-size: 14px; margin-bottom: 4px;">Escuela Hospitalaria-Domiciliaria "DR. FCO J. VIANO" N° 1</p>
  <p style="font-size: 12px; margin-bottom: 4px;">Centro Provincial de salud Infantil-CePSI "Eva Peron" - Misiones N° 1087</p>
  <p class="centered-p">TEL  4216890/210812/225449/215666 int 1184</p>
</div>
<div class="line-above-h2">
  <hr>
  <h2 class="centered-text">Ficha de identificación</h2>
</div>
<p>Desde el establecimiento FRANCISCO JOSÉ VIANO, nos complace presentar al alumno:</p>
<p><b>Nombre y Apellido:</b>  ' . $result['Apellido'] . ' ' . $result['Nombre'] . '</p>
<p><b>DNI:</b> ' . $result['Dni'] . '</p>
<p><b>Domicilio:</b> ' . $result['Domicilio'] . '</p>
<p><b>Fecha de Nacimiento:</b> ' . $result['Fecha_nacimiento'] . '</p>
<p><b>Tutor: </b>' . $result['Nombre_del_tutor'] . '</p>
<p><b>Grado:</b>'.$result1['Grado'].'</p>
<p><b>Sexo:</b> ' . $result['Sexo'] . '</p>
<p><b>Observaciones:</b></p>


<h2 class="centered-text">Datos Pedagogicos</h2>

<table class="full-width-table w3-table-all">
    <thead class="table-header">
    <tr class="">
    <th></th>
        <th>Fecha: '.$result1['Fecha_ingreso'].'</th>
      </tr>
      <tr class="">
        <th>INDICADORES</th>
        <th>-</th>
      </tr>
    </thead>
    <tr>
      <td><b>Escuela de referencia</b> </td>
      <td>'.$result1['escRef'].'</td>
    </tr>
    <tr>
      <td><b>Posee escolaridad?</b></td>
      <td>'.$result1['poseeEsc'].'</td>
    </tr>
    <tr>
      <td><b>Escuela comun?</b></td>
      <td>'.$result1['escComun'].'</td>
    </tr>
    <tr>
      <td><b>Escuela especial?</b></td>
      <td>'.$result1['escEspecial'].'</td>
    </tr>
    <tr>
      <td><b>Presenta lectura continua?</b></td>
      <td>'.$result1['lectContinua'].'</td>
    </tr>
    <tr>
      <td><b>Presenta interpretacion de textos?</b></td>
      <td>'.$result1['interpTextos'].'</td>
    </tr>
    <tr>
      <td><b>Reconoce sustantivos, adjetivos y verbos?</b></td>
      <td>'.$result1['reconoceSAV'].'</td>
    </tr>
    <tr>
      <td><b>Elabora oraciones?</b></td>
      <td>'.$result1['elabOrac'].'</td>
    </tr>
    <tr>
      <td><b>Presenta lectura y escritura?</b> </td>
      <td>'.$result1['lectyescri'].'</td>
    </tr>
    <tr>
      <td><b>Resuelve operaciones basicas? </b></td>
      <td>'.$result1['resuelvOpBas'].'</td>
    </tr>
  </table>

  <div style="margin-bottom: 100px;"></div>

  <div class="datos-internacion-section">
  <h2 class="centered-text">Datos Internacion</h2>
  <table class="full-width-table w3-table-all datos-internacion">
    <thead class="table-header">
    <tr class="">
    <th></th>
        <th>Fecha: '.$result2['Fecha_ingreso'].'</th>
      </tr>
      <tr class="">
        <th>INDICADORES</th>
        <th>-</th>
      </tr>
    </thead>
    <tr>
    <td><b>Sala</b></td>
    <td>'.$result2['Sala'].'</td>
</tr>
<tr>
    <td><b>Habitación</b></td>
    <td>'.$result2['Habitación'].'</td>
</tr>
<tr>
    <td><b>Cama</b></td>
    <td>'.$result2['Cama'].'</td>
</tr>
<tr>
    <td><b>Discapacidad</b></td>
    <td>'.$result2['Discapacidad'].'</td>
</tr>
<tr>
    <td><b>Observación</b></td>
    <td>'.$result2['Observacion'].'</td>
</tr>
<tr>
    <td><b>Diagnóstico</b></td>
    <td>'.$result2['Diagnostico'].'</td>
</tr>
<tr>
    <td><b>Fecha de Alta</b></td>
    <td>'.$result2['Fecha_alta'].'</td>
</tr>
<tr>
    <td><b>Motivo</b></td>
    <td>'.$result2['Motivo'].'</td>
</tr>
  </table>

  <div style="margin-bottom: 100px;"></div>

  <div class="datos-domiciliario-section">
  <h2 class="centered-text">Datos Domiciliario</h2>
  <table class="full-width-table w3-table-all datos-domiciliario">
    <thead class="table-header">
    <tr class="">
    <th></th>
        <th>Fecha: '.$result3['Fecha_ingreso'].'</th>
      </tr>
      <tr class="">
        <th>INDICADORES</th>
        <th>-</th>
      </tr>
    </thead>
    <tr>
    <td><b>Dirección</b></td>
    <td>'.$result3['Direccion'].'</td>
</tr>
<tr>
    <td><b>Discapacidad</b></td>
    <td>'.$result3['Discapacidad'].'</td>
</tr>
<tr>
    <td><b>Observación</b></td>
    <td>'.$result3['Observacion'].'</td>
</tr>
<tr>
    <td><b>Diagnóstico</b></td>
    <td>'.$result3['Diagnostico'].'</td>
</tr>
<tr>
    <td><b>Fecha de Alta</b></td>
    <td>'.$result3['Fecha_alta'].'</td>
</tr>
<tr>
    <td><b>Motivo</b></td>
    <td>'.$result3['Motivo'].'</td>
</tr>
  </table>

  <div style="margin-bottom: 100px;"></div>

  <div class="datos-academicos-section">
  <h2 class="centered-text">Datos Academicos</h2>
  <table class="full-width-table w3-table-all datos-academicos">
    <thead class="table-header">
    <tr class="">
    <th></th>
        <th>Fecha: '.$result4['Fecha'].'</th>
      </tr>
      <tr class="">
        <th>INDICADORES</th>
        <th>-</th>
      </tr>
    </thead>
    <tr>
      <td><b>Observacion</b> </td>
      <td>'.$result4['Observación'].'</td>
    </tr>
    <tr>
      <td><b>Contenido</b></td>
      <td>'.$result4['Contenido'].'</td>
    </tr>
    <tr>
      <td><b>Area Gabinete</b></td>
      <td>'.$result4['Área_gabinete'].'</td>
    </tr>
    <tr>
      <td><b>Nombre del Profesor</b> </td>
      <td>'.$result4['Nombre_Profesor'].'</td>
    </tr>
  </table>


  <p>Agradecemos su compromiso y confianza en nuestra institución educativa. Estamos seguros de que el Alumno continuará desarrollándose de manera integral en nuestro entorno educativo.</p>
  <p class="centered-text">Atentamente:</p>
  <p class="centered-text">[Firma o Sello de la Institución]</p>
</body>
</html>
';

$pdf->loadHtml($html);

// Renderizar el PDF
$pdf->render();

// Enviar el PDF al navegador para descarga
$pdf_content = $pdf->output();
header('Content-Type: application/pdf');
header('Content-Disposition: attachment; filename="' . $result['Apellido'] . '.pdf"');
header('Content-Length: ' . strlen($pdf_content));
echo $pdf_content;

?>