<?php
session_start();
?>
<html>
<head>
</head>
<body>
<?php
$usuario="phpmyadmin";
$password="phpmyadmin";
$user=$_POST['usuario'];
$clave=$_POST['password'];    
$conex=new PDO("mysql:host=localhost;dbname=p1bd",$usuario,$password);
$sql='SELECT id, clave, habilitado FROM usuario WHERE usuario= :usuario';
$consulta=$conex->prepare($sql);
$resultado=$consulta->execute(array(':usuario'=>$user));
$rows=$consulta->fetchAll(\PDO::FETCH_OBJ);
if(count($rows)){
echo'EXISTE usuario';
$_SESSION['usuario']=$user;
header("Location: ejercicio7c.php");
}
else{   
echo 'NO EXISTE usuario';
header("Location: ejercicio7.php");
}
?>
</body>
</html>
