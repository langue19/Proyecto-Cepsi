<?php



require_once 'dompdf/autoload.inc.php';







use Dompdf\Dompdf;



use Dompdf\Options;







// Crear una nueva instancia de Dompdf



$options = new Options();



$options->set('isHtml5ParserEnabled', true);



$options->set('isPhpEnabled', true);



$pdf = new Dompdf($options);








if (isset($_GET['id'])) {
  $Dni = $_GET['id'];
} else {
  exit("Error: DNI inválido o no proporcionado.");
}


include 'conexion.php';
include 'crearBD.php';
include 'crearTabla.php';



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
<p><b>DNI:</b> ' . $Dni. '</p>



<p>Agradecemos su compromiso y confianza en nuestra institución educativa. Estamos seguros de que el Alumno continuará desarrollándose de manera integral en nuestro entorno educativo.</p>



<p class="centered-text">Atentamente:</p>



<p class="centered-text">[Firma o Sello de la Institución]</p>



</body>



</html>';







$pdf->loadHtml($html);



// Renderizar el PDF

$pdf->render();







// Enviar el PDF al navegador para descarga



$pdf_content = $pdf->output();



header('Content-Type: application/pdf');



header('Content-Disposition: attachment; filename="prueba.pdf"');



header('Content-Length: ' . strlen($pdf_content));



echo $pdf_content;







?>