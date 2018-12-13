<html>
<head>
<title>Recepcion del dato</title>
</head>
<body>
<?php
$valor=$_GET["valor"];
$valor2=$valor+1
?>
<form action="ejercicio7c.php" method="GET">
<?php
for ($x=1;$x<$valor2;$x++){
echo "<label for=\"dato$x\">Dato numerico $x: </label>";
echo "<input type=\"text\" id=\"dato$x\" name=\"dato$x\"><br>"; 
}
?>
<input type="submit" value="Enviar datos">
</body>
</html>
