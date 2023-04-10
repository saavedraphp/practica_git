<?php
include_once "./vendor/autoload.php";
use Dompdf\Dompdf;
$dompdf = new Dompdf();
ob_start();
//include "./tabla.php";
$html = ob_get_clean();
$nombreImagen = "imagenes/2.jpg";
$imagenBase64 = "data:image/jpg;base64," . base64_encode(file_get_contents($nombreImagen));
$dompdf->loadHtml("<body>
Aquí una imagen:
<br>
<img src=".$imagenBase64." />

</body>");
$dompdf->render();
header("Content-type: application/pdf");
header("Content-Disposition: inline; filename=documento.pdf");
echo $dompdf->output();