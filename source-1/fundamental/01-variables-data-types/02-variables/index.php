<?php
/*
VARIABLE RULES:
- All variables are prefixed with a dollar sign ($).
- They must start with a letter or an underscore.
- They cannot start with a number.
- They can only contain letters, numbers, and underscores.
- They are case sensitive. So, `$name` and `$Name` are two different variables.
*/

/*
CONVENTIONS:
- Underscores: $server_name
- Camel Case: $serverName
- Pascal Case: $ServerName
- lowercase: $servername
*/

$title = 'Learn PHP From Scratch - Variables';
$heading = 'Welcome To The Course';
$body = 'In this course, you will learn the fundamentals of the PHP language';
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title><?= $title ?></title>
</head>

<body class="bg-gray-100">
    <header class="p-4 text-white bg-blue-500">
        <div class="container mx-auto">
            <h1 class="text-3xl font-semibold"><?= $title ?></h1>
        </div>
    </header>
    <div class="container p-4 mx-auto mt-4">
        <div class="p-6 bg-white rounded-lg shadow-md">
            <h2 class="mb-4 text-2xl font-semibold"><?= $heading ?></h2>
            <p><?= $body ?></p>
        </div>
    </div>
</body>

</html>