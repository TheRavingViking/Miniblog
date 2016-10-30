<?php
include "header.php";
$con = new Connection();
$con = $con->connect();
$id = $_GET['id'];
$query = "SELECT postID, postTitle, postCont, postDate, image FROM posts WHERE postID = '$id'";
$result = mysqli_query($con, $query);


foreach ($result as $rows) :

    echo $rows['postTitle'];
    echo '<br />';
    echo $rows['postCont'];
    echo '<br />';
    echo $rows['postDate'];
    echo '<br />';
    if (!empty($rows['image'])) {
        echo '<img src="data:image;base64,' . base64_encode($rows['image']) . '" class="img-thumbnail" width="720"/>';
    }
    else {
    }

    echo '<br />';
echo '<hr />';

endforeach;



?>


<html>
<form method="post" action="comment.php">
    <input type="text" name="comment" placeholder="place your comment here">
    <input type="hidden" name="postID" value="<?php echo $id; ?>">
    <input type="submit">
    <hr />
</form>

</html>


<?php
$con = new Connection();
$con = $con->connect();
$sql = "SELECT comments.commentID, comments.userID, comments.comment, comments.commentDate, members.username FROM comments inner join members on comments.userID = members.user_id WHERE postID = '$id' ORDER BY commentDate DESC";
$result2 = mysqli_query($con, $sql);


foreach ($result2 as $row) :

    echo $row['comment'];
    echo '<br />';
    echo "Posted on " .  $row['commentDate'] . " by " . $row['username'];
    echo '<br />';
    echo '<hr />';

endforeach;

?>
