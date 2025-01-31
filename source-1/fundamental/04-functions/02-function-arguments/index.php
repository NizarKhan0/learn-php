<?php

//function with arguments ($a, $b) parameter dan arguments tu value yg kita paass (1, 2)
function add($a, $b){
    return $a + $b;
}

echo add(1, 2);
echo "<br>";
echo add(376, 288);
echo "<br>";
// echo add()(kena initialize teru value dalam parameter tu);

function sayHello($name){
    return 'Hello' . $name;
}

echo sayHello('Nizar');

echo "<br>";

function addAll(...$numbers){
    $total = 0;

    foreach($numbers as $number){
        $total += $number;
    }

    return $total;
}

echo addAll(1,2,5,7);

?>