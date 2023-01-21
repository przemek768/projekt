
$('.datepicker').each(function(){
	var picker = new Pikaday({
		field: this
	});
});
$(document).ready(function(){
	let clients_swiper = new Swiper('.swiper', {
		direction: "horizontal",
		slidesPerView: 1,
		loop: true,
		navigation: {
			nextEl: ".swiper-button-next",
			prevEl: ".swiper-button-prev",
		},
	});
});