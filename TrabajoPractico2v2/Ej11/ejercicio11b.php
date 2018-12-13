<html>
<head>
<title>Recepcion</title>
</head>
<body>
<?php
$var1=$_GET["texto1"];
$var2=$_GET["texto2"];
if($var2>$var1){
echo "El segundo valor numerico debe ser menor o igual al primero";
}
else{
?>
<form action="ejercicio11c.php" method="GET">
<label for="lista">Lista: </label>
<select name="lista">
<?php
for($i=1;$i<$var1+1;$i++){
if($var2==$i){
echo "<option value=\"$i\">Opcion a seleccionar Nro.$i</option<br>";
}
}
for($j=1;$j<$var1+1;$j++){
if($var2!=$j){
echo "<option value=\"$j\">Opcion a seleccionar Nro.$j</option<br>";
}
}
}
?>
</select>
</select>
</body>
</html>
