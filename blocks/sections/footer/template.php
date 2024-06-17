<?php
/**
 * Block Footer.
 *
 * @var array $block The block settings and attributes.
 * @var string $content The block inner HTML (empty).
 * @var bool $is_preview True during AJAX preview.
 * @var $post_id (int|string) The post ID this block is saved to.
 */

/**
 * Block preview image
 */
if ( isset( $block['data']['block_preview_images'] ) ) {
	hm_get_template_part_with_params( 'fragments/block-preview-image', ['block' => $block] );
	return;
}
?>
<footer class="footer">
	<div class="container">
		<div class="footer__main-content">
			<div class="footer__navigation-menu">
				<h2 class="footer__navigation-title">Navigation</h2>
				<ul class="footer__navigation-list">
					<li class="footer-navigation-item">
						<a class="footer-navigation-link" href="javascript:void(0);">Main</a>
					</li>

					<li class="footer-navigation-item">
						<a class="footer-navigation-link" href="javascript:void(0);">About Us</a>
					</li>

					<li class="footer-navigation-item">
						<a class="footer-navigation-link" href="javascript:void(0);">Contact Us</a>
					</li>

					<li class="footer-navigation-item">
						<a class="footer-navigation-link" href="javascript:void(0);">Before & After</a>
					</li>

					<li class="footer-navigation-item">
						<a class="footer-navigation-link" href="javascript:void(0);">Resources</a>
					</li>

					<li class="footer-navigation-item">
						<a class="footer-navigation-link" href="javascript:void(0);">Payment</a>
					</li>
				</ul>
			</div>

			<div class="footer__navigation-contacts">
				<h2 class="footer__navigation-title">Contact</h2>
				<div class="footer__navigation-list">
					<div class="panel__contacts">
						<a class="panel__location" href="javascript:void(0);" target="_blank" rel="nofollow" aria-label="4535 Forsyth Rd Suite 2 Macon, GA 31210">
							<span class="panel__location-icon">
								<svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="currentColor" role="img" aria-hidden="true"><path d="M12 3.75a5.866 5.866 0 0 0-5.86 5.86 5.866 5.866 0 0 0 7.467 5.635.937.937 0 1 0-.513-1.803A3.989 3.989 0 0 1 8.016 9.61 3.989 3.989 0 0 1 12 5.625a3.989 3.989 0 0 1 3.817 5.131.937.937 0 1 0 1.796.539A5.863 5.863 0 0 0 12 3.75Z"></path><path d="M18.791 2.81A9.547 9.547 0 0 0 12 0a9.547 9.547 0 0 0-6.791 2.81A9.548 9.548 0 0 0 2.39 9.6c.001 1.868.52 3.621 1.586 5.359.923 1.504 2.121 2.817 3.39 4.207 1.245 1.363 2.532 2.772 3.56 4.397a.938.938 0 0 0 .792.437h.562c.322 0 .62-.165.793-.437 1.027-1.625 2.314-3.034 3.558-4.397 1.27-1.39 2.468-2.703 3.39-4.207 1.066-1.738 1.585-3.49 1.587-5.36a9.547 9.547 0 0 0-2.818-6.788Zm-3.543 15.091C14.14 19.113 13.003 20.36 12 21.794c-1.003-1.434-2.141-2.68-3.248-3.893-2.406-2.634-4.483-4.91-4.486-8.3C4.27 5.34 7.74 1.874 12 1.874s7.73 3.466 7.734 7.723c-.003 3.394-2.08 5.669-4.486 8.303Z"></path></svg>
							</span>
							
							<span class="panel__location-text-wrap">
								<span class="panel__location-text">4535 Forsyth Rd Suite 2 <br> Macon, GA 31210</span>
							</span>
						</a>

						<a class="panel__phone" href="javascript:void(0);" aria-label="Call 4782543220">
							<span class="panel__phone-icon">
								<svg width="34" height="34" viewBox="0 0 34 34" xmlns="http://www.w3.org/2000/svg" fill="currentColor" role="img" aria-hidden="true"><path d="M33.997 27.396a5.03 5.03 0 0 0-1.543-3.456c-1.855-1.788-3.409-2.82-4.89-3.25-2.042-.59-3.933-.053-5.621 1.596a.541.541 0 0 1-.008.007l-1.795 1.782c-1.123-.632-3.305-2.021-5.662-4.379l-.175-.174c-2.358-2.358-3.747-4.54-4.379-5.662l1.783-1.795.007-.008c1.648-1.688 2.185-3.579 1.595-5.62-.428-1.482-1.46-3.036-3.25-4.891A5.03 5.03 0 0 0 6.605.003a5.028 5.028 0 0 0-3.558 1.29l-.038.034a1.393 1.393 0 0 0-.052.05C1.006 3.325-.016 6.054 0 9.268c.027 5.46 3.028 11.705 8.027 16.704a32.365 32.365 0 0 0 3.184 2.772 1.328 1.328 0 1 0 1.617-2.108 29.737 29.737 0 0 1-2.922-2.543C5.39 19.58 2.68 14.032 2.656 9.256 2.644 6.781 3.39 4.715 4.81 3.28l.01-.01a2.39 2.39 0 0 1 3.328.12c3.438 3.566 3.19 5.25 1.67 6.808l-2.462 2.48a1.328 1.328 0 0 0-.27 1.476c.062.14 1.574 3.482 5.34 7.247l.174.175c3.765 3.765 7.106 5.277 7.247 5.34.5.223 1.087.115 1.476-.271l2.48-2.462c1.558-1.52 3.242-1.768 6.807 1.67.934.9.987 2.362.12 3.327l-.009.01c-1.424 1.41-3.468 2.155-5.917 2.155h-.06c-1.957-.01-4.224-.547-6.554-1.552a1.328 1.328 0 1 0-1.052 2.44c2.694 1.161 5.248 1.756 7.592 1.768h.075c3.182 0 5.884-1.021 7.819-2.956l.049-.052.034-.038a5.03 5.03 0 0 0 1.29-3.558Z"></path></svg>
							</span>

							<span class="panel__phone-text-wrap">
								<span class="panel__phone-text">(478) 254-3220</span>
							</span>
						</a>

						<ul class="panel__social">
							<li class="panel__social-item">
								<a class="panel__social-link" href="javascript:void(0);" target="_blank" rel="nofollow" aria-label="Instagram">
									<svg width="34" height="34" viewBox="0 0 34 34" xmlns="http://www.w3.org/2000/svg" fill="currentColor" role="img" aria-hidden="true"><path d="M17.335 34h-.339a118.16 118.16 0 0 1-7.522-.208c-2.196-.133-4.2-.892-5.796-2.194-1.54-1.256-2.592-2.954-3.127-5.047-.464-1.822-.489-3.61-.513-5.34A372.543 372.543 0 0 1 0 17.003c.004-1.502.021-2.973.038-4.214.024-1.73.049-3.518.513-5.34.535-2.093 1.586-3.792 3.127-5.048C5.274 1.1 7.278.341 9.474.207 11.869.062 14.332-.006 17.003 0c2.665-.005 5.127.062 7.522.207 2.196.134 4.2.893 5.796 2.194 1.54 1.256 2.592 2.955 3.126 5.048.465 1.822.49 3.61.513 5.34.017 1.241.035 2.712.039 4.208a367.452 367.452 0 0 1-.039 4.214 1.329 1.329 0 0 1-2.656-.036c.017-1.235.035-2.696.039-4.178a368.367 368.367 0 0 0-.039-4.172c-.021-1.574-.043-3.203-.43-4.72-.39-1.53-1.142-2.756-2.232-3.645-1.179-.962-2.618-1.5-4.278-1.601a116.44 116.44 0 0 0-7.361-.203c-2.622-.006-5.03.06-7.368.203-1.66.1-3.1.64-4.279 1.6-1.09.89-1.84 2.116-2.23 3.646-.388 1.517-.41 3.146-.432 4.72a374.69 374.69 0 0 0-.038 4.178c.004 1.476.022 2.938.038 4.171.022 1.575.044 3.204.431 4.72.39 1.53 1.141 2.757 2.231 3.646 1.18.961 2.619 1.5 4.28 1.601 2.338.142 4.746.209 7.36.202 2.622.006 5.03-.06 7.368-.202 1.66-.1 3.1-.64 4.278-1.601a6.382 6.382 0 0 0 1.824-2.443 1.328 1.328 0 0 1 2.437 1.056 9.01 9.01 0 0 1-2.582 3.445c-1.596 1.302-3.6 2.06-5.796 2.194-2.293.14-4.65.208-7.19.208Zm7.899-17c0-4.577-3.724-8.3-8.301-8.3S8.632 12.422 8.632 17c0 4.577 3.724 8.3 8.3 8.3 4.578 0 8.302-3.723 8.302-8.3Zm-2.657 0a5.65 5.65 0 0 1-5.644 5.644A5.651 5.651 0 0 1 11.288 17a5.651 5.651 0 0 1 5.645-5.645A5.65 5.65 0 0 1 22.577 17Zm3.586-10.957a1.992 1.992 0 1 0 0 3.984 1.992 1.992 0 0 0 0-3.984Z"></path></svg>
								</a>
							</li>

							<li class="panel__social-item">
								<a class="panel__social-link" href="javascript:void(0);" target="_blank" rel="nofollow" aria-label="Facebook">
									<svg width="34" height="34" viewBox="0 0 34 34" xmlns="http://www.w3.org/2000/svg" fill="currentColor" role="img" aria-hidden="true"><path d="M32.672 23.375c.733 0 1.328-.595 1.328-1.328V5.312A5.319 5.319 0 0 0 28.687 0H5.313A5.319 5.319 0 0 0 0 5.313v23.375A5.319 5.319 0 0 0 5.313 34h23.375A5.319 5.319 0 0 0 34 28.687a1.328 1.328 0 1 0-2.656 0 2.66 2.66 0 0 1-2.657 2.657h-6.972V19.789h2.988a1.328 1.328 0 0 0 0-2.656h-2.988V13.48a2.66 2.66 0 0 1 2.656-2.657h.664a1.328 1.328 0 1 0 0-2.656h-.664a5.319 5.319 0 0 0-5.312 5.313v3.652H16.07a1.328 1.328 0 1 0 0 2.656h2.989v11.555H5.312a2.66 2.66 0 0 1-2.656-2.657V5.313a2.66 2.66 0 0 1 2.656-2.656h23.375a2.66 2.66 0 0 1 2.657 2.656v16.735c0 .733.594 1.328 1.328 1.328Z"></path></svg>
								</a>
							</li>

							<li class="panel__social-item">
								<a class="panel__social-link" href="javascript:void(0);" target="_blank" rel="nofollow" aria-label="Twitter">
									<svg width="34" height="34" viewBox="0 0 34 34" xmlns="http://www.w3.org/2000/svg" fill="currentColor" role="img" aria-hidden="true"><path d="m29.966 7.636-.017-.066c1.44-.863 2.604-2.287 3.121-3.918a14.507 14.507 0 0 1-4.515 1.727c-1.273-1.356-2.972-2.191-4.98-2.191-3.85 0-7.04 3.116-7.04 6.972 0 .591.049 1.163.114 1.664-3.39-.263-6.575-1.363-9.488-3.28-2.544-1.672-3.915-3.375-3.927-3.39A1.328 1.328 0 0 0 .88 6.177c.031.206.68 4.272 3.13 7.814-.57-.088-.912-.247-.977-.28a1.301 1.301 0 0 0-1.487.115c-.434.346-.59.936-.416 1.463.056.171 1.221 3.57 5.477 5.37-.912.264-1.72.26-1.731.26l-.027-.001a1.328 1.328 0 0 0-.812 2.379c.102.079 2.007 1.526 5.103 2.258-1.083.596-2.361.955-3.825 1.072-2.026.162-3.656-.222-3.67-.226a1.329 1.329 0 0 0-.828 2.516c.192.08 4.747 1.961 9.278 1.961 3.145 0 5.5-.286 7.637-.928 2.667-.802 4.93-2.17 6.92-4.18a1.328 1.328 0 1 0-1.888-1.868c-3.548 3.586-7.63 4.32-12.669 4.32-.118 0-.236-.001-.354-.004a9.928 9.928 0 0 0 3.573-2.74 1.328 1.328 0 0 0-.989-2.169 12.882 12.882 0 0 1-3.62-.636c.749-.38 1.478-.921 2.054-1.689a1.328 1.328 0 0 0-.827-2.104c-2.23-.4-3.711-1.298-4.672-2.181a9.292 9.292 0 0 0 1.77-.27 1.328 1.328 0 0 0 .6-2.245c-1.204-1.16-2.079-2.597-2.705-3.953.219.156.446.314.683.471 2.636 1.752 6.972 3.84 12.655 3.84a1.328 1.328 0 0 0 1.282-1.675 11.878 11.878 0 0 1-.352-2.707c0-1.144.456-2.224 1.285-3.041a4.387 4.387 0 0 1 3.097-1.275c1.177 0 2.201.455 3.044 1.353.609.573 1.273 2.1 1.273 3.022v.804c0 .028.003.067.01.112-.006.05-.01.102-.01.154 0 3.02-.559 5.707-1.661 7.989a1.328 1.328 0 0 0 2.392 1.155c1.277-2.645 1.925-5.722 1.925-9.144 0-.05-.004-.1-.009-.15a.89.89 0 0 0 .01-.116v-.93c1.364-.985 2.519-2.316 3.452-3.718 0 0-2.448 1.16-4.034 1.26Z"></path></svg>
								</a>
							</li>

							<li class="panel__social-item">
								<a class="panel__social-link" href="javascript:void(0);" target="_blank" rel="nofollow" aria-label="YouTube">
									<svg width="34" height="34" viewBox="0 0 34 34" xmlns="http://www.w3.org/2000/svg" fill="currentColor" role="img" aria-hidden="true"><path d="M27.287 6.882A107.716 107.716 0 0 0 17 6.374c-4.22 0-7.923.276-10.287.508A3.989 3.989 0 0 0 3.14 10.3a47.978 47.978 0 0 0-.485 6.7c0 2.174.163 4.428.485 6.7a3.989 3.989 0 0 0 3.572 3.418c2.364.231 6.068.507 10.287.507 4.219 0 7.923-.276 10.287-.507a3.989 3.989 0 0 0 3.572-3.418 1.328 1.328 0 1 1 2.63.372 6.639 6.639 0 0 1-5.943 5.69c-2.424.236-6.22.52-10.546.52s-8.123-.284-10.546-.52a6.639 6.639 0 0 1-5.944-5.69c-.68-4.83-.68-9.315 0-14.145a6.639 6.639 0 0 1 5.944-5.689c2.423-.237 6.22-.52 10.546-.52s8.122.283 10.546.52a6.639 6.639 0 0 1 5.943 5.69C33.83 12.32 34 14.7 34 17c-.07 1.76-2.586 1.762-2.656 0 0-2.175-.163-4.429-.485-6.7a3.989 3.989 0 0 0-3.572-3.418Zm-5.14 7.984c1.717.959 1.716 3.542 0 4.5l-5.701 3.308c-.812.47-1.781.473-2.594.005a2.574 2.574 0 0 1-1.302-2.255v-6.617c0-.942.487-1.784 1.302-2.254a2.564 2.564 0 0 1 2.593.005l5.702 3.308Zm-1.415 2.25-5.525-3.206v6.412l5.525-3.206Z"></path></svg>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>

			<div class="footer__gallery">
				<div class="footer__gallery-item">
					<img class="footer__gallery-image" src="/wp-content/themes/testproject/resources/images/previews/gallery-1.jpg" title="" alt="">
				</div>

				<div class="footer__gallery-item">
					<img class="footer__gallery-image" src="/wp-content/themes/testproject/resources/images/previews/gallery-2.jpg" title="" alt="">
				</div>

				<div class="footer__gallery-item">
					<img class="footer__gallery-image" src="/wp-content/themes/testproject/resources/images/previews/gallery-3.jpg" title="" alt="">
				</div>

				<div class="footer__gallery-item">
					<img class="footer__gallery-image" src="/wp-content/themes/testproject/resources/images/previews/gallery-4.jpg" title="" alt="">
				</div>
			</div>
		</div>

		<div class="footer__info">
			<span class="footer__copyright">© 2021 The Happy Fitness</span>

			<div class="footer__designed">
				<span class="footer__designed-text">Designed &amp; Marketed by</span>

				<a class="footer__designedd-logo" href="javascript:void(0);" target="_blank" rel="nofollow" aria-label="Designed">
					<svg width="95" height="28" fill="none" viewBox="0 0 95 28" xmlns="http://www.w3.org/2000/svg"><path fill="#135978" d="M63.533 16.66v-1.213a.197.197 0 0 0-.194-.197h-.335c-.246 0-.458-.214-.458-.5v-3.482c0-2.464-1.093-4.232-3.543-4.232-1.252 0-2.592.643-2.944 1.625V7.054c0-.161-.159-.286-.3-.215-.264.143-2.873.143-3.05.215a.098.098 0 0 0-.053.089v1.429c0 .071.071.107.142.107 0 0 .846.018.846.625v5.464c0 .268-.212.5-.459.5h-1.533c-.247 0-.459-.214-.459-.5V7.054c0-.161-.158-.304-.3-.232-.317.142-2.873.16-3.05.232a.098.098 0 0 0-.052.089v1.429c0 .071.053.107.141.107 0 0 .846 0 .846.607v5.482c0 .268-.211.5-.458.5h-.335a.197.197 0 0 0-.194.196v1.215c0 .107.088.196.194.196h8.885c.105 0 .194-.09.194-.196v-1.214a.197.197 0 0 0-.194-.197h-.335c-.247 0-.459-.214-.459-.5 0 0 .018-2.018.018-2.857 0-1.232.247-3.232 2.045-3.232 1.78 0 2.045 2 2.045 3.232 0 .428-.018 2.857-.018 2.857 0 .268-.211.5-.458.5h-.335a.197.197 0 0 0-.194.196v1.215c0 .107.088.196.194.196h4.036c.036 0 .124-.09.124-.214ZM42.59 7.053c-1.656 0-2.784 1.625-2.784 1.625V1.785c0-.16-.141-.16-.3-.142-.758.142-2.873.178-3.05.25a.098.098 0 0 0-.053.089v1.41c0 .072.07.108.141.108 0 0 .847 0 .847.607v10.625c0 .268-.212.5-.459.5h-.335a.197.197 0 0 0-.194.196v1.215c0 .107.089.196.194.196h2.927c.158 0 .282-.143.282-.304v-.517c.74.696 1.692.821 2.732.821 2.38 0 4.407-1.84 4.407-4.929 0-3.089-1.71-4.857-4.354-4.857Zm-.863 8.197c-1.022 0-1.921-.607-1.921-1.429v-2.16c0-1.75.916-3 2.01-3 1.48 0 2.08 1.535 2.08 3.517 0 1.518-.706 3.072-2.169 3.072ZM14.984 0h-4.566c-.105 0-.211.107-.211.232v1.16c0 .126.088.233.211.233h.265c.282 0 .511.25.511.554v4.875h-7.21V2.179c0-.304.23-.554.511-.554h.265c.105 0 .211-.107.211-.232V.233C4.971.106 4.883 0 4.76 0H.212C.106 0 0 .107 0 .232v1.16c0 .126.088.215.212.215h.282c.282 0 .51.25.51.554v12.535c0 .304-.228.554-.51.554H.212c-.106 0-.212.107-.212.232v1.179c0 .125.088.232.212.232H4.76c.105 0 .211-.107.211-.232v-1.179c0-.125-.088-.232-.211-.232h-.265c-.282 0-.511-.25-.511-.554V8.661h7.21v6.035c0 .304-.23.554-.511.554h-.265c-.105 0-.211.107-.211.232v1.179c0 .125.088.232.211.232h4.566c.106 0 .212-.107.212-.232v-1.179c0-.125-.088-.232-.212-.232h-.282c-.282 0-.511-.25-.511-.554V2.161c0-.304.23-.554.511-.554h.282c.106 0 .212-.107.212-.232V.215c0-.108-.106-.215-.212-.215ZM26.46 15.25h-.528c-.23 0-.3-.178-.3-.357V7.25c0-.178-.018-.214-.194-.214-.511 0-1.48-.072-1.921-.214a.225.225 0 0 0-.3.214v1.607c-.247-.554-1.199-1.625-2.503-1.625-2.521 0-4.707 2.34-4.707 5.446 0 3.108 1.904 4.375 4.46 4.375 1.622 0 2.75-.839 2.75-.839s.088.84.917.84h2.326a.159.159 0 0 0 .16-.161v-1.304c0-.053-.071-.125-.16-.125Zm-5.411 0c-1.287 0-1.975-1.482-1.975-3.071 0-1.732.9-3.518 2.08-3.518 1.252 0 2.08.84 2.08 3.286-.017 1.25-.317 3.303-2.185 3.303ZM80.845 6.821c-2.82 0-5.113 2.232-5.113 5.018 0 2.786 2.098 5.036 5.113 5.036a5.11 5.11 0 0 0 3.896-1.804c.07-.071.052-.196 0-.268 0 0-1.358-.839-1.375-.839-.071-.053-.16-.018-.212.036-.212.303-.899 1.268-2.31 1.25-2.044 0-2.027-2.464-2.027-2.464h6.893c.124 0 .23-.09.23-.233-.018-3.928-2.927-5.732-5.095-5.732ZM78.8 11.125s0-2.464 2.027-2.464 2.045 2.464 2.045 2.464H78.8ZM50.377 5.156c.98-.549 1.372-1.729.877-2.635-.495-.906-1.69-1.195-2.67-.645-.98.549-1.372 1.729-.877 2.635.495.906 1.69 1.195 2.67.645ZM34.851 7.089c-.018 0-.035-.018-.07-.018-.864-.16-2.345.375-3.509 1.59V7.052c0-.16-.158-.285-.3-.214-.264.143-2.873.143-3.049.214a.098.098 0 0 0-.053.09v1.41c0 .072.053.107.141.107 0 0 .846 0 .846.607v5.483c0 .268-.211.5-.458.5h-.335a.197.197 0 0 0-.194.196v1.214c0 .107.088.197.194.197h4.02c.105 0 .193-.09.193-.197v-1.214a.197.197 0 0 0-.194-.196h-.335c-.246 0-.458-.215-.458-.5v-3.643c0-1.804 1.252-2.447 1.551-2.447 0 1.054.74 1.75 1.675 1.75.917 0 1.675-.75 1.675-1.696a1.743 1.743 0 0 0-1.34-1.625Z"></path><path fill="#135978" d="M72.806 7.536c.211-.16.67-.34.952.072.282.41.67.642 1.145.642.759 0 1.358-.625 1.358-1.375 0-.535-.37-1.464-1.798-1.464-1.675 0-3.173 2.143-3.28 2.107-.669-.303-1.41-.446-2.203-.446-2.82 0-5.112 2.178-5.112 4.893 0 1.714.917 3.214 2.292 4.089-.494.196-.864.75-.864 1.34 0 .589.546 1.124 1.886 1.428 4.037.893 5.36 2.643 5.36 4.393 0 2.339-1.376 3.16-3.42 3.16-2.046 0-3.42-1.071-3.42-3.16 0-2.429 1.498-2.732 1.216-3.018-.282-.304-4.39-.125-4.39 3.018 0 2.928 2.927 4.785 6.593 4.785 3.42 0 6.593-1.41 6.593-4.785 0-4.232-7.086-5.232-7.95-5.482-.67-.197-.458-1.125.088-.983.353.108.723.108 1.11.108 2.821 0 5.113-2.197 5.113-4.929a4.857 4.857 0 0 0-1.41-3.393c-.37-.41-.07-.84.14-1Zm-3.808 7.714c-1.216 0-2.045-1.125-2.045-3.25s.829-3.339 2.045-3.339 2.045 1.214 2.045 3.34c0 2.124-.829 3.25-2.045 3.25ZM93.696 7.089c-.018 0-.035-.018-.07-.018-.865-.16-2.345.375-3.509 1.59V7.052c0-.16-.159-.285-.3-.214-.264.143-2.873.143-3.05.214a.099.099 0 0 0-.052.09v1.41c0 .072.053.107.14.107 0 0 .847 0 .847.607v5.483c0 .268-.212.5-.458.5h-.335a.197.197 0 0 0-.194.196v1.214c0 .107.088.197.194.197h4.02c.105 0 .193-.09.193-.197v-1.214a.197.197 0 0 0-.194-.196h-.335c-.247 0-.458-.215-.458-.5v-3.643c0-1.804 1.251-2.447 1.551-2.447 0 1.054.74 1.75 1.675 1.75.916 0 1.674-.75 1.674-1.696a1.764 1.764 0 0 0-1.34-1.625ZM31.044 21.375c0-.768-.546-1.304-1.34-1.304h-1.85v3.75h.899v-1.16h.546c.3.41.582.785.881 1.16h1.058c-.3-.393-.634-.857-.952-1.25a1.3 1.3 0 0 0 .758-1.196Zm-1.428.571h-.846v-1.178h.846c.476 0 .547.41.547.607-.018.393-.3.571-.547.571ZM36.297 20.071h-1.18l-1.446 1.554V20.07h-.935v3.75h.935v-.857l.493-.553 1.023 1.41h1.11l-1.516-2.071 1.516-1.679ZM37.99 23.821h2.943v-.768h-2.01v-.696h1.781v-.786h-1.78v-.732h2.01v-.768h-2.945v3.75ZM42.608 20.84h1.252v2.981h.934V20.84h1.252v-.768h-3.438v.768ZM48.673 20.071h-.935v3.75h.935v-3.75ZM53.01 22.25l-1.798-2.179h-.864v3.75h.899v-2.143l1.763 2.143h.899v-3.75h-.9v2.179ZM19.092 20.071l-1.11 1.465-1.094-1.465h-.934v3.75h.934v-2.285l1.093 1.446 1.111-1.446v2.285h.934v-3.75h-.934ZM24.204 20.071h-.528l-1.975 3.75h1.005l.317-.643h1.834l.335.643h.987l-1.975-3.75Zm-.793 2.322.529-1.107.529 1.107H23.41ZM59.373 21.66h-1.886v.822h.899c-.141.286-.511.482-.864.482A1.041 1.041 0 0 1 56.5 21.93c0-.554.476-1.018 1.022-1.018.264 0 .547.143.758.375.141-.09.494-.304.776-.464a1.937 1.937 0 0 0-1.534-.768c-1.058 0-1.921.839-1.921 1.875 0 1.035.863 1.875 1.921 1.875.987 0 1.78-.679 1.869-1.59V22c0-.09 0-.196-.018-.286v-.053Z"></path></svg>
				</a>
			</div>
		</div>
	</div>
</footer>

<!-- Modal -->
<div class="modal fade" id="modalBookConsultation" aria-hidden="true" aria-label="Book Consultation" tabindex="-1" aria-modal="true" role="dialog">
	<div class="modal-dialog modal-fullscreen-sm-down modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-body">
				<button type="button" class="modal__close" data-bs-dismiss="modal" aria-label="Close">
					<svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="currentColor" role="img" aria-hidden="true"><path d="m13.326 12.001 10.4-10.4A.937.937 0 1 0 22.4.276L12 10.676 1.6.275A.937.937 0 1 0 .275 1.6l10.4 10.4-10.4 10.4A.938.938 0 1 0 1.6 23.726L12 13.326l10.4 10.4a.935.935 0 0 0 1.325 0 .937.937 0 0 0 0-1.325L13.325 12Z"></path></svg>
				</button>

				<div class="modal__headline">
					<h2>Book <br> Consultation</h2>
				</div>

				<div class="modal__description">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Facilisis nullam pretium lectus est non arcu diam in varius.
				</div>

				<form class="form" name="form-msg" method="post">
					<div class="form__field">
							<input class="form__input" id="fname" name="fname" type="text" autocomplete="given-name" required>
							<label class="form__label" for="fname">First Name</label>
					</div>
					
					<div class="form__field">
						<input class="form__input" id="lname" name="lname" type="text" autocomplete="family-name" required>
						<label class="form__label" for="lname">Last Name</label>
					</div>

					<div class="form__field">
						<input class="form__input" id="email" name="email" type="email" autocomplete="email" required>
						<label class="form__label" for="email">Email</label>
					</div>

					<div class="form__field">
						<input class="form__input" id="phone" name="phone" type="tel" autocomplete="tel" required>
						<label class="form__label" for="phone">Phone Number</label>
					</div>

					<div class="form__field">
						<textarea class="form__textarea" id="msg" name="msg" type="tel" required></textarea>
						<label class="form__label" for="msg">Message</label>
					</div>

					<div class="form__field">
						<button class="form__button button" type="submit">Submit</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- Modal youtube video -->
<div class="modal fade modal-video" id="modal-video-youtube" aria-hidden="true" aria-label="YouTube Video" tabindex="-1" aria-modal="true" role="dialog">
		<div class="modal-dialog modal-dialog-centered modal-xl">
				<div class="modal-content">
						<div class="modal-body">
							<button type="button" class="modal__close" data-bs-dismiss="modal" aria-label="Close">
								<svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="currentColor" role="img" aria-hidden="true"><path d="m13.326 12.001 10.4-10.4A.937.937 0 1 0 22.4.276L12 10.676 1.6.275A.937.937 0 1 0 .275 1.6l10.4 10.4-10.4 10.4A.938.938 0 1 0 1.6 23.726L12 13.326l10.4 10.4a.935.935 0 0 0 1.325 0 .937.937 0 0 0 0-1.325L13.325 12Z"></path></svg>
							</button>

							<div class="video-wrapper">
								<div id="modal-video-player"></div>
							</div>
						</div>
				</div>
		</div>
</div>
<!-- Modal local video -->
<div class="modal fade modal-video" id="modal-video-local" aria-hidden="true" aria-label="YouTube Video" tabindex="-1" aria-modal="true" role="dialog">
	<div class="modal-dialog modal-dialog-centered modal-xl">
		<div class="modal-content">
			<div class="modal-body">
				<button type="button" class="modal__close" data-bs-dismiss="modal" aria-label="Close">
					<svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="currentColor" role="img" aria-hidden="true"><path d="m13.326 12.001 10.4-10.4A.937.937 0 1 0 22.4.276L12 10.676 1.6.275A.937.937 0 1 0 .275 1.6l10.4 10.4-10.4 10.4A.938.938 0 1 0 1.6 23.726L12 13.326l10.4 10.4a.935.935 0 0 0 1.325 0 .937.937 0 0 0 0-1.325L13.325 12Z"></path></svg>
				</button>

				<div class="video-wrapper">
					<video disablepictureinpicture="" controls="" playsinline="">
						Your browser does not support the video tag.
					</video>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- The Modal/Lightbox -->
<!-- <div id="myModal" class="modal-old">
	<div class="modal-content">
		<button class="close js-close" type="button" aria-label="Close">
			<svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="currentColor" role="img" aria-hidden="true"><path d="m13.326 12.001 10.4-10.4A.937.937 0 1 0 22.4.276L12 10.676 1.6.275A.937.937 0 1 0 .275 1.6l10.4 10.4-10.4 10.4A.938.938 0 1 0 1.6 23.726L12 13.326l10.4 10.4a.935.935 0 0 0 1.325 0 .937.937 0 0 0 0-1.325L13.325 12Z"></path></svg>
		</button>

		<div class="slides"></div>

		<div class="controls">
			<button class="prev js-prev" type="button">
				<svg width="25" height="25" viewBox="0 0 25 25" xmlns="http://www.w3.org/2000/svg" fill="currentColor" role="img" aria-hidden="true"><path d="m.856 10.43 8.559-8.581a.977.977 0 0 1 1.383 1.38l-8.56 8.58c-.381.381-.381 1 0 1.383l8.56 8.58a.977.977 0 1 1-1.383 1.38l-8.558-8.58a2.933 2.933 0 0 1-.001-4.143Z"></path><path d="M6.298 11.523h17.725a.977.977 0 0 1 0 1.954H6.298a.977.977 0 1 1 0-1.954Z"></path></svg>
			</button>

			<div class="pagination"></div>

			<button class="next js-next" type="button">
				<svg width="25" height="25" viewBox="0 0 25 25" xmlns="http://www.w3.org/2000/svg" fill="currentColor" role="img" aria-hidden="true"><path d="m24.144 10.43-8.559-8.581a.977.977 0 0 0-1.383 1.38l8.56 8.58c.381.381.381 1 0 1.383l-8.56 8.58a.977.977 0 1 0 1.383 1.38l8.558-8.58a2.933 2.933 0 0 0 .001-4.143Z"></path><path d="M18.702 11.523H.977a.977.977 0 0 0 0 1.954h17.725a.977.977 0 1 0 0-1.954Z"></path></svg>
			</button>
		</div>
	</div>
</div> -->
<!-- Modal youtube video -->
<div class="modal fade modal-image" id="modal-image" aria-hidden="true" aria-label="Gallery" tabindex="-1" aria-modal="true" role="dialog">
		<div class="modal-dialog modal-dialog-centered modal-xl">
				<div class="modal-content">
						<div class="modal-body">
							<button type="button" class="modal__close" data-bs-dismiss="modal" aria-label="Close">
								<svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="currentColor" role="img" aria-hidden="true"><path d="m13.326 12.001 10.4-10.4A.937.937 0 1 0 22.4.276L12 10.676 1.6.275A.937.937 0 1 0 .275 1.6l10.4 10.4-10.4 10.4A.938.938 0 1 0 1.6 23.726L12 13.326l10.4 10.4a.935.935 0 0 0 1.325 0 .937.937 0 0 0 0-1.325L13.325 12Z"></path></svg>
							</button>

							<div class="swiper slider-gallery">
								<div class="swiper-wrapper"></div>
								
								<div class="navigation">
									<button class="swiper-button-prev" type="button">
										<svg width="25" height="25" viewBox="0 0 25 25" xmlns="http://www.w3.org/2000/svg" fill="currentColor" role="img" aria-hidden="true"><path d="m.856 10.43 8.559-8.581a.977.977 0 0 1 1.383 1.38l-8.56 8.58c-.381.381-.381 1 0 1.383l8.56 8.58a.977.977 0 1 1-1.383 1.38l-8.558-8.58a2.933 2.933 0 0 1-.001-4.143Z"></path><path d="M6.298 11.523h17.725a.977.977 0 0 1 0 1.954H6.298a.977.977 0 1 1 0-1.954Z"></path></svg>
									</button>
									<div class="swiper-pagination"></div>
									<button class="swiper-button-next" type="button">
										<svg width="25" height="25" viewBox="0 0 25 25" xmlns="http://www.w3.org/2000/svg" fill="currentColor" role="img" aria-hidden="true"><path fill-opacity=".5" d="m24.144 10.429-8.559-8.58a.977.977 0 0 0-1.383 1.379l8.56 8.581c.381.38.381 1 0 1.382l-8.56 8.58a.977.977 0 1 0 1.383 1.38l8.558-8.58a2.933 2.933 0 0 0 .001-4.142Z"></path><path fill-opacity=".5" d="M18.702 11.523H.977a.977.977 0 0 0 0 1.954h17.725a.977.977 0 1 0 0-1.954Z"></path></svg>
									</button>
								</div>
							</div>
						</div>
				</div>
		</div>
</div>

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<?php
\Harbinger_Marketing\Modal_Action::render_modals();
