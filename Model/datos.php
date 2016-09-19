<?php


	function obtenerCincoUltimasNoticias(){
		require("database.php");
		$conexion = new mysqli($cfg_servidor,$cfg_usuario,$cfg_password,$cfg_basephp1);
		$sentencia = "SELECT Articulos.id, titulo, descripcion, fecha, imagen , nombre, valoracion  FROM Articulos inner join Categoria on Categoria.id=Articulos.categoria  limit 5";
		$resultado=mysqli_query($conexion, $sentencia);
			mysqli_close($conexion);
			return $resultado;
		}

obtenerCincoUltimasNoticias();
?>
