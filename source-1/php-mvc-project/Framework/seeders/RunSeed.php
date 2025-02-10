<?php

//kena tambah level dekat vednor ni sbb seeder dalam lagi dari folder framework
require __DIR__ . '/../../vendor/autoload.php';

use Framework\Database;
use Framework\Seeders\UserTableSeeder;

// Database configuration
$config = [
    'host' => 'localhost',
    'port' => '3306',
    'dbname' => 'job_listings',
    'username' => 'root',
    'password' => '',
];

// Initialize the Database instance
$db = new Database($config);

// Run the UsersTableSeeder
$seeder = new UserTableSeeder($db);
$seeder->run();