<?php
include("../app/path.php");
include("../app/controllers/posts.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Test</title>
    <link rel="stylesheet" href="./css/style.min.css?_v=20240906154910" />
</head>

<body>
    <?php include("../app/include/header.php"); ?>


    <div class="sections-wrapper">
        <section class="list">
            <div class="list__container">
                <h2 class="list__label">Latest Posts</h2>
                <ul class="list__items-wrapper">
                    <?php foreach ($posts as $post) : ?>
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
                                <h4 class="list__item-title"><?= $post['title'] ?></h4>
                                <p class="list__item-text">
                                    <?= $post['body'] ?>
                                </p>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </section>
    </div>

    <?php include("../app/include/footer.php"); ?>

    <script src="./js/index.min.js?_v=20240906154910"></script>
</body>

</html>