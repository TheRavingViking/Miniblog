<?php
include "header.php";
$con = new Connection();
$con = $con->connect();

$comment = $_POST ['comment'];
$postID = $_POST ['postID'];
$userID = $_SESSION['user_id'];
$date = date("Y-m-d H:i:s");

$sql = "INSERT INTO `comments` (`commentID`, `postID`, `userID`, `comment`, `commentDate`) VALUES (NULL, '$postID', '$userID', '$comment', '$date')";


if ($con->query($sql) === TRUE) {
    echo "New record created successfully";
    header("refresh:1; viewpost.php?id=$postID");
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}
?>