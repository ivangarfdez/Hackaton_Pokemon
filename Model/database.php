<?php
	class Database {
		protected $conexion;

		public function conectar() {
			if(!isset($this->conexion)) {
				$this->conexion = (mysqli_connect("54.70.107.235", "root", "", "DAWPOKEMONGO")) or die(mysqli_error());
				mysqli_set_charset($this->conexion, "utf8");
			}
		}

		public function consulta($consulta) {
			return mysqli_query($this->conexion, $consulta);
		}

		public function desconectar() {
			mysqli_close($this->conexion);
		}

		function numeroFilas($result){	
			return mysqli_num_rows($result);

		}

		function datosArray($result){
			return mysqli_fetch_object($result);
			
		}
	}
?>