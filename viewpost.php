<?php
include "header.php";
$con = new Connection();
$con = $con->connect();
$id = $_GET['id'];
$query = "SELECT postID, postTitle, postCont, postDate FROM posts WHERE postID = '$id'";
$result = mysqli_query($con, $query);

foreach ($result as $rows) :

    echo $rows['postTitle'];
    echo '<br />';
    echo $rows['postCont'];
    echo '<br />';
    echo $rows['postDate'];
    echo '<br />';
echo '<hr />';

endforeach; ?>


<html>
<form method="post" action="insert.php">
    <input type="text" name="Comment" placeholder="place your comment here">
    <input type="submit">
</form>

</html>