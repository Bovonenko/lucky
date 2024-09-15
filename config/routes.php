<?php

/** @var $router */

const MIDDLEWARE = [
    'auth' => \myfrm\middleware\Auth::class,
    'guest' => \myfrm\middleware\Guest::class,
];


// Home
$router->get('lucky', 'main.php');
$router->get('lucky/(?P<lang>ru|en)', 'main.php');
// $router->get('lucky/(?P<lang>[a-z-]+)', 'main.php');

// Posts
// all posts
$router->get('lucky/posts', 'posts/index.php');
$router->get('lucky/(?P<lang>[a-z-]+)/posts', 'posts/index.php');

// single post
$router->get('lucky/posts/(?P<slug>[a-z0-9-]+)', 'posts/show.php');
$router->get('lucky/(?P<lang>[a-z-]+)/posts/(?P<slug>[a-z0-9-]+)', 'posts/show.php');

// Posts
// $router->get('lucky/posts/create', 'posts/create.php')->only('auth');
// $router->get('lucky/posts/(?P<slug>[a-z0-9-]+)', 'posts/show.php');
// $router->post('lucky/posts', 'posts/store.php');
// $router->delete('lucky/posts', 'posts/destroy.php');

// Pages
// $router->get('lucky/about', 'about.php');
// $router->get('lucky/contact', 'contact.php');

// User
// $router->add('lucky/register', 'users/register.php', ['get', 'post'])->only('guest');
//$router->post('register', 'users/store.php')->only('guest');
// $router->add('lucky/login', 'users/login.php', ['get', 'post'])->only('guest');
// $router->get('lucky/logout', 'users/logout.php')->only('auth');

// dump($router->routes);
