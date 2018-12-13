<?php
session_start();
?>
<html>
<head>
</head>
<body>
<h2>Sesiones 2</h2>
<?php
echo "<pre>";
echo "Verificando la seguridad<br>";
if($_SESSION['login']=1){
echo "Estas validado capo<br>";
}
else{
echo "No estas validado, a llorar al campito";
}
echo "</pre>";
?>
//Deberia ser lo del else, no se porque muetra lo del if
</body>
</html>

