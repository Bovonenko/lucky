import { html } from "lit-html";

export default () => {
	return html`
		<section class="categories" id="categories">
			<div class="categories__container">
				<h2 class="categories__header">Choose A Catagory</h2>
				<ul class="categories__list">
					<li class="categories__item">
						<a href="#" class="categories__link">
							<div class="categories__img">
								<img
									src="./img/categories/1.svg"
									alt="Design categories"
								/>
							</div>
							<h3 class="categories__title">Business</h3>
							<p class="categories__text">
								Lorem ipsum dolor sit amet, consectetur
								adipiscing elit, sed do eiusmod tempor.
							</p>
						</a>
					</li>
					<li class="categories__item">
						<a href="#" class="categories__link">
							<div class="categories__img">
								<img
									src="./img/categories/2.svg"
									alt="Design categories"
								/>
							</div>
							<h3 class="categories__title">Business</h3>
							<p class="categories__text">
								Lorem ipsum dolor sit amet, consectetur
								adipiscing elit, sed do eiusmod tempor.
							</p>
						</a>
					</li>
					<li class="categories__item">
						<a href="#" class="categories__link">
							<div class="categories__img">
								<img
									src="./img/categories/3.svg"
									alt="Design categories"
								/>
							</div>
							<h3 class="categories__title">Business</h3>
							<p class="categories__text">
								Lorem ipsum dolor sit amet, consectetur
								adipiscing elit, sed do eiusmod tempor.
							</p>
						</a>
					</li>
					<li class="categories__item">
						<a href="#" class="categories__link">
							<div class="categories__img">
								<img
									src="./img/categories/4.svg"
									alt="Design categories"
								/>
							</div>
							<h3 class="categories__title">Business</h3>
							<p class="categories__text">
								Lorem ipsum dolor sit amet, consectetur
								adipiscing elit, sed do eiusmod tempor.
							</p>
						</a>
					</li>
				</ul>
			</div>
		</section>
	`;
};
