<?php

/*
  Challenge 1: Create a multiplication table using a nested `for` loop. The table should look like this:

1 x 1 = 1
1 x 2 = 2
1 x 3 = 3
1 x 4 = 4
1 x 5 = 5
1 x 6 = 6
1 x 7 = 7
1 x 8 = 8
1 x 9 = 9
1 x 10 = 10
2 x 1 = 2
2 x 2 = 4
2 x 3 = 6
2 x 4 = 8
... 
10 x 10 = 100
*/
echo '<h3>Multiplication Table</h3>';

//untuk darab sampai sifir berapa
for ($i = 1; $i <= 10; $i++){
  // untuk sampai total berapa kalau darab maksudnya macam total akhir jawapan yg kita nak stop'
  // macam kat atas tu dia nak last 10 x 10 = 100
  for ($j = 1; $j <= 10; $j++){
    echo $i . ' x ' . $j . ' = ' . $i * $j . '<br>';
  }
}

/*
Challenge 2: Get the sum of the numbers in an array by using a foreach loop. For bonus points, also use a for loop.
*/

echo '<h3>Array Sum</h3>';

$numbers = [1, 2, 3, 4, 5];

// foreach loop
$sum = 0;
foreach ($numbers as $number) {
  $sum += $number;
}
echo $sum;

echo '<br>';

//for loop
$sum2 = 0;
for ($i = 0; $i < count($numbers); $i++) {
  $sum2 += $numbers[$i];
}
echo $sum2;

/*
Challenge 3: Calculate the average students grade from an array of students. Each student has their own array with the
key 'grades'.

1. Create an array of students with their names and grades (0 - 100)
2. Iterate over the students array with a foreach loop
3. Calculate the average grade for each student
*/

echo '<h3>Average Grade</h3>';

// 1)Create an array of students
$students = [
  [
    'name' => 'Nizar',
    'grades' => [90, 80, 85]
  ],
  [
    'name' => 'Jane',
    'grades' => [95, 92, 88]
  ],
  [
    'name' => 'John',
    'grades' => [80, 85, 90]
  ],
];

//2) Iterate over the students array with a foreach loop
foreach ($students as $student) {
  $name = $student['name'];
  $grades = $student['grades'];

  //3) Calculate the average grade for each student
  $averageGrade = array_sum($grades) / count($grades);

  echo "$name - Average Grade = $averageGrade <br>";
}