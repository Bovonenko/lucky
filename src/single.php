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

	<div class="sections-wrapper">
		<section class="single">
			<div class="single__container">
				<div class="single__main">
					<div class="single__label-wrapper">
						<h2 class="single__label-title">Featured Post</h2>
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
							Lorem ipsum dolor sit amet, consectetur
							adipiscing elit, sed do eiusmod tempor.
						</h3>
						<p class="post__text">
							Duis aute irure dolor in reprehenderit in
							voluptate velit esse cillum dolore eu fugiat
							nulla pariatur. Excepteur sint occaecat
							cupidatat non proident. Duis aute irure dolor in
							reprehenderit in voluptate velit esse cillum
							dolore eu fugiat nulla pariatur. Excepteur sint
							occaecat cupidatat non proident. Duis aute irure
							dolor in reprehenderit in voluptate velit esse
							cillum dolore eu fugiat nulla pariatur.
							Excepteur sint occaecat cupidatat non proident.
							Duis aute irure dolor in reprehenderit in
							voluptate velit esse cillum dolore eu fugiat
							nulla pariatur. Excepteur sint occaecat
							cupidatat non proident. Duis aute irure dolor in
							reprehenderit in voluptate velit esse cillum
							dolore eu fugiat nulla pariatur. Excepteur sint
							occaecat cupidatat non proident. Duis aute irure
							dolor in reprehenderit in voluptate velit esse
							cillum dolore eu fugiat nulla pariatur.
							Excepteur sint occaecat cupidatat non proident.
							Duis aute irure dolor in reprehenderit in
							voluptate velit esse cillum dolore eu fugiat
							nulla pariatur. Excepteur sint occaecat
							cupidatat non proident. Duis aute irure dolor in
							reprehenderit in voluptate velit esse cillum
							dolore eu fugiat nulla pariatur. Excepteur sint
							occaecat cupidatat non proident.
						</p>
					</div>
				</div>
			</div>
		</section>

		<section class="list">
			<div class="list__container">
				<h2 class="list__label">Latest Posts</h2>
				<ul class="list__items-wrapper">
					<li class="list__item">
						<a href="#" class="list__item-link">
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
							<h4 class="list__item-title">Great Opening</h4>
							<p class="list__item-text">
								We are going to open next week!
							</p>
						</a>
					</li>
					<li class="list__item">
						<a href="#" class="list__item-link">
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
							<h4 class="list__item-title">Great Opening</h4>
							<p class="list__item-text">
								We are going to open next week!
							</p>
						</a>
					</li>
				</ul>
			</div>
		</section>
	</div>

	<?php include("../app/include/footer.php"); ?>

	<script src="./js/index.min.js"></script>
</body>

</html>