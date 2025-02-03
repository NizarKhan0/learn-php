<?php
    session_start();

    $_SESSION['name'] = 'Nizar';

    if(isset($_SESSION['name'])) {
        echo 'Name: ' . $_SESSION['name'];
    }else {
        echo 'Name is not set';
    }

    // print_r($_SESSION);
?>