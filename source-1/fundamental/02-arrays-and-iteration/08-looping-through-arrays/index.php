<?php
$names = ['John Doe', 'Matthew Thomas', 'Jose Ramirez', 'Mary Jane'];

$users = [
  ['name' => 'John', 'email' => 'john@email.com'],
  ['name' => 'Jane', 'email' => 'jane@email.com'],
  ['name' => 'Joe', 'email' => 'joe@email.com'],
  ['name' => 'Mary', 'email' => 'mary@email.com']
];


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
            <h3 class="mb-4 text-xl font-semibold">Using a for loop</h3>
            <ul class="mb-6">
                <?php  for ($i = 0; $i < count($names); $i++) : ?>
                <li><?= $names[$i]; ?></li>
                <?php endfor; ?>
            </ul>
            <h3 class="mb-4 text-xl font-semibold">Using a foreach loop</h3>
            <ul class="mb-6">
                <?php foreach ($names as $name) : ?>
                <li><?=  $name ?></li>
                <?php endforeach; ?>
            </ul>
            <h3 class="mb-4 text-xl font-semibold">Using a foreach loop with index</h3>
            <ul class="mb-6">
                <?php foreach ($names as $index => $name) : ?>
                <li><?=  $index . ': ' . $name ?></li>
                <?php endforeach; ?>
            </ul>
            <h3 class="mb-4 text-xl font-semibold">Using a foreach loop with associative array</h3>
            <ul class="mb-6">
                <?php foreach($users as $user) : ?>
                <li><?= $user['name'] . ': ' . $user['email'] ?></li>
                <?php endforeach; ?>
            </ul>
            <h3 class="mb-4 text-xl font-semibold">Getting key names and values from associative array</h3>
            <ul class="mb-6">
                <?php foreach($users as $user) : ?>
                <?php foreach($user as $key => $value) : ?>
                <li>
                    <?= $key . ': ' . $value ?>
                </li>
                <?php endforeach; ?>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</body>

</html>