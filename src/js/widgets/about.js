import { html } from "lit-html";

export default () => {
	return html`
		<section class="about" id="about">
			<div class="about__container">
				<div class="about__border-top">
					<div></div>
					<div></div>
					<div></div>
				</div>
				<div class="about__text-wrapper">
					<h6 class="about__label">ABOUT US</h6>
					<h2 class="about__header">
						We are a community of content writers who share their
						learnings
					</h2>
					<p class="about__text about__text-main">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit,
						sed do eiusmod tempor incididunt ut labore et dolore
						magna aliqua.
					</p>
					<a class="about__link" href="#">Read More ></a>
				</div>
				<div class="about__text-wrapper">
					<h6 class="about__label">OUR MISSION</h6>
					<h3 class="about__header">
						Creating valuable content for creatives all around the
						world
					</h3>
					<p class="about__text about__text-secondary">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit,
						sed do eiusmod tempor incididunt ut labore et dolore
						magna aliqua. Ut enim ad minim veniam, quis nostrud
						exercitation ullamco laboris nisi ut aliquip ex ea
						commodo consequat.
					</p>
				</div>
			</div>
		</section>
	`;
};
