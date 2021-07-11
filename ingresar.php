<?php 
	include('secret.php');
	$conn = mysqli_connect($servername, $username, $password,$db);
	$patente=$_POST['patente'];
	$idMarca=$_POST['idMarca'];
	$idColor=$_POST['idColor'];
	$annio=$_POST['annio'];
	$sql = "INSERT INTO automovil (patente,idMarca,idColor,annio) VALUES ('$patente','$idMarca','$idColor','$annio')";
	if (mysqli_real_query($conn, $sql) ) {
		echo "Auto Ingresado";
	} else {
		die ("Patente ya Existe");
	}
	mysqli_close($conn);
?>
