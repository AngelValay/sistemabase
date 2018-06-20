<?php 
	include_once 'conexion.php';
	$id_alu = $_GET['id_alu'];
	$sentencia = $bd -> prepare("DELETE FROM alumnos WHERE id_alu = ?");
	$resultado = $sentencia -> execute([$id_alu]);
	if ($resultado) {
		# si se elimino correctamente
		header('Location: tabla.php');
	}
 ?>