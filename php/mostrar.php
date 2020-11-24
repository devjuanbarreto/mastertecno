<?php

	$inc=include ("conex.php");
	if($inc){
		$consulta = "SELECT * FROM resultados";
		$resultado = mysqli_query($conex, $consulta);
		if($resultado){
			while($row = $resultado->fetch_array()){
				$clientes_satisfechos = $row['clientes_satisfechos'];
				$notebooks_reparados = $row['notebooks_reparados'];
				$pc_escritorios_rep = $row['pc_escritorios_rep'];
				$so_instalados = $row['so_instalados'];
				?>

					<div>
						<h2><?php  echo $clientes_satisfechos   ?></h2>
						<h2><?php  echo $notebooks_reparados   ?></h2>
						<h2><?php  echo $pc_escritorios_rep   ?></h2>
						<h2><?php  echo $so_instalados   ?></h2>
					</div>

				<?php
			}
		}
	}

?>