<?php
include "header.php";
$con = new Connection();
$con = $con->connect();
$id = $_GET['postID'];
$query = "SELECT postID, postTitle, postCont, postDate FROM posts WHERE postID = '&$id&'";
echo $query;
$result = mysqli_query($con, $query);

if (mysqli_num_rows($result) > 0) {

    while ($row = mysqli_fetch_assoc($result)) {
    }
}
?>
s