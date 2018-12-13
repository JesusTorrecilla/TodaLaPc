<html>
  <head>
    <title>Metodo Gauss Seidel</title>
  </head>
  <body>
<h2>Metodo Gauss Seidel</h2>
    <?php
    $a=$_POST['orden'];
    $er=$_POST['er'];
    $dec=$_POST['dec'];
    $ordenar[1][1]=$_POST['c11'];
    $ordenar[1][2]=$_POST['c12'];
    $ordenar[1][3]=$_POST['c13'];
    $ordenar[1][4]=$_POST['c14'];
    $ordenar[1][5]=$_POST['c15'];
    $ordenar[2][1]=$_POST['c21'];
    $ordenar[2][2]=$_POST['c22'];
    $ordenar[2][3]=$_POST['c23'];
    $ordenar[2][4]=$_POST['c24'];
    $ordenar[2][5]=$_POST['c25'];
    $ordenar[3][1]=$_POST['c31'];
    $ordenar[3][2]=$_POST['c32'];
    $ordenar[3][3]=$_POST['c33'];
    $ordenar[3][4]=$_POST['c34'];
    $ordenar[3][5]=$_POST['c35'];
    $ordenar[4][1]=$_POST['c41'];
    $ordenar[4][2]=$_POST['c42'];
    $ordenar[4][3]=$_POST['c43'];
    $ordenar[4][4]=$_POST['c44'];
    $ordenar[4][5]=$_POST['c45'];
    $ordenar[5][1]=$_POST['c51'];
    $ordenar[5][2]=$_POST['c52'];
    $ordenar[5][3]=$_POST['c53'];
    $ordenar[5][4]=$_POST['c54'];
    $ordenar[5][5]=$_POST['c55'];
    $rdo1=$_POST['rdo1'];
    $rdo2=$_POST['rdo2'];
    $rdo3=$_POST['rdo3'];
    $rdo4=$_POST['rdo4'];
    $rdo5=$_POST['rdo5'];

    for($j=1;$j<$a+1;$j++){
      for($i=1;$i<$a+1;$i++){
        $abs[$j][$i]=abs($ordenar[$j][$i]);
      }
      }

      for($j=1;$j<$a+1;$j++){
        for($i=1;$i<$a+1;$i++){
          if(($abs[$j][$i]) == (max($abs[$j]))){
            for($l=1;$l<$a+1;$l++){
              $ord[$i][$l]=$ordenar[$j][$l];
            }
          }
          }
        }

$c11=$ord[1][1];
$c12=$ord[1][2];
$c13=$ord[1][3];
$c14=$ord[1][4];
$c15=$ord[1][5];
$c21=$ord[2][1];
$c22=$ord[2][2];
$c23=$ord[2][3];
$c24=$ord[2][4];
$c25=$ord[2][5];
$c31=$ord[3][1];
$c32=$ord[3][2];
$c33=$ord[3][3];
$c34=$ord[3][4];
$c35=$ord[3][5];
$c41=$ord[4][1];
$c42=$ord[4][2];
$c43=$ord[4][3];
$c44=$ord[4][4];
$c45=$ord[4][5];
$c51=$ord[5][1];
$c52=$ord[5][2];
$c53=$ord[5][3];
$c54=$ord[5][4];
$c55=$ord[5][5];

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
if (isset($dec) == FALSE){
$dec=4;
}
$x2=0;
$x3=0;
$x4=0;
$x5=0;
$z=1;
$h=1;
$errorfinal=10;
while($errorfinal>$er){
  if (isset($rdo5)){
    //Orden 5
    $x1 = ((-$c12*$x2)-($c13*$x3)-($c14*$x4)-($c15*$x5)+$rdo1)/$c11;
    $x2 = ((-$c21*$x1)-($c23*$x3)-($c24*$x4)-($c25*$x5)+$rdo2)/$c22;
    $x3 = ((-$c31*$x1)-($c32*$x2)-($c34*$x4)-($c35*$x5)+$rdo3)/$c33;
    $x4 = ((-$c41*$x1)-($c42*$x2)-($c43*$x3)-($c45*$x5)+$rdo4)/$c44;
    $x5 = ((-$c51*$x1)-($c52*$x2)-($c53*$x3)-($c54*$x4)+$rdo5)/$c55;
    $arreglo[$h][$z]=$x1;
    $arreglo[$h][$z+1]=$x2;
    $arreglo[$h][$z+2]=$x3;
    $arreglo[$h][$z+3]=$x4;
    $arreglo[$h][$z+4]=$x5;
    echo " <br>En el paso $h el valor de x1 es: ";
    echo round($x1,$dec);
    echo "<br>";
    echo "En el paso $h el valor de x2 es: ";
    echo round($x2,$dec);
    echo "<br>En el paso $h el valor de x3 es: ";
    echo round($x3,$dec);
    echo "<br>En el paso $h el valor de x4 es: ";
    echo round($x4,$dec);
    echo "<br>En el paso $h el valor de x5 es: ";
    echo round($x5,$dec);
    $error[$h][$z]=($arreglo[$h][$z])-($arreglo[$h-1][$z]);
    $error[$h][$z+1]=($arreglo[$h][$z+1])-($arreglo[$h-1][$z+1]);
    $error[$h][$z+2]=($arreglo[$h][$z+2])-($arreglo[$h-1][$z+2]);
    $error[$h][$z+3]=($arreglo[$h][$z+3])-($arreglo[$h-1][$z+3]);
    $error[$h][$z+4]=($arreglo[$h][$z+4])-($arreglo[$h-1][$z+4]);
    echo "<br><br>";
    $err[$h][$z]=abs($error[$h][$z]);
    $err[$h][$z+1]=abs($error[$h][$z+1]);
    $err[$h][$z+2]=abs($error[$h][$z+2]);
    $err[$h][$z+3]=abs($error[$h][$z+3]);
    $err[$h][$z+4]=abs($error[$h][$z+4]);
    $errorfinal=max($err[$h]);
    echo "<br>El error del paso $h es ";
    echo round($errorfinal,$dec);
    echo "<br><br><br>";
    $h++;
  }
  elseif (isset($rdo4)){
    //Orden 4
    $x1 = ((-$c12*$x2)-($c13*$x3)-($c14*$x4)+$rdo1)/$c11;
    $x2 = ((-$c21*$x1)-($c23*$x3)-($c24*$x4)+$rdo2)/$c22;
    $x3 = ((-$c31*$x1)-($c32*$x2)-($c34*$x4)+$rdo3)/$c33;
    $x4 = ((-$c41*$x1)-($c42*$x2)-($c43*$x3)+$rdo4)/$c44;
    $arreglo[$h][$z]=$x1;
    $arreglo[$h][$z+1]=$x2;
    $arreglo[$h][$z+2]=$x3;
    $arreglo[$h][$z+3]=$x4;
    echo " <br>En el paso $h el valor de x1 es: ";
    echo round($x1,$dec);
    echo "<br>";
    echo "En el paso $h el valor de x2 es: ";
    echo round($x2,$dec);
    echo "<br>En el paso $h el valor de x3 es: ";
    echo round($x3,$dec);
    echo "<br>En el paso $h el valor de x4 es: ";
    echo round($x4,$dec);
    $error[$h][$z]=($arreglo[$h][$z])-($arreglo[$h-1][$z]);
    $error[$h][$z+1]=($arreglo[$h][$z+1])-($arreglo[$h-1][$z+1]);
    $error[$h][$z+2]=($arreglo[$h][$z+2])-($arreglo[$h-1][$z+2]);
    $error[$h][$z+3]=($arreglo[$h][$z+3])-($arreglo[$h-1][$z+3]);
    echo "<br><br>";
    $err[$h][$z]=abs($error[$h][$z]);
    $err[$h][$z+1]=abs($error[$h][$z+1]);
    $err[$h][$z+2]=abs($error[$h][$z+2]);
    $err[$h][$z+3]=abs($error[$h][$z+3]);
    $errorfinal=max($err[$h]);
    echo "<br>El error del paso $h es ";
    echo round($errorfinal,$dec);
    echo "<br><br><br>";
    $h++;
  }
  elseif (isset($rdo3)){
    //Orden 3
    $x1 = ((-$c12*$x2)-($c13*$x3)+$rdo1)/$c11;
    $x2 = ((-$c21*$x1)-($c23*$x3)+$rdo2)/$c22;
    $x3 = ((-$c31*$x1)-($c32*$x2)+$rdo3)/$c33;
    $arreglo[$h][$z]=$x1;
    $arreglo[$h][$z+1]=$x2;
    $arreglo[$h][$z+2]=$x3;
    echo " <br>En el paso $h el valor de x1 es: ";
    echo round($x1,$dec);
    echo "<br>";
    echo "En el paso $h el valor de x2 es: ";
    echo round($x2,$dec);
    echo "<br>En el paso $h el valor de x3 es: ";
    echo round($x3,$dec);
    $error[$h][$z]=($arreglo[$h][$z])-($arreglo[$h-1][$z]);
    $error[$h][$z+1]=($arreglo[$h][$z+1])-($arreglo[$h-1][$z+1]);
    $error[$h][$z+2]=($arreglo[$h][$z+2])-($arreglo[$h-1][$z+2]);
    echo "<br><br>";
    $err[$h][$z]=abs($error[$h][$z]);
    $err[$h][$z+1]=abs($error[$h][$z+1]);
    $err[$h][$z+2]=abs($error[$h][$z+2]);
    $errorfinal=max($err[$h]);
    echo "<br>El error del paso $h es ";
    echo round($errorfinal,$dec);
    echo "<br><br><br>";
    $h++;
  }
  elseif (isset($rdo2)){
    //Orden 2
    $x1 = ((-$c12*$x2)+$rdo1)/$c11;
    $x2 = ((-$c21*$x1)+$rdo2)/$c22;
    $arreglo[$h][$z]=$x1;
    $arreglo[$h][$z+1]=$x2;
    echo " <br>En el paso $h el valor de x1 es: ";
    echo round($x1,$dec);
    echo "<br>";
    echo "En el paso $h el valor de x2 es: ";
    echo round($x2,$dec);
    $error[$h][$z]=($arreglo[$h][$z])-($arreglo[$h-1][$z]);
    $error[$h][$z+1]=($arreglo[$h][$z+1])-($arreglo[$h-1][$z+1]);
    echo "<br><br>";
    $err[$h][$z]=abs($error[$h][$z]);
    $err[$h][$z+1]=abs($error[$h][$z+1]);
    $errorfinal=max($err[$h]);
    echo "<br>El error del paso $h es ";
    echo round($errorfinal,$dec);
    echo "<br><br><br>";
    $h++;

  }
}
?>
</body>
</html>
