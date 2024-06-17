/**
 * Internal Dependencies
 */
import {
	initScript
} from '../../../../resources/js/utils/init-script'


const init = function () {
	const $section = $(this);

	let sliderBaText = new Swiper(".slider-ba-text", {
		initialSlide: 1,
		navigation: {
			nextEl: ".swiper-button-next",
			prevEl: ".swiper-button-prev",
		},
		pagination: {
			el: ".swiper-pagination",
			clickable: true,
		},
	});

	let windowWidth = window.innerWidth;
	let coverflowEffect = {
		rotate: 0,
		stretch: 183,
		depth: 100,
		modifier: 1,
		scale: 0.85,
	};

	if (windowWidth <= 575) {
		coverflowEffect.stretch = 90;
	} else if (windowWidth <= 767) {
		coverflowEffect.stretch = 124;
	} else if (windowWidth <= 1024) {
		coverflowEffect.stretch = 125;
	} else if (windowWidth <= 1279) {
		coverflowEffect.stretch = 34;
	} else if (windowWidth <= 1539) {
		coverflowEffect.stretch = 54;
	} else if (windowWidth <= 1719) {
		coverflowEffect.stretch = 181;
	}

	let sliderBaImage = new Swiper(".slider-ba-image", {
		initialSlide: 1,
		slidesPerView: "auto",
		centeredSlides: true,
		allowTouchMove: false,
		effect: "coverflow",
		coverflowEffect: coverflowEffect,
	});

	sliderBaText.controller.control = sliderBaImage;
	sliderBaImage.controller.control = sliderBaText;
}


initScript('.section-real-results', 'real-results', init)
