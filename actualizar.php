<!DOCTYPE html>
<html>
<head>
	<title>Alumnos</title>\
	<?php 
		include_once 'conexion.php';
		$id_alu = $_GET['id_alu'];
		$sentencia = "SELECT * FROM alumnos WHERE id_alu =".$id_alu;?>
</head>
<body>
	<form method="post" action="<?php echo 'actualizarDatos.php?id_alu='.$id_alu;?>">
	
	<?php
		foreach ($bd ->query($sentencia) as $row ) {?>
			<label>Nombre:</label>
			<input type="text" name="nombre" value="<?php echo $row['nombre'];?>"><br>
			<label>Apellidos:</label>
			<input type="text" name="apellidos" value="<?php echo $row['apellidos'];?>"><br>
			<label>Fecha de nacimiento:</label>
			<input type="date" name="fecha" value="<?php echo $row['fechaNac'];?>"><br>
			<label>Inicio de clases:</label>
			<input type="date" name="inicioClases" value="<?php echo $row['inicioClases'];?>"><br>
			<label>Fin de clases:</label>
			<input type="date" name="finClases" value="<?php echo $row['finClases'];?>"><br>
			<label>Anos de edad:</label>
			<input type="number" name="edad" value="<?php echo $row['edad'];?>"><br>
			<label>Correo electronico:</label>
			<input type="email" name="email" value="<?php echo $row['email'];?>"><br>
			<button type="submit" value="Actualizar">Actualizar</button>
		</form>
	<?php		 
		}
 	?>
</body>
</html>
