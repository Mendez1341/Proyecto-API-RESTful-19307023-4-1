<?php 
	// conectar a una base de datos de MySQL invocando al controlador*/

	$conex = 'mysql:dbname=apiful; host=127.0.0.1:8080';
	$usuario = 'root';
	$contrasenia = 'root';

	try{
		$gbd = new PDO($conex, $usuario, $contrasenia);

		echo  "<h1 class=text-center>¡Se han almacenado los datos correctamente</h1>";
		$clave = $_POST['clave'];
		$nombre = $_POST['nombre'];
		$telefono = $_POST['telefono'];
		$email = $_POST['email'];
		$direccion = $_POST['direccion'];
		$puesto = $_POST['puesto'];
		$e_nacimiento = $_POST['lugar'];
		$fecha = $_POST['fecha'];
		$serie = $_POST['vehiculo_serie'];
		$marca = $_POST['vehiculo_marca'];
		$color = $_POST['vehiculo_color'];
		$insercion = $gbd->prepare("INSERT INTO empleados(clave,nombre,telefono,email,direccion,puesto,e_nacimiento,fecha,marca,serie,color) VALUES ('$clave','$nombre','$telefono','$email','$direccion','$puesto','$e_nacimiento','$fecha','$marca','$serie','$color') ");
		$insercion->execute();
	}
	catch(PDOException $err){
		echo 'Error de Conexión: ' . $err->getMessage();
	}
?>
<!doctype html>
<html lang="es">
  <head>
	<title>Datos aLmacenados</title>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="../css/estilo.css">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  </head>
  <body>
	  <div class="container-fluid">
		<div class="row">
		<div class="col-lg-12 col-lg-offset-2 text-center">  
			<a href="../html/Empleados.html" type="button" class="btn btn-outline-danger">Regresar</a>
			<a href="ver3.php" type="button" class="btn btn-outline-warning">Ver tabla</a>
		</div>
	</div>
	</div>
	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>