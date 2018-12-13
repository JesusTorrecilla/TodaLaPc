<?php
$ancho=400;
$alto=500;
//paso1
header("Content-type: image/png");
$imagen= imagecreatetruecolor($ancho, $alto);
//paso2
$colorFondo= imagecolorallocate($imagen, 255, 255, 255);
$colorVerder= imagecolorallocate($imagen, 0, 255, 0);

$colorGris= imagecolorallocate($imagen, 200, 200, 200);
imagefilltoborder($imagen, 100, 100, $colorVerder, $colorVerder);
//imagerectangle($imagen, 20, 20, 200, 200, $colorVerder);
//imagerectangle($imagen, 40, 40, 100, 100, $colorVerder);
//imagerectangle($imagen, 40, 40, 160, 100, $colorVerder);
//paso3
imagepng($imagen);
?>

	