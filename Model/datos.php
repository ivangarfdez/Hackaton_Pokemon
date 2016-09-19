<?php

function obtenerNoticias(){
	require("database.php");
	$conexion = new mysqli($cfg_servidor,$cfg_usuario,$cfg_password,$cfg_basephp1);
	$sentencia = "SELECT Articulos.id, titulo, descripcion, fecha, imagen, nombre, valoracion  FROM Articulos inner join Categoria on Categoria.id=Articulos.categoria order by fecha desc";
	$resultado=mysqli_query($conexion, $sentencia);
		mysqli_close($conexion);
		return $resultado;
	}
	function obtenerCincoUltimasNoticias(){
		require("database.php");
		$conexion = new mysqli($cfg_servidor,$cfg_usuario,$cfg_password,$cfg_basephp1);
		$sentencia = "SELECT Articulos.id, titulo, descripcion, fecha, imagen , nombre, valoracion  FROM Articulos inner join Categoria on Categoria.id=Articulos.categoria  limit 5";
		$resultado=mysqli_query($conexion, $sentencia);
			mysqli_close($conexion);
			return $resultado;
		}

		function getNoticiaById($id){
			require("database.php");
			$conexion =new mysqli($cfg_servidor,$cfg_usuario,$cfg_password,$cfg_basephp1);
			$sentencia ="SELECT Articulos.id, titulo, descripcion, fecha, imagen , nombre, valoracion  FROM Articulos inner join Categoria on Categoria.id=Articulos.categoria where Articulos.id=$id";
			$resultado=mysqli_query($conexion, $sentencia);
			$row = $resultado->fetch_array(MYSQLI_ASSOC);
				mysqli_close($conexion);
				return $row;
		}

		function getNoticiabyCategoria($categoria){
			require("database.php");
			$conexion =new mysqli($cfg_servidor,$cfg_usuario,$cfg_password,$cfg_basephp1);
			$sentencia ="SELECT Articulos.id, titulo, descripcion, fecha, imagen , nombre, valoracion FROM Articulos inner join Categoria on Categoria.id=Articulos.categoria where nombre='$categoria' limit 2";
			$resultado=mysqli_query($conexion, $sentencia);
				mysqli_close($conexion);
				return $resultado;
		}
?>
