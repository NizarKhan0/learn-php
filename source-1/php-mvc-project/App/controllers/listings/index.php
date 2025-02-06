<?php

use Framework\Database;

    // echo 'Listings';
    $config = require basePath('config/db.php');
    $db = new Database($config);
    
    $listings = $db->query("SELECT * FROM job_listings LIMIT 6")->fetchAll();
    
    // inspect($listings);
    
    loadView('listings/index-view',[
        'listings' => $listings,
    ]);
?>