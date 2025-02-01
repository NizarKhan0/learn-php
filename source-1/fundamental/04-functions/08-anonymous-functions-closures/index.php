<?php

//anonymous function
$square = function($number){
    return $number * $number;
};

$result = $square(5);

echo 'The square of 5 is: ' . $result . '<br>';

//Closures utk access variable function yg ada didalam function
function createCounter(){
    $count = 0;

    $counter = function() use (&$count) {
        return ++$count;
    };

    return $counter;
}

$counter = createCounter();

echo $counter() . '<br>';
echo $counter() . '<br>';
echo $counter() . '<br>';
echo $counter() . '<br>';
echo $counter() . '<br>';

?>