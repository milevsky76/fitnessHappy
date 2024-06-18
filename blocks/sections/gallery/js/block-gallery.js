/**
 * Internal Dependencies
 */
import {
	initScript
} from '../../../../resources/js/utils/init-script'


const init = function () {
	const $section = $(this);

	const modalImage = document.getElementById('modal-image')

	if (modalImage) {
		modalImage.addEventListener('show.bs.modal', event => {
			const images = document.querySelectorAll('.gallery__list .gallery__image');

			let swiperWrapper = modalImage.querySelector('.swiper-wrapper');

			images.forEach(image => {
				const swiperSlide = document.createElement('div');
				swiperSlide.classList.add('swiper-slide');

				const img = document.createElement('img');
				img.src = image.src;
				swiperSlide.appendChild(img);

				swiperWrapper.appendChild(swiperSlide);
			});

			let sliderGallery = new Swiper(".slider-gallery", {
				// centeredSlides: true,
				navigation: {
					nextEl: ".swiper-button-next",
					prevEl: ".swiper-button-prev",
				},
				pagination: {
					el: ".swiper-pagination",
					clickable: true,
				},
			});

			// const button = event.relatedTarget
			// Extract info from data-bs-* attributes
			// const recipient = button.getAttribute('data-bs-whatever')
			// If necessary, you could initiate an Ajax request here
			// and then do the updating in a callback.

			// Update the modal's content.
			// const modalTitle = exampleModal.querySelector('.modal-title')
			// const modalBodyInput = exampleModal.querySelector('.modal-body input')

			// modalTitle.textContent = `New message to ${recipient}`
			// modalBodyInput.value = recipient
		})
	}
}


initScript('.gallery', 'gallery', init)
