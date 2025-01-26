<?php 
  $firstName = 'Muhammad Yasnizar Khan';
  $lastName = 'Yaacob';

  $fullName = $firstName .' '. $lastName;
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Learn PHP From Scratch</title>
</head>

<body class="bg-gray-100">
  <header class="p-4 text-white bg-blue-500">
    <div class="container mx-auto">
      <h1 class="text-3xl font-semibold">Learn PHP From Scratch</h1>
    </div>
  </header>
  <div class="container p-4 mx-auto mt-4">
    <div class="p-6 bg-white rounded-lg shadow-md">
      <!-- Output -->
      <?= 'Hello, my name is '. $fullName . '<br/>'?>

      <?= "Hello, my name is {$fullName}"?>

      <?= "Hello, my name is \"Nizar\"" ?>
    </div>
  </div>
</body>

</html>