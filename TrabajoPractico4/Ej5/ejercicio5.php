d>
<title>Ejercicio 4</title>
</head>
<body>
<?php
$usuario="phpmyadmin";
$password="phpmyadmin";
$conex = new PDO('mysql:host=localhost;dbname=p1bd',$usuario,$password);
$sql = "DELETE FROM persona WHERE id = '{$_GET['id']}';";
$ejecucion = $conex->prepare($sql);
$ejecucion->execute();
header("Location: ejercicio5b.php");
?>
</body>
</html>
