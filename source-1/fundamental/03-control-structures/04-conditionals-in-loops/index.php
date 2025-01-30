<?php

$number = 1;

while($number <= 10 ){
    if($number % 2 == 0){
        echo $number . ' is even <br>';
    }else{
        echo $number . ' is odd <br>';
    }

    $number++;
}

//Break out of loop
for ($i = 0; $i <= 10; $i++){
    if($i == 5){
        break;
    }
    
    echo $i . '<br>';
}

///skip and continue
for ($i = 0; $i <= 10; $i++){
    if($i == 5){
        continue;
    }
    
    echo $i . '<br>';
}

$studentGrades = array(
    'Nizar' => 95,
    'Jane' => 82,
    'Bob' => 78,
    'John' => 56,
);

foreach ($studentGrades as $name => $grade) {
    if ($grade >= 90) {
        echo $name . ' has an excellent grade <br>';
    }
}


?>