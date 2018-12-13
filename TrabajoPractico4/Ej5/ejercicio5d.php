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
$id=$_POST['id'];
$conex = new PDO("mysql:host=localhost;dbname=p1bd",$usuario,$password);
$sql = "UPDATE persona SET nombre = :nombre, apellido = :apellido, documento = :documento,  edad = :edad,  WHERE id = :id";
$stmt = $conex->prepare($sql);                                  
$stmt->bindParam(':nombre', $nombre, PDO::PARAM_STR);       
$stmt->bindParam(':apellido', $apellido, PDO::PARAM_STR);    
$stmt->bindParam(':documento', $documento, PDO::PARAM_STR);
$stmt->bindParam(':edad', $edad, PDO::PARAM_INT); 
$stmt->bindParam(':id', $id, PDO::PARAM_INT);   
$stmt->execute(); 
header("Location: ejercicio5b.php");
?>
</body>
</html>
