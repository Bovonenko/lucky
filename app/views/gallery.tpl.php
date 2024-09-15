<?php

$translation_main = [
    'en' => [],
    'ru' => [],
    'cs' => [],
    'uk' => [
        'general' => [
            'link' => 'Детальніше >'
        ],
        'promo' => [
            'header' => 'Ласкаво просимо до клубу Lucky Ball Billiard!',
            'date' => '23 травня 2022',
            'text' => 'Чи ви є шанувальником більярду, чи просто шукаєте чудове місце для відпочинку з друзями, у нас є все, що вам потрібно для веселої та спокійної гри.',
        ],
        'posts' => [
            'featured' => 'Рекомендований пост',
            'latest' => 'Останні пости',
            'all' => 'Переглянути всі',
        ],
        'about' => [
            'label' => 'ПРО НАС',
            'title' => 'Ми пропонуємо дружню атмосферу для гри в більярд',
            'text' => 'Завдяки навчанням, регулярним турнірам і дружній атмосфері ми раді зробити більярд доступним та захоплюючим для всіх.',
            'mission' => 'НАША МІСІЯ',
            'mission_title' => 'Ми прагнемо створити спокійне та приємне місце.',
            'mission_text' => 'Наша місія — створити гостинну та приємну атмосферу для любителів більярду будь-якого рівня майстерності. Ми пропонуємо різноманітні послуги, зокрема найкращі більярдні столи, професійне навчання, бар і регулярні турніри.',
        ],
        'categories' => [
            'title' => 'Ми пропонуємо різноманітні послуги',
            'items' => [
                [
                    'title' => 'Якісні столи',
                    'text' => 'Грайте на нових столах для піраміди, пулу та снукеру.',
                ],
                [
                    'title' => 'Навчання',
                    'text' => 'Навчайтеся у наших досвідчених тренерів з понад 10-річним досвідом, доступних у вихідній школі більярду.',
                ],
                [
                    'title' => 'Бар',
                    'text' => 'Розслабтеся та насолодіться напоями в нашому барі з широким вибором напоїв та закусок.',
                ],
                [
                    'title' => 'Турніри',
                    'text' => 'Беріть участь у наших регулярних турнірах і змагайтеся з іншими гравцями за можливість виграти призи.',
                ],
            ],
        ],
        'special' => [
            'label' => 'Чому ми почали',
            'title' => 'Lucky Ball',
            'text' => 'Клуб Lucky Ball Billiard виник з простої ідеї – створити найкраще місце для більярду в Празі. Ми хотіли створити простір, де будь-хто, від початківців до досвідчених гравців, міг би насолодитися грою. З цим баченням ми тепер пропонуємо привітну та дружню атмосферу для всіх любителів більярду.',
            'link' => 'Дізнайтеся нашу історію >',
        ],
        'testimonials' => [
            'title' => 'Що про нас кажуть',
        ],
    ],
];

?>

<!DOCTYPE html>
<html lang="<?= $_SESSION['lang'] ?>">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= $title ?? 'TITLE' ?></title>
    <base href="<?= PATH ?>/">
    <link rel="stylesheet" href="./css/style.min.css?_v=20240906154910" />
    <style>

    </style>
</head>

<body>
    <?php include("incs/header.php"); ?>

    <section class="promo">
        <div class="promo__container">
            <div class="promo__wrapper">

                <h1 class="promo__header">
                    <?= $translation_main[$_SESSION['lang']]['promo']['header'] ?>
                </h1>

                <p class="promo__text">
                    <?= $translation_main[$_SESSION['lang']]['promo']['text'] ?>
                </p>

            </div>
        </div>
    </section>

    <section class="posts">
        <div class="posts__container">
            <div class="posts__featured">

                <div class="post">
                    <img
                        class="post__img"
                        src="./img/promo/bg.webp"
                        alt="Featured Post Image" />
                    <div class="post__content-wrapper">
                        <p class="signature post__signature">
                            <span class="signature__date">
                                &#128197; <?= convert_date($post['created_at']) ?>
                            </span>
                        </p>
                        <h3 class="post__header">
                            <?= $post['title'] ?>
                        </h3>
                        <div class="post__text">
                            <?= $post['body'] ?>
                        </div>
                    </div>
                    <a href="<?= PATH . get_lang_path() . '/posts' . '/' . $post['slug'] ?>" class="link post__link">
                        <?= $translation_main[$_SESSION['lang']]['general']['link'] ?>
                    </a>
                </div>
            </div>
            <div class="posts__all">
                <div class="posts__label-wrapper">
                    <h2 class="posts__label-title">
                        <?= $translation_main[$_SESSION['lang']]['posts']['latest'] ?>
                    </h2>
                    <a class="posts__label-link" href="<?= PATH . get_lang_path() . '/posts' ?>">
                        <?= $translation_main[$_SESSION['lang']]['posts']['all'] ?>
                    </a>
                </div>
                <?php foreach ($posts as $post) : ?>
                    <a href="<?= PATH . get_lang_path() . '/posts' . '/' . $post['slug'] ?>" class="post__preview-wrapper">
                        <div class="post__preview">
                            <p class="signature post__signature_preview">
                                <span class="signature__date">
                                    &#128197; <?= convert_date($post['created_at']) ?>
                                </span>
                            </p>
                            <h4 class="post__header_preview">
                                <?= $post['title'] ?>
                            </h4>
                        </div>
                    </a>
                <?php endforeach; ?>
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
                <h6 class="about__label">
                    <?= $translation_main[$_SESSION['lang']]['about']['label'] ?>
                </h6>
                <h2 class="about__header">
                    <?= $translation_main[$_SESSION['lang']]['about']['title'] ?>
                </h2>
                <p class="about__text about__text-main">
                    <?= $translation_main[$_SESSION['lang']]['about']['text'] ?>
                </p>

            </div>
            <div class="about__divider"></div>
            <div class="about__text-wrapper">
                <h6 class="about__label">
                    <?= $translation_main[$_SESSION['lang']]['about']['mission'] ?>
                </h6>
                <h3 class="about__header">
                    <?= $translation_main[$_SESSION['lang']]['about']['mission_title'] ?>
                </h3>
                <p class="about__text about__text-secondary">
                    <?= $translation_main[$_SESSION['lang']]['about']['mission_text'] ?>
                </p>
            </div>
        </div>
    </section>

    <section class="categories" id="categories">
        <div class="categories__container">
            <h2 class="categories__header">
                <?= $translation_main[$_SESSION['lang']]['categories']['title'] ?>
            </h2>
            <ul class="categories__list">
                <?php foreach ($translation_main[$_SESSION['lang']]['categories']['items'] as $index => $item) : ?>
                    <li class="categories__item">
                        <div class="categories__img">
                            <?= $category_images[$index] ?>
                        </div>
                        <h3 class="categories__title">
                            <?= $item['title'] ?>
                        </h3>
                        <p class="categories__text">
                            <?= $item['text'] ?>
                        </p>
                    </li>
                <?php endforeach; ?>
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
                <h6 class="special__label">
                    <?= $translation_main[$_SESSION['lang']]['special']['label'] ?>
                </h6>
                <h2 class="special__header">
                    <?= $translation_main[$_SESSION['lang']]['special']['title'] ?>
                </h2>
                <p class="special__text special__text-main">
                    <?= $translation_main[$_SESSION['lang']]['special']['text'] ?>
                </p>

            </div>
        </div>
    </section>


    <?php include("incs/footer.php"); ?>

    <script src="./js/index.min.js?_v=20240906154910"></script>
</body>

</html>