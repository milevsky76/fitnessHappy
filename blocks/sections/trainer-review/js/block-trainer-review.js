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

  // Событие перед показом collapse
  myCollapse.addEventListener('show.bs.collapse', function () {
    toggleButton.textContent = 'Show less';
  });

  // Событие перед скрытием collapse
  myCollapse.addEventListener('hide.bs.collapse', function () {
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
