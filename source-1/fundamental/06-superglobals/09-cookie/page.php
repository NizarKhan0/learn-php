<?php
var_dump($_COOKIE);
$username = $_COOKIE['username'] ?? 'Guest';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>PHP Cookies</title>
</head>

<body>
    <h1>Welcome <?php echo $username ?></h1>
    <a href="destroy.php">Delete cookie</a>
</body>

</html>