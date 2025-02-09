<?php
// bole gunakan namespace sebab dah declare guna autoload composer
namespace App\Controllers;

use Framework\Database;
use Framework\Validation;

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
        //test custom validation
        // inspectAndDie(Validation::string('nizar', 2));
        // inspectAndDie(Validation::email('nizarkhan7071@gmail.com'));
        // inspectAndDie(Validation::matches('7', '7'));

        $listings = $this->db->query("SELECT * FROM job_listings")->fetchAll();

        // inspect($listings);

        loadView('listings/index', [
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
        loadView('listings/create');
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

        loadView('listings/show', [
            'listing' => $listings
        ]);
    }

    /**
     * Store a listing
     * 
     * @return void
     */

    public function store()
    {
        // title & etc tu nama dia array_key
        $allowedFields = [
            'title',
            'description',
            'salary',
            'tags',
            'company',
            'address',
            'city',
            'state',
            'phone',
            'email',
            'requirements',
            'benefits',
        ];

        $newListingData = array_intersect_key($_POST, array_flip($allowedFields));

        $newListingData['user_id'] = 1;

        $newListingData = array_map('sanitize', $newListingData);

        $requiredFields = [
            'title',
            'description',
            'city',
            'state',
            'email',
            'salary',
        ];

        $errors = [];

        foreach ($requiredFields as $field) {
            if (empty($newListingData[$field]) || !Validation::string($newListingData[$field])) {
                $errors[$field] = ucfirst($field) . ' is required';
            }
        }

        if (!empty($errors)) {
            //Reload view with errors
            loadView('listings/create', [
                'errors' => $errors,
                'listing' => $newListingData,
            ]);
        } else {
            //Submit data 
            
            // $this->db->query('INSERT INTO job_listings (title, description, salary, etc)
            $fields = [];
            
             foreach($newListingData as $field => $value) {
                $fields[] = $field;    
             }

             //implode is array to string
             $fields = implode(', ', $fields);


             // VALUES :title, :description, :salary, etc)
             $values = [];

             foreach($newListingData as $field => $value) {
                //convert empty strings to null
                if($value === '') {
                    $newListingData[$field] = null;
                }
                $values[] = ':' . $field;
             }

             $values = implode(', ', $values);

             $query = "INSERT INTO job_listings ({$fields}) VALUES ({$values})";

             $this->db->query($query, $newListingData);

             redirect('/listings');
             exit;
        }

    }
}
?>