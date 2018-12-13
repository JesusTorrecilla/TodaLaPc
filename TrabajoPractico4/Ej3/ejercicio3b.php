<html>
<head>
</head>
<body>
<?php
$usuario="phpmyadmin";
$password="phpmyadmin";
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$documento=$_POST['documento'];
$edad=$_POST['edad'];
echo $nombre;
echo $apellido;
echo $documento;
echo $edad;
try {
$conex = new PDO('mysql:host=localhost;dbname=p1bd',$usuario,$password);
$conex->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$conex->beginTransaction();
$conex->exec("INSERT INTO persona (nombre, apellido, documento, edad) VALUES ('$nombre', '$apellido', '$documento', '$edad')");
$conex->commit();
echo "DATOS INGRESADOS CON EXITO";
header("Location: ejercicio3c.php");
}
catch(PDOException $e)
{
$conex->rollback();
echo "ERROR EN INGRESAR LOS DATOS";
}
$conex = null;
?>
</body>
</html>
