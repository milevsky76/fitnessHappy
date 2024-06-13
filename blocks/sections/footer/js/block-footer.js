/**
 * Internal Dependencies
 */
import {
	initScript
} from '../../../../resources/js/utils/init-script'

const init = function () {
	const $section = $(this);

	console.log();

	document.getElementsByName("form-msg").forEach(form => {
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
