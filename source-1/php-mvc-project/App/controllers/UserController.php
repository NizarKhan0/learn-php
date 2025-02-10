<?php

namespace App\Controllers;

use Framework\Database;
use Framework\Validation;
use Framework\Session;

class UserController
{

    protected $db;

    public function __construct()
    {
        $config = require basePath('config/db.php');
        $this->db = new Database($config);
    }

    /**
     * Show the login form
     * 
     * @return void
     */

    public function login()
    {
        //auto fill form login for demo
        $user = [
            'email' => 'admin@demo.com',
            'password' => 'password',
        ];

        loadView('users/login', [
            'user' => $user
        ]);
    }

    /**
     * Show the registration form
     * 
     * @return void
     */

    public function create()
    {
        loadView('users/create');
    }

    /**
     * Store a new user in the database
     * @return void
     */
    public function store()
    {

        $name = $_POST['name'];
        $email = $_POST['email'];
        $city = $_POST['city'];
        $state = $_POST['state'];
        $password = $_POST['password'];
        $passwordConfirmation = $_POST['password_confirmation'];

        $errors = [];

        //Validation 
        if (!Validation::email($email)) {
            $errors['email'] = 'Please enter a valid email address';
        }

        if (!Validation::string($name, 1, 25)) {
            $errors['name'] = 'Name must be between 1 and 25 characters';
        }

        if (!Validation::string($password, 6, 25)) {
            $errors['password'] = 'Password must be at least 6 characters';
        }

        if (!Validation::matches($password, $passwordConfirmation)) {
            $errors['password_confirmation'] = 'Passwords do not match';
        }


        if (!empty($errors)) {
            loadView('users/create', [
                'errors' => $errors,
                'user' => [
                    'name' => $name,
                    'email' => $email,
                    'city' => $city,
                    'state' => $state,
                ]
            ]);
            exit;
        }

        //Check if email already exists
        $params = [
            'email' => $email,
        ];

        $user = $this->db->query('SELECT * FROM users WHERE email = :email', $params)->fetch();
        // inspectAndDie($user);

        if ($user) {
            $errors['email'] = 'Email already exists';
            loadView('users/create', [
                'errors' => $errors,
                'user' => [
                    'name' => $name,
                    'city' => $city,
                    'state' => $state,
                ]
            ]);
            exit;
        }

        //Create user account to database
        $params = [
            'name' => $name,
            'email' => $email,
            'city' => $city,
            'state' => $state,
            'password' => password_hash($password, PASSWORD_DEFAULT),
        ];

        $this->db->query('INSERT INTO users (name, email, city, state, password)
        VALUES (:name, :email, :city, :state, :password)', $params);

        //Get new user ID
        $userId = $this->db->conn->lastInsertId();

        //Set user session
        Session::set('user', [
            'id' => $userId,
            'name' => $name,
            'email' => $email,
            'city' => $city,
            'state' => $state,
        ]);

        // inspectAndDie(Session::get('user'));

        //Redirect to login page
        redirect('/');

    }

    /**
     * Logout the current user and kill session
     * 
     * @return void
     */
    public function logout()
    {
        Session::clearAll();

        $params = session_get_cookie_params();
        setcookie(
            'PHPSESSID',
            '',
            time() - 86400,
            $params['path'],
            $params['domain'],
            $params['secure'],
            $params['httponly']
        );
        redirect('/');
    }

    /**
     * Authenticate a user with email and password
     * 
     * @return void
     */

    public function authenticate()
    {
        // inspectAndDie('login');

        $email = $_POST['email'];
        $password = $_POST['password'];

        $errors = [];

        //Validation 
        if (!Validation::email($email)) {
            $errors['email'] = 'Please enter a valid email address';
        }

        if (!Validation::string($password, 6, 15)) {
            $errors['password'] = 'Password must be at least 6 characters';
        }

        //check errors
        if (!empty($errors)) {
            loadView('users/login', [
                'errors' => $errors,
                'user' => [
                    'email' => $email,
                ]
            ]);
            exit;
        }

        //check for email
        $params = [
            'email' => $email,
        ];

        $user = $this->db->query('SELECT * FROM users WHERE email = :email', $params)->fetch();

        if (!$user) {
            $errors['email'] = 'Incorrect Credentials';
            loadView('users/login', [
                'errors' => $errors,
                'user' => [
                    'email' => $email,
                ]
            ]);
            exit;
        }

        //check for password
        if(!password_verify($password, $user->password)) {
            $errors['password'] = 'Incorrect Credentials';
            loadView('users/login', [
                'errors' => $errors,
                'user' => [
                    'email' => $email,
                ]
            ]);
            exit;
        }

        //Set user session
        Session::set('user', [
            'id' => $user->id,
            'name' => $user->name,
            'email' => $user->email,
            'city' => $user->city,
            'state' => $user->state,
        ]);

        // inspectAndDie(Session::get('user'));

        redirect('/');
    }
}

?>