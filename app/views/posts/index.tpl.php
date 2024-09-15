<?php
$translation_posts = [
    'en' => [
        'all_posts' => 'All Posts',
    ],
    'cs' => [
        'all_posts' => 'Všechny příspěvky',
    ],
    'ru' => [
        'all_posts' => 'Все посты',
    ],
    'uk' => [
        'all_posts' => 'Усі пости',
    ],
]

?>

<!DOCTYPE html>
<html lang="<?= $_SESSION['lang'] ?>">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= $title ?? 'Posts' ?></title>
    <base href="<?= PATH ?>/">
    <link rel="stylesheet" href="./css/style.min.css?_v=20240906154910" />
</head>

<body>
    <?php require VIEWS . '/incs/header.php' ?>


    <div class="sections-wrapper">
        <section class="list">
            <div class="list__container">
                <h2 class="list__label"><?= $translation_posts[$_SESSION['lang']]['all_posts'] ?></h2>
                <ul class="list__items-wrapper">
                    <?php foreach ($posts as $post) : ?>
                        <li class="list__item">
                            <a href="<?= PATH . get_lang_path() . '/posts' . '/' . $post['slug'] ?>" class="list__item-link">
                                <img
                                    class="post__img"
                                    src="./img/promo/bg.webp"
                                    alt="Featured Post Image" />
                                <p class="signature post__signature">
                                    <span class="signature__date">&#128197; <?= convert_date($post['created_at']) ?></span>
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