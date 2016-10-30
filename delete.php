<?php
include "header.php";
$user_session =$_SESSION['user_id'];
$id = $_GET['id'];
$con = new Connection();
$con = $con->connect();
$sql = "SELECT `user_id` FROM `posts` WHERE '$id'";
$result = mysqli_query($con, $sql);
$data = $result->fetch_array();
$user = $data['user_id'];

if($user_session==$user){

    $con->query("delete from posts where posts.postID = '$id'");
    $message = "Record has been deleted";
    echo $message;
    echo '<br />';
    header('location: overview.php');

} else {
    echo "Error: You're not the owner of this post, ask the owner or Admin to delete this post";
    header('refresh:5; overview.php');
}

//?>


