<html>
<head>
</head>
<body>
<?php
$usuario="phpmyadmin";
$pw="phpmyadmin";
$conex=new PDO("mysql:host=localhost;dbname=p1bd",$usuario,$pw);
$sql="select * from persona";
$ejecutar=$conex->prepare($sql);
$ejecutar->execute();
echo "<table border='1'>";
echo "   <thead>";
echo "   </thead>";
echo "   <tbody>";
while($fila=$ejecutar->fetch(PDO::FETCH_ASSOC)) {   
echo "     <tr>";
foreach ($fila as $campo)  {   
echo "     <td>$campo</td>";
}
echo "     <tr>";                           
}
echo "   </tbody>";
echo "   </table>";
?>
<form>
<br>
<a href="ejercicio3.php">Agregar Nuevo Registro</a>
<br>
</form>
</body>
</html>
