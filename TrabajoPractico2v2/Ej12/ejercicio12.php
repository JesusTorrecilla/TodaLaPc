<html>
<head>
<title>Ejercicio12</title>
</head>
<body>
<form action="ejercicio12b.php" method="GET">
<?php
echo 'DIA ';
echo '<select name="dia"><br>';
for ($i=1;$i<=31;$i++)  {   
echo '<option value="'.$i.'">'.$i.' </option>';
} 
echo '</select><br><br>'; 
echo 'MES ';
echo '<select name="mes"><br>';
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
for ($i=1900;$i<=2100;$i++)  {   
echo '<option value="'.$i.'">'.$i.' </option>';
}       
echo '</select><br><br>'; 
echo '<input type="submit">';
echo '<br><br><br><br>';
?>
</form>
<br>
</body>
</html>
