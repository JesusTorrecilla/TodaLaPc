
<html>
<head>
<title>Ejercicio 3 a </title>
</head>
<body>
<?php
echo   "<br>";
$valor=1;
echo "<table border=1>";
echo       "<thead>";
echo           "<tr>";
for($i=1;$i<=4;$i++)   {
echo '<th><img src="imagen.php?numero='.$i.'"></th>';
}
echo"           </tr>";
echo"       </thead>";
echo"       <tbody>";
echo"           <tr>";
for($i=5;$i<=8;$i++)   {
echo '<th><img src="imagen.php?numero='.$i.'"></th>';
}
echo"               </tr>";
echo"               <tr>";
for($i=9;$i<=12;$i++)   {
echo '<th><img src="imagen.php?numero='.$i.'"></th>';
}
echo"               </tr>";
echo"               <tr>";
for($i=13;$i<=16;$i++)   {
echo '<th><img src="imagen.php?numero='.$i.'"></th>';
}
echo"               </tr>";
echo"               <tr>";
echo"                </tr>";
echo"            </tbody>";
echo"        </table>";
?>
</body>
</html>
