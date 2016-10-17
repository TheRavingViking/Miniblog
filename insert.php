<?php
include "header.php";
$con = new Connection();
$con = $con->connect();

$title = $_POST ['postTitle'];
$desc = $_POST ['postDesc'];
$cont = $_POST ['postCont'];
$date = date("Y-m-d H:i:s");

$sql = "INSERT INTO `posts` (`postID`, `postTitle`, `postDesc`, `postCont`, `postDate`) VALUES (NULL, '$title', '$desc', '$cont', '$date')";


if ($con->query($sql) === TRUE) {
        echo "New record created successfully";
        header('refresh:5; overview.php');
    } else {
    echo "Error: " . $sql . "<br>" . $con->error;
}
