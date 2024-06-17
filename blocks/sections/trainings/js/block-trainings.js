/**
 * Internal Dependencies
 */
import {
	initScript
} from '../../../../resources/js/utils/init-script'


const init = function () {
	const $section = $(this);

	function scrollHorizontally(evt) {
		const delta = evt.wheelDelta ? evt.wheelDelta / 40 : evt.detail ? -evt.detail : 0;
		this.scrollLeft -= delta * 10;
		evt.preventDefault();
	}

	document.querySelectorAll('.js-tabs').forEach(elem => {
		elem.addEventListener('mousewheel', scrollHorizontally, false); // IE9, Chrome, Safari, Opera
		elem.addEventListener('DOMMouseScroll', scrollHorizontally, false); // Firefox
	});
}


initScript('.section-trainings', 'trainings', init)
