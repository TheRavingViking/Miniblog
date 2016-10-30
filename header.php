<?php include 'connection.php';

session_start();

if(!isset($_SESSION['username'])){
    header("location:login.php");
}


?>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



<!DOCTYPE html>
<html>

<body>
<header>
    <body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="overview.php"">Miniblog</a>
            </div>
            <ul class="nav navbar-nav">
                <li class="active"><a href="overview.php">Home</a></li>
                <li><a href="add_post_form.php">Add Post</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </div>
    </nav>
</header>
