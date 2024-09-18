<?php
$translation_500 = [
    'en' => [
        'error' => '500 - Server Error!',
    ],
    'cs' => [
        'error' => '500 - Chyba serveru!',
    ],
    'ru' => [
        'error' => '500 - Ошибка сервера!',
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
    <link rel="stylesheet" href="./css/style.min.css?_v=20240906154911" />
</head>

<body>
    <?php require VIEWS . '/incs/header.php' ?>

    <section>
        <h3><?= $translation_500[$_SESSION['lang']]['error'] ?></h3>
    </section>

    <?php require VIEWS . '/incs/footer.php' ?>

</body>

</html>