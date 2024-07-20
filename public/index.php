<?php error_reporting(E_ALL); ini_set('display_errors', 1);

use Core\Router;
use Core\Session;

const BASE_PATH = __DIR__ . "/../";

require_once BASE_PATH . 'vendor/autoload.php';

require_once BASE_PATH . "Core/helpers.php";

session_start();

require_once base_path("Bootstrap.php");

$router = new Router();

$method = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$routes = require_once base_path("routes.php");

$router->route($uri, $method);

Session::unflash();

//require_once base_path("router.php");

//$db = new Database($config, $config['db']['credentials']['user'], $config['db']['credentials']['password']);








/* spl_autoload_register(function ($class) {
    $class = str_replace('\\', DIRECTORY_SEPARATOR , $class);

    require_once base_path("{$class}.php");
}); */