<?php

// GUna request boleh juga , tapi better POST/GET sebab lebih jelas apa yg kita nak request sebenarnya

//declare variable sebgai empty dulu
  $title = '';
  $description = '';
  $submitted = false;

  if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_REQUEST['submit'])) {
    // var_dump($_POST);

    //htmlspecialchars mcm CSRF di laravel
    $title =  isset($_REQUEST['title']) ? htmlspecialchars($_REQUEST['title']) : '';
    $description = htmlspecialchars($_REQUEST['description'] ?? '');
    // echo $title, $description;

    $submitted = true;
  }

  //utk check apa yg direquest
  // echo $_SERVER['REQUEST_METHOD'];

  var_dump($_REQUEST);
?>
<form method="post">
    <div>
        <label for="name">Name:</label>
        <input type="text" name="name" id="name">
    </div>
    <div>
        <label for="age">Age:</label>
        <input type="text" name="age" id="age">
    </div>
    <input type="submit" name="submit" value="Submit">
</form>