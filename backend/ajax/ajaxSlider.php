<?php 

require_once "../controllers/slider.controller.php";
require_once "../models/slider.modelo.php";

Class ajaxSlider {

	public $id_slider;
	public $titulo_slider;
	public $descripcion_slider;
	public $vinculo_slider;
	public $imagen_slider;

	public function crearSlider(){
		$datos = array("titulo"=>$this->titulo_slider,
						"descripcion"=>$this->descripcion_slider,
						"vinculo"=>$this->vinculo_slider,
						"imagen"=>$this->imagen_slider);

		$respuesta = ControllerSlider::ctrCrearSlider($datos);

		echo $respuesta;
	}
	public function editarSlider(){
		echo 'aqui crearemos el slider';
	}
	public function actualizarSlider(){
		echo 'aqui crearemos el slider';
	}
	public function eliminarSlider(){
		echo 'aqui crearemos el slider';
	}

}

$tipoOperacion = $_POST["tipoOperacion"];

if($tipoOperacion == "insertarSlider") {
	$crearNuevoSlider = new ajaxSlider();
	$crearNuevoSlider -> titulo_slider = $_POST["tituloSlider"];
	$crearNuevoSlider -> descripcion_slider = $_POST["descripcionSlider"];
	$crearNuevoSlider -> vinculo_slider = $_POST["urlSlider"];
	$crearNuevoSlider -> imagen_slider = $_FILES["imagenSlider"];
	$crearNuevoSlider ->crearSlider();
}

if ($tipoOperacion == "editarSlider") {
	$editarSlider = new ajaxSlider();
	$editarSlider -> editarSlider();
}
if ($tipoOperacion == "actualizarSlider") {
	$actualizarSlider = new ajaxSlider();
	$actualizarSlider -> actualizarSlider();
}
if ($tipoOperacion == "eliminarSlider") {
	$eliminarSlider = new ajaxSlider();
	$eliminarSlider -> eliminarSlider();
}

?>