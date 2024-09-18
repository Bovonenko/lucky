<?php
$translation_posts = [
    'en' => [
        'all_posts' => 'All Posts',
        'tooltip' => 'Back to main page',
    ],
    'cs' => [
        'all_posts' => 'Všechny příspěvky',
        'tooltip' => 'Zpět na úvodní stránku',
    ],
    'ru' => [
        'all_posts' => 'Все посты',
        'tooltip' => 'Вернуться на главную',
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
    <link rel="stylesheet" href="./css/style.min.css?_v=20240906154911" />
</head>

<body>
    <?php require VIEWS . '/incs/header.php' ?>


    <div class="sections-wrapper">
        <section class="list">
            <div class="list__container">
                <div class="list__head-wrapper">
                    <a href="<?= PATH . get_lang_path() ?>" title="<?= $translation_posts[$_SESSION['lang']]['tooltip'] ?>">
                        <svg width="40px" height="40px" viewBox="0 0 31 31" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M23.2498 15.4998C23.2498 15.7567 23.1477 16.0031 22.966 16.1848C22.7844 16.3664 22.538 16.4685 22.281 16.4685L11.0571 16.4685L15.2169 20.6264C15.307 20.7165 15.3784 20.8234 15.4272 20.9411C15.4759 21.0587 15.501 21.1849 15.501 21.3123C15.501 21.4396 15.4759 21.5658 15.4272 21.6835C15.3784 21.8011 15.307 21.9081 15.2169 21.9981C15.1268 22.0882 15.0199 22.1597 14.9022 22.2084C14.7845 22.2571 14.6584 22.2822 14.531 22.2822C14.4037 22.2822 14.2775 22.2571 14.1598 22.2084C14.0422 22.1597 13.9352 22.0882 13.8452 21.9981L8.03265 16.1856C7.94244 16.0956 7.87086 15.9887 7.82202 15.871C7.77319 15.7534 7.74805 15.6272 7.74805 15.4998C7.74805 15.3723 7.77319 15.2462 7.82202 15.1285C7.87086 15.0108 7.94244 14.9039 8.03265 14.8139L13.8452 9.00138C14.0271 8.81948 14.2738 8.71728 14.531 8.71728C14.7883 8.71728 15.035 8.81948 15.2169 9.00138C15.3988 9.18329 15.501 9.43001 15.501 9.68726C15.501 9.94451 15.3988 10.1912 15.2169 10.3731L11.0571 14.531L22.281 14.531C22.538 14.531 22.7844 14.6331 22.966 14.8147C23.1477 14.9964 23.2498 15.2428 23.2498 15.4998Z" fill="currentColor" />
                        </svg>
                    </a>
                    <h2 class="list__label"><?= $translation_posts[$_SESSION['lang']]['all_posts'] ?></h2>
                </div>
                <ul class="list__items-wrapper">
                    <?php foreach ($posts as $post) : ?>
                        <li class="list__item">
                            <a href="<?= PATH . get_lang_path() . '/posts' . '/' . $post['slug'] ?>" class="list__item-link">
                                <div class="list__img">
                                    <img src="./img/promo/bg.webp" />
                                </div>
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