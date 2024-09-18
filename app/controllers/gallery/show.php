<?php

$lang = get_lang();
$folder = route_param('folder');
$images = get_gallery_images($folder);

$title = "Gallery:: All Images";

require_once VIEWS . '/gallery/show.tpl.php';
