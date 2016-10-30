<?php
include "header.php";
$con = new Connection();
$con = $con->connect();
$id = $_POST['postID'];
$title = mysqli_real_escape_string($con, $_POST ['postTitle']);
$desc = mysqli_real_escape_string($con, $_POST ['postDesc']);
$cont = mysqli_real_escape_string($con, $_POST ['postCont']);
$image = $_FILES['image']['tmp_name'];

$user_session =$_SESSION['user_id'];

$sql = "SELECT `user_id` FROM `posts` WHERE '$id'";
$result = mysqli_query($con, $sql);
$data = $result->fetch_array();
$user = $data['user_id'];

if($user_session==$user) {

    if (empty($image)) {

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
} else {

    echo "Error: You're not the owner of this post, ask the owner or Admin to delete this post";
    header('refresh:5; overview.php');

}