<?php
$output = null;

$string = 'Hello World!';

//string length dia kira termasuk space,etc
$output = strlen($string);

//string word count
$output = str_word_count($string);

//string position macam kira array index mula dari [0,1,2,4]
$output = strpos($string, 'World');

//Get specific array index
$output = $string[4];

//substring return string from where you want
$output = substr($string, 6,5);

//string replace
$output = str_replace('World', 'Universe', $string);

//string to uppercase
$output = strtoupper($string);

//string to lowercase
$output = strtolower($string);

// ucwords
$output = ucwords($string);

//trim (bole tengok dekat property console web baru nampak apa yg berubah)
$output = trim('    Hello World!    ');


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>PHP From Scratch</title>
</head>

<body class="bg-gray-100">
  <header class="p-4 text-white bg-blue-500">
    <div class="container mx-auto">
      <h1 class="text-3xl font-semibold">PHP From Scratch</h1>
    </div>
  </header>
  <div class="container p-4 mx-auto mt-4">
    <div class="p-6 mt-6 bg-white rounded-lg shadow-md">
      <p class="text-xl"><?= $output ?></p>
    </div>
  </div>
</body>

</html>