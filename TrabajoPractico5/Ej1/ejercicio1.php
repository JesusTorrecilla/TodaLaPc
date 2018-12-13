<?php
$ancho=400;
$alto=500;
header("Content-type: image/png");
$imagen = imagecreatetruecolor($ancho,$alto);
$verde = imagecolorallocate($imagen,0,255,0);
imagefilltoborder($imagen,0,0,$verde,$verde);
imagepng($imagen);
?>
