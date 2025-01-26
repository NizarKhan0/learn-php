
<!-- PHP comments: -->
//single line comment
/*
multi line comment
*/

<!-- PHP tags: -->
1) <?php echo 'Learn PHP From Scratch';?>
    <br>
2) <?php print 'Learn PHP From Scratch';?>
    <br>
3) <?= 'Hello World From PHP';?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- <title>Learn PHP From Scratch</title> -->
    <title><?php echo 'Learn PHP From Scratch'; ?></title>
</head>

<body class="bg-gray-100">
    <header class="p-4 text-white bg-blue-500">
        <div class="container mx-auto">

            <!-- <h1 class="text-3xl font-semibold">Learn PHP From Scratch</h1> -->
            <h1 class="text-3xl font-semibold"><?= 'Learn PHP From Scratch 2025' ?></h1>

        </div>
    </header>
    <div class="container p-4 mx-auto mt-4">
        <div class="p-6 bg-white rounded-lg shadow-md">

            <!-- <h2 class="mb-4 text-2xl font-semibold">Welcome To The Course</h2> -->
            <h2 class="mb-4 text-2xl font-semibold"><?='Welcome To The Course'; ?></h2>

            <!-- <p>In this course, you will learn the fundamentals of the PHP language</p> -->
            <p><?php echo 'In this course, you will learn the fundamentals of the PHP language'; ?></p>
            
        </div>
    </div>
</body>

</html>