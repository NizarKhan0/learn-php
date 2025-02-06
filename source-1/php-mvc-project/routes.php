<?php


    $router->get('/', 'controllers/home-view.php');
    $router->get('/listings', 'controllers/listings/index.php');
    $router->get('/listings/create', 'controllers/listings/create.php');
    
?>