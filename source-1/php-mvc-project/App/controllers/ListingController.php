<?php
// bole gunakan namespace sebab dah declare guna autoload composer
namespace App\Controllers;

use Framework\Database;

class ListingController
{
    //declare ni supaya boleh guna $this->
    protected $db;

    public function __construct()
    {
        $config = require basePath('config/db.php');
        $this->db = new Database($config);
    }

    /**
     * Show all listings
     * 
     * @return void
     */

    public function index()
    {
        $listings = $this->db->query("SELECT * FROM job_listings")->fetchAll();

        // inspect($listings);

        loadView('listings/index-view', [
            'listings' => $listings,
        ]);
    }

    /**
     * Create a listing
     * 
     * @return void
     */

    public function create()
    {
        loadView('listings/create-view');
    }

    /**
     * Show a single listing
     * 
     * @return void
     */

    public function show($params)
    {
        $id = $params['id'] ?? null;
        // inspect($id);

        $params = [
            'id' => $id
        ];

        $listings = $this->db->query("SELECT * FROM job_listings WHERE id = :id", $params)->fetch();
        // inspect($listings);

        //Check if listing exists
        if (!$listings) {
            ErrorController::notFound('Listing not found.');
            return;
        }

        loadView('listings/show-view', [
            'listing' => $listings
        ]);
    }
}
?>