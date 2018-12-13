<html>
  <head>
    <title>Metodo Gauss Seidel</title>
  </head>
  <body>
<h2>Metodo Gauss Seidel</h2>
    <?php
    $a=$_POST['orden'];
    $er=$_POST['er'];
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
        echo "<br><br>";
        echo "<pre>";
        var_dump($ord);
        echo "</pre>";
        echo "Despejando nos queda: <br>";
        for($j=1;$j<$a+1;$j++){
          echo "<br>";
          for($i=1;$i<$a+1;$i++){
            echo $ord[$j][$i];
            echo "x$i +";
        }
        }



    /* for($j=1;$j<$a+1;$j++){
      echo max($abs[$j]);
      echo "<br>";
      }
      echo "<br><br>";
      echo "<pre>";
      var_dump($ord);
      echo "</pre>"; */



    /* for($j=1;$j<$a+1;$j++){
      for($i=1;$i<$a+1;$i++){
        if(($ordenar[$j][$j])<($ordenar[$j][$i])){
          for($l=1;$l<$a+1;$l++){
            $ord[$i][$l]=$ordenar[$j][$l];

          }
        }

      }
    }
echo "Despejando nos queda: <br>";
for($j=1;$j<$a+1;$j++){
  for($i=1;$i<$a+1;$i++){
    echo $ord[$j][$i];
    echo "x$i<br>";
}
}
echo "<br><br>";
echo "<pre>";
var_dump($ord);
echo "</pre>";
*/
?>
 </body>
 </html>
