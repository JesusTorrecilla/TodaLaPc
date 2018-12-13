<html>
<head>
<title>Ejercicio 1</title>
</head>
<body>
<?php
$usuario="phpmyadmin";
$password="phpmyadmin";
try {
$conex = new PDO('mysql:host=localhost;dbname=p1bd',$usuario,$password);
$conex->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);    
$conex->beginTransaction();
$conex->exec("INSERT INTO persona (nombre, apellido, documento, edad) VALUES ('Jesus', 'Torrecilla', '39802393', '21')");
$conex->exec("INSERT INTO persona (nombre, apellido, documento, edad) VALUES ('Ferni', 'Isaguirre', '39853541', '22')");
$conex->exec("INSERT INTO persona (nombre, apellido, documento, edad) VALUES ('Cristiano', 'Ronaldo', '39345213', '31')");
$conex->commit();
echo "DATOS INGRESADOS CON EXITO";
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
