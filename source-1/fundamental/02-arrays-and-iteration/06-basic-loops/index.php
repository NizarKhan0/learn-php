<?php

//basic for loop
// for($i = 0; $i <= 10; $i++) {
//     echo $i . '<br/>';
// }

//basic while loop
// $i = 0;

// while($i < 10) {
//     echo $i . '<br/>';
//     $i++;
// }

//basic do while loop
// $i = 0;

// do {
//     echo $i . '<br/>';
//     $i++;
// } while ($i < 10);
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
            <!-- <ul>
                <?php for ($i = 0; $i <= 10; $i++) : ?>
                    <li>Number: <?= $i; ?></li>
                <?php endfor; ?>
            </ul> -->

            <!-- <ul>
                <?php $i = 0;
                while ($i < 10) : ?>
                    <li>Number: <?= $i; ?></li>
                <?php $i++;
                endwhile; ?>
            </ul> -->

            <ul>
                <?php $i = 0; do { ?>
                    <li>Number: <?= $i; ?></li>
                <?php $i++;
                } while ($i < 10); ?>
            </ul>
            
        </div>
    </div>
</body>

</html>