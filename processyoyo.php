<?php
    session_start();
    $_SESSION['username'] = $_POST['username'];
    header("Location:index.php");
    require('yo.php');
    $apiKey = 'YOUR_SECRET_API_KEY';
    $yo = new Yo($apiKey);
    $yo->user($_SESSION['username']);
?>