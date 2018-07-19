
var item = 0
var itemLi = $("#paginacion li")
var pausa = false
$("#paginacion li").click(function () {

	item = $(this).attr("item") - 1

	animarSlider(item)

})

function animarSlider(item) {
	$("#slider ul").animate({
		"left" : item * -100 + "%"

	}, 1000)

	$(itemLi).css("opacity", .4)
	$(itemLi[item]).css("opacity", .9)
	pausa = true
}

function play() {
	if(item == 3) {
		item = 0
	} else {
		item++
	}
	animarSlider(item)
}
$("#right").click(function() { 	play() })
$("#left").click(function() {
	if(item == 0) {
		item = 3
	} else {
		item--
	}
	animarSlider(item)
})
setInterval(function() {

	if (pausa) {
		pausa = false
	} else {
		play()	
	}

}, 3000)