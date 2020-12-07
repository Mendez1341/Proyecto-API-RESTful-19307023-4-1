<!doctype html>
<html lang="es">
  <head>
    <title>Ver Datos</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../css/estilos.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
			<div class="container">
				<a class="navbar-brand" href="#">Proyecto API RESTful-19307023-4-1</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				  <span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNav">
				  <ul class="navbar-nav ml-auto">
					   <li class="nav-item">
						  <a class="nav-link" href="../index.html">Home</a>
					  </li>
            <li class="nav-item">
                <a href="../html/Alumnos.html" class="nav-link">Volver</a>
            </li>
				  </ul>
				</div>
			</div>
	  </nav>
  </head>
  <body>
        <h2 class="text-center text-white">Alumnos Registrados</h2>

        <table class="table table-striped text-center table-light">
          <tr class="table-primary">
              <th>Matrícula</th>
              <th>Nombre Completo</th>
              <th>Teléfono</th>
              <th>Email</th>
              <th>Dirección</th>
              <th>Especialidad</th>
              <th>Estado de Nacimiento</th>
              <th>Fecha de Nacimiento</th>
          </tr>
        <?php
            $conex = 'mysql:dbname=apiful; host=localhost';
            $usuario = 'root';
            $contrasenia = '';
        
                    try{
                            $gbd = new PDO($conex, $usuario, $contrasenia);
                            $sql = $gbd->prepare("SELECT * FROM alumnos");
                            $sql->execute();
                            $resultado = $sql->fetchAll();
                    foreach($resultado  as $row){
                        echo "<tr>";
                        echo "<td>$row[matricula]</td>";
                        echo "<td>$row[nombre]</td>";
                        echo "<td>$row[telefono]</td>";
                        echo "<td>$row[email]</td>";
                        echo "<td>$row[direccion]</td>";
                        echo "<td>$row[especialidad]</td>";
                        echo "<td>$row[e_nacimiento]</td>";
                        echo "<td>$row[fecha]</td>";
                        echo "</tr>";
                    }
                }
                catch(PDOException $err){
                    echo 'Error de Conexión: ' . $err->getMessage();
                }
            ?>

      </table>
    <!-- Optional JavaScript -->
    <footer class="footer">
		<div class="container">
			<span class="list-inline text-center">Emanuel Mendez Corona Copyright &copy; 2020</span>
		</div>
	</footer>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>