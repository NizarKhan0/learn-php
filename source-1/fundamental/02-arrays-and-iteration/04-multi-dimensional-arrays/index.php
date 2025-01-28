<?php
$output = null;

$fruits = [
  ['Apple', 'Banana', 'Orange'],
  ['Strawberry', 'Blueberry', 'Raspberry'],
  ['Pineapple', 'Mango', 'Lemon']
];


$output = $fruits[0][1];

$fruits[] = ['Peach', 'Grape', 'Watermelon'];

$users = [
  ['name' => 'John', 'email' => 'jC6fV@example.com'],
  ['name' => 'Jane', 'email' => 'jane@email.com'],
  ['name' => 'Joe', 'email' => 'joe@email.com'],
  ['name' => 'Mary', 'email' => 'mary@email.com']
];

//add user
$users[] = ['name' => 'Nizar', 'email' => 'nizar@email'];

//guna array push
array_push($users, ['name' => 'Roronoa', 'email' => 'roronoa@email']);

//remove user last added
array_pop($users);
//remove user first added
array_shift($users);

//remove specific user
unset($users[2]);

$output = $users[3]['email'];
//count array
$output = count($users);

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
    <header class="bg-blue-500 text-white p-4">
        <div class="container mx-auto">
            <h1 class="text-3xl font-semibold">PHP From Scratch</h1>
        </div>
    </header>
    <div class="container mx-auto p-4 mt-4">
        <div class="bg-white rounded-lg shadow-md p-6 mt-6">
            <!-- Output -->
            <p class="text-xl"><?= $output ?></p>
            <p>
            <pre>
                <?php print_r($users); ?>
              </pre>
            </p>
        </div>
    </div>
</body>

</html>