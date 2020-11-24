<?php
	$in = include("php/conex.php");
	if ($in) {
		$usuario = $_REQUEST['usuario'];
		$contrasena = $_REQUEST['contrasena'];

		$consulta = "SELECT * FROM usuarios WHERE usuario='$usuario' AND contrasena='$contrasena';";
		echo "$consulta<br>";
		$resultado = mysqli_query($conex, $consulta)->fetch_array();

		if($resultado){
			echo "Se emcontro";
			header("HTTP/1.1 302 Moved Temporarilly");
			header("Location: admin.html");
		}else {
			header("HTTP/1.1 302 Moved Temporarilly");
			header("Location: login.html");
		}
	}
?>