/**
 * Internal Dependencies
 */
import {
	initScript
} from '../../../../resources/js/utils/init-script';
import YouTubePlayer from 'youtube-player';

const init = function () {
	const $section = $(this);

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
}


initScript('.footer', 'footer', init)
