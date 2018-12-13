
<html>
<head>
<title>Ejercicio 3 b</title>
</head>
<body>
<?php
function decimal_romano($numero){
$var="";
$numero=floor($numero);
if($numero<0){
$var="-";
$numero=abs($numero);
}
$numerosromanos=array(1000,500,100,50,10,5,1);
$numeroletrasromanas=array("M"=>1000,"D"=>500,"C"=>100,"L"=>50,"X"=>10,"V"=>5,"I"=>1);
$letrasromanas=array_keys($numeroletrasromanas);
while($numero)
{
for($pos=0;$pos<=6;$pos++)
{
$dividendo=$numero/$numerosromanos[$pos];
if($dividendo>=1)
{
$var.=str_repeat($letrasromanas[$pos],floor($dividendo));
$numero-=floor($dividendo)*$numerosromanos[$pos];
}
}
}
$numcambios=1;
while($numcambios)
{
$parcialfinal="";
$apariencia=0;
$numcambios=0;
$letternumero=0;
$primernumero=0;
for($inicio=0;$inicio<strlen($var);$inicio++)
{
$parcial=substr($var,$inicio,1);
if($parcial==$parcialfinal&&$parcial!="M")
{
$apariencia++;
}
else{
$parcialfinal=$parcial;
$apariencia=1;
}
if($apariencia==4)
{
$primeraletra=substr($var,$inicio-4,1);
$letra=$parcial;
$sum=$primernumero+$letternumero*4;
$pos=busqueda($letra,$letrasromanas);
if($letrasromanas[$pos-1]==$primeraletra)
{
$cadenaant=$primeraletra.str_repeat($letra,4);
$cadenanueva=$letra.$letrasromanas[$pos-2];
}
else{
$cadenaant=str_repeat($letra,4);
$cadenanueva=$letra.$letrasromanas[$pos-1];
}
$numcambios++;
$var=str_replace($cadenaant,$cadenanueva,$var);
}
}
}
return $var;
}
function busqueda($cadenanueva,$array)
{
$pos=0;
foreach($array as $contenido)
{
if($contenido==$cadenanueva)
{
return $pos;
}
$pos++;
}
}
?>
<?php
echo   "<br>";
echo "<table border=1>";
echo       "<thead>";
echo           "<tr>";
for($i=1;$i<=6;$i++)   {
echo '<th><img src="imagen.php?numero='.decimal_romano($i).'"></th>';
}
echo"           </tr>";
echo"       </thead>";
echo"       <tbody>";
echo"           <tr>";
for($i=7;$i<=12;$i++)   {
echo '<th><img src="imagen.php?numero='.decimal_romano($i).'"></th>';
}
echo"               </tr>";
echo"               <tr>";
for($i=13;$i<=18;$i++)   {
echo '<th><img src="imagen.php?numero='.decimal_romano($i).'"></th>';
}
echo"               </tr>";
echo"               <tr>";
for($i=19;$i<=24;$i++)   {
echo '<th><img src="imagen.php?numero='.decimal_romano($i).'"></th>';
}
echo"               </tr>";
echo"               <tr>";
for($i=25;$i<=30;$i++)   {
echo '<th><img src="imagen.php?numero='.decimal_romano($i).'"></th>';
}
echo"               </tr>";
echo"               <tr>";
for($i=31;$i<=36;$i++)   {
echo '<th><img src="imagen.php?numero='.decimal_romano($i).'"></th>';
}
echo"               </tr>";
echo"               <tr>";
echo"                </tr>";
echo"            </tbody>";
echo"        </table>";
?>
</body>
</html>
