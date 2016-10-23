<?php
include "header.php";
$con = new Connection();
$con = $con->connect();
$id = $_POST['postID'];
$title = $_POST ['postTitle'];
$desc = $_POST ['postDesc'];
$cont = $_POST ['postCont'];
$updateddate = date("Y-m-d H:i:s");
$image = addslashes(file_get_contents($_FILES['image']['tmp_name']));

$sql = "UPDATE `posts` SET `postTitle` = '$title' , `postDesc` = '$desc' , `postCont` = '$cont' , `image` = '$image'  WHERE `posts`.`postID` = '$id' ";


if ($con->query($sql) === TRUE) {
    echo "record updated successfully";
    header('refresh:5; overview.php');
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}
