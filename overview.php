<?php
include "header.php";

$con = new Connection();
$con = $con->connect();
$sql = "SELECT postID, postDesc, postTitle, postDate FROM posts ORDER BY postDate DESC";

$result = mysqli_query($con, $sql);


?>


<html>
<form method="post" action="delete.php">
<table class="table table-hover">
    <thead>
    <tr>
        <th>Title</th>
        <th>Description</th>
        <th>Date</th>
        <th>More info</th>
        <th>Edit Post</th>
        <th>Delete</th>
    </tr>
</thead>

    <tbody>
    <?php foreach ($result as $rows) : ?>
        <tr>
            <td> <?php echo $rows['postTitle']; ?></td>
            <td> <?php echo $rows['postDesc']; ?></td>
            <td> <?php echo $rows['postDate']; ?></td>
            <td> <a href="viewpost.php?id=<?php echo $rows['postID'];?>" >Read More</a> </td>
            <td> <a href="edit_post_form.php?id=<?php echo $rows['postID'];?>" >Edit Post</a> </td>
            <td> <a href="delete.php?id=<?php echo $rows['postID'];?>" >Delete</a> </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
</form>
