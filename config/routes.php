<?php

/** @var $router */

const MIDDLEWARE = [
    'auth' => \myfrm\middleware\Auth::class,
    'guest' => \myfrm\middleware\Guest::class,
];


// Home
$router->get('', 'main.php');
$router->get('(?P<lang>ru|en)', 'main.php');

// Posts
// all posts
$router->get('posts', 'posts/index.php');
$router->get('(?P<lang>[a-z-]+)/posts', 'posts/index.php');

// single post
$router->get('posts/(?P<slug>[a-z0-9-]+)', 'posts/show.php');
$router->get('(?P<lang>[a-z-]+)/posts/(?P<slug>[a-z0-9-]+)', 'posts/show.php');

// Gallery
$router->get('gallery', 'gallery/index.php');
$router->get('(?P<lang>[a-z-]+)/gallery', 'gallery/index.php');

// single gallery folder
$router->get('gallery/(?P<folder>[a-z0-9-]+)', 'gallery/show.php');
$router->get('(?P<lang>[a-z-]+)/gallery/(?P<folder>[a-z0-9-]+)', 'gallery/show.php');
// <?php

// /** @var $router */

// const MIDDLEWARE = [
//     'auth' => \myfrm\middleware\Auth::class,
//     'guest' => \myfrm\middleware\Guest::class,
// ];


// // Home
// $router->get('', 'main.php');
// $router->get('(?P<lang>ru|en)', 'main.php');

// // Posts
// // all posts
// $router->get('posts', 'posts/index.php');
// $router->get('(?P<lang>[a-z-]+)/posts', 'posts/index.php');

// // single post
// $router->get('posts/(?P<slug>[a-z0-9-]+)', 'posts/show.php');
// $router->get('(?P<lang>[a-z-]+)/posts/(?P<slug>[a-z0-9-]+)', 'posts/show.php');

// // Gallery
// $router->get('gallery', 'gallery/index.php');
// $router->get('(?P<lang>[a-z-]+)/gallery', 'gallery/index.php');

// // single gallery folder
// $router->get('gallery/(?P<folder>[a-z0-9-]+)', 'gallery/show.php');
// $router->get('(?P<lang>[a-z-]+)/gallery/(?P<folder>[a-z0-9-]+)', 'gallery/show.php');
