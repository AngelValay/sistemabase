<!DOCTYPE html>
<html>
<head>
	<title>Alumnos</title>
</head>
<body>
	<form method="post" action="registro.php">
		<label>Nombre:</label>
		<input type="text" name="nombre"><br>
		<label>Apellidos:</label>
		<input type="text" name="apellidos"><br>
		<label>Fecha de nacimiento:</label>
		<input type="date" name="fecha"><br>
		<label>Inicio de clases:</label>
		<input type="date" name="inicioClases"><br>
		<label>Fin de clases:</label>
		<input type="date" name="finClases"><br>
		<label>Anos de edad:</label>
		<input type="number" name="edad"><br>
		<label>Correo electronico:</label>
		<input type="email" name="email"><br>
		<button type="submit" value="Registro">Registrar</button>
	</form>
</body>
</html>