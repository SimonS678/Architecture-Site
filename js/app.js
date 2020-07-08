
	document.addEventListener( 'DOMContentLoaded', function () {

		const sliderConfig = {
			type: 'loop',
			speed: 600,
			arrows: true,
			autoplay: true,
			interval: 3000,
			gap: '16px',
			lazyLoad: 'nearby'
		};


		new Splide( '.splide', sliderConfig).mount( window.splide.Extensions );
	} );
