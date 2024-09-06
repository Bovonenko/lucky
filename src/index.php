<?php include("../app/database/db.php"); ?>
<?php include("../app/path.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Test</title>
	<link rel="stylesheet" href="./css/style.min.css" />
</head>

<body>
	<?php include("../app/include/header.php"); ?>

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
					<span class="signature__author promo__signature-author">James West</span>
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

	<section class="posts">
		<div class="posts__container">
			<div class="posts__featured">
				<div class="posts__label-wrapper">
					<h2 class="posts__label-title">Featured Post</h2>
				</div>
				<div class="post">
					<img
						class="post__img"
						src="./img/promo/bg.webp"
						alt="Featured Post Image" />
					<p class="signature post__signature">
						By
						<span
							class="signature__author post__signature-author">James West</span>
						|
						<span class="signature__date">May 23, 2022</span>
					</p>
					<h3 class="post__header">
						Lorem ipsum dolor sit amet, consectetur adipiscing
						elit, sed do eiusmod tempor.
					</h3>
					<p class="post__text">
						Duis aute irure dolor in reprehenderit in voluptate
						velit esse cillum dolore eu fugiat nulla pariatur.
						Excepteur sint occaecat cupidatat non proident.
					</p>
					<a href="#" class="link post__link">Read More ></a>
				</div>
			</div>
			<div class="posts__all">
				<div class="posts__label-wrapper">
					<h2 class="posts__label-title">All Posts</h2>
					<a class="posts__label-link" href="#">View All</a>
				</div>
				<a href="#" class="post__preview-wrapper">
					<div class="post__preview">
						<p class="signature post__signature_preview">
							By
							<span
								class="signature__author post__signature-author">James West</span>
							|
							<span class="signature__date">May 23, 2022</span>
						</p>
						<h4 class="post__header_preview">
							8 Figma design systems that you can download for
							free today.
						</h4>
					</div>
				</a>
				<a href="" class="post__preview-wrapper">
					<div class="post__preview">
						<p class="signature post__signature_preview">
							By
							<span
								class="signature__author post__signature-author">James West</span>
							|
							<span class="signature__date">May 23, 2022</span>
						</p>
						<h4 class="post__header_preview">
							8 Figma design systems that you can download for
							free today.
						</h4>
					</div>
				</a>
				<a href="" class="post__preview-wrapper">
					<div class="post__preview">
						<p class="signature post__signature_preview">
							By
							<span
								class="signature__author post__signature-author">James West</span>
							|
							<span class="signature__date">May 23, 2022</span>
						</p>
						<h4 class="post__header_preview">
							8 Figma design systems that you can download for
							free today.
						</h4>
					</div>
				</a>
				<a href="" class="post__preview-wrapper">
					<div class="post__preview">
						<p class="signature post__signature_preview">
							By
							<span
								class="signature__author post__signature-author">James West</span>
							|
							<span class="signature__date">May 23, 2022</span>
						</p>
						<h4 class="post__header_preview">
							8 Figma design systems that you can download for
							free today.
						</h4>
					</div>
				</a>
			</div>
		</div>
	</section>

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
			<div class="about__divider"></div>
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

	<section class="categories" id="categories">
		<div class="categories__container">
			<h2 class="categories__header">Choose A Catagory</h2>
			<ul class="categories__list">
				<li class="categories__item">
					<a href="#" class="categories__link">
						<div class="categories__img">
							<img
								src="./img/categories/1.svg"
								alt="Design categories" />
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
								alt="Design categories" />
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
								alt="Design categories" />
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
								alt="Design categories" />
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

	<section class="special" id="special">
		<div class="special__container">
			<div class="special__img">
				<img
					src="./img/special/bg.webp"
					alt="Special Offer Image" />
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

	<section class="members" id="members">
		<div class="members__container">
			<swiper-container init="false">
				<swiper-slide lazy="true">
					<img
						class="members__img"
						loading="lazy"
						src="./img/members/rostyslav.jpg"
						alt="club player member Rostyslav Bovonenko portrait" />
					<p class="members__name">Rostyslav Bovonenko</p>
					<p class="members__position">Club Player</p>
				</swiper-slide>
				<swiper-slide lazy="true">
					<img
						class="members__img"
						loading="lazy"
						src="./img/members/kadek.jpg"
						alt="club player member Rostyslav Bovonenko portrait" />
					<p class="members__name">Rostyslav Bovonenko</p>
					<p class="members__position">Club Player</p>
				</swiper-slide>
				<swiper-slide lazy="true">
					<img
						class="members__img"
						loading="lazy"
						src="./img/members/osip.jpg"
						alt="club player member Rostyslav Bovonenko portrait" />
					<p class="members__name">Rostyslav Bovonenko</p>
					<p class="members__position">Club Player</p>
				</swiper-slide>
				<swiper-slide lazy="true">
					<img
						class="members__img"
						loading="lazy"
						src="./img/members/pavel.jpg"
						alt="club player member Rostyslav Bovonenko portrait" />
					<p class="members__name">Rostyslav Bovonenko</p>
					<p class="members__position">Club Player</p>
				</swiper-slide>
				<swiper-slide lazy="true">
					<img
						class="members__img"
						loading="lazy"
						src="./img/members/qu.jpg"
						alt="club player member Rostyslav Bovonenko portrait" />
					<p class="members__name">Rostyslav Bovonenko</p>
					<p class="members__position">Club Player</p>
				</swiper-slide>
				<swiper-slide lazy="true">
					<img
						class="members__img"
						loading="lazy"
						src="./img/members/tomas.jpg"
						alt="club player member Rostyslav Bovonenko portrait" />
					<p class="members__name">Rostyslav Bovonenko</p>
					<p class="members__position">Club Player</p>
				</swiper-slide>
			</swiper-container>
		</div>
	</section>

	<section class="testimonials" id="testimonials">
		<div class="testimonials__container">
			<h2 class="testimonials__title">
				What people say about us
			</h2>
			<div class="testimonials__slider-wrapper">
				<div class="testimonials__message">
					<swiper-container init="false">
						<swiper-slide>
							<div class="swiper-slide__wrapper">
								<div class="testimonials__author-wrapper">
									<img
										class="testimonials__author-img"
										src="./img/members/rostyslav.jpg"
										alt="Testimonial author" />
									<p class="testimonials__author-name">
										Rostyslav
									</p>
								</div>
								<p class="testimonials__text">
									Lorem ipsum dolor sit amet, consectetur
									adipiscing elit, sed do eiusmod tempor
									incididunt ut labore et dolore magna aliqua.
								</p>

							</div>
						</swiper-slide>
						<swiper-slide>
							<div class="swiper-slide__wrapper">
								<div class="testimonials__author-wrapper">
									<img
										class="testimonials__author-img"
										src="./img/members/rostyslav.jpg"
										alt="Testimonial author" />
									<p class="testimonials__author-name">
										Rostyslav
									</p>
								</div>
								<p class="testimonials__text">
									Lorem ipsum dolor sit amet, consectetur
									incididunt ut labore et dolore magna aliqua.
									incididunt ut labore et dolore magna aliqua.
									incididunt ut labore et dolore magna aliqua.
								</p>

							</div>
						</swiper-slide>
						<swiper-slide>
							<div class="swiper-slide__wrapper">
								<div class="testimonials__author-wrapper">
									<img
										class="testimonials__author-img"
										src="./img/members/rostyslav.jpg"
										alt="Testimonial author" />
									<p class="testimonials__author-name">
										Rostyslav
									</p>
								</div>
								<p class="testimonials__text">
									Lorem ipsum dolor sit amet, consectetur
									incididunt ut labore et dolore magna aliqua.
									adipiscing elit, sed do eiusmod tempor
									incididunt ut labore et dolore magna aliqua.
									Lorem ipsum dolor sit amet, consectetur
									incididunt ut labore et dolore magna aliqua.
									adipiscing elit, sed do eiusmod tempor
									incididunt ut labore et dolore magna aliqua.
								</p>

							</div>
						</swiper-slide>
						<swiper-slide>
							<div class="swiper-slide__wrapper">
								<div class="testimonials__author-wrapper">
									<img
										class="testimonials__author-img"
										src="./img/members/rostyslav.jpg"
										alt="Testimonial author" />
									<p class="testimonials__author-name">
										Rostyslav
									</p>
								</div>
								<p class="testimonials__text">
									incididunt ut labore et dolore
								</p>

							</div>
						</swiper-slide>

					</swiper-container>
				</div>
			</div>
		</div>
	</section>

	<?php include("../app/include/footer.php"); ?>

	<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
	<script>
		const swiperEl = document.querySelector(
			".members swiper-container"
		);
		Object.assign(swiperEl, {
			slidesPerView: 1,
			spaceBetween: 30,
			// loop: true,
			// navigation: true,
			grabCursor: true,
			breakpoints: {
				640: {
					slidesPerView: 2,
					spaceBetween: 20,
				},
				768: {
					slidesPerView: 3,
					spaceBetween: 30,
				},
				1024: {
					slidesPerView: 4,
					spaceBetween: 40,
				},
			},
		});
		const swiperEl2 = document.querySelector(
			".testimonials swiper-container"
		);
		Object.assign(swiperEl2, {
			loop: true,
			pagination: {
				dynamicBullets: true,
				clickable: true,
			},
			navigation: {
				nextEl: ".testimonials__button[data-next]",
				prevEl: ".testimonials__button[data-prev]",
			},
			grabCursor: true,
		});

		swiperEl.initialize();
		swiperEl2.initialize();
	</script>
	<script src="./js/index.min.js"></script>
</body>

</html>