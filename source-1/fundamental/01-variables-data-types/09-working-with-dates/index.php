<?php
$output = null;

/*
- 'Y' = The year
- 'm' = The month
- 'd' = The day
- 'D' = The day of the week short name
- 'l' = The full day of the week
- 'h' = The hour
- 'i' = The minutes
- 's' = The seconds
- 'a' = AM or PM
*/

// Get Current year
$output = date('Y');

//Get year with timestamp
$output = date('Y', 932329);

//Get year with timestamp & strtotime
$output = date('Y', strtotime('2001-01-01'));


//Get current month
$output = date('m');

//Get current day 
$output = date('D');
$output = date('d');
$output = date('l');

//Get date with format
$output = date('Y-m-d');
$output = date('d-m-Y');

//Get hour
$output = date('h');

//Get minutes
$output = date('i');

//Get seconds
$output = date('s');

//Get AM or PM
$output = date('a');

//Gabung semua
$output = date('Y-m-d h:i:s a');

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