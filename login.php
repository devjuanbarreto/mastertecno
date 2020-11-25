<?php
	$in = include("php/conex.php");
	if ($in) {
		$usuario = $_REQUEST['usuario'];
		$contrasena = $_REQUEST['contrasena'];

		$consulta = "SELECT * FROM usuarios WHERE usuario='$usuario' AND contrasena='$contrasena';";
		echo "$consulta<br>";
		$resultado = mysqli_query($conex, $consulta)->fetch_array();

		if($resultado){
			header("Location: admin.html");
		}else {
			header("Location: login.html?c=400");
		}
	}
?>