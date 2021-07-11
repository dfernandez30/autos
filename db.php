<?php 
	include('secret.php');
	$mysqli = new mysqli($servername, $username, $password,$db);
	if ($mysqli -> connect_errno) {
		echo "Error en la conexión a MySQL: " . $mysqli -> connect_error;
		exit();
	}
	$mysqli->set_charset("utf8");
?>
