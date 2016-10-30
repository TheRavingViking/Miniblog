<?php
include "header.php";

$con = new Connection();
$con = $con->connect();
$user =$_SESSION['user_id'];

$id= $_GET['id'];

if($_SESSION['isAdmin']=true){

    $con->query("delete from posts where posts.postID = '$id' AND '$user'");
    $message = "Record has been deleted";
    echo $message;
    echo '<br />';
    header('refresh:3; overview.php');

} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}

?>


