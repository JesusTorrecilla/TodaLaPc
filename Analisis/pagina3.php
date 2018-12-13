<?php
session_start();
?>
<html>
  <head>
    <title>Metodo Gauss Seidel</title>
  </head>
  <body>
<h2>Metodo Gauss Seidel</h2>
    <?php
    $er=$_POST['er'];
$c11=$_POST['c11'];
$c12=$_POST['c12'];
$c13=$_POST['c13'];
$c14=$_POST['c14'];
$c15=$_POST['c15'];
$c21=$_POST['c21'];
$c22=$_POST['c22'];
$c23=$_POST['c23'];
$c24=$_POST['c24'];
$c25=$_POST['c25'];
$c31=$_POST['c31'];
$c32=$_POST['c32'];
$c33=$_POST['c33'];
$c34=$_POST['c34'];
$c35=$_POST['c35'];
$c41=$_POST['c41'];
$c42=$_POST['c42'];
$c43=$_POST['c43'];
$c44=$_POST['c44'];
$c45=$_POST['c45'];
$c51=$_POST['c51'];
$c52=$_POST['c52'];
$c53=$_POST['c53'];
$c54=$_POST['c54'];
$c55=$_POST['c55'];
$rdo1=$_POST['rdo1'];
$rdo2=$_POST['rdo2'];
$rdo3=$_POST['rdo3'];
$rdo4=$_POST['rdo4'];
$rdo5=$_POST['rdo5'];
echo "Despejando nos queda: <br>";
if (isset($rdo5)){
  echo "X1 = [-($c12) X2 - ($c13) X3 - ($c14) X4 - ($c15) X5 + $rdo1]/$c11 <br>";
  echo "X2 = [-($c21) X1 - ($c23) X3 - ($c24) X4 - ($c25) X5 + $rdo2]/$c22 <br>";
  echo "X3 = [-($c31) X1 - ($c32) X2 - ($c34) X4 - ($c35) X5 + $rdo3]/$c33 <br>";
  echo "X4 = [-($c41) X1 - ($c42) X2 - ($c43) X3 - ($c45) X5 + $rdo4]/$c44 <br>";
  echo "X5 = [-($c51) X1 - ($c52) X2 - ($c53) X3 - ($c54) X4 + $rdo5]/$c55 <br>";
}
elseif (isset($rdo4)){
  echo "X1 = [-($c12) X2 - ($c13) X3 - ($c14) X4 + $rdo1]/$c11  <br>";
  echo "X2 = [-($c21) X1 - ($c23) X3 - ($c24) X4 + $rdo2]/$c22  <br>";
  echo "X3 = [-($c31) X1 - ($c32) X2 - ($c34) X4 + $rdo3]/$c33  <br>";
  echo "X4 = [-($c41) X1 - ($c42) X2 - ($c43) X3 + $rdo4]/$c44  <br>";
}
elseif (isset($rdo3)){
  echo "X1 = [-($c12) X2 - ($c13) X3 + $rdo1]/$c11 <br>";
  echo "X2 = [-($c21) X1 - ($c23) X3 + $rdo2]/$c22 <br>";
  echo "X3 = [-($c31) X1 - ($c32) X2 + $rdo3]/$c33 <br>";
}
elseif (isset($rdo2)){
  echo "X1 = [-($c12) X2 + $rdo1]/$c11 <br>";
  echo "X2 = [-($c21) X1 + $rdo2]/$c22 <br>";
}
?>
<br>Se propone la solucion inicial de ceros.<br>
<?php
if (isset($er) == FALSE){
$er=0.0005;
}
$a=2;
$x2=0;
$x3=0;
$x4=0;
$x5=0;
$z=0;
$h=1;
$errorfinal=10;
//Orden 3
while($errorfinal>$er){
  $x1 = ((-$c12*$x2)-($c13*$x3)+$rdo1)/$c11;
  $x2 = ((-$c21*$x1)-($c23*$x3)+$rdo2)/$c22;
  $x3 = ((-$c31*$x1)-($c32*$x2)+$rdo3)/$c33;
  $arreglo[$h][$z]=$x1;
  $arreglo[$h][$z+1]=$x2;
  $arreglo[$h][$z+2]=$x3;
  echo " <br>En el paso $h el valor de x1 es: ";
  echo round($x1,4);
  echo "<br>";
  echo "En el paso $h el valor de x2 es: ";
  echo round($x2,4);
  echo "<br>En el paso $h el valor de x3 es: ";
  echo round($x3,4);
  $error[$h][$z]=($arreglo[$h][$z])-($arreglo[$h-1][$z]);
  $error[$h][$z+1]=($arreglo[$h][$z+1])-($arreglo[$h-1][$z+1]);
  $error[$h][$z+2]=($arreglo[$h][$z+2])-($arreglo[$h-1][$z+2]);
  echo "<br><br>";
  $err[$h][$z]=abs($error[$h][$z]);
  $err[$h][$z+1]=abs($error[$h][$z+1]);
  $err[$h][$z+2]=abs($error[$h][$z+2]);
  $errorfinal=max($err[$h]);
  echo "<br>El error del paso $h es $errorfinal";
  echo "<br><br><br>";
  $h++;
}
//Orden 2
/*
for($h=1;$h<$a+1;$h++){
$x1 = ((-$c12*$x2)+$rdo1)/$c11;
$x2 = ((-$c21*$x1)+$rdo2)/$c22;
$arreglo[$h][$z]=$x1;
$arreglo[$h][$z+1]=$x2;
echo " <br>En el paso $h el valor de x1 es: ";
echo round($x1,4);
echo "<br>";
echo "En el paso $h el valor de x2 es: ";
echo round($x2,4);
echo "<br><br>";
$alto[$h]=max(abs($arreglo[$h]));
echo "El valor mas alto del paso $h es $alto[$h]";
$error=$alto[$h]-$alto[$h-1];
echo "<br>El error del paso $h es $error";
echo "<br><br><br>";
}
*/
 ?>
  </body>
  </html>
