<?php 
	$contrasena = "";
	$user = "root";
	$nombre_bd = "registros";
	try {
		$bd = new PDO('mysql:host=localhost;dbname='.$nombre_bd,$user,$contrasena);
	} catch (Exception $e) {
		echo "Error en la conexion";
	}
 ?>