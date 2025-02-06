<?php
    // require 'c:\laragon\www\learn-php\source-1\php-mvc-project\helpers.php';
    require '../helpers.php';
    require basePath('Database.php');
    require basePath('Router.php');

    //Instiate router
    $router = new Router();

    //Get routes
    $routes = require basePath('routes.php');

    //Get current URI & HTTP method 
    $uri = $_SERVER['REQUEST_URI'];
    $method = $_SERVER['REQUEST_METHOD'];
    // inspect($uri);
    // inspect($method);

    //Route the request
    $router->route($uri, $method);
?>