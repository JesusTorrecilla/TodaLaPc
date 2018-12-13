<html
<head>
</head>
<body>
<?php
$usuario="phpmyadmin";
$password="phpmyadmin";
$conex=new PDO("mysql:host=localhost;dbname=p1bd",$usuario,$password);
$sql = "select id as ID , nombre as NOMBRE , apellido as APELLIDO, CONCAT(nombre,' ',apellido) as NombreCompleto, documento as DNI , edad from persona;";
$ejecutar = $conex->prepare($sql);
$ejecutar->execute();
$i=0;
echo"<table border='1'>";
echo"<thead>";
echo"<tr>";
while ($columna = $ejecutar->getColumnmeta($i)) {
echo"<th> ";
echo $columna['name'];
echo"</th>";
$i++;
}
echo"</tr>";
echo"</thead>";
while ($fila = $ejecutar->fetch(PDO::FETCH_ASSOC)) {
echo"<tr>";
foreach ($fila as $mostrar) {
echo"<th>$mostrar</th>";
}
echo"</tr>";
}
echo"</table>";
?>
</body>
</html>
