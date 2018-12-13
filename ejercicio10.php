<html>
<head>
<title> Ejercicio 10 </title>
</head>
<body>
<?php
$string = "1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16;17,18,19,20,21,22,23,24
,25,26,27,28";
list($arreglo,$arreglo2)=explode(";",$string);
$arreglo3 = explode(",",$arreglo);
$arreglo4 = explode(",",$arreglo2);
echo "<table>";
foreach($arreglo3 as $valor){
echo "<tr>";
echo "<td>$valor </td";
echo "</tr>";
}
foreach($arreglo4 as $valor1){
echo "<td>";
echo "<tr> $valor1 </tr>";
echo "</td>";
}
echo "</table>";
?>
</body>
</html>
