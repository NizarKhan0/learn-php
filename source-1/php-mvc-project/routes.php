<?php

//Homepage
$router->get('/', 'HomeController@index');

//Job Listings
$router->get('/listings', 'ListingController@index');
$router->get('/listings/create', 'ListingController@create');
$router->get('/listings/{id}', 'ListingController@show');
$router->post('/listings', 'ListingController@store');
$router->delete('/listings/{id}', 'ListingController@destroy');

?>