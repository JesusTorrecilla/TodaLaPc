<?php
$ancho=400;
$alto=500;
header("Content-type: image/png");
$imagen= imagecreatetruecolor($ancho, $alto);
$colorFondo= imagecolorallocate($imagen, 0, 0, 0);
$colorAzul= imagecolorallocate($imagen,0,255,0);
imagefilltoborder($imagen, 100, 100, $colorFondo, $colorFondo);
$texto ='7';
$fontSize = 20000000;
$xPosition = (($ancho/2)-((imagefontwidth($fontSize)*strlen($texto))/2));
$yPosition = (($alto/2)-(imagefontheight($fontSize)/2));
Imagestring($imagen,$fontSize,$xPosition,$yPosition,$texto,$colorAzul);
imagepng($imagen);
?>
