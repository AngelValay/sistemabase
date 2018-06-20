<?php 
	$contrasena = "alu1234";
	$user = "alu";
	$nombre_bd = "reg";
	try {
		$bd = new PDO('mysql:host=mysql.hostinger.mx;dbname='.$nombre_bd,$user,$contrasena);
	} catch (Exception $e) {
		echo "Error en la conexion";
	}
 ?>
