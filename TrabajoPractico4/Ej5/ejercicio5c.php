<html>
<head>
</head>
<body>
<form action="ejercicio5d.php" method="POST" >
<label for="nombre">Nombre: </label>               
<input type="text" name="nombre"><br>
<label for="apellido">Apellido: </label>              
<input type="text" name="apellido"><br>
<label for="documento">Documento: </label>              
<input type="text" name="documento"><br>
<label for="edad">Edad: </label>              
<input type="text" name="edad"><br>
<?php
echo '<input type="hidden" name="id" value="'.$_GET['id'].'"><br>';
?>
<input type="submit" name="Enviar datos"/> 
</form>
</body>
</html>
