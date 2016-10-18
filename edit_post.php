<?php
include "header.php";
$con = new Connection();
$con = $con->connect();
$id = $_POST['postID'];
$title = $_POST ['postTitle'];
$desc = $_POST ['postDesc'];
$cont = $_POST ['postCont'];
$updateddate = date("Y-m-d H:i:s");

$sql = "UPDATE `posts` SET `postTitle` = '$title' , `postDesc` = '$desc' , `postCont` = '$cont'  WHERE `posts`.`postID` = '$id' ";


if ($con->query($sql) === TRUE) {
    echo "record updated successfully";
    header('refresh:5; overview.php');
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}
