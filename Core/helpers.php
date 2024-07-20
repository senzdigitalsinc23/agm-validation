<?php


function dd($value) {
    echo "<pre>";
        var_dump($value);
    echo "</pre>";

    exit;
}

function urlIs($value){
    return $_SERVER['REQUEST_URI'] === $value;
}

function abort($code = Core\Response::NOT_FOUND){
    http_response_code($code);

    require_once base_path("views/errors/") . $code . ".view.php";

    die();
}

function authorize($condition, $statusCode = Core\Response::FORBIDDEN){
    if (!$condition) {
        abort($statusCode);
    }
}

function esc($value = '') {
    return htmlspecialchars($value) ?? "";
}

function base_path($path){
    return BASE_PATH . $path;
}

function view($view, $params = []){
    extract($params);

    require_once base_path("views/" . $view . ".view.php");
}

function redirect($path){
    header("Location: {$path}");
    exit;
}

function authenticated() {
    if (isset($_SESSION['USER'])) {
        return true;
    }

    return false;
}