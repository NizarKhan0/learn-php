<?php

/*
Names Challenge:
1. Take the array of names below and loop through them. The type of loop is up to you.
2. Within the loop, use a conditional statement to check if the first letter of the name is 'A'.
3. If the first letter is 'A', skip that name and continue to the next iteration.
4. If the first letter is not 'A', reverse the string.
5. Make all names lowercase before printing them.
*/

$names = ['Alex', 'Beth', 'Caroline', 'Dave', 'Elanor', 'Anna', 'Freddie', 'Adam'];



// #ini solution cara aku

// 1) foreach loop
foreach ($names as $name) {

    // 2) loop first letter "A"
    // macam mana nak tau dia huruf pertama tu dia bermula dari index macam dekat array biasa tu
    if($name[0] === 'A') {
        // 3) skip name iteration yg first letter dia "A"
        continue;
    }else{
        // 4)set ke reverse string
        $name = strrev($name);
    }

    // 5) set ke lowercase
    echo strtolower($name ). '<br>';
}

?>