<?php
/*
  Challenge 1: Fahrenheit to Celsius
  Create a function called `fahrenheitToCelsius` that takes a Fahrenheit temperature as an argument. Return the temperature converted to Celsius.

  The formula to convert Fahrenheit to Celsius is: Celsius = (Fahrenheit - 32) * 5/9
*/

//Solution 1
function fahrenheitToCelsius($f)
{
    $c = ($f - 32) * 5 / 9;
    return $c;
}

$degToConvert = 68;

echo $degToConvert . '&degF = ' . fahrenheitToCelsius($degToConvert) . '&degC';

// echo '<br>';

//Solution 2 arrow function
// $fahrenheitToCelsius = function ($f) {
//     $c = ($f - 32) * 5 / 9;
//     return $c;
// };

// $degToConvert = 68;

// echo $degToConvert . '&degF = ' . $fahrenheitToCelsius($degToConvert) . '&degC';


// echo '<br>';

// Solution 3 closure
// $baseTemp = 32;

// $fahrenheitToCelsius = function ($f) use ($baseTemp) {
//   return ($f - $baseTemp) * 5 / 9;
// };

// $degToConvert = 68;

// echo $degToConvert . '&degF = ' . $fahrenheitToCelsius($degToConvert) . '&degC';

echo '<br>';


/*
  Challenge 2: Print names in uppercase
  Create a function called `printNamesToUpperCase` that takes an array of names as an argument. The function should loop through the array and print each name to the screen in uppercase letters.
*/

  //create array untuk simpan nama
  $names = ['Nizar', 'Luffy', 'Zoro', 'Shari'];
  // var_dump($names);
  function printNamesInUppercase($names)
  {
    foreach($names as $name){
      $uppercaseName = strtoupper($name);
      echo $uppercaseName . '<br>';

    }
  }

  echo printNamesInUppercase($names);

echo '<br>';

/*
  Challenge 3: Find the longest word
  1. Create a function called `findLongestWord` that takes a sentence as an argument.
  2. The function should return the longest word in the sentence.
  3. The output should look like this:
*/


$sentence = 'The quick brown fox jumped over the lazy dog';

function findLongestWord($sentence)
{
  //Split the sentence into an array of words
  $words = explode(' ', $sentence);
  //initialize longest word variable
  $longestWord = '';

  foreach($words as $word){
    //trim the word to remove any whitespace
    $word = trim($word);
    //check if the current word is longer than the longest word
    if(strlen($word) > strlen($longestWord) || $longestWord === ''){
      $longestWord = $word;
    }
  }

  return $longestWord;
}

$longestWord = findLongestWord($sentence);
echo $longestWord;

?>