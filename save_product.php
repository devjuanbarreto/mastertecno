<?php
	$in = include("php/conex.php");
	if ($in) {
		$nombre = $_REQUEST['nombre'];
		$precio = $_REQUEST['precio'];
		$foto = $_FILES["image"]["tmp_name"];
		$fotoContenido = addslashes(file_get_contents($foto));

		$insert = "INSERT INTO productos (nombre, precio, foto, fk_usuario_creador) VALUES ('$nombre', $precio, '$fotoContenido', 1);";
		
		$resultado = mysqli_query($conex, $insert);

		if($resultado){
			header("Location: add_product.html?c=200");
		}else {
			header("Location: add_product.html?c=400");
		}
	}
?>