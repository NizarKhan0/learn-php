<?php
// bole gunakan namespace sebab dah declare guna autoload composer
namespace App\Controllers;

use Framework\Database;

class HomeController
{
    //declare ni supaya boleh guna $this->
    protected $db;

    public function __construct()
    {
        $config = require basePath('config/db.php');
        $this->db = new Database($config);
    }

    public function index()
    {
        // die('HomeController@index');
        $listings = $this->db->query("SELECT * FROM job_listings LIMIT 6")->fetchAll();

        // inspect($listings);

        loadView('home', [
            'listings' => $listings
        ]);
    }
}
?>