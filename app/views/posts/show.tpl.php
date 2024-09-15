<?php
$translation_show = [
    'en' => [
        'latest_posts' => 'Latest Posts',
    ],
    'cs' => [
        'latest_posts' => 'Poslední příspěvky',
    ],
    'ru' => [
        'latest_posts' => 'Последние посты',
    ],
    'uk' => [
        'latest_posts' => 'Останні пости',
    ],
]

?>

<!DOCTYPE html>
<html lang="<?= $_SESSION['lang'] ?>">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= $title ?? 'Post' ?></title>
    <base href="<?= PATH ?>/">
    <link rel="stylesheet" href="./css/style.min.css?_v=20240906154910" />
</head>

<body>
    <?php require VIEWS . '/incs/header.php' ?>

    <div class="sections-wrapper">
        <section class="single">
            <div class="single__container">
                <div class="single__main">
                    <div class="post">
                        <img
                            class="post__img"
                            src="./img/promo/bg.webp"
                            alt="Featured Post Image" />
                        <p class="signature post__signature">
                            &#128197;
                            <span class="signature__date"><?php echo convert_date($post['created_at']) ?></span>
                        </p>
                        <h3 class="post__header">
                            <?php echo $post['title'] ?>
                        </h3>
                        <div class="post__text">
                            <?php echo $post['body'] ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="list">
            <div class="list__container">
                <h2 class="list__label"><?= $translation_show[$_SESSION['lang']]['latest_posts'] ?></h2>
                <ul class="list__items-wrapper">
                    <?php foreach ($posts as $post) : ?>
                        <li class="list__item">
                            <a href="<?= PATH . get_lang_path() . '/posts' . '/' . $post['slug'] ?>" class="list__item-link">
                                <img
                                    class="post__img"
                                    src="./img/promo/bg.webp"
                                    alt="Featured Post Image" />
                                <p class="signature post__signature">
                                    &#128197; <span class="signature__date"><?= convert_date($post['created_at']) ?></span>
                                </p>
                                <h4 class="list__item-title"><?= $post['title'] ?></h4>
                                <div class="list__item-text">
                                    <?= $post['body'] ?>
                                </div>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </section>
    </div>

    <?php require VIEWS . '/incs/footer.php' ?>


</body>

</html>