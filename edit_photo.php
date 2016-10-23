<?php
include "header.php";
$con = new Connection();
$con = $con->connect();
$id = $_POST['postID'];
$image = addslashes(file_get_contents($_FILES['image']['tmp_name']));

$sql = "UPDATE `posts` SET `image` = '$image'  WHERE `posts`.`postID` = '$id' ";


if ($con->query($sql) === TRUE) {
    echo "record updated successfully";
    header('refresh:5; overview.php');
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}
