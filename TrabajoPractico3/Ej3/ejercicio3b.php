<html>
<head>
<title>Recepcion</title>
</head>
<body>
<?php
$nombrearchivo = $_FILES['archivo']['name'];
$extension = explode(".",$nombrearchivo);
$num = count($extension)-1;
if($extension[$num] == "txt"){
$origen = $_FILES["archivo"]["tmp_name"];
$destino = "importados/".$_FILES["archivo"]["name"]."";
copy($origen,$destino);
$archivo=fopen("importados/".$_FILES["archivo"]["name"]."", "r");
while($linea = fgets($archivo)){
echo $linea;
echo "<br>";
}
}
else {
echo "El archivo debe ser de texto";
}
?>
</body>
</html>
