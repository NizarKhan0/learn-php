<?php
session_start();

unset($_SESSION['name']);

session_destroy();

echo 'Session has been destroyed';
?>