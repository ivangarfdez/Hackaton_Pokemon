<?php

	include("database.php");
	$conexion = new mysqli($cfg_servidor,$cfg_usuario,$cfg_password,$cfg_basephp1);


	function obtenerCincoUltimasNoticias($conexion){
		$articulos = array();
		$sentencia = "SELECT titulo, descripcion, fecha, imagen , nombre as categoria,  FROM Articulos litmit 5";
		$resultado=mysqli_query($conexion, $sentencia);
		var_dump($resultado);
		while($articulo=mysqli_fetch_object($resultado)){

		}
		mysqli_close($conexion);
}


obtenerCincoUltimasNoticias($conexion);
?>
