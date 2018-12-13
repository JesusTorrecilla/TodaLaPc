<html>
<head>
</head>
<body>
<?php
$usuario="phpmyadmin";
$password="phpmyadmin";
$conex = new PDO('mysql:host=localhost;dbname=p1bd',$usuario,$password);
$sql="select * from persona";
$ejecutar=$conex->prepare($sql);
$ejecutar->execute();
echo "<table border='1'>";
echo "   <thead>";
echo "   </thead>";
echo "   <tbody>";
echo'<form action="ejercicio5.php" method="GET" >';
while ($fila = $ejecutar->fetch(PDO::FETCH_NUM)){
echo '<tr>';
for ($index = 0; $index < count($fila); $index++) {
if ($index == 0) {
$id = $fila[$index];
}
echo "<td>$fila[$index]</td>";
}
echo "<td><a href='ejercicio5.php?id=$id'>Borrar</a></td>";
echo "<td><a href='ejercicio5c.php?id=$id'>Modificar</a></td>";
echo '</tr>';
}
echo'</form>';
echo "   </tbody>";
echo "   </table>";
?>
</body>
</html>

