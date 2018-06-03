<?php 

	include_once 'Conexion.php';
	$conexion= new Conexion();

	if(isset($_POST['Guardar'])){

		$consulta="insert into alumnotabla (nombre,correo,edad) values(
			'{$_POST['nombre']}',
			'{$_POST['correo']}',
			'{$_POST['edad']}'   )";
		$conexion->consultaSimple($consulta);	
	}

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Sistema php</title>
 </head>
 <body>
 <center>
 <form method="post">
 	<p><label>INGRESA TU NOMBRE</label>
 	<p><input type="text" name="nombre">
 	<p><label>INGRESA TU CORREO </label>
 	<p><input type="email" name="correo">
 	<p><label>INGRESA TU EDAD </label>
 	<p><input type="number" name="edad">
 	<p><input type="submit" name="Guardar">	
 </form>
 </center>
 </body>
 </html>