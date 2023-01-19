$('.datepicker').each(function(){
	var picker = new Pikaday({
		field: this
	});
});

$(document).on('click', '.form-check-input', function (){
	let currentValue = $(this).val();
	if (currentValue==1){
		$(this).val(0);
	}
	else{
		$(this).val(1)
	}
});