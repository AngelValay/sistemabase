<?php 
	$contrasena = "alu1234";
	$user = "u332418796_alu";
	$nombre_bd = "u332418796_reg";
	try {
		$bd = new PDO('mysql:host=mysql.hostinger.mx;dbname='.$nombre_bd,$user,$contrasena);
	} catch (Exception $e) {
		echo "Error en la conexion";
	}
 ?>
