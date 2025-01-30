<?php
/*
Fizzbuzz Challenge:
Write a program that prints the numbers from 1 to 100. But for multiples of three print “Fizz” instead of the number and for the multiples of five print “Buzz”. For numbers which are multiples of both three and five print “FizzBuzz”. Remember, you can use the modulus operator to check if a number is divisible by another number.
*/

// tips, sentiasa keluarkn output dulu utk test
for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 === 0 && $i % 5 === 0) {
        echo 'FizzBuzz';
    }
    elseif($i % 3 === 0){
        echo 'Fizz';
    } elseif ($i % 5 === 0) {
        echo 'Buzz';
    } else {
        echo $i;
    }
    echo '<br/>';
}

// $i = 6;

// Cara SALAH (tanpa === 0):
// if($i % 3) { // 6%3=0 → 0 = false
//     echo 'Bukan kelipatan 3'; // Tidak akan dieksekusi
// } else {
//     echo 'Kelipatan 3'; // Ini yang akan muncul
// }

// // Cara BENAR:
// if($i % 3 === 0) { // 0 === 0 → true
//     echo 'Kelipatan 3'; // Benar muncul
// }