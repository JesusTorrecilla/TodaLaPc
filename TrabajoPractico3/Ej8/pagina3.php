<?php
session_start();
?>
<html>
<head>
<title>Pagina 3</title>
</head>
<body>
<?php
if (isset($_SESSION['usuario'])){;
?>
<a href="ejercicio8c.php">Pagina HOME</a><br>
<a href="pagina1.php">Pagina 1</a><br>
<a href="pagina2.php">Pagina 2</a><br>
<?php
echo "El nombre de usuario es {$_SESSION["usuario"]}";
}
else {
echo "Debe iniciar sesion para acceder a esta pagina";
}
?>
</body>
</html>

