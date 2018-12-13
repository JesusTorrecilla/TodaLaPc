<html>
<head>
<title>Recibiendo archivo</title>
</head>
<body>
<?php
$nombrearchivo = $_FILES['archivo']['name'];
$extension = explode(".",$nombrearchivo);
$num = count($extension)-1;
if($extension[$num] == "txt"){
echo "Datos del archivo subido: ";
print_r($_FILES);
echo "<br>";
echo "Contenido del archivo: ";
$archivo2=fopen($_FILES['archivo']['tmp_name'],"r");
while($linea=fgets($archivo2)){
echo "Lo leido: $linea<br>";
}
echo "El archivo debe ser de texto(.txt)";
}
else {
echo "El archivo debe ser de texto";
}
?>
</body>
</html>
