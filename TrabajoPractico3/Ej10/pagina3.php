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
<a href="ejercicio10c.php">Pagina HOME</a><br>
<a href="pagina1.php">Pagina 1</a><br>
<a href="pagina2.php">Pagina 2</a><br>
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
echo "<br>";
echo "<br>";
echo "<a href=\"../Ej9/registro.txt\" download=\"registro\">Descargar registro del ejercicio 9</a>";
echo "<br><br>Contenido del registro: <br>";
$archivo=fopen("../Ej9/registro.txt","r");
while(!feof($archivo)) {
$linea = fgets($archivo);
echo $linea . "<br />";
//Dado que el usuario puede guardar el archivo en cualquier ruta que el desee, no sabia que ruta poner para que lo abriera. Por eso lo lei desde la ruta del trabajo, eso es lo que interprete de la consigna. Pido disculpas si la malinterprete.
}
}
else {
echo "Debe iniciar sesion para acceder a esta pagina";
}
?>
</body>
</html>

