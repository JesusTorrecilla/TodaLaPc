<?php
function imagelinethick($imagen, $x1, $y1, $x2, $y2, $color, $grueso = 1)
{
if ($grueso == 1) {
return imageline($imagen, $x1, $y1, $x2, $y2, $color);
}
$t = $grueso / 2 - 0.5;
if ($x1 == $x2 || $y1 == $y2) {
return imagefilledrectangle($imagen, round(min($x1, $x2) - $t), round(min($y1, $y2) - $t), round(max($x1, $x2) + $t), round(max($y1, $y2) + $t), $color);
}
$k = ($y2 - $y1) / ($x2 - $x1); //y = kx + q
$a = $t / sqrt(1 + pow($k, 2));
$puntos = array(
round($x1 - (1+$k)*$a), round($y1 + (1-$k)*$a),
round($x1 - (1-$k)*$a), round($y1 - (1+$k)*$a),
round($x2 + (1+$k)*$a), round($y2 - (1-$k)*$a),
round($x2 + (1-$k)*$a), round($y2 + (1+$k)*$a),
);
imagefilledpolygon($imagen, $puntos, 4, $color);
return imagepolygon($imagen, $puntos, 4, $color);
}
$ancho=400;
$alto=500;
header("Content-type: image/png");
$imagen= imagecreatetruecolor($ancho, $alto);
$colorFondo= imagecolorallocate($imagen, 255, 255, 255);
$colorVerder= imagecolorallocate($imagen, 0, 255, 0);
$colorAzul= imagecolorallocate($imagen, 50, 100, 210);
$colorNegro= imagecolorallocate($imagen, 50, 50, 50);
$colorGris= imagecolorallocate($imagen, 200, 200, 200);
imagefilltoborder($imagen, 100, 100, $colorGris, $colorGris);
$bx1=0;
$by1=($alto*0.05)*4;
$bx2=0;
$by2=0;
imagelinethick($imagen, $bx1, $by1, $bx2, $by2, $colorAzul, $grueso = $ancho*0.9*2);
$ax1=$ancho;
$ay1=$alto/2;
$ax2=0;
$ay2=$alto/2;
imageline ( $imagen , $ax1 , $ay1 , $ax2 , $ay2 , $colorVerder );
imagerectangle($imagen, 0, $alto*0.10, $ancho*0.10, $alto*0.10+$alto*0.40, $colorNegro);
imagerectangle($imagen, $ancho*0.20, $alto*0.10, $ancho*0.20+$ancho*0.10, $alto*0.10+$alto*0.40, $colorNegro);
imagerectangle($imagen, $ancho*0.20*2, $alto*0.10, ($ancho*0.20)*2+$ancho*0.10, $alto*0.10+$alto*0.40, $colorNegro);
imagerectangle($imagen, $ancho*0.20*3, $alto*0.10, ($ancho*0.20)*3+$ancho*0.10, $alto*0.10+$alto*0.40, $colorNegro);
$texto ="A1";
$fontSize = 10;
$xPosition = $ancho*0.10/2;
$yPosition = $alto*0.10+$alto*0.40;
Imagestring($imagen,$fontSize,$xPosition,$yPosition,$texto,$colorFondo);
$texto1 ="B2";
$fontSize1 = 10;
$xPosition1 = $ancho*0.20+$ancho*0.10/2;
$yPosition1 = $alto*0.10+$alto*0.40;
Imagestring($imagen,$fontSize1,$xPosition1,$yPosition1,$texto1,$colorFondo);
$texto2 ="C3";
$fontSize2 = 10;
$xPosition2 = ($ancho*0.20)*2+$ancho*0.10/2;
$yPosition2 = $alto*0.10+$alto*0.40;
Imagestring($imagen,$fontSize2,$xPosition2,$yPosition2,$texto2,$colorFondo);
$texto3 ="D4";
$fontSize3 = 10;
$xPosition3 = ($ancho*0.20)*3+$ancho*0.10/2;
$yPosition3 =  $alto*0.10+$alto*0.40;
Imagestring($imagen,$fontSize3,$xPosition3,$yPosition3,$texto3,$colorFondo);
imagepng($imagen);
?>
