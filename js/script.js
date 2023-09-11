//Scroll Arrow bottom

$('.navbar a, .contenedor-icono a').on('click', function(e) {
	if(this.hash !== '') {
		e.preventDefault();

		const hash = this.hash;

		$('html, body').animate ({
			scrollTop: $(hash).offset().top
		},
		800
		);
	}
});

//Navbar scroll to black

$(window).on('scroll', function(){
	if($(window).scrollTop()){
		$('nav').addClass('black');
	}
	else {
		$('nav').removeClass('black');
	}
});

//Popup Video

$(document).ready(function() {
	$('.popup').magnificPopup({
		type: 'iframe'
	})
});


