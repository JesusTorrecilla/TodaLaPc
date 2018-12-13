<html>
<head>
<title>Recepcion</title>
</head>
<body>
<table>
<?php
$a=$_GET["filas"];
$b=$_GET["columnas"];
$contador=0;
for ($j=0;$j<$a;$j++){
echo "<tr>";
for ($x=0;$x<$b;$x++){
echo "<td> $contador </td>";
$contador++;
}
echo "</tr>";
}
?>
</table>
</body>
</html>

