<html>
<head> 
<title> Recepcion </title>
</head>
<body>
<?php
function mescastellano ($fecha) {
$fecha = substr($fecha, 0, 10);
$mes = date('F', strtotime($fecha));
$meses_ES = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
$meses_EN = array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
$nombreMes = str_replace($meses_EN, $meses_ES, $mes);
return $nombreMes;
}
?>
<form action="ejercicio12c.php" method="GET"> 
<?php
$time = time();
$dia=date("j",$time);
$mes=date("F",$time);
$ano=date("Y",$time); 
mescastellano($mes);
echo 'DIA ';
echo '<select name="dia"><br>';
echo '<option selected >'.$dia.'</option>';
for ($i=1;$i<=31;$i++)  {   
echo '<option value="'.$i.'">'.$i.' </option>';
}       
echo '</select><br><br>'; 
echo 'MES ';
echo '<select name="mes"><br>';
echo '<option selected >'.mescastellano($mes).'</option>';
echo '<option value="1">Enero</option>';
echo '<option value="2">Febrero</option>';
echo '<option value="3">Marzo</option>';
echo '<option value="4">Abril</option>';
echo '<option value="5">Mayo</option>';
echo '<option value="6">Junio</option>';
echo '<option value="7">Julio</option>';
echo '<option value="8">Agosto</option>';
echo '<option value="9">Septiempre</option>';
echo '<option value="10">Octubre</option>';
echo '<option value="11">Noviembre</option>';
echo '<option value="12">Diciembre</option>';
echo '</select><br><br>';
$a = str_replace ("Ñ", "&Ntilde;" ,"AÑO");//para que se pueda mostrar la Ñ
echo $a."   ";
echo '<select name="ano"><br>';
echo '<option selected >'.$ano.'</option>';
for ($i=1900;$i<=2100;$i++)  {   
//if($i == $ano)   {   
// echo $ano; 
//}
echo '<option value="'.$i.'">'.$i.' </option>';
}       
echo '</select><br><br>'; 
echo '<input type="submit">';
echo '<br><br><br><br>';
?>
</form>
</body>
</html>	
