<html>
<head>
<title>Recepcion</title>
</head>
<body>
<?php
$valor=$_GET["dato"];
$valor1=$_GET["dato2"];
if ($valor1 == 2){
echo "Dato 1: {$_GET['dato']} <br>";
echo "Dato 2: {$_GET['dato2']} <br>";
echo "Dato 3: {$_GET['dato3']}";
}
elseif ($valor == 1){
echo "Dato 1: {$_GET['dato']} <br>";
}
else{
echo "No se pasaron datos";
}
?>
</body>
</html>
