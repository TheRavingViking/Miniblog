<?php
include "header.php";
$con = new Connection();
$con = $con->connect();
$id = $_POST['postID'];
$title = mysqli_real_escape_string($con, $_POST ['postTitle']);
$desc = mysqli_real_escape_string($con, $_POST ['postDesc']);
$cont = mysqli_real_escape_string($con, $_POST ['postCont']);
$image = $_FILES['image']['tmp_name'];


if (empty($image)){

    $sql = "UPDATE `posts` SET `postTitle` = '$title' , `postDesc` = '$desc' , `postCont` = '$cont'  WHERE `posts`.`postID` = '$id' ";

} else {

    $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
    $sql = "UPDATE `posts` SET `postTitle` = '$title' , `postDesc` = '$desc' , `postCont` = '$cont' , `image` = '$image'  WHERE `posts`.`postID` = '$id' ";

}


if ($con->query($sql) === TRUE) {
    echo "record updated successfully";
    header('refresh:5; overview.php');
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}
