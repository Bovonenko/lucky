import { html } from "lit-html";

export default () => {
	return html`
		<section class="special" id="special">
			<div class="special__container">
				<div class="special__img">
					<img
						src="./img/special/bg.webp"
						alt="Special Offer Image"
					/>
				</div>
				<div class="special__post">
					<h6 class="special__label">Why we started</h6>
					<h2 class="special__header">
						It started out as a simple idea and evolved into our
						passion
					</h2>
					<p class="special__text special__text-main">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit,
						sed do eiusmod tempor incididunt ut labore et dolore
						magna aliqua. Ut enim ad minim veniam, quis nostrud
						exercitation ullamco laboris nisi ut aliquip.
					</p>
					<a class="special__link" href="#">Discover our story ></a>
				</div>
			</div>
		</section>
	`;
};
