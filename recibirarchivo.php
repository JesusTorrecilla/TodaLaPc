<html>
<head>
</head>
<body>
<h2>Recibiendo Archivos</h2>
<?php
echo '$_FILES<br>';
echo "<pre>";
var_dump($_FILES);
echo "</pre>";

$archivoLeer=fopen($_FILES['archivo']['tmp_name'],"r");
echo "Informacion del archivo abierto: $archivoLeer <br>";
while($linea=fgets($archivoLeer)){
echo "Lo leido: $linea<br>";
}
?>
</body>
</html>
