<?php 
	$mysqli = new mysqli('127.0.0.1', 'root', 'secret', 'evunidad2');
	if ($mysqli -> connect_errno) {
		echo "Error en la conexión a MySQL: " . $mysqli -> connect_error;
		exit();
	}
	$mysqli->set_charset("utf8");
?>