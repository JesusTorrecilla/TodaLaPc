<?php
session_start();
phpinfo();
?>
<html>
<head>
</head>
<body>
<h2>Sesiones</h2>
<?php
echo "<pre>";
var_dump($_SESSION);
echo "</pre>";
?>
</body>
</html>
