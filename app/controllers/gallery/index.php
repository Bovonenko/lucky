<?php


$lang = get_lang();

$items = get_gallery_folders();

$folders = [];

foreach ($items as $item) {
    $folder_imgs = get_gallery_images($item);
    if (count($folder_imgs) === 0) {
        continue;
    }

    $preview = reset($folder_imgs);

    $folders[] = [
        'name' => $item,
        'images_count' => count($folder_imgs),
        'preview' => $preview,
    ];
}

$title = "Gallery:: All Images";

require_once VIEWS . '/gallery/index.tpl.php';
