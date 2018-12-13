<html>
<head>
<title>Segunda recepcion</title>
</head>
<body>
<?php
echo "Tabla:   ";
foreach ($_GET as $valor){
echo "<tr> $valor </tr>";
}
echo "<br> El valor maximo del array es ";
echo max($_GET);
echo "<br> El valor minimo del array es ";
echo min($_GET);
$contador=0;
$suma=0;
foreach ($_GET as $valor1){
$suma=$suma+$valor1;
$contador++;
}
$promedio=$suma/$contador;
echo "<br>El promedio del array es $promedio";
?>
</body>
<html>
