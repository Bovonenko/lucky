import { html } from "lit-html";

export default () => {
	return html`
		<section class="testimonials" id="testimonials">
			<div class="testimonials__container">
				<div class="testimonials__header">
					<h2 class="testimonials__title">
						What people say about us
					</h2>
					<div class="testimonials__navigation">
						<button data-prev class="testimonials__button button">
							<svg
								width="100%"
								height="100%"
								viewBox="0 0 31 31"
								fill="currentColor"
								xmlns="http://www.w3.org/2000/svg"
							>
								<path
									fill-rule="evenodd"
									clip-rule="evenodd"
									d="M23.2498 15.4998C23.2498 15.7567 23.1477 16.0031 22.966 16.1848C22.7844 16.3664 22.538 16.4685 22.281 16.4685L11.0571 16.4685L15.2169 20.6264C15.307 20.7165 15.3784 20.8234 15.4272 20.9411C15.4759 21.0587 15.501 21.1849 15.501 21.3123C15.501 21.4396 15.4759 21.5658 15.4272 21.6835C15.3784 21.8011 15.307 21.9081 15.2169 21.9981C15.1268 22.0882 15.0199 22.1597 14.9022 22.2084C14.7845 22.2571 14.6584 22.2822 14.531 22.2822C14.4037 22.2822 14.2775 22.2571 14.1598 22.2084C14.0422 22.1597 13.9352 22.0882 13.8452 21.9981L8.03265 16.1856C7.94244 16.0956 7.87086 15.9887 7.82202 15.871C7.77319 15.7534 7.74805 15.6272 7.74805 15.4998C7.74805 15.3723 7.77319 15.2462 7.82202 15.1285C7.87086 15.0108 7.94244 14.9039 8.03265 14.8139L13.8452 9.00138C14.0271 8.81948 14.2738 8.71728 14.531 8.71728C14.7883 8.71728 15.035 8.81948 15.2169 9.00138C15.3988 9.18329 15.501 9.43001 15.501 9.68726C15.501 9.94451 15.3988 10.1912 15.2169 10.3731L11.0571 14.531L22.281 14.531C22.538 14.531 22.7844 14.6331 22.966 14.8147C23.1477 14.9964 23.2498 15.2428 23.2498 15.4998Z"
									fill="currentColor"
								/>
							</svg>
						</button>
						<button data-next class="testimonials__button button">
							<svg
								width="100%"
								height="100%"
								viewBox="0 0 31 31"
								fill="currentColor"
								xmlns="http://www.w3.org/2000/svg"
							>
								<path
									fill-rule="evenodd"
									clip-rule="evenodd"
									d="M7.75022 15.4998C7.75022 15.7567 7.85228 16.0031 8.03396 16.1848C8.21564 16.3664 8.46204 16.4685 8.71897 16.4685L19.9429 16.4685L15.7831 20.6264C15.693 20.7165 15.6216 20.8234 15.5728 20.9411C15.5241 21.0587 15.499 21.1849 15.499 21.3123C15.499 21.4396 15.5241 21.5658 15.5728 21.6835C15.6216 21.8011 15.693 21.9081 15.7831 21.9981C15.8732 22.0882 15.9801 22.1597 16.0978 22.2084C16.2155 22.2571 16.3416 22.2822 16.469 22.2822C16.5963 22.2822 16.7225 22.2571 16.8402 22.2084C16.9578 22.1597 17.0648 22.0882 17.1548 21.9981L22.9673 16.1856C23.0576 16.0956 23.1291 15.9887 23.178 15.871C23.2268 15.7534 23.252 15.6272 23.252 15.4998C23.252 15.3723 23.2268 15.2462 23.178 15.1285C23.1291 15.0108 23.0576 14.9039 22.9673 14.8139L17.1548 9.00138C16.9729 8.81948 16.7262 8.71728 16.469 8.71728C16.2117 8.71728 15.965 8.81948 15.7831 9.00138C15.6012 9.18329 15.499 9.43001 15.499 9.68726C15.499 9.94451 15.6012 10.1912 15.7831 10.3731L19.9429 14.531L8.71897 14.531C8.46204 14.531 8.21564 14.6331 8.03396 14.8147C7.85228 14.9964 7.75022 15.2428 7.75022 15.4998Z"
									fill="currentColor"
								/>
							</svg>
						</button>
					</div>
				</div>
				<div class="testimonials__message">
					<swiper-container init="false">
						<swiper-slide>
							<h5 class="testimonials__message-text">
								Lorem ipsum dolor sit amet, consectetur
								adipiscing elit, sed do eiusmod tempor
								incididunt ut labore et dolore magna aliqua.
							</h5>
							<div class="testimonials__message-author">
								<img
									class="testimonials__message-img"
									src="./img/members/rostyslav.jpg"
									alt="Testimonial author"
								/>
								<p class="testimonials__message-name">
									Rostyslav Bovonenko
								</p>
							</div>
						</swiper-slide>
						<swiper-slide>
							<h5 class="testimonials__message-text">
								Lorem ipsum dolor sit amet, consectetur
								adipiscing elit, sed do eiusmod tempor
								incididunt ut labore et dolore magna aliqua.
							</h5>
							<div class="testimonials__message-author">
								<img
									class="testimonials__message-img"
									src="./img/members/rostyslav.jpg"
									alt="Testimonial author"
								/>
								<p class="testimonials__message-name">
									Rostyslav Bovonenko
								</p>
							</div>
						</swiper-slide>
					</swiper-container>
				</div>
			</div>
		</section>
	`;
};
