/**
 * Internal Dependencies
 */
import {
	initScript
} from '../../../../resources/js/utils/init-script'


const init = function () {
	const $section = $(this);

	let myCollapse = document.getElementById('collapseExample');
  let toggleButton = document.getElementById('toggleButton');
	console.log(123);
  // Событие перед показом collapse
  myCollapse.addEventListener('show.bs.collapse', function () {
		console.log(321);
    toggleButton.textContent = 'Show less';
  });

  // Событие перед скрытием collapse
  myCollapse.addEventListener('hide.bs.collapse', function () {
		console.log(331);
    toggleButton.textContent = 'Show more';
  });

	let sliderReview = new Swiper(".slider-review", {
		navigation: {
			nextEl: ".swiper-button-next",
			prevEl: ".swiper-button-prev",
		},
		pagination: {
			el: ".swiper-pagination",
			clickable: true,
		},
	});
}


initScript('.trainer-review', 'trainer-review', init)
