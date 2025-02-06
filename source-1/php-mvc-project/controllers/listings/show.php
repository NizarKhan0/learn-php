<?php

$config = require basePath('config/db.php');
$db = new Database($config);

$id = $_GET['id'] ?? null;
// inspect($id);

$params = [
    'id' => $id
];

$listings = $db->query("SELECT * FROM job_listings WHERE id = :id", $params)->fetch();
// inspect($listings);

loadView('listings/show-view', [
    'listing' => $listings
]);

?>