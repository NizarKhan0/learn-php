<?php
// bole gunakan namespace sebab dah declare guna autoload composer
namespace App\Controllers;

use Framework\Database;
use Framework\Session;
use Framework\Validation;
use Framework\Authorization;

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

        $listings = $this->db->query("SELECT * FROM job_listings ORDER BY created_at DESC")->fetchAll();

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
        // inspectAndDie(Session::get('user')['id']);

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

        //session key dari user
        $newListingData['user_id'] = Session::get('user')['id'];

        $newListingData = array_map('sanitize', $newListingData);

        $requiredFields = [
            'title',
            'description',
            'city',
            'state',
            'email',
            'salary',
            'phone',
        ];

        $errors = [];
        $numberFields = ['salary', 'phone'];

        foreach ($requiredFields as $field) {
            if (empty($newListingData[$field]) || !Validation::string($newListingData[$field])) {
                $errors[$field] = ucfirst($field) . ' is required';
            } elseif ($field === 'email' && !Validation::email($newListingData[$field])) {
                //gunakan elseif sebab masih ada condition selepas if biasa
                $errors[$field] = 'Email is not valid';
            } elseif (in_array($field, $numberFields) && !Validation::number($newListingData[$field])) {
                $errors[$field] = ucfirst($field) . ' must be a number';
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

            foreach ($newListingData as $field => $value) {
                $fields[] = $field;
            }

            //implode is array to string
            $fields = implode(', ', $fields);


            // VALUES :title, :description, :salary, etc)
            $values = [];

            foreach ($newListingData as $field => $value) {
                //convert empty strings to null
                if ($value === '') {
                    $newListingData[$field] = null;
                }
                $values[] = ':' . $field;
            }

            $values = implode(', ', $values);

            $query = "INSERT INTO job_listings ({$fields}) VALUES ({$values})";

            $this->db->query($query, $newListingData);

            // $_SESSION['success_message'] = 'Listing created successfully';
            Session::setFlashMessage('success_message', 'Listing created successfully');

            redirect('/listings');
            exit;
        }

    }

    /**
     * Delete a listing
     * @param array $params
     * @return void
     */
    public function destroy($params)
    {
        $id = $params['id'] ?? null;
        $params = [
            'id' => $id
        ];

        $listing = $this->db->query("SELECT * FROM job_listings WHERE id = :id", $params)->fetch();

        //Check if listing exists
        if (!$listing) {
            ErrorController::notFound('Listing not found.');
            return;
        }
        // inspectAndDie($listing);

        //Check if user is authorized to delete
        if (!Authorization::isOwner($listing->user_id)) {
            // $_SESSION['error_message'] = 'You are not authorized to delete this listing.';
            Session::setFlashMessage('error_message', 'You are not authorized to delete this listing.');
            return redirect('/listings/' . $listing->id);
        }

        //cara kedua
        // if(Session::get('user')['id'] !== $listing->user_id) {
        //     $_SESSION['error_message'] = 'You are not authorized to delete this listing.';
        //     return redirect('/listings/'. $listing->id);
        // }

        $this->db->query("DELETE FROM job_listings WHERE id = :id", $params);

        //Set flash message
        // $_SESSION['success_message'] = 'Listing deleted successfully';
        Session::setFlashMessage('success_message', 'Listing deleted successfully');

        redirect('/listings');
    }

    /**
     * Edit a listing
     * @param array $params
     * @return void
     */

    public function edit($params)
    {
        $id = $params['id'] ?? null;
        // inspect($id);

        $params = [
            'id' => $id
        ];

        $listing = $this->db->query("SELECT * FROM job_listings WHERE id = :id", $params)->fetch();

        //Check if listing exists
        if (!$listing) {
            ErrorController::notFound('Listing not found.');
            return;
        }

        //Check if user is authorized to edit
        if (!Authorization::isOwner($listing->user_id)) {
            // $_SESSION['error_message'] = 'You are not authorized to edit this listing.';
            Session::setFlashMessage('error_message', 'You are not authorized to edit this listing.');
            return redirect('/listings/' . $listing->id);
        }

        // inspectAndDie($listings);

        loadView('listings/edit', [
            'listing' => $listing
        ]);
    }

    /**
     * Update a listing
     * @param array $params
     * @return void
     */

    public function update($params)
    {
        $id = $params['id'] ?? null;
        // inspect($id);

        $params = [
            'id' => $id
        ];

        $listing = $this->db->query("SELECT * FROM job_listings WHERE id = :id", $params)->fetch();

        //Check if listing exists
        if (!$listing) {
            ErrorController::notFound('Listing not found.');
            return;
        }

        //Check if user is authorized to update
        if (!Authorization::isOwner($listing->user_id)) {
            // $_SESSION['error_message'] = 'You are not authorized to update this listing.';
            Session::setFlashMessage('error_message', 'You are not authorized to update this listing.');
            return redirect('/listings/' . $listing->id);
        }

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

        $updateValues = [];

        $updateValues = array_intersect_key($_POST, array_flip($allowedFields));

        $updateValues = array_map('sanitize', $updateValues);

        $requiredFields = [
            'title',
            'description',
            'city',
            'state',
            'email',
            'salary',
            'phone',
        ];

        $errors = [];
        $numberFields = ['salary', 'phone'];

        foreach ($requiredFields as $field) {
            if (empty($updateValues[$field]) || !Validation::string($updateValues[$field])) {
                $errors[$field] = ucfirst($field) . ' is required';
            } elseif ($field === 'email' && !Validation::email($updateValues[$field])) {
                //gunakan elseif sebab masih ada condition selepas if biasa
                $errors[$field] = 'Email is not valid';
            } elseif (in_array($field, $numberFields) && !Validation::number($updateValues[$field])) {
                $errors[$field] = ucfirst($field) . ' must be a number';
            }
        }

        if (!empty($errors)) {
            //Reload view with errors
            loadView('listings/edit', [
                'listing' => $listing,
                'errors' => $errors,
            ]);
            exit;
        } else {
            // inspectAndDie('success');

            $updateFields = [];
            // $field = field dalam db $ value = data dalam field tu

            foreach (array_keys($updateValues) as $field) {
                // inspect($field);
                $updateFields[] = "{$field} = :{$field}";
            }
            // inspect($updateFields);

            //array to string
            $updateFields = implode(', ', $updateFields);
            // inspectAndDie($updateFields);
            $updateQuery = "UPDATE job_listings SET $updateFields WHERE id = :id";
            // inspectAndDie($updateQuery);

            $updateValues['id'] = $id;
            $this->db->query($updateQuery, $updateValues);

            // $_SESSION['success_message'] = 'Listing updated successfully';
            Session::setFlashMessage('success_message', 'Listing updated successfully');

            redirect('/listings/' . $id);
        }

        // inspectAndDie($updateValues);
    }

    /**
     * Search listing by keywords/location
     * @return void
     */

    public function search()
    {
        // inspectAndDie($_GET);

        $keywords = isset($_GET['keywords']) ? trim($_GET['keywords']) : '';
        $location = isset($_GET['location']) ? trim($_GET['location']) : '';

        $query = "SELECT * FROM job_listings WHERE (title LIKE :keywords OR description LIKE :keywords
        OR tags LIKE :keywords OR company LIKE :keywords) AND
        (city LIKE :locations OR state LIKE :locations)";

        //keyword & location ni dalam partials showcase-search.php
        $params = [
            'keywords' => "%{$keywords}%",
            'locations' => "%{$location}%"
        ];

        $listings = $this->db->query($query, $params)->fetchAll();

        // inspectAndDie($listings);

        loadView('listings/index', [
            'listings' => $listings,
            'keywords' => $keywords,
            'location' => $location,
        ]);

    }

}
?>