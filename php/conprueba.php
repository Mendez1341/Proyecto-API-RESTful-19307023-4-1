<?php 
	// conectar a una base de datos de MySQL invocando al controlador*/

	$conex = mysqli_connect('localhost', 'root', '', 'apiful') or die (mysql_error($mysqli));

	insertar($conex);

	function insertar($conex){
		$nombre = $_POST['nombre'];
		$email = $_POST['email'];
		$telefono = $_POST['telefono'];
		$direccion = $_POST['direccion'];
		$c_p = $_POST['postal'];
		$fecha = $_POST['fecha'];
		$e_nacimiento = $_POST['lugar'];

		$consulta = "INSERT INTO profesores(nombre,telefono,email,direccion,c_p,e_nacimiento,fecha) VALUES ('$nombre', '$email', '$telefono', '$direccion', '$c_p', '$fecha', '$e_nacimiento')";
		mysqli_query($conex, $consulta);
		mysqli_close($conex);
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