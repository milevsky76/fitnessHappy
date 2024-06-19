/**
 * Internal Dependencies
 */
import {
	initScript
} from '../../../../resources/js/utils/init-script';
import YouTubePlayer from 'youtube-player';

const init = function () {
	const $section = $(this);

	const isFirstTime = (function() {
    let firstTime = true;  // Инициализируем первоначальное значение

    return function() {
			const returnValue = firstTime;  // Сохраняем текущее значение
        firstTime = !firstTime;  // Переопределяем значение на false для следующих вызовов
        return returnValue;  // Возвращаем первоначальное значение
    };
	})();

	console.log(114);

	jQuery(document).on('nfFormSubmitResponse', function(evt, obj) {
		let message = obj.response.data.actions.success_message;

		const isSuccess = isFirstTime();

		if (obj.id === '3') {
			$('#modalBookConsultation').modal('hide');
		}

		const modalStatus = document.querySelector("#modal-status");
		if(modalStatus) {
			function onModalShow() {
				const modalWrap = modalStatus.querySelector('.modal-status')
				const modalTitle = modalWrap.querySelector('.modal-status__title')
				const modalText = modalWrap.querySelector('.modal-status__text')
				const modalButton = modalWrap.querySelector('.modal-status__button')

				console.log('show', isSuccess);
		
				if (isSuccess) {
					modalWrap.classList.remove('error');
					modalTitle.textContent = 'Success';
					modalText.innerHTML = message;
					modalButton.style.display = 'flex';
				} else {
					modalWrap.classList.add('error');
					modalTitle.textContent = 'Error';
					modalText.innerHTML = 'Some error text...';
					modalButton.style.display = 'none';
				}
			}

			function onModalHide() {
				modalStatus.removeEventListener('show.bs.modal', onModalShow);
				modalStatus.removeEventListener('hide.bs.modal', onModalHide);
			}

			modalStatus.addEventListener('show.bs.modal', onModalShow);
			modalStatus.addEventListener('hide.bs.modal', onModalHide);
		}

		$('#modal-status').modal('show');
	});

	let player;
	let currentYoutubeVideoId = "";

	function createYouTubePlayer() {
		player = YouTubePlayer("modal-video-player", {
			height: "100%",
			width: "100%",
			playerVars: {
				playsinline: 1,
			}
		});
	}

	function addIdToYoutubePlayer(videoId) {
		if (videoId && player.loadVideoById) {
			player.loadVideoById({
				videoId: videoId
			});
			currentYoutubeVideoId = videoId;
			player.playVideo();
		}
	}

	document.querySelectorAll(".js-button-play-youtube").forEach((button) => {
		button.addEventListener("click", function () {
			const youtubeId = this.dataset.youtubeId;

			if (currentYoutubeVideoId !== youtubeId || youtubeId === "") {
				if (youtubeId) {
					if (!player) {
						createYouTubePlayer();
					}
					addIdToYoutubePlayer(youtubeId);
				}
			} else {
				player.playVideo();
			}
		});
	});

	document.querySelectorAll(".js-button-play-video-local").forEach((button) => {
		button.addEventListener("click", function () {
			const videoSrc = this.dataset.localVideoSrc;
			const videoPoster = this.dataset.localVideoPoster;
			const video = document.querySelector("#modal-video-local video");

			video.setAttribute('src', videoSrc);
			video.setAttribute('poster', videoPoster);

			video.play();
		});
	});

	document.querySelector("#modal-video-youtube").addEventListener('hide.bs.modal', function () {
		if (player) {
			player.stopVideo();
		}
	});

	document.querySelector("#modal-video-local").addEventListener('hide.bs.modal', function () {
		const video = this.querySelector("video");
		if (video) {
			video.pause();
		}
	});

	document.querySelectorAll(".form").forEach(form => {
		const fields = form.querySelectorAll('.form__field .form__input, .form__field .form__textarea');

		fields.forEach(field => {
			field.addEventListener('input', () => {
				if (field.value !== '') {
					field.nextElementSibling.classList.add('focus');
				} else {
					field.nextElementSibling.classList.remove('focus');
				}
			});

			field.addEventListener('focus', () => {
				field.nextElementSibling.classList.add('focus');
			});

			field.addEventListener('blur', () => {
				if (field.value === '') {
					field.nextElementSibling.classList.remove('focus');
				}
			});
		});
	});

	document.querySelectorAll(".nf-form-cont").forEach(form => {
		const fields = form.querySelectorAll('.field-wrap.email-wrap .ninja-forms-field');

		fields.forEach(field => {
			const fieldWrap = field.closest('.field-wrap');
			const label = fieldWrap.querySelector('.nf-field-label');

			field.addEventListener('input', () => {
				if (field.value !== '') {
					label.classList.add('focus');
				} else {
					label.classList.remove('focus');
				}
			});

			field.addEventListener('focus', () => {
				label.classList.add('focus');
			});

			field.addEventListener('blur', () => {
				if (field.value === '') {
					label.classList.remove('focus');
				}
			});
		});
	});
}


initScript('.footer', 'footer', init)
