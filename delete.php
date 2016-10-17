<?php
include "header.php";
$con = new Connection();
$con = $con->connect();

if (isset($_POST) && count($_POST)>0)
foreach ($_POST as $key => $value) {
    $con->query("delete from posts where posts.postID = '$key'");

    $message = "Records have been deleted";
    echo $message;
    header('refresh:3; overview.php');

} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}

?>


