<?php
	$in = include("php/conex.php");
	if ($in) {
		$nombre = $_REQUEST['nombre'];
		$descripcion = $_REQUEST['descripcion'];
		$foto = $_FILES["image"]["tmp_name"];
		$fotoContenido = addslashes(file_get_contents($foto));

		$insert = "INSERT INTO servicios (nombre, descripcion, foto, fk_usuario_creador) VALUES ('$nombre', '$descripcion', '$fotoContenido', 1);";
		
		$resultado = mysqli_query($conex, $insert);

		if($resultado){
			header("Location: add_service.html?c=200");
		}else {
			header("Location: add_service.html?c=400");
		}
	}
?>