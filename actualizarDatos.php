<?php 
	include_once 'conexion.php';
	$id_alu= $_GET['id_alu'];
	$nombre = $_POST['nombre'];
	$apellidos = $_POST['apellidos'];
	$fechaNac = $_POST['fecha'];
	$inicioClases = $_POST['inicioClases'];
	$finClases = $_POST['finClases'];
	$edad = $_POST['edad'];
	$email = $_POST['email'];

	$sentencia = $bd -> prepare("UPDATE alumnos SET nombre = ?,apellidos = ?,fechaNac = ? ,inicioClases = ?,finClases = ? ,edad = ? ,email = ? WHERE id_alu = ?");
	$resultado = $sentencia -> execute([$nombre,$apellidos,$fechaNac,$inicioClases,$finClases,$edad,$email,$id_alu]);

	if ($resultado) {
		# Condiciona el resultado:
		# Si el resultado me devolvio un TRUE quiere decir que la insercion de datos fue hecha correctamente
		header('Location: tabla.php');
	}else {
		# Si resultado fue FALSE la insercion de datos no fue hecha correctamente
		echo "<p>Error</p>";
	}

 ?>