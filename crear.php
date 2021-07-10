<html>
    <head lang="es">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <style>
			.content {
			  max-width: 960px;
			  margin: auto;
			}
			h2{
				text-align: center;
			}
			.forma{
				max-width:500px;
				margin: auto;
			}
		</style>
		<link rel="icon" type="image/png" href="coche.png">
        <title>AUTOMÓVILES NUEVOS</title>
    </head>
    <body>	
	
	<div class="content">
	<a href="http://localhost/autos/">Inicio</a>
		<div>
			<h2>CREADOR DE AUTOS</h2>
		</div>
		<hr/>   
			<h4>Ingrese auto a crear</h4>
			<div><p>En la siguiente página podrá ingresar nuevos autos a la base de datos</p></div>        
		</hr>
		<div class="forma">
        <form method="post" id="autoform">
		  <label for="patente">Patente:</label>
		  <input type="text" id="patente" name="patente">
		  <button id="btnCrear">Crear Auto</button>
		</form>
		</div>
		<br>

		<label for="annio">Elegir Año:</label>
		<select id="annio" name="listaannio" form="autoform">
			<option value="0" disabled selected>Seleccione Año</option>
			<option value="2021">2021</option>
			<option value="2020">2020</option>
			<option value="2019">2019</option>
			<option value="2018">2018</option>
			<option value="2017">2017</option>
			<option value="2016">2016</option>
			<option value="2015">2015</option>
			<option value="2014">2014</option>
			<option value="2013">2013</option>
			<option value="2012">2012</option>
			<option value="2011">2011</option>
			<option value="2010">2010</option>
			<option value="2009">2009</option>
			<option value="2008">2008</option>
			<option value="2007">2007</option>
			<option value="2006">2006</option>
			<option value="2005">2005</option>
			<option value="2004">2004</option>
			<option value="2003">2003</option>
			<option value="2002">2002</option>
			<option value="2001">2001</option>
			<option value="2000">2000</option>
			<option value="1999">1999</option>
			<option value="1998">1998</option>
			<option value="1997">1997</option>
			<option value="1996">1996</option>
			<option value="1995">1995</option>
			<option value="1994">1994</option>
			<option value="1993">1993</option>
			<option value="1992">1992</option>
			<option value="1991">1991</option>
			<option value="1990">1990</option>
			<option value="1989">1989</option>
			<option value="1988">1988</option>
			<option value="1987">1987</option>
			<option value="1986">1986</option>
			<option value="1985">1985</option>
			<option value="1984">1984</option>
			<option value="1983">1983</option>
			<option value="1982">1982</option>
			<option value="1981">1981</option>
			<option value="1980">1980</option>
			<option value="1979">1979</option>
			<option value="1978">1978</option>
			<option value="1977">1977</option>
			<option value="1976">1976</option>
			<option value="1975">1975</option>
			<option value="1974">1974</option>
			<option value="1973">1973</option>
			<option value="1972">1972</option>
			<option value="1971">1971</option>
			<option value="1970">1970</option>
			<option value="1969">1969</option>
			<option value="1968">1968</option>
			<option value="1967">1967</option>
			<option value="1966">1966</option>
			<option value="1965">1965</option>
			<option value="1964">1964</option>
			<option value="1963">1963</option>
			<option value="1962">1962</option>
			<option value="1961">1961</option>
			<option value="1960">1960</option>
			<option value="1959">1959</option>
			<option value="1958">1958</option>
			<option value="1957">1957</option>
			<option value="1956">1956</option>
			<option value="1955">1955</option>
			<option value="1954">1954</option>
			<option value="1953">1953</option>
			<option value="1952">1952</option>
			<option value="1951">1951</option>
			<option value="1950">1950</option>
			<option value="1949">1949</option>
			<option value="1948">1948</option>
			<option value="1947">1947</option>
			<option value="1946">1946</option>
			<option value="1945">1945</option>
			<option value="1944">1944</option>
			<option value="1943">1943</option>
			<option value="1942">1942</option>
			<option value="1941">1941</option>
			<option value="1940">1940</option>
			<option value="1939">1939</option>
			<option value="1938">1938</option>
			<option value="1937">1937</option>
			<option value="1936">1936</option>
			<option value="1935">1935</option>
			<option value="1934">1934</option>
			<option value="1933">1933</option>
			<option value="1932">1932</option>
			<option value="1931">1931</option>
			<option value="1930">1930</option>
			<option value="1929">1929</option>
			<option value="1928">1928</option>
			<option value="1927">1927</option>
			<option value="1926">1926</option>
			<option value="1925">1925</option>
			<option value="1924">1924</option>
			<option value="1923">1923</option>
			<option value="1922">1922</option>
			<option value="1921">1921</option>
			<option value="1920">1920</option>
			<option value="1919">1919</option>
			<option value="1918">1918</option>
			<option value="1917">1917</option>
			<option value="1916">1916</option>
			<option value="1915">1915</option>
			<option value="1914">1914</option>
			<option value="1913">1913</option>
			<option value="1912">1912</option>
			<option value="1911">1911</option>
			<option value="1910">1910</option>
			<option value="1909">1909</option>
			<option value="1908">1908</option>
			<option value="1907">1907</option>
			<option value="1906">1906</option>
			<option value="1905">1905</option>
			<option value="1904">1904</option>
			<option value="1903">1903</option>
			<option value="1902">1902</option>
		</select>
		<label for="marca">Elegir Marca:</label>
		<select id="marca" name="listamarca" form="autoform">
		<option value="0" disabled selected>Seleccione Marca</option>
			<?php
				include('db.php');
				$sql = "SELECT * FROM marca";
				$resultado = $mysqli->query($sql);
				
               while ($row = $resultado -> fetch_array(MYSQLI_ASSOC)) {
				   echo '<option value="'.htmlspecialchars($row['idMarca']).'">'.htmlspecialchars($row['nombre_marca']).'</option>';
               }
				mysqli_free_result($resultado);
				mysqli_close($mysqli);
            ?>
		</select>
		<label for="color">Elegir Color:</label>
		<select id="color" name="listacolor" form="autoform">
			<option value="0" disabled selected>Seleccione Color</option>
			<?php
				include('db.php');
				$sql = "SELECT * FROM color";
				$resultado = $mysqli->query($sql);
				
               while ($row = $resultado -> fetch_array(MYSQLI_ASSOC)) {
				   echo '<option value="'.htmlspecialchars($row['idColor']).'">'.htmlspecialchars($row['nombre_color']).'</option>';
               }
				mysqli_free_result($resultado);
				mysqli_close($mysqli);
            ?>
		</select>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script>
			$("#btnCrear").on("click", newAuto);
			
			function newAuto() {
			
				var patente2 = $('#patente').val();
				var annio2 = $('#annio').val();
				var idMarca2 = $('#marca').val();
				var idColor2 = $('#color').val();
				var anniot = document.getElementById("annio");
				var txtAnnio = anniot.options[anniot.selectedIndex].text;	
				var marcat = document.getElementById("marca");
				var txtMarca = marcat.options[marcat.selectedIndex].text;	
				var colort = document.getElementById("color");
				var txtColor = colort.options[colort.selectedIndex].text;

				
				if (txtAnnio != "Seleccione Año" && txtMarca != "Seleccione Marca" && txtColor != "Seleccione Color" && patente2.length == 6) {	
					
					$.ajax({
						url: "http://localhost/autos/ingresar.php",
						type: "POST",
						data: {patente: patente2,
							   idMarca: idMarca2,
							   idColor: idColor2,
							   annio: annio2 },
						cache: false
					})
					.done(function(data) {
						alert(data); 												
					})
					.fail(function(data) {
						alert("ErrorFatal de ajax");
					});
				}
				else if(txtAnnio == "Seleccione Año" || txtMarca == "Seleccione Marca" || txtColor == "Seleccione Color" || patente2.length != 6){					
					alert("Datos faltantes, por favor seleccione todos los datos");
				}
			}
		</script>
	</div>	
    </body>
</html>