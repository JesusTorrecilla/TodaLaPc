<html>
<head> 
<title> Recepcion 2 </title>
</head>
<body>
<br>
<?php
function mescastellano ($fecha) {
$fecha = substr($fecha, 0, 10);
$mes = date('F', strtotime($fecha));
$meses_ES = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
$meses_EN = array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
$nombreMes = str_replace($meses_EN, $meses_ES, $mes);
return $nombreMes;
}
$time = time();
$dia=date("j",$time);
$mes=date("F",$time);
$ano=date("Y",$time); 
echo '<h1>Hoy es el '.$dia.' de '.mescastellano($mes).' de '.$ano.'<h1>'
?>
</body>
</html>	
