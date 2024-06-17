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

	// const imagesLink = document.querySelectorAll(".js-open-gallery");
	// const myModal = document.getElementById("myModal");
	// const closeButton = myModal.querySelector(".js-close");
	// const prev = myModal.querySelector(".js-prev");
	// const next = myModal.querySelector(".js-next");
	// const slides = myModal.querySelector(".slides");
	// const pagination = myModal.querySelector(".pagination");

	// imagesLink.forEach(item => {
	// 	const slideElement = createSlideImage(item.href);
	// 	slides.appendChild(slideElement);

	// 	const bulletElement = createBulletElement(item.dataset.id);
	// 	pagination.appendChild(bulletElement);

	// 	item.addEventListener("click", function (evt) {
	// 		evt.preventDefault();

	// 		openModal();
	// 		currentSlide(+this.dataset.id);
	// 	});
	// });

	// pagination.addEventListener("click", function (evt) {
	// 	if (event.target.classList.contains("bullet")) {
	// 		openModal();
	// 		currentSlide(+event.target.dataset.id);
	// 	}
	// });

	// closeButton.addEventListener("click", function (evt) {
	// 	closeModal();
	// });

	// prev.addEventListener("click", function (evt) {
	// 	plusSlides(-1)
	// });

	// next.addEventListener("click", function (evt) {
	// 	plusSlides(1)
	// });

	// function createSlideImage(src) {
	// 	const slideDiv = document.createElement("div");
	// 	slideDiv.classList.add("slide");

	// 	const img = document.createElement("img");
	// 	img.src = src;

	// 	slideDiv.appendChild(img);
	// 	slideDiv.style.display = "none";

	// 	return slideDiv;
	// }

	// function createBulletElement(id) {
	// 	const bulletSpan = document.createElement("span");

	// 	bulletSpan.classList.add("bullet");
	// 	bulletSpan.setAttribute("tabindex", "0");
	// 	bulletSpan.dataset.id = id;

	// 	return bulletSpan;
	// }

	// function openModal() {
	// 	myModal.style.display = "flex";
	// }

	// function closeModal() {
	// 	myModal.style.display = "none";
	// }

	// let slideIndex = 1;
	// showSlides(slideIndex);

	// function plusSlides(n) {
	// 	showSlides(slideIndex += n);
	// }

	// function currentSlide(n = 1) {
	// 	showSlides(slideIndex = n);
	// }

	// function showSlides(n) {
	// 	let i;
	// 	let slides = document.getElementsByClassName("slide");
	// 	let bullets = document.getElementsByClassName("bullet");

	// 	if (n > slides.length) {
	// 		slideIndex = 1;
	// 	}

	// 	if (n < 1) {
	// 		slideIndex = slides.length;
	// 	}

	// 	for (i = 0; i < slides.length; i++) {
	// 		slides[i].style.display = "none";

	// 		if (bullets[i].classList.contains("active")) {
	// 			bullets[i].classList.remove("active");
	// 			bullets[i].setAttribute("tabindex", "0");
	// 		}
	// 	}

	// 	slides[slideIndex - 1].style.display = "block";
	// 	bullets[slideIndex - 1].classList.add("active");
	// 	bullets[slideIndex - 1].removeAttribute("tabindex");
	// }
}


initScript('.gallery', 'gallery', init)
