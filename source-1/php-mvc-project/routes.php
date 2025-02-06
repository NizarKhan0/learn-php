<?php

//Homepage
$router->get('/', 'HomeController@index');

//Job Listings
$router->get('/listings', 'ListingController@index');
$router->get('/listings/create', 'ListingController@create');
$router->get('/listing', 'ListingController@show');

//Errors
$router->get('/error/404', 'ErrorController@error404');
$router->get('/error/403', 'ErrorController@error403');

?>