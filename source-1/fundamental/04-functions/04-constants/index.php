<?php

define('APP_NAME', 'My App');
define('APP_VERSION', '1.0.0');

// echo APP_NAME;

const DB_NAME = 'mydb';
const DB_HOST = 'localhost';

// echo DB_NAME;

function run(){
    echo APP_VERSION;
    echo DB_HOST;
}

run();

?>