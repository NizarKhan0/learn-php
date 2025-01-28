<?php

//create array

//method 1
// $names = array('nizar', 'Roronoa', 'Zoro');

// method 2
// $names = ['nizar', 'Roronoa', 'Zoro'];

//access array
//Roronoa
// echo $names[1];


$names = array('nizar', 'Roronoa', 'Zoro');
$numbers = [1, 2, 3, 4, 5];

function inspect($value)
{
    echo '<pre>';
    var_dump($value);
    echo '</pre>';
    // die();
}

// inspect($names);
// inspect($numbers);

// print_r($names);

//show by array index
// echo $names[1];
// echo $numbers[3];

//Add element to array
// letak [] empty array kalau tak tau value lenght array
$numbers[] = 43;
$numbers[] = 90;

//tukar value array dari index
$numbers[4] = 100;

//remove value array
unset($numbers[5]);

//reset index array
$numbers = array_values($numbers);

inspect($numbers);

?>

<h1>Hello</h1>