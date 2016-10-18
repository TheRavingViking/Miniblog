<?php include 'connection.php';

session_start();

if(!isset($_SESSION['username'])){
    header("location:login.php");
}


?>



<!DOCTYPE html>
<html>

<body>
<header>

    <div>
        <a class="header-button" href="overview.php"> overview </a>
        <a class="header-button" href="add_post_form.php">add posts </a>
        <a class="header-button" href="logout.php">logout </a>
    </div>
</header>
