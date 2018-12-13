<html>
<head>
<title>Resultado</title>
</head>
<body>
<h2>Datos metodo GET</h2>
<?php
var_dump($_GET);
?>
<br>
<h2>Datos metodo POST</h2>
<?php
print_r($_POST);
?>
<br>
<?php
$valor= (int) $_POST('texto');
echo "$valor a";
?>

</body>
</html>
