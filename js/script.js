$(document).ready(function () {
	// Owl init
	$(".owl-carousel").owlCarousel({
		'responsive': {
			'0': {'items': 1},
			'476': {'items': 1},
			'768': {'items': 1},
			'992': {'items': 1},
			'1200': {'items': 1}
		},
		'autoplay': true,
		'autoplayTimeout': 3000,
		'dots': true,
		// 'nav': true
	});

	$(".partners-carousel").owlCarousel({
		'responsive': {
			'0': {'items': 1},
			'476': {'items': 1},
			'768': {'items': 1},
			'992': {'items': 1},
			'1200': {'items': 1}
		},
		'autoplay': true,
		'autoplayTimeout': 3000,
		'dots': true,
		'nav': true
	});

	// Scroll [#]
	$('a[href*="#"]').bind("click", function (e) {
		var anchor = $(this);
		$('html, body').stop().animate({
			scrollTop: $(anchor.attr('href')).offset().top
		}, 1000);
		e.preventDefault();
	});


	let sandwitch = function () {
		$('.sandwitch-wrap').on('click', function () {
			$('#bs-example-navbar-collapse-1').toggleClass('active');

			$(this).toggleClass('sandwitch--active');
			$(this).find('.sandwitch').toggleClass('sandwitch--active');
		});
	};
	sandwitch();
});