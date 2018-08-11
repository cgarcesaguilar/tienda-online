<?php 

class ControllerEnrutamiento {

	public function enrutamiento() {

		$ruta = $_GET["ruta"];

		if ($ruta == "home" ||
			$ruta == "slider" ||
			$ruta == "categorias" ||
			$ruta == "subcategorias" ||
			$ruta == "productos") {

			include "views/modulos/".$ruta.".php";
		
		} else {
			echo '<div class="content content-wrapper">Error 404</div>';
		}


	}
}

?>