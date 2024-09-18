<?php

$db = \myfrm\App::get(\myfrm\Db::class);

$title = 'Lucky Ball :: About';

$slug = 'grand-opening';

$lang = get_lang();

$posts = $db->query("SELECT p.slug, p.created_at, pt.title, pt.body FROM posts p JOIN post_translations pt ON p.id = pt.post_id WHERE pt.language_code = ? AND p.slug != ? ORDER BY p.created_at DESC LIMIT 5;", [$lang, $slug])->findAll();

$post = $db->query("SELECT p.slug, p.created_at, pt.title, pt.body FROM posts p JOIN post_translations pt ON p.id = pt.post_id WHERE pt.language_code = ? AND p.slug = ?;", [$lang, $slug])->findOrFail();

$images = get_gallery_images('all');

// $post = '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veniam, repudiandae iusto mollitia, natus repellendus excepturi obcaecati, dicta labore similique minima alias nostrum dolore soluta nam laborum eos inventore eum porro?</p>
// <p>Facere ullam aliquam, dolor perferendis corrupti veniam provident eligendi! Id veritatis corrupti sed adipisci consectetur labore debitis officiis, quasi ut obcaecati ea dolorum repudiandae repellendus aut aperiam? Quaerat, molestias eaque?</p>
// <p>Maiores exercitationem nostrum aperiam ea optio aspernatur fugiat odit corrupti molestiae nam nisi, pariatur natus iure, temporibus eos consequatur delectus suscipit esse doloremque voluptatem atque? Ipsa velit voluptatum est beatae.</p>';

// $recent_posts = $db->query("SELECT * FROM posts ORDER BY id DESC LIMIT 3")->findAll();

require_once VIEWS . '/main.tpl.php';
