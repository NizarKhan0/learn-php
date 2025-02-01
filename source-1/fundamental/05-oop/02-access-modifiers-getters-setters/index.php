<?php

class User
{
  // Properties
  //public boleh diakses di luar class
  public $name;
  public $email;
  //private hanya boleh diakses di dalam class
  // private $status = 'active';
  //protected hanya boleh diakses di dalam class dan turunan class
  protected $status = 'active';

  public function __construct($name, $email)
  {
    $this->name = $name;
    $this->email = $email;
  }

  // Methods
  public function login()
  {
    echo $this->name . ' logged in <br>';
  }

  //Getter
  public function getStatus()
  {
    echo $this->status;
  }

  //Setter
  public function setStatus($status)
  {
    $this->status = $status;
  }
}

// Instantiate a new object
$user1 = new User('John Doe', 'john@gmail.com');

$user1->login();

$user2 = new User('Jane Doe', 'jane@gmail.com');

$user2->login();

$user2->setStatus('inactive');
$user2->getStatus();

// var_dump($user2);