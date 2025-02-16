<?php ini_set('display_errors', 0); error_reporting(E_ALL); 

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

Session::unflash('login');

