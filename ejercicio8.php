<html>
<head>
<title>Ejercicio 8</title>
</head>
<body>
<table>
<?php
$contador=0;
for ($j=0;$j<5;$j++){
echo "<tr>";
for ($x=0;$x<5;$x++){
echo "<td> $contador </td>";
$contador++;
}
echo "</tr>";
}
?>
</table>
</body>
</html>
