<?php
session_start();
?>
<html>
<head>
<title>Pagina 2</title>
</head>
<body>
<?php
if (isset($_SESSION['usuario'])){;
?>
<a href="ejercicio9c.php">Pagina HOME</a><br>
<a href="pagina1.php">Pagina 1</a><br>
<a href="pagina3.php">Pagina 3</a><br>
<?php
echo "El nombre de usuario es {$_SESSION["usuario"]}";
$hora=date("G");
$minutos=date("i");
$segundos=date("s");
$tiempo=" ".$hora.":".$minutos.":".$segundos.";";
$dia=date("d");
$mes=date("m");
$anho=date("Y");
$fecha="" .$dia. "-" .$mes. "-" .$anho.";";
$script=array_pop(explode('/', $_SERVER['PHP_SELF']));
$file=fopen("registro.txt","a");
if($file == false){
  die("No se ha podido crear el archivo.");
}
fputs($file,$fecha);
fputs($file,$tiempo);
fputs($file,$script);
fputs($file,PHP_EOL);
}
else {
echo "Debe iniciar sesion para acceder a esta pagina";
}
?>
</body>
</html>
