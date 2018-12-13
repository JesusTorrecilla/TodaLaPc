<html>
<head>
<title></title>
<body>
<?php
$valor=$_POST["cantidad"];
for($x=1;$x<$valor;$x++){
if($_POST["check$x"] == on){
echo "Se selecciono el producto numero $x con una cantidad de {$_POST["dato$x"]} elementos<br> ";
}

}
?>
</body>
</html>
