<?php
include "header.php";
$con = new Connection();
$con = $con->connect();

$sql = 'SELECT postID, postDesc, postTitle, postDate FROM posts ORDER BY postDate DESC';
$result = mysqli_query($con, $sql);
?>
<html>
<form method="post" action="delete.php">
<table>
    <tr>
        <th>Title</th>
        <th>Description</th>
        <th>Date</th>
        <th>Delete</th>
        <th>more info</th>
        <th>Edit Post</th>
    </tr>

    <?php foreach ($result as $rows) : ?>
        <div
        <tr>
            <td> <?php echo $rows['postTitle']; ?></td>
            <td> <?php echo $rows['postDesc']; ?></td>
            <td> <?php echo $rows['postDate']; ?></td>
            <td> <input type="checkbox" name="<?php echo $rows['postID']; ?>"></td>
            <td> <a href="viewpost.php?id=<?php echo $rows['postID'];?>" >Read More</a> </td>
            <td> <a href="edit_post_form.php?id=<?php echo $rows['postID'];?>" >Edit Post</a> </td>
        </tr>
    <?php endforeach; ?>

</table>
    <button>submit</button>
</form>
</html>