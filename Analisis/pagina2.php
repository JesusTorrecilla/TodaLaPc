<?php
session_start();
?>
<html>
<head>
  <title>Metodo Gauss-Seidel</title>
</head>
<body>
  <h2>Metodo Gauss-Seidel</h2>
  <form action="pagina5.php" method="POST">
    <?php
  $er=$_POST['er'];
  $dec=$_POST['dec'];
  $a=$_POST['orden'];
  for($j=1;$j<$a+1;$j++){
    for($i=1;$i<$a+1;$i++){
      echo "Ingrese el valor del coeficiente C$j$i";
      echo "<input type=\"text\" name=\"c$j$i\">";
      echo "<br>";
    }
  }
  for($h=1;$h<$a+1;$h++){
    echo "Ingrese el resultado de la fila $h";
    echo "<input type=\"text\" name=\"rdo$h\"";
    echo "<br><br>";
  }
  echo "<input type=\"hidden\" value=\"$a\" name=\"orden\">";
  echo "<input type=\"hidden\" value=\"$er\" name=\"er\">";
  echo "<input type=\"hidden\" value=\"$dec\" name=\"dec\">";

     ?>
   <input type="submit" value="Calcular">
 </form>
 </body>
 </html>
