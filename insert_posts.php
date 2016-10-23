<?php
include "header.php";
$con = new Connection();
$con = $con->connect();

$title = $_POST ['postTitle'];
$desc = $_POST ['postDesc'];
$cont = $_POST ['postCont'];
$date = date("Y-m-d H:i:s");
$image = addslashes(file_get_contents($_FILES['image']['tmp_name']));

$sql = "INSERT INTO `posts` (`postID`, `postTitle`, `postDesc`, `postCont`, `postDate`, `image`) VALUES (NULL, '$title', '$desc', '$cont', '$date', '$image')";


if ($con->query($sql) === TRUE) {
        echo "New record created successfully";
        header('refresh:5; overview.php');
    } else {
    echo "Error: " . $sql . "<br>" . $con->error;
}
