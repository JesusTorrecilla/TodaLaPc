
<html>
    <head>

    </head>
    <body>
        <h2>Grafico</h2>

            <?php
        
 
$aleatorio = mt_rand(1, 100); 
$usados[] = $aleatorio; 

$aleatorio1 = mt_rand(5, 10);

for ($i = 1; $i < $aleatorio1; $i++) { 
     
    $aleatorio = mt_rand(1, 100); 
    while(in_array($aleatorio,$usados)) {  
        $aleatorio = mt_rand(1, 100); 
    } 

    $usados[] = $aleatorio;     
                            } 
   /* for ($x = 0; $x < count($usados); $x++) {
     echo $usados[$x] ." ";
     }*/    
   
   switch(count($usados)) {

  case 0  :
  echo '<img src="imagen.php?u1='.$usados[0].'">';    
      break; /* optional */
  case 1  :
  echo '<img src="imagen.php?u1='.$usados[0].'&u2='.$usados[1].'">';    
      break; /* optional */
  case 3  :
  echo '<img src="imagen.php?u1='.$usados[0].'&u2='.$usados[1].'&u3='.$usados[2].'">';     
      break; /* optional */
  case 4  :
  echo '<img src="imagen.php?u1='.$usados[0].'&u2='.$usados[1].'&u3='.$usados[2].'&u4='.$usados[3].'">'; 
      break; /* optional */
  case 5  :
  echo '<img src="imagen.php?u1='.$usados[0].'&u2='.$usados[1].'&u3='.$usados[2].'&u4='.$usados[3].'&u5='.$usados[4].'">';    
      break; /* optional */
  case 6  :
  echo '<img src="imagen.php?u1='.$usados[0].'&u2='.$usados[1].'&u3='.$usados[2].'&u4='.$usados[3].'&u5='.$usados[4].'&u6='.$usados[5].'">';    
      break; /* optional */
  case 7  :
  echo '<img src="imagen.php?u1='.$usados[0].'&u2='.$usados[1].'&u3='.$usados[2].'&u4='.$usados[3].'&u5='.$usados[4].'&u6='.$usados[5].'&u7='.$usados[6].'">';    
      break; /* optional */
  case 8  :
  echo '<img src="imagen.php?u1='.$usados[0].'&u2='.$usados[1].'&u3='.$usados[2].'&u4='.$usados[3].'&u5='.$usados[4].'&u6='.$usados[5].'&u7='.$usados[6].'&u8='.$usados[7].'">';    
      break; /* optional */
  case 9  :
  echo '<img src="imagen.php?u1='.$usados[0].'&u2='.$usados[1].'&u3='.$usados[2].'&u4='.$usados[3].'&u5='.$usados[4].'&u6='.$usados[5].'&u7='.$usados[6].'&u8='.$usados[7].'&u9='.$usados[8].'">';    
      break; /* optional */
  case 10  :
  echo '<img src="imagen.php?u1='.$usados[0].'&u2='.$usados[1].'&u3='.$usados[2].'&u4='.$usados[3].'&u5='.$usados[4].'&u6='.$usados[5].'&u7='.$usados[6].'&u8='.$usados[7].'&u9='.$usados[8].'&u10='.$usados[9].'">';    
      break; /* optional */
  
   }
                       ?>
        <br><br>
            <h2>Tabla</h2>
         <?php
        
     //for($j=0;$j<24;$j++)   {   
     echo   "<br>";
     $valor=1;   
     echo "<table border=1>";
     echo       "<thead>";
     echo           "<tr>";
     echo '<th>X</th>';
     for ($i = 0+1; $i <= $aleatorio1; $i++) {
     
         echo '<th>'.$i.'</th>';
     }
     echo"           </tr>";
     echo"       </thead>";
     echo"       <tbody>";
     echo"           <tr>";
     echo '<th>Y</th>';
     for ($i = 0; $i < $aleatorio1; $i++) {
     echo '<th>'.$usados[$i].'</th>';
     }
     echo"               </tr>";
     echo"               <tr>";                
     
echo"                </tr>";
echo"            </tbody>";
echo"        </table>";
     //}
     ?> 

    
    </body>

</html>
