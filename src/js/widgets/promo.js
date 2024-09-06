import { html } from "lit-html";

export default () => {
	return html`
		<section class="promo">
			<div class="promo__container">
				<div class="promo__wrapper">
					<p class="promo__label">
						posted on <strong>startup</strong>
					</p>
					<h1 class="promo__header">
						Step-by-step guide to choosing great font pairs
					</h1>
					<p class="signature promo__signature">
						By
						<span class="signature__author promo__signature-author"
							>James West</span
						>
						| <span class="signature__date">May 23, 2022</span>
					</p>
					<p class="promo__text">
						Duis aute irure dolor in reprehenderit in voluptate
						velit esse cillum dolore eu fugiat nulla pariatur.
						Excepteur sint occaecat cupidatat non proident.
					</p>
					<a href="#" class="link promo__link">Read More ></a>
				</div>
			</div>
		</section>
	`;
};
