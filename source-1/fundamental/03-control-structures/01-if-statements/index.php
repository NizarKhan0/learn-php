<?php

$age = 17;


// If statement

if($age >=18){
    echo 'You are old enough to vote';
};

echo '<br>';

// If-Else
if($age >=21){
    echo 'You are old enough to vote';
}else{
    echo 'You are NOT old enough to vote';
}

echo '<br>';

// Nested if statement
if($age >=21){
    echo 'You are old enough to drink and vote';
}else{
    if($age >=18){
        echo 'You are old enough to vote';
    }else{
        echo 'You are NOT old enough to drink or vote';
    }
}

echo '<br>';

// If-Else-If
if($age >=21){
    echo 'You are old enough to drink and vote';
}else if ($age >=18){
    echo 'You are old enough to vote';
}else{
    echo 'You are NOT old enough to drink or vote';
}

?>