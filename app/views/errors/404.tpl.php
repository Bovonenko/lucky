<?php
$translation_404 = [
    'en' => [
        'error' => '404 - Page not found!',
    ],
    'cs' => [
        'error' => '404 - Stránka nenalezena!',
    ],
    'ru' => [
        'error' => '404 - Страница не найдена!',
    ],
    'uk' => [
        'error' => '404 - Сторінка не знайдена!',
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

    <section>
        <h3><?= $translation_404[$_SESSION['lang']]['error'] ?></h3>
    </section>

    <?php require VIEWS . '/incs/footer.php' ?>

</body>

</html>