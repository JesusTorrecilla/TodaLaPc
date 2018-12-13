<html>
<head>
<title>Ejercicio 12 </title>
</head>
<body>
<?php
function mostrar_array($array){
foreach ($array as $clave => $valor){
echo "La clave del elemento es $clave" . " y su valor:$valor <br>";
}
}
$arreglo['hola']="finish";
mostrar_array($arreglo);
?>
</body>
</html>
