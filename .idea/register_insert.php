<?php

if (isset($_POST['username'])) {
    $con = new Connection();
    $con = $con->connect();
    $username = $_POST ['username'];
    $password = $_POST ['password'];
    $sql = "INSERT INTO `members` (`user_ID`, `username`, `password`) VALUES (NULL, '$username', '$password')";
    echo "Registered successfully";
    header('refresh:5; login.php');
} else {
    echo "Error";
}


?>