<?php
include "header.php";
$con = new Connection();
$con = $con->connect();
$user_id=$_SESSION['user_id'];
$title = mysqli_real_escape_string($con, $_POST ['postTitle']);
$desc = mysqli_real_escape_string($con, $_POST ['postDesc']);
$cont = mysqli_real_escape_string($con,$_POST ['postCont']);
$date = date("Y-m-d H:i:s");
if(!empty($_FILES['image']['tmp_name'])
        && file_exists($_FILES['image']['tmp_name'])) {
        $image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
} else {
    $image = null;
}



$sql = "INSERT INTO `posts` (`postID`, `postTitle`, `postDesc`, `postCont`, `postDate`, `image`, `user_id`) VALUES (NULL, '$title', '$desc', '$cont', '$date', '$image', '$user_id')";


if ($con->query($sql) === TRUE) {
        echo "New record created successfully";
        header('refresh:5; overview.php');
    } else {
    echo "Error: " . $sql . "<br>" . $con->error;
}
