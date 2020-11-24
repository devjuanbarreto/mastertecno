<?php
function consultar() {
  $inc = include("conex.php");
   if($inc){
   $consulta = "SELECT * FROM resultados";
   return $resultado = mysqli_query($conex, $consulta);
 }
}
?>