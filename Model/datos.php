<?php

include_once('database.php');

class Receta extends Database {


	//Devuelve un array con los datos
	function articulosArray() {
		$this->conectar();
		$articulos = array();
		$sql = "SELECT id, titulo, descripcion, fecha, imagen FROM Articulos";
		$resultado = $this->consulta($sql);
		if($this->numeroFilas($resultado) > 0) {		
			while ($currentArticulos = $this->datosArray($resultado)) {
				$id[] = $currentArticulos->id;
				$titulo[] = $currentArticulos->titulo;
				$descripcion[] = $currentArticulos->descripcion;
				$fecha[] = $currentArticulos->fecha;
				$imagen[] = $currentArticulos->imagen;
			}
			$articulos = array("id" => $id, "titulo" => $titulo, "descripcion" => $descripcion, "fecha" => $fecha, "imagen" => $imagen);
			$this->desconectar();
			return $articulos;
		}
		else {
			$this->desconectar();
			return 'No hay articulos!';
		}	

	}

}
?>