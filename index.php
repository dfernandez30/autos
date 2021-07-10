<?php?>
<!DOCTYPE html>
<html lang="es">
	<head>
		
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
		<link rel="icon" type="image/png" href="coche.png">
		<style>
			.content {
			  max-width: 960px;
			  margin: auto;
			}
			.busqueda {			 
			  margin: auto;
			}
			h2{
				text-align: center;
			}
			.botonera{
				max-width:300px;
				margin: auto;
			}
			.foto{
				max-width:800px;
				margin: auto;
			}
		</style>
		<title>AUTOMÓVILES</title>
	</head>
	<body>
	<div class="content">
		<div>
			<h2>BIENVENIDO</h2>
		</div>
		<hr/>   
			<h4>Por Favor Indique si desea consultar un auto o agregar uno nuevo</h4>
			<br />
			<div class="foto">
			<img src="auto.jpg" alt="auto"  height="400"></div>
			<br />
			<div><p>En esta página podrá elegír entre buscar un auto o agregar un auto nuevo</p></div>        
		</hr>
		<div class="busqueda">
			<h2>ELEGIR ACCIÓN:</h2>
			<div class="botonera">
				<button id="buscarAuto">Buscar Auto</button>
				<button id="newAuto">Agregar Auto</button>
			</div>
			<br />
			</hr>
		</div>
		
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script>
		$( "#buscarAuto" ).click(function() {
		$(location).attr('href','http://localhost/autos/buscar.php');
		});		
	</script>
	<script>
		$( "#newAuto" ).click(function() {
		$(location).attr('href','http://localhost/autos/crear.php');
		});	
	</script>
	</div>
	</body>
</html>
<?php?>