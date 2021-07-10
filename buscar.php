<html>
    <head lang="es">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" type="text/javascript"></script>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <style type="text/css">
            tr.header
            {
                font-weight:bold;
				background-color: #d4cac9;
            }
            tr.alt
            {
                background-color: #777777;
            }
			h2{
				text-align: center;
			}
			.content {
			  max-width: 960px;
			  margin: auto;
			}
			.tabla{
				max-width:300px;
				margin: auto;
			}
        </style>
		<link rel="icon" type="image/png" href="coche.png">
        <title>AUTOMÓVILES ENCONTRADOS</title>
    </head>
    <body>	
	<div class="content">
	<a href="http://localhost/autos/">Inicio</a>
		<div>
			<h2>BUSCADOR DE AUTOS</h2>
		</div>
		<hr/>   
			<h4>Estos son los autos encontrados</h4>
			<div><p>En la siguiente tabla podrá ver los autos en nuestra base de datos</p></div>        
		</hr>
        <?php

			include('db.php');
			$sql = "SELECT * FROM automovil INNER JOIN color ON automovil.idColor = color.idColor INNER JOIN marca ON automovil.idMarca = marca.idMarca";
			$resultado = $mysqli->query($sql);

        ?>
		<div class="tabla">
        <table class="table">
            <tr class="header">
                <td>Patente</td>
                <td>Marca</td>
                <td>Color</td>
				<td>Año</td>
            </tr>
            <?php
               while ($row = $resultado -> fetch_array(MYSQLI_ASSOC)) {
                   echo "<tr>";
                   echo "<td>".$row["patente"]."</td>";
                   echo "<td>".$row["nombre_marca"]."</td>";
                   echo "<td>".$row["nombre_color"]."</td>";
				   echo "<td>".$row["annio"]."</td>";
                   echo "</tr>";
               }
				mysqli_free_result($resultado);
				mysqli_close($mysqli);
            ?>
        </table>
		</div>
	</div>
    </body>
</html>
