<?php
$id = $_GET['id'];
?>


<html>
<form method="post" action="edit_post.php">
    <input type="text" name="postTitle" placeholder="Post Title">
    <input type="text" name="postDesc" placeholder="Post Description">
    <input type="text" name="postCont" placeholder="Post Content">
    <input type="hidden" name="postID" value="<?php echo $id; ?>">
    <input type="submit">
</form>

</html>

