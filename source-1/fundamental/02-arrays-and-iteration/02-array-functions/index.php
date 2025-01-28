<?php
$output = null;

$ids = [1, 94, 81, 23, 54];
$users = ['user10', 'user21', 'user12'];

//count array
$output = count($ids);

//sort
sort($ids);
sort($users);

//rsort
rsort($ids);
rsort($users);

//The array_push() function inserts one or more elements to the end of an array.
array_push($ids, 100);
array_push($users, 'user100');

//The array_pop() function deletes the last element of an array.
array_pop($ids);
array_pop($users);

//The array_shift() function deletes the first(0) element of an array.
array_shift($ids);
array_shift($users);

//The array_unshift() function inserts one or more elements to the beginning of an array.
array_unshift($ids, 30);
array_unshift($users, 'user3');

//The array_slice() function returns selected parts of an array.
// /Note: If the array have string keys, the returned array will always preserve the keys
$ids2 = array_slice($ids, 2,3);
// var_dump($ids2);

//The array_splice()
array_splice($ids, 1, 1, 'New ID');
array_splice($users, 0, 1, 'New User');

//The array_sum() function returns the sum of all the values in the array.
// $output = 'Sum of IDs: ' . array_sum($ids);

//The array_search() function search an array for a value and returns the key.
$output = 'User 12 is at index: '. array_search('user12', $users);

array_push($users, 'user1');
// in_array
$output = 'User 1 Exists: ' . in_array('user1', $users);
// var_dump(in_array('user1', $users));

//explode 
$tags = 'web,php,javascript';
$tagsArray = explode(',', $tags);
// var_dump($tagsArray);

//implode
$output = implode(', ', $users);

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
            <p class="text-xl"><?= $output ?></p>
            <h2 class="my-4 text-xl font-semibold">IDs Array:</h2>
            <p>
                <pre>
                    <?php print_r($ids); ?>
                </pre>
            </p>

            <h2 class="my-4 text-xl font-semibold">Users Array:</h2>
            <p>
                <pre>
                    <?php print_r($users); ?>
                </pre>
            </p>
        </div>
    </div>
</body>

</html>