<?php

function dump($data) {
    echo "<pre>";
    var_dump($data);
    echo "</pre>";
}

function print_arr($data) {
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}

function dd($data) {
    dump($data);
    die;
}

function abort($code = 404, $title = '404 - Not found') {
    http_response_code($code);
    require VIEWS . "/errors/{$code}.tpl.php";
    die;
}

function load($fillable = [], $post = true) {
    $load_data = $post ? $_POST : $_GET;
    $data = [];
    foreach ($fillable as $name) {
        if (isset($load_data[$name])) {
            if (!is_array($load_data[$name])) {
                $data[$name] = trim($load_data[$name]);
            } else {
                $data[$name] = $load_data[$name];
            }
        } else {
            $data[$name] = '';
        }
    }
    return $data;
}

function old($fieldname) {
    return isset($_POST[$fieldname]) ? h($_POST[$fieldname]) : '';
}

function h($str) {
    return htmlspecialchars($str, ENT_QUOTES);
}

function redirect($url = '') {
    if ($url) {
        $redirect = $url;
    } else {
        $redirect = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : PATH;
    }
    header("Location: {$redirect}");
    die;
}

function get_alerts() {
    if (!empty($_SESSION['success'])) {
        require_once VIEWS . '/incs/alert_success.php';
        unset($_SESSION['success']);
    }
    if (!empty($_SESSION['error'])) {
        require_once VIEWS . '/incs/alert_error.php';
        unset($_SESSION['error']);
    }
}

function db(): \myfrm\Db {
    return \myfrm\App::get(\myfrm\Db::class);
}

function check_auth() {
    return isset($_SESSION['user']);
}

function get_file_ext($file_name) {
    $file_ext = explode('.', $file_name);
    return end($file_ext);
}

function route_params(): array {
    return \myfrm\Router::$route_params;
}

function route_param(string $key, $default = null) {
    return \myfrm\Router::$route_params[$key] ?? $default;
}

function get_lang() {
    if (!route_param('lang') && !$_SESSION['lang']) {
        $_SESSION['lang'] = 'en';
    } elseif (route_param('lang')) {
        $_SESSION['lang'] = route_param('lang');
    }

    return $_SESSION['lang'];
}

function get_lang_path() {
    $lang = get_lang();
    if ($lang === 'cs') {
        return '';
    } else {
        return "/{$lang}";
    }
}

function convert_date($dateString) {
    $date = new DateTime($dateString);
    return $date->format('M j, Y');
}

function get_gallery_folders() {
    $folders = scandir(GALLERY);
    return array_diff($folders, ['.', '..', 'create_thumbnails.sh']);
}

function get_gallery_folder_items($folder) {
    $images = scandir(GALLERY . '/' . $folder);
    return array_diff($images, ['.', '..', 'create_thumbnails.sh']);
}

function get_gallery_images($folder) {
    $images = get_gallery_folder_items($folder);
    $image_pairs = [];
    foreach ($images as $image) {
        // Check if it's a small image or full image
        if (strpos($image, '-small') !== false) {
            // For small images, remove '-small' to get the base name and store it
            $baseName = str_replace('-small', '', $image);
            $image_pairs[$baseName]['small'] = $image;
        } else if (strpos($image, '-medium') !== false) {
            // For medium images, remove '-medium' to get the base name and store it
            $baseName = str_replace('-medium', '', $image);
            $image_pairs[$baseName]['medium'] = $image;
        } else {
            // For full images, use the base name directly
            $baseName = $image;
            $image_pairs[$baseName]['full'] = $image;
        }
    }
    return $image_pairs;
}
