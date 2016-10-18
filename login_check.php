<?php
include "session.php";
include "header.php";

//print_r($_POST);

if(isset($_POST['submit'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($user->login($username, $password)) {

//logged in return to index page
        echo "logged in!";
        header('Location: overview.php');
        exit;


    } else {
        $message = '<h1>Wrong username or password</h1>';
    }
}

?>
