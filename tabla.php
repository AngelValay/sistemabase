<!DOCTYPE html>
<html>
<head>
	<title>Alumnos</title>
	<style>
	table, th, td {
	    border: 1px solid black;
	}
	th, td {
	    padding: 5px;
	    text-align: left;
	}
	</style>
</head>
<body>
	<a href="index.php">Nuevo alumno</a><br><br>
	<table>
		<thead>
			<tr>
				<th>#</th>
				<th>Nombre</th>
				<th>Apellidos</th>
				<th>Fecha de nac</th>
				<th>Inicio</th>
				<th>Fin</th>
				<th>Edad</th>
				<th>Email</th>
				<th>Actualizar</th>
				<th>Eliminar</th>
			</tr>
		</thead>
		<tbody>
			<?php 
				include_once 'conexion.php';
				$sentencia = "SELECT * FROM alumnos ORDER BY id_alu ASC";
				foreach ($bd->query($sentencia) as $row) {
					# Este ciclo barrera toda la tabla de la bd para mostrar los datos
					# Mostrara los datos registrados en la bd que se registraron
					echo "<tr><td>".$row['id_alu']."</td>";
					echo "<td>".$row['nombre']."</td>";
					echo "<td>".$row['apellidos']."</td>";
					echo "<td>".$row['fechaNac']."</td>";
					echo "<td>".$row['inicioClases']."</td>";
					echo "<td>".$row['finClases']."</td>";
					echo "<td>".$row['edad']."</td>";
					echo "<td>".$row['email']."</td>";
					echo "<td><a href='actualizar.php?id_alu=".$row['id_alu']."'>Actualizar</a></td>";
					echo "<td><a href='eliminar.php?id_alu=".$row['id_alu']."'>Eliminar</a></td></tr>";
				}
			 ?>
		</tbody>

	</table>
</body>
</html>