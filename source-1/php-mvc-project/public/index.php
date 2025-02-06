<?php

require __DIR__ . '/../vendor/autoload.php';
// require 'c:\laragon\www\learn-php\source-1\php-mvc-project\helpers.php';
require '../helpers.php';

use Framework\Router;

    // require basePath('Framework/Database.php');
    // require basePath('Framework/Router.php');
//custom autoload jadi dah tak perlu require macam nijust declare je apa2 class sebab dia dynamic varibale $class tu
// spl_autoload_register(function ($class) {

//     $path = basePath('Framework/' . $class . '.php');
//     if (file_exists($path)) {
//         require $path;
//     }
// });

//Instiate router
$router = new Router();

//Get routes
$routes = require basePath('routes.php');

//Get current URI & HTTP method pars_url tu utk elakkan parameter id/etc dalam URL
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$method = $_SERVER['REQUEST_METHOD'];
// inspect($uri);
// inspect($method);

//Route the request
$router->route($uri, $method);
?>