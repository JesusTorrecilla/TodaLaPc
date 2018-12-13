<?php
session_start();
?>
<html>
<head>
</head>
<body>

<h2>Pagina HOME</h2>
<?php
$mensaje=$_SESSION['usuario'];
if($_SESSION['usuario']){     
echo    '<h1>'.$mensaje.'<h1>';
}
else{   
header("Location: ejercicio7.php");                         
} 
?>
</body>
</html>
