<html>
<head> 
<title>Ejercicio 2</title>
</head>
<body>
<?php
$content = file_get_contents("texto.txt", "a");
$rows = explode("\n",$content);
$valor="1";
echo "<table border=$valor";
foreach($rows as $row) {
echo "<br>";
$fields = explode(";",$row);
echo "<tr>";
for($i=0;$i<5;$i++){
echo '<td>'.$fields[$i].'</td>';
}
echo "</tr>";                         
} 
echo '</table>';
?>
</body>
</html>	
