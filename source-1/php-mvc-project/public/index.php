<?php
    // echo 'Hello World';

    // ini dah ganti guna helper
    // require '../views/home-view.php';

    require '../helpers.php';
    // require 'c:\laragon\www\learn-php\source-1\php-mvc-project\helpers.php';

    // require basePath('views/home-view.php');
    // loadView('home-view');

    require basePath('Router.php');

    $router = new Router();

    $routes = require basePath('routes.php');

    $uri = $_SERVER['REQUEST_URI'];
    $method = $_SERVER['REQUEST_METHOD'];
    // inspect($uri);
    // inspect($method);

    $router->route($uri, $method);
?>