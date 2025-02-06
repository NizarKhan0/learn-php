<?php
    // echo 'Hello World';

    // ini dah ganti guna helper
    // require '../views/home-view.php';

    require '../helpers.php';
    // require 'c:\laragon\www\learn-php\source-1\php-mvc-project\helpers.php';


    // require basePath('views/home-view.php');
    // loadView('home-view');

    $routes = [
        '/' => 'controllers/home-view.php',
        '/listings' => 'controllers/listings/index.php',
        '/listings/create' => 'controllers/listings/create.php',
        '404' => 'controllers/error/404.php'
    ];

    $uri = $_SERVER['REQUEST_URI'];

    if (array_key_exists($uri, $routes)) {
        $fullPath = basePath($routes[$uri]);
        if (file_exists($fullPath)) {
            require $fullPath;
        } else {
            echo "File not found: " . $fullPath;
        }
    } else {
        $fullPath = basePath($routes['404']);
        if (file_exists($fullPath)) {
            require $fullPath;
        } else {
            echo "404 File not found: " . $fullPath;
        }
    }
?>