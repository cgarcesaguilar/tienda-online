<?php 

require "conexion.php";

class ModelProductos {

	static public function mdlMostrarCategorias($tabla) {

		$sql = Conexion::Conectar()->prepare("SELECT * FROM $tabla");
		$sql -> execute();
		return $sql->fetchAll();

	}

	static public function mdlMostrarSubCategorias($tabla, $id){

		$sql = Conexion::Conectar()->prepare("SELECT * FROM $tabla WHERE id_categoria = $id");
		$sql -> execute();
		return $sql->fetchAll();
	}



}

?>