$(document).ready(function(){


	$("#formu-nuevo-slider").submit(function (e) {
		e.preventDefault()

		var datos = new FormData($(this)[0])

		$.ajax({
			url: 'ajax/ajaxSlider.php',
			type: 'POST',
			data: datos,
			processData: false,
			contentType: false,
			success: function(respuesta) {
				if (respuesta == "ok") {
					swal({
					  type: 'success',
					  title: 'Excelente',
					  text: 'Slider creado con éxito'
					}).then((result) => {
					  if (result.value) {
					    window.location = "slider"
					  }
					})
				}
			}

		})

	})

	$("body .table-dark").on("click", ".btnEditarSlider", function(){
		var idSlider = $(this).attr("idSlider")
		var datos = new FormData()
		datos.append("id_slider", idSlider)
		datos.append("tipoOperacion", "editarSlider")

		$.ajax({
			url: 'ajax/ajaxSlider.php',
			type: 'POST',
			data: datos,
			processData: false,
			contentType: false,
			success: function(respuesta) {
				console.log(respuesta)
			}

		})

	})

	$("body .table-dark").on("click", ".btnEliminarSlider", function(){
		var idSlider = $(this).attr("idSlider")
		var datos = new FormData()
		datos.append("id_slider", idSlider)
		datos.append("tipoOperacion", "eliminarSlider")

		$.ajax({
			url: 'ajax/ajaxSlider.php',
			type: 'POST',
			data: datos,
			processData: false,
			contentType: false,
			success: function(respuesta) {
				console.log(respuesta)
			}

		})

	})

	

})