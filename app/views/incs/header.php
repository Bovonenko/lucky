<?php
$translation_header = [
	'en' => [
		'home' => 'Home',
		'blog' => 'Blog',
		'about' => 'About Us',
		'contact' => 'Contact us',
		'lang' => 'Language',
		'lang_name' => 'English',
	],
	'cs' => [
		'home' => 'Domů',
		'blog' => 'Blog',
		'about' => 'O nás',
		'contact' => 'Kontaktujte nás',
		'lang' => 'Jazyk',
		'lang_name' => 'Česky',
	],
	'ru' => [
		'home' => 'Главная',
		'blog' => 'Блог',
		'about' => 'О нас',
		'contact' => 'Связаться с нами',
		'lang' => 'Язык',
		'lang_name' => 'Русский',
	],
]
?>


<header id="header" class="header">
	<div class="header__container">
		<a href="<?= get_lang_path() . '/' ?>" class="header__logo">
			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0" y="0" viewBox="0.4826754331588745 4.400000095367432 47.012569427490234 39.19999694824219" enable-background="new 0 0 48 48" xml:space="preserve" height="40" width="40" class="icon-icon-0" data-fill-palette-color="accent" id="icon-0">
				<g fill="#ffffff" data-fill-palette-color="accent">
					<path fill="#ffffff" d="M46.3 35.3L29.1 7.7C27.8 5.5 26 4.4 24 4.4S20.2 5.6 18.9 7.7L1.7 35.3C0.4 37.4 0.1 39.5 1 41.1S3.8 43.6 6.3 43.6H41.6C44.1 43.6 46 42.7 46.9 41.1 47.9 39.5 47.6 37.4 46.3 35.3M45.3 40.2C44.8 41.2 43.5 41.7 41.7 41.7H6.3C4.6 41.7 3.3 41.2 2.7 40.2 2.2 39.2 2.4 37.8 3.3 36.4L20.6 8.7C21.5 7.2 22.8 6.3 24 6.3 25.3 6.3 26.5 7.1 27.4 8.7L44.6 36.3C45.6 37.8 45.8 39.2 45.3 40.2" data-fill-palette-color="accent"></path>
					<circle fill="#ffffff" cx="24" cy="35.2" r="5.8" data-fill-palette-color="accent"></circle>
					<circle fill="#ffffff" cx="35.5" cy="35.2" r="5.8" data-fill-palette-color="accent"></circle>
					<circle fill="#ffffff" cx="24" cy="15.2" r="5.8" data-fill-palette-color="accent"></circle>
					<circle fill="#ffffff" cx="18.2" cy="25.2" r="5.8" data-fill-palette-color="accent"></circle>
					<circle fill="#ffffff" cx="29.8" cy="25.2" r="5.8" data-fill-palette-color="accent"></circle>
					<circle fill="#ffffff" cx="12.5" cy="35.2" r="5.8" data-fill-palette-color="accent"></circle>
				</g>
			</svg>
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
					<a href="<?= get_lang_path() . '/' ?>" class="menu__link"><?= $translation_header[$_SESSION['lang']]['home'] ?></a>
				</li>
				<li class="menu__item">
					<a href="<?= PATH . get_lang_path() . '/posts' ?>" class="menu__link"> <?= $translation_header[$_SESSION['lang']]['blog'] ?> </a>
				</li>
				<li class="menu__item">
					<a href="<?= get_lang_path() . '/#about' ?>" class="menu__link">
						<?= $translation_header[$_SESSION['lang']]['about'] ?>
					</a>
				</li>
				<li class="menu__item">
					<a href="<?= get_lang_path() . '/#footer' ?>" class="menu__link">
						<?= $translation_header[$_SESSION['lang']]['contact'] ?>
					</a>
				</li>
				<li class="menu__item">
					<span slot="tooltip-content">

					</span>

					<div class="language-dropdown">
						<button class="language-btn">
							<svg slot="icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24px" fill="currentColor">
								<path d="M480-80q-82 0-155-31.5t-127.5-86Q143-252 111.5-325T80-480q0-83 31.5-155.5t86-127Q252-817 325-848.5T480-880q83 0 155.5 31.5t127 86q54.5 54.5 86 127T880-480q0 82-31.5 155t-86 127.5q-54.5 54.5-127 86T480-80Zm0-82q26-36 45-75t31-83H404q12 44 31 83t45 75Zm-104-16q-18-33-31.5-68.5T322-320H204q29 50 72.5 87t99.5 55Zm208 0q56-18 99.5-55t72.5-87H638q-9 38-22.5 73.5T584-178ZM170-400h136q-3-20-4.5-39.5T300-480q0-21 1.5-40.5T306-560H170q-5 20-7.5 39.5T160-480q0 21 2.5 40.5T170-400Zm216 0h188q3-20 4.5-39.5T580-480q0-21-1.5-40.5T574-560H386q-3 20-4.5 39.5T380-480q0 21 1.5 40.5T386-400Zm268 0h136q5-20 7.5-39.5T800-480q0-21-2.5-40.5T790-560H654q3 20 4.5 39.5T660-480q0 21-1.5 40.5T654-400Zm-16-240h118q-29-50-72.5-87T584-782q18 33 31.5 68.5T638-640Zm-234 0h152q-12-44-31-83t-45-75q-26 36-45 75t-31 83Zm-200 0h118q9-38 22.5-73.5T376-782q-56 18-99.5 55T204-640Z" />
							</svg>
							<span class="language-selected"><?= $translation_header[$_SESSION['lang']]['lang_name'] ?></span>
						</button>
						<div class="language-options">
							<a href="<?= PATH . '/' ?>">Česky</a>
							<a href="<?= PATH . '/en' . '/' ?>">English</a>
							<a href="<?= PATH . '/ru' . '/' ?>">Русский</a>
						</div>
					</div>

				</li>
			</ul>
		</nav>
	</div>
	<div class="menu__overlay"></div>
</header>