<html>
<head>
<title>Recepcion de imagen</title> 
</head>
<body>
<?php
$archivo=$_FILES['archivo']['tmp_name'];
$nuevo_archivo="importados/".$_FILES['archivo']['name'];
if($_FILES['archivo']['type']=="image/jpeg" ||$_FILES['archivo']['type']=="image/png" ) {   
if (copy($archivo, $nuevo_archivo)) {
echo "Archivo Copiado <br>";
$directorio=directorio("importados");
while(($archivoleer=$directorio->read())!==false)  {   
if($archivoleer!= "." && $archivoleer!= "..") {   
echo '<img src="importados"/"'.$archivoleer.'"><br>';
}
$directorio->close();
}
}else{   
echo "Error al Copiar \n";
}    
}
else {  
echo "<h2>Archivo:".$archivo." NO SOPORTADO<h2>";    
}
?>
</body>
</html>	
