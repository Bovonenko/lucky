<?php

$db = \myfrm\App::get(\myfrm\Db::class);
// $id = $_GET['id'] ?? 1;
// dump($_GET);
$slug = route_param('slug');
$lang = get_lang();


$posts = $db->query("SELECT p.slug, p.created_at, pt.title, pt.body FROM posts p JOIN post_translations pt ON p.id = pt.post_id WHERE pt.language_code = ? AND p.slug != ? ORDER BY p.created_at DESC LIMIT 6;", [$lang, $slug])->findAll();

$post = $db->query("SELECT p.created_at, pt.title, pt.body FROM posts p JOIN post_translations pt ON p.id = pt.post_id WHERE pt.language_code = ? AND p.slug = ?;", [$lang, $slug])->findOrFail();



$title = "My Blog :: {$post['title']}";

require_once VIEWS . '/posts/show.tpl.php';
