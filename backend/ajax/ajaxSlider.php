<?php 

require_once "../controllers/slider.controller.php";
require_once "../models/slider.modelo.php";

Class ajaxSlider {

	private $id_slider;
	private $titulo_slider;
	private $descripcion_slider;
	private $vinculo_slider;
	private $imagen_slider;

	public static crearSlider(){
		echo 'aqui crearemos el slider';
	}
	public static editarSlider(){
		echo 'aqui crearemos el slider';
	}
	public static actualizarSlider(){
		echo 'aqui crearemos el slider';
	}
	public static eliminarSlider(){
		echo 'aqui crearemos el slider';
	}

}

$tipoOperacion = $_POST["tipoOperacion"];

if($tipoOperacion == "insertarSlider") {
	$crearNuevoSlider = new ajaxSlider();
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