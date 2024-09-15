<?php
$translation_header = [
	'en' => [
		'home' => 'Home',
		'blog' => 'Blog',
		'about' => 'About Us',
		'contact' => 'Contact us',
	],
	'cs' => [
		'home' => 'Domů',
		'blog' => 'Blog',
		'about' => 'O nás',
		'contact' => 'Kontaktujte nás',
	],
	'ru' => [
		'home' => 'Главная',
		'blog' => 'Блог',
		'about' => 'О нас',
		'contact' => 'Связаться с нами',
	],
	'uk' => [
		'home' => 'Головна',
		'blog' => 'Блог',
		'about' => 'Про нас',
		'contact' => 'Зв\'яжіться з нами',
	],
]
?>


<header id="header" class="header">
	<div class="header__container">
		<a href="/" class="header__logo">
			<img src="./img/header/logo.svg" alt="logo" />
		</a>
		<div
			aria-controls="menu"
			aria-expanded="false"
			class="menu__toggle">
			<span></span>
			<span></span>
			<span></span>
		</div>
		<nav class="header__menu">
			<ul id="menu" class="menu">
				<li class="menu__item">
					<a href="/" class="menu__link"><?= $translation_header[$_SESSION['lang']]['home'] ?></a>
				</li>
				<li class="menu__item">
					<a href="/#about" class="menu__link"> <?= $translation_header[$_SESSION['lang']]['blog'] ?> </a>
				</li>
				<li class="menu__item">
					<a href="/#about" class="menu__link">
						<?= $translation_header[$_SESSION['lang']]['about'] ?>
					</a>
				</li>
				<li class="menu__item">
					<a href="/#footer" class="menu__link">
						<?= $translation_header[$_SESSION['lang']]['contact'] ?>
					</a>
				</li>
				<li class="menu__item menu__item-social">
					<a
						target="_blank"
						rel="noopener noreferrer"
						href="https://www.facebook.com/profile.php?id=100089614073082">
						<svg
							width="25"
							height="25"
							viewBox="0 0 30 30"
							xmlns="http://www.w3.org/2000/svg"
							fill="white">
							<path
								d="M25.6055 0L4.39453 0C1.97159 0 0 1.97159 0 4.39453L0 25.6055C0 28.0284 1.97159 30 4.39453 30L13.2422 30L13.2422 19.3945L9.72656 19.3945L9.72656 14.1211H13.2422V10.5469C13.2422 7.63893 15.6077 5.27344 18.5156 5.27344L23.8477 5.27344V10.5469H18.5156L18.5156 14.1211H23.8477L22.9687 19.3945H18.5156V30H25.6055C28.0284 30 30 28.0284 30 25.6055L30 4.39453C30 1.97159 28.0284 0 25.6055 0Z" />
						</svg>
					</a>
				</li>
			</ul>
		</nav>
	</div>
	<div class="menu__overlay"></div>
</header>