<?php
$ancho=500;
$alto=400;
//paso 1
header("Content-type: image/png");
$imagen=imagecreatetruecolor($ancho,$alto);
//paso 2 El primer color que coloco lo toma como fondo por eso sempre hago el fondo primero
$colorFondo=imagecolorallocate($imagen, 255, 255, 255);
$colorVerde=imagecolorallocate($imagen,0,255,0);
$colorGris=imagecolorallocate($imagen, 200, 200, 200);
imagefilltoborder($imagen,100,100,$colorGris,$colorGris);
imagerectangle($imagen, 20, 20, 200, 200, $colorVerde);
//paso 3
imagepng($imagen);
?>
