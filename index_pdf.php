<?php
include_once "./vendor/autoload.php";

use Dompdf\Dompdf;

$dompdf = new Dompdf();
ob_start();
//include "./tabla.php";
$html = ob_get_clean();
$nombreImagen = "imagenes/1.jpg";
$imagenBase64 = "data:image/jpg;base64," . base64_encode(file_get_contents($nombreImagen));
$dompdf->loadHtml('<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bootstrap demo</title>


<style>
    #contenido {
        width: 95%;
        margin: 0px auto;
        background-color: #D4E5F2;
        font-family: Verdana, Geneva, Tahoma, sans-serif;

    }

    #imagen {
        width: 150px;
        height: 150px;
        align-content: center;
    }



    #precio_producto {

        font-size: 25px;
        font-weight: bold;
        text-align: center;
        background-color: yellowgreen;

    }



    #title {
        font-size: 15px;
        font-weight: normal;
        text-align: center;
        padding-top: 10px;
        padding-bottom: 10px;
        background-color: antiquewhite;
        height: 5em;

    }


    #element {
        padding: 10px;
        margin-left: 10px;
        box-shadow: 0 2px 5px #666666;
        float: left;
        position: relative;
        width: 150px;
        border: steelblue solid 1px;
        height: auto;
        background-color: white;
    }

    #right {
        padding-top: 10px;
        padding-left: 10px;
        margin-left: 10px;
        position: relative;
        float: left;
        width: 45%;
        border: steelblue solid 1px;
        height: auto;
    }

    .precio_oferta {
    font-style: normal;
    font-weight: 300;
    font-size: 18px;
    align-items: center;
    text-align: center;
    text-decoration-line: line-through;
    color: #828282;
    margin-right: 12px;
    }

</style>
</head>
<body>
<div id="element">
                <div id="div_image"><img src="' . $imagenBase64 . '" alt="" id="imagen"></div>
                <div id="title">Paleta Glitter<p style="font-weight:600;">SKU: P001</p>
                </div>
                <div id="precio_producto">
                    <span class=precio_oferta>S/. 20.00</span>  15.00                </div>


            </div>

            </div>

                    <div id="element">
                <div id="div_image"><img src="data:image/jpg;base64,'.base64_encode(file_get_contents('imagenes/2.jpg')).'" alt="" id="imagen"></div>
                <div id="title">Ultrabond Preparadores<p style="font-weight:600;">SKU: P002</p>
                </div>
                <div id="precio_producto">
                    S/. 18.00
                </div>


            </div> 
            
            
            <div id="element">
            <div id="div_image"><img src="data:image/jpg;base64,'.base64_encode(file_get_contents('imagenes/3.jpg')).'" alt="" id="imagen"></div>
            <div id="title">Labiales Neon Matte<p style="font-weight:600;">SKU: P003</p>
            </div>
            <div id="precio_producto">
                S/. 10.00
            </div>
            </div>

            <div id="element">
            <div id="div_image"><img src="data:image/jpg;base64,'.base64_encode(file_get_contents('imagenes/4.jpg')).'" alt="" id="imagen"></div>
            <div id="title">Foreo Facial<p style="font-weight:600;">SKU: P004</p>
            </div>
            <div id="precio_producto">
                S/. 15.00 
            </div>

           </div>   
           
           
           <div id="element">
           <div id="div_image"><img src="data:image/jpg;base64,'.base64_encode(file_get_contents('imagenes/5.jpg')).'" alt="" id="imagen"></div>
           <div id="title">Labial Matte<p style="font-weight:600;">SKU: P005</p>
           </div>
           <div id="precio_producto">
               S/. 10.00
            </div>
            </div>           


</body>');
$dompdf->render();
header("Content-type: application/pdf");
header("Content-Disposition: inline; filename=documento.pdf");
echo $dompdf->output();
