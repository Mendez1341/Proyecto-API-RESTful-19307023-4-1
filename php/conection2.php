<?php 
	// conectar a una base de datos de MySQL invocando al controlador*/

	$conex = 'mysql:dbname=apiful; host=localhost';
	$usuario = 'root';
	$contrasenia = '';

	try{
		$gbd = new PDO($conex);
		echo  "<h1 class=text-center>¡Se han almacenado los datos correctamente</h1>";
		$matricula = $_POST['matricula'];
		$nombre = $_POST['nombre'];
		$telefono = $_POST['telefono'];
		$email = $_POST['email'];
		$direccion = $_POST['direccion'];
		$especialidad = $_POST['especialidad'];
		$e_nacimiento = $_POST['lugar'];
		$fecha = $_POST['fecha'];
		$insercion = $gbd->prepare("INSERT INTO alumnos(matricula,nombre,telefono,email,direccion,especialidad,e_nacimiento,fecha) VALUES ('$matricula','$nombre','$telefono','$email','$direccion','$especialidad','$e_nacimiento','$fecha') ");
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
			<a href="../html/Alumnos.html" type="button" class="btn btn-outline-danger">Regresar</a>
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