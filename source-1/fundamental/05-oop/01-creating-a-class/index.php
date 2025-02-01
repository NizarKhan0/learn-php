<?php

class User {

    //Properties
    public $name;
    public $email;

    //buat cpnstruct supaya boleh access walaupun luar class
    public function __construct($name, $email) {
        // echo 'Test constructor';

        //utk access properties
        $this->name = $name;
        $this->email = $email;
    }

    //Methods
    public function login() {
        echo $this->name . ' logged in <br>';
    }
}

// Instantiate a new object (ini pass dari constructur paramerter)
$user1 = new User('Nizar', '2i4q3@example.com');

// $user1->name = 'Nizar';
// $user1->email = '2i4q3@example.com';
$user1->login();
// var_dump($user1);

$user2 = new User('Roronoa', 'zoro@example.com');
// $user2->name = 'Roronoa';
$user2->login();
// var_dump($user2);

?>