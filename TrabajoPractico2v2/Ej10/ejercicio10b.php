<html>
<head>
<title>Recepcion del dato</title>
</head>
<body>
<?php
$valor=$_POST["valor"];
$valor2=$valor+1
?>
<form action="ejercicio10c.php" method="POST">
<?php
for ($x=1;$x<$valor2;$x++){
echo "<input type=\"checkbox\" name=\"check$x\"";
echo "<label for=\"dato$x\"></label>";
echo "<input type=\"text\" name=\"dato$x\">";
echo "<label for=\"check1\">Producto $x</label><br>";
echo "<input type=\"hidden\" name=\"cantidad\" value=\"$valor2\">";
}
?>
<input type="submit" value="Enviar datos">
</form>
</body>
</html>   
