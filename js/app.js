
	document.addEventListener( 'DOMContentLoaded', function () {

		const sliderConfig = {
			type: 'loop',
			speed: 600,
			arrows: true,
			autoplay: true,
			interval: 3000,
			gap: '16px',
			lazyLoad: 'nearby',
			pagination: false
		};


		new Splide( '.splide', sliderConfig).mount( window.splide.Extensions );
	} );

const clickfield = document.querySelector('.kontakt__text');
const infobox = document.querySelector('.kontakt__slide-container');
const container = document.querySelector('.kontakt__container');

clickfield.addEventListener('click', function(){
	if (infobox.classList.contains("opened")) {
		infobox.classList.remove("opened");
		container.classList.remove("opened");
	} else {
		infobox.classList.add("opened");
		container.classList.add("opened");
	}
})
