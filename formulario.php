<html>
<head>
<head>
<body>
<h2>El Link</h2>
<a href="resultadoGET.php?texto=fernando&password=1234">Link a la pagina</a><br>

<h2>El formulario GET</h2>
<form action="recibirdatos.php" method="GET">
<label for="texto">Cuadro de texto: </label>
<input type="text" id="texto" name="texto"><br>
<label for="password">Cuadro de contrasenha</label>
<input type="password" id="pasword" name="password"><br>
<input type="submit" value="Enviar datos">
</form>


<h2>El formulario POST</h2>
<form action="recibirdatos.php" method="POST">
<label for="texto">Texto: </label>
<input type="text" id="texto" name="texto"><br>
<label for="password">Contrasenha</label>
<input type="password" id="password" name="password"><br>
<input type="submit">
</form>
</body>
</html>
