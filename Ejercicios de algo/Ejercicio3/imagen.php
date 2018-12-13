<?php
$ancho=100;
$alto=100;
//paso1
header("Content-type: image/png");
$imagen= imagecreatetruecolor($ancho, $alto);
//paso2
$colorFondo= imagecolorallocate($imagen, 200, 200, 200);
$colorAzul= imagecolorallocate($imagen,0,153,255);

imagefilltoborder($imagen, 100, 100, $colorFondo, $colorFondo);
$texto =$_GET['numero'];
$fontSize = 100;
$xPosition = (($ancho/2)-((imagefontwidth($fontSize)*strlen($texto))/2));
$yPosition = (($alto/2)-(imagefontheight($fontSize)/2));

Imagestring($imagen,$fontSize,$xPosition,$yPosition,$texto,$colorAzul);

imagepng($imagen);

imagedestroy($imagen);