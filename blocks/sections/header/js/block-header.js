/**
 * Internal Dependencies
 */
import {
	initScript
} from '../../../../resources/js/utils/init-script'


const init = function () {
	const $section = $(this);

	const header = document.querySelector(".header");
	const menuButton = document.querySelector(".js-button-menu");
	const headerDrop = document.querySelector(".header__panel");
	const body = document.body;
	const firstInteractiveElement = headerDrop.querySelector('.header__link');
	const wpSiteBlocks = document.querySelector('.wp-site-blocks');

	if (header) {
		wpSiteBlocks.addEventListener("scroll", () => {
			if (wpSiteBlocks.scrollTop) {
				header.classList.add("sticky")
			} else {
				header.classList.remove("sticky")
			}
		});
	}

	if (menuButton) {
		menuButton.addEventListener("click", function () {
			menuButton.classList.toggle("open");
			headerDrop.classList.toggle("show");
			body.classList.toggle("no-scroll");
			firstInteractiveElement.focus();
			menuButton.blur();
		});
	}
}


initScript('.header', 'header', init)
