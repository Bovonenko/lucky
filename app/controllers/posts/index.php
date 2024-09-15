<?php

$title = 'My Blog :: Home';

/** @var \myfrm\Db $db */

$db = \myfrm\App::get(\myfrm\Db::class);
$lang = get_lang();


$posts = $db->query("SELECT p.slug, p.created_at, pt.title, pt.body FROM posts p JOIN post_translations pt ON p.id = pt.post_id WHERE pt.language_code = ? ORDER BY p.created_at DESC", [$lang])->findAll();

// $posts = $db->query("SELECT * FROM posts ORDER BY id DESC LIMIT $start, $per_page")->findAll();
//$recent_posts = $db->query("SELECT * FROM posts ORDER BY id DESC LIMIT 3")->findAll();
// $recent_posts = db()->query("SELECT * FROM posts ORDER BY id DESC LIMIT 3")->findAll();

require_once VIEWS . '/posts/index.tpl.php';
