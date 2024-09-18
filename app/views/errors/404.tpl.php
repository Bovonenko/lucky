<?php
$lang = get_lang();
$translation_404 = [
    'en' => [
        'header' => '404 - Page not found!',
        'text' => 'The page you\'ve requested can not be displayed. It appears you\'ve missed your intended destination, either through a bad or outdated link, or a typo in the page you were hoping to reach.',
        'link' => 'Back to home',
    ],
    'cs' => [
        'header' => '404 - Stránka nenalezena!',
        'text' => 'Požadovaná stránka nebyla nalezena.',
        'link' => 'Zpět na domovskou stránku',
    ],
    'ru' => [
        'header' => '404 - Страница не найдена!',
        'text' => 'Запрошенная страница не существует. Это бывает, если вы набрали неправильный адрес либо перешли по устаревшей ссылке.',
        'link' => 'На главную',
    ],
]

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= $title ?? 'TITLE' ?></title>
    <base href="<?= PATH ?>/">
    <link rel="stylesheet" href="./css/style.min.css?_v=20240906154910" />
</head>

<body>
    <?php require VIEWS . '/incs/header.php' ?>

    <section class="promo">
        <div class="promo__container">
            <div class="promo__wrapper"></div>
        </div>
    </section>


    <section class="error">
        <div class="error__container" style="display: grid; place-items: center">
            <h1>
                <?= $translation_404[$_SESSION['lang']]['header'] ?>
            </h1>

            <p class="promo__text">
                <?= $translation_404[$_SESSION['lang']]['text'] ?>
            </p>

            <a href="<?= PATH . get_lang_path() ?>/" class="error-link">
                <?= $translation_404[$_SESSION['lang']]['link'] ?>
            </a>
        </div>
    </section>

    <?php require VIEWS . '/incs/footer.php' ?>

</body>

</html>