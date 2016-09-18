<?php

	include("conexion.php");

	$articulos = array();
	$sentencia = "SELECT id, titulo, descripcion, fecha, imagen FROM Articulos";
	$conexion = new mysqli($cfg_servidor,$cfg_usuario,$cfg_password,$cfg_basephp1);
	$resultado=mysqli_query($conexion, $sentencia);

	while($articulo=mysqli_fetch_object($resultado)){

		echo "El id es: " . $articulo->id . "TITULO: " . $articulo->titulo;

	}
	mysqli_close($conexion);
	
?>