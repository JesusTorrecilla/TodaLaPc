<html>
<head>
<title>Ejercicio 2</title>
</head>
<body>
Ejercicio a
<?php
$arreglo[0]=1;
$arreglo[1]=2;
$arreglo[2]=3;
foreach ($arreglo as $valor){
echo "Arreglo: $valor <BR><br>";
}
?>
<BR><br>
Ejercicio b <BR><br>
<?php
$arreglo2['uno']="Hola";
$arreglo2['dos']="que";
$arreglo2['tres']="tal";
foreach ($arreglo2 as $valor1){
echo "Arreglo 2:  $valor1 <BR><br>";
}
?>
<BR><br>
Ejercicio c <BR><br?
<?php

$arreglo3[4][5][6]=2;
$arreglo3[7][8][9]=3;
$arreglo3[10][11][12]=4;
foreach($arreglo3 as $valor){
foreach($valor as $valor1){
foreach($valor1 as $valor2){
echo "El valor es: $valor2<BR><br>";
}
}
}
?>
<BR><br>
Ejercicio d<BR><br>
<?php
$arreglo4['holis']['holis2']="Hola";
$arreglo4['holis3']['holis4']="que";
$arreglo4['holis5']['holis6']="tal";
foreach($arreglo4 as $valor){
foreach($valor as $valor1){
echo "El texto es: $valor1<BR><br>";
}
}
?>
</body>
<html>
