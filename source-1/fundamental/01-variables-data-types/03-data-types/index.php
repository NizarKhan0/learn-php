<?php

/*
  PHP DATA TYPES:

- String
- Integer
- Float
- Boolean
- Array
- Object
- NULL
- Resource
*/

//String
$name = 'Nizar Khan';
$name2 = "Roronoa Zoro";

//untuk debug
var_dump($name);
echo getType($name2);
echo '<br/>';

//Integer
$age = 20;
var_dump($age);
echo '<br/>';

//Float
$rating = 4.5;
var_dump($rating);
echo '<br/>';

//Boolean
$isApproved = true;
var_dump($isApproved);
echo '<br/>';

//Array
$colors = ['red', 'green', 'blue'];
var_dump($colors);
echo '<br/>';

//Object
$person = new stdClass();
// $person->name = 'Nizar';
var_dump($person);
echo '<br/>';

//NULL
$car = null;
var_dump($car);
echo '<br/>';

//Resource
$file = fopen('sample.txt', 'r');
var_dump($file);
echo '<br/>';