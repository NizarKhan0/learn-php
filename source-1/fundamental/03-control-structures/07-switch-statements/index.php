<?php
  $dayOfWeek = date('l');
  
  switch($dayOfWeek) {
    case 'Monday':
      $message = 'Monday Blues!';
      $color = 'blue';
      break;
    case 'Tuesday':
      $message = 'At least it\'s not Monday';
      $color = 'green';
      break;
    case 'Wednesday':
      $message = 'Hump Day!';
      $color = 'yellow';
      break;
    case 'Thursday':
      $message = 'Rock and Roll!';
      $color = 'green';
      break;
    case 'Friday':
      $message = 'pretty Friday!';
      $color = 'orange';
      break;
    case 'Saturday':
      $message = 'Saturday Night!';
      $color = 'purple';
      break;
    case 'Sunday':
      $message = 'Sunday Morning!';
      $color = 'pink';
      break;
  }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>What Day Is It?</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <style>
    body {
        font-family: 'Roboto', sans-serif;
        background-color: <?=$color ?>;
        color: white;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }
    </style>
</head>

<body>
    <h1><?= strtoupper($message)?></h1>
</body>

</html>