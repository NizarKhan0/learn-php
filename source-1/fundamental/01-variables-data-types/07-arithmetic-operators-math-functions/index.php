<?php
/*
| Arithmetic Operators
| Operator | Description    |
| -------- | -------------- |
| `+`      | Addition       |
| `-`      | Subtraction    |
| `*`      | Multiplication |
| `/`      | Division       |
| `%`      | Modulus        |
*/

$output = null;

$num1 = 20;
$num2 = 7;

$output = "$num1 + $num2 = " . $num1 + $num2;
$output = "$num1 - $num2 = " . $num1 - $num2;
$output = "$num1 * $num2 = " . $num1 * $num2;
$output = "$num1 / $num2 = " . $num1 / $num2;
$output = "$num1 % $num2 = " . $num1 % $num2;

//Assigment Operators
$num3 = 10;
// $num3 = $num3 + 20;
// $num3 += 20;
// $num3 -= 20;
// $num3 *= 20;
// $num3 /= 2;
// $num3 %= 20;
// $output = $num3;

//Built-in PHP Math Functions
$output = rand();
$output = getrandmax();
$output = rand(1, 100);

//round() atas .5 keatas
$output = round(4.2);

//ceil()
$output = ceil(4.2);

//floor()
$output = floor(4.9);

//sqrt()
$output = sqrt(64);

//pi() function
$output = pi();

//abs() absolute value
$output = abs(-4.7);

//max() dapatkan list terbesar
$output = max(1, 2, 3, 4, 50);
$output = max([1, 2, 300, 4, 40]); //bentuk array

//min() dapatkan list terkecil
$output = min( 3, 4, 50);
$output = min([300, 4, 40]); //bentuk array

//bagus untuk currency
$output = number_format(1234578.83242, 2, '.', ',');

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
      <!-- Output -->
       <p class="text-xl"><?php echo $output; ?></p>
    </div>
  </div>
</body>

</html>